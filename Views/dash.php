<?php

	$s="localhost";
	$u="root";
	$p="";
	$d="medipro";
	$conn=mysqli_connect($s,$u,$p,$d);
	$rs=mysqli_query($conn,"SELECT * FROM doclist");
	
?>
<html>
	<head>
		<style>		
			.bx{
				position:absolute;
				left:380px;
				width:930px;
				background:	#4BF2F2;
				padding:20px;
				
			}
			
		</style>
		
	</head>
	
	<body>
		<table align="center" border="1">
			
				<?php
				echo "<div class='bx'>";
				
				echo "<label style='color:blue; font-size:18px;'>ID &emsp; &emsp; &emsp;  Name 
				&emsp; &emsp; &emsp; &emsp; &emsp; &nbsp   Category &emsp; &emsp; 
				&emsp; &emsp; &emsp; &emsp;  Description</label><hr><br>";
					while($row=mysqli_fetch_assoc($rs))
					{
						
						echo "$row[id]";
						
					
						echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp $row[name]";
						
					
						echo "<label class='bx' style='width:200px;padding:0px;  left:280px;' > $row[category]</label>";
						
						echo "<label class='bx' style='width:400px;padding:0px;  left:480px;' > $row[qualification]</label><br><br><br><hr>";
						
						
					}
					echo "</div>";
				?>
			
		</table>
	</body>
</html>