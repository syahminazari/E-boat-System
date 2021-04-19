<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  echo "<script> alert('You need login to access this pages');
  window.location.href='login.php';</script>";
    exit;
}

/* Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["isLoggedIn"]) || $_SESSION["isLoggedIn"] !== true){
  echo "<script> alert('You need login to access this pages');
  window.location.href='login2.php';</script>";
    exit;
}*/
?>

 <?php
include('include/header.php');
include('include/navbar.php');

 ?>
    <div id="content-wrapper">

      <div class="container-fluid">



        <!-- Icon Cards-->


        <!-- Area Chart Example-->


        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            PROFIL PENDAFTAR</div>
          <div class="card-body">
            <div class="table-responsive">
				<table align="center" id="dataTable" width="450">
				 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <tbody>
      <?php
      if (isset($_GET['no_lesen']))
        $no_lesen = $_GET['no_lesen'];
      else
        $no_lesen = 0;
        include('dbconnect.php');
$number=1;
        $query1 ="SELECT p.nama,p.no_lesen FROM pendaftar p
        LEFT JOIN lesen n ON p.no_lesen = n.no_lesen where p.no_lesen = '$no_lesen'";

		$result1 = mysqli_query($conn, $query1)
		or die('SQL error[' . $conn->error . ']');
        $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
          ?>
          <tr><th>NO LESEN:</th>
              <td><?php echo $row1['no_lesen'];?></td>
            </tr>





          </tr>

          <?php


      ?>
      </tbody>
    </table>
			 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
        <th>Nama</th>
        <th>Kad Pengenalan</th>
        <th>No Telefon</th>
        <th>Alamat</th>
        <th>No Pendaftaran</th>
		<th>No Lesen</th>
		<th>Kemaskini</th>
      </thead>
      <tbody>
      <?php

		if (isset($_GET['no_lesen']))
			$no_lesen = $_GET['no_lesen'];
		else
			$no_lesen = 0;

        include('dbconnect.php');
		$number = 1;
        $query=mysqli_query($conn,"SELECT nama, no_ic, no_tel, alamat, no_pendaftaran, no_lesen FROM `pendaftar` WHERE no_lesen = '$no_lesen'");
        while($row=mysqli_fetch_array($query)){
          ?>
          <tr>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['no_ic']; ?></td>
            <td><?php echo $row['no_tel']; ?></td>
            <td><?php echo $row['alamat']; ?></td>
            <td><?php echo $row['no_pendaftaran']; ?></td>
			<td><?php echo $row['no_lesen']; ?></td>
			<td>
              <a href="#edit<?php echo $row['no_lesen']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> KEMASKINI</a>
			   <?php include('edit2.php'); ?>



            </td>



          </tr>

          <?php
        }

      ?>
      </tbody>
    </table>
    <div class="modal-footer">


        <button type="button" class="btn btn-primary"onclick="window.location.href = 'viewFee2.php';"><span class="glyphicon glyphicon-floppy-disk"></span> KEMBALI</a></div>
            </div>

          </div>

        </div>

      </div>

      <footer class="sticky-footer">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <div class="text-muted">Copyright &copy; PDHT 2020</div>
        </div>
      </div>
    </footer>



</body>
<?php

include('include/scripts.php');
?>
</html>
