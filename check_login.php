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
	if($g=="")
		echo "please enter password";
	
}
mysqli_close($con);
?>