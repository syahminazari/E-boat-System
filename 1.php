<?php

include "dbconnect.php";



$acname= $_POST['acname'];
$acdetail= $_POST['acdetail'];
$pname= $_POST['pname'];
$pic= $_POST['pic'];
$pemail= $_POST['pemail'];
$pphone = $_POST['pphone'];
$paddress = $_POST['paddress'];
$attend_name = $_POST['avenue'];
$attend_detail = $_POST['astatus'];

$sql = "INSERT INTO activity (activity_name, activity_description)
VALUES ('$acname', '$acdetail')";

if ($conn->query($sql) === TRUE) {
    $activity_id = $conn->insert_id;
echo 'success put activity';


    $sSqlMas = "INSERT INTO `public` (`public_name`, `public_ic`,`public_email`, `public_phone`,`public_address`) VALUES ('$pname', '$pic','$pemail', '$pphone', '$paddress')";

    if ($conn->query($sSqlMas) === TRUE) {
      echo 'success put public';
      $public_id = $conn->insert_id;
    } else {
      echo "Error: " . $sSqlMas . "<br>" . $conn->error;
    }



    $sSqlMass = "INSERT INTO `attend` (`public_id`, `activity_id`,`attend_name`, `attend_detail`) VALUES ('$public_id', '$activity_id','$attend_name', '$attend_detail')";

    if ($conn->query($sSqlMass) === TRUE) {
        echo 'success';
      $attend_id = $conn->insert_id;
    } else {
        echo "Error: " . $sSqlMass . "<br>" . $conn->error;
    }

    /************** Update FK ***************/
    $update_sql = "UPDATE attend SET public_id ='$public_id', activity_id ='$activity_id' WHERE attend_id = '$attend_id'";
    if ($conn->query($update_sql) === TRUE) {
        echo 'Successfully Update';

    } else {
        echo "Error: " . $update_sql. "<br>" . $conn->error;
    }


} else {
    echo "Error: " . $sSql . "<br>" . $conn->error;
}

$conn->close();
?>
