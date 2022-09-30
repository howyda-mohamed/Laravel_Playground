-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2022 at 01:04 AM
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
-- Database: `playground`
--

-- --------------------------------------------------------

--
-- Table structure for table `centers`
--

CREATE TABLE `centers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `location` text NOT NULL,
  `image` varchar(400) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `added_by` bigint(20) UNSIGNED NOT NULL,
  `play_number` int(10) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `centers`
--

INSERT INTO `centers` (`id`, `title`, `location`, `image`, `phone`, `added_by`, `play_number`, `created_at`, `updated_at`) VALUES
(1, 'Spartak Sport Center', '58-60 Carter Ln,London EC4V 5EA,Uk', 'assets/images/centers/1663780725.jfif', '+1 895 774 1432', 3, 5, '2022-09-21 17:18:45', '2022-09-21 17:18:45');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'howydamohamed', 'howydamuhamed@gmail.com', 'hi', '2022-09-26 02:09:04', '2022-09-26 02:09:04');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_09_03_142422_create_sessions_table', 1);

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
-- Table structure for table `playgrounds`
--

CREATE TABLE `playgrounds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(400) NOT NULL,
  `price` varchar(50) NOT NULL,
  `center_id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `added_by` bigint(20) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `playgrounds`
--

INSERT INTO `playgrounds` (`id`, `title`, `description`, `image`, `price`, `center_id`, `active`, `added_by`, `created_at`, `updated_at`) VALUES
(1, 'Football Playground', 'Playground description gLorem ipsum dolo r sit amet, consectetur adipisicing endis pari atur error repellendus accusantnt quae, sunt impedit velit nihil atque perfereilique aliqam, impedit earum.orem ipsum det, consecteturd impedit velit nihil atque perfereilique aliqam, impedit earum.orem ipsum det, consecteturd impedit velit nihil atque perfereilique aliqam, impedit earum.orem ipsum det, consecteturd ipisicing elit. Cumque buo nobis nihil sint der unt repellendus modi enim voluptates.', 'http://127.0.0.1:8000/assets/images/playground/1663781610.jfif', '30', 1, 1, 3, '2022-09-21 17:33:30', '2022-09-27 22:41:35'),
(2, 'Swimming pool', 'Playground description gLorem ipsum dolo r sit amet, consectetur adipisicing endis pari atur error repellendus accusantnt quae, sunt impedit velit nihil atque perfereilique aliqam, impedit earum.orem ipsum det, consecteturd impedit velit nihil atque perfereilique aliqam, impedit earum.orem ipsum det, consecteturd impedit velit nihil atque perfereilique aliqam, impedit earum.orem ipsum det, consecteturd ipisicing elit. Cumque buo nobis nihil sint der unt repellendus modi enim voluptates.', 'http://127.0.0.1:8000/assets/images/playground/1663781658.jfif', '10', 1, 1, 3, '2022-09-21 17:34:18', '2022-09-27 22:42:24');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `hours` varchar(20) NOT NULL DEFAULT '2',
  `total_price` varchar(50) NOT NULL,
  `play_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `date`, `time`, `hours`, `total_price`, `play_id`, `user_id`, `created_at`, `updated_at`) VALUES
