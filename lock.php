<?php
include "config.php";
include "functions.php";
session_start();
login_session();
$user_check=$_SESSION['UserId'];
$r="select * from users where Email='$user_check' ";
$ses_sql=mysqli_query($con,$r);
 
$row=mysqli_fetch_assoc($ses_sql);

$login_name=$row['Username'];
$login_email=$row['Email'];
$login_password=$row['Password'];
$login_mno=$row['Mobile'];
$login_college=$row['College'];
$login_branch=$row['Branch'];
mysqli_close($con);
?>