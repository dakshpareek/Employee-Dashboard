<?php
#$con=mysql_connect("localhost","","") or die(mysql_error($con));
$con=mysqli_connect("127.0.0.1","root","root","test");
#$db=mysql_select_db("test",$con);
$q=mysqli_query($con,"select link from link where id=1");
while($row=mysqli_fetch_array($q))
$url=$row[0];


#$url="www.google.com/this-is-how-you-win";
$str = basename($url);
echo $str."</br>";
$lst = explode("-", $str);

foreach($lst as $v)
{
    echo $v."</br>";
}
?>
