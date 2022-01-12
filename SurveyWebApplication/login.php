<html>
<?php
if(isset($_GET['res']))
{
	if($_GET['res']==1){
	echo "Password successfully reset";
}}

if(isset($_GET['err']))
{
	if($_GET['err']==1){
		echo "Enter valid username and password";
	}
}
if(isset($_GET['er']))
{
	if($_GET['er']==4){
		echo "Enter valid captcha";
	}
}
?>
<head><title>LOGIN</title></head>
<h1 align=center>LOGIN</h1>
<form method="post" action ="loginVerify.php">
	<table align="center">
		<tr>
			<td> Email:</td>
			<td><input type="text" name="email" required/></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password"required/></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><img src="captcha.php"/></td>
		</tr>
		<tr>
			<td>Not a robot:</td>
			<td><input type = "text" id="captcha" name="captcha"/></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="login" value="Submit"/></td>
		</tr>
	</table>
</form>
	<table align ="center">
		<tr>
			<td></td>
			<td><a href = http://localhost:8080/SurveyWebApplication/register.php><input type ="submit" value="Create Account"/>
		</tr>
		<tr>
			<td></td>
			<td><a href = http://localhost:8080/SurveyWebApplication/forgotPass.php>Forgot Password</a></td>
	</table>

</html>