-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2021 at 06:55 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aduan`
--

CREATE TABLE `tbl_aduan` (
  `id` int(10) NOT NULL,
  `nik` int(255) NOT NULL,
  `isi_aduan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_aduan`
--

INSERT INTO `tbl_aduan` (`id`, `nik`, `isi_aduan`) VALUES
(7, 123, 'terjadi perselisihan penerima bansos');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(10) NOT NULL,
  `id_pengguna` int(10) DEFAULT NULL,
  `gambar` text NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `waktu` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `id_pengguna`, `gambar`, `judul_berita`, `isi_berita`, `waktu`) VALUES
(3, 2, 'uploads/berita/Kecamatan+Waluran+Gelar+PILKADES+Serentak.jpg', 'Kecamatan Waluran Gelar PILKADES Serentak', '<div align=\"justify\"><b>Waluran</b>, 27 Mei Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est minus incidunt optio ipsa dicta quae quaerat expedita corporis repellendus fugiat aliquam, laboriosam at nostrum autem assumenda dolorum distinctio voluptatibus, maxime quibusdam deleniti aliquid repellat quam. Exercitationem similique aut, porro asperiores ratione deleniti quia quas rerum voluptatibus fugiat! Quam voluptas assumenda sed tempore! Doloribus quae harum nobis culpa blanditiis provident esse fugiat quam necessitatibus unde optio nihil praesentium voluptate, inventore eum commodi. Quisquam nobis dolorem nihil aspernatur recusandae quam, minus accusamus beatae tempora non maxime, neque repellat libero aliquid fugit quasi ea earum. Obcaecati adipisci magni officiis itaque eaque minima. Perspiciatis reprehenderit ad dicta eum magni. Obcaecati, inventore. Deserunt reiciendis dolorem officiis perferendis facere earum, dignissimos labore odit praesentium a, assumenda ad aliquid et?<br></div>', '2019-11-11 15:25:55'),
(4, 2, 'uploads/berita/Semarak+Festival+GCP+Datangkan+Artis+Luar+Negri.jpg', 'Semarak Festival GCP Datangkan Artis Luar Negri', '<div align=\"justify\"><b>Taman Jaya</b>, 13 Agustus Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est minus incidunt optio ipsa dicta quae quaerat expedita corporis repellendus fugiat aliquam, laboriosam at nostrum autem assumenda dolorum distinctio voluptatibus, maxime quibusdam deleniti aliquid repellat <b>quam</b>. Exercitationem similique aut, porro asperiores ratione deleniti quia quas rerum voluptatibus fugiat! Quam voluptas assumenda sed tempore! Doloribus quae harum nobis culpa blanditiis provident esse fugiat quam necessitatibus unde optio nihil praesentium voluptate, inventore eum commodi. Quisquam nobis dolorem nihil aspernatur recusandae quam, minus accusamus beatae tempora non maxime, neque repellat libero aliquid fugit quasi ea earum. Obcaecati adipisci magni officiis itaque eaque minima. Perspiciatis reprehenderit ad dicta eum magni. Obcaecati, inventore. Deserunt reiciendis dolorem officiis perferendis facere earum, dignissimos labore odit praesentium a, assumenda ad aliquid et?<br></div>', '2019-11-11 15:28:54'),
(15, 2, 'uploads/FB_IMG_16099509401154669.jpg', 'berita hari ini', 'berita hari ini', '2021-04-12 16:52:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kontak`
--

CREATE TABLE `tbl_kontak` (
  `id_kontak` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pesan` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kontak`
--

INSERT INTO `tbl_kontak` (`id_kontak`, `nama`, `email`, `pesan`, `waktu`) VALUES
(2, 'bubagi', 'bugabagiofficial@gmail.com', 'Izin buat KK', '2019-11-11 16:38:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logo`
--

CREATE TABLE `tbl_logo` (
  `id_logo` int(11) NOT NULL,
  `konten_logo_desa` varchar(50) NOT NULL,
  `konten_logo_kabupaten` varchar(50) NOT NULL,
  `path_css` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_logo`
--

INSERT INTO `tbl_logo` (`id_logo`, `konten_logo_desa`, `konten_logo_kabupaten`, `path_css`) VALUES
(1, 'uploads/web/logo_desa.jpg', 'uploads/web/logo_kabupaten.jpg', 'assetku/css/style_kuning.css');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penduduk`
--

CREATE TABLE `tbl_penduduk` (
  `id_penduduk` int(10) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(25) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `no_telp` char(15) DEFAULT 'Tidak Diketahui',
  `jenis_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `status` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penduduk`
--

INSERT INTO `tbl_penduduk` (`id_penduduk`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `image`, `no_telp`, `jenis_kelamin`, `pekerjaan`, `status`) VALUES
(57, '123', 'AJI', 'Jambi', '1980-03-12', 'uploads/tf1.jpg', '089368', 'Laki-Laki', 'Belum Kerja', 'N'),
(61, '2134353211', 'Dr. Susilo Bambang Yudhoyono', 'Jakarta Barat', '2021-04-30', 'uploads/tf13.jpg', '08276372', 'Laki-Laki', 'Presiden', 'Y'),
(62, '1234', 'MIRANDA', 'JAMBI', '2021-04-25', 'uploads/tf14.jpg', '089368', 'Perempuan', '-', 'Y'),
(63, '1234567', 'Yuliana', 'Jakarta Selatan', '2021-04-22', 'uploads/megangktp1.jpg', '089368', 'Laki-Laki', '', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `id_pengguna` int(10) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `role` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `is_delete` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id_pengguna`, `nik`, `nama_pengguna`, `password`, `nama`, `no_telepon`, `role`, `foto`, `is_delete`) VALUES
(1, '123', 'SEKDES', '21232f297a57a5a743894a0e4a801fc3', 'SEKDES', '0838', '', '', 'Y'),
(2, '111', 'RT', '21232f297a57a5a743894a0e4a801fc3', 'Ujang Saepuloh', '', 'Administrator', '', 'Y'),
(3, '24422', 'KEPALA DESA', '21232f297a57a5a743894a0e4a801fc3', 'KEPALA DESA', '083838828', '', '', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_aduan`
--
ALTER TABLE `tbl_aduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  ADD PRIMARY KEY (`id_logo`);

--
-- Indexes for table `tbl_penduduk`
--
ALTER TABLE `tbl_penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_aduan`
--
ALTER TABLE `tbl_aduan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  MODIFY `id_kontak` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  MODIFY `id_logo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_penduduk`
--
ALTER TABLE `tbl_penduduk`
  MODIFY `id_penduduk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `id_pengguna` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
