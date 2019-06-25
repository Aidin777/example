<?php

	$conn = mysqli_connect('localhost', 'root', 'mysql', 'example');
	mysqli_query($conn, 'SET NAMES utf8');

	function showAllComments(){

		global $conn;	
		$query = "SELECT * FROM future ORDER BY id";

		$res = mysqli_query($conn, $query);

		while($row = mysqli_fetch_array($res)) 
		{	
			$rows[] = $row;

		}
		return $rows;
	}

	function insertComment($name, $comment){
		global $conn;		
		

		$query = "INSERT INTO future (`id`, `name`, `data`, `comment`) VALUES ( NULL, '$name', CURRENT_TIMESTAMP, '$comment')";

		$result = mysqli_query($conn, $query);

	}
?>