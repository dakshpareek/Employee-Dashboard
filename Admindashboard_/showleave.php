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

$sql = "SELECT * from employee_leaves";
$result = $conn->query($sql);

echo "<table border=2>" ;
echo "<tr><th>ID</th><th>Date From</th><th>Date to</th><th>Reason</th><th>Permission</th></tr><br>" ;

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) 
	{  echo "<form action='set.php' method='post'>";
		echo "<tr><td>".$row["id"]."</td><td>".$row["sdate"]."</td><td>".$row["edate"]."</td><td>".$row["reason"]."</td><td>".$row['status']."</td></tr>";
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
