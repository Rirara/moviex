<div class="panel panel-default sidebar-menu"><!--  panel panel-default sidebar-menu Begin  -->

    <div class="panel-heading"><!--  panel-heading  Begin  -->

        <center><!--  center  Begin  -->

            <img src="images/no-images.jpg" alt="Mdev Profile">

        </center><!--  center  Finish  -->

        <br/>

        <h3 align="center" class="panel-title"><!--  panel-title  Begin  -->

            Name: Username

        </h3><!--  panel-title  Finish -->

    </div><!--  panel-heading Finish  -->

    <div class="panel-body"><!--  panel-body Begin  -->

        <ul class="nav-pills nav-stacked nav"><!--  nav-pills nav-stacked nav Begin  -->

            <li class="<?php if(isset($_GET['edit_account'])){ echo "active"; } ?>">

                <a href="my_account.php?edit_account">

                    <i class="fa fa-pencil"></i> Edit Account

                </a>

            </li>

            <li class="<?php if(isset($_GET['change_pass'])){ echo "active"; } ?>">

                <a href="my_account.php?change_pass">

                    <i class="fa fa-user"></i> Change Password

                </a>

            </li>

            <li class="<?php if(isset($_GET['delete_account'])){ echo "active"; } ?>">

                <a href="my_account.php?delete_account">

                    <i class="fa fa-trash-o"></i> Delete Account

                </a>

            </li>

            <li>

                <a href="logout.php">

                    <i class="fa fa-sign-out"></i> Log Out

                </a>

            </li>

        </ul><!--  nav-pills nav-stacked nav Begin  -->

    </div><!--  panel-body Finish  -->

</div><!--  panel panel-default sidebar-menu Finish  -->
