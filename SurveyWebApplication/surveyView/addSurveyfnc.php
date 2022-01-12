<?php	
	session_start();
			
	include "db_connect.php";
				
	$userID = $_SESSION['ID'];
	$surveyName = $_POST['surveyName'];
	
	$sql = "INSERT INTO `survey_list`(`user_ID`, `surveyName`)VALUES('$userID', '$surveyName')";
	$result = mysqli_query($conn, $sql);
	
	$sql = "SELECT * FROM survey_list WHERE surveyName = '$surveyName'";
	$result = $conn->query($sql);
	$row=$result->fetch_assoc();
	$_SESSION['sID']=$row["survey_ID"];
	$sid=$_SESSION['sID'];
				
	header("location: addQuestion.php?id=$sid");
?>