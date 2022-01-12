<?php
	session_start();
	include "db_connect.php";
	
	$email = $_GET['email'];
	$pass = $_GET['password'];
	$pass = hash('sha512', $pass);
	
	$sql = "UPDATE users SET password='$pass' WHERE email = '$email'";
	$result = $conn->query($sql);
	header("location:login.php?res=1");
?>