<?php
require("config.php");
include("Master/header.php");
if(isset($_POST['submit']))
{
		$pass1=" '".$_POST['newpass']."' ";
		$pass2=" '".$_POST['conewpass']."' ";
		if($pass1!=$pass2)
		{
			echo "<script>alert('password not match')</script>";
		}
		else
		{
			$sql=mysqli_query($con,"select * from admin where id='".$_SESSION['id']."' and password='".$_POST['oldpass']."'");
			if(!$sql)
			{
				die(mysqli_error($con));
			}
			else
			{
				if($row=mysqli_fetch_array($sql))
				{
					$sql=mysqli_query($con,"update admin set password='".$_POST['newpass']."' where id='".$_SESSION['id']."'");
					if(!$sql)
					{
						die(mysqli_error($con));
					}
					else
					{
						echo "<script>alert('password change Successfully')</script>";
					}
				}
			}
		}
	
}

?>
 <div class="container">
 <div class="col-md-8 col-md-offset-2">
	<h1>Change Password</h1>
    <br /><br />
    <div class="panel panel-primary">
    	<div class="panel-heading">
        	<div class="panel-title">Change Password</div>
         </div>
         <div class="panel-body">
	<form class="form-horizontal" action="adminpass.php" method="post">
        <div class="form-group">
        	<label class="control-label col-md-3">Old Password*</label>
        	<div class="col-md-8">
        		<input type="password" class="form-control" name="oldpass" placeholder="Enter Old Password" required="required" />
            </div>
        </div>
        <div class="form-group">
			<label class="control-label col-md-3">New Password*</label>
            <div class="col-md-8">
				<input type="password" class="form-control" name="newpass" placeholder="Enter New Password" required="required" />
            </div>
        </div>
        <div class="form-group">
			<label class="control-label col-md-3">Co-Password*</label>
            <div class="col-md-8">
				<input type="password" class="form-control" name="conewpass" placeholder="Retype New Password" required="required" />
            </div>
        </div>
        <div class="form-group">
			<div class="col-md-offset-3 col-md-8">
				<button type="submit" class="btn btn-primary" name="submit">Change Password</button>
            </div>
        </div>
      </form>
      </div>
      </div>
</div>
</div>
<?php
include("Master/footer.php");
?>