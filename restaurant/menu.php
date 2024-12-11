<?php
require("Master/header.php");
require("config.php");
if (isset($_POST['cart'])) {
	@$online = $_SESSION['userid'];
	if ($online == "") {
		echo "<script>alert('Please First Login')</script>";
	} else {
		@$_SESSION['tt']++;
		// echo "<script>alert('".$_POST['dprice']."')</script>";
		$total = mysqli_query($con, "SELECT * from temporary where custid = '" . $online . "' order by id desc");
		if (mysqli_num_rows($total) > 0) {
			$row = mysqli_fetch_array($total);
			$subt = $row['subtotal'];
			$ship = $row['shipping'];
			$tot = 	$row['total'];
			$fsubt = $subt + $_POST['dprice'];
			$fship = $fsubt / 10;
			$ftot = $fsubt + $fship;
		} else {
			$subt = $_POST['dprice'];
			//$ship = $row['shipping'];
			//$tot = 	$row['total'];
			$fsubt = $_POST['dprice'];
			$fship = $fsubt / 10;
			$ftot = $fsubt + $fship;
		}

		$comm = mysqli_query($con, "insert into temporary(custid, itemid, item, price, subtotal, shipping, total) values('" . $online . "','" . $_POST['dishid'] . "','" . $_POST['dname'] . "','" . $_POST['dprice'] . "','" . $fsubt . "','" . $fship . "','" . $ftot . "')");
		if ($comm) {
			echo "<script>alert('Added to cart successfully')</script>";
		} else {
			echo mysqli_error($con);
		}
	}
	//$id;
	//	session_start();
	//	$_SESSION['cart']=array();
	//	$_SESSION['cart']['id1']="23";
	//	$_SESSION['cart']['id2']="456";
	//	print_r($_SESSION['cart']);


}
?>
<div class="container">
	<br>
	<h2>Select Dishes</h2>

	<br /><br />
	<div class="col-md-10 col-md-offset-1">
		<form method="post">
			<div class="form-group">

				<label class="control-label col-md-3">Select Menu Type</label>
				<div class="col-md-9">
					<select id="menu" name="menu" class="form-control" onchange="this.form.submit();">
						<option>Select</option>
						<?php

						$comm = mysqli_query($con, "select * from menu");
						while ($row = mysqli_fetch_array($comm)) {
							echo "<option value='$row[1]'>$row[1]</option>";
						}
						?>
					</select>
				</div>

			</div>
		</form>
		<br /><br />
		<form method="post">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-6">
						<h2 style="font-family:'Times New Roman', Times, serif; font-size:60px;"><?php echo @$_POST['menu'] ?></h2>
					</div>
					<div class="col-md-6">
						<h1 style="text-align:right"><a href="bill.php"><i class="fa fa-shopping-cart">&nbsp;</i><?php echo @$_SESSION['tt']; ?></a></h1>
					</div>
				</div>
			</div>
			<br /><br />
			<table width="100%" cellpadding="0" cellspacing="0">
				<?php
				@$m = $_POST['menu'];
				if ($m == "") {
					if (isset($_GET["menu"])) {
						$m = $_GET["menu"];
					} else {
						$m = "Chinese";
					}
				}
				$query = mysqli_query($con, "select * from dishes where type='" . $m . "'");
				if (mysqli_num_rows($query) > 0) {
					echo "<tr><td colspan='4'><hr size='5' style='border-top: 4px solid;border-color:#aa6c09;'/></td></tr>";
					echo "<tr><td><b>Item Details</b></td><td><b>Item Name</b></td><td><b>Unit Price</b></td><td><b>Add to Cart</b>&nbsp;<i class='fa fa-shopping-cart'></i></td></tr>";
					while ($row = mysqli_fetch_array($query)) {
						echo "<tr><td colspan='4'><hr size='5' style='border-top: 4px solid;border-color:#aa6c09;'/></td></tr>";
						echo "<tr>";
						echo ("<td><img src='Admin/Dishes/$row[photo]' style='width: 400px;' ></img><input type='hidden' name='dishid' value='$row[0]' /></td>");
						echo "<td><input type='hidden' name='dname' value='$row[dishname]' />$row[dishname]</p></td><td><input type='hidden' name='dprice' value='$row[price]' />$row[price]</td><td><button style='background-color:#F39D17; padding:5px' type='submit' name='cart'>Add to Cart&nbsp;<i class='fa fa-shopping-cart'></i></button></td>";
						echo "</tr>";
					}
				} else {
					echo mysqli_error($con);
				}
				?>
			</table>
		</form>
	</div>
</div>
<br /><br />
<?php
require("Master/footer.php");
?>