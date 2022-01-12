<?php
	session_start();
	include "db_connect.php";
	
	$sid=$_SESSION['sID'];

	
	$id = $_SESSION['qID'];
	$qName = $_GET['question_Name'];
	
	$sql = "UPDATE question_list SET question_body='$qName' WHERE question_ID = '$id'";
	$result = $conn->query($sql);
	header("location:editSurvey.php?id=$sid");
?>