-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2020 at 04:17 PM
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
-- Database: `web_bansos`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori_bansos`
--

CREATE TABLE `kategori_bansos` (
  `id_kat` varchar(8) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_bansos`
--

INSERT INTO `kategori_bansos` (`id_kat`, `nama`, `alamat`, `telp`) VALUES
('ID DKTS', 'ID DTKS/ BDT', 'NAMA ART', '0213451234'),
('NIK', 'NIK', 'NAMA SESUAI KTP\r\n', '0213456789'),
('NOMOR PB', 'NOMOR PBI JK/ KIS', 'NAMA PESERTA', '081290901234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_bansos`
--
ALTER TABLE `kategori_bansos`
  ADD PRIMARY KEY (`id_kat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
