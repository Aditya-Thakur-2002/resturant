<?php
include("Master/header.php");
require("config.php");
@$ans=$_GET['result'];
@$u=$_GET['update'];
@$d=$_GET['delete'];
if($ans=="true")
{
	echo "<script>alert('Success')</script>";
}
if($u=="true")
{
	echo "<script>alert('Successfully Updated')</script>";
}
if($d=="true")
{
	echo "<script>alert('Successfully Deleted')</script>";
}
@$idno=$_GET['idup'];
@session_start();
$_SESSION['var']=$idno;
if($idno>0)
{
	$comm = mysqli_query($con,"select * from menu where id='$idno' ");
	if(mysqli_num_rows($comm)>0)
	{		
		while ($row = mysqli_fetch_array($comm))
		{
			$idd = "$row[id]";
			$type = "$row[type]";
		}
	}	
}
?>
<div id="sample">
<div class="row">
	<div class="container"><br><br>
    <h2>Add Menu Type</h2>
    	<div class="col-md-10 col-md-offset-1"><br><br>
        	
        	<div class="panel panel-primary">
            	<div class="panel-heading">
                	<div class="panel-title">Add Menu Type</div>
                </div>
                <div class="panel-body">
                	<form class="form-horizontal" method="post" action="detailWork.php" enctype="multipart/form-data">
            	<div class="form-group">
                	<label class="control-label col-md-3" for="title">Select Menu Type</label>
                    <div class="col-md-8">
                    	<select name="type" id="type" class="form-control">
                        	<?php
								$comm=("select * from menu order by id asc");
								$result=mysqli_query($con,$comm);
								while($row=mysqli_fetch_array($result))
								{
									{
										echo "<option value='$row[1]' selected>$row[1]</option>";
									}
								}
							?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                	<label class="control-label col-md-3" for="title">Dish Name</label>
                    <div class="col-md-8">
                    	<input type="text" class="form-control" id="name" name="name" placeholder="Enter Menu Type" required="required"/>
                    </div>
                </div>
                
                <div class="form-group">
                	<label class="control-label col-md-3" for="title">Dish Photo</label>
                    <div class="col-md-8">
                    	<input type="file" class="form-control" id="image" name="image" placeholder="Enter Menu Type" required="required"/>
                    </div>
                </div>
                <div class="form-group">
                	<label class="control-label col-md-3" for="title">Dish Description</label>
                    <div class="col-md-8">
                    	<input type="text" class="form-control" id="description" name="description" placeholder="Enter Menu Type" required="required"/>
                    </div>
                </div>
                <div class="form-group">
                	<label class="control-label col-md-3" for="title">Dish Price</label>
                    <div class="col-md-8">
                    	<input type="text" class="form-control" id="price" name="price" placeholder="Enter Menu Type" required="required"/>
                    </div>
                </div>
               
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-3">
                    	<button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
                         <?php
					if($idno>0)
					{
                		echo '<button type="submit" class="btn btn-info" name="update">Update</button>';
					}
				?>
                    </div>
                </div>
            </form>
                </div>
            </div>
        </div>
        <div class="col-md-10 col-md-offset-1">
 <br /><br /><br /><br />
        <h2>Menu Information</h2><br><br>
       
        <table class="table table-bordered">
		
            	<tr>
                	<td>Sr.No</td>
                    <td>Menu Type</td>
                    <td>Dish Name</td>
                    <td>Dish Photo</td>
                    <td>Dish Description</td>
                    <td>Dish Price</td>
                    <td>Delete</td>
                </tr>
            
            <?php
				$idd=0;
				$com=mysqli_query($con,"select * from dishes");
				if(mysqli_num_rows($com)>0)
				{
					while($row = mysqli_fetch_array($com))
					{
						$idd++;
						echo ("<tr><td>$idd</td>");
						echo ("<td>$row[type]</td>");
						echo ("<td>$row[dishname]</td>");
						echo ("<td><img src='Dishes/$row[photo]' style='width:200px;'></img></td>");
						echo ("<td>$row[description]</td>");
						echo ("<td>$row[price]</td>");
						echo ("<td><a href='detailwork.php?idde=$row[id]&dd=$row[photo]'>Delete</a></td></tr>");
					}
				}
			
			?>
        </table>
    </div>
</div>
</div>
<?php
require('Master/footer.php');
?>