-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Sep 2021 pada 10.54
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

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
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `nama_lengkap` varchar(30) NOT NULL,
  `no_telp` varchar(14) NOT NULL,
  `email` text NOT NULL,
  `kata_sandi` varchar(30) NOT NULL,
  `nomor_identitas` varchar(20) NOT NULL,
  `no_plat` varchar(10) NOT NULL,
  `foto_identitas` varchar(30) NOT NULL,
  `foto_stnk` varchar(30) NOT NULL,
  `foto_kendaraan_depan` varchar(30) NOT NULL,
  `foto_kendaraan_belakang` varchar(30) NOT NULL,
  `saldo` int(10) NOT NULL,
  `pin` varchar(6) NOT NULL,
  `qr_code` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_lokasi`
--

CREATE TABLE `detail_lokasi` (
  `id_detail` int(11) NOT NULL,
  `id_parkir` int(11) NOT NULL,
  `lokasi_detail_parkit` varchar(6) NOT NULL,
  `status` int(11) NOT NULL,
  `harga_tiket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_lokasi`
--

INSERT INTO `detail_lokasi` (`id_detail`, `id_parkir`, `lokasi_detail_parkit`, `status`, `harga_tiket`) VALUES
(1, 1, 'a-36', 0, 5000),
(2, 1, 'a-37', 1, 5000),
(3, 2, 'a-34', 1, 5000),
(4, 1, 'a-39', 1, 5000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `parkir`
--

CREATE TABLE `parkir` (
  `id_parkir` int(11) NOT NULL,
  `lokasi_parkir` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `parkir`
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
-- Struktur dari tabel `saldo`
--

CREATE TABLE `saldo` (
  `id_saldo` int(11) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `nominal` int(11) NOT NULL,
  `tanggall` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Trigger `saldo`
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
-- Struktur dari tabel `transaksi`
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
-- Trigger `transaksi`
--
DELIMITER $$
CREATE TRIGGER `transaksi` AFTER INSERT ON `transaksi` FOR EACH ROW UPDATE akun SET saldo = saldo-NEW.harga_tiket WHERE nomor_identitas = NEW.id_user
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`nomor_identitas`);

--
-- Indeks untuk tabel `detail_lokasi`
--
ALTER TABLE `detail_lokasi`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_parkir` (`id_parkir`);

--
-- Indeks untuk tabel `parkir`
--
ALTER TABLE `parkir`
  ADD PRIMARY KEY (`id_parkir`);

--
-- Indeks untuk tabel `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`id_saldo`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `tempat_parkir` (`tempat_parkir`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `saldo`
--
ALTER TABLE `saldo`
  MODIFY `id_saldo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_lokasi`
--
ALTER TABLE `detail_lokasi`
  ADD CONSTRAINT `detail_lokasi_ibfk_1` FOREIGN KEY (`id_parkir`) REFERENCES `parkir` (`id_parkir`);

--
-- Ketidakleluasaan untuk tabel `saldo`
--
ALTER TABLE `saldo`
  ADD CONSTRAINT `saldo_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `akun` (`nomor_identitas`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `akun` (`nomor_identitas`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`tempat_parkir`) REFERENCES `detail_lokasi` (`id_detail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
