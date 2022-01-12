<?php

include"db_connect.php";

$id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM survey_list WHERE survey_ID='$id'";

// print_r($sql);

if($delete!==FALSE && mysqli_query($conn, $sql)) {
   $sql = "DELETE FROM question_list WHERE survey_ID='$id'";
   mysqli_query($conn, $sql);
   echo "Record deleted successfully";

} 
else {
    echo "Error deleting record: " . mysqli_error($conn);
}

 //redirect here
header("location: ../SurveyView.php");
?>