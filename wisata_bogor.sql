-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2021 at 06:42 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisata_bogor`
--

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `tanggal_input` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `tanggal_input`) VALUES
(1, 'admin', 'admin@admin.com', 'default.jpg', '$2y$10$U.hbEOlpMrz.d/z3IHHCcufIENoRo7zdIO3m14uN4e93zJEwInS6q', 1, 1, 1640278797);

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama_wisata` varchar(60) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `keterangan` varchar(600) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `htm` int(11) NOT NULL,
  `gambar` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama_wisata`, `kategori`, `keterangan`, `alamat`, `htm`, `gambar`) VALUES
(1, 'Kebun Raya Bogor', 'Rekreasi', 'Pada mulanya kebun ini hanya akan digunakan sebagai kebun percobaan bagi tanaman perkebunan yang akan diperkenalkan di Hindia Belanda. Namun pada perkembangannya pendirian Kebun Raya Bogor bisa dikatakan mengawali perkembangan ilmu pengetahuan di Indonesia dan sebagai wadah bagi ilmuwan terutama bidang botani di Indonesia secara terorganisasi pada zaman itu (1880 - 1905). Dari sini lahir beberapa institusi ilmu pengetahuan lain, seperti Bibliotheca Bogoriensis (1842), Herbarium Bogoriense (1844), Kebun Raya Cibodas (1860), Laboratorium Treub (1884), dan Museum dan Laboratorium Zoologi (1894).', 'Jl. Ir. H. Juanda No.13, Paledang,', 30000, 'krb.jpg'),
(2, 'Istana Bogor', 'Rekreasi', 'merupakan salah satu dari enam Istana Presiden Republik Indonesia yang mempunyai keunikan tersendiri dikarenakan aspek historis, kebudayaan, dan faunanya. Salah satunya adalah keberadaan rusa-rusa yang didatangkan langsung dari Nepal dan tetap terjaga dari dulu sampai sekarang.\r\n\r\nIstana Bogor berada di kota Bogor yang pada era kolonial bernama Buitenzorg atau Sans Souci yang berarti \"tanpa kekhawatiran\".\r\n\r\nSejak tahun 1870 hingga 1942, Istana Bogor merupakan tempat kediaman resmi dari 38 Gubernur Jenderal Belanda dan satu orang Gubernur Jenderal Inggris.\r\n\r\nPada tahun 1744 Gubernur Jenderal ', ' Jalan Ir. H. Juanda, Bogor Tengah; Bogor, West Ja', 30000, 'istana.jpg'),
(3, 'Museum Zoologi', 'Pendidikan', 'Museum Zoologi didirikan pada tahun 1894 atas gagasan J.C. Koningsberger dengan nama Landbouw Zoologisch Laboratorium Fungsi utama dari bangunan ini semula adalah sebagai laboratorium untuk penelitian hewan pengganggu tanaman pertanian yang termasuk dalam S’Lands Plantentuin (Kebun Raya Bogor). Kemudian pada tahun 1901, didirikan gedung baru yang digunakan untuk ruang koleksi, ruang kerja, ruang pameran dan laboratorium.\r\nSeiring dengan perkembangan zaman, MZB mengubah namanya sesuai dengan fungsinya: Landbouw Zoologisch Laboratorium (1894), Landbouw Zoologisch Museum (1896), Zoologisch Museum', 'Jl. Ir. H. Juanda No.9, RT.04/RW.02, Paledang, Kec', 30000, 'zoologi.jpg'),
(4, 'Museum Etnobotani Indonesia', 'Pendidikan', 'Kata etnobotani pada awalnya diperkenalkan pada tahun 1895 oleh seorang antropologi Amerika yang bernama Harsberger. Etnobotani terdiri dari 2 kata, yaitu etno dan botani. Etno berarti budaya atau etnis sedangkan botani merupakan tumbuh-tumbuhan. Maka dari itu, Museum Etnobotani dapat diartikan sebagai museum yang menyimpan berbagai tanaman dari Indonesia dan berkaitan dengan budaya etnis manusia setempat. Dari aspek botani, etnobotani dapat memberikan bantuan pada manusia untuk menentukan asal mula munculnya suatu tumbuhan, penyebarannya, penggalian potensi tumbuhan sebagai sumber kebutuhan h', 'Jl. Ir. H. Juanda 22 - 24, Pusat Penelitian Biolog', 5000, 'etnobotani.jpg'),
(5, 'Museum Tanah dan Pertanian', 'Pendidikan', 'Museum Tanah telah berdiri sejak 29 September 1988, museum ini menempati gedung Laboratorium Voor Agrogeologie en Grond Onderzoek atau Laboratorium Penelitian Agrogeologi dan Tanah, yang didirikan pada zaman Pemerintahan Belanda sekitar tahun 1900. Museum sempat mengalami penutupan beberapa tahun sampai kemudian Kementerian Pertanian memutuskan untuk melakukan renovasi gedung tersebut untuk dimanfaatkan sebagai museum. Pada tanggal 5 Desember 2017 bertepatan dengan Hari Tanah Sedunia, Menteri Pertanian saat itu Dr. Ir. H. Andi Amran Sulaiman, M.P. meresmikan dibukanya kembali Museum Tanah di G', ' Jl. Ir. H. Juanda No.98, RT.01/RW.01, Gudang, Kec', 0, 'tanahpertanian.jpg'),
(6, 'Museum Pembela Tanah Air', 'Pendidikan', 'Museum Pembela Tanah Air (Museum PETA) merupakan museum yang didirikan untuk memberikan penghargaan kepada mantan tentara PETA atas kontribusinya dalam pendirian bangsa dan negara. Selain itu, museum yang terletak di Bogor ini juga didirikan untuk memberi gambaran perjuangan kemerdekaan Indonesia dan persiapan dalam mengisi kemerdekaan.', 'Jl. Jend. Sudirman No.35, RT.01/RW.05, Pabaton, Ke', 5000, 'peta.jpg'),
(7, 'Museum Perjuangan', 'Pendidikan', 'useum Perjuangan ini dibangun pada tahun 1879. Saat pertama kali didirikan bangunan ini digunakan untuk gudang penyimpanan hasil bumi sebelum diekspor ke negara-negara Eropa. Pemilik bangunan ini merupakan seorang pengusaha berkebangsaan Belanda bernana Wilhelm Gustaf Wissner. Lima puluh enam tahun kemudian PARINDRA atau Partai Indonesia Raya menggunakan bangunan ini sebagai kantor dan nama gedung ini pun berubah menjadi Gedung Persaudaraan.\r\n\r\nPARINDRA sendiri merupakan sebuah partai politik yang memiliki tujuan untuk membangun Indonesia Mulia dan Sempurna dengan cara bekerja sama dengan peme', 'Jl. Merdeka No.56, RT.04/RW.01, Kp. Parung Jambu, ', 5000, 'perjuangan.jpg'),
(8, 'Taman Kencana Bogor', 'Rekreasi', 'Tepatnya antara tahun 1926-1930. Dulunya taman ini dibangun sebagai fasilitas bagi warga asal Eropa di sekitar sini. Karsten, sang penggagas taman, menyampaikan idenya pada Pemerintah Belanda dan akhirnya diwujudkan dengan nama Von Imhoff Plein, diambil dari nama pendiri Istana Bogor.\r\n\r\nTaman Kencana merupakan taman di tengah kota yang memiliki sejarah. Awalnya, taman ini dikenal dengan nama Van Imhoff Plein atau Van Imhoff Square dan dibangun sejak tahun 1917 pada masa pemerintahan Belanda. Sempat nyaris dilupakan, taman kota ini mengalami revitalisasi pada tahun 2015 dan kembali menjadi sal', 'Jl. Taman Kencana 1, RT 03/03 Babakan, Kecamatan B', 0, 'kencana.jpg'),
(9, 'Lapangan Sempur', 'Rekreasi', 'Sempur didirikan pada jaman dimana belanda menguasai tempat ini,pada awalnya sempur bogor merupakan area perbukitan yang dikelilingi pesawahan dan perkebunan yang di kelola oleh penduduk lokal sekitar. Sebelum tahun 1900-an, Sempur adalah sebuah kawasan yang dinamakan Kedung Halang dan mencakup Sempur Kidul, Sempur Kaler, Kampung Rambutan, Lebak Pilar, Taman Kencana serta beberapa daerah di sekitarnya.', 'Jl. Sempur Kidul No.65, Sempur, Bogor Tengah, Kota', 0, 'sempur.jpg'),
(10, 'Taman Ekspresi Bogor', 'Rekreasi', 'Wisata Taman Ekspresi di Sempur Bogor Jawa Barat adalah salah satu tempat wisata yang berada di desa sempur, kabupaten bogor, provinsi jawa barat, negara indonesia. Wisata Taman Ekspresi di Sempur Bogor Jawa Barat adalah tempat wisata yang ramai dengan wisatawan pada hari biasa maupun hari liburan. Tempat ini sangat indah dan bisa memberikan sensasi yang berbeda dengan aktivitas kita sehari hari.\r\n\r\nWisata Taman Ekspresi di Sempur Bogor Jawa Barat memiliki pesona keindahan yang sangat menarik untuk dikunjungi. Sangat di sayangkan jika anda berada di kota bogor tidak mengunjungi wisata taman ya', 'RT.01/RW.01, Sempur, Central Bogor, Bogor City, We', 0, 'ekspresi.jpg'),
(11, 'Taman Heulang Bogor', 'Rekreasi', 'Pembangunan Taman Heulang ini dimulai dari 1 September 2016 dan hingga akhirnya diresmikan akhir Desember 2016. Taman Heulang sendiri memiliki luas sekitar 28.000 meter persegi yang merupakan taman terbesar di Kota Bogor. Pembangunannya sendiri membutuhkan anggaran sekitar Rp 4,3 Miliar. Akhirnya taman ini berubah dari lapangan sepak bola menjadi taman kota yang indah.', 'Jl. Heulang, RT.06/RW.04, Tanah Sareal, Kec. Tanah', 0, 'heulang.jpg'),
(12, 'Suryakencana Street', 'Kuliner', 'Kawasan Suryakencana menjadi pusat perniagaan sejak zaman kolonial dibangun sekitar tahun 1808 atas perintah gubernur Hindia Belanda kala itu, yaitu Daendels sebagai ruas Jalan Raya Pos Anyer-Panarukan.\r\n\r\nTepat di belakang Jalan Suryakencana ini terdapat pemukiman keturunan Tionghoa atau yang lebih akrab disebut dengan Pecinan.\r\n\r\nKembali ke peristiwa di tahun 1740 an yang terjadi terhadap etnis Tionghoa mengharuskan orang-orang Cina ini berhijrah ke daerah yang kini dikenal dengan nama Suryakencana.', 'Jl. Suryakencana, RT.03/RW.07, Gudang, Kota Bogor,', 0, 'surken.jpg'),
(13, 'Museum Kepresidenan Balai Kirti', 'Pendidikan', 'Museum Kepresidenan Republik Indonesia Balai Kirti adalah sebuah museum yang berada di dalam Kompleks Istana Kepresidenan Bogor, Jalan Ir. Juanda Nomor 1, Kota Bogor, Jawa Barat, Indonesia. Museum ini dibangun khusus untuk menampilkan kisah sejarah pemerintahan para presiden Indonesia. Gagasan pembangunan museum dicetuskan oleh Susilo Bambang Yudhoyono pada tahun 2012. Ia pula yang melakukan peresmian museum yang diadakan pada tanggal 18 Oktober 2014. Lokasi Museum Kepresidenan Republik Indonesia “Balai Kirti” berada di kompleks Istana Bogor. Penamaan Museum Balai Kirti berasal dari bahasa San', 'Jl. Ir. H. Juanda No.1, RT.04/RW.01, Paledang, Kec', 0, 'kirti.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wisata_kuliner`
--

