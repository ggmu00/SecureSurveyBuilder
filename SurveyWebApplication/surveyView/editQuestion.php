<html>
<head><title>Edit Survey</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<?php
session_start();
include "db_connect.php";
if(!isset($_SESSION['name'])){
		header("location:login.php");
		//$sID = $_SESSION[''];
	}

$_SESSION['qID']=$_GET['id'];
?>
<header><title>Edit Survey Title</title></header>
<body>
<form action="editQuestionfnc.php"method = "get">
<table>
	<tr>
		<td>Edit Title: </td>
		<td><input type ="text" name ="question_Name"/></td>
	</tr>
	</tr>
		<td><input type="submit" class="button" value="Submit"/></td>
	</tr>
</table>
</form>
