<?php
include "lock.php";
include("config.php");
if(isset($_GET['s']))
{
	$id=$_GET['s'];
	if($_SESSION['cart']=='0')
	{
		$_SESSION['items']=$id;
		$items=$_SESSION['items'];
		$sql="update users set cart_items='$items' where Email='$login_email'";
		$result=mysqli_query($con,$sql);
		if($result)
			echo "<p style='color:green;'>event successfully added. </p>";
		else
			echo "<p style='color:red;'>can't be added.</p>";
	}
	else
	{
		if(in_array($id,$item_array))
		{
			echo "<p style='color:red;'>item is already in cart</p>";
		}
		else
		{
			$_SESSION['items'] .= ",".$id;
			$items=$_SESSION['items'];
			$sql="update users set cart_items='$items' where Email='$login_email'";
			$result=mysqli_query($con,$sql);
			if($result)
				echo "<p style='color:green;'>event successfully added. </p>";
			else
				echo "<p style='color:red;'>can't be added.</p>";
		}
		
	}
	
}
?>