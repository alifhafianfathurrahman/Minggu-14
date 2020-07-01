-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2020 at 03:04 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kereta`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `stasiun` varchar(50) NOT NULL,
  `jam` time NOT NULL,
  `id_krl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id_jadwal`, `stasiun`, `jam`, `id_krl`) VALUES
(1, 'gambir', '15:00:00', 11234),
(2, 'semarang tawang', '16:00:00', 1178),
(3, 'semarang tawang', '22:10:00', 23145),
(4, 'semarang tawang', '12:00:00', 1111);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_konten`
--

CREATE TABLE `tbl_konten` (
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_konten`
--

INSERT INTO `tbl_konten` (`konten`) VALUES
('<p>&nbsp;</p>\n\n<p style=\"text-align: center;\"><span style=\"font-size:20px\">InfoKRL merupakan website untuk mencari jadwal terkini Commuter Line.</span></p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_krl`
--

CREATE TABLE `tbl_krl` (
  `id_krl` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `stasiun_awal` varchar(50) NOT NULL,
  `stasiun_akhir` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_krl`
--

INSERT INTO `tbl_krl` (`id_krl`, `nama`, `stasiun_awal`, `stasiun_akhir`) VALUES
(1111, 'ekonomi', 'semarang tawang', 'Bandung'),
(1156, 'bisnis', 'gambir jakarta', 'malang'),
(1178, 'eksekutif', 'Surabaya gubeng', 'gambir jakarta'),
(11234, 'eksekutif', 'semarang tawang', 'gambir jakarta'),
(16745, 'ekonomi ac', 'semarang tawang', 'gambir jakarta'),
(23145, 'eksekutif', 'surabaya pasarturi', 'bandung');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(3, 'guest', '084e0343a0486ff05530df6c705c8bb4', 'pengguna'),
(4, 'alif', '099a147c0c6bcd34009896b2cc88633c', 'pengguna'),
(5, 'joko', '9ba0009aa81e794e628a04b51eaf7d7f', 'pengguna'),
(6, 'paijo', 'fa3eb838717a63d3bfb7f9e24b9c0fb8', 'pengguna'),
(7, 'jokowi', '7d00ff54a263fe80825b9297804a982c', 'pengguna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tbl_krl`
--
ALTER TABLE `tbl_krl`
  ADD PRIMARY KEY (`id_krl`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
