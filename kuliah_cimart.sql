-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 07:22 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuliah_cimart`
--

-- --------------------------------------------------------

--
-- Table structure for table `cruds`
--

CREATE TABLE `cruds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cruds`
--

INSERT INTO `cruds` (`id`, `table_name`, `input_label`, `input_type`, `created_at`, `updated_at`) VALUES
(20, 'kategoris', 'Key Kategori', 'text', '2022-01-02 07:45:51', '2022-01-02 07:45:51'),
(21, 'kategoris', 'Nama Kategori', 'text', '2022-01-02 07:45:51', '2022-01-02 07:45:51'),
(22, 'expedisis', 'Key Expedisi', 'text', '2022-01-02 07:52:53', '2022-01-02 07:52:53'),
(23, 'expedisis', 'Nama Expedisi', 'text', '2022-01-02 07:52:53', '2022-01-02 07:52:53'),
(24, 'expedisis', 'Logo', 'image', '2022-01-02 07:52:53', '2022-01-02 07:52:53'),
(25, 'pembayarans', 'Jenis Payment (Tunai / Transfer)', 'text', '2022-01-02 08:00:01', '2022-01-02 08:00:01'),
(26, 'pembayarans', 'Kode Metode Pembayaran', 'text', '2022-01-02 08:00:01', '2022-01-02 08:00:01'),
(27, 'pembayarans', 'Metode Pembayaran', 'text', '2022-01-02 08:00:01', '2022-01-02 08:00:01'),
(28, 'products', 'Title', 'text', '2022-01-03 08:36:30', '2022-01-03 08:36:30'),
(29, 'products', 'Product image', 'image', '2022-01-03 08:36:30', '2022-01-03 08:36:50'),
(30, 'products', 'Harga', 'number', '2022-01-03 08:36:30', '2022-01-03 08:36:50'),
(31, 'products', 'Stok', 'number', '2022-01-03 08:36:30', '2022-01-03 08:36:50'),
(32, 'products', 'Deskripsi', 'tiny', '2022-01-03 08:36:30', '2022-01-03 08:36:50'),
(33, 'products', 'Kategori', 'text', '2022-01-03 08:36:30', '2022-01-03 08:36:30');

-- --------------------------------------------------------

--
-- Table structure for table `expedisis`
--

CREATE TABLE `expedisis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ekspedisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_ekspedisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expedisis`
--

INSERT INTO `expedisis` (`id`, `key`, `ekspedisi`, `logo_ekspedisi`, `created_at`, `updated_at`) VALUES
(1, 'jne', 'JNE', 'expedisis/New_Logo_JNE.png', '2022-01-03 05:31:52', '2022-01-03 05:31:52'),
(2, 'sicepat', 'Sicepat', 'Tokopedia-dikabarkan-investasi-SiCepat-EKRUT.jpg', '2022-01-03 09:06:19', '2022-01-03 09:07:00');

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
-- Table structure for table `form_types`
--

CREATE TABLE `form_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `input_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_types`
--

INSERT INTO `form_types` (`id`, `input_value`, `input_type`) VALUES
(1, 'text', 'text'),
(2, 'number', 'number'),
(3, 'tiny', 'code editor'),
(4, 'date', 'date'),
(5, 'file', 'file'),
(6, 'image', 'image');

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `key`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'mnmn', 'Minuman', '2022-01-02 07:47:21', '2022-01-02 07:47:21'),
(2, 'fsh', 'Fashion', '2022-01-03 02:34:52', '2022-01-03 02:34:52');

-- --------------------------------------------------------

--
-- Table structure for table `keranjangs`
--

CREATE TABLE `keranjangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_product` bigint(20) UNSIGNED NOT NULL,
  `kuantitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keranjangs`
--

