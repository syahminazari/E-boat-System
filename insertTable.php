<?php


include 'dbconnect.php';
$no_lesen=$_POST['no_lesen'];
$no_resit=$_POST['no_resit'];
$date=$_POST['date'];
$fee=$_POST['fee'];
$date_mula=$_POST['date_mula'];
$date_akhir=$_POST['date_akhir'];

$sql="INSERT INTO `report` (`no_lesen`, `no_resit`, `date`, `fee`, `date_mula`, `date_akhir`) VALUES ('$no_lesen', '$no_resit', '$date', '$fee', '$date_mula', '$date_akhir')";

if ($conn->query($sql) === TRUE) {
  echo 'Add Successful';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
{
header ('location: table.php');
}

?>
