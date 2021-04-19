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
            BUTIRAN PENDAFTAR</div>
          <div class="card-body">
            <div class="table-responsive">
			<table align="center" id="dataTable" width="450">
      <tbody>
      <?php
       if (isset($_GET['nama']))
        $nama = $_GET['nama'];
      else
        $nama = 0;
        include('dbconnect.php');
$number=1;
        $query=mysqli_query($conn,"SELECT DISTINCT s.no_lesen, m.nama FROM pendaftar m INNER JOIN lesen s on m.nama = s.nama WHERE s.nama = $nama");
      while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
          ?>
          <tr><th align="right" width="200">NO LESEN:</th>
              <td ><?php echo $row['no_lesen'];?></td>
            </tr>
          <?php
	  }
      ?>
      </tbody>
    </table>

              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
        <th>NAMA</th>
        <th>NO. PENGENALAN</th>
        <th>NO. TELEFON</th>
		<th>ALAMAT</th>
		<th>NO. PENDAFTARAN</th>
		<th>NO. LESEN</th>
      </thead>
      <tbody>
      <?php

		if (isset($_GET['nama']))
			$speaker_id = $_GET['nama'];
		else
			$speaker_id = 0;

        include('dbconnect.php');
		$number = 1;
        $query=mysqli_query($conn,"SELECT q.nama, q.ic, q.phone, q.alamat, q.no_pendaftaran, q.no_lesen FROM lesen q INNER JOIN  sq ON q.qualification_id = sq.qualification_id INNER JOIN speaker s ON s.speaker_id = sq.speaker_id INNER JOIN member m ON m.member_id = s.speaker_id WHERE s.speaker_id  = $speaker_id");

        while($row=mysqli_fetch_array($query)){
          ?>
          <tr>
            <td><?php echo $row['category_name']; ?></td>
            <td><?php echo $row['level_num']; ?></td>
            <td><?php echo $row['level_desc']; ?></td>

          </tr>
          <?php
        }

      ?>
      </tbody>
    </table>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary"onclick="window.location.href = 'viewSpeaker.php';"><span class="glyphicon glyphicon-floppy-disk"></span>BACK</a></div>
            </div>

          </div>

        </div>

      </div>




</body>
<?php

include('include/scripts.php');
?>
</html>
