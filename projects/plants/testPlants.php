<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        <?php include "getPlantInfo.php"; ?>

        var options = {
          title: 'Temperature and Humidity of the Terrarium',
          legend: {position: 'best' },
          series: {
            0: {targetAxisIndex: 0},
            1: {targetAxisIndex: 1}
          },
          vAxes: {
            0: {title: 'Temperature (°F)'},
            1: {title: 'Humidity (%)'}
          },
          colors: ['#f02222','#2271f0']
        };

        var chart = new google.visualization.LineChart(document.getElementById('line_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="line_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>
