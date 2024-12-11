<?php
require("Master/header.php");
require("config.php");
if (isset($_POST["submit"])) {
	require("config.php");
	$comm = mysqli_query($con, "insert into contact(name,email,message) values('" . $_POST['name'] . "','" . $_POST['email'] . "','" . $_POST['message'] . "')");
	if ($comm) {
		echo "<script>alert('Successfully Submit')</script>";
	} else {
		echo mysqli_error($con);
	}
}

@$online = $_SESSION['userid'];

if ($online != "") {
	$query = mysqli_query($con, "select * from register where id = '" . $online . "'");
	$row = mysqli_fetch_array($query);
}

?>
<div class="parlex-back">
	<div class="container">
		<div class="row">
			<div class="heading text-center">
				<!-- Heading -->
				<h2>Contact Us</h2>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-7">
				<!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->

				<form action="contact.php" method="post">
					<div class="control-group">
						<div class="controls">
							<input type="text" class="form-control" placeholder="Full Name" id="name" name="name" value="<?php if ($online != "") {
																																echo $row["name"];
																															} ?>" required="required" />
							<p class="help-block"></p>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<input type="email" class="form-control" name="email" placeholder="Email" id="email" value="<?php if ($online != "") {
																															echo $row["email"];
																														} ?>" required="required" />
						</div>
					</div>
					<br />
					<div class="control-group">
						<div class="controls">
							<textarea rows="10" cols="100" class="form-control" name="message" placeholder="Message" id="message" required data-validation-required-message="Please enter your message" minlength="5" data-validation-minlength-message="Min 5 characters" maxlength="999" style="resize:none"></textarea>
						</div>
					</div>
					<br />
					<div id="success"> </div> <!-- For success/fail messages -->
					<button type="submit" name="submit" class="btn btn-primary pull-right">Send</button><br />
				</form>


			</div>

			<aside class="col-md-5">

				<h3>Contact Information</h3>


				<!-- <p>At lorem Ipsum available, but the majority have suffered alteration in some.</p> -->

				<p>
					Jyoti Chowk<br>
					Jalandhar 144001<br>
					India

				</p>

				<p>
					Phone: 0 123 456 789 0 <br />
					Email: info@riverview.com
				</p><br />

				<h3>Template Info</h3>

				<!--  <p>Rockline is a free website template by <a href="http://www.webthemez.com/">webthemez.com</a>.  
		      released and licensed under the <a href="http://creativecommons.org/licenses/by/3.0/" rel="license">
		      Creative Commons Attribution 3.0 License</a> 
		      <a href="http://www.webthemez.com/">my website</a>. -->
				</p>

			</aside>


		</div>
	</div>
	<!--/.container-->
</div>
<?php
require("Master/footer.php");
?>