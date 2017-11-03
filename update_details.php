<?php
include("lock.php");
include("config.php");
$myemail=protect_anything($_POST['email']);
$myname=protect_anything($_POST['name']);
$mymno=protect_anything($_POST['mno']);
$mypassword=protect_anything($_POST['pass']);
$myoldpassword=protect_anything($_POST['opass']);
if($myoldpassword==$mypassword)
{
$sql="Update users SET Username='$myname', Mobile='$mymno',Password='$mypassword' WHERE Email='$login_email'";
$result=mysqli_query($con,$sql);

if(!$result)
{
echo "<p style='color:red;'>Could not be updated</p>";
}
else{
echo "<p style='color:green;'>Successfully Updated</p>";
}

}
else{
echo "<p style='color:blue;'>Please Try again</p>";
}



?>