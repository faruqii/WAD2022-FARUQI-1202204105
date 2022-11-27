-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 19, 2022 at 08:30 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul3`
--

-- --------------------------------------------------------

--
-- Table structure for table `showroomead_faruqi`
--

CREATE TABLE `showroomead_faruqi` (
  `id_mobil` int(11) NOT NULL,
  `nama_mobil` varchar(255) DEFAULT NULL,
  `pemilik_mobil` varchar(255) DEFAULT NULL,
  `merk_mobil` varchar(255) DEFAULT NULL,
  `tanggal_beli` date DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `foto_mobil` varchar(255) DEFAULT NULL,
  `status_pembayaran` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `showroomead_faruqi`
--

INSERT INTO `showroomead_faruqi` (`id_mobil`, `nama_mobil`, `pemilik_mobil`, `merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status_pembayaran`) VALUES
(11, 'Toyota Fortuner', 'Faruqi', 'Toyota', '2022-11-08', 'Mobil Bos Sawit', 'fortunergr.png', 'Lunas'),
(12, 'Honda HRV', 'Faruqi', 'Honda', '2022-11-19', 'Mobil Anak Muda', 'hrv.png', 'Lunas'),
(14, 'Toyota Alphard', 'Faruqi', 'Toyota', '2022-11-19', 'Mobil Mewah Alphard', 'alphard.png', 'Lunas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `showroomead_faruqi`
--
ALTER TABLE `showroomead_faruqi`
  ADD PRIMARY KEY (`id_mobil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `showroomead_faruqi`
--
ALTER TABLE `showroomead_faruqi`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
