<?php
include('lock.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Udaan2k18</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/css.css" rel="stylesheet">
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
		    <li ><a href="profile.php" style="text-transform:uppercase;"><?php echo $login_session; ?></a></li>
          	<li class="active"><a href="All_event.php">Events</a></li>
			<li> <a href="Contact_us.php">Contact us</a></li>
			<li> <a href="about_us.html">About us</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Social <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="http://www.facebook.com">Facebook</a></li>
                    <li><a href="http://www.twitter.com">Twitter</a></li>
                    <li><a href="https://plus.google.com">Google+</a></li>
                    <li><a href="http://www.linkedin.com">LinkedIn</a></li>
                </ul>
            </li>
			<li> <a  href="logout.php">Logout</a></li>
        </ul>
    </div>
    
</nav>
<form name="event" action="getevent.php" method="post">

<div class="container padded">
    <div class="row">
        <div class="col-sm-8 blog">
            <section><div>
                <h1>Computer Science &raquo; Events</h1><hr>
                <p class="lead">Hardware Hub</a></p>
                <hr>
                <p><span class="glyphicon glyphicon-time"></span> Posted on Oct 28, 2018 at 12:10 AM</p>
                <hr>
                <img src="images/hardware.png" style="width:1800px;height:500px" class="img-responsive">
                <hr>
                <p>If you have good knowledge about computer components,then this event is best for you.</p><br><p>By participating in this event you can know more about computer hardware.There are only 1 rounds in this event.</p><br><p>In the round,there will be ,we provide some components to you to make CPU.And whose time is minimum he/she is winner. 
</p>
			 <hr>            <br>
			 <input type="hidden" value="3" name="event_name" />
			 <input type="submit" value="Select" class="btn btn-primary" />
			</section>
       
            <ul class="pagination">
                <li><a href="#">&laquo;</a></li>
                <li class="active"><a href="All_event.php">1</a></li>
                <li><a href="c1.php" >2</a></li>
                <li><a href="c2.php">3</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>
        </div>
        <div class="col-sm-4 sidebar">
            <section>
                <h3 class="tpad">Search</h3>
                <div class="input-group input-group-lg tpad">
                    <span class="input-group-addon glyphicon glyphicon-search"></span>
                    <input type="text" class="form-control input-lg" placeholder="Search">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                    </span>
                </div>
                <hr>
            </section>
            <section>
                <h3 class="tpad">Tags</h3>
                <div class="list-group tpad">
                    <a href="All_event.php" class="list-group-item"><span class="badge">3</span>Information Technology</a>
                    <a href="Computer.php" class="list-group-item active"><span class="badge">3</span>Compuer Science</a>
                    <a href="Civil.php" class="list-group-item"><span class="badge">2</span>Civil Engineering</a>
                    <a href="Mechanical.php" class="list-group-item"><span class="badge">1</span>Mechanical Engineering</a>
                    <a href="Production.php" class="list-group-item"><span class="badge">1</span>Production Engineering</a>
					<a href="Electrical.php" class="list-group-item"><span class="badge">2</span>Electrical/Electronics Engineering</a>
					<a href="Nontech.php" class="list-group-item"><span class="badge">2</span>Non-Tech Events</a>
                </div>
                <hr>
            </section>
            <section>
                <h3 class="tpad">Latest from Twitter</h3>
                <div class="media tpad">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="images/user.jpg" alt="user">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">@Vishal_Virani</h4>
                        <p class="bpad">Can't believe how good this Udaan 2k17 was,i m so exicited about Udaan 2k18!!!</p>
                    </div>
                </div>
            
            </section>
			<section>
                <h3 class="tpad">Latest from Twitter</h3>
                <div class="media tpad">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="images/user2.jpg" alt="user">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">@Parth_desai</h4>
                        <p class="bpad">I m dreaming everyday about Udaan.that is so amazing days of college life.</p>
                    </div>
                </div>
            
            </section>
        </div>
    </div>    
</div>    
</form>
    
</body>
</html>