<!-- Edit -->
      <div class="modal fade" id="edit<?php echo $row['no_resit']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel"></h4></center>
                </div>
                <div class="modal-body">

				<?php
					$edit = mysqli_query($conn,"select * from lesen where no_resit='".$row['no_resit']."'");
					$erow = mysqli_fetch_array($edit);
				?>

				<div class="container-fluid">
				<form method="POST" action="editBayaran.php?no_lesen=<?php echo $erow['no_lesen']; ?>">

					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">No Resit:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="no_resit" class="form-control" value="<?php echo $erow['no_resit']; ?>">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Tarikh Bayaran:</label>
						</div>
						<div class="col-lg-10">
							<input type="date" name="date" class="form-control" value="<?php echo $erow['date']; ?>">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Tahun ke:</label>
						</div>
						<div class="col-lg-10">
							<input type="number" name="no_tahun" class="form-control" value="<?php echo $erow['no_tahun']; ?>">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Jenis Bot:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="jenis_bot" class="form-control" value="<?php echo $erow['jenis_bot']; ?>">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Kapasiti:</label>
						</div>
						<div class="col-lg-10">
							<input type="number" name="capacity" class="form-control" value="<?php echo $erow['capacity']; ?>">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Bayaran RM:</label>
						</div>
						<div class="col-lg-10">
							<input type="number" min="0" step=".01" name="fee" class="form-control" value="<?php echo $erow['fee']; ?>">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Tarikh Mula:</label>
						</div>
						<div class="col-lg-10">
							<input type="date" name="date_mula" class="form-control" value="<?php echo $erow['date_mula']; ?>">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Tarikh Akhir:</label>
						</div>
						<div class="col-lg-10">
							<input type="date" name="date_akhir" class="form-control" value="<?php echo $erow['date_akhir']; ?>">
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

<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['no_resit']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel"></h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from lesen where no_resit='".$row['no_resit']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					
					<h5><center>No Lesen: <strong><?php echo $drow['no_lesen']; ?></strong></center></h5>
					<h5><center>No Resit: <strong><?php echo $drow['no_resit']; ?></strong></center></h5>
                </div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="deleteBayaran.php?no_resit=<?php echo $row['no_resit']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>

            </div>
        </div>
    </div>
<!-- /.modal -->
