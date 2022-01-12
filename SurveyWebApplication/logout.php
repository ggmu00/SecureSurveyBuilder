<?php
	session_start();
	session_unset();
	header("location:http://localhost:8080/SurveyWebApplication/index.php");
	session_destroy();
	exit;
	?> 