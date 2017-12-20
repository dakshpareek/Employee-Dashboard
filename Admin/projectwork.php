<?php
include_once('connect.php');


$res=mysql_query("SELECT * FROM project_process");
echo "<table border='1'>
<tr>
<th>Project Name</th><th>UID</th><th>Date</th><th>Working Hrs</th></tr>";
while($row=mysql_fetch_array($res))
{
	echo "<tr><td>".$row['p_name']."</td><td>".$row['uid']."</td><td>".$row['udate']."</td><td>".$row['ewhr']."</td></tr></br>";
}


	?>