<?php
include("Master/header.php");
require("config.php");

@$idno=$_GET['idup'];
@$del=$_GET['idde'];
@$status="Accept";
@$pending="Pending";
if($del>0)
{
	$com = mysqli_query($con,"delete from contact where id='$del'");
}
?>
<br /><br />
<div class="col-md-10 col-md-offset-1">
	<table class="table table-responsive table-condensed table-bordered">
    	<thead>
        	<h1>Testimonials List</h1>
        </thead>
        <tbody>
        	<tr>
            	<td>Sr no</td>
                <td>Name</td>
                <td>Email</td>
                <td>Message</td>
                <td>Delete</td>
            </tr>
            <tr>
            	<?php
				@$idi=0;
					$com = mysqli_query($con,"select * from contact");
					if(mysqli_num_rows($com)>0)
					{
						while($row = mysqli_fetch_array($com))
						{
							$idi++;
						echo ("<tr><td>$idi</td>");
						echo ("<td>$row[name]</td>");
						echo ("<td>$row[email]</td>");
						echo ("<td>$row[message]</td>");
						echo ("<td><a href='testimonials.php?idde=$row[id]'>Delete</a></td></tr>");
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