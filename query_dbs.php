<?php
/ CONNECT TO THE DATABASE

	$DB_NAME = 'r561250_player_details';
	$DB_HOST = 'localhost';
	$DB_USER = 'r561250_rat';
	$DB_PASS = 'team_vermin';
	
	$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
	
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

// A QUICK QUERY ON A FAKE USER TABLE
	$query = "SELECT * FROM `Player_Database` WHERE `status`='competency'";
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

// GOING THROUGH THE DATA
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo stripslashes($row['username']);	
		}
	}
	else {
		echo 'NO RESULTS';	
	}
	
// CLOSE CONNECTION
	mysqli_close($mysqli);
	

?>
