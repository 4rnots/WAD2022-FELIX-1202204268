-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Waktu pembuatan: 26 Nov 2022 pada 08.34
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul4_felix`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `showroom_felix_table`
--

CREATE TABLE `showroom_felix_table` (
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) DEFAULT NULL,
  `pemilik_mobil` varchar(255) DEFAULT NULL,
  `merk_mobil` varchar(255) DEFAULT NULL,
  `tanggal_beli` date DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `foto_mobil` varchar(255) DEFAULT NULL,
  `status_pembayaran` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_felix`
--

CREATE TABLE `user_felix` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--
INSERT INTO `user_felix` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(5, 'felix', 'felixnugrha@gmail.com', '909090', '08979300730'),

--
-- Indeks untuk tabel `showroom_felix_table`
--
ALTER TABLE `showroom_felix_table`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indeks untuk tabel `user_felix`
--
ALTER TABLE `user_felix`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `showroom_felix_table`
--
ALTER TABLE `showroom_felix_table`
  MODIFY `id_mobil` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user_felix`
--
ALTER TABLE `user_felix`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
