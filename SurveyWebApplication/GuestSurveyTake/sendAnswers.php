<?php
	
	session_start();
	
	include "db_connect.php";
	
	$sID =$_GET['surveyCode'];
	$answers = $_GET['answer'];
	//echo $sID;exit;
	
	//$sql = "INSERT s_answers(survey_ID, answer)VALUES('$sID', '$answers')";
	$sql = "INSERT s_answers(answer)VALUES('$answers')";

	$result = $conn->query($sql);
	header("location:surveyTaker.php");
?>