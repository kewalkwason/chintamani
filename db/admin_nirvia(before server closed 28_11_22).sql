-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 28, 2022 at 07:44 AM
-- Server version: 10.3.37-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_nirvia`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `status` tinyint(2) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, 'My Agent', 'agent@yopmail.com', NULL, '$2y$10$BQT9oLmIwgK/FpYmfrWPOO5cuo2IutwnvUHKClEIJVJu/U2LY84bK', '1020304050', 'Noida', 1, '2022-10-14 14:08:50', '2022-10-15 15:59:39'),
(3, 'Agent', 'agent@gmail.com', NULL, '$2y$10$.s/jeR/va01az3sU2CNmOOPgB0v/.MDmv5q7f/8onOkYkXGoY7H.G', '9876543210', 'Jaipur', 1, '2022-11-13 06:25:58', '2022-11-13 06:30:55');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'dddddddd', '1669045339.png', 'WWWWWWWWWW', 1, '2022-11-21 10:29:45', '2022-11-21 10:29:45');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Honda', '1', '2022-10-28 13:17:43', '2022-10-28 13:17:43'),
(2, 'Hyundai', '1', '2022-10-28 13:18:26', '2022-10-28 13:18:26'),
(3, 'Tata', '1', '2022-10-28 13:18:35', '2022-10-28 13:18:35'),
(4, 'Kia', '1', '2022-10-28 13:18:44', '2022-10-28 13:18:44'),
(5, 'Volkswagen', '1', '2022-10-28 13:19:06', '2022-10-28 13:19:06'),
(7, 'Audi by pk', '1', '2022-11-13 07:58:59', '2022-11-13 07:58:59');

-- --------------------------------------------------------

--
-- Table structure for table `car_quotes`
--

CREATE TABLE `car_quotes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `brand_id` varchar(255) DEFAULT NULL,
  `make_model_id` varchar(255) DEFAULT NULL,
  `variant_id` varchar(255) DEFAULT NULL,
  `manufacturing_year` varchar(255) DEFAULT NULL,
  `fuel_type` varchar(255) DEFAULT NULL,
  `policy_info` varchar(255) DEFAULT NULL,
  `expiry_date` varchar(255) DEFAULT NULL,
  `prev_policy_type` varchar(255) DEFAULT NULL,
  `prev_policy_insurer` varchar(255) DEFAULT NULL,
  `is_prev_turtlemint` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(800) DEFAULT NULL,
  `commission` decimal(10,2) DEFAULT 0.00,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `commission`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Life Insurance', '1665858716.png', '350.00', '0', '2022-10-15 13:01:56', '2022-10-15 13:01:56'),
(3, 'Life Insurance', '1665860519.png', '350.00', '1', '2022-10-15 13:32:08', '2022-10-15 13:32:08');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(3, 'customer', 'customer@gmail.com', NULL, '$2y$10$.s/jeR/va01az3sU2CNmOOPgB0v/.MDmv5q7f/8onOkYkXGoY7H.G', '9856434567', 1, '2022-10-31 07:13:55', '2022-10-31 07:13:55');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `make_models`
--

