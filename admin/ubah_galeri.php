<?php
include "../function.php";

// Ambil id dari URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Ambil data galeri berdasarkan id
    $result = mysqli_query($connect, "SELECT * FROM galeri WHERE id='$id'");
    $data = mysqli_fetch_array($result);
} else {
    // Jika id tidak ada, redirect atau beri peringatan
    die("ID tidak ditemukan.");
}

// Proses form jika ada POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $foto = $data['foto']; // Foto lama sebagai default
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];

    // Periksa apakah ada file foto yang diunggah
    if (!empty($_FILES['foto_baru']['name'])) {
        $target_dir = "gambar/"; // Folder penyimpanan
        $foto = basename($_FILES['foto_baru']['name']); // Foto baru
        $target_file = $target_dir . $foto;

        // Validasi file (opsional)
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
        $file_extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if (!in_array($file_extension, $allowed_extensions)) {
            die("Format file tidak didukung.");
        }

        // Unggah file
        if (!move_uploaded_file($_FILES['foto_baru']['tmp_name'], $target_file)) {
            die("Gagal mengunggah file.");
        }
    }

    // Update data di database
    $query = "UPDATE galeri SET foto='$foto', judul='$judul', deskripsi='$deskripsi' WHERE id='$id'";
    mysqli_query($connect, $query) or die(mysqli_error($connect));

    // Redirect setelah berhasil update
    header("Location: admin_galeri.php");
    exit();
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
        <h1>Data Galeri</h1>
        <p>Tambahkan atau edit postingan.</p>
        </div>
    </div><!-- End Page Title -->
    <div class="container">
    <h1 class="text-center mb-4">Ubah Postingan</h1>
    <div class="container">
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="foto" class="form-label">Foto Saat Ini:</label><br>
                <img src="gambar/<?php echo htmlspecialchars($data['foto']); ?>" alt="Foto" style="max-width: 200px; height: auto;"><br>
                <label for="foto_baru" class="form-label mt-3">Unggah Foto Baru:</label>
                <input type="file" class="form-control" id="foto_baru" name="foto_baru" accept="image/*">
            </div>
            <div class="mb-3">
                <label for="judul" class="form-label">Judul :</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?php echo htmlspecialchars($data['judul']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi :</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?php echo htmlspecialchars($data['deskripsi']); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        <br>
    </div>
    </main>
<?php include 'footer.php'; ?>
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-ardata-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/php-deskripsi-form/validate.js"></script>
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