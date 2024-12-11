<?php
session_start();
session_destroy();
session_unset();
?>


<?php
include("Master/header.php");
?>

<div style="display:flex; flex-direction:column; align-items: center; justify-content:center; min-height:100vh;">
    <img src="images/logout-screen.png">
    <h1>You have been logged out</h1>
    <h4>Thank you</h4>
    <a href="index.php" style="font-size: 20px;">Go Back to Home</a>
</div>


<?php
include("Master/footer.php");
?>