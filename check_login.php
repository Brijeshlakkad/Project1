<?php
include "config.php";

$f=$_GET['f'];
$g=$_GET['q'];
if($f=="l_email")
{
	if($g=="")
		echo "please enter email";
	else if(!filter_var($g,FILTER_VALIDATE_EMAIL))
	{
		echo "not valid email";
	}
	else 
	{
		$sql="select * from users where Email='$g'";
		$result=mysqli_query($con,$sql);
		$r=mysqli_num_rows($result);
		if($r==1)
			echo "Email Matched";
		else 
			echo "can't find User";
	}
}
else if($f=="l_pass")
{
	$e=$_GET['e'];
	if($e=="")
	{
		echo "please enter email,first";
		return;
	}
	if($g=="")
		echo "please enter password";
	else
	{
		$sql="select * from users where Email='$e' AND Password='$g'";
		$result=mysqli_query($con,$sql);
		$r=mysqli_num_rows($result);
		if($r==1)
			echo "Password Matched";
		else 
			echo "Wrong Password";
	}
}
mysqli_close($con);
?>