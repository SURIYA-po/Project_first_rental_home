<?php

$host= "localhost";
	$username = "root";
	$password = "toor";
	$dbname = "Rental_home";

	// Create connection

	$conn = new mysqli($host, $username, $password, $dbname);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
    ?>