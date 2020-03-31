
<html>
	<head>
	    <link rel="stylesheet" type="text/css" href="IdDocSty.css"> 
		<style>
		.Rqbutton{
			
			
			border: none;
			border: 2px solid #000;
			background: #00D4FF;
			outline: none;
			height: 30px;
			color: #000;
			font-size: 16px;
			padding-left: 35px;
			padding-right: 35px;
			margin-left:50px;
			border-radius: 16px;

		}



		.Rqbutton:hover{
	
			cursor: pointer;
			background: #39dc79;
			color: #000;
		}
	</style>
	</head>

	<body style="background-size: 100% 100%; ">
	
		<form method="POST" action="" enctype="multipart/form-data">
		
		
		<?php
	
	
	require_once "../Model/db_connect.php";
	require "../Controller/AuthorController.php";
	
	
	$cat="";
	$err_cat="";
	$hed="";
	$err_hed="";
	$pic="";
	$err_pic="";
	$desc="";
	$err_desc="";
	
	
	$has_error=false;
	
	if(isset($_POST["submit"]))
	{
		insertNotice();
	}
	
	if(isset($_POST["submitDoc"]))
	{
		insertDoctor();
	}
	
	
	
	
	
	if(isset($_POST['submit']))
	{	
	
		
		if(empty($_POST['category']))
		{
			$err_cat="*category Required";
			$has_error=true;
			
			
		}
		else
		{
			$cat=$_POST['category'];
			
			
		}
	}
	
	if(isset($_POST['submit']))
	{	
	
		
		if(empty($_POST['image']))
		{
			$err_pic="*Picture Required";
			$has_error=true;
			
			
		}
		else
		{
			
			
			$pic=$_POST['image'];
		
		}
	}
	
	
	if(isset($_POST['submit']))
	{	
	
		
		if(empty($_POST['header']))
		{
			$err_hed="*header Required";
			$has_error=true;
			
			
		}
		else
		{
			$hed=$_POST['header'];
			
		}
	}
	
	if(isset($_POST['submit']))
	{	
	
		
		if(empty($_POST['description']))
		{
			$err_desc="*description Required";
			$has_error=true;
			
			
		}
		else
		{
			$desc=$_POST['description'];
			
		}
	}
	
	
	$Docnm="";
	$err_Docnm="";
	$Docid="";
	$err_Docid="";
	$Docpas="";
	$err_Docpas="";
	
	if(isset($_POST['submitDoc']))
	{	
	
		
		if(empty($_POST['docnm']))
		{
			$err_Docnm="*Name Required";
			$has_error=true;
			
			
		}
		else
		{
			$Docnm=$_POST['docnm'];
			
		}
	}
	
	
		if(isset($_POST['submitDoc']))
	{	
	
		
		if(empty($_POST['docid']))
		{
			$err_Docid="*Id Required";
			$has_error=true;
			
			
		}
		else
		{
			$Docid=$_POST['docid'];
			
		}
	}
	
		if(isset($_POST['submitDoc']))
	{	
	
		
		if(empty($_POST['docps']))
		{
			$err_Docpas="*password Required";
			$has_error=true;
			
			
		}
		else
		{
			$Docpas=$_POST['docps'];
			
		}
	}
	
	

	
	


