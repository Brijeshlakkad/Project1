<?php
include "config.php";

$f=$_GET['f'];
$g=$_GET['q'];
if($f=="s_email")
{
	if($g=="")
		echo "please enter Email";
	else if(!filter_var($g,FILTER_VALIDATE_EMAIL))
	{
		echo "not valid Email";
	}
	else 
	{
		$sql="select * from users where Email='$g'";
		$result=mysqli_query($con,$sql);
		$r=mysqli_num_rows($result);
		if($r>0)
			echo "Email already exists";
		else 
			echo "valid Email";
	}
}
else if($f=="s_mno")
{
	if($g=="")
		echo "please enter Mobile Number";
	else if(!preg_match("/^[0-9]{10}$/",$g))
	{
		echo "not valid Mobile Number";
	}
	else
	{
		echo "valid Mobile Number";
	}
}
else if($f=="s_name")
{
	if($g=="")
		echo "please enter Username";
	else if(strlen($g)<=3)
	{
		echo "Username shold contain more than 3 characters";
	}
	else
	{
		echo "valid Username";
	}
}
else if($f=="s_pass")
{
	if($g=="")
		echo "please enter password";
	else if((!preg_match("/^[0-9]+[a-z]+[A-Z]$/",$g)) || strlen($g)<6 || strlen($g)>12)
	{
		echo "Password should contain at least one lowercase and uppercase charcter and it must have length between 6 nad 12";
	}
	else
	{
		echo "valid Password";
	}
}
else if($f=="s_college")
{
	if($g=="0")
		echo "please select a college";
	else
		echo "Good";
}
else if($f=="s_branch")
{
	if($g=="0")
		echo "please select a branch";
	else
		echo "Done";
}
mysqli_close($con);
?>