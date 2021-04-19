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
include('dbconnect.php');

 ?>
    <div id="content-wrapper">
<main>
      <div class="container-fluid">



        <!-- Icon Cards-->


        <!-- Area Chart Example-->


        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            BAYARAN TAHUNAN</div>
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
		<th>No</th>
		<th>No. Resit</th>
        <th>Tarikh Bayaran</th>
		<th>Tahun ke</th>
		<th>Jenis Bot</th>
		<th>Kapasiti</th>
		<th>Bayaran RM</th>
		<th>Tarikh Mula</th>
		<th>Tarikh Akhir</th>
		<th>Kemaskini</th>
		<th>Cetak</th>



      </thead>

      <tbody>
		 <?php

		if (isset($_GET['no_lesen']))
			$no_lesen = $_GET['no_lesen'];
		else
			$no_lesen = 0;

		$number = 1;

        $query=mysqli_query($conn,"SELECT t.no_lesen,t.no_resit, t.date, t.no_tahun, t.jenis_bot, t.capacity, fee, date_mula, date_akhir FROM lesen t INNER JOIN pendaftar s ON t.no_lesen = s.no_lesen WHERE s.no_lesen = '$no_lesen'" );


		?>
		<?php
        while($row=mysqli_fetch_array($query)){
          ?>
          <tr>
			<td><?php echo $number; $number++ ?></td>
			<td><?php echo $row['no_resit']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['no_tahun']; ?></td>
			<td><?php echo $row['jenis_bot']; ?></td>
			<td><?php echo $row['capacity']; ?></td>
			<td><?php echo $row['fee']; ?></td>
			<td><?php echo $row['date_mula']; ?></td>
			<td><?php echo $row['date_akhir']; ?></td>
			<td>
              <a href="#edit<?php echo $row['no_resit']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> KEMASKINI</a>
			   <?php include('buttonBayaran.php'); ?>

			   <a href="#del<?php echo $row['no_resit']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> PADAM<a>
			   <?php include('buttonBayaran.php'); ?>
			</td>
				<td><div><a href="tableone.php?no_resit=<?php echo $row['no_resit']; ?>" class="btn btn-primary">CETAK</a></td>





          </tr>
          <?php
        }
      ?>
      </tbody>
    </table>
    <div class="modal-footer">
    <a href="table.php?no_lesen=<?php echo $no_lesen ?>" class="btn btn-primary">CETAK</a>
        <button type="button" class="btn btn-primary"onclick="window.location.href = 'viewFee2.php';"><span class="glyphicon glyphicon-floppy-disk"></span> KEMBALI</a>
        </div>

            </div>

          </div>

        </div>


				</div>
      </div>
	  </div>

	  </main>
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
