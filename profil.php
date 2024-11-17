<?php include 'function.php';?>
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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <style>
        /* Add spacing between each article row */
        .row.gy-4 {
            margin-bottom: 2rem;
        }
    </style>
</head>
<body class="about-page">
<?php include 'layout/navbar.php'; ?>  
    <main class="main">
    <!-- Page Title -->
    <div class="page-title dark-background">
        <div class="container position-relative">
        <h1>Tentang Kami</h1>
        <p>Profil singkat terkait dengan ekstrakurikuler Seni Karawitan dan Pedalangan SMKN 1 Bawang.</p>
        <nav class="breadcrumbs">
            <ol>
            <li><a href="beranda.php">Beranda</a></li>
            <li class="current">Tentang Kami</li>
            </ol>
        </nav>
        </div>
    </div><!-- End Page Title -->
    
    <!-- About Section -->
    <?php
        // Ambil data dari tabel dataprofil
        $sql = "SELECT * FROM dataprofil"; 
        $result = $connect->query($sql);

        $dataProfil = [];
        if ($result->num_rows > 0) {
            // Simpan data ke dalam array
            while ($row = $result->fetch_assoc()) {
                $dataProfil[] = $row;
            }
        }
        ?>

        <section id="about" class="about section light-background">
        <div class="container">
            <div class="row gy-4" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                <div class="content" data-aos="fade-up" data-aos-delay="200">
                    <h3 style="font-size: 1.75rem; font-weight: 700; margin: 0;">
                        Profil Singkat Tentang Ekstrakurikuler Seni Karawitan dan Pedalangan SMKN 1 Bawang <br>
                        <b>"Setyo Laras"</b><br>
                    </h3>
                </div>
                <div class="position-relative align-self-start" data-aos="fade-up" data-aos-delay="100" 
                    style="display: flex; justify-content: center; margin-top: 20px;">
                    <img src="assets/img/profilYT.png" class="img-fluid" alt="" style="max-width: 80%; height: auto;">
                    <a href="https://youtu.be/U8MinkySqW4?si=UjlHId1Mcv3jHXni" target="_blank" 
                    class="pulsating-play-btn" style="position: absolute;"></a>
                </div>
            </div>
        </div>
        </section>

        <section id="features" class="features section light-background">
            <div class="container">

            <div class="row gy-4 align-items-center features-item">
            <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                <img src="assets/img/fotodeskripsi.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                <?php
                foreach ($dataProfil as $row) {
                echo "<h3>" . $row['juduldeskripsi'] . "</h3><br>";
                echo "<p>" . $row['deskirpsiekstra'] . "</p>";
                }
                ?>
            </div>
            </div>

            <div class="row gy-4 align-items-center features-item">
            <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="assets/img/fotolatarbelakang.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
            <?php
                foreach ($dataProfil as $row) {
                echo "<h3>" . $row['judullatarbelakang'] . "</h3><br>";
                echo "<p>" . $row['latarbelakang'] . "</p>";
                }
                ?>
            </div>
            </div>
            </div>
        </section>

    <?php $connect->close(); ?>

    <!-- /About Section -->
</main>
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
