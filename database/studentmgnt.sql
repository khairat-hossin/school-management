-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 20, 2023 at 06:11 AM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentmgnt`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_groups`
--

DROP TABLE IF EXISTS `blood_groups`;
CREATE TABLE IF NOT EXISTS `blood_groups` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `blood_group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blood_groups`
--

INSERT INTO `blood_groups` (`id`, `blood_group`, `created_at`, `updated_at`) VALUES
(1, 'B+', '2023-04-18 00:05:52', '2023-04-18 00:05:52'),
(2, 'AB+', '2023-04-18 00:06:03', '2023-04-18 00:06:03'),
(3, 'O+', '2023-04-18 00:06:13', '2023-04-18 00:06:13'),
(4, 'O-', '2023-04-18 00:06:18', '2023-04-18 00:06:18'),
(5, 'B-', '2023-04-18 00:06:26', '2023-04-18 00:06:26');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

DROP TABLE IF EXISTS `classes`;
CREATE TABLE IF NOT EXISTS `classes` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'class vi', '2023-04-06 02:49:45', '2023-04-06 02:49:45'),
(2, 'class vii', '2023-04-06 02:49:51', '2023-04-06 02:49:51'),
(3, 'class viii', '2023-04-06 02:49:59', '2023-04-06 02:49:59'),
(4, 'class ix', '2023-04-06 02:50:13', '2023-04-06 02:50:13'),
(5, 'class x', '2023-04-06 02:50:22', '2023-04-06 02:50:22');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_27_091016_create_students_table', 1),
(6, '2023_03_30_065454_create_teachers_table', 1),
(7, '2023_04_04_053407_create_classes_table', 1),
(8, '2023_04_05_065631_create_subjects_table', 1),
(9, '2023_04_10_061705_create_posts_table', 2),
(10, '2023_04_13_071622_add_email_to_teachers_table', 2),
(11, '2023_04_16_093911_create_blood_groups_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `category`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Miss Aditya Bradtke Jr.', 'Carleton Hackett IV', 'Nostrum dignissimos voluptatem inventore unde nesciunt. Veniam ea autem nulla. Iusto vel ut minima quos doloremque.', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(2, 'Abagail Block III', 'Monica Walker', 'Quia rerum cumque provident esse. Nulla dolor molestiae cumque non inventore. Numquam incidunt quia non voluptas nobis. Voluptas quia tempore eos hic ducimus vitae ipsam.', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(3, 'Darwin Collins', 'Ms. Zula Heidenreich PhD', 'Laboriosam ut omnis sint fuga est. Voluptatem laboriosam sed blanditiis magnam. Accusantium ipsum cupiditate nam libero dolor aspernatur. Ea fugiat ab ut explicabo provident repellat dolores.', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(4, 'Miss Kirsten Ledner Sr.', 'Mrs. Sabrina Kiehn V', 'Totam rerum eos earum incidunt libero. Corporis sapiente sed quas esse. Eaque dicta deleniti reiciendis voluptas qui pariatur natus ipsa. Pariatur qui non iure qui sequi eos iusto.', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(5, 'Annalise Reichert', 'Jules Torp', 'Eum aut in nihil qui. Incidunt corporis ea dolorem ut recusandae sit omnis. Perspiciatis quia repellat omnis.', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(6, 'Dr. Ernesto Gulgowski', 'Clotilde Rohan', 'Omnis blanditiis officiis iure assumenda maxime dolorem voluptatem. Ipsum aliquid illum optio eum. Et ab qui ex architecto non labore doloremque adipisci. Dolores nobis est quo accusamus ad.', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(7, 'Ashley Fisher', 'Miss Anissa Wyman', 'Magnam est soluta eum et id. Qui officia illo culpa dolorum atque aut. Eius quis molestiae excepturi consequuntur. Sapiente quia dolorum quisquam corrupti dolorem voluptates earum.', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(8, 'Jannie Bode', 'Alene Batz', 'Eaque aut tempore quia et nihil et est. Vel natus corrupti et voluptatibus soluta nulla.', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(9, 'Dr. Claudia Nienow', 'Donnell Cremin', 'Deleniti et ullam quis provident vel. Non iste tenetur illo quis modi quisquam molestiae. Sed nemo consequatur iure totam voluptatem vero.', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(10, 'Kip Ullrich', 'Dr. Lia O\'Reilly', 'Sit aut occaecati enim et. Et rerum autem nihil perspiciatis fugiat. Nobis in et id aut laboriosam voluptas.', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(11, 'Tianna Kertzmann', 'Mr. Coty Beer', 'Fuga quam commodi accusantium qui deleniti reiciendis soluta non. Voluptas rerum dolor distinctio voluptatum pariatur. Illo cumque dolores voluptatibus.', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(12, 'Dr. Justina Eichmann DDS', 'Prof. Alaina Zulauf', 'Sequi voluptates atque similique et minima et voluptatem. Et soluta praesentium soluta et ut neque maxime. Nesciunt natus vel eum modi. Facilis rerum autem quibusdam blanditiis sunt harum laudantium.', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(13, 'Mr. Brad Champlin V', 'Prof. Alivia Wehner', 'Praesentium adipisci tempora quae et voluptates. Et illo id sequi dicta debitis similique necessitatibus. Labore vitae pariatur porro consequuntur eos earum rem.', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(14, 'Mr. Wyatt VonRueden III', 'Austen Gusikowski', 'Consequatur perspiciatis molestiae ab itaque. Quam voluptatem velit voluptatibus. Et aut magni numquam autem ab saepe.', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(15, 'Audie Konopelski IV', 'Mr. Stephon Friesen', 'Similique molestias sequi reiciendis modi deserunt. Optio molestiae ipsa aliquid possimus. Repellat earum ipsa sunt harum autem et quam perferendis. Natus veritatis dolores maiores aliquam qui.', '2023-05-21 22:42:18', '2023-05-21 22:42:18');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `blood_group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `roll`, `dob`, `blood_group`, `created_at`, `updated_at`) VALUES
(4, 'Prof. Elva Parisian', '0', '2012-01-14', 'O+', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(2, 'Alamin', '16', '2020-06-16', 'O+', '2023-04-06 02:48:51', '2023-04-06 02:48:51'),
(3, 'Parvin', '1', '2018-06-12', 'AB+', '2023-04-06 02:49:08', '2023-04-06 02:49:08'),
(5, 'Cassandra O\'Conner', '8', '2013-09-04', 'B-', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(6, 'Miracle Wintheiser', '5', '1978-05-05', 'B-', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(7, 'Julie Upton', '2', '1978-07-22', 'O+', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(8, 'Ms. Imelda Schmeler', '9', '1977-11-06', 'O+', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(9, 'Felix Cassin', '7', '2004-10-29', 'O-', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(10, 'Daija O\'Kon', '4', '2011-09-17', 'B-', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(11, 'Miss Orie Rogahn IV', '5', '1980-12-17', 'AB+', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(12, 'Mrs. Pauline Rolfson III', '3', '1992-06-14', 'O-', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(13, 'Clint Borer', '5', '1977-12-01', 'A+', '2023-05-21 22:42:18', '2023-05-21 22:42:18');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `sub_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `sub_code`, `sub_name`, `created_at`, `updated_at`) VALUES
(1, '101', 'Bangla', '2023-04-06 02:50:35', '2023-04-06 02:50:35'),
(2, '102', 'English', '2023-04-06 02:50:44', '2023-04-06 02:50:44'),
(3, '103', 'Math', '2023-04-06 02:50:50', '2023-04-06 02:50:50'),
(4, '105', 'ICT', '2023-04-06 02:50:58', '2023-04-06 02:50:58'),
(5, '9', 'beatae', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(6, '4', 'totam', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(7, '9', 'placeat', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(8, '5', 'consectetur', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(9, '5', 'voluptatum', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(10, '0', 'fuga', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(11, '4', 'qui', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(12, '5', 'illum', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(13, '2', 'exercitationem', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(14, '4', 'praesentium', '2023-05-21 22:42:18', '2023-05-21 22:42:18');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
CREATE TABLE IF NOT EXISTS `teachers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tregnum` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tsubject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tdob` date NOT NULL,
  `tblood_group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `tname`, `tregnum`, `tsubject`, `tdob`, `tblood_group`, `created_at`, `updated_at`, `email`) VALUES
(1, 'Anam', '170', 'ICT', '2023-04-19', 'B+', '2023-04-06 02:49:23', '2023-04-06 02:49:23', ''),
(2, 'Ruhul', '175', 'CSE', '2022-07-12', 'AB+', '2023-04-06 02:49:37', '2023-04-06 02:49:37', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Javier Walsh', 'idella.langosh@example.net', '2023-05-21 22:42:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'T9TAOQXFG5', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(2, 'Dr. Lorenz Barton MD', 'mueller.tevin@example.net', '2023-05-21 22:42:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gLfXLhI2UP', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(3, 'Dr. Lelia Miller IV', 'zgoodwin@example.org', '2023-05-21 22:42:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '81naQ78RcU', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(4, 'Dr. Monty Spencer', 'amparo.parisian@example.org', '2023-05-21 22:42:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'fBbpSA6Pdz', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(5, 'Geovany Boyle', 'uschoen@example.com', '2023-05-21 22:42:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'fddwQgGlU5', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(6, 'Dr. Gunner Rath', 'willms.enid@example.org', '2023-05-21 22:42:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'KK7Y2xyrBG', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(7, 'Prof. Reba Runte PhD', 'ibins@example.org', '2023-05-21 22:42:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'yqxIBAdjxk', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(8, 'Mauricio Kunde', 'russel.trever@example.org', '2023-05-21 22:42:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '907bQxd3lx', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(9, 'Audie Rutherford V', 'meredith.ritchie@example.com', '2023-05-21 22:42:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'wgYpFXR4HY', '2023-05-21 22:42:18', '2023-05-21 22:42:18'),
(10, 'Alysha Gibson', 'art35@example.net', '2023-05-21 22:42:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Fcp4yzCHUT', '2023-05-21 22:42:18', '2023-05-21 22:42:18');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
