<?php
require("config.php");
?>
<?php
require("Master/header.php");
?>
<div class="container">
	<div class="col-md-10 col-md-offset-1">
	<table class="table table-responsive table-condensed table-bordered">
    	<thead>
        	<h1>Subscribe List</h1>
        </thead>
        <tbody>
        	<tr>
            	<td>Sr no</td>
                <td>Email</td>
            </tr>
            <tr>
            	<?php
				@$idi=0;
					$com = mysqli_query($con,"select * from subscribe");
					if(mysqli_num_rows($com)>0)
					{
						while($row = mysqli_fetch_array($com))
						{
							$idi++;
							echo ("<tr><td>$idi</td>");
							echo ("<td>$row[email]</td>");
						}
					}
				?>
            </tr>
        </tbody>
    </table>
</div>
</div>
<?php
require("Master/footer.php");
?>