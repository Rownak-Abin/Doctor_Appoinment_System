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
				$row=mysqli_fetch_assoc($result);
				//setcookie("loggedinuser",$row["name"],time()+120);
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
				echo "<p style='color:#ffff33; position:absolute; left:720px; top:500px; '>Invalid Login</p>";
			}
		}
		
		
			
		}
	
	
	
	?>
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
		
               
            </form>
        
        
        </div>
		
		<a href="hos.php"> <input type="button" style="position: absolute; top:10px; color:#fff; left:15px; background:black; border:none;" name="back" value="<"> </a>
    
    </body>
</html>
