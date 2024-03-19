-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2024 at 07:19 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ckeditor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `mobile`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '8877665544', NULL, NULL, '$2y$12$n1JeG2D9S.BcztZp0V7u6uIIdgWTQsEJUEsHQQ4BoqgzqNU.qlm9a', NULL, '2024-03-16 13:24:41', '2024-03-16 13:24:41');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main_catagories`
--

CREATE TABLE `main_catagories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catagory` varchar(255) NOT NULL,
  `catagory_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_catagories`
--

INSERT INTO `main_catagories` (`id`, `catagory`, `catagory_status`, `created_at`, `updated_at`) VALUES
(2, 'second', 'enable', '2024-03-16 21:43:08', '2024-03-16 23:20:42'),
(3, 'third', 'enable', '2024-03-16 21:44:32', '2024-03-16 21:44:32'),
(5, 'first', 'enable', '2024-03-16 22:44:06', '2024-03-16 22:44:06');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_03_16_180151_create_admin_table', 1),
(5, '2024_03_16_202726_create_main_catagories_table', 2),
(6, '2024_03_16_203005_create_sub_catagories_table', 2),
(7, '2024_03_17_092518_create_products_table', 3),
(8, '2024_03_17_122549_create_products_table', 4),
(9, '2024_03_17_122820_create_product_images_table', 4),
(10, '2024_03_17_122956_create_product_specs_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `catagory` int(11) NOT NULL,
  `subcatagory` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `unique_id`, `product`, `description`, `cost`, `status`, `catagory`, `subcatagory`, `created_at`, `updated_at`) VALUES
(17, '171068862365f7096f7790e', 'Prouduct0005', 'this is third product', '420.25', 'enable', 0, 0, '2024-03-17 09:47:03', '2024-03-17 09:47:03'),
(20, '171074216865f7da98af430', 'product100', 'this is from office', '234.55', 'enable', 0, 0, '2024-03-18 00:39:28', '2024-03-18 00:39:28'),
(22, '171076616365f8385398bac', 'product092', 'dcsadsad', '2347', 'enable', 0, 0, '2024-03-18 07:19:23', '2024-03-18 07:19:23');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `unique_id`, `title`, `path`, `created_at`, `updated_at`) VALUES
(14, '171068739365f704a1a8020', 'pexels-pixabay-34231.jpg', 'images/hxv6JIZ87oN2NaBkpzVpYneMbkMoQgYXQ39zQnii.jpg', NULL, NULL),
(15, '171068782265f7064e06147', 'pexels-belle-co-847393.jpg', 'images/GPReuqg71pkxi1jbv05jc3ellXZDj3zhON2n0fqw.jpg', NULL, NULL),
(16, '171068808765f707573cf49', 'pexels-pixabay-144234.jpg', 'images/M5knhv30Lv5SMOtwaqTSXBmWzghFh2uvkebvvA9l.jpg', NULL, NULL),
(17, '171068841965f708a3ee1ad', 'pexels-pixabay-162140.jpg', 'images/Zh9311AV9n8pWmWmKuSTWg6v6MngPtijKTTFJg7F.jpg', NULL, NULL),
(18, '171068862365f7096f7790e', 'pexels-pixabay-47547.jpg', 'images/KipKdq459ou60Uk2sveO7iSVwaLC6X30jKkSyM3a.jpg', NULL, NULL),
(23, '171074216865f7da98af430', 'pexels-pixabay-39857.jpg', 'images/wzPJ3AlshPnWM1LmXXnhgf5sd21D9VN6K6kmZYqV.jpg', NULL, NULL),
(26, '171076616365f8385398bac', 'pexels-david-dibert-635499.jpg', 'images/BQNAK21vSq3MvgRjPYCg0mEvvSNoFTp4qrCNsor1.jpg', NULL, NULL),
(27, '171076616365f8385398bac', 'pexels-pixabay-34231.jpg', 'images/ocynXYa0DB5jyPi47uehA7hN9TS3ljBbMD7pzN8B.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_specs`
--

CREATE TABLE `product_specs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `specification` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_specs`
--

