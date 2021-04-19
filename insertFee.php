
<?php
/*

include 'dbconnect.php';
$no_lesen=$_POST['no_lesen'];
$no_resit=$_POST['no_resit'];
$date=$_POST['date'];
$no_tahun=$_POST['no_tahun'];
$jenis_bot=$_POST['jenis_bot'];
$capacity=$_POST['capacity'];
$fee=$_POST['fee'];
$date_mula=$_POST['date_mula'];
$date_akhir=$_POST['date_akhir'];

$sql="INSERT INTO `lesen` (`no_lesen`, `no_resit`, `date`, `no_tahun`, `jenis_bot`, `capacity`, `fee`, `date_mula`, `date_akhir`)
VALUES ('$no_lesen', '$no_resit', '$date', '$no_tahun', '$jenis_bot', '$capacity', '$fee', '$date_mula', '$date_akhir')";

echo ("<script language='JavaScript'>
         window.location.href='viewBayaran.php?no_lesen=$no_lesen';
         window.alert('Add Successful.')
       </script>");
*/
?>



<?php
require_once("dbconnect.php");
$no_lesen = $conn->real_escape_string($_POST['no_lesen']);
$no_resit = $conn->real_escape_string($_POST['no_resit']);
$date = $conn->real_escape_string($_POST['date']);
$no_tahun = $conn->real_escape_string($_POST['no_tahun']);
$jenis_bot = $conn->real_escape_string($_POST['jenis_bot']);
$capacity = $conn->real_escape_string($_POST['capacity']);
$fee = $conn->real_escape_string($_POST['fee']);
$date_mula = $conn->real_escape_string($_POST['date_mula']);
$date_akhir = $conn->real_escape_string($_POST['date_akhir']);

$sql="INSERT INTO lesen (no_lesen, no_resit, date, no_tahun, jenis_bot, capacity, fee, date_mula, date_akhir)
VALUES ('".$no_lesen."','".$no_resit."','".$date."', '".$no_tahun."', '".$jenis_bot."', '".$capacity."', '".$fee."', '".$date_mula."', '".$date_akhir."')";

if(!$result = $conn->query($sql)){
die("<script> alert('Nombor Resit telah wujud!');
           window.location.href='registerFee.php';</script>");
}
else
{
echo "<script> alert('Berjaya Daftar Bayaran.');
           window.location.href='viewFee2.php';</script>";
}
?>
