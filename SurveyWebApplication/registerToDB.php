<html>
<title>Account Created!</title>
<h1 align="center">Go to Login Page</h1>
<?php
	
	include "db_connect.php";

    $firstName=$_GET['firstName'];    
	$lastName=$_GET['lastName'];
    $email=$_GET['email'];
	$password = $_GET['password'];
    $passwordVerify=$_GET['verify-password'];
	
	if($password==$passwordVerify){
	
	if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
	
	$passwordVerify = password_hash($passwordVerify, PASSWORD_DEFAULT);
	
    $sql = "INSERT INTO users(firstName, lastName, email, password)VALUES('$firstName','$lastName', '$email', '$passwordVerify')";

    if($conn->query($sql)===TRUE){
	?>
       <h1 align = "center">New record created successfully</h1>
    <?php
	}else{
        echo "Error: record couldn't be created";
    }

?>
<form align = "center" method="get" action ='login.php' >
	<table align="center">
		<tr>
			<td></td>
			<td><input type="submit" value="Continue"/></td>
		</tr>
	</table>
</form>
</html>
<?php
	}else{
		header("location:register.php?err=2");
	}
	}else{
		header("location:register.php?err=3");
	}
	


?>