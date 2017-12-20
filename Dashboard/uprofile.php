<?php
session_start();
include_once("connect.php");
if(mysql_query("update employee_details set uphone=".$_POST['uphone'].",uaddress='".$_POST['uaddress']."' where uname='".$_SESSION['uname']."'"))
{
header("Location: profile.php");
}
else
{
	
	echo mysql_error();
}
?>