<?php 
include "config.php";

// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['ref_plante'])) {
	$user_id = $_GET['ref_plante'];

	// write delete query
	$sql = "DELETE FROM `plante` WHERE `ref_plante`='$user_id'";

	// Execute the query

	$result = $conn->query($sql);

	if ($result == TRUE) {
		echo "Record deleted successfully.";
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}

?>