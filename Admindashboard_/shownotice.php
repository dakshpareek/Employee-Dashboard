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

$sql = "SELECT * from notice ";
$result = $conn->query($sql);

echo "<table border=2>" ;
echo "<tr><th>ID</th><th>Notice Date</th><th>Notice</th></tr><br>" ;

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) 
	{  
		echo "<tr><td>".$row["id"]."</td><td>".$row["udate"]."</td><td>".$row["unotice"]."</td></tr>";
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
