<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title><style type="text/css">
<!--
.style3 {font-size: 18px}
.style4 {font-size: 18px; font-weight: bold; }
-->
</style></head>

<?php
		if (isset($_GET['mem_ic']))
			$memberIC = $_GET['mem_ic'];
		else
			$memberIC = 0;
		
		include 'dbconnect.php';
		
		
		$query = "SELECT `rent`.*,`member`.*,`asset`.* FROM `rent`
		LEFT JOIN `member` ON `member`.`mem_ic` = `rent`.`mem_ic`
		RIGHT JOIN `asset` ON `asset`.`asset_id` = `rent`.`asset_id`
		WHERE `rent`.`mem_ic` =  '$memberIC'";
	
		$query1 = "SELECT `rent`.*,`member`.*,`asset`.* FROM `rent`
		LEFT JOIN `member` ON `member`.`mem_ic` = `rent`.`mem_ic`
		RIGHT JOIN `asset` ON `asset`.`asset_id` = `rent`.`asset_id`
		WHERE `rent`.`mem_ic` =  '$memberIC'";
		 
		$result = mysqli_query($conn,$query) or die('SQL error');
		$result1 = mysqli_query($conn,$query1) or die('SQL error2');
		$row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)

		?>
<body>
<div align="center">
  <p><strong><span class="style3">MAKLUMAT PENYEWA</span></strong></p>
  <table width="450" border="1">
	 <tr>
      <th width="158" scope="row"><div align="right">IC PENYEWA </div></th>
      <td>&nbsp; <?php echo $row1['mem_ic']; ?></td>
    </tr>
    <tr>
      <th width="158" scope="row"><div align="right">NAMA PENYEWA </div></th>
      <td>&nbsp; <?php echo $row1['mem_name']; ?></td>
    </tr>
    <tr>
      <th scope="row"><div align="right">NO TELEFON </div></th>
      <td>&nbsp; <?php echo $row1['mem_phone']; ?></td>
    </tr>
  </table>
  
  <p><strong><span class="style3"></span></strong></p>
  <table width="715" border="1">
    <tr>
      <th width="36" scope="row"><div align="center">NO</div></th>
	  <td width="81"><div align="center"><strong>RESIT NO </strong></div></td>
	  <td width="81"><div align="center"><strong>NAMA ASET </strong></div></td>
      <td width="136"><div align="center"><strong>TARIKH SEWA </strong></div></td>
      <td width="142"><div align="center"><strong>HARGA SEWAAN </strong></div></td>
      <td width="88"><div align="center"><strong>BAYARAN</strong></div></td>
	  <td width="192"><div align="center"><strong>TARIKH BAYARAN</strong></div></td>
		
    </tr>
    <tr>
	<?php 
		 $count = 0;
		 while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		 {
	?>
	
      <td><div align="center"><?php $count = $count+1; print($count);?></div></td>
	  <td><div align="center"><?php echo $row['rent_receipt_no'];?></div></td>
	  <td><div align="center"><?php echo $row['asset_name'];?></div></td>
      <td><div align="center"><?php echo $row['rent_dateStart'];?></div></td>
      <td><div align="center"><?php echo $row['rent_totalprice'];?></div></td>
      <td><div align="center"><?php echo $row['rent_payment'];?></div></td>
	  <td><div align="center"><?php echo $row['rent_payDate'];?></div></td>
    </tr>
	<tr>
	<?php
		   }
	?>
	</tr>
  </table>
  <p class="style4">&nbsp;</p>
</div>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
</body>
</html>