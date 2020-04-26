<?php
	session_start();
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="IdDocSty.css">
		<style>
			.Rqbutton{
		position:relative;
		left:900px;
		top:-130px;
		border: none;
   border: 2px solid #000;
    background: #00D4FF;
	width:100px;
	
    outline: none;
    height: 25px;
	color: #000;
    font-size: 16px;
	padding-left: 25px;
	padding-top: 2px;
	padding-right: 30px;
	padding-bottom: 2px;
	margin-left:50px;
	border-radius: 16px;

}

		
		</style>
		
	</head>
	
	
	<body>
		<form method="POST">
	
		<div style="position:absolute; left:300px; top:30px; width:1100px;">
			
				<?php
				
				$id="";
				
				
				require_once "../Model/db_connect.php";
				
				if(isset($_GET['id'])){
						$id = $_GET['id'];
					}
					
					
				
				if(isset($_GET['sl'])){
						$d= $_GET['sl'];
						
						$qer="select id from schedule where sl=$d";
						$g=gettwo($qer);
						
						$k= $g[0];
						$f= $k[id];
						header("Location:PatientList.php?id=$f");
						
						$qu="DELETE FROM schedule WHERE sl=$d";
						execute($qu);
						
						
						
				}
				

				
					if(!isset($_SESSION['loggedinuser']))
					{
						header("Location:hos.php");
					}
	
				
										
					
					
					
					
					$query="SELECT * FROM schedule WHERE id=$id";
					
					$list= gettwo($query);
					
					
					
					
					foreach($list as $ls){
						echo "<div style='color:#000; transition: 0.5s ease; font-size:17px;'>";
						echo "Name: ";
						echo " $ls[patname]; <br><br>";
					
						echo "Email: ";
						echo "$ls[email];<br><br> ";
						echo "Appointment Date: ";
						echo "$ls[date]  $ls[month], $ls[year]; <br><br>";
						echo "Time: ";
						echo "$ls[time]<br><br><hr><hr>";
						
						echo "<a href='PatientList.php?sl=$ls[sl]' class='Rqbutton'>  Delete </a> ";
						echo "</div>";
						
						
						
					}
					
					if(isset($_POST['close'])){
						
						header("Location:IdDoc.php?id=$id");
						
					}
						
					
					
					
				?>
				
				
			</div>
			
			<div style="position:absolute; top:30px; left:1450px">
				<input type="submit" value="X" name="close">
			
			</div>
			
		
			
					
	
				

		
		<div class="Sidenav" >
	
			<nav>
				
				
				
				<ul>
					<li><a class="active" href="hos.php">Home</a></li>
					<li><a href="#">News</a></li>
					<li><a href="#">Contact us</a></li>
					<li><a href="#">About</a></li>
					<li><a href="Logout.php"> Log Out</a></li>
				
				</ul>

	
			</nav>

		</div>
		</form>
	</body>

	

</html>		
