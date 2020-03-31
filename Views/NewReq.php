<html>
	<head>
		<link rel="stylesheet" type="text/css" href="NewReqSty.css">
	</head>
	
	
	<body>
		<div class="bg-model">
			<div class="Contain">
			
			
			
			Name: Abir Islam<br>
			Age: 23 <br>
			Gender: Male<br>
			Height: 5'6"<br>
			Weight: 70<br>
			Existing dieses: high blood pressure<br>
			<b>Description:</b> i have a pain in my chest after having my<br> lunch and dinner......<br>
			<hr border="2" style="color:#000;">
			
			
			<h4>Appointment Date: </h4>
			
			<label>Date:</label>
			<select>
			<?php
				for($i=1; $i<=31; $i++){
					echo"<option selected=selected name=Date> $i </option>";
					
				}				
				?>
			</select>
			
			<label>&nbsp &nbsp &nbsp &nbsp Month:</label>
			<select>
			<?php
				for($i=1; $i<=12; $i++){
					echo"<option selected=selected name=month>$i</option>";
					
				}				
				?>
			</select>
			
			<label>&nbsp &nbsp &nbsp &nbsp Year:</label>
			<select>
			<?php
				for($i=2000; $i<=2050; $i++){
					echo"<option selected=selected name=year>$i</option>";
					
				}				
				?>
			</select>
			<label>&nbsp &nbsp &nbsp &nbsp Time:</label>
			<select>
			<?php
				for($i=1; $i<=12; $i++){
					
					
					echo"<option selected=selected name=time>$i am</option>";
				}
					for($i=1; $i<=12; $i++){
					
					
					echo"<option selected=selected name=time>$i pm</option>";
				}
				
				
				
				?>
				
				
			</select>
			
			<input class="Rqbutton" type="button" value="SEND" >
			
			<a href="IdDoc.php" onclick="self.close();"><input style="position:relative; top:-300px;" type="button" name="close" value="X"></a>
			
			
			</div>
		</div>
	
	</body>

	

</html>