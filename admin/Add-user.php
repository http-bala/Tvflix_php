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
            Add-user
            <small>User</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Add-user</li>
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

                        <div class="input-field">
                            <label>Movie-Name</label>
                            <input type="text" placeholder="Movie-Name" required>
                        </div>

                        <!-- <div class="input-field">
                            <label>Language's</label>
                            <input type="text" placeholder="Select-language" required> -->

                          <form action="/action_page.php">
                                <label for="Language">Choose a language:</label>
                            
                            <select name="Language" id="Language">
                                  <option value="Hindi">Hindi</option>
                                  <option value="English">English</option>
                                  <option value="Korean">Korean</option>
                                  <option value="Gujrati">Gujrati</option>
                            </select> 

                          </form>

                        </div>

                        <div class="input-field">
                            <label>Rating</label>
                            <input type="number" placeholder="Rating" required>
                        </div>

                        <form action="/action_page.php">
                                <label for="Director's">choose director's:</label>
                            
                            <select name="Language" id="Language">
                                  <option value="Hindi">Hindi</option>
                                  <option value="English">English</option>
                                  <option value="Korean">Korean</option>
                                  <option value="Gujrati">Gujrati</option>
                            </select> 

                          </form>


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

          <input type="submit" value="Submit">
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