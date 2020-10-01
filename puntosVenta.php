<?php ob_start('comprimir_pagina'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Puntos de Venta | Ferreterías Bolívar</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <link href="assets/img/ferreteria/favicon.jpg" rel="icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
  integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
  crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
  integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
  crossorigin=""></script>
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<?php include('header.php'); ?>
<a name="mapa"></a>mapa
  <main id="main">
    <div class="fondoa">
    <section id="pv" class="pv section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Puntos de venta</h2>
        </div>
        <div id="map"></div>
        <br/>
        <div class="ajTit">
          <div class="section-title">
            <a name="nuestrosLocales"></a>
            <h2>Nuestros locales</h2>
          </div>
        </div>
        <br><br>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="pic">
                <a href="#mapa" id="matriz"><img src="assets/img/puntosVenta/img1.jpg" class="img-fluid" alt="" onClick="abrirUbicacion(0)"></a>
              </div>
              <div class="member-info">
                <h4>Matriz</h4>
              </div>
            </div>
          </div>
        <div></div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="pic">
                <a href="#mapa" id="sucursal1"><img src="assets/img/puntosVenta/img2.jpg" class="img-fluid" alt="" onClick="abrirUbicacion(1)"></a>
              </div>
              <div class="member-info">
                <h4>Sucursal 1</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="member">
                <div class="pic">
                  <a href="#mapa" id="sucursal2"><img src="assets/img/puntosVenta/img3.jpg" class="img-fluid" alt="" onClick="abrirUbicacion(2)"></a>
                </div>
                <div class="member-info">
                  <h4>Sucursal 2</h4>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
    </div>
  </main>
  <?php include('footer.php'); ?>
  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/js/mapa.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>
<?php
ob_end_flush(); 
function comprimir_pagina($buffer) { 
    $busca = array('/\>[^\S ]+/s','/[^\S ]+\</s','/(\s)+/s'); 
    $reemplaza = array('>','<','\\1'); 
    return preg_replace($busca, $reemplaza, $buffer); 
} 
?>