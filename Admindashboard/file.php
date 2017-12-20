
<?php
if (isset($_POST["action"]))
{
	
	if($_FILES['filep']['name']=="")
{
	echo "<script>alert('file is not uploaded')</script>";
}
$folder = "Resume/";
$uid=$_POST['uid'];
move_uploaded_file($_FILES["filep"]["tmp_name"] , "$folder".$_FILES["filep"]["name"]);

$a= $folder.$_FILES["filep"]["name"];

$result = mysqli_connect("localhost", "root", "root","dashboard") or die ("Could not save image name Error: " . mysqli_error());


if(mysqli_query($result,"update employee_details set ucv='".$a."' where uid=".$uid."" )) 
{ 
echo "<script>
alert('Done');
location.href='index.html';
</script>";
}
else 
{
echo mysqli_error($result);
}
}
?>
</body>
</html>