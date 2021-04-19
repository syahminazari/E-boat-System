
<?php
/*
include('dbconnect.php');

	$no_lesen=$_GET['no_lesen'];

	$nama=$_POST['nama'];
	$no_ic=$_POST['no_ic'];
	$no_tel=$_POST['no_tel'];
	$alamat=$_POST['alamat'];
	$no_pendaftaran=$_POST['no_pendaftaran'];
	$no_lesen=$_POST['no_lesen'];


	mysqli_query($conn,"update pendaftar set nama='$nama', no_ic='$no_ic', no_tel='$no_tel', alamat='$alamat', no_pendaftaran='$no_pendaftaran', no_lesen='$no_lesen' where no_lesen='$no_lesen'");
	header('location:viewProfile.php'); */

 ?>


<div class="modal fade" id="edit<?php echo $row['no_lesen']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update person</h2>
    </div>
    <div class="card-body">

      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>

      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
       <div class="modal-body">
	   <form method="POST" action="editProfile.php?no_lesen=<?php echo $row['no_lesen']; ?>">
				<?php
					$edit=mysqli_query("SELECT * from pendaftar where no_lesen='$no_lesen'");
					$result1 = mysqli_query($conn, $edit)
					or die('SQL error[' . $conn->error . ']');

					$row = mysqli_fetch_array($result1, MYSQLI_ASSOC);
				?>
				<div class="container-fluid">


				<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Nama:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;"> Kad Pengenalan:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="ic" class="form-control" value="<?php echo $row['no_ic']; ?>">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;"> No Telefon:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="tel" class="form-control" value="<?php echo $row['no_tel']; ?>">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;"> Alamat:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="alamat" class="form-control" value="<?php echo $row['alamat']; ?>">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;"> No Pendaftaran:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="pendaftaran" class="form-control" value="<?php echo $row['no_pendaftaran']; ?>">
						</div>
					</div>

					<!--<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;"> No Lesen:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="lesen" class="form-control" value="<?php echo $row['no_lesen']; ?>">
						</div>
					</div>-->
                </div>

        <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
      </form>
	  </div>
	  </div>
    </div>
  </div>
</div>
