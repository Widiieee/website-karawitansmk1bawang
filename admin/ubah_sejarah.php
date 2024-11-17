<?php
include "../function.php";


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($connect, "SELECT * FROM dataprofil WHERE id='$id'");
    $data = mysqli_fetch_array($result);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $juduldeskripsi = $_POST['juduldeskripsi'];
    $deskirpsiekstra = $_POST['deskirpsiekstra'];
    $judullatarbelakang = $_POST['judullatarbelakang'];
    $latarbelakang = $_POST['latarbelakang'];

    mysqli_query($connect, "UPDATE dataprofil SET juduldeskripsi='$juduldeskripsi', deskirpsiekstra='$deskirpsiekstra', judullatarbelakang='$judullatarbelakang', latarbelakang='$latarbelakang' WHERE id='$id'");
    header("Location: admin_sejarah.php");
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
<?php include 'navbar.php'; ?>
    <main class="main">
        <!-- Page Title -->
    <div class="page-title dark-background">
        <div class="container position-relative">
        <h1>Data Profil Ekstrakurikuler</h1>
        <p>Edit sejarah tentang elkstrakurikuler seni karwaitan dan pedalangan.</p>
        </div>
    </div><!-- End Page Title -->
    <div class="container">
        <h2>Edit Profil Sejarah Karawitan</h2>
        <form method="POST">
            <div class="mb-3">
                <label for="juduldeskripsi" class="form-label">Judul Deskripsi</label>
                <input type="text" class="form-control" id="juduldeskripsi" name="juduldeskripsi" value="<?php echo htmlspecialchars($data['juduldeskripsi']); ?>" required>
            </div>
                    
            <div class="mb-3">
                <label for="deskirpsiekstra" class="form-label">Deskripsi Ekstrakurikuler</label>
                <textarea class="form-control" id="deskirpsiekstra" name="deskirpsiekstra" rows="5" required><?php echo htmlspecialchars($data['latarbelakang']); ?></textarea>
            </div>
            
            <div class="mb-3">
                <label for="judullatarbelakang" class="form-label">Judul Latar Belakang</label>
                <input type="text" class="form-control" id="judullatarbelakang" name="judullatarbelakang" value="<?php echo htmlspecialchars($data['judullatarbelakang']); ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="latarbelakang" class="form-label">Latar Belakang</label>
                <textarea class="form-control" id="latarbelakang" name="latarbelakang" rows="5" required><?php echo htmlspecialchars($data['latarbelakang']); ?></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Perbarui Profil</button>
        </form>

    </div>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/php-latarbelakang-form/validate.js"></script>
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