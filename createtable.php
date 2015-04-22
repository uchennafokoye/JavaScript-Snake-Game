<?php

	require('connect.php'); 

	$sql = "CREATE TABLE HighestScore(
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	nickname VARCHAR(30), 
	highestscore INT(6) UNSIGNED
	)";
	
	
	if ($connect->query($sql) == TRUE){
		echo "Table HighestScore created successfully"; 
	} else {
		echo "Error creating table: " . $connect-error; 
	}
	
	$connect->close();
	


?>