(6, '2022-09-30', '14:00:00', '2', '60', 1, 4, '2022-09-28 22:39:57', '2022-09-28 22:39:57');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2022-09-23 05:11:54', '2022-09-23 05:11:54'),
(2, 'owner', '2022-09-23 05:11:54', '2022-09-23 05:11:54'),
(3, 'customer', '2022-09-23 05:12:05', '2022-09-23 05:12:05');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `added_by` bigint(20) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `added_by`, `created_at`, `updated_at`) VALUES
(1, 'SERVICE #1', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis placeat minus dicta vero, odit esse quisquam numquam officia nostrum quasi.', 1, '2022-09-26 22:11:54', '2022-09-26 22:57:55'),
(2, 'SERVICE #2', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis placeat minus dicta vero, odit esse quisquam numquam officia nostrum quasi..', 1, '2022-09-26 22:28:53', '2022-09-26 22:28:53'),
(3, 'SERVICE #3', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis placeat minus dicta vero, odit esse quisquam numquam officia nostrum quasi..', 1, '2022-09-26 22:29:27', '2022-09-26 22:29:27'),
(4, 'SERVICE #4', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis placeat minus dicta vero, odit esse quisquam numquam officia nostrum quasi.', 1, '2022-09-26 22:30:29', '2022-09-26 22:30:29');

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
('m6jCRqHgnOJov6NaYCLNvsgH56jXP1iUY0sfnBEC', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRkgzaEpmSURQdUlZWjFidTdybVpjNlFJZXZ2ZmxmcDlMa3BMaVNNYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjQ7fQ==', 1664406257);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `location` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `added_by` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `sub_title`, `description`, `phone`, `location`, `email`, `added_by`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'Lorem ipsum dolor sit amet Lorem ipsum dolor Rem necessitatibus dolore est nihil ea quidem non quia eum id expedita.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor, sit amet consectetur adipisicing elit.Lorem ipsum dolor, sit amet consectetur adipisicing elit Exercitationem saepe est fugiat expedita illo recusandae incidunt odit laboriosam at illum. Quas repudiandae saepe totam dignissimos doloremque, culpa iure tenetur repellat nemo animi rerum suscipit, quam beatae quis nihil. Minus, tempora?Ipsum rerum eum nemo, enim quasi reiciendis facere illum ad non ipsa, beatae ut, asperiores distinctio? Sint minus possimus unde quae, et hic distinctio dignissimos cumque placeat delectus soluta cupiditate nobis doloribus nisi fugit aliquid. Neque nostrum tempora excepturi qui sapiente totam?', '+0219873122', 'Egypt,Mahala,Sea street Second turn', 'name@example.com', 1, '2022-09-27 00:39:43', '2022-09-27 00:39:43');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `image` varchar(400) NOT NULL,
  `added_by` bigint(20) UNSIGNED NOT NULL,
  `center_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `name`, `job`, `image`, `added_by`, `center_id`, `created_at`, `updated_at`) VALUES
(2, 'Ali Sad', 'fitness trainer', 'assets/images/staff/1663899520.jpg', 1, 1, '2022-09-23 02:18:40', '2022-09-23 02:18:40'),
(3, 'Amgad Sad', 'football trainer', 'assets/images/staff/1663899585.jpg', 1, 1, '2022-09-23 02:19:45', '2022-09-23 02:19:45'),
(4, 'Ahmed Amir', 'basketball trainer', 'assets/images/staff/1663899626.jpg', 1, 1, '2022-09-23 02:20:26', '2022-09-23 02:20:26'),
(5, 'Reem Ali', 'swimming trainer', 'assets/images/staff/1663899666.jpg', 1, 1, '2022-09-23 02:21:06', '2022-09-23 02:21:06'),
(6, 'Nour Belal', 'Golf trainer', 'assets/images/staff/1663899696.jpg', 1, 1, '2022-09-23 02:21:36', '2022-09-23 02:21:36'),
(7, 'Hassan Nabil', 'football trainer', 'assets/images/staff/1663899775.jpg', 1, 1, '2022-09-23 02:22:55', '2022-09-23 02:22:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT 3,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `role_id`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'howydamohamed', 'howydamuhamed@gmail.com', NULL, '$2y$10$Emle9RFlroIyzkhsCs1ZkurzA/p7v3g8c/PuCfH0WN1Dg8VUAN.zS', NULL, NULL, NULL, 1, NULL, NULL, NULL, '2022-09-21 15:01:50', '2022-09-26 23:08:37'),
(3, 'owner', 'owner@gmail.com', NULL, '$2y$10$jEPU/ScpOJCofBwz1hToGeZbtQ8ajDeriFqXL2Q5OKbAaxdwJsi2u', NULL, NULL, NULL, 2, NULL, NULL, NULL, '2022-09-25 22:00:37', '2022-09-25 22:00:37'),
(4, 'user', 'user@gmail.com', NULL, '$2y$10$ia2EZIIUCXwr6OZyKvxnKeDZEocyUKn2/H/QtWGiOn1bjMUokjxc2', NULL, NULL, NULL, 3, NULL, NULL, NULL, '2022-09-26 21:51:52', '2022-09-26 21:51:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `centers`
--
ALTER TABLE `centers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `added_by` (`added_by`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
-- Indexes for table `playgrounds`
--
ALTER TABLE `playgrounds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `center_id` (`center_id`),
  ADD KEY `added_by` (`added_by`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `play_id` (`play_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `added_by` (`added_by`),
  ADD KEY `center_id` (`center_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `role_id_2` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `centers`
--
ALTER TABLE `centers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `playgrounds`
--
ALTER TABLE `playgrounds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `centers`
--
ALTER TABLE `centers`
  ADD CONSTRAINT `centers_ibfk_1` FOREIGN KEY (`added_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `playgrounds`
--
ALTER TABLE `playgrounds`
  ADD CONSTRAINT `playgrounds_ibfk_1` FOREIGN KEY (`center_id`) REFERENCES `centers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staffs`
--
ALTER TABLE `staffs`
  ADD CONSTRAINT `staffs_ibfk_1` FOREIGN KEY (`added_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `staffs_ibfk_2` FOREIGN KEY (`center_id`) REFERENCES `centers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
