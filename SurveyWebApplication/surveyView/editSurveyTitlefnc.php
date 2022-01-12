<?php
	session_start();
	include "db_connect.php";
	
	$id = $_SESSION['sID'];
	$surName = $_GET['survey_Name'];
	
	$sql = "UPDATE survey_list SET surveyName='$surName' WHERE survey_ID = '$id'";
	$result = $conn->query($sql);
	header("location:editSurvey.php?id=$id");
?>