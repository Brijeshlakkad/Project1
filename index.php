<!DOCTYPE html>
<html>
<head>
<title>Udaan2k18</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/css.css" rel="stylesheet">
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
        <a class="navbar-brand" href="index.php">Signup/Login</a>
    </div> 
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
          	<li><a href="#">Events</a></li>
			<li> <a href="Contact.php">Contact us</a></li>
			<li> <a href="about_us.html">About us</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Social <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="http://www.facebook.com">Facebook</a></li>
                    <li><a href="http://www.twitter.com">Twitter</a></li>
                    <li><a href="https://plus.google.com">Google+</a></li>
                    <li><a href="http://www.linkedin.com">LinkedIn</a></li>
                </ul>
            </li>
        </ul>
    </div>
    
</nav>
<div id="myCarousel" class="carousel slide">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <img src="images/slide1.jpg">
            <div class="container active">
                <div class="carousel-caption">
                    <h1 class="head_udaan">Udaan 2k18</h1>
                    <p>A poster with a smart tech quote would be a timely reminder in every office. Getting a quote on a wall is not a big deal. There are many sites that offer high-quality quote designs, not only on posters but also dozens of other items.</p>
                    <p><a data-toggle="modal" href="#signupdiv" class="btn btn-primary btn-large">Sign up today!</a></p>
					
                </div>
				
            </div>
        </div>
        <div class="item">
            <img src="images/slide2.jpg">
            <div class="container active">
                <div class="carousel-caption">
                    <h1>ALL TRANSPORT COVERED</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p><a data-toggle="modal" href="#signupdiv" class="btn btn-primary btn-large">Sign up today!</a></p>
					
                </div>
				 
            </div>
        </div>
        <div class="item">
            <img src="images/slide3.jpg">
            <div class="container active">
                <div class="carousel-caption">
                    <h1>NEW - SAFETY MODE</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p><a data-toggle="modal" href="#signupdiv" class="btn btn-primary btn-large">Sign up today!</a></p>
					
                </div>
				 </div>
        </div>
		
    </div>  

    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>    /*
<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         		   <div class="modal-dialog">
             		   <div class="modal-content">
               		    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 class="modal-title"><center>Log in</center></h3>
                    </div>
                    <div class="modal-body">
<center>
<table>
<form name="l_form" method="post" class="form-horizontal tpad" role="form">
<tr><td>
<div class="form-group">
	<label for="l_email" class="col-lg-2 control-label">Email</label>
    	  	<div class="col-lg-10">
				<input type="text" name="l_email"  autocomplete="off" style="width:250px;"  class="form-control"  onblur="login('l_email',this.value)">
   	    	</div>
</div>
	</td><td><p id="l_email"></p></td><tr><td>
<div class="form-group">
	<label for="email" class="col-lg-2 control-label">Password</label>
    	  	<div class="col-lg-10">
				<input type="password" name="l_pass" autocomplete="off" style="width:250px;"  class="form-control"  onblur="login('l_pass',this.value)">
   	    	</div>
</div></td><td><p id="l_pass"></p></td>
	<tr><td>
<button class="btn btn-primary" type="button" onclick="login_status()">Secure Login <b class="glyphicon glyphicon-lock"></b></button>
		</td><td><p id="l_status"></p></td</tr>
</form>
	</table>
<br> 
<br>
<a href="forget.php" >Forget Password?</a><br>
<a href="#signupmodal" data-toggle="modal">Create a new account ?</a>

</center>
</div>
<div class="modal-footer">
                        <a href="index.php" class="btn btn-default btn-lg">OK</a>
                    </div>
                </div>
           </div>
</div> */
<div id="signupdiv">
<h3><center>Sing Up!</center></h3>
<table cellspacing="5px" cellpadding="5px">
<form name="s_form" method="post" enctype="multipart/form-data" class="form-horizontal tpad" >
<tr>
	<td>
	<div class="container">
			<div class="row">
			<div class="form-group">
				<label for="name" class="col-lg-2 control-label">Name</label>
						<div class="col-lg-6">
							<input type="text" name="s_name" class="form-control" id="name" style="width:250px;" autocomplete="off" required="required" onblur="signup('s_name',this.value)">
						</div>
			</div>
			</div>
	</div>
	</td>
	<td><div class="col-lg-4"><p id="s_name"></p></div></td>
</tr>
<tr>
	<td>
	<div class="container">
			<div class="row">
			<div class="form-group">
			<label for="mobile" class="col-lg-2 control-label">Mobile no</label>
				<div class="col-lg-6">
					<input type="text" name="s_mno" id="mno"  class="form-control" style="width:250px;" autocomplete="off" required="required" onblur="signup('s_mno',this.value)" />
				</div>
	</div>
	</td>
	<td><div class="col-lg-4"><p id="s_mno"></p></div></td>
</tr>
<tr>
	<td>
	<div class="container">
			<div class="row">
			<div class="form-group">
			<label for="email" class="col-lg-2 control-label">Email</label>
    	  	<div class="col-lg-10">
              	<input type="text" name="s_email" id="email" class="form-control" style="width:250px;" autocomplete="off" required="required" onblur="signup('s_email',this.value)" />
   	    	</div>
	</div>
	</td>
<td><div class="col-lg-4"><p id="s_email"></p></div></td>
</tr>
<tr>
<td>
	<div class="container">
			<div class="row">
			<div class="form-group">
			<label for="password" class="col-lg-2 control-label">Password</label>
    	  	<div class="col-lg-10">
				<input type="password" name="s_pass"  id="pass" autocomplete="off"style="width:250px;"  class="form-control" required="required" onblur="signup('s_pass',this.value)" />
   	    	</div>
	</div>
	</td>