INSERT INTO `keranjangs` (`id`, `id_user`, `id_product`, `kuantitas`, `message`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '10', NULL, '2022-01-02 12:09:40', '2022-01-02 12:09:40');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `icon`, `menu`, `url`, `created_at`, `updated_at`) VALUES
(1, 'server', 'Database', 'database', NULL, NULL),
(2, 'list-ul', 'Menu', 'menu', NULL, NULL),
(3, 'tools', 'CRUD', 'crud', NULL, NULL),
(12, 'tags-fill', 'kategori', 'kategori', '2022-01-02 07:45:51', '2022-01-02 07:45:51'),
(14, 'credit-card-fill', 'pembayaran', 'pembayaran', '2022-01-02 08:00:01', '2022-01-02 08:00:01'),
(15, 'box-seam', 'expedisi', 'expedisi', '2022-01-03 03:58:23', '2022-01-03 04:00:54'),
(16, 'person-fill', 'profile', 'profile', '2022-01-03 04:01:37', '2022-01-03 04:01:37'),
(19, 'cart-fill', 'product', 'product', '2022-01-03 08:36:30', '2022-01-03 08:36:30');

-- --------------------------------------------------------

--
-- Table structure for table `menu_forms`
--

CREATE TABLE `menu_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_length` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_forms`
--

INSERT INTO `menu_forms` (`id`, `table_name`, `data_name`, `data_type`, `data_length`, `created_at`, `updated_at`) VALUES
(6, 'testers', 'image', 'varchar', '', '2022-01-02 06:37:51', '2022-01-02 06:37:51'),
(7, 'testers', 'file', 'varchar', '', '2022-01-02 06:37:51', '2022-01-02 06:37:51'),
(8, 'testers', 'code', 'text', '', '2022-01-02 06:37:51', '2022-01-02 06:37:51'),
(9, 'testers', 'name', 'varchar', '', '2022-01-02 06:37:51', '2022-01-02 06:37:51'),
(10, 'testers', 'int', 'varchar', '', '2022-01-02 06:37:51', '2022-01-02 06:37:51'),
(11, 'cobas', 'file', 'varchar', '', '2022-01-02 06:38:23', '2022-01-02 06:38:23'),
(12, 'cobas', 'name', 'varchar', '', '2022-01-02 06:38:23', '2022-01-02 06:38:23'),
(13, 'cobas', 'image', 'varchar', '', '2022-01-02 06:38:23', '2022-01-02 06:38:23'),
(14, 'cobas', 'code', 'text', '', '2022-01-02 06:38:23', '2022-01-02 06:38:23'),
(20, 'kategoris', 'key', 'varchar', '', '2022-01-02 07:41:20', '2022-01-02 07:41:20'),
(21, 'kategoris', 'kategori', 'varchar', '', '2022-01-02 07:41:20', '2022-01-02 07:41:20'),
(22, 'expedisis', 'key', 'varchar', '', '2022-01-02 07:50:18', '2022-01-02 07:50:18'),
(23, 'expedisis', 'ekspedisi', 'varchar', '', '2022-01-02 07:50:18', '2022-01-02 07:50:18'),
(24, 'expedisis', 'logo_ekspedisi', 'varchar', '', '2022-01-02 07:50:18', '2022-01-02 07:50:18'),
(25, 'pembayarans', 'jenis', 'varchar', '', '2022-01-02 07:58:06', '2022-01-02 07:58:06'),
(26, 'pembayarans', 'kode', 'varchar', '', '2022-01-02 07:58:06', '2022-01-02 07:58:06'),
(27, 'pembayarans', 'payment', 'varchar', '', '2022-01-02 07:58:06', '2022-01-02 07:58:06'),
(28, 'pesanans', 'id_user', 'string', '50', '2022-01-02 10:48:08', '2022-01-02 10:48:08'),
(29, 'pesanans', 'name', 'string', '100', '2022-01-02 10:48:08', '2022-01-02 10:48:08'),
(30, 'pesanans', 'no_hp', 'string', '20', '2022-01-02 10:48:08', '2022-01-02 10:48:08'),
(31, 'pesanans', 'id_product', 'integer', '20', '2022-01-02 10:48:08', '2022-01-02 10:48:08'),
(32, 'pesanans', 'kuantitas', 'varchar', '100', '2022-01-02 10:48:08', '2022-01-02 10:48:08'),
(33, 'pesanans', 'varian', 'varchar', '20', '2022-01-02 10:48:08', '2022-01-02 10:48:08'),
(34, 'pesanans', 'alamat', 'text', '', '2022-01-02 10:48:08', '2022-01-02 10:48:08'),
(35, 'pesanans', 'id_ekspedisi', 'varchar', '50', '2022-01-02 10:48:08', '2022-01-02 10:48:08'),
(36, 'pesanans', 'id_pembayaran', 'varchar', '100', '2022-01-02 10:48:08', '2022-01-02 10:48:08'),
(37, 'pesanans', 'status', 'varchar', '20', '2022-01-02 10:48:08', '2022-01-02 10:48:08'),
(38, 'keranjangs', 'id_user', 'varchar', '', '2022-01-02 10:48:29', '2022-01-02 10:48:29'),
(39, 'keranjangs', 'id_user', 'varchar', '', '2022-01-02 10:49:33', '2022-01-02 10:49:33'),
(40, 'keranjangs', 'id_product', 'varchar', '', '2022-01-02 10:49:33', '2022-01-02 10:49:33'),
(41, 'keranjangs', 'kuantitas', 'varchar', '', '2022-01-02 10:49:33', '2022-01-02 10:49:33'),
(42, 'keranjangs', 'varian', 'varchar', '', '2022-01-02 10:49:33', '2022-01-02 10:49:33'),
(43, 'keranjangs', 'message', 'text', '', '2022-01-02 10:49:33', '2022-01-02 10:49:33'),
(44, 'products', 'title', 'varchar', '', '2022-01-03 08:31:24', '2022-01-03 08:31:24'),
(45, 'products', 'image', 'varchar', '', '2022-01-03 08:31:24', '2022-01-03 08:31:24'),
(46, 'products', 'harga', 'varchar', '', '2022-01-03 08:31:24', '2022-01-03 08:31:24'),
(47, 'products', 'stok', 'varchar', '', '2022-01-03 08:31:24', '2022-01-03 08:31:24'),
(48, 'products', 'deskripsi', 'varchar', '', '2022-01-03 08:31:24', '2022-01-03 08:31:24'),
(49, 'products', 'kategori', 'varchar', '', '2022-01-03 08:31:24', '2022-01-03 08:31:24');

-- --------------------------------------------------------

--
-- Table structure for table `menu_roles`
--

CREATE TABLE `menu_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `roles_id` bigint(20) UNSIGNED DEFAULT NULL,
  `menus_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_roles`
