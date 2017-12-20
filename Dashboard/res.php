<?php
session_start();

include_once 'connect.php';

$des = $_POST['des'];
$utech = $_POST['utech'];
$wexp = $_POST['wexp'];

mysql_query("delete from resources where uid=".$_SESSION['uid']."");

if(mysql_query("INSERT INTO resources(des,utech,wexp,uid) VALUES('$des','$utech','$wexp','".$_SESSION['uid']."')"))		
{
	
echo("Information entered Successfuly");
}
else{
echo mysql_error();
}

?>