CREATE TABLE `wisata_kuliner` (
  `id_kuliner` int(15) NOT NULL,
  `nama_kuliner` varchar(60) NOT NULL,
  `keterangan` varchar(600) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(258) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wisata_kuliner`
--

INSERT INTO `wisata_kuliner` (`id_kuliner`, `nama_kuliner`, `keterangan`, `kategori`, `harga`, `gambar`) VALUES
(1, 'Toge Goreng', 'Toge Goreng, toge yang “digoreng” direbus dalam penggorengan, kemudian dicampur dengan mie kuning, potongan tahu dan opsional potongan kupat. Yang memegang peranan penting adalah bumbu olahan tauco dan oncom yang dicampurkan setelahnya.\r\n\r\n \r\n\r\nDi Bogor memang banyak penjaja Toge Goreng yang legendaris, salah satunya adalah Toge Goreng Ibu Evon alias Ma Epon. Toge yang \"digoreng\" pake air, alias direbus, kemudian dicampur dengan mie kuningan, potongan tahu dan opsional potongan kupat. Yang memegang peranan penting adalah bumbu olahan tauco dan oncom yang diguyurkan setelahnya. Ini yang menjadi', 'Kuliner', 20000, 'toge.jpg'),
(2, 'Doclang', 'Doclang adalah salah satu makanan khas dari kota Bogor. Potongan lontong yang disajikan bersama tahu goreng dan kentang rebus, kemudian diguyur bumbu kacang yang khas. Mirip dengan Kupat Tahu jika di Bandung, tapi memang bumbu kacangnya punya cita rasa sedikit berbeda, pedas, gurih dan manis, serta masih gerusan kacangnya yang tidak terlalu halus.\r\n\r\n \r\n\r\nDi Bogor, Doclang cukup banyak dijajakan di kawasan Jembatan Merah (Jl. Veteran). Salah satunya ada di Jl. Mantarena. Anehnya, di gerobaknya tertulis \"Doclang Ole2 Bandung\" \r\n\r\n \r\n\r\nDoclang ini hanya dijajakan pada saat sarapan, biasanya menj', 'Kuliner', 12000, 'doclang.jpg'),
(3, 'Asinan Bogor', 'Asinan adalah sejenis makanan yang dibuat dengan cara pengacaran (melalui pengasinan dengan garam atau pengasaman dengan cuka), bahan yang diacarkan yaitu berbagai jenis sayuran dan buah-buahan. Asinan adalah salah satu hidangan khas seni kuliner Indonesia.\r\n\r\n \r\n\r\nIstilah asin mengacu kepada proses pengawetan dengan merendam buah atau sayur dalam larutan campuran air dan garam. Asinan sangat mirip dengan rujak, perbedaan utamanya antara lain bahan rujak disajikan segar, sedangkan bahan asinan disajikan dalam keadaan diasinkan atau diacar. Terdapat banyak jenis asinan, akan tetapi yang paling ', 'Kuliner', 15000, 'asinan.jpg'),
(4, 'Lapis Talas Bogor', 'Sudah sejak dahulu, talas dikenal sebagai salah satu oleh-oleh khas dari Kota Bogor dalam bentuk mentahan dan terdiri dari beberapa buah dalam seikat. Namun kini, talas yang cukup identik dengan makanan khas pedesaan sudah mulai dikembangkan ke dalam beberapa olahan yang dapat meningkatkan nilai jual dan cita rasa berbeda dari talas. \r\n\r\n \r\n\r\nKita bisa menemukan talas yang diolah menjadi kue lapis yang terkenal dengan sebutan Lapis Bogor. Meskipun menggunakan bahan dasar talas, tapi tekstur kuenya cukup lembut dengan aroma yang khas. Dalam pengolahannya, lapis talas ini dikombinasikan dengan a', 'Kuliner', 45000, 'lapis.jpg'),
(5, 'Laksa Bogor', 'Laksa merupakan Ketupat, bihun, touge, dan daun kemangi, ditambah tahu kuning dan telur rebus, semuanya disiram dengan kuah santan kuning dan diimbuhi bumbu dari Oncom.\r\n\r\n \r\n\r\nSalah satu makan khas bogor adalah laksa, untuk makanan jenis ini kita terlalu banyak temui kecuali di kota hujan bogor,di pusat kuliner surya kencana ini cuma ada satu yang menjual laksa,tempatnya tidak jauh di depan gang aut jadi dinamakan laksa gang aut menempati ruangan bareng dengan makan lainnya,menggunakan lemari etalase kaca yang akan terlihat bahan - bahan dari makanan ini,terlihat cukup bersih dan menarik\r\n\r\n ', 'Kuliner', 20000, 'laksa.jpg'),
(6, 'Soto Mie Bogor', 'Soto Mie Bogor merupakan salah satu kuliner khas Nusantara yang terbilang soto lengkap karena terdapat banyak bahan-bahan yang disajikan dalam satu mangkoknya. Hal unik dari kuliner berkuah ini adalah penyajiannya dilengkapi dengan mi kuning, umumnya soto disajikan hanya menggunakan mi soun atau bihun.', 'Kuliner', 30000, 'sotomie.jpg'),
(7, 'Es Bir Kotjok', 'Bir kocok adalah minuman non alkohol khas kota Bogor. Nama bir ini didapat dari cara pembuatan yang di kocok dan akhirnya mengeluarkan busa. Menggunakan bahan dasar jahe, minuman ini berguna untuk menghangatkan badan. Disepanjang kota bogor kita dapat menjumpai banyak pedagang yang berjualan minuman ini.', 'Kuliner', 5000, 'bir.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- Indexes for table `wisata_kuliner`
--
ALTER TABLE `wisata_kuliner`
  ADD PRIMARY KEY (`id_kuliner`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `wisata_kuliner`
--
ALTER TABLE `wisata_kuliner`
  MODIFY `id_kuliner` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
