<?php
session_start();
include_once 'connect.php';


$uemail = $_POST['uemail'];
$upassword = $_POST['upassword'];
$mydate = date('Y-m-d');


if (empty($_POST["uemail"])) {
    echo "Email is required";
  } else {
    $email = test_input($_POST["uemail"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Invalid email format"; 
    }
  }


  
  
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}  
 




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



if($row1['udate'] != $mydate)
{
	
	mysql_query("INSERT INTO attendence(udate,uname,uid) VALUES('$mydate','".$_SESSION['uname']."','".$_SESSION['uid']."')");
	



}
if($row['role']=='emp')
{
header("Location: ../Dashboard/profile.php");
}
else if($row['role']=='admin')
{
header("Location: ../Admindashboard/index.html");
}
}
else
{
echo "<script>alert('Wrong Credentials');
location.href='login.html';
</script>";
}


?>