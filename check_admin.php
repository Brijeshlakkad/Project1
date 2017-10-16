<?php
$f=$_GET['f'];
$g=$_GET['q'];
if($f=="a_cata")
{
	if($g=="0")
		echo "please select a catagory";
	else
		echo "Done";
}
else if($f=="a_name")
{
	if($g=="")
		echo "please enter Name of Event";
	else if(strlen($g)<=3)
	{
		echo "Name shold contain more than 3 characters";
	}
	else
	{
		echo "Done";
	}
}
else if($f=="a_div")
{
	if($g=="")
		echo "please enter Discrption of Event";
	else if(strlen($g)<=40)
	{
		echo "Dicription shold contain more than 40 charcters";
	}
	else
	{
		echo "Done";
	}
}
?>