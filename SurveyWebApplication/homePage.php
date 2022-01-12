<html>
<?php 
	session_start();
	if(isset($_SESSION['name'])){
		echo "WELCOME ". $_SESSION['name'];
	}else{
		header("location:login.php");
		//$sID = $_SESSION[''];
	}
?>
	<head>
		<title>HOME PAGE</title>
			<link rel="stylesheet" type="text/css" href="CSS/main.css"/>
	</head>
	<body>
		
		<ul>
			<li><a href="homePage.php">Home</a></li>
			<li><a href="SurveyView.php">View Surveys</a></li>
			<li><a href="logout.php">Logout</a></li>
			
		</ul>
		
		<div class="header">
			<h1>HOME PAGE</h1>
		</div>		
	</body>
	
</html>