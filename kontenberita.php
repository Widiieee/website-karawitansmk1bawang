<?php
// Koneksi ke database
include 'function.php';

// Memeriksa apakah parameter 'id' ada di URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk mengambil data berita berdasarkan ID
    $query = "SELECT * FROM berita WHERE id = $id";
    $result = mysqli_query($connect, $query);

    // Mengecek apakah berita ditemukan
    if (mysqli_num_rows($result) > 0) {
        // Menyimpan data berita ke dalam array
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Berita tidak ditemukan.";
        exit;
    }
} else {
    echo "ID tidak ditemukan.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?php echo $row['judulberita']; ?> | Setyo Laras</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
</head>
<body>

<?php include 'layout/navbar.php'; ?>

<main class="main">
    <!-- Page Title -->
    <div class="page-title dark-background">
        <div class="container position-relative">
            <h1><?php echo $row['judulberita']; ?></h1>
            <p>Berita terkait Ekstrakurikuler Seni Karawitan dan Pedalangan.</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="beranda.php">Beranda</a></li>
                    <li><a href="berita.php">Berita</a></li>
                    <li class="current"><?php echo $row['judulberita']; ?></li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Blog Post Content -->
    <section id="blog-post-content blog-details" class="blog-post-content blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <article class="article">
                        <div class="post-img">
                            <img src="admin/gambar/<?php echo $row['foto']; ?>" alt="" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>

                        <h2 class="title"><?php echo $row['judulberita']; ?></h2>

                        <div class="meta-top">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time datetime="<?php echo $row['tanggal']; ?>"><?php echo date('M d, Y', strtotime($row['tanggal'])); ?></time></li>
                            </ul>
                        </div>

                        <div class="content">
                            <?php echo $row['isiberita']; ?>
                        </div><!-- End row content -->

                        <div class="meta-bottom">
                            <i class="bi bi-folder"></i>
                            <ul class="cats">
                                <li><a href="#"><?php echo $row['kategori']; ?></a></li>
                            </ul>
                        </div><!-- End meta bottom -->
                    </article>
                </div>
            </div>
        </div>
    </section><!-- End Blog Post Content -->
</main>

<?php include 'layout/footer.php'; ?>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>
</body>
</html>
