<?php 
include '../function.php';

// Ambil data dari form
$namaanggota = $_POST['namaanggota'];
$jabatan = $_POST['jabatan'];
$instagram = $_POST['instagram'];
$facebook = $_POST['facebook'];
$twitter = $_POST['twitter'];
$periode = $_POST['periode'];

// Generasi nama file gambar
$rand = rand();
$ekstensi = array('png', 'jpg', 'jpeg', 'gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

// Cek ekstensi file
if (!in_array($ext, $ekstensi)) {
    header("location:admin_galeri.php?alert=gagal_ekstensi");
} else {
    // Cek ukuran file
    if ($ukuran < 1044070) {
        $xx = $rand.'_'.$filename;
        
        // Pindahkan file ke folder 'gambar/'
        move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
        
        // Query untuk memasukkan data ke dalam tabel
        $query = "INSERT INTO dataanggota (foto, namaanggota, jabatan, instagram, facebook, twitter, periode) 
                  VALUES ('$xx', '$namaanggota', '$jabatan', '$instagram', '$facebook', '$twitter', '$periode')";
        
        if (mysqli_query($connect, $query)) {
            header("location:admin_anggota.php?alert=berhasil");
        } else {
            echo "Error: " . mysqli_error($connect);
        }
    } else {
        header("location:admin_anggota.php?alert=gagal_ukuran");
    }
}
?>
