<?php
require 'dbconnect.php';
$no_lesen = $_GET['no_lesen'];
$sql = 'DELETE FROM pendaftar WHERE no_lesen=:no_lesen';
$statement = $connection->prepare($sql);
if ($statement->execute([':no_lesen' => $no_lesen])) {
  header("Location: viewProfile.php");
}