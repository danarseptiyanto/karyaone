-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Feb 2024 pada 07.06
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
  `pegawai` varchar(40) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `mapel` varchar(100) NOT NULL,
  `ijazah` varchar(100) NOT NULL,
  `niy` varchar(30) NOT NULL,
  `tglmasuk` varchar(40) NOT NULL,
  `tglmutasi` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `jabatan`, `tl`, `email`, `img`, `pegawai`, `alamat`, `mapel`, `ijazah`, `niy`, `tglmasuk`, `tglmutasi`) VALUES
(63, 'Ari Dwi Handoko, S.Pd', 'Kepala Sekolah', 'Kendal, 24 September 1989', '-', 'image1.jpg', 'Guru', 'Dusun Dasri RT.01 RW.04', 'Matematika', 'S1, Pendidikan Matematika', '01.0415.108', 'April 2015', '0'),
(64, 'Khusnul Khotimah, S.Pd', 'WaKa Sarpras', 'Semarang, 30 Juli 1979', '-', 'image1.jpg', 'Guru', 'Mangkang Wetan RT.02 RW.03', 'Bahasa Inggris', 'S1, Pendidikan Bahasa Inggris', '01.0610.102', 'Juni 2010', '0'),
(65, 'Askuriati, S.E', 'Guru Mapel', 'Semarang, 16 Agustus 1967', '-', 'image1.jpg', 'Guru', 'Jl. Mandasia', 'Kewirausahaan, Seni Budaya', 'S1, Eknomi Manajemen', '01.0610.101', 'Juni 2010', '0'),
(66, 'Septi Muslikhah, S.Pd', 'WaKa Kurikulum', 'Magelang, 25 September 1984', '-', 'image1.jpg', 'Guru', 'Jl. Gunung Jati Timur IV No.223 RT.10 RW.02', 'Produktif Akuntansi', 'S1, Pendidikan Ekonomi', '01.0610.103', 'Juni 2010', '0'),
(67, 'Soimatun, S.Pd', 'Sekjur Tabus', 'Semarang, 16 April 1989', '-', 'image1.jpg', 'Guru', 'Mangkang Kulon RT.03 RW.04', 'Matematika', 'S1, Pendidikan Matematika', '01.1112.104', 'Juli 2013', '0'),
(68, 'Ida Fahru Roziyah, S.Pd', 'Pembina Pramuka', 'Kudus, 29 Juni 1992', '-', 'image1.jpg', 'Guru', 'Kaliputu RT.02 RW.01', 'Kimia', 'S1, Pendidikan Kimia', '01.0714.106', 'Juli 2014', '0'),
(69, 'Arga Dian Setyo Wicaksono, S.Kom', 'K3 TKJ', 'Kendal, 29 Juni 1992', '-', 'image1.jpg', 'Guru', 'Dk. Ngampon RT.05 RW.04', 'Produktif TKJ', 'S1, Sistem Komputer', '01.1015.110', 'Oktober 2015', '0'),
(70, 'Arif Adi Wijaya, S.Pd', 'Pembina OSIS', 'Pemalang, 11 Mei 1990', '-', 'image1.jpg', 'Guru', 'Paduraksa RT.02 RW.06', 'Penjasorkes', 'S1, Pendidikan Jasmani, Kesehatan dan Rekreasi', '01.1015.105', 'Oktober 2015', '0'),
(71, 'Muhammad Soleh, S.Pd', 'Staff WaKa Sarpras', 'Kendal, 01 Juli 1992', '-', 'image1.jpg', 'Guru', 'Dk. Kajen Kidul Ds. Kaliyoso RT.03 RW.01', 'Pendidikan Agama Islam', 'S1, Pendidikan Agama Islam', '01.0719.136', 'Juli 2019', '0'),
(72, 'Tito Dwi Yulianto, S.Pd. Gr', 'Pembina Pramuka', 'Kendal, 21 Juli 1993', '-', 'image1.jpg', 'Guru', 'Ds. Karangmulyo RT.05 RW.02', 'Bahasa Inggris, Conversation', 'S1, Pendidikan Bahasa Inggris', '01.0320.142', 'Maret 2020', '0'),
(73, 'Ghaly Raga Suci, S.Th.I', 'Guru Mapel', 'Kotabumi, 30 April 1992', '-', 'image1.jpg', 'Guru', 'Kepoh RT.02 RW.04', 'Pendidikan Agama Islam', 'S1, Theologi Islam', '01.0721.147', 'Juli 2021', '0'),
(74, 'Ade Sucipto, M.Pd', 'WaKa Kesiswaan', 'Tegal, 19 Desember 1995', '-', 'image1.jpg', 'Guru', 'Desa Gembongdadi RT.07 RW.03', 'BK', 'S2, Bimbingan Konseling', '01.0721.148', 'Juli 2021', '0'),
(75, 'Riyan Suryo Andono, S.Kom', 'Guru Mapel', 'Kendal, 30 Juli 1992', '-', 'image1.jpg', 'Guru', 'Dukuh Kelingan RT. 02 RW.03', 'Produktif TKJ', 'S1, Ilmu Komputer', '01.1121.151', 'Juli 2022', '0'),
(76, 'Siti Kholifatun, S.Pd', 'Guru Mapel', 'Semarang, 20 September 1994', '-', 'image1.jpg', 'Guru', 'Jl. Kyai gilang 2/5 mangkang kulon tugu semarang', 'Matematika', 'S1, Pend. Matematika', '01.0122.157', '10 Januari 2022', '0'),
(77, 'Rafif Andi Setiawan, S.Pd', 'Guru Mapel', 'Semarang, 24 September 1997', '-', 'image1.jpg', 'Guru', 'Jl Kawung 2 No. 2 Rt.2 Rw. 14', 'Produktif TKJ', 'S1, Pend. Teknik Elektronika', '01.0122.161', '14 Februari 2022', '0'),
(78, 'Indra Yosef, S.Pd', 'Guru Mapel', 'Kab. Semarang, 29 September 1995', '-', 'image1.jpg', 'Guru', 'Dsn Genurid Rt. 01/02 Desa Kewengen', 'Produktif TKJ', 'S1, Pend. Teknik Informatika dan komputer', '01.0522.162', '24 Mei 2022', '0'),
(79, 'Mega Yuniar Kusumawardhani, S.Pd', 'Guru Mapel', 'Pati, 22 Juni 1998', '-', 'image1.jpg', 'Guru', 'Jl. Amarta II PSI Rt 01 Rw 08, Ds. Sukoharjo Pati', 'Produktif Tata Busana', 'S1, Pend. Tata Busana', '01.0722.167', '16 Agustus 2022', '0'),
(80, 'Nur Faidah, S.Pd', 'Guru Mapel', 'Purbalingga, 9 Maret 1998', '-', 'image1.jpg', 'Guru', 'Ds. Karangmalang Rt. 1 Rw. 3 Bobotsari', 'Produktif Tata Busana', 'S1, Pend. Tata Busana', '01.1222.169', 'Desember 2022', '0'),
(81, 'Salsa Wahyu Ariyanto, S.Pd', 'Guru Mapel', 'Boyolali, 7 Maret 1997', '-', 'image1.jpg', 'Guru', 'Dusun Bolo Jambe Rt.17 Rw. 03', 'Prod. TBSM', 'S1, Pend. Teknik Otomotif', '01.1222.170', '12 Mei 2023', '0'),
(82, 'Fernando Arif Saputra, S.Pd', 'Guru Mapel', 'Semarang, 29 Mei 2000', '-', 'image1.jpg', 'Guru', 'Karanganyar Rt. 02 Rw. 03', 'Bahasa Indonesia', 'S1, Pend Pend. Bahasa & Sastra Indo', '01.1222.171', '14 Juli 2023', '0'),
(83, 'Lois Febrina,S.Pd', 'Guru Mapel', 'Kendal, 02 02 2002', '-', 'image1.jpg', 'Guru', 'DK Tegolayang RT 01 RW 6', 'PKN', 'S1 Pend', '01.1222.172', '15 Juli 2023', '0'),
(84, 'Firda Rahmawati, S.Pd', 'Guru Mapel', 'Kab. Semarang, 01 Februari 2001', '-', 'image1.jpg', 'Guru', 'Candirejo RT 6 / 02', 'Bahasa Indonesia', 'S1, Pend Pend. Bahasa & Sastra Indo', '01.1222.173', '16 Juli 2023', '0'),
(85, 'Sahva Mirza Nuraini, S.Pd', 'Guru Mapel', 'Semarang, 6 Juli 2001', '-', 'image1.jpg', 'Guru', 'Sentiaki I/1 RT 3 RW 7', 'Prodkt AKL', 'S1, Pend. Ekonomi', '01.1222.174', '27 Januari 2024', '0'),
(86, 'Rizki Firmansyah, S.Pd', 'Guru Mapel', 'Tasikmalaya, 11 Oktober 1999', '-', 'image1.jpg', 'Guru', 'Kp Barengkok RT 02 RW 03', 'Prod TBSM', 'S1, Pend. Teknik Mesin', '01.1222.175', '28 Januari 2024', '0'),
(87, 'Rangga Dino Alfian, S.Pd', 'Guru Mapel', 'Tangerang, 10 Juni 2001', '-', 'image1.jpg', 'Guru', 'Gg Cempakasari timur 1 RT 4 RW 1', 'Prod TBSM', 'S1, Pend. Teknik Mesin', '01.1222.176', '29 Januari 2024', '0'),
(88, 'Siti Rochimatun', 'Staff Administrasi Umum', 'Kendal, 13 Juli 1994', '-', 'image1.jpg', 'Staff', 'Karangsari RT.03 RW.03', '-', 'S1', '02.0216.002', 'Februari 2016', '0'),
(89, 'Danar Septiyanto', 'Operator sekolah', 'Karanganyar, 29 September 2000', '-', 'image1.jpg', 'Staff', 'Tambakaji, Rt. 1 Rw. 11', '-', 'SMK', '02.1221.007', '12 Desember 2021', '0'),
(90, 'Purwanto', 'Keamanan Sekolah', 'Semarang, 25 April 1975', '-', 'image1.jpg', 'Staff', 'Genuksari Atas RT.05 RW.09', '-', 'SMA', '02.0914.003', '41883', '0'),
(91, 'Diro', 'Kebersihan Sekolah', 'Yogyakarta, 02 Mei 1954', '-', 'image1.jpg', 'Staff', 'Jl. Jatisari RT.10 RW.13', '-', 'SMP', '02.0716.005', 'Juli 2016', '0'),
(92, 'Edi', 'Keamanan Sekolah', 'Semarang, 23 Agustus 1979', '-', 'image1.jpg', 'Staff', 'jatingaleh', '-', 'SMP', '02.0122.09', '28 Januari 2022', '0'),
(93, 'SUDRAS', 'Kebersihan Sekolah', 'Kendal, 10 April 1968', '-', 'image1.jpg', 'Staff', 'RT 06 RW 05', '-', 'SMP', '02.0722.12', '3 Agustus 2022', '0'),
(94, 'Umi Cholsum, S.AK', 'Bendahara Sekolah', 'Kendal, 13 Februari 2001', '-', 'image1.jpg', 'Staff', 'Dsn Rowosari Rt 4 Rw 5', '-', 'S1', '02.0722.13', '29 Mei 2023', '0'),
(95, 'M Wakhid Khoirul Rizki', 'Bendahara Sekolah', 'Kendal, 13 Februari 2002', '-', 'image1.jpg', 'Staff', 'Dsn Rowosari Rt 4 Rw 6', '-', 'IPS, SMA', '', '30 Mei 2023', '0'),
(96, 'Abdul Ghofur', 'Keamanan Sekolah', 'Kendal, 06 Juli 1971', '-', 'image1.jpg', 'Staff', 'Kemantren RT.01 RW.04', '-', 'IPS, SMA', '02.1015.xxx', '31 Mei 2023', '0'),
(97, 'Agus', 'Keamanan Sekolah', 'Kendal, 06 Juli 1972', '-', 'image1.jpg', 'Staff', 'Kemantren RT.01 RW.05', '-', 'SMA', '02.1019.xxx', '32 Mei 2023', '0'),
(98, 'Suripto', 'Kebersihan Sekolah', 'Kulonprogo, 15 Juni 1954', '-', 'image1.jpg', 'Staff', 'Jl. Kemantren RT.02 RW.04', '-', 'SD', '02.0810.xxx', '33 Mei 2023', '0'),
(99, 'Trisna Pandu Siwi, S.E', 'Bendahara Sekolah', 'Semarang, 28 Oktober 1990', '-', 'image1.jpg', 'Staff', 'Jl. Parangkusumo 8/12 RT.02 RW.03', '-', 'S1, Akuntansi', '02.0617.xxx', '34 Mei 2023', '0'),
(100, 'Berlian Wisesa Timur', 'Keamanan Sekolah', 'Semarang, 20 Maret 2000', '-', 'image1.jpg', 'Staff', 'Karangroto RT.05 RW.05', '-', 'SMA', '21219006', '35 Mei 2023', '0'),
(101, 'Faruk Noer', 'Keamanan Sekolah', 'Semarang, 28 Februari 2003', '-', 'image1.jpg', 'Staff', 'Jl. Honggowongso Rt.03 RW.09', '-', 'SMK', '21120007', '44136', '0'),
(102, 'Toni Kussetiyono Irawan, S.E', 'Kepala Tata Usaha', 'Semarang, 08 Oktober 1989', '-', 'image1.jpg', 'Staff', 'Jl. Kenconowungu Tengah 4/27 RT.06 RW.04', '-', 'S1, Ekonomi Pembangunan', '20115001', '42005', '0'),
(103, 'Moch. Purdianata', 'Keamanan Sekolah', 'Tangerang, 13 Januari 1983', '-', 'image1.jpg', 'Staff', 'Kemantren Rt. 02 Rw. 04', '-', 'SMA', '02.1221.006', 'Desember 2021', '0'),
(104, 'Lutfi Pujiyanti, S.E', 'Bendahara Sekolah', 'Semarang, 5 April 1997', '-', 'image1.jpg', 'Staff', 'Karanganyar RT.08 RW.12', '-', 'S1, Akuntansi', '20720004', '44013', '0'),
(105, 'Yanto', 'Keamanan Sekolah', 'Semarang, 5 April 1998', '-', 'image1.jpg', 'Staff', 'Karanganyar RT.08 RW.13', '-', 'S1, Akuntansi', '02.0122.08', '28 Januari 2022', '0'),
(106, 'Khoidatul Hasanah', 'Admin TU', 'Semarang, 15 Maret 2003', '-', 'image1.jpg', 'Staff', 'Dk Banjaran Rt. 3 Rw 20', '-', 'smk', '02.0722.11', '44767', '0'),
(107, 'Arnindya Diptari Duhitaningtyas, S.Ak', 'Bendahara Sekolah', 'Semarang, 5 Agustus 1999', '-', 'image1.jpg', 'Staff', 'Jl Perkutut raya jatisari mjen', '-', 'S1', '02.0422.10', '44678', '0'),
(108, 'Fita Dwi Damayanti, S.Pd', 'Guru Mapel', 'Kendal, 16 Januari 2000', '-', 'image1.jpg', 'Mutasi', 'Dk. Kwangsan RT 2 RW 2', 'Bahasa Indonesia', 'S1 Pend Bahasa dan Sastra Indonesia', '1.1023178', '44937', '45088'),
(109, 'Ika Moulina Utami, S.Pd', 'Guru Mapel', 'Jakarta, 21 Juni 2001', '-', 'image1.jpg', 'Mutasi', 'Jl. Taman Siswa,', 'Prod. Akuntansi', 'S1 Pend. Ekonomi AKT', '1.1023177', '23/10', '21'),
(110, 'Alvin Maula Al Bahri, S.Pd', 'Guru Mapel', 'Indramayu, 13 Maret 2001', '-', 'image1.jpg', 'Mutasi', 'Blok Bloran Rt 4 Rw 1', 'Prod TBSM', 'S1, Pend. Teknik Otomotif', '1.0823174', '31/8/23', '12'),
(111, 'Robianto, S.Pd', 'Guru Mapel', 'Jakarta, 1 April 1998', '-', 'image1.jpg', 'Mutasi', 'Blok Bloran Rt 4 Rw 2', 'Prod TBSM', 'S1, Pend. Teknik Otomotif', '1.0923176', '25/9', '31');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
