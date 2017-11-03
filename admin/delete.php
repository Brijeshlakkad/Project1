<?php
include("a_lock.php");
include("../config.php");
if(isset($_GET['q']))
{
	$q=$_GET['q'];
	$sql="delete from events where ID='$q'";
	$result=mysqli_query($con,$sql);
	if(!$result)
	{
		echo "can't delete";
		return;
	}
	echo "Event Deleted";
}
?>