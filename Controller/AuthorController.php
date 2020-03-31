<?php 



		function insertNotice()
		{
		
		
		$categ=$_POST["category"];
		$hdr=$_POST["header"];
		$desc=$_POST["description"];
		$pos=$_POST["position"];
		
		
		
	
		 //file upload
        $target_dir="img/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
		echo $target_file;
		$query="UPDATE news SET category='$categ', header='$hdr',  text='$desc', image='$target_file' WHERE id=$pos";
		execute($query);
		//header("Location:../views/allproducts.php");
		
		
			
		
		
	}
	
	
	function insertDoctor(){
			
			$DCat=$_POST["category2"];
			
			
			 //file upload
        $target_dir="img/Doctor_image/";
        $target_file = $target_dir . basename($_FILES["picture2"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        move_uploaded_file($_FILES["picture2"]["tmp_name"], $target_file);
		
		
			
			$DName=$_POST["docnm"];
			//$DId=$_POST["docid"];
			$DPas=$_POST["docps"];
			$DQlf=$_POST["docqlf"];
		
		
		//	echo $DCat, $DName, $DId, $DPas, $DQlf;
		
		$query="INSERT INTO doclist( category,	name,	password,	qualification,	image) 
		VALUES( '$DCat', '$DName', '$DPas', '$DQlf', '$target_file')";
		execute($query);
		
		
	}
	
	?>