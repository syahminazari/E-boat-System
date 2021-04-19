<?php
include "forgot.php";
include "include/header.php";

?>
  <link rel="stylesheet" href="style.css">
    <div class="card-body">
    <h2 class="text-center font-weight-bold">Lupa Kata Laluan</h2><br>
    <h6 class="text-center">Sila masukkan alamat e-mel untuk dapatkan kod pengesahan</h6>
    <form method="post" >
    <div class="input-group mb-3">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          <input type="text" class="form-control" name="Email" placeholder="E-mel">
        </div>
        <?php recover_password(); ?>
        <div class="row">
          <div class="col-6"></div>
          <div class="col-6">
            <button type="submit" class="btn btn-success btn-block" name="btn-recover">Hantar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>

    <!-- /.form-box -->
    <div class = "card-footer">
        <p> <a href="login.php">Log Masuk Disini</a></p>
    </div>

    <footer class="sticky-footer">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <div class="text-muted">Copyright &copy; PDHT 2020</div>
        </div>
      </div>
    </footer>