?>
		
	
	<label style="position:relative; left:20%; font-family:Bahnschrift; font-size:40px;"> Announcement</label><hr><br>
	
	<label style="position:relative; left:20%; font-family:Cambria; font-size:20px;"> Position </label>
	
	
	<select style="position:relative; left:23%; font-family:Cambria; font-size:20px;"  name="position">
				<option selected="selected">1</option>
				<option selected="selected">2</option>
				<option selected="selected">3</option>
				<option selected="selected">4</option>
				<option selected="selected">5</option>
			</select>
				<br><br><br>
	
	<label style="position:relative; left:20%; font-family:Cambria; font-size:20px;"> Category </label>
	
	<select style="position:relative; left:22%; font-family:Cambria; font-size:20px;" value="<?php echo $cat;?>" name="category">
				<option selected="selected">News</option>
				<option selected="selected">Academic</option>
				<option selected="selected">Notice</option>
				<option selected="selected">Sports</option>
				<option selected="selected">Research</option>
			</select>
				<span style="color:red; left:600px; top: 600px;"><?php echo $err_cat;?></span><br><br><br>
				
				
				
				
				
			
	<label style="position:relative; left:20%; font-family:Cambria; font-size:20px;"> Header </label>		
	
	<input type="text" name="header" value="<?php echo $hed;?>" style=" position:relative; left:23%;width:380px;">
	<span style="color:red; position:relative; left:360px;"><?php echo $err_hed;?></span><br><br><br><br>
	
	
	
	
	
	
	<label style="position:relative; left:20%; font-family:Cambria; font-size:20px;"> Picture </label>
	
	 <input  style="position:relative; left:23%;"  type="file" name="image" value="<?php echo $pic;?>" >
	<br><br><br><br>
	 
	 
	 
	 
	
	<label style="position:relative; left:20%; top:30%; font-family:Cambria; font-size:20px;"> Description </label>
	
	<textarea rows="10" name="description" value="<?php echo $desc;?>" style="position:relative; left:21%;width:400px; " ></textarea>
	<span style="color:red;  position:relative; left:350px;"><?php echo $err_desc;?></span><br><br><br><br>
	
	
	<input type="submit" name="submit" value="Upload" class="Rqbutton" style="position:relative; left:40%;"><br><br><br><br>
	
	
	
	
	<label style="position:relative; left:20%; font-family:Bahnschrift; font-size:40px;"> Upload Doctor</label><hr><br>
	
	
	
	
	
	
	
	<!--<label style="position:relative; left:20%; font-family:Cambria; font-size:20px;"> ID </label>		
	
	<input type="text" name="docid" value="" style=" position:relative; left:26%;width:180px;">
	
	<span style="color:red; position:relative; left:420px;"></span><br><br><br>-->
	
	
	<label style="position:relative; left:20%; font-family:Cambria; font-size:20px;"> Category </label>
	
	<select style="position:relative; left:22%; font-family:Cambria; font-size:20px;" name="category2">
				<option selected="selected">Cardiologist</option>
				<option selected="selected">Eye Specialist</option>
				<option selected="selected">ENT</option>
				<option selected="selected">Gastroenterologist</option>
				<option selected="selected">Nephrologist</option>
			</select><br><br><br>
			
	<label style="position:relative; left:20%; font-family:Cambria; font-size:20px;"> Picture </label>
	
	 <input  style="position:relative; left:23%;" type="file" name="picture2" ><br><br><br>	

	 
	 
	 <label style="position:relative; left:20%; font-family:Cambria; font-size:20px;"> Name </label>		
	
	<input type="text" name="docnm" value="<?php echo $Docnm; ?>" style=" position:relative; left:24%;width:180px;">
	
	
	<span style="color:red; position:relative; left:390px;"><?php echo $err_Docnm;?></span><br><br><br>
	
	
	
	
	
	
	
	
	
	
	<label style="position:relative; left:20%; font-family:Cambria; font-size:20px;"> Password </label>		
	
	<input type="text" name="docps" value="<?php echo $Docpas; ?>" style=" position:relative; left:22%;width:180px;">
	
	<span style="color:red; position:relative; left:360px;"><?php echo $err_Docpas;?></span><br><br><br>
	
	
	
	
	
	<label style="position:relative; left:20%; top:30%; font-family:Cambria; font-size:20px;"> Qualification </label>
	
	<textarea style="position:relative; left:20%;width:300px; " name="docqlf" rows="4"> </textarea><br><br><br>
	
	<input type="submit" name="submitDoc" value="Upload" class="Rqbutton" style="position:relative; left:40%;"><br><br><br><br>
	
	
	<div class="Sidenav" style="height:183%;">
	
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
	
	</form>
	
	
	</body>
	
	
	
	
	
</html>