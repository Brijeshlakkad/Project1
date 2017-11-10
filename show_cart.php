<?php
include("lock.php");
include("config.php");
ini_set('display_errors','Off');
$total=0;
?>
<!DOCTYPE html>
<html>
<head>
<title>Udaan2k18</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
           	<li class="active"> <a href="show_cart.php">Event Cart <span class="badge"><?php echo $num_item; ?></span></a></li>
			<li> <a href="logout.php">Logout</a></li>
        </ul>
    </div>
</nav>
<?php
$sql="select cart_items from users where Email='$login_email'";
$result=mysqli_query($con,$sql);
if(!$result)
	die("Can't find");
$r=mysqli_fetch_assoc($result);
$item_of_cart=explode(",",$r['cart_items']);
$num_item=0;
foreach($item_array as $item)
{
	$num_item+=1;
}
if($num_item!==0)
{
	foreach($item_of_cart as $item)
	{
		$sql="select * from events where ID='$item'";
		$result=mysqli_query($con,$sql);
		if(!$result)
		{
			continue;
		}
		$row=mysqli_fetch_assoc($result);
		$total += $row['Fees'];
?>
<div class="container padded">
<div class="row" id="show">
<div class="col-sm-offset-2 col-sm-8 col-sm-offset-2">
<section id="show_cart_items">
	<h2><?php echo strtoupper($row['Name']); ?></h2>
	<div class="container">
	<div class="row">
	<div class="col-lg-6"> <?php echo '<img class="img-responsive" id="img_in_cart" src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"/>'; ?></div>
	<div class="col-lg-6">
	<div style="line-height: 30px;">
		Fees : <?php echo $row['Fees']; ?><br>
		Contact : <?php echo $row['Contact1']; ?><br>
		<button class="btn btn-danger" onclick="remove(<?php echo $row['ID']; ?>)">Remove</button>
	</div>
	</div>
	</div>
	</div>
	
</section>
<br>
</div>
</div>
</div>



<?php
	}
}
else{
	$s="Your Cart is empty";
?>
<div class="container padded">
<div class="row" id="show">
<div class="col-sm-offset-2 col-sm-8 col-sm-offset-2">
<section id="show_cart_items">

</section>
</div>
<br>
</div>
</div>
<?php
}

?>
<center>
<div class="container" style="line-height: 60px;font-size: 30px;"><b>Total Bill : </b><?php echo $total; ?> ₹ <br> <a href="payment.php" type="button" class="btn btn-default" >Payment</a></div></center>
<script>
var check="<?php echo $num_item; ?>";
if(check==0)
		document.getElementById("show_cart_items").innerHTML="<h2><?php echo $s; ?></h2>";
else
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