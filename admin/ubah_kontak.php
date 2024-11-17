<?php
include "../function.php";


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($connect, "SELECT * FROM kontak WHERE id='$id'");
    $row = mysqli_fetch_array($result);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $alamatsekolah = $_POST['alamatsekolah'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $youtube = $_POST['youtube'];
    $instagram = $_POST['instagram'];

    mysqli_query($connect, "UPDATE kontak SET alamatsekolah='$alamatsekolah', no_hp='$no_hp', email='$email', youtube='$youtube', instagram='$instagram' WHERE id='$id'");
    header("Location: admin_kontak.php");
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
        <h1>Data Kontak</h1>
        <p>Edit data kontak.</p>
        </div>
    </div><!-- End Page Title -->
    <h1 class="text-center mb-4">Ubah Data Anggota</h1>
    <div class="container">
        <form method="post">
            <div class="mb-3">
                <label for="alamatsekolah" class="form-label">Alamat Sekolah:</label>
                <input type="text" class="form-control" id="alamatsekolah" name="alamatsekolah" value="<?php echo htmlspecialchars($row['alamatsekolah']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No Telepon:</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo htmlspecialchars($row['no_hp']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="text" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" >
            </div>
            <div class="mb-3">
                <label for="youtube" class="form-label">YouTube:</label>
                <input type="text" class="form-control" id="youtube" name="youtube" value="<?php echo htmlspecialchars($row['youtube']); ?>" >
            </div>
            <div class="mb-3">
                <label for="instagram" class="form-label">Instagram:</label>
                <input type="text" class="form-control" id="instagram" name="instagram" value="<?php echo htmlspecialchars($row['instagram']); ?>" >
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        <br>
    </div>
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