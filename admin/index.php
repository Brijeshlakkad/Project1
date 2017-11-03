<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Admin_login</title>
<script src="../js/jquery.min.js"></script>
<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="../css/brij.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div> 
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
		    <li class="active"><a href="#" style="text-transform:uppercase;">Admin Login</a></li>
			<li><a href="show_all_events">Events</a></li>
			<li> <a href="logout.php">Logout</a></li>
        </ul>
    </div>
</nav>
<div class="container padded">
<div id="admin_form" > 
<form action="a_login.php" name="admin_form" method="post">
<table cellpadding="5px" cellspacing="5px">
	<tr>
	<div class="form-group">
		<td><label for="a_email" class="control-label">Email</label></td>
		<td><input class="form-control" type="text" name="a_email"/></td>
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
</div>
</body>
</html>
