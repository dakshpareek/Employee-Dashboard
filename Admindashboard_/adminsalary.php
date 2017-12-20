<?php
session_start();
include_once '../Database/mysql_connect.php';

$uid = $_POST['uid'];
$usalary = $_POST['usalary'];
$umonth = $_POST['umonth'];
$yr=$_POST['yr'];
$uhra=($usalary*26.67)/100;

$uesi= 300;
$upf= ($usalary*12)/100;
$utds= ($usalary*2)/100;
$usalhand = $usalary-$utds+$uhra-$uesi-$upf;


if(mysql_query("INSERT INTO employee_salary(uid,usalary,utds,usalhand,month,uhra,uesi,upf,yr) VALUES('$uid','$usalary','$utds','$usalhand','$umonth','$uhra','$uesi','$upf','$yr')"))
{
echo("<script>alert('Salary Updated');location.href='index.html';</script>");
}
else{
echo("Registration Failed");
}

?>