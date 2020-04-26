<?php
	$key=$_GET["sk"];
	$s="localhost";
	$u="root";
	$p="";
	$d="medipro";
	$conn=mysqli_connect($s,$u,$p,$d);
	$query="SELECT name,id,category FROM doclist WHERE name LIKE '%$key%' and category!='Admin'";
	$rs=mysqli_query($conn,$query);
?>

<html>
<head>
		<style>
			.dp{
			border:none;
			opacity:0.6;
			color:#FFFACD;
			height:25px;
			background:#000;
			height:40px;
			text-align:left;
			width:208px;
			content-align:left;
			
			border-radius:5px;
				
				
			}
			
			.dp:hover{
				
				background:	#FFFAF0;
				color:#000;
			}
			
			
		</style>
</head>

<body>
<table>
	<?php
	
	
	
	if(!empty($key)){
		
		while ($row=mysqli_fetch_assoc($rs)) {
			
			
		
			echo "<a href='DocList.php?category=$row[category]'> 
			
			<input type='button' class='dp' value='$row[name]'></a> <br>";
			
		}
	}
	?>
</table>

</body>

</html>