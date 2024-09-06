-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2024 at 09:42 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistempakargigi`
--

-- --------------------------------------------------------

--
-- Table structure for table `basis_aturan`
--

CREATE TABLE `basis_aturan` (
  `id_basis_aturan` int(11) NOT NULL,
  `id_penyakit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basis_aturan`
--

INSERT INTO `basis_aturan` (`id_basis_aturan`, `id_penyakit`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_gambar` int(11) NOT NULL,
  `gambar_blog` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi_blog` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_gambar`, `gambar_blog`, `judul`, `isi_blog`) VALUES
(5, '1708658661_50533404890b2da653a6.jpg', 'Mau Punya Gigi Kuat Hingga Hari Tua?', '<p style=\"text-align: justify;\"><strong>\"Rahasia Senyuman Sehat: Punya Gigi Kuat Hingga Hari Tua\"</strong></p>\r\n<p style=\"text-align: justify;\">&nbsp;<br>Siapa yang tidak menginginkan senyuman indah dan gigi yang kuat sepanjang hayat? Nah, mari kita kupas tuntas cara merawat gigi dengan baik agar senyum tetap memikat tanpa gangguan masalah kesehatan gigi. <br><br><strong>1.Rajinlah Berkunjung ke Dokter Gigi</strong> <br>Kebanyakan orang baru mendatangi dokter gigi saat merasakan nyeri atau masalah kesehatan gigi lainnya. Tapi, bagaimana kalau kita menjadikan kunjungan ke dokter gigi sebagai kegiatan rutin? Ini seperti asuransi kesehatan bagi gigi kita. <br><br><strong>2.Sikat Gigi dengan Benar</strong><br>Sikat gigi bukan cuma urusan membersihkan sisa-sisa makanan. Pastikan sikat gigi Anda menyapu setiap sela gigi dan diatasi dengan gerakan memutar lembut. Gunakan pasta gigi yang mengandung fluoride untuk memberikan perlindungan ekstra. <br><br><strong>3.Flossing Setiap Hari</strong> <br>Meskipun terdengar sepele, kebiasaan flossing sangat penting. Itu membantu membersihkan bagian antar gigi yang sulit dijangkau oleh sikat gigi, sehingga mencegah pertumbuhan plak dan kerusakan gigi. <br><br><strong>4.Pilih Makanan Sehat untuk Gigi</strong> <br>Makanan juga memainkan peran penting dalam kesehatan gigi. Hindari terlalu banyak mengonsumsi makanan manis atau asam yang dapat merusak enamel gigi. Sebaliknya, makanlah makanan yang kaya kalsium, seperti susu dan keju, untuk kekuatan gigi. <br><br><strong>5.Batasi Konsumsi Minuman Bersoda</strong> <br>Minuman bersoda bisa merusak enamel gigi karena kandungan asam dan gula di dalamnya. Jadi, sebaiknya batasi konsumsi minuman bersoda dan lebih banyak minum air putih. <br><br><strong>6. Gunakan Pelindung Gigi</strong><br>Jika Anda aktif dalam olahraga kontak atau kegiatan yang melibatkan risiko cedera pada mulut, pakailah pelindung gigi. Ini dapat mencegah gigi pecah atau copot akibat benturan. <br><br><strong>7.Hindari Kebiasaan Buruk</strong> <br>Kebiasaan buruk seperti merokok atau mengunyah es dapat merusak gigi. Berusaha untuk menghindari kebiasaan-kebiasaan ini agar senyuman tetap terjaga. <br><br>Jangan lupakan, senyum yang sehat dimulai dari merawat gigi dengan baik. Dengan langkah-langkah sederhana ini, kita bisa memiliki gigi yang kuat dan sehat hingga hari tua. Jadi, mari rawat senyuman kita bersama!</p>'),
(6, '1708658802_dfa799d8241b8ba281dd.jpg', 'Gigi anak berlubang, Tips Cara Mengatasinya', '<p style=\"text-align: justify;\"><strong>\"Tips Sederhana Atasi Gigi Anak Berlubang dan Senyuman Tetap Ceria\"</strong></p>\r\n<p style=\"text-align: justify;\">Senyuman ceria anak-anak adalah harta yang tak ternilai. Namun, kadang-kadang masalah kesehatan gigi seperti gigi berlubang bisa muncul. Tenang, berikut adalah beberapa tips sederhana yang bisa membantu mengatasi masalah tersebut dan membuat senyuman anak tetap bersinar.</p>\r\n<p style=\"text-align: justify;\"><br><strong>1. Konsultasikan dengan Dokter Gigi</strong><br>Langkah pertama yang paling penting adalah berkonsultasi dengan dokter gigi. Mereka akan memberikan evaluasi menyeluruh dan saran yang sesuai dengan kondisi khusus gigi anak.</p>\r\n<p style=\"text-align: justify;\"><br><strong>2. Perhatikan Pola Makan Sehat</strong><br>Makanan memainkan peran besar dalam kesehatan gigi. Pastikan anak mengonsumsi makanan sehat yang kaya akan kalsium, seperti susu, keju, dan sayuran hijau. Batasi konsumsi makanan manis yang dapat merusak gigi.</p>\r\n<p style=\"text-align: justify;\"><br><strong>3. Ajarkan Sikat Gigi yang Benar</strong><br>Bantu anak untuk menjadikan sikat gigi sebagai kegiatan yang menyenangkan. Pilih sikat gigi yang sesuai dengan usianya dan ajarkan gerakan sikat yang benar. Pastikan mereka menyikat gigi setidaknya dua kali sehari.</p>\r\n<p style=\"text-align: justify;\"><br><strong>4. Gunakan Pasta Gigi Khusus Anak</strong><br>Pilih pasta gigi yang dirancang khusus untuk anak-anak. Biasanya, pasta gigi anak memiliki rasa yang lebih ringan dan motif yang menarik bagi mereka.</p>\r\n<p style=\"text-align: justify;\"><br><strong>5. Flossing atau Pembersih Gigi Antara</strong><br>Meskipun mungkin sulit untuk anak kecil, flossing atau pembersih gigi antara dapat membantu membersihkan sisa-sisa makanan di area yang sulit dijangkau oleh sikat gigi.</p>\r\n<p style=\"text-align: justify;\"><br><strong>6. Hindari Memberi Susu atau Minuman Manis Sebelum Tidur</strong><br>Memberi anak minuman manis atau susu sebelum tidur dapat meningkatkan risiko gigi berlubang. Sebisa mungkin, berikan mereka waktu setidaknya satu jam sebelum tidur.</p>\r\n<p style=\"text-align: justify;\"><br><strong>7. Buat Rutinitas Pemeriksaan Gigi Menjadi Menyenangkan</strong><br>Ajak anak untuk rutin periksa gigi dengan suasana yang menyenangkan. Bisa dengan memberikan reward setelah kunjungan atau menceritakan manfaat menjaga gigi dengan baik.</p>\r\n<p style=\"text-align: justify;\"><br>Ingatlah, deteksi dini dan perawatan gigi yang baik dapat membuat senyuman anak tetap ceria. Dengan tips-tips di atas, kita bisa bersama-sama menjaga kesehatan gigi si kecil dan melihat senyumannya tetap memikat.</p>'),
(7, '1708660047_f80632837af4f42e48d5.jpg', 'Gigi Berlubang Perlukah di Cabut?', '<p style=\"text-align: justify;\">Gigi berlubang bisa jadi momok menakutkan, terutama jika pertanyaan tentang pencabutan muncul. Tenang, mari kita bahas bersama dengan penuh keprihatinan.</p>\r\n<p style=\"text-align: justify;\"><br><strong>Gigi Berlubang </strong>: Apa yang Perlu Kita Ketahui?</p>\r\n<p style=\"text-align: justify;\"><br>Gigi berlubang disebabkan oleh kerusakan struktur gigi akibat bakteri dan asam. Namun, tidak semua gigi berlubang harus dicabut. Beberapa hal yang perlu dipertimbangkan:</p>\r\n<ol style=\"text-align: justify;\">\r\n<li style=\"text-align: justify;\"><strong>Ukuran dan Lokasi Lubang</strong>\r\n<ul style=\"list-style-type: square;\">\r\n<li style=\"text-align: justify;\">Lubang Kecil: Jika lubangnya kecil dan terbatas pada email (bagian terluar gigi), perawatan seperti penambalan mungkin bisa mencukupi.</li>\r\n<li style=\"text-align: justify;\">Lubang Besar atau dalam: Lubang besar atau yang mencapai bagian dalam gigi mungkin memerlukan pertimbangan pencabutan.</li>\r\n</ul>\r\n</li>\r\n<li style=\"text-align: justify;\"><strong>Kesehatan Gigi Secara Keseluruhan</strong>\r\n<ul style=\"list-style-type: square;\">\r\n<li style=\"text-align: justify;\">Gigi Sehat: Jika gigi yang berlubang adalah satu-satunya yang terkena dan gigi lainnya sehat, upaya untuk menyelamatkannya mungkin lebih diutamakan.</li>\r\n<li style=\"text-align: justify;\">Gigi Rusak Lainnya: Jika gigi lain juga bermasalah, pencabutan bisa menjadi pilihan untuk mencegah masalah lebih lanjut.</li>\r\n</ul>\r\n</li>\r\n<li style=\"text-align: justify;\"><strong>Pertimbangan Kesehatan Umum</strong>\r\n<ul style=\"list-style-type: square;\">\r\n<li style=\"text-align: justify;\">Kesehatan Umum: Kondisi kesehatan umum, seperti diabetes atau penyakit jantung, bisa memengaruhi keputusan pencabutan. Konsultasikan dengan dokter gigi untuk mempertimbangkan risiko.</li>\r\n</ul>\r\n</li>\r\n</ol>\r\n<p style=\"text-align: justify;\"><strong>Keputusan Pencabutan:</strong> Prosedur dan Persiapan</p>\r\n<p style=\"text-align: justify;\">Jika pencabutan menjadi pilihan terbaik, berikut beberapa informasi yang perlu diketahui:</p>\r\n<ul style=\"list-style-type: square; text-align: justify;\">\r\n<li>Pembedahan: Pencabutan gigi melibatkan pembedahan kecil. Dokter gigi akan memastikan area sekitar gigi tercukupi anestesi lokal untuk meminimalkan rasa sakit.</li>\r\n<li>Perawatan Setelah Pencabutan: Perawatan setelah pencabutan melibatkan kebersihan luka dan penggunaan obat pereda nyeri sesuai petunjuk dokter.</li>\r\n</ul>\r\n<p style=\"text-align: justify;\"><strong>Memahami Pilihan Anda</strong><br>Keputusan untuk mencabut gigi bukanlah sesuatu yang diinginkan, tetapi kadang-kadang itu adalah langkah yang diperlukan untuk menjaga kesehatan gigi dan tubuh secara keseluruhan.</p>\r\n<p style=\"text-align: justify;\"><br>Selalu konsultasikan dengan dokter gigi untuk mendapatkan informasi lebih lanjut dan pemahaman yang sesuai dengan situasi khusus gigi Anda. Ingatlah, tindakan pencegahan dan perawatan rutin adalah kunci untuk menjaga senyuman tetap bersinar!</p>'),
(8, '1708660199_774cadb14f7af4b67894.jpg', 'Kebiasaan Ini Dapat Merusak Gigi', '<p style=\"text-align: justify;\">Setiap senyuman membutuhkan perhatian khusus, dan kebiasaan sehari-hari kita bisa memainkan peran besar dalam kesehatan gigi. Mari bahas 5 kebiasaan sepele yang bisa merusak gigi kita tanpa kita sadari.</p>\r\n<p style=\"text-align: justify;\"><br><strong>1. Gigit Kuku</strong><br>Kebiasaan menggigit kuku mungkin tampak sepele, tapi itu bisa merusak gigi dan merusak rahang. Coba hindari agar senyum tetap indah!</p>\r\n<p style=\"text-align: justify;\"><br><strong>2. Mengunyah Es</strong><br>Es seringkali dianggap sepele untuk dikunyah, tapi ini dapat menyebabkan kerusakan struktural pada gigi. Air putih mungkin bisa menjadi alternatif yang lebih baik.</p>\r\n<p style=\"text-align: justify;\"><br><strong>3. Menderita dari Bruxism (Gerusan Gigi)</strong><br>Banyak dari kita tidak sadar bahwa kita meremas gigi saat stres atau bahkan saat tidur. Ini dapat menyebabkan kerusakan serius pada enamel gigi. Pertimbangkan untuk menggunakan pelindung gigi jika Anda menderita bruxism.</p>\r\n<p style=\"text-align: justify;\"><br><strong>4. Kebiasaan Mengigit Benda Keras</strong><br>Apakah Anda suka mengigit pulpen atau benda keras lainnya? Hati-hati, karena itu dapat merusak gigi Anda dan memicu rasa sakit yang tidak diinginkan.</p>\r\n<p style=\"text-align: justify;\"><br><strong>5. Minum Minuman Bersoda Secara Berlebihan</strong><br>Minuman bersoda dapat merusak enamel gigi karena kadar asamnya yang tinggi. Menikmati secangkir atau dua sesekali mungkin oke, tapi kurangi konsumsi secara berlebihan.</p>\r\n<p style=\"text-align: justify;\"><br>Senyum Sehat dengan Kebiasaan yang Baik<br>Untuk menjaga senyuman tetap sehat, hindari kebiasaan-kebiasaan di atas. Selain itu, rutinlah melakukan pemeriksaan gigi, dan bersikaplah proaktif dalam menjaga kesehatan mulut.</p>\r\n<p style=\"text-align: justify;\"><br>Ingatlah, kecilnya kebiasaan sehari-hari kita bisa berdampak besar pada kesehatan gigi. Jadi, tetapkan kebiasaan positif dan senyumlah dengan percaya diri!</p>'),
(9, '1708660358_5e345e66db6e6b49c9f9.jpg', 'Gigi Ngilu Saat Mengkonsumsi Es?', '<p style=\"text-align: justify;\">Senangnya menikmati es saat cuaca panas, tapi bagaimana jika gigi tiba-tiba terasa ngilu? Jangan khawatir, mari kita bahas penyebabnya dan bagaimana cara mengatasinya.</p>\r\n<p style=\"text-align: justify;\"><br><strong>Penyebab Sensitivitas Gigi terhadap Es:</strong></p>\r\n<p><br><strong>1. Erosi Email (Lapisan Pelindung Gigi Terkikis):</strong> Pemakaian sikat gigi yang terlalu keras atau penggunaan pasta gigi abrasif bisa merusak lapisan email gigi, menyebabkan gigi lebih sensitif.</p>\r\n<p><br><strong>2. Retraksi Gusi (Pengunduran Gusi):</strong> Gusi yang turun bisa meninggalkan akar gigi terbuka dan lebih rentan terhadap sensasi dingin.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>3. Kerusakan Gigi atau Restorasi:</strong> Gigi yang retak atau restorasi yang rusak bisa memungkinkan suhu dingin menembus lebih dalam dan menyebabkan ngilu.</p>\r\n<p>&nbsp;</p>\r\n<p><br><strong>Tips untuk Mengurangi Sensitivitas:</strong></p>\r\n<p><br><strong>1. Pilih Sikat Gigi yang Lembut:</strong> Sikat gigi dengan bulu lembut dapat membantu mencegah kerusakan lapisan email gigi.<br>Gunakan Pasta Gigi Khusus Sensitivitas: Banyak pasta gigi dirancang khusus untuk gigi sensitif dengan bahan yang dapat membantu mengurangi ngilu.</p>\r\n<p><br><strong>2. Hindari Makanan Asam:</strong> Asam dapat memperburuk sensitivitas gigi. Hindari makanan dan minuman yang sangat asam.<br>Konsultasikan dengan Dokter Gigi: Jika ngilu terus berlanjut, berkonsultasilah dengan dokter gigi. Mereka dapat memberikan saran dan perawatan yang sesuai.</p>\r\n<p><br><strong>3. Penting untuk Pergi ke Dokter Gigi:</strong><br>Sensitivitas gigi bisa menjadi tanda masalah yang lebih besar. Jangan ragu untuk berkonsultasi dengan dokter gigi untuk penanganan yang tepat dan menjaga senyuman tetap cerah dan sehat!</p>\r\n<p><br>Jadi, jangan biarkan sensasi dingin merusak kesenangan Anda. Temukan solusinya dan nikmati es dengan nyaman!</p>'),
(10, '1708660490_c797f03f60694efa7424.jpg', 'Kapan Kita Harus Ke Dokter Gigi?', '<p style=\"text-align: justify;\">Senyuman yang sehat bukan hanya tentang penampilan, tapi juga kesehatan gigi dan gusi. Berikut adalah panduan sederhana tentang kapan dan mengapa kita harus mengunjungi dokter gigi secara teratur:</p>\r\n<p style=\"text-align: justify;\"><br><strong>1. Setiap 6 Bulan Sekali: Perawatan Pencegahan</strong><br>Secara umum, disarankan untuk menjalani pemeriksaan gigi setiap enam bulan sekali. Ini membantu dalam pencegahan masalah gigi sebelum mereka berkembang menjadi sesuatu yang lebih serius.</p>\r\n<p style=\"text-align: justify;\"><br><strong>2. Mengatasi Nyeri atau Ketidaknyamanan</strong><br>Jika Anda mengalami nyeri gigi, perdarahan gusi, atau ketidaknyamanan lainnya, segera atur janji dengan dokter gigi. Masalah kecil dapat menjadi besar jika diabaikan.</p>\r\n<p style=\"text-align: justify;\"><br><strong>3. Perawatan Gigi Anak-Anak</strong><br>Anak-anak perlu menjalani pemeriksaan gigi secara teratur. Kunjungan pertama sebaiknya dilakukan setelah gigi pertama muncul atau sekitar usia satu tahun.</p>\r\n<p style=\"text-align: justify;\"><br><strong>4. Perubahan dalam Mulut</strong><br>Jika Anda melihat perubahan dalam mulut, seperti bengkak, perubahan warna gusi, atau tanda-tanda lain yang tidak biasa, ini bisa menjadi tanda masalah dan memerlukan perhatian dokter gigi.</p>\r\n<p style=\"text-align: justify;\"><br><strong>5. Untuk Pemeliharaan Perawatan Khusus</strong><br>Orang yang menjalani perawatan khusus seperti behel atau gigi palsu juga perlu kunjungan rutin. Dokter gigi dapat memastikan semuanya berjalan dengan baik.</p>\r\n<p style=\"text-align: justify;\"><br><strong>6. Saat Gejala Tidak Biasa Muncul</strong><br>Jika Anda merasa ada yang tidak biasa atau mengalami masalah gigi atau mulut yang tidak bisa dijelaskan, lebih baik berkonsultasi dengan dokter gigi.</p>\r\n<p style=\"text-align: justify;\"><br>Ingat!</p>\r\n<p style=\"text-align: justify;\"><br>Mengunjungi dokter gigi bukan hanya tentang perawatan masalah yang sudah ada, tapi juga tentang pencegahan. Dengan perawatan yang rutin, Anda dapat menjaga senyuman tetap indah dan sehat!</p>\r\n<p style=\"text-align: justify;\"><br>Jadi, tetap tersenyum dan jaga kesehatan gigi Anda dengan rajin mengunjungi dokter gigi!</p>');

