
	<html>
		<head>
			<link rel="stylesheet" type="text/css" href="sty.css">
	
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		</head>
	
	
	<body  style="  height:2040px; background-color:#00819C ; " >
	
	
		
	
		<div id="carouselExampleIndicators" class="carousel slide" data-interval="4000" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1" ></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
			<img src="img/wp7.jpg" class="d-block w-100" >
		</div>
		<div class="carousel-item ">
		<img src="img/asd.jpg" class="d-block w-100" >
		</div>
		<div class="carousel-item">
		<img src="img/hel.jpg" class="d-block w-100" alt="...">
		</div>
	</div>
	<a class="carousel-control-prev" style="width:80px;" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" style="width:80px;" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
	</div>
	
	
		<div>
			<!---<img src="wp7.jpg" class="Wp">-->
		</div>
	
		<div class="wrap">
	
			<nav>
				
				<strong style="color:#FFFFE0;"> <font size="30"> Health care center </font> </strong><span>
				
				<ul>
					<li><a  href="#">Payment System</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact us</a></li>
					
					<li><a href="Login.php"> Login</a></li>
				
				</ul></span>

	
			</nav>

		</div>
		
		<div class="MainMenu">
				<ul>
					<li><a>     </a></li>
					<li><a>     </a></li>
					<li><a>     </a></li>
					<li><a>     </a></li>
					<li><a>     </a></li>
					<li><a class="active" href="#">HOME</a></li>					
					<li><a style="position:relative; margin-left:10px;" href="#">NEWS</a></li>
					<li><a href="#">&nbsp &nbsp  SPECIALISTS</a>
					<div class="ulul">
						<ul >
							<li><a style="padding-left:50px; " href="DocList.php?category=Cardiologist">Cardiologist</a></li>
							<li><a style="padding-left:55px;" href="DocList.php?category=Nephrologist">Nephrologist</a></li>
							<li style="padding-left:-5px;"><a href="DocList.php?category=Gastroenterologist">Gastroenterology</a></li>
							<li><a style="padding-left:50px;" href="DocList.php?category=ENT"> &nbsp &nbsp &nbsp &nbsp &nbsp ENT</a></li>
							
							<li ><a style="padding-left:50px;" href="DocList.php?category=Eye Specialist">Eye Specialist</a></li>
							<li ><a style="padding-left:80px;" href="DocList.php?category=others">Others</a></li>
						</ul>
					</div>
					</li>
					<li><a style="position:relative; margin-left:-10px;" href="#">FOR DOCTORS</a></li>
					<li><a href="#">HEALTH LIBRARY</a></li>
				
				</ul>
			
			
			</div><br><br><br>
			
			<div style="position:absolute; color:#B3FFFF; top:700px; left:100px;  text-align:justify; width:400px;">
			
			
					<?php
					
					
					function readMoreFunction($story,$link,$targetFile,$id,$chars) 
					{   
						 
						$story = substr($story,0,$chars);  
						$story = substr($story,0,strrpos($story,' '));  
						$story = $story."...<a style='color:#FFFACD;' href='$link?$targetFile=$id'>&nbspRead More</a>";  
						return $story;
					} 
 
					
					
				require "../Model/db_connect.php";
			$query="SELECT * FROM news WHERE id=1";
			$users=get($query);
			if(mysqli_num_rows($users) > 0)
			{
				
				$rows = mysqli_fetch_assoc($users);
				$read_more = readMoreFunction($rows['text'],"story.php","story_id",$rows['id'],530);

			
					
					echo "<div style='font-size:23px; color:#FFFFCC;'>  $rows[header] <br><hr color='	#00FFFF	'> </div>";
					echo "<img src= '$rows[image]' width='205px;' height='185px;' style='border:solid white 1px; padding:2px;  float:left; margin-right:10px; margin-bottom:5px;'>";
					
					echo $read_more;
					
					
					
					
							
				
			}
		?>
					
					</div>
					
					
			<div style="position:absolute; top:700px; color:#B3FFFF; text-align:justify; left:565px; width:400px;">		
					
			<?php
				
			$query="SELECT * FROM news WHERE id=2";
			$users=get($query);
			if(mysqli_num_rows($users) > 0)
			{
				
				$rows = mysqli_fetch_assoc($users);
				$read_more = readMoreFunction($rows['text'],"story.php","story_id",$rows['id'],560);	
				
					echo "<div style=' font-size:23px; color:#FFFFCC;'>    $rows[header] <br><hr color='	#00FFFF	'> </div>";
					echo "<img src= '$rows[image]' width='205px;' height='185px;' style='border:solid white 1px; padding:2px;  float:left; margin-right:10px; margin-bottom:5px;'>";
					echo $read_more;			
				
			}
		?>				

		</div>
		
		
		<div class="box" style="position:absolute; top:700px; display:fixed; color:#B3FFFF; text-align:justify; left:1030px; width:400px;" >
					<?php
				
			$query="SELECT * FROM news WHERE id=3";
			$users=get($query);
			if(mysqli_num_rows($users) > 0)
			{
				
				$rows = mysqli_fetch_assoc($users);
				$read_more = readMoreFunction($rows['text'],"story.php","story_id",$rows['id'],580);	
				
					echo "<div style=' font-size:23px; color:#FFFFCC;'> <td> $rows[header] </td><br><hr color='	#00FFFF	'> </div>";
					echo "<img src= '$rows[image]' width='205px;' height='185px;' style='border:solid white 1px; padding:2px;  float:left; margin-right:10px; margin-bottom:5px;'>";
					echo $read_more;			
				
			}
		?>
					
				</div>
			
			
		<div class="box" style="position:absolute; top:1270px; color:#B3FFFF; text-align:justify; left:100px; width:600px;" >
					<?php
				
			$query="SELECT * FROM news WHERE id=4";
			$users=get($query);
			if(mysqli_num_rows($users) > 0)
			{
				
				$rows = mysqli_fetch_assoc($users);
				$read_more = readMoreFunction($rows['text'],"story.php","story_id",$rows['id'],750);	
				
					echo "<div style='font-size:23px; color:#FFFFCC;'> <td> $rows[header] </td><br><hr color='	#00FFFF	'> </div>";
					echo "<img src= '$rows[image]' width='235px;' height='185px;' style='border:solid white 1px; padding:2px;  float:left; margin-right:10px; margin-bottom:5px;'>";
					echo $read_more;			
				
			}
		?>
				</div>	
				
			<div class="box" style="position:absolute; top:1270px; color:#B3FFFF; text-align:justify; left:800px; width:600px;" >
				
					<?php
				
			$query="SELECT * FROM news WHERE id=5";
			$users=get($query);
			if(mysqli_num_rows($users) > 0)
			{
				
				$rows = mysqli_fetch_assoc($users);
				$read_more = readMoreFunction($rows['text'],"story.php","story_id",$rows['id'],750);	
				
					echo "<div style='font-size:23px; color:#FFFFCC;'> <td> $rows[header] </td><br><hr color='	#00FFFF	'> </div>";
					echo "<img src= '$rows[image]' width='235px;' height='185px;' style='border:solid white 1px; padding:2px;  float:left; margin-right:10px; margin-bottom:5px;'>";
					echo $read_more;			
				
			}
		?>
					
			</div>	
					
				
					
		
			<div class="Lastnav">
				<p style="position:absolute; top:50px; left: 160px; color:#fff "> 
					APPOINTMENT :<br><br>

					10678<br>
					(02) 55037242<br>
					09606-276555</p>
					
				<p style="position:absolute; top:50px; left: 550px; color:#fff ">PABX : (02) 8431661- 5<br>
					Ambulance : 01714-090000<br>
					Master Health Check : (02) 8431600<br>
					Contact Us<br>

					Please give your Feedback:<br>
					Dr. Ratnadeep Chaskar<br>
					Chief Executive Officer<br>
					ceo@apollodhaka.com<br>
					
				</p>
				
				<p style="position:absolute; top:50px; left:1000px; color:#fff ">OUR INFO CENTER:<br>

				Chittagong info : 01714-162759<br>
				Sylhet info : 01713-047461<br>
				Bogra info : 01713 193274<br>
				khulna info : 01713-240312<br>
				Comilla info : 01755-533154<br>
				Mymensingh info : 01755-536448<br>
				Narayanganj Info: 01713 479 887<br>
				Maijdee Info: 01755-649743<br>
				
				</p>
				
				
			</div>
	
		
	</body>
	 
</html>
