<?php
require("config.php");
session_start();
$iddno=$_SESSION['var'];
@$del=$_GET['idde'];
if(isset($_POST['submit']))
{
	$comm=mysqli_query($con,"insert into menu(type) values('".$_POST['type']."')");
				if(!$comm)
			{
				echo mysqli_error($con);
			}
			else
			{
				header("location: addmenu.php?result=true");
			}
}
else if(isset($_POST['update']))
{
	$comm=mysqli_query($con,"update menu set type='".$_POST['type']."' where id='$iddno' ");
	if(!$comm)
			{
				echo (mysqli_error($con));
			}
			else
			{
				unset($_SESSION['var']);	
				header("location: addmenu.php?update=true");
			}
}
else
{
	if($del>0)
	{
		$comm = mysqli_query($con,"delete from menu where id='$del' ");
		if(!$comm)
		{
			echo (mysqli_error($con));
		}
		else
		{
			header("location: addmenu.php?delete=true");
		}
	}
}
?>