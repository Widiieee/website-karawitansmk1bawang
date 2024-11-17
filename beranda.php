<?php
include 'function.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

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

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- =======================================================
    * Template Name: Moderna
    * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
    * Updated: Aug 07 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    <style>
        /* Add spacing between each article row */
        .row.gy-4 {
            margin-bottom: 2rem;
        }
    </style>

</head>
<body class="index-page">
<?php include 'layout/navbar.php'; ?>
    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <!-- <img src="assets/img/header1.jpg" alt="" data-aos="fade-in"> -->
            <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                <div class="container position-relative">
                    <!-- Carousel Items -->
                    <div class="container position-relative">
                        <!-- Carousel Item 1 -->
                        <div class="carousel-item active">
                            <div class="carousel-container">
                                <h2>Seni Karawitan dan Pedalangan</h2>
                                <p>Ekstrakurikuler Seni Karawitan dan Pedalangan. Merupakan sarana pembelajaran dan pelestarian budaya Jawa khususnya di bidang seni karawitan dan seni pedalangan.</p>
                                <a href="profil.php" class="btn-get-started">Selengkapnya</a>
                            </div>
                        </div>
                        <!-- Carousel Item 2 -->
                        <div class="carousel-item">
                            <div class="carousel-container">
                                <h2>Hamemayu Lestarining Budaya</h2>
                                <p>Dengan mengusung slogan "Hamemayu Lestarining Budaya", kami bertekad menjaga keberlangsungan warisan budaya Nusantara agar terus hidup dan berkembang di kalangan generasi muda.</p>
                                <a href="profil.php" class="btn-get-started">Selengkapnya</a>
                            </div>
                        </div>
                        <!-- Carousel Item 3 -->
                        <div class="carousel-item">
                            <div class="carousel-container">
                                <h2>Anak Bangsa Yang Berbudaya</h2>
                                <p>Diharapkan dengan adanya ekstrakurikuler ini, siswa siswi SMKN 1 Bawang diharapkan membentuk karakter bangsa yang berbudaya dan ikut serta dalam pelestarian budaya yang ada di Indonesia. <b>Jadilah Bagian Dari Kami.</b></p>
                                <a href="pendaftaran.php" class="btn-get-started">Pendaftaran</a>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel Controls -->
                    <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </section>
        <!-- End Hero Section -->

        <!-- Featured Services Section -->
        <section id="featured-services" class="featured-services section">
        <div class="container">
        <div class="row gy-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-cyan position-relative">
                <div class="icon">
                <i class="fa-solid fa-image fa-xl"></i>
                </div>
                <a href="galeri.php" class="stretched-link">
                <h3>Galeri</h3>
                </a>
                <p>Dokumentasi dari kegiatan-kegiatan ekstrakurikuler seni karawitan dan pedalangan.</p>
            </div>
            </div><!-- End Service Item -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item item-orange position-relative">
                <div class="icon">
                <i class="fa-regular fa-newspaper fa-xl"></i>
                </div>
                <a href="berita.php" class="stretched-link">
                <h3>Berita</h3>
                </a>
                <p>Berita terkait lomba, acara maupun prestasi yang telah diraih oleh ekstrakurikuler seni karawitan dan pedalangan.</p>
            </div>
            </div><!-- End Service Item -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
                <div class="icon">
                <i class="fa-solid fa-user-group fa-xl"></i>
                </div>
                <a href="anggota.php" class="stretched-link">
                <h3>Anggota</h3>
                </a>
                <p>Struktur kepengurusan ekstrakurikuler seni karawitan dan pedalangan.</p>
            </div>
            </div><!-- End Service Item -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item item-red position-relative">
                <div class="icon">
                <i class="fa-solid fa-phone fa-xl"></i>
                </div>
                <h3>Kontak</h3>
                </a>
                <p>Hubungi kami untuk informasi lebih lanjut.</p>
                <a href="kontak.php" class="stretched-link"></a>
            </div>
            </div><!-- End Service Item -->
        </div>
        </div>
    </section><!-- /Featured Services Section -->
         
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