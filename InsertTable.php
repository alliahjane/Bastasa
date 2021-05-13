<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname= "students";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if($conn->connect_error){ 
		die("Connection Failed: ". $conn->connect_error);
	}
	
	$sql = "insert into students(studentnumber, lastname, firstname,
			middlename, course, year, emailaddress, contactnumber)
		value('19-0750', 'Bastasa', 'Alliah Jane', 'Barandino', 'BSIT', '2',
			'alliah.jane.barandino.bastasa@gmail.com', '09359290698')";
	
	if($conn->query($sql) === true){
			echo "New record successfully";
		} else {
			echo " Error inserting data: " . $conn->error;
		}
	$conn->close();
?>