-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2020 at 12:24 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ustart`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendences`
--

CREATE TABLE `attendences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `outtime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statustwo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendences`
--

INSERT INTO `attendences` (`id`, `user_id`, `date`, `intime`, `status`, `outtime`, `duration`, `statustwo`, `created_at`, `updated_at`) VALUES
(1, '2', '2020-05-22', '8:28:20', 0, '15:20:20', '06:52:00', 'Leave', NULL, NULL),
(2, '2', '2020-05-21', '8:28:20', 0, '10:20:20', '01:52:00', 'Leave', NULL, NULL),
(3, '2', '2020-05-20', '8:28:20', 0, '17:20:20', '08:52:00', 'Full Day', NULL, NULL),
(4, '2', '2020-05-19', '8:28:20', 0, '11:20:20', '02:52:00', 'Leave', NULL, NULL),
(5, '2', '2020-05-18', '8:28:20', 0, '12:20:20', '03:52:00', 'Half Day', NULL, NULL),
(6, '2', '2020-05-17', '8:28:20', 0, '13:20:20', '04:52:00', 'Half Day', NULL, NULL),
(7, '2', '2020-05-16', '8:28:20', 0, '14:20:20', '05:52:00', 'Half Day', NULL, NULL),
(8, '2', '2020-05-15', '8:08:20', 0, '15:20:20', '07:12:00', 'Full Day', NULL, NULL),
(9, '4', '2020-05-15', '8:08:20', 0, '10:20:20', '02:12:00', 'Leave', NULL, NULL),
(10, '4', '2020-05-16', '8:08:20', 0, '11:20:20', '03:12:00', 'Half Day', NULL, NULL),
(11, '4', '2020-05-17', '8:08:20', 0, '12:20:20', '04:12:00', 'Half Day', NULL, NULL),
(12, '4', '2020-05-18', '8:18:20', 0, '13:20:20', '05:02:00', 'Half Day', NULL, NULL),
(13, '4', '2020-05-19', '8:18:20', 0, '14:20:20', '06:02:00', 'Full Day', NULL, NULL),
(14, '4', '2020-05-20', '8:18:20', 0, '15:20:20', '07:02:00', 'Full Day', NULL, NULL),
(15, '4', '2020-05-21', '8:18:20', 0, '16:20:20', '08:02:00', 'Full Day', NULL, NULL),
(16, '4', '2020-05-22', '8:18:20', 0, '17:20:20', '09:02:00', 'Full Day', NULL, NULL),
(17, '4', '2020-05-23', '8:18:20', 0, '18:20:20', '10:02:00', 'Full Day', NULL, NULL),
(18, '4', '2020-05-24', '8:18:20', 0, '17:20:20', '09:02:00', 'Full Day', NULL, NULL),
(19, '4', '2020-05-25', '8:18:20', 0, '12:20:20', '04:02:00', 'Half Day', NULL, NULL),
(68, '2', '2020-05-24', '21:58:52', 0, '21:58:55', '00:00:03', 'Leave', NULL, NULL),
(74, '2', '2020-05-26', '15:17:31', 0, '15:18:07', '00:00:36', 'Leave', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `availabeforcart` tinyint(1) NOT NULL DEFAULT 1,
  `availabeforpublic` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `user_type`, `product_id`, `qty`, `availabeforcart`, `availabeforpublic`, `status`, `created_at`, `updated_at`) VALUES
(33, 3, 2, 17, 3, 0, 1, 1, NULL, '2020-05-26 04:22:52'),
(34, 3, 2, 17, 4, 0, 1, 1, NULL, '2020-05-26 04:22:52'),
(35, 3, 2, 40, 4, 0, 1, 0, NULL, '2020-05-26 04:22:52'),
(36, 2, 1, 17, 4, 0, 1, 1, NULL, '2020-05-26 04:21:54'),
(37, 2, 1, 17, 6, 0, 1, 1, NULL, '2020-05-26 04:21:54'),
(38, 2, 1, 18, 4, 0, 1, 1, NULL, '2020-05-26 04:19:43'),
(39, 2, 1, 45, 4, 0, 1, 1, NULL, '2020-05-26 04:19:43'),
(40, 3, 2, 17, 4, 0, 1, 1, NULL, '2020-05-26 04:22:52'),
(41, 13, 2, 17, 4, 0, 1, 1, NULL, '2020-05-26 04:21:54'),
(42, 5, 2, 17, 4, 0, 1, 1, NULL, '2020-05-26 04:21:54'),
(43, 5, 2, 40, 4, 0, 1, 0, NULL, '2020-05-25 09:30:41'),
(44, 5, 2, 40, 5, 0, 1, 0, NULL, '2020-05-25 09:30:41'),
(45, 2, 1, 44, 5, 0, 1, 1, NULL, '2020-05-26 04:19:43'),
(46, 2, 1, 17, 7, 0, 1, 1, NULL, '2020-05-26 04:21:54'),
(47, 3, 2, 17, 10, 0, 1, 0, NULL, '2020-05-26 04:22:52');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bread', 1, '2020-03-26 11:04:47', '2020-05-26 00:35:25'),
(2, 'Clouths', 1, '2020-03-26 11:04:51', '2020-03-26 11:04:51'),
(3, 'Matchines', 1, '2020-03-26 11:04:55', '2020-03-26 11:04:55'),
(4, 'Vehicles', 1, '2020-03-26 11:04:58', '2020-03-26 11:04:58'),
(5, 'Computers', 1, '2020-03-26 11:05:05', '2020-03-26 11:05:05'),
(6, 'New Products', 1, '2020-03-26 12:26:18', '2020-03-26 12:26:18'),
(7, 'Phones', 1, '2020-03-27 01:54:39', '2020-03-27 01:54:39'),
(8, 'XXXX', 1, '2020-05-20 11:41:49', '2020-05-26 02:17:39'),
(9, 'cccc', 1, '2020-05-25 10:34:34', '2020-05-25 10:34:34'),
(10, 'qqqqqqqqq', 1, '2020-05-26 04:07:43', '2020-05-26 04:07:55');

-- --------------------------------------------------------

--
-- Table structure for table `customer_groups`
--

CREATE TABLE `customer_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_groups`
--

INSERT INTO `customer_groups` (`id`, `user_id`, `customer_id`, `created_at`, `updated_at`) VALUES
(9, 4, 10, '2020-04-27 04:14:03', '2020-04-27 04:14:03'),
(10, 4, 13, '2020-04-27 04:14:03', '2020-04-27 04:14:03'),
(12, 8, 15, '2020-04-28 07:43:40', '2020-04-28 07:43:40'),
(13, 8, 17, '2020-04-28 07:43:40', '2020-04-28 07:43:40'),
(14, 8, 20, '2020-04-28 07:43:40', '2020-04-28 07:43:40'),
(15, 9, 21, '2020-04-28 08:15:41', '2020-04-28 08:15:41'),
(16, 9, 24, '2020-04-28 08:15:41', '2020-04-28 08:15:41'),
(17, 11, 25, '2020-04-28 08:15:47', '2020-04-28 08:15:47'),
(18, 11, 27, '2020-04-28 08:15:47', '2020-04-28 08:15:47'),
(19, 12, 28, '2020-04-28 08:16:02', '2020-04-28 08:16:02'),
(20, 12, 31, '2020-04-28 08:16:02', '2020-04-28 08:16:02'),
(21, 12, 32, '2020-04-28 08:16:02', '2020-04-28 08:16:02'),
(22, 16, 33, '2020-04-28 08:16:08', '2020-04-28 08:16:08'),
(23, 16, 34, '2020-04-28 08:16:08', '2020-04-28 08:16:08'),
(24, 18, 37, '2020-04-28 08:16:15', '2020-04-28 08:16:15'),
(25, 18, 40, '2020-04-28 08:16:15', '2020-04-28 08:16:15'),
(26, 18, 41, '2020-04-28 08:16:15', '2020-04-28 08:16:15'),
(29, 2, 5, '2020-04-28 14:24:53', '2020-04-28 14:24:53'),
(30, 2, 27, '2020-04-28 14:24:53', '2020-04-28 14:24:53'),
(33, 2, 3, '2020-04-28 14:32:37', '2020-04-28 14:32:37'),
(34, 2, 14, '2020-04-28 14:32:37', '2020-04-28 14:32:37'),
(35, 2, 45, '2020-05-20 11:43:35', '2020-05-20 11:43:35'),
(36, 2, 49, '2020-05-20 11:43:35', '2020-05-20 11:43:35'),
(37, 2, 50, '2020-05-20 11:43:35', '2020-05-20 11:43:35'),
(38, 2, 7, '2020-05-26 02:40:49', '2020-05-26 02:40:49'),
(39, 2, 51, '2020-05-26 02:40:49', '2020-05-26 02:40:49'),
(40, 2, 53, '2020-05-26 04:10:13', '2020-05-26 04:10:13'),
(41, 2, 55, '2020-05-26 04:10:13', '2020-05-26 04:10:13'),
(42, 2, 56, '2020-05-26 04:10:13', '2020-05-26 04:10:13');

-- --------------------------------------------------------

--
-- Table structure for table `customer_locations`
--

CREATE TABLE `customer_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` int(11) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_locations`
--

