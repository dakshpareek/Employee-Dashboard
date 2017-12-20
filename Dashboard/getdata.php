<?php
session_start();
include_once '../Database/mysqli_connect.php';
$title=$_POST['title'];
$content=$_POST['content'];
$date=date('Y-m-d');
$time=date("h:i:sa");
#echo $time;
if(mysqli_query($conn,"insert into shared(uname,uid,ucontent,udate,ulike,udislike,title,time) values ('".$_SESSION['uname']."','".$_SESSION['uid']."','$content', CURDATE(),0,0,'$title','$time')"))
{
	echo "<script>
	alert('Information Shared');
	location.href='newsfeed.php';
	</script>";
}
else
{
echo mysqli_error($conn);
}

?>
