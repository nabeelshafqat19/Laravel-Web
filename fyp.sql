-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 07, 2023 at 06:40 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`, `category_id`) VALUES
(6, 'Normal', 'normal', 0, '2023-03-13 10:28:18', '2023-03-13 10:28:18', 7),
(7, 'Good', 'good', 0, '2023-03-13 10:28:54', '2023-03-13 10:28:54', 7),
(8, 'Luxury', 'luxury', 0, '2023-03-13 10:29:32', '2023-03-13 10:29:32', 7),
(9, 'Normal', 'normal', 0, '2023-03-13 10:31:45', '2023-03-13 10:31:45', 8),
(10, 'Good', 'good', 0, '2023-03-13 10:32:01', '2023-03-13 10:32:01', 8),
(11, 'Luxury', 'luxury', 0, '2023-03-13 10:32:16', '2023-03-13 10:32:16', 8),
(12, 'Normal', 'normal', 0, '2023-03-13 10:33:17', '2023-03-13 10:33:17', 9),
(13, 'Good', 'good', 0, '2023-03-13 10:33:31', '2023-03-13 10:33:31', 9),
(14, 'Luxury', 'luxury', 0, '2023-03-13 10:33:49', '2023-03-13 10:33:49', 9),
(15, 'Normal', 'normal', 0, '2023-03-13 10:34:58', '2023-03-13 10:34:58', 10),
(16, 'Good', 'good', 0, '2023-03-13 10:35:17', '2023-03-13 10:35:17', 10);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `product_color_id` int DEFAULT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '0=visible,1=hidden',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image`, `meta_title`, `meta_keyword`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Prayer Rug', 'prayer-rug', 'Prayer Rug', 'uploads/category/1680001747.jpg', 'PRAYER RUG', 'Prayer Rug', 'Prayer Rug', 0, '2023-03-09 05:52:22', '2023-03-28 06:47:58'),
(8, 'Kitchen Towels', 'kitchen-towels', 'Kitchen Towels', 'uploads/category/1678359451.jfif', 'KITCHEN TOWELS', 'Kitchen Towels', 'Kitchen Towels', 0, '2023-03-09 05:57:31', '2023-03-09 05:57:31'),
(9, 'Ihram Set', 'ihram-set', 'Ihram Set', 'uploads/category/1678359959.jpg', 'IHRAM SET', 'Ihram Set', 'Ihram Set', 0, '2023-03-09 06:05:59', '2023-03-09 06:05:59'),
(10, 'Thermal Blankets', 'thermal-blankets', 'Thermal Blankets', 'uploads/category/1680001300.jfif', 'Thermal Blankets', 'Thermal Blankets', 'Thermal Blankets', 0, '2023-03-09 06:09:29', '2023-03-28 06:01:40'),
(11, 'Towels', 'towels', 'Towels', 'uploads/category/1680002415.jpg', 'TOWELS', 'Towels', 'Towels', 0, '2023-03-28 06:18:34', '2023-03-28 06:20:15'),
(12, 'Table Runners', 'table-runner', 'Table Runners', 'uploads/category/1680002813.jfif', 'TABLE RUNNER', 'Table Runners', 'Table Runners', 0, '2023-03-28 06:26:53', '2023-03-28 06:26:53'),
(13, 'Napkins', 'napkins', 'Napkins', 'uploads/category/1680003069.jfif', 'NAPKINS', 'Napkins', 'Napkins', 0, '2023-03-28 06:31:09', '2023-03-28 06:31:09'),
(15, 'Fancy Tissue Box', 'tissue-box', 'Fancy Tissue Box Case', 'uploads/category/1688484694.jpg', 'TISSUE BOX', 'Tissue box', 'Tissue box', 0, '2023-07-04 10:31:34', '2023-07-04 10:31:34');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `code`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Red', 'red', 0, '2023-03-07 06:09:42', '2023-03-07 06:09:42'),
(2, 'Green', 'green', 0, '2023-03-07 06:10:26', '2023-03-07 06:10:26'),
(4, 'Black', 'black', 0, '2023-03-13 06:21:29', '2023-03-13 06:21:29'),
(5, 'Blue', 'blue', 0, '2023-03-13 06:21:42', '2023-03-13 06:21:42'),
(6, 'Purple', 'purple', 0, '2023-03-13 06:22:00', '2023-03-13 06:22:00'),
(7, 'Yellow', 'Yellow', 0, '2023-04-10 08:11:45', '2023-04-10 08:11:45');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_02_28_115630_add_details_to_users_table', 2),
(7, '2023_03_01_092919_create_categories_table', 3),
(8, '2023_03_02_092820_create_brands_table', 4),
(9, '2023_03_02_142229_create_products_table', 5),
(10, '2023_03_02_144531_create_product_images_table', 5),
(12, '2023_03_07_101159_create_colors_table', 6),
(13, '2023_03_07_135946_create_sliders_table', 7),
(14, '2023_03_07_151742_create_product_colors_table', 8),
(15, '2023_03_13_091651_add_category_id_to_brands_table', 9),
(16, '2023_03_16_093808_create_wishlists_table', 10),
(17, '2023_03_17_105602_create_carts_table', 11),
(18, '2023_03_21_110620_create_orders_table', 12),
(19, '2023_03_21_111055_create_order_items_table', 12),
(20, '2023_03_29_161212_create_settings_table', 13),
(21, '2023_04_05_113208_create_user_details_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `tracking_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_mode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `tracking_no`, `fullname`, `email`, `phone`, `pincode`, `address`, `status_message`, `payment_mode`, `payment_id`, `created_at`, `updated_at`) VALUES
(1, 4, 'best-m4pWEwDjYq', 'Umer Iqbal', 'umeriqbal1@gmail.com', '03330377707', '54000', 'lake city lahore', 'in progress', 'Cash on Delivery', NULL, '2023-03-22 08:12:29', '2023-03-22 08:12:29'),
(9, 4, 'best-LSF2pWZIH1', 'Talha', 'tnaveed257@gmail.com', '03364960175', '54000', 'House no 2 Street no 25/s Nasir street Captain jamal road Sanda Kalan Lahore', 'completed', 'Cash on Delivery', NULL, '2023-03-22 12:50:51', '2023-03-22 12:50:51'),
(10, 1, 'best-ZwbAS0cE2l', 'Faiq Ishfaq', 'faiqishfaq@gmail.com', '03364351021', '54500', 'House no 2 Street no 25/s Nasir street Captain jamal road Sanda Kalan Lahore', 'out-for-delivery', 'Cash on Delivery', NULL, '2023-03-24 05:53:35', '2023-03-24 11:28:19'),
(11, 1, 'best-R55Y18lFre', 'Talha Naveed', 'talhanaveed521@gmail.com', '03364960175', '54500', '725 N Block Sabzazar Lahore', 'completed', 'Cash on Delivery', NULL, '2023-03-24 12:36:19', '2023-03-24 12:37:49'),
(12, 1, 'best-yESunZ9Fpa', 'Admin', 'admin@gmail.com', '3237929630', '54500', 'muslime town', 'in progress', 'Cash on Delivery', NULL, '2023-03-27 02:02:02', '2023-03-27 06:04:36'),
(13, 5, 'best-4cYfkWifKa', 'M.Usman', 'usman@gmail.com', '03091045148', '54500', 'Shah Fareed Sabzazar Lahore', 'in progress', 'Cash on Delivery', NULL, '2023-03-27 11:44:18', '2023-03-27 11:44:18'),
(15, 1, 'best-4QFG8v4bqr', 'M.Usman', 'usmanmurtaza729@gmail.com', '03091045148', '54000', 'Shah Fareed Lahore', 'in progress', 'Cash on Delivery', NULL, '2023-04-05 07:57:26', '2023-04-05 10:31:31'),
(16, 1, 'best-F4SLJ0msZh', 'Nabeel Shafqat', 'nabeelshafqat19@gmail.com', '03078824879', '54500', 'Cavalry Ground Lahore ', 'in progress', 'Cash on Delivery', NULL, '2023-04-06 05:38:16', '2023-04-06 05:38:16'),
(17, 4, 'best-t5baiHvhMA', 'Talha Naveed', 'naveedtalha910@gmail.com', '03152159943', '54000', '725 N block sabzazar lahore', 'in progress', 'Cash on Delivery', NULL, '2023-04-07 07:47:27', '2023-04-07 07:47:27'),
(18, 4, 'best-M7Sdk1kCqm', 'Talha Naveed', 'talhanaveed521@gmail.com', '03152159943', '54000', '725 N block sabzazar lahore', 'in progress', 'Cash on Delivery', NULL, '2023-04-07 07:47:45', '2023-04-07 07:47:45'),
(19, 4, 'best-A0eh2W5Aqr', 'Talha Naveed', 'naveedtalha910@gmail.com', '03152159943', '54000', '725 N block sabzazar lahore', 'in progress', 'Cash on Delivery', NULL, '2023-04-07 07:58:24', '2023-04-07 07:58:24'),
(20, 4, 'best-KL9vZLHCjI', 'Talha Naveed', 'bestcotton48@gmail.com', '03152159943', '54000', '725 N block sabzazar lahore', 'in progress', 'Cash on Delivery', NULL, '2023-04-07 08:02:55', '2023-04-07 08:02:55'),
(21, 4, 'best-oUSr3ayrt3', 'Talha Naveed', 'talhanaveed521@gmail.com', '03152159943', '54000', '725 N block sabzazar lahore', 'in progress', 'Cash on Delivery', NULL, '2023-04-08 22:43:53', '2023-04-08 22:43:53'),
(22, 1, 'best-XmeBCtBvfD', 'Usman', 'usmanmurtaza729@gmail.com', '03364960175', '54000', 'Sabzazar Lahore', 'in progress', 'Cash on Delivery', NULL, '2023-04-10 07:44:54', '2023-04-10 07:44:54'),
(23, 1, 'best-fNQZ5y8bU8', 'Hassan', 'hussyspamxx@gmail.com', '03364960175', '54000', 'Sabzazar Lahore', 'in progress', 'Cash on Delivery', NULL, '2023-04-23 11:02:35', '2023-04-23 11:02:35'),
(24, 7, 'best-jKweREGgtU', 'Ashir Naveed', 'chashir85@gmail.com', '03354153966', '54000', '725 N Block Sabzazar Lahore', 'in progress', 'Cash on Delivery', NULL, '2023-06-13 13:02:34', '2023-06-13 13:02:34'),
(25, 8, 'best-9g2djGNHlz', 'Talha Naveed', 'talhanaveed7710@gmail.com', '03152159943', '54000', '725 N Block Sabzazar Lahore', 'in progress', 'Cash on Delivery', NULL, '2023-06-21 00:52:44', '2023-06-21 00:52:44'),
(26, 9, 'best-MXGpksARIQ', 'nabeel', 'nabeelshafqat19@gmail.com', '03078824879', '55555', 'house#2', 'in progress', 'Cash on Delivery', NULL, '2023-06-21 02:26:13', '2023-06-21 02:26:13'),
(27, 4, 'best-tPjdYXSglg', 'Talha Naveed', 'talhanaveed521@gmail.com', '03152159943', '54000', '725 N block sabzazar lahore', 'in progress', 'Cash on Delivery', NULL, '2023-06-23 07:06:19', '2023-06-23 07:06:19'),
(28, 11, 'best-2Vr3OQMQmC', 'Rasheed Ahmad', 'lilbunty59@gmail.com', '03057963491', '54000', 'house#2', 'in progress', 'Cash on Delivery', NULL, '2023-06-23 07:10:29', '2023-06-23 07:10:29'),
(29, 15, 'best-ktMlaKG7IJ', 'Zia Ul Rehman', 'ziaulrehman438@gmail.com', '03417541681', '54700', '534 5 d2 GT L', 'in progress', 'Cash on Delivery', NULL, '2023-07-05 10:36:55', '2023-07-05 10:36:55');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `product_color_id` int DEFAULT NULL,
  `quantity` int NOT NULL,
  `price` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `product_color_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(13, 8, 5, 8, 2, 1299, '2023-03-22 08:12:29', '2023-03-22 08:12:29'),
(14, 8, 5, 9, 2, 1299, '2023-03-22 08:12:29', '2023-03-22 08:12:29'),
(15, 9, 6, NULL, 1, 300, '2023-03-22 12:50:51', '2023-03-22 12:50:51'),
(16, 10, 7, NULL, 2, 2500, '2023-03-24 05:53:35', '2023-03-24 05:53:35'),
(17, 11, 8, NULL, 1, 890, '2023-03-24 12:36:19', '2023-03-24 12:36:19'),
(18, 12, 6, NULL, 1, 300, '2023-03-25 02:02:02', '2023-03-25 02:02:02'),
(19, 13, 8, NULL, 1, 890, '2023-03-27 11:44:18', '2023-03-27 11:44:18'),
(20, 14, 9, NULL, 1, 1700, '2023-04-03 10:54:11', '2023-04-03 10:54:11'),
(21, 15, 8, NULL, 3, 890, '2023-04-05 07:57:26', '2023-04-05 07:57:26'),
(22, 16, 8, NULL, 1, 890, '2023-04-06 05:38:16', '2023-04-06 05:38:16'),
(23, 17, 7, NULL, 1, 2500, '2023-04-07 07:47:27', '2023-04-07 07:47:27'),
(24, 19, 9, NULL, 1, 1700, '2023-04-07 07:58:24', '2023-04-07 07:58:24'),
(25, 20, 8, NULL, 1, 890, '2023-04-07 08:02:55', '2023-04-07 08:02:55'),
(26, 21, 5, 8, 1, 1299, '2023-04-08 22:43:53', '2023-04-08 22:43:53'),
(27, 22, 8, NULL, 1, 890, '2023-04-10 07:44:54', '2023-04-10 07:44:54'),
(28, 23, 6, NULL, 1, 300, '2023-04-23 11:02:35', '2023-04-23 11:02:35'),
(29, 24, 8, NULL, 1, 890, '2023-06-13 13:02:34', '2023-06-13 13:02:34'),
(30, 25, 7, NULL, 1, 2500, '2023-06-21 00:52:44', '2023-06-21 00:52:44'),
(31, 26, 9, NULL, 1, 1700, '2023-06-21 02:26:13', '2023-06-21 02:26:13'),
(32, 27, 5, 8, 1, 1299, '2023-06-23 07:06:19', '2023-06-23 07:06:19'),
(33, 28, 7, NULL, 1, 2500, '2023-06-23 07:10:29', '2023-06-23 07:10:29'),
(34, 29, 6, NULL, 1, 300, '2023-07-05 10:36:55', '2023-07-05 10:36:55');

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('talhanaveed521@gmail.com', '$2y$10$tfATcyx.LqHTpvZ48EhbXeNoWcYcpqNpXihLt8nYtCv9pljWAemc2', '2023-03-28 12:23:33');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `small_description` mediumtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `original_price` int NOT NULL,
  `selling_price` int NOT NULL,
  `quantity` int NOT NULL,
  `trending` tinyint NOT NULL DEFAULT '0' COMMENT '1=trending,0=not-trending',
  `newarrivals` tinyint NOT NULL DEFAULT '0' COMMENT '1=newarrivals,0=not-newarrivals',
  `featured` tinyint NOT NULL DEFAULT '0' COMMENT '1=featured,0=not-featured',
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '1=hidden,0=visible',
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` mediumtext COLLATE utf8mb4_unicode_ci,
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `brand`, `small_description`, `description`, `original_price`, `selling_price`, `quantity`, `trending`, `newarrivals`, `featured`, `status`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(5, 7, 'Prayer Rug', 'prayer-rug', 'Good', 'Prayer Rug', 'Prayer Rug', 1899, 1299, 100, 1, 1, 1, 0, 'PRAYER RUG', 'Prayer Rug', 'Prayer Rug', '2023-03-09 09:28:53', '2023-04-10 06:37:26'),
(6, 8, 'Kitchen Towels', 'kitchen-towels', 'Normal', 'Kitchen Towels', 'Kitchen Towels', 500, 300, 3, 1, 0, 1, 0, 'KITCHEN TOWELS', 'Kitchen Towels', 'Kitchen Towels', '2023-03-09 09:32:00', '2023-07-05 10:36:55'),
(7, 9, 'Ihram Set', 'ihram-set', 'Good', 'Ihram Set', 'Ihram Set', 3000, 2500, 3, 1, 0, 0, 0, 'IHRAM SET', 'Ihram Set', 'Ihram Set', '2023-03-09 09:33:09', '2023-06-23 07:10:29'),
(8, 10, 'Thermal Blankets', 'thermal-blankets', 'Good', 'Thermal Blankets', 'Thermal Blankets', 1090, 890, 1, 0, 1, 0, 0, 'Thermal Blankets', 'Thermal Blankets', 'Thermal Blankets', '2023-03-09 09:34:33', '2023-06-13 13:02:34'),
(9, 7, 'Prayer Rugs', 'prayer-rugs', 'Luxury', 'Prayer Rugs', 'Prayer Rugs', 2700, 1700, 6, 1, 0, 0, 0, 'PRAYER RUGS', 'Prayer Rugs', 'Prayer Rugs', '2023-03-13 12:34:16', '2023-06-21 02:26:13');

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `color_id` bigint UNSIGNED DEFAULT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_colors`
--

INSERT INTO `product_colors` (`id`, `product_id`, `color_id`, `quantity`, `created_at`, `updated_at`) VALUES
(7, 9, 4, 0, '2023-03-16 10:21:39', '2023-03-16 10:21:39'),
(8, 5, 1, 16, '2023-03-20 05:48:01', '2023-06-23 07:06:19'),
(9, 5, 5, 7, '2023-03-20 05:53:11', '2023-03-22 08:12:29');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(12, 5, 'uploads/products/16783721551.jpeg', '2023-03-09 09:29:15', '2023-03-09 09:29:15'),
(13, 6, 'uploads/products/16783723201.jpeg', '2023-03-09 09:32:00', '2023-03-09 09:32:00'),
(14, 7, 'uploads/products/16783723891.jpeg', '2023-03-09 09:33:09', '2023-03-09 09:33:09'),
(16, 9, 'uploads/products/16787288561.png', '2023-03-13 12:34:16', '2023-03-13 12:34:16'),
(18, 8, 'uploads/products/16801064971.webp', '2023-03-29 11:14:57', '2023-03-29 11:14:57');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `website_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `website_name`, `website_url`, `page_title`, `meta_keywords`, `meta_description`, `address`, `phone1`, `phone2`, `email1`, `email2`, `facebook`, `twitter`, `instagram`, `youtube`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, '+92 315 215 9943', NULL, 'bestcotton48@gmail.com', NULL, 'facebook', 'Twitter', 'instagram', 'youtube', '2023-04-04 06:00:25', '2023-04-04 07:28:31');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '1=hidden,0=visible',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(5, 'New Clothes, New Passion. Discover the new you.', 'Feel the softness of cotton.', 'uploads/slider/1678373147.jpeg', 0, '2023-03-09 09:45:47', '2023-07-06 14:18:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_as` tinyint NOT NULL DEFAULT '0' COMMENT '0=user,1=admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_as`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$8xBq9DEkoHHvMzcXnxg9KezFKGyHswyB0rim49VIRSk3lhiejpL2u', 'qfkCKORsRMOEMRUgaOl5Gj7KHLUbcIhesFBLsTetZU8EBO6nxCP14dT73cZm', '2023-02-28 09:29:37', '2023-04-03 05:54:38', 1),
(4, 'Talha Naveed', 'talhanaveed521@gmail.com', NULL, '$2y$10$2VS76Jktyf9le4.wEiHLU.DekbeHF.Sx.bOYq7yITna2eRdz0qlia', 'Ugt9AQy6GgWimmOvT4PNZ8rIwSDpEdlXU8twK9qBoWggWvuUgaNfYuNw06fY', '2023-03-09 10:31:50', '2023-04-10 11:02:26', 0),
(7, 'Ashir Naveed', 'chashir85@gmail.com', NULL, '$2y$10$Jck9yqhBVlFtub26Q08z7exV2Hnv5HXhZpNdO241c9BtHGqI5tT0W', NULL, '2023-06-13 12:59:14', '2023-06-13 12:59:14', 0),
(8, 'Talha Naveed', 'talhanaveed7710@gmail.com', NULL, '$2y$10$yfekkKKJ5C31k7IVRyEY8.pvc746wOf0XYriZuBbrJEQmXfqmh93O', NULL, '2023-06-21 00:51:02', '2023-06-21 00:51:02', 0),
(9, 'nabeel', 'nabeelshafqat19@gmail.com', NULL, '$2y$10$CWhLVvY5iubOPKwf8//7puQsm0uFgeWEfDZTT7NycF0fCi9idzWHa', NULL, '2023-06-21 02:24:51', '2023-06-21 02:24:51', 0),
(10, 'Shaheer', 'shaheer@gmail.com', NULL, '$2y$10$8PvXZGoKm8r881u3QySMcOECfQiUdSrO4ZtkVBM1Zwcmte7wWAq0a', NULL, '2023-06-23 07:05:20', '2023-06-23 07:05:20', 0),
(11, 'Rasheed Ahmad', 'rasheed@gmail.com', NULL, '$2y$10$NjJqj.DzWmIplYXoR6jJ7O/VKtoici8UEhGy6/vuutayrytKOYwC.', NULL, '2023-06-23 07:08:40', '2023-06-23 07:08:40', 0),
(12, 'Asim', 'Asim123@gmail.com', NULL, '$2y$10$3jXcn9B2vuYBOSAg54N9Y.uhjxc0OlpzSu7S.dgR.ym5D7WJc9z.W', NULL, '2023-06-23 07:11:40', '2023-06-23 07:11:40', 0),
(13, 'Qasim', 'qasim@gmail.com', NULL, '$2y$10$Tc/xICFFObxh.VCMx1cH7.ieaPzrXEn.mG7zDEiSuzZL621NrgEuW', NULL, '2023-06-23 07:19:42', '2023-06-23 07:19:42', 0),
(14, 'haseeb', 'haseeb@gmail.com', NULL, '$2y$10$GhfxYsBUE1zRbQrx69CdK.efU/vk0Ly7SdhyQrIHZBwwCgQheLPR2', NULL, '2023-07-03 03:21:52', '2023-07-03 03:21:52', 0),
(15, 'Zia Ul Rehman', 'ziaulrehman438@gmail.com', NULL, '$2y$10$O09sC4ni3WdxZecvU6Q0xeY4XVxYl/3f7g1JRHWU51iutuXaeKjIy', NULL, '2023-07-05 10:35:20', '2023-07-05 10:35:20', 0),
(16, 'Qurat ul Ain', 'qurat@gmail.com', NULL, '$2y$10$M8R0wURnmHfK5RInS4TnBOY2SyIpJ38xORvGYIRzHlfUMFfpwZ1Xi', NULL, '2023-07-06 13:45:30', '2023-07-06 13:45:30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `phone`, `pin_code`, `address`, `created_at`, `updated_at`) VALUES
(1, 4, '03152159943', '54000', '725 N block sabzazar lahore', '2023-04-07 07:27:11', '2023-04-07 07:43:11'),
(2, 1, '03364960175', '54000', 'Sabzazar Lahore', '2023-04-10 06:19:40', '2023-04-10 06:19:40'),
(3, 7, '03354153966', '54000', '725 N Block Sabzazar Lahore', '2023-06-13 13:02:05', '2023-06-13 13:02:05'),
(4, 8, '03152159943', '54000', '725 N Block Sabzazar Lahore', '2023-06-21 00:52:30', '2023-06-21 00:52:30'),
(5, 9, '03078824879', '55555', 'house#2', '2023-06-21 02:25:56', '2023-06-21 02:25:56'),
(6, 11, '03057963491', '54000', 'house#2', '2023-06-23 07:10:10', '2023-06-23 07:10:10'),
(7, 15, '03417541681', '54700', '534 5 d2 GT L', '2023-07-05 10:36:25', '2023-07-05 10:36:25');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
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
-- Indexes for table `colors`
--
ALTER TABLE `colors`
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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_colors_product_id_foreign` (`product_id`),
  ADD KEY `product_colors_color_id_foreign` (`color_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_details_user_id_unique` (`user_id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD CONSTRAINT `product_colors_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `product_colors_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
