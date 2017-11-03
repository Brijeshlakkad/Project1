<?php
include("a_lock.php");
include("../config.php");
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
<meta charset="utf-8">
<title>Admin_login</title>
<script src="../js/jQuery.js"></script>
<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="../css/pro.css" rel="stylesheet">
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
		    <li><a href="index.php" style="text-transform:uppercase;">Admin Login</a></li>
		    <li><a href="upload_event.php">Upload Event</a></li>
			<li class="active"><a href="show_all_events.php">Events</a></li>
			<li> <a href="logout.php">Logout</a></li>
        </ul>
    </div>
</nav>
<div class="container padded">
<div class="row">
        <div class="col-sm-8 blog">
        <section id="update_event">
	<?php
	$a=['IT','Computer','Mechanical','Civil','EC','Production','Non-Tech'];
	foreach($a as $f)
	{
		$sql="select * from events where Catagory='$f'";
		$result=mysqli_query($con,$sql);
		if(!$result)
			die("Can't select");
			$num=mysqli_num_rows($result);
		if($num>0)
		{		$c=0;
				while($r=mysqli_fetch_assoc($result))
				{
					$x=$r['Name'].''.$r['ID'];
					$nn=$r['Name'];
					$ii=$r['ID'];
				?>

					<div id="<?php echo $f; ?>">

					<h1><?php echo $c==0?"<hr><hr><br>".$r['Catagory']:""; ?></h1><hr>
					<h3 id="<?php echo $r['Name']; ?>"><?php echo strtoupper($r['Name']); ?></h3><hr>
					<p id="time_of_event"><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $r['Created']; ?></p>
					<hr>
					<?php echo '<img class="img-responsive" id="img_in_admin" src="data:image/jpeg;base64,'.base64_encode( $r['Image'] ).'"/>'; ?>
					<hr>
					<div id="div_of_event">
					<?php 
					$array=explode(",,,,,",$r['Description']); 
					$i=1;
					foreach($array as $ex)
					{
						echo "Step ".$i." : ".$ex."<br />";
						$i+=1;
					}
					?>
					</div><br>
					<div id="fees_of_event">Fees : <?php echo $r['Fees']; ?></div><br>
					<div id="contacts" >
						<b>For More Information, Call to :</b><br />
						1. <b><?php echo $r['Contact1']; ?></b><br/>
						2. <b><?php echo $r['Contact2']; ?></b>
					</div><br>
					<div style="line-height: 30px;">
					<a class="btn btn-primary" href="edit.php?q=<?php echo $ii; ?>" >Edit </a> &nbsp;&nbsp;&nbsp;&nbsp; <button type="button" class="btn btn-danger" onclick="del('<?php echo $ii; ?>','<?php echo $x; ?>')" >Remove </button> &nbsp;<p id="<?php echo $x; ?>"></p><br>
					</div>
					<br>
				</div>

	<?php
					$c+=1;
					}
		}
		else
		{
		?>
						<div id="<?php echo $f; ?>">
						<h1><?php echo "<hr><hr><br>".$f; ?></h1><hr>
						<h3>No events are uploaded yet.</h3>
						</div>
<?php
		}
}
?>
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
                    <a href="#IT" class="list-group-item"><span class="badge"><?php echo $it; ?></span>Information Technology</a>
                    <a href="#Computer" class="list-group-item" ><span class="badge"><?php echo $cp; ?></span>Compuer Science</a>
                    <a href="#Civil" class="list-group-item" ><span class="badge"><?php echo $ci; ?></span>Civil Engineering</a>
                    <a href="#Mechanical" class="list-group-item" ><span class="badge"><?php echo $me; ?></span>Mechanical Engineering</a>
                    <a href="#Production" class="list-group-item" ><span class="badge"><?php echo $pro; ?></span>Production Engineering</a>
					<a href="#EC" class="list-group-item" ><span class="badge"><?php echo $ec; ?></span>Electrical/Electronics Engineering</a>
					<a href="#Non-Tech" class="list-group-item"><span class="badge"><?php echo $non; ?></span>Non-Tech Events</a>                </div>
                <hr>
            </section>
		</div>
	</div>
</div>
<script>
function del(id,str)
{
	var x=new XMLHttpRequest();
		x.onreadystatechange=function()
		{
			if(this.readyState==3)
				{
					document.getElementById(str).innerHTML="Please wait..";
				}
			if(this.readyState==4 && this.status==200)
				{
					window.location.reload();
					document.getElementById(str).innerHTML=this.responseText;
				}
		};
		x.open("GET","delete.php?q="+id,true);
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
</script>
</body>
</html>