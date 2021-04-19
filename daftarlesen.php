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
            PENDAFTARAN</div>
          <div class="card-body">
             <form method="POST" action="insertlesen.php">
          <div class="row">
            <div class="col-lg-2">
              <label class="control-label" style="position:relative; top:7px;">NAMA:</label>
            </div>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Penuh (HURUF BESAR)" required="">
            </div>
          </div>

          <div style="height:10px;"></div>
          <div class="row">
            <div class="col-lg-2">
              <label class="control-label" style="position:relative; top:7px;">NO. PENGENALAN:</label>
            </div>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="ic" placeholder="Masukkan Nombor Kad Pengenalan"  minlength="0" maxlength="12">
            </div>
          </div>

		  <div style="height:10px;"></div>
          <div class="row">
            <div class="col-lg-2">
              <label class="control-label" style="position:relative; top:7px;">NO. TELEFON:</label>
            </div>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="phone" placeholder="Masukkan Nombor telefon" required pattern="\d*" minlength="10" maxlength="12">
            </div>
          </div>

          <div style="height:10px;"></div>
          <div class="row">
            <div class="col-lg-2">
              <label class="control-label" style="position:relative; top:7px;">ALAMAT:</label>
            </div>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="alamat"  placeholder="Masukkan Alamat Penuh" required="">
            </div>
          </div>

		  <div style="height:10px;"></div>
          <div class="row">
            <div class="col-lg-2">
              <label class="control-label" style="position:relative; top:7px;">NO. PENDAFTARAN:</label>
            </div>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="no_pendaftaran" placeholder="Masukkan Nombor Pendaftaran"  minlength="5" maxlength="6">
            </div>
          </div>

          <div style="height:10px;"></div>
          <div class="row">
            <div class="col-lg-2">
              <label class="control-label" style="position:relative; top:7px;">NO. LESEN:</label>
            </div>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="no_lesen" placeholder="Masukkan Nombor Lesen (TKP000)"  minlength="5" maxlength="6">
            </div>
          </div>
                </div>
        </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> BATAL</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> SIMPAN</a>
        </form>
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
