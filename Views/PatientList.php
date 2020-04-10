<html>
	<head>
		<link rel="stylesheet" type="text/css" href="IdDocSty.css">
	</head>
	
	
	<body>
		<div style="position:absolute; left:300px; top:30px; width:1100px;">
			
				<?php
				
				require_once "../Model/db_connect.php";
					
					if(isset($_GET['id'])){
						$id = $_GET['id'];
					}
					
					
					$query="SELECT * FROM schedule WHERE id=$id";
					
					$list= gettwo($query);
					
					foreach($list as $ls){
						echo "<div style='color:#000; font-size:17px;'>";
						echo "Name: ";
						echo " $ls[patname]; <br><br>";
						echo "Email: ";
						echo "$ls[email];<br><br> ";
						echo "Appointment Date: ";
						echo "$ls[date]  $ls[month], $ls[year]; <br><br>";
						echo "Time: ";
						echo "$ls[time]<br><br><hr><hr>";
						echo "</div>";
						
						
					}
					
					
	
				
				?>
			</div>
			
		
			

		
		<div class="Sidenav" >
	
			<nav>
				
				
				
				<ul>
					<li><a class="active" href="hos.php">Home</a></li>
					<li><a href="#">News</a></li>
					<li><a href="#">Contact us</a></li>
					<li><a href="#">About</a></li>
					<li><a href="Login.php"> Login</a></li>
				
				</ul>

	
			</nav>

		</div>
	
	</body>

	

</html>		
