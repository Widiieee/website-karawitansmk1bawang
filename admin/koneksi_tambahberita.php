<!-- coba baru -->
<?php 
include '../function.php';

$judulberita = mysqli_real_escape_string($connect, $_POST['judulberita']);
$isiberita = mysqli_real_escape_string($connect, $_POST['isiberita']);
$kategori = mysqli_real_escape_string($connect, $_POST['kategori']);
$tanggal = mysqli_real_escape_string($connect, $_POST['tanggal']);

$rand = rand();
$ekstensi = array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

// Fungsi untuk mengkompres gambar
function compressImage($source, $destination, $quality) {
    $info = getimagesize($source);
    if ($info['mime'] == 'image/jpeg') {
        $image = imagecreatefromjpeg($source);
        imagejpeg($image, $destination, $quality);
    } elseif ($info['mime'] == 'image/png') {
        $image = imagecreatefrompng($source);
        imagepng($image, $destination, floor($quality / 10));
    } elseif ($info['mime'] == 'image/gif') {
        $image = imagecreatefromgif($source);
        imagegif($image, $destination);
    }
    return $destination;
}

if (!in_array($ext, $ekstensi)) {
    header("location:admin_berita.php?alert=gagal_ekstensi");
} else {
    if ($ukuran < 1044070) {  // Jika ukuran file kurang dari 1MB, langsung upload
        $xx = $rand . '_' . $filename;
        move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/' . $rand . '_' . $filename);
        mysqli_query($connect, "INSERT INTO berita VALUES(NULL,'$judulberita','$isiberita', '$tanggal','$xx', '$kategori')");
        header("location:admin_berita.php?alert=berhasil");
    } else {  // Jika ukuran file lebih besar dari 1MB, kompres gambar
        // Nama file baru untuk gambar yang sudah dikompres
        $compressedFile = 'gambar/' . $rand . '_' . $filename;

        // Kompres gambar (menggunakan kualitas 70%)
        compressImage($_FILES['foto']['tmp_name'], $compressedFile, 70);

        // Simpan gambar yang sudah dikompres ke database
        $xx = $rand . '_' . $filename;
        mysqli_query($connect, "INSERT INTO berita VALUES(NULL,'$judulberita','$isiberita', '$tanggal','$xx', '$kategori')");
        header("location:admin_berita.php?alert=berhasil");
    }
}
?>
