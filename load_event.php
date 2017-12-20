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
				<div id="<?php echo $r['ID']; ?>"><h1>
				<fieldset class="rating" >
    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
					</fieldset></h1></div>
			</div>
			
<?php
				echo "<br><br>";
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