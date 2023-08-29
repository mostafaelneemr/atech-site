-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2020 at 09:26 AM
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
-- Database: `empty_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

DROP TABLE IF EXISTS `activity_log`;
CREATE TABLE `activity_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `log_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(10) DEFAULT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` int(10) DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `properties` text COLLATE utf8mb4_unicode_ci,
  `ip` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_id`, `subject_type`, `causer_id`, `causer_type`, `properties`, `ip`, `user_agent`, `url`, `method`, `created_at`, `updated_at`) VALUES
(1, 'default', 'created', 1, 'App\\Models\\User', NULL, NULL, '{\"attributes\":{\"id\":1,\"type\":\"company\",\"parent_id\":0,\"name\":\"mac\",\"email\":\"amr@sds.sds\",\"mobile\":\"01014778866\",\"username\":\"\",\"password\":\"$2y$10$IzZRUDAxZRuW.kE5z7iTFOQMhi9LGgMhBiIFQfXvj6rqliBaCHz6C\",\"activation_code\":\"6020\",\"forgot_password_code\":null,\"rc_copy\":\"2020\\/10\\/19\\/UEHWhFKIsxnVOtj4vsfS1ZPTfkRidsa11ZcP5IXi.png\",\"credit\":0,\"lat\":null,\"lng\":null,\"address\":null,\"address_notes\":null,\"contract_image\":null,\"bank_account\":null,\"contact_name\":null,\"plan_id\":null,\"satus\":\"active\",\"verified_at\":null,\"created_at\":\"2020-10-19 00:07:38\",\"updated_at\":\"2020-10-19 00:07:38\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-18 22:07:38', '2020-10-18 22:07:38'),
(2, 'default', 'created', 2, 'App\\Models\\User', NULL, NULL, '{\"attributes\":{\"id\":2,\"type\":\"company\",\"parent_id\":0,\"name\":\"mac\",\"email\":\"amr@sds.sd\",\"mobile\":\"01014778861\",\"username\":\"\",\"password\":\"$2y$10$W7p7Tqz4h6AAJCeJbv6ydewAYKAHrLwv8bT1yz4kW950fBJHdUQbS\",\"activation_code\":\"2601\",\"forgot_password_code\":null,\"rc_copy\":\"2020\\/10\\/19\\/foNUU33KL01bbSmj1XW5R0EMlqBOnnQn1eQgLO1q.png\",\"credit\":0,\"lat\":null,\"lng\":null,\"address\":null,\"address_notes\":null,\"contract_image\":null,\"bank_account\":null,\"contact_name\":null,\"plan_id\":null,\"satus\":\"active\",\"verified_at\":null,\"created_at\":\"2020-10-19 00:08:52\",\"updated_at\":\"2020-10-19 00:08:52\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-18 22:08:52', '2020-10-18 22:08:52'),
(3, 'default', 'created', 3, 'App\\Models\\User', NULL, NULL, '{\"attributes\":{\"id\":3,\"type\":\"company\",\"parent_id\":0,\"name\":\"amr\",\"email\":\"amr@sds.sr\",\"mobile\":\"01014778862\",\"username\":\"\",\"password\":\"$2y$10$D2K1nAGy9SWvjDeScbTRseEZ7yaTDy.ePUuxDbhtp7a1DFKjyOhi2\",\"activation_code\":\"6785\",\"forgot_password_code\":null,\"rc_copy\":\"2020\\/10\\/19\\/NLc2hDC5tGFgOWnYk2tOS7R14I76dxTlBS9nniUH.png\",\"credit\":0,\"lat\":null,\"lng\":null,\"address\":null,\"address_notes\":null,\"contract_image\":null,\"bank_account\":null,\"contact_name\":null,\"plan_id\":null,\"satus\":\"inactive\",\"verified_at\":null,\"created_at\":\"2020-10-19 00:12:37\",\"updated_at\":\"2020-10-19 00:12:37\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-18 22:12:37', '2020-10-18 22:12:37'),
(4, 'default', 'created', 4, 'App\\Models\\User', NULL, NULL, '{\"attributes\":{\"id\":4,\"type\":\"person\",\"parent_id\":0,\"name\":\"amr2\",\"email\":\"amr@sds.sc\",\"mobile\":\"01014778864\",\"username\":\"01014778864\",\"password\":\"$2y$10$oj\\/zXLuBl47PLVy3\\/gxe\\/u7JRnqbUHv6cM7eEeHmTWrbDpblti7Xq\",\"activation_code\":\"1577\",\"forgot_password_code\":null,\"rc_copy\":null,\"credit\":0,\"lat\":null,\"lng\":null,\"address\":null,\"address_notes\":null,\"contract_image\":null,\"bank_account\":null,\"contact_name\":null,\"plan_id\":null,\"satus\":\"inactive\",\"verified_at\":null,\"created_at\":\"2020-10-19 00:13:22\",\"updated_at\":\"2020-10-19 00:13:22\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-18 22:13:22', '2020-10-18 22:13:22'),
(5, 'default', 'updated', 4, 'App\\Models\\User', NULL, NULL, '{\"attributes\":{\"id\":4,\"type\":\"person\",\"parent_id\":0,\"name\":\"amr2\",\"email\":\"amr@sds.sc\",\"mobile\":\"01014778864\",\"username\":\"01014778864\",\"password\":\"$2y$10$oj\\/zXLuBl47PLVy3\\/gxe\\/u7JRnqbUHv6cM7eEeHmTWrbDpblti7Xq\",\"activation_code\":\"1577\",\"forgot_password_code\":null,\"rc_copy\":null,\"credit\":0,\"lat\":null,\"lng\":null,\"address\":null,\"address_notes\":null,\"contract_image\":null,\"bank_account\":null,\"contact_name\":null,\"plan_id\":null,\"status\":\"active\",\"verified_at\":\"2020-10-19 00:17:11\",\"created_at\":\"2020-10-19 00:17:11\",\"updated_at\":\"2020-10-19 00:17:11\",\"deleted_at\":null},\"old\":{\"id\":4,\"type\":\"person\",\"parent_id\":0,\"name\":\"amr2\",\"email\":\"amr@sds.sc\",\"mobile\":\"01014778864\",\"username\":\"01014778864\",\"password\":\"$2y$10$oj\\/zXLuBl47PLVy3\\/gxe\\/u7JRnqbUHv6cM7eEeHmTWrbDpblti7Xq\",\"activation_code\":\"1577\",\"forgot_password_code\":null,\"rc_copy\":null,\"credit\":0,\"lat\":null,\"lng\":null,\"address\":null,\"address_notes\":null,\"contract_image\":null,\"bank_account\":null,\"contact_name\":null,\"plan_id\":null,\"status\":\"inactive\",\"verified_at\":null,\"created_at\":\"2020-10-19 00:13:22\",\"updated_at\":\"2020-10-19 00:13:22\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-18 22:17:11', '2020-10-18 22:17:11'),
(6, 'default', 'updated', 1, 'App\\Models\\User', NULL, NULL, '{\"attributes\":{\"id\":1,\"type\":\"company\",\"parent_id\":0,\"name\":\"mac\",\"email\":\"amr@sds.sds\",\"mobile\":\"01014778866\",\"username\":\"\",\"password\":\"$2y$10$IzZRUDAxZRuW.kE5z7iTFOQMhi9LGgMhBiIFQfXvj6rqliBaCHz6C\",\"activation_code\":\"6020\",\"forgot_password_code\":\"2828\",\"rc_copy\":\"2020\\/10\\/19\\/UEHWhFKIsxnVOtj4vsfS1ZPTfkRidsa11ZcP5IXi.png\",\"credit\":0,\"lat\":null,\"lng\":null,\"address\":null,\"address_notes\":null,\"contract_image\":null,\"bank_account\":null,\"contact_name\":null,\"plan_id\":null,\"status\":\"active\",\"verified_at\":null,\"created_at\":\"2020-10-19 00:25:44\",\"updated_at\":\"2020-10-19 00:25:44\",\"deleted_at\":null},\"old\":{\"id\":1,\"type\":\"company\",\"parent_id\":0,\"name\":\"mac\",\"email\":\"amr@sds.sds\",\"mobile\":\"01014778866\",\"username\":\"\",\"password\":\"$2y$10$IzZRUDAxZRuW.kE5z7iTFOQMhi9LGgMhBiIFQfXvj6rqliBaCHz6C\",\"activation_code\":\"6020\",\"forgot_password_code\":null,\"rc_copy\":\"2020\\/10\\/19\\/UEHWhFKIsxnVOtj4vsfS1ZPTfkRidsa11ZcP5IXi.png\",\"credit\":0,\"lat\":null,\"lng\":null,\"address\":null,\"address_notes\":null,\"contract_image\":null,\"bank_account\":null,\"contact_name\":null,\"plan_id\":null,\"status\":\"active\",\"verified_at\":null,\"created_at\":\"2020-10-19 00:07:38\",\"updated_at\":\"2020-10-19 00:07:38\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-18 22:25:44', '2020-10-18 22:25:44'),
(7, 'default', 'updated', 1, 'App\\Models\\User', NULL, NULL, '{\"attributes\":{\"id\":1,\"type\":\"company\",\"parent_id\":0,\"name\":\"mac\",\"email\":\"amr@sds.sds\",\"mobile\":\"01014778866\",\"username\":\"\",\"password\":\"$2y$10$nGXMtKCdMlccDNQDWGASFuwRuaVlWWxz4ewi6.szenugXwOlOcaD6\",\"activation_code\":\"6020\",\"forgot_password_code\":\"\",\"rc_copy\":\"2020\\/10\\/19\\/UEHWhFKIsxnVOtj4vsfS1ZPTfkRidsa11ZcP5IXi.png\",\"credit\":0,\"lat\":null,\"lng\":null,\"address\":null,\"address_notes\":null,\"contract_image\":null,\"bank_account\":null,\"contact_name\":null,\"plan_id\":null,\"status\":\"active\",\"verified_at\":null,\"created_at\":\"2020-10-19 00:27:27\",\"updated_at\":\"2020-10-19 00:27:27\",\"deleted_at\":null},\"old\":{\"id\":1,\"type\":\"company\",\"parent_id\":0,\"name\":\"mac\",\"email\":\"amr@sds.sds\",\"mobile\":\"01014778866\",\"username\":\"\",\"password\":\"$2y$10$IzZRUDAxZRuW.kE5z7iTFOQMhi9LGgMhBiIFQfXvj6rqliBaCHz6C\",\"activation_code\":\"6020\",\"forgot_password_code\":\"2828\",\"rc_copy\":\"2020\\/10\\/19\\/UEHWhFKIsxnVOtj4vsfS1ZPTfkRidsa11ZcP5IXi.png\",\"credit\":0,\"lat\":null,\"lng\":null,\"address\":null,\"address_notes\":null,\"contract_image\":null,\"bank_account\":null,\"contact_name\":null,\"plan_id\":null,\"status\":\"active\",\"verified_at\":null,\"created_at\":\"2020-10-19 00:25:44\",\"updated_at\":\"2020-10-19 00:25:44\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-18 22:27:27', '2020-10-18 22:27:27'),
(8, 'default', 'created', 1, 'App\\Models\\Address', 4, 'App\\Models\\User', '{\"attributes\":{\"id\":1,\"name\":\"12 \\u0627\\u0644\\u0645\\u062f\\u062e\\u0644 \\u0627\\u0644\\u062b\\u0627\\u0646\\u064a\",\"user_id\":4,\"mobile\":\"01250287445\",\"area_number\":\"15\",\"street_name\":\"\\u0634\\u0627\\u0631\\u0639 \\u0627\\u0633\\u0627\\u0645\\u0647\",\"building_number\":\"12\",\"flat_number\":\"25\",\"notes\":null,\"lat\":\"\",\"lng\":\"\",\"created_at\":\"2020-10-20 11:22:56\",\"updated_at\":\"2020-10-20 11:22:56\",\"deleted_at\":\"0000-00-00 00:00:00\"}}', NULL, NULL, '', NULL, '2020-10-20 09:22:56', '2020-10-20 09:22:56'),
(9, 'default', 'created', 2, 'App\\Models\\Address', 4, 'App\\Models\\User', '{\"attributes\":{\"id\":2,\"name\":\"12 \\u0627\\u0644\\u0645\\u062f\\u062e\\u0644 \\u0627\\u0644\\u062b\\u0627\\u0646\\u064a\",\"user_id\":4,\"mobile\":\"01250287445\",\"area_number\":\"15\",\"street_name\":\"\\u0634\\u0627\\u0631\\u0639 \\u0627\\u0633\\u0627\\u0645\\u0647\",\"building_number\":\"12\",\"flat_number\":\"25\",\"notes\":null,\"lat\":\"22323\",\"lng\":\"321321\",\"created_at\":\"2020-10-20 11:27:24\",\"updated_at\":\"2020-10-20 11:27:24\",\"deleted_at\":\"0000-00-00 00:00:00\"}}', NULL, NULL, '', NULL, '2020-10-20 09:27:24', '2020-10-20 09:27:24'),
(10, 'default', 'created', 3, 'App\\Models\\Address', 4, 'App\\Models\\User', '{\"attributes\":{\"id\":3,\"name\":\"12 \\u0627\\u0644\\u0645\\u062f\\u062e\\u0644 \\u0627\\u0644\\u062b\\u0627\\u0646\\u064a\",\"user_id\":4,\"mobile\":\"01250287445\",\"area_number\":\"15\",\"street_name\":\"\\u0634\\u0627\\u0631\\u0639 \\u0627\\u0633\\u0627\\u0645\\u0647\",\"building_number\":\"12\",\"flat_number\":\"25\",\"notes\":null,\"lat\":\"22323\",\"lng\":\"321321\",\"created_at\":\"2020-10-20 11:29:15\",\"updated_at\":\"2020-10-20 11:29:15\",\"deleted_at\":\"0000-00-00 00:00:00\"}}', NULL, NULL, '', NULL, '2020-10-20 09:29:15', '2020-10-20 09:29:15'),
(11, 'default', 'created', 4, 'App\\Models\\Address', 4, 'App\\Models\\User', '{\"attributes\":{\"id\":4,\"name\":\"12 \\u0627\\u0644\\u0645\\u062f\\u062e\\u0644 \\u0627\\u0644\\u062b\\u0627\\u0646\\u064a\",\"user_id\":4,\"mobile\":\"01250287445\",\"area_number\":\"15\",\"street_name\":\"\\u0634\\u0627\\u0631\\u0639 \\u0627\\u0633\\u0627\\u0645\\u0647\",\"building_number\":\"12\",\"flat_number\":\"25\",\"notes\":null,\"lat\":\"22323\",\"lng\":\"321321\",\"created_at\":\"2020-10-20 11:30:06\",\"updated_at\":\"2020-10-20 11:30:06\",\"deleted_at\":\"0000-00-00 00:00:00\"}}', NULL, NULL, '', NULL, '2020-10-20 09:30:06', '2020-10-20 09:30:06'),
(12, 'default', 'created', 5, 'App\\Models\\Address', 4, 'App\\Models\\User', '{\"attributes\":{\"id\":5,\"name\":\"12 \\u0627\\u0644\\u0645\\u062f\\u062e\\u0644 \\u0627\\u0644\\u062b\\u0627\\u0646\\u064a\",\"user_id\":4,\"mobile\":\"01250287445\",\"area_number\":\"15\",\"street_name\":\"\\u0634\\u0627\\u0631\\u0639 \\u0627\\u0633\\u0627\\u0645\\u0647\",\"building_number\":\"12\",\"flat_number\":\"25\",\"notes\":null,\"lat\":\"22323\",\"lng\":\"321321\",\"created_at\":\"2020-10-20 11:30:51\",\"updated_at\":\"2020-10-20 11:30:51\",\"deleted_at\":\"0000-00-00 00:00:00\"}}', NULL, NULL, '', NULL, '2020-10-20 09:30:51', '2020-10-20 09:30:51'),
(13, 'default', 'created', 1, 'App\\Models\\Order', 4, 'App\\Models\\User', '{\"attributes\":{\"id\":1,\"user_id\":0,\"from_address_id\":0,\"to_address_id\":5,\"date_time\":\"2020-10-10 23:25:00\",\"transport_type\":\"car\",\"payment_type\":\"cod\",\"total\":200,\"notes\":\"wwwww\",\"status\":\"new\",\"driver_id\":null,\"cancel_date_time\":null,\"cancel_reason\":null,\"distance\":12.5,\"driver_fee\":null,\"estimated_delivery_time\":20,\"user_plan_id\":null,\"driver_plan_id\":0,\"created_at\":\"2020-10-20 11:30:51\",\"updated_at\":\"2020-10-20 11:30:51\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-20 09:30:51', '2020-10-20 09:30:51'),
(14, 'default', 'created', 6, 'App\\Models\\Address', 4, 'App\\Models\\User', '{\"attributes\":{\"id\":6,\"name\":\"12 \\u0627\\u0644\\u0645\\u062f\\u062e\\u0644 \\u0627\\u0644\\u062b\\u0627\\u0646\\u064a\",\"user_id\":4,\"mobile\":\"01250287445\",\"area_number\":\"15\",\"street_name\":\"\\u0634\\u0627\\u0631\\u0639 \\u0627\\u0633\\u0627\\u0645\\u0647\",\"building_number\":\"12\",\"flat_number\":\"25\",\"notes\":null,\"lat\":\"22323\",\"lng\":\"321321\",\"created_at\":\"2020-10-20 11:31:13\",\"updated_at\":\"2020-10-20 11:31:13\",\"deleted_at\":\"0000-00-00 00:00:00\"}}', NULL, NULL, '', NULL, '2020-10-20 09:31:13', '2020-10-20 09:31:13'),
(15, 'default', 'created', 2, 'App\\Models\\Order', 4, 'App\\Models\\User', '{\"attributes\":{\"id\":2,\"user_id\":0,\"from_address_id\":0,\"to_address_id\":6,\"date_time\":\"2020-10-10 23:25:00\",\"transport_type\":\"car\",\"payment_type\":\"cod\",\"total\":200,\"notes\":\"wwwww\",\"status\":\"new\",\"driver_id\":null,\"cancel_date_time\":null,\"cancel_reason\":null,\"distance\":12.5,\"driver_fee\":null,\"estimated_delivery_time\":20,\"user_plan_id\":null,\"driver_plan_id\":0,\"created_at\":\"2020-10-20 11:31:13\",\"updated_at\":\"2020-10-20 11:31:13\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-20 09:31:13', '2020-10-20 09:31:13'),
(16, 'default', 'created', 1, 'App\\Models\\OrderHistory', 4, 'App\\Models\\User', '{\"attributes\":{\"id\":1,\"order_id\":2,\"status\":\"new\",\"notes\":null,\"created_at\":\"2020-10-20 11:31:13\",\"updated_at\":\"2020-10-20 11:31:13\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-20 09:31:13', '2020-10-20 09:31:13'),
(17, 'default', 'created', 7, 'App\\Models\\Address', 4, 'App\\Models\\User', '{\"attributes\":{\"id\":7,\"name\":\"12 \\u0627\\u0644\\u0645\\u062f\\u062e\\u0644 \\u0627\\u0644\\u062b\\u0627\\u0646\\u064a\",\"user_id\":4,\"mobile\":\"01250287445\",\"area_number\":\"15\",\"street_name\":\"\\u0634\\u0627\\u0631\\u0639 \\u0627\\u0633\\u0627\\u0645\\u0647\",\"building_number\":\"12\",\"flat_number\":\"25\",\"notes\":null,\"lat\":\"22323\",\"lng\":\"321321\",\"created_at\":\"2020-10-20 11:34:03\",\"updated_at\":\"2020-10-20 11:34:03\",\"deleted_at\":\"0000-00-00 00:00:00\"}}', NULL, NULL, '', NULL, '2020-10-20 09:34:03', '2020-10-20 09:34:03'),
(18, 'default', 'created', 3, 'App\\Models\\Order', 4, 'App\\Models\\User', '{\"attributes\":{\"id\":3,\"user_id\":4,\"from_address_id\":0,\"to_address_id\":7,\"date_time\":\"2020-10-10 23:25:00\",\"transport_type\":\"car\",\"payment_type\":\"cod\",\"total\":200,\"notes\":\"wwwww\",\"status\":\"new\",\"driver_id\":null,\"cancel_date_time\":null,\"cancel_reason\":null,\"distance\":12.5,\"driver_fee\":null,\"estimated_delivery_time\":20,\"user_plan_id\":null,\"driver_plan_id\":0,\"created_at\":\"2020-10-20 11:34:03\",\"updated_at\":\"2020-10-20 11:34:03\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-20 09:34:03', '2020-10-20 09:34:03'),
(19, 'default', 'created', 2, 'App\\Models\\OrderHistory', 4, 'App\\Models\\User', '{\"attributes\":{\"id\":2,\"order_id\":3,\"status\":\"new\",\"notes\":null,\"created_at\":\"2020-10-20 11:34:03\",\"updated_at\":\"2020-10-20 11:34:03\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-20 09:34:03', '2020-10-20 09:34:03'),
(20, 'default', 'created', 4, 'App\\Models\\Order', 4, 'App\\Models\\User', '{\"attributes\":{\"id\":4,\"user_id\":4,\"from_address_id\":0,\"to_address_id\":1,\"date_time\":\"2020-10-10 23:25:00\",\"transport_type\":\"car\",\"payment_type\":\"cod\",\"total\":200,\"notes\":\"wwwww\",\"status\":\"new\",\"driver_id\":null,\"cancel_date_time\":null,\"cancel_reason\":null,\"distance\":12.5,\"driver_fee\":null,\"estimated_delivery_time\":20,\"user_plan_id\":null,\"driver_plan_id\":0,\"created_at\":\"2020-10-20 11:36:53\",\"updated_at\":\"2020-10-20 11:36:53\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-20 09:36:53', '2020-10-20 09:36:53'),
(21, 'default', 'created', 3, 'App\\Models\\OrderHistory', 4, 'App\\Models\\User', '{\"attributes\":{\"id\":3,\"order_id\":4,\"status\":\"new\",\"notes\":null,\"created_at\":\"2020-10-20 11:36:53\",\"updated_at\":\"2020-10-20 11:36:53\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-20 09:36:53', '2020-10-20 09:36:53'),
(22, 'default', 'created', 5, 'App\\Models\\Order', 4, 'App\\Models\\User', '{\"attributes\":{\"id\":5,\"user_id\":4,\"from_address_id\":0,\"to_address_id\":1,\"date_time\":\"2020-10-10 23:25:00\",\"transport_type\":\"car\",\"payment_type\":\"cod\",\"total\":200,\"notes\":\"wwwww\",\"status\":\"new\",\"driver_id\":null,\"cancel_date_time\":null,\"cancel_reason\":null,\"distance\":12.5,\"driver_fee\":null,\"estimated_delivery_time\":20,\"user_plan_id\":null,\"driver_plan_id\":0,\"created_at\":\"2020-10-20 11:39:30\",\"updated_at\":\"2020-10-20 11:39:30\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-20 09:39:30', '2020-10-20 09:39:30'),
(23, 'default', 'created', 4, 'App\\Models\\OrderHistory', 4, 'App\\Models\\User', '{\"attributes\":{\"id\":4,\"order_id\":5,\"status\":\"new\",\"notes\":null,\"created_at\":\"2020-10-20 11:39:30\",\"updated_at\":\"2020-10-20 11:39:30\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-20 09:39:30', '2020-10-20 09:39:30'),
(24, 'default', 'created', 8, 'App\\Models\\Address', 4, 'App\\Models\\User', '{\"attributes\":{\"id\":8,\"name\":\"\\u0627\\u0644\\u062d\\u062f\\u0627\\u064a\\u0642\",\"user_id\":4,\"mobile\":\"01259784654\",\"area_number\":\"12\",\"street_name\":\"\\u0634\\u0627\\u0631\\u0639 10\",\"building_number\":\"45\",\"flat_number\":\"12\",\"notes\":null,\"lat\":\"56465\",\"lng\":\"789798\",\"created_at\":\"2020-10-20 11:40:41\",\"updated_at\":\"2020-10-20 11:40:41\",\"deleted_at\":\"0000-00-00 00:00:00\"}}', NULL, NULL, '', NULL, '2020-10-20 09:40:41', '2020-10-20 09:40:41'),
(25, 'default', 'created', 6, 'App\\Models\\Order', 4, 'App\\Models\\User', '{\"attributes\":{\"id\":6,\"user_id\":4,\"from_address_id\":8,\"to_address_id\":1,\"date_time\":\"2020-10-10 23:25:00\",\"transport_type\":\"car\",\"payment_type\":\"cod\",\"total\":200,\"notes\":\"wwwww\",\"status\":\"new\",\"driver_id\":null,\"cancel_date_time\":null,\"cancel_reason\":null,\"distance\":12.5,\"driver_fee\":null,\"estimated_delivery_time\":20,\"user_plan_id\":null,\"driver_plan_id\":0,\"created_at\":\"2020-10-20 11:40:41\",\"updated_at\":\"2020-10-20 11:40:41\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-20 09:40:41', '2020-10-20 09:40:41'),
(26, 'default', 'created', 5, 'App\\Models\\OrderHistory', 4, 'App\\Models\\User', '{\"attributes\":{\"id\":5,\"order_id\":6,\"status\":\"new\",\"notes\":null,\"created_at\":\"2020-10-20 11:40:41\",\"updated_at\":\"2020-10-20 11:40:41\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-20 09:40:41', '2020-10-20 09:40:41'),
(27, 'default', 'created', 7, 'App\\Models\\Order', 4, 'App\\Models\\User', '{\"attributes\":{\"id\":7,\"user_id\":4,\"from_address_id\":2,\"to_address_id\":1,\"date_time\":\"2020-10-10 23:25:00\",\"transport_type\":\"car\",\"payment_type\":\"cod\",\"total\":200,\"notes\":\"wwwww\",\"status\":\"new\",\"driver_id\":null,\"cancel_date_time\":null,\"cancel_reason\":null,\"distance\":12.5,\"driver_fee\":null,\"estimated_delivery_time\":20,\"user_plan_id\":null,\"driver_plan_id\":0,\"created_at\":\"2020-10-20 11:46:37\",\"updated_at\":\"2020-10-20 11:46:37\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-20 09:46:37', '2020-10-20 09:46:37'),
(28, 'default', 'created', 6, 'App\\Models\\OrderHistory', 4, 'App\\Models\\User', '{\"attributes\":{\"id\":6,\"order_id\":7,\"status\":\"new\",\"notes\":null,\"created_at\":\"2020-10-20 11:46:37\",\"updated_at\":\"2020-10-20 11:46:37\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-20 09:46:37', '2020-10-20 09:46:37'),
(29, 'default', 'created', 8, 'App\\Models\\Order', 4, 'App\\Models\\User', '{\"attributes\":{\"id\":8,\"user_id\":4,\"from_address_id\":2,\"to_address_id\":1,\"date_time\":\"2020-10-10 23:25:00\",\"transport_type\":\"car\",\"payment_type\":\"cod\",\"total\":200,\"notes\":\"wwwww\",\"status\":\"new\",\"driver_id\":null,\"cancel_date_time\":null,\"cancel_reason\":null,\"distance\":12.5,\"driver_fee\":null,\"estimated_delivery_time\":20,\"user_plan_id\":null,\"driver_plan_id\":0,\"created_at\":\"2020-10-20 13:40:28\",\"updated_at\":\"2020-10-20 13:40:28\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-20 11:40:28', '2020-10-20 11:40:28'),
(30, 'default', 'created', 7, 'App\\Models\\OrderHistory', 4, 'App\\Models\\User', '{\"attributes\":{\"id\":7,\"order_id\":8,\"status\":\"new\",\"notes\":null,\"created_at\":\"2020-10-20 13:40:28\",\"updated_at\":\"2020-10-20 13:40:28\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-20 11:40:28', '2020-10-20 11:40:28'),
(31, 'default', 'created', 9, 'App\\Models\\Order', 4, 'App\\Models\\User', '{\"attributes\":{\"id\":9,\"user_id\":4,\"from_address_id\":2,\"to_address_id\":1,\"date_time\":\"2020-10-10 23:25:00\",\"transport_type\":\"car\",\"payment_type\":\"cod\",\"total\":200,\"notes\":\"wwwww\",\"status\":\"new\",\"driver_id\":null,\"cancel_date_time\":null,\"cancel_reason\":null,\"distance\":12.5,\"app_fee\":20,\"driver_fee\":null,\"extra_app_fee\":null,\"extra_app_fee_notes\":null,\"extra_delivery_fee\":null,\"extra_delivery_fee_notes\":null,\"estimated_delivery_time\":20,\"user_plan_id\":1,\"driver_plan_id\":0,\"created_at\":\"2020-10-20 17:55:33\",\"updated_at\":\"2020-10-20 17:55:33\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-20 15:55:33', '2020-10-20 15:55:33'),
(32, 'default', 'created', 8, 'App\\Models\\OrderHistory', 4, 'App\\Models\\User', '{\"attributes\":{\"id\":8,\"order_id\":9,\"status\":\"new\",\"notes\":null,\"created_at\":\"2020-10-20 17:55:33\",\"updated_at\":\"2020-10-20 17:55:33\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-20 15:55:33', '2020-10-20 15:55:33'),
(33, 'default', 'created', 10, 'App\\Models\\Order', 4, 'App\\Models\\User', '{\"attributes\":{\"id\":10,\"user_id\":4,\"from_address_id\":2,\"to_address_id\":1,\"date_time\":\"2020-10-10 23:25:00\",\"transport_type\":\"car\",\"payment_type\":\"cod\",\"total\":200,\"notes\":\"wwwww\",\"status\":\"new\",\"driver_id\":null,\"cancel_date_time\":null,\"cancel_reason\":null,\"distance\":12.5,\"app_fee\":20,\"driver_fee\":null,\"extra_app_fee\":null,\"extra_app_fee_notes\":null,\"extra_delivery_fee\":null,\"extra_delivery_fee_notes\":null,\"estimated_delivery_time\":20,\"user_plan_id\":1,\"driver_plan_id\":0,\"created_at\":\"2020-10-20 17:58:25\",\"updated_at\":\"2020-10-20 17:58:25\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-20 15:58:25', '2020-10-20 15:58:25'),
(34, 'default', 'created', 9, 'App\\Models\\OrderHistory', 4, 'App\\Models\\User', '{\"attributes\":{\"id\":9,\"order_id\":10,\"status\":\"new\",\"notes\":null,\"created_at\":\"2020-10-20 17:58:25\",\"updated_at\":\"2020-10-20 17:58:25\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-20 15:58:25', '2020-10-20 15:58:25'),
(35, 'default', 'created', 11, 'App\\Models\\Order', 4, 'App\\Models\\User', '{\"attributes\":{\"id\":11,\"ref_id\":null,\"user_id\":4,\"from_address_id\":2,\"to_address_id\":1,\"date_time\":\"2020-10-10 23:25:00\",\"transport_type\":\"car\",\"payment_type\":\"cod\",\"total\":200,\"notes\":\"wwwww\",\"status\":\"new\",\"driver_id\":null,\"cancel_date_time\":null,\"cancel_reason\":null,\"distance\":12.5,\"app_fee\":20,\"driver_fee\":null,\"extra_app_fee\":null,\"extra_app_fee_notes\":null,\"extra_delivery_fee\":null,\"extra_delivery_fee_notes\":null,\"estimated_delivery_time\":20,\"user_plan_id\":1,\"driver_plan_id\":0,\"created_at\":\"2020-10-28 11:03:44\",\"updated_at\":\"2020-10-28 11:03:44\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-28 09:03:44', '2020-10-28 09:03:44'),
(36, 'default', 'created', 10, 'App\\Models\\OrderHistory', 4, 'App\\Models\\User', '{\"attributes\":{\"id\":10,\"order_id\":11,\"by_type\":\"App\\/Models\\/User\",\"by_id\":4,\"status\":\"new\",\"notes\":null,\"created_at\":\"2020-10-28 11:03:44\",\"updated_at\":\"2020-10-28 11:03:44\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-28 09:03:44', '2020-10-28 09:03:44'),
(37, 'default', 'created', 1, 'App\\Models\\Driver', NULL, NULL, '{\"attributes\":{\"id\":1,\"name\":\"amr2\",\"mobile\":\"01014778866\",\"password\":\"$2y$10$JKH8ItA3cGeWtSOBgjx4oOQlk\\/DlohnYdXdQf6UAYV4hkjwP2lhTu\",\"invitation_code\":\"\",\"forgot_password_code\":\"\",\"image\":\"2020\\/10\\/28\\/qcfcqRO7Lmey9ru1FNbyeBnZZKOCOYLUNPQV4k90.png\",\"visa_image\":\"2020\\/10\\/28\\/KeYRiDsImA6SigybMNJ3bLOH6OiCdJcMcV5MDgE2.jpeg\",\"registration_image_face\":\"2020\\/10\\/28\\/TvILM3hnmzH2NbCj9UwxZPgWey8pj6sMAdGTKDB5.jpeg\",\"registration_image_back\":\"2020\\/10\\/28\\/8qQ0ppNpE8QP0iG6K95Vsu72Ciquyasw4PeazSbL.jpeg\",\"license_face\":\"2020\\/10\\/28\\/xqSBQhR1etgT6WMzegR3CBw3q2NQZvhFVtu7Dwmj.jpeg\",\"license_back\":\"2020\\/10\\/28\\/VWEiIB1HuMNWsOZ9tlCfxcvuNKW8Pn3X7ELRUIjD.jpeg\",\"car_insurance_face\":\"2020\\/10\\/28\\/7tiJgEh0xJvDPzkrZ4FpqVZsjzvwBBR6bg8B7b3X.jpeg\",\"car_insurance_back\":\"2020\\/10\\/28\\/lPz6sZ08P1TSQx7cuksMYVu6xwKzUTGCx9mkxri5.jpeg\",\"passport_image\":\"2020\\/10\\/28\\/gntzPJtcMtcO1y2rUXPaVZoEkKsBekFxLawlUdLW.pdf\",\"status\":\"new\",\"credit\":0,\"available\":\"yes\",\"created_at\":\"2020-10-28 22:12:08\",\"updated_at\":\"2020-10-28 22:12:08\",\"deleted_at\":null,\"code\":0,\"plan_id\":null,\"verified_at\":null}}', NULL, NULL, '', NULL, '2020-10-28 20:12:08', '2020-10-28 20:12:08'),
(38, 'default', 'created', 2, 'App\\Models\\Driver', NULL, NULL, '{\"attributes\":{\"id\":2,\"name\":\"amr2\",\"mobile\":\"01014778864\",\"password\":\"$2y$10$UnFxKYoxCSJR5F6IdC20guzH8q1ZV2Is2EpRB3t5pnm6bAxlgeDyC\",\"invitation_code\":\"AVY3dd\",\"forgot_password_code\":\"\",\"image\":\"2020\\/10\\/28\\/xSLHdVmGiR99GY0ET32hPWfNSLIkjt0X8H1Uf9DK.png\",\"visa_image\":\"2020\\/10\\/28\\/HWaRPYaswxW4unMXI0WPPlHA9PkJeoGfliz815hA.jpeg\",\"registration_image_face\":\"2020\\/10\\/28\\/yLCskxmtDApkgNObUwl1hakjTvkmxJUNV55uKcVm.jpeg\",\"registration_image_back\":\"2020\\/10\\/28\\/UGfa5tAPvL6YyqMHXGmg9eLgIIAUVgk9nbl91ZUh.jpeg\",\"license_face\":\"2020\\/10\\/28\\/ZTOZ9sEmVLjKFeu7Qcvh907VOcO9GkXLQhjcxknJ.jpeg\",\"license_back\":\"2020\\/10\\/28\\/humwaCtpoef01DKoXbH798fnNwxDdgB1WG0Cy4KW.jpeg\",\"car_insurance_face\":\"2020\\/10\\/28\\/9oFi3g5kgLy8wZnrw3OF8ErRtX1m71hCec4Y7gK5.jpeg\",\"car_insurance_back\":\"2020\\/10\\/28\\/333W5H7kgWggOoflSXWhjpcfRP4g4aJHwzEILq26.jpeg\",\"passport_image\":\"2020\\/10\\/28\\/8frscNOuEnphJRijqkr6x9qFhh7N7GrfFtIefJZF.pdf\",\"status\":\"new\",\"credit\":0,\"available\":\"yes\",\"created_at\":\"2020-10-28 22:23:20\",\"updated_at\":\"2020-10-28 22:23:20\",\"deleted_at\":null,\"code\":0,\"plan_id\":null,\"verified_at\":null,\"invitation_by_code\":\"33333\"}}', NULL, NULL, '', NULL, '2020-10-28 20:23:20', '2020-10-28 20:23:20'),
(39, 'default', 'created', 3, 'App\\Models\\Driver', NULL, NULL, '{\"attributes\":{\"id\":3,\"name\":\"driver\",\"mobile\":\"01014778868\",\"password\":\"$2y$10$SXkOmgcilOVEgkzcxtTsQuNnCeO8AEH6TczyXZPaQcp50v8qXbZSm\",\"invitation_code\":\"fDNZQV\",\"forgot_password_code\":\"\",\"image\":\"2020\\/10\\/29\\/VLnpuWlRgDUzblNnrw1XAw8ieUJRd1jetWXkvIIL.png\",\"visa_image\":\"2020\\/10\\/29\\/JXSKOuETQWd9JMkSoYDc1UajBpGfocoMt3vbKS8V.jpeg\",\"registration_image_face\":\"2020\\/10\\/29\\/awoquQejcsKmL9ExeFtQzx8Rwgb5oYjnYsE0X2bM.jpeg\",\"registration_image_back\":\"2020\\/10\\/29\\/tapQnjoueZm1VEg78MPzczByENy9zHrJu29Dqp25.jpeg\",\"license_face\":\"2020\\/10\\/29\\/4KUApPxTkD7FQTcorD6ig9lY8KGjgC0qxr4eLzpo.jpeg\",\"license_back\":\"2020\\/10\\/29\\/Jyu1jxEc0gkTFrMaMR9UPdiOxOfMPUkzhoC7McA6.jpeg\",\"car_insurance_face\":\"2020\\/10\\/29\\/LbOQCtVWBrwwhhFxEy2rcvtGFCuYP1xYKSnAOXD6.jpeg\",\"car_insurance_back\":\"2020\\/10\\/29\\/zzWt2ydGG7iBInzvb1WkFpKcAv0HLtUWE8UgctG6.jpeg\",\"passport_image\":\"2020\\/10\\/29\\/i8vVN265PfVLrIyfhRSAMn0jzsnRdGH4NUJKrHZ9.pdf\",\"status\":\"new\",\"credit\":0,\"available\":\"yes\",\"created_at\":\"2020-10-29 00:27:04\",\"updated_at\":\"2020-10-29 00:27:04\",\"deleted_at\":null,\"code\":0,\"plan_id\":null,\"verified_at\":null,\"invitation_by_code\":\"33333\"}}', NULL, NULL, '', NULL, '2020-10-28 22:27:04', '2020-10-28 22:27:04'),
(40, 'default', 'updated', 1, 'App\\Models\\Driver', NULL, NULL, '{\"attributes\":{\"id\":1,\"name\":\"amr2\",\"mobile\":\"01014778866\",\"password\":\"$2y$10$JKH8ItA3cGeWtSOBgjx4oOQlk\\/DlohnYdXdQf6UAYV4hkjwP2lhTu\",\"invitation_code\":\"33333\",\"forgot_password_code\":\"4389\",\"image\":\"2020\\/10\\/28\\/qcfcqRO7Lmey9ru1FNbyeBnZZKOCOYLUNPQV4k90.png\",\"visa_image\":\"2020\\/10\\/28\\/KeYRiDsImA6SigybMNJ3bLOH6OiCdJcMcV5MDgE2.jpeg\",\"registration_image_face\":\"2020\\/10\\/28\\/TvILM3hnmzH2NbCj9UwxZPgWey8pj6sMAdGTKDB5.jpeg\",\"registration_image_back\":\"2020\\/10\\/28\\/8qQ0ppNpE8QP0iG6K95Vsu72Ciquyasw4PeazSbL.jpeg\",\"license_face\":\"2020\\/10\\/28\\/xqSBQhR1etgT6WMzegR3CBw3q2NQZvhFVtu7Dwmj.jpeg\",\"license_back\":\"2020\\/10\\/28\\/VWEiIB1HuMNWsOZ9tlCfxcvuNKW8Pn3X7ELRUIjD.jpeg\",\"car_insurance_face\":\"2020\\/10\\/28\\/7tiJgEh0xJvDPzkrZ4FpqVZsjzvwBBR6bg8B7b3X.jpeg\",\"car_insurance_back\":\"2020\\/10\\/28\\/lPz6sZ08P1TSQx7cuksMYVu6xwKzUTGCx9mkxri5.jpeg\",\"passport_image\":\"2020\\/10\\/28\\/gntzPJtcMtcO1y2rUXPaVZoEkKsBekFxLawlUdLW.pdf\",\"status\":\"active\",\"credit\":0,\"available\":\"yes\",\"created_at\":\"2020-10-28 22:12:08\",\"updated_at\":\"2020-10-29 14:21:28\",\"deleted_at\":null,\"code\":0,\"plan_id\":null,\"verified_at\":\"2020-10-21 00:00:00\",\"invitation_by_code\":null},\"old\":{\"id\":1,\"name\":\"amr2\",\"mobile\":\"01014778866\",\"password\":\"$2y$10$JKH8ItA3cGeWtSOBgjx4oOQlk\\/DlohnYdXdQf6UAYV4hkjwP2lhTu\",\"invitation_code\":\"33333\",\"forgot_password_code\":\"\",\"image\":\"2020\\/10\\/28\\/qcfcqRO7Lmey9ru1FNbyeBnZZKOCOYLUNPQV4k90.png\",\"visa_image\":\"2020\\/10\\/28\\/KeYRiDsImA6SigybMNJ3bLOH6OiCdJcMcV5MDgE2.jpeg\",\"registration_image_face\":\"2020\\/10\\/28\\/TvILM3hnmzH2NbCj9UwxZPgWey8pj6sMAdGTKDB5.jpeg\",\"registration_image_back\":\"2020\\/10\\/28\\/8qQ0ppNpE8QP0iG6K95Vsu72Ciquyasw4PeazSbL.jpeg\",\"license_face\":\"2020\\/10\\/28\\/xqSBQhR1etgT6WMzegR3CBw3q2NQZvhFVtu7Dwmj.jpeg\",\"license_back\":\"2020\\/10\\/28\\/VWEiIB1HuMNWsOZ9tlCfxcvuNKW8Pn3X7ELRUIjD.jpeg\",\"car_insurance_face\":\"2020\\/10\\/28\\/7tiJgEh0xJvDPzkrZ4FpqVZsjzvwBBR6bg8B7b3X.jpeg\",\"car_insurance_back\":\"2020\\/10\\/28\\/lPz6sZ08P1TSQx7cuksMYVu6xwKzUTGCx9mkxri5.jpeg\",\"passport_image\":\"2020\\/10\\/28\\/gntzPJtcMtcO1y2rUXPaVZoEkKsBekFxLawlUdLW.pdf\",\"status\":\"active\",\"credit\":0,\"available\":\"yes\",\"created_at\":\"2020-10-28 22:12:08\",\"updated_at\":\"2020-10-28 22:12:08\",\"deleted_at\":null,\"code\":0,\"plan_id\":null,\"verified_at\":\"2020-10-21 00:00:00\",\"invitation_by_code\":null}}', NULL, NULL, '', NULL, '2020-10-29 12:21:28', '2020-10-29 12:21:28'),
(41, 'default', 'updated', 1, 'App\\Models\\Driver', NULL, NULL, '{\"attributes\":{\"id\":1,\"name\":\"amr2\",\"mobile\":\"01014778866\",\"password\":\"$2y$10$1Od83OoJiRAARO59n8aGheIUQALpxS\\/0VA7Yi1dIFdPXdxUgyAsq.\",\"invitation_code\":\"33333\",\"forgot_password_code\":\"\",\"image\":\"2020\\/10\\/28\\/qcfcqRO7Lmey9ru1FNbyeBnZZKOCOYLUNPQV4k90.png\",\"visa_image\":\"2020\\/10\\/28\\/KeYRiDsImA6SigybMNJ3bLOH6OiCdJcMcV5MDgE2.jpeg\",\"registration_image_face\":\"2020\\/10\\/28\\/TvILM3hnmzH2NbCj9UwxZPgWey8pj6sMAdGTKDB5.jpeg\",\"registration_image_back\":\"2020\\/10\\/28\\/8qQ0ppNpE8QP0iG6K95Vsu72Ciquyasw4PeazSbL.jpeg\",\"license_face\":\"2020\\/10\\/28\\/xqSBQhR1etgT6WMzegR3CBw3q2NQZvhFVtu7Dwmj.jpeg\",\"license_back\":\"2020\\/10\\/28\\/VWEiIB1HuMNWsOZ9tlCfxcvuNKW8Pn3X7ELRUIjD.jpeg\",\"car_insurance_face\":\"2020\\/10\\/28\\/7tiJgEh0xJvDPzkrZ4FpqVZsjzvwBBR6bg8B7b3X.jpeg\",\"car_insurance_back\":\"2020\\/10\\/28\\/lPz6sZ08P1TSQx7cuksMYVu6xwKzUTGCx9mkxri5.jpeg\",\"passport_image\":\"2020\\/10\\/28\\/gntzPJtcMtcO1y2rUXPaVZoEkKsBekFxLawlUdLW.pdf\",\"status\":\"active\",\"credit\":0,\"available\":\"yes\",\"created_at\":\"2020-10-28 22:12:08\",\"updated_at\":\"2020-10-29 14:21:37\",\"deleted_at\":null,\"code\":0,\"plan_id\":null,\"verified_at\":\"2020-10-21 00:00:00\",\"invitation_by_code\":null},\"old\":{\"id\":1,\"name\":\"amr2\",\"mobile\":\"01014778866\",\"password\":\"$2y$10$JKH8ItA3cGeWtSOBgjx4oOQlk\\/DlohnYdXdQf6UAYV4hkjwP2lhTu\",\"invitation_code\":\"33333\",\"forgot_password_code\":\"4389\",\"image\":\"2020\\/10\\/28\\/qcfcqRO7Lmey9ru1FNbyeBnZZKOCOYLUNPQV4k90.png\",\"visa_image\":\"2020\\/10\\/28\\/KeYRiDsImA6SigybMNJ3bLOH6OiCdJcMcV5MDgE2.jpeg\",\"registration_image_face\":\"2020\\/10\\/28\\/TvILM3hnmzH2NbCj9UwxZPgWey8pj6sMAdGTKDB5.jpeg\",\"registration_image_back\":\"2020\\/10\\/28\\/8qQ0ppNpE8QP0iG6K95Vsu72Ciquyasw4PeazSbL.jpeg\",\"license_face\":\"2020\\/10\\/28\\/xqSBQhR1etgT6WMzegR3CBw3q2NQZvhFVtu7Dwmj.jpeg\",\"license_back\":\"2020\\/10\\/28\\/VWEiIB1HuMNWsOZ9tlCfxcvuNKW8Pn3X7ELRUIjD.jpeg\",\"car_insurance_face\":\"2020\\/10\\/28\\/7tiJgEh0xJvDPzkrZ4FpqVZsjzvwBBR6bg8B7b3X.jpeg\",\"car_insurance_back\":\"2020\\/10\\/28\\/lPz6sZ08P1TSQx7cuksMYVu6xwKzUTGCx9mkxri5.jpeg\",\"passport_image\":\"2020\\/10\\/28\\/gntzPJtcMtcO1y2rUXPaVZoEkKsBekFxLawlUdLW.pdf\",\"status\":\"active\",\"credit\":0,\"available\":\"yes\",\"created_at\":\"2020-10-28 22:12:08\",\"updated_at\":\"2020-10-29 14:21:28\",\"deleted_at\":null,\"code\":0,\"plan_id\":null,\"verified_at\":\"2020-10-21 00:00:00\",\"invitation_by_code\":null}}', NULL, NULL, '', NULL, '2020-10-29 12:21:37', '2020-10-29 12:21:37'),
(42, 'default', 'updated', 1, 'App\\Models\\Driver', NULL, NULL, '{\"attributes\":{\"id\":1,\"name\":\"amr driver 1\",\"mobile\":\"01014778866\",\"password\":\"$2y$10$1Od83OoJiRAARO59n8aGheIUQALpxS\\/0VA7Yi1dIFdPXdxUgyAsq.\",\"invitation_code\":\"33333\",\"forgot_password_code\":\"7040\",\"image\":\"2020\\/10\\/28\\/qcfcqRO7Lmey9ru1FNbyeBnZZKOCOYLUNPQV4k90.png\",\"visa_image\":\"2020\\/10\\/28\\/KeYRiDsImA6SigybMNJ3bLOH6OiCdJcMcV5MDgE2.jpeg\",\"registration_image_face\":\"2020\\/10\\/28\\/TvILM3hnmzH2NbCj9UwxZPgWey8pj6sMAdGTKDB5.jpeg\",\"registration_image_back\":\"2020\\/10\\/28\\/8qQ0ppNpE8QP0iG6K95Vsu72Ciquyasw4PeazSbL.jpeg\",\"license_face\":\"2020\\/10\\/28\\/xqSBQhR1etgT6WMzegR3CBw3q2NQZvhFVtu7Dwmj.jpeg\",\"license_back\":\"2020\\/10\\/28\\/VWEiIB1HuMNWsOZ9tlCfxcvuNKW8Pn3X7ELRUIjD.jpeg\",\"car_insurance_face\":\"2020\\/10\\/28\\/7tiJgEh0xJvDPzkrZ4FpqVZsjzvwBBR6bg8B7b3X.jpeg\",\"car_insurance_back\":\"2020\\/10\\/28\\/lPz6sZ08P1TSQx7cuksMYVu6xwKzUTGCx9mkxri5.jpeg\",\"passport_image\":\"2020\\/10\\/28\\/gntzPJtcMtcO1y2rUXPaVZoEkKsBekFxLawlUdLW.pdf\",\"status\":\"active\",\"credit\":0,\"available\":\"yes\",\"created_at\":\"2020-10-28 22:12:08\",\"updated_at\":\"2020-10-29 14:22:42\",\"deleted_at\":null,\"code\":0,\"plan_id\":null,\"verified_at\":\"2020-10-21 00:00:00\",\"invitation_by_code\":null},\"old\":{\"id\":1,\"name\":\"amr driver 1\",\"mobile\":\"01014778866\",\"password\":\"$2y$10$1Od83OoJiRAARO59n8aGheIUQALpxS\\/0VA7Yi1dIFdPXdxUgyAsq.\",\"invitation_code\":\"33333\",\"forgot_password_code\":\"\",\"image\":\"2020\\/10\\/28\\/qcfcqRO7Lmey9ru1FNbyeBnZZKOCOYLUNPQV4k90.png\",\"visa_image\":\"2020\\/10\\/28\\/KeYRiDsImA6SigybMNJ3bLOH6OiCdJcMcV5MDgE2.jpeg\",\"registration_image_face\":\"2020\\/10\\/28\\/TvILM3hnmzH2NbCj9UwxZPgWey8pj6sMAdGTKDB5.jpeg\",\"registration_image_back\":\"2020\\/10\\/28\\/8qQ0ppNpE8QP0iG6K95Vsu72Ciquyasw4PeazSbL.jpeg\",\"license_face\":\"2020\\/10\\/28\\/xqSBQhR1etgT6WMzegR3CBw3q2NQZvhFVtu7Dwmj.jpeg\",\"license_back\":\"2020\\/10\\/28\\/VWEiIB1HuMNWsOZ9tlCfxcvuNKW8Pn3X7ELRUIjD.jpeg\",\"car_insurance_face\":\"2020\\/10\\/28\\/7tiJgEh0xJvDPzkrZ4FpqVZsjzvwBBR6bg8B7b3X.jpeg\",\"car_insurance_back\":\"2020\\/10\\/28\\/lPz6sZ08P1TSQx7cuksMYVu6xwKzUTGCx9mkxri5.jpeg\",\"passport_image\":\"2020\\/10\\/28\\/gntzPJtcMtcO1y2rUXPaVZoEkKsBekFxLawlUdLW.pdf\",\"status\":\"active\",\"credit\":0,\"available\":\"yes\",\"created_at\":\"2020-10-28 22:12:08\",\"updated_at\":\"2020-10-29 14:21:37\",\"deleted_at\":null,\"code\":0,\"plan_id\":null,\"verified_at\":\"2020-10-21 00:00:00\",\"invitation_by_code\":null}}', NULL, NULL, '', NULL, '2020-10-29 12:22:42', '2020-10-29 12:22:42'),
(43, 'default', 'created', 12, 'App\\Models\\Order', 4, 'App\\Models\\User', '{\"attributes\":{\"id\":12,\"ref_id\":null,\"user_id\":4,\"from_address_id\":2,\"to_address_id\":1,\"date_time\":\"2020-10-10 23:25:00\",\"transport_type\":\"car\",\"payment_type\":\"cod\",\"total\":200,\"notes\":\"wwwww\",\"status\":\"new\",\"driver_id\":null,\"assigned_date_time\":null,\"distance\":12.5,\"app_fee\":20,\"driver_fee\":null,\"extra_app_fee\":null,\"extra_app_fee_notes\":null,\"extra_delivery_fee\":null,\"extra_delivery_fee_notes\":null,\"estimated_delivery_time\":20,\"user_plan_id\":1,\"driver_plan_id\":0,\"created_at\":\"2020-10-30 14:46:28\",\"updated_at\":\"2020-10-30 14:46:28\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-30 12:46:28', '2020-10-30 12:46:28'),
(44, 'default', 'created', 11, 'App\\Models\\OrderHistory', 4, 'App\\Models\\User', '{\"attributes\":{\"id\":11,\"order_id\":12,\"by_type\":\"App\\/Models\\/User\",\"by_id\":4,\"driver_id\":null,\"status\":\"new\",\"notes\":null,\"created_at\":\"2020-10-30 14:46:28\",\"updated_at\":\"2020-10-30 14:46:28\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-30 12:46:28', '2020-10-30 12:46:28'),
(45, 'default', 'updated', 12, 'App\\Models\\Order', 1, 'App\\Models\\Driver', '{\"attributes\":{\"id\":12,\"ref_id\":null,\"user_id\":4,\"from_address_id\":2,\"to_address_id\":1,\"date_time\":\"2020-10-10 23:25:00\",\"transport_type\":\"car\",\"payment_type\":\"cod\",\"total\":200,\"notes\":\"wwwww\",\"status\":\"accepted\",\"driver_id\":1,\"assigned_date_time\":\"2020-10-30 00:00:00\",\"distance\":12.5,\"app_fee\":20,\"driver_fee\":250,\"extra_app_fee\":null,\"extra_app_fee_notes\":null,\"extra_delivery_fee\":null,\"extra_delivery_fee_notes\":null,\"estimated_delivery_time\":20,\"user_plan_id\":1,\"driver_plan_id\":1,\"created_at\":\"2020-10-30 14:46:28\",\"updated_at\":\"2020-10-30 14:51:01\",\"deleted_at\":null},\"old\":{\"id\":12,\"ref_id\":null,\"user_id\":4,\"from_address_id\":2,\"to_address_id\":1,\"date_time\":\"2020-10-10 23:25:00\",\"transport_type\":\"car\",\"payment_type\":\"cod\",\"total\":200,\"notes\":\"wwwww\",\"status\":\"assigned\",\"driver_id\":1,\"assigned_date_time\":\"2020-10-30 00:00:00\",\"distance\":12.5,\"app_fee\":20,\"driver_fee\":null,\"extra_app_fee\":null,\"extra_app_fee_notes\":null,\"extra_delivery_fee\":null,\"extra_delivery_fee_notes\":null,\"estimated_delivery_time\":20,\"user_plan_id\":1,\"driver_plan_id\":0,\"created_at\":\"2020-10-30 14:46:28\",\"updated_at\":\"2020-10-30 14:46:28\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-30 12:51:01', '2020-10-30 12:51:01'),
(46, 'default', 'created', 12, 'App\\Models\\OrderHistory', 1, 'App\\Models\\Driver', '{\"attributes\":{\"id\":12,\"order_id\":12,\"by_type\":\"App\\/Models\\/Driver\",\"by_id\":1,\"driver_id\":1,\"status\":\"accepted\",\"notes\":null,\"created_at\":\"2020-10-30 14:51:01\",\"updated_at\":\"2020-10-30 14:51:01\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-30 12:51:01', '2020-10-30 12:51:01'),
(47, 'default', 'updated', 12, 'App\\Models\\Order', 1, 'App\\Models\\Driver', '{\"attributes\":{\"id\":12,\"ref_id\":null,\"user_id\":4,\"from_address_id\":2,\"to_address_id\":1,\"date_time\":\"2020-10-10 23:25:00\",\"transport_type\":\"car\",\"payment_type\":\"cod\",\"total\":200,\"notes\":\"wwwww\",\"status\":\"collected\",\"driver_id\":1,\"assigned_date_time\":\"2020-10-30 00:00:00\",\"distance\":12.5,\"app_fee\":20,\"driver_fee\":250,\"extra_app_fee\":null,\"extra_app_fee_notes\":null,\"extra_delivery_fee\":null,\"extra_delivery_fee_notes\":null,\"estimated_delivery_time\":20,\"user_plan_id\":1,\"driver_plan_id\":1,\"created_at\":\"2020-10-30 14:46:28\",\"updated_at\":\"2020-10-30 14:51:17\",\"deleted_at\":null},\"old\":{\"id\":12,\"ref_id\":null,\"user_id\":4,\"from_address_id\":2,\"to_address_id\":1,\"date_time\":\"2020-10-10 23:25:00\",\"transport_type\":\"car\",\"payment_type\":\"cod\",\"total\":200,\"notes\":\"wwwww\",\"status\":\"accepted\",\"driver_id\":1,\"assigned_date_time\":\"2020-10-30 00:00:00\",\"distance\":12.5,\"app_fee\":20,\"driver_fee\":250,\"extra_app_fee\":null,\"extra_app_fee_notes\":null,\"extra_delivery_fee\":null,\"extra_delivery_fee_notes\":null,\"estimated_delivery_time\":20,\"user_plan_id\":1,\"driver_plan_id\":1,\"created_at\":\"2020-10-30 14:46:28\",\"updated_at\":\"2020-10-30 14:51:01\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-30 12:51:17', '2020-10-30 12:51:17'),
(48, 'default', 'created', 13, 'App\\Models\\OrderHistory', 1, 'App\\Models\\Driver', '{\"attributes\":{\"id\":13,\"order_id\":12,\"by_type\":\"App\\/Models\\/Driver\",\"by_id\":1,\"driver_id\":1,\"status\":\"collected\",\"notes\":null,\"created_at\":\"2020-10-30 14:51:17\",\"updated_at\":\"2020-10-30 14:51:17\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-30 12:51:17', '2020-10-30 12:51:17'),
(49, 'default', 'updated', 12, 'App\\Models\\Order', 1, 'App\\Models\\Driver', '{\"attributes\":{\"id\":12,\"ref_id\":null,\"user_id\":4,\"from_address_id\":2,\"to_address_id\":1,\"date_time\":\"2020-10-10 23:25:00\",\"transport_type\":\"car\",\"payment_type\":\"cod\",\"total\":200,\"notes\":\"wwwww\",\"status\":\"delivered\",\"driver_id\":1,\"assigned_date_time\":\"2020-10-30 00:00:00\",\"distance\":12.5,\"app_fee\":20,\"driver_fee\":250,\"extra_app_fee\":null,\"extra_app_fee_notes\":null,\"extra_delivery_fee\":null,\"extra_delivery_fee_notes\":null,\"estimated_delivery_time\":20,\"user_plan_id\":1,\"driver_plan_id\":1,\"created_at\":\"2020-10-30 14:46:28\",\"updated_at\":\"2020-10-30 14:52:22\",\"deleted_at\":null},\"old\":{\"id\":12,\"ref_id\":null,\"user_id\":4,\"from_address_id\":2,\"to_address_id\":1,\"date_time\":\"2020-10-10 23:25:00\",\"transport_type\":\"car\",\"payment_type\":\"cod\",\"total\":200,\"notes\":\"wwwww\",\"status\":\"collected\",\"driver_id\":1,\"assigned_date_time\":\"2020-10-30 00:00:00\",\"distance\":12.5,\"app_fee\":20,\"driver_fee\":250,\"extra_app_fee\":null,\"extra_app_fee_notes\":null,\"extra_delivery_fee\":null,\"extra_delivery_fee_notes\":null,\"estimated_delivery_time\":20,\"user_plan_id\":1,\"driver_plan_id\":1,\"created_at\":\"2020-10-30 14:46:28\",\"updated_at\":\"2020-10-30 14:51:17\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-30 12:52:22', '2020-10-30 12:52:22'),
(50, 'default', 'created', 14, 'App\\Models\\OrderHistory', 1, 'App\\Models\\Driver', '{\"attributes\":{\"id\":14,\"order_id\":12,\"by_type\":\"App\\/Models\\/Driver\",\"by_id\":1,\"driver_id\":1,\"status\":\"delivered\",\"notes\":null,\"created_at\":\"2020-10-30 14:52:22\",\"updated_at\":\"2020-10-30 14:52:22\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-30 12:52:22', '2020-10-30 12:52:22'),
(51, 'default', 'created', 1, 'App\\Models\\OrderComment', 1, 'App\\Models\\Driver', '{\"attributes\":{\"id\":1,\"order_id\":12,\"created_type\":\"App\\\\Models\\\\Driver\",\"created_id\":1,\"comment\":\"sdsdsd\",\"created_at\":\"2020-10-30 14:59:55\",\"updated_at\":\"2020-10-30 14:59:55\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-30 12:59:55', '2020-10-30 12:59:55'),
(52, 'default', 'created', 2, 'App\\Models\\OrderComment', 1, 'App\\Models\\Driver', '{\"attributes\":{\"id\":2,\"order_id\":12,\"created_type\":\"App\\\\Models\\\\Driver\",\"created_id\":1,\"comment\":\"sdsdsd\",\"created_at\":\"2020-10-30 15:00:10\",\"updated_at\":\"2020-10-30 15:00:10\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-30 13:00:10', '2020-10-30 13:00:10'),
(53, 'default', 'created', 3, 'App\\Models\\OrderComment', 1, 'App\\Models\\Driver', '{\"attributes\":{\"id\":3,\"order_id\":12,\"created_type\":\"App\\\\Models\\\\Driver\",\"created_id\":1,\"comment\":\"sdsdsd\",\"created_at\":\"2020-10-30 15:00:18\",\"updated_at\":\"2020-10-30 15:00:18\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-30 13:00:19', '2020-10-30 13:00:19'),
(54, 'default', 'created', 1, 'App\\Models\\Review', 1, 'App\\Models\\Driver', '{\"attributes\":{\"id\":1,\"from_type\":\"App\\\\Models\\\\Driver\",\"from_id\":1,\"to_type\":\"App\\\\Models\\\\User\",\"to_id\":4,\"comment\":\"sdsdsd\",\"rate\":3,\"order_id\":12,\"created_at\":\"2020-10-30 15:20:22\",\"updated_at\":\"2020-10-30 15:20:22\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-30 13:20:23', '2020-10-30 13:20:23'),
(55, 'default', 'created', 2, 'App\\Models\\Review', 1, 'App\\Models\\Driver', '{\"attributes\":{\"id\":2,\"from_type\":\"App\\\\Models\\\\Driver\",\"from_id\":1,\"to_type\":\"App\\\\Models\\\\User\",\"to_id\":4,\"comment\":\"sdsdsd\",\"rate\":3,\"order_id\":12,\"created_at\":\"2020-10-30 15:20:48\",\"updated_at\":\"2020-10-30 15:20:48\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-30 13:20:48', '2020-10-30 13:20:48'),
(56, 'default', 'updated', 12, 'App\\Models\\Order', 1, 'App\\Models\\Driver', '{\"attributes\":{\"id\":12,\"ref_id\":null,\"user_id\":4,\"from_address_id\":2,\"to_address_id\":1,\"date_time\":\"2020-10-30 23:25:00\",\"transport_type\":\"car\",\"payment_type\":\"cod\",\"total\":200,\"notes\":\"wwwww\",\"status\":\"returned\",\"driver_id\":1,\"assigned_date_time\":\"2020-10-30 00:00:00\",\"distance\":12.5,\"app_fee\":20,\"driver_fee\":250,\"extra_app_fee\":null,\"extra_app_fee_notes\":null,\"extra_delivery_fee\":null,\"extra_delivery_fee_notes\":null,\"estimated_delivery_time\":20,\"user_plan_id\":1,\"driver_plan_id\":1,\"created_at\":\"2020-10-30 14:46:28\",\"updated_at\":\"2020-10-30 15:38:51\",\"deleted_at\":null},\"old\":{\"id\":12,\"ref_id\":null,\"user_id\":4,\"from_address_id\":2,\"to_address_id\":1,\"date_time\":\"2020-10-30 23:25:00\",\"transport_type\":\"car\",\"payment_type\":\"cod\",\"total\":200,\"notes\":\"wwwww\",\"status\":\"collected\",\"driver_id\":1,\"assigned_date_time\":\"2020-10-30 00:00:00\",\"distance\":12.5,\"app_fee\":20,\"driver_fee\":250,\"extra_app_fee\":null,\"extra_app_fee_notes\":null,\"extra_delivery_fee\":null,\"extra_delivery_fee_notes\":null,\"estimated_delivery_time\":20,\"user_plan_id\":1,\"driver_plan_id\":1,\"created_at\":\"2020-10-30 14:46:28\",\"updated_at\":\"2020-10-30 14:52:22\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-30 13:38:52', '2020-10-30 13:38:52'),
(57, 'default', 'created', 15, 'App\\Models\\OrderHistory', 1, 'App\\Models\\Driver', '{\"attributes\":{\"id\":15,\"order_id\":12,\"by_type\":\"App\\/Models\\/Driver\",\"by_id\":1,\"driver_id\":1,\"status\":\"delivered\",\"notes\":null,\"created_at\":\"2020-10-30 15:38:52\",\"updated_at\":\"2020-10-30 15:38:52\",\"deleted_at\":null}}', NULL, NULL, '', NULL, '2020-10-30 13:38:52', '2020-10-30 13:38:52'),
(58, 'default', 'created', 6, 'App\\Models\\Review', 1, 'App\\Models\\Driver', '{\"attributes\":{\"id\":6,\"from_type\":\"App\\\\Models\\\\Driver\",\"from_id\":1,\"to_type\":\"App\\\\Models\\\\User\",\"to_id\":4,\"comment\":\"sdsdsd\",\"rate\":3,\"order_id\":12,\"created_at\":\"2020-10-30 20:53:43\",\"updated_at\":\"2020-10-30 20:53:43\",\"deleted_at\":null}}', NULL, NULL, NULL, NULL, '2020-10-30 18:53:43', '2020-10-30 18:53:43'),
(59, 'default', 'created', 8, 'App\\Models\\OrderComment', 1, 'App\\Models\\Driver', '{\"attributes\":{\"id\":8,\"order_id\":12,\"created_type\":\"App\\\\Models\\\\Driver\",\"created_id\":1,\"comment\":\"sdsdsd\",\"created_at\":\"2020-10-30 20:53:57\",\"updated_at\":\"2020-10-30 20:53:57\",\"deleted_at\":null}}', NULL, NULL, NULL, NULL, '2020-10-30 18:53:57', '2020-10-30 18:53:57'),
(60, 'default', 'updated', 1, 'App\\Models\\Staff', 1, 'App\\Models\\Staff', '{\"attributes\":{\"id\":1,\"firstname\":\"Amr\",\"lastname\":\"Bdreldin\",\"email\":\"amr.bdreldin@osouly.com\",\"mobile\":\"01014778866\",\"avatar\":null,\"gender\":\"male\",\"birthdate\":\"2019-05-01\",\"national_id\":\"65432123456789\",\"address\":\"Haram\",\"password\":\"$2y$10$ZuHTl6T15lxcHtwe09XLcOyp9Vb.vP6UIvnVipBLglyGHuoHhVaGy\",\"description\":\"aaa\",\"job_title\":\"Sales\",\"status\":\"active\",\"language\":\"en\",\"permission_group_id\":1,\"last_login\":null,\"created_at\":\"2019-05-10 12:59:04\",\"updated_at\":\"2020-10-31 12:09:44\",\"deleted_at\":null},\"old\":{\"id\":1,\"firstname\":\"Amr\",\"lastname\":\"Bdreldin\",\"email\":\"amr.bdreldin@osouly.com\",\"mobile\":\"01014778866\",\"avatar\":null,\"gender\":\"male\",\"birthdate\":\"2019-05-01\",\"national_id\":\"65432123456789\",\"address\":\"Haram\",\"password\":\"$2y$10$ZuHTl6T15lxcHtwe09XLcOyp9Vb.vP6UIvnVipBLglyGHuoHhVaGy\",\"description\":\"aaa\",\"job_title\":\"Sales\",\"status\":\"active\",\"language\":\"ar\",\"permission_group_id\":1,\"last_login\":null,\"created_at\":\"2019-05-10 12:59:04\",\"updated_at\":\"2020-09-05 17:34:42\",\"deleted_at\":null}}', NULL, NULL, NULL, NULL, '2020-10-31 10:09:44', '2020-10-31 10:09:44'),
(61, 'default', 'created', 1, 'App\\Models\\PaymentMethod', 1, 'App\\Models\\Staff', '{\"attributes\":{\"id\":1,\"name\":\"sdasd\",\"parameters\":\"{\\\"sad\\\":\\\"sadsa\\\",\\\"sadsa\\\":\\\"dsdds\\\"}\",\"created_at\":\"2020-10-31 21:37:42\",\"updated_at\":\"2020-10-31 21:37:42\",\"deleted_at\":null}}', NULL, NULL, NULL, NULL, '2020-10-31 19:37:42', '2020-10-31 19:37:42'),
(62, 'default', 'created', 14, 'App\\Models\\PermissionGroup', 1, 'App\\Models\\Staff', '{\"attributes\":{\"id\":14,\"name\":\"aaaaaaa\",\"is_supervisor\":\"yes\",\"whitelist_ip\":null,\"created_at\":\"2020-10-31 21:42:29\",\"updated_at\":\"2020-10-31 21:42:29\",\"deleted_at\":null}}', NULL, NULL, NULL, NULL, '2020-10-31 19:42:29', '2020-10-31 19:42:29');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_id`, `subject_type`, `causer_id`, `causer_type`, `properties`, `ip`, `user_agent`, `url`, `method`, `created_at`, `updated_at`) VALUES
(63, 'default', 'updated', 2, 'App\\Models\\Staff', 1, 'App\\Models\\Staff', '{\"attributes\":{\"id\":2,\"firstname\":\"Mohmed\",\"lastname\":\"Nukeesh\",\"email\":\"mohamed@osouly.com\",\"mobile\":\"11111111111\",\"avatar\":null,\"gender\":\"male\",\"birthdate\":\"2020-07-30\",\"national_id\":\"11111111111111\",\"address\":\"Yted\",\"password\":\"$2y$10$h2keYyGimMolzt74LpOXseqDg50OE7YI23k\\/Lw5Kcvm\\/RR0neke5a\",\"description\":\"\",\"job_title\":\"Manager\",\"status\":\"active\",\"language\":\"ar\",\"permission_group_id\":13,\"last_login\":null,\"created_at\":\"2020-08-21 19:21:25\",\"updated_at\":\"2020-11-01 08:12:56\",\"deleted_at\":null},\"old\":{\"id\":2,\"firstname\":\"Mohmed\",\"lastname\":\"Nukeesh\",\"email\":\"mohamed@osouly.com\",\"mobile\":\"11111111111\",\"avatar\":null,\"gender\":\"male\",\"birthdate\":\"2020-07-30\",\"national_id\":\"11111111111111\",\"address\":\"Yted\",\"password\":\"$2y$10$h2keYyGimMolzt74LpOXseqDg50OE7YI23k\\/Lw5Kcvm\\/RR0neke5a\",\"description\":\"\",\"job_title\":\"Manager\",\"status\":\"active\",\"language\":\"ar\",\"permission_group_id\":1,\"last_login\":null,\"created_at\":\"2020-08-21 19:21:25\",\"updated_at\":\"2020-09-04 21:09:12\",\"deleted_at\":null}}', NULL, NULL, NULL, NULL, '2020-11-01 06:12:56', '2020-11-01 06:12:56'),
(64, 'default', 'updated', 1, 'App\\Models\\Staff', 1, 'App\\Models\\Staff', '{\"attributes\":{\"id\":1,\"firstname\":\"Amr\",\"lastname\":\"Bdreldin\",\"email\":\"amr.bdreldin@osouly.com\",\"mobile\":\"01014778866\",\"avatar\":null,\"gender\":\"male\",\"birthdate\":\"2019-05-01\",\"national_id\":\"65432123456789\",\"address\":\"Haram\",\"password\":\"$2y$10$ZuHTl6T15lxcHtwe09XLcOyp9Vb.vP6UIvnVipBLglyGHuoHhVaGy\",\"description\":\"aaa\",\"job_title\":\"Sales\",\"status\":\"active\",\"language\":\"ar\",\"permission_group_id\":1,\"last_login\":null,\"created_at\":\"2019-05-10 12:59:04\",\"updated_at\":\"2020-11-03 16:02:48\",\"deleted_at\":null},\"old\":{\"id\":1,\"firstname\":\"Amr\",\"lastname\":\"Bdreldin\",\"email\":\"amr.bdreldin@osouly.com\",\"mobile\":\"01014778866\",\"avatar\":null,\"gender\":\"male\",\"birthdate\":\"2019-05-01\",\"national_id\":\"65432123456789\",\"address\":\"Haram\",\"password\":\"$2y$10$ZuHTl6T15lxcHtwe09XLcOyp9Vb.vP6UIvnVipBLglyGHuoHhVaGy\",\"description\":\"aaa\",\"job_title\":\"Sales\",\"status\":\"active\",\"language\":\"en\",\"permission_group_id\":1,\"last_login\":null,\"created_at\":\"2019-05-10 12:59:04\",\"updated_at\":\"2020-10-31 12:09:44\",\"deleted_at\":null}}', NULL, NULL, NULL, NULL, '2020-11-03 14:02:49', '2020-11-03 14:02:49'),
(65, 'default', 'updated', 1, 'App\\Models\\Staff', 1, 'App\\Models\\Staff', '{\"attributes\":{\"id\":1,\"firstname\":\"Amr\",\"lastname\":\"Bdreldin\",\"email\":\"amr.bdreldin@osouly.com\",\"mobile\":\"01014778866\",\"avatar\":null,\"gender\":\"male\",\"birthdate\":\"2019-05-01\",\"national_id\":\"65432123456789\",\"address\":\"Haram\",\"password\":\"$2y$10$ZuHTl6T15lxcHtwe09XLcOyp9Vb.vP6UIvnVipBLglyGHuoHhVaGy\",\"description\":\"aaa\",\"job_title\":\"Sales\",\"status\":\"active\",\"language\":\"en\",\"permission_group_id\":1,\"last_login\":null,\"created_at\":\"2019-05-10 12:59:04\",\"updated_at\":\"2020-11-03 16:27:58\",\"deleted_at\":null},\"old\":{\"id\":1,\"firstname\":\"Amr\",\"lastname\":\"Bdreldin\",\"email\":\"amr.bdreldin@osouly.com\",\"mobile\":\"01014778866\",\"avatar\":null,\"gender\":\"male\",\"birthdate\":\"2019-05-01\",\"national_id\":\"65432123456789\",\"address\":\"Haram\",\"password\":\"$2y$10$ZuHTl6T15lxcHtwe09XLcOyp9Vb.vP6UIvnVipBLglyGHuoHhVaGy\",\"description\":\"aaa\",\"job_title\":\"Sales\",\"status\":\"active\",\"language\":\"ar\",\"permission_group_id\":1,\"last_login\":null,\"created_at\":\"2019-05-10 12:59:04\",\"updated_at\":\"2020-11-03 16:02:48\",\"deleted_at\":null}}', NULL, NULL, NULL, NULL, '2020-11-03 14:27:58', '2020-11-03 14:27:58'),
(66, 'default', 'updated', 1, 'App\\Models\\Staff', 1, 'App\\Models\\Staff', '{\"attributes\":{\"id\":1,\"firstname\":\"Amr\",\"lastname\":\"Bdreldin\",\"email\":\"amr.bdreldin@osouly.com\",\"mobile\":\"01014778866\",\"avatar\":null,\"gender\":\"male\",\"birthdate\":\"2019-05-01\",\"national_id\":\"65432123456789\",\"address\":\"Haram\",\"password\":\"$2y$10$ZuHTl6T15lxcHtwe09XLcOyp9Vb.vP6UIvnVipBLglyGHuoHhVaGy\",\"description\":\"aaa\",\"job_title\":\"Sales\",\"status\":\"active\",\"language\":\"ar\",\"permission_group_id\":1,\"last_login\":null,\"created_at\":\"2019-05-10 12:59:04\",\"updated_at\":\"2020-11-04 10:35:43\",\"deleted_at\":null},\"old\":{\"id\":1,\"firstname\":\"Amr\",\"lastname\":\"Bdreldin\",\"email\":\"amr.bdreldin@osouly.com\",\"mobile\":\"01014778866\",\"avatar\":null,\"gender\":\"male\",\"birthdate\":\"2019-05-01\",\"national_id\":\"65432123456789\",\"address\":\"Haram\",\"password\":\"$2y$10$ZuHTl6T15lxcHtwe09XLcOyp9Vb.vP6UIvnVipBLglyGHuoHhVaGy\",\"description\":\"aaa\",\"job_title\":\"Sales\",\"status\":\"active\",\"language\":\"en\",\"permission_group_id\":1,\"last_login\":null,\"created_at\":\"2019-05-10 12:59:04\",\"updated_at\":\"2020-11-03 16:27:58\",\"deleted_at\":null}}', NULL, NULL, NULL, NULL, '2020-11-04 08:35:43', '2020-11-04 08:35:43'),
(67, 'default', 'updated', 1, 'App\\Models\\Staff', 1, 'App\\Models\\Staff', '{\"attributes\":{\"id\":1,\"firstname\":\"Amr\",\"lastname\":\"Bdreldin\",\"email\":\"amr.bdreldin@osouly.com\",\"mobile\":\"01014778866\",\"avatar\":null,\"gender\":\"male\",\"birthdate\":\"2019-05-01\",\"national_id\":\"65432123456789\",\"address\":\"Haram\",\"password\":\"$2y$10$ZuHTl6T15lxcHtwe09XLcOyp9Vb.vP6UIvnVipBLglyGHuoHhVaGy\",\"description\":\"aaa\",\"job_title\":\"Sales\",\"status\":\"active\",\"language\":\"en\",\"permission_group_id\":1,\"last_login\":null,\"created_at\":\"2019-05-10 12:59:04\",\"updated_at\":\"2020-11-04 10:41:58\",\"deleted_at\":null},\"old\":{\"id\":1,\"firstname\":\"Amr\",\"lastname\":\"Bdreldin\",\"email\":\"amr.bdreldin@osouly.com\",\"mobile\":\"01014778866\",\"avatar\":null,\"gender\":\"male\",\"birthdate\":\"2019-05-01\",\"national_id\":\"65432123456789\",\"address\":\"Haram\",\"password\":\"$2y$10$ZuHTl6T15lxcHtwe09XLcOyp9Vb.vP6UIvnVipBLglyGHuoHhVaGy\",\"description\":\"aaa\",\"job_title\":\"Sales\",\"status\":\"active\",\"language\":\"ar\",\"permission_group_id\":1,\"last_login\":null,\"created_at\":\"2019-05-10 12:59:04\",\"updated_at\":\"2020-11-04 10:35:43\",\"deleted_at\":null}}', NULL, NULL, NULL, NULL, '2020-11-04 08:41:58', '2020-11-04 08:41:58'),
(68, 'default', 'updated', 1, 'App\\Models\\Staff', 1, 'App\\Models\\Staff', '{\"attributes\":{\"id\":1,\"firstname\":\"Amr\",\"lastname\":\"Bdreldin\",\"email\":\"amr.bdreldin@osouly.com\",\"mobile\":\"01014778866\",\"avatar\":null,\"gender\":\"male\",\"birthdate\":\"2019-05-01\",\"national_id\":\"65432123456789\",\"address\":\"Haram\",\"password\":\"$2y$10$ZuHTl6T15lxcHtwe09XLcOyp9Vb.vP6UIvnVipBLglyGHuoHhVaGy\",\"description\":\"aaa\",\"job_title\":\"Sales\",\"status\":\"active\",\"language\":\"ar\",\"permission_group_id\":1,\"last_login\":null,\"created_at\":\"2019-05-10 12:59:04\",\"updated_at\":\"2020-11-04 11:50:34\",\"deleted_at\":null},\"old\":{\"id\":1,\"firstname\":\"Amr\",\"lastname\":\"Bdreldin\",\"email\":\"amr.bdreldin@osouly.com\",\"mobile\":\"01014778866\",\"avatar\":null,\"gender\":\"male\",\"birthdate\":\"2019-05-01\",\"national_id\":\"65432123456789\",\"address\":\"Haram\",\"password\":\"$2y$10$ZuHTl6T15lxcHtwe09XLcOyp9Vb.vP6UIvnVipBLglyGHuoHhVaGy\",\"description\":\"aaa\",\"job_title\":\"Sales\",\"status\":\"active\",\"language\":\"en\",\"permission_group_id\":1,\"last_login\":null,\"created_at\":\"2019-05-10 12:59:04\",\"updated_at\":\"2020-11-04 10:41:58\",\"deleted_at\":null}}', NULL, NULL, NULL, NULL, '2020-11-04 09:50:34', '2020-11-04 09:50:34'),
(69, 'default', 'updated', 1, 'App\\Models\\Staff', 1, 'App\\Models\\Staff', '{\"attributes\":{\"id\":1,\"firstname\":\"Amr\",\"lastname\":\"Bdreldin\",\"email\":\"amr.bdreldin@osouly.com\",\"mobile\":\"01014778866\",\"avatar\":null,\"gender\":\"male\",\"birthdate\":\"2019-05-01\",\"national_id\":\"65432123456789\",\"address\":\"Haram\",\"password\":\"$2y$10$ZuHTl6T15lxcHtwe09XLcOyp9Vb.vP6UIvnVipBLglyGHuoHhVaGy\",\"description\":\"aaa\",\"job_title\":\"Sales\",\"status\":\"active\",\"language\":\"en\",\"permission_group_id\":1,\"last_login\":null,\"created_at\":\"2019-05-10 12:59:04\",\"updated_at\":\"2020-11-04 11:50:37\",\"deleted_at\":null},\"old\":{\"id\":1,\"firstname\":\"Amr\",\"lastname\":\"Bdreldin\",\"email\":\"amr.bdreldin@osouly.com\",\"mobile\":\"01014778866\",\"avatar\":null,\"gender\":\"male\",\"birthdate\":\"2019-05-01\",\"national_id\":\"65432123456789\",\"address\":\"Haram\",\"password\":\"$2y$10$ZuHTl6T15lxcHtwe09XLcOyp9Vb.vP6UIvnVipBLglyGHuoHhVaGy\",\"description\":\"aaa\",\"job_title\":\"Sales\",\"status\":\"active\",\"language\":\"ar\",\"permission_group_id\":1,\"last_login\":null,\"created_at\":\"2019-05-10 12:59:04\",\"updated_at\":\"2020-11-04 11:50:34\",\"deleted_at\":null}}', NULL, NULL, NULL, NULL, '2020-11-04 09:50:37', '2020-11-04 09:50:37'),
(70, 'default', 'updated', 1, 'App\\Models\\Staff', 1, 'App\\Models\\Staff', '{\"attributes\":{\"id\":1,\"firstname\":\"Amr\",\"lastname\":\"Bdreldin\",\"email\":\"amr.bdreldin@osouly.com\",\"mobile\":\"01014778866\",\"avatar\":null,\"gender\":\"male\",\"birthdate\":\"2019-05-01\",\"national_id\":\"65432123456789\",\"address\":\"Haram\",\"password\":\"$2y$10$ZuHTl6T15lxcHtwe09XLcOyp9Vb.vP6UIvnVipBLglyGHuoHhVaGy\",\"description\":\"aaa\",\"job_title\":\"Sales\",\"status\":\"active\",\"language\":\"ar\",\"permission_group_id\":1,\"last_login\":null,\"created_at\":\"2019-05-10 12:59:04\",\"updated_at\":\"2020-11-04 13:24:10\",\"deleted_at\":null},\"old\":{\"id\":1,\"firstname\":\"Amr\",\"lastname\":\"Bdreldin\",\"email\":\"amr.bdreldin@osouly.com\",\"mobile\":\"01014778866\",\"avatar\":null,\"gender\":\"male\",\"birthdate\":\"2019-05-01\",\"national_id\":\"65432123456789\",\"address\":\"Haram\",\"password\":\"$2y$10$ZuHTl6T15lxcHtwe09XLcOyp9Vb.vP6UIvnVipBLglyGHuoHhVaGy\",\"description\":\"aaa\",\"job_title\":\"Sales\",\"status\":\"active\",\"language\":\"en\",\"permission_group_id\":1,\"last_login\":null,\"created_at\":\"2019-05-10 12:59:04\",\"updated_at\":\"2020-11-04 11:50:37\",\"deleted_at\":null}}', NULL, NULL, NULL, NULL, '2020-11-04 11:24:10', '2020-11-04 11:24:10'),
(71, 'default', 'updated', 1, 'App\\Models\\Staff', 1, 'App\\Models\\Staff', '{\"attributes\":{\"id\":1,\"firstname\":\"Amr\",\"lastname\":\"Bdreldin\",\"email\":\"amr.bdreldin@osouly.com\",\"mobile\":\"01014778866\",\"avatar\":null,\"gender\":\"male\",\"birthdate\":\"2019-05-01\",\"national_id\":\"65432123456789\",\"address\":\"Haram\",\"password\":\"$2y$10$ZuHTl6T15lxcHtwe09XLcOyp9Vb.vP6UIvnVipBLglyGHuoHhVaGy\",\"description\":\"aaa\",\"job_title\":\"Sales\",\"status\":\"active\",\"language\":\"en\",\"permission_group_id\":1,\"last_login\":null,\"created_at\":\"2019-05-10 12:59:04\",\"updated_at\":\"2020-11-04 14:36:47\",\"deleted_at\":null},\"old\":{\"id\":1,\"firstname\":\"Amr\",\"lastname\":\"Bdreldin\",\"email\":\"amr.bdreldin@osouly.com\",\"mobile\":\"01014778866\",\"avatar\":null,\"gender\":\"male\",\"birthdate\":\"2019-05-01\",\"national_id\":\"65432123456789\",\"address\":\"Haram\",\"password\":\"$2y$10$ZuHTl6T15lxcHtwe09XLcOyp9Vb.vP6UIvnVipBLglyGHuoHhVaGy\",\"description\":\"aaa\",\"job_title\":\"Sales\",\"status\":\"active\",\"language\":\"ar\",\"permission_group_id\":1,\"last_login\":null,\"created_at\":\"2019-05-10 12:59:04\",\"updated_at\":\"2020-11-04 13:24:10\",\"deleted_at\":null}}', NULL, NULL, NULL, NULL, '2020-11-04 12:36:47', '2020-11-04 12:36:47');

