-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2021 at 05:59 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `description`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'sdfsdfsdf', 8, NULL, '2020-11-24 06:56:33', '2020-11-24 06:56:33');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(6, 'zara', 9, NULL, '2020-11-30 00:12:47', '2020-11-30 00:12:47'),
(7, 'one man', 9, NULL, '2020-11-30 00:12:57', '2020-11-30 00:12:57'),
(8, 'estachy', 8, NULL, '2021-01-09 09:27:03', '2021-01-09 09:27:03');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(8, 'shirt', 9, 8, '2020-11-30 00:12:08', '2021-01-09 09:36:52'),
(9, 'men t-shirt', 9, NULL, '2020-11-30 00:12:19', '2020-11-30 00:12:19'),
(10, 'women t-shirt', 9, NULL, '2020-11-30 00:12:28', '2020-11-30 00:12:28');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'green', 9, 1, '2020-11-27 10:23:05', '2020-11-27 10:23:05'),
(3, 'red', 9, 1, '2020-11-28 07:12:40', '2020-11-28 07:12:40'),
(4, 'blue', 9, 1, '2020-11-28 07:12:50', '2020-11-28 07:12:50');

-- --------------------------------------------------------

--
-- Table structure for table `communicates`
--

CREATE TABLE `communicates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `communicates`
--

INSERT INTO `communicates` (`id`, `name`, `email`, `mobile_no`, `address`, `msg`, `created_at`, `updated_at`) VALUES
(6, 'hridoy f32', 'jarifsharar@gmail.com', '01963003477', 'uttara dhaka 1230', 'hi', '2021-01-09 10:36:20', '2021-01-09 10:36:20'),
(7, 'hridoy f32', 'jarifsharar@gmail.com', '01963003477', 'uttara dhaka 1230', 'hi', '2021-01-09 10:37:58', '2021-01-09 10:37:58');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_plus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `mobile_no`, `email`, `facebook`, `twitter`, `youtube`, `google_plus`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'uttara dhaka', '35345345345', 'jarif@gmail.com', 'https://www.facebook.com/hridoy952/', 'https://www.facebook.com/hridoy952/', 'https://www.facebook.com/hridoy952/', 'https://www.facebook.com/hridoy952/', 8, NULL, '2020-11-23 10:44:27', '2020-11-23 10:44:27');

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
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, '202101091625Screenshot_9.png', 8, 8, '2020-11-20 09:16:41', '2021-01-09 10:25:13');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2014_10_12_000000_create_users_table', 2),
(5, '2020_11_20_064854_create_logos_table', 3),
(6, '2020_11_20_152038_create_sliders_table', 4),
(7, '2020_11_23_114908_create_missions_table', 5),
(8, '2020_11_23_125854_create_contacts_table', 6),
(9, '2020_11_23_162821_create_abouts_table', 7),
(10, '2020_11_24_131234_create_communicates_table', 8),
(11, '2020_11_26_054103_create_categories_table', 9),
(12, '2020_11_27_141547_create_brands_table', 10),
(13, '2020_11_27_161223_create_colors_table', 11),
(14, '2020_11_28_105438_create_sizes_table', 12),
(15, '2020_11_28_114006_create_products_table', 13),
(16, '2020_11_28_114108_create_product_sizes_table', 13),
(17, '2020_11_28_114135_create_product_colors_table', 13),
(18, '2020_11_28_114210_create_product_sub_images_table', 13),
(19, '2020_12_05_032449_create_shippings_table', 14),
(20, '2020_12_05_032642_create_payments_table', 14),
(21, '2020_12_05_032722_create_orders_table', 14),
(22, '2020_12_05_032801_create_order_details_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'user_id=customer_id',
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_no` int(11) NOT NULL,
  `order_total` double NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=panding and 1=apporoved',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `shipping_id`, `payment_id`, `order_no`, `order_total`, `status`, `created_at`, `updated_at`) VALUES
