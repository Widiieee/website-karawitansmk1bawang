<?php 
include 'function.php'; 

// Koneksi ke database dan mengambil periode
$sql = "SELECT periode FROM dataanggota LIMIT 1"; // Ambil periode dari tabel dataanggota, atau sesuaikan tabelnya
$result = $connect->query($sql);

// Mengecek jika ada data periode dan mengambilnya
$periode = '';
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $periode = $row['periode']; // Menyimpan periode yang diambil
}

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
    <link href="https://fonts.googleapis.com" rel="preconnectect">
    <link href="https://fonts.gstatic.com" rel="preconnectect" crossorigin>
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
<body class="team-page"> 
<?php include 'layout/navbar.php';?>   
    <main class="main">
        <!-- Page Title -->
        <div class="page-title dark-background">
            <div class="container position-relative">
            <h1>Struktur Kepengurusan</h1>
            <p>Struktur kepengurusan ekstrakurikuler karawitan <?php echo htmlspecialchars($periode); ?></p>
            <nav class="breadcrumbs">
                <ol>
                <li><a href="beranda.php">Beranda</a></li>
                <li class="current">Anggota</li>
                </ol>
            </nav>
            </div>
        </div><!-- End Page Title -->
        <section class="py-5">
            <div class="container px-5">
                <!-- Team Section -->
                <section id="team" class="team section">
                    <div class="container">
                        <div class="row gy-5">
                        <?php
                            // Mengambil anggota yang memiliki jabatan Ketua dan Wakil Ketua
                            $sql = "SELECT * FROM dataanggota WHERE jabatan IN ('Ketua', 'Wakil Ketua')";
                            $result = $connect->query($sql);
                            
                            // Jika ada anggota dengan jabatan tersebut
                            if ($result->num_rows > 0) {
                                echo '<div class="col-12 d-flex justify-content-center">';
                                echo '  <div class="col-12 text-center">';
                                echo '  <h3>Ketua dan Wakil Ketua</h3>';
                                echo '  <div class="row gy-4 d-flex justify-content-center">';

                                while ($row = $result->fetch_assoc()) {
                                    echo '<div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">';
                                    echo '    <div class="member-img">';
                                    echo '        <img src="admin/gambar/' . htmlspecialchars($row['foto']) . '" class="img-fluid" alt="">';
                                    echo '        <div class="social">';
                                    if ($row['twitter']) echo '            <a href="' . htmlspecialchars($row['twitter']) . '"><i class="bi bi-twitter"></i></a>';
                                    if ($row['facebook']) echo '            <a href="' . htmlspecialchars($row['facebook']) . '"><i class="bi bi-facebook"></i></a>';
                                    if ($row['instagram']) echo '            <a href="' . htmlspecialchars($row['instagram']) . '"><i class="bi bi-instagram"></i></a>';
                                    echo '        </div>';
                                    echo '    </div>';
                                    echo '    <div class="member-info text-center">';
                                    echo '        <h4>' . htmlspecialchars($row['namaanggota']) . '</h4>';
                                    echo '        <span>' . htmlspecialchars($row['jabatan']) . '</span>';
                                    echo '    </div>';
                                    echo '</div>';
                                }

                                echo '  </div>'; // end row
                                echo '</div>'; // end col-12
                                echo '</div>';
                            }

                            // Mengambil anggota selain Ketua dan Wakil Ketua
                            $sql = "SELECT * FROM dataanggota WHERE jabatan NOT IN ('Ketua', 'Wakil Ketua')";
                            $result = $connect->query($sql);

                            // Jika ada anggota dengan jabatan selain Ketua dan Wakil Ketua
                            if ($result->num_rows > 0) {
                                echo '<div class="col-12 d-flex justify-content-center">';
                                echo '  <div class="col-12 text-center">';
                                echo '  <h3>Anggota Lainnya</h3>';
                                echo '  <div class="row gy-4 d-flex justify-content-center">';

                                while ($row = $result->fetch_assoc()) {
                                    echo '<div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">';
                                    echo '    <div class="member-img">';
                                    echo '        <img src="admin/gambar/' . htmlspecialchars($row['foto']) . '" class="img-fluid" alt="">';
                                    echo '        <div class="social">';
                                    if ($row['twitter']) echo '            <a href="' . htmlspecialchars($row['twitter']) . '"><i class="bi bi-twitter"></i></a>';
                                    if ($row['facebook']) echo '            <a href="' . htmlspecialchars($row['facebook']) . '"><i class="bi bi-facebook"></i></a>';
                                    if ($row['instagram']) echo '            <a href="' . htmlspecialchars($row['instagram']) . '"><i class="bi bi-instagram"></i></a>';
                                    echo '        </div>';
                                    echo '    </div>';
                                    echo '    <div class="member-info text-center">';
                                    echo '        <h4>' . htmlspecialchars($row['namaanggota']) . '</h4>';
                                    echo '        <span>' . htmlspecialchars($row['jabatan']) . '</span>';
                                    echo '    </div>';
                                    echo '</div>';
                                }

                                echo '  </div>'; // end row
                                echo '</div>'; // end col-12
                                echo '</div>';
                            } else {
                                echo '<p>Data anggota tidak tersedia.</p>';
                            }

                            $connect->close();
                        ?>

                        </div>
                    </div>
                </section><!-- /Team Section -->
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