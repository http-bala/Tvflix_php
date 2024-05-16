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
          <header>Movie-Form</header>

          <form id="form" enctype="multipart/form-data">
            <div class="form first">
              <div class="details personal">
                <span class="title"></span>

                <div class="fields">

                <div class="input-field">
                    <label>ADULT</label>
                    <select class="form-control" name="adult">
                      <option selected disabled>Open this select menu</option>
                      <option value="true">true</option>
                      <option value="false">false</option>
                    </select>
                  </div>
                 

                  <div class="input-field">
                    <label>GENRES</label>
                    <select class="form-control" name="genres">
                      <option selected disabled>Open this select menu</option>
                      <?php include './controls/config.php';
                           $sql = "SELECT * FROM `genres`";
                           $run = mysqli_query($con,$sql);

                           if (mysqli_num_rows($run) > 0) {
                            $a = 0;
                            while ($data = mysqli_fetch_assoc($run)) {
                      ?>
                      <option value="<?php echo $data['genres_name']; ?>"><?php echo $data['genres_name']; ?></option>
                      <?php
                      }
                    }
                    ?>
                    </select>
                  </div>

                  <div class="input-field">
                    <label>LANGUAGE</label>
                    <select class="form-control" name="language">
                      <option selected disabled>Open this select menu</option>
                      <?php include './controls/config.php';
                           $sql = "SELECT * FROM `language`";
                           $run = mysqli_query($con,$sql);

                           if (mysqli_num_rows($run) > 0) {
                            $a = 0;
                            while ($data = mysqli_fetch_assoc($run)) {
                      ?>
                      <option value="<?php echo $data['language']; ?>"><?php echo $data['language']; ?></option>
                      <?php
                      }
                    }
                    ?>
                    </select>
                  </div>

                  <div class="input-field">
                    <label>Orangal title</label>
                    <input type="text" class="form-control" name="orgtitle" placeholder="oringal_title">
                  </div>

                  <div class="input-field">
                    <label>title</label>
                    <input type="text" class="form-control" name="title" placeholder="title">
                  </div>

                  <div class="input-field">
                    <label>OVERVIEW</label>
                    <textarea type="text" name="overveiw" placeholder="overveiw" required></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">BACKDROP IMAGES</label>
                    <input type="file" name="backdrop_image" id="exampleInputFile">
                    <p class="help-block" style="color: red;">* Please upload high quailty image</p>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">POSTER IMAGE</label>
                    <input type="file" name="poster_image" id="exampleInputFile">
                    <p class="help-block" style="color: red;">* Please upload high quailty image</p>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">VIDEO</label>
                    <input type="file" name="video" id="exampleInputFile">
                    <p class="help-block" style="color: red;">* Please upload high quailty image</p>
                  </div>

                </div>
                <button class="btn btn-block btn-primary">Upload</button>

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

      //  ajax api code 
      $("#form").submit(function(e) {
        e.preventDefault();

        let jsonobj = new FormData(this);
        
        
        console.log(jsonobj);

        $.ajax({
            type:'POST',
            url: "./controls/insert-movies.php",
            data:jsonobj,
            contentType: false,
            processData: false,
            success: function(data) {
             if (data == 0) {
              message("fails",false);
             }else if(data == 3){ 
              message("files are not upload ",false);
             }
             else if(data == 4 ){ 
              message("uploading error",false);
             }
             else if(data == 5 ){ 
              message("file extension are incorrect",false);
             }
              else{
              message("Added Movie successfully !",true);
              $("#form").trigger("reset");
             }
            }
            
        });
    
      });
    });
  </script>

</body>

</html>