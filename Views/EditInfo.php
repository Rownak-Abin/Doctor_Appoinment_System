<?php
	session_start();
?>

<html>
	<head>
	    <link rel="stylesheet" type="text/css" href="IdDocSty.css"> 
		

		</head>

	
	<body>
		<form method="POST" enctype="multipart/form-data">
		
		
		<?php
		
		require_once "../Model/db_connect.php";
		require "../Controller/AuthorController.php";
		
			if(!isset($_SESSION['loggedinuser']))
				{
					header("Location:hos.php");
				}
		
		
				if(isset($_GET['editid'])){
				$eid = $_GET['editid'];
				
				
			}
			
			if(isset($_POST['deleteinfo'])){
				
				deleteDoc($eid);
				
			}
			
			
			$qur="SELECT * FROM doclist WHERE id=$eid";
			
			$inf= gettwo($qur);
			
			$in= $inf[0];
			
			$nm=$in['name'];
			$pass=$in['password'];
			$qlf=$in['qualification'];
			$cat=$in['category'];
			$pic=$in['image'];
			
		
			
			
			
			if(isset($_POST['editinfo'])){
				
				$name=$_POST["docnm"];
				$pass=$_POST["docps"];
				$qlft=$_POST["docqlf"];
				$categ=$_POST["category2"];
				
				$target_dir="img/";
        $target_file = $target_dir . basename($_FILES["picture"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file);
		echo $target_file;
				
				
				
			$qu= "UPDATE doclist SET name='$name', password='$pass', qualification='$qlft', category='$categ', image='$target_file' WHERE id=$eid";
			echo "ooo";
			
			execute($qu);
			
			echo "<script> alert('Successfully Edited');
					 window.location.href = 'EditDoc.php';
					</script>";
			}
		
		
		?>
		
		
		
		
		
		
		<br><br>
		
		<label style="position:relative; left:20%; font-family:Cambria; font-size:20px;"> Category </label>
	
	<select style="position:relative; left:22%; font-family:Cambria; font-size:20px;" value="<?php echo $cat; ?>"  name="category2">
				<option selected="selected">Cardiologist</option>
				<option selected="selected">Eye Specialist</option>
				<option selected="selected">ENT</option>
				<option selected="selected">Gastroenterologist</option>
				
				<option selected="selected">Admin</option>
				<option selected="selected">Nephrologist</option>
			</select><br><br><br>
			
	<label style="position:relative; left:20%; font-family:Cambria; font-size:20px;"> Picture </label>
	
	 <input  style="position:relative; left:23%;" value="<?php echo $pic;  ?>" type="file" name="picture" ><br><br><br>	

	 
	 
	 <label style="position:relative; left:20%; font-family:Cambria; font-size:20px;"> Name </label>		
	
	<input type="text" name="docnm" value="<?php echo $nm; ?>"  style=" position:relative; left:24%;width:180px;">
	
	
	<br><br><br>
	
	
	
	
	
	<label style="position:relative; left:20%; font-family:Cambria; font-size:20px;"> Password </label>		
	
	<input type="text" name="docps" value="<?php echo $pass; ?>"   style=" position:relative; left:22%;width:180px;">
	
	<br><br><br>
	
	
	
	
	
	<label style="position:relative; left:20%; top:30%; font-family:Cambria; font-size:20px;"> Qualification </label>
	
	<textarea  style="position:relative; left:20%;width:300px; "   name="docqlf" rows="4"><?php echo $qlf; ?></textarea><br><br><br>
		
		
		
		
		
	
		
		<input type="submit" name="editinfo" value="Upload" class="Rqbutton" style="position:relative; left:40%;"><br><br><br><br>
		
		<input type="submit" name="deleteinfo" value="Delete" class="butt butt4" style="position:relative; top:50%; left:43%;"><br><br><br><br>
		
		
		
		
		<div class="Sidenav" style="height:183%;">
	
			<nav>
				
				
				
				<ul>
					<li><a class="active" href="hos.php">Home</a></li>
					<li><a href="Author.php">Main Menu</a></li>
					<li><a href="#">Contact us</a></li>
					<li><a href="#">About</a></li>
					<li><a href="Login.php"> Log Out</a></li>
				
				</ul>

	
			</nav>

		</div>
		
		
		</form>
	
	
	</body>
	

	
	
	
	
</html>
