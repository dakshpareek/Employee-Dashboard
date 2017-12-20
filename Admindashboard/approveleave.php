<?php
$id=$_POST['hid'];
include_once '../Database/mysqli_connect.php';


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
header("Location: adminleave.php");
?>