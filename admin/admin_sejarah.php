<?php
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

    <!-- =======================================================
    * Template Name: Moderna
    * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
    * Updated: Aug 07 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->

</head>
<body class="index-page">
<?php include '../function.php'; ?>
<?php include 'navbar.php'; ?>
    <main class="main">
        <!-- Page Title -->
    <div class="page-title dark-background">
        <div class="container position-relative">
        <h1>Data Profil Ekstrakurikuler</h1>
        <p>Sejarah tentang ekstrakurikuler seni karwaitan dan pedalangan</p>
        </div>
    </div><!-- End Page Title -->
    <div class="container py-5">
        <!-- Tambahkan tombol "Tambah isi galeri" -->
        <div class="d-flex justify-content-end mt-3 mb-3">
            <!-- <a href="#" class="text-decoration-none">
                <button type="button" onclick="window.location='tambah_berita.php'" class="btn btn-outline-secondary">Tambah Postingan</button>
            </a> -->
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Deskripsi</th>
                    <th>Deskripsi Ekstra</th>
                    <th>Judul Latar Belakang</th>
                    <th>latarbelakang</th>
                    <th>OPSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM dataprofil";
                $result = $connect->query($sql);
                
                if ($result->num_rows > 0) {
                    $no = 1; // Inisialisasi nomor urut
                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td>' . $no++ . '</td>'; // Menampilkan nomor urut
                        echo '<td>' . htmlspecialchars($row['juduldeskripsi']) . '</td>';
                        echo '<td>' . htmlspecialchars($row['deskirpsiekstra']) . '</td>';
                        echo '<td>' . htmlspecialchars($row['judullatarbelakang']) . '</td>';
                        echo '<td>' . htmlspecialchars($row['latarbelakang']) . '</td>';
                        echo '<td>';
                        echo '<a href="ubah_sejarah.php?id=' . $row['id'] . '" class="btn btn-warning btn-sm">Edit</a> ';
                        echo '</td>';
                        echo '</tr>';
                    }
                } else {
                    echo "<tr><td colspan='5'>Tidak ada sejarah.</td></tr>";
                }
                $connect->close();
                ?>
            </tbody>
        </table>
    </div>
    </main>
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
    <?php include 'footer.php'; ?>
</body>
</html>