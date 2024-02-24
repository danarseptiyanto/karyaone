-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Feb 2024 pada 12.31
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daftarguru`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `tl` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `pegawai` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `jabatan`, `tl`, `email`, `img`, `pegawai`) VALUES
(2, 'Arga DIan SW', 'Guru TKJ', '28 Januari 1996', 'argasw@gmail.comss', 'image1.jpg', 'Staff'),
(3, 'Rafif Andi Irawan', 'Guru Tata Busana', '20 Maret 1990', 'jajal@jajal.com', 'image2.jpg', 'Guru'),
(4, 'Siti Rochimatun', 'Kepala TU', '29 Maret 1996', 'matun@gmail.com', 'image1.jpg', 'Staff'),
(58, 'Ade Sucipto', 'Guru Bimbingan Konseling', '18 Januari 2001', 'adesucpito@gmail.com', 'image2.jpg', 'Mutasi'),
(59, 'Tri Rabisan', 'Guru TBSM', '29 Januari 2000', 'septiyandanar@gmail.com', 'image2.png', 'Mutasi'),
(60, 'Spongebob Squarepants', 'Chef', '14 Januari 1996', 'spongebob@gmail.com', 'image2.jpg', 'Guru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'danar', '$2y$10$hJrZQAYHrQs6FMyv8R0qa.0rsHwisCNHQO0gm2LS9ZNC3jF3y/lt.'),
(2, 'danar', '$2y$10$DTk8C2Yg0NPp7ybelPToOemUC18aVntDqBVPhgACU6gk9T0BixY5C'),
(3, 'sigit', '$2y$10$lrWObTGGTw0whX.XzgfbJulWzNRnlSsnKUIh5iigHnCnkGoJjIt/y'),
(4, 'danars', '$2y$10$s/P4RE9CCrqa8aiQV3IfOuTinf8Rx0jMC.hVUQDs.PJM0FKILYXE.'),
(5, 'danarss', '$2y$10$2Yy5Rz8MLBRimTghBx5uDOjmlKn9vtfRqZkYqjuMZLhRTdPJhvY1a'),
(6, 'qwe', '$2y$10$nfRifNvfkgBCu.ON7iNlO.Fl9AUcmtHzNMo6FIzLwGggt4bQ9Y7AG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
