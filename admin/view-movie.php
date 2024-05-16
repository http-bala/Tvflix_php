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
            <li class="active">view-language</li>
          </ol>
        </section>
       
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                 <h1>Movies data</h1>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Sr.no</th>
                        <th>Adult</th>
                        <th>geners</th>
                        <th>orignal titile</th>
                        <th>overview</th>
                        <th>release_date</th>
                        <th>vote_count</th>
                        <th>language</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                   <tbody>
                    <?php 
                    include './controls/config.php';

                    $sql = "SELECT * FROM `movies`";
                    $run = mysqli_query($con,$sql);

                    if (mysqli_num_rows($run) > 0) {
                      $a = 0;
                      while ($data = mysqli_fetch_assoc($run)) {
                       ?>
                    
                    <tr>
                      <td><?php echo $a +=1; ?></td>
                      <td><?php echo $data['adult'];?></td>
                      <td><?php echo $data['generes'];?></td>
                      <td><?php echo $data['oringal_title'];?></td>
                      <td><?php echo $data['overview'];?></td>
                      <td><?php echo $data['release_date'];?></td>
                      <td><?php echo $data['vote_count'];?></td>
                      <td><?php echo $data['language'];?></td>
                      <td><div class="btn-group">
                          <button type="button" class="btn btn-danger btn-flat"><i class="glyphicon glyphicon-trash"></i></button>
                          <button type="button" class="btn btn-success btn-flat"><i class="fa fa-align-center"></i></button>
                          <button type="button" class="btn btn-info btn-flat"><i class="glyphicon glyphicon-eye-open"></i></button>
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
      <?php include './common/footer.php';?>
    </div><!-- ./wrapper -->

  <?php include './common/script-links.php' ?>
    <script type="text/javascript">
      $(function () {
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
    </script>

  </body>
</html>
