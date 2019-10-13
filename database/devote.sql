-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2019 at 08:26 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devote`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `nama`, `password`) VALUES
(1, 'admin', 'Deni Juli Setiawan', 'e184865de18d66d8e75ec64e2bdc7b8fc7999103');

-- --------------------------------------------------------

--
-- Table structure for table `aspirasi`
--

CREATE TABLE `aspirasi` (
  `id_aspirasi` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `isi` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `calon`
--

CREATE TABLE `calon` (
  `id_calon` int(10) NOT NULL,
  `nama_calon` varchar(50) NOT NULL,
  `visi` varchar(1000) DEFAULT NULL,
  `misi` varchar(1000) DEFAULT NULL,
  `foto` varchar(100) NOT NULL,
  `jenis_calon` enum('CALON','OSIS') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon`
--

INSERT INTO `calon` (`id_calon`, `nama_calon`, `visi`, `misi`, `foto`, `jenis_calon`) VALUES
(4, 'Sahid Nur Anwar - Yeni Supratman', '<p>Lorem ipsum dolar amet&nbsp;<span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet</span></p>', '<ol><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li></ol>', 'Sahid_Nur_Anwar_-_Yeni_Supratman-13-Oct-2019.jpg', 'CALON'),
(5, 'Deni Juli Setiawan - Samin Bin Ngalim', '<p>Lorem ipsum dolar amet&nbsp;<span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet</span></p>', '<ol><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet<br></li></ol>', 'Deni_Juli_Setiawan_-_Samin_Bin_Ngalim-13-Oct-2019.jpg', 'CALON'),
(6, 'Bendi Wahyudi - Ibrahim', '<p>Lorem ipsum dolar amet&nbsp;<span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet&nbsp;</span><span style=\"font-size: 1rem;\">Lorem ipsum dolar amet</span><br></p>', '<ol><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet</li><li>Lorem ipsum dolar amet<br></li></ol>', 'Bendi_Wahyudi_-_Ibrahim-13-Oct-2019.jpg', 'CALON'),
(7, 'Bendi Wahyudi - Ibrahim', '', '', 'Bendi_Wahyudi_-_Ibrahim-13-Oct-2019.jpg', 'OSIS');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(10) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, 'X RPL 1');

-- --------------------------------------------------------

--
-- Table structure for table `pemilihan`
--

CREATE TABLE `pemilihan` (
  `id_calon` int(10) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id_calon` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `penilaian` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `jk` int(1) NOT NULL,
  `token` varchar(5) NOT NULL,
  `jenis_user` enum('GURU','SISWA') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `id_kelas`, `jk`, `token`, `jenis_user`) VALUES
(11111, 'Samin Bin Ngalim', 1, 0, 'ABCD', 'GURU'),
(14903, 'Deni Juli Setiawan', 1, 1, 'ABCD', 'SISWA'),
(14904, 'Dewi Sinta', 1, 0, 'ABCD', 'SISWA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `aspirasi`
--
ALTER TABLE `aspirasi`
  ADD PRIMARY KEY (`id_aspirasi`);

--
-- Indexes for table `calon`
--
ALTER TABLE `calon`
  ADD PRIMARY KEY (`id_calon`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aspirasi`
--
ALTER TABLE `aspirasi`
  MODIFY `id_aspirasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `calon`
--
ALTER TABLE `calon`
  MODIFY `id_calon` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