--

INSERT INTO `menu_roles` (`id`, `roles_id`, `menus_id`) VALUES
(5, 1, 2),
(6, 1, 1),
(7, 1, 3),
(13, 1, 12),
(16, 1, 14),
(21, 1, 15),
(22, 2, 16),
(23, 1, 19);

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
(5, '2021_12_18_023214_create_permission_tables', 1),
(6, '2021_12_22_085959_create_jadwals_table', 1),
(7, '2021_12_22_090016_create_mahasiswas_table', 1),
(8, '2021_12_22_093147_create_menus_table', 1),
(9, '2021_12_22_104108_create_menu_roles_table', 1),
(10, '2021_12_24_092804_create_menu_forms_table', 1),
(11, '2021_12_24_093552_create_type_forms_table', 1),
(12, '2021_12_24_094724_create_tables_table', 1),
(13, '2021_12_24_172731_create_cruds_table', 1),
(14, '2021_12_24_174937_form_types', 1),
(15, '2022_01_02_173726_pesanan', 2),
(16, '2022_01_02_173741_keranjang', 2);

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
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 5);

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
('aaqila@gmail.com', '$2y$10$nNjgrePJB8ZL11yW7EpUd.jFkZLlKPx0nzlFv6nE9AwEh5dPBxCoO', '2022-01-02 12:33:09');

-- --------------------------------------------------------

--
-- Table structure for table `pembayarans`
--

CREATE TABLE `pembayarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembayarans`
--

