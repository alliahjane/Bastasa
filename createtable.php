<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname= "students";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if($conn->connect_error){ 
		die("Connection Failed: ". $conn->connect_error);
	}
	
	$sql= "create table students(
		StudentNumber varchar(10) primary key,
		LastName varchar(50) not null,
		FirstName varchar(50) not null,
		MiddleName varchar(50) not null,
		Course varchar(50) not null,
		Year int(1) not null,
		EmailAddress varchar(50) not null,
		ContactNumber varchar(11) not null)";
			
		if($conn->query($sql) === true){
			echo "Table created successfully";
		} else {
			echo " Error creating table: " . $conn->error;
		}
	$conn->close();
?>