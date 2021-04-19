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
            BUTIRAN LESEN BERDAFTAR</div>
          <div class="card-body">
            <div class="table-responsive">
				<table align="center" id="dataTable" width="450">
      <tbody>
      <?php
       if (isset($_GET['no_lesen']))
        $no_lesen = $_GET['no_lesen'];
      else
        $no_lesen = 0;
        include('dbconnect.php');
$number=1;
        $query=mysqli_query($conn,"SELECT DISTINCT s.no_lesen, m.name FROM pendaftar m INNER JOIN lesen s on m.no_lesen = s.no_lesen WHERE m.no_lesen = $no_lesen");
      while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
          ?>
          <tr><th align="right" width="200">NO. LESEN:</th>
              <td ><?php echo $row['no_lesen'];?></td>
            </tr>
            <tr><th align="right">NAMA:</th>
                <td><?php echo $row['nama'];?></td>
              </tr>
          <?php
	  }
      ?>
      </tbody>
    </table>
			 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
        <th>NO</th>
        <th>No. Resit</th>
        <th>Tarikh Bayaran</th>
        <th>Bayaran RM</th>
        <th>Tahun ke</th>
		<th>Tarikh Mula</th>
		<th>Tarikh Akhir</th>
      </thead>
      <tbody>
      <?php

		if (isset($_GET['no_lesen']))
			$member_id = $_GET['no_lesen'];
		else
			$no_lesen = 0;

        include('dbconnect.php');
		$number = 1;
        $query=mysqli_query($conn,"SELECT no_resit, date, fee, no_tahun, date_mula, date_akhir FROM `lesen` WHERE no_lesen = '$no_lesen'");
        while($row=mysqli_fetch_array($query)){
          ?>
          <tr>
		    <td><?php echo $number; $number++ ?></td>
            <td><?php echo $row['no_resit']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['fee']; ?></td>
            <td><?php echo $row['no_tahun']; ?></td>
            <td><?php echo $row['date_mula']; ?></td>
			<td><?php echo $row['date_akhir']; ?></td>

          </tr>
          <?php
        }

      ?>
      </tbody>
    </table>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary"onclick="window.location.href = 'viewSpeaker.php';"><span class="glyphicon glyphicon-floppy-disk"></span> BACK</a></div>
            </div>

          </div>

        </div>

      </div>




</body>
<?php

include('include/scripts.php');
?>
</html>
