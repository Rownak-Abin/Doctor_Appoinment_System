<html>
	<head>
	
	    <link rel="stylesheet" type="text/css" href="IdDocSty.css"> 
		
		
	</head>
	
	<body>
	
	<form  method="POST" action="" enctype="multipart/form-data">
	
	
		<?php
	
	
	require_once "../Model/db_connect.php";
	require "../Controller/AuthorController.php";
	
	
	
	/*	if(!isset($_SESSION['loggedinuser']))
			{
				header("Location:hos.php");
			}*/
			
	$cat="";
	$err_cat="";
	$hed="";
	$err_hed="";
	$pic="";
	$err_pic="";
	$desc="";
	$err_desc="";	
			
	
	
	if(isset($_POST["submit"]))
	{
		insertNotice();
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
	
	<select style="position:relative; left:22.5%; font-family:Cambria; font-size:20px;" value="<?php echo $cat;?>" name="category">
				<option selected="selected">News</option>
				<option selected="selected">Academic</option>
				<option selected="selected">Notice</option>
				<option selected="selected">Sports</option>
				<option selected="selected">Research</option>
			</select>
				<span style="color:red; left:600px; top: 600px;"><?php echo $err_cat;?></span><br><br><br>
				
				
				
				
				
			
	<label style="position:relative; left:20%; font-family:Cambria; font-size:20px;"> Header </label>		
	
	<input type="text" name="header" value="<?php echo $hed;?>" style=" position:relative; left:23.4%;width:380px;">
	<span style="color:red; position:relative; left:360px;"><?php echo $err_hed;?></span><br><br><br><br>
	
	
	
	
	
	
	<label style="position:relative; left:20%; font-family:Cambria; font-size:20px;"> Picture </label>
	
	 <input  style="position:relative; left:23.5%;"  type="file" name="image" value="<?php echo $pic;?>" >
	<br><br><br><br>
	 
	 
	 
	 
	
	<label style="position:relative; left:20%; top:30%; font-family:Cambria; font-size:20px;"> Description </label>
	
	<textarea rows="10" name="description" value="<?php echo $desc;?>" style="position:relative; left:21%;width:400px; " ></textarea>
	<span style="color:red;  position:relative; left:350px;"><?php echo $err_desc;?></span><br><br><br><br>
	
	
	<input type="submit" name="submit" value="Upload" class="Rqbutton" style="position:relative; left:40%;"><br><br><br><br>
	
	
	
	
	</form>
	
	
	
	
	
	
	<div class="Sidenav" style="height:183%;">
	
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
	
	</body>
	


</html>	