<?php
session_start();
include_once '../Database/mysql_connect.php';

$sdate = $_POST['sdate'];
$edate = $_POST['edate'];
$reason = $_POST['reason'];


if(mysql_query("INSERT INTO employee_leaves(uid,uname,sdate,edate,reason,status) VALUES('".$_SESSION['uid']."','".$_SESSION['uname']."','$sdate','$edate','$reason','Pending')")){
echo("Registration Successful");
header("Location: showleaves.php");
}
else{
echo("Registration Failed");
}

?>

