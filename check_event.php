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
	else if(strlen($g)<=3 || strlen($g)>10)
	{
		echo "Name shold contain between 3 and 10 characters";
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
	else if(strlen($g)<=30 || strlen($g)>=400) 
	{
		echo "Dicription shold contain between 30 and 400 charcters";
	}
	else
	{
		echo "Done";
	}
}
else if($f=="a_con1")
{
	if($g=="")
		echo "please enter Contact";
	else if(!preg_match("/^[0-9]{10}$/",$g))
					{
						echo "Not Valid";
					}
				else{
					echo "Done";
				}
}
else if($f=="a_fee")
{
	if($g=="")
		echo "please enter Fees";
	else
		echo "Done";
}
?>