-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2022 at 08:57 PM
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
-- Database: `genie_ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`id`, `date`, `created_at`, `updated_at`) VALUES
(1, '2022-10-23 00:00:00', '2022-10-27 18:31:28', '2022-10-27 18:31:28'),
(2, '2022-10-24 00:00:00', '2022-10-27 18:31:29', '2022-10-27 18:31:29'),
(3, '2022-10-28 00:31:39', '2022-10-27 18:31:39', '2022-10-27 18:31:39');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_10_24_141011_create_days_table', 1),
(5, '2022_10_24_141114_create_reports_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `day_id` bigint(20) UNSIGNED NOT NULL,
  `check_in` datetime DEFAULT NULL,
  `check_out` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `user_id`, `day_id`, `check_in`, `check_out`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2022-10-23 08:48:41', '2022-10-23 16:48:41', '2022-10-27 18:31:28', '2022-10-27 18:31:28'),
(2, 3, 1, '2022-10-23 09:48:41', '2022-10-23 17:48:41', '2022-10-27 18:31:29', '2022-10-27 18:31:29'),
(3, 4, 1, '2022-10-23 10:48:41', '2022-10-23 18:48:41', '2022-10-27 18:31:29', '2022-10-27 18:31:29'),
(4, 5, 1, '2022-10-23 09:48:41', '2022-10-23 15:48:41', '2022-10-27 18:31:29', '2022-10-27 18:31:29'),
(5, 6, 1, '2022-10-23 07:48:41', '2022-10-23 13:48:41', '2022-10-27 18:31:29', '2022-10-27 18:31:29'),
(6, 2, 2, '2022-10-24 22:48:41', '2022-10-25 06:48:41', '2022-10-27 18:31:29', '2022-10-27 18:31:29'),
(7, 3, 2, '2022-10-24 21:48:41', '2022-10-25 05:48:41', '2022-10-27 18:31:29', '2022-10-27 18:31:29'),
(8, 4, 2, '2022-10-24 23:48:41', '2022-10-25 07:48:41', '2022-10-27 18:31:29', '2022-10-27 18:31:29'),
(9, 5, 2, '2022-10-24 22:48:41', '2022-10-25 04:48:41', '2022-10-27 18:31:29', '2022-10-27 18:31:29'),
(10, 6, 2, '2022-10-24 22:48:41', '2022-10-25 02:48:41', '2022-10-27 18:31:29', '2022-10-27 18:31:29'),
(11, 7, 3, '2022-10-28 00:45:04', '2022-10-28 06:00:32', '2022-10-27 18:45:04', '2022-10-27 18:45:32'),
(12, 8, 3, '2022-10-28 00:47:39', NULL, '2022-10-27 18:47:39', '2022-10-27 18:47:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `user_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hr@genieinfo', 'hr@genieinfo.tech', NULL, '$2y$10$x9s5VbU3K/LfIcAPTpUoNulvy0iTiLDKfFiIfXrWzrHHebUrPMdv.', 'owner', NULL, '2022-10-27 18:31:28', '2022-10-27 18:31:28'),
(2, 'Rifat123', 'rifat123@genieinfo.tech', NULL, '$2y$10$1Shb37cHz68z0zL9ZsYhV.8ZauwZYapjQZP7Z.phH1b4Afc2sqgue', 'employee', NULL, '2022-10-27 18:31:28', '2022-10-27 18:31:28'),
(3, 'Shohag01', 'shohag01@genieinfo.tech', NULL, '$2y$10$XX7B5EPAEbu.133m81hyweSPyZYnqiOoykzKPEa8Nm0qclMG9UWn6', 'employee', NULL, '2022-10-27 18:31:29', '2022-10-27 18:31:29'),
(4, 'Ahanf05', 'ahanf05@genieinfo.tech', NULL, '$2y$10$OOKO6OYMTMoWLqJ//3DcdO6HM0c2tpGB2UPt68Of.b6AFYgplmlGG', 'employee', NULL, '2022-10-27 18:31:29', '2022-10-27 18:31:29'),
(5, 'Emon3', 'emon3@genieinfo.tech', NULL, '$2y$10$XGgma04NsdWHpADoky0wGuVmYFKLWI9E7w4DSt9vlY6JSiS6mMdxW', 'employee', NULL, '2022-10-27 18:31:29', '2022-10-27 18:31:29'),
(6, 'Bushra08', 'bushra08@genieinfo.tech', NULL, '$2y$10$MmC2ROmJ1OXGmFt5fd1cpOQiqetUooq1qTcAel/z/60cPI3G9eQEu', 'employee', NULL, '2022-10-27 18:31:29', '2022-10-27 18:31:29'),
(7, 'Ishmam', 'ishmam@gmail.com', NULL, '$2y$10$Uwvncf2VmXxtPEs8jY8Iv.V3KUMrdEaBzWuB/ILcb0cpdD3QkMyzG', 'employee', NULL, '2022-10-27 18:40:23', '2022-10-27 18:40:23'),
(8, 'Mahir', 'mahir@gmail.com', NULL, '$2y$10$8K5/g7yOYMochO.tNhPpY.s2k376sdtUHL..vt1o4oBz9qDtboQN6', 'employee', NULL, '2022-10-27 18:44:11', '2022-10-27 18:44:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `days_date_unique` (`date`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reports_user_id_foreign` (`user_id`),
  ADD KEY `reports_day_id_foreign` (`day_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_day_id_foreign` FOREIGN KEY (`day_id`) REFERENCES `days` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
