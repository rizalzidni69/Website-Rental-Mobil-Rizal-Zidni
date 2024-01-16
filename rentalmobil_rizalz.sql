-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jan 2024 pada 11.25
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalmobil_rizalz`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mobil_rizalz`
--

CREATE TABLE `tbl_mobil_rizalz` (
  `no_plat_rizalz` varchar(10) NOT NULL,
  `nama_mobil_rizalz` varchar(25) NOT NULL,
  `brand_mobil_rizalz` varchar(25) NOT NULL,
  `tipe_transmisi_rizalz` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_mobil_rizalz`
--

INSERT INTO `tbl_mobil_rizalz` (`no_plat_rizalz`, `nama_mobil_rizalz`, `brand_mobil_rizalz`, `tipe_transmisi_rizalz`) VALUES
('Z 1232 FE', 'Grand Vitara', 'SUZUKI', 'Manual'),
('Z 1276 HR', 'Agya', 'TOYOTA', 'Otomatis K'),
('Z 3326 FR', 'Sigra', 'DAIHATSU', 'Manual'),
('Z 3544 SA', 'L 300', 'MITSUBISHI', 'Manual'),
('Z 4321 RS', 'All New Xenia', 'DAIHATSU', 'Automated '),
('Z 5546 HF', 'Avanza', 'TOYOTA', 'Otomatis K'),
('Z 5566 AS', 'Pajero Sport', 'MITSUBISHI', 'Manual'),
('Z 6435 AR', 'Xpander', 'MITSUBISHI', 'Automated '),
('Z 6545 HE', 'Avanza', 'TOYOTA', 'Manual'),
('Z 7676 RF', 'All New Ertiga', 'SUZUKI', 'Otomatis K'),
('Z 9687 HA', 'New Calya', 'TOYOTA', 'Manual');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelanggan_rizalz`
--

CREATE TABLE `tbl_pelanggan_rizalz` (
  `nik_ktp_rizalz` varchar(16) NOT NULL,
  `nama_rizalz` varchar(35) NOT NULL,
  `no_hp_rizalz` varchar(15) NOT NULL,
  `alamat_rizalz` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rental_rizalz`
--

CREATE TABLE `tbl_rental_rizalz` (
  `no_trx_rizalz` varchar(20) NOT NULL,
  `nik_ktp_rizalz` varchar(16) NOT NULL,
  `no_plat_rizalz` varchar(10) NOT NULL,
  `tgl_rental_rizalz` date NOT NULL,
  `jam_rental_rizalz` time NOT NULL,
  `harga_rizalz` int(11) NOT NULL COMMENT 'harga per hari',
  `lama_rizalz` int(11) NOT NULL COMMENT 'lama per hari',
  `total_bayar_rizalz` int(11) NOT NULL COMMENT 'harga * lama'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_rental_rizalz`
--

INSERT INTO `tbl_rental_rizalz` (`no_trx_rizalz`, `nik_ktp_rizalz`, `no_plat_rizalz`, `tgl_rental_rizalz`, `jam_rental_rizalz`, `harga_rizalz`, `lama_rizalz`, `total_bayar_rizalz`) VALUES
('TRX-20240106041951', '32028201100', 'Z 7676 RE', '2024-01-08', '19:59:00', 250000, 2, 500000),
('TRX-20240107023447', '220312640900', 'Z 1232 FE', '2024-01-09', '10:16:00', 175000, 2, 350000),
('TRX-20240109021707', '3322112233212', 'Z 3326 FR', '2024-01-09', '08:23:00', 250000, 1, 250000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user_rizalz`
--

CREATE TABLE `tbl_user_rizalz` (
  `id_user_rizalz` int(11) NOT NULL,
  `username_rizalz` varchar(35) NOT NULL,
  `password_rizalz` varchar(100) NOT NULL,
  `nama_lengkap_rizalz` varchar(35) NOT NULL,
  `level_rizalz` varchar(5) NOT NULL COMMENT 'admin/user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user_rizalz`
--

INSERT INTO `tbl_user_rizalz` (`id_user_rizalz`, `username_rizalz`, `password_rizalz`, `nama_lengkap_rizalz`, `level_rizalz`) VALUES
(1, 'admin', 'admin', 'administrator', 'admin'),
(2, 'rizalz', '123', 'Rizal Zidni Nasyit', 'user'),
(5, 'rina', '123', 'Rina', 'user'),
(7, 'user123', 'user123', 'user123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_mobil_rizalz`
--
ALTER TABLE `tbl_mobil_rizalz`
  ADD PRIMARY KEY (`no_plat_rizalz`);

--
-- Indeks untuk tabel `tbl_pelanggan_rizalz`
--
ALTER TABLE `tbl_pelanggan_rizalz`
  ADD PRIMARY KEY (`nik_ktp_rizalz`);

--
-- Indeks untuk tabel `tbl_rental_rizalz`
--
ALTER TABLE `tbl_rental_rizalz`
  ADD PRIMARY KEY (`no_trx_rizalz`);

--
-- Indeks untuk tabel `tbl_user_rizalz`
--
ALTER TABLE `tbl_user_rizalz`
  ADD PRIMARY KEY (`id_user_rizalz`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_user_rizalz`
--
ALTER TABLE `tbl_user_rizalz`
  MODIFY `id_user_rizalz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
