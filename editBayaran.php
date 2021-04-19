<?php
	include('dbconnect.php');

	$no_lesen=$_GET['no_lesen'];

	$no_resit=$_POST['no_resit'];
	$date=$_POST['date'];
	$no_tahun=$_POST['no_tahun'];
	$jenis_bot=$_POST['jenis_bot'];
	$capacity=$_POST['capacity'];
	$fee=$_POST['fee'];
	$date_mula=$_POST['date_mula'];
	$date_akhir=$_POST['date_akhir'];


	mysqli_query($conn,"update lesen set no_resit='$no_resit', date='$date', no_tahun='$no_tahun', jenis_bot='$jenis_bot', capacity='$capacity',
	fee='$fee', date_mula='$date_mula', date_akhir='$date_akhir' where no_resit='$no_resit'");
echo ("<script language='JavaScript'>
         window.location.href='viewBayaran.php?no_lesen=$no_lesen';
         window.alert('Update Successful.')
       </script>");

?>
