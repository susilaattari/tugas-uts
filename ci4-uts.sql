-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2022 pada 08.28
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4-uts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datakaryawan`
--

CREATE TABLE `datakaryawan` (
  `id` int(20) NOT NULL,
  `nama_lengkap` varchar(20) NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tanggal_lahir` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `lulusan` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `email` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datakaryawan`
--

INSERT INTO `datakaryawan` (`id`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `lulusan`, `agama`, `alamat`, `no_hp`, `foto`, `jabatan`, `email`) VALUES
(1, 'susila Tropika', 'Tangerang', '1993-02-27', 'laki-laki', 'S1-Sistem Informasi', 'Islam', 'kp.bugel pabuaran kel.kaduagung-kec. tigaraksa - kab. tangerang-banten', '089614072349', 'https://1.bp.blogspot.com/-PLv95yKIv3U/Xkk0BFOnQlI/AAAAAAAACCI/nd6x1C7sY5ocXewoYmGRd0WwIfovVzFUgCLcB', 'Backend', 'susilatropika8@gmail.'),
(2, 'delisnawati', 'Jakarta', '2000-05-01', 'Perempuan', 'S1-Sistem Informasi', 'Islam', 'Kp.Bugel Pabuaran kec tigaraksa', '0894537753', 'https://1.bp.blogspot.com/-PLv95yKIv3U/Xkk0BFOnQlI/AAAAAAAACCI/nd6x1C7sY5ocXewoYmGRd0WwIfovVzFUgCLcB', 'Sistem Analis', 'delisnawatinawa2@gmai'),
(3, 'Rijal Hardiansyah', 'Bogor', '1996-03-12', 'laki-laki', 'SMA', 'Islam', 'kp.jasinga', '0894527753', '', 'Sistem Analis', 'rizal8@gmail.com'),
(5, 'bagus Hardianti', 'Jakarta', '1998-02-23', 'laki-laki', 'S1-Akuntansi', 'Islam', 'kp belanda araara', '0894556753', 'https://1.bp.blogspot.com/-PLv95yKIv3U/Xkk0BFOnQlI/AAAAAAAACCI/nd6x1C7sY5ocXewoYmGRd0WwIfovVzFUgCLcB', 'UI/UX', 'bagus234@gmail.com'),
(6, 'desi anatasya', 'jawa tengah', '1990-05-12', 'Perempuan', 'SMA', 'Islam', 'kp. bugel', '0896737753', 'https://1.bp.blogspot.com/-PLv95yKIv3U/Xkk0BFOnQlI/AAAAAAAACCI/nd6x1C7sY5ocXewoYmGRd0WwIfovVzFUgCLcB', 'Backend', 'desi8@gmail.com'),
(7, 'Mega Dewi Rahayu', 'Jakarta', '1994-12-12', 'Perempuan', 'S1-Akuntansi', 'Islam', 'kp munjul', '0894534753', '', 'FrondEnd', 'mega@gmail.com'),
(8, 'andika damian', 'Bogor', '1993-02-12', 'laki-laki', 'S1-Sistem Informasi', 'Islam', 'kp. Ketapang', '0894533453', 'https://1.bp.blogspot.com/-PLv95yKIv3U/Xkk0BFOnQlI/AAAAAAAACCI/nd6x1C7sY5ocXewoYmGRd0WwIfovVzFUgCLcB', 'UI/UX', 'andika2@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datakaryawan`
--
ALTER TABLE `datakaryawan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datakaryawan`
--
ALTER TABLE `datakaryawan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
