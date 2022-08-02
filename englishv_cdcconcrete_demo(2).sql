-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 02, 2022 at 07:57 AM
-- Server version: 10.3.35-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `englishv_cdcconcrete_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_settings`
--

CREATE TABLE `app_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_default` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ask_any_questions`
--

CREATE TABLE `ask_any_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reply_status` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NO',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cdc_client_infos`
--

CREATE TABLE `cdc_client_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cdc_client_infos`
--

INSERT INTO `cdc_client_infos` (`id`, `name`, `image`, `link`, `created_at`, `updated_at`) VALUES
(2, 'JCX', 'uploads/client/image_225x225_1062b8479f7630b1656244127.jpg', 'https://jcxbd.com/', '2022-06-26 11:48:47', '2022-06-26 11:48:47'),
(3, 'Aakash Developments Ltd.', 'uploads/client/image_225x225_1062b8482e604331656244270.jpg', 'https://aakashgroupbd.com/', '2022-06-26 11:51:09', '2022-06-26 11:51:10'),
(4, 'Modern Structures Ltd.', 'uploads/client/image_225x225_1062b8487c7a1fa1656244348.jpg', 'http://modernstructuresltd.com/', '2022-06-26 11:52:28', '2022-06-26 11:52:28'),
(5, 'ANZ PROPERTIES LIMITED', 'uploads/client/image_225x225_1062b848c17d3791656244417.jpg', 'http://anzproperties.com/', '2022-06-26 11:53:37', '2022-06-26 11:53:38'),
(6, 'Homes71 Ltd', 'uploads/client/image_225x225_1062b848f07e2081656244464.jpg', 'http://www.homes71.com/', '2022-06-26 11:54:24', '2022-06-26 11:54:24'),
(7, 'KP properties', 'uploads/client/image_225x225_1062b849c27b7161656244674.jpg', NULL, '2022-06-26 11:57:54', '2022-06-26 11:57:54'),
(8, 'Regency Builder Ltd.', 'uploads/client/image_225x225_1062b84a43b7c731656244803.jpg', NULL, '2022-06-26 12:00:03', '2022-06-26 12:00:05'),
(9, 'AMFL', 'uploads/client/image_225x225_1062b84aaf60c4a1656244911.jpg', NULL, '2022-06-26 12:01:51', '2022-06-26 12:01:51'),
(10, 'Online Properties Ltd -OPL', 'uploads/client/image_225x225_1062b84ae8a6e321656244968.jpg', 'https://www.facebook.com/OnlinePropertiesLtd/', '2022-06-26 12:02:48', '2022-06-26 12:02:48'),
(11, 'building technology & ideas ltd', 'uploads/client/image_225x225_1062b84b4e194e01656245070.jpg', 'https://btibd.com/', '2022-06-26 12:04:30', '2022-06-26 12:04:30'),
(12, 'Comprehensive Holdings Ltd', 'uploads/client/image_225x225_1062b84bc357c881656245187.jpg', 'http://www.comprehensiveholdings.net/', '2022-06-26 12:06:27', '2022-06-26 12:06:27'),
(13, 'Rupayan City', 'uploads/client/image_225x225_1062b8502ba04f11656246315.jpg', 'https://rupayancity.com/', '2022-06-26 12:25:15', '2022-06-26 12:25:15'),
(14, 'M/S Akkas Construction Ltd.', 'uploads/client/image_225x225_1062b85107c03cb1656246535.jpg', NULL, '2022-06-26 12:28:55', '2022-06-26 12:28:55'),
(15, 'UNION Development & Technologies Limited', 'uploads/client/image_225x225_1062b8517d71f351656246653.jpg', 'http://www.uniondevelopment.org/', '2022-06-26 12:30:53', '2022-06-26 12:30:53'),
(16, 'Daffodil International University', 'uploads/client/image_225x225_1062b851fc7f9c41656246780.jpg', 'https://daffodilvarsity.edu.bd/', '2022-06-26 12:33:00', '2022-06-26 12:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `cdc_equipment`
--

CREATE TABLE `cdc_equipment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cdc_equipment`
--

INSERT INTO `cdc_equipment` (`id`, `name`, `image`, `description`, `created_at`, `updated_at`) VALUES
(12, 'Automated Block Machine', 'uploads/equipment/image_600x400_1062b8684011cd21656252480.jpg', NULL, '2022-06-26 14:07:59', '2022-06-26 14:09:09'),
(13, 'Automated Block Making', 'uploads/equipment/image_600x400_1062b86859f35ae1656252505.jpg', NULL, '2022-06-26 14:08:25', '2022-06-26 14:08:26'),
(14, 'Block Machine Control Romm', 'uploads/equipment/image_600x400_1062b8687b03bc21656252539.jpg', NULL, '2022-06-26 14:08:59', '2022-06-26 14:08:59'),
(15, 'Block Machine Controller', 'uploads/equipment/image_600x400_1062b868af4dabf1656252591.jpg', NULL, '2022-06-26 14:09:51', '2022-06-26 14:09:51'),
(16, 'Block Machine', 'uploads/equipment/image_600x400_1062b868bf399f81656252607.jpg', NULL, '2022-06-26 14:10:07', '2022-06-26 14:10:07'),
(17, 'CDC Concrete Pump', 'uploads/equipment/image_600x400_1062b868d22ac431656252626.jpg', NULL, '2022-06-26 14:10:26', '2022-06-26 14:10:26'),
(18, 'CDC Plant Operation', 'uploads/equipment/image_600x400_1062b868e596ab11656252645.jpg', NULL, '2022-06-26 14:10:45', '2022-06-26 14:10:45'),
(19, 'CDC Stacking Yard', 'uploads/equipment/image_600x400_1062b8690bbd3dd1656252683.jpg', NULL, '2022-06-26 14:11:23', '2022-06-26 14:11:23'),
(20, 'Concrete Pump Putzmeister', 'uploads/equipment/image_600x400_1062b8696c7559e1656252780.jpg', NULL, '2022-06-26 14:13:00', '2022-06-26 14:13:00'),
(21, 'Concrete Pump Zoomlion', 'uploads/equipment/image_600x400_1062b86984314401656252804.jpg', NULL, '2022-06-26 14:13:24', '2022-06-26 14:13:24'),
(22, 'Dump Truck', 'uploads/equipment/image_600x400_1062b86997533ec1656252823.jpg', NULL, '2022-06-26 14:13:43', '2022-06-26 14:13:43'),
(23, 'Fuel Dispenser', 'uploads/equipment/image_600x400_1062b869c14391e1656252865.jpg', NULL, '2022-06-26 14:14:25', '2022-06-26 14:14:25'),
(24, 'Pickup Van', 'uploads/equipment/image_600x400_1062b869d0d76db1656252880.jpg', NULL, '2022-06-26 14:14:40', '2022-06-26 14:14:40'),
(25, 'Fuel Tank Capacity 13000 Ltr.', 'uploads/equipment/image_600x400_1062b869ffea76c1656252927.jpg', NULL, '2022-06-26 14:15:27', '2022-06-26 14:15:28'),
(26, 'Lab Test Equipment', 'uploads/equipment/image_600x400_1062b86a1855f1e1656252952.jpg', NULL, '2022-06-26 14:15:52', '2022-06-26 14:15:52'),
(27, 'Mixture Truck', 'uploads/equipment/image_600x400_1062b86b12e83311656253202.jpg', NULL, '2022-06-26 14:20:02', '2022-06-26 14:20:03'),
(28, 'Mixture Truck', 'uploads/equipment/image_600x400_1062b86b1fd2b621656253215.jpg', NULL, '2022-06-26 14:20:15', '2022-06-26 14:20:15'),
(29, 'Payloader', 'uploads/equipment/image_600x400_1062b86b40762651656253248.jpg', NULL, '2022-06-26 14:20:48', '2022-06-26 14:20:48'),
(30, 'CDC Stacking Yard', 'uploads/equipment/image_600x400_1062b86b539b5001656253267.jpg', NULL, '2022-06-26 14:21:07', '2022-06-26 14:21:07'),
(31, 'CDC Stacking Yard', 'uploads/equipment/image_600x400_1062b86b6ae26301656253290.jpg', NULL, '2022-06-26 14:21:30', '2022-06-26 14:21:31'),
(32, 'CDC Stacking Yard', 'uploads/equipment/image_600x400_1062b86b78957011656253304.jpg', NULL, '2022-06-26 14:21:44', '2022-06-26 14:21:44'),
(33, 'CDC Stacking Yard', 'uploads/equipment/image_600x400_1062b86b868e0401656253318.jpg', NULL, '2022-06-26 14:21:58', '2022-06-26 14:21:58'),
(34, 'RMC Control Room', 'uploads/equipment/image_600x400_1062b86b9a541861656253338.jpg', NULL, '2022-06-26 14:22:18', '2022-06-26 14:22:18'),
(35, 'RMC Lab Equipment', 'uploads/equipment/image_600x400_1062b86bb4d8efe1656253364.jpg', NULL, '2022-06-26 14:22:44', '2022-06-26 14:22:44'),
(36, 'RMC Controller', 'uploads/equipment/image_600x400_1062b86bd6b827b1656253398.jpg', NULL, '2022-06-26 14:23:18', '2022-06-26 14:23:18'),
(37, 'RMC Lab Equipment', 'uploads/equipment/image_600x400_1062b86bec19bd51656253420.jpg', NULL, '2022-06-26 14:23:40', '2022-06-26 14:23:40'),
(38, 'RMC Lab Equipment', 'uploads/equipment/image_600x400_1062b86bf7eb47c1656253431.jpg', NULL, '2022-06-26 14:23:51', '2022-06-26 14:23:52'),
(39, 'Weighing Bridge', 'uploads/equipment/image_600x400_1062b86c21c57871656253473.jpg', NULL, '2022-06-26 14:24:33', '2022-06-26 14:24:33'),
(40, 'Stock Yard', 'uploads/equipment/image_600x400_1062b86c307afb61656253488.jpg', NULL, '2022-06-26 14:24:48', '2022-06-26 14:24:48');

-- --------------------------------------------------------

--
-- Table structure for table `cdc_products`
--

CREATE TABLE `cdc_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_1` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT 'Different Color',
  `feature_2` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT 'Long Life',
  `feature_3` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT 'Reasonable Price',
  `feature_4` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT 'High Strength',
  `feature_5` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Color: Gray/Red/Other',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cdc_products`
--

INSERT INTO `cdc_products` (`id`, `name`, `image`, `feature_1`, `feature_2`, `feature_3`, `feature_4`, `feature_5`, `created_at`, `updated_at`) VALUES
(3, 'Solid Brick', 'uploads/product/image_500x400_1062b853799be541656247161.jpg', 'Size: 240x70x107 mm', 'Strength: 1500-2000 psi', 'Durable & Damp Proof', 'Usage: Partition Wall, Fair Face Wall', 'Color: Gray/Red/Other', '2022-06-26 12:39:21', '2022-06-29 19:10:32'),
(4, 'Erosion Control Block', 'uploads/product/image_500x400_1062b8539aebe4d1656247194.jpg', 'Size: 444x315x80 mm', 'Durable & Aesthetic', 'Long Life', 'Usage: Gardening, Beautification etc.', 'Color: Gray/Red/Other', '2022-06-26 12:39:54', '2022-06-29 19:26:49'),
(5, 'River Block', 'uploads/product/image_500x400_1062bc15f7b62691656493559.jpeg', 'Size: 300x300x300 mm & 400x400x300 mm', 'Long Life & Easier Maintenance', 'Low Cost', 'Usage: River Bank Protection', 'Color: Gray/Red/Other', '2022-06-29 19:05:59', '2022-06-29 19:32:06'),
(7, 'Uni-Paver', 'uploads/product/image_500x400_1062b853fc3892c1656247292.jpg', 'Size: 222x110x80 & 222x110x100 mm', 'Strength: 3500-5000 psi', 'Durable & Easy Installation', 'Usage: Pavement, Stack Yard, Industrial Floor', 'Color: Gray/Red/Other', '2022-06-26 12:41:32', '2022-06-29 19:26:23'),
(10, 'Saucer Drain', 'uploads/product/image_500x400_1062b85434eed141656247348.jpg', 'Size: 300x400x150 mm', 'Durable', 'Environment Friendly', 'Usage: Surface Drain', 'Color: Gray/Red/Other', '2022-06-26 12:42:28', '2022-06-29 19:22:46'),
(11, 'Double Interlocking Block', 'uploads/product/image_500x400_1062b8544fb573f1656247375.jpg', 'Size: 200x163x80 mm', 'Strength: 3500-5000 psi', 'Durable & Easy Installation', 'Usage: Pavement, Stack Yard, Industrial Floor', 'Color: Gray/Red/Other', '2022-06-26 12:42:55', '2022-06-29 19:25:00'),
(12, 'Hollow Block (Wall)', 'uploads/product/image_500x400_1062b853daf3b8e1656247258.jpg', 'Size: 390x190x(90/100/140/190) mm', 'Strength: 1500-2000 psi', 'Durable & Light Weight', 'Usage: Boundary Wall, Partition Wall, Retaining Wall', 'Color: Gray/Red/Other', '2022-06-26 12:40:58', '2022-06-29 19:17:54'),
(13, 'Kerb Stone (K6)', 'uploads/product/image_500x400_1062b8548faba9f1656247439.jpg', 'Size: 500x400x120/65 mm', 'Long Life', 'Easier Maintence', 'Usage: Road Side, Median, Embankment Protection', 'Color: Gray/Red/Other', '2022-06-26 12:43:59', '2022-06-29 19:29:20');

-- --------------------------------------------------------

--
-- Table structure for table `cdc_product_orders`
--

CREATE TABLE `cdc_product_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `degination` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_1` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_2` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_4` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram` varchar(110) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cdc_product_orders`
--

INSERT INTO `cdc_product_orders` (`id`, `name`, `degination`, `number_1`, `number_2`, `number_3`, `number_4`, `whatsapp`, `telegram`, `email`, `created_at`, `updated_at`) VALUES
(2, 'Md. Rasel Rana', 'Asst. Manager (Sales & Marketing)', '01410139944', '01715255734', NULL, NULL, '01410139944', '01410139944', 'ranamdrasel08@gmail.com', '2022-06-26 14:27:42', '2022-06-26 14:27:42'),
(3, 'Emergency Contact', NULL, '01938228844', '01401139941', '01401139957', '01401139943', '01322885861', '01401139957', 'golam.rabbani.35@gmail.com', '2022-06-26 14:28:32', '2022-07-03 13:10:49');

-- --------------------------------------------------------

--
-- Table structure for table `cdc_sister_concerns`
--

CREATE TABLE `cdc_sister_concerns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cdc_sister_concerns`
--

INSERT INTO `cdc_sister_concerns` (`id`, `name`, `link`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Starlit Home Ltd.', 'https://starlit.com.bd/', 'uploads/sister_concern/image_150x150_1062b835510e0cb1656239441.jpg', '2022-06-26 10:30:41', '2022-06-26 10:56:03'),
(3, 'ltd.', NULL, 'uploads/sister_concern/image_150x150_1062b83596434ac1656239510.jpg', '2022-06-26 10:31:50', '2022-06-26 11:00:57'),
(4, 'CDC Properties ltd.', 'https://www.facebook.com/CdcPropertiesLtd', 'uploads/sister_concern/image_150x150_1062b835fb077951656239611.jpg', '2022-06-26 10:33:31', '2022-06-26 10:56:46'),
(5, 'Hoshi International Ltd', 'https://www.facebook.com/Hoshiinternationalltd/', 'uploads/sister_concern/image_150x150_1062b836ff837b31656239871.jpg', '2022-06-26 10:37:51', '2022-06-26 10:57:35'),
(6, 'CDC', NULL, 'uploads/sister_concern/image_150x150_1062b83cbc851ce1656241340.jpg', '2022-06-26 11:02:20', '2022-06-26 11:02:20');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE `gallery_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_videos`
--

CREATE TABLE `gallery_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_videos`
--

INSERT INTO `gallery_videos` (`id`, `title`, `link`, `created_at`, `updated_at`) VALUES
(1, 'CDC Stock yard ( Sylhet Sand Unloading)', 'https://youtu.be/xEBcxAjC0Jk', '2022-06-26 10:23:03', '2022-06-26 10:23:03'),
(2, 'CDC Concrete Hollow (190) Block Production', 'https://www.youtube.com/watch?v=_yqW-qtedGg', '2022-06-26 10:24:30', '2022-06-26 10:24:30'),
(3, 'CDC Concrete Ltd. Hollow Block Production Test', 'https://www.youtube.com/watch?v=M6k34BXZgYY', '2022-06-26 14:31:54', '2022-06-26 14:31:54'),
(4, 'CDC Block Production', 'https://www.youtube.com/watch?v=klLYEGu7_3U', '2022-06-26 14:32:28', '2022-06-26 14:32:28'),
(5, 'CDC Solid Bricks', 'https://youtu.be/SyE0QaiyBtA', '2022-06-26 14:32:56', '2022-06-26 14:32:56'),
(6, 'CDC Concrete Ltd', 'https://www.youtube.com/watch?v=BcP2mABa87g', '2022-06-26 14:33:23', '2022-06-26 14:33:23'),
(7, 'CDC Concrete Ltd Hollow Block Production .', 'https://www.youtube.com/watch?v=J-T86C9Ip9o', '2022-06-26 14:33:52', '2022-06-26 14:33:52');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(3, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(4, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(5, '2016_06_01_000004_create_oauth_clients_table', 1),
(6, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(7, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(8, '2022_01_27_053638_create_app_settings_table', 1),
(9, '2022_01_27_053639_create_user_roles_table', 1),
(10, '2022_01_27_053651_create_users_table', 1),
(11, '2022_01_27_053652_create_user_permissions_table', 1),
(12, '2022_02_05_042352_create_website_infos_table', 1),
(13, '2022_06_08_200810_create_subscribe_infos_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribe_infos`
--

CREATE TABLE `subscribe_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subscribe_email` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribe_infos`
--

INSERT INTO `subscribe_infos` (`id`, `subscribe_email`, `created_at`, `updated_at`) VALUES
(2, 'jahirul.iit5th@gmail.com', '2022-06-29 16:16:28', '2022-06-29 16:16:28'),
(3, 'nnaharpoly75@gmail.com', '2022-06-29 19:51:16', '2022-06-29 19:51:16'),
(4, 'sumaita002@gmail.com', '2022-06-29 19:51:37', '2022-06-29 19:51:37'),
(5, 'yeaminhs008@gmail.com', '2022-06-29 19:53:49', '2022-06-29 19:53:49'),
(6, 'jahirul.iit5th@gmail.com', '2022-06-30 15:40:41', '2022-06-30 15:40:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 5,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_country` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_district` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_street` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_country` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_district` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_street` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` bigint(20) DEFAULT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `first_name`, `last_name`, `username`, `photo`, `phone`, `email`, `present_country`, `present_district`, `present_street`, `permanent_country`, `permanent_district`, `permanent_street`, `email_verified_at`, `password`, `creator`, `slug`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mr.Super', 'Admin', 'super_admin', 'avatar.png', '+880 123654789', 'superadmin@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$XPOUNxVdY63IzERPwBMKoOIjrq1qHNDFt6A5ZbFrjMVr2TZBJTgFC', NULL, 'super_admin', 1, NULL, '2022-06-21 09:22:13', '2022-06-21 09:22:13'),
(2, 2, 'Mr. test', 'Admin', 'admin', 'avatar.png', '+880 123654789', 'admin@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$lOsYR9Xy9tLwU4ov.sA4wONovCF5mfyPjyYWpd8FxTevRHzhb546q', NULL, 'admin', 1, NULL, '2022-06-21 09:22:13', '2022-06-21 09:22:13'),
(3, 3, 'Mr. test', 'editor', 'editor', 'avatar.png', '+880 123654789', 'editor@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$5CjBYXGCsbdXenUSJQSJXuxWnc18tlXHyhcVbx6hsWx1uh.w8E06y', NULL, 'editor', 1, NULL, '2022-06-21 09:22:13', '2022-06-21 09:22:13');

-- --------------------------------------------------------

--
-- Table structure for table `user_permissions`
--

CREATE TABLE `user_permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `can_create` tinyint(4) NOT NULL DEFAULT 0,
  `can_edit` tinyint(4) NOT NULL DEFAULT 0,
  `can_delete` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial` int(11) DEFAULT NULL,
  `creator` bigint(20) DEFAULT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `website_infos`
--

CREATE TABLE `website_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website_infos`
--

INSERT INTO `website_infos` (`id`, `type_name`, `title`, `value`, `creator`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'office_address', 'Office Address', '29/1 Goranchatbari, Beribadh, Adjacent Eastern Housing, 1216 Mirpur, Dhaka Division, Bangladesh.', '1', NULL, 1, '2022-06-21 09:22:13', '2022-06-21 09:22:13'),
(2, 'office_time', 'Office Time', '24/7 hours', '1', NULL, 1, '2022-06-21 09:22:13', '2022-06-26 15:30:43'),
(3, 'mobile_number', 'Mobile Number', '01938228844', '1', NULL, 1, '2022-06-21 09:22:13', '2022-06-29 12:30:22'),
(4, 'whatsapp_number', 'WhatsApp Number', '01401139944', '1', NULL, 1, '2022-06-21 09:22:13', '2022-06-21 09:22:13'),
(5, 'telegram_number', 'Telegram Number', '01401139944', '1', NULL, 1, '2022-06-21 09:22:13', '2022-06-21 09:22:13'),
(6, 'phone_number', 'Phone Number', '222222', '1', NULL, 1, '2022-06-21 09:22:13', '2022-06-21 09:22:13'),
(7, 'email_address', 'Email Address', 'info@cdcconcrete.com', '1', NULL, 1, '2022-06-21 09:22:13', '2022-06-21 09:22:13'),
(8, 'fb_page_link', 'Facebook Page link', 'https://www.facebook.com/cdcconcret/', '1', NULL, 1, '2022-06-21 09:22:13', '2022-06-21 09:22:13'),
(9, 'fb_messanger_link', 'Facebook Messanger link', 'https://www.facebook.com/messages/t/101729295552575/', '1', NULL, 1, '2022-06-21 09:22:13', '2022-06-21 09:22:13'),
(10, 'twitter_account', 'Twitter Account', NULL, '1', NULL, 1, '2022-06-21 09:22:13', '2022-06-21 10:07:17'),
(11, 'youtube_account', 'Youtube Account', 'https://www.youtube.com/channel/UCwi3s7ew6ECZx9Q3P5ycsFw', '1', NULL, 1, '2022-06-21 09:22:13', '2022-06-21 10:07:17'),
(12, 'instagram_account', 'Instagram Account', NULL, '1', NULL, 1, '2022-06-21 09:22:13', '2022-06-21 10:07:17'),
(13, 'linkedin_account', 'Linkedin Account', NULL, '1', NULL, 1, '2022-06-21 09:22:13', '2022-06-21 10:07:17'),
(14, 'pinterest_account', 'Pinterest Account', NULL, '1', NULL, 1, '2022-06-21 09:22:13', '2022-06-21 10:07:17'),
(15, 'cdc_moto', 'CDC Concrete Moto', 'Aim to build a durable world, একটি টেকসই পৃথিবী গড়ার লক্ষ্য', '1', NULL, 1, '2022-06-21 09:22:13', '2022-06-21 09:22:13'),
(16, 'about_us', 'About us', '<p style=\"text-align: center; \"><b>About CDC Ready Mix Concrete & Block Industry</b></p><p style=\"text-align: center; \">Total Concrete Solution at your doorstep</p><p>Established in 2021, CDC Ready-Mix Concrete & Block started maneuvering in the country with the view to supplying high-quality ready-mix & Block to participate in the prestigious constructions of private and public projects that can contribute to the nations’ development and prosperity.</p><p>CDC Ready-Mix Concrete takes pride in producing and delivering a wide range of products entailing conventional concrete, high-strength concrete, high-performance concrete, self-compacting concrete, and lean mixes.</p><p>Under the dynamic leadership of Highly experienced management members the company always thrives in introducing quality products that can meet the domestic demand and go beyond.</p><p>We would like to introduce ourselves as a manufacturer of international standard Ready Mix Concrete with independent modern factory based on fully mechanized system and latest technology located in the heart of Capital, Mirpur Area, and Dhaka. By virtue of the long outstanding reputation of CDC Group in the various sector of business we have evolved in the segment of manufacturing Ready Mix Concrete and have already captured a remarkable share in the market for our product, which have been appreciated very much by the end users in respect of quality and service. Besides the quality and service, we are also confident of our product to be of competitive with any other existing brand product of similar type. We would like to reiterate the services that we are willing to render to your esteemed organization are given below for your perusal and kind consideration:</p><p>About We have experienced professionals, senior officers and personnel as well as highly experienced Transport Team, Pump Team, staff and workers who provide both specialized and general services in various fields of the Ready-Mix Concrete & Block Industry.</p><p>We Ensure best quality Concrete by following as ACI method.  Ensure best quality purchase by own supply chain management. Required Strength Class or grade of concrete is guaranteed by following appropriate mix design.</p><p>Ensure best quality stone chips purchase by own supply chain management.</p><p>Sampling from concreted is conducted in accordance with ASTM C172 standard practice for sampling foes mixed concrete. Use foreign construction chemicals</p><p>We have 24 hours of delivery system to meet consumers need in flexible time   Uses quality Raw materials from own resources. Uninterrupted Power Supply We strictly ensure our product quality by procuring raw materials from its appropriate sources by maintaining international standard and grade using our own arrangement. Supported by our own professional engineers’ team.  We always guiding the users regarding all technical as aspects of construction sharing with local engineers & consultants.</p>', '1', NULL, 1, '2022-06-21 09:22:13', '2022-06-26 15:54:45'),
(17, 'mission', 'Mission', '<span style=\"font-family: Arial, sans-serif; font-size: 16px; letter-spacing: 0.7px; text-align: justify;\">Our Mission defines our Roadmap. We excel to develop and deliver value-added Ready Mix & block products to our esteemed customers, consistently outperform our peers, build enduring relationships with our business associates and stakeholders, provide a dynamic and challenging environment for our employees, and aim to achieve incremental growth of our business thereby having a positive economic and social impact on the community and the nation.</span>', '1', NULL, 1, '2022-06-21 09:22:13', '2022-06-29 19:55:07'),
(18, 'vision', 'Vision', '<span style=\"font-family: Arial; font-size: 17px; letter-spacing: 0.7px; text-align: justify;\">Our Vision is to combine the highest quality products with an unmatched level of market and technical support. We will also ensure the most cost-effective and environment-friendly building solutions and will continue to embrace this philosophy, as our customer base grows.</span>', '1', NULL, 1, '2022-06-21 09:22:13', '2022-06-26 15:56:21'),
(19, 'quality_control', 'Quality Control', '<p style=\" font-family: \" arial=\"\" narrow\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 17px;=\"\" line-height:=\"\" 24px;=\"\" letter-spacing:=\"\" normal;\"=\"\">Ready-Mixed Concrete is supplied in a variety of grades and compositions to meet specific demands of customized applications – from simple requirements for small homes to High-Performance Concrete to meet the complex needs of mega projects.<span style=\"color: rgb(90, 87, 94); font-family: \" arial=\"\" narrow\";=\"\" font-size:=\"\" 16px;\"=\"\"> </span></p><p style=\"padding: 0px; font-family: \" arial=\"\" narrow\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 17px;=\"\" line-height:=\"\" 24px;=\"\" letter-spacing:=\"\" normal;=\"\" border:=\"\" 0px=\"\" rgb(225,=\"\" 225,=\"\" 225);\"=\"\">Each of our plants has a fully equipped laboratory with the latest in testing machines to carry out routine and detailed tests of raw materials as well as freshly finished concrete. These in-plant laboratories are organized in association with the facilities of the relevant codes i.e. ASTM, ACI, AASHTHO, BS, IS etc.</p>\r\n<p style=\"padding: 0px; font-family: \" arial=\"\" narrow\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 17px;=\"\" line-height:=\"\" 24px;=\"\" letter-spacing:=\"\" normal;=\"\" border:=\"\" 0px=\"\" rgb(225,=\"\" 225,=\"\" 225);\"=\"\">The quality assurance systems and procedures implemented by CDC Ready-Mixed Concrete monitor every stage of the entire business process. Right from the processing of the order, purchase/control of materials, and concrete mix design to production, sales, delivery, and control of the concrete.</p>', '1', NULL, 1, '2022-06-21 09:22:13', '2022-06-29 19:55:41'),
(20, 'lab_facility', 'Lab Facility', '<p style=\" padding: 0px; font-family: \" arial=\"\" narrow\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 17px;=\"\" line-height:=\"\" 24px;=\"\" letter-spacing:=\"\" normal;=\"\" border:=\"\" 0px=\"\" rgb(225,=\"\" 225,=\"\" 225);\"=\"\">Fully equipped laboratories have been set up at our plants to carry out various tests on concrete and on constituent raw materials. Concrete mixes of various grades are designed in a laboratory as per established procedures to comply with Standard Specification. The following tests are performed in our laboratory arrangement:&nbsp;&nbsp;</p>\r\n        <div class=\"row justify-content-start pl-4\">\r\n            <div>\r\n                <ul>\r\n                    <li style=\"list-style: none;\"><i class=\"fa fa-hand-o-right\" style=\"color:#0099ff; padding-right:5px\"></i>Fineness Modulus (FM)</li>\r\n                    <li style=\"list-style: none;\"><i class=\"fa fa-hand-o-right\" style=\"color:#0099ff; padding-right:5px\"></i>Moisture Content &amp; Water Absorption&nbsp;</li>\r\n                    <li style=\"list-style: none;\"><i class=\"fa fa-hand-o-right\" style=\"color:#0099ff; padding-right:5px\"></i>Unit Weight</li>\r\n                    <li style=\"list-style: none;\"><i class=\"fa fa-hand-o-right\" style=\"color:#0099ff; padding-right:5px\"></i>Specific Gravity</li>\r\n                    <li style=\"list-style: none;\"><i class=\"fa fa-hand-o-right\" style=\"color:#0099ff; padding-right:5px\"></i>Silt &amp; Clay Content</li>\r\n                    <li style=\"list-style: none;\"><i class=\"fa fa-hand-o-right\" style=\"color:#0099ff; padding-right:5px\"></i>Gradation</li>\r\n                    <li style=\"list-style: none;\"><i class=\"fa fa-hand-o-right\" style=\"color:#0099ff; padding-right:5px\"></i>Aggregate Crushing Value (ACV)</li>\r\n                    <li style=\"list-style: none;\"><i class=\"fa fa-hand-o-right\" style=\"color:#0099ff; padding-right:5px\"></i>Los Angles Abrasion Test</li>\r\n                </ul>\r\n            </div>\r\n            <div>\r\n                <ul>\r\n                    <li style=\"list-style: none;\"><i class=\"fa fa-hand-o-right\" style=\"color:#0099ff; padding-right:5px\"></i>Flakiness &amp; Elongation&nbsp;</li>\r\n                    <li style=\"list-style: none;\"><i class=\"fa fa-hand-o-right\" style=\"color:#0099ff; padding-right:5px\"></i>Compressive Strength</li>\r\n                    <li style=\"list-style: none;\"><i class=\"fa fa-hand-o-right\" style=\"color:#0099ff; padding-right:5px\"></i>Fineness</li>\r\n                    <li style=\"list-style: none;\"><i class=\"fa fa-hand-o-right\" style=\"color:#0099ff; padding-right:5px\"></i>Consistency&nbsp;</li>\r\n                    <li style=\"list-style: none;\"><i class=\"fa fa-hand-o-right\" style=\"color:#0099ff; padding-right:5px\"></i>Setting Time</li>\r\n                    <li style=\"list-style: none;\"><i class=\"fa fa-hand-o-right\" style=\"color:#0099ff; padding-right:5px\"></i>Slump Test</li>\r\n                    <li style=\"list-style: none;\"><i class=\"fa fa-hand-o-right\" style=\"color:#0099ff; padding-right:5px\"></i>Admixture Test</li>\r\n                </ul>\r\n            </div>\r\n        </div>', '1', NULL, 1, '2022-06-21 09:22:13', '2022-06-29 12:06:21'),
(21, 'buet_test', 'Buet Test', '<p><span style=\"font-family: \" arial=\"\" narrow\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 17px;=\"\" line-height:=\"\" 24px;=\"\" letter-spacing:=\"\" normal;=\"\" border:=\"\" 0px=\"\" rgb(225,=\"\" 225,=\"\" 225);\"=\"\">The concrete is cured in the cylinder for 28 days and then a batch is sent to BUET authorized lab where the rate of stiffening is measured. The test result is very important for the acceptance of on-site concrete work since it demonstrates the strength of the mix design.</span><br></p>', '1', NULL, 1, '2022-06-21 09:22:13', '2022-06-29 19:55:41'),
(22, 'seo_title', 'Seo Title', 'CDC Concrete Block & Ready Mix Concrete', '1', NULL, 1, '2022-06-21 09:22:13', '2022-06-29 12:29:11'),
(23, 'seo_keywords', 'Seo Keywords', 'cdc, cdcconcrete, block, rmc, ready mix concrete, uni-paver, river block, saucer drain, double interlocking block, erosion control block, hollow block, k6', '1', NULL, 1, '2022-06-21 09:22:13', '2022-06-29 12:29:11'),
(24, 'seo_description', 'Seo Description', 'CDC  Concrete Block & Ready Mix Concrete', '1', NULL, 1, '2022-06-21 09:22:13', '2022-06-29 12:29:11'),
(25, 'mobile_number_2', 'Mobile Number', '01401139944', '1', NULL, 1, '2022-06-21 09:22:13', '2022-06-30 04:36:19'),
(26, 'corporate_office_address', 'Corporate Office Address', 'House 1292, Avenue 02, Road 17, DOHS Mirpur, Dhaka - 1216.', '1', NULL, 1, '2022-06-21 09:22:13', '2022-06-21 09:22:13'),
(27, 'home_image', 'Home Page Image', 'uploads/website_image/image_1920x720_1062c10a5d555e81656818269.png', NULL, NULL, 1, NULL, '2022-07-03 13:17:50'),
(28, 'company_image', 'Company Image', 'uploads/website_image/image_1024x768_1062bd3337ce1b71656566583.jpg', NULL, NULL, 1, NULL, '2022-06-30 05:23:04'),
(29, 'concrete_block_image', 'Concrete Block Image', 'uploads/website_image/image_600x415_1062bd33473dfd51656566599.jpg', NULL, NULL, 1, NULL, '2022-06-30 05:23:19'),
(30, 'rmc_product_image', 'RMC Product Image', 'uploads/website_image/image_600x415_1062bd335a58b0c1656566618.jpg', NULL, NULL, 1, NULL, '2022-06-30 05:23:38'),
(31, 'quality_control_image', 'Quality Control Image', 'uploads/website_image/image_1920x720_1062bd336942f441656566633.png', NULL, NULL, 1, NULL, '2022-06-30 05:23:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_settings`
--
ALTER TABLE `app_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ask_any_questions`
--
ALTER TABLE `ask_any_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cdc_client_infos`
--
ALTER TABLE `cdc_client_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cdc_equipment`
--
ALTER TABLE `cdc_equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cdc_products`
--
ALTER TABLE `cdc_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cdc_product_orders`
--
ALTER TABLE `cdc_product_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cdc_sister_concerns`
--
ALTER TABLE `cdc_sister_concerns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_videos`
--
ALTER TABLE `gallery_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

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
-- Indexes for table `subscribe_infos`
--
ALTER TABLE `subscribe_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_permissions`
--
ALTER TABLE `user_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_infos`
--
ALTER TABLE `website_infos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_settings`
--
ALTER TABLE `app_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ask_any_questions`
--
ALTER TABLE `ask_any_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cdc_client_infos`
--
ALTER TABLE `cdc_client_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cdc_equipment`
--
ALTER TABLE `cdc_equipment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `cdc_products`
--
ALTER TABLE `cdc_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cdc_product_orders`
--
ALTER TABLE `cdc_product_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cdc_sister_concerns`
--
ALTER TABLE `cdc_sister_concerns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery_videos`
--
ALTER TABLE `gallery_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribe_infos`
--
ALTER TABLE `subscribe_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_permissions`
--
ALTER TABLE `user_permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `website_infos`
--
ALTER TABLE `website_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
