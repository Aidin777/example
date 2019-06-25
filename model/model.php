<?php

	$conn = mysqli_connect('localhost', 'root', 'mysql', 'example');
	mysqli_query($conn, 'SET NAMES utf8');
	$table = 'future';

	function showAllComments(){

		global $conn;		
		global $table;
		$query = "SELECT * FROM $table ORDER BY id DESC";

		$res = mysqli_query($conn, $query);

		while($row = mysqli_fetch_array($res)) 
		{	
			$rows[] = $row;

		}
		
		return $rows;
	}

	function insertComment($name, $comment){
		global $conn;		
		global $table;

		$query = "INSERT INTO $table (`name`, `comment`) VALUES ('$name', '$comment')";

		$result = mysqli_query($conn, $query);

	}
?>