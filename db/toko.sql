-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2022 at 04:39 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `stok` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `nama`, `harga`, `deskripsi`, `stok`, `image`) VALUES
(1, 'Samsung Galaxy M22 6GB/128GB - Light Blue', 2799000, 'Gunakan kode voucher \" SAMSUNGM \" untuk mendapatkan promo cashback up to 200rb untuk setiap pembelian Samsung Galaxy M Series selama periode 20-31 Desember 2021. S&K berlaku', 20, '1641129587image-10.jpg'),
(2, 'Headphone with Detachable Microphone', 199000, 'dbE DJ80 adalah Headphone Portable terbaru dari dbE dengan kualitas suara baik dan microphone yang bisa dilepas pasang.', 10, '1641129641image-1.jpg'),
(5, 'Asus Zenfone Max Pro M1 ZB602KL Smartphone', 2500000, 'Prosessor : Qualcomm Snapdragon 636 Mobile Platform with 14nm, 64-bit Octa-core\r\n\r\nKamera : 13MP + 5MP Dual Rear Camera with Portrait Mode for Bokeh Effect, Front Camera : 8MP', 9, '1641131711product-09-414x414.jpg'),
(6, 'Apple Watch Series SE (GPS, 44mm) Black-Gray Original', 4920000, 'Model new GPS Apple Watch SE memungkinkan Anda menelepon, mengirim SMS, dan mendapatkan petunjuk arah dari pergelangan tangan, sambil menyimpan ponsel di saku. Ini menawarkan beberapa opsi konektivitas, termasuk: Bluetooth, Wi-Fi, dan NFC untuk memenuhi kebutuhan Anda', 21, 'image-19.jpg'),
(7, 'MPOW CH6 Plus Kids Headphone - MPBH441AD Blue', 189000, 'Mpow CH6 Plus Headphone Bluetooth Anak-anak dengan Mikrofon Di Atas Telinga untuk Remaja hingga 15 Jam Waktu Bermain, Headset Nirkabel Bluetooth 5.0 dengan Suara Stereo HD, untuk Sekolah, Perjalanan, Ponsel, Tablet, PC.', 24, '1641132179image-11.jpg'),
(8, 'Laptop Apple Macbook Air 13inch M1 2021 - Garansi Resmi -', 16448000, 'Memori\r\n16 GB\r\nPenyimpanan\r\n256 GB\r\nProsesor\r\nApple M1 Chip (CPU 8-Core, GPU 7-Core)\r\nUkuran Layar\r\n13.3 inci\r\nTipe Layar\r\nLayar dengan lampu latar LED 13,3 inci (diagonal) dengan teknologi IPS\r\nLayar Retina\r\n2560 x 1600 piksel\r\nKecerahan 400 nit\r\nWarna luas (P3)\r\nTeknologi True Tone', 36, '1641132299product-1.jpg'),
(11, 'Asus zenbook ux425IA AMD RYZEN 5-4500U 8gb ssd 512 likenew', 9750000, 'asus zenbook ux425ia\r\namd ryzen 5-4500u\r\nram 8gb\r\nssd 512gb\r\ndisplay 14 inch slim\r\nkondisi 99% likenew\r\nkelengkapan laptop charger tas\r\nsmua fungsi normal siap pakai', 12, 'refurbished-and-new-laptops-for-sell-best.jpg'),
(13, 'Original ANKER A3161 Soundcore Flare White Portable Speaker', 589000, 'Flare Portable Speaker (ANKER A3161), dengan kemampuan yang lebih dari speaker lain di kelasnya.\r\nMenggunakan Bluetooth V4.2 memberikan hasil suara yang sangat mumpuni dengan bass yang lebih dalam dan lebih terasa menggunakan BassUp Technology', 40, 'alexxa.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
