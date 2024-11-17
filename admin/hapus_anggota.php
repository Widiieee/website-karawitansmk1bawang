<?php
require "../function.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil nama file foto dari database
    $result = mysqli_query($connect, "SELECT foto FROM dataanggota WHERE id='$id'");
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $filePath = 'gambar/' . $row['foto'];

        // Cek apakah file foto ada, kemudian hapus
        if (file_exists($filePath)) {
            unlink($filePath); // Hapus file foto
        }
    }

    // Hapus data dari database
    mysqli_query($connect, "DELETE FROM dataanggota WHERE id='$id'");
}

// Redirect kembali ke halaman admin_anggota
header("Location: admin_anggota.php");
exit();
