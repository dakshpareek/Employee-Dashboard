<?php
session_start();
include_once 'connect.php';

$uid = $_POST['uid'];
$usalary = $_POST['usalary'];
$umonth = $_POST['umonth'];
$uhra=($usalary*26.67)/100;

$uesi= 300;
$upf= ($usalary*12)/100;
$utds= ($usalary*2)/100;
$usalhand = $usalary-$utds+$uhra-$uesi-$upf;

echo "tds:" .$utds ;
echo "HRA:" .$uhra ;
echo "Medical allowance:" .$uesi ;
echo "Provident Fund:" .$upf ;

echo "salary in hand:" .$usalhand ;
echo "umonth" .$umonth;
if(mysql_query("INSERT INTO employee_salary(uid,usalary,utds,usalhand,month,uhra,uesi,upf) VALUES('$uid','$usalary','$utds','$usalhand','$umonth','$uhra','$uesi','$upf')"))
{
echo("Salary entered Successful");
}
else{
echo("Registration Failed");
}

?>