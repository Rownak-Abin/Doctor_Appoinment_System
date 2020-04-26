<html>
	<head>
	
	    <link rel="stylesheet" type="text/css" href="IdDocSty.css"> 
		<script>
			function showDoctors()
			{
				var xhttp=new XMLHttpRequest();
				xhttp.onreadystatechange=function()
				{
					if(xhttp.readyState ==4 && xhttp.status==200)
					{
						 document.getElementById("output").innerHTML=xhttp.responseText;
					}
				}
				xhttp.open("GET","dash.php",true);
				xhttp.send();
				
				
				
			}
		
		
		
		</script>
		
		
		
		
	</head>
	
	<body>
	
	<form  method="POST" action="" enctype="multipart/form-data">
	
	
		<?php
	
	
	require_once "../Model/db_connect.php";
	require "../Controller/AuthorController.php";
	
	
		if(isset($_POST['Edit'])){
		if(!empty($_POST['editId'])){
			
			$g= $_POST['editId'];
			
			header("Location: EditInfo.php?editid=$g");
			
			
			
		}
		}
	
	?>
	<label style="position:relative; left:20%; font-family:Bahnschrift; font-size:40px;">Edit Doctor</label><hr><br><br>
	
	<label style="position:relative; left:20%; top:35%; font-family:Cambria; font-size:20px;"> ID:  </label>
	
	<input type="text" name="editId"  style=" position:relative; height:30px; padding:5px;  left:22%;width:130px;"><br><br><br>
	
	
	
	<input type="submit" name="Edit" value="Continue" class="Rqbutton" style="position:absolute; top:112px; left:37%;"><br><br>
	
	
	<label style="position:relative; left:20%; font-family:Bahnschrift; font-size:40px;">Show All Doctors</label><hr><br>
	
	<input type="button" id="btn" value="Show" onclick="showDoctors()" class="Rqbutton" style="position:absolute; top:310px; left:50%;"><br><br><br>
	
	
	<div id="output">
		</div>
		
		
		<script>
			document.getElementById("btn").addEventListener("click", function(){
				
				var myjs= document.getElementById("output");
				if(myjs.style.display=="none"){
					myjs.style.display="block";
				}
				else{
					myjs.style.display="none";
					
				}
				
			});
		
		</script>
	
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