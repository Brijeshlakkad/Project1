<?php
include('a_lock.php');
include('../config.php');
$id=protect_anything($_POST['id']);
$name=protect_anything($_POST['a_name']);
$steps=$_POST['steps'];
$fee=protect_anything($_POST['a_fee']);
$cata=protect_anything($_POST['a_cata']);
$con1=protect_anything($_POST['a_con1']);
$con2=protect_anything($_POST['a_con2']);
$num=protect_anything($_POST['num_steps']);
$string=implode(",,,,,",$steps);
$sql="Update events SET Name='$name',Catagory='$cata',Description='$string',Fees='$fee',Contact1='$con1',Contact2='$con2',Steps='$num' where ID='$id'";
$result=mysqli_query($con,$sql);
if($result)
{
	$get_id="select * from events where Name='$name'";
	$r_id=mysqli_query($con,$get_id);
	$row=mysqli_fetch_assoc($r_id);
	$_SESSION['event_id']=$row['ID'];
	echo "Updated";
	header("location:update_img.php");
}
else{
	echo "<p style='color:blue;'>Try Again</p>";
}
mysqli_close($con);
?>