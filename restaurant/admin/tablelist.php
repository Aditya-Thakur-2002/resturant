<?php
include("Master/header.php");
require("config.php");

@$idno=$_GET['idup'];
@$del=$_GET['idde'];
@$status="Accept";
@$pending="Pending";
if($del>0)
{
	$com = mysqli_query($con,"delete from tablebook where id='$del'");
}
?>
<br /><br />
<div class="col-md-10 col-md-offset-1">
	<table class="table table-responsive table-condensed table-bordered">
    	<thead>
        	<h1>Booking Table List</h1>
        </thead>
        <tbody>
        	<tr>
            	<td>Sr no</td>
                <td>Name</td>
                <td>No. of Guests</td>
                <td>Contact No.</td>
                <td>Date</td>
                <td>Time From :</td>
                <td>Time To :</td>
                <td>Delete</td>
            </tr>
            <tr>
            	<?php
				@$idi=0;
					$com = mysqli_query($con,"select * from tablebook");
					if(mysqli_num_rows($com)>0)
					{
						while($row = mysqli_fetch_array($com))
						{
							$idi++;
						echo ("<tr><td>$idi</td>");
						echo ("<td>$row[name]</td>");
						echo ("<td>$row[guests]</td>");
						echo ("<td>$row[number]</td>");
						echo ("<td>$row[date]</td>");
						echo ("<td>$row[timefrom]</td>");
						echo ("<td>$row[timeto]</td>");
						echo ("<td><a href='tablelist.php?idde=$row[id]'>Delete</a></td></tr>");
						}
					}
				?>
            </tr>
        </tbody>
    </table>
</div>
<?php
require('Master/footer.php');
?>