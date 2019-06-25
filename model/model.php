<?php

	function showAllComments($conn){

		$query = "SELECT * FROM $table";

		$res = mysqli_query($conn, $query);

		while($row = mysqli_fetch_array($res)) 
		{	
			$rows[] = $row;
		}

		discon();

		return $rows;
	}
?>