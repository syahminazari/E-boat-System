<<?php
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
            REPORT</div>
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
        $query=mysqli_query($conn,"SELECT  p.nama,p.no_lesen FROM pendaftar p
          INNER JOIN lesen n ON p.no_lesen = n.no_lesen
          

          where p.no_lesen && n.no_lesen=$no_lesen");
      $row=mysqli_fetch_array($query,MYSQLI_ASSOC)
          ?>
          <tr><th>NO LESEN:</th>
              <td><?php echo $row['no_lesen'];?></td>
            </tr>
			
			<tr><th>NAMA:</th>
              <td><?php echo $row['nama'];?></td>
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
		<th>Kapasiti Bot</th>
		<th>Bayaran RM</th>
		<th>Tarikh Mula</th>
		<th>Tarikh Akhir</th>


      </thead>

      <tbody>
		 <?php

		if (isset($_GET['no_lesen']))
			$no_lesen = $_GET['no_lesen'];
		else
			$no_lesen = 0;

        include('dbconnect.php');
		$number = 1;

        $query=mysqli_query($conn,"SELECT t.no_resit, t.date, t.no_tahun, t.jenis_bot, t.capacity, fee, date_mula, date_akhir FROM lesen t INNER JOIN pendaftar s ON t.no_lesen = s.no_lesen WHERE s.no_lesen = '$no_lesen'" );


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
			

          </tr>
          <?php
        }
      ?>
      </tbody>
    </table>
    <div class="modal-footer">
        <b utton type="button" class="btn btn-primary"onclick="window.location.href = 'viewFee2.php';"><span class="glyphicon glyphicon-floppy-disk"></span> BACK</a></div>
            </div>

          </div>

        </div>

      </div>

</body>
<?php

include('include/scripts.php');
?>
</html>
