<?php
	include('dbconnect.php');

	$no_lesen=$_GET['no_lesen'];

	$nama=$_POST['nama'];
	$no_ic=$_POST['no_ic'];
	$no_tel=$_POST['no_tel'];
	$alamat=$_POST['alamat'];
	$no_pendaftaran=$_POST['no_pendaftaran'];
	$no_lesen=$_POST['no_lesen'];


	mysqli_query($conn,"update pendaftar set nama='$nama', no_ic='$no_ic', no_tel='$no_tel', alamat='$alamat', no_pendaftaran='$no_pendaftaran', no_lesen='$no_lesen' where no_lesen='$no_lesen'");
echo ("<script language='JavaScript'>
         window.location.href='viewProfile.php?no_lesen=$no_lesen';
         window.alert('Update Successful.')
       </script>");
?>
 
