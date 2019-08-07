-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2019 at 12:03 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `advs`
--

CREATE TABLE `advs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_code` tinyint(1) NOT NULL,
  `adv_locations_id` int(11) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `start_at` date NOT NULL,
  `expire_at` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advs`
--

INSERT INTO `advs` (`id`, `title`, `url`, `photo`, `code`, `is_code`, `adv_locations_id`, `deleted`, `start_at`, `expire_at`, `created_at`, `updated_at`) VALUES
(1, 'اعلان عن سيارة', 'http://youtube.com/video?v=ajhgdhj', 'bmw-001.jpg', NULL, 1, 1, 0, '2019-04-22', '2019-05-22', '2019-04-22 03:57:04', '2019-04-22 04:55:19');

-- --------------------------------------------------------

--
-- Table structure for table `adv_locations`
--

CREATE TABLE `adv_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adv_locations`
--

INSERT INTO `adv_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'اعلى الصفحة', '2019-04-21 21:00:00', '2019-04-21 21:00:00'),
(2, 'على يمين الصفحة', '2019-04-21 21:00:00', '2019-04-21 21:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `writer_id` int(11) DEFAULT NULL,
  `categories_id` int(11) NOT NULL,
  `types_id` int(11) NOT NULL,
  `photos_id` int(11) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `in_home` tinyint(1) NOT NULL DEFAULT '0',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `sub_title`, `summary`, `date`, `details`, `writer_id`, `categories_id`, `types_id`, `photos_id`, `published`, `in_home`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 'عنوان تجريبي لمقال معين', 'خلال اليومين السابقين', 'تفاصيل المقال تكون هنا تفاصيل المقال تكون هنا تفاصيل المقال تكون هنا تفاصيل المقال تكون هنا تفاصيل المقال تكون هنا', '2019-05-05', 'تفاصيل المقال تكون هنا تفاصيل المقال تكون هنا تفاصيل المقال تكون هنا تفاصيل المقال تكون هنا تفاصيل المقال تكون هنا تفاصيل المقال تكون هنا تفاصيل المقال تكون هنا تفاصيل المقال تكون هنا تفاصيل المقال تكون هنا تفاصيل المقال تكون هنا تفاصيل المقال تكون هنا تفاصيل المقال تكون هنا تفاصيل المقال تكون هنا تفاصيل المقال تكون هنا تفاصيل المقال تكون هنا تفاصيل المقال تكون هنا تفاصيل المقال تكون هنا تفاصيل المقال تكون هنا تفاصيل المقال تكون هنا تفاصيل المقال تكون هنا تفاصيل المقال تكون هنا تفاصيل المقال تكون هنا تفاصيل المقال تكون هنا تفاصيل المقال تكون هنا تفاصيل المقال تكون هنا', 1, 1, 1, 1, 1, 1, 0, '2019-04-20 05:41:46', '2019-04-20 05:45:53'),
(2, 'خبر عن سيارة BMW', '2019 - 2020', 'خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW', '2019-05-05', 'خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW خبر عن سيارة BMW', 1, 2, 1, 3, 1, 1, 0, '2019-04-22 03:35:47', '2019-04-22 03:41:26');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 'اخبار سياسية', 0, '2019-04-15 06:08:47', '2019-04-17 03:16:09'),
(2, 'اخبار رياضية', 0, '2019-04-15 06:09:09', '2019-04-17 03:25:27');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL,
  `show_in_menu` tinyint(1) NOT NULL DEFAULT '1',
  `order_id` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `title`, `route_name`, `parent_id`, `show_in_menu`, `order_id`, `created_at`, `updated_at`, `icon`) VALUES
