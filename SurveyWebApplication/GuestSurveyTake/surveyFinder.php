<html>
<?php
	
	include "db_connect.php";
	
	$surveyCode=$_GET['surveyCode'];
	$sql="SELECT * FROM survey_list WHERE survey_ID = '$surveyCode'";
	$sql2 = "SELECT * FROM question_list WHERE survey_ID='$surveyCode'";
	
	$result = $conn->query($sql);
	$result2 = $conn->query($sql2);
	
	$qnum=1;
	
	if($result!== false && $result->num_rows>0 && $result2!== false && $result2->num_rows>0 ){
		while($row = $result->fetch_assoc()){
			while($row2 = $result2->fetch_assoc()){
				
			?>
			<form method="get">
				<table>
				<tr>
					<td>Question <?php echo $qnum ?></td>
				</tr>
				<tr>
					<td><?php echo $row2['question_body']; ?></td>
				</tr>
				<tr>
					<td><input type = "text" name="answer"/></td>
				</tr>
				
					<?php		
					$qnum++;
			}
		}
		?>
		<tr>
					<td><input type ="submit" value="Submit"/></td>
				</tr>
				</table>
			</form>
<?php
	}else{
		echo "unsuccessful";
	}
		
?>