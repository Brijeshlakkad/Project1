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
}
else if($f=="l_pass")
{
	if($g=="")
		echo "please enter password";
	
}
mysqli_close($con);
?>