<?php
include_once('inc/dbConnect.inc.php');

$type=$_GET['type'];
$id=$_GET['id'];

if(isset($_COOKIE['likeDislike'."_".$id.'X']))
    echo "error||Already Voted";
else{
    if($type=='like'){
       $fieldName='ulike';
    }elseif($type=='dislike'){
       $fieldName='udislike';
    }else{
       die();
    }
    $query="update suggestion set $fieldName=$fieldName+1 where id='$id'";
    $res=mysql_query($query);
    
    $query="select $fieldName from suggestion where id='$id'";
    $res=mysql_query($query);
    $result=mysql_fetch_array($res);
    $count=$result[$fieldName];
    
    $expire=time()+60*60*24*30;
    setcookie("likeDislike"."_".$id."X", "likeDislike"."_".$id."X", $expire);
    echo "success||".$count;
}
?>