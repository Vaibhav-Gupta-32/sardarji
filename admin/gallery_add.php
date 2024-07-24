<?php
session_start();
include 'dbconnection.php';
// checking session is valid for not 
if (strlen($_SESSION['id'] == 0)) {
  header('location:logout.php');
} else {
  if (isset($_POST['submit'])) {
    $tittle = $_POST['tittle'];
    $description = $_POST['description'];

    foreach ($_FILES['upload']['name'] as $key => $name) {

      $newFilename = time() . "_" . $name;
      move_uploaded_file($_FILES['upload']['tmp_name'][$key], 'gallery/' . $newFilename);
      $location = 'gallery/' . $newFilename;

      mysqli_query($con, "insert INTO `gallery` (tittle,location,description) VALUES ('$tittle','$location','$description')");
    }
    $_SESSION['msg'] = "Data Inserted Successfully !!";
  }

  if (isset($_GET['id'])) {
    $adminid = $_GET['id'];
    $msg = mysqli_query($con, "delete from tbl_slider where id='$adminid'");
    if ($msg) {
      echo "<script>alert('Data deleted');</script>";
    }
  }
?>
  <!DOCTYPE html>
  <?php
  include 'header.php'; ?>
  <section id="main-content">
    <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i> Add Gallery Images</h3>
      <div class="row">
        <div class="col-md-12">
          <div class="content-panel">
            <table class="table table-striped table-advance table-hover">
              <h4><i class="fa fa-angle-right"></i> All User Details </h4>
              <hr>
              <p style="color:#F00"><?php echo $_SESSION['msg']; ?><?php echo $_SESSION['msg'] = ""; ?></p>

              <thead>
                <div class="box box-primary">
                  <!-- form start -->
                  <form name="School_News" method="post" action="" enctype="multipart/form-data">
                    <div class="box-body">
                      <br>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Tittle" name="tittle" id="tittle"><br>
                        <input type="text" class="form-control" placeholder="Enter Description" name="description" id="description"><br>
                        <label for="exampleInputFile">Select Picture</label><br>
                        <input type="file" name="upload[]" multiple id="upload">
                      </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                      <center> <input class="btn btn-primary" type="submit" name="submit" value="submit"></center>
                    </div>
                  </form>
                </div>
          </div>


          <div class="col-md-12">
            <!-- <div class="content-panel"> -->
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> All Gallery Details </h4>
                <hr>
                <thead>
                  <tr>
                    <th>Sno.</th>
                    <th>Image</th>
                    <th>Tittle</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $ret = mysqli_query($con, "select * from gallery order by id desc");
                  $cnt = 1;
                  while ($row = mysqli_fetch_array($ret)) { ?>
                    <tr>
                      <td><?php echo $cnt++; ?></td>
                      <td><img src="<?php echo $row['location']; ?>" alt="" width='150' height='150'></td>
                      <td><?= $row['tittle']; ?></td>
                      <td><?= $row['description']; ?></td>
                      <td>
                        <a href="slider_add.php?id=<?php echo $row['id']; ?>">
                          <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>
                      </td>
                    </tr>
                  <?php } ?>


              </table>
              </form>
            <!-- </div> -->
            <!-- /.box-body -->
          </div>
        </div>

      </div>
      <script src="assets/js/jquery.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
      <script src="assets/js/jquery.scrollTo.min.js"></script>
      <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
      <script src="assets/js/common-scripts.js"></script>
      <script>
        $(function() {
          $('select.styled').customSelect();
        });
      </script>

      </body>

      </html>
    <?php } ?>