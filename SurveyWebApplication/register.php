<html>
<?php
if(isset($_GET['err']))
{
	if($_GET['err']==2){
		echo "Enter valid email";
	}
	if($_GET['err']==3){
		echo "Passwords Do Not Match";
	}
}
?>
<head><title>REGISTER</title></head>
<body>
<h1>REGISTER</h1>
<form name="user" method="get" action="registerToDB.php">
<table align = "center">
<td>
	<tr>
		<td>First Name:</td>
		<td><input type="text" length="60" name="firstName"required/></td>
	</tr>
	<tr>
		<td>Last Name:</td>
		<td><input type ="text" length ="60" name="lastName"required/></td>
	</tr>
	<tr>
		<td>Email: </td>
		<td><input type="text" length="60" name="email"required/></td>
	</tr>
	<tr>
		<td>Password: </td>
		<td><input type = "password" length ="60" name="password"required/></td>
	</tr>
	<tr>
		<td>Verify Password: </td>
		<td><input type = "password" length ="60" name="verify-password"required/></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Submit"/></td>
	</tr>
</table>
</form>
</body>
</html>