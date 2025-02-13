-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2024 at 03:01 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siswa1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukus`
--

CREATE TABLE `bukus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` mediumtext NOT NULL,
  `penulis` mediumtext NOT NULL,
  `penerbit` mediumtext NOT NULL,
  `tahun_terbit` year(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bukus`
--

INSERT INTO `bukus` (`id`, `judul`, `penulis`, `penerbit`, `tahun_terbit`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1', '2001', NULL, '2024-12-11 06:31:19'),
(5, '2', '2', '2', '2002', '2024-12-11 06:34:25', '2024-12-11 06:35:38'),
(7, '3', '3', '3', '2003', '2024-12-11 06:38:39', '2024-12-11 06:38:39'),
(8, 'a', 'a', 'a', '2022', '2024-12-11 06:46:07', '2024-12-11 06:46:29');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_12_06_055231_create_siswas_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `siswa1`
--

CREATE TABLE `siswa1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `hobi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswa1`
--

INSERT INTO `siswa1` (`id`, `nis`, `nama`, `alamat`, `no_hp`, `jenis_kelamin`, `hobi`, `created_at`, `updated_at`) VALUES
(1, '123', '123', '123', '123', '123', '123', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `hobi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`id`, `nis`, `nama`, `alamat`, `no_hp`, `jenis_kelamin`, `hobi`, `created_at`, `updated_at`) VALUES
(123, '123', '123', '123', '123', '123', '123', NULL, NULL),
(124, 'a', 'a', 'a', 'a', 'a', 'a', '2024-12-06 00:40:16', '2024-12-06 00:40:16'),
(125, 'b', 'b', 'b', 'bb', 'b', 'b', '2024-12-06 00:51:18', '2024-12-06 00:51:18'),
(126, 'z', 'z', 'zz', 'z', 'zzz', 'z', '2024-12-06 05:20:05', '2024-12-06 05:20:05'),
(127, 'b', 'b', 'b', 'b', 'b', 'b', '2024-12-06 06:25:40', '2024-12-06 06:25:40'),
(128, 'c', 'c', 'c', 'cc', 'cc', 'c', '2024-12-06 06:26:39', '2024-12-06 06:26:39'),
(129, 'x', 'x', 'x', 'x', 'x', 'x', '2024-12-06 06:43:16', '2024-12-06 06:43:16'),
(130, '1', '1', '1', '1', '1', '1', '2024-12-11 04:21:54', '2024-12-11 04:21:54');

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `buku_id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksis`
--

INSERT INTO `transaksis` (`id`, `buku_id`, `siswa_id`, `tanggal_pinjam`, `tanggal_kembali`, `created_at`, `updated_at`) VALUES
(1, 5, 127, '2024-12-11', NULL, NULL, '2024-12-11 08:16:21'),
(2, 7, 125, '2024-12-11', NULL, NULL, '2024-12-11 08:32:55'),
(3, 8, 125, '2024-11-12', NULL, '2024-12-11 07:54:59', '2024-12-11 08:48:58'),
(4, 1, 126, '2024-12-12', NULL, '2024-12-11 08:03:29', '2024-12-11 08:03:29'),
(5, 1, 123, '2024-12-12', NULL, '2024-12-11 08:05:38', '2024-12-11 08:05:38'),
(7, 1, 123, '2024-02-12', NULL, '2024-12-11 08:14:14', '2024-12-11 08:14:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'asd', 'asd@gmail.com', '2024-12-11 08:15:57', '$2y$12$sJMEUDoZ2Oeo3aikxH2zUuVIDLixDk5nxwH6FKUJKu7D2czZoiqvG', NULL, NULL, '2024-12-11 02:19:27'),
(3, 'Admin', 'admin@example.com', NULL, '$2y$12$4vm/2I3tL0LvMzpy5xzUrehm6SiYdjegR6ibixfQgBkBikRY5mwDu', NULL, '2024-12-11 01:52:54', '2024-12-11 01:52:54'),
(6, 'Admin', 'admin1@example.com', NULL, '$2y$10$ZBVl.v1U9RnOj7.IzRX9sODTS4e.Ff1ivohp6ZJCcT8EYSxJm6tue', NULL, '2024-12-11 08:56:10', '2024-12-11 08:56:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukus`
--
ALTER TABLE `bukus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa1`
--
ALTER TABLE `siswa1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_buku_id` (`buku_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukus`
--
ALTER TABLE `bukus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `siswa1`
--
ALTER TABLE `siswa1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD CONSTRAINT `fk_buku_id` FOREIGN KEY (`buku_id`) REFERENCES `bukus` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transaksi_buku_id_foreign` FOREIGN KEY (`buku_id`) REFERENCES `bukus` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
