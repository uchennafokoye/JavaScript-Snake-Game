<?php

	
//DATABASE INFORMATION

/*
	$host = "localhost";
	$username = "fokoye";
	$password = "dance_92";
	$db = "eat_apple";
	$connect = new mysqli($host, $username, $password, $db, 3306);

	*/

	$url = parse_url(getenv("DATABASE_URL"));

	$host = $url["host"];
	$username = $url["user"];
	$password = $url["pass"];
	$db = substr($url["path"], 1);



	$connect = new mysqli($host, $username, $password, $db);

	// ESTABLISH CONNECTION
	if ($connect->connect_error) {
		die("Connection failed: " . $connect->connect_error); 
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