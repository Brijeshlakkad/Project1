<?php
session_start();
include('functions.php');
include('config.php');
$name=protect_anything($_POST['name']);
$div=protect_anything($_POST['div']);
$fee=protect_anything($_POST['fee']);
$cata=protect_anything($_POST['cata']);
$con1=protect_anything($_POST['con1']);
$con2=protect_anything($_POST['con2']);
$sql="insert into events (Name,Catagory,Description,Fees,Contact1,Contact2) values('$name','$cata','$div','$fee','$con1','$con2')";
$result=mysqli_query($con,$sql);
if($result)
{
	$get_id="select * from events where Name='$name'";
	$r_id=mysqli_query($con,$get_id);
	$row=mysqli_fetch_assoc($r_id);
	$r=mysqli_num_rows($r_id);
	if($r==1)
	{
		$_SESSION['Id']=$row['ID'];
		echo "1";
	}
	else
		echo "<p style='color:blue;'>Try Again</p>";
}
else{
	echo "<p style='color:blue;'>Try Again</p>";
}
mysqli_close($con);
?>