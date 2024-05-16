<?php
include 'controls/config.php';

session_start();
if (!isset($_SESSION['adminuser'])) {
    header("location: login-auth.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <?php include './common/header-links.php' ?>

  </head>
  <body class="skin-blue">
    <div class="wrapper">
      <!--  header section Start -->
      <?php include './common/header.php' ?>

      <!--  header section ends -->
      
      <!-- ? sidebar section start -->
      <?php include './common/sidebar.php' ?>


      <!-- ? sidebar section ends -->


      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Add-director
            <small>Director</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Add-director</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
      <!-- ? content boxes  start-->
      <div class="taba">
        <header>Movie-Form</header>

        <form action="#">
            <div class="form first">
                <div class="details personal">
                    <span class="title"></span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" placeholder="Enter your name" required>
                        </div>

                        <div class="input-field">
                            <label>Director-Name</label>
                            <input type="text" placeholder="Director-Name" required>
                        </div>

                        <div class="input-field">
                            <label>Add-Movie</label>
                            <input type="text" placeholder="Add-movie" required>
                        </div>

                        <div class="input-field">
                            <label>Rating</label>
                            <input type="number" placeholder="Rating" required>
                        </div>

                        <div class="input-field">
                            <label>Director</label>
                            <input type="text" placeholder="Director" required>
                        </div>


                        <div class="input-field">
                            <label>Description</label>
                            <input type="text" placeholder="Description" required>
                        </div>
                    </div>

                    <div>
                        <button class="sumbit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!-- ? -->
      <!-- footer  -->
    <?php include './common/footer.php' ?>
     <!-- footer ends -->
    </div><!-- ./wrapper -->

    <?php include './common/script-links.php' ?>

  </body>
</html>