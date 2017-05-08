-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2017 at 07:42 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lowongan_kerja`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id_employee` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL,
  `foto` blob,
  `alamat` varchar(200) DEFAULT NULL,
  `deskripsi` text,
  `level` varchar(10) NOT NULL,
  `cv` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id_employee`, `nama_lengkap`, `email`, `password`, `foto`, `alamat`, `deskripsi`, `level`, `cv`) VALUES
(2, 'Abdul Aziz Priatna', 'abdulazizpriatna@gmail.com', 'd60cb3ff75506957954f520d7e4bb804b067b5af', 0x4453435f313134325f2846494c456d696e696d697a657229382e4a5047, 'Bandung', 'Gatau', 'employee', ''),
(3, 'aziz', 'aziz@upi.edu', '10c0683daf77819e3d2d8b609e823d41ab76cba1', NULL, NULL, NULL, 'employee', 0x4b5253322e706466);

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `id_perusahaan` int(11) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `logo_perusahaan` mediumblob,
  `alamat_perusahaan` varchar(200) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `jenis_bidang_usaha` varchar(30) DEFAULT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`id_perusahaan`, `nama_perusahaan`, `logo_perusahaan`, `alamat_perusahaan`, `email`, `password`, `jenis_bidang_usaha`, `level`) VALUES
(51, 'STRONG INDONESIA, PT', 0x7374726f6e67312e6a7067, 'Jl. Kopo no 229 Bandung', 'strongindonesiapt@gmail.com', 'd60cb3ff75506957954f520d7e4bb804b067b5af', 'Wiraswasta', 'employers'),
(52, 'PT INDONESIA', 0x6c6f676f2e706e67, 'bandung', 'indonesia@gmail.com', '10c0683daf77819e3d2d8b609e823d41ab76cba1', 'terintegrasi', 'employers');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(20) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
('KTR001', 'Admin dan HRD'),
('KTR002', 'Akunting'),
('KTR003', 'Desain'),
('KTR004', 'Teknik'),
('KTR005', 'Teknologi Informatika'),
('KTR006', 'Telekomunikasi'),
('KTR007', 'Tranportasi dan Logistik'),
('KTR008', 'Properti'),
('KTR009', 'Pendidikan'),
('KTR010', 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `id_posting` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `konten` longblob NOT NULL,
  `tgl_posting` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`id_posting`, `id_perusahaan`, `id_kategori`, `judul`, `konten`, `tgl_posting`) VALUES
(1, 51, 'KTR004', 'SGduhAJLDBHJLshiaJN', 0x3c7370616e207374796c653d22636f6c6f723a20726762283230362c20302c2030293b206261636b67726f756e642d636f6c6f723a2079656c6c6f773b223e734147484a4c53416c736841484a534c484a3b6b6e786d7a623c2f7370616e3e, '2015-06-02'),
(2, 52, 'KTR003', 'bebas', 0x6170616b616861206b616d75206269736120626572646972693f, '2017-05-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id_employee`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`id_perusahaan`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`id_posting`),
  ADD KEY `fk_employers1` (`id_perusahaan`),
  ADD KEY `fk_kategori` (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id_employee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `id_posting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `posting`
--
ALTER TABLE `posting`
  ADD CONSTRAINT `fk_employers1` FOREIGN KEY (`id_perusahaan`) REFERENCES `employers` (`id_perusahaan`),
  ADD CONSTRAINT `fk_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
