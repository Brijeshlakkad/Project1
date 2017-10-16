<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin_login</title>
</head>
<body>
<h2>Add Event</h2>
<form method="post">
<table cellpadding="8px" cellspacing="8px">
	<tr>
		<td>Catagory of Event</td>
		<td><select name="catagory" onBlur="addEvent('a_cata',this.value)">
			<option value="0" >(Select a catagary)</option>
			<option value="Computer" >Computer</option>
			<option value="IT" >IT</option>
			<option value="Mechanical" >Mechanical</option>
			<option value="Civil" >Civil</option>
			<option value="Production" >Production</option>
			<option value="Non-Tech" >Non-Tech</option>
		</select></td>
		<td><p id="a_cata"></p></td>
	</tr>
	<tr>
		<td>Name of Event</td>
		<td><input type="text" name="name_of_event" onBlur="addEvent('a_name',this.value)" /></td>
		<td><p id="a_name"></p></td>
	</tr>
	<tr>
		<td>Discription of Event</td>
		<td><textarea name="div_of_event" onBlur="addEvent('a_div',this.value)" /></textarea></td>
		<td><p id="a_div"></p></td>
	</tr>
	<tr>
		<td>Image of Event</td>
		<td><input type="file" name="img_of_event" onBlur="capture()" /></td>
		<td><p id="a_img"></p></td>
	</tr>
</table>
</form>
<script>
function signup_status()
	{
		var name =	document.s_form.s_name.value;
		var email =	document.s_form.s_email.value;
		var mno =	document.s_form.s_mno.value;
		var pass =	document.s_form.s_pass.value;
		var college =	document.s_form.s_college.value;
		var branch =	document.s_form.s_branch.value;
		var s_name=document.getElementById('s_name').innerHTML;
		var s_email=document.getElementById('s_email').innerHTML;
		var s_mno=document.getElementById('s_mno').innerHTML;
		var s_pass=document.getElementById('s_pass').innerHTML;
		var s_cpass=document.getElementById('s_cpass').innerHTML;
		var s_college=document.getElementById('s_college').innerHTML;
		var s_branch=document.getElementById('s_branch').innerHTML;
		if(s_name=="valid Username" && s_pass=="valid Password" && s_cpass=="matched" && s_email=="valid Email" && s_mno=="valid Mobile Number" && s_college=="Good" && s_branch=="Done")
			{
				var x=new XMLHttpRequest();
				x.onreadystatechange=function()
				{
					if(x.readyState==4 && x.status==200)
						{
							document.getElementById('s_status').innerHTML=x.responseText;
						}
				};
				x.open("POST","signup.php",true);
				x.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				x.send("name="+name+"&email="+email+"&mno="+mno+"&pass="+pass+"&college="+college+"&branch="+branch);
			}
		else{
			document.getElementById('s_status').innerHTML="<p style='color:red;'>please enter valid Information</p>"
		}
	}
	
function addEvent(f,str)
	{
		var x=new XMLHttpRequest();
		x.onreadystatechange=function()
		{
			if(this.readyState==4 && this.status==200)
				{
					document.getElementById(f).innerHTML=this.responseText;
				}
		};
		x.open("GET","check_admin.php?f="+f+"&q="+str,true);
		x.send();
	}
</script>
</body>
</html>