INSERT INTO `customer_locations` (`id`, `address`, `customer_id`, `lat`, `lng`, `created_at`, `updated_at`) VALUES
(4, '148 Vauxhall Street, Colombo, Sri Lanka', 3, 6.14767116, 80.7880453, '2020-03-31 02:10:13', '2020-03-31 02:10:13'),
(5, '2nd Cross Street, Colombo, Sri Lanka', 5, 6.936101000000001, 79.85224579999999, '2020-03-31 02:10:36', '2020-03-31 02:10:36'),
(8, 'Arnold Ratnayake Mawatha, Colombo, Sri Lanka', 10, 6.9230486, 79.86327630000001, '2020-05-03 15:05:26', '2020-05-03 15:05:26'),
(9, 'Colombo Fort Station, Colombo, Sri Lanka', 14, 6.9336686, 79.85004699999999, '2020-05-03 15:05:33', '2020-05-03 15:05:33'),
(10, 'Arnold Ratnayake Mawatha, Colombo, Sri Lanka', 13, 6.9230486, 79.86327630000001, '2020-05-03 15:05:39', '2020-05-03 15:05:39'),
(11, 'Awariyawatta, Wattala, Sri Lanka', 15, 6.985281800000001, 79.8954802, '2020-05-03 15:06:04', '2020-05-03 15:06:04'),
(12, 'Homagama, Sri Lanka', 17, 6.8432762, 80.0031833, '2020-05-03 15:06:10', '2020-05-03 15:06:10'),
(13, 'Ja-Ela, Sri Lanka', 20, 7.066798400000001, 79.90409319999999, '2020-05-03 15:06:17', '2020-05-03 15:06:17'),
(14, 'Town Hall, Colombo, Sri Lanka', 21, 6.9158502, 79.8637861, '2020-05-03 15:06:22', '2020-05-03 15:06:22'),
(15, 'General Hospital, ENT Ward Road, Colombo, Sri Lanka', 24, 6.9183224, 79.8679353, '2020-05-03 15:06:33', '2020-05-03 15:06:33'),
(16, 'QBIC.LK, Robert Gunawardena Mawatha, Colombo, Sri Lanka', 25, 6.873635999999999, 79.8786306, '2020-05-03 15:06:43', '2020-05-03 15:06:43'),
(17, 'Yakkala, Sri Lanka', 27, 7.0864153, 80.0335107, '2020-05-20 11:43:03', '2020-05-20 11:43:03'),
(18, 'Maharagama, Sri Lanka', 7, 6.851095099999999, 79.92120109999999, '2020-05-25 13:52:00', '2020-05-25 13:52:00'),
(20, 'Kottawa Town, Pannipitiya, Sri Lanka', 6, 6.841165200000001, 79.9654324, '2020-05-25 13:58:42', '2020-05-25 13:58:42'),
(21, 'NSBM Green University Town, Pitipana - Thalagala Road, Homagama, Sri Lanka', 28, 6.8213425, 80.0415854, '2020-05-26 04:08:59', '2020-05-26 04:08:59');

-- --------------------------------------------------------

--
-- Table structure for table `daily_routes`
--

CREATE TABLE `daily_routes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daily_routes`
--

