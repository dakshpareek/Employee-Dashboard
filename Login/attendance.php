<?php
session_start();
include_once 'connect.php';


$uemail = $_POST['uemail'];
$upassword = $_POST['upassword'];
$mydate = date('m/d/Y');
$count;
echo"date" .$date;
echo"<br>prevdate" .$prevdate;





$query = "SELECT * FROM employee_details WHERE uemail='$uemail'";
$response = mysql_query($query);
$row = mysql_fetch_array($response);


if($row['upassword'] == $upassword)
{

$_SESSION['uname'] = $row['uname'];
$_SESSION['uid']= $row['uid'];

$prevdate="SELECT udate FROM attendence WHERE uid=".$_SESSION['uid']." ORDER BY ID DESC LIMIT 1";
$response1 = mysql_query($prevdate);
$row1 = mysql_fetch_array($response1);

if($row1['udate'] == $mydate)
{
	
}
else
{
	mysql_query("INSERT INTO attendence(udate,uname,uid) VALUES('$mydate','".$_SESSION['uname']."','".$_SESSION['uid']."')");
    header("Location: ../Dashboard/dashboard.php");

}

}
else
{
echo "<script>alert('Wrong Credentials');
location.href='login.html';
</script>";
}


?>

