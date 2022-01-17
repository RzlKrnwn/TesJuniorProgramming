-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 02:12 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tes_programmer`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` varchar(50) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk`, `harga`, `kategori`, `status`) VALUES
('11', 'ALUMUNIUM FOIL ALL IN ONE BULAT 30mm IM', '1000', 'L MTH AKSESORIS (IM)', 'bisa dijual'),
('12', 'ALUMUNIUM FOIL ALL IN ONE SHEET 250mm IM', '12500', 'L MTH AKSESORIS (IM)', 'tidak bisa dijual'),
('15', 'ALUMUNIUM FOIL HDPE/PE BULAT 23mm IM', '12500', 'L MTH AKSESORIS (IM)', 'bisa dijual'),
('17', 'ALUMUNIUM FOIL HDPE/PE BULAT 30mm IM', '1000', 'L MTH AKSESORIS (IM)', 'bisa dijual'),
('18', 'ALUMUNIUM FOIL HDPE/PE SHEET 250mm IM', '13000', 'L MTH AKSESORIS (IM)', 'tidak bisa dijual'),
('19', 'ALUMUNIUM FOIL PET SHEET 250mm IM', '1000', 'L MTH AKSESORIS (IM)', 'tidak bisa dijual'),
('22', 'ARM PENDEK MODEL U', '13000', 'L MTH AKSESORIS (IM)', 'bisa dijual'),
('23', 'ARM SUPPORT KECIL', '13000', 'L MTH TABUNG (LK)', 'tidak bisa dijual'),
('24', 'ARM SUPPORT KOTAK PUTIH', '13000', 'L MTH AKSESORIS (IM)', 'tidak bisa dijual'),
('26', 'ARM SUPPORT PENDEK POLOS', '13000', 'L MTH TABUNG (LK)', 'bisa dijual'),
('27', 'ARM SUPPORT S IM', '1000', 'L MTH AKSESORIS (IM)', 'tidak bisa dijual'),
('28', 'ARM SUPPORT T (IMPORT)', '13000', 'L MTH AKSESORIS (IM)', 'bisa dijual'),
('29', 'ARM SUPPORT T - MODEL 1 ( LOKAL )', '10000', 'L MTH TABUNG (LK)', 'bisa dijual'),
('50', 'BLACK LASER TONER FP-T3 (100gr)', '13000', 'L MTH AKSESORIS (IM)', 'tidak bisa dijual'),
('56', 'BODY PRINTER CANON IP2770', '500', 'SP MTH SPAREPART (LK)', 'bisa dijual'),
('58', 'BODY PRINTER T13X', '15000', 'SP MTH SPAREPART (LK)', 'bisa dijual'),
('59', 'BOTOL 1000ML BLUE KHUSUS UNTUK EPSON R1800/R800 - ', '10000', 'CI MTH TINTA LAIN (IM)', 'bisa dijual'),
('6', 'ALCOHOL GEL POLISH CLEANSER GP-CLN01', '12500', 'L QUEENLY', 'bisa dijual'),
('60', 'BOTOL 1000ML CYAN KHUSUS UNTUK EPSON R1800/R800/R1', '10000', 'CI MTH TINTA LAIN (IM)', 'tidak bisa dijual'),
('61', 'BOTOL 1000ML GLOSS OPTIMIZER KHUSUS UNTUK EPSON R1', '1500', 'CI MTH TINTA LAIN (IM)', 'bisa dijual'),
('62', 'BOTOL 1000ML L.LIGHT BLACK KHUSUS UNTUK EPSON 2400', '1500', 'CI MTH TINTA LAIN (IM)', 'tidak bisa dijual'),
('63', 'BOTOL 1000ML LIGHT BLACK KHUSUS UNTUK EPSON 2400 -', '1500', 'CI MTH TINTA LAIN (IM)', 'tidak bisa dijual'),
('64', 'BOTOL 1000ML MAGENTA KHUSUS UNTUK EPSON R1800/R800', '1000', 'CI MTH TINTA LAIN (IM)', 'bisa dijual'),
('65', 'BOTOL 1000ML MATTE BLACK KHUSUS UNTUK EPSON R1800/', '1500', 'CI MTH TINTA LAIN (IM)', 'tidak bisa dijual'),
('66', 'BOTOL 1000ML ORANGE KHUSUS UNTUK EPSON R1900/R2000', '1500', 'CI MTH TINTA LAIN (IM)', 'bisa dijual'),
('67', 'BOTOL 1000ML RED KHUSUS UNTUK EPSON R1800/R800/R19', '1000', 'CI MTH TINTA LAIN (IM)', 'tidak bisa dijual'),
('68', 'BOTOL 1000ML YELLOW KHUSUS UNTUK EPSON R1800/R800/', '1500', 'CI MTH TINTA LAIN (IM)', 'tidak bisa dijual'),
('70', 'BOTOL KOTAK 100ML LK', '1000', 'L MTH AKSESORIS (LK)', 'bisa dijual'),
('72', 'BOTOL 10ML IM', '1000', 'S MTH STEMPEL (IM)', 'tidak bisa dijual'),
('9', 'ALUMUNIUM FOIL ALL IN ONE BULAT 23mm IM', '1000', 'L MTH AKSESORIS (IM)', 'bisa dijual');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
