<?php
  include 'forgot.php';

  $Email = $_SESSION["Email"];

  // Header
  include 'include/header.php';
?>

    <!--card body -->
    <div class="card-body">
      <h2 class="text-center font-weight-bold">Kod Pengesahan</h2><br>
      <p class="login-box-msg">Sila masukkan kod pengesahan untuk pengesahan akaun</p>

      <form method="post" id="validate" >
        <div class="input-group mb-3">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-key"></span>
            </div>
          </div>
          <input type="text" class="form-control" name='validate_code' placeholder="Kod Pengesahan" required="" oninvalid="this.setCustomValidity('Sila Masukkan Kod Pengesahan')" oninput="setCustomValidity('')">
        </div>
        <!-- function for validate the code that send via email -->
        <?php validate($Email); ?>

        <div class="row">
          <div class="col-8"></div>
          <!-- /.col -->
          <div class="col-4">
            <button class="btn btn-success float-right" name="btn-validate"> Hantar </button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.card -->

<?php include "footer.php" ?>
