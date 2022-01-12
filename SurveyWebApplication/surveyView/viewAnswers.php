<html>
<header><title>View Answers</title></header>
<body>
<?php
	session_start();
	if(isset($_SESSION['name'])){
		
	}else{
		header("location:login.php");
	}
	include "db_connect.php";
	$_SESSION['sID']=$_SESSION['id'];
	
?>
<table>
	<tr>
		<td>Question Title</td>
		<td>Answer</td>
	</tr>
	<?php
	
		$sid=$_SESSION['sID'];
		$sql = "SELECT * FROM s_answers WHERE survey_ID='$sid'";

		$result = $conn->query($sql);
		if($result !== false && $result->num_rows >0){
			while($row = $result->fetch_assoc()){
			?>
			<tr>
				<td></td>
				<td><?php echo $row['answer']; ?></td>
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