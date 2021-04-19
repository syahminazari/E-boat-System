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
	<main>
      <div class="container-fluid">



        <!-- Icon Cards-->


        <!-- Area Chart Example-->


        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            BAYARAN LESEN TAHUNAN</div>
          <div class="card-body">
             <form method="POST" action="insertFee.php">
          <div class="row">
            <div class="col-lg-2">
              <label class="control-label" style="position:relative; top:7px;">NO. LESEN:</label>
            </div>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="no_lesen" placeholder="TKP000" minlength="5" maxlength="6">
            </div>
          </div>
          <div style="height:10px;"></div>
          <div class="row">
            <div class="col-lg-2">
              <label class="control-label" style="position:relative; top:7px;">NO. RESIT:</label>
            </div>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="no_resit" placeholder="Masukkan Nombor Resit"  minlength="1" maxlength="10">
            </div>
          </div>

		  <div style="height:10px;"></div>
          <div class="row">
            <div class="col-lg-2">
              <label class="control-label" style="position:relative; top:7px;">TARIKH BAYARAN:</label>
            </div>
            <div class="col-lg-10">
              <input type="date" class="form-control" name="date" required="">
            </div>
          </div>


          <div style="height:10px;"></div>
                     <div class="row">
            <div class="col-lg-2">
              <label class="control-label" style="position:relative; top:7px;">TAHUN KE:</label>
            </div>
            <div class="col-lg-10" required="">
				<select name="no_tahun" id="no_tahun" required="">
					<option value=""></option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				</select>
            </div>
          </div>

		  <div style="height:10px;"></div>
           <div class="row">
            <div class="col-lg-2">
              <label class="control-label" style="position:relative; top:7px;">JENIS BOT:</label>
            </div>
            <div class="col-lg-10" required="">
				<select name="jenis_bot" id="jenis_bot" required="">
          <option value=""></option>
					<option value="Penambang">Penambang</option>
					<option value="House Boat">House Boat</option>
					<option value="Kargo">Kargo</option>
				</select>
            </div>
          </div>

		  <div style="height:10px;"></div>
           <div class="row">
            <div class="col-lg-2">
              <label class="control-label" style="position:relative; top:7px;">BAYARAN RM:</label>
            </div>
            <div class="col-lg-10" required="">
				<select name="fee" id="fee" required="">
					<option value=""></option>
					<option value="30.00">30.00</option>
					<option value="120.00">120.00</option>

				</select>
            </div>
          </div>


		  <div style="height:10px;"></div>
          <div class="row">
            <div class="col-lg-2">
              <label class="control-label" style="position:relative; top:7px;">TARIKH MULA:</label>
            </div>
            <div class="col-lg-10">
              <input type="date" class="form-control" name="date_mula" required="">
            </div>
          </div>

		  <div style="height:10px;"></div>
          <div class="row">

            <div class="col-lg-2">
              <label class="control-label" style="position:relative; top:7px;">TARIKH AKHIR:</label>
            </div>
            <div class="col-lg-10">
              <input type="date" class="form-control" name="date_akhir" required="">
            </div>
          </div>

		  <div style="height:10px;"></div>
          <div class="row">
            <div class="col-lg-2">
              <label class="control-label" style="position:relative; top:7px;">BILANGAN KAPASITI:</label>
            </div>
            <div class="col-lg-10">
              <input type="number" class="form-control" name="capacity" placeholder="Masukkan Bilangan Penumpang">
            </div>
          </div>


                </div>
        </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> BATAL</button>
                    <button type="save" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> SIMPAN</a>

        </form>
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


</body>
<?php
include('include/scripts.php');
?>
</html>
