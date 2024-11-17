<?php
require "../function.php";

// Cek apakah parameter id ada di URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil nama file foto yang terkait dengan berita berdasarkan id
    $result = mysqli_query($connect, "SELECT foto FROM berita WHERE id='$id'");
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        // Ambil nama file foto
        $filePath = 'gambar/' . $row['foto'];

        // Cek apakah file foto ada dan hapus
        if (file_exists($filePath)) {
            unlink($filePath);  // Hapus file foto
        }
    }

    // Hapus data berita dari database
    mysqli_query($connect, "DELETE FROM berita WHERE id='$id'");
}

// Redirect kembali ke halaman admin_berita.php
header("Location: admin_berita.php");
exit();
?>
