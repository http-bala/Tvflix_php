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
  <style>
    #error {
      /* display: none; */
      width: 200px;
      position: absolute;
      right: 20px;
    }

    #success {
      /* display: none; */
      width: 200px;
      position: absolute;
      right: 20px;

    }
  </style>

</head>

<body class="skin-blue">
  <div class="wrapper">
    <!--  header section Start -->
    <?php include './common/header.php'; ?>

    <!--  header section ends -->

    <!-- ? sidebar section start -->
    <?php include './common/sidebar.php' ?>


    <!-- ? sidebar section ends -->


    <!-- Right side column. Contains the navbar and content of the page -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header mb-4 ">
        <h1>
          Dashboard
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">view-genres</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- this is message fields -->
        <div class="alert alert-danger alert-dismissable" id="msg-error">

        </div>
        <div class="alert alert-success alert-dismissable" id="msg-success">

        </div>


        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <a href="./Add-category.php" class="btn btn-primary  mx-5 ">Add genres</a>
              </div><!-- /.box-header -->

              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Sr.no</th>
                      <th>Genres</th>
                      <th>remove</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include './controls/config.php';

                    $sql = "SELECT * FROM `genres`";
                    $run = mysqli_query($con, $sql);

                    if (mysqli_num_rows($run) > 0) {
                      $a = 0;
                      while ($data = mysqli_fetch_assoc($run)) {
                    ?>

                        <tr>
                          <td><?php echo $a += 1; ?></td>
                          <td><?php echo $data['genres_name']; ?></td>
                          <td>
                            <div class="btn-group">
                              <button type="button" class="btn btn-danger btn-flat" id="btn" data-id="<?php echo $data['id']; ?>"><i class="glyphicon glyphicon-trash"></i></button>
                            </div>
                          </td>
                        </tr>
                    <?php
                      }
                    }
                    ?>
                  </tbody>
                </table>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <?php include './common/footer.php'; ?>
  </div><!-- ./wrapper -->

  <?php include './common/script-links.php' ?>
  <script type="text/javascript">
    $(document).ready(function() {
      $(function() {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });


      // 

      let message = (message, status) => {
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

      //  passing data 
      $(document).on("click", "#btn", function(e) {
        e.preventDefault();
        let info = $(this).attr("data-id");
        let fdata = {
          id: info
        };
        console.log(fdata);
        $.ajax({
          type: "POST",
          url: "controls/delete-category.php",
          data: fdata,
          success: function(data) {
            if (data == 1) {
              message("delete record successfully .",true);
              window.location = "./view-category.php";
            }else if(data == 0){
              message(" not delete record successfully !" ,false);
            }
          }
        });
      });
    });
  </script>

</body>

</html>