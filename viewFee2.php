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

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            BUTIRAN PENDAFTARAN DAN LESEN</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
		<th>No</th>
		<th>No. Lesen</th>
        <th>Nama</th>
		<th>Profil</th>
		<th>Butiran Bayaran</th>
		<th>Kemaskini</th>


      </thead>
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
			<td>
              <a href="#del<?php echo $row['no_lesen']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> PADAM<a>
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
