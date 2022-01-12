<html>
<?php 
	session_start();
	if(isset($_SESSION['name'])){
	//session_regenerate_id(true);
	echo "WELCOME ". $_SESSION['name'];
	}
?>
	<head>
		<title>HOME PAGE</title>
			<link rel="stylesheet" type="text/css" href="CSS/main.css"/>
	</head>
	<body>
		
		<ul>
			<li><a href="adminHomePage.php">Home</a></li>
			<li><a href="viewUsers.php">View Users</a></li>
			<li><a href= "../login.php">Logout</a></li>
		</ul>
		
		<div class="header">
			<h1>HOME PAGE</h1>
		</div>		
	</body>
</html>