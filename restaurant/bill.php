<?php
require("Master/header.php");
@$online=$_SESSION['userid'];
@$number=$_SESSION['userno'];
	if($online=="")
	{
		header("location:index.php");
		echo "<script>alert('Please First Login')</script>";
	}
?>
<br /><br />
<?php
require("config.php");

if(isset($_POST["submit"]))
{
	$result = mysqli_query($con,"insert into dishbook(custid,custno,total) values('".$online."','".$number."','".$_POST['dname']."')");
	if($result)
	{
		echo "<script>alert('Dishes Booked Successfully')</script>";
		$delcom = mysqli_query($con,"delete from temporary where custid='".$online."'");
		
		if($delcom)
		{
			header("location:menu.php");
		}
		else
		{
			echo mysqli_error($con);
		}
	}
	else
	{
		echo mysqli_error($con);
	}
}
?>
<div class="container">
	  <div class="col-md-10 col-md-offset-1">
 <br /><br /><br /><br />
        <h2>Shopping Cart</h2><br><br>
       <form method="post">
        <table class="table table-bordered">
		
            	<tr>
                	<td><b>Sr.No</b></td>
                    <td><b>Dish Name</b></td>
                    <td><b>Dish Price</b></td>
                </tr>
            
            <?php
				$idd=0;
				$com=mysqli_query($con,"select * from temporary where custid='".$_SESSION['userid']."'");
				if(mysqli_num_rows($com)>0)
				{
					while($row = mysqli_fetch_array($com))
					{
						$idd++;
						echo ("<tr><td>$idd</td>");
						echo ("<td>$row[item]</td>");
						echo ("<td style='text-align:center'>$row[price]</td>");
					}
				}
				$comm=mysqli_query($con,"select * from temporary where custid='".$_SESSION['userid']."' order by id desc");
				if(mysqli_num_rows($comm)>0)
				{
					$row = mysqli_fetch_array($comm);
						$idd++;
						echo ("<tr><td colspan='2' style='text-align:center'><h4><b>Order Subtotal</b></h4></td>");
						echo ("<td style='text-align:center'><h4><b>$row[subtotal]</b></h4></td>");
						echo ("<tr><td colspan='2' style='text-align:center'><h4><b>Shipping</b></h4></td>");
						echo ("<td style='text-align:center'><h4><b>$row[shipping]</b></h4></td>");
						echo ("<tr><td colspan='2' style='text-align:center'><h3><b>Order Total</b></h3></td>");
						echo ("<td style='text-align:center'><input type='hidden' name='dname' value='$row[total]' /><h3><b>$row[total]</b></h3></td>");
				}
			
			?>
        </table>
        <div align="right" class="row">
        	<h3 style="padding-right:90px"><a href="menu.php">&lt;&nbsp;Continue Shopping&nbsp;&emsp;</a>
        	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        <br><br>
    </div>
</div>
<?php
require("Master/footer.php");
?>