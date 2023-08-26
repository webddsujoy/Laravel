-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 26, 2023 at 08:13 AM
-- Server version: 8.0.30
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aphrms`
--

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
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(12, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(13, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(14, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(15, '2016_06_01_000004_create_oauth_clients_table', 1),
(16, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(17, '2019_08_19_000000_create_failed_jobs_table', 1),
(18, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(19, '2023_08_21_131702_create_permission_tables', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 28),
(1, 'App\\Models\\User', 29),
(1, 'App\\Models\\User', 30),
(1, 'App\\Models\\User', 32),
(2, 'App\\Models\\User', 35),
(4, 'App\\Models\\User', 36),
(4, 'App\\Models\\User', 37),
(5, 'App\\Models\\User', 38);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `client_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('100bc666a0e5dc0ce3dfd1b1a8d84f7186f04dc3efdb9dce9a80aa36d7b7c8586cc3bd8091228a86', 27, '99eb4b6a-aa46-4f1d-9209-ff259e0f2dcb', 'MyApp', '[]', 0, '2023-08-25 01:33:16', '2023-08-25 01:33:16', '2024-08-25 07:03:16'),
('18a741738ffb06229376889258fd9bf2725fcb684615d4467a7c183ed0edd74a2ade6bb541a11ec6', 22, '99eb4b6a-aa46-4f1d-9209-ff259e0f2dcb', 'MyApp', '[]', 0, '2023-08-24 06:59:04', '2023-08-24 06:59:04', '2024-08-24 12:29:04'),
('1f0c4570772fd8f60035f49c6d4807122fa05882f034656f1fb56d91f215d31a1b897043a68b8f86', 29, '99eb4b6a-aa46-4f1d-9209-ff259e0f2dcb', 'MyApp', '[]', 0, '2023-08-25 02:06:43', '2023-08-25 02:06:43', '2024-08-25 07:36:43'),
('2852b632acf3b53e38377a80dc1b8a398b92c2ee7d765431e25b5d024332bd01c1044b281eb5892c', 35, '99eb4b6a-aa46-4f1d-9209-ff259e0f2dcb', 'MyApp', '[]', 0, '2023-08-25 05:17:57', '2023-08-25 05:17:58', '2024-08-25 10:47:57'),
('2fb37898d89eb0736a3055047a575e96cf5d7c2490813c8e5fa41c8716e1a11f0723a71a0fe8e73c', 34, '99eb4b6a-aa46-4f1d-9209-ff259e0f2dcb', 'MyApp', '[]', 0, '2023-08-25 04:49:48', '2023-08-25 04:49:48', '2024-08-25 10:19:48'),
('336e0aa5affbb02631bceda8936163e351c3a55bd365f1e6d4d5befa867139767f2005680199d341', 1, '99eb4b6a-aa46-4f1d-9209-ff259e0f2dcb', 'MyApp', '[]', 1, '2023-08-25 02:22:51', '2023-08-25 05:13:40', '2024-08-25 07:52:51'),
('4046c6125293b25cb3adef344da241e9a8e653fb191d0db4ccb4c22583b037e94ed7d9791099eeaa', 33, '99eb4b6a-aa46-4f1d-9209-ff259e0f2dcb', 'MyApp', '[]', 0, '2023-08-25 04:50:37', '2023-08-25 04:50:37', '2024-08-25 10:20:37'),
('48d7d518d96f016ae302fbb503fc868bd52f89cf591c04610b42f9947d42ef5cb4af4e4675af52fd', 21, '99eb4b6a-aa46-4f1d-9209-ff259e0f2dcb', 'MyApp', '[]', 0, '2023-08-24 00:22:01', '2023-08-24 00:22:01', '2024-08-24 05:52:01'),
('4abd74fed479fad2f299524614399a9a8e5275df28a4ac8209866a4e11de17374142637136c9f976', 31, '99eb4b6a-aa46-4f1d-9209-ff259e0f2dcb', 'MyApp', '[]', 0, '2023-08-25 02:10:22', '2023-08-25 02:10:22', '2024-08-25 07:40:22'),
('539630c5aed06b139debf5ea3ac83b4a6932e529b7a376dcaad9a6c5c27f65955bf3ffda3542cbaa', 23, '99eb4b6a-aa46-4f1d-9209-ff259e0f2dcb', 'MyApp', '[]', 0, '2023-08-25 01:02:49', '2023-08-25 01:02:49', '2024-08-25 06:32:49'),
('5b9758d0a15f8285e5b68b27102df29953c2db4b2387a4f46e48a54e7660e068d18dfbe4caa3141a', 30, '99eb4b6a-aa46-4f1d-9209-ff259e0f2dcb', 'MyApp', '[]', 0, '2023-08-25 02:09:20', '2023-08-25 02:09:20', '2024-08-25 07:39:20'),
('76798c43216609489274e8837a109f93537c2da1d600c5576e94c946d5b63bba324386fb6d16b058', 36, '99eb4b6a-aa46-4f1d-9209-ff259e0f2dcb', 'MyApp', '[]', 0, '2023-08-25 05:32:36', '2023-08-25 05:32:36', '2024-08-25 11:02:36'),
('84925f0f39857a89590bd04e889000905a4aac96399a249391c45f77258125ff6351c36ff42e68d0', 32, '99eb4b6a-aa46-4f1d-9209-ff259e0f2dcb', 'MyApp', '[]', 0, '2023-08-25 04:45:20', '2023-08-25 04:45:20', '2024-08-25 10:15:20'),
('95ffae9cdc7607726f7481ab35529d82531cad965c7e097c25e0fb786712a4ad6f28cdc5577c274b', 34, '99eb4b6a-aa46-4f1d-9209-ff259e0f2dcb', 'MyApp', '[]', 0, '2023-08-25 04:51:11', '2023-08-25 04:51:11', '2024-08-25 10:21:11'),
('9644cc99c60c9df9ec99d75a455c2fd192e28ba6838bf2bf1752a81f79963fce259c3f8efdcefe44', 1, '99eb4b6a-aa46-4f1d-9209-ff259e0f2dcb', 'MyApp', '[]', 0, '2023-08-25 05:13:48', '2023-08-25 05:13:48', '2024-08-25 10:43:48'),
('a89d6428200e3b5f166012839ebba0f4d824a3e0f0382183bf71298033619d6a529f24462f91a42d', 31, '99eb4b6a-aa46-4f1d-9209-ff259e0f2dcb', 'MyApp', '[]', 0, '2023-08-25 04:44:26', '2023-08-25 04:44:26', '2024-08-25 10:14:26'),
('b70328ce303a80e7dedb9aa02e767ea5fed501c550d438400257046c839d086a5b6103d35c7b009b', 26, '99eb4b6a-aa46-4f1d-9209-ff259e0f2dcb', 'MyApp', '[]', 0, '2023-08-25 01:11:17', '2023-08-25 01:11:17', '2024-08-25 06:41:17'),
('c1de11bd3108531be72a095a7ae409310560c59a6d328f809e6f35c4dc8a4a6ded48bf84fd3b2e50', 1, '99eb4b6a-aa46-4f1d-9209-ff259e0f2dcb', 'MyApp', '[]', 1, '2023-08-23 02:15:11', '2023-08-25 02:20:51', '2024-08-23 07:45:11'),
('c8b8e25658abde641c8c7889d7e7ab725c7e571785a4d4a2d33e4ae93c23eb1bd35fa87e9d9e3af0', 32, '99eb4b6a-aa46-4f1d-9209-ff259e0f2dcb', 'MyApp', '[]', 0, '2023-08-25 04:45:54', '2023-08-25 04:45:54', '2024-08-25 10:15:54'),
('d522f9a2268b1758fae9a2fdaf85bb1120bf3ea97a678ae6c8284cecbfb6fd91909d204437e632c6', 28, '99eb4b6a-aa46-4f1d-9209-ff259e0f2dcb', 'MyApp', '[]', 0, '2023-08-25 01:52:15', '2023-08-25 01:52:15', '2024-08-25 07:22:15'),
('e8f4f101c88026813beaff2658061d3e6ca6417ba7dd21cbfc319202d5d93b116d41744fe4996b9c', 1, '99eb4b6a-aa46-4f1d-9209-ff259e0f2dcb', 'MyApp', '[]', 0, '2023-08-23 02:15:54', '2023-08-23 02:15:54', '2024-08-23 07:45:54'),
('e96bea7ffc7c4ab4ddc48e09a8e1797b26d97e47fc97b868318668eb10550a4b788ba151f28658c0', 25, '99eb4b6a-aa46-4f1d-9209-ff259e0f2dcb', 'MyApp', '[]', 0, '2023-08-25 01:10:44', '2023-08-25 01:10:44', '2024-08-25 06:40:44'),
('f45ab34873be749768220c15efd8e3c08a30206191f6ec179382e6739506daa20bf8b61ce4cbeaac', 33, '99eb4b6a-aa46-4f1d-9209-ff259e0f2dcb', 'MyApp', '[]', 0, '2023-08-25 04:47:16', '2023-08-25 04:47:16', '2024-08-25 10:17:16'),
('f783630287c5703d0b8deff4750d5f4a1faabc01fd40092c75ffc6e72296557a41517962033d73f9', 24, '99eb4b6a-aa46-4f1d-9209-ff259e0f2dcb', 'MyApp', '[]', 0, '2023-08-25 01:10:08', '2023-08-25 01:10:08', '2024-08-25 06:40:08');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `client_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
('99eb4b6a-aa46-4f1d-9209-ff259e0f2dcb', NULL, 'Laravel Personal Access Client', '0YKUQTQeAGu9PgVGYHNfl08mzvgeQGfjvXtzXZnY', NULL, 'http://localhost', 1, 0, 0, '2023-08-18 06:06:56', '2023-08-18 06:06:56'),
('99eb4b6a-dead-4d81-9d80-bc92bcd783c4', NULL, 'Laravel Password Grant Client', 'NWv9nlcSh7f4s6AzeIQhOMbMAiS9VpGkbunpBOze', 'users', 'http://localhost', 0, 1, 0, '2023-08-18 06:06:56', '2023-08-18 06:06:56');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, '99eb4b6a-aa46-4f1d-9209-ff259e0f2dcb', '2023-08-18 06:06:56', '2023-08-18 06:06:56');

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission_group` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `permission_group`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'create_user', 'user', 'api', '2023-08-23 11:17:59', '2023-08-23 11:17:59'),
(2, 'create_calling_staff', 'calling_staff', 'api', '2023-08-23 11:17:59', '2023-08-23 11:17:59'),
(3, 'update_user', 'user', 'api', '2023-08-23 11:17:59', '2023-08-23 11:17:59'),
(4, 'delete_user', 'user', 'api', '2023-08-23 11:17:59', '2023-08-23 11:17:59'),
(5, 'edit_user', 'user', 'api', '2023-08-23 11:17:59', '2023-08-23 11:17:59'),
(6, 'edit_calling_staff', 'calling_staff', 'api', '2023-08-23 11:17:59', '2023-08-23 11:17:59'),
(7, 'update_calling_staff', 'calling_staff', 'api', '2023-08-23 11:17:59', '2023-08-23 11:17:59'),
(8, 'delete_calling_staff', 'calling_staff', 'api', '2023-08-23 11:17:59', '2023-08-23 11:17:59');

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'api', '2023-08-23 06:04:40', '2023-08-23 06:04:40'),
(2, 'calling_staff', 'api', '2023-08-23 06:05:52', '2023-08-23 06:05:52'),
(4, 'Chandan Verma', 'api', '2023-08-23 07:58:00', '2023-08-23 07:58:00'),
(5, 'new_test_1', 'api', '2023-08-25 06:37:03', '2023-08-25 06:37:03'),
(6, 'new_test_6', 'api', '2023-08-25 07:51:27', '2023-08-25 07:51:27'),
(7, 'ChandanVerma3424234', 'api', '2023-08-26 00:22:10', '2023-08-26 00:22:10');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(1, 4),
(2, 4),
(3, 4),
(4, 4),
(6, 4),
(1, 5),
(8, 5),
(1, 6),
(2, 6),
(3, 6),
(5, 6),
(7, 6),
(8, 6),
(1, 7),
(3, 7),
(6, 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin user', 'admin@gmail.com', '9876543210', NULL, '$2y$10$ehaF5YjUzqp2FQNYAcXdVOtnldNzpCeSimS9l5C/DQbwdK6nZimJa', '/uploads/profile_images/64e35bb9b3349_icons8-grapes-94.png', NULL, '2023-08-18 06:00:33', '2023-08-21 07:12:33'),
(2, 'Chandan Verma', 'cars3601@yopmail.com', '9876543210', NULL, '$2y$10$YrqrsYQC12JnAkBMP0loY.7MvosanNr5Ame8yNYs8KuUMqbR0QB3K', '/uploads/profile_images/64e35bb9b3349_icons8-grapes-94.png', NULL, '2023-08-18 06:00:59', '2023-08-20 23:45:38'),
(4, 'Chandan Verma', 'cars3602@yopmail.com', '9876543210', NULL, '$2y$10$YrqrsYQC12JnAkBMP0loY.7MvosanNr5Ame8yNYs8KuUMqbR0QB3K', '/uploads/profile_images/64e35bb9b3349_icons8-grapes-94.png', NULL, '2023-08-18 06:00:59', '2023-08-20 23:45:38'),
(5, 'Chandan Verma', 'admin1@gmail.com', '9876543210', NULL, '$2y$10$YrqrsYQC12JnAkBMP0loY.7MvosanNr5Ame8yNYs8KuUMqbR0QB3K', '/uploads/profile_images/64e35bb9b3349_icons8-grapes-94.png', NULL, '2023-08-18 06:00:59', '2023-08-20 23:45:38'),
(6, 'Chandan Verma', 'admin2@gmail.com', '9876543210', NULL, '$2y$10$YrqrsYQC12JnAkBMP0loY.7MvosanNr5Ame8yNYs8KuUMqbR0QB3K', '/uploads/profile_images/64e35bb9b3349_icons8-grapes-94.png', NULL, '2023-08-18 06:00:59', '2023-08-20 23:45:38'),
(7, 'Chandan Verma', 'admin3@gmail.com', '9876543210', NULL, '$2y$10$YrqrsYQC12JnAkBMP0loY.7MvosanNr5Ame8yNYs8KuUMqbR0QB3K', '/uploads/profile_images/64e35bb9b3349_icons8-grapes-94.png', NULL, '2023-08-18 06:00:59', '2023-08-20 23:45:38'),
(8, 'Chandan Verma', 'admin8@gmail.com', '9876543210', NULL, '$2y$10$YrqrsYQC12JnAkBMP0loY.7MvosanNr5Ame8yNYs8KuUMqbR0QB3K', '/uploads/profile_images/64e35bb9b3349_icons8-grapes-94.png', NULL, '2023-08-18 06:00:59', '2023-08-20 23:45:38'),
(9, 'Chandan Verma', 'admin4@gmail.com', '9876543210', NULL, '$2y$10$YrqrsYQC12JnAkBMP0loY.7MvosanNr5Ame8yNYs8KuUMqbR0QB3K', '/uploads/profile_images/64e35bb9b3349_icons8-grapes-94.png', NULL, '2023-08-18 06:00:59', '2023-08-20 23:45:38'),
(10, 'Chandan Verma', 'admin7@gmail.com', '9876543210', NULL, '$2y$10$YrqrsYQC12JnAkBMP0loY.7MvosanNr5Ame8yNYs8KuUMqbR0QB3K', '/uploads/profile_images/64e35bb9b3349_icons8-grapes-94.png', NULL, '2023-08-18 06:00:59', '2023-08-20 23:45:38'),
(11, 'Chandan Verma', 'admin5@gmail.com', '9876543210', NULL, '$2y$10$YrqrsYQC12JnAkBMP0loY.7MvosanNr5Ame8yNYs8KuUMqbR0QB3K', '/uploads/profile_images/64e35bb9b3349_icons8-grapes-94.png', NULL, '2023-08-18 06:00:59', '2023-08-20 23:45:38'),
(12, 'Chandan Verma', 'admin6@gmail.com', '9876543210', NULL, '$2y$10$YrqrsYQC12JnAkBMP0loY.7MvosanNr5Ame8yNYs8KuUMqbR0QB3K', '/uploads/profile_images/64e35bb9b3349_icons8-grapes-94.png', NULL, '2023-08-18 06:00:59', '2023-08-20 23:45:38'),
(13, 'Chandan Verma', 'admin9@gmail.com', '9876543210', NULL, '$2y$10$YrqrsYQC12JnAkBMP0loY.7MvosanNr5Ame8yNYs8KuUMqbR0QB3K', '/uploads/profile_images/64e35bb9b3349_icons8-grapes-94.png', NULL, '2023-08-18 06:00:59', '2023-08-20 23:45:38'),
(14, 'Chandan Verma', 'admin10@gmail.com', '9876543210', NULL, '$2y$10$YrqrsYQC12JnAkBMP0loY.7MvosanNr5Ame8yNYs8KuUMqbR0QB3K', '/uploads/profile_images/64e35bb9b3349_icons8-grapes-94.png', NULL, '2023-08-18 06:00:59', '2023-08-20 23:45:38'),
(15, 'Chandan Verma', 'admin11@gmail.com', '9876543210', NULL, '$2y$10$YrqrsYQC12JnAkBMP0loY.7MvosanNr5Ame8yNYs8KuUMqbR0QB3K', '/uploads/profile_images/64e35bb9b3349_icons8-grapes-94.png', NULL, '2023-08-18 06:00:59', '2023-08-20 23:45:38'),
(16, 'Chandan Verma', 'admin12@gmail.com', '9876543210', NULL, '$2y$10$YrqrsYQC12JnAkBMP0loY.7MvosanNr5Ame8yNYs8KuUMqbR0QB3K', '/uploads/profile_images/64e35bb9b3349_icons8-grapes-94.png', NULL, '2023-08-18 06:00:59', '2023-08-20 23:45:38'),
(17, 'Chandan Verma', 'admin13@gmail.com', '9876543210', NULL, '$2y$10$YrqrsYQC12JnAkBMP0loY.7MvosanNr5Ame8yNYs8KuUMqbR0QB3K', '/uploads/profile_images/64e35bb9b3349_icons8-grapes-94.png', NULL, '2023-08-18 06:00:59', '2023-08-20 23:45:38'),
(18, 'Chandan Verma', 'admin14@gmail.com', '9876543210', NULL, '$2y$10$YrqrsYQC12JnAkBMP0loY.7MvosanNr5Ame8yNYs8KuUMqbR0QB3K', '/uploads/profile_images/64e35bb9b3349_icons8-grapes-94.png', NULL, '2023-08-18 06:00:59', '2023-08-20 23:45:38'),
(19, 'Chandan Verma', 'admin15@gmail.com', '9876543210', NULL, '$2y$10$YrqrsYQC12JnAkBMP0loY.7MvosanNr5Ame8yNYs8KuUMqbR0QB3K', '/uploads/profile_images/64e35bb9b3349_icons8-grapes-94.png', NULL, '2023-08-18 06:00:59', '2023-08-20 23:45:38'),
(20, 'Chandan Verma', 'admin16@gmail.com', '9876543210', NULL, '$2y$10$YrqrsYQC12JnAkBMP0loY.7MvosanNr5Ame8yNYs8KuUMqbR0QB3K', '/uploads/profile_images/64e35bb9b3349_icons8-grapes-94.png', NULL, '2023-08-18 06:00:59', '2023-08-20 23:45:38'),
(35, 'new_user_1', 'new_user_1@gmail.com', NULL, NULL, '$2y$10$xQZv1QOL5h61lIU..Om1gusiBu6/ByXlIVDRHokNjedO2NrHFEd4O', NULL, NULL, '2023-08-25 05:17:19', '2023-08-25 05:17:19'),
(36, 'Chandan Verma', 'chandanverma@gmail.com', NULL, NULL, '$2y$10$Kdn677D4iwgoX25AyhylEuJsg9D0R9uns4qdkhycu9QzLj4vGyHB.', NULL, NULL, '2023-08-25 05:31:40', '2023-08-25 05:31:40'),
(37, 'Chandan_Verma_7', 'chandan@gmail.com', NULL, NULL, '$2y$10$bZRdvizsszPPW0ajsixc..W5blNMwasZs0o.mQwgwMsrc2.lCHeZu', NULL, NULL, '2023-08-25 23:53:29', '2023-08-25 23:53:29'),
(38, 'chandan_verma_9', 'chandan_verma_9@gmail.com', NULL, NULL, '$2y$10$xc8Do0SYv25ryDEYe2zjB.pJ8hR1oiO4svDMvsyYYoxFDBso8AHD2', NULL, NULL, '2023-08-26 00:10:54', '2023-08-26 00:10:54');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

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
