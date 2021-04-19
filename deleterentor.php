<?php
	include('dbconnect.php');	
	$id=$_GET['id'];	
	mysqli_query($conn,"delete from rentor where rentor_Id='$id'");
	header('location:viewRENTOR.php');

?>