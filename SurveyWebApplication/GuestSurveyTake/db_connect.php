<?php
$servername="localhost";
	$dbname="survey";
	$username="root";
	$password="";
	
//create connection
	$conn=new mysqli($servername, $username, $password, $dbname);
//check connection
	if($conn->connect_error){
		die("Connection failed: ".$connect_error);
	}
	?>