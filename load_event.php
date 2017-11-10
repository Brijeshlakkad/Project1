<?php
include("lock.php");
include("config.php");
if(isset($_GET['q']))
{
	$catb=$_GET['q'];

	$sql="select * from events where Catagory='$catb'";
	$result=mysqli_query($con,$sql);
	if(!$result)
			die("Something went wrong.");
	$num=mysqli_num_rows($result);
	if($num>0)
	{
			while($r=mysqli_fetch_assoc($result))
			{
			?>

            <div id="content_of_event">
                <h1><?php echo $r['Catagory'] ?> &raquo; <?php echo strtoupper($r['Name']); ?></h1><hr>
                <p id="time_of_event"><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $r['Created']; ?></p>
                <hr>
                <?php echo '<img class="img-responsive" id="img_of_event" src="data:image/jpeg;base64,'.base64_encode( $r['Image'] ).'"/>'; ?>
                <hr>
                <div id="div_of_event">
                <?php echo $r['Description']; ?>
				</div><br>
				<div id="fees_of_event">Fees : <?php echo $r['Fees']; ?></div><br>
				<div id="contacts" >
					<b>For More Information, Call to :</b><br />
					1. <b><?php echo $r['Contact1']; ?></b><br/>
					2. <b><?php echo $r['Contact2']; ?></b>
				</div><br>
				<?php 
				$sql2="select * from users where Email='$login_email'";
				$select_result=mysqli_query($con,$sql2);
				if($select_result)
				{
					$fetch=mysqli_fetch_assoc($select_result);
					$items=$fetch['cart_items'];
					$item_array=explode(",",$items);
					$addid='onClick="adding_in_cart('.$r['ID'].')"';
					$removeid='onClick="remove('.$r['ID'].')"';
					if(! (in_array($r['ID'],$item_array)))
					{
						echo "<button class='btn' ".$addid.">Add to Cart</button>";
					}else
					{
						echo "<button class='btn' ".$removeid.">Remove from Cart</button>";
					}
				}
				?>	
			</div>
			
<?php
				}
	}
	else
	{
		echo "No events are uploaded yet.";
	}
}
if(isset($_GET['s']))
{
	$name=$_GET['s'];

	$sql="select * from events where Name='$name'";
	$result=mysqli_query($con,$sql);
	if(!$result)
			die("Something went wrong.");
	while($r=mysqli_fetch_assoc($result))
			{
			?>

             <div id="content_of_event">
                <h1><?php echo $r['Catagory'] ?> &raquo; <?php echo strtoupper($r['Name']); ?></h1><hr>
                <p id="time_of_event"><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $r['Created']; ?></p>
                <hr>
                <?php echo '<img class="img-responsive" id="img_of_event" src="data:image/jpeg;base64,'.base64_encode( $r['Image'] ).'"/>'; ?>
                <hr>
                <div id="div_of_event">
                <?php echo $r['Description']; ?>
				</div><br>
				<div id="fees_of_event">Fees : <?php echo $r['Fees']; ?></div><br>
				<div id="contacts" >
					<b>For More Information, Call to :</b><br />
					1. <b><?php echo $r['Contact1']; ?></b><br/>
					2. <b><?php echo $r['Contact2']; ?></b>
				</div><br>
				<?php 
				$sql2="select * from users where Email='$login_email'";
				$select_result=mysqli_query($con,$sql2);
				if($select_result)
				{
					$fetch=mysqli_fetch_assoc($select_result);
					$items=$fetch['cart_items'];
					$item_array=explode(",",$items);
					$addid='onClick="adding_in_cart('.$r['ID'].')"';
					$removeid='onClick="remove('.$r['ID'].')"';
					if(! (in_array($r['ID'],$item_array)))
					{
						echo "<button class='btn' ".$addid.">Add to Cart</button>";
					}else
					{
						echo "<button class='btn' ".$removeid.">Remove from Cart</button>";
					}
				}
				?>
			</div>
			
<?php
				}
}
	mysqli_close($con);
?>