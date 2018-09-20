-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2018 at 03:53 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `istallup_istalluph`
--

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `id` int(11) NOT NULL,
  `namaVoucher` varchar(100) NOT NULL,
  `promotion` int(11) NOT NULL,
  `jenisDiscount` tinyint(4) NOT NULL,
  `expiredDate` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `discountusage`
--

CREATE TABLE `discountusage` (
  `idMember` int(11) NOT NULL,
  `idDiscount` int(11) NOT NULL,
  `tanggalPemakaian` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id` tinyint(4) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id`, `nama`, `status`) VALUES
(1, 'Ekonomi', 1),
(2, 'SISTECH', 1),
(3, 'SOD', 1),
(4, 'Teachers College', 1),
(5, 'FAST', 1),
(6, 'Hukum', 1),
(7, 'Kedokteran', 1),
(8, 'Art', 1),
(9, 'Nursing', 1),
(10, 'Psikologi', 1),
(11, 'FISIP', 1),
(12, 'STPPH', 1),
(13, 'International TC', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jenisdiscount`
--

CREATE TABLE `jenisdiscount` (
  `id` tinyint(4) NOT NULL,
  `namaJenis` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` tinyint(4) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `fakultas` tinyint(4) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama`, `fakultas`, `status`) VALUES
(1, 'Akuntansi', 1, 1),
(2, 'Manajemen', 1, 1),
(3, 'Sistem Informasi', 2, 1),
(4, 'Teknik Informatika', 2, 1),
(5, 'Arsitektur', 3, 1),
(6, 'Desain Interior', 3, 1),
(7, 'Desain Produk', 3, 1),
(8, 'DKV', 3, 1),
(9, 'Teacher College', 4, 1),
(10, 'Matematika Terapan', 5, 1),
(11, 'Bioteknologi', 5, 1),
(12, 'Teknik Elektro', 5, 1),
(13, 'Teknik Sipil', 5, 1),
(14, 'Teknik Industri', 5, 1),
(15, 'Teknologi Pangan', 5, 1),
(16, 'Hukum', 6, 1),
(17, 'Kedokteran', 7, 1),
(18, 'Musik', 8, 1),
(19, 'Keperawatan', 9, 1),
(20, 'Psikologi', 10, 1),
(21, 'Ilmu Komunikasi', 11, 1),
(22, 'Hubungan Internasional', 11, 1),
(23, 'Perhotelan', 12, 1),
(24, 'Manajemen Usaha Wisata', 12, 1),
(25, 'International TC', 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `line` varchar(100) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `jurusan` tinyint(4) NOT NULL,
  `tglmasuk` date NOT NULL,
  `jabatan` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `nama`, `email`, `pass`, `line`, `nohp`, `jurusan`, `tglmasuk`, `jabatan`, `status`) VALUES
(1, 'Joshua Natan ', 'joshuanatan.jn@gmail.com', 'joshuanatan', 'joshuanatanwijaya', '089616961915', 1, '2018-09-09', 2, 1),
(2, 'Debora Margareta', 'debmargareta03@gmail.com', 'deboramargareta', 'debmargaretaaa', '08121991871', 1, '2018-09-12', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `idProject` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `tglPerubahan` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `idMember` int(11) NOT NULL,
  `tglSubmit` date NOT NULL,
  `tglDateline` date NOT NULL,
  `namaFile` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discountusage`
--
ALTER TABLE `discountusage`
  ADD PRIMARY KEY (`idMember`,`idDiscount`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenisdiscount`
--
ALTER TABLE `jenisdiscount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jurusan` (`jurusan`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`idProject`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `jenisdiscount`
--
ALTER TABLE `jenisdiscount`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
