-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 09:38 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `streamit`
--

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_11_19_000000_create_video_category_table', 1),
(4, '2020_11_19_000001_create_video_quality_table', 1),
(5, '2020_11_19_000002_create_video_language_table', 1),
(6, '2020_11_19_000003_create_membership_table', 1),
(7, '2020_11_19_232742_create_movies_table', 1),
(8, '2020_11_19_233755_create_shows_table', 1),
(9, '2020_11_20_000000_create_users_table', 1),
(10, '2020_11_20_000532_create_episodes_table', 1),
(11, '2020_11_21_235254_create_comments_table', 1),
(12, '2020_11_23_161620_create_roles_table', 1),
(13, '2020_11_23_161827_create_users_roles_table', 1),
(14, '2020_11_25_115249_create_users_memships_table', 1),
(15, '2020_11_27_150136_create_country_table', 1),
(16, '2020_11_27_150205_create_state_table', 1),
(17, '2020_11_27_160000_create_users_profiles_table', 1),
(18, '2020_11_28_144738_create_favorite_table', 1),
(19, '2020_11_28_144749_create_upcoming_table', 1),
(20, '2020_11_28_144802_create_topten_table', 1),
(21, '2020_11_28_144843_create_suggest_table', 1),
(22, '2020_11_28_144855_create_trending_table', 1),
(23, '2020_11_28_144910_create_recent_add_table', 1),
(24, '2020_11_28_144920_create_watch_again_table', 1),
(25, '2020_11_28_144936_create_onyx_original_table', 1),
(26, '2020_11_28_144945_create_main_carousel_table', 1),
(27, '2020_11_28_144958_create_new_release_table', 1),
(28, '2020_11_30_044806_create_show_carousel_table', 1),
(29, '2020_11_30_044816_create_movie_carousel_table', 1),
(30, '2020_11_30_053740_create_movie_section1_table', 1),
(31, '2020_11_30_053745_create_movie_section2_table', 1),
(32, '2020_11_30_053749_create_movie_section3_table', 1),
(33, '2020_11_30_053800_create_show_section1_table', 1),
(34, '2020_11_30_053806_create_show_section2_table', 1),
(35, '2020_11_30_053809_create_show_section3_table', 1),
(36, '2020_12_03_162719_create_like_log', 1),
(37, '2020_12_06_005851_create_login_log', 1),
(38, '2020_12_06_084023_create_contact_us_table', 1),
(39, '2020_12_06_190848_create_download_log_table', 1),
(40, '2020_12_06_191813_create_view_log_table', 1),
(41, '2020_12_06_192433_create_visit_log_table', 1),
(42, '2020_12_08_202228_create_notify_store_table', 1);

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
-- Table structure for table `si_comments`
--

CREATE TABLE `si_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_comments`
--

