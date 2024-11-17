<?php
// Koneksi ke database
include '../function.php'; 

// Ambil id dari parameter URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Cegah SQL Injection dengan Prepared Statement
    $stmt = $connect->prepare("DELETE FROM user WHERE id = ?");
    $stmt->bind_param("i", $id); // "i" menunjukkan tipe integer
    
    if ($stmt->execute()) {
        // Jika berhasil, arahkan kembali ke halaman admin dengan pesan
        header("Location: data_admin.php?message=success");
        exit();
    } else {
        // Jika gagal, tampilkan error
        echo "Error: " . $stmt->error;
    }

    // Tutup statement
    $stmt->close();
} else {
    // Jika id tidak ditemukan di URL, arahkan ke halaman admin
    header("Location: data_admin.php?message=error");
    exit();
}

// Tutup koneksi database
$connect->close();
?>
