<?php ob_start('comprimir_pagina'); ?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Servicios | Ferreterías Bolívar</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="https://ferreteriasbolivar.com/assets/img/ferreteria/favicon.jpg" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
  <!--header-->
<?php include('header.php'); ?>
  <!--endheader-->

    <main id="main">
      <div class="fondoa">
           <!-- ======= Servicios ======= -->
    <section id="servicios" class="servicios">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Servicios</h2>
          <p>Magnam dolores commodi suscipit eius consequatur</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <div class="image">
              <img src="http://ferreteriasbolivar.com/assets/img/puntosVenta/img1.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-left">
            <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
              <h3>Voluptatem dignissimos provident quasi corporis</h3>
              <p class="font-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
            </div>
          </div>
        </div>

      </div>
      <!-- Servicio 2-->
      <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Servicios</h2>
        <p>Magnam dolores commodi suscipit eius consequatur</p>
      </div>

      <div class="row">
       
        <div class="col-lg-6" data-aos="fade-left">
          <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
            <h3>Voluptatem dignissimos provident quasi corporis</h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-right">
          <div class="image">
            <img src="http://ferreteriasbolivar.com/assets/img/puntosVenta/img1.jpg" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </div>
    </section><!-- End Servicios Section -->
   </div>
    
  </main><!-- End #main -->
  <?php include('footer.php'); ?>

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
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
  
  <!-- Template Main JS File -->
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