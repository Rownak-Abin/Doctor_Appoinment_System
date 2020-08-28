
	<html>
		<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

			<link rel="stylesheet" type="text/css" href="style/sty.css">
	
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		
		
		
		
			<script>
		function search()
		{
			http = new XMLHttpRequest();
			var search_word=document.getElementById("search_input").value;
			http.onreadystatechange=function()
			{
				if(http.readyState == 4 && http.status == 200)
				{
					document.getElementById("search_result").innerHTML=http.responseText;
				}
			}
			http.open("GET","search.php?sk="+search_word,true);
			http.send();
		}
	</script>
		
		
		
		</head>
	
	
	<body  style="  height:1900px;   " >
	
	
		
	
		<div id="carouselExampleIndicators" class="carousel slide"  data-interval="4000" data-ride="carousel">
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
					
					<li style="position:absolute; top:0; left:270px;"><a class="active" href="#"><i class="fa fa-home">&nbsp HOME</i></a></li>					
					<li style="position:absolute; top:0; left:410px;"><a style="position:relative; margin-left:10px;" href="#news"><i class="fa fa-list">&nbsp NEWS</i></a></li>
					<li style="position:absolute; top:0; left:560px;"><a style="width:900px;"><i class="fa fa-user-md"> &nbsp SPECIALISTS</i></a>
					<div class="ulul">
						<ul  >
							<li><a style="padding-left:50px; " href="DocList.php?category=Cardiologist">Cardiologist</a></li>
							<li><a style="padding-left:55px;" href="DocList.php?category=Nephrologist">Nephrologist</a></li>
							<li style="padding-left:-5px;"><a href="DocList.php?category=Gastroenterologist">Gastroenterology</a></li>
							<li><a style="padding-left:50px;" href="DocList.php?category=ENT"> &nbsp &nbsp &nbsp &nbsp &nbsp ENT</a></li>
							
							<li ><a style="padding-left:50px;" href="DocList.php?category=Eye Specialist">Eye Specialist</a></li>
							<li ><a style="padding-left:80px;" href="DocList.php?category=others">Others</a></li>
						</ul>
					</div>
					</li>
					<li style="position:absolute; top:0; left:750px;"><a  href="#"><i class="fa fa-info-circle">&nbsp FOR DOCTORS</i></a></li>
					<li style="position:absolute; top:0; left:940px;"><a href="#"><i class="fa fa-h-square">&nbsp HEALTH LIBRARY</i></a></li>
				
				</ul>
				
			
	
			
			</div><br><br><br>
			
			<div >
			
			
			<input class="search-txt" type="text" id="search_input" onkeyup="search()" placeholder="Search Doctor">
				<a class="search-btn" style=""><i class="fa fa-search-plus"></i>
				</a>
			<div style="position:absolute; left:1245px; color:#fff; top:143px;" id="search_result">
		
	</div>
	
	
	<?php
	
		function readMoreFunction($story,$link,$targetFile,$id,$chars) 
					{   
						 
						$story = substr($story,0,$chars);  
						$story = substr($story,0,strrpos($story,' '));  
						$story = $story."...<a style='color:	#FF6347;' href='$link?$targetFile=$id'>&nbspRead More</a>";  
						return $story;
					} 
 
					
	
	?>
	
			<div style="position:relative;  color:#00008B; left:105px; width:500px; font-size:28px; top:-40px;" id="news">
					News & Events<br><hr color="#8B4513" width="1317px" style="height:0.2px;">
			
			
			</div>
	
			<div style="position:absolute; top:70px;">
			
			
			<div class="frame" style="left:103px;">	
			<div  style="position:absolute; color:	#000; top:20px; left:20px;  text-align:justify; width:368px;">
			
			
					<?php
					
					
				require "../Model/db_connect.php";
			$query="SELECT * FROM news WHERE id=1";
			$users=get($query);
			if(mysqli_num_rows($users) > 0)
			{
				
				$rows = mysqli_fetch_assoc($users);
				$read_more = readMoreFunction($rows['text'],"story.php","story_id",$rows['id'],460);

			
					
					echo "<div style='font-size:23px; color:	#DC143C;'>  $rows[header] <br><hr color='	#00BFFF	'> </div>";
					echo "<img src= '$rows[image]' width='215px;' height='180px;' style='border:solid black 1px; padding:2px;  float:left; margin-right:10px; margin-bottom:5px;'>";
					
					echo $read_more;
						
				
			}
		?>
					
			</div>
					
			</div>		
					
				
					
			<div class="frame" style="left: 558px;">		
			<div style="position:absolute; top:20px; color:#000; text-align:justify; left:20px; width:368px;">		
					
			<?php
				
			$query="SELECT * FROM news WHERE id=2";
			$users=get($query);
			if(mysqli_num_rows($users) > 0)
			{
				
				$rows = mysqli_fetch_assoc($users);
				$read_more = readMoreFunction($rows['text'],"story.php","story_id",$rows['id'],460);	
				
					echo "<div style=' font-size:23px; color:#DC143C;'>    $rows[header] <br><hr color='	#00BFFF	'> </div>";
					echo "<img src= '$rows[image]' width='215px;' height='180px;' style='border:solid black 1px; padding:2px;  float:left; margin-right:10px; margin-bottom:5px;'>";
					echo $read_more;			
				
			}
		?>				

		</div>
		
		</div>
		
		
		<div class="frame" style="left:1013px;">	
		
		<div class="box" style="position:absolute; top:20px;  color:#000; text-align:justify; left:20px; width:368px;" >
					<?php
				
			$query="SELECT * FROM news WHERE id=3";
			$users=get($query);
			if(mysqli_num_rows($users) > 0)
			{
				
				$rows = mysqli_fetch_assoc($users);
				$read_more = readMoreFunction($rows['text'],"story.php","story_id",$rows['id'],460);	
				
					echo "<div style=' font-size:23px; color:#DC143C;'> <td> $rows[header] </td><br><hr color='	#00BFFF	'> </div>";
					echo "<img src= '$rows[image]' width='215px;' height='180px;' style='border:solid black 1px; padding:2px;  float:left; margin-right:10px; margin-bottom:5px;'>";
					echo $read_more;			
				
			}
		?>
					
				</div>
				
				</div>
			
			
			<div class="frame" style="width:640px; top:1250px; background:	#C9FDFF; height:435px; left:100px;">	
			
		<div class="box" style="position:absolute; top:20px; color:#000; text-align:justify; left:29px; width:580px;" >
					<?php
				
			$query="SELECT * FROM news WHERE id=4";
			$users=get($query);
			if(mysqli_num_rows($users) > 0)
			{
				
				$rows = mysqli_fetch_assoc($users);
				$read_more = readMoreFunction($rows['text'],"story.php","story_id",$rows['id'],650);	
				
					echo "<div style='font-size:23px; color:#DC143C;'> <td> $rows[header] </td><br><hr color='	#00BFFF	'> </div>";
					echo "<img src= '$rows[image]' width='235px;' height='185px;' style='border:solid black 1px; padding:2px;  float:left; margin-right:10px; margin-bottom:5px;'>";
					echo $read_more;			
				
			}
		?>
				</div>	
				</div>
				
				
				
				
		<div class="frame" style="width:640px; top:1250px;   background:#C9FDFF;height:435px; left:785px;">	
				
				
			<div class="box" style="position:absolute; top:20px; color:#000; text-align:justify; left:29px; width:580px;" >
				
					<?php
				
			$query="SELECT * FROM news WHERE id=5";
			$users=get($query);
			if(mysqli_num_rows($users) > 0)
			{
				
				$rows = mysqli_fetch_assoc($users);
				$read_more = readMoreFunction($rows['text'],"story.php","story_id",$rows['id'],650);	
				
					echo "<div style='font-size:23px; color:#DC143C;'> <td> $rows[header] </td><br><hr color='	#00BFFF	'> </div>";
					echo "<img src= '$rows[image]' width='235px;' height='185px;' style='border:solid black 1px; padding:2px;  float:left; margin-right:10px; margin-bottom:5px;'>";
					echo $read_more;						
			}
		?>
					
			</div>	
			
		
			
			</div>
					
				
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
