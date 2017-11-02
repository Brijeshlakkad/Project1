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
	else if(strlen($g)<=3 || strlen($g)>20)
	{
		echo "Name shold contain between 3 and 20 characters";
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
	else if(strlen($g)<=30 || strlen($g)>=900) 
	{
		echo "Dicription shold contain between 30 and 900 charcters";
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
	else if(!filter_var($g,FILTER_VALIDATE_INT))
		echo "it should not contain charcters";
	else
		echo "Done";
}
?>