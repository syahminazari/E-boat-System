<?php
require_once("dbconnect.php");
$nama = $conn->real_escape_string($_POST['nama']);
$ic = $conn->real_escape_string($_POST['ic']);
$phone = $conn->real_escape_string($_POST['phone']);
$alamat = $conn->real_escape_string($_POST['alamat']);
$no_pendaftaran = $conn->real_escape_string($_POST['no_pendaftaran']);
$no_lesen = $conn->real_escape_string($_POST['no_lesen']);

$sql="INSERT INTO pendaftar (nama, no_ic, no_tel, alamat, no_pendaftaran, no_lesen)
VALUES ('".$nama."','".$ic."','".$phone."', '".$alamat."', '".$no_pendaftaran."', '".$no_lesen."')";

/*if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "<script> alert('Successful Add New Registration.');
           window.location.href='viewFee2.php';</script>";
}*/

if(!$result = $conn->query($sql)){
die("<script> alert('Nombor lesen telah wujud!');
           window.location.href='daftarlesen.php';</script>");
}
else
{
echo "<script> alert('Pendaftaran Berjaya!');
           window.location.href='viewFee2.php';</script>";
}

?>
