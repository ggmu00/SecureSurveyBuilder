<?php

include "db_connect.php";

$id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM users WHERE ID='$id'";

// print_r($sql);

if($delete!==FALSE && mysqli_query($conn, $sql)) {
	$sql = "SELECT survey_ID FROM survey_ID WHERE user_ID='$id'";
	mysqli_query($conn, $sql);
	echo "Record deleted successfully";
} 
else {
    echo "Error deleting record: " . mysqli_error($conn);
}

 //redirect here
include 'viewUsers.php';

?>