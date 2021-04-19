<?php
// Initialize the session
session_start();

//Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  echo "<script> alert('You need login to access this pages');
  window.location.href='welcome.php';</script>";
    exit;
}
/*
include('functions.php');
if (!isLoggedIn()) {
$_SESSION['msg'] = "You must log in first";
header('location: login2.php');
}

// log user out if logout button clicked
if (isset($_GET['logout'])) {
session_destroy();
unset($_SESSION['user']);
header("location: login2.php");
} */



?>

  <?php include 'include/navbar.php'; ?>
  <?php include 'include/header.php'; ?>
  <div id="wrapper">



    <div id="content-wrapper">

      <div class="container-fluid">




        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5" >JUMLAH PENDAFTAR : <?php
                        include('dbconnect.php');

                        $query=mysqli_query($conn,"select  count(*) as total from pendaftar;");
                        while($row=mysqli_fetch_array($query)){
                          ?>
						<?php echo $row['total']; ?>
                          <?php
                        }

                      ?></div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="viewFee2.php">
                <span class="float-left">Senarai</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">PENDAFTARAN BAHARU

                      </div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="daftarlesen.php">
                <span class="float-left">Daftar</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">PERBAHARUAN LESEN BOT</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="registerFee.php">
                <span class="float-left">Daftar</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">SENARAI PENDAFTAR
                      </div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="viewLesen.php">
                <span class="float-left">Papar</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

        <!-- Area Chart Example-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            SENARAI PENUH PENDAFTAR</div>
          <div class="card-body" align="center">

          </div>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                <thead>
		<th>No</th>
		<th>No. Lesen</th>
        <th>Nama</th>
		<th>Profil</th>
		<th>Butiran Bayaran</th>



      </thead>
      <style>
      .footer sticky-footer {
        bottom: 0px;

      }
      </style>

      <tbody>
      <?php
        include('dbconnect.php');
		$number = 1;
       $query=mysqli_query($conn,"select * from `pendaftar`");

        while($row=mysqli_fetch_array($query)){
          ?>
          <tr>
			<td><?php echo $number; $number++ ?></td>
            <td><?php echo $row['no_lesen']; ?></td>
			<td><?php echo $row['nama']; ?></td>
			<td><div><a onclick="window.location.href = 'viewProfile.php?no_lesen=<?php echo $row['no_lesen'];?>';" data-toggle="modal" class="btn btn-success"><span class="glyphicon glyphicon-trash"></span> DETAIL</a></td>
           	<td><div><a onclick="window.location.href = 'viewBayaran.php?no_lesen=<?php echo $row['no_lesen'];?>';" data-toggle="modal" class="btn btn-success"><span class="glyphicon glyphicon-trash"></span> DETAIL</a></td>

            <!--  <a href="#del<?php echo $row['no_lesen']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> PADAM<a>-->
			   <?php include('delete.php'); ?>


          </tr>
          <?php
        }

      ?>
      </tbody>
    </table>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary"onclick="window.location.href = 'http://localhost/lesenbot/daftarlesen.php';"><span class="glyphicon glyphicon-floppy-disk"></span> TAMBAH</a></div>
            </div>

          </div>

        </div>

      </div>



        </div>



        </div>
              </div>

        </div>


  <!-- /#wrapper -->

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <!--<footer class="sticky-footer">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <div class="text-muted">Copyright &copy; PDHT 2020</div>
        </div>
      </div>
    </footer>-->


  <?php include 'include/scripts.php'; ?>

</html>
