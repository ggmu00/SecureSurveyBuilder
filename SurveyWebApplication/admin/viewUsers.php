<html>
<?php 
	session_start();
	if(isset($_SESSION['name'])){
		//session_regenerate_id(true);
		echo "WELCOME ". $_SESSION['name'];
	}
?>
<head><title>Search User</title>
			<link rel="stylesheet" type="text/css" href="CSS/main.css"/>
</head>
<body align="center">
	<h1> Search User Form</h1>
	<ul>
			<li><a href="adminHomePage.php">Home</a></li>
			<li><a href="viewUsers.php">View Users</a></li>
			<li><a href= http://localhost:8080/SurveyWebApplication/login.php>Logout</a></li>
		</ul>

<table>
  <tr>
    <td>ID</td>
    <td>First Name</td>
    <td>Last Name</td>
    <td>Email</td>
  </tr>
<?php
	include "db_connect.php";
	
	$sql = "SELECT * FROM users WHERE ID>1";
	
	$result = $conn->query($sql);
	if($result !== false && $result->num_rows >0){
		while($row = $result->fetch_assoc()){
			?>
			<tr>
				<td><?php echo $row['ID']; ?></td>
				<td><?php echo $row['firstName']; ?></td>
				<td><?php echo $row['lastName']; ?></td> 
				<td><?php echo $row['email']; ?></td>				
				<td><a href="delete.php?id=<?php echo $row['ID']; ?>">Delete</a></td>
			</tr>
<?php			
		}
		?>
		</table>;
<?php
	}
?>

			
	</form>
</body>
</html>