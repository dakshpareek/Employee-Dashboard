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

$sql = "SELECT * from events ";
$result = $conn->query($sql);

echo "<table border=2>" ;

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) 
	{  
		echo "".$row["id"]."".$row["udate"]."".$row["event_name"]."".$row["event_details"]."";
      
	}
	
} 
else {
    echo "0 results";
}
$conn->close();

?>
</body>
</html>