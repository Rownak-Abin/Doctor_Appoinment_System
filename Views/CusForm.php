<html>
	<head>
	
		<link rel="stylesheet" type="text/css" href="CusFormSty.css">
		
	</head>
	
	<body>	
	
	<form method="POST">
	
	<?php
	
	require "../Model/db_connect.php";
	require "../Controller/AuthorController.php";
	require "dialoug.html";
			
			$name="";
			$err_name="";
			$eml="";
			$err_eml="";
			$ag="";
			$err_ag="";
			$phn="";
			$err_phn="";
			$wg="";
			$err_wg="";
			$hg="";
			$err_hg="";
			$gen="";
			$err_gen="";
			$des="";
			$err_des="";
			$his="";
			$err_ex="";
			
		if(isset($_POST['submit'])){
			
			insertPatient();
			//message();
			//header("location:Cusform.php?id= '".$_GET['id']."' ");
			
			//echo "<script> alert('Request sent successfuly');</script>";
			
		}
			
			
			if(isset($_POST['submit'])){
			if(empty($_POST['fstnm']))
			{
				$err_name="*Name Required";
			}
			else
			{			
				$name=htmlspecialchars($_POST['fstnm']);
				
			}
			
			}
			
			if(isset($_POST['submit'])){
			if(empty($_POST['phone']))
			{
				$err_phn="*Phone Required";
			}
			else
			{			
				$phn=htmlspecialchars($_POST['phone']);
				if(!is_numeric($phn)){
				
				
					$phn="";
					$err_phn="*Must be neumeric";}
				
			}
			
			}
			
			
			
			if(isset($_POST['submit'])){
			if(empty($_POST['email']))
			{
				$err_eml="*E-mail Required";
			}
			else
			{			
				$eml=htmlspecialchars($_POST['email']);
				if(!filter_var($eml, FILTER_VALIDATE_EMAIL))
					{
					$err_eml="E-mail is not valid";
				}
					else
					{
					//echo("E-mail is valid");
					}
				
				
				
				
			}
			
			}
			
			
			if(isset($_POST['submit'])){
			if(empty($_POST['ag']))
			{
				$err_ag="*Age Required";
			}
			else
			{			
				$ag=htmlspecialchars($_POST['ag']);
				if(!is_numeric($ag)){
				
				
					$ag="";
					$err_ag="*Must be neumeric";}
				
			}
			
			}
			
			if(isset($_POST['submit'])){
			if(empty($_POST['weight']))
			{
				$err_wg="*Required";
			}
			else
			{			
				$wg=htmlspecialchars($_POST['weight']);
				if(!is_numeric($wg)){
				
				
					$wg="";
					$err_wg="*Must be neumeric";}
			}
			
			}
			
			if(isset($_POST['submit'])){
			if(empty($_POST['height']))
			{
				$err_hg="*Required";
			}
			else
			{			
				$hg=htmlspecialchars($_POST['height']);
				if(!is_numeric($hg)){
				
				
					$hg="";
					$err_hg="*Must be neumeric";}
					
			}
			
			}
			
			if(isset($_POST['submit'])){
			if(empty($_POST['gen']))
			{
				$err_gen="*Gender Required";
			}
			else
			{			
				$gen=htmlspecialchars($_POST['gen']);
				
			}
			
			}
			
			if(isset($_POST['submit'])){
			if(!empty($_POST['History']))
			{
				
				foreach( $_POST["History"] as $lan){
					
					
				}	
				
			}
			else
			{		
				
				$err_ex="*EX required";
			}
			
			}
			
			
			
			
			if(isset($_POST['submit'])){
			if(empty($_POST['description']))
			{
				$err_des="*Required";
			}
			else
			{			
				$des=htmlspecialchars($_POST['description']);
				
			}
			
			}
			
			?>
			
			
			
		<div class="bg-model">
		<div  >
			<img class="spimg" src="img/edit.jpg" >
		</div>
		
		
			<div class="Contain">
			
			<a href="hos.php"><input  style="position:relative;left:537px; top:0px;" type="button" value="X"></a>
			
			<!--<strong style="font-family:san-serif; position:relative; left:5px;" > Name:</strong>-->
			<input class="input" style="position:absolute; left:50px; top:40px; width:428px;"  type="text" name="fstnm"  placeholder=" Name"><br>
			<span style="color:red;position:absolute; top:70px; left:50px;"><?php echo $err_name;?></span><br>
			
			
			
			
			<div >
			<!--<strong style="position:relative; top:22px;"> E-mail:</strong> -->
			<input class="input" style="position:absolute; left:50px; top:100px; width:428px;"  type="text" name="email" placeholder="example@gmail.com"><br>
			<span style="color:red;position:absolute; left:50px; top:130px;"><?php echo $err_eml;?></span><br><br></div>
			
			
			
			
			
			
			<!--	<strong   style="font-family:san-serif;position:relative; left:32px; " > Phone:</strong>  -->
			<input class="input" style="position:absolute; left:50px; top:160px; width:180px;"  type="text" name="phone" placeholder="+88 01XXXXXXX" >
			<span style="color:red;position:absolute; top:190px; left:50px;"><?php echo $err_phn;?></span>
			
			
			
			
			
			
		<!--	<strong style="font-family:san-serif;position:relative; left:42px;top:10px;" > Age:</strong> -->
			<input class="input" style="position:absolute; left:300px; top:160px; width:178px;"  type="text" name="ag" placeholder="Age"><br>
			<span style="color:red;position:absolute; top:190px;left:300px;"><?php echo $err_ag;?></span><br><br>
			
		<!--	<strong for="wei" style="font-family:san-serif;position:relative; left:22px;" > Weight:</strong> -->
			<input class="input" style="position:absolute; left:50px; top:215px; width:120px;" type="text" name="weight" placeholder="Weight" >
			<span style="color:red;position:absolute; top:220px; left:175px;"><?php echo $err_wg;?></span>
			
			
		<!--	<strong style="font-family:san-serif; position:relative; left:76px;" > Height:</strong> -->
			<input class="input" style="position:absolute; left:300px; top:215px; width:120px;"   type="text" name="height" placeholder="Height" >
			<span style="color:red;position:absolute; top:220px; left:425px;"><?php echo $err_hg;?></span><br><br>
			
			
			
			
			
			
			<div style="position:absolute; left:50px; top:275px;">
			<strong style="font-family:arial;"> Gender: &nbsp &nbsp  </strong> 
			
			<input type="radio" name="gen" value="Male" > Male 
					<input type="radio" name="gen" value="Female" > Female
					<span style="color:red;position:absolute; top:0; left:260px;"><?php echo $err_gen;?></span>
					<br><br>
					</div>
					
					
					
					
					
					
			<div style="position:absolute; left:50px; top:325px;">
			
				<strong style="font-family:arial;"> Existing Disease:  &nbsp &nbsp </strong> 
							<input type="checkbox" name="History[]" value="High Blood pressure"> High Blood pressure
							<input type="checkbox" name="History[]" value="Diabetis"> Diabetis
							<input type="checkbox" name="History[]" value="Asthma"> Asthma
							<input type="checkbox" name="History[]" value="Migrane"> Migrane<br><br>

			</div>
			
		<!--	<strong style="position:relative; left:20px; top:-70px;" for="CP"> Current Problem:  </strong> -->
			
			<textarea class="input" rows="4" name="description"  placeholder="Description..." style="position:absolute;top:370px; width:428px; left:50px;"></textarea>	
			<span style="color:red; position:absolute; top:440px; left:500px;"><?php echo $err_des;?></span><br>
			
			<input class="Rqbutton" type="submit" name="submit" value="Submit">
			
			</div>
			
		</form>
					
					
			
		
	</div>
		
		
		
	</form>
	
	</body>
</html>
