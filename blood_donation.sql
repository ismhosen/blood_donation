-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 06:46 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `email`, `feedback`, `created_at`, `updated_at`) VALUES
(2, 'shakib@gmail.com', 'ttanvir', '2019-12-02 14:21:33', '2019-12-02 14:21:33');

-- --------------------------------------------------------

--
-- Table structure for table `messengers`
--

CREATE TABLE `messengers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from` bigint(20) NOT NULL,
  `to` bigint(20) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_read` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messengers`
--

INSERT INTO `messengers` (`id`, `from`, `to`, `message`, `is_read`, `created_at`, `updated_at`) VALUES
(1, 5, 3, 'hello', 0, '2019-12-03 15:19:14', '2019-12-03 15:19:14'),
(2, 5, 3, 'hello', 0, '2019-12-03 15:19:34', '2019-12-03 15:19:34'),
(3, 5, 2, 'then', 0, '2019-12-03 15:20:25', '2019-12-03 15:20:25'),
(4, 5, 3, 'ok', 0, '2019-12-03 15:22:27', '2019-12-03 15:22:27'),
(5, 4, 5, 'hello from admin', 0, '2019-12-06 00:37:09', '2019-12-06 00:37:09'),
(6, 7, 2, 'jhajsd', 0, '2019-12-08 01:58:29', '2019-12-08 01:58:29');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2014_10_12_000000_create_users_table', 1),
(18, '2014_10_12_100000_create_password_resets_table', 1),
(19, '2019_08_19_000000_create_failed_jobs_table', 1),
(20, '2019_11_28_091523_create_messengers_table', 1),
(21, '2019_12_02_201401_create_feedback_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_blood_donation` date DEFAULT NULL,
  `birth_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `image`, `phone_no`, `blood_group`, `last_blood_donation`, `birth_date`, `address`, `description`, `type`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Ahmed, Shakib', 'ahmedshakib', 'ahmedshakib@fmail.com', '$2y$10$0q2H59hi.LpaDneXPBEbceq1jVNxHpojNozPJg4d2TkwDXsrxazxm', 'ahmedshakib@fmail.com.jpg', '01521332411', 'O+', '2019-04-09', '2019-12-08', 'ka-129, kuril Chittagang', 'sjdgjgsd', 'volunteer', NULL, NULL, '2019-12-02 12:32:46', '2019-12-02 23:58:09'),
(3, 'Robi Ullah', 'robiullah', 'robiullah@gmail.com', '$2y$10$1xgGa.fWnPMwagWkYOSAGuqB5WmLXXTKGkDtsqlx8xO3kS3AaUHUu', 'robiullah@gmail.com.png', '01521332411', 'B+', '2019-12-01', '2019-12-08', 'ka-129, kuril Sylhet', 'hello', 'donor', NULL, NULL, '2019-12-02 12:36:55', '2019-12-02 23:54:56'),
(4, 'Admin', 'admin', 'admin@gmail.com', '$2y$10$mU4oFuI88KYRuBEV8hmWF.RPi1DCxi7FEtezbrMbMGuJRZOXUYHdW', 'admin@gmail.com.jpg', '01521332411', 'A-', NULL, '2019-12-19', 'Admin address', 'admin description', 'Admin', NULL, NULL, '2019-12-02 13:25:29', '2019-12-02 13:25:29'),
(5, 'Ismail Hosen', 'ismhosen', 'ismhosen@gmail.com', '$2y$10$hkvT/odStDQ0Zwjd9hsanu3f19ihUjjcVJ44XTOVuPkWYo4W92S2O', 'ismhosen@gmail.com.png', '01833013355', 'O+', '2019-11-12', '2019-11-03', 'ka-129, kuril Dhaka', 'ok', 'donor', NULL, NULL, '2019-12-03 00:18:03', '2019-12-03 00:19:32'),
(6, 'hello123', 'hello123', 'hello123@gmail.com', '$2y$10$55qzUrG.LvUNB9tUAbO47.SHLI.vEgqJdOcdqQY70/DsCn16gWT2y', 'hello123@gmail.com.jpg', '01521332411', 'A-', NULL, '2019-12-26', 'ka-129, kuril Dhaka', 'hsguf', 'volunteer', NULL, NULL, '2019-12-06 00:49:30', '2019-12-06 00:49:30'),
(7, 'Ismail Hosen', 'ismhosen1', 'ismhosen1@gmail.com', '$2y$10$ACafEaAr4VjlwyqXHoe2LeYG9W/WSOfWspIFf/JxpPS2j5KqUlNbK', 'ismhosen1@gmail.com.jpg', '01833013355', 'O+', '2019-05-10', '2019-12-04', 'ka-129, kuril Chittagang', 'ismail', 'donor', NULL, NULL, '2019-12-07 01:40:06', '2019-12-08 01:56:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messengers`
--
ALTER TABLE `messengers`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messengers`
--
ALTER TABLE `messengers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