CREATE TABLE `make_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `make_model` varchar(255) DEFAULT NULL,
  `brand_id` int(50) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `make_models`
--

INSERT INTO `make_models` (`id`, `make_model`, `brand_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'City', 1, 1, '2022-10-28 13:48:33', '2022-10-28 13:48:33'),
(2, 'Punch', 3, 1, '2022-10-28 13:46:05', '2022-10-28 13:46:05'),
(3, 'Audi A8', 7, 1, '2022-11-13 06:48:30', '2022-11-13 06:48:30');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_09_164639_create_designation_table', 1),
(6, '2022_08_10_154307_create_department_table', 1),
(7, '2022_08_10_154351_create_role_table', 1),
(8, '2022_08_14_120957_create_permission_tables', 1),
(9, '2022_08_17_153833_create_leadsource_table', 2),
(10, '2022_08_17_153934_create_leadstatus_table', 2),
(11, '2022_08_17_153957_create_leadtype_table', 2),
(12, '2022_08_17_154024_create_membershiptype_table', 2),
(13, '2022_10_14_171451_create_customers_table', 3),
(14, '2022_10_14_190244_create_agents_table', 4),
(15, '2022_10_14_194729_create_categories_table', 5),
(16, '2022_10_25_184321_create_make_models_table', 6),
(17, '2022_10_25_191023_create_variants_table', 7),
(18, '2022_10_28_181229_create_brands_table', 8),
(19, '2022_10_26_192133_create_car_quotes_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_name`, `created_at`, `updated_at`) VALUES
(1, 'user-read', 'web', 'user', '2022-08-14 12:14:33', '2022-08-14 12:14:33'),
(2, 'user-create', 'web', 'user', '2022-08-14 12:14:33', '2022-08-14 12:14:33'),
(3, 'user-update', 'web', 'user', '2022-08-14 12:14:33', '2022-08-14 12:14:33'),
(4, 'user-delete', 'web', 'user', '2022-08-14 12:14:34', '2022-08-14 12:14:34'),
(5, 'role-read', 'web', 'role', '2022-08-14 12:14:34', '2022-08-14 12:14:34'),
(6, 'role-create', 'web', 'role', '2022-08-14 12:14:34', '2022-08-14 12:14:34'),
(7, 'role-update', 'web', 'role', '2022-08-14 12:14:34', '2022-08-14 12:14:34'),
(8, 'role-delete', 'web', 'role', '2022-08-14 12:14:34', '2022-08-14 12:14:34'),
(9, 'designation-read', 'web', 'designation', '2022-08-14 12:14:34', '2022-08-14 12:14:34'),
(10, 'designation-create', 'web', 'designation', '2022-08-14 12:14:34', '2022-08-14 12:14:34'),
(11, 'designation-update', 'web', 'designation', '2022-08-14 12:14:34', '2022-08-14 12:14:34'),
(12, 'designation-delete', 'web', 'designation', '2022-08-14 12:14:34', '2022-08-14 12:14:34'),
(13, 'department-read', 'web', 'department', '2022-08-14 12:14:34', '2022-08-14 12:14:34'),
(14, 'department-create', 'web', 'department', '2022-08-14 12:14:34', '2022-08-14 12:14:34'),
(15, 'department-update', 'web', 'department', '2022-08-14 12:14:35', '2022-08-14 12:14:35'),
(16, 'department-delete', 'web', 'department', '2022-08-14 12:14:35', '2022-08-14 12:14:35'),
(17, 'customer-read', 'web', 'customer', '2022-08-14 12:14:33', '2022-08-14 12:14:33'),
(18, 'customer-update', 'web', 'customer', '2022-08-14 12:14:33', '2022-08-14 12:14:33'),
(19, 'customer-delete', 'web', 'customer', '2022-08-14 12:14:34', '2022-08-14 12:14:34'),
(20, 'customer-create', 'web', 'customer', '2022-08-14 12:14:33', '2022-08-14 12:14:33'),
(21, 'agent-read', 'web', 'agent', '2022-08-14 12:14:33', '2022-08-14 12:14:33'),
(22, 'agent-create', 'web', 'agent', '2022-08-14 12:14:33', '2022-08-14 12:14:33'),
(23, 'agent-update', 'web', 'agent', '2022-08-14 12:14:33', '2022-08-14 12:14:33'),
(24, 'agent-delete', 'web', 'agent', '2022-08-14 12:14:34', '2022-08-14 12:14:34'),
(25, 'category-read', 'web', 'category', '2022-08-14 12:14:33', '2022-08-14 12:14:33'),
(26, 'category-create', 'web', 'category', '2022-08-14 12:14:33', '2022-08-14 12:14:33'),
(27, 'category-update', 'web', 'category', '2022-08-14 12:14:33', '2022-08-14 12:14:33'),
(28, 'category-delete', 'web', 'category', '2022-08-14 12:14:34', '2022-08-14 12:14:34'),
(29, 'makeModel-read', 'web', 'makeModel', '2022-08-14 12:14:33', '2022-08-14 12:14:33'),
(30, 'makeModel-create', 'web', 'makeModel', '2022-08-14 12:14:33', '2022-08-14 12:14:33'),
(31, 'makeModel-update', 'web', 'makeModel', '2022-08-14 12:14:33', '2022-08-14 12:14:33'),
(32, 'makeModel-delete', 'web', 'makeModel', '2022-08-14 12:14:34', '2022-08-14 12:14:34'),
(33, 'variant-read', 'web', 'variant', '2022-08-14 12:14:33', '2022-08-14 12:14:33'),
(34, 'variant-create', 'web', 'variant', '2022-08-14 12:14:33', '2022-08-14 12:14:33'),
(35, 'variant-update', 'web', 'variant', '2022-08-14 12:14:33', '2022-08-14 12:14:33'),
(36, 'variant-delete', 'web', 'variant', '2022-08-14 12:14:34', '2022-08-14 12:14:34'),
(37, 'brand-delete', 'web', 'brand', '2022-08-14 12:14:34', '2022-08-14 12:14:34'),
(38, 'brand-update', 'web', 'brand', '2022-08-14 12:14:33', '2022-08-14 12:14:33'),
(39, 'brand-create', 'web', 'brand', '2022-08-14 12:14:33', '2022-08-14 12:14:33'),
(40, 'brand-read', 'web', 'brand', '2022-08-14 12:14:33', '2022-08-14 12:14:33'),
(45, 'blog-read', 'web', 'blog', '2022-08-14 12:14:33', '2022-08-14 12:14:33'),
(46, 'blog-create', 'web', 'blog', '2022-08-14 12:14:33', '2022-08-14 12:14:33'),
(47, 'blog-update', 'web', 'blog', '2022-08-14 12:14:33', '2022-08-14 12:14:33'),
(48, 'blog-delete', 'web', 'blog', '2022-08-14 12:14:34', '2022-08-14 12:14:34');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `policy_insurers`
--

CREATE TABLE `policy_insurers` (
  `id` bigint(20) NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `status` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `policy_insurers`
--

INSERT INTO `policy_insurers` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'qwertyred', '1', '2022-11-13 08:16:08', '2022-11-13 08:16:08'),
(2, 'testing 1', '1', '2022-11-13 08:28:56', '2022-11-13 08:28:56'),
(3, 'testing 2', '1', '2022-11-13 08:29:06', '2022-11-13 08:29:06');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `permission` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '1', '2022-08-14 12:14:35', '2022-08-14 12:15:18'),
(2, 'Staff', 'web', '1', '2022-08-14 12:15:59', '2022-08-15 06:39:19');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(5, 2),
(6, 1),
(6, 2),
(7, 1),
(7, 2),
(8, 1),
(8, 2),
(9, 1),
(9, 2),
(10, 1),
(10, 2),
(11, 1),
(11, 2),
(12, 1),
(12, 2),
(13, 1),
(13, 2),
(14, 1),
(14, 2),
(15, 1),
(15, 2),
(16, 1),
(16, 2),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(37, 2),
(38, 1),
(38, 2),
(39, 1),
(39, 2),
(40, 1),
(40, 2),
(45, 1),
(46, 1),
(47, 1),
(48, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `userType` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `joining_date` varchar(255) DEFAULT NULL,
  `department` int(11) DEFAULT NULL,
  `designation` int(11) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `marital_status` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `userType`, `email`, `email_verified_at`, `password`, `remember_token`, `phone`, `joining_date`, `department`, `designation`, `role`, `gender`, `address`, `date_of_birth`, `marital_status`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$.s/jeR/va01az3sU2CNmOOPgB0v/.MDmv5q7f/8onOkYkXGoY7H.G', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-08-14 12:14:33', '2022-08-14 12:14:33'),
