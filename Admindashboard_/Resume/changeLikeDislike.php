<?php
include_once('inc/dbConnect.inc.php');

$type=$_POST['type'];
$id=$_POST['id'];

if(isset($_COOKIE['likeDislike'."_".$id]))
    echo "error||Already Voted";
else{
    if($type=='like'){
       $fieldName='ulike';
    }elseif($type=='dislike'){
       $fieldName='udislike';
    }else{
       die();
    }
    $query="update shared set $fieldName=$fieldName+1 where id='$id'";
    $res=mysql_query($query);
    
    $query="select $fieldName from shared where id='$id'";
    $res=mysql_query($query);
    $result=mysql_fetch_array($res);
    $count=$result[$fieldName];
    
    $expire=time()+60*60*24*30;
    setcookie("likeDislike"."_".$id, "likeDislike"."_".$id, $expire);
    echo "success||".$count;
}
?>