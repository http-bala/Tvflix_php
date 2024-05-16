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
          Add-language
          <small>Language</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Add-language</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

      <!-- this is message fields -->
        <div class="alert alert-danger alert-dismissable" id="msg-error">

        </div>

        <div class="alert alert-success alert-dismissable" id="msg-success">

        </div>

        <!-- ? content boxes  start-->
        <div class="taba">
          <header>Add-Language</header>

          <form id="form">
            <div class="form first">
              <div class="details personal">
                <span class="title"></span>
                <div class="input-field">
                  <label>Language : </label>
                  <input type="text" placeholder="language" name="language" required>
                </div>

              </div>

              <div>
                <button class="sumbit" type="submit">
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
  <script>
    $(document).ready(function() {
      // message show code 
      function message(message, status) {
        if (status == true) {
          $("#msg-success").html(message).fadeIn();
          $("#msg-error").html(message).fadeOut();
          setTimeout(function() {
            $("#msg-success").fadeOut();
          }, 2000);
        } else if (status == false) {
          $("#msg-error").html(message).fadeIn();
          $("#msg-success").html(message).fadeOut();
          setTimeout(function() {
            $("#msg-error").fadeOut();
          }, 2000);
        }
      }

      // Convert to array to json function code 
      function json(label) {
        let arr = $(label).serializeArray();
        let obj = {};

        for (i = 0; i < arr.length; i++) {
          if (arr[i].value == "") {
            return false;
          }
          obj[arr[i].name] = arr[i].value;
        }
        data = JSON.stringify(obj);
        return data;
      }

      //  ajax api code 
      $("#form").submit(function(e) {
        e.preventDefault();

        let jsonobj = json("#form");

        if (jsonobj == false) {
          message("All the are field", false);
        } else {
          $.ajax({
            type: "POST",
            url: "http://localhost/Tvflix/admin/controls/insert-language.php",
            data: jsonobj,
            success: function(data) {
              message(data.message, data.status);
              $("#form").trigger("reset");
            }
          });
        }
      });
    });
  </script>

</body>

</html>