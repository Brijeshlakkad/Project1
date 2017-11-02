<?php
function protect_anything($str)
{
	$str = addslashes($str);
	$str = stripslashes($str);
	return $str;
}
function check_session()
{
	if(!isset($_SESSION['UserId']))
		header("Location:index.php");
}
?>