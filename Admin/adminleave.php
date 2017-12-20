<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dashboard";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * from employee_leaves where status like 'Pending' ";
$result = $conn->query($sql);

echo "<table border=2>" ;
echo "<tr><th>ID</th><th>Date From</th><th>Date to</th><th>Reason</th><th>Permission</th></tr><br>" ;

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) 
	{  echo "<form action='approveleave.php' method='post'>";
		echo "<tr><td>".$row["uid"]."</td><td>".$row["sdate"]."</td><td>".$row["edate"]."</td><td>".$row["reason"]."</td><td><input type='hidden' name='hid' value='".$row['id']."' />
		<input type='submit' name='check' value='Approve' /></td><td><input type='submit' name='check' value='Disapprove' /></td></tr>";
      echo "</form>";
	}
	echo "</table>";
} 
else {
    echo "0 results";
}
$conn->close();

?>
</body>
</html>