(14, 12, 11, 14, 1, 11834, 1, '2021-01-09 10:57:16', '2021-01-09 10:58:05');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `color_id` int(11) DEFAULT NULL,
  `size_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `color_id`, `size_id`, `quantity`, `created_at`, `updated_at`) VALUES
(15, 14, 16, 2, 3, 3, '2021-01-09 10:57:16', '2021-01-09 10:57:16'),
(16, 14, 14, 2, 2, 2, '2021-01-09 10:57:16', '2021-01-09 10:57:16');

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `payment_method`, `transaction_no`, `created_at`, `updated_at`) VALUES
(6, 'handcash', NULL, '2020-12-05 04:05:46', '2020-12-05 04:05:46'),
(7, 'handcash', NULL, '2020-12-05 04:14:29', '2020-12-05 04:14:29'),
(8, 'handcash', NULL, '2020-12-05 04:25:56', '2020-12-05 04:25:56'),
(9, 'bkash', '4563453', '2020-12-05 04:51:01', '2020-12-05 04:51:01'),
(10, 'handcash', NULL, '2020-12-05 05:17:34', '2020-12-05 05:17:34'),
(11, 'handcash', NULL, '2020-12-06 07:11:46', '2020-12-06 07:11:46'),
(12, 'handcash', NULL, '2020-12-06 07:13:08', '2020-12-06 07:13:08'),
(13, 'handcash', NULL, '2020-12-06 07:41:40', '2020-12-06 07:41:40'),
(14, 'handcash', NULL, '2021-01-09 10:57:16', '2021-01-09 10:57:16');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double NOT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `name`, `slug`, `price`, `short_desc`, `long_desc`, `image`, `created_at`, `updated_at`) VALUES
(14, 8, 6, 'TEXTURED NON-IRON SHIRT', 'textured-non-iron-shirt', 4567, 'Regular fit collared shirt made of stretch fabric reducing the need to iron. Diagonal textured weave. Featuring long sleeves with buttoned cuffs and a button-up front.', 'Regular fit collared shirt made of stretch fabric reducing the need to iron. Diagonal textured weave. Featuring long sleeves with buttoned cuffs and a button-up front.Regular fit collared shirt made of stretch fabric reducing the need to iron. Diagonal textured weave. Featuring long sleeves with buttoned cuffs and a button-up front.', '2021010915577545466403_6_1_1.jpg', '2021-01-09 09:57:01', '2021-01-09 09:57:01'),
(15, 10, 7, 'MINNIE AND MICKEY MOUSE ©DISNEY T-SHIRT Details', 'minnie-and-mickey-mouse-cdisney-t-shirt-details', 1500, 'Cotton grown using natural fertilisers and pesticides. Moreover, no genetically modified seeds are used during its cultivation, thus helping to preserve seed biodiversity and soil fertility.', 'Cotton grown using natural fertilisers and pesticides. Moreover, no genetically modified seeds are used during its cultivation, thus helping to preserve seed biodiversity and soil fertility.Cotton grown using natural fertilisers and pesticides. Moreover, no genetically modified seeds are used during its cultivation, thus helping to preserve seed biodiversity and soil fertility.', '202101091559Screenshot_1.png', '2021-01-09 09:59:42', '2021-01-09 09:59:42'),
(16, 9, 8, 'Campus Sutra', 'campus-sutra', 900, '100% Original Products\r\nFree Delivery on order above Rs. 799\r\nPay on delivery might be available\r\nEasy 30 days returns and exchanges\r\nTry & Buy might be available', '100% Original Products\r\nFree Delivery on order above Rs. 799\r\nPay on delivery might be available\r\nEasy 30 days returns and exchanges\r\nTry & Buy might be available100% Original Products\r\nFree Delivery on order above Rs. 799\r\nPay on delivery might be available\r\nEasy 30 days returns and exchanges\r\nTry & Buy might be available', '202101091601Screenshot_5.png', '2021-01-09 10:01:43', '2021-01-09 10:01:43');

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `color_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_colors`
--

INSERT INTO `product_colors` (`id`, `product_id`, `color_id`, `created_at`, `updated_at`) VALUES
(26, 14, 2, '2021-01-09 09:57:01', '2021-01-09 09:57:01'),
(27, 14, 4, '2021-01-09 09:57:01', '2021-01-09 09:57:01'),
(28, 15, 3, '2021-01-09 09:59:42', '2021-01-09 09:59:42'),
(29, 16, 2, '2021-01-09 10:01:43', '2021-01-09 10:01:43'),
(30, 16, 4, '2021-01-09 10:01:43', '2021-01-09 10:01:43');

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

CREATE TABLE `product_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `size_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_sizes`
--

INSERT INTO `product_sizes` (`id`, `product_id`, `size_id`, `created_at`, `updated_at`) VALUES
(27, 14, 2, '2021-01-09 09:57:01', '2021-01-09 09:57:01'),
(28, 14, 3, '2021-01-09 09:57:01', '2021-01-09 09:57:01'),
(29, 14, 4, '2021-01-09 09:57:01', '2021-01-09 09:57:01'),
(30, 15, 2, '2021-01-09 09:59:42', '2021-01-09 09:59:42'),
(31, 15, 3, '2021-01-09 09:59:42', '2021-01-09 09:59:42'),
(32, 15, 4, '2021-01-09 09:59:42', '2021-01-09 09:59:42'),
(33, 16, 2, '2021-01-09 10:01:43', '2021-01-09 10:01:43'),
(34, 16, 3, '2021-01-09 10:01:43', '2021-01-09 10:01:43'),
(35, 16, 4, '2021-01-09 10:01:43', '2021-01-09 10:01:43');

-- --------------------------------------------------------

--
-- Table structure for table `product_sub_images`
--

