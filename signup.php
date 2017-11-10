<?php
include "config.php";
include "functions.php";
$name=protect_anything($_POST['name']);
$mobile=protect_anything($_POST['mno']);
$email=protect_anything($_POST['email']);
$password=protect_anything($_POST['pass']);
$college=protect_anything($_POST['college']);
$branch=protect_anything($_POST['branch']);
	$sql2="select * from users where Email='$email'";
	$result=mysqli_query($con,$sql2);
	$r=mysqli_num_rows($result);
	if($r==1)
	{
		echo "<p style='color:blue;'>please login You have already submitted from once.</a>";
		return;
	}
$sql="INSERT INTO users (Username,Email,Mobile,Password,College,Branch,cart_items) values('$name','$email','$mobile','$password','$college','$branch','0')";

$to = $email;
if(mysqli_query($con,$sql))
{
	$subject = "Sign up Successfully";
	$txt = "You have just signed up in Udaan18 web site.";
	$headers = "From: brijeshlakka22@gmail.com" . "\r\n";
	$txt = wordwrap($txt,70);
	if(mail($to,$subject,$txt,$headers))
		echo "<p style='color:green;'>Your form succefully submitted</p>";
?>

<?php
}
else
{
	echo "<p style='color:blue;'>Error in submitting</p><a href='index.php'>try again</a>";
}

mysqli_close($con);
?>