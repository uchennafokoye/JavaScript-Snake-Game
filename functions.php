<?php

    $json = json_decode(file_get_contents('php://input'));
    $nickname = $json->userid;
    $score = $json->score;

    $query = insertIntoTable($nickname, $score);
    if ($query != false){
        echo "<p>Your High Score: " . $query . "</p>";
    }
    echo getTop10();

	function insertIntoTable($userid, $currentScore) {

		require('connect.php');

        $sql = "SELECT highestscore FROM HighestScore
		WHERE nickname = '" .$userid. "'";

        $result = $connect->query($sql);
		$hscore = $currentScore;

		if ($result->num_rows == 0){

			$sql = "INSERT INTO HighestScore(nickname, highestscore)
			VALUES('" .$userid. "', " .$currentScore. ")";


			if ($connect->query($sql) == TRUE){
                return $hscore;
			}	else {
	    		return false;
			}
			
		}
		
		if ($result->num_rows == 1){
			
			$hscore = $result->fetch_assoc()["highestscore"]; 
			if ($hscore > $currentScore) {
				return $hscore;
			} 

            $hscore = $currentScore;
			$sql = "UPDATE HighestScore
			SET highestscore = " .$currentScore.
			" WHERE nickname = '" .$userid. "'";
	
			if ($connect->query($sql) == TRUE){
                return $hscore;
			} else {
	    		return false;
			}


		}
		
		if ($result->num_rows > 1){
			echo "Error! Multiple users with the same nickname";
            return false;
		}

        return $hscore;
		 
	}

function getTop10() {
    require('connect.php');

    $sql = "SELECT nickname, highestscore
		FROM HighestScore
		ORDER BY highestscore DESC
		LIMIT 10";

    $result = $connect->query($sql);
    $rank = 1;

    $value = "";
    if ($result->num_rows > 0) {
        $value = "<table><tr><th>Rank</th><th>User</th><th>Top 10 Scores</th></tr>";
        while($row = $result->fetch_assoc()) {
            $value .= "<tr><td>".$rank."</td><td>".$row["nickname"]."</td><td>".$row["highestscore"]." ".$row["lastname"]."</td></tr>";
            $rank++;
        }
        $value .= "</table>";
    } else {
        $value = "0 results";
    }

    return $value;
}




