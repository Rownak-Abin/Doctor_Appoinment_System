	<?php
	
	include "../Model/db_connect.php";

	function getAllDoctors($cat)
	{
		$query ="SELECT * FROM doclist WHERE category='$cat'";
		$Doctors = get($query);
		return $Doctors;	
	}
	
	?>
