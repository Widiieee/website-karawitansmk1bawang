<?php
    session_start();

    if (!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
        echo "<script>
        alert('Anda harus login terlebih dahulu!');
        window.location.href = '../login.php';
        </script>";
        exit;
    }

    // Koneksi ke database
    include '../function.php';

    // Mengambil jumlah siswa yang mendaftar
    $siswa_sql = "SELECT COUNT(*) AS total_siswa FROM pendaftaran";
    $siswa_result = $connect->query($siswa_sql);
    $siswa_row = $siswa_result->fetch_assoc();
    $total_siswa = $siswa_row['total_siswa'];

    // Mengambil jumlah foto yang ada di galeri
    $foto_sql = "SELECT COUNT(*) AS total_foto FROM galeri";
    $foto_result = $connect->query($foto_sql);
    $foto_row = $foto_result->fetch_assoc();
    $total_foto = $foto_row['total_foto'];

    // Mengambil jumlah berita yang ada
    $berita_sql = "SELECT COUNT(*) AS total_berita FROM berita";
    $berita_result = $connect->query($berita_sql);
    $berita_row = $berita_result->fetch_assoc();
    $total_berita = $berita_row['total_berita'];

    // Mengambil jumlah berita yang ada
    $anggota_sql = "SELECT COUNT(*) AS total_anggota FROM dataanggota";
    $anggota_result = $connect->query($anggota_sql);
    $anggota_row = $anggota_result->fetch_assoc();
    $total_anggota = $anggota_row['total_anggota'];

    // Mengambil jumlah admin yang ada
    $admin_sql = "SELECT COUNT(*) AS total_admin FROM user";
    $admin_result = $connect->query($admin_sql);
    $admin_row = $admin_result->fetch_assoc();
    $total_admin = $admin_row['total_admin'];

    $connect->close();
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
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="../assets/css/main.css" rel="stylesheet">

</head>
<body class="index-page">
<?php include 'navbar.php'; ?>

<main class="main">
    <!-- Page Title -->
    <div class="page-title dark-background">
        <div class="container position-relative">
        <h1>Admin</h1>
        <p>Selamat Datang.</p>
        <p>Anda berhasil masuk sebagai admin. Tambahkan atau edit postingan.</p>
        </div>
    </div><!-- End Page Title -->

    <section id="featured-services" class="featured-services section">
    <div class="container">
        <div class="row gy-4">
            <!-- Card for Jumlah Berita -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item item-cyan position-relative">
                    <div class="icon">
                        <i class="fa-solid fa-image fa-xl"></i>
                    </div>
                    <a href="admin_berita.php" class="stretched-link">
                        <h5 class="card-title">Jumlah Berita Yang Telah Di Unggah</h5><br>
                        <p class="card-text fs-4"><?php echo $total_berita; ?> Berita</p>
                    </a>
                </div>
            </div><!-- End Service Item -->
            
            <!-- Card for Jumlah Galeri -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item item-orange position-relative">
                    <div class="icon">
                        <i class="fa-regular fa-newspaper fa-xl"></i>
                    </div>
                    <a href="admin_galeri.php" class="stretched-link">
                        <h5 class="card-title">Jumlah Postingan Galeri Yang Telah Di Unggah</h5><br>
                        <p class="card-text fs-4"><?php echo $total_foto; ?> Foto</p>
                    </a>
                </div>
            </div><!-- End Service Item -->

            <!-- Card for Jumlah Siswa -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item item-teal position-relative">
                    <div class="icon">
                        <i class="fa-solid fa-user-group fa-xl"></i>
                    </div>
                    <a href="data_pendaftaran.php" class="stretched-link">
                        <h5 class="card-title">Jumlah Siswa Yang Telah Mendaftar</h5><br>
                        <p class="card-text fs-4"><?php echo $total_siswa; ?> Siswa</p>
                    </a>
                </div>
            </div>
            <!-- Card for Jumlah Anggota -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item item-red position-relative">
                    <div class="icon">
                        <i class="fa-solid fa-user-group fa-xl"></i>
                    </div>
                    <a href="admin_anggota.php" class="stretched-link">
                        <h5 class="card-title">Jumlah Anggota Saat Ini</h5><br>
                        <p class="card-text fs-4"><?php echo $total_anggota; ?> Anggota</p>
                    </a>
                </div>
            </div><!-- End Service Item -->
            <!-- Card for Jumlah Anggota -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item item-cyan position-relative">
                    <div class="icon">
                        <i class="fa-solid fa-user-group fa-xl"></i>
                    </div>
                    <a href="data_admin.php" class="stretched-link">
                        <h5 class="card-title">Data Admin</h5><br>
                        <p class="card-text fs-4"><?php echo $total_admin; ?> Admin</p>
                    </a>
                </div>
            </div><!-- End Service Item -->
        </div>
    </div>
</section><!-- /Featured Services Section -->


</main>

<?php include 'footer.php'; ?>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>
<script src="../assets/vendor/aos/aos.js"></script>
<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

<!-- Main JS File -->
<script src="../assets/js/main.js"></script>
</body>
</html>
