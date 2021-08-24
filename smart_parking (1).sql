-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2021 at 05:29 AM
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
-- Database: `smart_parking`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `nama_lengkap` varchar(30) NOT NULL,
  `no_telp` varchar(14) NOT NULL,
  `email` text NOT NULL,
  `kata_sandi` varchar(30) NOT NULL,
  `nomor_identitas` varchar(20) NOT NULL,
  `no_plat` varchar(10) NOT NULL,
  `foto_identitas` varchar(11) NOT NULL,
  `foto_stnk` varchar(11) NOT NULL,
  `foto_kendaraan_depan` varchar(11) NOT NULL,
  `foto_kendaraan_belakang` varchar(11) NOT NULL,
  `saldo` int(10) NOT NULL,
  `pin` varchar(6) NOT NULL,
  `qr_code` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`nama_lengkap`, `no_telp`, `email`, `kata_sandi`, `nomor_identitas`, `no_plat`, `foto_identitas`, `foto_stnk`, `foto_kendaraan_depan`, `foto_kendaraan_belakang`, `saldo`, `pin`, `qr_code`) VALUES
('sinichi', '085213575999', 'bhbhbh@gmail.com', '123456', '1112223334445', 'P-12421-W', 'kjij11.PNG', 'hapus.PNG', 'edit.PNG', 'gf43.PNG', 0, '123567', '1112223334445.png'),
('Muhammad Yusril Amin', '085213575815', 'sinischi@gmail.com', '123456', '123456789123', 'P-12421-W', 'kjkhkhk.PNG', 'gf42.PNG', 'sdfs.PNG', 'gfg11.PNG', 39000, '123345', '123456789123.png');

-- --------------------------------------------------------

--
-- Table structure for table `detail_lokasi`
--

CREATE TABLE `detail_lokasi` (
  `id_detail` int(11) NOT NULL,
  `id_parkir` int(11) NOT NULL,
  `lokasi_detail_parkit` varchar(6) NOT NULL,
  `status` int(11) NOT NULL,
  `harga_tiket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_lokasi`
--

INSERT INTO `detail_lokasi` (`id_detail`, `id_parkir`, `lokasi_detail_parkit`, `status`, `harga_tiket`) VALUES
(1, 1, 'a-36', 1, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `parkir`
--

CREATE TABLE `parkir` (
  `id_parkir` int(11) NOT NULL,
  `lokasi_parkir` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parkir`
--

INSERT INTO `parkir` (`id_parkir`, `lokasi_parkir`) VALUES
(1, 'lippo');

-- --------------------------------------------------------

--
-- Table structure for table `saldo`
--

CREATE TABLE `saldo` (
  `id_saldo` int(11) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `nominal` int(11) NOT NULL,
  `tanggall` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saldo`
--

INSERT INTO `saldo` (`id_saldo`, `id_user`, `nominal`, `tanggall`) VALUES
(1, '123456789123', 30000, '2021-08-23 14:37:59'),
(2, '123456789123', 20000, '2021-08-23 14:43:59'),
(3, '123456789123', 4000, '2021-08-24 00:51:10');

--
-- Triggers `saldo`
--
DELIMITER $$
CREATE TRIGGER `edit_saldo` AFTER UPDATE ON `saldo` FOR EACH ROW UPDATE akun SET saldo = saldo-OLD.nominal+NEW.nominal WHERE nomor_identitas = NEW.id_user
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `hapus_saldo` AFTER DELETE ON `saldo` FOR EACH ROW UPDATE akun SET saldo = saldo-OLD.nominal WHERE nomor_identitas = OLD.id_user
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tambah_saldo` AFTER INSERT ON `saldo` FOR EACH ROW UPDATE akun SET saldo = saldo+NEW.nominal WHERE nomor_identitas = NEW.id_user
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `lokasi_parkir` varchar(200) NOT NULL,
  `harga_tiket` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL,
  `tempat_parkir` int(11) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `lokasi_parkir`, `harga_tiket`, `tanggal`, `status`, `tempat_parkir`, `id_user`, `jam_masuk`, `jam_keluar`) VALUES
(1, 'lippo', 5000, '2021-08-22 17:02:08', 1, 1, '123456789123', '16:17:28', '20:17:28'),
(2, 'Lippo', 5000, '2021-08-22 20:18:07', 1, 1, '123456789123', '12:20:28', '17:17:28'),
(3, 'lippo', 5000, '2021-08-23 01:03:15', 1, 1, '123456789123', '21:26:22', '21:28:22');

--
-- Triggers `transaksi`
--
DELIMITER $$
CREATE TRIGGER `transaksi` AFTER INSERT ON `transaksi` FOR EACH ROW UPDATE akun SET saldo = saldo-NEW.harga_tiket WHERE nomor_identitas = NEW.id_user
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`nomor_identitas`);

--
-- Indexes for table `detail_lokasi`
--
ALTER TABLE `detail_lokasi`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_parkir` (`id_parkir`);

--
-- Indexes for table `parkir`
--
ALTER TABLE `parkir`
  ADD PRIMARY KEY (`id_parkir`);

--
-- Indexes for table `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`id_saldo`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `tempat_parkir` (`tempat_parkir`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `saldo`
--
ALTER TABLE `saldo`
  MODIFY `id_saldo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_lokasi`
--
ALTER TABLE `detail_lokasi`
  ADD CONSTRAINT `detail_lokasi_ibfk_1` FOREIGN KEY (`id_parkir`) REFERENCES `parkir` (`id_parkir`);

--
-- Constraints for table `saldo`
--
ALTER TABLE `saldo`
  ADD CONSTRAINT `saldo_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `akun` (`nomor_identitas`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `akun` (`nomor_identitas`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`tempat_parkir`) REFERENCES `detail_lokasi` (`id_detail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
