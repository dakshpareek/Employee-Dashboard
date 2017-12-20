 <?php
 session_start();
//Retrieves data from MySQL
$con=mysqli_connect("localhost", "root", "root","dashboard") or die ("Error in Connection");
//mysql_select_db("personal") or die("Could not select database");
$data = mysqli_query($con,"SELECT file,uname FROM policies ") or die("error in query");
while($row = mysqli_fetch_row( $data ))
{
echo "<a download href='".$row[0]."'>".$row[1]."</a> <br>";
}
?>