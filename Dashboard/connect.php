<?php

if(mysql_connect("localhost","root","root")){
}
else{
die("Error in SQL Connection");
}

if(mysql_select_db("Dashboard")){
}
else{
die("Error Selecting Database");
}