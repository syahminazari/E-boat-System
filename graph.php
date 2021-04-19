<?php

include 'dbconnect.php';
$query= "SELECT s.public_name ,hp.progress_mark FROM public s INNER JOIN progress hp on s.public_id = hp.public_id INNER JOIN activity h on hp.activity_id = h.activity_id ";


$res=$conn->query($query)





 ?>




<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Name', 'Mark'],
<?php
while($row=$res->fetch_assoc())
{

echo "['".$row['public_name']."',".$row['progress_mark']."],";




}









?>
        ]);

        var options = {
          title: 'PUBLIC PROGRESS MARK'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
