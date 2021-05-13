<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	
	
	$conn = new mysqli($servername,$username, $password );
	if ($conn->connect_error ) {
		die("Connection Failed." . $conn->connect_error);
		
	$sql = "create Database created b ";
		echo "Erorr creating database";
	
	} else {
		echo " Connected Successfully ";
	}
?>