-- --------------------------------------------------------

--
-- Table structure for table `detail_basis_aturan`
--

CREATE TABLE `detail_basis_aturan` (
  `id_basis_aturan` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_basis_aturan`
--

INSERT INTO `detail_basis_aturan` (`id_basis_aturan`, `id_gejala`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 1),
(2, 2),
(2, 5),
(2, 6),
(2, 7),
(3, 2),
(3, 8),
(3, 9),
(3, 10),
(3, 11),
(3, 12),
(4, 1),
(4, 13),
(4, 14),
(4, 15),
(4, 16),
(4, 17),
(5, 1),
(5, 14),
(5, 15),
(5, 16),
(5, 18),
(5, 19),
(5, 20),
(6, 1),
(6, 14),
(6, 15),
(6, 16),
(6, 21),
(6, 22),
(6, 23),
(6, 24),
(6, 25),
(7, 1),
(7, 16),
(7, 23),
(7, 26),
(7, 27),
(7, 28),
(7, 29),
(8, 30),
(8, 31),
(8, 32),
(8, 33),
(8, 34),
(8, 35),
(9, 1),
(9, 2),
(9, 14),
(9, 15),
(9, 36),
(9, 37);

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama_dokter` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `username`, `password`) VALUES
(1, 'zita', 'dokter1', 'b58e662260eae03824c6f5da01129b5f02990e45');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` int(11) NOT NULL,
  `nama_gejala` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `nama_gejala`) VALUES
(1, 'Nyeri Gigi'),
(2, 'Gigi terasa sensitif terhadap makanan atau minuman panas, dingin, atau manis'),
(3, 'Terdapat lubang atau cekungan'),
(4, 'Bercak putih atau hitam pada gigi'),
(5, 'Gigi terasa kasar saat disentuh dengan lidah atau jari'),
(6, 'Gigi terlihat lebih tipis'),
(7, 'Gigi terlihat lebih datar'),
(8, 'Rasa sakit saat mengunyah, makanan keras atau renyah'),
(9, 'Gigi terlihat lebih pendek'),
(10, 'Senyuman tampak tidak rata'),
(11, 'Gigi tampak lebih kecil'),
(12, 'Tepi gigi rata dan halus'),
(13, 'Gusi terasa sakit atau gatal'),
(14, 'Bau mulut yang kurang sedap'),
(15, 'Gusi merah dan bengkak'),
(16, 'Mudah berdarah ketika menyikat gigi'),
(17, 'Perubahan bentuk gusi lebih menonjol dan menutupi sebagian gigi'),
(18, 'Gigi terasa longgar'),
(19, 'Rasa asin atau pahit setelah bangun tidur'),
(20, 'Gusi mundur membuat gigi terlihat menjadi panjang'),
(21, 'Sulit buka mulut'),
(22, 'Rasa pahit dimulut'),
(23, 'Pembengkakan di wajah'),
(24, 'Perubahan bentuk gigi'),
(25, 'Bercak putih di gusi'),
(26, 'Nyeri yang berdenyut-denyut'),
(27, 'Nyeri yang menjalar ke telinga'),
(28, 'Pembengkakan di sekitar gigi'),
(29, 'Warna gigi menjadi lebih hitam'),
(30, 'Nyeri saat gigi disentuh atau diketuk'),
(31, 'Sakit gigi hebat'),
(32, 'Sensitive terhadap perubahan suhu'),
(33, 'Merasakan sempit di mulut'),
(34, 'Kedua gigi bertumpuk'),
(35, 'Gigi susu tetap ada'),
(36, 'Demam'),
(37, 'Luka terbuka pada gusi'),
(38, 'Sakit gigi yang terus menerus'),
(39, 'Gigi pecah atau retak'),
(40, 'Perubahan Bentuk Gusi');

-- --------------------------------------------------------

--
-- Table structure for table `list_diagnosa_pasien`
--

CREATE TABLE `list_diagnosa_pasien` (
  `id_pasien` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_penyakit` varchar(30) NOT NULL,
  `waktu_diagnosa` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_diagnosa_pasien`
--

INSERT INTO `list_diagnosa_pasien` (`id_pasien`, `username`, `nama_penyakit`, `waktu_diagnosa`) VALUES
(73, 'alfurqon', 'KARIES GIGI', '2024-05-04 17:58:07'),
(80, 'alfurqon', 'IMPAKSI GIGI', '2024-06-01 00:32:27'),
(81, 'alfurqon', 'IMPAKSI GIGI', '2024-06-14 19:29:11'),
(82, 'alfurqon', 'KARIES GIGI', '2024-06-14 20:54:07'),
(83, 'nabilah', 'ATRISI GIGI', '2024-06-23 05:07:26'),
(84, 'nabilah', 'ATRISI GIGI', '2024-06-23 05:11:57'),
(85, 'nabilah', 'ATRISI GIGI', '2024-06-23 05:17:24'),
(86, 'dova', 'PULPITIS', '2024-06-24 05:50:28'),
(87, 'dini', 'GINGIVITIS', '2024-06-25 07:14:46'),
(88, 'uciyinthesky', 'PULPITIS', '2024-06-29 05:50:46'),
(89, 'uciyinthesky', 'PULPITIS', '2024-06-29 05:55:56'),
(90, 'ucok', 'KARIES GIGI', '2024-08-07 07:02:39'),
(91, 'ucok', 'KARIES GIGI', '2024-08-07 07:04:06'),
(92, 'alfurqon', 'ULKUS DEKUBITUS', '2024-08-08 05:55:56'),
(93, 'fajar', 'KARIES GIGI', '2024-08-27 23:43:20'),
(94, 'alfurqon', 'KARIES GIGI', '2024-08-28 06:42:42'),
(95, 'hilman', 'KARIES GIGI', '2024-08-30 18:45:35'),
(96, 'hilman', 'KARIES GIGI', '2024-08-30 18:46:33'),
(97, 'hilman', 'GINGIVITIS', '2024-08-30 18:46:50'),
(98, 'hilman', 'GINGIVITIS', '2024-08-30 18:47:12'),
(99, 'alfurqon', 'KARIES GIGI', '2024-09-01 00:54:49'),
(100, 'alfurqon', 'KARIES GIGI', '2024-09-01 01:05:25');

-- --------------------------------------------------------

--
-- Table structure for table `list_konsultasi_pasien`
--

CREATE TABLE `list_konsultasi_pasien` (
  `id_konsultasi` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `waktu_konsultasi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_konsultasi_pasien`
--

INSERT INTO `list_konsultasi_pasien` (`id_konsultasi`, `username`, `waktu_konsultasi`) VALUES
(16, 'alfurqon', '2024-05-12 19:44:40'),
(19, 'alfurqon', '2024-05-20 20:41:25'),
(20, 'dova', '2024-06-24 05:53:27'),
(21, 'dini', '2024-06-25 07:17:16'),
(22, 'uciyinthesky', '2024-06-29 05:58:07'),
(23, 'alfurqon', '2024-08-30 05:18:26');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` int(11) NOT NULL,
  `nama_penyakit` varchar(30) NOT NULL,
  `pengertian_penyakit` text NOT NULL,
  `penyebab` text NOT NULL,
  `image_penyakit` varchar(255) NOT NULL,
  `sp_mandiri` text NOT NULL,
  `sp_spesifik` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `nama_penyakit`, `pengertian_penyakit`, `penyebab`, `image_penyakit`, `sp_mandiri`, `sp_spesifik`) VALUES
