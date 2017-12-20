<?php
  $accept = array ("127", "0", "0", "1");
   $remote = explode(".", $_SERVER['REMOTE_ADDR']);
  $match = 1;
  for($i = 0; $i < sizeof($accept); $i++) {
    if($remote[$i] != $accept[$i]) {
     $match = 0;
 }
  }
 echo $_SERVER['REMOTE_ADDR'];
 if($match) {
   echo "<h2>Access Granted!</h2>";
 } else {
    echo "<h2>Access Forbidden</h2>";
  }

?>