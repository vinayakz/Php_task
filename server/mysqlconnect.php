<?php
	$servername = "localhost";
	$username = "everychi_test";
	$password = "l{{NikTU#_DW";
	$dbname = "everychi_test";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
?>