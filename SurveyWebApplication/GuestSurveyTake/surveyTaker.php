<html>
	<head>
		<title>HOME PAGE</title>
			<link rel="stylesheet" type="text/css" href="CSS/main.css"/>
	</head>
	<body>
		
		<ul>
			<li><a href="../index.php">Home</a></li>
			<li><a href="surveyTaker.php">Take Survey</a></li>
			<li><a href="../login.php">Login</a></li>
			
		</ul>
		
		<div class="header">
			<h1>Take A Survey</h1>
		</div>
		<form action="surveyFinder.php" method="get">
		<table>
			<tr>
				<td>Enter a Survey Code:</td>
				<td><input type="text" name="surveyCode" id="surveyCode"/></td>
				<td><input type="submit" value="Search"/></td>
			</tr>
		</table>
		</form>
		
	</body>
</html>