<html>
<body>
<form action="adp.php" method="post">
Project<input type="text" name="p_name"/><br/>
Dead Line<input type="date" name="last_date"/><br/>
Working Hr <input type="number" name="whr"/><br/>
Add Employees<br/>
<?php
include_once 'connect.php';
$res=mysql_query("SELECT uid,uname FROM employee_details");

while($row=mysql_fetch_array($res))
{
	echo "UID:->  ".$row['uname']."   ";
	echo "<input type='checkbox' name='check_list[]' value='".$row['uid']."'><br/>";
	
}

?>
<input name="submit" type="submit" />
</form>

</body>
</html>