INSERT INTO `pembayarans` (`id`, `jenis`, `kode`, `payment`, `created_at`, `updated_at`) VALUES
(1, 'Tunai', 'cod', 'Cash on Delivery (COD)', '2022-01-02 08:01:11', '2022-01-02 08:01:11'),
(2, 'transfer', 'bcava', 'BCA Virtual Account', '2022-01-02 08:01:48', '2022-01-02 08:01:48');

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
(1, 'edit profile', 'web', '2022-01-02 05:30:20', '2022-01-02 05:30:20'),
(2, 'index crud', 'web', '2022-01-02 05:30:20', '2022-01-02 05:30:20'),
(3, 'create crud', 'web', '2022-01-02 05:30:20', '2022-01-02 05:30:20'),
(4, 'edit crud', 'web', '2022-01-02 05:30:20', '2022-01-02 05:30:20'),
(5, 'delete crud', 'web', '2022-01-02 05:30:20', '2022-01-02 05:30:20'),
(6, 'show crud', 'web', '2022-01-02 05:30:20', '2022-01-02 05:30:20'),
(7, 'index table', 'web', '2022-01-02 05:30:20', '2022-01-02 05:30:20'),
(8, 'create table', 'web', '2022-01-02 05:30:20', '2022-01-02 05:30:20'),
(9, 'edit table', 'web', '2022-01-02 05:30:20', '2022-01-02 05:30:20'),
(10, 'delete table', 'web', '2022-01-02 05:30:20', '2022-01-02 05:30:20'),
(11, 'show table', 'web', '2022-01-02 05:30:20', '2022-01-02 05:30:20');

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
-- Table structure for table `pesanans`
--

CREATE TABLE `pesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pesanan` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_product` bigint(20) UNSIGNED NOT NULL,
  `kuantitas` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_ekspedisi` bigint(20) UNSIGNED DEFAULT NULL,
  `id_pembayaran` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT 'BELUM DIBAYAR',
  `message` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanans`
--

INSERT INTO `pesanans` (`id`, `id_pesanan`, `id_user`, `name`, `no_hp`, `id_product`, `kuantitas`, `alamat`, `id_ekspedisi`, `id_pembayaran`, `status`, `message`, `created_at`, `updated_at`) VALUES
(26, 1, 1, 'Administrator', NULL, 1, '1', NULL, NULL, NULL, 'BELUM DIBAYAR', NULL, '2022-01-03 09:31:44', '2022-01-03 09:31:44'),
(27, 1, 1, 'Administrator', '081322008664', 1, '2', 'Perumahan Pangauban Silih Asih S8', 1, 1, 'BELUM DIBAYAR', '1', '2022-01-03 10:02:27', '2022-01-03 10:49:23'),
(28, 1, 1, 'Administrator', '081293701661', 1, '10', 'ratulangi', 1, 1, 'BELUM DIBAYAR', 'gapedes', '2022-01-03 10:28:55', '2022-01-03 10:49:51'),
(29, 1, 1, 'Administrator', '081322008664', 1, '1', 'Perumahan Pangauban Silih Asih S8', 1, 1, 'BELUM DIBAYAR', 'gapedes', '2022-01-03 10:58:36', '2022-01-03 11:04:37'),
(30, 1, 2, 'User', NULL, 1, '2', NULL, NULL, NULL, 'BELUM DIBAYAR', NULL, '2022-01-03 11:05:12', '2022-01-03 11:05:12');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `image`, `harga`, `stok`, `deskripsi`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'Burger', '5fd44cf8e94b1.jpg', '35000', '3', '<p>enak</p>', 'Makanan', '2022-01-03 08:37:26', '2022-01-03 08:37:36');

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
(1, 'admin', 'web', '2022-01-02 05:30:20', '2022-01-02 05:30:20'),
(2, 'user', 'web', '2022-01-02 05:30:20', '2022-01-02 05:30:20');

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
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `table` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `table`, `model`, `created_at`, `updated_at`) VALUES
(5, 'kategoris', 'Kategori', '2022-01-02 07:41:20', '2022-01-02 07:41:20'),
(6, 'expedisis', 'Expedisi', '2022-01-02 07:50:18', '2022-01-02 07:50:18'),
(7, 'pembayarans', 'Pembayaran', '2022-01-02 07:58:06', '2022-01-02 07:58:06'),
(8, 'pesanans', 'Pesanan', '2022-01-02 10:48:08', '2022-01-02 10:48:08'),
(10, 'keranjangs', 'Keranjang', '2022-01-02 10:49:33', '2022-01-02 10:49:33'),
(11, 'products', 'Product', '2022-01-03 08:31:24', '2022-01-03 08:31:24');

-- --------------------------------------------------------

--
-- Table structure for table `type_forms`
--

CREATE TABLE `type_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_forms`
--

INSERT INTO `type_forms` (`id`, `type_name`) VALUES
(1, 'varchar'),
(2, 'string'),
(3, 'integer'),
(4, 'text');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@cimart.com', NULL, '$2y$10$azEGi1/j6z1zByA9z.ojxudbJLHOkA6pAOWRGqtD/BLRQANUD8Nty', NULL, '2022-01-02 05:30:20', '2022-01-02 05:30:20'),
(2, 'User', 'user@cimart.com', NULL, '$2y$10$qh1S1Tjiz/vPvZE57wXigeXThVqum3uoeQF0vPn5NGbfeimIZjape', NULL, '2022-01-02 05:30:20', '2022-01-02 05:30:20'),
(3, 'test', 'test@gmail.com', NULL, '$2y$10$lDf.VaHf/qI9GmXClxUKK.4RJVrTTGCFxUPi2F7R5gCC06ZjQtJWq', NULL, '2022-01-02 05:30:49', '2022-01-02 05:30:49'),
(4, 'qila', 'aaqila@gmail.com', NULL, '$2y$10$YS6YRZ7fJ.7AihFzrs/ryuWzBWx3HRsCQ9GFc9sNi210rTKs0sxBG', NULL, '2022-01-02 08:58:53', '2022-01-02 08:58:53'),
(5, 'aaa', 'admin1@cimart.com', NULL, '$2y$10$33QcSPKBiezLAzTa1H6DHO1F/Z58ARD5s22wfrNbw2JVR/L0QjUOO', NULL, '2022-01-03 07:01:42', '2022-01-03 07:01:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cruds`
--
ALTER TABLE `cruds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expedisis`
--
ALTER TABLE `expedisis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `form_types`
--
ALTER TABLE `form_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keranjangs`
--
ALTER TABLE `keranjangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`,`id_product`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_menu_unique` (`menu`);

