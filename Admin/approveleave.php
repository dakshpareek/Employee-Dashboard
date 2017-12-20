<?php
$id=$_POST['hid'];
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dashboard";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($_POST['check']=='Approve')
{
$sql = "update employee_leaves set status='Approved' where id='$id' ";
$result = $conn->query($sql);
}
else
{
$sql = "update employee_leaves set status='Dispproved' where id='$id' ";
$result = $conn->query($sql);	
	
}
header("Location: showleave.php");
?>