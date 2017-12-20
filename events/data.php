<?php
session_start();
include_once 'connect.php';

$udate = $_POST['udate'];
$event_name = $_POST['event_name'];
$event_details = $_POST['event_details'];


if(mysql_query("INSERT INTO events(udate,event_name,event_details,status) VALUES('$udate','$event_name','$event_details',1)")){
echo("Registration Successful");
header("Location: user.php");
}
else{
echo("Registration Failed");
}

?>
