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
                <h1>Production &raquo; Events</h1><hr>
                <p class="lead">Retro Engineering</a></p>
                <hr>
                <p><span class="glyphicon glyphicon-time"></span> Posted on Oct 24, 2018 at 10:00 AM</p>
                <hr>
                <img src="images/p1.jpeg" class="img-responsive">
                <hr>
                <p>There are 2 rounds in this event.</p><br><p>1. In the first round there will,you have to solve a puzzle to get instrument.If you will select for next round then you will get message or email from us.
</p><br><p>
2. In the final round,By instruments you have to make some efficient model.Whose model is best, he/she will winner of Retro Engineering</p><br><p>
			 <hr>            <br>
			 <input type="hidden" value="9" name="event_name" />
			 <input type="submit" value="Select" class="btn btn-primary" />
			</section>
       
            <ul class="pagination">
                <li><a href="#">&laquo;</a></li>
                <li class="active"><a href="#">1</a></li>
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
                <h3 class="tpad">Events</h3>
                 <div class="list-group tpad">
                    <a href="All_event.php" class="list-group-item"><span class="badge">3</span>Information Technology</a>
                    <a href="Computer.php" class="list-group-item"><span class="badge">3</span>Compuer Science</a>
                    <a href="Civil.php" class="list-group-item"><span class="badge">2</span>Civil Engineering</a>
                    <a href="Mechanical.php" class="list-group-item"><span class="badge">1</span>Mechanical Engineering</a>
                    <a href="Production.php" class="list-group-item active"><span class="badge">1</span>Production Engineering</a>
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