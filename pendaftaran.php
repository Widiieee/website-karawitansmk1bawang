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
        <h1>Pendaftaran</h1>
        <p>Ayo, jadi bagian dari ekstra karawitan! Tidak cuma belajar musik tradisional, tapi juga membuat vibes sekolah semakin asik. Langsung daftar saja.</p>
        <nav class="breadcrumbs">
            <ol>
            <li><a href="beranda.php">Beranda</a></li>
            <li class="current">Pendaftaran</li>
            </ol>
        </nav>
        </div>
    </div><!-- End Page Title -->
    <section class="py-5">
        <div class="container px-5">
            <!-- Pendaftaran-->
            <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5" data-aos="fade-up">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <h1 class="fw-bolder">Pendaftaran Ekstra Karawitan</h1>
                    <p class="lead fw-normal text-muted mb-0">Jadilah bagian dari kami untuk melestarikan budaya Indonesia</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="card-body">
                            <form action="koneksi_pendaftaran.php" method="POST">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" required>
                                </div>

                                <div class="mb-3">
                                    <label for="nis" class="form-label">NIS</label>
                                    <input type="text" class="form-control" id="nis" name="nis" placeholder="Masukkan NIS" required>
                                </div>

                                <div class="mb-3">
                                    <label for="kelas" class="form-label">Kelas</label>
                                    <select class="form-select" name="kelas" aria-label="Default select example">
                                        <option selected>Kelas</option>
                                        <option value="X AKL 1">X AKL 1</option>
                                        <option value="X AKL 2">X AKL 2</option>
                                        <option value="X AKL 3">X AKL 3</option>
                                        <option value="X PPLG 1">X PPLG 1</option>
                                        <option value="X PPLG 2">X PPLG 2</option>
                                        <option value="X TJKT 1">X TJKT 1</option>
                                        <option value="X TJKT 2">X TJKT 2</option>
                                        <option value="X TE 1">X TE 1</option>
                                        <option value="X TE 2">X TE 2</option>
                                        <option value="X AP 1">X AP 1</option>
                                        <option value="X AP 2">X AP 2</option>
                                        <option value="X AP 3">X AP 3</option>
                                        <option value="X FS 1">X FS 1</option>
                                        <option value="X FS 2">X FS 2</option>
                                        <option value="X MPLB 1">X MPLB 1</option>
                                        <option value="X MPLB 2">X MPLB 2</option>
                                        <option value="X MPLB 3">X MPLB 3</option>
                                        <option value="X PM 1">X PM 1</option>
                                        <option value="X PM 2">X PM 2</option>
                                    </select>
                                </div>


                                <div class="mb-3">
                                    <label for="email" class="form-label">Alamat Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Alamat Email" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="nohp" class="form-label">No HP</label>
                                    <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Masukkan No HP" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" required>
                                </div>

                                <div class="mb-3">
                                    <label for="alasan" class="form-label">Alasan Mengikuti Ekstrakurikuler</label>
                                    <input type="text" class="form-control" id="alasan" name="alasan" placeholder="Tulis Alasan Anda" required>
                                </div>
                                
                                <div class="d-flex justify-content-center gap-3">
                                    <button type="submit" class="btn btn-primary">Daftar</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <div class="d-flex justify-content-end mt-3 mb-3">
            </div>
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