<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Membuat koneksi ke database
$host = "localhost";       
$username = "root";        
$password = "";            
$dbname = "websitekarawitan"; 

// Koneksi ke MySQL
$connect = mysqli_connect($host, $username, $password, $dbname);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// Login
if (isset($_POST['login'])) {
    // Inisiasi variabel
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check = mysqli_query($connect, "SELECT * FROM user WHERE username='$username' and password='$password'");
    $user = mysqli_fetch_assoc($check);

    // Jika data ditemukan
    if ($user) {
        // Set session setelah login berhasil
        $_SESSION['login'] = 'True';
        $_SESSION['status'] = "login";
        $_SESSION['username'] = $username;
        $_SESSION['pengguna'] = "admin";
        $_SESSION['namalengkap'] = $user['namalengkap']; // Menyimpan alamat admin
        $_SESSION['notelp'] = $user['notelp']; // Menyimpan nomor telepon admin

        // Simpan nama admin ke dalam session
        $_SESSION['admin'] = $user['namalengkap'];  // Atau bisa juga ID admin jika perlu
        
        // Redirect ke halaman beranda admin
        header('location:admin/beranda.php');
        exit; // Pastikan untuk keluar setelah melakukan redirect
    } else {
        // Data tidak ditemukan
        echo '<script type="text/javascript">
        alert("Username atau Password salah");
        window.location.href="login.php";
        </script>';
    }
}
?>
