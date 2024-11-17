<?php
require "../function.php";

// Cek apakah id ada di URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil nama foto terkait dengan id dari tabel galeri
    $result = mysqli_query($connect, "SELECT foto FROM galeri WHERE id='$id'");
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        // Dapatkan nama file foto
        $filePath = 'gambar/' . $row['foto'];

        // Cek apakah file foto ada dan hapus
        if (file_exists($filePath)) {
            unlink($filePath);  // Menghapus file foto
        }
    }

    // Hapus data dari tabel galeri
    mysqli_query($connect, "DELETE FROM galeri WHERE id='$id'");
}

// Redirect kembali ke halaman admin_galeri.php
header("Location: admin_galeri.php");
exit();
?>
