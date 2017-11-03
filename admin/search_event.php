<?php
include("../config.php");
if(isset($_GET['q']))
{
	$q=$_GET['q'];
	$hint="";
	if($q!=="")
	{
		
		$sql="select * from events where Name like '$q%'";
		$result=mysqli_query($con,$sql);
		if(!$result)
				die("Something went wrong.");
		while($r=mysqli_fetch_assoc($result))
		{
			
			if($hint=="")
				$hint ="<li><a href='#".$r['Name']."' onclick='selected(this.innerHTML);'>".$r['Name']."</a></li>";
			else
				$hint .= "<li><a href='#".$r['Name']."' onclick='selected(this.innerHTML);'>".$r['Name']."</a></li>";
		}
	}
	echo $hint===""?"<ul><li <a href='#'>no suggestion</a></li></ul>":"<ul>".$hint."</ul>";
}
?>