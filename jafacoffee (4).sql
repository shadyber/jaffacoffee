-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2022 at 09:06 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jafacoffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_page` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_page` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_page` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram_channel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `address1`, `address2`, `tel`, `tel2`, `email`, `email2`, `longt`, `lat`, `facebook_page`, `instagram_page`, `linkedin_page`, `telegram_channel`, `whatsapp_number`, `created_at`, `updated_at`) VALUES
(1, '13131 35 St NW, Edmonton, AB T5A 5C6,  ', 'Canada', '', '+1 780 604 4778', 'admin@jafacoffee.com', 'info@jafacoffee.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visit` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `photo`, `thumb`, `detail`, `blog_category_id`, `user_id`, `slug`, `tags`, `visit`, `created_at`, `updated_at`) VALUES
(1, 'Animi consequatur doloremque quas sunt quidem quo et.', '/images/3000x2000.png', '/images/10128666_60x60.jpg', 'Corrupti explicabo voluptas quod.', 9, 8, 'Facere excepturi illo consequatur et est et corrupti.', 'corrupti illum totam', 0, '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(2, 'Ut natus impedit optio.', '/images/3000x2000.png', '/images/10128666_60x60.jpg', 'Eaque placeat voluptas hic.', 9, 8, 'Facilis natus et fuga nobis voluptatum dignissimos.', 'nisi est dolorem', 0, '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(3, 'Consectetur rem velit velit.', '/images/3000x2000.png', '/images/10128666_60x60.jpg', 'Non consequuntur est voluptas vitae.', 6, 1, 'Autem laboriosam vero nulla voluptas repudiandae qui maxime.', 'aut vitae sit', 0, '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(4, 'Nihil magni dolorem reprehenderit modi doloremque.', '/images/3000x2000.png', '/images/10128666_60x60.jpg', 'Inventore aut sed itaque.', 6, 9, 'Explicabo in sit expedita vero.', 'est et qui', 0, '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(5, 'Delectus quaerat quis deserunt officia.', '/images/3000x2000.png', '/images/10128666_60x60.jpg', 'Expedita quibusdam omnis dolor mollitia itaque aut.', 1, 5, 'Est et dolores cumque architecto dolor.', 'qui temporibus beatae', 0, '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(6, 'A sint accusamus iusto enim cumque quod autem.', '/images/3000x2000.png', '/images/10128666_60x60.jpg', 'Non voluptates aut consectetur laudantium nesciunt cum.', 6, 6, 'Eum corrupti sed ut eum similique nihil.', 'consequatur mollitia architecto', 0, '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(7, 'Minima impedit id odio placeat sit sequi eos.', '/images/3000x2000.png', '/images/10128666_60x60.jpg', 'Sunt et numquam facilis.', 1, 6, 'Occaecati est est itaque magni amet.', 'consequatur et quia', 0, '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(8, 'Nam nisi eos dicta est.', '/images/3000x2000.png', '/images/10128666_60x60.jpg', 'Explicabo eligendi libero esse rem eligendi doloremque.', 7, 1, 'Cupiditate iste voluptates sed et veritatis.', 'velit laborum sint', 0, '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(9, 'Numquam illo quia quos aut rerum.', '/images/3000x2000.png', '/images/10128666_60x60.jpg', 'Enim fuga laboriosam saepe.', 7, 3, 'Perferendis consequatur reiciendis ut quia nemo.', 'eum sapiente quas', 0, '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(10, 'Ad id illo eos velit.', '/images/3000x2000.png', '/images/10128666_60x60.jpg', 'Quae expedita aliquid quaerat eaque.', 9, 6, 'Ex ducimus ut et iure reiciendis perspiciatis et explicabo.', 'nam dignissimos ipsum', 0, '2022-03-02 09:42:59', '2022-03-02 09:42:59');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '/images/category.png',
  `detail` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `title`, `slug`, `photo`, `detail`, `created_at`, `updated_at`) VALUES
(1, 'sunt', 'non', 'https://via.placeholder.com/640x480.png/002233?text=culture+consectetur', 'Quidem eum eius eos voluptas possimus atque et.', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(2, 'facilis', 'dolore', 'https://via.placeholder.com/640x480.png/00aaff?text=culture+illum', 'Sapiente eos earum ab optio.', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(3, 'cupiditate', 'exercitationem', 'https://via.placeholder.com/640x480.png/0077bb?text=culture+aliquid', 'Veritatis ut rerum error quaerat.', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(4, 'maxime', 'doloribus', 'https://via.placeholder.com/640x480.png/0022cc?text=culture+quod', 'Est velit at eaque.', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(5, 'alias', 'aut', 'https://via.placeholder.com/640x480.png/001122?text=culture+deleniti', 'Et distinctio hic soluta sint.', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(6, 'rerum', 'iusto', 'https://via.placeholder.com/640x480.png/008899?text=culture+ut', 'Repellendus est qui aut magnam ut vitae omnis esse.', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(7, 'temporibus', 'expedita', 'https://via.placeholder.com/640x480.png/008811?text=culture+qui', 'Nostrum et iste cum dolore consequatur.', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(8, 'nemo', 'voluptatem', 'https://via.placeholder.com/640x480.png/00ccdd?text=culture+iusto', 'Quia atque aliquid ullam vitae.', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(9, 'laborum', 'cumque', 'https://via.placeholder.com/640x480.png/004466?text=culture+unde', 'In ullam officia iure beatae.', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(10, 'blanditiis', 'aliquid', 'https://via.placeholder.com/640x480.png/002266?text=culture+quo', 'Earum eveniet ut occaecati magni eaque quis rerum.', '2022-03-02 09:42:59', '2022-03-02 09:42:59');

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
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `thumb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_origion_id` bigint(20) UNSIGNED NOT NULL,
  `item_size_id` bigint(20) UNSIGNED NOT NULL,
  `item_roast_type_id` bigint(20) UNSIGNED NOT NULL,
  `stock_beginning_balance` int(11) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `badge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visit` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `slug`, `detail`, `price`, `thumb`, `photo`, `item_origion_id`, `item_size_id`, `item_roast_type_id`, `stock_beginning_balance`, `user_id`, `badge`, `weight`, `tags`, `visit`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'qui', 'hic', 'Iusto et quasi accusamus error odit cum.', 180, '/images/main_cup.png', '/images/2000x2000.png', 2, 1, 1, 1, 2, NULL, NULL, NULL, 266, '2022-03-02 09:42:59', '2022-03-02 09:42:59', NULL),
(2, 'aut', 'et', 'Inventore eos sed totam odit laboriosam.', 180, '/images/main_cup.png', '/images/2000x2000.png', 2, 3, 1, 1, 1, NULL, NULL, NULL, 261, '2022-03-02 09:42:59', '2022-03-02 09:42:59', NULL),
(3, 'officia', 'magnam', 'Quia eum culpa vitae debitis non sit.', 180, '/images/main_cup.png', '/images/2000x2000.png', 2, 3, 1, 1, 1, NULL, NULL, NULL, 249, '2022-03-02 09:42:59', '2022-03-02 09:42:59', NULL),
(4, 'ut', 'voluptate', 'Earum nihil vitae et est.', 180, '/images/main_cup.png', '/images/2000x2000.png', 3, 3, 1, 1, 2, NULL, NULL, NULL, 126, '2022-03-02 09:42:59', '2022-03-02 09:42:59', NULL),
(5, 'vel', 'et', 'Et nemo minus ut voluptas et ut harum.', 180, '/images/main_cup.png', '/images/2000x2000.png', 3, 2, 1, 1, 2, NULL, NULL, NULL, 234, '2022-03-02 09:42:59', '2022-03-02 09:42:59', NULL),
(6, 'qui', 'aut', 'Placeat sed repellat expedita quia illum.', 180, '/images/main_cup.png', '/images/2000x2000.png', 2, 1, 1, 1, 2, NULL, NULL, NULL, 74, '2022-03-02 09:42:59', '2022-03-02 09:42:59', NULL),
(7, 'nostrum', 'maxime', 'Sed quo ducimus asperiores alias quo.', 180, '/images/main_cup.png', '/images/2000x2000.png', 1, 3, 1, 1, 1, NULL, NULL, NULL, 294, '2022-03-02 09:42:59', '2022-03-02 09:42:59', NULL),
(8, 'ut', 'corporis', 'Dolores enim similique et qui explicabo unde explicabo iusto.', 180, '/images/main_cup.png', '/images/2000x2000.png', 1, 2, 1, 1, 2, NULL, NULL, NULL, 218, '2022-03-02 09:42:59', '2022-03-02 09:42:59', NULL),
(9, 'optio', 'sint', 'Eum quas id officiis aliquam velit magnam.', 180, '/images/main_cup.png', '/images/2000x2000.png', 1, 3, 1, 1, 1, NULL, NULL, NULL, 15, '2022-03-02 09:42:59', '2022-03-02 09:42:59', NULL),
(10, 'nulla', 'deleniti', 'Voluptas voluptatem at ut quas autem.', 180, '/images/main_cup.png', '/images/2000x2000.png', 2, 3, 1, 1, 1, NULL, NULL, NULL, 10, '2022-03-02 09:42:59', '2022-03-02 09:42:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `item_origions`
--

CREATE TABLE `item_origions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_origions`
--

INSERT INTO `item_origions` (`id`, `title`, `detail`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Ethiopia', 'Ethiopia', '/images/icon/origion1.jpg', NULL, NULL),
(2, 'Guatemala', 'Guatemala', '/images/icon/origion2.jpg', NULL, NULL),
(3, 'mexico', 'mexico', '/images/icon/origion3.jpg', NULL, NULL),
(4, 'Colombia', 'Colombia', '/images/icon/origion3.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `item_photos`
--

CREATE TABLE `item_photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'item photo',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `item_roast_types`
--

CREATE TABLE `item_roast_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_roast_types`
--

INSERT INTO `item_roast_types` (`id`, `title`, `detail`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Light', 'Light', '/images/icon/Light.jpg', NULL, NULL),
(2, 'Medium', 'Medium', '/images/icon/Medium.jpg', NULL, NULL),
(3, 'Dark', 'Dark', '/images/icon/Dark.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `item_sizes`
--

CREATE TABLE `item_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_sizes`
--

INSERT INTO `item_sizes` (`id`, `title`, `detail`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Small', '340GG', '/images/icon/340G.jpg', NULL, NULL),
(2, 'Big', 'Big Size 500G', '/images/icon/500g.jpg', NULL, NULL);

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_21_233150_create_item_origions_table', 1),
(6, '2022_01_21_233331_create_item_sizes_table', 1),
(7, '2022_01_21_233345_create_item_roast_types_table', 1),
(8, '2022_01_21_233544_create_items_table', 1),
(9, '2022_01_21_233638_create_orders_table', 1),
(10, '2022_01_25_114207_create_blog_categories_table', 1),
(11, '2022_01_25_132209_create_addresses_table', 1),
(12, '2022_01_25_150739_create_abouts_table', 1),
(13, '2022_01_25_214003_create_blogs_table', 1),
(14, '2022_01_26_100530_create_shipping_infos_table', 1),
(15, '2022_01_26_100551_create_payments_table', 1),
(16, '2022_01_29_152200_create_notifications_table', 1),
(17, '2022_01_30_101956_create_permission_tables', 1),
(18, '2022_01_30_141926_create_reviews_table', 1),
(19, '2022_01_30_152205_create_item_photos_table', 1),
(20, '2022_03_02_124106_create_static_pages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cart` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`cart`)),
  `shipping_info_id` bigint(20) NOT NULL,
  `payment_id` bigint(20) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'created',
  `user_id` bigint(20) UNSIGNED NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payer_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(10,2) NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'usd',
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(2, 'role-create', 'web', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(3, 'role-edit', 'web', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(4, 'role-delete', 'web', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(5, 'item-list', 'web', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(6, 'item-create', 'web', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(7, 'item-edit', 'web', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(8, 'item-delete', 'web', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(9, 'items-list', 'web', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(10, 'items-create', 'web', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(11, 'items-edit', 'web', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(12, 'items-delete', 'web', '2022-03-02 09:42:59', '2022-03-02 09:42:59');

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
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `stars` int(11) NOT NULL DEFAULT 5,
  `comment` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `replay_to` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2022-03-02 09:42:59', '2022-03-02 09:42:59');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_infos`
--

CREATE TABLE `shipping_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payer_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recipient_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apartment_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `static_pages`
--

CREATE TABLE `static_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `terms_and_conditoion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `privacy_policy` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `refund_policy` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_and_order` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `static_pages`
--

INSERT INTO `static_pages` (`id`, `terms_and_conditoion`, `privacy_policy`, `refund_policy`, `shipping_and_order`, `created_at`, `updated_at`) VALUES
(1, '<p>tems and condition updated</p>\r\n<!-- End Comment Form --><!-- Livewire Component wire-end:KzPf2ThhiCeII8pXWHcy -->', '<p>privace policy updated</p>\r\n<!-- End Comment Form --><!-- Livewire Component wire-end:KzPf2ThhiCeII8pXWHcy -->', '<p>refund policy updated</p>\r\n<!-- End Comment Form --><!-- Livewire Component wire-end:KzPf2ThhiCeII8pXWHcy -->', '<p>sdfasdf</p>\r\n\r\n<p><a href=\"/bobbyiliev\">Bobby Iliev</a> ・ Nov 19th, 2020 ・ 10357 Views</p>\r\n\r\n<p><a href=\"https://devdojo.com/report/?link=https://devdojo.com/bobbyiliev/how-to-display-html-tags-in-blade-with-laravel-8\">Report Post</a></p>\r\n\r\n<h1>How To Display HTML Tags In Blade With Laravel 8</h1>\r\n<!-- Author Info --><!-- End Author Info -->\r\n\r\n<h2>Introduction</h2>\r\n\r\n<p>Laravel is a great PHP framework that allows you to use Blade Templates for your frontend.</p>\r\n\r\n<p>Blade is a very powerful templating engine provided with Laravel that does not restrict users from using plain PHP code in their views.</p>\r\n\r\n<p>Blade view files that use the .blade.php file extension and are typically stored in the resources/views directory.</p>\r\n\r\n<p>In this tutorial, you will learn how to display HTML in Blade with Laravel 8!</p>\r\n\r\n<h2>Prerequisites</h2>\r\n\r\n<p>If you don&#39;t already have a Laravel application up and running, I suggest using a DigitialOcean Ubuntu Droplet. You can use my affiliate code to get <a href=\"https://m.do.co/c/2a9bba940f39\">free $100 DigitalOcean credit</a> to spin up your own servers!</p>\r\n\r\n<p>If you do not have that yet, you can follow the steps from this tutorial on how to do that:</p>\r\n\r\n<ul>\r\n	<li><a href=\"https://devdojo.com/bobbyiliev/how-to-install-laravel-on-digitalocean-with-1-click\">How to Install Laravel on DigitalOcean with 1-Click</a></li>\r\n</ul>\r\n\r\n<p>Or you could use this awesome script to do the installation:</p>\r\n\r\n<ul>\r\n	<li><a href=\"https://devdojo.com/episode/laravel-on-digital-ocean-with-larasail\">LaraSail</a></li>\r\n</ul>\r\n\r\n<h2>Display HTML In Laravel Blade Views</h2>\r\n\r\n<p>First, you need to make sure your file uses the <code>.blade.php</code> file extension and is located in the <code>resources/views</code> folder. It should look something like this:</p>\r\n\r\n<p><img alt=\"index.blade.php\" src=\"https://cdn.devdojo.com/images/november2020/125956057_361683805094042_391090211638948820_n.png\" /></p>\r\n\r\n<p><a href=\"/tails\" target=\"_blank\"><img src=\"https://cdn.devdojo.com/images/january2021/970x901.jpg\" /> Checkout our latest product - the ultimate tailwindcss page creator 🚀 </a></p>\r\n\r\n<p>By default you would use the following syntax <code>{{ $some_variable }}</code> to echo out the content of a specific variable in Blade. By default the <code>{{ }}</code> escapes the HTML tags.</p>\r\n\r\n<p>So let&#39;s say that you have a blog post with a <code>$post</code> collection which has some HTML elements in the <code>body</code> proerty, if you were to use the following:</p>\r\n\r\n<pre>\r\n<code>&lt;div&gt;{{ $post-&gt;body }}&lt;/div&gt;\r\n</code></pre>\r\n\r\n<p>All of the HTML tags would not be rendered as HTML but plain text:</p>\r\n\r\n<p><img alt=\"HTML tags in blade laravel\" src=\"https://imgur.com/VRv7cTE.png\" /></p>\r\n\r\n<p>If you don&#39;t want your HTML tags to be escaped then you should use <code>{!! !!}</code> just like this:</p>\r\n\r\n<pre>\r\n<code>&lt;div&gt;{!! $post-&gt;body !!}&lt;/div&gt;\r\n</code></pre>\r\n\r\n<p>Output:</p>\r\n\r\n<p><img alt=\"HTML rendered in blade laravel\" src=\"https://imgur.com/pOb8xQW.png\" /></p>\r\n\r\n<p>If you print out both and check the page source, you will see the following output:</p>\r\n\r\n<p><img alt=\"Laravel blade escape html elements\" src=\"https://imgur.com/BaPKQrG.png\" /></p>\r\n\r\n<pre>\r\n<code>&amp;lt;h1&amp;gt;Hello DevDojo&amp;lt;/h1&amp;gt;\r\n&lt;h1&gt;Hello DevDojo&lt;/h1&gt;\r\n</code></pre>\r\n\r\n<p>In the first case, you can see how the HTML elements were escaped, and in the second case where we use <code>{!! !!}</code> we got the actual HTML tags.</p>\r\n\r\n<p>It is more secure to use <code>{{ }}</code> as it will strip out any unwanted tags, but there are still times where you might need to use <code>{!! !!}</code>.</p>\r\n\r\n<h2>Conclusion</h2>\r\n\r\n<p>Blade templating is beneficial and can make your life easier.</p>\r\n\r\n<p>If you want to learn more about Blade Templating, check out the official Laravel Documentation:</p>\r\n\r\n<p><a href=\"https://laravel.com/docs/8.x/blade\">https://laravel.com/docs/8.x/blade</a></p>\r\n\r\n<p>I hope that this post has helped you!</p>\r\n<!-- Dynamically load comments that then fetches the content -->\r\n\r\n<h2>Comments (0)</h2>\r\n<!-- Start Comment Form -->\r\n\r\n<p>Please <a href=\"/login\">login</a>, or <a href=\"/signup\">signup</a> to write a comment.</p>\r\n<!-- End Comment Form --><!-- Livewire Component wire-end:KzPf2ThhiCeII8pXWHcy -->', NULL, '2022-03-02 16:51:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '/images/avatar/undraw_profile.svg',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `tel`, `avatar`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin@jafacoffee.com', '09', '/images/avatar/undraw_profile.svg', '2021-11-11 08:11:11', '$2y$10$3yUM5zwQXa2A5C1Yg2TqueVGy/2AVwcA8iiQbGOvSsDBbw2tmZdom', NULL, '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(2, 'Dr. Shania Muller PhD', 'rpfannerstill@example.net', NULL, '/images/avatar/undraw_profile.svg', '2022-03-02 09:42:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'FrY5RoIFt7', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(3, 'Prof. Lisandro Douglas', 'cordell95@example.org', NULL, '/images/avatar/undraw_profile.svg', '2022-03-02 09:42:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qBc4ipXFOS', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(4, 'Ms. Hulda Krajcik', 'micheal94@example.org', NULL, '/images/avatar/undraw_profile.svg', '2022-03-02 09:42:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qlZoBy70K4', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(5, 'Jaylen Bartoletti', 'harber.angie@example.org', NULL, '/images/avatar/undraw_profile.svg', '2022-03-02 09:42:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RtPzniHwcV', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(6, 'Sunny O\'Reilly Sr.', 'ibarton@example.net', NULL, '/images/avatar/undraw_profile.svg', '2022-03-02 09:42:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'B8KmVZQFjP', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(7, 'Alyson Ortiz', 'vklein@example.org', NULL, '/images/avatar/undraw_profile.svg', '2022-03-02 09:42:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'mHDMxO8YTx', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(8, 'Ms. Jazmyne Paucek Jr.', 'wcrist@example.com', NULL, '/images/avatar/undraw_profile.svg', '2022-03-02 09:42:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1mVkjrDKEE', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(9, 'Giovani Waters', 'johnston.retta@example.com', NULL, '/images/avatar/undraw_profile.svg', '2022-03-02 09:42:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'PqIOi0i8TT', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(10, 'Prof. Cecil Torp', 'toy.raoul@example.net', NULL, '/images/avatar/undraw_profile.svg', '2022-03-02 09:42:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'R1x9ZWk2ef', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(11, 'Eino Murazik', 'rachel42@example.net', NULL, '/images/avatar/undraw_profile.svg', '2022-03-02 09:42:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'KT1Le6h7Ro', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(12, 'Madilyn Klocko', 'archibald.raynor@example.org', NULL, '/images/avatar/undraw_profile.svg', '2022-03-02 09:42:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'd9ZRlpQsUl', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(13, 'Ms. Constance Hauck', 'oberbrunner.abagail@example.com', NULL, '/images/avatar/undraw_profile.svg', '2022-03-02 09:42:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'blzkcL7vse', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(14, 'Ada Ullrich', 'aharber@example.com', NULL, '/images/avatar/undraw_profile.svg', '2022-03-02 09:42:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'emFU5TlKcp', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(15, 'Miss Angela Ledner Sr.', 'rippin.josefa@example.org', NULL, '/images/avatar/undraw_profile.svg', '2022-03-02 09:42:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'hML2AUzBsL', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(16, 'Art Kerluke', 'fay.shana@example.com', NULL, '/images/avatar/undraw_profile.svg', '2022-03-02 09:42:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Yjtvk3E1g8', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(17, 'Dr. Wendy Sipes DVM', 'estokes@example.com', NULL, '/images/avatar/undraw_profile.svg', '2022-03-02 09:42:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Ke0NLsm0sK', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(18, 'Clarabelle Wilderman', 'kelton71@example.com', NULL, '/images/avatar/undraw_profile.svg', '2022-03-02 09:42:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vGOh7nZxnJ', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(19, 'Dr. Daren Mitchell DVM', 'maxie.auer@example.com', NULL, '/images/avatar/undraw_profile.svg', '2022-03-02 09:42:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HQwHH5ffYx', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(20, 'Sheila Krajcik', 'nrempel@example.com', NULL, '/images/avatar/undraw_profile.svg', '2022-03-02 09:42:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'k5T000HspW', '2022-03-02 09:42:59', '2022-03-02 09:42:59'),
(21, 'Jaunita Dietrich Jr.', 'daphnee60@example.com', NULL, '/images/avatar/undraw_profile.svg', '2022-03-02 09:42:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5wqAmODBjY', '2022-03-02 09:42:59', '2022-03-02 09:42:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`),
  ADD KEY `blogs_blog_category_id_foreign` (`blog_category_id`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_origions`
--
ALTER TABLE `item_origions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_photos`
--
ALTER TABLE `item_photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_photos_item_id_foreign` (`item_id`);

--
-- Indexes for table `item_roast_types`
--
ALTER TABLE `item_roast_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_sizes`
--
ALTER TABLE `item_sizes`
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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_user_id_foreign` (`user_id`);

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
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
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
-- Indexes for table `shipping_infos`
--
ALTER TABLE `shipping_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shipping_infos_user_id_foreign` (`user_id`);

--
-- Indexes for table `static_pages`
--
ALTER TABLE `static_pages`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `item_origions`
--
ALTER TABLE `item_origions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `item_photos`
--
ALTER TABLE `item_photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_roast_types`
--
ALTER TABLE `item_roast_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `item_sizes`
--
ALTER TABLE `item_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipping_infos`
--
ALTER TABLE `shipping_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `static_pages`
--
ALTER TABLE `static_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_blog_category_id_foreign` FOREIGN KEY (`blog_category_id`) REFERENCES `blog_categories` (`id`),
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `item_photos`
--
ALTER TABLE `item_photos`
  ADD CONSTRAINT `item_photos_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);

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
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shipping_infos`
--
ALTER TABLE `shipping_infos`
  ADD CONSTRAINT `shipping_infos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
