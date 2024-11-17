<?php
// Koneksi ke database
require '../function.php';

// Menangkap data dari form
$username = $_POST['username'];
$password = $_POST['password'];
$namalengkap = $_POST['namalengkap'];
$notelp = $_POST['notelp'];

// Gunakan prepared statements untuk keamanan
$stmt = $connect->prepare("INSERT INTO user (username, password, namalengkap, notelp) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $username, $password, $namalengkap, $notelp);

if ($stmt->execute()) {
    echo "<script>
        alert('Tambah Admin Telah Berhasil');
        window.location.href = 'data_admin.php';
        </script>";
} else {
    echo "<script>
        alert('Tambah Admin Gagal: " . $stmt->error . "');
        window.location.href = 'data_admin.php';
        </script>";
}

$stmt->close();
?>
