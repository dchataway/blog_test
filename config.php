<?php 
	session_start();
	// connect to database - $conn object can be used throughout the application
	$conn = mysqli_connect("127.0.0.1", "root", "4313enter", "test");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
	//echo 'Connected successfully';

    // define global constants
	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://localhost:8080');
?>