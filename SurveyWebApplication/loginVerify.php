<?php
	session_start();
		
	if(isset($_POST) && !empty($_POST)){
		if($_POST['captcha']==$_SESSION['code']){
	
			include "db_connect.php";
	
			$result = mysqli_query($conn, "DELETE FROM `loginattempt` WHERE `timestamp`<(now() - interval 5 minute)");
			$ip = $_SERVER["REMOTE_ADDR"];
			$resulti = mysqli_query($conn, "SELECT COUNT(*) FROM `loginattempt` WHERE `ipaddress` LIKE '$ip' AND `timestamp`>(now()-interval 5 minute)");

			$count = mysqli_fetch_array($resulti, MYSQLI_NUM);

			if($count[0]>=3){
				echo "You are allowed 3 attempts in 5 minutes";
				exit;
			}
	
			$email = $_POST['email'];
			$password = $_POST ['password']; 
					
			$email = mysqli_real_escape_string($conn, $email);
			$password = mysqli_real_escape_string($conn, $password);

			//$sql = "SELECT * FROM users WHERE email = '$email' AND password='$password'";
			$sql = "SELECT * FROM users WHERE email = '$email'";

			$result = $conn->query($sql);		
	
	
			if($result!==false && $result->num_rows>0){
				
				while($row=$result->fetch_assoc()){
					$hashed_password = $row["password"];

					$verify=password_verify($password, $hashed_password);

					if($verify){
						$_SESSION['name']=$row["firstName"];
						$_SESSION['ID']=$row["ID"];
						$id = $row["ID"];
						$firstName = $row["firstName"];
						$lastName=$row["lastName"];
						
						header("Location: http://localhost:8080/SurveyWebApplication/homePage.php"); 
					exit;
					}else{	// if password is incorrect		
						mysqli_query($conn, "INSERT INTO loginattempt (ipaddress, timestamp)VALUES('$ip', CURRENT_TIMESTAMP)");		
						header("location: login.php?err=1");
					}
				}
				
				
				if($email=="ADMIN" && $password=="admin123"){
					header("Location: http://localhost:8080/SurveyWebApplication/admin/adminHomePage.php");
					exit;
				}
					
	
				
			}else{
				mysqli_query($conn, "INSERT INTO loginattempt (ipaddress, timestamp)VALUES('$ip', CURRENT_TIMESTAMP)");		
				header("location: login.php?err=1");
			
			}
		}else{
			header("location:login.php?er=4");
		}
	}
?>
	