(2, 'Praveen', 'Staff', 'praveen@gmail.com', NULL, '$2y$10$O4WqJxpDqJRpHkmIGGHGXOOAm9euxTIKBFXvWUv5s7Lob92Q0l4Be', NULL, '9874563210', '2022-08-15', 1, 1, 2, 'Male', 'noida', '2022-08-15', 'Married', '1', '2022-08-15 06:48:22', '2022-08-15 07:05:40');

-- --------------------------------------------------------

--
-- Table structure for table `variants`
--

CREATE TABLE `variants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `variant` varchar(255) DEFAULT NULL,
  `brand_id` int(50) DEFAULT NULL,
  `make_model_id` varchar(255) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `variants`
--

INSERT INTO `variants` (`id`, `variant`, `brand_id`, `make_model_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'vx cvt 4', 1, '1', 1, '2022-10-26 13:25:47', '2022-10-26 13:25:47'),
(2, 'Pure', 3, '2', 1, '2022-10-29 12:28:31', '2022-10-29 12:28:31'),
(3, 'd', 7, '3', 1, '2022-11-13 06:49:34', '2022-11-13 06:49:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `agents_email_unique` (`email`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_quotes`
--
ALTER TABLE `car_quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `make_models`
--
ALTER TABLE `make_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `policy_insurers`
--
ALTER TABLE `policy_insurers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `variants`
--
ALTER TABLE `variants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `car_quotes`
--
ALTER TABLE `car_quotes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `make_models`
--
ALTER TABLE `make_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policy_insurers`
--
ALTER TABLE `policy_insurers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `variants`
--
ALTER TABLE `variants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
