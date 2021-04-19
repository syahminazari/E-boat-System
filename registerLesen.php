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
              <input type="text" class="form-control" name="nama" required="">
            </div>
          </div>
		  
          <div style="height:10px;"></div>
          <div class="row">
            <div class="col-lg-2">
              <label class="control-label" style="position:relative; top:7px;">NO. PENGENALAN:</label>
            </div>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="ic" required="">
            </div>
          </div>
		  
		  <div style="height:10px;"></div>
          <div class="row">
            <div class="col-lg-2">
              <label class="control-label" style="position:relative; top:7px;">NO. TELEFON:</label>
            </div>
            <div class="col-lg-10">
              <input type="number" class="form-control" name="phone" required="">
            </div>
          </div>
		  
          <div style="height:10px;"></div>
          <div class="row">
            <div class="col-lg-2">
              <label class="control-label" style="position:relative; top:7px;">ALAMAT:</label>
            </div>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="alamat" required="">
            </div>
          </div>
		  
		  <div style="height:10px;"></div>
          <div class="row">
            <div class="col-lg-2">
              <label class="control-label" style="position:relative; top:7px;">NO. PENDAFTARAN:</label>
            </div>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="no_pendaftaran" required="">
            </div>
          </div>
		  
          <div style="height:10px;"></div>
          <div class="row">
            <div class="col-lg-2">
              <label class="control-label" style="position:relative; top:7px;">NO. LESEN:</label>
            </div>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="no_lesen" required="">
            </div>
          </div>
                </div>
        </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
        </form>
            </div>

          </div>

</body>
<?php
include('include/scripts.php');
?>
</html>
