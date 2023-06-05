-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 12:57 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sirestocoffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_coffeeshop`
--

CREATE TABLE `tb_coffeeshop` (
  `id_coffeeshop` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `id_makanan` varchar(10) NOT NULL,
  `id_minuman` varchar(10) NOT NULL,
  `penilaian_coffeeshop` varchar(2) NOT NULL,
  `id_pegawai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_makanan`
--

CREATE TABLE `tb_makanan` (
  `id_makanan` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `diskon` varchar(10) NOT NULL,
  `isi_plate` varchar(30) NOT NULL,
  `harga` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_minuman`
--

CREATE TABLE `tb_minuman` (
  `id_minuman` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tipe_penyajian` varchar(15) NOT NULL,
  `harga` varchar(15) NOT NULL,
  `diskon` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `umur` varchar(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` varchar(10) NOT NULL,
  `id_pengguna` varchar(10) NOT NULL,
  `id_restoran` varchar(10) NOT NULL,
  `id_coffeeshop` varchar(10) NOT NULL,
  `id_pegawai` varchar(10) NOT NULL,
  `id_makanan` varchar(10) NOT NULL,
  `id_minuman` varchar(10) NOT NULL,
  `tipe_pemesanan` varchar(15) NOT NULL,
  `tipe_pembayaran` varchar(15) NOT NULL,
  `ttl_harga` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `alamat` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penilaiancoffeeshop`
--

CREATE TABLE `tb_penilaiancoffeeshop` (
  `id_penilaiancoffee` varchar(10) NOT NULL,
  `penilaian_coffee` varchar(2) NOT NULL,
  `id_pengguna` varchar(10) NOT NULL,
  `id_coffeeshop` varchar(10) NOT NULL,
  `ulasan` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penilaianresto`
--

CREATE TABLE `tb_penilaianresto` (
  `id_penilaianresto` varchar(10) NOT NULL,
  `penilaian_resto` varchar(2) NOT NULL,
  `id_pengguna` varchar(10) NOT NULL,
  `id_restoran` varchar(10) NOT NULL,
  `ulasan` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_restoran`
--

CREATE TABLE `tb_restoran` (
  `id_restoran` varchar(15) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `id_makanan` varchar(10) NOT NULL,
  `id_minuman` varchar(10) NOT NULL,
  `penilaian_restoran` varchar(2) NOT NULL,
  `id_pegawai` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_coffeeshop`
--
ALTER TABLE `tb_coffeeshop`
  ADD PRIMARY KEY (`id_coffeeshop`),
  ADD KEY `penilaian_coffeeshop` (`penilaian_coffeeshop`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_makanan` (`id_makanan`),
  ADD KEY `id_minuman` (`id_minuman`);

--
-- Indexes for table `tb_makanan`
--
ALTER TABLE `tb_makanan`
  ADD PRIMARY KEY (`id_makanan`);

--
-- Indexes for table `tb_minuman`
--
ALTER TABLE `tb_minuman`
  ADD PRIMARY KEY (`id_minuman`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_makanan` (`id_makanan`),
  ADD KEY `id_minuman` (`id_minuman`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_restoran` (`id_restoran`),
  ADD KEY `id_coffeeshop` (`id_coffeeshop`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tb_penilaiancoffeeshop`
--
ALTER TABLE `tb_penilaiancoffeeshop`
  ADD PRIMARY KEY (`id_penilaiancoffee`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_coffeeshop` (`id_coffeeshop`);

--
-- Indexes for table `tb_penilaianresto`
--
ALTER TABLE `tb_penilaianresto`
  ADD PRIMARY KEY (`id_penilaianresto`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_restoran` (`id_restoran`);

--
-- Indexes for table `tb_restoran`
--
ALTER TABLE `tb_restoran`
  ADD PRIMARY KEY (`id_restoran`),
  ADD KEY `penilaian_restoran` (`penilaian_restoran`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_makanan` (`id_makanan`),
  ADD KEY `id_minuman` (`id_minuman`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_coffeeshop`
--
ALTER TABLE `tb_coffeeshop`
  ADD CONSTRAINT `tb_coffeeshop_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `tb_pegawai` (`id_pegawai`),
  ADD CONSTRAINT `tb_coffeeshop_ibfk_2` FOREIGN KEY (`id_minuman`) REFERENCES `tb_minuman` (`id_minuman`),
  ADD CONSTRAINT `tb_coffeeshop_ibfk_3` FOREIGN KEY (`id_makanan`) REFERENCES `tb_makanan` (`id_makanan`);

--
-- Constraints for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD CONSTRAINT `tb_pemesanan_ibfk_1` FOREIGN KEY (`id_makanan`) REFERENCES `tb_makanan` (`id_makanan`),
  ADD CONSTRAINT `tb_pemesanan_ibfk_2` FOREIGN KEY (`id_minuman`) REFERENCES `tb_minuman` (`id_minuman`),
  ADD CONSTRAINT `tb_pemesanan_ibfk_3` FOREIGN KEY (`id_pengguna`) REFERENCES `tb_pengguna` (`id_pengguna`),
  ADD CONSTRAINT `tb_pemesanan_ibfk_4` FOREIGN KEY (`id_pegawai`) REFERENCES `tb_pegawai` (`id_pegawai`),
  ADD CONSTRAINT `tb_pemesanan_ibfk_5` FOREIGN KEY (`id_coffeeshop`) REFERENCES `tb_coffeeshop` (`id_coffeeshop`),
  ADD CONSTRAINT `tb_pemesanan_ibfk_6` FOREIGN KEY (`id_restoran`) REFERENCES `tb_restoran` (`id_restoran`);

--
-- Constraints for table `tb_penilaiancoffeeshop`
--
ALTER TABLE `tb_penilaiancoffeeshop`
  ADD CONSTRAINT `tb_penilaiancoffeeshop_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `tb_pengguna` (`id_pengguna`),
  ADD CONSTRAINT `tb_penilaiancoffeeshop_ibfk_2` FOREIGN KEY (`id_coffeeshop`) REFERENCES `tb_coffeeshop` (`id_coffeeshop`);

--
-- Constraints for table `tb_penilaianresto`
--
ALTER TABLE `tb_penilaianresto`
  ADD CONSTRAINT `tb_penilaianresto_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `tb_pengguna` (`id_pengguna`),
  ADD CONSTRAINT `tb_penilaianresto_ibfk_2` FOREIGN KEY (`id_restoran`) REFERENCES `tb_restoran` (`id_restoran`);

--
-- Constraints for table `tb_restoran`
--
ALTER TABLE `tb_restoran`
  ADD CONSTRAINT `tb_restoran_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `tb_pegawai` (`id_pegawai`),
  ADD CONSTRAINT `tb_restoran_ibfk_2` FOREIGN KEY (`id_makanan`) REFERENCES `tb_makanan` (`id_makanan`),
  ADD CONSTRAINT `tb_restoran_ibfk_3` FOREIGN KEY (`id_minuman`) REFERENCES `tb_minuman` (`id_minuman`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
