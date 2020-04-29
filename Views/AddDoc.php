<?php
	session_start();
?>

<html>
	<head>
	
	    <link rel="stylesheet" type="text/css" href="IdDocSty.css"> 
		
			<style>
			.Rqbutton{
				background-image:linear-gradient(to right, #9BFDF7, #32FFF2);
			}
			
			.Rqbutton:hover{
				background:#60E96E;
			}
			
			
		</style>
		
		
		
	</head>
	
	<body>
	
	<form  method="POST" action="" enctype="multipart/form-data">
	
	
		<?php
	
	
	require_once "../Model/db_connect.php";
	require "../Controller/AuthorController.php";
	
	if(!isset($_SESSION['loggedinuser']))
	{
		header("Location:hos.php");
	}
	
	$Docnm="";
	$err_Docnm="";
	$Docid="";
	$err_Docid="";
	$Docpas="";
	$err_Docpas="";
	$ql="";
	$err_ql="";
	
	
	if(isset($_POST["submitDoc"]))
	{
		insertDoctor();
	}
	
	
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
	
	if(isset($_POST['submitDoc']))
	{	
	
		
		if(empty($_POST['docqlf']))
		{
			$err_ql="*Qualification Required";
			$has_error=true;
			
			
		}
		else
		{
			$ql=$_POST['docqlf'];
			
		}
	}
	
	
	
	
	?>
	
	
	
	<label style="position:relative; left:20%; font-family:Bahnschrift; font-size:40px;"> Upload Doctor</label><hr><br>
	

	
	
	<label style="position:relative; left:20%; font-family:Cambria; font-size:20px;"> Category </label>
	
	<select style="position:relative; left:22.5%; font-family:Cambria; font-size:20px;" name="category2">
				<option selected="selected">Cardiologist</option>
				<option selected="selected">Eye Specialist</option>
				<option selected="selected">ENT</option>
				<option selected="selected">Gastroenterologist</option>
				
				<option selected="selected">Admin</option>
				<option selected="selected">Nephrologist</option>
			</select><br><br><br>
			
	<label style="position:relative; left:20%; font-family:Cambria; font-size:20px;"> Picture </label>
	
	 <input  style="position:relative; left:23.5%;" type="file" name="picture2" ><br><br><br>	

	 
	 
	 <label style="position:relative; left:20%; font-family:Cambria; font-size:20px;"> Name </label>		
	
	<input type="text" name="docnm" value="<?php echo $Docnm; ?>" style=" position:relative; left:24.3%;width:180px;">
	
	
	<span style="color:red; position:relative; left:390px;"><?php echo $err_Docnm;?></span><br><br><br>
	
	
	
	
	
	
	
	
	
	
	<label style="position:relative; left:20%; font-family:Cambria; font-size:20px;"> Password </label>		
	
	<input type="text" name="docps" value="<?php echo $Docpas; ?>" style=" position:relative; left:22.2%;width:180px;">
	
	<span style="color:red; position:relative; left:360px;"><?php echo $err_Docpas;?></span><br><br><br>
	
	
	
	
	
	<label style="position:relative; left:20%; top:30%; font-family:Cambria; font-size:20px;"> Qualification </label>
	
	<textarea style="position:relative; left:20.3%;width:300px; " name="docqlf" rows="4"><?php echo $ql;?></textarea>
	
	<span style="color:red; position:relative; left:360px;"><?php echo $err_ql;?></span><br><br><br>
	
	<input type="submit" name="submitDoc" value="Upload" class="Rqbutton" style="position:relative; left:40%;"><br><br><br><br>
	
	
	</form>
	
	
	
	
	
	
	
	
	<div class="Sidenav" style="height:183%;">
	
			<nav>
				
				
				
				<ul>
					<li><a class="active" href="hos.php">Home</a></li>
					<li><a href="Author.php">Main Menu</a></li>
					<li><a href="#">Contact us</a></li>
					<li><a href="#">About</a></li>
					<li><a href="Logout.php"> Log Out</a></li>
				
				</ul>

	
			</nav>

		</div>
	
	</body>
	


</html>	
