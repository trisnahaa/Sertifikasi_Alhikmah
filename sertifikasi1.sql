-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2024 at 03:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sertifikasi1`
--

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int(11) NOT NULL,
  `kd_skema` varchar(10) DEFAULT NULL,
  `nm_peserta` varchar(255) DEFAULT NULL,
  `jekel` varchar(10) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `kd_skema`, `nm_peserta`, `jekel`, `alamat`, `no_hp`) VALUES
(1, 'SKM-002', 'Trisna2', 'Perempuan', 'Nagreg', '+6285862201471'),
(2, 'SKM-002', 'Nana', 'Perempuan', 'Cina', '+6285862201471'),
(3, 'SKM-001', 'Ni-Ki', 'Laki-laki', 'Cina', '+6285862201471'),
(4, 'SKM-001', 'Riki', 'Laki-laki', 'jepang', '+6285862201471'),
(5, 'SKM-004', 'Karina', 'Perempuan', 'Korea', '083164642992');

-- --------------------------------------------------------

--
-- Table structure for table `skema`
--

CREATE TABLE `skema` (
  `kd_skema` varchar(10) NOT NULL,
  `nm_skema` varchar(255) DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `jml_unit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skema`
--

INSERT INTO `skema` (`kd_skema`, `nm_skema`, `jenis`, `jml_unit`) VALUES
('SKM-001', 'Junior Web Developer', 'KKNI', 9),
('SKM-002', 'Digital Marketing', 'Klaster', 10),
('SKM-003', 'Desainer Multimedia Muda', 'KKNI', 10),
('SKM-004', 'Network Administrasi Muda', 'KKNI', 4),
('SKM-005', 'Senior', 'KKNI', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`),
  ADD KEY `kd_skema` (`kd_skema`);

--
-- Indexes for table `skema`
--
ALTER TABLE `skema`
  ADD PRIMARY KEY (`kd_skema`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peserta`
--
ALTER TABLE `peserta`
  ADD CONSTRAINT `peserta_ibfk_1` FOREIGN KEY (`kd_skema`) REFERENCES `skema` (`kd_skema`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
