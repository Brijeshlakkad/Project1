<?php
include("a_lock.php");
include("../config.php");
?>
<!DOCTYPE html>
<html>
<head>
<script src="../js/jQuery.js"></script>
<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="../css/brij.css" rel="stylesheet">
</head>
<body>
<div class="container padded">
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
		    <li><a href="index.php" style="text-transform:uppercase;">Admin Login</a></li>
		    <li><a href="upload_event.php">Upload Event</a></li>
			<li  class="active"><a href="show_all_events.php">Events</a></li>
			<li> <a href="logout.php">Logout</a></li>
        </ul>
    </div>
</nav>
<a data-toggle="modal" href="updated_window.php#xx" >Modal</a>
<div class="modal fade" id="xx" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         		   <div class="modal-dialog">
             		   <div class="modal-content">
               		    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 class="modal-title"><center>Log in</center></h3>
                    </div>
                    <div class="modal-body">
<table  cellspacing="5px" cellpadding="5px">
<form name="l_form" method="post" class="form-horizontal tpad" role="form">
<tr><td>
<div class="form-group">
		<label for="l_email" class="col-lg-4 control-label">Email</label>
    	 	<div class="col-lg-4">
				<input type="text" name="l_email"  autocomplete="off" style="width:200px;"  class="form-control" onKeyUp="login('l_email',this.value)">
   	    	</div>
   	    
</div></td>
<td><p id="l_email"></p></td></tr>
<tr><td>
<div class="form-group">
	<label for="l_pass" class="col-lg-4 control-label">Password</label>
    	  	<div class="col-lg-4">
				<input type="password" name="l_pass" autocomplete="off" style="width:200px;"  class="form-control"  onKeyUp="login('l_pass',this.value)">
   	    	</div>
	</div></td>
<td><p id="l_pass"></p></td>
</tr>
<tr>
	<td><div class="col-lg-4"></div>
	<div class="col-ld-4">
<button class="btn btn-primary" type="button" onclick="return login_status()">Secure Login <b class="glyphicon glyphicon-lock"></b></button></div></td><td><p id="l_status"></p></td></tr>
</form>
	</table>
<br> 
<br>
<a href="forget.php" >Forget Password?</a><br>

</div>
<div class="modal-footer">
                        <a href="index.php" class="btn btn-default btn-lg">OK</a>
                    </div>
                </div>
           </div>
</div>

</body>
</html>