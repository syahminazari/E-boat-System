<?php
// Initialize the session
session_start();

/*/Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  echo "<script> alert('You need login to access this pages');
  window.location.href='login.php';</script>";
    exit;
}*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-Boat System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }

        .header img {
          float: center;
          margin-top: 18px;
          width: 100px;
          height: 100px;
          background: #FFFFFF;
        }

        .header h1 {
          position: inherit;
          top: 18px;
          left: 10px;
          font-family: fantasy;
        }

        .page-header h1 {
          position: inherit;
          top: 10px;
          left: 10px;
          font-family: sans-serif;
          font-size: 25px;
          font-variant: small-caps;
        }

        .footer div {
          position:absolute;
           bottom:0;
           width:100%;
           height:50px;
           background-color: #e5e5ff 100px;

        }


    </style>
</head>
<body>

  <div class="header">
    <img src="include/img/logo.png" alt="logo">
    <h1>PEJABAT DAERAH</h1>
    <h1>HULU TERENGGANU</h1>

  </div>

    <div class="page-header">
        <h1>selamat datang ke e-boat system</h1>
    </div>
    <p>
        <a href="login.php" class="btn btn-warning">Log Masuk</a>
        <a href="register.php" class="btn btn-danger">Anda Belum Mempunyai Akaun? Tambah Akaun</a>
    </p>

      <br></br>
      <br></br>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                  <div class = "footer">
                    <div class="text-muted">Copyright &copy; PDHT 2020</div>
                  </div>

                </div>
            </div>
        </footer>

</body>
</html>
