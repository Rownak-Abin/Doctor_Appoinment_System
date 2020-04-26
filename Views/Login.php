<html>
<head>
   
    <link rel="stylesheet" type="text/css" href="Logstyle.css">   
</head>
    <body>
	<form method="POST">
	<?php
	
		require "../Model/db_connect.php";
	
	
	$un="";
	$err_un="";
	$pass="";
	$err_pass="";
	$has_error=false;
	$invalid="";
	
		if(isset($_POST['submit'])){
			
			if(empty($_POST['uname']))
		{
			$err_un="*Username Required";
			$has_error=true;
			
			
		}
		else
		{
			$un=$_POST['uname'];
		}
		
		
		
		if(empty($_POST['password']))
		{
			$err_pass="*Password Required";
			$has_error=true;
			
			
		}
		else
		{
			$pass=$_POST['password'];
			
			
		}
		
		if(!$has_error)
		{
			$query = "SELECT * FROM doclist WHERE name='$un' AND password='$pass'";
			//echo $query;
			$result=get($query);
			if(mysqli_num_rows($result) > 0)
			{
				
				session_start();
				$_SESSION["loggedinuser"]=$un;
				
				
				$row=mysqli_fetch_assoc($result);
				$cat=$row["category"];
				
				if($cat=="Admin"){
				
				header("Location:Author.php");
				}
				else{
					
					header("Location:IdDoc.php?id=$row[id]");
				}
			}
			else
			{
				
				$invalid="Invalid Login";
				
			}
		}
		
		
			
		}
	
	
	
	?>
	<a href="hos.php" style="position:absolute;  left:1450px; top:30px;"><input style="background:	#FFFACD; border:none;" type="button" value="X" ></a>
	
    <div class="login-box">
    <img src="img/avatar.png" class="avatar">
        <h1>Login Here</h1>
           
            <p>Username</p>
            <input type="text" name="uname" value="<?php echo $un; ?>" placeholder="Enter Username"><br>
			<span style="color:red;position:relative; left:97px;"><?php echo $err_un;?></span>
			
			
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password"><br>
			<span style="color:red;position:relative; top:-10px; left:90px;"><?php echo $err_pass;?></span>
			
			
        <input class="LogBut" type="submit" name="submit" value="Login">
		
		<p style='color:yellow; position:absolute; left:115px; top:375px; '><?php echo $invalid; ?></p>
		
               
            </form>
        
        
        </div>
		
		
    
    </body>
</html>
