<?php
	
	require '../Controller/DocLIstCtrl.php';
	$Doctors=getAllDoctors();

?>


<html>
	<head>
	<link rel="stylesheet" type="text/css" href="DocListSty.css">
	
	<style>
			
	
		.frame{	
			position:relative;
			left: 300px;
			top: 10px;
			width: 1000px;
			height: 170px;  
			background:	#CCFFFF;
			box-sizing: border-box;
			padding-top: 15px;
			padding-left:21px;
		
		}
	
	
	</style>
		</head>
		
			<body>
	

	<?php
				foreach($Doctors as $Doc)
				{
					
					echo "<div class='frame'> ";
					
					//image
					echo "<img src= '$Doc[image]' width='180px;' height='133px;' style='border:solid black 1px; padding:2px;  float:left; margin-right:10px; margin-bottom:5px;'>";
					
					//name
					echo " <h2 style=' font-family:arial;'> &nbsp $Doc[name] </h2> ";
					
					//category
					echo " <h4 style='color:#696969;font-family:arial;'> &nbsp &nbsp $Doc[category] </h4> ";
					
					//1st line
					echo " <div style='position:relative; left:470px; top:-100px; width:1px; height:130px; background-color:silver;'></div> ";
					
					//qualification label
					echo " <h4 style='color:#0000CD; position:relative; font-family:arial; top:-255px; left:485px;'>Qualification:</h4> ";
					
					//qlf
					echo "<div style='position:relative; font-family:arial; width: 240px; height: 50px; top:-50px;'> <h4 style='position:relative; left:490px; top:-200px; '> $Doc[qualification] </h4> </div> ";
					
					//2nd line
					echo " <div style='position:relative; left:730px; top:-343px; width:1px; height:130px; background-color:silver;'></div> ";
					
					//button
					echo " <a href='Cusform.php?id=$Doc[id]'> <input type='button' value='Request' class='Rqbutton'> </a> ";
					
					echo "</div>";
					
					echo "<br><br>";
					
					
					
				}
				
				


	?>
	

		<div class="Sidenav">
	
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
