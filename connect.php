<?php

	
//DATABASE INFORMATION

	$host = "localhost";
	$username = "fokoye";
	$password = "dance_92";
	$db = "eat_apple";

	// ESTABLISH CONNECTION
	$connect = new mysqli($host, $username, $password, $db, 3306);
	if ($connect->connect_error) {
		die("Connection failed: " . $connect->connect_error); 
	} else {
		echo "Connected successfully";
	}


	// CREATE TABLE
	$result = $connect->query("SHOW TABLES LIKE 'HighestScore'");
	if ($result -> num_rows <= 0) {
		$sql = "CREATE TABLE HighestScore(
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		nickname VARCHAR(30), 
		highestscore INT(6) UNSIGNED
		)";
		$connect->query($sql); 
		
	} 


?>