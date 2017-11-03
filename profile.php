<?php
include('lock.php');
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
<?php include "nav.php"; ?>
<center>
<div class="container padded">
<form name="s_form" method="post">
<table cellpadding="5px" cellspacing="5px">
	<tr><div class="form-group">
		<td><label for="email" class="col-lg-4 control-label">Email</label></td>
	<td><input type="email" class="form-control" name="s_email" value="<?php echo $login_email; ?>" readonly style="width:150px;" /></td><td><p id="s_email"></p></td>
		</div></tr>
		
	<tr><div class="form-group">
		<td><label for="name" class="col-lg-4 control-label">Name</label></td>
		<td><input type="text" class="form-control" name="s_name" style="width:150px;"  onKeyUp="update('s_name',this.value)" /></td><td><p id="s_name"></p></td>
		</div></tr>
		
	<tr><div class="form-group">
		<td><label for="mno" class="col-lg-4 control-label">Mobile_no</label></td>
		<td><input type="text" class="form-control" name="s_mno" style="width:150px;"  onKeyUp="update('s_mno',this.value)" /></td>
		<td><p id="s_mno"></p></td>
		</div></tr>

	<tr><div class="form-group">
		<td><label for="opass" class="col-lg-4 control-label">Old Password</label></td>
		<td><input type="password" class="form-control" name="s_opass" style="width:150px;" /></td>
		<td><p id="s_opass"></p></td>
		</div></tr>
		
	<tr><div class="form-group">
		<td><label for="pass" class="col-lg-4 control-label">New Password</label></td>
		<td><input type="password" class="form-control" name="s_pass" style="width:150px;"  onKeyUp="update('s_pass',this.value)" /></td><td><p id="s_pass"></p></td>
	</div>
	</tr>
	
	<tr><div class="form-group">
		<td><label for="cpass" class="col-lg-4 control-label">Conform New Password</label></td>
		<td><input type="password" class="form-control" name="s_cpass" style="width:150px;"  onKeyUp="update('s_cpass',this.value)" /></td><td><p id="s_cpass"></p></td>
		</div></tr>
		
	<tr><div class="form-group">
		<td><label for="college" class="col-lg-4 control-label">College/University</label></td>
		<td><input type="text" class="form-control" name="s_college" value="<?php echo $login_college; ?>" style="width:150px;" readonly /></td><td><p id="s_college"></p></td></tr>
		</div></tr>
		
	<tr><div class="form-group">
		<td><label for="branch" class="col-lg-4 control-label">Branch</label></td>
		<td><input type="text" class="form-control" name="s_branch" value="<?php echo $login_branch; ?>" style="width:150px;" readonly /></td><td><p id="s_branch"></p></td>
		</div></tr>
</table>
<br>
<button class="btn btn-lg btn-primary"type="button" onClick="check()" style="border:0px;">Update <b class="glyphicon glyphicon-lock"></b></button><p id="s_status"></p>
</form>

</div> 

</center>
<br>
<script>

function check()
{
	
		var name =	document.s_form.s_name.value;
		var email =	document.s_form.s_email.value;
		var mno =	document.s_form.s_mno.value;
		var pass =	document.s_form.s_pass.value;
		var s_name=document.getElementById('s_name').innerHTML;
		var s_mno=document.getElementById('s_mno').innerHTML;
		var s_pass=document.getElementById('s_pass').innerHTML;
		var s_cpass=document.getElementById('s_cpass').innerHTML;
		if(s_name=="valid Username" &&  s_pass=="valid Password" && s_cpass=="matched"  && s_mno=="valid Mobile Number")
			{
				var opass=document.s_form.s_opass.value;
				if(opass=="<?php echo $login_password; ?>")
					{
						document.getElementById("s_opass").innerHTML="";
						var x=new XMLHttpRequest();
						x.onreadystatechange=function()
						{
							if(this.readyState==4 && this.status==200)
								{
									window.location.reload();
									document.getElementById('s_status').innerHTML=this.responseText;
								}
						};
						x.open("post","update_details.php",true);
						x.setRequestHeader("Content-type","application/x-www-form-urlencoded");
						x.send("name="+name+"&email="+email+"&mno="+mno+"&pass="+pass+"&opass="+opass);
					}
				else{
					document.getElementById("s_opass").innerHTML="<p style='color:red;'>Old Password is not Correct</p>";
				}
			}
		else{
			document.getElementById('s_status').innerHTML="<p style='color:red;'>please enter valid Information</p>"
		}
	}
function update(f,str)
	{
		
		if(f=="s_cpass")
			{
				var pass=document.s_form.s_pass.value;
				if(str==pass)
					{
						document.getElementById(f).innerHTML= "matched";
					}
				else
				{
						document.getElementById(f).innerHTML= "passwords do not matched";
					}
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
		x.open("GET","check_signup.php?f="+f+"&q="+str,true);
		x.send();
			}
	}	
</script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>