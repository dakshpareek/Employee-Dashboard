<?php
include_once '../Database/mysqli_connect.php';
$idd=$_POST['id'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "update events set status=0 where id=".$idd."";
$result = $conn->query($sql);
header("Location: showevents.php");

?>