(1, 'المقالات', NULL, 0, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', 'flaticon-layers'),
(2, 'اضافة مقال جديد', 'article.create', 1, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', ''),
(3, 'ادارة المقالات', 'article.index', 1, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', ''),
(4, 'سلة المهملات', 'article.trash', 1, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', ''),
(5, 'تصنيفات المقالات', NULL, 0, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', 'fa fa-list-alt'),
(6, 'اضافة تصنيف جديد', 'category.create', 5, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', ''),
(7, 'ادارة تصنيفات المقالات', 'category.index', 5, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', ''),
(8, 'سلة المهملات', 'category.trash', 5, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', ''),
(9, 'أنواع المقالات', NULL, 0, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', 'fa fa-align-justify'),
(10, 'اضافة نوع جديد', 'type.create', 9, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', ''),
(11, 'ادارة أنواع المقالات', 'type.index', 9, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', ''),
(12, 'سلة المهملات', 'type.trash', 9, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', ''),
(13, 'الكتاب', NULL, 0, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', 'fa fa-users'),
(14, 'اضافة كاتب جديد', 'writers.create', 13, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', ''),
(15, 'ادارة الكتاب', 'writers.index', 13, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', ''),
(16, 'سلة المهملات', 'writers.trash', 13, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', ''),
(17, 'الصور', NULL, 0, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', 'fa fa-list'),
(18, 'اضافة صورة جديدة', 'photo.create', 17, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', ''),
(19, 'ادارة الصور', 'photo.index', 17, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', ''),
(20, 'سلة المهملات', 'photo.trash', 17, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', ''),
(21, 'تصنيفات الصور', NULL, 0, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', 'fa fa-file-image'),
(22, 'اضافة تصنيف صورة جديد', 'photo-category.create', 21, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', ''),
(23, 'ادارة تصنيفات الصور', 'photo-category.index', 21, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', ''),
(24, 'سلة المهملات', 'photo-category.trash', 21, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', ''),
(25, 'الفيديو', NULL, 0, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', 'fa fa-video'),
(26, 'اضافة فيديو جديد', 'video.create', 25, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', ''),
(27, 'ادارة الصور', 'video.index', 25, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', ''),
(28, 'سلة المهملات', 'video.trash', 25, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', ''),
(29, 'تصنيفات الفيديو', NULL, 0, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', 'fa fa-file-video'),
(30, 'اضافة تصنيف فيديو جديد', 'video-category.create', 29, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', ''),
(31, 'ادارة تصنيفات الصور', 'video-category.index', 29, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', ''),
(32, 'سلة المهملات', 'video-category.trash', 29, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', ''),
(33, 'الاعلانات', NULL, 0, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', 'flaticon-laptop'),
(34, 'اضافة اعلان جديد', 'adv.create', 33, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', ''),
(35, 'ادارة الاعلانات', 'adv.index', 33, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', ''),
(36, 'سلة المهملات', 'adv.trash', 33, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', ''),
(37, 'المستخدمين', NULL, 0, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', 'fa fa-user'),
(38, 'اضافة مستخدم جديد', 'users.create', 37, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', ''),
(39, 'ادارة المستخدمين', 'users.index', 37, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', ''),
(40, 'سلة المهملات', 'users.trash', 37, 1, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', ''),
(41, 'صلاحيات المستخدم', 'users.links', 37, 0, 1, '2019-04-22 05:29:58', '2019-04-22 05:29:58', '');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_15_070013_create_categories_table', 1),
(4, '2019_04_15_070025_create_types_table', 1),
(5, '2019_04_15_070037_create_articles_table', 1),
(7, '2019_04_15_070103_create_photos_table', 1),
(8, '2019_04_15_070113_create_photo_categories_table', 1),
(9, '2019_04_15_070121_create_videos_table', 1),
(10, '2019_04_15_070131_create_video_categories_table', 1),
(11, '2019_04_15_070144_create_links_table', 1),
(13, '2019_04_15_070210_create_adv_locations_table', 1),
(14, '2019_04_15_070222_create_advs_table', 1),
(15, '2019_04_15_070051_create_writers_table', 2),
(17, '2019_04_20_055937_add_deleted_to_user', 3),
(18, '2019_04_22_052608_make_columns_nullable_adv_table', 4),
(19, '2019_04_22_081440_add_icon_column_to_links_table', 5),
(20, '2019_04_15_070149_create_users_links_table', 6);

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
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_categories_id` int(11) NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `tag`, `photo_categories_id`, `file`, `deleted`, `published`, `created_at`, `updated_at`) VALUES
(1, 'BMW', 2, 'bmw-001.jpg', 0, 1, '2019-04-20 02:42:39', '2019-04-20 03:14:20'),
(2, 'BMW 7', 2, 'qjt5ecUWlnqeCTOq5fPZohB3u7xanwbIYhcDexaF.jpeg', 0, 1, '2019-04-20 02:51:24', '2019-04-20 03:14:28'),
(3, 'Subaru', 1, 'UV3QanEtmSSsYYEK8BEcbOAj0QAavFYyMEaSGI7r.jpeg', 0, 0, '2019-04-20 02:55:24', '2019-04-20 03:02:01');

-- --------------------------------------------------------

--
-- Table structure for table `photo_categories`
--

CREATE TABLE `photo_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photo_categories`
--

INSERT INTO `photo_categories` (`id`, `name`, `deleted`, `published`, `created_at`, `updated_at`) VALUES
(1, 'عام', 0, 1, '2019-04-20 02:38:31', '2019-04-20 03:16:01'),
(2, 'سيارات', 0, 0, '2019-04-20 02:39:04', '2019-04-20 02:39:36');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 'خبر', 0, '2019-04-20 05:15:26', '2019-04-20 05:15:43'),
(2, 'تقرير', 0, '2019-04-20 05:15:30', '2019-04-20 05:15:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted`) VALUES
(1, 'Basel M. Qeshta', 'basel1090@gmail.com', NULL, '$2y$10$aaHMZ9WegomO44BkuAjieuya0Q.muobkhVUK710tmvQCaWErzxJfK', NULL, '2019-04-20 05:04:25', '2019-04-20 05:06:08', 0),
(2, 'Mohammed Ali', 'mhd@ali.com', NULL, '$2y$10$aaHMZ9WegomO44BkuAjieuya0Q.muobkhVUK710tmvQCaWErzxJfK', NULL, '2019-04-20 05:07:19', '2019-04-20 05:07:19', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_links`
--

CREATE TABLE `users_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` int(11) NOT NULL,
  `links_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_links`
--

INSERT INTO `users_links` (`id`, `users_id`, `links_id`, `created_at`, `updated_at`) VALUES
(10, 1, 1, NULL, NULL),
(11, 1, 2, NULL, NULL),
(12, 1, 3, NULL, NULL),
(13, 1, 4, NULL, NULL),
(14, 1, 5, NULL, NULL),
(15, 1, 6, NULL, NULL),
(16, 1, 7, NULL, NULL),
(17, 1, 8, NULL, NULL),
(18, 1, 9, NULL, NULL),
(19, 1, 10, NULL, NULL),
(20, 1, 11, NULL, NULL),
(21, 1, 12, NULL, NULL),
(22, 1, 13, NULL, NULL),
(23, 1, 14, NULL, NULL),
(24, 1, 15, NULL, NULL),
(25, 1, 16, NULL, NULL),
(26, 1, 17, NULL, NULL),
(27, 1, 18, NULL, NULL),
(28, 1, 19, NULL, NULL),
(29, 1, 20, NULL, NULL),
(30, 1, 21, NULL, NULL),
(31, 1, 22, NULL, NULL),
(32, 1, 23, NULL, NULL),
(33, 1, 24, NULL, NULL),
(34, 1, 25, NULL, NULL),
(35, 1, 26, NULL, NULL),
(36, 1, 27, NULL, NULL),
(37, 1, 28, NULL, NULL),
(38, 1, 29, NULL, NULL),
(39, 1, 30, NULL, NULL),
(40, 1, 31, NULL, NULL),
(41, 1, 32, NULL, NULL),
(42, 1, 33, NULL, NULL),
(43, 1, 34, NULL, NULL),
(44, 1, 35, NULL, NULL),
(45, 1, 36, NULL, NULL),
(46, 1, 37, NULL, NULL),
(47, 1, 38, NULL, NULL),
(48, 1, 39, NULL, NULL),
(49, 1, 40, NULL, NULL),
(50, 1, 41, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_categories_id` int(11) NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `video_categories_id`, `url`, `deleted`, `published`, `created_at`, `updated_at`) VALUES
(1, 'فيديو تعليمي', 1, 'http://youtube.com/video?v=ajhgdhj', 0, 1, '2019-04-20 04:38:58', '2019-04-20 04:44:11'),
(2, 'فيديو تعليمي 2030', 1, 'http://youtube.com/video?v=ajhgdhj', 0, 0, '2019-04-20 04:42:41', '2019-04-20 04:44:22'),
(3, 'فيديو تعليمي 2050', 1, 'http://youtube.com/video?v=ajhgdhj', 1, 0, '2019-04-20 04:43:13', '2019-04-20 04:44:14');

-- --------------------------------------------------------

--
-- Table structure for table `video_categories`
--

CREATE TABLE `video_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_categories`
--

INSERT INTO `video_categories` (`id`, `name`, `deleted`, `published`, `created_at`, `updated_at`) VALUES
(1, 'تعليم', 0, 1, '2019-04-20 04:22:38', '2019-04-20 04:46:34'),
(4, 'وثائقي', 0, 0, '2019-04-20 04:49:50', '2019-04-20 04:49:50');

-- --------------------------------------------------------

--
-- Table structure for table `writers`
--

CREATE TABLE `writers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `facebook_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `writers`
--

INSERT INTO `writers` (`id`, `name`, `job_title`, `email`, `photo`, `details`, `facebook_url`, `twitter_url`, `linkedin_url`, `youtube_url`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 'Basel Mohammed Qeshta', 'صحفي', 'basel1090@gmail.com', 'PeIk0n4GA0DLaBgYZZH2wJH1eBlTQVjGTis4C7WJ.jpeg', NULL, 'https://fb.com', NULL, NULL, NULL, 0, '2019-04-20 03:44:47', '2019-04-20 03:50:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advs`
--
ALTER TABLE `advs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adv_locations`
--
ALTER TABLE `adv_locations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `adv_locations_name_unique` (`name`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
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
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo_categories`
--
ALTER TABLE `photo_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `photo_categories_name_unique` (`name`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `types_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_links`
--
ALTER TABLE `users_links`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_links_links_id_users_id_unique` (`links_id`,`users_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_categories`
--
ALTER TABLE `video_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `video_categories_name_unique` (`name`);

--
-- Indexes for table `writers`
--
ALTER TABLE `writers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advs`
--
ALTER TABLE `advs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adv_locations`
--
ALTER TABLE `adv_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `photo_categories`
--
ALTER TABLE `photo_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_links`
--
ALTER TABLE `users_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `video_categories`
--
ALTER TABLE `video_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `writers`
--
ALTER TABLE `writers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
