<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  echo "<script> alert('You need login to access this pages');
  window.location.href='login.php';</script>";
    exit;
}
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
            SENARAI PENDAFTAR</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
		<th>No</th>
		<th>No Lesen</th>
        <th>Nama</th>
        <th>Kad Pengenalan</th>
        <th>No Telefon</th>
        <th>Alamat</th>
		<th>No Pendaftaran</th>
        <th>Bayaran</th>

      </thead>
      <tbody>
      <?php
        include('dbconnect.php');
		$number = 1;
        $query=mysqli_query($conn,"SELECT * FROM `pendaftar`");
        while($row=mysqli_fetch_array($query)){
          ?>
          <tr>
			<td><?php echo $number; $number++ ?></td>
			<td><?php echo $row['no_lesen']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['no_ic']; ?></td>
            <td><?php echo $row['no_tel']; ?></td>
            <td><?php echo $row['alamat']; ?></td>
            <td><?php echo $row['no_pendaftaran']; ?></td>
			<td><div><a onclick="window.location.href = 'registerFee.php';" data-toggle="modal" class="btn btn-success"><span class="glyphicon glyphicon-trash"></span> BAYARAN</a></td>
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
