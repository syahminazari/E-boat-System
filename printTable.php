<?php
//print_table.php
if (isset($_GET['no_lesen']))
        $no_lesen = $_GET['no_lesen'];
      else
        $no_lesen = 0;
		require_once 'pdf.php';
        include('dbconnect.php');
        $number=1;
        $query=mysqli_query($conn,"SELECT  p.no_lesen FROM pendaftar p
          INNER JOIN lesen n ON p.no_lesen = n.no_lesen
          

          where p.no_lesen && n.no_lesen=$no_lesen");
		  $row=mysqli_fetch_array($query,MYSQLI_ASSOC)
?>         
		      
	  <tr><th>NO LESEN:</th>
              <td><?php echo $row['no_lesen'];?></td>
            </tr> 
		