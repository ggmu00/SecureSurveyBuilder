<html>
<?php 
	session_start();
	if(isset($_SESSION['name'])){
		echo "WELCOME ". $_SESSION['name'];
	}else{
		header("location:login.php");
	}
	//$_SESSION["id"]

?>
	<head>
		<title>VIEW SURVEYS</title>
		<link rel="stylesheet" type="text/css" href="CSS/main.css"/>
	</head>
	<body>
		<ul>
			<li><a href="homePage.php">Home</a></li>
			<li><a href="SurveyView.php">View Surveys</a></li>
			<li><a href ="logout.php">Log Out</a></li>
		</ul>
		<h2>
		<ul>
			<li><a href="surveyView/addSurvey.php">Create New Survey</a></li>
			<li><a href = "surveyView/viewAnswers.php">View Answers</a></li>
			<!--<li>Search For Survey
				<form name ="user" method="post" action="searchServer.php">
					Email:<input type = "text" length="60" name="email"/>
				<input type ="submit" value="Search"/>-->
	</form>
	</ul></h2>
	<table>
  <tr>
    <td>Survey ID ||</td>
    <td>Survey Name ||</td>
  </tr>
<?php
	include "db_connect.php";
	
	$userID = $_SESSION['ID'];
	
	$sql = "SELECT * FROM survey_list WHERE user_ID = '$userID'";
	
	$result = $conn->query($sql);
	if($result !== false && $result->num_rows >0){
		while($row = $result->fetch_assoc()){
			?>
			<tr>
				<td><?php echo $row['survey_ID']; ?></td>
				<td><?php echo $row['surveyName']; ?></td>
				<td><a href="surveyView/editSurvey.php?id=<?php echo $row['survey_ID']; ?>">Edit</a></td>
				<td><a href="surveyView/deleteSurvey.php?id=<?php echo $row['survey_ID']; ?>">Delete</a></td>
			</tr>
<?php			
	
		}
		?>
		</table>
<?php
	}
?>
	</body>
</html>