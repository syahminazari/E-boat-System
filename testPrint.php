<?php 
//index.php
//include autoloader

require_once 'dompdf/autoload.inc.php';

//reference the Dompdf namespace

use Dompdf\Dompdf;

//initialize dompdf class

$document=new Dompdf();


	<style>
	table 
		{
			font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
		}
		  
	td, th 
		{
		    border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

	tr:nth-child(even) 
		{
			background-color: #dddddd;
		}
		
	</style>
	<!DOCTYPE html>
	<head></head>

	<body>
	<!--Table tahun kedua-->
		<div>
		<table width="50%" border="3"> 
			<thead>
			<th colspan="4" height="35px">TAHUN KEDUA</th>
			</thead>
			
			<td style="border:0">
			<table width="100%"> 
				<tr>
				<td width="20%" height="30px">Fee dibayar RM:</td>
				<td width="30%" height="30px"><?php echo $row['fee']; ?></td>
				<td width="20%" height="30px">No. Resit:</td>
				<td width="30%" height="30px"><?php echo $row['no_resit']; ?></td>
				</tr>
				<tr>
				<td width="20%" height="30px">Mulai dari:</td>
				<td width="30%" height="30px"><?php echo $row['date_mula']; ?></td>
				<td width="20%" height="30px">Hingga:</td>
				<td width="30%" height="30px"><?php echo $row['date_akhir']; ?></td>
				</tr>
				<tr>
				<td width="20%" height ="30px">Bertarikh:</td>
				<td width="30%" height ="30px"><?php echo $row['date']; ?></td>
				</tr>
				<tr>
				<td width="20%" colspan="2"></td>
				<td width="30%" colspan="2"  rowspan="3" style="text-align: center" height ="60px">(Pegawai Pelesenan)</td>
				</tr>
				<tr>
				<td width="20%" colspan="2"></td>
				</tr>
			</table>
			</td>
		</table>
		</div>

		<!--table tahun ketiga-->
		<div>
		<table width="50%" border="3"> 
			<thead>
			<th colspan="4" height="35px">TAHUN KETIGA</th>
			</thead>
			
			<td style="border:0">
			<table width="100%"> 
				<tr>
				<td width="20%" height="30px">Fee dibayar RM:</td> 
				<td width="30%" height="30px"><?php echo $row['fee']; ?></td>
				<td width="20%" height="30px">No. Resit:</td>
				<td width="30%" height="30px"><?php echo $row['no_resit']; ?></td>
				</tr>
				<tr>
				<td width="20%" height="30px">Mulai dari:</td>
				<td width="30%" height="30px"><?php echo $row['date_mula']; ?></td>
				<td width="20%" height="30px">Hingga:</td>
				<td width="30%" height="30px"><?php echo $row['date_akhir']; ?></td>
				</tr>
				<tr>
				<td width="20%" height ="30px">Bertarikh:</td>
				<td width="30%" height ="30px"><?php echo $row['date']; ?></td>
				</tr>
				<tr>
				<td width="20%" colspan="2"></td>
				<td width="30%" colspan="2"  rowspan="3" style="text-align: center" height ="60px">(Pegawai Pelesenan)</td>
				</tr>
				<tr>
				<td width="20%" colspan="2"></td>
				</tr>
			</table>
			</td>
		</div>
			
			
		<!--table tahun keempat-->
		<div>
		<table width="50%" border="3"> 
			<thead>
			<th colspan="4" height="35px">TAHUN KEEMPAT</th>
			</thead>
			
			<td style="border:0">
			<table width="100%"> 
				<tr>
				<td width="20%" height="30px">Fee dibayar RM:</td>
				<td width="30%" height="30px"><?php echo $row['fee']; ?></td>
				<td width="20%" height="30px">No. Resit:</td>
				<td width="30%" height="30px"><?php echo $row['no_resit']; ?></td>
				</tr>
				<tr>
				<td width="20%" height="30px">Mulai dari:</td>
				<td width="30%" height="30px"><?php echo $row['date_mula']; ?></td>
				<td width="20%" height="30px">Hingga:</td>
				<td width="30%" height="30px"><?php echo $row['date_akhir']; ?></td>
				</tr>
				<tr>
				<td width="20%" height ="30px">Bertarikh:</td>
				<td width="30%" height ="30px"><?php echo $row['date']; ?></td>
				</tr>
				<tr>
				<td width="20%" colspan="2"></td>
				<td width="30%" colspan="2"  rowspan="3" style="text-align: center" height ="60px">(Pegawai Pelesenan)</td>
				</tr>
				<tr>
				<td width="20%" colspan="2"></td>
				</tr>
			</table>
			</td>
			
		</table>
		</div>

		<!--table tahun kelima-->
		<div>
		<table width="50%" border="3"> 
			<thead>
			<th colspan="4" height="35px">TAHUN KELIMA</th>
			</thead> 
			<tbody>
			<td style="border:0">
			<table width="100%"> 
				<tr>
				<td width="20%" height="30px">Fee dibayar RM:</td>
				<td width="30%" height="30px"><?php echo $row['fee']; ?></td></td>
				<td width="20%" height="30px">No. Resit:</td>
				<td width="30%" height="30px"><?php echo $row['no_resit']; ?></td>
				</tr>
				<tr>
				<td width="20%" height="30px">Mulai dari:</td>
				<td width="30%" height="30px"><?php echo $row['date_mula']; ?></td>
				<td width="20%" height="30px">Hingga:</td>
				<td width="30%" height="30px"><?php echo $row['date_akhir']; ?></td>
				</tr>
				<tr>
				<td width="20%" height ="30px">Bertarikh:</td>
				<td width="30%" height ="30px"><?php echo $row['date']; ?></td>
				</tr>
				<tr>
				<td width="20%" colspan="2"></td>
				<td width="30%" colspan="2"  rowspan="3" style="text-align: center" height ="60px">(Pegawai Pelesenan)</td>
				</tr>
				<tr>
				<td width="20%" colspan="2"></td>
				</tr>
				
			</table>
			</td>
		</table>
		</div>
	</body>	
		
		//$document->loadHtml($html);
		$page=file_getcontents(table.php);
		
		//$document->loadHtml($page);
		
		
	
	
		  
		  
?>