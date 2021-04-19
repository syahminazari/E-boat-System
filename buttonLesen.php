<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['no_lesen']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel"></h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from pendaftar where no_lesen='".$row['no_lesen']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>Nama: <strong><?php echo $drow['nama']; ?></strong></center></h5>
                </div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="delete.php?id=<?php echo $row['no_lesen']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>

            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['no_lesen']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	 
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel"></h4></center>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query("select * from pendaftar where no_lesen='$no_lesen'");
					$result1 = mysqli_query($conn, $edit) 
					or die('SQL error[' . $conn->error . ']');
        
					$row = mysqli_fetch_array($edit, MYSQLI_ASSOC);
				?>
				<div class="container-fluid">
				<form method="POST" action="editProfile.php?no_lesen=<?php echo $erow['no_lesen']; ?>">      
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Nama:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="nama" class="form-control" value="<?php echo $erow['nama']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;"> Kad Pengenalan:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="no_ic" class="form-control" value="<?php echo $erow['no_ic']; ?>">
						</div>
					</div>
					
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;"> No Telefon:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="no_tel" class="form-control" value="<?php echo $erow['no_tel']; ?>">
						</div>
					</div>
					
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;"> Alamat:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="alamat" class="form-control" value="<?php echo $erow['alamat']; ?>">
						</div>
					</div>
					
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;"> No Pendaftaran:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="no_pendaftaran" class="form-control" value="<?php echo $erow['no_pendaftaran']; ?>">
						</div>
					</div>
					
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;"> No Lesen:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="no_lesen" class="form-control" value="<?php echo $erow['no_lesen']; ?>">
						</div>
					</div>
                </div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->