INSERT INTO `si_comments` (`id`, `author`, `description`, `content_type`, `content_id`, `date`, `created_at`, `updated_at`) VALUES
(1, 2, 'was awesome.\nI really wondered how action was so fantastic. I want to see once again if I have a chance.', 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 16:29:10', '2020-12-10 16:29:10');

-- --------------------------------------------------------

--
-- Table structure for table `si_contact_us`
--

CREATE TABLE `si_contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `si_country`
--

CREATE TABLE `si_country` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_country`
--

INSERT INTO `si_country` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Caneda', NULL, NULL),
(2, 'Noida', NULL, NULL),
(3, 'USA', NULL, NULL),
(4, 'India', NULL, NULL),
(5, 'Africa', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `si_download_log`
--

CREATE TABLE `si_download_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_download_log`
--

INSERT INTO `si_download_log` (`id`, `content_type`, `content_id`, `date`, `created_at`, `updated_at`) VALUES
(1, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 14:27:19', '2020-12-10 14:27:19'),
(2, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 14:29:31', '2020-12-10 14:29:31'),
(3, 'movie', 9, '2020-12-10 00:00:00', '2020-12-10 14:30:07', '2020-12-10 14:30:07'),
(4, 'movie', 3, '2020-12-10 00:00:00', '2020-12-10 14:30:52', '2020-12-10 14:30:52'),
(5, 'movie', 7, '2020-12-10 00:00:00', '2020-12-10 14:31:45', '2020-12-10 14:31:45'),
(6, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 14:52:24', '2020-12-10 14:52:24'),
(7, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 14:52:27', '2020-12-10 14:52:27'),
(8, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 14:52:27', '2020-12-10 14:52:27'),
(9, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 14:52:27', '2020-12-10 14:52:27'),
(10, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 14:52:27', '2020-12-10 14:52:27'),
(11, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 14:52:28', '2020-12-10 14:52:28'),
(12, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 14:52:28', '2020-12-10 14:52:28'),
(13, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 14:52:29', '2020-12-10 14:52:29'),
(14, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 14:52:29', '2020-12-10 14:52:29'),
(15, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 14:52:29', '2020-12-10 14:52:29'),
(16, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 14:52:29', '2020-12-10 14:52:29'),
(17, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 14:52:33', '2020-12-10 14:52:33'),
(18, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 14:52:33', '2020-12-10 14:52:33'),
(19, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 14:52:33', '2020-12-10 14:52:33'),
(20, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 14:52:38', '2020-12-10 14:52:38'),
(21, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 14:52:38', '2020-12-10 14:52:38'),
(22, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 14:52:39', '2020-12-10 14:52:39'),
(23, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 14:52:39', '2020-12-10 14:52:39'),
(24, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 14:52:40', '2020-12-10 14:52:40'),
(25, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 14:52:40', '2020-12-10 14:52:40'),
(26, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 15:30:43', '2020-12-10 15:30:43');

-- --------------------------------------------------------

--
-- Table structure for table `si_episodes`
--

CREATE TABLE `si_episodes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `episode` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show` bigint(20) UNSIGNED NOT NULL,
  `season` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_episodes`
--

INSERT INTO `si_episodes` (`id`, `episode`, `name`, `show`, `season`, `description`, `file`, `video_link`, `duration`, `date`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lorem ipsum dolor sit amet', 1, 1, 'Lorem ipsum dolor sit amet', 'uploads/images//1607577712.jpg', 'uploads/videos//1607577712.mp4', '2h 57m', '2020-10-01 00:00:00', NULL, NULL, '2020-12-10 13:21:52'),
(2, 2, 'Lorem ipsum dolor sit amet', 1, 1, 'Lorem ipsum dolor sit amet', 'uploads/images//1607577726.jpg', 'uploads/videos//1607577726.mp4', '2h 57m', '2020-10-02 00:00:00', NULL, NULL, '2020-12-10 13:22:06'),
(3, 3, 'Lorem ipsum dolor sit amet', 1, 1, 'Lorem ipsum dolor sit amet', 'uploads/images//1607577739.jpg', 'uploads/videos//1607577739.mp4', '2h 57m', '2020-10-03 00:00:00', NULL, NULL, '2020-12-10 13:22:19'),
(4, 4, 'Lorem ipsum dolor sit amet', 1, 1, 'Lorem ipsum dolor sit amet', 'uploads/images//1607577752.jpg', 'uploads/videos//1607577752.mp4', '2h 57m', '2020-10-04 00:00:00', NULL, NULL, '2020-12-10 13:22:32'),
(5, 1, 'Lorem ipsum dolor sit amet', 1, 2, 'Lorem ipsum dolor sit amet', 'uploads/images//1607577766.jpg', 'uploads/videos//1607577766.mp4', '2h 57m', '2020-10-01 00:00:00', NULL, NULL, '2020-12-10 13:35:43'),
(6, 2, 'Lorem ipsum dolor sit amet', 1, 2, 'Lorem ipsum dolor sit amet', 'uploads/images//1607577780.jpg', 'uploads/videos//1607577780.mp4', '2h 57m', '2020-10-02 00:00:00', NULL, NULL, '2020-12-10 13:35:53'),
(7, 3, 'Lorem ipsum dolor sit amet', 1, 2, 'Lorem ipsum dolor sit amet', 'uploads/images//1607577796.jpg', 'uploads/videos//1607577796.mp4', '2h 57m', '2020-10-03 00:00:00', NULL, NULL, '2020-12-10 13:36:03'),
(8, 4, 'Lorem ipsum dolor sit amet', 1, 2, 'Lorem ipsum dolor sit amet', 'uploads/images//1607577811.jpg', 'uploads/videos//1607577811.mp4', '2h 57m', '2020-10-04 00:00:00', NULL, NULL, '2020-12-10 13:36:12'),
(9, 1, 'Lorem ipsum dolor sit amet', 2, 1, 'Lorem ipsum dolor sit amet', 'uploads/images//1607577828.jpg', 'uploads/videos//1607577828.mp4', '2h 57m', '2020-10-01 00:00:00', NULL, NULL, '2020-12-10 13:29:55'),
(10, 2, 'Lorem ipsum dolor sit amet', 2, 1, 'Lorem ipsum dolor sit amet', 'uploads/images//1607577843.jpg', 'uploads/videos//1607577843.mp4', '2h 57m', '2020-10-02 00:00:00', NULL, NULL, '2020-12-10 13:30:06'),
(11, 3, 'Lorem ipsum dolor sit amet', 2, 1, 'Lorem ipsum dolor sit amet', 'uploads/images//1607577860.jpg', 'uploads/videos//1607577860.mp4', '2h 57m', '2020-10-03 00:00:00', NULL, NULL, '2020-12-10 13:30:18'),
(12, 4, 'Lorem ipsum dolor sit amet', 2, 1, 'Lorem ipsum dolor sit amet', 'uploads/images//1607577860.jpg', 'uploads/videos//1607577878.mp4', '2h 57m', '2020-10-04 00:00:00', NULL, NULL, '2020-12-10 13:30:30'),
(13, 1, 'Lorem ipsum dolor sit amet', 2, 2, 'Lorem ipsum dolor sit amet', 'uploads/images//1607577860.jpg', 'uploads/videos//1607577878.mp4', '2h 57m', '2020-10-01 00:00:00', NULL, NULL, NULL),
(14, 2, 'Lorem ipsum dolor sit amet', 2, 2, 'Lorem ipsum dolor sit amet', 'uploads/images//1607577860.jpg', 'uploads/videos//1607577878.mp4', '2h 57m', '2020-10-02 00:00:00', NULL, NULL, NULL),
(15, 3, 'Lorem ipsum dolor sit amet', 2, 2, 'Lorem ipsum dolor sit amet', 'uploads/images//1607577860.jpg', 'uploads/videos//1607577878.mp4', '2h 57m', '2020-10-03 00:00:00', NULL, NULL, NULL),
(16, 4, 'Lorem ipsum dolor sit amet', 2, 2, 'Lorem ipsum dolor sit amet', 'uploads/images//1607577860.jpg', 'uploads/videos//1607577878.mp4', '2h 57m', '2020-10-04 00:00:00', NULL, NULL, NULL),
(17, 1, 'Lorem ipsum dolor sit amet', 3, 1, 'Lorem ipsum dolor sit amet', 'uploads/images//1607577902.jpg', 'uploads/videos//1607577902.mp4', '2h 57m', '2020-10-01 00:00:00', NULL, NULL, '2020-12-10 13:30:43'),
(18, 2, 'Lorem ipsum dolor sit amet', 3, 1, 'Lorem ipsum dolor sit amet', 'uploads/images//1607577902.jpg', 'uploads/videos//1607577902.mp4', '2h 57m', '2020-10-02 00:00:00', NULL, NULL, NULL),
(19, 3, 'Lorem ipsum dolor sit amet', 3, 1, 'Lorem ipsum dolor sit amet', 'uploads/images//1607577902.jpg', 'uploads/videos//1607577902.mp4', '2h 57m', '2020-10-03 00:00:00', NULL, NULL, NULL),
(20, 4, 'Lorem ipsum dolor sit amet', 3, 1, 'Lorem ipsum dolor sit amet', 'uploads/images//1607577902.jpg', 'uploads/videos//1607577902.mp4', '2h 57m', '2020-10-04 00:00:00', NULL, NULL, NULL),
(21, 5, 'Lorem ipsum dolor sit amet', 3, 1, 'Lorem ipsum dolor sit amet', 'uploads/images//1607577902.jpg', 'uploads/videos//1607577902.mp4', '2h 57m', '2020-10-01 00:00:00', NULL, NULL, NULL),
(22, 1, 'Lorem ipsum dolor sit amet', 3, 2, 'Lorem ipsum dolor sit amet', 'uploads/images//1607577902.jpg', 'uploads/videos//1607577902.mp4', '2h 57m', '2020-10-02 00:00:00', NULL, NULL, NULL),
(23, 2, 'Lorem ipsum dolor sit amet', 3, 2, 'Lorem ipsum dolor sit amet', 'uploads/images//1607577902.jpg', 'uploads/videos//1607577902.mp4', '2h 57m', '2020-10-03 00:00:00', NULL, NULL, NULL),
(24, 3, 'Lorem ipsum dolor sit amet', 3, 2, 'Lorem ipsum dolor sit amet', 'uploads/images//1607577902.jpg', 'uploads/videos//1607577902.mp4', '2h 57m', '2020-10-04 00:00:00', NULL, NULL, NULL),
(25, 4, 'Lorem ipsum dolor sit amet', 3, 2, 'Lorem ipsum dolor sit amet', 'uploads/images//1607577902.jpg', 'uploads/videos//1607577902.mp4', '2h 57m', '2020-10-01 00:00:00', NULL, NULL, NULL),
(26, 1, 'Lorem ipsum dolor sit amet', 3, 3, 'Lorem ipsum dolor sit amet', 'uploads/images//1607577902.jpg', 'uploads/videos//1607577902.mp4', '2h 57m', '2020-10-02 00:00:00', NULL, NULL, NULL),
(27, 2, 'Lorem ipsum dolor sit amet', 3, 3, 'Lorem ipsum dolor sit amet', 'uploads/images//1607577902.jpg', 'uploads/videos//1607577902.mp4', '2h 57m', '2020-10-03 00:00:00', NULL, NULL, NULL),
(28, 3, 'Lorem ipsum dolor sit amet', 3, 3, 'Lorem ipsum dolor sit amet', 'uploads/images//1607577902.jpg', 'uploads/videos//1607577902.mp4', '2h 57m', '2020-10-04 00:00:00', NULL, NULL, NULL),
(29, 4, 'Lorem ipsum dolor sit amet', 3, 3, 'Lorem ipsum dolor sit amet', 'uploads/images//1607577902.jpg', 'uploads/videos//1607577902.mp4', '2h 57m', '2020-10-01 00:00:00', NULL, NULL, NULL),
(30, 1, 'Lorem ipsum dolor sit amet', 4, 1, 'Lorem ipsum dolor sit amet', 'uploads/images//1607578268.jpg', 'uploads/videos//1607578268.mp4', '2h 57m', '2020-10-11 00:00:00', NULL, NULL, '2020-12-10 13:31:08'),
(31, 2, 'Lorem ipsum dolor sit amet', 4, 1, 'Lorem ipsum dolor sit amet', 'uploads/images//1607578268.jpg', 'uploads/videos//1607578268.mp4', '2h 57m', '2020-10-01 00:00:00', NULL, NULL, NULL),
(32, 3, 'Lorem ipsum dolor sit amet', 4, 1, 'Lorem ipsum dolor sit amet', 'uploads/images//1607578268.jpg', 'uploads/videos//1607578268.mp4', '2h 57m', '2020-10-03 00:00:00', NULL, NULL, NULL),
(33, 4, 'Lorem ipsum dolor sit amet', 4, 1, 'Lorem ipsum dolor sit amet', 'uploads/images//1607578268.jpg', 'uploads/videos//1607578268.mp4', '2h 57m', '2020-10-01 00:00:00', NULL, NULL, NULL),
(34, 1, 'Lorem ipsum dolor sit amet', 4, 2, 'Lorem ipsum dolor sit amet', 'uploads/images//1607578268.jpg', 'uploads/videos//1607578268.mp4', '2h 57m', '2020-10-01 00:00:00', NULL, NULL, NULL),
(35, 2, 'Lorem ipsum dolor sit amet', 4, 2, 'Lorem ipsum dolor sit amet', 'uploads/images//1607578268.jpg', 'uploads/videos//1607578268.mp4', '2h 57m', '2020-10-01 00:00:00', NULL, NULL, NULL),
(36, 3, 'Lorem ipsum dolor sit amet', 4, 2, 'Lorem ipsum dolor sit amet', 'uploads/images//1607578268.jpg', 'uploads/videos//1607578268.mp4', '2h 57m', '2020-10-15 00:00:00', NULL, NULL, NULL),
(37, 4, 'Lorem ipsum dolor sit amet', 4, 2, 'Lorem ipsum dolor sit amet', 'uploads/images//1607578268.jpg', 'uploads/videos//1607578268.mp4', '2h 57m', '2020-10-01 00:00:00', NULL, NULL, NULL),
(38, 1, 'Lorem ipsum dolor sit amet', 5, 1, 'Lorem ipsum dolor sit amet', 'uploads/images//1607578286.jpg', 'uploads/videos//1607578286.mp4', '2h 57m', '2020-10-11 00:00:00', NULL, NULL, '2020-12-10 13:31:26'),
(39, 2, 'Lorem ipsum dolor sit amet', 5, 1, 'Lorem ipsum dolor sit amet', 'uploads/images//1607578286.jpg', 'uploads/videos//1607578286.mp4', '2h 57m', '2020-10-01 00:00:00', NULL, NULL, NULL),
(40, 3, 'Lorem ipsum dolor sit amet', 5, 1, 'Lorem ipsum dolor sit amet', 'uploads/images//1607578286.jpg', 'uploads/videos//1607578286.mp4', '2h 57m', '2020-10-01 00:00:00', NULL, NULL, NULL),
(41, 4, 'Lorem ipsum dolor sit amet', 5, 1, 'Lorem ipsum dolor sit amet', 'uploads/images//1607578286.jpg', 'uploads/videos//1607578286.mp4', '2h 57m', '2020-10-08 00:00:00', NULL, NULL, NULL),
(42, 1, 'Lorem ipsum dolor sit amet', 5, 2, 'Lorem ipsum dolor sit amet', 'uploads/images//1607578286.jpg', 'uploads/videos//1607578286.mp4', '2h 57m', '2020-10-01 00:00:00', NULL, NULL, NULL),
(43, 2, 'Lorem ipsum dolor sit amet', 5, 2, 'Lorem ipsum dolor sit amet', 'uploads/images//1607578286.jpg', 'uploads/videos//1607578286.mp4', '2h 57m', '2020-10-01 00:00:00', NULL, NULL, NULL),
(44, 3, 'Lorem ipsum dolor sit amet', 5, 2, 'Lorem ipsum dolor sit amet', 'uploads/images//1607578286.jpg', 'uploads/videos//1607578286.mp4', '2h 57m', '2020-10-01 00:00:00', NULL, NULL, NULL),
(45, 4, 'Lorem ipsum dolor sit amet', 5, 2, 'Lorem ipsum dolor sit amet', 'uploads/images//1607578286.jpg', 'uploads/videos//1607578286.mp4', '2h 57m', '2020-10-20 00:00:00', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `si_failed_jobs`
--

CREATE TABLE `si_failed_jobs` (
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
-- Table structure for table `si_favorite_content`
--

CREATE TABLE `si_favorite_content` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_favorite_content`
--

INSERT INTO `si_favorite_content` (`id`, `content_type`, `content_id`, `created_at`, `updated_at`) VALUES
(1, 'movie', 2, NULL, NULL),
(2, 'movie', 1, NULL, NULL),
(3, 'movie', 5, NULL, NULL),
(4, 'movie', 4, NULL, NULL),
(5, 'movie', 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `si_like_log`
--

CREATE TABLE `si_like_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_like_log`
--

INSERT INTO `si_like_log` (`id`, `user_id`, `content_type`, `content_id`, `date`, `created_at`, `updated_at`) VALUES
(1, 2, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 16:30:57', '2020-12-10 16:30:57'),
(2, 2, 'movie', 9, '2020-12-10 00:00:00', '2020-12-10 16:44:18', '2020-12-10 16:44:18');

-- --------------------------------------------------------

--
-- Table structure for table `si_login_log`
--

CREATE TABLE `si_login_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_login_log`
--

INSERT INTO `si_login_log` (`id`, `user_id`, `token`, `date`, `created_at`, `updated_at`) VALUES
(11, 2, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMVwvYXBpXC9hdXRoXC9zaWduaW4iLCJpYXQiOjE2MDc1ODg3MDgsImV4cCI6MTYwNzU5MjMwOCwibmJmIjoxNjA3NTg4NzA4LCJqdGkiOiIxTzVldWFjSGE0bE9WejluIiwic3ViIjoyLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.uT26lp5RsmnUjAfMHscfF9cevcqZYsi6wwznY0unxfU', '2020-12-10 00:00:00', '2020-12-10 16:25:08', '2020-12-10 16:25:08');

-- --------------------------------------------------------

--
-- Table structure for table `si_main_carousel_content`
--

CREATE TABLE `si_main_carousel_content` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_main_carousel_content`
--

INSERT INTO `si_main_carousel_content` (`id`, `content_type`, `content_id`, `created_at`, `updated_at`) VALUES
(1, 'movie', 2, NULL, NULL),
(2, 'show', 1, NULL, NULL),
(3, 'movie', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `si_membership`
--

CREATE TABLE `si_membership` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feePerMonth` double(8,2) NOT NULL,
  `multiLoginCount` int(11) NOT NULL,
  `unLimitContent` int(11) NOT NULL,
  `enbAllDevice` int(11) NOT NULL,
  `enbHDQuality` int(11) NOT NULL,
  `enbUHDQuality` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_membership`
--

INSERT INTO `si_membership` (`id`, `name`, `feePerMonth`, `multiLoginCount`, `unLimitContent`, `enbAllDevice`, `enbHDQuality`, `enbUHDQuality`, `created_at`, `updated_at`) VALUES
(1, 'Basic', 8.99, 1, 1, 1, 0, 0, NULL, NULL),
(2, 'Standard', 13.99, 2, 1, 1, 1, 0, NULL, NULL),
(3, 'Premium', 17.99, 4, 1, 1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `si_movies`
--

CREATE TABLE `si_movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` bigint(20) UNSIGNED NOT NULL,
  `lang` bigint(20) UNSIGNED NOT NULL,
  `quality` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `releseDate` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_movies`
--

INSERT INTO `si_movies` (`id`, `title`, `description`, `category`, `lang`, `quality`, `file`, `video_link`, `duration`, `releseDate`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Boop Bitty', 'Lorem ipsum dolor sit amet', 1, 1, 2, 'uploads/images//1607577296.jpg', 'uploads/videos//1607577296.mp4', '2h 57m', 2020, NULL, NULL, '2020-12-10 13:14:56'),
(2, 'Burning', 'Lorem ipsum dolor sit amet', 2, 1, 2, 'uploads/images//1607577319.jpg', 'uploads/videos//1607577319.mp4', '2h 57m', 2020, NULL, NULL, '2020-12-10 13:15:19'),
(3, 'Champions', 'Lorem ipsum dolor sit amet', 1, 3, 1, 'uploads/images//1607577480.jpg', 'uploads/videos//1607577480.mp4', '2h 57m', 2020, NULL, NULL, '2020-12-10 13:18:00'),
(4, 'Dino Land', 'Lorem ipsum dolor sit amet', 4, 2, 3, 'uploads/images//1607580984.jpg', 'uploads/videos//1607580840.mp4', '2h 57m', 2020, NULL, NULL, '2020-12-10 14:16:24'),
(5, 'Last Night', 'Lorem ipsum dolor sit amet', 2, 3, 1, 'uploads/images//1607577530.jpg', 'uploads/videos//1607577530.mp4', '2h 57m', 2020, NULL, NULL, '2020-12-10 13:18:50'),
(6, 'Last Race', 'Lorem ipsum dolor sit amet', 3, 3, 2, 'uploads/images//1607577548.jpg', 'uploads/videos//1607577548.mp4', '2h 57m', 2020, NULL, NULL, '2020-12-10 13:19:08'),
(7, 'Last Breath', 'Lorem ipsum dolor sit amet', 2, 1, 1, 'uploads/images//1607577515.jpg', 'uploads/videos//1607577515.mp4', '2h 57m', 2020, NULL, NULL, '2020-12-10 13:18:35'),
(8, 'Beyond War', 'Lorem ipsum dolor sit amet', 2, 1, 4, 'uploads/images//1607577280.jpg', 'uploads/videos//1607577280.mp4', '2h 57m', 2020, NULL, NULL, '2020-12-10 13:14:40'),
(9, 'Open Dead Shot', 'Lorem ipsum dolor sit amet', 4, 1, 1, 'uploads/images//1607577578.jpg', 'uploads/videos//1607577578.mp4', '2h 57m', 2020, NULL, NULL, '2020-12-10 13:19:38'),
(10, 'Arrival 1999', 'Lorem ipsum dolor sit amet', 4, 2, 4, 'uploads/images//1607577233.jpg', 'uploads/videos//1607577233.mp4', '2h 57m', 2020, NULL, NULL, '2020-12-10 13:13:53'),
(11, 'My True Freinds', 'Lorem ipsum dolor sit amet', 2, 1, 2, 'uploads/images//1607580902.jpg', 'uploads/videos//1607580885.mp4', '2h 57m', 2020, NULL, NULL, '2020-12-10 14:15:02');

-- --------------------------------------------------------

--
-- Table structure for table `si_movie_carousel_content`
--

CREATE TABLE `si_movie_carousel_content` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_movie_carousel_content`
--

INSERT INTO `si_movie_carousel_content` (`id`, `content_type`, `content_id`, `created_at`, `updated_at`) VALUES
(1, 'movie', 4, NULL, NULL),
(2, 'movie', 3, NULL, NULL),
(3, 'movie', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `si_movie_section1_content`
--

CREATE TABLE `si_movie_section1_content` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_movie_section1_content`
--

INSERT INTO `si_movie_section1_content` (`id`, `content_type`, `content_id`, `created_at`, `updated_at`) VALUES
(1, 'movie', 2, NULL, NULL),
(2, 'movie', 1, NULL, NULL),
(3, 'movie', 4, NULL, NULL),
(4, 'movie', 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `si_movie_section2_content`
--

CREATE TABLE `si_movie_section2_content` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_movie_section2_content`
--

INSERT INTO `si_movie_section2_content` (`id`, `content_type`, `content_id`, `created_at`, `updated_at`) VALUES
(1, 'movie', 6, NULL, NULL),
(2, 'movie', 7, NULL, NULL),
(3, 'movie', 2, NULL, NULL),
(4, 'movie', 9, NULL, NULL),
(5, 'movie', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `si_movie_section3_content`
--

CREATE TABLE `si_movie_section3_content` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_movie_section3_content`
--

INSERT INTO `si_movie_section3_content` (`id`, `content_type`, `content_id`, `created_at`, `updated_at`) VALUES
(1, 'movie', 2, NULL, NULL),
(2, 'movie', 5, NULL, NULL),
(3, 'movie', 7, NULL, NULL),
(4, 'movie', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `si_new_release_content`
--

CREATE TABLE `si_new_release_content` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `si_notify_store`
--

CREATE TABLE `si_notify_store` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pushed_at` datetime NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `si_onyx_original_content`
--

CREATE TABLE `si_onyx_original_content` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_onyx_original_content`
--

INSERT INTO `si_onyx_original_content` (`id`, `content_type`, `content_id`, `created_at`, `updated_at`) VALUES
(1, 'movie', 4, NULL, NULL),
(2, 'movie', 2, NULL, NULL),
(3, 'movie', 1, NULL, NULL),
(4, 'movie', 6, NULL, NULL),
(5, 'movie', 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `si_recent_add_content`
--

CREATE TABLE `si_recent_add_content` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `si_roles`
--

CREATE TABLE `si_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_roles`
--

INSERT INTO `si_roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Front-end customer', 'customer', NULL, NULL),
(2, 'Back-end administrator', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `si_shows`
--

CREATE TABLE `si_shows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` bigint(20) UNSIGNED NOT NULL,
  `lang` bigint(20) UNSIGNED NOT NULL,
  `quality` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_shows`
--

INSERT INTO `si_shows` (`id`, `title`, `description`, `category`, `lang`, `quality`, `file`, `banner`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'OPPOSITE ATTRACT', 'Lorem ipsum dolor sit amet', 1, 1, 2, 'uploads/images//1607577630.jpg', 'uploads/images//1607577630.jpg', NULL, NULL, '2020-12-10 13:20:30'),
(2, 'THE MARSHAL KING', 'Lorem ipsum dolor sit amet', 1, 1, 3, 'uploads/images//1607577679.jpg', 'uploads/images//1607577679.jpg', NULL, NULL, '2020-12-10 13:21:19'),
(3, 'DARK ZONE', 'Lorem ipsum dolor sit amet', 1, 2, 2, 'uploads/images//1607577599.jpg', 'uploads/images//1607577599.jpg', NULL, NULL, '2020-12-10 13:19:59'),
(4, 'FIRE STORM', 'Lorem ipsum dolor sit amet', 2, 2, 1, 'uploads/images//1607577612.jpg', 'uploads/images//1607577612.jpg', NULL, NULL, '2020-12-10 13:20:12'),
(5, 'THE HERO CHAMP', 'Lorem ipsum dolor sit amet', 2, 2, 4, 'uploads/images//1607577662.jpg', 'uploads/images//1607577662.jpg', NULL, NULL, '2020-12-10 13:21:02'),
(6, 'THE APARTMENT', 'Lorem ipsum dolor sit amet', 2, 3, 3, 'uploads/images//1607577647.jpg', 'uploads/images//1607577647.jpg', NULL, NULL, '2020-12-10 13:20:47');

-- --------------------------------------------------------

--
-- Table structure for table `si_show_carousel_content`
--

CREATE TABLE `si_show_carousel_content` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_show_carousel_content`
--

INSERT INTO `si_show_carousel_content` (`id`, `content_type`, `content_id`, `created_at`, `updated_at`) VALUES
(1, 'show', 3, NULL, NULL),
(2, 'show', 2, NULL, NULL),
(3, 'show', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `si_show_section1_content`
--

CREATE TABLE `si_show_section1_content` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_show_section1_content`
--

INSERT INTO `si_show_section1_content` (`id`, `content_type`, `content_id`, `created_at`, `updated_at`) VALUES
(1, 'show', 4, NULL, NULL),
(2, 'show', 2, NULL, NULL),
(3, 'show', 5, NULL, NULL),
(4, 'show', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `si_show_section2_content`
--

CREATE TABLE `si_show_section2_content` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_show_section2_content`
--

INSERT INTO `si_show_section2_content` (`id`, `content_type`, `content_id`, `created_at`, `updated_at`) VALUES
(1, 'show', 1, NULL, NULL),
(2, 'show', 3, NULL, NULL),
(3, 'show', 2, NULL, NULL),
(4, 'show', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `si_show_section3_content`
--

CREATE TABLE `si_show_section3_content` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_show_section3_content`
--

INSERT INTO `si_show_section3_content` (`id`, `content_type`, `content_id`, `created_at`, `updated_at`) VALUES
(1, 'show', 6, NULL, NULL),
(2, 'show', 2, NULL, NULL),
(3, 'show', 3, NULL, NULL),
(4, 'show', 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `si_state`
--

CREATE TABLE `si_state` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_state`
--

INSERT INTO `si_state` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'California', NULL, NULL),
(2, 'Florida', NULL, NULL),
(3, 'Georgia', NULL, NULL),
(4, 'Connecticut', NULL, NULL),
(5, 'Louisiana', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `si_suggest_content`
--

CREATE TABLE `si_suggest_content` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_suggest_content`
--

INSERT INTO `si_suggest_content` (`id`, `content_type`, `content_id`, `created_at`, `updated_at`) VALUES
(1, 'movie', 4, NULL, NULL),
(2, 'movie', 5, NULL, NULL),
(3, 'movie', 2, NULL, NULL),
(4, 'movie', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `si_topten_content`
--

CREATE TABLE `si_topten_content` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_topten_content`
--

INSERT INTO `si_topten_content` (`id`, `content_type`, `content_id`, `created_at`, `updated_at`) VALUES
(1, 'movie', 1, NULL, NULL),
(2, 'movie', 2, NULL, NULL),
(3, 'movie', 3, NULL, NULL),
(4, 'movie', 4, NULL, NULL),
(5, 'movie', 5, NULL, NULL),
(6, 'movie', 6, NULL, NULL),
(7, 'movie', 7, NULL, NULL),
(8, 'movie', 8, NULL, NULL),
(9, 'movie', 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `si_trending_content`
--

CREATE TABLE `si_trending_content` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_trending_content`
--

INSERT INTO `si_trending_content` (`id`, `content_type`, `content_id`, `created_at`, `updated_at`) VALUES
(1, 'show', 1, NULL, NULL),
(2, 'show', 3, NULL, NULL),
(3, 'show', 5, NULL, NULL),
(4, 'show', 2, NULL, NULL),
(5, 'show', 6, NULL, NULL),
(6, 'show', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `si_upcoming_content`
--

CREATE TABLE `si_upcoming_content` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_upcoming_content`
--

INSERT INTO `si_upcoming_content` (`id`, `content_type`, `content_id`, `created_at`, `updated_at`) VALUES
(1, 'movie', 3, NULL, NULL),
(2, 'movie', 2, NULL, NULL),
(3, 'movie', 5, NULL, NULL),
(4, 'movie', 6, NULL, NULL),
(5, 'movie', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `si_users`
--

CREATE TABLE `si_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebookLink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitterLink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `googleLink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagramLink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtubeLink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joinDate` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `device_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_users`
--

INSERT INTO `si_users` (`id`, `name`, `email`, `email_verified_at`, `password`, `lang`, `facebookLink`, `twitterLink`, `googleLink`, `instagramLink`, `youtubeLink`, `joinDate`, `status`, `device_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aristo', 'aristo@gmail.com', NULL, '$2y$10$UHt3nHih1bTC5pMk7IfKVeHo3NlZBXVQzl6sxayPJyGzL1QZx8Njm', 'English', 'facebook@gmail.com', 'twitter@gmail.com', NULL, NULL, NULL, '2020-11-15 00:00:00', 1, NULL, NULL, NULL, '2020-12-10 13:42:16'),
(2, 'Antony Thomas', 'antony@gmail.com', NULL, '$2y$10$iyYs.m3g/e3.OntBXJe.mO.eDdtxySKu/mAqvKjowJUI6gCtWpDXq', NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-10 00:00:00', 0, 'eN0UpmIXLQqEhNFJ_3NHGa:APA91bGlMd1Q-CRD-y7j2n6MuDU3vWcOgl5WjV47R1xvNwEfZLq_tzVl_98LpzfQ8jL5Q-LsTJw7gKTnXLzQ4LiuUUKh-cpquZV6lOstN3scosDfeCxnq_vuKyA_m0bZO_mzO7zmn4Hf', NULL, '2020-12-10 14:25:16', '2020-12-10 16:11:54'),
(3, 'Walter', 'walter@gmail.com', NULL, '$2y$10$JV8CmRsx1V7uHzVUx362kuEAfwAASTbrkU.Vct2anq8dwAl6qNsm6', NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-10 00:00:00', 0, 'e1h1x62zoFYQuup43F65oA:APA91bEQA47qMrCN56yOSRHwdVZUYk6npYJMiaY4NmXCUo92OTzEEITJKXu4YSYXaK8LUgalUbii-Pi6LLp2eOxgAtkCVIM-ovO3bmZ71rpEDdosp7UlDCLXHlR4Cb9BCi69OsPBYH5H', NULL, '2020-12-10 14:41:38', '2020-12-10 15:20:08');

-- --------------------------------------------------------

--
-- Table structure for table `si_users_memships`
--

CREATE TABLE `si_users_memships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `memship_id` bigint(20) UNSIGNED NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_users_memships`
--

INSERT INTO `si_users_memships` (`id`, `user_id`, `memship_id`, `updated_at`) VALUES
(1, 1, 1, '2020-12-10 00:00:00'),
(2, 2, 1, '2020-12-10 00:00:00'),
(3, 3, 1, '2020-12-10 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `si_users_profiles`
--

CREATE TABLE `si_users_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthDate` datetime DEFAULT NULL,
  `marital` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` bigint(20) UNSIGNED DEFAULT NULL,
  `state` bigint(20) UNSIGNED DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobileNo` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_users_profiles`
--

INSERT INTO `si_users_profiles` (`id`, `user_id`, `firstName`, `lastName`, `image`, `city`, `gender`, `birthDate`, `marital`, `country`, `state`, `address`, `mobileNo`, `created_at`, `updated_at`) VALUES
(1, 1, 'Aristo', 'Telles', 'uploads/images/users/01.jpg', 'atlanta', 'male', '2020-12-10 00:00:00', 'divorced', 1, 2, 'Linden Street No3', 1234455678, NULL, '2020-12-10 13:41:45'),
(2, 2, 'Antony', 'Thomas', 'uploads/images//1607588982.jpg', NULL, 'female', '2020-12-09 00:00:00', NULL, NULL, NULL, NULL, NULL, '2020-12-10 14:25:17', '2020-12-10 16:29:42'),
(3, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-10 14:41:38', '2020-12-10 14:41:38');

-- --------------------------------------------------------

--
-- Table structure for table `si_users_roles`
--

CREATE TABLE `si_users_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_users_roles`
--

INSERT INTO `si_users_roles` (`user_id`, `role_id`) VALUES
(1, 2),
(2, 1),
(3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `si_video_category`
--

CREATE TABLE `si_video_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_video_category`
--

INSERT INTO `si_video_category` (`id`, `name`, `description`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Drama', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet', 0, NULL, NULL, NULL),
(2, 'Action', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet', 0, NULL, NULL, NULL),
(3, 'Horror', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet', 0, NULL, NULL, NULL),
(4, 'Thriller', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `si_video_language`
--

CREATE TABLE `si_video_language` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_video_language`
--

INSERT INTO `si_video_language` (`id`, `name`) VALUES
(1, 'English'),
(2, 'Hindi'),
(3, 'Tamil'),
(4, 'Gujarati');

-- --------------------------------------------------------

--
-- Table structure for table `si_video_quality`
--

CREATE TABLE `si_video_quality` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_video_quality`
--

INSERT INTO `si_video_quality` (`id`, `name`) VALUES
(1, 'SD(480p)'),
(2, 'HD(720p)'),
(3, 'FHD(1080p)'),
(4, 'UHD(4K +)');

-- --------------------------------------------------------

--
-- Table structure for table `si_view_log`
--

CREATE TABLE `si_view_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_view_log`
--

INSERT INTO `si_view_log` (`id`, `content_type`, `content_id`, `date`, `created_at`, `updated_at`) VALUES
(1, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 14:25:36', '2020-12-10 14:25:36'),
(2, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 14:26:11', '2020-12-10 14:26:11'),
(3, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 14:27:14', '2020-12-10 14:27:14'),
(4, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 14:29:48', '2020-12-10 14:29:48'),
(5, 'movie', 9, '2020-12-10 00:00:00', '2020-12-10 14:30:02', '2020-12-10 14:30:02'),
(6, 'movie', 3, '2020-12-10 00:00:00', '2020-12-10 14:30:48', '2020-12-10 14:30:48'),
(7, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 14:31:34', '2020-12-10 14:31:34'),
(8, 'movie', 7, '2020-12-10 00:00:00', '2020-12-10 14:31:42', '2020-12-10 14:31:42'),
(9, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 14:48:26', '2020-12-10 14:48:26'),
(10, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 15:00:10', '2020-12-10 15:00:10'),
(11, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 15:00:48', '2020-12-10 15:00:48'),
(12, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 15:01:11', '2020-12-10 15:01:11'),
(13, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 15:01:21', '2020-12-10 15:01:21'),
(14, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 15:01:59', '2020-12-10 15:01:59'),
(15, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 15:04:38', '2020-12-10 15:04:38'),
(16, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 15:26:30', '2020-12-10 15:26:30'),
(17, 'movie', 5, '2020-12-10 00:00:00', '2020-12-10 15:29:06', '2020-12-10 15:29:06'),
(18, 'movie', 9, '2020-12-10 00:00:00', '2020-12-10 16:44:07', '2020-12-10 16:44:07');

-- --------------------------------------------------------

--
-- Table structure for table `si_visit_log`
--

CREATE TABLE `si_visit_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `si_visit_log`
--

INSERT INTO `si_visit_log` (`id`, `ip`, `date`, `created_at`, `updated_at`) VALUES
(1, '127.0.0.1', '2020-12-10 00:00:00', '2020-12-10 14:03:37', '2020-12-10 14:03:37'),
(2, '127.0.0.1', '2020-12-10 00:00:00', '2020-12-10 14:39:03', '2020-12-10 14:39:03'),
(3, '127.0.0.1', '2020-12-10 00:00:00', '2020-12-10 14:56:19', '2020-12-10 14:56:19'),
(4, '127.0.0.1', '2020-12-10 00:00:00', '2020-12-10 15:09:06', '2020-12-10 15:09:06'),
(5, '127.0.0.1', '2020-12-10 00:00:00', '2020-12-10 15:18:11', '2020-12-10 15:18:11'),
(6, '127.0.0.1', '2020-12-10 00:00:00', '2020-12-10 15:19:23', '2020-12-10 15:19:23'),
(7, '127.0.0.1', '2020-12-10 00:00:00', '2020-12-10 15:52:35', '2020-12-10 15:52:35'),
(8, '127.0.0.1', '2020-12-10 00:00:00', '2020-12-10 16:02:23', '2020-12-10 16:02:23'),
(9, '127.0.0.1', '2020-12-10 00:00:00', '2020-12-10 16:11:23', '2020-12-10 16:11:23');

-- --------------------------------------------------------

--
-- Table structure for table `si_watch_again_content`
--

CREATE TABLE `si_watch_again_content` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `si_comments`
--
ALTER TABLE `si_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `si_comments_author_foreign` (`author`);

--
-- Indexes for table `si_contact_us`
--
ALTER TABLE `si_contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_country`
--
ALTER TABLE `si_country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_download_log`
--
ALTER TABLE `si_download_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_episodes`
--
ALTER TABLE `si_episodes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `si_episodes_show_foreign` (`show`);

--
-- Indexes for table `si_failed_jobs`
--
ALTER TABLE `si_failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `si_failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `si_favorite_content`
--
ALTER TABLE `si_favorite_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_like_log`
--
ALTER TABLE `si_like_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `si_like_log_user_id_foreign` (`user_id`);

--
-- Indexes for table `si_login_log`
--
ALTER TABLE `si_login_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `si_login_log_user_id_foreign` (`user_id`);

--
-- Indexes for table `si_main_carousel_content`
--
ALTER TABLE `si_main_carousel_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_membership`
--
ALTER TABLE `si_membership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_movies`
--
ALTER TABLE `si_movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `si_movies_category_foreign` (`category`),
  ADD KEY `si_movies_lang_foreign` (`lang`),
  ADD KEY `si_movies_quality_foreign` (`quality`);

--
-- Indexes for table `si_movie_carousel_content`
--
ALTER TABLE `si_movie_carousel_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_movie_section1_content`
--
ALTER TABLE `si_movie_section1_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_movie_section2_content`
--
ALTER TABLE `si_movie_section2_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_movie_section3_content`
--
ALTER TABLE `si_movie_section3_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_new_release_content`
--
ALTER TABLE `si_new_release_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_notify_store`
--
ALTER TABLE `si_notify_store`
  ADD PRIMARY KEY (`id`),
  ADD KEY `si_notify_store_user_id_foreign` (`user_id`);

--
-- Indexes for table `si_onyx_original_content`
--
ALTER TABLE `si_onyx_original_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_recent_add_content`
--
ALTER TABLE `si_recent_add_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_roles`
--
ALTER TABLE `si_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_shows`
--
ALTER TABLE `si_shows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `si_shows_category_foreign` (`category`),
  ADD KEY `si_shows_lang_foreign` (`lang`),
  ADD KEY `si_shows_quality_foreign` (`quality`);

--
-- Indexes for table `si_show_carousel_content`
--
ALTER TABLE `si_show_carousel_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_show_section1_content`
--
ALTER TABLE `si_show_section1_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_show_section2_content`
--
ALTER TABLE `si_show_section2_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_show_section3_content`
--
ALTER TABLE `si_show_section3_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_state`
--
ALTER TABLE `si_state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_suggest_content`
--
ALTER TABLE `si_suggest_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_topten_content`
--
ALTER TABLE `si_topten_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_trending_content`
--
ALTER TABLE `si_trending_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_upcoming_content`
--
ALTER TABLE `si_upcoming_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_users`
--
ALTER TABLE `si_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `si_users_email_unique` (`email`);

--
-- Indexes for table `si_users_memships`
--
ALTER TABLE `si_users_memships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `si_users_memships_user_id_foreign` (`user_id`),
  ADD KEY `si_users_memships_memship_id_foreign` (`memship_id`);

--
-- Indexes for table `si_users_profiles`
--
ALTER TABLE `si_users_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `si_users_profiles_user_id_foreign` (`user_id`),
  ADD KEY `si_users_profiles_country_foreign` (`country`),
  ADD KEY `si_users_profiles_state_foreign` (`state`);

--
-- Indexes for table `si_users_roles`
--
ALTER TABLE `si_users_roles`
  ADD KEY `si_users_roles_user_id_foreign` (`user_id`),
  ADD KEY `si_users_roles_role_id_foreign` (`role_id`);

--
-- Indexes for table `si_video_category`
--
ALTER TABLE `si_video_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_video_language`
--
ALTER TABLE `si_video_language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_video_quality`
--
ALTER TABLE `si_video_quality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_view_log`
--
ALTER TABLE `si_view_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_visit_log`
--
ALTER TABLE `si_visit_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `si_watch_again_content`
--
ALTER TABLE `si_watch_again_content`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `si_comments`
--
ALTER TABLE `si_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `si_contact_us`
--
ALTER TABLE `si_contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `si_country`
--
ALTER TABLE `si_country`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `si_download_log`
--
ALTER TABLE `si_download_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `si_episodes`
--
ALTER TABLE `si_episodes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `si_failed_jobs`
--
ALTER TABLE `si_failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `si_favorite_content`
--
ALTER TABLE `si_favorite_content`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `si_like_log`
--
ALTER TABLE `si_like_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `si_login_log`
--
ALTER TABLE `si_login_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `si_main_carousel_content`
--
ALTER TABLE `si_main_carousel_content`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `si_membership`
--
ALTER TABLE `si_membership`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `si_movies`
--
ALTER TABLE `si_movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `si_movie_carousel_content`
--
ALTER TABLE `si_movie_carousel_content`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `si_movie_section1_content`
--
ALTER TABLE `si_movie_section1_content`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `si_movie_section2_content`
--
ALTER TABLE `si_movie_section2_content`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `si_movie_section3_content`
--
ALTER TABLE `si_movie_section3_content`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `si_new_release_content`
--
ALTER TABLE `si_new_release_content`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `si_notify_store`
--
ALTER TABLE `si_notify_store`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `si_onyx_original_content`
--
ALTER TABLE `si_onyx_original_content`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `si_recent_add_content`
--
ALTER TABLE `si_recent_add_content`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `si_roles`
--
ALTER TABLE `si_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `si_shows`
--
ALTER TABLE `si_shows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `si_show_carousel_content`
--
ALTER TABLE `si_show_carousel_content`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `si_show_section1_content`
--
ALTER TABLE `si_show_section1_content`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `si_show_section2_content`
--
ALTER TABLE `si_show_section2_content`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `si_show_section3_content`
--
ALTER TABLE `si_show_section3_content`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `si_state`
--
ALTER TABLE `si_state`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `si_suggest_content`
--
ALTER TABLE `si_suggest_content`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `si_topten_content`
--
ALTER TABLE `si_topten_content`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `si_trending_content`
--
ALTER TABLE `si_trending_content`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `si_upcoming_content`
--
ALTER TABLE `si_upcoming_content`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `si_users`
--
ALTER TABLE `si_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `si_users_memships`
--
ALTER TABLE `si_users_memships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `si_users_profiles`
--
ALTER TABLE `si_users_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `si_video_category`
--
ALTER TABLE `si_video_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `si_video_language`
--
ALTER TABLE `si_video_language`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `si_video_quality`
--
ALTER TABLE `si_video_quality`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `si_view_log`
--
ALTER TABLE `si_view_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `si_visit_log`
--
ALTER TABLE `si_visit_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `si_watch_again_content`
--
ALTER TABLE `si_watch_again_content`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `si_comments`
--
ALTER TABLE `si_comments`
  ADD CONSTRAINT `si_comments_author_foreign` FOREIGN KEY (`author`) REFERENCES `si_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `si_episodes`
--
ALTER TABLE `si_episodes`
  ADD CONSTRAINT `si_episodes_show_foreign` FOREIGN KEY (`show`) REFERENCES `si_shows` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `si_like_log`
--
ALTER TABLE `si_like_log`
  ADD CONSTRAINT `si_like_log_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `si_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `si_login_log`
--
ALTER TABLE `si_login_log`
  ADD CONSTRAINT `si_login_log_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `si_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `si_movies`
--
ALTER TABLE `si_movies`
  ADD CONSTRAINT `si_movies_category_foreign` FOREIGN KEY (`category`) REFERENCES `si_video_category` (`id`),
  ADD CONSTRAINT `si_movies_lang_foreign` FOREIGN KEY (`lang`) REFERENCES `si_video_language` (`id`),
  ADD CONSTRAINT `si_movies_quality_foreign` FOREIGN KEY (`quality`) REFERENCES `si_video_quality` (`id`);

--
-- Constraints for table `si_notify_store`
--
ALTER TABLE `si_notify_store`
  ADD CONSTRAINT `si_notify_store_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `si_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `si_shows`
--
ALTER TABLE `si_shows`
  ADD CONSTRAINT `si_shows_category_foreign` FOREIGN KEY (`category`) REFERENCES `si_video_category` (`id`),
  ADD CONSTRAINT `si_shows_lang_foreign` FOREIGN KEY (`lang`) REFERENCES `si_video_language` (`id`),
  ADD CONSTRAINT `si_shows_quality_foreign` FOREIGN KEY (`quality`) REFERENCES `si_video_quality` (`id`);

--
-- Constraints for table `si_users_memships`
--
ALTER TABLE `si_users_memships`
  ADD CONSTRAINT `si_users_memships_memship_id_foreign` FOREIGN KEY (`memship_id`) REFERENCES `si_membership` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `si_users_memships_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `si_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `si_users_profiles`
--
ALTER TABLE `si_users_profiles`
  ADD CONSTRAINT `si_users_profiles_country_foreign` FOREIGN KEY (`country`) REFERENCES `si_country` (`id`),
  ADD CONSTRAINT `si_users_profiles_state_foreign` FOREIGN KEY (`state`) REFERENCES `si_state` (`id`),
  ADD CONSTRAINT `si_users_profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `si_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `si_users_roles`
--
ALTER TABLE `si_users_roles`
  ADD CONSTRAINT `si_users_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `si_roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `si_users_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `si_users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
