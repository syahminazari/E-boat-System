<?php
	include('dbconnect.php');
	$no_lesen=$_GET['no_lesen'];
	mysqli_query($conn,"delete from pendaftar where no_lesen='$no_lesen'");
	echo "<script> alert('Delete Successful');
	window.location.href='viewFee2.php';</script>";

?>