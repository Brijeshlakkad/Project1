<?php
session_start();
unset($_SESSION['event_id']);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin_login</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<h2>Add Event</h2>
<form name="a_form" method="post">
<table cellpadding="8px" cellspacing="8px">
	<tr>
		<td>Catagory</td>
		<td><select name="a_cata" onBlur="addEvent('a_cata',this.value)">
			<option value="0" >(Select a catagary)</option>
			<option value="Computer" >Computer</option>
			<option value="IT" >IT</option>
			<option value="Mechanical" >Mechanical</option>
			<option value="Civil" >Civil</option>
			<option value="EC" >Electrical/EC</option>
			<option value="Production" >Production</option>
			<option value="Non-Tech" >Non-Tech</option>
		</select></td>
		<td><p id="a_cata"></p></td>
	</tr>
	<tr>
		<td>Name</td>
		<td><input type="text" name="a_name" onBlur="addEvent('a_name',this.value)" /></td>
		<td><p id="a_name"></p></td>
	</tr>
	<tr>
		<td>Discription</td>
		<td><textarea name="a_div" onBlur="addEvent('a_div',this.value)" /></textarea></td>
		<td><p id="a_div"></p></td>
	</tr>
	<tr>
		<td>Fees</td>
		<td><input type="text" name="a_fee" onBlur="addEvent('a_fee',this.value)" /></td>
		<td><p id="a_fee"></p></td>
	</tr>
	<tr>
		<td>Contact 1</td>
		<td><input type="text" name="a_con1" onBlur="addEvent('a_con1',this.value)" /></td>
		<td><p id="a_con1"></p></td>
	</tr>
	<tr>
		<td>Contact 2</td>
		<td><input type="text" name="a_con2" onBlur="addEvent('a_con2',this.value)" /></td>
		<td><p id="a_con2"></p></td>
	</tr>
	<tr>
		<td><input type="button" onclick="add()" value="Upload Details"/>
		</td>
		<td><p id="a_status"></p></td>
	</tr>
</table>
</form>

<script>
function add()
	{
		var name =	document.a_form.a_name.value;
		var div =	document.a_form.a_div.value;
		var cata =	document.a_form.a_cata.value;
		var fee =	document.a_form.a_fee.value;
		var con1 =	document.a_form.a_con1.value;
		var con2 =	document.a_form.a_con2.value;
		var e_name=document.getElementById('a_name').innerHTML;
		var e_div=document.getElementById('a_div').innerHTML;
		var e_cata=document.getElementById('a_cata').innerHTML;
		var e_con1=document.getElementById('a_con1').innerHTML;
		var e_con2=document.getElementById('a_con2').innerHTML;
		var e_fee=document.getElementById('a_fee').innerHTML;
		if(e_name=="Done" && e_div=="Done" && e_cata=="Done" && e_fee=="Done" && e_con1=="Done" && e_con2=="Done")
			{
				var x=new XMLHttpRequest();
				x.onreadystatechange=function()
				{
					if(x.readyState==4 && x.status==200)
						{
							var d=x.responseText;
							if(d==1)
								document.location="upload_img.php";
							else
								document.getElementById('a_status').innerHTML=d;
						}
				};
				x.open("POST","submit_event.php",true);
				x.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				x.send("name="+name+"&div="+div+"&cata="+cata+"&fee="+fee+"&con1="+con1+"&con2="+con2);
			}
		else{
			document.getElementById('a_status').innerHTML="<p style='color:red;'>please enter valid Information</p>";
		}
	}
	
function addEvent(f,str)
	{
		if(f=="a_con2")
			{
				var c=document.a_form.a_con1.value;
				if(str=="")
					{
						document.getElementById(f).innerHTML="please enter Contact";
					}
				else if(str==c)
					{
						document.getElementById(f).innerHTML="Contacts must be different";
					}
				else if(!(str.length==10))
					{
						document.getElementById(f).innerHTML="Contacts should contain 10 digits";
					}
				else{
					document.getElementById(f).innerHTML="Done";
				}
				return;
			}
		else{
		var x=new XMLHttpRequest();
		x.onreadystatechange=function()
		{
			if(this.readyState==4 && this.status==200)
				{
					document.getElementById(f).innerHTML=this.responseText;
				}
		};
		x.open("GET","check_event.php?f="+f+"&q="+str,true);
		x.send();
		}
	}
</script>
</body>
</html>
