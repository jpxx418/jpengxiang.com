<?php

	$link = mysqli_connect("localhost", "jpengxia_jpxx418", "091418", "jpengxia_jpxx");

	if (mysqli_connect_error()) {
		die("Could not connect to database");
	}
	
	$query = "INSERT INTO `users` (`name`) VALUES('Ian')";
	
	
	mysqli_query($link, $query);
	
	$query = "SELECT * FROM users";
	
	
	if ($result = mysqli_query($link, $query)) {
		while($row = mysqli_fetch_array($result)) {
		
		print_r($row);
		}
	} else {
		echo "It failed";
	}


?>