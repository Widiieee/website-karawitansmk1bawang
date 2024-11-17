<?php
// Koneksi ke database
include 'function.php';

// Query untuk mengambil data berita
$query = "SELECT * FROM berita";
$result = mysqli_query($connect, $query);
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


    <!-- =======================================================
    * Template Name: Moderna
    * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
    * Updated: Aug 07 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->

</head>
<body class="about-page">
<?php include 'layout/navbar.php'; ?>  
    <main class="main">
    <!-- Page Title -->
    <div class="page-title dark-background">
        <div class="container position-relative">
        <h1>Berita</h1>
        <p>Berita terkait Ekstrakurikuler Seni Karawitan dan Pedalangan.</p>
        <nav class="breadcrumbs">
            <ol>
            <li><a href="beranda.php">Beranda</a></li>
            <li class="current">Berita</li>
            </ol>
        </nav>
        </div>
    </div><!-- End Page Title -->
   <!-- Blog Posts Section -->
   <section id="blog-posts" class="blog-posts section">
        <div class="container">
            <div class="row gy-4" data-aos="fade-up">
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <div class="col-lg-4">
                    <article>
                        <div class="post-img">
                            <img src="admin/gambar/<?php echo $row['foto']; ?>" alt="" class="img-fluid">
                        </div>
                        <p class="post-category"><?php echo $row['kategori']; ?></p>
                        <h2 class="title">
                            <a href="kontenberita.php?id=<?php echo $row['id']; ?>"><?php echo $row['judulberita']; ?></a>
                        </h2>
                        <div class="d-flex align-items-center">
                            <div class="post-meta">
                                <p class="post-date">
                                    <time datetime="<?php echo $row['tanggal']; ?>"><?php echo date("M d, Y", strtotime($row['tanggal'])); ?></time>
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
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