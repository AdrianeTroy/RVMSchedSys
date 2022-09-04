-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2022 at 10:58 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rvmschedsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_num` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lim_slot` int(11) DEFAULT NULL,
  `facility` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fac_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `app_start_time` time DEFAULT NULL,
  `app_end_time` time DEFAULT NULL,
  `letter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `contact_num`, `lim_slot`, `facility`, `fac_color`, `date`, `enddate`, `app_start_time`, `app_end_time`, `letter`, `app_status`, `user_id`, `created_at`, `updated_at`) VALUES
(36, 'Test', 'Test@gmail.com', '1111111111111111', 2, 'Basketball Court', '#ff0000', '2022-04-26', NULL, '09:00:00', '12:00:00', NULL, 'Approved', '13', '2022-04-25 22:16:24', '2022-04-25 22:16:31'),
(37, 'Test', 'Test@gmail.com', '1111111111111111', 2, 'Basketball Court', '#ff0000', '2022-04-26', '2022-04-26', '10:00:00', '14:00:00', NULL, 'Approved', '13', '2022-04-25 22:17:32', '2022-04-25 22:17:39'),
(38, 'admin', 'rvmscschedsys@gmail.com', '42069', 10, 'Basketball Court', '#ff0000', '2022-04-26', '2022-04-27', '06:00:00', '18:00:00', NULL, 'Approved', '1', '2022-04-25 22:23:52', '2022-04-25 22:23:52'),
(39, 'Test', 'Test@gmail.com', '1111111111111111', 1, 'Competition Pool', '#0011ff', '2022-04-29', NULL, '08:00:00', '12:00:00', NULL, 'Approved', '13', '2022-04-25 23:17:49', '2022-04-25 23:18:59'),
(40, 'Adriane Troy U. Alariao', '201880015@psu.palawan.edu.ph', '639469660022', 1, 'Football Field', '#00ff04', '2022-04-28', NULL, '11:00:00', '13:00:00', NULL, 'Cancelled', '14', '2022-04-25 23:23:24', '2022-04-25 23:24:25'),
(41, 'admin', 'rvmscschedsys@gmail.com', '42069', 50, 'Competition Pool', '#0011ff', '2022-04-28', NULL, '07:00:00', '11:00:00', NULL, 'Approved', '1', '2022-04-25 23:27:24', '2022-04-25 23:27:24'),
(42, 'Adriane Troy U. Alariao', '201880015@psu.palawan.edu.ph', '639469660022', 1, 'Football Field', '#00ff04', '2022-04-28', NULL, '06:00:00', '13:00:00', NULL, 'Approved', '14', '2022-04-26 06:23:54', '2022-04-26 06:24:26'),
(43, 'Adriane Troy U. Alariao', '201880015@psu.palawan.edu.ph', '639469660022', 10, 'Gymnasium', '#000000', '2022-04-30', '2022-04-30', '09:00:00', '11:00:00', NULL, 'Approved', '14', '2022-04-27 17:15:44', '2022-04-27 17:16:00'),
(44, 'Adriane Troy U. Alariao', '201880015@psu.palawan.edu.ph', '639469660022', 1, 'Track and Field', '#fbff00', '2022-04-29', '2022-04-30', '13:00:00', '18:00:00', NULL, 'Approved', '14', '2022-04-27 17:21:07', '2022-04-27 17:21:20'),
(45, 'Adriane Troy U. Alariao', '201880015@psu.palawan.edu.ph', '639469660022', 1, 'Track and Field', '#fbff00', '2022-04-29', '2022-04-30', '13:00:00', '18:00:00', NULL, 'Approved', '14', '2022-04-27 18:29:48', '2022-04-27 18:29:54'),
(46, 'Adriane Troy U. Alariao', '201880015@psu.palawan.edu.ph', '639469660022', 1, 'Basketball Court', '#ff0000', '2022-04-29', NULL, '09:00:00', '12:00:00', '1651113586.pdf', 'Approved', '14', '2022-04-27 18:39:46', '2022-04-27 18:39:53'),
(47, 'Adriane Troy U. Alariao', '201880015@psu.palawan.edu.ph', '639469660022', 1, 'Football Field', '#00ff04', '2022-09-05', '2022-09-06', '06:00:00', '13:00:00', NULL, 'Approved', '14', '2022-09-04 12:31:17', '2022-09-04 12:31:17');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `event_start_time` time NOT NULL,
  `event_end_time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `event_desc`, `event_img`, `start_date`, `end_date`, `event_start_time`, `event_end_time`, `created_at`, `updated_at`) VALUES
