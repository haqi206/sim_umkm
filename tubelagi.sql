-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 12:22 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubelagi`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(3) NOT NULL,
  `username` varchar(12) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `email`, `password`) VALUES
(2, 'Haqi', 'haqi206@gmail.com', '1wasd2qw'),
(5, 'admin', 'admin@gmail.com', 'admin'),
(6, 'ahmad', 'ahmad@gmail.com', 'ahmad'),
(7, 'budi', 'budi@gmail.com', 'budi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_daftarumkm`
--

CREATE TABLE `tb_daftarumkm` (
  `id_toko` int(3) NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_daftarumkm`
--

INSERT INTO `tb_daftarumkm` (`id_toko`, `nama`) VALUES
(1, 'Kaos Mantap'),
(2, 'Burger Dahsyat'),
(3, 'Sate Madura');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendapatan`
--

CREATE TABLE `tb_pendapatan` (
  `id_pendapatan` int(3) NOT NULL,
  `id_toko` int(3) NOT NULL,
  `pendapatan` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pendapatan`
--

INSERT INTO `tb_pendapatan` (`id_pendapatan`, `id_toko`, `pendapatan`, `tanggal`) VALUES
(1, 1, 7500000, '2021-01-01'),
(2, 2, 8000000, '2021-01-01'),
(3, 3, 7000000, '2021-01-01'),
(4, 1, 10000000, '2021-02-01'),
(5, 2, 7000000, '2021-02-01'),
(6, 3, 6500000, '2021-02-01'),
(7, 1, 9500000, '2021-03-01'),
(8, 2, 8800000, '2021-03-01'),
(9, 3, 7900000, '2021-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_umkm`
--

CREATE TABLE `tb_umkm` (
  `id` int(3) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `pendapatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_umkm`
--

INSERT INTO `tb_umkm` (`id`, `nama`, `tanggal`, `pendapatan`) VALUES
(5, 'Kaos Mantap', '2021-01-01', 6000000),
(6, 'Kaos Mantap', '2021-02-01', 15000000),
(7, 'Kaos Mantap', '2021-03-01', 15000000),
(8, 'Kaos Mantap', '2021-04-01', 11000000),
(9, 'Kaos Mantap', '2021-05-01', 10000000),
(10, 'Kaos Mantap', '2021-06-01', 9000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_daftarumkm`
--
ALTER TABLE `tb_daftarumkm`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indexes for table `tb_pendapatan`
--
ALTER TABLE `tb_pendapatan`
  ADD PRIMARY KEY (`id_pendapatan`);

--
-- Indexes for table `tb_umkm`
--
ALTER TABLE `tb_umkm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_daftarumkm`
--
ALTER TABLE `tb_daftarumkm`
  MODIFY `id_toko` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pendapatan`
--
ALTER TABLE `tb_pendapatan`
  MODIFY `id_pendapatan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_umkm`
--
ALTER TABLE `tb_umkm`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
