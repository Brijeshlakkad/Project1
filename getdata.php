<?php
$con=mysqli_connect("localhost","root","","event");

if (mysqli_connect_error()) {
	echo "Failed to connect to mysql :".mysqli_connect_error();
}


$email=$_POST['email'];
$mess=$_POST['mess'];


$sql="INSERT INTO feedback(Email,Message) values('$email','$mess')";

if(mysqli_query($con,$sql))
{
	header("location: index.php");
}
else
{
	die('Error'.mysqli_error($con));
}

mysqli_close($con);
?>