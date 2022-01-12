<html>
<?php 
	session_start();
	if(!isset($_SESSION['name'])){
		header("location:login.php");
		//$sID = $_SESSION[''];
	}
?>
<head><title>CREATE SURVEY</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<br>

<form action="addSurveyfnc.php" method="post">
<table>
	<tr>
		<td>Survey Name:</td>
		<td><input type="text" length="60" name="surveyName" required/></td>
	</tr>
	<tr>
		<td><input class="button" type ="submit" value="Add Question"/></td>
		<td><button class="button" onclick="location.href='../SurveyView.php'" type="button">Back</button></td>
	</tr>
</table>
</form>
</body>
</html>