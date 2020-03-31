<html>
	<head>
	
		<link rel="stylesheet" type="text/css" href="CusFormSty.css">
		<style>
		
		</style>
	</head>
	
	<body>	
	
	<form method="POST">
	
	<?php
	
			
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
			
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				
				echo $id;
			}
			
			
			if(isset($_POST['submit'])){
			if(empty($_POST['Fstnm']))
			{
				$err_name="*Name Required";
			}
			else
			{			
				$name=htmlspecialchars($_POST['Fstnm']);
				echo $name;
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
					echo("E-mail is valid");
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
			if(empty($_POST['Height']))
			{
				$err_hg="*Required";
			}
			else
			{			
				$hg=htmlspecialchars($_POST['Height']);
				if(!is_numeric($hg)){
				
				
					$hg="";
					$err_hg="*Must be neumeric";}
					echo $hg;
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
				echo $gen;
			}
			
			}
			
			if(isset($_POST['submit'])){
			if(!empty($_POST['History']))
			{
				
				foreach( $_POST["History"] as $lan){
					
					echo $lan;
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
			<div class="Contain">
			
			<a href="DocList.php"><input style="position:relative;left:537px; top:0px;" type="button" value="X"></a>
			
			<strong style="font-family:san-serif; position:relative; left:5px;"> Name:</strong>	
			<input style="position:relative; left:21px;"  type="text" name="Fstnm" value="<?php echo $name?>" placeholder=" Name"><br>
			<span style="color:red;position:relative; left:97px;"><?php echo $err_name;?></span><br>
			
			
				<strong  style="font-family:san-serif;position:relative; left:32px; " > Phone:</strong> 
			<input style="position:relative; left:48px; width:100px; " value="<?php echo $phn?>" type="text" name="phone" placeholder="01XXXXXXXXXX" >
			<span style="color:red;position:relative; left:47px;"><?php echo $err_phn;?></span>
			
			
			
			<div style="font-family:san-serif;position:relative; left:28px;" >
			<strong style="position:relative; top:22px;"> E-mail:</strong> 
			<input style="position:relative; left:17px; top:22px;" value="<?php echo $eml?>" type="text" name="email" placeholder="example@gmail.com"><br>
			<span style="color:red;position:relative; left:70px; top:20px;"><?php echo $err_eml;?></span><br><br></div>
			
			
			<strong style="font-family:san-serif;position:relative; left:42px;top:10px;" > Age:</strong> 
			<input style="position:relative; left:64px;top:10px; " value="<?php echo $ag?>"  type="text" name="ag" placeholder="Age"><br>
			<span style="color:red;position:relative; top:10px;left:97px;"><?php echo $err_ag;?></span><br><br>
			
			<strong for="wei" style="font-family:san-serif;position:relative; left:22px;" > Weight:</strong> 
			<input style="position:relative; left:42px; width:100px" value="<?php echo $wg?>" type="text" name="weight" placeholder="x kg" >
			<span style="color:red;position:relative; left:47px;"><?php echo $err_wg;?></span>
			
			
			<strong style="font-family:san-serif; position:relative; left:76px;" > Height:</strong> 
			<input style="position:relative; left:92px; width:100px" value="<?php echo $hg?>"  type="text" name="Height" placeholder="meters" >
			<span style="color:red;position:relative; left:97px;"><?php echo $err_hg;?></span><br><br>
			
			
			
			
			
			
			<div style="position:relative; left:20px;">
			<strong style="font-family:san-serif;"> Gender: &nbsp &nbsp  </strong> 
			
			<input type="radio" name="gen" value="Male" > Male 
					<input type="radio" name="gen" value="Female" > Female
					<span style="color:red;position:relative; left:97px;"><?php echo $err_gen;?></span>
					<br><br>
					</div>
					
					
					
					
					
					
			<div style="position:relative; left:20px;">
			
				<strong> Existing Disease:  &nbsp &nbsp </strong> 
							<input type="checkbox" name="History[]" value="High Blood pressure"> High Blood pressure
							<input type="checkbox" name="History[]" value="Diabetis"> Diabetis
							<input type="checkbox" name="History[]" value="Asthma"> Asthma
							<input type="checkbox" name="History[]" value="Migrane"> Migrane<br><br>

			</div>
			
			<strong style="position:relative; left:20px; top:-70px;" for="CP"> Current Problem:  </strong> 
			<!--<input style="position:relative; left:34px; height:60px;"  type="text" name="Curpblm" placeholder="Description..."><br><br>-->
			<textarea rows="5" name="description" value="<?php echo $des?>" placeholder="Description..." style="position:relative; width:350px; left:35px;"></textarea>	
			<span style="color:red; position:relative; left:37px;"><?php echo $err_des;?></span><br>
			
			<input class="Rqbutton" type="submit" name="submit" value="Submit">
			
		</form>
					
					
			
		
	</div>
		
		
		</div>
	</form>
	
	</body>
</html>