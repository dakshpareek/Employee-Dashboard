<?php
session_start();
include_once '../Database/mysql_connect.php';

$uid = $_POST['uid'];
$uname = $_POST['uname'];

$uemail = $_POST['uemail'];
$ubirth = $_POST['ubirth'];

$uaddress = $_POST['uaddress'];
$ujoin = $_POST['ujoin'];
$uphone = $_POST['uphone'];
$role=$_POST['role'];
$pass=$_POST['upassword'];

if(mysql_query("INSERT INTO employee_details(uid,uname,uemail,ubirth,uaddress,ujoin,uphone,role,upassword) VALUES('$uid','$uname','$uemail','$ubirth','$uaddress','$ujoin','$uphone','$role','$pass')"))
{
echo("<script>alert('User Created');</script>");
header("Location: index.html");
}
else{
echo("Registration Failed");
}

?>