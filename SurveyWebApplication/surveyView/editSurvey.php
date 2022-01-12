<html>
<head><title>Edit Survey</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<?php
	session_start();
	include "db_connect.php";
	if(!isset($_SESSION['name'])){
		header("location:login.php");
		//$sID = $_SESSION[''];
	}
	$_SESSION['sID']=$_GET['id'];	
?>
<table>
	<tr>
		<td><input type="submit" class="button" value="Exit" onclick="window.location.href='../SurveyView.php'"/></td>
		<td><input type = "submit" class="button" value = "Edit Survey Title" onclick="window.location.href='editSurveyTitle.php'"></td>
		<td><input type="submit" class="button" value="Add Question" onclick="window.location.href='addQuestion.php'"/></td>
	</tr>
	</table>
	<table>
	<tr>
		<td>Question Title</td>
	</tr>
	<?php
	
		$sid=$_SESSION['sID'];
		$sql = "SELECT * FROM question_list WHERE survey_ID='$sid'";

		$result = $conn->query($sql);
		if($result !== false && $result->num_rows >0){
			while($row = $result->fetch_assoc()){
			?>
			<tr>
				<td><?php echo $row['question_body']; ?></td>
				<td><a href="editQuestion.php?id=<?php echo $row['question_ID']; ?>">Edit</a></td>
				<td><a href="deleteQuestion.php?id=<?php echo $row['question_ID']; ?>">Delete</a></td>
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