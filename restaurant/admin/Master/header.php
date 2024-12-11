<?php
session_start();
@$sess=$_SESSION['id'];
if($sess=="")
{
	header("location:../index.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-hover-dropdown.min.js"></script>
<script type="text/javascript" src="js/back-to-top.js"></script>
</head>

<body>
<div class="row">
<nav class="navbar-inverse">
	<div class="container">
    	<div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">River View Retaurant</a></div>
        <ul class="nav navbar-nav" id="myNavbar">
        	<li class="active"><a href="home.php">Home</a></li>
            <li class="dropdown">
            	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin<span class="caret"></span></a>
                <ul class="dropdown-menu">
                	<li><a href="addmenu.php">Add Menu Types</a></li>
                    <li><a href="menuDetail.php">Add Menu Details</a></li>
                    <li><a href="tablelist.php">Table List</a></li>
                    <li><a href="dishlist.php">Dish Book List</a></li>
                    <li><a href="testimonials.php">Testimonials</a></li>
                </ul>
            </li>
           <li><a href="adminpass.php">Change Password</a></li>
     
        </ul>
        <ul class="nav navbar-nav navbar-right">
        	<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
        </ul>
    </div>
</nav>
<div class="container">

