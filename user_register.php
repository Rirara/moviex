<?php
  $title="User Register";
  include("includes/header.php");
  include("functions/db.php");
 ?>

   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->

               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Register
                   </li>
               </ul><!-- breadcrumb Finish -->

           </div><!-- col-md-12 Finish -->

           <div class="col-md-3"><!-- col-md-3 Begin -->

   <?php

    include("includes/sidebar.php");

    ?>

    <?php
    function getRealIpUser(){

        switch(true){

                case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
                case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
                case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];

                default : return $_SERVER['REMOTE_ADDR'];
        }
    }
     ?>

           </div><!-- col-md-3 Finish -->

           <div class="col-md-9"><!-- col-md-9 Begin -->

               <div class="box"><!-- box Begin -->

                   <div class="box-header"><!-- box-header Begin -->

                       <center><!-- center Begin -->

                           <h2> Register a new account </h2>

                       </center><!-- center Finish -->

                       <form action="user_register.php" method="post" enctype="multipart/form-data"><!-- form Begin -->

                           <div class="form-group"><!-- form-group Begin -->

                               <label>Name</label>

                               <input type="text" class="form-control" name="u_name" required>

                           </div><!-- form-group Finish -->

                           <div class="form-group"><!-- form-group Begin -->

                               <label>Email</label>

                               <input type="text" class="form-control" name="u_email" required>

                           </div><!-- form-group Finish -->

                           <div class="form-group"><!-- form-group Begin -->

                               <label>Password</label>

                               <input type="password" class="form-control" name="u_pass" required>

                           </div><!-- form-group Finish -->

                           <div class="form-group"><!-- form-group Begin -->

                               <label>Country</label>

                               <input type="text" class="form-control" name="u_country" required>

                           </div><!-- form-group Finish -->

                           <div class="form-group"><!-- form-group Begin -->

                               <label>City</label>

                               <input type="text" class="form-control" name="u_city" required>

                           </div><!-- form-group Finish -->

                           <div class="form-group"><!-- form-group Begin -->

                               <label>Phone Number</label>

                               <input type="text" class="form-control" name="u_number" required>

                           </div><!-- form-group Finish -->

                           <div class="form-group"><!-- form-group Begin -->

                               <label>Address</label>

                               <input type="text" class="form-control" name="u_address" required>

                           </div><!-- form-group Finish -->

                           <div class="form-group"><!-- form-group Begin -->

                               <label>Profile Picture</label>

                               <input type="file" class="form-control form-height-custom" name="u_image" required>

                           </div><!-- form-group Finish -->

                           <div class="text-center"><!-- text-center Begin -->

                               <button type="submit" name="register" class="btn btn-primary">

                               <i class="fa fa-user-md"></i> Register

                               </button>

                           </div><!-- text-center Finish -->

                       </form><!-- form Finish -->

                   </div><!-- box-header Finish -->

               </div><!-- box Finish -->

           </div><!-- col-md-9 Finish -->

       </div><!-- container Finish -->
   </div><!-- #content Finish -->

   <?php

    include("includes/footer.php");

    ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>


</body>
</html>

<?php
$date = date("Y-m-d");
if (isset($_POST['register'])) {

   $u_name = $_POST['u_name'];
   $u_email = $_POST['u_email'];
   $u_pass = $_POST['u_pass'];
   $u_country = $_POST['u_country'];
   $u_city = $_POST['u_city'];
   $u_number = $_POST['u_number'];
   $u_address = $_POST['u_address'];
   $u_image = $_FILES['u_image']['name'];
   $u_image_tmp = $_FILES['u_image']['tmp_name'];
   $u_ip = getRealIpUser();
   move_uploaded_file($c_image_temp,"images/user_images/$u_image");

   $insert_user = "INSERT INTO users (user_name,user_email,user_pass,user_country,user_city,user_number,user_address,user_image,user_ip,created_date,created_by,updated_date,updated_by) VALUES('$u_name','$u_email','$u_pass','$u_country','$u_city','$u_number','$u_address','$u_image','$u_ip','$date','$_email','$date','$_email')";

   $run_user = mysqli_query($con,$insert_user);

   $sel_watchlist = "SELECT * FROM watchlist where ip_add='$u_ip'";
   $run_watchlist = mysqli_query($con,$sel_watchlist);
   $check_watchlist = mysqli_num_rows($run_watchlist);

   if ($check_watchlist>0) {
     $_SESSION['user_email']=$u_email;

     echo "<script>alert('You have been Registered Successfully')</script>";
     echo "<script>window.open('watchlist.php','_self')</script>";
   }else {
     $_SESSION['user_email']=$u_email;

     echo "<script>alert('You have been Registered Successfully')</script>";
     echo "<script>window.open('my_account.php','_self')</script>";
   }
}?>
