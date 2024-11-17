-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for websitekarawitan
CREATE DATABASE IF NOT EXISTS `websitekarawitan` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `websitekarawitan`;

-- Dumping structure for table websitekarawitan.berita
CREATE TABLE IF NOT EXISTS `berita` (
  `id` int NOT NULL AUTO_INCREMENT,
  `judulberita` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '0',
  `isiberita` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `kategori` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table websitekarawitan.berita: ~0 rows (approximately)
INSERT INTO `berita` (`id`, `judulberita`, `isiberita`, `tanggal`, `foto`, `kategori`) VALUES
	(10, 'Ekstrakurikuler Karawitan Tampil Memukau pada Acara HUT SKANSA Ke-59', '<p><strong>Sekolah Menengah Kejuruan Negeri 1 (SKANSA) merayakan Hari Ulang Tahun yang ke-59 dengan meriah</strong>. Salah satu momen yang paling dinanti dalam perayaan ini adalah penampilan ekstrakurikuler Karawitan, yang menjadi sorotan utama acara tersebut.</p><p>Pada acara yang digelar di aula utama sekolah, ekstrakurikuler Karawitan membawakan beberapa lagu tradisional Jawa yang berhasil memukau para hadirin. Dengan balutan busana adat yang anggun, para siswa yang tergabung dalam grup karawitan menunjukkan kebolehan mereka memainkan berbagai alat musik tradisional seperti <strong>gendang, bonang, gong, siter</strong>, dan <strong>kendang</strong>.</p><p>Salah satu lagu yang paling menarik perhatian adalah "Gambang Suling," yang berhasil dimainkan dengan harmonis dan penuh penghayatan. Penampilan ini tidak hanya menunjukkan keahlian teknis para siswa tetapi juga menggambarkan kekayaan budaya Jawa yang terus dijaga melalui kegiatan ekstrakurikuler di SKANSA.</p><p><strong>"Kami sangat bangga dengan penampilan teman-teman Karawitan. Mereka berhasil menghidupkan suasana tradisional dan membawa kita semua menikmati keindahan musik tradisional,"</strong> ujar salah seorang siswa yang hadir.</p><p>Selain Karawitan, perayaan HUT SKANSA ke-59 juga diisi dengan berbagai kegiatan menarik lainnya, seperti bazar makanan tradisional, pameran karya siswa, dan penampilan dari ekstrakurikuler seni lainnya. Namun, tidak dapat disangkal bahwa Karawitan menjadi salah satu bintang utama dalam acara ini.</p><p><strong>Kepala Sekolah SKANSA</strong>,  Bapak, Supriadi, juga memberikan apresiasi khusus kepada tim Karawitan. <strong>"Saya sangat bangga dengan anak-anak kita. Karawitan bukan hanya tentang musik, tetapi juga tentang menjaga tradisi dan budaya yang semakin jarang kita lihat. Ini adalah kebanggaan kita bersama,"</strong> katanya.</p><p>Ekstrakurikuler Karawitan di SKANSA sendiri telah menjadi salah satu kegiatan favorit siswa. Tidak hanya sebagai sarana pelestarian budaya, Karawitan juga menjadi tempat bagi siswa untuk belajar disiplin, kerja sama tim, dan dedikasi.</p><p>Dengan penampilan memukau ini, Karawitan SKANSA sekali lagi membuktikan bahwa seni tradisional masih memiliki tempat istimewa di hati para siswa dan masyarakat luas. Semoga semangat ini terus terjaga dan semakin berkembang di tahun-tahun mendatang.</p>', '2024-08-07', '796100604_NIZ09045.jpg', 'Event'),
	(11, 'Demo Ekstrakurikuler DIRGANTASARA 5.0', '<p><strong>SMKN 1 Bawang Gelar Demo Ekstrakurikuler Seni Karawitan dan Pedalangan untuk Kelas 10</strong></p><p><br></p><p>SMKN 1 Bawang baru-baru ini mengadakan acara demo ekstrakurikuler yang diikuti oleh siswa kelas 10. Acara yang berlangsung di GOR sekolah ini bertujuan untuk memperkenalkan kegiatan ekstrakurikuler yang ada di sekolah, khususnya seni Karawitan dan Pedalangan, kepada para siswa baru.</p><p>Acara dimulai dengan penampilan dari ekstrakurikuler Karawitan, yang membawakan beberapa lagu tradisional Jawa yang mengagumkan. Dengan menggunakan alat musik tradisional seperti <em>gendang</em>, <em>bonang</em>, <em>gong</em>, dan <em>kendang</em>, para anggota ekstrakurikuler Karawitan menunjukkan kemampuan mereka dalam memainkan lagu-lagu yang sarat akan nilai-nilai budaya Jawa.</p><p><br></p><p>"Salah satu lagu yang kami bawakan adalah \'Gambang Suling\', yang diputar dengan penuh penghayatan. Kami ingin mengajak para siswa untuk lebih mengenal dan mencintai budaya tradisional kita melalui musik," ujar salah seorang anggota ekstrakurikuler Karawitan.</p><p><br></p><p>Setelah penampilan Karawitan, acara dilanjutkan dengan demo dari ekstrakurikuler Pedalangan. Para siswa yang tergabung dalam grup Pedalangan memperlihatkan keahlian mereka dalam seni wayang kulit. Dengan menggunakan <em>wayang</em> yang terbuat dari kulit, para siswa mendemonstrasikan proses pementasan cerita wayang yang menggambarkan nilai-nilai moral dan kebudayaan Jawa.</p><p><br></p><p>"Acara ini tidak hanya untuk memperkenalkan seni tradisional, tetapi juga untuk mengajarkan nilai-nilai penting yang terkandung dalam seni Pedalangan, seperti disiplin, kekompakan, dan penghargaan terhadap budaya," ujar pembina ekstrakurikuler Pedalangan, Bapak Arief Santoso.</p><p><br></p><p>Siswa-siswa kelas 10 terlihat antusias menyaksikan dua penampilan tersebut. Mereka berharap bisa bergabung dan belajar lebih banyak tentang seni Karawitan dan Pedalangan di tahun-tahun berikutnya. Banyak di antara mereka yang terinspirasi untuk melanjutkan kegiatan ekstrakurikuler ini, yang tidak hanya mengasah keterampilan seni, tetapi juga memperkenalkan mereka pada budaya yang kaya dan luhur.</p><p><br></p><p>"Ini pengalaman yang luar biasa. Saya baru pertama kali melihat langsung penampilan Karawitan dan Pedalangan. Sangat menarik dan saya tertarik untuk ikut bergabung," ujar Rina, salah seorang siswa kelas 10.</p><p>Acara ini diakhiri dengan sesi tanya jawab di mana para siswa dapat lebih mengenal dan menanyakan langsung kepada anggota ekstrakurikuler tentang kegiatan yang mereka lakukan. Para siswa yang berminat diminta untuk mendaftar dan bergabung dengan ekstrakurikuler tersebut, yang tentunya akan menjadi sarana untuk memperdalam pengetahuan dan keterampilan mereka dalam seni budaya Jawa.</p><p>Dengan suksesnya acara ini, diharapkan akan semakin banyak siswa yang tertarik untuk mengembangkan bakat mereka di bidang seni dan budaya, serta lebih mencintai warisan budaya lokal yang telah ada sejak turun-temurun.</p>', '2024-08-07', '2012387766_293622608_1769539216732172_5339201279651266253_n.webp.jpg', 'Demo Ekstra');

-- Dumping structure for table websitekarawitan.dataanggota
CREATE TABLE IF NOT EXISTS `dataanggota` (
  `id` int NOT NULL AUTO_INCREMENT,
  `foto` varchar(225) NOT NULL DEFAULT '0',
  `namaanggota` varchar(225) NOT NULL DEFAULT '0',
  `jabatan` varchar(225) NOT NULL DEFAULT '0',
  `instagram` varchar(225) NOT NULL,
  `facebook` varchar(225) NOT NULL,
  `twitter` varchar(225) NOT NULL,
  `periode` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table websitekarawitan.dataanggota: ~21 rows (approximately)
INSERT INTO `dataanggota` (`id`, `foto`, `namaanggota`, `jabatan`, `instagram`, `facebook`, `twitter`, `periode`) VALUES
	(8, '1417149240_IMG-20241106-WA0071~2.jpg', 'Nadjwa Nur Meisya ', 'Ketua', 'https://www.instagram.com/nadjwanm/', '', '', '2023/2024'),
	(9, 'JSE.jpg', 'Daffa Mufadhol', 'Wakil Ketua', '', '', '', ''),
	(10, '951773936_IMG-20241106-WA0071~3.jpg', 'Febrianti Anjar Sari', 'Sekretaris 1', 'https://www.instagram.com/vianameyy/', '', '', ''),
	(11, '1090166719_IMG-20241106-WA0065~2.jpg', 'Syifa Coiru Nisa', 'Sekretaris 2', 'https://www.instagram.com/trriskaindhh', '', '', ''),
	(12, '268855967_IMG-20241106-WA0071~4.jpg', 'Salwa Auria Oktavviana', 'Bendahara 1', 'https://www.instagram.com/zahraalowva', '', '', ''),
	(13, '1116762737_JSE.jpg', 'Nadia', 'Bendahara 2', '', '', '', ''),
	(14, '1471320035_JSE.jpg', 'Rasya', 'Seksi Acara', '', '', '', ''),
	(15, '1141224223_JSE.jpg', 'Mutia Rahma Wati', 'Seksi Acara 2', '', '', '', ''),
	(16, '831650749_JSE.jpg', 'Satrio Aji Kurniawan', 'Seksi Acara 3', '', '', '', ''),
	(17, '1600643340_JSE.jpg', 'Azka Wardhatul ', 'Seksi Dokumentasi 1', '', '', '', ''),
	(18, '743118756_JSE.jpg', 'Khanifa Nur Khasanah', 'Seksi Dokumentasi 2', '', '', '', ''),
	(19, '2006690070_JSE.jpg', 'Christian Yoandra', 'Seksi Dokumentasi dan Sosmed', '', '', '', ''),
	(20, '292516645_JSE.jpg', 'Bagus Wisma Saputra', 'Humas 1', '', '', '', ''),
	(21, '65025828_JSE.jpg', 'Khadistia Nahwa Mauliana', 'Humas 2', '', '', '', ''),
	(22, '500974728_JSE.jpg', 'Ayu Nazila Nurahmah', 'Humas 3', '', '', '', ''),
	(23, '1622830540_JSE.jpg', 'Latanza Prangaita', 'Seksi Peralatan 1', '', '', '', ''),
	(24, '245120878_JSE.jpg', 'Raif Nur Iman', 'Seksi Peralatan 2', '', '', '', ''),
	(25, '1114520073_JSE.jpg', 'Dafa Rizky', 'Seksi Peralatan 3', '', '', '', ''),
	(26, '740431455_JSE.jpg', 'Humam Azi Mardiawan', 'Seksi Peralatan 4', '', '', '', ''),
	(27, '418646698_JSE.jpg', 'Alan Syahrul Ramadhan', 'Kebersihan atau Keamanan 1', '', '', '', ''),
	(28, '1713557973_JSE.jpg', 'Rokhayani Ningsih', 'Kebersihan atau Keamanan 2', '', '', '', ''),
	(32, '927149954_65025828_JSE.jpg', 'Hakky Maulana ', 'Kebersihan atau Keamanan 3', '', '', '', '2023/2024');

-- Dumping structure for table websitekarawitan.dataprofil
CREATE TABLE IF NOT EXISTS `dataprofil` (
  `id` int NOT NULL AUTO_INCREMENT,
  `juduldeskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `deskirpsiekstra` text NOT NULL,
  `judullatarbelakang` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `latarbelakang` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table websitekarawitan.dataprofil: ~1 rows (approximately)
INSERT INTO `dataprofil` (`id`, `juduldeskripsi`, `deskirpsiekstra`, `judullatarbelakang`, `latarbelakang`) VALUES
	(1, 'Setyo Laras', '"Setyo Laras" SMK Negeri 1 Bawang merupakan wadah bagi siswa-siswi yang memiliki kecintaan terhadap seni tradisional Jawa, khususnya dalam bidang karawitan dan pedalangan. Melalui latihan rutin dan pertunjukan,"Setyo Laras" berkomitmen untuk melestarikan dan mengembangkan kebudayaan lokal, membangun jiwa seni, serta memperkuat identitas bangsa. Dengan mengusung slogan "Hamemayu Lestarining Budaya", kami bertekad menjaga keberlangsungan warisan budaya Nusantara agar terus hidup dan berkembang di kalangan generasi muda.', 'Latar Belakang Ekstrakurikuler', 'Ekstrakurikuler karawitan merupakan sarana pembelajaran dan pelestarian budaya jawa khususnya di bidang seni karawitan dan seni pedalangan. Ekstra karawitan di SMKN 1 Bawang berdiri pada tahun 2007, namun pernah vakum dan berjalan lagi pada tahun 2018. Yang melatar belakangi didirikan ekstra karawitan ini karena dalam melestarikan budaya kurang di tanamkan generasi muda Indonesia, termasuk seni karawitan dan seni wayang kulit maka diharapkan dengan adanya ekstrakurikuler ini, siswa siswi SMKN 1 Bawang diharapkan membentuk karakter bangsa yang berbudaya dan ikut serta dalam pelestarian budaya yang ada di Indonesia.');

-- Dumping structure for table websitekarawitan.galeri
CREATE TABLE IF NOT EXISTS `galeri` (
  `id` int NOT NULL AUTO_INCREMENT,
  `foto` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `judul` varchar(50) NOT NULL DEFAULT '0',
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table websitekarawitan.galeri: ~10 rows (approximately)
INSERT INTO `galeri` (`id`, `foto`, `judul`, `deskripsi`, `tanggal`) VALUES
	(20, '298684037_356256193390492_997499371771040050_n.webp.jpg', 'HUT SKANSA KE-57', 'Ekstrakurikuler Seni Karawitan dan Pedalangan turut memeriahkan HUT SKANSA ke-57', '2022-08-06'),
	(21, '1430407295_298652402_802531727776583_2248666492735760757_n.webp.jpg', 'HUT SKANSA KE-57', 'Ekstrakurikuler Seni Karawitan dan Pedalangan turut memeriahkan HUT SKANSA ke-57', '2022-08-06'),
	(22, '997727117_298951053_638374127591078_7058177250617548744_n.webp.jpg', 'HUT SKANSA KE-57', 'Ekstrakurikuler Seni Karawitan dan Pedalangan turut memeriahkan HUT SKANSA ke-57', '2022-08-06'),
	(23, '683967163_293328475_1529052414191094_936483000446956957_n.webp.jpg', 'Demo Ekstrakurikuler', 'Ekstrakurikuler Seni Karawitan dan Pedalangan tampil pada acara demo ekstrakurikuler DIRGANTASARA 5.0', '2023-07-05'),
	(24, '1966747705_293622608_1769539216732172_5339201279651266253_n.webp.jpg', 'Demo Ekstrakurikuler', 'Ekstrakurikuler Seni Karawitan dan Pedalangan tampil pada acara demo ekstrakurikuler DIRGANTASARA 5.0', '2023-07-07'),
	(25, '1920326344_latihan (2).jpg', 'Latihan Rutin', 'Ekstrakurikuler Seni Karawitan melakukan latihan rutin setiap hari selasa.', '2024-11-12'),
	(26, '529400007_karawitan 2.jpg', 'Latihan Rutin', 'Ekstrakurikuler Seni Karawitan melakukan latihan rutin setiap hari selasa.', '2024-11-12'),
	(27, '1909884664_karawitan 5.jpg', 'Latihan Rutin', 'Ekstrakurikuler Seni Karawitan melakukan latihan rutin setiap hari selasa.', '2024-11-12'),
	(28, '709402183_header.jpg', 'HUT SKANSA KE-59', 'Ekstrakurikuler Seni Karawitan membuka acara HUT SKANSA ke-59.', '2024-08-14'),
	(29, '859653533_DSCF9985.JPG', 'HUT SKANSA KE-59', 'Ekstrakurikuler Seni Karawitan membuka acara HUT SKANSA ke-59.', '2024-08-14');

-- Dumping structure for table websitekarawitan.kontak
CREATE TABLE IF NOT EXISTS `kontak` (
  `id` int NOT NULL AUTO_INCREMENT,
  `alamatsekolah` text NOT NULL,
  `no_hp` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(225) NOT NULL DEFAULT '',
  `youtube` varchar(225) NOT NULL DEFAULT '',
  `instagram` varchar(225) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table websitekarawitan.kontak: ~1 rows (approximately)
INSERT INTO `kontak` (`id`, `alamatsekolah`, `no_hp`, `email`, `youtube`, `instagram`) VALUES
	(1, 'JL. RAYA PUCANG NO. 132, BAWANG, BANJARNEGARA, JAWA TENGAH, INDONESIA', '+6283826385062', 'karawitansmk1@gmail.com', 'https://www.youtube.com/@karawitansetyolarasskansa6141', 'https://www.instagram.com/karawitan.smkn1bawang/');

-- Dumping structure for table websitekarawitan.pendaftaran
CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL DEFAULT '0',
  `nis` varchar(50) NOT NULL DEFAULT '0',
  `kelas` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `nohp` varchar(50) NOT NULL DEFAULT '0',
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alasan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table websitekarawitan.pendaftaran: ~3 rows (approximately)
INSERT INTO `pendaftaran` (`id`, `nama`, `nis`, `kelas`, `email`, `nohp`, `alamat`, `alasan`) VALUES
	(6, 'Alviana Maysaroh', '19013', 'XI RPL', 'alvianaaamay@gmail.com', '081227755881', 'Aribaya, Pagentan, Banjarnegara, Jawa Tengah', 'Menyukai seni karawitan'),
	(14, 'Yafi alifia Zahida', '19047', 'X PPLG 2', 'yafialza@gmail.com', '088877766655', 'Gading, Banjarnegara, Jawa Tengah', 'Menyukai seni karawitan'),
	(15, 'Oriza Sativa Rochman', '1945', 'X PPLG 2', 'Orizasativa@gmail.com', '082264478123', 'Semampir, Banjarnegara', 'Ingin memperdalam ilmu mengenai ekstra karawitan'),
	(19, 'Tri Riska Indah Sari', '19044', 'X PPLG 2', 'turi@gmail.com', '088216068979', 'Gumiwang, Purwanegara', 'Karena ingin menyinden'),
	(20, 'Widiatri Nur Zahra', '19045', 'X PPLG 2', 'Widiatrinurzahra.22@gmail.com', '082264478231', 'Bawang, Banjarnegara', 'Ingin memperdalam ilmu mengenai ekstra karawitan'),
	(21, 'Inez Raisya', '19027', 'X PPLG 2', 'inezraisya@gmail.com', '8976567', 'Mandiraja, Banjarnegara', 'Ingin memperdalam ilmu mengenai ekstra karawitan');

-- Dumping structure for table websitekarawitan.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `notelp` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table websitekarawitan.user: ~0 rows (approximately)
INSERT INTO `user` (`id`, `username`, `password`, `namalengkap`, `notelp`) VALUES
	(1, 'admin_karawitan', 'setyolaras', 'Alviana Maysaroh', '081227755881'),
	(3, 'admin_alviana', 'setyolaras', 'Alviana Maysaroh', '089670479692'),
	(4, 'admin_riska', 'setyolaras', 'Tri Riska Indah Sari', '121234567679');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
