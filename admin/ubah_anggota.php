<?php
include "../function.php";

// Ambil id dari URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Ambil data galeri berdasarkan id
    $result = mysqli_query($connect, "SELECT * FROM dataanggota WHERE id='$id'");
    $data = mysqli_fetch_array($result);
} else {
    // Jika id tidak ada, redirect atau beri peringatan
    die("ID tidak ditemukan.");
}

// Proses form jika ada POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $foto = $data['foto']; // Foto lama sebagai default
    $namaanggota = $_POST['namaanggota'];
    $jabatan = $_POST['jabatan'];
    $instagram = $_POST['instagram'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];

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
    $query = "UPDATE dataanggota SET foto='$foto', namaanggota='$namaanggota', jabatan='$jabatan', instagram='$instagram', facebook='$facebook', twitter='$twitter' WHERE id='$id'";
    mysqli_query($connect, $query) or die(mysqli_error($connect));

    // Redirect setelah berhasil update
    header("Location: admin_anggota.php");
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
</head>
<body class="index-page">
<?php include 'navbar.php'; ?>

<main class="main">
    <!-- Page Title -->
    <div class="page-title dark-background">
        <div class="container position-relative">
            <h1>Data Anggota</h1>
            <p>Tambahkan atau edit profil anggota.</p>
        </div>
    </div><!-- End Page Title -->

    <h1 class="text-center mb-4">Ubah Data Anggota</h1>
    <div class="container">
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="foto" class="form-label">Foto Saat Ini:</label><br>
                <img src="gambar/<?php echo htmlspecialchars($data['foto']); ?>" alt="Foto" style="max-width: 200px; height: auto;"><br>
                <label for="foto_baru" class="form-label mt-3">Unggah Foto Baru:</label>
                <input type="file" class="form-control" id="foto_baru" name="foto_baru" accept="image/*">
            </div>
            <div class="mb-3">
                <label for="namaanggota" class="form-label">Nama Anggota:</label>
                <input type="text" class="form-control" id="namaanggota" name="namaanggota" value="<?php echo htmlspecialchars($data['namaanggota']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan:</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?php echo htmlspecialchars($data['jabatan']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="instagram" class="form-label">Instagram:</label>
                <input type="text" class="form-control" id="instagram" name="instagram" value="<?php echo htmlspecialchars($data['instagram']); ?>" >
            </div>
            <div class="mb-3">
                <label for="facebook" class="form-label">Facebook:</label>
                <input type="facebook" class="form-control" id="facebook" name="facebook" value="<?php echo htmlspecialchars($data['facebook']); ?>" >
            </div>
            <div class="mb-3">
                <label for="twitter" class="form-label">Twitter:</label>
                <input type="text" class="form-control" id="twitter" name="twitter" value="<?php echo htmlspecialchars($data['twitter']); ?>" >
            </div>
            <div class="mb-3">
                <label for="periode" class="form-label">Periode:</label>
                <input type="text" class="form-control" id="periode" name="periode" value="<?php echo htmlspecialchars($data['periode']); ?>" >
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
