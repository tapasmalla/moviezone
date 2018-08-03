<?php 
    require_once "../models/project.php";
 ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="../assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="../assets/css/freelancer.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Movie Zone</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Home</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
            </li>

            <?php 
              if(isset($_SESSION['us_name'])):
             ?>

            <li class="nav-item mx-0 mx-lg-1 dropdown">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger dropdown-toggle" href="#"  data-toggle="dropdown"> User Pannel </a>
             
              <ul class="dropdown-menu">
                <li>
                <?php 
                  if($_SESSION['us_type'] == 2):
                 ?>
                 </li>
                <li><a class="dropdown-item" href="addarea.php">Add Area</a></li>
                <li><a class="dropdown-item" href="addtheater.php">Add Theater</a></li>
                <li><a class="dropdown-item" href="addscreen.php">Add Screen</a></li>

                <?php 
                  endif;
                 ?>
                <li><a class="dropdown-item" href="changepassword.php">Change Password</a></li>
                <li> <a class="dropdown-item" href="logout.php">Sign Out</a></li>
              </ul>
            </li>
            <?php 
              endif;
             ?>

           <?php 
            if(!isset($_SESSION['us_name'])):
            ?>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="login.php">Sign In</a>
            </li>

            <?php 
              endif;
             ?>

          </ul>
        </div>
      </div>
    </nav>