CREATE TABLE `product_sub_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `sub_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_sub_images`
--

INSERT INTO `product_sub_images` (`id`, `product_id`, `sub_image`, `created_at`, `updated_at`) VALUES
(21, 14, '2021010915577545466403_6_1_1.jpg', '2021-01-09 09:57:01', '2021-01-09 09:57:01'),
(22, 14, '2021010915577545466403_6_2_1.jpg', '2021-01-09 09:57:01', '2021-01-09 09:57:01'),
(23, 14, '2021010915577545466403_6_4_1.jpg', '2021-01-09 09:57:01', '2021-01-09 09:57:01'),
(24, 14, '202101091557Screenshot_42.png', '2021-01-09 09:57:01', '2021-01-09 09:57:01'),
(25, 15, '202101091559Screenshot_1.png', '2021-01-09 09:59:42', '2021-01-09 09:59:42'),
(26, 15, '202101091559Screenshot_2.png', '2021-01-09 09:59:42', '2021-01-09 09:59:42'),
(27, 15, '202101091559Screenshot_3.png', '2021-01-09 09:59:42', '2021-01-09 09:59:42'),
(28, 15, '202101091559Screenshot_4.png', '2021-01-09 09:59:42', '2021-01-09 09:59:42'),
(29, 16, '202101091601Screenshot_5.png', '2021-01-09 10:01:43', '2021-01-09 10:01:43'),
(30, 16, '202101091601Screenshot_6.png', '2021-01-09 10:01:43', '2021-01-09 10:01:43'),
(31, 16, '202101091601Screenshot_7.png', '2021-01-09 10:01:43', '2021-01-09 10:01:43'),
(32, 16, '202101091601Screenshot_8.png', '2021-01-09 10:01:43', '2021-01-09 10:01:43');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'user_id=customer_id',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `user_id`, `name`, `email`, `mobile_no`, `address`, `created_at`, `updated_at`) VALUES
(10, 8, 'hridoy', 'jarifsharar@gmail.com', '01963003477', 'uttara dhaka 1230', '2021-01-09 10:52:24', '2021-01-09 10:52:24'),
(11, 12, 'Teacher', 'tanvir@gmail.com', '35345345345', 'uttara dhaka 1230', '2021-01-09 10:56:45', '2021-01-09 10:56:45');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'larg', 9, 1, '2020-11-28 05:06:11', '2020-11-28 05:06:11'),
(3, 'xl', 9, 1, '2020-11-28 09:19:57', '2020-11-28 09:19:57'),
(4, 'medium', 9, 1, '2020-11-28 09:20:07', '2020-11-28 09:20:07');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `short_title`, `long_title`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(5, '202101091508pexels-emirkhan-bal-953864.jpg', 'WELCOME TO OUR SITE', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in', 13, NULL, '2021-01-09 09:08:05', '2021-01-09 09:08:05'),
(6, '202101091508pexels-karolina-grabowska-5650049.jpg', 'WELCOME TO OUR SITE', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in', 13, NULL, '2021-01-09 09:08:41', '2021-01-09 09:08:41'),
(7, '202101091509pexels-andrea-piacquadio-919436.jpg', 'WELCOME TO OUR SITE', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in', 13, NULL, '2021-01-09 09:09:41', '2021-01-09 09:09:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(51) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(91) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usertype`, `name`, `email`, `role`, `email_verified_at`, `password`, `mobile`, `code`, `address`, `gender`, `image`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'Admin', 'jarif khan rr', 'jarif@gmail.com', 'Admin', NULL, '$2y$10$e2H14ZwKwWLc0nbFoaEoH.lZ1vLeORF/ZYiVdxrG/P2OU.rp.Ltj.', '01631143435', NULL, 'uttara dhaka 1230', 'Male', '20201119062814379845_10206816440676891_921234504083354416_o.jpg', 1, NULL, '2020-11-18 07:50:55', '2020-12-04 00:26:38'),
(12, 'customer', 'hridoy Tech cseee', 'jarifsharar@gmail.com', NULL, NULL, '$2y$10$o5MJPaSugA3EnohmBwCKuO8MfyRTdBh/LeUnseMjJsgmKU22.WtB2', '0163003477', '1786', 'ahaliya', 'Female', '20201204161241420741_1136437889841520_6246382547316506624_n.jpg', 1, NULL, '2020-12-03 10:02:38', '2020-12-04 10:38:42'),
(13, 'Admin', 'sayem', 'sayem@gmail.com', 'User', NULL, '$2y$10$WA6NiLbgYRdRetOUNA6KQOlYAohzZkSFWCUviQDta6D1XB6H2Hox2', NULL, NULL, NULL, NULL, NULL, 1, NULL, '2020-12-04 00:32:29', '2020-12-04 00:32:29'),
(14, 'customer', 'hridoy f323', 'islamjihad607@gmail.com', NULL, NULL, '$2y$10$Wz0f/mFCOka8uQgZnG8QRujoX8Dx.R14lIZ9D0jj67kZJJT1qutKy', '01963003477', '8228', NULL, NULL, NULL, 1, NULL, '2020-12-06 07:06:22', '2020-12-06 07:10:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_name_unique` (`name`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `colors_name_unique` (`name`);

--
-- Indexes for table `communicates`
--
ALTER TABLE `communicates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sub_images`
--
ALTER TABLE `product_sub_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sizes_name_unique` (`name`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `communicates`
--
ALTER TABLE `communicates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `product_sub_images`
--
ALTER TABLE `product_sub_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
