<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	
	$conn = new mysqli($servername, $username, $password);
	
	if($conn->connect_error){ 
		die("Connection Failed: ". $conn->connect_error);
	}
	
	$sql= "create database students";
		if($conn->query($sql) === true){
			echo "Database created successfully";
		} else {
			echo " Error creating database: " . $conn->error;
		}
	$conn->close();
?>