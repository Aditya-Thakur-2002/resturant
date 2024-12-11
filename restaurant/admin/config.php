<?php
$con=mysqli_connect("localhost","root","","restaurant");
if(!$con)
{
	echo mysqli_error($con);
}
?>