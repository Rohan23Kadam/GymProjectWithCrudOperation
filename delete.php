<?php
include 'conn.php';
$id = $_GET['Id'];
$q = "DELETE FROM `feedbacktable` WHERE Id = $id";
mysqli_query($con,$q);
header("location:admin.php");

?>