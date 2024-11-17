<?php
// Koneksi ke database
require 'function.php';

// Menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$kelas = $_POST['kelas'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];
$alasan = $_POST['alasan'];

// Proses insert data ke database
$query = "INSERT INTO pendaftaran (nama, nis, kelas, email, nohp, alamat, alasan) VALUES ('$nama', '$nis', '$kelas', '$email', '$nohp', '$alamat', '$alasan')";

if (mysqli_query($connect, $query)) {
    // Jika query berhasil, tampilkan alert
    echo "<script>
        alert('Pendaftaran telah berhasil');
        window.location.href = 'beranda.php';
        </script>";
} else {
    // Jika query gagal, tampilkan pesan error
    echo "<script>
        alert('Pendaftaran gagal: " . mysqli_error($connect) . "');
        window.location.href = 'beranda.php';
        </script>";
}
?>