<td><div class="col-lg-4"><p id="s_pass"></p></div></td>
</tr>
<tr>
	<td>
	<div class="container">
			<div class="row">
			<div class="form-group">
			<label for="cpassword" class="col-lg-2 control-label">Conform Password</label>
    	  	<div class="col-lg-10">
				<input type="password" name="s_cpass"  id="cpass" autocomplete="off" style="width:250px;" class="form-control" required="required" onblur="signup('s_cpass',this.value)" />
   	    	</div>
	</div>
	</td>
<td><div class="col-lg-4"><p id="s_cpass"></p></div></td>
</tr>
<tr>
	<td>
	<div class="container">
			<div class="row">
			<div class="form-group">
			<label for="college" class="col-lg-2 control-label">College</label>
    	  	<div class="col-lg-10">
              	<select name="s_college" id="college" style="width:250px;" autocomplete="off" required onblur="signup('s_college',this.value)" />>
				<option value="0">(Please Select Your College)</option>
				<option value="BVM">Birla Vishvakarma Mahavidhyalaya</option>
				<option value="GHPatel">G.H.Patel Enginnering College</option>
				<option value="CU">Changa University</option>
				<option value="ADDIT">ADDIT</option>
				<option value="1">Other College</option>
				</select>
   	    	</div>
	</div>
	</td>
<td><div class="col-lg-4"><p id="s_college"></p></div></td>
</tr>
<tr>
	<td>
	<div class="container">
			<div class="row">
			<div class="form-group">
			<label for="branch" class="col-lg-2 control-label">Branch</label>
    	  	<div class="col-lg-10">
            <select name="s_branch" id="branch" style="width:250px;" autocomplete="off" required onblur="signup('s_branch',this.value)" />>
			<option value="0">(Please Select Your Branch)</option>
			<option value="IT">Information Technology</option>
			<option value="CP">Computer Science</option>
			<option value="ME">Mechanical Engineering</option>
			<option value="CE">Civil Engineering</option>
			<option value="1">Other Branch</option>
			</select>
   	    	</div>
	</div>
	</td>
<td><div class="col-lg-4"><p id="s_branch"></p></div></td>
</tr>
<tr>

<td>
<button class="btn btn-success"  type="button" onclick="signup_status()">Signup </button>
</td>
<td><p id="s_status"></p></td>

</tr>

</form>
</table>
<a href="index.html#mymodal" >Already have a account ?</a>
</div>




<div class="info">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 tabbable">
            </div>
            <div class="col-sm-4 col-sm-offset-2">
                 <blockquote>
                    <p>&ldquo;This Webpage has completely revolutionized Events, we will never have to wait around in the line for participant in your likely events, we can time our day perfectly. Here You go for your interesting activity.&rdquo;</p>
                    <small>Brijesh Lakkad, <cite title="source title">BVM Enterprise</cite></small>
                </blockquote>
            </div>
        </div>
    </div>       
</div>
<div class="ftr">
    <div class="container">
        <div class="row">
            <footer>
                <div class="pull-left ft_space">
                    <address>
                    <h3>Udaan 2k18 Inc.</h3>
					Birla vishvakarma Mahavidhyalaya<br>
                    Bhaikaka Library<br>
                    Vallabha vidhyanagar,Anand<br>
                    <a href="mailto: brijeshlakkad22@gmail.com">hello@bvm.com</a><br>
                    <abbr title="Phone">P:</abbr>704-616-7267
                    </address>
                </div>
                <div class="pull-right ft_space">
                    <img class="img-responsive" src="images/udaan.png">
                    <p>&copy; <?php echo date("Y"); ?> Udaan 2k18 Inc. </p>
                </div>
            </footer>
        </div>
    </div>    
    
</div>    
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
 function login(f,str)
	{
		var x=new XMLHttpRequest();
		x.onreadystatechange=function()
		{
			if(this.readyState==4 && this.status==200)
				{
					document.getElementById(f).innerHTML=this.responseText;
				}
		};
		if(f=="l_email")
			x.open("GET","check_login.php?f="+f+"&q="+str+"&e=0",true);
		else if(f=="l_pass")
		{
			e=document.l_form.l_email.value;
			x.open("GET","check_login.php?f="+f+"&q="+str+"&e="+e,true);
		}
		x.send();
	}  
	function login_status()
	{
		var email =	document.l_form.l_email.value;
		var pass =	document.l_form.l_pass.value;
		var l_email=document.getElementById('l_email').innerHTML;
		var l_pass=document.getElementById('l_pass').innerHTML;
		if(l_email=="Email Matched" && l_pass=="Password Matched")
			{
				var x=new XMLHttpRequest();
				x.onreadystatechange=function()
				{
					if(x.readyState==4 && x.status==200)
						{
							document.getElementById('l_status').innerHTML=x.responseText;
						}
				};
				x.open("POST","login.php",true);
				x.setRequestHeader("Content-type","application/x-www-form-urlencoded");
				x.send("email="+email+"&pass="+pass);
			}
		else{
			document.getElementById('l_status').innerHTML="<p style='color:red;'>please enter details properly</p>"
		}
	}
	function signup(f,str)
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
<script>
$(function (){
    $('.carousel').carousel({
        interval: 2000
    });
})  
</script>
</body>
</html>