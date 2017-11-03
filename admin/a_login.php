<?php
session_start();
include("../functions.php");
include("../config.php");
if(isset($_POST['sub']))
{	
	$name=protect_anything($_POST['a_email']);
	$pass=protect_anything($_POST['a_pass']);
	if($name=="b@gmail.com" && $pass=="123456bB")
	{
		$_SESSION['UserId']=$name;
		header("Location:upload_event.php");
	}
}
?>