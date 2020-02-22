<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Sawyer Concepts</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <!-- <link href="img/favicon.png" rel="icon"> -->
  <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
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

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="/#algorithms">Algorithms</a></li>
          <li><a href="/#data">Data Science</a></li>
          <li><a href="/#projects">Projects</a></li>
          <li><a href="/#about">About</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>Welcome to Sawyer Concepts</h1>
      <h2>I am a developer interested in Data Science, Software Engineering, and Machine Learning</h2>
      <a href="#algorithms" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- #hero -->

  <main id="main">
    <div id="line_chart" style="width: 900px; height: 500px"></div>

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Regna</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="/lib/jquery/jquery.min.js"></script>
  <script src="/lib/jquery/jquery-migrate.min.js"></script>
  <script src="/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/lib/easing/easing.min.js"></script>
  <script src="/lib/wow/wow.min.js"></script>
  <script src="/lib/waypoints/waypoints.min.js"></script>
  <script src="/lib/counterup/counterup.min.js"></script>
  <script src="/lib/superfish/hoverIntent.js"></script>
  <script src="/lib/superfish/superfish.min.js"></script>


  <!-- Template Main Javascript File -->
  <script src="/js/main.js"></script>
</body>
</html>
