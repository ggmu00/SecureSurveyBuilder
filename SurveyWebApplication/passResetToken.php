<?php
	session_start();
    include "db_connect.php";
     
    $email = $_POST['email'];
    $result = mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");
 
	if($result!==false && $result->num_rows>0){
     
		$headers = "From: noReply \r\n";
		$to = $email;
		$subject = "PASSWORD RESET";

		$message = "http://localhost:8080/SurveyWebApplication/resetPassword.php";
		
		if (mail($to, $subject, $message, $headers))
			echo "Check Your Email and Select the link sent to your email";
		else
			echo 'UNSUCCESSFUL..';
		}
	header("location: login.php");
?>