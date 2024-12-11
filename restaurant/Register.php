<?php
require("Master/header.php");
if(isset($_POST['submit']))
{
	require("config.php");
$pass=$_POST['pass'];
	$repass=$_POST['repass'];
	if($pass==$repass)
	{
 		 $sql=mysqli_query($con,"INSERT INTO register(name,email,number,password) VALUES('".$_POST['name']."','".$_POST['email']."','".$_POST['number']."','".$_POST['pass']."')");
		if($sql)
		{
			echo "<script>alert('Successfully Registered')</script>";
		}
		else
		{
			echo mysqli_error($con);
		}
	}
	else
	{
		echo "<script>alert('Please Re-type Password')</script>";
	}
}
?>
<br /><br />
<div class="container">
<div class="col-md-10 col-md-offset-1">
<br />
<h2>Registration Form</h2>
<br /><br />
<div class="panel panel-primary">
	<div class="panel-heading">
    	<div class="panel-title">User Register</div>
    </div>
    <div class="panel-body">
    	<div class="row">
        	<form class="form-horizontal" method="post" action="Register.php">
            	<div class="form-group">
                	<label class="control-label col-md-3" for="email">Name</label>
                    <div class="col-md-8">
                    	<input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required="required" autofocus="autofocus" />
                    </div>
                </div>
            	<div class="form-group">
                	<label class="control-label col-md-3" for="email">Email ID</label>
                    <div class="col-md-8">
                    	<input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email_ID" required="required" />
                    </div>
                </div>
                <div class="form-group">
                	<label class="control-label col-md-3" for="email">Number</label>
                    <div class="col-md-8">
                    	<input type="number" class="form-control" id="number" name="number" placeholder="Enter Your Number" required="required" autofocus="autofocus" />
                    </div>
                </div>
                <div class="form-group">
                	<label class="control-label col-md-3" for="pass">Passwrod</label>
                    <div class="col-md-8">
                    	<input type="password" class="form-control" id="pass" name="pass" placeholder="Enter Your Password" required="required"/>
                    </div>
                </div>
                <div class="form-group">
                	<label class="control-label col-md-3" for="pass">Co-Passwrod</label>
                    <div class="col-md-8">
                    	<input type="password" class="form-control" id="repass" name="repass" placeholder="Enter Your Conform Password" required="required"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-3">
                    	<button type="submit" name="submit" id="submit" class="btn btn-primary">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<br /><br />
<?php
require("Master/footer.php");
?>