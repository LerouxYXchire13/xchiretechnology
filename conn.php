<?php
	$conn = new mysqli('localhost', 'root', '', 'tourism');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>