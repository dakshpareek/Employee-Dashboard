<?php
session_start();
include_once 'connect.php';


$umonth = $_POST['umonth'];

$uid=$_POST['uid'];

$res=mysql_query("SELECT * FROM employee_salary WHERE month='$umonth' and uid=$uid ");

while($row=mysql_fetch_array($res))
{
	echo "<br/> Unique id=" .$row['uid'];
	
	echo "<br/>TDS= ".$row['utds'];
	
	echo "<br/>HRA= ".$row['uhra'];

    echo "<br/>Medical Allowance= ".$row['uesi'];

    echo "<br/>Provident Fund= ".$row['upf'];	
	
	echo "<br/> Salary in hand=".$row['usalhand'];
}

?>

