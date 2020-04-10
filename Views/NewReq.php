
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="IdDocSty.css">
		
		<style>
			
			.frame{	
			position:absolute;
			left: 258px;
			top: 10px;
			width: 1000px;
			height: 430px;  
			background:	#CCFFFF;
			box-sizing: border-box;
			padding-top: 15px;
			padding-left:21px;
		
		}
		
		
			.frame2{	
			position:absolute;
			left: 0px;
			top: 430px;
			width: 1000px;
			height: 280px;  
			background:	#FFFFF0;
			box-sizing: border-box;
			padding-top: 15px;
			padding-left:21px;
		
		}
		
		.btn:hover{
		color: #FF6347;
		}
		</style>
	</head>
	
	
	<body>
	
	<form method="POST">
	
	
	<?php
	require_once "../Model/db_connect.php";

	


	if(isset($_GET['id'])){
				$id = $_GET['id'];
				
				
			}
	
	
			

	
	
	$query="SELECT MIN(sl) as serial FROM patrequest WHERE docid=$id";
	
	
	
	$sel= gettwo($query);
	
	
	
	$nrr = $sel[0];
	
	$d= $nrr['serial'];
	
	//echo $d;
	
	
	
	$query2="SELECT * FROM patrequest WHERE sl=$d";
	
	$info= gettwo($query2);
	
	$in= $info[0];
	
	$name= $in['patname'];
	$gen= $in['gender'];
	$ag= $in['age'];
	$hei= $in['height'];
	$wei= $in['weight'];
	$exs= $in['existing'];
	$curpb= $in['currprblm'];
	$eml = $in['email'];
	$phn = $in['phone'];
	

	
	
	
	
	if(isset($_POST['submit'])){
		
		require_once "../Model/db_connect.php";
				$day=$_POST['Date'];
				$mon=$_POST['month'];
				$yr=$_POST['year'];
				$tm=$_POST['time'];
				
				
				
				$qu="INSERT INTO schedule (id, patname, email, phone, patgen, patage, height,weight, exist , date, month,year,time) 
					VALUES ($id, '$name', '$eml' , $phn, '$gen', $ag, '$hei', $wei, '$exs' ,$day, '$mon', $yr, '$tm')";
			
				
				
				execute($qu);
				
				
				$qur="DELETE FROM patRequest WHERE sl=$d";
				
				execute($qur);
	
				
				echo "<script> alert('Schedule sent successfuly');
					 window.location.href = 'IdDoc.php?id=$id';
					</script>";
		
				
			}


?>


	
			
			
			<div class="frame">
			
	<div style="position:absolute; left:65px; color:#8B4513; top:35px; font-family:arial; font-size:20px;">
			Name:<?php echo '  '.$name; ?><br><br>
			Gender: <?php echo '  '.$gen; ?><br><br>
			Age: <?php echo '  '.$ag; ?><br><br>
			Height: <?php echo '  '.$hei ; ?>
			&nbsp &nbsp ||&nbsp &nbsp Weight: <?php echo '  '.$wei; ?><br><br>
			Existing Diesease: <?php echo '  '.$exs; ?>
			<p style="font-size:17px;">Current Problem: <?php echo '  '.$curpb; ?><br></p>
			
			</div>
			
			<?php 
				if($d==null){
					$d=0;
					echo "<p style='position:relative; color:red; font-size:35px; left:45%; top:30%;'> No request </p>";
					
				}
			
			?>
			
			
			
			<div class="frame2">
			
			<div  style="position:absolute; font-size:22px; left:150px;">
			<h4 style="font-size:25px; font-family:arial;">Appointment Date: </h4>
			
			<label>Date:</label>
			
			
			
			<select name='Date'>
			<?php
				for($i=1; $i<=31; $i++){
					echo"<option selected=selected > $i </option>";
					
				}				
				?>
			</select>
			
			
			
			
			<label>&nbsp  &nbsp &nbsp Month:</label>
			
			<select name="month">
				<option selected="selected">January</option>
				<option selected="selected">February</option>
				<option selected="selected">March</option>
				<option selected="selected">April</option>
				<option selected="selected">May</option>
				<option selected="selected">June</option>
				<option selected="selected">July</option>
				<option selected="selected">August</option>
				<option selected="selected">September</option>
				<option selected="selected">October</option>
				<option selected="selected">November</option>
				<option selected="selected">December</option>
			</select>
			
			
			<label>&nbsp  &nbsp &nbsp Year:</label>
			<select name="year">
			<?php
				for($i=2018; $i<=2030; $i++){
					echo"<option selected=selected >$i</option>";
					
				}				
				?>
			</select>
			<label>&nbsp &nbsp &nbsp &nbsp Time:</label>
			<select name="time">
			<?php
			
			
				for($i=1; $i<=12; $i++){
					
					
					echo"<option selected=selected name=time>$i am</option>";
				}
					for($i=1; $i<=12; $i++){
					
					
					echo"<option selected=selected name=time>$i pm</option>";
				}
				
				
				
				?>
				
				
			</select><br>
			
			
			
			
			
			
		
		<input type="submit"  class="btn" name="submit"  value="SEND" style="position:absolute; top:165px;; left:270px;" >
		</div>
		</div>
		</div>
	</form>
	
	
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
