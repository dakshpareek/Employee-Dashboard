<?php
 session_start();
include_once '../Database/mysqli_connect.php';
$title=$_POST['title'];
$content=$_POST['content'];
$date=date('Y-m-d');
$time=date("h:i:sa");

if(mysqli_query($conn,"insert into suggestion(uname,uid,usuggestion,udate,ulike,udislike,title,time) values ('".$_SESSION['uname']."','".$_SESSION['uid']."','$content', CURDATE(),0,0,'$title','$time')"))
{
	echo "<script>
	alert('Information Shared');
	location.href='suggestions.php';
	</script>";
}
else
{
echo mysqli_error($conn);
}

?>
