<?php

include('lock.php');


$con=mysqli_connect("localhost","root","","event");

if (mysqli_connect_error()) {
	echo "Failed to connect to mysql :".mysqli_connect_error();
}
$event_name=$_POST['event_name'];

$sql="alter table users ADD Event varchar(10)";
$result=mysqli_query($con,$sql);
$sql="Update users SET Event='$event_name' WHERE Email_id='$login_email'";
if(mysqli_query($con,$sql))
{
	echo "Thank you for registration ";
	header("location: All_event.php");
}
else
{
	die('Error'.mysqli_error($con));
}

mysqli_close($con);
?>