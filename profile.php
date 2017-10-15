<?php
include('lock.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>Udaan2k18</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/pro.css" rel="stylesheet">
<script type="text/javascript">

function checker() {
	
	var mo=document.form1.mno.value;
	if(mo.length==10)
	{
	}
	else{
		document.getElementById("mno").focus();
		return false;
	}
	var pass=document.form1.pass.value;
	var opass=<?php $login_password ?>
	if (pass==opass))
	{
	var npass=document.form1.npass.value;
	var m=/^[0-9]+[!@#$%^&*]$/;
	if (npass.match(m))
	{
	}
	else{
		document.getElementById("npass").focus();
		return false;
	}
	var cnpass=document.form1.cnpass.value;
	if (cnpass==npass))
	{
	}
	else{
		document.getElementById("cnpass").focus();
		return false;
	}
	}
	else{
		document.getElementById("pass").focus();
		return false;
	}
	
}
</script>

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
        <a class="navbar-brand" href="index.php"></a>
    </div> 
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="profile.php" style="text-transform:uppercase;"><?php echo $login_name; ?></a></li>
          	<li> <a href="All_event.php">Events</a></li>
			<li> <a href="Contact_us.php">Contact us</a></li>
			<li> <a href="about_us.html">About us</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Social<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="http://www.facebook.com">Facebook</a></li>
                    <li><a href="http://www.twitter.com">Twitter</a></li>
                    <li><a href="https://plus.google.com">Google+</a></li>
                    <li><a href="http://www.linkedin.com">LinkedIn</a></li>
                </ul>
            </li>
			<li> <a  href="logout.php">Logout</a></li>
        </ul>
    </div>
</nav>


<div class="wel">
<a href="#mymodal" data-toggle="modal" class="btn btn-primary">Edit <b class="glyphicon glyphicon-pencil"></b></a>
<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         		   <div class="modal-dialog">
             		   <div class="modal-content">
               		    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 class="modal-title"><center>Edit Details</center></h3>
                    </div>
                    <div class="modal-body">
<form action="edit.php" onSubmit="return checker()" name="form1" method="post">
<table cellpadding="5px" cellspacing="5px">
	<tr><div class="form-group">
	
		<td><label for="l_pass" class="col-lg-4 control-label">Email</label></td>
	<td><input type="email" class="form-control" name="email" value="<?php echo $login_email; ?>" readonly style="width:150px;" ></td>
		</div><td><p id="u_email"></p></td></tr>
	<tr><div class="form-group">
	
		<td><label for="l_pass" class="col-lg-4 control-label">Mobile_no</label></td>
		<td><input type="text" class="form-control" name="mno" style="width:150px;" required="required"></td>
		</div><td><p id="u_mno"></p></td></tr>
	<tr><div class="form-group">
	
		<td><label for="l_pass" class="col-lg-4 control-label">Old Password</label></td>
		<td><input type="password" class="form-control" name="pass" style="width:150px;" required="required"></td>
		</div><td><p id="u_mno"></p></td></tr>
	<tr><div class="form-group">
	
		<td><label for="l_pass" class="col-lg-4 control-label">New Password</label></td>
		<td><input type="password" class="form-control" name="npass" style="width:150px;" required="required"></td>
		<td><p id="u_mno"></p></td>
	</tr>
	<tr><div class="form-group">
	
		<td><label for="l_pass" class="col-lg-4 control-label">Conform New Password</label></td>
		<td><input type="password" class="form-control" name="cnpass" style="width:150px;" required="required"></td>
		</div><td><p id="u_mno"></p></td></tr>
</table>
<br><center>
<button class="btn btn-primary" ><input type="submit" class="btn btn-primary" style="border:0px;" value="Update"><b class="glyphicon glyphicon-lock"></b></button>
	</center>
</form>
</div>
<div class="modal-footer">
                        <a href="profile.php" class="btn btn-default btn-lg">OK</a>
                    </div>
                </div>
           </div>
</div>
</div>

<div class="information">
<center>
<table border="4" cellspacing="10" cellpadding="10">
<tr>
<td>Name:</td>
<td><?php echo $login_session; ?></td>
</tr>
<tr> 
<td>Email:</td>
<td><?php echo $login_email; ?></td>
</tr>
<tr>
<td>Mobile_no:</td>
<td><?php echo $login_mno; ?></td>
</tr>
<tr>
<td>College:</td>
<td><?php echo $login_college; ?></td>
</tr>
<tr>
<td>Branch:</td>
<td><?php echo $login_branch; ?></td>
</tr>
</table>
</center>
</div>
<br>
<script>
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