<?php
require("config.php");
if(isset($_POST["submit"]))
{
	$query=mysqli_query($con,"select * from admin where username='".$_POST['email']."' and password='".$_POST['pass']."'");
	if(mysqli_num_rows($query)>0)
	{
		$row=mysqli_fetch_array($query);
		session_start();
		$_SESSION['id']=$row['id'];
		header("location: home.php");
	}
	else
	{
		echo mysqli_error($con);
		echo "<script>alert('You enter wrong email/password')</script>";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="css/web.css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/back-to-top.js"></script>
<script type="text/javascript" src="js/bootstrap-hover-dropdown.min.js"></script>
</head>

<body>
<div class="container">
<div class="col-md-8 col-md-offset-2" style="margin-top:20px;">
<h2>Admin Login</h2><br /><br />
<div class="panel panel-primary">
	<div class="panel-heading">
    	<div class="panel-title">Admin Login</div>
    </div>
    <div class="panel-body">
    	<div class="row">
        	<form class="form-horizontal" method="post" action="adminlogin.php">
            	<div class="form-group">
                	<label class="control-label col-md-3" for="email">Email ID</label>
                    <div class="col-md-8">
                    	<input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email_ID" required="required" autofocus="autofocus" />
                    </div>
                </div>
                <div class="form-group">
                	<label class="control-label col-md-3" for="pass">Passwrod</label>
                    <div class="col-md-8">
                    	<input type="password" class="form-control" id="pass" name="pass" placeholder="Enter Your Password" required="required"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-3">
                    	<button type="submit" name="submit" id="submit" class="btn btn-primary">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>