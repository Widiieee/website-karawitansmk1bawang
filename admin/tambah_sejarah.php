<?php 
include '../function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Tambah Sejarah</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="../assets/css/main.css" rel="stylesheet">
</head>
<body>
<?php include 'navbar.php'; ?>

<main class="main">
    <div class="page-title dark-background">
        <div class="container position-relative">
            <h1>Tambah Sejarah</h1>
            <p>Formulir untuk menambah data sejarah ekstrakurikuler</p>
        </div>
    </div>

    <div class="container py-5">
        <form action="koneksi_tambahsejarah.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="juduldeskripsi" class="form-label">Judul Deskripsi</label>
                <input type="text" class="form-control" id="juduldeskripsi" name="juduldeskripsi" placeholder="Masukkan judul deskripsi" required>
            </div>
            <div class="mb-3">
                <label for="deskirpsiekstra" class="form-label">Deskripsi Ekstra</label>
                <textarea class="form-control" id="deskirpsiekstra" name="deskirpsiekstra" rows="5" placeholder="Masukkan deskripsi ekstra" required></textarea>
            </div>
            <div class="mb-3">
                <label for="fotodeskripsi" class="form-label">Foto Deskripsi</label>
                <input type="file" class="form-control" id="fotodeskripsi" name="fotodeskripsi" accept=".png, .jpg, .jpeg, .gif" required>
                <small class="text-muted">Ekstensi yang diperbolehkan: .png, .jpg, .jpeg, .gif</small>
            </div>
            <div class="mb-3">
                <label for="judullatarbelakang" class="form-label">Judul Latar Belakang</label>
                <input type="text" class="form-control" id="judullatarbelakang" name="judullatarbelakang" placeholder="Masukkan judul latar belakang" required>
            </div>
            <div class="mb-3">
                <label for="latarbelakang" class="form-label">Latar Belakang</label>
                <textarea class="form-control" id="latarbelakang" name="latarbelakang" rows="5" placeholder="Masukkan latar belakang" required></textarea>
            </div>
            <div class="mb-3">
                <label for="fotolatarbelakang" class="form-label">Foto Latar Belakang</label>
                <input type="file" class="form-control" id="fotolatarbelakang" name="fotolatarbelakang" accept=".png, .jpg, .jpeg, .gif" required>
                <small class="text-muted">Ekstensi yang diperbolehkan: .png, .jpg, .jpeg, .gif</small>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="dataprofil.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</main>

<!-- Vendor JS Files -->
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/aos/aos.js"></script>
<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS File -->
<script src="../assets/js/main.js"></script>
<?php include 'footer.php'; ?>
</body>
</html>
