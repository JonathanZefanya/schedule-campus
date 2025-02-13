-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Feb 2025 pada 16.15
-- Versi server: 8.2.0
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jadwal-kuliah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', '$2y$10$EX0L5MeIQldpkCuTZW.mjujTaj.Yy20IW0GOluecU/c.es.9r6E5.', 'admin@gmail.com'),
(6, 'Jonathan Zefanya', '$2y$10$ZH3V3QQcLKhMuebLDkRdyuCco3FxjNTbuVFbWajJ7pZg.YX8OwHGO', 'jonathan.zefanya16@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int NOT NULL,
  `nik` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_dosen` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nik`, `email`, `nama_dosen`) VALUES
(40, '1000', 'soleh@iti.ac.id', 'Muhamad Soleh, S.Si, M.Kom'),
(41, '1001', 'ramli@iti.ac.id', 'Ir. Muhamad Ramli, M.Kom'),
(42, '1002', 'melani@iti.ac.id', 'Melani Indriasari, S.T., M.Kom.'),
(43, '1003', 'Sumiarti@iti.ac.id', 'Ir. Sumiarti Andri, M.Kom.'),
(44, '1004', 'Sulistyowati@iti.ac.id', 'Dra. Sulistyowati, M Kom'),
(45, '1005', 'Indrati@iti.ac.id', 'Dra. Indrati Sukmadi, M.Sc.'),
(46, '1006', 'Sunarto@iti.ac.id', 'Sunarto, S.Kom, M.Kom.'),
(47, '1007', 'Endang@iti.ac.id', 'Dra. Endang Ratnawati Djuwitaningrum, M. Kom.'),
(48, '1008', 'Dino@iti.ac.id', 'Dino Hariatma Putra, S.T., M.Kom'),
(49, '1009', 'Husni@iti.ac.id', 'Husni, S.T., M.Kom.'),
(50, '1010', 'MARGARETHA@iti.ac.id', 'MARGARETHA MARIA GORETTY DWI RATNA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int NOT NULL,
  `nama_kelas` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah_siswa` int NOT NULL,
  `semester` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `jumlah_siswa`, `semester`) VALUES
(1, 'khusus 1.1', 35, 1),
(2, 'khusus 1.3', 35, 3),
(3, 'khusus 1.5', 35, 5),
(4, 'khusus 1.7', 35, 7),
(5, 'IF-A.1', 35, 1),
(6, 'IF-A.3', 35, 3),
(7, 'IF-A.5', 35, 5),
(8, 'IF-A.7', 35, 7),
(9, 'IF-B.1', 35, 1),
(10, 'IF-B.3', 35, 3),
(11, 'IF-B.5', 35, 5),
(12, 'IF-B.7', 35, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `id_matkul` int NOT NULL,
  `kode_matakuliah` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_matakuliah` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `SKS` int NOT NULL,
  `semester` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id_matkul`, `kode_matakuliah`, `nama_matakuliah`, `SKS`, `semester`) VALUES
(42, 'IF121105', 'Transformasi Digital', 2, 1),
(43, 'IF121106', 'Bahasa Inggris', 2, 1),
(44, 'IF12110F', 'Agama', 2, 1),
(45, 'IF132108', 'Dasar Arsitektur dan Organisasi Komputer', 3, 1),
(46, 'IF134109', 'Matematika 1', 3, 1),
(47, 'IF13410X', 'Matematika Diskrit', 3, 1),
(48, 'IF142107', 'Pemrograman Dasar 1', 3, 1),
(49, 'IF322108', 'Ilmu Data', 2, 3),
(50, 'IF321101', 'Pancasila', 2, 3),
(51, 'IF321102', 'Bahasa Indonesia', 2, 3),
(52, 'IF322106', 'Pemrograman Dasar 2', 2, 3),
(53, 'IF332103', 'Basis Data', 3, 3),
(54, 'IF332104', 'Perancangan dan Analisa Algoritma', 3, 3),
(55, 'IF332105', 'Sistem Operasi', 3, 3),
(56, 'IF333107', 'Pemrograman Berbasis Web', 3, 3),
(57, 'IF522002', 'Teknik Riset Operasional', 2, 5),
(58, 'IF531101', 'Kewirausahaan Lanjut', 3, 5),
(59, 'IF532013', 'Sistem Informasi', 3, 5),
(60, 'IF522025', 'Keamanan Jaringan', 2, 5),
(61, 'IF532026', 'Sistem Paralel dan Terdistribusi', 3, 5),
(62, 'IF532037', 'Pembelajaran Mesin', 3, 5),
(63, 'IF533014', 'Pemrograman Visual', 3, 5),
(64, 'IF725102', 'Metodologi Penelitian', 2, 7),
(65, 'IF736003', 'Interaksi Manusia dan Komputer', 3, 7),
(66, 'IF726104', 'Kerja Praktek', 2, 7),
(67, 'IF726105', 'Etika profesi', 2, 7),
(68, 'IF735101', 'Proyek Teknologi Informasi', 3, 7),
(69, 'IF736006', 'Kecakapan Antar Personal', 3, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengampu`
--

CREATE TABLE `pengampu` (
  `id_pengampu` int NOT NULL,
  `id_dosen` int NOT NULL,
  `id_matkul` int NOT NULL,
  `id_kelas` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengampu`
--

INSERT INTO `pengampu` (`id_pengampu`, `id_dosen`, `id_matkul`, `id_kelas`) VALUES
(269, 40, 64, 4),
(263, 40, 66, 4),
(273, 41, 42, 10),
(271, 41, 52, 6),
(272, 41, 52, 10),
(270, 41, 55, 6),
(274, 42, 68, 8),
(275, 42, 69, 12),
(276, 43, 53, 6),
(277, 43, 53, 10),
(278, 44, 47, 5),
(279, 44, 47, 9),
(280, 45, 46, 1),
(281, 46, 45, 5),
(282, 46, 45, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjadwalan`
--

CREATE TABLE `penjadwalan` (
  `id_jadwal` int NOT NULL,
  `id_pengampu` int NOT NULL,
  `id_ruang` int NOT NULL,
  `hari` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `jam_mulai` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `jam_selesai` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_kelas` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penjadwalan`
--

INSERT INTO `penjadwalan` (`id_jadwal`, `id_pengampu`, `id_ruang`, `hari`, `jam_mulai`, `jam_selesai`, `nama_kelas`) VALUES
(4744, 269, 5, 'Jumat', '10:30', '12:10', 'khusus 1.7'),
(4745, 263, 13, 'Selasa', '12:10', '13:50', 'khusus 1.7'),
(4746, 273, 16, 'Senin', '10:30', '12:10', 'IF-B.3'),
(4747, 271, 19, 'Kamis', '13:50', '15:30', 'IF-A.3'),
(4748, 272, 11, 'Selasa', '11:20', '13:00', 'IF-B.3'),
(4749, 270, 17, 'Rabu', '10:30', '13:00', 'IF-A.3'),
(4750, 274, 6, 'Selasa', '08:00', '10:30', 'IF-A.7'),
(4751, 275, 6, 'Kamis', '13:00', '15:30', 'IF-B.7'),
(4752, 276, 1, 'Kamis', '13:50', '16:20', 'IF-A.3'),
(4753, 277, 7, 'Rabu', '12:10', '14:40', 'IF-B.3'),
(4754, 278, 14, 'Kamis', '11:20', '13:50', 'IF-A.1'),
(4755, 279, 9, 'Jumat', '10:30', '13:00', 'IF-B.1'),
(4756, 280, 7, 'Kamis', '08:50', '11:20', 'khusus 1.1'),
(4757, 281, 10, 'Senin', '10:30', '13:00', 'IF-A.1'),
(4758, 282, 8, 'Selasa', '08:50', '11:20', 'IF-B.1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang`
--

CREATE TABLE `ruang` (
  `id_ruang` int NOT NULL,
  `no_ruang` text COLLATE utf8mb4_general_ci NOT NULL,
  `kapasitas` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `no_ruang`, `kapasitas`) VALUES
(1, 'D1', 35),
(2, 'D2', 35),
(3, 'D3', 35),
(4, 'D4', 35),
(5, 'D5', 35),
(6, 'D6', 35),
(7, 'D7', 35),
(8, 'D8', 35),
(9, 'D9', 35),
(10, 'E1', 35),
(11, 'E2', 35),
(12, 'E3', 35),
(13, 'E4', 35),
(14, 'E5', 35),
(15, 'E6', 35),
(16, 'E7', 35),
(17, 'E8', 35),
(18, 'E9', 35),
(19, 'E10', 35),
(20, 'Aula GC', 50);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indeks untuk tabel `pengampu`
--
ALTER TABLE `pengampu`
  ADD PRIMARY KEY (`id_pengampu`),
  ADD UNIQUE KEY `id_dosen` (`id_dosen`,`id_matkul`,`id_kelas`),
  ADD UNIQUE KEY `id_kelas` (`id_kelas`,`id_matkul`,`id_dosen`) USING BTREE,
  ADD UNIQUE KEY `id_matkul` (`id_matkul`,`id_kelas`,`id_dosen`) USING BTREE;

--
-- Indeks untuk tabel `penjadwalan`
--
ALTER TABLE `penjadwalan`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_pengampu` (`id_pengampu`),
  ADD KEY `id_ruang` (`id_ruang`) USING BTREE;

--
-- Indeks untuk tabel `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  MODIFY `id_matkul` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `pengampu`
--
ALTER TABLE `pengampu`
  MODIFY `id_pengampu` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=283;

--
-- AUTO_INCREMENT untuk tabel `penjadwalan`
--
ALTER TABLE `penjadwalan`
  MODIFY `id_jadwal` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4759;

--
-- AUTO_INCREMENT untuk tabel `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id_ruang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
