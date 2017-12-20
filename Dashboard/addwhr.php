<?php
session_start();
include_once '../Database/mysql_connect.php';
$p_name=$_POST['p_name'];
$ewhr=$_POST['ewhr'];
$mydate = date('Y-m-d');
$res=mysql_query("SELECT project_process FROM project_status where p_name='".$p_name."'");
$result=mysql_result($res,0);
$rem=$result-$ewhr;
if(mysql_query("insert into project_process(p_name,uid,ewhr,udate) values ('$p_name','".$_SESSION['uid']."',$ewhr,'$mydate')"))
{
mysql_query("update project_status set project_process=".$rem." where p_name='".$p_name."'");
header("Location: MyProjectStatus.php");
}
else
{
echo mysql_error();
}
?>