INSERT INTO `daily_routes` (`id`, `user_id`, `date`, `time`, `lat`, `lng`, `created_at`, `updated_at`) VALUES
(3, '2', '2020-05-24', '02:02', 6.923314599999999, 79.8560713, NULL, NULL),
(4, '2', '2020-05-24', '02:04', 6.936101000000001, 79.85224579999999, NULL, NULL),
(5, '4', '2020-05-24', '11:35', 7.0864153, 80.0335107, NULL, NULL),
(6, '4', '2020-05-24', '11:35', 6.873635999999999, 79.8786306, NULL, NULL),
(7, '4', '2020-05-24', '11:35', 6.9183224, 79.8679353, NULL, NULL),
(8, '4', '2020-05-24', '11:35', 6.9158502, 79.8637861, NULL, NULL),
(9, '4', '2020-05-24', '11:35', 7.066798400000001, 79.90409319999999, NULL, NULL),
(10, '2', '2020-05-22', '11:35', 6.936101000000001, 79.85224579999999, NULL, NULL),
(11, '2', '2020-05-22', '11:35', 6.8432762, 80.0031833, NULL, NULL),
(12, '2', '2020-05-22', '11:35', 6.985281800000001, 79.8954802, NULL, NULL),
(13, '2', '2020-05-21', '11:35', 6.9336686, 79.85004699999999, NULL, NULL),
(14, '2', '2020-05-21', '11:35', 6.936101000000001, 79.85224579999999, NULL, NULL),
(15, '2', '2020-05-21', '11:35', 6.936101000000001, 79.85224579999999, NULL, NULL),
(16, '2', '2020-05-25', '20:26', 6.936101000000001, 79.85224579999999, NULL, NULL),
(17, '4', '2020-05-25', '20:27', 6.936101000000001, 79.85224579999999, NULL, NULL),
(18, '4', '2020-05-25', '20:30', 6.841165200000001, 79.9654324, NULL, NULL),
(19, '4', '2020-05-25', '20:30', 6.9336686, 79.85004699999999, NULL, NULL),
(20, '4', '2020-05-25', '20:30', 6.851095099999999, 79.92120109999999, NULL, NULL),
(21, '4', '2020-05-25', '20:53', 6.923314599999999, 79.8560713, NULL, NULL),
(25, '2', '2020-05-26', '15:21', 6.14767116, 80.7880453, NULL, NULL);

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
(4, '2020_02_11_164542_create_categories_table', 1),
(5, '2020_02_12_092617_create_products_table', 1),
(6, '2020_02_21_081228_create_customer_locations_table', 1),
(8, '2020_03_26_115011_create_customer_groups_table', 2),
(13, '2020_03_28_220554_create_carts_table', 3),
(14, '2020_04_24_094113_create_verifications_table', 4),
(20, '2020_05_02_103849_create_attendences_table', 6),
(21, '2020_05_02_203359_create_daily_routes_table', 7);

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
('kavindutheekshana@gmail.com', '$2y$10$IQayFMHgZwHblU5Y85w9ueqvgkvvQdCBuP/JDLDjbcXyEMeP1ZE.q', '2020-05-26 04:03:07');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `product_price`, `description`, `product_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'dolorem', '4', 7035, 'Nostrum rerum debitis suscipit excepturi. Perspiciatis eaque aliquid labore molestiae quia veniam. Eius assumenda sed necessitatibus assumenda optio. Doloribus quidem quam mollitia est.', 'uploads/products/default.jpg', 0, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(2, 'quasi', '3', 5551, 'A quia minima numquam dolorem corporis quia. Porro molestias rerum dicta rerum sed similique. Quos enim cupiditate officia autem qui corporis et.', 'uploads/products/default.jpg', 0, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(3, 'esse', '2', 7872, 'Repudiandae itaque minima quidem numquam. Voluptas error ut eum pariatur architecto. Consectetur placeat ea quod incidunt atque et aliquam. Pariatur mollitia quia dolorem totam quibusdam autem alias.', 'uploads/products/default.jpg', 1, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(5, 'corrupti', '1', 100, 'Est eius est et distinctio quis. Adipisci et sit deserunt ullam voluptatem omnis voluptate quia. Et dicta consequatur non.', 'uploads/products/7.jpg', 1, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(6, 'nisi', '3', 5914, 'Deserunt quia est nam rerum eveniet repellat inventore veritatis. Vel porro quibusdam explicabo qui mollitia. Rerum ut voluptatibus placeat modi sunt sit esse.', 'uploads/products/default.jpg', 0, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(7, 'doloribus', '4', 1077, 'Qui officia aut deserunt nulla. Nostrum molestias magni eligendi et. Quos sapiente recusandae autem voluptatem est et asperiores.', 'uploads/products/default.jpg', 0, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(8, 'et', '2', 6811, 'Similique commodi ut doloribus officia. Praesentium debitis quaerat perspiciatis velit. Commodi velit natus excepturi magni.', 'uploads/products/default.jpg', 1, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(9, 'doloribus', '1', 6409, 'Magni molestiae autem in. Autem deleniti minus reiciendis eos distinctio. Velit porro vel sed.', 'uploads/products/default.jpg', 0, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(10, 'qui', '5', 2291, 'Consequatur reiciendis dolor et et voluptate unde. Culpa praesentium et eum. Distinctio earum aut doloribus aut velit est voluptatem et.', 'uploads/products/default.jpg', 0, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(11, 'vitae', '3', 6009, 'Ipsa voluptatem consectetur aperiam repellendus dicta. Laudantium et sed iusto ut ab aut necessitatibus. Voluptate officia commodi ipsam maxime.', 'uploads/products/default.jpg', 0, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(12, 'ipsum', '3', 9137, 'Et voluptatem consequatur aut est iusto. Ea sed in non. Alias sed at magni quasi porro quibusdam sit. Occaecati est cum qui est rem.', 'uploads/products/default.jpg', 1, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(13, 'et', '6', 8255, 'Voluptas sequi beatae iste in deleniti. Et expedita cupiditate nisi deleniti. Dolores distinctio esse voluptas iure ipsam.', 'uploads/products/default.jpg', 0, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(14, 'ratione', '1', 1459, 'Et iste aut amet iure impedit error exercitationem. Voluptas temporibus labore consectetur et esse temporibus. Nemo itaque ex optio voluptas assumenda et officia.', 'uploads/products/default.jpg', 0, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(15, 'perferendis', '3', 7057, 'Ut fugit sed eius illum magnam sunt architecto. Itaque in quia eius odit tenetur ducimus omnis.', 'uploads/products/default.jpg', 0, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(16, 'natus', '4', 2379, 'Unde ea magni rerum qui et quisquam nihil. Hic voluptatem sed et. Fugit odio odio in sed. Qui sit voluptate minus sed veritatis necessitatibus.', 'uploads/products/default.jpg', 0, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(17, 'aliquid', '4', 100, 'Provident voluptate enim quod ullam accusamus. Laudantium sunt ex maiores aut minus esse. Voluptas soluta a sequi velit aspernatur est corporis praesentium. Et quod et animi aut.', 'uploads/products/1.jpg', 0, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(18, 'aspernatur', '2', 100, 'Corrupti consectetur quia eos quis. Dolorem quam officia eos quasi consequatur. Corporis optio aut praesentium voluptatum voluptatem. Porro placeat alias sit accusantium sint provident.', 'uploads/products/4.jpg', 0, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(19, 'nostrum', '1', 7635, 'Vitae qui cupiditate nihil sapiente. Autem quis beatae nesciunt laboriosam. Et id atque et qui pariatur non. Ut accusamus mollitia qui aut voluptas.', 'uploads/products/default.jpg', 0, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(20, 'sed', '7', 3480, 'Et amet harum quaerat. Dolor soluta aut iusto nesciunt neque nihil. Et possimus nam maiores placeat atque deleniti est. Sint quidem itaque sint officiis est error neque.', 'uploads/products/default.jpg', 1, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(21, 'aperiam', '2', 1086, 'Id ad debitis illum corporis. Enim molestias sit et id qui dolores. Id illo qui rerum quos voluptas et.', 'uploads/products/3.jpg', 1, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(22, 'molestiae', '3', 6587, 'Quasi ut rerum sit aut quisquam sit. Neque voluptas repellendus itaque. Sed occaecati illum placeat. Quia voluptatem maxime provident expedita dolorem et esse ad. Aut est corrupti ut ipsum.', 'uploads/products/default.jpg', 0, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(23, 'qui', '4', 3346, 'Officiis dolor inventore non eaque dolores voluptas. Nostrum officia voluptas aperiam odit quia quia cupiditate.', 'uploads/products/default.jpg', 1, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(24, 'in', '3', 1317, 'Et reprehenderit quo animi consequatur iste modi voluptatibus. Consequatur rerum voluptas quod ab. Excepturi nulla natus sapiente.', 'uploads/products/default.jpg', 0, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(25, 'repellendus', '1', 1152, 'Non qui tempore ab culpa. Quam explicabo illo ut vel dolorem ad modi. Distinctio repellendus mollitia ut itaque tenetur. Suscipit sequi quis molestiae ex.', 'uploads/products/default.jpg', 1, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(26, 'tempora', '2', 6489, 'Ab deleniti distinctio repudiandae cum. Doloribus qui suscipit praesentium error rem. Quia id enim asperiores. Dolor molestiae id dolorem reprehenderit dignissimos soluta et quis.', 'uploads/products/default.jpg', 1, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(27, 'ipsam', '2', 5204, 'Saepe reprehenderit vel reiciendis dolor suscipit sed fuga. Eius enim maiores ipsum. Provident aliquid neque hic occaecati qui debitis ipsa.', 'uploads/products/default.jpg', 1, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(28, 'eius', '3', 819, 'Similique doloremque odio esse inventore. Autem veritatis quis ipsam voluptates architecto nesciunt. Repellat animi est quis magni non ut.', 'uploads/products/default.jpg', 1, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(29, 'nam', '2', 8191, 'Veritatis sunt vitae quis. Voluptate vero quo dolorem quibusdam fugiat. Ut sit et voluptatem et eos quo. Inventore eius sunt illum esse in tempore. Aperiam qui aspernatur odit quod nisi cumque.', 'uploads/products/default.jpg', 0, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(30, 'voluptas', '3', 6562, 'Facere omnis est vitae repellendus repellendus et quidem architecto. Incidunt sit aliquid ut commodi voluptatem.', 'uploads/products/default.jpg', 0, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(31, 'rerum', '8', 1472, 'Labore deserunt dolor omnis nam. Modi aperiam aspernatur est voluptates pariatur ratione qui repellat. Laboriosam deleniti in vel ut voluptate.', 'uploads/products/default.jpg', 1, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(32, 'totam', '4', 4837, 'Et nulla natus praesentium. Eos odio neque quia ipsum et incidunt. Velit autem maxime adipisci est. Sapiente nostrum consequatur repudiandae ut asperiores rerum qui. Natus rerum itaque et recusandae.', 'uploads/products/default.jpg', 0, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(33, 'commodi', '4', 4998, 'Optio velit sequi earum. Vel nostrum ipsum provident aperiam quis omnis ea. Pariatur illum illum pariatur.', 'uploads/products/6.jpg', 1, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(34, 'neque', '3', 6663, 'Numquam est labore quia. Architecto aut inventore aut. Aut rerum qui ut et eaque accusamus laborum.', 'uploads/products/default.jpg', 0, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(35, 'ut', '5', 1224, 'Ut earum ut natus eos culpa. Dicta blanditiis consectetur esse explicabo. Consequatur sit temporibus veniam qui amet doloremque quia. Modi assumenda repellat voluptas doloribus nihil.', 'uploads/products/default.jpg', 0, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(36, 'harum', '4', 5533, 'Tempore saepe magnam eos quasi ut dolorem beatae ratione. Repellat eum tempore quae ut quia et sed sapiente.', 'uploads/products/default.jpg', 1, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(37, 'nihil', '4', 6661, 'Minus doloremque ea adipisci cum et ab. Possimus ad deleniti quam eligendi veritatis voluptate vero. Quisquam officia quod eos suscipit.', 'uploads/products/default.jpg', 1, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(38, 'est', '2', 8535, 'Vitae alias placeat ex excepturi qui. Eum dolore facilis illo sunt incidunt voluptatibus. Cumque repellendus voluptatem officia fugiat vel.', 'uploads/products/default.jpg', 1, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(39, 'et', '1', 5278, 'Reprehenderit voluptatem sit delectus qui. Et quia ut nam et voluptates ut. Itaque omnis incidunt et facilis quaerat molestiae quia.', 'uploads/products/default.jpg', 1, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(40, 'aliquid', '4', 100, 'Qui incidunt nesciunt et ratione velit. Illum vero explicabo praesentium. Veniam est minima ad sit rerum. Aut dolor unde esse est excepturi placeat molestiae sit.', 'uploads/products/2.jpg', 1, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(41, 'qui', '6', 4976, 'Reiciendis atque exercitationem error id maiores aspernatur minus. Qui nulla laborum officia ullam rem aut. Et dicta molestias et. Cumque culpa beatae sed consectetur.', 'uploads/products/default.jpg', 0, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(42, 'distinctio', '2', 7704, 'Porro laboriosam veniam qui. Et qui eum rem facilis. Quae at sint omnis aut assumenda sapiente. Voluptatum porro sed iste.', 'uploads/products/default.jpg', 1, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(43, 'voluptas', '3', 2079, 'Consequatur illum consequatur aut qui quos voluptatum. Praesentium sapiente quod cupiditate placeat laudantium.', 'uploads/products/default.jpg', 1, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(44, 'cum', '7', 5470, 'Fugit blanditiis qui sit ut. Iste modi accusantium et aspernatur sint nobis ab. Et aspernatur omnis assumenda sed repellendus earum. Architecto officiis nihil sit voluptatem et.', 'uploads/products/8.jpg', 1, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(45, 'aut', '2', 4483, 'Tempora et quis dolorem voluptas deleniti nobis eos. Velit cum inventore blanditiis est ea. Eos autem molestias et voluptas cupiditate reiciendis.', 'uploads/products/5.jpg', 0, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(46, 'pariatur', '1', 5552, 'Dolor quis amet corporis natus quidem illo recusandae animi. Inventore voluptas autem doloribus ipsa aliquid ea. Ut autem deleniti fugiat est quod est corporis.', 'uploads/products/default.jpg', 1, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(47, 'quo', '8', 1853, 'Recusandae consequatur expedita ut numquam esse ab. Dolorem veritatis odit eum molestiae. Temporibus ullam voluptates velit et quasi. Non voluptatem iure velit.', 'uploads/products/default.jpg', 1, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(48, 'officia', '1', 9577, 'Expedita quis sunt quidem quia voluptatum. Mollitia distinctio est molestiae. Eos sapiente et esse nihil quisquam qui. Qui adipisci voluptates consequuntur dolorem.', 'uploads/products/default.jpg', 0, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(49, 'suscipit', '2', 5714, 'Nostrum id esse neque est veritatis incidunt. Voluptas recusandae sunt architecto eius voluptas rerum occaecati. Impedit ut optio eum blanditiis. Necessitatibus ut amet voluptas sed labore.', 'uploads/products/default.jpg', 0, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(50, 'rerum', '4', 5665, 'Molestias sit qui temporibus aut eum. Deleniti nam aut consectetur nobis doloribus sunt. Nihil veniam eaque possimus autem cupiditate eveniet dolor. Enim velit consequatur eum ducimus aut.', 'uploads/products/default.jpg', 1, '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(51, 'Kavindu Theekshana', '8', 213123, '<p>sadasdasfsfdsfd</p>', 'uploads/products/20200520171210.jpg', 1, '2020-05-20 11:42:10', '2020-05-20 11:42:10'),
(52, 'XXXXXXXXXXXXX', '10', 27, '<p>sasfdasfasfdasdfasdfasdf</p>', 'uploads/products/20200526095607.jpg', 1, '2020-05-26 04:26:07', '2020-05-26 04:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `joined_date` date DEFAULT NULL,
  `profile_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `location_status` tinyint(1) NOT NULL DEFAULT 0,
  `group_status` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `shop_name`, `email`, `email_verified_at`, `telephone`, `address`, `province`, `district`, `city`, `joined_date`, `profile_pic`, `user_type`, `status`, `location_status`, `group_status`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kavindu Theekshana', NULL, 'kavindutheekshana@gmail.com', '2020-03-26 06:23:52', '0715421423', 'No-95,Theekshana,Wakamulla,hakuruwela', 'Southern', 'Hambanthota', 'Weeraketiya', '1997-07-08', 'uploads/profile_pic/20200526074232.jpg', 0, 1, 0, 0, '$2y$10$8JVs7VX/ZLG/FFITthJJN.9SesjKncnjEwvo4h9P3AYD9uwNDdztm', 'y7deCAZ8GJ2aEM0Sg5rAMPajf8bvV2RGHridoqGMOB9TEC1ioYHM11JUfsDX', '2020-03-26 06:23:52', '2020-05-26 02:12:32'),
