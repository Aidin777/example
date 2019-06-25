<?php

	function showAllComments(){

		$conn = mysqli_connect('localhost', 'root', 'mysql', 'example');
		mysqli_query($conn, 'SET NAMES utf8');

		var_dump($conn);
		$table = 'future';
		$query = "SELECT * FROM $table ORDER BY id DESC";

		$res = mysqli_query($conn, $query);
		var_dump($res);

		while($row = mysqli_fetch_array($res)) 
		{	
			$rows[] = $row;

		}
		// var_dump($rows);
		// discon($conn);

		return $rows;
	}
?>