<?php
// Aktifkan error reporting (untuk debugging)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Koneksi ke database
include '../function.php';

// Set header untuk mengunduh file Excel
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=data_pendaftaran.xls");
header("Pragma: no-cache");
header("Expires: 0");

// Query data dari tabel pendaftaran
$sql = "SELECT * FROM pendaftaran";
$result = $connect->query($sql);

// Tampilkan header tabel
echo "No\tNama\tNIS\tKelas\tEmail\tNo HP\tAlamat\tAlasan\n";

if ($result->num_rows > 0) {
    $no = 1;
    while ($row = $result->fetch_assoc()) {
        // Tampilkan data dengan tab sebagai pemisah kolom
        echo $no++ . "\t" . 
             htmlspecialchars($row['nama']) . "\t" . 
             htmlspecialchars($row['nis']) . "\t" . 
             htmlspecialchars($row['kelas']) . "\t" . 
             htmlspecialchars($row['email']) . "\t" . 
             htmlspecialchars($row['nohp']) . "\t" . 
             htmlspecialchars($row['alamat']) . "\t" . 
             htmlspecialchars($row['alasan']) . "\n";
    }
} else {
    echo "Tidak ada data.";
}

// Tutup koneksi
$connect->close();
?>
