-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Bulan Mei 2022 pada 02.19
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pencatatan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bagian`
--

CREATE TABLE `tbl_bagian` (
  `id` int(11) NOT NULL,
  `KodeBagian` varchar(3) NOT NULL,
  `NamaBagian` varchar(60) NOT NULL,
  `Keterangan` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_bagian`
--

INSERT INTO `tbl_bagian` (`id`, `KodeBagian`, `NamaBagian`, `Keterangan`) VALUES
(0, 'D01', 'Pengunjung', ''),
(1, 'D02', 'Pengunjung', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_identitas`
--

CREATE TABLE `tbl_identitas` (
  `NoIdentitas` varchar(20) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `TempatLahir` varchar(25) NOT NULL,
  `TglLahir` datetime(6) NOT NULL,
  `JenisKelamin` char(1) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `No.Handphone` varchar(15) NOT NULL,
  `Tlp.rmh` char(12) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `KdPropinsi` char(2) NOT NULL,
  `KdKotaKabupaten` varchar(4) NOT NULL,
  `KdKecamatan` varchar(6) NOT NULL,
  `KdKelurahan` varchar(9) NOT NULL,
  `Kodepos` varchar(5) NOT NULL,
  `KdJenisId` char(2) NOT NULL,
  `PhotoDiriktp` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_identitas`
--

INSERT INTO `tbl_identitas` (`NoIdentitas`, `Nama`, `TempatLahir`, `TglLahir`, `JenisKelamin`, `Alamat`, `No.Handphone`, `Tlp.rmh`, `Email`, `KdPropinsi`, `KdKotaKabupaten`, `KdKecamatan`, `KdKelurahan`, `Kodepos`, `KdJenisId`, `PhotoDiriktp`) VALUES
('3273221306720011', 'Aditya Eprisi Yudah', 'Bandar Lampung', '2006-02-03 21:52:59.000000', 'L', 'Jl.Hanjuang 6 No.200 Blok H7 ', '62081383888777', '0218484543', 'rodotangkepma@gmail.com', '08', '0926', '092601', '092601003', '50611', '1', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_subag`
--

CREATE TABLE `tbl_subag` (
  `KodeBagian` int(11) NOT NULL,
  `KdSubBag` varchar(6) NOT NULL,
  `Jabatan` varchar(60) NOT NULL,
  `Keterangan` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_subag`
--

INSERT INTO `tbl_subag` (`KodeBagian`, `KdSubBag`, `Jabatan`, `Keterangan`) VALUES
(0, 'D01-01', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tiketantre`
--

CREATE TABLE `tbl_tiketantre` (
  `Notiket` varchar(11) NOT NULL,
  `TglBuatTiket` datetime(6) NOT NULL,
  `StatusTiket` char(6) NOT NULL,
  `StatusCetak` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_tiketantre`
--

INSERT INTO `tbl_tiketantre` (`Notiket`, `TglBuatTiket`, `StatusTiket`, `StatusCetak`) VALUES
('D01-01-10-5', '2006-02-03 07:23:04.245000', 'Berlak', 'True');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tikettamu`
--

CREATE TABLE `tbl_tikettamu` (
  `Notiket` varchar(22) NOT NULL,
  `NoIdentitas` varchar(20) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `KdBagSubSeksi` varchar(3) NOT NULL,
  `KdSubBagSeksi` varchar(6) NOT NULL,
  `Jabatan` varchar(60) NOT NULL,
  `KeperluanBertamu` varchar(60) NOT NULL,
  `TglMintaBertamu` datetime(6) NOT NULL,
  `MintaJamBertamu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_tikettamu`
--

INSERT INTO `tbl_tikettamu` (`Notiket`, `NoIdentitas`, `Nama`, `KdBagSubSeksi`, `KdSubBagSeksi`, `Jabatan`, `KeperluanBertamu`, `TglMintaBertamu`, `MintaJamBertamu`) VALUES
('D01-02-01-001-10-05-21', '3273221306720011', 'Aditya Eprisi Yudah', 'D01', 'D01-01', 'Kepala Sub Bagian Tata Usaha', '', '2021-05-03 00:00:00.000000', '10:18:15');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_bagian`
--
ALTER TABLE `tbl_bagian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_subag`
--
ALTER TABLE `tbl_subag`
  ADD PRIMARY KEY (`KodeBagian`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
