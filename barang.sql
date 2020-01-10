-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2020 at 09:20 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventarisbarang`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `jenisbrg` varchar(50) NOT NULL,
  `merek` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `serial` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `kode`, `jenisbrg`, `merek`, `model`, `warna`, `serial`, `gambar`, `deskripsi`, `status`, `lokasi`) VALUES
(1, 'A5001', 'SmartPhone', 'Xiaomi', 'Flat', 'Gold - Putih', 'Xi0078', 'Tulips1.jpg', 'Flat warna kombinasi Gold dan Putih', 'Baru', 'Toko Elektronik'),
(2, 'A100', 'Buku', 'Sinar Terang', 'Notebook', 'Hitam', 'BK002', 'Chrysanthemum.jpg', 'Buku merek terbaik', 'Baru', 'Toko ATK'),
(9, 'A1023', 'Kertas', 'Paper One', 'Persegi', 'putih', 'BK004', 'Koala.jpg', 'Kertas Performa tinggi', 'Baru', 'Ruang ATK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
