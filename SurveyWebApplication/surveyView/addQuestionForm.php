<?php
			
	session_start();
				
	include "db_connect.php";
	
	//$result = $conn->query($sql);
	//$row=$result->fetch_assoc();
	
	$qTitle = $_POST['questionTitle'];
	$sid=$_SESSION['sID'];
	
	$sql = "INSERT INTO question_list(survey_ID, question_body)VALUES('$sid', '$qTitle')";

	$result = mysqli_query($conn, $sql);
				
	header("location: editSurvey.php?id=$sid");
?>