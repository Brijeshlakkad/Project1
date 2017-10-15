<?php
	include "config.php";
	include "functions.php";
	session_start();
	$email=protect_anything($_POST['email']);
	$password=protect_anything($_POST['pass']);
	$sql="SELECT * FROM users WHERE Email='$email' AND Password='$password'";
	$result=mysqli_query($con,$sql);
	$r=mysqli_num_rows($result);
	if($r==1)
	{
	$_SESSION['UserId']=$email;
	header("location: All_event.php");
	}
	else
	{
 	 echo "<p style='color:blue;'>Error in Logging</p><a href='index.php'>try again</a>";
	}
?>

