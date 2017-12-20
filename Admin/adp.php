<?php
include_once('connect.php');
$p_name=$_POST['p_name'];
$last_date=$_POST['last_date'];
$whr=$_POST['whr'];
$emp=implode(",",$_POST['check_list']);
if(mysql_query("insert into project_status(p_name,last_date,whr,working_emp,status,project_process) values ('$p_name','$last_date','$whr','$emp',0,'$whr')"))
{
$res=mysql_query("SELECT * FROM project_status");
echo "<table border='1'>
<tr>
<th>ID</th><th>Project Name</th><th>Last Date</th><th>Working Hrs</th><th>Employee UID</th></tr>";
while($row=mysql_fetch_array($res))
{
	echo "<tr><td>".$row['id']."</td><td>".$row['p_name']."</td><td>".$row['last_date']."</td><td>".$row['whr']."</td><td>".$row['working_emp']."</td></tr></br>";
}

echo "<a href='projectwork.php'>Show Project Works</a>";
}
else
{
	echo mysql_error();
}
	?>