(1, 'KARIES GIGI', '<p dir=\"ltr\">Karies gigi itu seperti cerita sedih bagi gigi kita. Bayangkan saja, ada bakteri jahil di mulut yang suka membuat masalah. Mereka suka makan sisa makanan di gigi kita dan mengeluarkan asam. Nah, asam ini adalah musuh besar email gigi kita yang keras. Kalau email gigi kena serangan asam terus-menerus, akhirnya bisa timbul lubang atau karies. Jadi, penting banget buat sikat gigi dan bersihkan plaknya dengan rajin supaya kita bisa jauh dari cerita karies gigi yang bikin gigi sakit!.</p>', '<p dir=\"ltr\">1. <strong>Bakteri</strong>, Di mulut kita, ada bakteri. Ketika kita makan makanan manis atau minuman bersoda, bakteri ini memakannya juga</p>\r\n<p dir=\"ltr\">2. <strong>Asam</strong>, Bakteri ini mengubah gula dari makanan menjadi asam. Asam ini merusak lapisan keras gigi, yang disebut enamel.&nbsp;</p>\r\n<p dir=\"ltr\">3. <strong>Kerusakan gigi</strong>, Jika kerusakan ini terus berlanjut, gigi bisa berlubang dan menyebabkan sakit.</p>', '1723040492_1980ef63b7acd15a37be.jpg', '<ol>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Pastikan kamu selalu rajin menyikat gigi dan menjauhi makanan manis ya !&nbsp;</p>\r\n</li>\r\n</ol>', '<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>Filling (Tambalan Gigi):</strong> Jika gigi Anda baru mulai berlubang, dokter gigi akan membersihkan gigi Anda, lalu menutup bagian yang berlubang dengan tambalan khusus.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>Root Canal Treatment (Perawatan Saluran Akar):</strong> Jika kerusakan sudah mencapai bagian dalam gigi, dokter gigi akan membersihkan dan mengobati bagian dalam gigi, lalu menutupnya.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>Crown(Mahkota Gigi)</strong>, Jika kerusakan gigi cukup besar, dokter gigi akan menempatkan mahkota gigi untuk melindungi gigi sisa yang sehat.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>Extraction (Cabut Gigi)</strong>, Jika gigi tidak bisa diperbaiki, dokter gigi mungkin harus mencabutnya. Jangan khawatir, prosedur ini dilakukan dengan hati-hati untuk meminimalkan rasa tidak nyaman.</p>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>'),
(2, 'ABRASI GIGI', '<p dir=\"ltr\" style=\"text-align: justify;\">Abrasi gigi adalah kondisi di mana lapisan luar gigi (email) aus atau terkikis karena gesekan berulang dengan benda-benda keras, misalnya menyikat gigi terlalu keras atau menggunakan gigi sebagai alat membuka sesuatu. Jika kita membayangkan gigi seperti pelindung buku, abrasi terjadi ketika sampul buku (email gigi) rusak karena sering digesekan atau tergores. Ini bisa membuat gigi terasa lebih sensitif dan menurunkan kekuatannya. Oleh karena itu, penting untuk menghindari perilaku yang dapat menyebabkan abrasi, seperti menyikat gigi dengan terlalu keras atau menggunakan gigi untuk hal-hal yang bukan fungsinya.&nbsp;</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>', '<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>Sikat gigi yang terlalu keras</strong>, Menggunakan sikat gigi yang terlalu keras atau teknik menyikat gigi yang kasar dapat merusak enamel gigi.</p>\r\n</li>\r\n</ul>\r\n<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>Mengunyah benda keras</strong>, Mengunyah benda keras seperti pensil atau pulpen secara tidak sengaja menyebabkan gesekkan berlebih pada gigi.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>Menyikat gigi dengan gerakan horizontal</strong>, Menyikat gigi dengan gerakan horizontal, terutama dengan tekanan yang kuat dapat menyebabkan abrasi gigi.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>Pemakaian pemutih gigi yang berlebihan</strong>, Penggunaan pemutih gigi yang berlebihan dan tidak sesuai dengan petunjuk dokter dapat mengikis enamel gigi.</p>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>', '1723040718_56201b18c485f0164b55.jpg', '<ul>\r\n<li dir=\"ltr\" style=\"text-align: justify;\">Gunakan sikat gigi dengan bulu yang lembut dan teknik menyikat yang lembut. Hindari menyikat terlalu keras untuk mengurangi tekanan pada gigi.</li>\r\n<li dir=\"ltr\" style=\"text-align: justify;\" aria-level=\"2\">\r\n<p dir=\"ltr\" role=\"presentation\">Batasi konsumsi makanan dan minuman yang tinggi asam. Asam dapat mengikis enamel gigi.</p>\r\n</li>\r\n<li dir=\"ltr\" style=\"text-align: justify;\" aria-level=\"2\">\r\n<p dir=\"ltr\" role=\"presentation\">Hindari menggigit benda keras seperti menggigit kuku, pensi atau benda keras lainnya.</p>\r\n</li>\r\n</ul>\r\n<p style=\"text-align: justify;\">&nbsp;</p>', '<ul>\r\n<li dir=\"ltr\" aria-level=\"2\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>Filling (Tambalan Gigi)</strong>, Jika abrasi baru dimulai, dokter gigi akan membersihkan dan mengisi bagian yang aus dengan bahan khusus. Ini melindungi gigi dari kerusakan lebih lanjut.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"2\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>Crown (Mahkota Gigi)</strong>, Jika abrasi sudah parah, dokter gigi akan menyarankan pemasangan mahkota gigi. Mahkota gigi adalah pelindung gigi palsu yang dipasang di atas gigi asli kamu, memberikan perlindungan ekstra.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"2\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>Root Canal Treatment (Perawatan Gusi dan Akar)</strong>,Jika abrasi mencapai akar gigi dan mempengaruhi gusi, dokter gigi akan membersihkan saluran akar gigi dan memulihkan gusi yang terkena.</p>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>'),
(3, 'ATRISI GIGI', '<p dir=\"ltr\" style=\"text-align: justify;\">Atrisi gigi adalah kondisi di mana gigi Anda mengalami pengikisan atau kehilangan lapisan kerasnya karena gesekan berlebihan, biasanya karena mengunyah makanan atau menyikat gigi terlalu keras. Ini bisa membuat gigi terlihat pendek atau meruncing. Jadi, bayangkan atrisi gigi seperti gigi yang perlahan \"memudar\" karena gesekan berlebihan, seperti pensil yang lama-lama menjadi pendek karena sering digunakan.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>', '<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" style=\"text-align: justify;\" role=\"presentation\">Penggunaan gigi untuk kegiatan selain mengunyah, seperti membuka botol atau menggigit benda keras.</p>\r\n</li>\r\n<li dir=\"ltr\" style=\"text-align: justify;\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Gertakan gigi (bruxism), kebiasaan menggertakan gigi saat tidur bisa menyebabkan atrisi gigi.</p>\r\n</li>\r\n<li dir=\"ltr\" style=\"text-align: justify;\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Pemakaian terlalu banyak obat kumur beralkohol berlebihan. karena obat kumur yang mengandung alkohol berlebihan bisa mengurangi produksi air liur yang melindungi gigi.</p>\r\n</li>\r\n<li dir=\"ltr\" style=\"text-align: justify;\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Makan asam dan manis, makan dan minum yang tinggi asam atau gula dapat melunakkan enamel gigi. Bersihkan gigi setelah mengkonsumsi makanan ini.</p>\r\n</li>\r\n</ul>\r\n<p style=\"text-align: justify;\">&nbsp;</p>', '1723040865_001dadebb5b61a15442b.jpg', '<ul>\r\n<li dir=\"ltr\" role=\"presentation\">Sikat gigi dengan benar, gunakan sikat gigi yang lembut dan pasta gigi dengan fluoride, Sikat gigi secara lembut selama 2 menit setidaknya dua kali sehari.</li>\r\n<li dir=\"ltr\" role=\"presentation\">Batasi makanan asam dan manis yang tinggi, Jika mengkonsumsinya jangan lupa sikat gigi.</li>\r\n<li dir=\"ltr\" role=\"presentation\">Gunakan pelindung gigi jika kamu menggertakkan gigi saat tidur, tujuannya agar dapat mengurangi gesekkan antar gigi.</li>\r\n</ul>', '<ul>\r\n<li dir=\"ltr\" aria-level=\"2\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>Filling (Tambalan Gigi)</strong>, Dokter gigi akan membersihkan gigi kamu dan menambal bagian yang aus dengan bahan khusus. Ini membuat gigi kamu kuat dan terlindung</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"2\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>Crown (Mahkota Gigi)</strong>, Dokter gigi akan menempatkan \"mahkota\" gigi palsu yang kokoh di atas gigi yang lemah. Mahkota ini seperti pelindung kuat untuk gigi kamu.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"2\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>Root Canal Treatment (Perawatan saluran akar)</strong>, Dokter gigi akan membersihkan bagian dalam gigi Anda jika ada infeksi, kemudian menutupnya rapat. Ini menghilangkan rasa sakit dan menjaga gigi Anda tetap sehat.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"2\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>Extraction (Pencabutan Gigi)</strong>, Dokter gigi akan mengeluarkan gigi yang rusak dengan lembut, sehingga Anda merasa nyaman dan lega.</p>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>'),
(4, 'GINGIVITIS', '<p dir=\"ltr\">Gingivitis adalah teman tidak diundang bagi gusi kamu. Ini terjadi ketika gusi kamu meradang, membuatnya merah, bengkak, dan mudah berdarah, terutama saat menyikat gigi.</p>', '<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Plak gigi yang menumpuk, Ketika kita tidak membersihkan sisa-sisa makanan dengan baik, plak gigi (lapisan lengket yang terbentuk di gigi) bisa menumpuk. Bakteri dalam plak ini dapat menyebabkan peradangan pada gusi.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Kurangnya menjaga kebersihan mulut.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Kebiasaan merokok, Merokok bisa melemahkan sistem kekebalan tubuh dan mempengaruhi kesehatan gusi, membuatnya rentan terhadap peradangan.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Kondisi medis seperti diabetes dapat mempengaruhi kesehatan gusi.</p>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>', '1723042718_6554ac58d845548f36ee.jpeg', '<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Menyikat gigi dengan benar, sikat gigi dua kali sehari dengan pasta gigi fluoride. Pastikan menyikat seluruh permukaan gigi dan lidah.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"2\">\r\n<p dir=\"ltr\" role=\"presentation\">Penggunaan Benang Gigi (Flossing), gunakan benang gigi setidaknya sekali sehari untuk membersihkan sela-sela gigi dimana sikat gigi sulit mencapainya.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"2\">\r\n<p dir=\"ltr\" role=\"presentation\">Gunakan obat kumur antiseptik setelah menyikat gigi untuk membunuh bakteri di mulut.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"2\">\r\n<p dir=\"ltr\" role=\"presentation\">Kurangi konsumsi makanan manis yang dapat menyebabkan plak gigi</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"2\">\r\n<p dir=\"ltr\" role=\"presentation\">Hindari rokok, merokok dapat memperburuk kondisi gingivitis.</p>\r\n</li>\r\n</ul>', '<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>Pembersihan Mendalam (Scaling dan Root Planing)</strong>, Dokter gigi akan membersihkan plak keras yang sulit dijangkau oleh sikat gigi.&nbsp;</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>Perawatan laser</strong>, Dokter gigi bisa menggunakan teknologi laser yang tidak menyakitkan. Laser membantu menghilangkan jaringan meradang dengan lembut dan membersihkan area yang terkena gingivitis.</p>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>'),
(5, 'PERIODONTITIS', '<p dir=\"ltr\">Periodontitis adalah kondisi yang melibatkan peradangan pada jaringan sekitar gigi, termasuk gusi, tulang, dan ligamen. Ini terjadi ketika plak gigi, yang terbentuk dari bakteri dan sisa makanan, tidak dibersihkan dengan baik dan menyebabkan peradangan.</p>\r\n<p>&nbsp;</p>', '<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Plak dan tartar, penumpukkan plak yang tidak dibersihkan dengan benar bisa mengeras menjadi tartar. Tartar sulit dibersihkan dengan sikat gigi biasa dan perlu dihilangkan oleh dokter gigi.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Bakteri jahat, bakteri dalam plak dan tartar bisa menyebabkan infeksi pada gusi, Beberapa jenis bakteri ini menghasilkan zat-zat yang merusak jaringan gusi dan menyebabkan peradangan.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Kebiasaan buruk seperti merokok, konsumsi alkohol berlebihan dan kurangnya kebersihan mulut dapat meningkatkan resiko periodontitis.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Genetika, beberapa orang memiliki kecenderungan genetika untuk mengalami masalah gusi, termasuk periodontitis.</p>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>', '1723042878_fd05ce3b7f564d6c14e6.jpg', '<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Sikat gigi dengan benar, gunakan sikat gigi yang lembut dan bersihkan gigi secara menyeluruh setidaknya dua kali sehari. Pastikan menyikat gigi dan gusi dengan lembut.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"2\">\r\n<p dir=\"ltr\" role=\"presentation\">Flossing (Pembersihan Gigi dengan Benang Gigi) Gunakan benang gigi atau alat pembersih antar gigi setiap hari untuk membersihkan sela-sela gigi yang sulit dijangkau oleh sikat gigi.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"2\">\r\n<p dir=\"ltr\" role=\"presentation\">Hindari kebiasaan buruk, seperti berhenti merokok dan batasi konsumsi alkohol. Kedua kebiasaan ini dapat memperburuk kondisi periodontitis.</p>\r\n</li>\r\n</ul>', '<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>Scaling dan Root Planing,</strong> dokter gigi akan membersihkan plak dan tartar yang terakumulasi di atas dan di bawah garis gusi.&nbsp;</p>\r\n</li>\r\n</ul>\r\n<ul>\r\n<li dir=\"ltr\" aria-level=\"2\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>Terapi laser</strong>, Penggunaan laser dapat membantu menghilangkan jaringan meradang dan membunuh.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"2\">\r\n<p dir=\"ltr\" role=\"presentation\">&nbsp;<strong>Perawatan Bedah</strong>, &nbsp;Dalam kasus yang lebih parah, dokter gigi mungkin perlu melakukan prosedur bedah untuk membersihkan akar gigi dan memperbaiki jaringan gusi yang rusak.</p>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>'),
(6, 'IMPAKSI GIGI', '<p>Impaksi gigi terjadi ketika gigi tidak dapat tumbuh dengan benar ke dalam posisi normalnya di dalam rongga mulut. Biasanya, ini terjadi pada gigi bungsu (geraham bungsu) karena ruang yang terbatas di rongga mulut. Bayangkan ini seperti situasi di mana ada tamu ekstra di pesta yang padat. Jika tidak ada cukup tempat bagi mereka untuk duduk dengan nyaman, mereka mungkin harus berdiri di pinggir ruangan. Begitu juga dengan gigi impaksi, mereka tidak memiliki cukup ruang di \"pesta mulut\" kita, sehingga mereka tetap berada di posisi yang salah.</p>', '<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Kepadatan ruang di rahang, Terbatasnya ruang di rahang bisa membuat gigi tidak memiliki tempat cukup untuk tumbuh dengan normal.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Ukuran gigi yang tidak sesuai, Jika gigi baru tumbuh memiliki ukuran yang tidak sesuai dengan ukuran rahang, impaksi bisa terjadi.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Arah pertumbuhan yang salah, Gigi yang tumbuh dengan arah yang salah, seperti miring atau horizontal, bisa mengakibatkan impaksi.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Gigi susu yang belum lepas, Gigi permanen mungkin tidak dapat tumbuh dengan baik jika gigi susu di area yang sama belum tanggal.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Kelainan struktur rahang, Beberapa kelainan struktural pada rahang bisa membuat gigi tumbuh dengan cara yang tidak benar.</p>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>', '1723042980_b1a7f60adf6fd83a70d2.jpg', '<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Pastikan membersihkan gigi dengan baik untuk mengurangi resiko infeksi dan menjaga kebersihan mulut.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Jika ada pembengkakan atau nyeri, kompres dingin dapat membantu meredakan gejala.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Menggunakan obat pereda nyeri yang dijual bebas seperti paracetamol, bisa membantu mengatasi rasa sakit sementara.</p>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>', '<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>Evaluasi dan Diagnosa</strong>, Dokter gigi akan melakukan pemeriksaan menyeluruh untuk menilai kondisi impaksi gigi dan merencanakan perawatan yang tepat.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>Penggunaan obat pereda nyeri resep dokter</strong>, dokter gigi dapat meresepkan obat pereda nyeri yang lebih kuat untuk mengatasi nyeri intens.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>Pencabutan gigi</strong>, Jika gigi impaksi menyebabkan komplikasi atau rasa sakit yang parah, pencabutan gigi mungkin diperlukan.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>Prosedur bedah</strong>, &nbsp;Dalam beberapa kasus yang lebih rumit, dokter gigi mungkin merencanakan prosedur bedah untuk mengeluarkan gigi impaksi.</p>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>'),
(7, 'PULPITIS', '<p dir=\"ltr\">Pulpitis adalah kondisi di mana pulpa gigi, yang merupakan bagian dalam dan sensitif dari gigi, mengalami peradangan. Ini bisa terjadi karena karies gigi yang dalam atau cedera pada gigi. Ketika pulpa terinfeksi atau meradang, orang bisa merasakan nyeri gigi yang sangat intens. Pernahkah kamu merasakan nyeri tajam atau sensasi sensitif ketika makan atau minum sesuatu yang panas atau dingin? Itulah salah satu gejala pulpitis. Kadang-kadang, gigi yang terkena pulpitis juga bisa merasakan sakit berkepanjangan bahkan tanpa ada rangsangan apa pun. Sekarang bayangkan pulpa gigi sebagai \"jantung\" dari gigi. Ini adalah bagian yang penuh dengan pembuluh darah dan saraf. Ketika pulpa mengalami peradangan, rasa sakit bisa sangat mengganggu.</p>\r\n<p>&nbsp;</p>', '<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Karies gigi, Pulpitis sering kali dimulai karena adanya lubang kecil pada gigi, yang disebut karies. Jika karies tidak diobati dan merambah ke dalam gigi, ia bisa mencapai pulpa (saraf gigi) dan menyebabkan peradangan.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Cedera gigi, Trauma atau benturan keras pada gigi bisa menyebabkan pulpitis. Misalnya, terjatuh atau mengalami benturan keras saat berolahraga bisa merusak pulpa gigi.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Infeksi bakteri pada gigi atau gusi bisa merambah ke dalam pulpa gigi dan menyebabkan peradangan. Infeksi ini bisa terjadi akibat karies yang dalam atau kondisi gusi yang terinfeksi.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Penggunaan makanan atau minuman yang terlalu panas atau dingin secara berulang juga bisa merangsang peradangan pada pulpa gigi.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Penyakit gusi, Jika penyakit gusi tidak diobati dengan baik, bisa menyebabkan peradangan pada pulpa gigi.</p>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>', '1723043048_efa75604d62433a4ccdb.jpg', '<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Gunakan sikat gigi dengan bulu yang lembut dan pasta gigi dengan kandungan fluoride untuk menjaga kebersihan gigi dengan baik.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"2\">\r\n<p dir=\"ltr\" role=\"presentation\">Penggunaan obat penghilang rasa sakit seperti paracetamol&nbsp; atau ibuprofen, dapat meredakan nyeri sementara.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"2\">\r\n<p dir=\"ltr\" role=\"presentation\">Berkumur dengan air garam hangat dapat membantu meredakan sedikit sakit dan mengurangi peradangan pada gigi.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"2\">\r\n<p dir=\"ltr\" role=\"presentation\">Hindari makanan manis dan asam karena dapat meningkatkan rasa sakit.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"2\">\r\n<p dir=\"ltr\" role=\"presentation\">Hindari makanan atau minuman yang terlalu panas atau dingin.&nbsp;</p>\r\n</li>\r\n</ul>', '<ul>\r\n<li dir=\"ltr\" aria-level=\"2\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>Pembersihan dan Tambalan</strong>, Dokter gigi akan membersihkan area yang terkena dan mengisi lubang gigi dengan tambalan untuk melindungi pulpa dari iritasi lebih lanjut</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"2\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>Perawatan saluran akar</strong>, Jika pulpitis sudah mencapai pulpa gigi, dokter gigi akan melakukan perawatan saluran akar. Ini melibatkan pengangkatan pulpa yang terinfeksi dan penutupan saluran akar untuk mencegah infeksi lebih lanjut.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"2\">\r\n<p dir=\"ltr\" role=\"presentation\"><strong>Pencabutan gigi</strong>, Jika pulpitis sangat parah dan tidak dapat diobati, dokter gigi mungkin harus mencabut gigi yang terkena untuk menghentikan rasa sakit dan mencegah penyebaran infeksi.</p>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>'),
(8, 'PERSISTENSI GIGI', '<p dir=\"ltr\">Persistensi gigi adalah kondisi di mana gigi susu anak-anak tidak tanggal secara alami saat seharusnya, dan gigi tetap bertahan meskipun sudah waktunya bagi mereka untuk tanggal. Ini bisa terjadi dengan gigi susu atau gigi permanen.</p>', '<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Gigi susu yang tidak rontok secara alami saat gigi permanen mulai tumbuh.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Kekurangan ruang di rongga mulut, jika rongga mulut terlalu kecil untuk menampung gigi permanen yang baru tumbuh, gigi tersebut mungkin tidak dapat keluar dengan benar, menyebabkan persistensi.&nbsp;</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Beberapa gangguan genetik atau medis dapat mempengaruhi pertumbuhan gigi, menyebabkan gigi permanen tidak tumbuh dengan benar dan bertumpuk di belakang gigi susu yang tidak rontok.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Kadang-kadang, kecenderungan untuk memiliki gigi yang persisten dapat diwarisi dari orang tua. Jika salah satu orang tua memiliki pengalaman yang sama, anak-anaknya mungkin memiliki risiko yang lebih tinggi mengalami persistensi gigi.&nbsp;</p>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>', '1723043103_14c7aa23a5ef2c13900d.png', '<ul>\r\n<li dir=\"ltr\" aria-level=\"2\">\r\n<p dir=\"ltr\" role=\"presentation\">Pemantauan, Jika gigi tampaknya tidak tumbuh dengan benar, penting untuk memantau perkembangannya. Perhatikan apakah ada rasa sakit atau ketidaknyamanan.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"2\">\r\n<p dir=\"ltr\" role=\"presentation\">Kebersihan gigi, Jaga kebersihan gigi dengan menyikatnya secara teratur setidaknya dua kali sehari dan menggunakan benang gigi. Kebersihan yang baik membantu mengurangi risiko infeksi.</p>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>', '<ul>\r\n<li dir=\"ltr\" aria-level=\"2\">\r\n<p dir=\"ltr\" role=\"presentation\">Pencabutan gigi susu, Jika gigi susu yang persisten menyebabkan masalah atau menghambat pertumbuhan gigi permanen, dokter gigi mungkin merekomendasikan pencabutan gigi susu tersebut.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"2\">\r\n<p dir=\"ltr\" role=\"presentation\">Pemantauan teratur, Jika gigi permanen masih belum tumbuh setelah pencabutan gigi susu, dokter gigi akan melakukan pemantauan teratur untuk memastikan pertumbuhannya berjalan dengan baik.</p>\r\n</li>\r\n</ul>'),
(9, 'ULKUS DEKUBITUS', '<p dir=\"ltr\">Ulkus dekubitus gigi adalah luka atau kerusakan pada gusi atau jaringan di sekitar gigi akibat tekanan atau gesekan yang berkepanjangan. Ini dapat terjadi karena berbagai alasan, seperti penggunaan gigi palsu yang tidak pas, gigitan yang tidak seimbang, atau gesekan berlebihan pada area gigi tertentu.</p>', '<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Tekanan berlebihan, Gigi palsu yang tidak pas atau gesekan berlebihan pada area tertentu.&nbsp;</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Gigitan yang tidak seimbang, Gigi yang tidak bertemu dengan benar bisa menyebabkan tekanan tidak merata pada gusi.</p>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>', '1723043176_94919a115aaa00cb5f4f.jpg', '<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Jaga kebersihan, Sikat gigi dengan lembut dan hindari menyikat terlalu keras pada area yang terkena..</p>\r\n</li>\r\n</ul>\r\n<ul>\r\n<li dir=\"ltr\" aria-level=\"2\">\r\n<p dir=\"ltr\" role=\"presentation\">Hindari makanan pedas atau asam, makanan yang pedas atau asam dapat memperburuk iritasi pada ulkus dekubitus.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"2\">\r\n<p dir=\"ltr\" role=\"presentation\">Hindari mengunyah makanan yang sangat keras pada sisi gigi yang terkena.</p>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>', '<ul>\r\n<li dir=\"ltr\" aria-level=\"2\">\r\n<p dir=\"ltr\" role=\"presentation\">Tambalan atau penyesuaian gigi&nbsp; palsu, Dokter gigi mungkin perlu menyesuaikan gigi palsu atau memberikan tambalan pada area yang terkena untuk mengurangi gesekan.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"2\">\r\n<p dir=\"ltr\" role=\"presentation\">Dokter dapat meresepkan obat pereda nyeri atau obat kumur khusus untuk membantu mengurangi ketidaknyamanan.</p>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi_pasien`
--

CREATE TABLE `registrasi_pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_panjang` varchar(50) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `reset_token` text NOT NULL,
  `reset_expires` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrasi_pasien`
--

INSERT INTO `registrasi_pasien` (`id_pasien`, `nama_panjang`, `tanggal_lahir`, `email`, `username`, `password`, `reset_token`, `reset_expires`) VALUES
(1, 'user1', '2002-01-29', 'user1@gmail.com', 'user1', '$2y$10$.', '', NULL),
(2, 'user2', '0000-00-00', 'user2@gmail.com', 'user2', '$2y$10$/r10yuu.UZsQoYjokD22JuSIa.Toy9A16GV8kiEUiBAeJDLdWWCM.', '', NULL),
(4, 'Jhon', '0000-00-00', 'jhon@gmail.com', 'jhon', '$2y$10$RZoauObYXsgGJ0p3k0jH9.dsaBk1krmZ8WhkVI4ps/9jGpZcIaLj2', '', NULL),
(5, 'Muhamad Al Furqon', '0000-00-00', 'alfurqon@gmail.com', 'alfurqon', '$2y$10$GbRp3IOQwwsa5jnM7aYwle6LaYitcftAb3eiENGdmc5W8sIl5bnta', '', NULL),
(6, 'Nabilah Diya Vania', '0000-00-00', 'nabilahdv@gmail.com', 'nabilah', '$2y$10$aezHuPN/AaeHwfOGQ37GJ.sT04VLf3Iq6u3Fi6h0qwyWrSO5ulLNe', '', NULL),
(7, 'Dova Aditya', '0000-00-00', 'dovaganteng@gmail.com', 'dova', '$2y$10$F2RYOUMjUC0ECx2WjWjw6eRWtjPfYi3fQYMHdSezb9Zl3902I5IEu', '', NULL),
(8, 'Dini Amalia', '0000-00-00', 'diniamalia21@gmail.com', 'dini', '$2y$10$iRvRh8ANGBky0qyUCEg6NeHI7vOAg2EWKjhXL5wg32Lh4hXFhI8XG', '', NULL),
(9, 'Lusiana', '0000-00-00', 'lusianadelauu27@gmail.com', 'uciyinthesky', '$2y$10$aFV2ENt7b0/yHmmtK3TGkOXxdW6F4qlUoGJ6AP6e/yau77o1eP9mW', '', NULL),
(10, 'ucok', '0000-00-00', 'ucok@gmail.com', 'ucok', '$2y$10$3JVgBlTuF5ngZMTf57RTQ.yZDYGR1mGtz18rjsKD6aBPFThvgh3TS', '', NULL),
(11, 'fajar hidayat', '0000-00-00', 'fajar@gmail.com', 'fajar', '$2y$10$o4z1aWu9MM77CeI/KUvX6uQT3eu/dDutpGYul5Ga5J1ir1expPIwe', '', NULL),
(12, 'hilman', '0000-00-00', 'hilman@gmail.com', 'hilman', '$2y$10$5lboe35GF9fmY.3.4/LBb.mimxOriLABUawNfe33jp0vSsldbYTbO', '', NULL),
(14, 'nana', '2002-01-01', 'nana@gmail.com', 'nana', '$2y$10$pr5mfZZFe/ITmtOj2VC9ZOac3QC2Tx7geajBULGBzCb8iHkdEDH8a', '', NULL),
(15, 'Muhamad Al Furqon', '2002-01-29', 'aalkailanet@gmail.com', 'alfurqon123', '$2y$10$e.ZpNi3U0wU.SgR/ZpX78uGYeCykIgk/lGvaFMLMKF0LQZBUCiezG', '', NULL),
(16, 'Aldi Putra Nawasta', '1998-11-11', 'aldistate@yahoo.com', 'aldistate', '$2y$10$tc2wv6yKkjgY6i96djAB7.t4HxgODmF8f4jZbKfaB7FfK0EdvlHQ2', '6c6233cec4a7afbdae02d38329a959f2a0d44796abd521626680cd34f760dcba', '2024-09-05 11:20:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basis_aturan`
--
ALTER TABLE `basis_aturan`
  ADD PRIMARY KEY (`id_basis_aturan`),
  ADD KEY `id_penyakit` (`id_penyakit`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `detail_basis_aturan`
--
ALTER TABLE `detail_basis_aturan`
  ADD KEY `detail_basis_aturan_ibfk_1` (`id_basis_aturan`),
  ADD KEY `detail_basis_aturan_ibfk_2` (`id_gejala`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `list_diagnosa_pasien`
--
ALTER TABLE `list_diagnosa_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `list_konsultasi_pasien`
--
ALTER TABLE `list_konsultasi_pasien`
  ADD PRIMARY KEY (`id_konsultasi`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `registrasi_pasien`
--
ALTER TABLE `registrasi_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basis_aturan`
--
ALTER TABLE `basis_aturan`
  MODIFY `id_basis_aturan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `list_diagnosa_pasien`
--
ALTER TABLE `list_diagnosa_pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `list_konsultasi_pasien`
--
ALTER TABLE `list_konsultasi_pasien`
  MODIFY `id_konsultasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `registrasi_pasien`
--
ALTER TABLE `registrasi_pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `basis_aturan`
--
ALTER TABLE `basis_aturan`
  ADD CONSTRAINT `basis_aturan_ibfk_2` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id_penyakit`);

--
-- Constraints for table `detail_basis_aturan`
--
ALTER TABLE `detail_basis_aturan`
  ADD CONSTRAINT `detail_basis_aturan_ibfk_1` FOREIGN KEY (`id_basis_aturan`) REFERENCES `basis_aturan` (`id_basis_aturan`) ON DELETE CASCADE,
  ADD CONSTRAINT `detail_basis_aturan_ibfk_2` FOREIGN KEY (`id_gejala`) REFERENCES `gejala` (`id_gejala`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
