<?php
require("Master/header.php");
if(isset($_POST['submit']))
{
	require("config.php");
 $sql = mysqli_query($con,"SELECT * from register where email = '".$_POST['email']."' and password = '".$_POST['pass']."'");
		if(mysqli_num_rows($sql)>0)
		{
			$row = mysqli_fetch_array($sql);
				session_start();
				$_SESSION['userid']=$row['id'];
				$_SESSION['userno']=$row['number'];
			header("location:index.php");
		}
		else
		{
			echo "<script>alert('Either email or password is incorrect. Please try again.')</script>";
		}
}
?>
<br /><br />
<div class="container">
<div class="col-md-10 col-md-offset-1">
<br /><br />
<h2>Login Form</h2>
<br /><br />
<div class="panel panel-primary">
	<div class="panel-heading">
    	<div class="panel-title">User Login</div>
    </div>
    <div class="panel-body">
    	<div class="row">
        	<form class="form-horizontal" method="post" action="Login.php">
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
<br /><br /><br />
<?php
require("Master/footer.php");
?>