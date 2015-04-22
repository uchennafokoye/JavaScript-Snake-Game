<?php
	$host = "sql3.freemysqlhosting.net"; 
	$user = "sql372132"; 
	$password = "mF6!aS9!"; 
	$database = "sql372132"; 
	$port = "3306"; 
	
	$connect = mysqli_connect($host, $user, $password, $database, $port); 
	
	if ($connect->connect_error) {
		die("Connection failed: " . $connect->connect_error); 
	}
	
	echo "Connected successfully"; 


?>