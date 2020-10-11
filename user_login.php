 <div class="box"><!-- box Begin -->

   <div class="box-header"><!-- box-header Begin -->

       <center><!-- center Begin -->

           <h1> Login </h1>

           <p class="lead"> Already have an account..? </p>

       </center><!-- center Finish -->

   </div><!-- box-header Finish -->

   <form method="post" action="index.php"><!-- form Begin -->

       <div class="form-group"><!-- form-group Begin -->

           <label> Email </label>

           <input name="c_email" type="text" class="form-control" required>

       </div><!-- form-group Finish -->

        <div class="form-group"><!-- form-group Begin -->

           <label> Password </label>

           <input name="c_pass" type="password" class="form-control" required>

       </div><!-- form-group Finish -->

       <div class="text-center"><!-- text-center Begin -->

           <button name="login" value="Login" class="btn btn-primary">

               <i class="fa fa-sign-in"></i> Login

           </button>

       </div><!-- text-center Finish -->

   </form><!-- form Finish -->

   <center><!-- center Begin -->

      <a href="user_register.php">

          <h3> Dont have account..? Register here </h3>

      </a>

   </center><!-- center Finish -->

 </div><!-- box Finish -->


 <?php

 if(isset($_POST['login'])){

     $user_email = $_POST['u_email'];

     $user_pass = $_POST['u_pass'];

     $select_user = "select * from customers where customer_email='$user_email' AND customer_pass='$user_pass'";

     $run_user = mysqli_query($con,$select_user);

     $get_ip = getRealIpUser();

     $check_user = mysqli_num_rows($run_user);

     $select_watchlist = "select * from cart where ip_add='$get_ip'";

     $run_list = mysqli_query($con,$select_watchlist);

     $check_list = mysqli_num_rows($run_list);

     if($check_user==0){

         echo "<script>alert('Your email or password is wrong')</script>";

         exit();

     }

     if($check_user==1 AND $check_list==0){

         $_SESSION['user_email']=$user_email;

        echo "<script>alert('You are Logged in')</script>";

        echo "<script>window.open('my_account.php','_self')</script>";

     }else{

         $_SESSION['user_email']=$user_email;

        echo "<script>alert('You are Logged in')</script>";

        echo "<script>window.open('user_login.php','_self')</script>";

     }

 }

 ?>
