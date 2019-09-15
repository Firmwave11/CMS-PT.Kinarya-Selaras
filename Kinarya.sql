-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2019 at 04:15 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kinarya`
--

-- --------------------------------------------------------

--
-- Table structure for table `background`
--

CREATE TABLE IF NOT EXISTS `background` (
  `id` int(10) unsigned NOT NULL,
  `background_awal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `background_tengah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `background_akhir` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(10) unsigned NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `lokasi`, `no_telp`, `email`, `created_at`, `updated_at`) VALUES
(3, 'Graha Sucofindo lt.1 , Jl. Raya Pasar Minggu Kav.34, Jakarta Selatan.', '(021) 7918 8208', 'admin@kinarya.com', '2019-08-07 06:03:58', '2019-08-07 06:03:58');

-- --------------------------------------------------------

--
-- Table structure for table `explore`
--

CREATE TABLE IF NOT EXISTS `explore` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `background` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `explore`
--

INSERT INTO `explore` (`id`, `title`, `gambar`, `background`, `subtitle`, `link`, `keterangan`, `created_at`, `updated_at`) VALUES
(3, 'kinarya', 'roolingstone_city.jpg', 'snoop_dogg.jpg', 'pergi kinarya', 'https://www.youtube.com/watch?v=3I1dCtvmBbk', '123', '2019-08-09 06:11:35', '2019-08-09 06:11:35');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE IF NOT EXISTS `hotel` (
  `id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bintang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `persenbintang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_harga` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `nama`, `bintang`, `persenbintang`, `harga`, `ket_harga`, `keterangan`, `gambar`, `created_at`, `updated_at`) VALUES
(6, 'kinarya', '1', '20', '12 juta', '123', '12', 'LosAngeles.jpg', '2019-08-07 02:30:05', '2019-08-07 02:30:05'),
(7, 'kinarya23', '3', '60', '32 juta', '123', '12', 'jamaica.jpg', '2019-08-07 02:30:35', '2019-08-09 03:05:05'),
(8, '123', '3', '60', '123', '2131', '12', 'gmf.PNG', '2019-08-07 02:30:51', '2019-08-07 02:30:51'),
(9, '123', '3', '60', '12 juta', '123', '4', 'Dave grohl.jpg', '2019-08-07 02:31:11', '2019-08-07 02:31:11');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_07_20_124050_create_tourlist_table', 1),
(2, '2019_07_29_105827_create_explore_table', 2),
(3, '2019_08_03_095200_create_hotel_table', 3),
(4, '2019_08_03_095659_create_testimoni_table', 4),
(5, '2019_08_03_095743_create_contactus_table', 4),
(6, '2019_08_03_095822_create_promo_table', 4),
(7, '2019_08_03_100301_create_topdeals_table', 4),
(8, '2019_08_05_085557_AddPersenbintangToHotel', 5),
(9, '2019_08_09_035543_AddGambarToExplore', 6),
(10, '2019_08_09_041036_create_background_table', 7),
(11, '2019_08_09_061733_AddBackgroundToExplore', 7),
(12, '2019_08_09_062945_create_tentang_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE IF NOT EXISTS `promo` (
  `id` int(10) unsigned NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diskon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id`, `judul`, `keterangan`, `diskon`, `created_at`, `updated_at`) VALUES
(1, 'GIlaaa diskonn12', 'parhhh', '75', '2019-08-06 07:40:31', '2019-08-07 03:27:40');

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE IF NOT EXISTS `tentang` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE IF NOT EXISTS `testimoni` (
  `id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimoni` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `background` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `nama`, `kota`, `testimoni`, `foto`, `background`, `created_at`, `updated_at`) VALUES
(1, 'Kurt Cobain', 'Los Angeles', 'kerenn bos', 'kurt cobain.jpg', 'LosAngeles.jpg', '2019-08-06 06:31:40', '2019-08-06 06:31:40'),
(3, 'Snoop Dog', 'Jamaica', 'saiikk', 'snoop_dogg.jpg', 'jamaica.jpg', '2019-08-06 06:39:31', '2019-08-06 06:39:31'),
(4, 'Mick Jagger', 'Los Angeles, America', 'keren', 'Mick-Jagger1.jpg', 'roolingstone_city.jpg', '2019-08-06 06:40:08', '2019-08-06 06:40:08');

-- --------------------------------------------------------

--
-- Table structure for table `topdeals`
--

CREATE TABLE IF NOT EXISTS `topdeals` (
  `id` int(10) unsigned NOT NULL,
  `nama_tour_deals` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topdeals`
--

INSERT INTO `topdeals` (`id`, `nama_tour_deals`, `created_at`, `updated_at`) VALUES
(1, 'Tour Packages Jogja', '2019-08-07 07:02:35', '2019-08-07 07:02:35'),
(2, 'Tour Packages Bali', '2019-08-07 07:03:17', '2019-08-07 07:03:17'),
(3, 'Tour Packages Semarang', '2019-08-07 07:03:27', '2019-08-07 07:03:27'),
(4, 'Tour Packages Jakarta', '2019-08-07 07:03:45', '2019-08-07 07:03:45');

-- --------------------------------------------------------

--
-- Table structure for table `tourlist`
--

CREATE TABLE IF NOT EXISTS `tourlist` (
  `id` int(10) unsigned NOT NULL,
  `nama_tour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktutour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tourlist`
--

INSERT INTO `tourlist` (`id`, `nama_tour`, `harga`, `waktutour`, `keterangan`, `gambar`, `created_at`, `updated_at`) VALUES
(16, 'Umroh1', '12 juta', '15 hari', 'pergi umroh', '033419400_1527668277-Paket_Umroh.jpg', '2019-08-05 01:24:02', '2019-08-09 06:22:23'),
(17, 'haji', '32 juta', '15 hari', 'pergi haji', '033419400_1527668277-Paket_Umroh.jpg', '2019-08-06 05:41:50', '2019-08-06 05:41:50'),
(18, 'Umroh', '12 juta', '2 hari', '123', '033419400_1527668277-Paket_Umroh.jpg', '2019-08-06 05:42:12', '2019-08-06 05:42:12'),
(19, 'Umroh', '12 juta', '2 hari', '1', '033419400_1527668277-Paket_Umroh.jpg', '2019-08-06 05:42:21', '2019-08-06 05:42:21'),
(20, 'Umroh', '12 juta', '2 hari', '1', '033419400_1527668277-Paket_Umroh.jpg', '2019-08-06 05:42:31', '2019-08-06 05:42:31'),
(21, 'Umroh', '12 juta', '15 hari', '1', '033419400_1527668277-Paket_Umroh.jpg', '2019-08-06 05:42:45', '2019-08-06 05:42:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@kinarya.com', '$2y$10$4hIz5E1s/JF2VDvdLnu5iuXNWCGRtti2uUwEZPWD7Fuw/JxXo5obO', 'vBHmYCTdqdGdymlwwOx5HpUvVL5RO8W5BQYdZfOD7TX4GxBkgE7YNoGpGftG', '2019-07-13 07:08:11', '2019-07-13 07:08:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `background`
--
ALTER TABLE `background`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `explore`
--
ALTER TABLE `explore`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topdeals`
--
ALTER TABLE `topdeals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourlist`
--
ALTER TABLE `tourlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `background`
--
ALTER TABLE `background`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `explore`
--
ALTER TABLE `explore`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `topdeals`
--
ALTER TABLE `topdeals`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tourlist`
--
ALTER TABLE `tourlist`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
