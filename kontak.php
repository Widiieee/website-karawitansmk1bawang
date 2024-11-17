<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Setyo Laras</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Moderna
    * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
    * Updated: Aug 07 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->

</head>
<body class="about-page">
<?php 
include 'function.php';
include 'layout/navbar.php'; 
?>  
    <main class="main">
    <!-- Page Title -->
    <div class="page-title dark-background">
        <div class="container position-relative">
        <h1>Kontak dan Sosial Media Kami</h1>
        <p>Hubungi kami untuk informasi lebih lanjut.</p>
        <nav class="breadcrumbs">
            <ol>
            <li><a href="beranda.php">Beranda</a></li>
            <li class="current">Kontak</li>
            </ol>
        </nav>
        </div>
    </div><!-- End Page Title -->
    <?php

    // Ambil data dari tabel dataprofil
    $sql = "SELECT * FROM kontak"; 
    $result = $connect->query($sql);

    $dataProfil = [];
    if ($result->num_rows > 0) {
        // Simpan data ke dalam array
        while ($row = $result->fetch_assoc()) {
            $kontak[] = $row;
        }
    }
    ?>
    <section id="contact" class="contact section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div>
            <div class="row gy-4">
              <div>
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Alamat</h3>
                  <?php
                  foreach ($kontak as $row) {
                      echo "<p>" . $row['alamatsekolah'] . "</p>";
                  }
                  ?>
                </div>
              </div><!-- End Info Item -->
              <div>
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>No Telepon</h3>
                  <?php
                  foreach ($kontak as $row) {
                      echo "<p><a href='tel:" . htmlspecialchars($row['no_hp']) . "'>" . htmlspecialchars($row['no_hp']) . "</a></p>";
                  }
                  ?>

                </div>
              </div><!-- End Info Item -->
              <div>
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email</h3>
                  <?php
                    foreach ($kontak as $row) {
                        echo "<p><a href='mailto:" . htmlspecialchars($row['email']) . "'>" . htmlspecialchars($row['email']) . "</a></p>";
                    }
                    ?>
                </div>
              </div><!-- End Info Item -->
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                  <h2>Sosial Media</h2><br>
                  <i class="bi bi-youtube"></i>
                  <h3>YouTube</h3>
                  <?php
                    foreach ($kontak as $row) {
                        echo "<p><a href='" . htmlspecialchars($row['youtube']) . "'>" . htmlspecialchars($row['youtube']) . "</a></p>";
                    }
                    ?><br>
                  <i class="bi bi-instagram"></i>
                  <h3>Instagram</h3>
                  <?php
                    foreach ($kontak as $row) {
                        echo "<p><a href='" . htmlspecialchars($row['instagram']) . "'>" . htmlspecialchars($row['instagram']) . "</a></p>";
                    }
                    ?>
                </div>
              </div><!-- End Info Item -->
            </div>
          </div>
          <!-- End Contact Form -->
        </div>
      </div>
      <div class="mt-5" data-aos="fade-up" data-aos-delay="200">
        <div>
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.6009131751644!2d109.65089927318742!3d-7.398534572842335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aabe78ba4d27d%3A0xf0651677564da8be!2sSMK%20Negeri%201%20Bawang!5e0!3m2!1sid!2sid!4v1730688673256!5m2!1sid!2sid"
                width="600" 
                height="450" 
                style="border:0; width: 100%; height: 370px;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                frameborder="0">
            </iframe>
        </div>
    </div><!-- End Google Maps -->
    </section>
    <!-- /Contact Section -->
    <?php include 'layout/footer.php'; ?>  
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
</body>
</html>