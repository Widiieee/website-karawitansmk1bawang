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

    <!-- Fonts & CSS Files -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
</head>
<body class="about-page">
    <?php include 'function.php'; ?>  
    <?php include 'layout/navbar.php'; ?>  

    <main class="main">
        <!-- Page Title -->
        <div class="page-title dark-background">
            <div class="container position-relative">
                <h1>Galeri Ekstra Karawitan</h1>
                <p>Selamat datang di galeri ekstra karawitan! di sini, kamu bisa lihat semua momen seru saat kita belajar dan berlatih alat musik tradisional.</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="beranda.php">Beranda</a></li>
                        <li class="current">Galeri</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">
            <div class="container">
                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">Kegiatan</li>
                    </ul>

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                    <?php
                    // Query untuk mengambil data galeri
                    $sql = "SELECT * FROM galeri";
                    $result = $connect->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">';
                            echo '  <div class="portfolio-content h-100">';
                            echo '    <img src="admin/gambar/' . htmlspecialchars($row['foto']) . '" class="img-fluid" alt="' . htmlspecialchars($row['judul']) . '">';
                            echo '    <div class="portfolio-info">';
                            echo '      <h4>' . htmlspecialchars($row['judul']) . '</h4>';
                            echo '      <p>' . htmlspecialchars($row['deskripsi']) . '</p>';
                            echo '      <br>';
                            echo '      <h4>' . htmlspecialchars($row['tanggal']) . '</h4>';
                            echo '      <a href="admin/gambar/' . htmlspecialchars($row['foto']) . '" title="' . htmlspecialchars($row['judul']) . '" data-gallery="portfolio-gallery-app" class="preview-link"><i class="bi bi-zoom-in"></i></a>';
                            echo '    </div>';
                            echo '  </div>';
                            echo '</div>';
                        }
                    } else {
                        echo "<p>Tidak ada kegiatan yang ditemukan.</p>";
                    }
                    // Tutup koneksi database
                    $connect->close();
                    ?>
                    </div><!-- End Portfolio Container -->
                </div>
            </div>
        </section>
    </main>
    <?php 
    include 'layout/footer.php';
    ?>

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
    <script src="assets/js/main.js"></script>
</body>
</html>
