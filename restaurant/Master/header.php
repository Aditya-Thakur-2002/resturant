<?php
session_start();
@$id = $_SESSION['userid'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>River View Restaurant</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link href="css/animate.css" rel="stylesheet" media="screen">
  <link href="flexslider/flexslider.css" rel="stylesheet" />
  <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
  <!-- Font Awesome -->
  <link href="font/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
  <header class="header">
    <div class="container">
      <nav class="navbar navbar-inverse" role="navigation">
        <div class="navbar-header">
          <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a href="index.php" class="navbar-brand scroll-top logo  animated bounceInLeft"><b><i>River View Restaurant</i></b></a>
        </div>
        <!--/.navbar-header-->
        <div id="main-nav" class="collapse navbar-collapse">
          <ul class="nav navbar-nav" id="mainNav">
            <li><a href="index.php" class="scroll-link">Home</a></li>
            <li><a href="menu.php" class="scroll-link">Menu</a></li>
            <li><a href="booktable.php" class="scroll-link">Book Table</a></li>
            <li><a href="Gallery.php" class="scroll-link">Gallery</a></li>
            <li><a href="contact.php" class="scroll-link">Contact Us</a></li>
            <?php
            if ($id == "") { ?>
              <li><a href="Login.php" class="scroll-link">Login</a></li>
              <li><a href="Register.php" class="scroll-link">Register</a></li>
            <?php
            } else {
            ?>
              <li><a href="updatepass.php" class="scroll-link">Update Password</a></li>
              <li><a href="#" onclick="logout();" class="scroll-link">Logout</a></li>
            <?php
            } ?>
          </ul>
        </div>
        <!--/.navbar-collapse-->
      </nav>
      <!--/.navbar-->
    </div>
    <!--/.container-->
  </header>

  <script>
    function logout() {
      if (confirm("Are you sure you want to logout?")) {
        window.location.href = "logout.php";
      }
    }
  </script>

  <!--/.header-->
  <br /><br /><br />