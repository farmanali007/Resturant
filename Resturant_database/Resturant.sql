-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 23, 2022 at 06:56 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Resturant`
--

-- --------------------------------------------------------

--
-- Table structure for table `breakfasts`
--

DROP TABLE IF EXISTS `breakfasts`;
CREATE TABLE `breakfasts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `breakfasts`
--

INSERT INTO `breakfasts` (`id`, `title`, `price`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Fresh Chicken Salad', '199', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do', '1663875884.png', '2022-09-22 14:44:44', '2022-09-22 14:44:44'),
(2, 'Orange Juice', '29', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', '1663875937.png', '2022-09-22 14:45:37', '2022-09-22 14:45:37'),
(3, 'Fruit Salad', '199', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', '1663875981.png', '2022-09-22 14:46:21', '2022-09-22 14:46:21'),
(4, 'Egg Omelette', '19', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', '1663876026.png', '2022-09-22 14:47:06', '2022-09-22 14:47:06'),
(5, 'Farman\'s Special', '299', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', '1663876121.jpg', '2022-09-22 14:48:41', '2022-09-22 14:48:41'),
(6, 'Klassy Fire', '299', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', '1663876170.jpeg', '2022-09-22 14:49:30', '2022-09-22 14:49:30');

-- --------------------------------------------------------

--
-- Table structure for table `chefs`
--

DROP TABLE IF EXISTS `chefs`;
CREATE TABLE `chefs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chefs`
--

INSERT INTO `chefs` (`id`, `name`, `role`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Peter Parker', 'Pastry Chef', '1663874737.jpg', '2022-09-22 14:25:37', '2022-09-22 14:25:37'),
(2, 'Walker wayte', 'Cookie Chef', '1663874783.jpg', '2022-09-22 14:26:23', '2022-09-22 14:26:23'),
(3, 'Farman Ali', 'Pane Cake Chef', '1663875607.jpg', '2022-09-22 14:27:22', '2022-09-22 14:40:07');

-- --------------------------------------------------------

--
-- Table structure for table `dinners`
--

DROP TABLE IF EXISTS `dinners`;
CREATE TABLE `dinners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dinners`
--

INSERT INTO `dinners` (`id`, `title`, `price`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Egg Omelette', '10', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', '1663876492.png', '2022-09-22 14:54:52', '2022-09-22 14:54:52'),
(2, 'Orange Juice', '20', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', '1663876507.png', '2022-09-22 14:55:07', '2022-09-22 14:55:07'),
(3, 'Kllasy Special Dinner', '399', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', '1663876534.jpg', '2022-09-22 14:55:34', '2022-09-22 14:55:34'),
(4, 'Dollma Pire', '199', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', '1663876559.png', '2022-09-22 14:55:59', '2022-09-22 14:55:59'),
(5, 'Ice Cream special', '19', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', '1663876579.jpg', '2022-09-22 14:56:19', '2022-09-22 14:56:19'),
(6, 'Kllasy Special', '229', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', '1663876609.jpg', '2022-09-22 14:56:49', '2022-09-22 14:57:12');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
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
-- Table structure for table `food`
--

DROP TABLE IF EXISTS `food`;
CREATE TABLE `food` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `title`, `price`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Chocolate Cake', '12', '1663873143.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.', '2022-09-22 13:59:03', '2022-09-22 13:59:03'),
(2, 'Klassy Pancake', '199', '1663873236.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.', '2022-09-22 14:00:36', '2022-09-22 14:00:36'),
(3, 'Tall Klassy Bread', '99', '1663873290.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.', '2022-09-22 14:01:30', '2022-09-22 14:01:30'),
(4, 'Bluberry CheeseCake', '299', '1663873327.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.', '2022-09-22 14:02:07', '2022-09-22 14:02:07'),
(5, 'Klassy Cup Cake', '177', '1663873360.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.', '2022-09-22 14:02:40', '2022-09-22 14:02:40'),
(6, 'Klassy Special', '299', '1663873671.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.', '2022-09-22 14:07:51', '2022-09-22 14:07:51'),
(8, 'Kllasy Special Dinner', '299', '1663874349.jpeg', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', '2022-09-22 14:19:09', '2022-09-22 14:19:09'),
(9, 'Russian bread', '999', '1663874452.jpg', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', '2022-09-22 14:20:52', '2022-09-22 14:20:52'),
(10, 'Ice Cream special', '15', '1663874493.jpg', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', '2022-09-22 14:21:33', '2022-09-22 14:21:54');

-- --------------------------------------------------------

--
-- Table structure for table `lunches`
--

DROP TABLE IF EXISTS `lunches`;
CREATE TABLE `lunches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lunches`
--

INSERT INTO `lunches` (`id`, `title`, `price`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Dollma Pire', '199', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', '1663876219.png', '2022-09-22 14:50:19', '2022-09-22 14:50:19'),
(2, 'Egg Omelette Special', '29', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', '1663876267.png', '2022-09-22 14:51:07', '2022-09-22 14:51:07'),
(3, 'Fresh Chicken Salad', '19', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', '1663876319.png', '2022-09-22 14:51:59', '2022-09-22 14:51:59'),
(4, 'Kllasy Special Lunch', '49', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', '1663876347.jpg', '2022-09-22 14:52:27', '2022-09-22 14:52:27'),
(5, 'Farman\'s Favourite', '199', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', '1663876401.jpg', '2022-09-22 14:53:21', '2022-09-22 14:53:21'),
(6, 'Bone Fire Special', '299', 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.', '1663876452.jpeg', '2022-09-22 14:54:12', '2022-09-22 14:54:12');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_09_13_093501_create_sessions_table', 1),
(7, '2022_09_13_191325_create_food_table', 1),
(8, '2022_09_13_233715_create_chefs_table', 1),
(9, '2022_09_14_093414_create_reservations_table', 1),
(10, '2022_09_14_172623_create_breakfasts_table', 1),
(11, '2022_09_14_182655_create_lunches_table', 1),
(12, '2022_09_14_182803_create_dinners_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `email`, `phone`, `guest`, `date`, `time`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Engr Farman Ali', 'farmanali1588594@gmail.com', '03411588594', '5', '05.09.2022', '12:24', 'I want special dinner for birthday party. Thank, YOu!', '2022-09-22 14:59:13', '2022-09-22 14:59:13');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('raIznmif7Z361BxmeiW7BqOmmgHTPfvM6DI8QGUF', 2, '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:105.0) Gecko/20100101 Firefox/105.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYTJ1dmlDN2dpS204RzFjYzRGOUNVUFJTUlpraldPMGpza3UwZHZabCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWRpcmVjdHMiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1663878481);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'iamprogrammer2297678@gmail.com', '1', '2022-09-20 01:17:55', '$2y$10$BsRukyP63.ihvrLScwtjveH/QxUdxidzqcTwNk0uS6NlJwGl1hg0a', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-22 13:46:14', '2022-09-22 13:46:14'),
(3, 'user', 'user@gmail.com', '0', NULL, '$2y$10$zFpIIzBcljjyuzxjd20V4e0CzPEfmRCQs6s32chE9YOYOegSDUHp2', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-22 15:08:06', '2022-09-22 15:08:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `breakfasts`
--
ALTER TABLE `breakfasts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chefs`
--
ALTER TABLE `chefs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dinners`
--
ALTER TABLE `dinners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lunches`
--
ALTER TABLE `lunches`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `breakfasts`
--
ALTER TABLE `breakfasts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `chefs`
--
ALTER TABLE `chefs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dinners`
--
ALTER TABLE `dinners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lunches`
--
ALTER TABLE `lunches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
