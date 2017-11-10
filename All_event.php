<?php
include "lock.php";
include "config.php";
$catb="IT";
$it=0;
$cp=0;
$me=0;
$ci=0;
$pro=0;
$ec=0;
$non=0;

$sql="select * from events where Catagory='IT'";
$result=mysqli_query($con,$sql);
$it=mysqli_num_rows($result);

$sql="select * from events where Catagory='Computer'";
$result=mysqli_query($con,$sql);
$cp=mysqli_num_rows($result);

$sql="select * from events where Catagory='Mechanical'";
$result=mysqli_query($con,$sql);
$me=mysqli_num_rows($result);

$sql="select * from events where Catagory='Civil'";
$result=mysqli_query($con,$sql);
$ci=mysqli_num_rows($result);

$sql="select * from events where Catagory='Production'";
$result=mysqli_query($con,$sql);
$pro=mysqli_num_rows($result);

$sql="select * from events where Catagory='EC'";
$result=mysqli_query($con,$sql);
$ec=mysqli_num_rows($result);

$sql="select * from events where Catagory='Non-Tech'";
$result=mysqli_query($con,$sql);
$non=mysqli_num_rows($result);

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
          	<li class="active"><a href="All_event.php">Events</a></li>
			<li> <a href="Contact_us.php">Contact us</a></li>
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
        <div class="col-sm-8 blog">
            <section id="update_event">
            
			</section>
	</div>
        <div class="col-sm-4 sidebar">
            <section>
                <h3 class="tpad">Search</h3>
                <div class="input-group input-group-lg tpad">
                    <span class="input-group-addon glyphicon glyphicon-search"></span>
                   <form name="search_form"> <input type="text" class="form-control input-lg" onKeyUp="search(this.value)" name="searchField" placeholder="Search"></form>
                </div>
                <p class="table table-condensed" id="found"></p>
                <hr>
            </section>
            <section>
               
                <h3 class="tpad">Tags</h3>
                <div class="list-group tpad">
                    <a href="#" class="list-group-item" id="call_this_first" onclick="load('IT')"><span class="badge"><?php echo $it; ?></span>Information Technology</a>
                    <a href="#" class="list-group-item" onclick="load('Computer')"><span class="badge"><?php echo $cp; ?></span>Compuer Science</a>
                    <a href="#" class="list-group-item" onclick="load('Civil')"><span class="badge"><?php echo $ci; ?></span>Civil Engineering</a>
                    <a href="#" class="list-group-item" onclick="load('Mechanical')"><span class="badge"><?php echo $me; ?></span>Mechanical Engineering</a>
                    <a href="#" class="list-group-item" onclick="load('Production')"><span class="badge"><?php echo $pro; ?></span>Production Engineering</a>
					<a href="#" class="list-group-item" onclick="load('EC')"><span class="badge"><?php echo $ec; ?></span>Electrical/Electronics Engineering</a>
					<a href="#" class="list-group-item"  onclick="load('Non-Tech')"><span class="badge"><?php echo $non; ?></span>Non-Tech Events</a>                </div>
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
<script>

function load(str)
{
		var x=new XMLHttpRequest();
		x.onreadystatechange=function()
		{
			if(this.readyState==3)
				{
					document.getElementById("update_event").innerHTML="Please wait..";
				}
			if(this.readyState==4 && this.status==200)
				{
					document.getElementById("update_event").innerHTML=this.responseText;
				}
		};
		x.open("GET","load_event.php?q="+str,true);
		x.send();
}
function search(str)
{
		var x=new XMLHttpRequest();
		x.onreadystatechange=function()
		{
			if(this.readyState==3)
				{
					document.getElementById("found").innerHTML="Please wait..";
				}
			if(this.readyState==4 && this.status==200)
				{
					document.getElementById("found").innerHTML=this.responseText;
				}
		};
		x.open("GET","search_event.php?q="+str,true);
		x.send();
}
function selected(str)
{
		var x=new XMLHttpRequest();
		x.onreadystatechange=function()
		{
			if(this.readyState==3)
				{
					document.getElementById("update_event").innerHTML="Please wait..";
				}
			if(this.readyState==4 && this.status==200)
				{
					document.getElementById("update_event").innerHTML=this.responseText;
					document.search_form.searchField.value="";
					document.getElementById("found").innerHTML="";
				}
		};
		x.open("GET","load_event.php?s="+str,true);
		x.send();
}
function adding_in_cart(id)
{
		var x=new XMLHttpRequest();
		x.onreadystatechange=function()
		{
			
			if(this.readyState==4 && this.status==200)
				{
					window.location.reload();
					document.getElementById("adding_status").innerHTML=this.responseText;
				}
		};
		x.open("GET","add_to_cart.php?s="+id,true);
		x.send();
}
function remove(id)
{
		var x=new XMLHttpRequest();
		x.onreadystatechange=function()
		{
			if(this.readyState==4 && this.status==200)
				{
					window.location.reload();
					document.getElementById("adding_status").innerHTML=this.responseText;
				}
		};
		x.open("GET","remove_from_cart.php?s="+id,true);
		x.send();
}
</script>
</body>
</html>