(5, 'Intramurals', 'The intramurals..................', '1650954167.jpg', '2022-04-26', '2022-04-30', '06:00:00', '17:00:00', '2022-04-25 22:22:47', '2022-04-25 22:22:47');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facility_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_limit` int(11) NOT NULL,
  `facility_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facility_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `facility_name`, `description`, `number_limit`, `facility_color`, `facility_img`, `start_time`, `end_time`, `created_at`, `updated_at`) VALUES
(10, 'Basketball Court', 'The Basketball court is the playing surface, consisting of a rectangular floor, with baskets at each end. Indoor basketball courts are almost always made of polished wood, usually maple, with 3.048 metres (10.00 ft)-high rims on each basket.', 100, '#ff0000', '1650953515.jpg', '06:00:00', '18:00:00', '2022-04-25 22:11:55', '2022-04-25 22:11:55'),
(14, 'Competition Pool', 'A competition pool is a pool designed to be routinely used to host organized swim competitions such as those sponsored by colleges, universities, swim leagues, and swim clubs.', 50, '#0011ff', '1650957400.jpg', '06:00:00', '19:00:00', '2022-04-25 23:16:40', '2022-04-25 23:16:40'),
(15, 'Football Field', 'The Football Field (Also called the Football Pitch) is is the playing surface for the game of association football.', 200, '#00ff04', '1650957772.jpg', '06:00:00', '19:00:00', '2022-04-25 23:22:52', '2022-04-25 23:22:52'),
(16, 'Track and Field', 'The Track and Field is is a sport that includes athletic contests based on running, jumping, and throwing skills.', 80, '#fbff00', '1650979711.jpg', '06:00:00', '18:00:00', '2022-04-26 05:28:31', '2022-04-26 05:28:31'),
(17, 'Gymnasium', 'a covered location for athletics. The word is derived from the ancient Greek term \"gymnasium\". They are commonly found in athletic and fitness centres, and as activity and learning spaces in educational institutions.', 200, '#000000', '1651108285.jpg', '06:00:00', '19:00:00', '2022-04-27 17:11:25', '2022-04-27 17:11:25');

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
(107, '2014_10_12_000000_create_users_table', 1),
(108, '2014_10_12_100000_create_password_resets_table', 1),
(109, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(110, '2019_08_19_000000_create_failed_jobs_table', 1),
(111, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(112, '2022_03_31_113342_create_sessions_table', 1),
(113, '2022_04_02_080750_create_facilities_table', 1),
(115, '2022_04_06_084916_create_events_table', 1),
(116, '2022_04_03_110928_create_appointments_table', 2),
(117, '2022_04_10_075005_create_notifications_table', 3),
(118, '2022_04_10_074358_create_notifications_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('adrianetroyalariao@gmail.com', '$2y$10$zKOydawDREWhzB/MFrngiuZwNGVJrYt97lbm0X/h8kjJOzC3nGJhq', '2022-04-16 08:20:21');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('b6q6nW4vwb08RLSVyBdx1v6kQJj4iZJHjiHhuiOZ', NULL, '192.168.1.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUWJpOFFxdjY1RW1jNkZlMklWRm5mVUdCeWo3dWJmWVYydGdZRE9lZiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTg6Imh0dHA6Ly8xOTIuMTY4LjEuNyI7fX0=', 1662324627),
('ELlSMUhpR1SnGwGlpNOE2VjxUWAzhfgScTrxBYAe', 14, '192.168.1.6', 'Mozilla/5.0 (Linux; Android 8.1.0; INE-LX2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Mobile Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMmNCdjZJT3JZcEk5VDVjM2FFRHNZTzBIalNaSEdFNWRiQ3ExN0ZETSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHA6Ly8xOTIuMTY4LjEuNy9ob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTQ7fQ==', 1662324667),
('tcCQrDaWOP4pO6qmiRaNoE8cTAWqJDuTGBRRmRlq', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQlBmVWJVbTR5azViVGhONkxQYUp0V3lLeUtVQU0xOGdTakg0NURmcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zaG93X2NhbGVuZGFyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1662325077);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `usertype`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'rvmscschedsys@gmail.com', '42069', 'admin st.', '1', '2022-04-10 02:36:22', '$2y$10$PlZAoOJ/b8kok529L54Wj.plQ1KuRJwu5UNu7duGRjpfaYggZzQAm', NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-07 10:18:29', '2022-04-19 04:58:01'),
(6, 'anthony kenneth D. cortez', 'anthonycortez800@gmail.com', '639090342723', 'mabuhay st. , Bgy. tiniguiban, puerto princesa city', '0', '2022-04-13 23:50:00', '$2y$10$GQzHPOkh7xDxO8dEMcP6LejJHI/VIv/NWGiCrx68nhn9YLtG8M.4G', NULL, NULL, NULL, 'dZ3541xrZ4HUqIVCG5ztDo45smhJwVGAGKNawwlLJ2MriYFcswxVV0u0XCHP', NULL, NULL, '2022-04-13 23:49:36', '2022-04-13 23:50:00'),
(7, 'Vince', '201840110@psu.palawan.edu.ph', '639103086506', 'Mandaragat, PPC, Palawan', '0', '2022-04-13 23:50:31', '$2y$10$rXiR0q4Aj5e/7ocnEGTrDOlKMXv.xRisDkaYPr.5T4AyZ1ufNK1RW', NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-13 23:50:01', '2022-04-13 23:50:31'),
(8, 'Princess Noreen Maglacas', 'maglacasprincess@gmail.com', '639300288377', 'Talisay, Rivera Rd. San Manuel, Puerto Princesa, Palawan', '0', '2022-04-21 18:52:44', '$2y$10$UpYhxGp3OVGCM8MBsUL2ROehWHXi8.6xa3wl/Nai3pL48zbYabgMK', NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-21 18:50:19', '2022-04-23 02:25:47'),
(9, 'Ric Daniele Pasoquen', 'rdvpasoquen@gmail.com', '639056405051', 'Pulot Center Sofronio Española', '0', '2022-04-21 19:18:23', '$2y$10$7E2sArbVqxNLklemXUomWez5pXdPBdL8xK4sdsxKYZeEsrgyotpbG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-21 19:16:28', '2022-04-21 19:18:23'),
(10, 'Bob', 'vincentrei10@gmail.com', '63103086506', 'Mandaragat, PPC, Palawan', '0', '2022-04-23 11:25:24', '$2y$10$VJAeDHDKB/ucY5X.ODk2Ae00y9Zm0lMGJbnPqOgXwUY9WF86vsR9C', NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-23 11:24:58', '2022-04-23 11:27:53'),
(13, 'Test', 'Test@gmail.com', '1111111111111111', 'Test st.', '0', '2022-04-10 07:17:25', '$2y$10$EEnh8hgRSr5fvQM.fO87LO8Hr1QQcZ6dS3rANhwxriNVD7dOqztAm', NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 22:08:31', '2022-04-25 22:08:31'),
(14, 'Adriane Troy U. Alariao', '201880015@psu.palawan.edu.ph', '639469660022', 'Test123 st.', '0', '2022-04-25 23:21:47', '$2y$10$PlZAoOJ/b8kok529L54Wj.plQ1KuRJwu5UNu7duGRjpfaYggZzQAm', NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 23:21:12', '2022-09-04 12:12:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
