<?php
$connection = mysqli_connect("localhost","root","","event") or die("Opps some thing went wrong");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
$myemail=addslashes($_POST['email']);
$mymno=addslashes($_POST['mno']);
$mypassword=addslashes($_POST['npass']);
$myoldpassword=addslashes($_POST['pass']);
if($myoldpassword==$mypassword)
{
$sql="Update users SET Mobile_no='$mymno',Password='$mypassword' WHERE Email_id='$myemail'";
$result=mysqli_query($connection,$sql);

if(!$result)
{
die('Could not be updated');
header("Location: welcome.php");
}
else{
echo 'Successfully Updated';
header("Location: index.php");
}

}
else{
header("Location: welcome.php");
}
}


?>