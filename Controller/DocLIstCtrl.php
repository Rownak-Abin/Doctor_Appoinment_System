	<?php
	
	include "../Model/db_connect.php";

	function getAllDoctors()
	{
		$query ="SELECT * FROM doclist";
		$Doctors = get($query);
		return $Doctors;	
	}
	
	?>