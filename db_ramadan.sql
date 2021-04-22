-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Apr 2021 pada 16.33
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ramadan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dauroh`
--

CREATE TABLE `tb_dauroh` (
  `id` int(10) NOT NULL,
  `nama_td` varchar(255) NOT NULL,
  `alamat_td` text NOT NULL,
  `kontak_td` varchar(255) NOT NULL,
  `jkel_td` varchar(255) NOT NULL,
  `tingkat_td` varchar(255) NOT NULL,
  `status_td` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dauroh`
--

INSERT INTO `tb_dauroh` (`id`, `nama_td`, `alamat_td`, `kontak_td`, `jkel_td`, `tingkat_td`, `status_td`) VALUES
(1, 'Salahuddin', 'Jl. Cikutra Bandung', '085788575534', 'Laki-Laki', 'Aliyah', 'Draft'),
(2, 'Herlambang', 'Lembang Bandung', '085534762357', 'Laki-Laki', 'Ibtidaiyah', 'Final'),
(3, 'Zahratunnisa', 'Pasir Kaliki Bandung', '085677238854', 'Perempuan', 'Tsanawiyah', 'Draft');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_dauroh`
--
ALTER TABLE `tb_dauroh`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_dauroh`
--
ALTER TABLE `tb_dauroh`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
