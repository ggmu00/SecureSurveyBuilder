<html>
   <head><title>Send Reset Password Link</title></head>
   <body>
        Send Reset Password Link
		<form action="resetPasswordfnc.php" method="get">  
            <table>
				<td>
					<tr>Enter Email Address:</tr>
					<tr><input type="text" name="email" id="email" ></tr>
				</td>
				<td>
					<tr>Enter New Password:</tr>
					<tr><input type="password" name="password" id="password" ></tr>
				</td>
            <input type="submit" name="passReset">
        </form>
   </body>
</html>