<?php
session_start();
include("functions/db.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      <?php echo $title ?>
    </title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>

  <div id="top"><!-- Top Begin -->

       <div class="container"><!-- container Begin -->

           <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->

               <a href="index.php" class="btn btn-success btn-sm">
                 <?php
                    if (!isset($_SESSION['user_email'])) {
                      echo "Welcome : Guest";
                    }else {
                      echo "Welcome : ". $_SESSION['user_email'] ."";
                    }
                  ?>
               </a>


               <a href="now_playing.php">Check Out Now Playing Movies!</a>

           </div><!-- col-md-6 offer Finish -->

           <div class="col-md-6"><!-- col-md-6 Begin -->

           </div><!-- col-md-6 Finish -->

           <div class="col-md-6"><!-- col-md-6 Begin -->

               <ul class="menu"><!-- cmenu Begin -->

                   <li>
                       <a href="user_register.php">Register</a>
                   </li>
                   <li>
                       <a href="my_account.php">My Account</a>
                   </li>
                   <li>
                       <a href="checkout.php">
                         <?php
                            if (!isset($_SESSION['user_email'])) {
                              echo "<a href = 'login.php'>Login</a>";
                            }else {
                              echo "<a href = 'logout.php'>Logout</a>";
                            }
                          ?>
                       </a>
                   </li>

               </ul><!-- menu Finish -->

           </div><!-- col-md-6 Finish -->

       </div><!-- container Finish -->

   </div><!-- Top Finish -->

   <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->

       <div class="container"><!-- container Begin -->

           <div class="navbar-header"><!-- navbar-header Begin -->

               <a href="index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->

                   <img src="images/logox.png" alt="Logo" class="hidden-xs">
                   <img src="images/logos-mobile.png" alt="Logo Mobile" class="visible-xs">

               </a><!-- navbar-brand home Finish -->

           </div><!-- navbar-header Finish -->

           <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->

               <div class="padding-nav"><!-- padding-nav Begin -->

                   <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->

                       <li>
                           <a href="index.php">Home</a>
                       </li>
                       <li>
                           <a href="popular.php">Popular</a>
                       </li>
                       <li>
                           <a href="now_playing.php">Now Playing</a>
                       </li>
                       <li>
                           <a href="top_rated.php">Top Rated</a>
                       </li>
                       <li>
                           <a href="watchlist.php">My Watch List</a>
                       </li>
                       <li>
                           <a href="contact.php">Contact Us</a>
                       </li>

                   </ul><!-- nav navbar-nav left Finish -->

               </div><!-- padding-nav Finish -->

               <a href="watchlist.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Begin -->

                   <i class="fa fa-film"></i>

                   <?php
                   include_once "functions/db.php";
                   $get_row = "SELECT COUNT(*) FROM watchlist";
                   $query = mysqli_query($con,$get_row);
                   $result = mysqli_fetch_array($query);
                   echo $result[0];
                   ?>
                   <span>Movie(s) In Your Watchlist</span>

               </a><!-- btn navbar-btn btn-primary Finish -->

               <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Begin -->

                   <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin -->

                       <span class="sr-only">Toggle Search</span>

                       <i class="fa fa-search"></i>

                   </button><!-- btn btn-primary navbar-btn Finish -->

               </div><!-- navbar-collapse collapse right Finish -->

               <div class="collapse clearfix" id="search"><!-- collapse clearfix Begin -->

                   <form method="get" action="search.php" class="navbar-form"><!-- navbar-form Begin -->

                       <div class="input-group"><!-- input-group Begin -->

                           <input type="text" class="form-control" placeholder="Search" name="search" required>
                           <select name="channel" required>
                             <option value="movie" selected="selected">Movie
                             </option>
                             <option value="tv">TV Series
                             </option>
                           </select>

                           <span class="input-group-btn"><!-- input-group-btn Begin -->

                           <button type="submit" value="movie" class="btn btn-primary"><!-- btn btn-primary Begin -->

                               <i class="fa fa-search"></i>

                           </button><!-- btn btn-primary Finish -->

                           </span><!-- input-group-btn Finish -->

                       </div><!-- input-group Finish -->

                   </form><!-- navbar-form Finish -->

               </div><!-- collapse clearfix Finish -->

           </div><!-- navbar-collapse collapse Finish -->

       </div><!-- container Finish -->

   </div><!-- navbar navbar-default Finish -->
