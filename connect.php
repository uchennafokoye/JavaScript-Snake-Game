<?php

	
//DATABASE INFORMATION
	$url = parse_url(getenv(CLEARDB_DATABASE_URL));

	$server = "us-cdbr-iron-east-02.cleardb.net";
	$username = "b953363084be89";
	$password = "95140d2e";
	$db = "heroku_874c77c8c5f7a93";

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