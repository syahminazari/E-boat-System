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
            CETAK LESEN TAHUNAN</div>
          <div class="card-body">
             <form method="POST" action="insertTable.php">
          <div class="row">
            <div class="col-lg-2">
              <label class="control-label" style="position:relative; top:7px;">No Resit:</label>
            </div>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="no_resit" required="">
            </div>
          </div>
		 
          <div style="height:10px;"></div>
          <div class="row">
            <div class="col-lg-2">
              <label class="control-label" style="position:relative; top:7px;">No Lesen:</label>
            </div>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="no_lesen" required="">
            </div>
          </div>
                </div>
        </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <td><div><a onclick="window.location.href = 'table.php?no_lesen=<?php echo $row['no_lesen'];?>';" data-toggle="modal" class="btn btn-success"><span class="glyphicon glyphicon-trash"></span> View</a></td>
        </form>
            </div>

          </div>

</body>
<?php
include('include/scripts.php');
?>
</html>
