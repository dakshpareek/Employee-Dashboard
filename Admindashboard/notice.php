<?php
session_start();
include_once '../Database/mysql_connect.php';

$udate = $_POST['udate'];
$unotice = $_POST['unotice'];


if(mysql_query("INSERT INTO notice(udate,unotice) VALUES('$udate','$unotice')")){
echo("Registration Successful");
header("Location: notices.php");
}
else{
echo("Registration Failed");
}

?>

