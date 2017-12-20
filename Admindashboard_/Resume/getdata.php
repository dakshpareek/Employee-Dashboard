<?php
$con=mysqli_connect("127.0.0.1","root","root","Dashboard");
$uname=$_POST['uname'];
$title=$_POST['title'];
$content=$_POST['content'];
$date=date('Y-m-d');
$time=date("h:i:sa");
echo $time;
if(mysqli_query($con,"insert into shared(uname,ucontent,udate,ulike,udislike,title,time) values ('$uname','$content', CURDATE(),0,0,'$title','$time')"))
{
header("Location: showdata.php");
}
else
{
echo mysqli_error($con);
}

?>