INSERT INTO `product_specs` (`id`, `unique_id`, `specification`, `created_at`, `updated_at`) VALUES
(15, '171068739365f704a1a8020', 'one', NULL, NULL),
(16, '171068782265f7064e06147', 'one', NULL, NULL),
(17, '171068782265f7064e06147', 'low', NULL, NULL),
(18, '171068782265f7064e06147', 'asassd', NULL, NULL),
(19, '171068808765f707573cf49', 'one', NULL, NULL),
(20, '171068808765f707573cf49', 'sec', NULL, NULL),
(21, '171068808765f707573cf49', 'thriuc', NULL, NULL),
(22, '171068841965f708a3ee1ad', 'one', NULL, NULL),
(23, '171068841965f708a3ee1ad', 'asdasdada', NULL, NULL),
(24, '171068841965f708a3ee1ad', 'spec3', NULL, NULL),
(25, '171068862365f7096f7790e', 'one', NULL, NULL),
(26, '171068862365f7096f7790e', 'vhjvkv', NULL, NULL),
(27, '171068862365f7096f7790e', 'vuvyuctug', NULL, NULL),
(34, '171074216865f7da98af430', 'adsada', NULL, NULL),
(35, '171074216865f7da98af430', 'asdasd', NULL, NULL),
(36, '171074216865f7da98af430', 'asdasd', NULL, NULL),
(40, '171076616365f8385398bac', 'fqewfewqf', NULL, NULL),
(41, '171076616365f8385398bac', 'sadfsafsa', NULL, NULL),
(42, '171076616365f8385398bac', 'ewfewqwq', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('gEF4tBg89WoeFdLBnHF7ntVnWSFY7eBhsnPcEXJR', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36 Edg/122.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV1dCS2thMGVKNk16SmFZOGlQaDFPN2MzeUxRRWNkOHlNTUlRRnJRMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTc6Imh0dHA6Ly9sb2NhbGhvc3Qvb2ZmaWNlL2NrZWRpdG9yL3B1YmxpYy9hZG1pbi9wcm9kdWN0L2FkZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1710819801),
('jbr1TVNF9J6Ai7vVQRls4jvuCpxWnmZLuSco72fx', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQVBjbmw0S2p2VXRVWDFpY293OVBncEd0SlY1NUZuaU5qTWo0dkUzdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTY6Imh0dHA6Ly9sb2NhbGhvc3QvaG9tZS9ja2VkaXRvci9wdWJsaWMvc3ViY2F0YWdvcnkvd2FudC81Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1710829006),
('xYsZTq3SQVH684wjQbZYEJ5g1KZ2ndOoLF6BNEKt', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36 Edg/122.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRnVhUmJmaDkxdXhkTldXWFViOXZlbjR4bmVnQURKOVZJT2dLemU3SyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTk6Imh0dHA6Ly9sb2NhbGhvc3QvaG9tZS9ja2VkaXRvci9wdWJsaWMvYWRtaW4vc3ViY2F0YWdvcnkvYWRkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1710829001);

-- --------------------------------------------------------

--
-- Table structure for table `sub_catagories`
--

CREATE TABLE `sub_catagories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catagory` int(11) NOT NULL,
  `subcatagory` varchar(255) NOT NULL,
  `subcatagory_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_catagories`
--

INSERT INTO `sub_catagories` (`id`, `catagory`, `subcatagory`, `subcatagory_status`, `created_at`, `updated_at`) VALUES
(6, 5, 'sub1', 'enable', '2024-03-18 23:43:07', '2024-03-18 23:43:07'),
(7, 5, 'sub2', 'dissable', '2024-03-18 23:43:14', '2024-03-18 23:43:14'),
(8, 2, 'sub3', 'enable', '2024-03-18 23:43:21', '2024-03-18 23:43:21'),
(9, 2, 'sub4', 'dissable', '2024-03-18 23:43:28', '2024-03-18 23:43:28'),
(10, 5, 'sub5', 'enable', '2024-03-19 00:46:40', '2024-03-19 00:46:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'aravi', 'aravi@gmail.com', '9597694709', NULL, NULL, '$2y$12$IBf.eLeytFj.e.DotgAgcuoMpxLNMsKxoQqmqQHXJNwQyw7DrPZQu', NULL, '2024-03-16 13:11:42', '2024-03-16 13:11:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_email_unique` (`email`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_catagories`
--
ALTER TABLE `main_catagories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `main_catagories_catagory_unique` (`catagory`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_unique_id_unique` (`unique_id`),
  ADD UNIQUE KEY `products_product_unique` (`product`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_specs`
--
ALTER TABLE `product_specs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sub_catagories`
--
ALTER TABLE `sub_catagories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sub_catagories_subcatagory_unique` (`subcatagory`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_catagories`
--
ALTER TABLE `main_catagories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `product_specs`
--
ALTER TABLE `product_specs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `sub_catagories`
--
ALTER TABLE `sub_catagories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
