


<html>

		<head>

				<link rel="stylesheet" type="text/css" href="IdDocSty.css"> 

		</head>

	<body>
	
	<?php
	require "../Model/db_connect.php";
	
	if(isset($_GET['story_id'])){
				$id = $_GET['story_id'];
			
			}
			
			$query="SELECT * FROM news WHERE id=$id";
			
			$users=get($query);
			
			if(mysqli_num_rows($users) > 0)
			{
			$row = mysqli_fetch_assoc($users);
			
			echo "<img src='$row[image]' width='480px;' height='280px;' style='border:solid black 3px; padding:0px; position:absolute; left:600px;'>";
			}
			
			if(strlen($row['text'])>2000){
				
				echo "ooo";
				
				$d= 2;
			}
			else{ $d=0;}


?>
	
	
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><hr>
	
	<div style="position:absolute; color:#8B4513; top:340px; left:320px; font-size:35px; font-family:algerian;  ">
		<?php echo $row['header'] ;?>
		
	</div>
	
	
	<div style="position:absolute; color:#000; top:420px; left:360px; column-gap:40px; column-count:<?php echo $d; ?>; line-height:2; font-size:15px;text-align:justify; font-family:arial; padding-right:60px;  ">
		<?php echo $row['text'] ;?>
		
	</div>
	
	
	
	
	
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