<?php
// include database connection file
include_once("config.php");
 
// Get id from URL to delete that user
$NPM = $_GET['NPM'];
 
// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM mahasiswa WHERE NPM=$NPM");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>
