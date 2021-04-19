<?php
if (isset($_GET['no_lesen']))
        $no_lesen = $_GET['no_lesen'];
      else
        $no_lesen = 0;

        //echo "No Lesen: " .$no_lesen;die();

		require_once 'pdf.php';
        include('dbconnect.php');
        $number=1;

        $query = "SELECT * FROM `lesen` WHERE `no_lesen`='$no_lesen' AND `no_resit` NOT IN (SELECT MIN(`no_resit`) FROM `lesen` WHERE `no_lesen`='$no_lesen')";
        $result = mysqli_query($conn,$query) or die('SQL error');


?>

<!DOCTYPE html>
<head></head>

<body>

 <!--?php

		if (isset($_GET['no_resit']))
			$no_resit = $_GET['no_resit'];
		else
			$no_resit = 0;

         include('dbconnect.php');
		 require_once 'pdf.php';
		$number = 1;
       $query=mysqli_query($conn,"select * from `lesen`");

        while($row=mysqli_fetch_array($query)){
		}
		?-->

<!--Table tahun kedua-->
<div>
    <?php
    $count = 1;
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
    ?>
    <table width="50%" border="3">
        <thead>
            <th colspan="4" height="35px">TAHUN KE- <?php echo $row['no_tahun']; ?></th>
        </thead>

        <td style="border:0">
            <table width="100%">
                <tr>
                <td width="20%" height="30px">Fee dibayar RM</td>
                <td width="30%" height="30px">: <?php echo $row['fee']; ?></td>
                <td width="20%" height="30px">No. Resit</td>
                <td width="30%" height="30px">: <?php echo $row['no_resit']; ?></td>
                </tr>
                <tr>
                <td width="20%" height="30px">Mulai dari</td>
                <td width="30%" height="30px">: <?php echo $row['date_mula']; ?></td>
                <td width="20%" height="30px">Hingga</td>
                <td width="30%" height="30px">: <?php echo $row['date_akhir']; ?></td>
                </tr>
                <tr>
                <td width="20%" height ="30px">Bertarikh</td>
                <td width="30%" height ="30px">: <?php echo $row['date']; ?></td>
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
    </table><br/>
    <?php
                    }
                    ?>
</div>
<!--button back-->

<!--<div>
<p align="center"/>
<button type="button" class="btn btn-primary"onclick="window.location.href = 'registerTable.php';"><span class="glyphicon glyphicon-floppy-disk"></span> BACK</div>-->

</body>

</html>