(2, 'Kavindu (sels)', 'Konopelski and Sons', 'kavindutheekshanasels@gmail.com', '2020-03-26 06:23:52', '800.432.24600000', '96399 Hodkiewicz Ports\nPagacbury, MI 44218-8755', 'Connecticut', 'UT', 'South Aglae', '1973-08-03', 'uploads/profile_pic/20200501074822.jpg', 1, 1, 0, 1, '$2y$10$zhmzYROXqThpwMpaaVVTpeRM3DbkRcqiitXFOlpweE09iMmiS4rrC', 'xycxYjZ4FmZGXf6XsiBvjRh9uhDTRQWCPCUUFtILRPyuzdMmtQhV0YpYW2Su', '2020-03-26 06:23:52', '2020-05-26 04:10:13'),
(3, 'Kavindu (cus)', 'Parisian-Bauch', 'kavindutheekshanacus@gmail.com', '2020-03-26 06:23:52', '1-855-710-3034', '838 Eva Green Apt. 353\nSouth Sadie, WA 89775-6111', 'Washington', 'CT', 'Schimmelhaven', '2008-05-25', 'uploads/profile_pic/20200501080059.jpg', 2, 1, 1, 1, '$2y$10$zhmzYROXqThpwMpaaVVTpeRM3DbkRcqiitXFOlpweE09iMmiS4rrC', 'LhnPoQiMlzIjbm8XBYdpWCAQeDViszCBrrCQ3hdoMRBHbCeH6XhQ45Btwnhg', '2020-03-26 06:23:52', '2020-05-01 02:30:59'),
(4, 'Dandre Olson Sr.', 'Crooks LLC', 'tgrafix95@gmail.com', '2020-03-26 06:23:52', '888.509.2767', '34230 Amira Meadow Suite 767\nBrakusfort, CO 48723-2282', 'Montana', 'SD', 'Bartellchester', '1978-01-17', 'uploads/profile_pic/default.png', 2, 1, 1, 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3hJLwmxHuC', '2020-03-26 06:23:52', '2020-05-20 11:43:03'),
(5, 'Dr. Daphney Dicki', 'Funk, Hills and McKenzie', 'garfield52@example.net', '2020-03-26 06:23:52', '1-855-250-9055', '36331 Swift Lights Apt. 792\nEast Krista, AZ 28058', 'Oklahoma', 'AK', 'New Aidenland', '2005-11-25', 'uploads/profile_pic/default.png', 2, 1, 1, 1, '$2y$10$zhmzYROXqThpwMpaaVVTpeRM3DbkRcqiitXFOlpweE09iMmiS4rrC', 'AtqaugOcit', '2020-03-26 06:23:52', '2020-04-28 14:24:53'),
(6, 'Esta Reynolds', 'DuBuque Ltd', 'orn.elsie@example.org', '2020-03-26 06:23:52', '(888) 502-6080', '655 Ramona Mall Suite 350\nFatimaland, AL 31929-8799', 'South Dakota', 'MD', 'Lake Tracemouth', '1989-12-11', 'uploads/profile_pic/default.png', 2, 1, 1, 1, '$2y$10$zhmzYROXqThpwMpaaVVTpeRM3DbkRcqiitXFOlpweE09iMmiS4rrC', 'AeCuxgH9V4', '2020-03-26 06:23:52', '2020-05-25 13:58:42'),
(7, 'Kayli Mertz', 'Lemke Ltd', 'jbechtelar@example.org', '2020-03-26 06:23:52', '844.529.7060', '92105 Ruecker Harbors\nChristinastad, MS 26111-4857', 'Alaska', 'KS', 'West Furman', '1998-02-06', 'uploads/profile_pic/default.png', 2, 1, 1, 1, '$2y$10$zhmzYROXqThpwMpaaVVTpeRM3DbkRcqiitXFOlpweE09iMmiS4rrC', '9xKIwrCjVO', '2020-03-26 06:23:52', '2020-05-26 02:40:49'),
(8, 'Dr. Junior Marvin II', 'Brakus, Borer and Larkin', 'kilback.anne@example.net', '2020-03-26 06:23:52', '(888) 468-5024', '4264 Kieran Brooks Suite 005\nNew Cortez, MI 86118', 'Arizona', 'MT', 'Christianburgh', '1974-10-21', 'uploads/profile_pic/default.png', 1, 1, 0, 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'oqAQBkh5ps', '2020-03-26 06:23:52', '2020-04-28 07:43:40'),
(9, 'Elva Kassulke', 'Gulgowski and Sons', 'hward@example.org', '2020-03-26 06:23:52', '1-866-561-3896', '78109 Hermann Ridge\nSouth Regan, HI 20442', 'New Mexico', 'CO', 'Hillburgh', '2017-08-15', 'uploads/profile_pic/default.png', 1, 1, 0, 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'JJLai6HDQb', '2020-03-26 06:23:52', '2020-04-28 08:15:41'),
(10, 'Miss Mertie Altenwerth Jr.', 'Wolff Group', 'langworth.moses@example.net', '2020-03-26 06:23:52', '(888) 692-6706', '80320 Hailie Ports\nMadalineville, IN 34418', 'South Carolina', 'TX', 'Kuhicview', '1976-12-27', 'uploads/profile_pic/default.png', 2, 1, 1, 1, '$2y$10$zhmzYROXqThpwMpaaVVTpeRM3DbkRcqiitXFOlpweE09iMmiS4rrC', 'xk0YVzc6lu', '2020-03-26 06:23:52', '2020-05-03 15:05:26'),
(11, 'Leann Ondricka', 'Waelchi-Stiedemann', 'padberg.frida@example.net', '2020-03-26 06:23:52', '888-350-1182', '856 Walter Prairie\nWest Juliaville, AK 98311-1810', 'Idaho', 'AK', 'Monicaborough', '1973-09-24', 'uploads/profile_pic/default.png', 1, 0, 0, 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'mKmXxmXq5A', '2020-03-26 06:23:52', '2020-04-28 08:15:47'),
(13, 'Prof. Marty Schulist II', 'Boyle-Aufderhar', 'pkerluke@example.org', '2020-03-26 06:23:52', '877-836-0861', '31871 Jarrett Burg Suite 446\nKarinabury, UT 26989-6543', 'Maine', 'KY', 'East Loyal', '2014-11-30', 'uploads/profile_pic/default.png', 2, 1, 1, 1, '$2y$10$zhmzYROXqThpwMpaaVVTpeRM3DbkRcqiitXFOlpweE09iMmiS4rrC', 'Arzt0V43kf', '2020-03-26 06:23:52', '2020-05-03 15:05:39'),
(14, 'Emilio McClure', 'Konopelski, Wilderman and Rohan', 'rice.isabella@example.org', '2020-03-26 06:23:52', '855.643.0110', '28820 Lehner Street Suite 824\nLake Lucienne, MS 74503-6876', 'New Mexico', 'MA', 'East Amani', '1990-05-29', 'uploads/profile_pic/default.png', 2, 1, 1, 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'BwMVtdCPqK', '2020-03-26 06:23:52', '2020-05-03 15:05:33'),
(15, 'Freeman Hammes', 'Friesen Group', 'lilyan.schumm@example.com', '2020-03-26 06:23:52', '877.437.0136', '214 Jayden Parkways Apt. 733\nUrielmouth, CO 23372-5090', 'South Carolina', 'MD', 'Gunnerton', '1989-03-19', 'uploads/profile_pic/default.png', 2, 0, 1, 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'hyy9mzbyHi', '2020-03-26 06:23:52', '2020-05-03 15:06:04'),
(16, 'Alexis Breitenberg', 'Considine, Emard and Pollich', 'abbott.mable@example.com', '2020-03-26 06:23:52', '1-800-364-0985', '5858 Willms Spur Apt. 615\nLynchport, CO 32582', 'South Carolina', 'AK', 'Treyfurt', '2004-01-03', 'uploads/profile_pic/default.png', 1, 1, 0, 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NXEZOTorF9', '2020-03-26 06:23:52', '2020-05-26 02:15:36'),
(17, 'Camren Mueller', 'Champlin-Hilpert', 'reynolds.shad@example.org', '2020-03-26 06:23:52', '(877) 460-2024', '7517 Rigoberto Shoals Apt. 060\nWest Joystad, WA 55616', 'Illinois', 'MO', 'Spinkaview', '2012-07-27', 'uploads/profile_pic/default.png', 2, 0, 1, 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'K4wQDPxTby', '2020-03-26 06:23:52', '2020-05-03 15:06:10'),
(18, 'Alana Rolfson', 'Feest, Gottlieb and Schneider', 'paxton40@example.net', '2020-03-26 06:23:52', '(800) 775-0136', '209 Marquardt Coves\nNew Enahaven, VT 21551', 'Massachusetts', 'OH', 'New Bricechester', '1998-09-25', 'uploads/profile_pic/default.png', 1, 0, 0, 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HqCMvHPjdu', '2020-03-26 06:23:52', '2020-04-28 08:16:15'),
(19, 'Dr. Dorcas Lynch', 'Fisher, Stiedemann and Ondricka', 'hagenes.delphine@example.net', '2020-03-26 06:23:52', '855.507.3945', '22879 Runte Views Apt. 951\nNikolausmouth, VT 37885-0796', 'Wisconsin', 'MO', 'Alisonport', '1996-05-16', 'uploads/profile_pic/default.png', 1, 0, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'BjtynqqKVn', '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(21, 'Randy Stanton', 'Paucek-Murray', 'raven.okuneva@example.net', '2020-03-26 06:23:52', '(888) 356-5502', '2896 Zoila Lodge Suite 479\nEast Dannychester, MN 25658-2420', 'Iowa', 'WA', 'Boganhaven', '2008-06-03', 'uploads/profile_pic/default.png', 2, 0, 1, 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ov13yRdqEp', '2020-03-26 06:23:52', '2020-05-03 15:06:22'),
(22, 'Karley Terry', 'Kuhic, Schmeler and Littel', 'manuel.ebert@example.net', '2020-03-26 06:23:52', '877-536-7961', '1887 Feeney Run Apt. 438\nRowenaport, NJ 68148-6280', 'Ohio', 'NY', 'East Reece', '1986-09-03', 'uploads/profile_pic/default.png', 1, 0, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'zaW411a5vI', '2020-03-26 06:23:52', '2020-05-20 00:39:32'),
(23, 'Dr. Lewis Gislason DVM', 'Nikolaus Inc', 'denis89@example.org', '2020-03-26 06:23:52', '(877) 856-9538', '255 Carter Corners Suite 007\nEast Deangelo, ND 77152-7074', 'North Carolina', 'HI', 'Lockmanland', '1982-01-29', 'uploads/profile_pic/default.png', 1, 1, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'wEgq5XIjAk', '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(24, 'Janae Kirlin', 'Gulgowski-Kemmer', 'leopoldo45@example.net', '2020-03-26 06:23:52', '844.563.2202', '951 Blanda Mission Apt. 475\nNorth Valerietown, MO 28879', 'Virginia', 'MI', 'New Gregstad', '1980-09-07', 'uploads/profile_pic/default.png', 2, 1, 1, 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'BxeHb4Mj3N', '2020-03-26 06:23:52', '2020-05-03 15:06:33'),
(25, 'Aracely Stroman', 'Bahringer-Gleason', 'csenger@example.com', '2020-03-26 06:23:52', '888-949-3797', '892 Nitzsche Rest\nNorth Delaney, AR 97987', 'New Mexico', 'WI', 'West Stacy', '2015-12-29', 'uploads/profile_pic/default.png', 2, 0, 1, 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '9RVAzaxJMD', '2020-03-26 06:23:52', '2020-05-03 15:06:43'),
(26, 'Bella King Sr.', 'Koch-Swift', 'whitney30@example.org', '2020-03-26 06:23:52', '1-844-369-6977', '2448 Frami Lodge Apt. 440\nMcKenziestad, ME 48048', 'Tennessee', 'OK', 'South Nathanielside', '2000-07-11', 'uploads/profile_pic/default.png', 1, 0, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'QilzWOHZsh', '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(28, 'Katheryn Stracke', 'Brown Group', 'twila21@example.com', '2020-03-26 06:23:52', '1-877-921-6238', '6026 Brenden Burgs\nMcCulloughbury, PA 56373-6140', 'Maryland', 'NJ', 'West Sigridville', '1972-08-15', 'uploads/profile_pic/default.png', 2, 1, 1, 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5wdGclPTpx', '2020-03-26 06:23:52', '2020-05-26 04:08:59'),
(29, 'Dr. Beaulah Gulgowski I', 'Bailey, Murphy and Kuvalis', 'sporer.leonel@example.net', '2020-03-26 06:23:52', '1-866-842-7979', '469 Fisher Port Apt. 237\nEast Cyrilmouth, WA 30880', 'North Dakota', 'NC', 'Lake Mariam', '2007-10-27', 'uploads/profile_pic/default.png', 1, 0, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'S1PoZxDuo5', '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(30, 'Jordi Volkman DDS', 'Hoeger, Thompson and Schuster', 'johanna.bruen@example.net', '2020-03-26 06:23:52', '1-888-217-8342', '3549 Ankunding Parkway\nNew Jordiville, MS 80859', 'Florida', 'WA', 'Hackettside', '1975-04-17', 'uploads/profile_pic/default.png', 1, 0, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'bKLtqzKDFU', '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(31, 'Dr. Jude Oberbrunner', 'Kreiger-Koss', 'alexie.greenfelder@example.com', '2020-03-26 06:23:52', '1-855-719-6485', '93388 Weissnat Parkway Apt. 682\nFinnberg, MS 14443-7945', 'Nebraska', 'NM', 'New Rodrigomouth', '1993-01-22', 'uploads/profile_pic/default.png', 2, 0, 0, 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'bFWWVemJDo', '2020-03-26 06:23:52', '2020-04-28 08:16:02'),
(32, 'Alec Will', 'Cummings, Kling and Barton', 'xmarvin@example.com', '2020-03-26 06:23:52', '(866) 623-9301', '35549 Gennaro Forest Suite 584\nTravisfurt, OK 38156-4137', 'Georgia', 'IA', 'East Layla', '1989-09-12', 'uploads/profile_pic/default.png', 2, 1, 0, 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '95cAZW9509', '2020-03-26 06:23:52', '2020-04-28 08:16:02'),
(33, 'Lane Nolan', 'Farrell Ltd', 'fheaney@example.net', '2020-03-26 06:23:52', '800.210.9453', '29946 Adolf Well\nBrittanyside, MI 56904-3808', 'California', 'MS', 'Maggiomouth', '2012-11-28', 'uploads/profile_pic/default.png', 2, 0, 0, 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xsd1DaeQQA', '2020-03-26 06:23:52', '2020-04-28 08:16:08'),
(34, 'Jameson Gerhold', 'Halvorson Ltd', 'elwyn.buckridge@example.com', '2020-03-26 06:23:52', '1-877-391-5053', '5135 Fadel Estates Apt. 578\nSawaynfort, WA 67484', 'Tennessee', 'IN', 'North Edwinland', '2004-05-03', 'uploads/profile_pic/default.png', 2, 1, 0, 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'TvfzdNITeJ', '2020-03-26 06:23:52', '2020-04-28 08:16:08'),
(35, 'Randy Kertzmann', 'Medhurst-Rogahn', 'rutherford.remington@example.com', '2020-03-26 06:23:52', '(888) 896-1196', '218 Thelma Trail Apt. 316\nVandervortview, TN 38461', 'Rhode Island', 'NM', 'Lake Ambershire', '1981-10-15', 'uploads/profile_pic/default.png', 1, 0, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vQovt7ebOW', '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(36, 'Lukas Frami', 'Dibbert, Dietrich and DuBuque', 'reginald59@example.net', '2020-03-26 06:23:52', '844-531-9996', '82042 Fritsch Ways\nKristianshire, NJ 05346-7632', 'Vermont', 'CT', 'East Zelmabury', '2011-05-06', 'uploads/profile_pic/default.png', 1, 1, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'KNLutGh7gd', '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(37, 'Mr. Seamus Kreiger Sr.', 'McLaughlin LLC', 'ytreutel@example.com', '2020-03-26 06:23:52', '1-844-221-4481', '7272 Mueller Court Apt. 853\nNorth Bo, MD 40252-8417', 'Indiana', 'NY', 'Charlottehaven', '1994-03-05', 'uploads/profile_pic/default.png', 2, 0, 0, 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'IOLjQcnlu7', '2020-03-26 06:23:52', '2020-04-28 08:16:15'),
(38, 'Lenora Boyle', 'Runte Ltd', 'malinda.stiedemann@example.org', '2020-03-26 06:23:52', '(866) 481-3489', '10722 Vidal Divide Apt. 508\nSouth Sally, NJ 77791', 'New York', 'VA', 'Lancemouth', '1972-04-17', 'uploads/profile_pic/default.png', 1, 0, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7r7NW852fY', '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(39, 'Adriana Weimann', 'Weissnat Ltd', 'flossie.lindgren@example.com', '2020-03-26 06:23:52', '844.521.1275', '52902 Alfred Club Suite 957\nBoyleland, TN 13598', 'Delaware', 'VT', 'Rosaleebury', '2018-12-11', 'uploads/profile_pic/default.png', 1, 0, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'okOuuiFPDV', '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(40, 'Zora Pacocha', 'Braun, Schmitt and Wilkinson', 'cummings.mikayla@example.net', '2020-03-26 06:23:52', '(800) 243-1083', '8733 Homenick Village Suite 901\nVolkmanshire, AK 04351', 'West Virginia', 'TN', 'South Kalliemouth', '1987-12-17', 'uploads/profile_pic/default.png', 2, 1, 0, 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'tyfJY8XUds', '2020-03-26 06:23:52', '2020-04-28 08:16:15'),
(41, 'Jude Schmitt', 'Cruickshank-Bosco', 'ulices.grady@example.net', '2020-03-26 06:23:52', '866-949-3392', '50315 Werner Wall\nSouth Sebastian, MD 10563-0567', 'North Carolina', 'UT', 'South Constance', '1983-02-28', 'uploads/profile_pic/default.png', 2, 0, 0, 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'BdWr8I5dxi', '2020-03-26 06:23:52', '2020-04-28 08:16:15'),
(43, 'Gilbert Huels', 'Wuckert-Goyette', 'gottlieb.anna@example.net', '2020-03-26 06:23:52', '877-337-7131', '80673 Stroman Crossing Suite 656\nSchummberg, LA 04606', 'Indiana', 'AK', 'Waelchifort', '1970-05-30', 'uploads/profile_pic/default.png', 1, 0, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'TrLylQhbxY', '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(44, 'Bobby Wilderman', 'Ebert Ltd', 'fletcher34@example.net', '2020-03-26 06:23:52', '800-553-2965', '268 Bogisich Freeway\nWelchshire, MI 08314', 'Pennsylvania', 'HI', 'New Beau', '1981-05-06', 'uploads/profile_pic/default.png', 1, 1, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HECGOKmN2U', '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(45, 'Sadye Yost', 'Schamberger, Hettinger and Lang', 'stanton.vena@example.net', '2020-03-26 06:23:52', '877-626-2485', '15256 Carter Trail Apt. 256\nFeestfurt, WV 12434-3960', 'Alaska', 'NJ', 'Kassulketown', '1990-11-21', 'uploads/profile_pic/default.png', 2, 1, 0, 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HhbGE6aulY', '2020-03-26 06:23:52', '2020-05-20 11:43:35'),
(46, 'Lawrence Dare', 'Zboncak, Gleason and McCullough', 'emie06@example.net', '2020-03-26 06:23:52', '877.919.9993', '650 Effertz Mount Suite 588\nPort Tellybury, SC 21810', 'Maryland', 'ND', 'South Jaydashire', '2009-10-11', 'uploads/profile_pic/default.png', 1, 1, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ecPTmscNYv', '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(47, 'Ms. Isabel Runolfsson', 'Gleichner-Wilkinson', 'kebert@example.net', '2020-03-26 06:23:52', '800-780-7522', '87733 Bins Fords\nLockmantown, AK 58362', 'New Hampshire', 'KS', 'Port Reymundoview', '2007-03-13', 'uploads/profile_pic/default.png', 1, 0, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '12vbCGwLj8', '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(48, 'Dr. Faustino Lehner', 'Kessler-Oberbrunner', 'kskiles@example.com', '2020-03-26 06:23:52', '800-677-9922', '761 Lamar Inlet Apt. 581\nLake Ericka, MT 83182', 'North Dakota', 'SD', 'New Ezequiel', '1995-12-02', 'uploads/profile_pic/default.png', 1, 1, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ALEUHYPMgn', '2020-03-26 06:23:52', '2020-03-26 06:23:52'),
(49, 'Johann Jacobson', 'Denesik Inc', 'cleo.wisozk@example.com', '2020-03-26 06:23:52', '1-866-765-8832', '9321 Donnelly Canyon Apt. 965\nPort Tomas, NM 67429-1198', 'Utah', 'ME', 'Port Ruth', '2013-05-12', 'uploads/profile_pic/default.png', 2, 1, 0, 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ZpTRjTDxAZ', '2020-03-26 06:23:52', '2020-05-20 11:43:35'),
(50, 'Prof. Giovanni Blanda I', 'Grady, Donnelly and Weimann', 'conroy.chadd@example.net', '2020-03-26 06:23:52', '1-800-832-2135', '711 Dylan Plaza Suite 972\nSouth Lesterton, OR 14857', 'Oregon', 'NH', 'Lake Traceyville', '1979-11-12', 'uploads/profile_pic/default.png', 2, 1, 0, 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ovZq7bak6m', '2020-03-26 06:23:52', '2020-05-20 11:43:35'),
(51, 'Prof. Cecil Toy', 'Crooks PLC', 'ruthie.klein@example.net', '2020-05-18 06:50:49', '855-491-6091', '304 Heaney Haven Suite 186\nSouth Isadoremouth, OK 84496-1025', 'New Mexico', 'NC', 'Eunaside', '2002-04-11', 'uploads/profile_pic/default.png', 2, 1, 0, 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'OlRHQ2Tc6P', '2020-05-18 06:50:49', '2020-05-26 02:40:49'),
(52, 'Matilda Effertz', 'Ziemann, Stamm and Cartwright', 'farrell.gaetano@example.net', '2020-05-18 06:50:49', '(855) 568-6153', '74676 Weimann Square\nEmeliaborough, IA 01724-2432', 'New York', 'NJ', 'East Hubert', '2018-12-02', 'uploads/profile_pic/default.png', 1, 1, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qxsPZyU46Y', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(53, 'Harmon Krajcik', 'Tillman-King', 'rath.laury@example.com', '2020-05-18 06:50:49', '855-943-4654', '2635 Wava Loop\nWest Magalichester, AK 15801-4182', 'Utah', 'NV', 'Pfannerstillburgh', '2009-11-07', 'uploads/profile_pic/default.png', 2, 1, 0, 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'sWC4DdJZY0', '2020-05-18 06:50:49', '2020-05-26 04:10:13'),
(54, 'Erik Cassin', 'Barton-Reichel', 'jermain.stroman@example.net', '2020-05-18 06:50:49', '855.858.2978', '829 Lindsay Unions\nKulasfort, KS 48128-0639', 'Washington', 'SC', 'Schinnermouth', '2008-12-19', 'uploads/profile_pic/default.png', 1, 1, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5d2N50RGKS', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(55, 'Nella Bayer', 'Larkin, Connelly and Ruecker', 'vfranecki@example.com', '2020-05-18 06:50:49', '(877) 230-3086', '86699 Wintheiser Trafficway Apt. 911\nLake Brittanyborough, MT 99768-8813', 'New York', 'AL', 'South Reed', '2017-07-18', 'uploads/profile_pic/default.png', 2, 0, 0, 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Du03lbA3Ht', '2020-05-18 06:50:49', '2020-05-26 04:10:13'),
(56, 'Dr. Rebeka Becker', 'Carroll, McGlynn and Gaylord', 'daugherty.enola@example.net', '2020-05-18 06:50:49', '1-844-968-6924', '280 Ernestina Mill Apt. 877\nDemetriusburgh, WV 90394-7264', 'Louisiana', 'KY', 'South Colleen', '2003-02-11', 'uploads/profile_pic/default.png', 2, 0, 0, 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'zVVQtkg7R1', '2020-05-18 06:50:49', '2020-05-26 04:10:13'),
(57, 'Tamia Dietrich', 'Nitzsche, Bailey and Quitzon', 'vandervort.lindsay@example.com', '2020-05-18 06:50:49', '1-844-255-6084', '6535 Block Terrace Apt. 243\nPort Jennifer, ID 70728-9139', 'Iowa', 'NE', 'Camrenstad', '1976-05-26', 'uploads/profile_pic/default.png', 1, 0, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'fCvPMFlYaG', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(58, 'Lacey O\'Hara', 'Schmeler-Abbott', 'kris.letha@example.net', '2020-05-18 06:50:49', '1-855-737-8145', '2824 Dooley Land\nMarciamouth, KS 11324', 'Mississippi', 'IA', 'West Nettiefort', '2018-03-12', 'uploads/profile_pic/default.png', 2, 1, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'D5PQkrUxR4', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(59, 'Helena Zboncak', 'Kutch-Larkin', 'predovic.mariela@example.net', '2020-05-18 06:50:49', '(866) 805-7927', '122 Crona Estate Suite 670\nLake Rhiannahaven, CA 95315-6178', 'Pennsylvania', 'MD', 'East Chetville', '1984-09-07', 'uploads/profile_pic/default.png', 1, 1, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'VFpXIZqwiF', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(60, 'Elda Bradtke', 'Marvin-Herzog', 'allene.klein@example.com', '2020-05-18 06:50:49', '1-877-680-0564', '8924 Volkman Tunnel Apt. 153\nEstellchester, AL 36499', 'New Mexico', 'NY', 'Flatleyland', '1980-03-17', 'uploads/profile_pic/default.png', 1, 1, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'beK88MsxK1', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(61, 'Mrs. Jackeline Hackett', 'Luettgen, Kertzmann and Gorczany', 'nkuhic@example.com', '2020-05-18 06:50:49', '844.282.7428', '6372 Murazik Tunnel Apt. 804\nWest Margarita, AR 92622', 'Vermont', 'AK', 'New Robb', '1972-02-22', 'uploads/profile_pic/default.png', 2, 0, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'pHchluhp0x', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(62, 'Christine Dare MD', 'Osinski LLC', 'geovanny06@example.net', '2020-05-18 06:50:49', '888.696.0216', '72681 Pfannerstill Path Apt. 941\nToniburgh, DC 79910', 'Arizona', 'HI', 'Joaquinburgh', '1971-08-11', 'uploads/profile_pic/default.png', 1, 0, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'eT3NkHA2lV', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(63, 'Prof. Rosario Turcotte', 'Morar-Gaylord', 'kohler.vicenta@example.org', '2020-05-18 06:50:49', '844-552-6923', '1505 Cortez Gateway Suite 272\nLebsacktown, RI 66799-1235', 'Arkansas', 'WY', 'East Camrenhaven', '1991-12-15', 'uploads/profile_pic/default.png', 2, 0, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8GDDdsMZ8m', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(64, 'Pinkie Kertzmann Sr.', 'Ebert LLC', 'wyatt09@example.net', '2020-05-18 06:50:49', '800.703.4013', '1359 Arely Grove Suite 001\nNew Mozellfurt, TN 51794', 'Alabama', 'AK', 'West Kaylafurt', '1982-07-28', 'uploads/profile_pic/default.png', 1, 0, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'PznGDUKHpK', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(65, 'Jose Weber', 'Hintz LLC', 'casey.lindgren@example.net', '2020-05-18 06:50:49', '888.897.9340', '432 Arianna Village Apt. 557\nLennieville, MA 49287', 'Minnesota', 'VA', 'New Tremaineburgh', '1998-02-25', 'uploads/profile_pic/default.png', 2, 1, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1EyV55U2A2', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(66, 'Dr. Ruben Hickle', 'Gibson-Kulas', 'khuel@example.com', '2020-05-18 06:50:49', '844.316.8228', '31327 Grimes Ford Apt. 433\nSouth Haileetown, MS 86737-4080', 'Colorado', 'OH', 'Buckbury', '2000-11-02', 'uploads/profile_pic/default.png', 1, 0, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'KW6FGvBcnE', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(67, 'Marlene Howell DDS', 'Schowalter-Mitchell', 'dare.emory@example.net', '2020-05-18 06:50:49', '(866) 910-8570', '225 Reichel Cape Suite 387\nWest Bethany, GA 06606-9579', 'North Carolina', 'SD', 'Nasirburgh', '1982-04-15', 'uploads/profile_pic/default.png', 1, 0, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'iDP7arsMIg', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(68, 'Carleton Renner', 'Reichert-Weissnat', 'durgan.leanne@example.org', '2020-05-18 06:50:49', '(800) 290-4018', '4470 Novella Turnpike\nPort Hannahbury, SD 25735', 'Nevada', 'CT', 'Malvinaborough', '1991-09-02', 'uploads/profile_pic/default.png', 2, 1, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'UFeSrY1fVL', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(69, 'Elinore Monahan II', 'Conroy LLC', 'emilia.stracke@example.org', '2020-05-18 06:50:49', '1-866-695-7787', '889 Kling Way Suite 515\nCruickshankshire, NH 53274', 'Iowa', 'IL', 'South Cristinaport', '2000-03-23', 'uploads/profile_pic/default.png', 2, 1, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '0V3Fr271JV', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(70, 'Steve Schimmel DVM', 'Barton, Romaguera and Kuvalis', 'kaley.bins@example.net', '2020-05-18 06:50:49', '1-888-837-5259', '89509 Nikolaus Lane Apt. 017\nHipolitomouth, NY 95372', 'Utah', 'VT', 'Josefinastad', '2006-03-29', 'uploads/profile_pic/default.png', 1, 1, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'BDRDPnl8gR', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(71, 'Mr. Ramiro Cole V', 'Ryan-Dibbert', 'noe.ullrich@example.net', '2020-05-18 06:50:49', '877-895-1994', '371 Cronin Coves\nLake Jaquanside, CA 63776', 'West Virginia', 'MI', 'Bechtelarburgh', '2010-10-25', 'uploads/profile_pic/default.png', 2, 1, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'boLIuPINIU', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(72, 'Elmira Terry', 'Padberg, Treutel and Champlin', 'zrutherford@example.com', '2020-05-18 06:50:49', '1-800-618-9299', '98962 Maggio Gateway\nNorth Carey, PA 16552', 'Arizona', 'AL', 'South Amirland', '1980-12-20', 'uploads/profile_pic/default.png', 2, 1, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HqGRYaaVwG', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(73, 'Cale Halvorson', 'Gusikowski, Hegmann and Rutherford', 'elian71@example.com', '2020-05-18 06:50:49', '(855) 764-4656', '46424 Marks Garden Apt. 309\nPort Malinda, SC 01480', 'Idaho', 'MN', 'West Jarred', '1979-02-09', 'uploads/profile_pic/default.png', 2, 1, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Sz6pnVMjMe', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(74, 'Lonzo Kassulke Sr.', 'Cartwright, Kling and Sawayn', 'weber.ike@example.net', '2020-05-18 06:50:49', '(888) 859-8711', '88315 Schamberger Burg\nLemkemouth, WY 32587', 'Mississippi', 'TN', 'Lesliemouth', '2010-03-10', 'uploads/profile_pic/default.png', 2, 1, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7aVb3KFKCC', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(75, 'Elyssa Schmitt', 'Greenholt Inc', 'myron55@example.com', '2020-05-18 06:50:49', '(800) 710-8907', '59903 Price Pines Apt. 096\nEast Eltonmouth, CO 68727-7889', 'Rhode Island', 'KS', 'Dejuanmouth', '1979-06-18', 'uploads/profile_pic/default.png', 1, 1, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Y2WRsn25Mv', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(76, 'Lola Bauch', 'Ebert-Kautzer', 'lmoen@example.com', '2020-05-18 06:50:49', '866.758.6772', '7070 Conroy Shoals Suite 875\nCaliberg, ME 62953', 'Louisiana', 'KS', 'Stromanfort', '1977-06-05', 'uploads/profile_pic/default.png', 1, 0, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'J3TPfLUnSk', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(77, 'Gregoria Christiansen Sr.', 'Armstrong, Ankunding and Carroll', 'sdavis@example.net', '2020-05-18 06:50:49', '877-954-7965', '29555 Leuschke Meadows\nAdonisberg, MO 38166-2709', 'Vermont', 'OH', 'Port Pete', '2010-08-20', 'uploads/profile_pic/default.png', 1, 1, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4SexKadD61', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(78, 'Viviane Johnston', 'Hane, Bechtelar and Murray', 'grady42@example.org', '2020-05-18 06:50:49', '(800) 544-8308', '85139 Dach Run Suite 836\nNorth Vivaport, VA 45995', 'Vermont', 'MN', 'South Pablo', '2001-11-12', 'uploads/profile_pic/default.png', 2, 1, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'FL7I8cfNow', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(79, 'Dr. Kattie Langworth II', 'Becker, Bergstrom and Wiegand', 'hilma.dicki@example.com', '2020-05-18 06:50:49', '877-357-4940', '997 Austyn Camp\nEast Theafurt, DE 44364', 'Texas', 'KS', 'Einarborough', '1998-08-06', 'uploads/profile_pic/default.png', 2, 1, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'TfZntXVg9I', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(80, 'Andreane Champlin', 'Bartell-Stokes', 'destany57@example.net', '2020-05-18 06:50:49', '800.600.3664', '3280 Gaylord Village\nKrisberg, OK 01080', 'Nevada', 'KY', 'New Katlyn', '1976-09-01', 'uploads/profile_pic/default.png', 1, 1, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'MsCv2PyFFk', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(81, 'Vivianne Schiller', 'D\'Amore, Nikolaus and Rempel', 'adriel.williamson@example.com', '2020-05-18 06:50:49', '1-877-567-9003', '12164 Electa Wall\nHarberstad, MI 66878', 'New York', 'OK', 'West Mason', '2019-02-02', 'uploads/profile_pic/default.png', 1, 0, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Lre2Lbg9Y4', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(82, 'Josephine Konopelski', 'Hilpert, Koepp and Rohan', 'okon.jarod@example.org', '2020-05-18 06:50:49', '866-239-7061', '52761 Lilliana Lane Suite 552\nPort Austyn, MD 25643', 'Maine', 'NJ', 'Kaileeburgh', '2002-01-20', 'uploads/profile_pic/default.png', 2, 1, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gkZ56QH5Pk', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(83, 'Devan Abernathy MD', 'Ankunding LLC', 'mclaughlin.axel@example.net', '2020-05-18 06:50:49', '1-800-416-4672', '71407 Weimann Cape Apt. 302\nEast Aubree, MD 17203-1697', 'Maine', 'OK', 'East Mazie', '2003-12-06', 'uploads/profile_pic/default.png', 2, 1, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'y2cLx3KbJq', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(84, 'Ervin Ullrich', 'Franecki Ltd', 'maynard87@example.com', '2020-05-18 06:50:49', '844-541-5929', '90143 Bartholome Vista\nElfriedashire, OK 82845', 'Utah', 'NE', 'South Cecilia', '2014-08-02', 'uploads/profile_pic/default.png', 2, 0, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'P4gQrGP6Af', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(85, 'Sally Wiegand', 'Torp and Sons', 'kertzmann.sydni@example.org', '2020-05-18 06:50:49', '(855) 927-8740', '6999 Schuster Mountain\nJaidafurt, OH 91908', 'Montana', 'HI', 'Considineburgh', '1992-09-11', 'uploads/profile_pic/default.png', 2, 1, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'A3LxuB99Xz', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(86, 'Winona Auer', 'Stehr, Sawayn and Ziemann', 'edwardo.ankunding@example.net', '2020-05-18 06:50:49', '1-800-395-7887', '338 Kassulke Inlet Apt. 669\nNorth Destinfort, NE 83307-0655', 'Louisiana', 'MT', 'Hegmannland', '2012-05-27', 'uploads/profile_pic/default.png', 2, 1, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4JCGvs35JH', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(87, 'Emory Kirlin', 'O\'Keefe, Zboncak and Brekke', 'whermiston@example.org', '2020-05-18 06:50:49', '1-800-626-7299', '184 Kian Stravenue Apt. 870\nWisokyville, OK 78839', 'Idaho', 'ID', 'Bertside', '2000-03-26', 'uploads/profile_pic/default.png', 1, 0, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'lw74qcpTN8', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(88, 'Cecilia Osinski V', 'Dooley, Upton and Bogisich', 'gretchen.keebler@example.org', '2020-05-18 06:50:49', '1-866-827-7829', '506 Brown Forge\nNorth Dougland, MI 72061-0148', 'Wyoming', 'KS', 'Stokesburgh', '1998-09-19', 'uploads/profile_pic/default.png', 1, 0, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'p8umkZMsbq', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(89, 'Prof. Tomasa Bruen', 'Spinka Ltd', 'vonrueden.winfield@example.net', '2020-05-18 06:50:49', '866-377-3622', '745 Patience Shores\nRunolfsdottirland, MO 80995', 'Illinois', 'NE', 'Michelberg', '2009-03-05', 'uploads/profile_pic/default.png', 2, 0, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Ut5aovpOfB', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(90, 'Prof. Domenica Hettinger', 'Tremblay, Hammes and Tillman', 'pdare@example.com', '2020-05-18 06:50:49', '(844) 765-1358', '46644 Taryn Burgs\nNorth Shania, OR 62974', 'Indiana', 'FL', 'North Eladio', '1991-12-28', 'uploads/profile_pic/default.png', 2, 0, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'jDBnAMkBbB', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(91, 'Sonia Koss', 'Greenfelder-O\'Kon', 'dax.grant@example.net', '2020-05-18 06:50:49', '1-877-236-0883', '88267 Leo Bypass Suite 520\nNorth Christelleberg, NH 00789-4336', 'Montana', 'TX', 'Lake Khalid', '2018-10-08', 'uploads/profile_pic/default.png', 2, 0, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HJfScUo2k1', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(92, 'Willis Kling', 'Weber Group', 'maye.jerde@example.org', '2020-05-18 06:50:49', '866.261.8591', '3771 Zack Island Suite 738\nNorth Murl, FL 44686', 'Arkansas', 'NC', 'Port Candelario', '1988-09-08', 'uploads/profile_pic/default.png', 1, 0, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Njy5HkfxQv', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(93, 'Gia Oberbrunner', 'Mills-Howell', 'bradtke.rebeka@example.net', '2020-05-18 06:50:49', '877.669.9616', '3151 Hugh Lane Suite 192\nNicolasfort, WI 41905-8708', 'Missouri', 'KS', 'Gislasonton', '1978-06-27', 'uploads/profile_pic/default.png', 1, 1, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'VOoSTL5Mhp', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(94, 'Belle Nitzsche I', 'Emard-Towne', 'volkman.stewart@example.net', '2020-05-18 06:50:49', '800.409.7914', '17509 Lucas Dale\nGerholdchester, NY 08163-9092', 'New Hampshire', 'RI', 'North Vidaborough', '1970-01-14', 'uploads/profile_pic/default.png', 2, 1, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'BIamrdA9ee', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(95, 'Gwen Swift', 'Little Inc', 'west.alexandrine@example.net', '2020-05-18 06:50:49', '800-827-0081', '38703 Effertz Motorway\nJudsonmouth, ME 99757', 'Arkansas', 'MI', 'Lubowitzville', '2013-04-09', 'uploads/profile_pic/default.png', 2, 1, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5UySiaO7I8', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(96, 'Mr. Ruben Bechtelar', 'Pagac-Streich', 'von.ariane@example.com', '2020-05-18 06:50:49', '(844) 744-8059', '32678 Oberbrunner Islands Suite 742\nLailaberg, CO 78764', 'Wisconsin', 'MO', 'South Forest', '1987-05-03', 'uploads/profile_pic/default.png', 2, 1, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'bEDZbBbffu', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(97, 'Demarcus Williamson Jr.', 'Stehr-Predovic', 'goodwin.shyanne@example.com', '2020-05-18 06:50:49', '1-866-201-5641', '4152 Morissette Park\nWest Irwin, ND 04516', 'Idaho', 'AL', 'Romaguerahaven', '1972-10-18', 'uploads/profile_pic/default.png', 2, 0, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Efd45Uug9Q', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(98, 'Jettie Rodriguez DDS', 'Paucek-O\'Conner', 'ryleigh.heaney@example.org', '2020-05-18 06:50:49', '844.801.1202', '42923 Lauryn Dam Suite 925\nNorth Hollie, PA 08727-5661', 'Ohio', 'ND', 'New Vernie', '2005-05-17', 'uploads/profile_pic/default.png', 1, 0, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Kg4xlHyOMK', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(99, 'Reece Spencer', 'Schiller Group', 'nellie.hickle@example.com', '2020-05-18 06:50:49', '844-227-0060', '2920 Letha Mount Apt. 790\nLake Dusty, WI 84366', 'Maryland', 'DE', 'Lake Loyce', '1979-06-02', 'uploads/profile_pic/default.png', 2, 0, 0, 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'PcbaKpDZDp', '2020-05-18 06:50:49', '2020-05-18 06:50:49'),
(103, 'zzzzzz', NULL, 'kavindutheekshanasadasd@gmail.com', NULL, '0715421423', 'No-95,Theekshana,Wakamulla,hakuruwela', 'Southern', 'Hambanthota', 'Weeraketiya', '2020-05-12', '/uploads/profile_pic/default.png', 1, 1, 0, 0, '$2y$10$NJCKyRwCbnoKylm0uHjbmecxuYvh0Q0B/8nKtxsk1Ux0glNSPBqou', NULL, '2020-05-26 04:06:11', '2020-05-26 04:06:11');

-- --------------------------------------------------------

--
-- Table structure for table `verifications`
--

CREATE TABLE `verifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verifications`
--

INSERT INTO `verifications` (`id`, `email`, `code`, `status`, `created_at`, `updated_at`) VALUES
(1, 'kavindutheekshana@gmail.com', '156439', 0, '2020-04-24 04:45:02', '2020-04-24 04:45:02'),
(2, 'kavindutheekshana@gmail.com', '347263', 0, '2020-04-24 04:45:44', '2020-04-24 04:45:44'),
(3, 'kavindutheekshana@gmail.com', '286202', 0, '2020-04-24 04:46:54', '2020-04-24 04:46:54'),
(4, 'kavindutheekshana@gmail.com', '868224', 0, '2020-04-24 04:48:18', '2020-04-24 04:48:18'),
(5, 'kavindutheekshana@gmail.com', '694263', 0, '2020-04-24 05:34:36', '2020-04-24 05:34:36'),
(6, 'kavindutheekshana@gmail.com', '168660', 0, '2020-04-24 05:35:47', '2020-04-24 05:35:47'),
(7, 'kavindutheekshana@gmail.com', '704493', 0, '2020-04-24 05:47:07', '2020-04-24 05:47:07'),
(8, 'kavindutheekshana@gmail.com', '521395', 0, '2020-04-24 05:55:13', '2020-04-24 05:55:13'),
(9, 'kavindutheekshana@gmail.com', '285253', 0, '2020-04-24 05:56:30', '2020-04-24 05:56:30'),
(10, 'kavindutheekshana@gmail.com', '184893', 0, '2020-04-24 05:58:18', '2020-04-24 05:58:18'),
(11, 'kavindutheekshana@gmail.com', '803626', 0, '2020-04-24 06:02:23', '2020-04-24 06:02:23'),
(12, 'kavindutheekshana@gmail.com', '946508', 0, '2020-04-24 08:00:13', '2020-04-24 08:00:13'),
(13, 'kavindutheekshana@gmail.com', '195405', 0, '2020-04-24 08:02:07', '2020-04-24 08:02:07'),
(14, 'kavindutheekshana@gmail.com', '711659', 0, '2020-04-24 08:03:57', '2020-04-24 08:03:57'),
(15, 'kavindutheekshana@gmail.com', '831951', 0, '2020-04-24 08:27:04', '2020-04-24 08:27:04'),
(16, 'kavindutheekshana@gmail.com', '878709', 0, '2020-04-24 08:29:25', '2020-04-24 08:29:25'),
(17, 'kavindutheekshanasels@gmail.com', '289098', 0, '2020-05-01 02:20:10', '2020-05-01 02:20:10'),
(18, 'tgrafix95@gmail.com', '999421', 0, '2020-05-25 13:07:59', '2020-05-25 13:07:59'),
(19, 'tgrafix95@gmail.com', '799341', 0, '2020-05-25 13:08:47', '2020-05-25 13:08:47'),
(20, 'tgrafix95@gmail.com', '846104', 0, '2020-05-26 01:19:25', '2020-05-26 01:19:25'),
(21, 'tgrafix95@gmail.com', '511735', 0, '2020-05-26 01:21:32', '2020-05-26 01:21:32'),
(22, 'tgrafix95@gmail.com', '425502', 0, '2020-05-26 04:16:06', '2020-05-26 04:16:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendences`
--
ALTER TABLE `attendences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_groups`
--
ALTER TABLE `customer_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_locations`
--
ALTER TABLE `customer_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daily_routes`
--
ALTER TABLE `daily_routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `verifications`
--
ALTER TABLE `verifications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendences`
--
ALTER TABLE `attendences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer_groups`
--
ALTER TABLE `customer_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `customer_locations`
--
ALTER TABLE `customer_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `daily_routes`
--
ALTER TABLE `daily_routes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `verifications`
--
ALTER TABLE `verifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
