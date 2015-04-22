<?php

	
//DATABASE INFORMATION
	$url = parse_url(getenv(CLEARDB_DATABASE_URL));

	$server = $url["host"];
	$username = $url["user"];
	$password = $url["pass"];
	$db = substr($url["path"], 1);

	// ESTABLISH CONNECTION
	$connect = new mysqli($host, $username, $password, $db);
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
		
	}


?>