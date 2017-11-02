<?php
include "config.php";
include "functions.php";
session_start();
check_session();
$user_check=$_SESSION['UserId'];
$r="select * from users where Email='$user_check' ";
$ses_sql=mysqli_query($con,$r);
 
$row=mysqli_fetch_assoc($ses_sql);
if($row['cart_items']==0)
	$num_item=0;
else
{
$item_array=explode(",",$row['cart_items']);
$num_item=0;
foreach($item_array as $item)
{
	$num_item+=1;
}
}
$_SESSION['cart']=$num_item;
$login_session=$row['Username'];
$login_email=$row['Email'];
$login_password=$row['Password'];
$login_mno=$row['Mobile'];
$login_college=$row['College'];
$login_branch=$row['Branch'];
mysqli_close($con);
?>