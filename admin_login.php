<?php
session_start();
include("functions.php");
if(isset($_POST['sub']))
{	
	$name=protect_anything($_POST['a_name']);
	$pass=protect_anything($_POST['a_pass']);
	if($name=="b@gmail.com" && $pass=="123456bB")
	{
		$_SESSION['UserId']=$name;
		header("Location:upload_event.php");
	}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin_login</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<h2>Admin Login</h2>
<div id="admin_form" > 
<form name="admin_form" method="post">
<table cellpadding="5px" cellspacing="5px">
	<tr>
	<div class="form-group">
		<td><label for="a_name" class="control-label">Username or Email</label></td>
		<td><input class="form-control" type="text" name="a_name"/></td>
	</tr>
	</div>
	<div class="form-group">
	<tr>
		<td><label for="a_pass" class="control-label" >Password</label></td>
		<td><input class="form-control" type="password" name="a_pass"/></td>
	</tr>
	</div>
	<div class="form-group">
	<tr>
		<td><p id="state"></p></td>
		<td><input class="form-control" type="submit" name="sub" value="Login"/></td>
	</tr>
	</div>
</table>
</form>
</div>
</body>
</html>
