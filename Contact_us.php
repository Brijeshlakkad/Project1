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
<div class="container padded">
    <div class="row">
        <div class="col-sm-8">
            <h2>Get in touch</h2>
            <hr>
            <p>Suggestion for the <strong>Udaan 2k18</strong>, We need to hear from you:</p>
            <form class="form-horizontal tpad" action="getdata2.php" method="post">
                <div class="form-group">
                    <label for="email" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-group tpad">
                    <label for="message" class="col-lg-2 control-label">Message</label>
                    <div class="col-lg-10">
                        <textarea class="form-control" rows="6" name="mess" placeholder="Message..."></textarea>
                    </div>
                </div>
                <div class="form-group tpad">
                    <div class="col-lg-offset-2 col-lg-10">
                        <input type="submit" value="Send" class="btn btn-success">
						  
						 </div>
				</div>   
		</div>
    </div>
                    </div>
                </div>
            </form>
        </div>
      
	
</div>
</body>
</html>