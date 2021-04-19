<?php
	include('dbconnect.php');
	$public_id=$_GET['no_resit'];
	mysqli_query($conn,"delete from lesen where no_resit='$public_id'");
	
	echo ("<script language='JavaScript'>
         window.location.href='javascript:history.back(-2)';
         window.alert('Delete Successful. Please Refresh Your Browser')
       </script>");

?>