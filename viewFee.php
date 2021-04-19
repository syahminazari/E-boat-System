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
            SENARAI LESEN BERDAFTAR</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
		<th>No</th>
        <th>No. Lesen</th>
        <th>No. Resit</th>
        <th>Tarikh Bayaran</th>
        <th>tahun ke</th>
		<th>Jenis Bot</th>
        <th>Kapasiti Bot</th>
		<th>Bayaran RM</th>
		<th>Tarikh Mula</th>
		<th>Tarikh Akhir</th>

      </thead>
      <tbody>
      <?php
        include('dbconnect.php');
		$number = 1;
        $query=mysqli_query($conn,"SELECT * FROM `lesen`");
        while($row=mysqli_fetch_array($query)){
          ?>
          <tr>
			<td><?php echo $number; $number++ ?></td>
            <td><?php echo $row['no_lesen']; ?></td>
            <td><?php echo $row['no_resit']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['no_tahun']; ?></td>
            <td><?php echo $row['jenis_bot']; ?></td>
			<td><?php echo $row['capacity']; ?></td>
			<td><?php echo $row['fee']; ?></td>
			<td><?php echo $row['date_mula']; ?></td>
			<td><?php echo $row['date_akhir']; ?></td>
          </tr>
          <?php
        }

      ?>
      </tbody>
    </table>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary"onclick="window.location.href = 'http://localhost/lesenbot/registerFee.php';"><span class="glyphicon glyphicon-floppy-disk"></span> TAMBAH</a></div>
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

</div>


</body>
<?php

include('include/scripts.php');
?>
</html>
