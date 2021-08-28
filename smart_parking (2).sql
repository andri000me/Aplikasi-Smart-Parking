-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2021 at 04:06 PM
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
('Muhammad Yusril Amin', '085213575815', 'sinichi@gmail.com', '123456', '123456789123', 'P-12421-W', 'kjkhkhk.PNG', 'gf42.PNG', 'sdfs.PNG', 'gfg11.PNG', 25000, '123345', '123456789123.png');

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
(1, 1, 'a-36', 0, 5000),
(2, 1, 'a-37', 0, 5000),
(3, 2, 'a-34', 1, 5000),
(4, 1, 'a-39', 1, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `parkir`
--

CREATE TABLE `parkir` (
  `id_parkir` int(11) NOT NULL,
  `lokasi_parkir` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parkir`
--

INSERT INTO `parkir` (`id_parkir`, `lokasi_parkir`, `alamat`) VALUES
(1, 'Lippo Plaza', 'Jl. Gajah Mada No.106, Kb. Kidul, Jember Kidul, Kec. Kaliwates, Kabupaten Jember, Jawa Timur'),
(2, 'Roxy Square', 'Jl. Hayam Wuruk No.50-58, Gerdu, Sempusari, Kaliwates, Kabupaten Jember, Jawa Timur'),
(3, 'Matahari Johar Plaza', 'Johar Plaza, Jl. Diponegoro No.3, Tembaan, Kepatihan, Kec. Kaliwates, Kabupaten Jember, Jawa Timur'),
(4, 'Super Galaxy Tempurejo', 'Galaksi, Tempurejo, Kabupaten Jember, Jawa Timur'),
(5, 'Golden Market', 'Jl. Trunojoyo No.42, Sawahan Cantian, Kepatihan, Kec. Kaliwates, Kabupaten Jember, Jawa Timur'),
(6, 'Dira Shopping Centre', 'Jl. Puger, Krajan Lor, Balung Kulon, Balung, Kabupaten Jember, Jawa Timur'),
(7, 'Transmart Jember', 'Jl. Hayam Wuruk No.71, Gerdu, Sempusari, Kec. Kaliwates, Kabupaten Jember, Jawa Timur'),
(8, 'Larisso Supermarket', 'Jl. Watu Ulo No.21, Krajan, Ambulu, Kabupaten Jember, Jawa Timur'),
(9, ' Waterpark Dira Kencong', 'Jl. Krakatau No.93, Pd. Waluh, Kencong, Kabupaten Jember, Jawa Timur'),
(10, 'Kota Cinema Mall', 'Jl. Gajah Mada No.176, Kb. Kidul, Jember Kidul, Kec. Kaliwates, Kabupaten Jember, Jawa Timur');

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
(3, '123456789123', 4000, '2021-08-24 00:51:10'),
(4, '123456789123', 41001, '2021-08-28 02:06:44');

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
  `id_transaksi` varchar(15) NOT NULL,
  `lokasi_parkir` varchar(200) NOT NULL,
  `harga_tiket` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` int(11) NOT NULL,
  `status_keluar_masuk` int(11) NOT NULL,
  `tempat_parkir` int(11) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `lokasi_parkir`, `harga_tiket`, `tanggal`, `status`, `status_keluar_masuk`, `tempat_parkir`, `id_user`, `jam_masuk`, `jam_keluar`) VALUES
('1188888240', 'Lippo Plaza', 5000, '2021-08-28', 1, 1, 2, '123456789123', '19:48:27', '20:39:47'),
('1843318318', 'Lippo Plaza', 5000, '2021-08-28', 1, 1, 2, '123456789123', '01:12:07', '20:31:06'),
('538544643', 'Lippo Plaza', 5000, '2021-08-28', 1, 0, 2, '123456789123', '01:18:28', '00:00:00');

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
  MODIFY `id_saldo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
