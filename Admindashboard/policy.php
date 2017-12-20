<?php
session_start();

include_once '../Database/mysqli_connect.php';

$p=$_POST['policy'];
$d=$_POST['udate'];
$u=$_POST['uname'];





if(mysqli_query($conn,"INSERT into policies (policy,udate,uname) VALUES('$p','$d','$u')")) 
{ 
echo("<script>alert('Policy Updated');location.href='index.html';</script>");

}
?>
