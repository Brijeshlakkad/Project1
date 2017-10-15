<?php
$con=mysqli_connect("localhost","root","","event");

if (mysqli_connect_error()) {
	echo "Failed to connect to mysql :".mysqli_connect_error();
}


$email=$_POST['email'];
$mess=$_POST['mess'];
$sql="alter table users ADD Message varchar(10)";
$result=mysqli_query($con,$sql);
$sql="Update users SET Message='$mess' WHERE Email_id='$email'";
if(mysqli_query($con,$sql))
{
	header("location: All_event.php");
}
else
{
	die('Error'.mysqli_error($con));
}

mysqli_close($con);
?>