--
-- Indexes for table `menu_forms`
--
ALTER TABLE `menu_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_roles`
--
ALTER TABLE `menu_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_roles_menus_id_foreign` (`menus_id`),
  ADD KEY `menu_roles_roles_id_foreign` (`roles_id`);

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
-- Indexes for table `pembayarans`
--
ALTER TABLE `pembayarans`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pesanans`
--
ALTER TABLE `pesanans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_product` (`id_product`,`id_ekspedisi`,`id_pembayaran`),
  ADD KEY `pesanan ekspedisi` (`id_ekspedisi`),
  ADD KEY `pesanan pembayaran` (`id_pembayaran`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_forms`
--
ALTER TABLE `type_forms`
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
-- AUTO_INCREMENT for table `cruds`
--
ALTER TABLE `cruds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `expedisis`
--
ALTER TABLE `expedisis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form_types`
--
ALTER TABLE `form_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `keranjangs`
--
ALTER TABLE `keranjangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `menu_forms`
--
ALTER TABLE `menu_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `menu_roles`
--
ALTER TABLE `menu_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pembayarans`
--
ALTER TABLE `pembayarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `type_forms`
--
ALTER TABLE `type_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keranjangs`
--
ALTER TABLE `keranjangs`
  ADD CONSTRAINT `keranjang product` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `keranjang user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_roles`
--
ALTER TABLE `menu_roles`
  ADD CONSTRAINT `menu_roles_menus_id_foreign` FOREIGN KEY (`menus_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `menu_roles_roles_id_foreign` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `pesanans`
--
ALTER TABLE `pesanans`
  ADD CONSTRAINT `pesanan ekspedisi` FOREIGN KEY (`id_ekspedisi`) REFERENCES `expedisis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan pembayaran` FOREIGN KEY (`id_pembayaran`) REFERENCES `pembayarans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan product` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
