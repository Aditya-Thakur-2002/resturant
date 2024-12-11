<?php
require("Master/header.php");
require("config.php");

if (isset($_POST['submit'])) {
    $comm = mysqli_query($con, "insert into tablebook(custid,name,guests,number,date, timefrom, timeto,request) values('" . $online . "','" . $_POST['name'] . "','" . $_POST['no'] . "','" . $_POST['number'] . "','" . $_POST['date'] . "','" . $_POST['from'] . "','" . $_POST['to'] . "','" . $_POST['request'] . "')");
    if ($comm) {
        echo "<script>alert('Table Booked Successfully')</script>";
    } else {
        echo mysqli_error($con);
    }
}

@$online = $_SESSION['userid'];
if ($online == "") {
?>
    <br /><br />
    <div class="container" style="min-height: 70vh;">
        <div class="col-md-10 col-md-offset-1">
            <br />
            <br /><br />
            <h2>Please login to book a table</h2>
            <br>
            <h4>
                <a href="login.php">Click here</a> to login
            </h4>
        </div>
    </div>
    <br /><br />
<?php
} else {

    $query = mysqli_query($con, "select * from register where id = '" . $online . "'");
    $row = mysqli_fetch_array($query);
?>

    <br /><br />
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <br />
            <h2>Complete your Table Booking at TreeHut</h2>
            <br /><br />
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-title">Table Booking</div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <form class="form-horizontal" method="post" action="booktable.php">
                            <div class="form-group">
                                <label class="control-label col-md-3" for="name">Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>" placeholder="Enter Your Name" required="required" autofocus="autofocus" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="number">Number</label>
                                <div class="col-md-8">
                                    <input type="tel" class="form-control" id="number" name="number" pattern="[0-9]{10}" maxlength="10" value="<?php echo $row['number']; ?>" placeholder="Enter Your Number" required="required" autofocus="autofocus" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="no">Amount of Guests</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" id="no" name="no" placeholder="Total Number of Persons" required="required" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="pass">Date</label>
                                <div class="col-md-8">
                                    <input type="date" class="form-control" id="date" name="date" placeholder="DD/MM/YYYY" required="required" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="pass">Time Duration</label>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="time" class="form-control" id="from" name="from" placeholder="Enter Starting Time (Eg : 10 am)" required="required" />
                                        </div>
                                        <div class="col-md-6">
                                            <input type="time" class="form-control" id="to" name="to" placeholder="Enter Ending Time (Eg : 1 pm)" required="required" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" for="request">Special Request</label>
                                <div class="col-md-8">
                                    <textarea cols="5" type="text" class="form-control" id="request" name="request" placeholder="Please note that not all requests can be accommodated." required="required"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-3">
                                    <button type="submit" name="submit" id="submit" class="btn btn-primary">Book</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br /><br />


<?php
}
?>
<?php
require("Master/footer.php");
?>