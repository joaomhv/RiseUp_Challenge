<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "riseup_challenge";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	mysqli_set_charset($conn,"utf8");   
?>