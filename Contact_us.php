<?php
include('lock.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>Udaan2k18</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="../js/jquery.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/brij.css" rel="stylesheet">
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
		    <li><a href="profile.php" style="text-transform:uppercase;"><?php echo $login_session; ?></a></li>
          	<li><a href="All_event.php">Events</a></li>
			<li class="active"> <a href="Contact_us.php">Contact us</a></li>
			<li> <a href="about_us.php">About us</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Social <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="http://www.facebook.com">Facebook</a></li>
                    <li><a href="http://www.twitter.com">Twitter</a></li>
                    <li><a href="https://plus.google.com">Google+</a></li>
                    <li><a href="http://www.linkedin.com">LinkedIn</a></li>
                </ul>
            </li> 
           	<li> <a href="show_cart.php">Event Cart <span class="badge"><?php echo $num_item; ?></span></a></li>
			<li> <a href="logout.php">Logout</a></li>
        </ul>
    </div>
</nav>
<div class="container padded">
    <div class="row">
        <div class="col-sm-8">
            <h2>Get in touch</h2>
            <hr>
            <p>Suggestion for the <strong>Udaan 2k18</strong>, We need to hear from you:</p>
            <form class="form-horizontal tpad" action="getdata2.php" method="post">
                <div class="form-group">
                    <label for="email" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-group tpad">
                    <label for="message" class="col-lg-2 control-label">Message</label>
                    <div class="col-lg-10">
                        <textarea class="form-control" rows="6" name="mess" placeholder="Message..."></textarea>
                    </div>
                </div>
                <div class="form-group tpad">
                    <div class="col-lg-offset-2 col-lg-10">
                        <input type="submit" value="Send" class="btn btn-success">
						  
						 </div>
				</div>   
		</div>
    </div>
                    </div>
                </div>
            </form>
        </div>
      
	
</div>
</body>
</html>