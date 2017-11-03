<?php
include('lock.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>Udaan2k18</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="js/jquery.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/brij.css" rel="stylesheet">

</head>
<body onLoad="load('IT')">
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
			<li> <a href="Contact_us.php">Contact us</a></li>
			<li class="active"> <a href="about_us.php">About us</a></li>
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