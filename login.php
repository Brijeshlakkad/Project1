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
	echo "1";
	}
	else
	{
 	 echo "0";
	}
?>

