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
		
		
		if(!empty($hdr) && !empty($desc) && !empty($target_file)){
		
		$query="UPDATE news SET category='$categ', header='$hdr',  text='$desc', image='$target_file' WHERE id=$pos";
		execute($query);
		//header("Location:../views/allproducts.php");
		}
		
			
		
		
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
		
		if(!empty($DCat) && !empty($DName) && !empty($DPas) && !empty($DQlf) && !empty($target_file)){
		
		
		$query="INSERT INTO doclist( category,	name,	password,	qualification,	image) 
		VALUES( '$DCat', '$DName', '$DPas', '$DQlf', '$target_file')";
		execute($query);
		
		}
		
		
	}
	
	
			function insertPatient()
			{
				
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				
				
			}
			
			
			if(isset($_POST['submit'])){
			
				$prblms=$_POST["History"];
				$fns= implode(", ", $prblms);
		
			}
		
		
				$nm=$_POST["fstnm"];
				$phn=$_POST["phone"];
				$eml=$_POST["email"];
				
				$age=$_POST["ag"];
				$wgt=$_POST["weight"];
				
				$hgt=$_POST["height"];
				$gen=$_POST["gen"];
				$desc=$_POST["description"];
				
				
				if(!empty($nm) && !empty($phn) && !empty($eml) && !empty($age) && !empty($gen)
					&& !empty($wgt) && !empty($hgt) && !empty($desc)){
				
					$query= "INSERT INTO patRequest (docid, patname, gender, phone, email, age, weight, height, existing, currprblm) 
					VALUES ($id, '$nm', '$gen', $phn, '$eml', $age, $wgt, '$hgt', '$fns', '$desc')";
			
				
				
				execute($query);
					
				
				echo "<script> alert('Request sent successfully');
					 window.location.href = 'hos.php';
					</script>";
				
					}
			
				
				}
				
				
				
				function deleteDoc($id){
					
					$qr= "DELETE FROM doclist WHERE id=$id";
					
					$x= execute($qr);
					
					echo "<script> alert('Deleted successfully');
					 window.location.href = 'EditDoc.php';
					</script>";
					
					
				}
		
			
			
			
			
			
			
			function message(){
				
				if(empty($_POST['email']) && empty($_POST['Fstnm'])){
					
					
					echo "<script> alert('Request not sent');
					 window.location.href = 'hos.php';
					</script>";
					
				}
				else{
					
					echo "<script> alert('Request sent successfuly');
					 window.location.href = 'hos.php';
					</script>";
					
				}
				
				
			}
				
				
			
			
			
			

	?>
	
		
	