-- --------------------------------------------------------

--
-- Table structure for table `auth_api`
--

DROP TABLE IF EXISTS `auth_api`;
CREATE TABLE `auth_api` (
  `id` bigint(20) NOT NULL,
  `guard_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) NOT NULL,
  `ip` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auth_api`
--

INSERT INTO `auth_api` (`id`, `guard_name`, `access_token`, `user_id`, `ip`, `user_agent`, `created_at`, `updated_at`) VALUES
(11, 'driver_api', '495e6f0214efffa42ba9389a68d38de75b6373d395e717567761dfe86da58b2a', 1, '::1', 'insomnia/2020.4.1', '2020-10-30 18:24:34', '2020-10-30 20:44:51'),
(14, 'api', 'fd58386affa34e5835c4aca75847707f0817b8532eae91c1b6039251bbc369a8', 4, '::1', 'insomnia/2020.4.1', '2020-10-30 20:25:05', '2020-10-30 20:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `auth_session`
--

DROP TABLE IF EXISTS `auth_session`;
CREATE TABLE `auth_session` (
  `id` bigint(20) NOT NULL,
  `guard_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) NOT NULL,
  `ip` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auth_session`
--

INSERT INTO `auth_session` (`id`, `guard_name`, `access_token`, `user_id`, `ip`, `user_agent`, `created_at`, `updated_at`) VALUES
(37, 'staff', '6b41f4e6e8131fa33abee5aba95a5c06', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.111 Safari/537.36', '2020-11-05 06:03:19', '2020-11-05 06:04:21');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
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
(3, '2019_09_06_172833_create_activity_log_table', 1),
(9, '2016_06_01_000001_create_oauth_auth_codes_table', 2),
(10, '2016_06_01_000002_create_oauth_access_tokens_table', 2),
(11, '2016_06_01_000003_create_oauth_refresh_tokens_table', 2),
(12, '2016_06_01_000004_create_oauth_clients_table', 2),
(13, '2016_06_01_000005_create_oauth_personal_access_clients_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE `notifications` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `notifiable_id` int(10) NOT NULL,
  `notifiable_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` int(10) NOT NULL,
  `route_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission_group_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `route_name`, `permission_group_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7585, 'system.payment-methods.index', 14, NULL, NULL, NULL),
(7586, 'system.payment-methods.show', 14, NULL, NULL, NULL),
(7587, 'system.payment-methods.destroy', 14, NULL, NULL, NULL),
(7588, 'system.payment-methods.show', 14, NULL, NULL, NULL),
(7589, 'system.payment-methods.create', 14, NULL, NULL, NULL),
(7590, 'system.payment-methods.store', 14, NULL, NULL, NULL),
(7591, 'system.payment-methods.edit', 14, NULL, NULL, NULL),
(7592, 'system.payment-methods.update', 14, NULL, NULL, NULL),
(7593, 'system.staff.index', 14, NULL, NULL, NULL),
(7594, 'system.staff.show', 14, NULL, NULL, NULL),
(7595, 'system.staff.create', 14, NULL, NULL, NULL),
(7596, 'system.staff.store', 14, NULL, NULL, NULL),
(7597, 'system.staff.edit', 14, NULL, NULL, NULL),
(7598, 'system.staff.update', 14, NULL, NULL, NULL),
(7599, 'system.permission-group.index', 14, NULL, NULL, NULL),
(7600, 'system.permission-group.show', 14, NULL, NULL, NULL),
(7601, 'system.permission-group.create', 14, NULL, NULL, NULL),
(7602, 'system.permission-group.store', 14, NULL, NULL, NULL),
(7603, 'system.permission-group.edit', 14, NULL, NULL, NULL),
(7604, 'system.permission-group.update', 14, NULL, NULL, NULL),
(7605, 'system.setting.index', 14, NULL, NULL, NULL),
(7606, 'system.setting.update', 14, NULL, NULL, NULL),
(7607, 'system.activity-log.index', 14, NULL, NULL, NULL),
(7608, 'system.activity-log.show', 14, NULL, NULL, NULL),
(7609, 'system.staff.auth-sessions', 14, NULL, NULL, NULL),
(7610, 'system.staff.delete-auth-sessions', 14, NULL, NULL, NULL),
(7641, 'system.payment-methods.index', 1, NULL, NULL, NULL),
(7642, 'system.payment-methods.show', 1, NULL, NULL, NULL),
(7643, 'system.payment-methods.destroy', 1, NULL, NULL, NULL),
(7644, 'system.payment-methods.show', 1, NULL, NULL, NULL),
(7645, 'system.payment-methods.create', 1, NULL, NULL, NULL),
(7646, 'system.payment-methods.store', 1, NULL, NULL, NULL),
(7647, 'system.payment-methods.edit', 1, NULL, NULL, NULL),
(7648, 'system.payment-methods.update', 1, NULL, NULL, NULL),
(7649, 'system.staff.index', 1, NULL, NULL, NULL),
(7650, 'system.staff.show', 1, NULL, NULL, NULL),
(7651, 'system.staff.create', 1, NULL, NULL, NULL),
(7652, 'system.staff.store', 1, NULL, NULL, NULL),
(7653, 'system.staff.edit', 1, NULL, NULL, NULL),
(7654, 'system.staff.update', 1, NULL, NULL, NULL),
(7655, 'system.permission-group.index', 1, NULL, NULL, NULL),
(7656, 'system.permission-group.show', 1, NULL, NULL, NULL),
(7657, 'system.permission-group.create', 1, NULL, NULL, NULL),
(7658, 'system.permission-group.store', 1, NULL, NULL, NULL),
(7659, 'system.permission-group.edit', 1, NULL, NULL, NULL),
(7660, 'system.permission-group.update', 1, NULL, NULL, NULL),
(7661, 'system.setting.index', 1, NULL, NULL, NULL),
(7662, 'system.setting.update', 1, NULL, NULL, NULL),
(7663, 'system.activity-log.index', 1, NULL, NULL, NULL),
(7664, 'system.activity-log.show', 1, NULL, NULL, NULL),
(7665, 'system.staff.auth-sessions', 1, NULL, NULL, NULL),
(7666, 'system.staff.delete-auth-sessions', 1, NULL, NULL, NULL),
(7667, 'system.orders.index', 1, NULL, NULL, NULL),
(7668, 'system.orders.show', 1, NULL, NULL, NULL),
(7669, 'system.orders.edit', 1, NULL, NULL, NULL),
(7670, 'system.orders.update', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_groups`
--

DROP TABLE IF EXISTS `permission_groups`;
CREATE TABLE `permission_groups` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_supervisor` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `whitelist_ip` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_groups`
--

INSERT INTO `permission_groups` (`id`, `name`, `is_supervisor`, `whitelist_ip`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Super Admin', 'yes', NULL, '2017-09-20 12:11:59', '2018-02-03 18:57:38', NULL),
(2, 'wewewe', 'no', 'wewew', '2014-08-15 22:00:00', '2014-08-15 22:00:00', NULL),
(13, 'admin', 'yes', NULL, '2020-08-17 23:52:12', '2020-08-17 23:52:12', NULL),
(14, 'aaaaaaa', 'yes', NULL, '2020-10-31 19:42:29', '2020-10-31 19:42:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `shown_name_ar` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shown_name_en` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_list` text COLLATE utf8mb4_unicode_ci,
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `is_visible` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`name`, `value`, `shown_name_ar`, `shown_name_en`, `input_type`, `option_list`, `group_name`, `sort`, `is_visible`, `created_at`, `updated_at`) VALUES
('company_name', 'Delivery Runner', 'اسم الموقع', 'company name', 'text', NULL, 'system', 100, 'yes', '2017-12-13 22:00:00', '2020-11-01 06:21:11'),
('email', 'info@deliveryrunner.com', 'البريد الالكتروني', 'E-mail', 'text', NULL, 'contact', 12, 'yes', '2017-12-13 22:00:00', '2020-11-01 06:21:11'),
('facebook', 'https://facebook.com', 'صفحة الفيسبوك', 'facebook page', 'text', NULL, 'contact', 101, 'yes', '2020-08-14 22:00:00', '2020-11-01 06:21:11'),
('font_size', '14', 'حجم خط الجداول', 'font size', 'text', NULL, 'style', 1, 'yes', '2017-12-13 22:00:00', '2020-11-01 06:21:11'),
('font_weight', 'normal', 'سمك خط الجداول', 'table font weight', 'select', 'a:2:{s:6:\"normal\";s:6:\"normal\";s:4:\"bold\";s:4:\"bold\";}', 'style', 0, 'yes', NULL, '2020-11-01 06:21:11'),
('instagram', 'https://www.instagram.com/', 'انستجرام', 'Instagram', 'text', NULL, 'contact', 101, 'yes', '2020-08-14 22:00:00', '2020-11-01 06:21:11'),
('linkedin', 'https://www.linkedin.com/feed/', 'لينكد ان', 'Linkedin', 'text', NULL, 'contact', 101, 'yes', '2020-08-14 22:00:00', '2020-11-01 06:21:11'),
('menu_font_size', '14', 'حجم الخط القائمه', 'Menu font size', 'text', NULL, 'style', 2, 'yes', NULL, '2020-11-01 06:21:11'),
('menu_font_weight', 'normal', 'سمك خط القائمه', 'Menu font weight', 'select', 'a:2:{s:6:\"normal\";s:6:\"normal\";s:4:\"bold\";s:4:\"bold\";}', 'style', 0, 'yes', NULL, '2020-11-01 06:21:11'),
('mobile', '0100000000', 'الهاتف الارضي', 'Phone', 'text', NULL, 'contact', 3, 'yes', '2017-12-13 22:00:00', '2020-11-01 06:21:11'),
('point_value', '2', 'Point Value', 'Point Value', 'text', NULL, 'system', 100, 'yes', '2017-12-13 22:00:00', '2020-11-01 06:21:11'),
('twitter', 'https://twitter.com/home?lang=ar', 'تويتر', 'Twitter', 'text', NULL, 'contact', 101, 'yes', '2020-08-14 22:00:00', '2020-11-01 06:21:11'),
('youtube', 'https://youtube.com', 'قناة اليوتيوب', 'youtube channel', 'text', NULL, 'contact', 101, 'yes', '2020-08-14 22:00:00', '2020-11-01 06:21:11');

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

DROP TABLE IF EXISTS `sms`;
CREATE TABLE `sms` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','sent','error') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `response` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE `staff` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date DEFAULT NULL,
  `national_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','in-active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `language` enum('ar','en') COLLATE utf8mb4_unicode_ci DEFAULT 'en',
  `permission_group_id` int(10) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `firstname`, `lastname`, `email`, `mobile`, `avatar`, `gender`, `birthdate`, `national_id`, `address`, `password`, `description`, `job_title`, `status`, `language`, `permission_group_id`, `last_login`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Amr', 'Bdreldin', 'amr.bdreldin@osouly.com', '01014778866', NULL, 'male', '2019-05-01', '65432123456789', 'Haram', '$2y$10$eGRopYszMrg9e/mMa1xwvOlZBamNdnpuLViXX5k.l0psPEjUG.xAW',/*password 123123123 */ 'aaa', 'Sales', 'active', 'en', 1, NULL, '2019-05-10 10:59:04', '2020-11-04 12:36:47', NULL),
(2, 'Mohmed', 'Nukeesh', 'mohamed@osouly.com', '11111111111', NULL, 'male', '2020-07-30', '11111111111111', 'Yted', '$2y$10$h2keYyGimMolzt74LpOXseqDg50OE7YI23k/Lw5Kcvm/RR0neke5a', '', 'Manager', 'active', 'ar', 13, NULL, '2020-08-21 17:21:25', '2020-11-01 06:12:56', NULL),
(3, 'Abdelrahman', 'Saeed', 'abdelrahmansaeed3@gmail.com', '01117414966', NULL, 'male', '1993-04-12', '', NULL, '$2y$10$ZuHTl6T15lxcHtwe09XLcOyp9Vb.vP6UIvnVipBLglyGHuoHhVaGy', NULL, 'Developer', 'active', 'ar', 1, NULL, '2020-09-10 22:32:23', '2020-10-11 21:37:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `type` enum('person','company') COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activation_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forgot_password_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rc_copy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credit` double NOT NULL DEFAULT '0',
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lng` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` int(11) DEFAULT NULL,
  `address_notes` int(11) DEFAULT NULL,
  `contract_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plan_id` int(11) DEFAULT NULL,
  `status` enum('active','inactive','new') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `verified_at` datetime DEFAULT NULL,
  `firebase_token` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `type`, `parent_id`, `name`, `email`, `mobile`, `username`, `password`, `activation_code`, `forgot_password_code`, `rc_copy`, `credit`, `lat`, `lng`, `address`, `address_notes`, `contract_image`, `bank_account`, `contact_name`, `plan_id`, `status`, `verified_at`, `firebase_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'company', 0, 'mac', 'amr@sds.sds', '01014778866', '', '$2y$10$nGXMtKCdMlccDNQDWGASFuwRuaVlWWxz4ewi6.szenugXwOlOcaD6', '6020', '', '2020/10/19/UEHWhFKIsxnVOtj4vsfS1ZPTfkRidsa11ZcP5IXi.png', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, '2020-10-18 22:27:27', '2020-10-19 00:27:27', NULL),
(2, 'person', 0, 'mac', 'amr@sds.sd', '01014778861', '', '$2y$10$W7p7Tqz4h6AAJCeJbv6ydewAYKAHrLwv8bT1yz4kW950fBJHdUQbS', '2601', NULL, '2020/10/19/foNUU33KL01bbSmj1XW5R0EMlqBOnnQn1eQgLO1q.png', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, '2020-10-31 22:08:40', '2020-10-19 00:08:52', NULL),
(3, 'company', 4, 'amr', 'amr@sds.sr', '01014778862', '', '$2y$10$D2K1nAGy9SWvjDeScbTRseEZ7yaTDy.ePUuxDbhtp7a1DFKjyOhi2', '6785', NULL, '2020/10/19/NLc2hDC5tGFgOWnYk2tOS7R14I76dxTlBS9nniUH.png', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'inactive', NULL, NULL, '2020-10-21 14:26:43', '2020-10-19 00:12:37', NULL),
(4, 'person', 0, 'amr2', 'amr@sds.sc', '01014778865', '01014778865', '$2y$10$oj/zXLuBl47PLVy3/gxe/u7JRnqbUHv6cM7eEeHmTWrbDpblti7Xq', '1577', NULL, NULL, 0, '30.162169', '31.327798', NULL, NULL, NULL, NULL, NULL, 1, 'active', '2020-10-19 00:17:11', NULL, '2020-10-31 22:08:36', '2020-10-19 00:17:11', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `log_name` (`log_name`),
  ADD KEY `subject_type` (`subject_type`(191)),
  ADD KEY `causer_id` (`causer_id`),
  ADD KEY `causer_type` (`causer_type`(191)),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `auth_api`
--
ALTER TABLE `auth_api`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `access_token_2` (`access_token`),
  ADD KEY `guard_name` (`guard_name`),
  ADD KEY `access_token` (`access_token`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_session`
--
ALTER TABLE `auth_session`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `access_token_2` (`access_token`),
  ADD KEY `guard_name` (`guard_name`),
  ADD KEY `access_token` (`access_token`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_groups`
--
ALTER TABLE `permission_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `staff_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `auth_api`
--
ALTER TABLE `auth_api`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `auth_session`
--
ALTER TABLE `auth_session`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7671;

--
-- AUTO_INCREMENT for table `permission_groups`
--
ALTER TABLE `permission_groups`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sms`
--
ALTER TABLE `sms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
