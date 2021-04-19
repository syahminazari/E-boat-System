
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

<?php include 'include/header.php'; ?>
<?php include 'include/navbar.php'; ?>



        <div class="container-fluid">


            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Admin Details
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>


      </thead>
      <tbody>
      <?php
      if (isset($_GET['id']))
        $id = $_GET['id'];
      else
        $id_id = 0;
        include('config.php');
$number=1;
        $query=mysqli_query($link,"SELECT  * FROM users


          where id=$id");
      $row=mysqli_fetch_array($query,MYSQLI_ASSOC)
          ?>
          <tr><th>Users Id</th>
              <td><?php echo $row['id'];?></td>
            </tr>
            <tr><th>Username</th>
                <td><?php echo $row['username'];?></td>
              </tr>
              <tr><th>Email</th>
                  <td><?php echo $row['email'];?></td>
                </tr>
              <tr><th>Create Date and Time</th>
                  <td><?php echo $row['created_at'];?></td>
                </tr>




          </tr>

          <?php


      ?>
      </tbody>
    </table>
                    </div>
                </div>
            </div>
        </div>


	<footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; PDHT 2020</div>

            </div>
        </div>
    </footer>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/datatables-demo.js"></script>
</body>
</html>
