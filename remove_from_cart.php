<?php
include("lock.php");
include("config.php");
if(isset($_GET['s']))
{
	$id=$_GET['s'];
	$sql="select cart_items from users where Email='$login_email'";
	$result=mysqli_query($con,$sql);
	if(!$result)
		die("Can't find");
	$r=mysqli_fetch_assoc($result);
	$array=explode(",",$r['cart_items']);
	if (($key = array_search($id, $array)) !== false) 
	{
    	unset($array[$key]);
		$ex=implode(",",$array);
		$user=$_SESSION['UserId'];
		$sql="update users set cart_items='$ex' where Email='$user'";
		$result=mysqli_query($con,$sql);
		if(!$result)
			die("Can't find");
		echo $ex;
	}
	else
	{
		echo "false";
	}
}
mysqli_close($con);
?>