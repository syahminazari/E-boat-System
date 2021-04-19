<?php
//print_table.php
if (isset($_GET["pdf"]) && isset($_GET["no_lesen]))

{
	require_once 'pdf.php';
	include('dbconnect.php');
	$query=mysqli_query($conn,"SELECT  p.no_lesen FROM pendaftar p
          INNER JOIN lesen n ON p.no_lesen = n.no_lesen
          

          where p.no_lesen && n.no_lesen=$no_lesen");
         
		 
      $row=mysqli_fetch_array($query,MYSQLI_ASSOC)
	  
	  {
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

		?>