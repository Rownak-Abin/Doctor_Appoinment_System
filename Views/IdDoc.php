<html>
	<head>
	    <link rel="stylesheet" type="text/css" href="IdDocSty.css"> 
	
	</head>

	<body style="background-size: 100% 100%;  height:450px; width:600px;">
	
	
	<?php
	
		
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				echo $id;
				
			}
	
	
	
	
	?>
	
	
	
	
	
		<div class="backtxt">
			Health
		</div>
		
		<div class="backtxt2">
			Care Center
		</div>
		
		<div class="container">
  <a href="NewReq.php?id=<?php echo $id; ?>"><button class="btn btn1" type="submit" name="submit">New Requests</button></a>
 <a href="PatientList.php?id=<?php echo $id; ?>"> <button class="btn btn2" type="submit" name="submit">Patient List</button></a>
		</div>
		
		<div class="Sidenav">
	
			<nav>
				
				
				
				<ul>
					<li><a class="active" href="hos.php">Home</a></li>
					<li><a href="#">News</a></li>
					<li><a href="#">Contact us</a></li>
					<li><a href="#">About</a></li>
					<li><a href="Login.php"> Log Out</a></li>
				
				</ul>

	
			</nav>

		</div>
	
	
	
	
	</body>
	
	
	
	
	
</html>
