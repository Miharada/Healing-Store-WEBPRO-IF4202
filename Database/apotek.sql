-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2020 at 02:32 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `pgw`
--

CREATE TABLE `pgw` (
  `id_pegawai` varchar(5) NOT NULL,
  `nama_pegawai` text NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pgw`
--

INSERT INTO `pgw` (`id_pegawai`, `nama_pegawai`, `alamat`, `no_hp`) VALUES
('PG001', 'Mega Adi ', 'GBA 1 ', 81234567),
('PG002', 'Tiwa', 'GBA 1', 87932478),
('PG003', 'Stefanus Wisnu', 'Ciganitri ', 812477999),
('PG004', 'Mahardika', 'Baleendah', 83234211),
('PG005', 'Miharada', 'Kalijati', 53463572);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pgw`
--
ALTER TABLE `pgw`
  ADD PRIMARY KEY (`id_pegawai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
