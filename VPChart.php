<?php
 $con = mysqli_connect('localhost','root','','umpovs');
?>
<!DOCTYPE HTML>
<html>
<head>
 <meta charset="utf-8">
 <title>OVS | President Result</title>
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {
 var data = google.visualization.arrayToDataTable([

 ['Position','Category'],
 <?php 
			$query = "SELECT voting_opt_id, category_id FROM votes WHERE category_id='3' ORDER BY voting_opt_id";

			 $exec = mysqli_query($con,$query);
			 while($row = mysqli_fetch_array($exec)){

			 echo "['".$row['voting_opt_id']."',".$row['category_id']."],";
			 }
			 ?> 
 
 ]);

var options = {
 title: 'Number of votes for category Vice President',
          pieSliceTextStyle: {
            color: 'black',
          },
          legend: 'none'
 };


var chart = new google.visualization.PieChart(document.getElementById("columnchart12"));
 chart.draw(data,options);
 chart.draw(view, options);
 }

</script>
</head>
<body>
 <div class="container-fluid">
 <div id="columnchart12" style="width: 100%; height: 500px;"></div>
 </div>

</body>
</html>