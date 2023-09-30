-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2023 at 12:19 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atech-site`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `log_name` varchar(150) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `subject_id` int(10) DEFAULT NULL,
  `subject_type` varchar(255) DEFAULT NULL,
  `causer_id` int(10) DEFAULT NULL,
  `causer_type` varchar(255) DEFAULT NULL,
  `properties` text DEFAULT NULL,
  `ip` varchar(25) DEFAULT NULL,
  `user_agent` varchar(150) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `method` varchar(25) DEFAULT NULL,
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
(71, 'default', 'updated', 1, 'App\\Models\\Staff', 1, 'App\\Models\\Staff', '{\"attributes\":{\"id\":1,\"firstname\":\"Amr\",\"lastname\":\"Bdreldin\",\"email\":\"amr.bdreldin@osouly.com\",\"mobile\":\"01014778866\",\"avatar\":null,\"gender\":\"male\",\"birthdate\":\"2019-05-01\",\"national_id\":\"65432123456789\",\"address\":\"Haram\",\"password\":\"$2y$10$ZuHTl6T15lxcHtwe09XLcOyp9Vb.vP6UIvnVipBLglyGHuoHhVaGy\",\"description\":\"aaa\",\"job_title\":\"Sales\",\"status\":\"active\",\"language\":\"en\",\"permission_group_id\":1,\"last_login\":null,\"created_at\":\"2019-05-10 12:59:04\",\"updated_at\":\"2020-11-04 14:36:47\",\"deleted_at\":null},\"old\":{\"id\":1,\"firstname\":\"Amr\",\"lastname\":\"Bdreldin\",\"email\":\"amr.bdreldin@osouly.com\",\"mobile\":\"01014778866\",\"avatar\":null,\"gender\":\"male\",\"birthdate\":\"2019-05-01\",\"national_id\":\"65432123456789\",\"address\":\"Haram\",\"password\":\"$2y$10$ZuHTl6T15lxcHtwe09XLcOyp9Vb.vP6UIvnVipBLglyGHuoHhVaGy\",\"description\":\"aaa\",\"job_title\":\"Sales\",\"status\":\"active\",\"language\":\"ar\",\"permission_group_id\":1,\"last_login\":null,\"created_at\":\"2019-05-10 12:59:04\",\"updated_at\":\"2020-11-04 13:24:10\",\"deleted_at\":null}}', NULL, NULL, NULL, NULL, '2020-11-04 12:36:47', '2020-11-04 12:36:47'),
(72, 'default', 'updated', 1, 'App\\Models\\Staff', 1, 'App\\Models\\Staff', '{\"attributes\":{\"id\":1,\"firstname\":\"Amr\",\"lastname\":\"Bdreldin\",\"email\":\"amr.bdreldin@osouly.com\",\"mobile\":\"01014778866\",\"avatar\":null,\"gender\":\"male\",\"birthdate\":\"2019-05-01\",\"national_id\":\"65432123456789\",\"address\":\"Haram\",\"password\":\"$2y$10$eGRopYszMrg9e\\/mMa1xwvOlZBamNdnpuLViXX5k.l0psPEjUG.xAW\",\"description\":\"aaa\",\"job_title\":\"Sales\",\"status\":\"active\",\"language\":\"ar\",\"permission_group_id\":1,\"last_login\":null,\"created_at\":\"2019-05-10T13:59:04.000000Z\",\"updated_at\":\"2023-08-28T10:12:06.000000Z\",\"deleted_at\":null},\"old\":{\"id\":1,\"firstname\":\"Amr\",\"lastname\":\"Bdreldin\",\"email\":\"amr.bdreldin@osouly.com\",\"mobile\":\"01014778866\",\"avatar\":null,\"gender\":\"male\",\"birthdate\":\"2019-05-01\",\"national_id\":\"65432123456789\",\"address\":\"Haram\",\"password\":\"$2y$10$eGRopYszMrg9e\\/mMa1xwvOlZBamNdnpuLViXX5k.l0psPEjUG.xAW\",\"description\":\"aaa\",\"job_title\":\"Sales\",\"status\":\"active\",\"language\":\"en\",\"permission_group_id\":1,\"last_login\":null,\"created_at\":\"2019-05-10T13:59:04.000000Z\",\"updated_at\":\"2020-11-04T14:36:47.000000Z\",\"deleted_at\":null}}', NULL, NULL, NULL, NULL, '2023-08-28 07:12:06', '2023-08-28 07:12:06'),
(73, 'default', 'updated', 1, 'App\\Models\\Staff', 1, 'App\\Models\\Staff', '{\"attributes\":{\"id\":1,\"firstname\":\"Amr\",\"lastname\":\"Bdreldin\",\"email\":\"amr.bdreldin@osouly.com\",\"mobile\":\"01014778866\",\"avatar\":null,\"gender\":\"male\",\"birthdate\":\"2019-05-01\",\"national_id\":\"65432123456789\",\"address\":\"Haram\",\"password\":\"$2y$10$eGRopYszMrg9e\\/mMa1xwvOlZBamNdnpuLViXX5k.l0psPEjUG.xAW\",\"description\":\"aaa\",\"job_title\":\"Sales\",\"status\":\"active\",\"language\":\"en\",\"permission_group_id\":1,\"last_login\":null,\"created_at\":\"2019-05-10T13:59:04.000000Z\",\"updated_at\":\"2023-08-28T10:12:10.000000Z\",\"deleted_at\":null},\"old\":{\"id\":1,\"firstname\":\"Amr\",\"lastname\":\"Bdreldin\",\"email\":\"amr.bdreldin@osouly.com\",\"mobile\":\"01014778866\",\"avatar\":null,\"gender\":\"male\",\"birthdate\":\"2019-05-01\",\"national_id\":\"65432123456789\",\"address\":\"Haram\",\"password\":\"$2y$10$eGRopYszMrg9e\\/mMa1xwvOlZBamNdnpuLViXX5k.l0psPEjUG.xAW\",\"description\":\"aaa\",\"job_title\":\"Sales\",\"status\":\"active\",\"language\":\"ar\",\"permission_group_id\":1,\"last_login\":null,\"created_at\":\"2019-05-10T13:59:04.000000Z\",\"updated_at\":\"2023-08-28T10:12:06.000000Z\",\"deleted_at\":null}}', NULL, NULL, NULL, NULL, '2023-08-28 07:12:10', '2023-08-28 07:12:10'),
(74, 'default', 'updated', 1, 'App\\Models\\Staff', 1, 'App\\Models\\Staff', '{\"attributes\":{\"id\":1,\"firstname\":\"Amr\",\"lastname\":\"Bdreldin\",\"email\":\"amr.bdreldin@osouly.com\",\"mobile\":\"01014778866\",\"avatar\":null,\"gender\":\"male\",\"birthdate\":\"2019-05-01\",\"national_id\":\"65432123456789\",\"address\":\"Haram\",\"password\":\"$2y$10$eGRopYszMrg9e\\/mMa1xwvOlZBamNdnpuLViXX5k.l0psPEjUG.xAW\",\"description\":\"aaa\",\"job_title\":\"Sales\",\"status\":\"active\",\"language\":\"ar\",\"permission_group_id\":1,\"last_login\":null,\"created_at\":\"2019-05-10T13:59:04.000000Z\",\"updated_at\":\"2023-08-28T10:12:36.000000Z\",\"deleted_at\":null},\"old\":{\"id\":1,\"firstname\":\"Amr\",\"lastname\":\"Bdreldin\",\"email\":\"amr.bdreldin@osouly.com\",\"mobile\":\"01014778866\",\"avatar\":null,\"gender\":\"male\",\"birthdate\":\"2019-05-01\",\"national_id\":\"65432123456789\",\"address\":\"Haram\",\"password\":\"$2y$10$eGRopYszMrg9e\\/mMa1xwvOlZBamNdnpuLViXX5k.l0psPEjUG.xAW\",\"description\":\"aaa\",\"job_title\":\"Sales\",\"status\":\"active\",\"language\":\"en\",\"permission_group_id\":1,\"last_login\":null,\"created_at\":\"2019-05-10T13:59:04.000000Z\",\"updated_at\":\"2023-08-28T10:12:10.000000Z\",\"deleted_at\":null}}', NULL, NULL, NULL, NULL, '2023-08-28 07:12:36', '2023-08-28 07:12:36'),
(75, 'default', 'updated', 1, 'App\\Models\\Staff', 1, 'App\\Models\\Staff', '{\"attributes\":{\"id\":1,\"firstname\":\"Amr\",\"lastname\":\"Bdreldin\",\"email\":\"amr.bdreldin@osouly.com\",\"mobile\":\"01014778866\",\"avatar\":null,\"gender\":\"male\",\"birthdate\":\"2019-05-01\",\"national_id\":\"65432123456789\",\"address\":\"Haram\",\"password\":\"$2y$10$eGRopYszMrg9e\\/mMa1xwvOlZBamNdnpuLViXX5k.l0psPEjUG.xAW\",\"description\":\"aaa\",\"job_title\":\"Sales\",\"status\":\"active\",\"language\":\"en\",\"permission_group_id\":1,\"last_login\":null,\"created_at\":\"2019-05-10T13:59:04.000000Z\",\"updated_at\":\"2023-08-28T10:12:53.000000Z\",\"deleted_at\":null},\"old\":{\"id\":1,\"firstname\":\"Amr\",\"lastname\":\"Bdreldin\",\"email\":\"amr.bdreldin@osouly.com\",\"mobile\":\"01014778866\",\"avatar\":null,\"gender\":\"male\",\"birthdate\":\"2019-05-01\",\"national_id\":\"65432123456789\",\"address\":\"Haram\",\"password\":\"$2y$10$eGRopYszMrg9e\\/mMa1xwvOlZBamNdnpuLViXX5k.l0psPEjUG.xAW\",\"description\":\"aaa\",\"job_title\":\"Sales\",\"status\":\"active\",\"language\":\"ar\",\"permission_group_id\":1,\"last_login\":null,\"created_at\":\"2019-05-10T13:59:04.000000Z\",\"updated_at\":\"2023-08-28T10:12:36.000000Z\",\"deleted_at\":null}}', NULL, NULL, NULL, NULL, '2023-08-28 07:12:53', '2023-08-28 07:12:53');

-- --------------------------------------------------------

--
-- Table structure for table `auth_api`
--

CREATE TABLE `auth_api` (
  `id` bigint(20) NOT NULL,
  `guard_name` varchar(50) NOT NULL,
  `access_token` varchar(191) NOT NULL,
  `user_id` int(10) NOT NULL,
  `ip` varchar(25) NOT NULL,
  `user_agent` text NOT NULL,
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

CREATE TABLE `auth_session` (
  `id` bigint(20) NOT NULL,
  `guard_name` varchar(50) NOT NULL,
  `access_token` varchar(100) NOT NULL,
  `user_id` int(10) NOT NULL,
  `ip` varchar(25) NOT NULL,
  `user_agent` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auth_session`
--

INSERT INTO `auth_session` (`id`, `guard_name`, `access_token`, `user_id`, `ip`, `user_agent`, `created_at`, `updated_at`) VALUES
(46, 'staff', 'd82944a7d67a8b27e8f729c01292f722', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', '2023-09-07 04:02:11', '2023-09-07 07:06:35');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `is_publish` enum('active','in-active') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `thumbnail`, `title`, `name`, `slug`, `image`, `desc`, `is_publish`, `created_at`, `updated_at`) VALUES
(2, 'upload/about/1776098312280673.jpg', 'smart building benefits begin with the deployment of modern building management systems', 'any name', 'smart-building-benefits-begin-with-the-deployment-of-modern-building-management-systems', 'upload/about/1776098312316124.jpg', '<p>Smart buildings are built on integrated systems In contrast to&nbsp;<a href=\"https://www.se.com/ww/en/work/products/building-automation-and-control/\" target=\"_blank\">building automation</a>&nbsp;systems of 10 years ago, which often operated as a system of separate silos, building owners are looking for core systems that work together. For instance, when a tenant walks into their&nbsp;<a href=\"https://www.se.com/ww/en/work/solutions/building-management/smart-offices\" target=\"_blank\">office</a>, they envision door locks recognizing their face, their lights automatically turning upon entry, and the in-room temperature controlled and pre-set to their comfort level. If the tenant happens to leave their office, the room adapts to that situation. The lights turn off, the temperature control runs in a more energy-efficient mode, and blinds are adjusted automatically to better control the light and heat coming in from the sun. Today all of this is possible&hellip;and at an affordable cost. The new generation of millennials who are now dominating the workforce care about the environment and want a more&nbsp;<a href=\"https://www.se.com/ww/en/work/solutions/building-management/smart-offices\" target=\"_blank\">technology-driven experience when they go to work</a>. Eye and facial recognition systems for security, for example, and elevator destination dispatch, where groups of people heading to the same destinations use the same elevators to reduce waiting and travel time, are innovations that occupants expect to enjoy. How Automation Experts Add Value to Smart Buildings When building owners look to deploy next-generation smart buildings, they want to combine security systems with their BMS, elevator systems, and cameras. They want to integrate these technologies into a converged network that enables them to control&nbsp;<a href=\"https://www.se.com/ww/en/work/solutions/building-management/smart-offices\" target=\"_blank\">workplace management</a>&nbsp;down to the finest detail. We help our clients to achieve such smart building modernization goals in three ways:</p>\r\n\r\n<p>Site assessment&nbsp;&ndash; When clients ask us to perform a site assessment, we first evaluate their existing infrastructure. We appraise the site from a mechanical and network perspective and identify the weak points that need updating. We look at the existing BMS to see if it needs to be replaced or at least modernized. &nbsp;One of the points we emphasize is the democratization of control. For instance, fiber loops, using service panels, can be configured in a way that allows individual floors to tie into the BMS system.&nbsp; That opens the door to a much more granular level of&nbsp;<a href=\"https://www.se.com/ww/en/work/solutions/building-management/room-control/\" target=\"_blank\">room control</a>. Occupants benefit because they can play a more direct role in controlling their own&nbsp;<a href=\"https://www.se.com/ww/en/work/solutions/building-management/room-control/\" target=\"_blank\">comfort</a>, safety, and energy consumption levels.</p>\r\n\r\n<p>Incentive facilitation&nbsp;&ndash; Financial incentives, available through the local power utilities, play an important role in helping building owners to migrate to smarter buildings. In some cases, the cost of the systems we install can be reduced by up to 30% through grants or incentives. Our 40 years of experience in the New York metro region means we can help customers more easily navigate the incentive and rebate process so that they can use incentive money to fund a significant portion of their modernization projects.</p>\r\n\r\n<p>Systems integration&nbsp;&ndash; The key to enabling the modern smart building is the ability to integrate the various technologies in a way that allows them to interact as a cohesive whole. Controllers, end-user devices, temperature&nbsp;<a href=\"https://www.se.com/ww/en/product-range/63626-powertag/\" target=\"_blank\">sensors</a>, transducers, and actuators all need to &ldquo;talk&rdquo; so that a high level of systems optimization can be achieved. We help to bring the building to &ldquo;life&rdquo; by programming these systems to work together as an open architecture that allows for future expansion and scalability. This enables us to incorporate critical functions such as web connectivity, energy demand control, intelligent security and lighting systems, and automated ventilation. In some buildings, we integrate the ability to track human headcount (while maintaining personal privacy) in real-time, so that the BMS system, through analytics, can adjust the degree of energy needed to best accommodate the temperature and lighting needs of the occupants in the various rooms.</p>\r\n\r\n<p>For more information, We at&nbsp;<a href=\"https://www.linkedin.com/in/robert-bier-0909265/\" target=\"_blank\">T.M. Bier &amp; Associates</a>&nbsp;work together with our clients to achieve ongoing building infrastructure optimization. As buildings morph and modernize over time, our staff of engineers transition the building automation systems so that building owners can better align themselves to the changing realities of their marketplace.</p>\r\n\r\n<p>Quoted from: Schneider Electric</p>', 'active', '2023-09-04 06:22:23', '2023-09-04 06:22:23'),
(3, 'upload/about/1776364431073842.jpg', 'Discover Schneider EcoStruxure Building Operation (BMS System).', 'life style', 'discover-schneider-ecostruxure-building-operation-bms-system', 'upload/about/1776364431112950.jpg', '<ul>\r\n	<li>Open, flexible, data-centric. Go beyond traditional building management system functionality to create smart, future-ready buildings with EcoStruxure Building Operation. Part of the EcoStruxure Building integrated smart building platform; this open, flexible, data-centric solution provides a single control center to monitor, manage and optimize all types of buildings.</li>\r\n	<li>Benefits and Features of EcoStruxure Building Operation</li>\r\n	<li><strong>&ndash; Hyper-efficient:&nbsp;</strong>Open platform for scalable and flexible integrations; IP-based with access to valuable analytics and insights.</li>\r\n	<li><strong>&ndash; Resilient:</strong>&nbsp;Access systems from anywhere and manage them remotely with enhanced compliance and security assurance.</li>\r\n	<li><strong>&ndash; Sustainable:</strong>&nbsp;Integrate and monitor HVAC, Power, microgrids, EV charging, and other subsystems for active energy management.</li>\r\n	<li><strong>&ndash; People-centric:</strong>&nbsp;Ensure occupant well-being, optimize building health, and reduce building performance issues.</li>\r\n	<li><strong>&ndash; A truly open smart building platform:</strong>&nbsp;In addition to native support for common standard protocols including BACnet, LonWorks, Modbus, and Web Services, get compatibility for publishing and subscribing to IoT sensors via MQTT protocols and brokers. Our open-source format databases allow for access from EcoStruxure Building Operation as well as third-party tools &ndash; system-to-system and system-to-device. Our Smart Connector APIs, an open-source developer framework (including SDK), enables endless new capabilities, applications, and solutions.</li>\r\n	<li><strong>&ndash; Maximize today&rsquo;s data-intensive buildings:</strong>&nbsp;Modernize your buildings with an end-to-end IP backbone that delivers faster, more reliable communication with higher bandwidth to capture and leverage more data throughput from connected IoT devices. Additionally, get greater architecture design and zoning flexibility right down to the floor level. With access to cloud and connected services, you can add smart workplace applications to accommodate occupants&rsquo; needs and well-being.</li>\r\n	<li><strong>&ndash; Increase efficiency with any time, anywhere access:</strong>&nbsp;EcoStruxure Building Operation&rsquo;s user experience provides an integrated approach to view all your building data &ndash; from HVAC, lighting, power, microgrids, renewable energy, security, fire system, and more &ndash; in a single&nbsp;control center, with a mobile-friendly design for remote viewing on-the-go.</li>\r\n	<li>Get exceptional data visibility with rich graphics and customizable dashboards at scale views at the device, floor, building, campus, and portfolio levels. Monitor and optimize your energy use to achieve sustainability goals.</li>\r\n	<li><strong>&ndash; Make smarter, insight-based decisions:</strong>&nbsp;Our data management and visualization tools include customizable charts and graphs to convey massive amounts of data to help achieve sustainability and efficiency goals. Built-in dashboards provide easier monitoring and speedier decision-making with access to data directly within EcoStruxure Building Operation without the need for third-party tools. And now, access information and insights in human, readable form with Brick Schema semantic tagging.</li>\r\n</ul>', 'active', '2023-09-07 04:52:14', '2023-09-07 04:52:14'),
(4, 'upload/about/1776364751681319.jpg', 'Efento Cloud – an IoT platform for sensor data.', 'name', 'efento-cloud-an-iot-platform-for-sensor-data', 'upload/about/1776364751719604.jpg', '<p>eFento Cloud is a platform that allows you to collect, analyze, and visualize sensor data, generate reports out of it, and notify users if the values measured by the sensors are out of the safe range. Efento Cloud works with all Efento sensors, no matter what communication technology they use. The platform offers RESTful API, which can be used to integrate it with any third-party software. Users can access Efento Cloud through a web browser or a mobile application.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.atech-automation.com/wp-content/uploads/2022/05/Efento-Cloud-%E2%80%93-an-IoT-platform-for-sensor-data-Efento_1-1-724x1024.jpg\" style=\"float:left; height:1024px; width:724px\" /></p>', 'active', '2023-09-07 04:57:20', '2023-09-07 04:57:20');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` char(100) DEFAULT NULL,
  `is_publish` enum('active','in-active') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `image`, `name`, `is_publish`, `created_at`, `updated_at`) VALUES
(10, 'upload/about/1776094480737108.png', NULL, 'active', '2023-09-04 05:21:29', '2023-09-04 05:21:29'),
(11, 'upload/about/1776094487318218.png', NULL, 'active', '2023-09-04 05:21:36', '2023-09-04 05:21:36'),
(12, 'upload/about/1776094493753967.png', NULL, 'active', '2023-09-04 05:21:42', '2023-09-04 05:21:42'),
(13, 'upload/about/1776094501743544.png', NULL, 'active', '2023-09-04 05:21:49', '2023-09-04 05:21:49'),
(14, 'upload/about/1776094570748963.png', NULL, 'active', '2023-09-04 05:22:55', '2023-09-04 05:22:55'),
(15, 'upload/about/1776094577782978.png', NULL, 'active', '2023-09-04 05:23:02', '2023-09-04 05:23:02');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `is_publish` enum('active','in-active') DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `image`, `title`, `is_publish`, `created_at`, `updated_at`) VALUES
(1, 'upload/about/1775660622965464.jpg', NULL, 'active', '2023-08-30 10:25:30', '2023-08-30 10:25:30'),
(2, 'upload/about/1775660630714588.jpg', NULL, 'active', '2023-08-30 10:25:38', '2023-08-30 10:25:38'),
(3, 'upload/about/1775660634552484.jpg', NULL, 'active', '2023-08-30 10:25:41', '2023-08-30 10:25:41'),
(4, 'upload/about/1775660638423108.jpg', NULL, 'active', '2023-08-30 10:25:45', '2023-08-30 10:25:45'),
(5, 'upload/about/1775660642547637.jpg', NULL, 'active', '2023-08-30 10:25:49', '2023-08-30 10:25:49'),
(6, 'upload/about/1775660646532271.jpg', NULL, 'active', '2023-08-30 10:25:53', '2023-08-30 10:25:53');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `is_publish` enum('active','in-active') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
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

CREATE TABLE `notifications` (
  `id` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `notifiable_id` int(10) NOT NULL,
  `notifiable_type` varchar(100) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) NOT NULL,
  `route_name` varchar(255) NOT NULL,
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
(7793, 'system.staff.index', 1, NULL, NULL, NULL),
(7794, 'system.staff.show', 1, NULL, NULL, NULL),
(7795, 'system.staff.create', 1, NULL, NULL, NULL),
(7796, 'system.staff.store', 1, NULL, NULL, NULL),
(7797, 'system.staff.edit', 1, NULL, NULL, NULL),
(7798, 'system.staff.update', 1, NULL, NULL, NULL),
(7799, 'home-slider.index', 1, NULL, NULL, NULL),
(7800, 'home-slider.create', 1, NULL, NULL, NULL),
(7801, 'home-slider.store', 1, NULL, NULL, NULL),
(7802, 'home-slider.edit', 1, NULL, NULL, NULL),
(7803, 'home-slider.update', 1, NULL, NULL, NULL),
(7804, 'home-slider.destroy', 1, NULL, NULL, NULL),
(7805, 'testimonials.index', 1, NULL, NULL, NULL),
(7806, 'testimonials.create', 1, NULL, NULL, NULL),
(7807, 'testimonials.store', 1, NULL, NULL, NULL),
(7808, 'testimonials.edit', 1, NULL, NULL, NULL),
(7809, 'testimonials.update', 1, NULL, NULL, NULL),
(7810, 'testimonials.destroy', 1, NULL, NULL, NULL),
(7811, 'brands.index', 1, NULL, NULL, NULL),
(7812, 'brands.create', 1, NULL, NULL, NULL),
(7813, 'brands.store', 1, NULL, NULL, NULL),
(7814, 'brands.edit', 1, NULL, NULL, NULL),
(7815, 'brands.update', 1, NULL, NULL, NULL),
(7816, 'brands.destroy', 1, NULL, NULL, NULL),
(7817, 'blogs.index', 1, NULL, NULL, NULL),
(7818, 'blogs.create', 1, NULL, NULL, NULL),
(7819, 'blogs.store', 1, NULL, NULL, NULL),
(7820, 'blogs.edit', 1, NULL, NULL, NULL),
(7821, 'blogs.update', 1, NULL, NULL, NULL),
(7822, 'blogs.destroy', 1, NULL, NULL, NULL),
(7823, 'certificates.index', 1, NULL, NULL, NULL),
(7824, 'certificates.create', 1, NULL, NULL, NULL),
(7825, 'certificates.store', 1, NULL, NULL, NULL),
(7826, 'certificates.edit', 1, NULL, NULL, NULL),
(7827, 'certificates.update', 1, NULL, NULL, NULL),
(7828, 'certificates.destroy', 1, NULL, NULL, NULL),
(7829, 'clients.index', 1, NULL, NULL, NULL),
(7830, 'clients.create', 1, NULL, NULL, NULL),
(7831, 'clients.store', 1, NULL, NULL, NULL),
(7832, 'clients.edit', 1, NULL, NULL, NULL),
(7833, 'clients.update', 1, NULL, NULL, NULL),
(7834, 'clients.destroy', 1, NULL, NULL, NULL),
(7835, 'system.permission-group.index', 1, NULL, NULL, NULL),
(7836, 'system.permission-group.show', 1, NULL, NULL, NULL),
(7837, 'system.permission-group.create', 1, NULL, NULL, NULL),
(7838, 'system.permission-group.store', 1, NULL, NULL, NULL),
(7839, 'system.permission-group.edit', 1, NULL, NULL, NULL),
(7840, 'system.permission-group.update', 1, NULL, NULL, NULL),
(7841, 'system.setting.index', 1, NULL, NULL, NULL),
(7842, 'system.setting.update', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_groups`
--

CREATE TABLE `permission_groups` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_supervisor` enum('yes','no') NOT NULL DEFAULT 'no',
  `whitelist_ip` text DEFAULT NULL,
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

CREATE TABLE `settings` (
  `name` varchar(100) NOT NULL,
  `value` text DEFAULT NULL,
  `shown_name_ar` varchar(150) NOT NULL,
  `shown_name_en` varchar(150) NOT NULL,
  `input_type` varchar(100) NOT NULL,
  `option_list` text DEFAULT NULL,
  `group_name` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL,
  `is_visible` enum('yes','no') NOT NULL DEFAULT 'yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`name`, `value`, `shown_name_ar`, `shown_name_en`, `input_type`, `option_list`, `group_name`, `sort`, `is_visible`, `created_at`, `updated_at`) VALUES
('about_testimonial', 'Discover What Our Satisfied Clients Have to Say', 'التوصيات', 'Title of testimonials', 'text', NULL, 'about', 5, 'yes', NULL, '2023-09-07 07:06:34'),
('address', 'UAE - Abu Dhabi', 'العنوان', 'Address', 'textarea', NULL, 'contact', 5, 'yes', NULL, '2023-09-07 07:06:34'),
('admin_logo', 'upload/logo/1776004958272607.png', 'الادمن لوجو', 'admin logo', 'image', 'image', 'admin', 1, 'yes', NULL, '2023-09-03 05:38:34'),
('button slider', '', 'زرار السليدر', 'button slider', 'text', NULL, 'admin', 2, 'no', NULL, '2023-08-06 15:01:08'),
('call_button', 'Contact us', 'كول تيكست زرار', 'section contact button text', 'text', NULL, 'Home', 7, 'yes', NULL, '2023-09-07 07:06:34'),
('call_link', 'https://nsite.atech-automation.com/contact', 'كول هوم لينك', 'section contact link', 'text', NULL, 'Home', 6, 'yes', NULL, '2023-09-07 07:06:34'),
('call_text', 'Start working together?', 'سيكشن الاتصال تيكست', 'section contact text', 'text', NULL, 'Home', 5, 'yes', NULL, '2023-09-07 07:06:34'),
('company_name', 'Atech', 'اسم الموقع', 'company name', 'text', NULL, 'admin', 1, 'yes', NULL, '2023-09-07 07:06:34'),
('contact_header', 'C o n t a c t   U s', 'هيدر ', 'contact header', 'text', NULL, 'contact', 1, 'yes', NULL, '2023-09-07 07:06:34'),
('contact_title', 'Start a new project?', 'عنوان', 'contact title', 'text', NULL, 'contact', 2, 'yes', NULL, '2023-09-07 07:06:34'),
('copyright', '© 2023 Atech, All Rights Reserved', 'كوبى رايت تيكست', 'Copyright text', 'text', 'text', 'Website', 50, 'yes', NULL, '2023-09-07 07:06:34'),
('desc_service', 'Add an extra-special touch to décor with this charming lantern that features sleek angles and a modern-edge design. A must-have for your house this holiday. Buy now to get a special discount for early bird order.', 'تفاصيل الخدمه', 'Description text of service', 'textarea', NULL, 'service', 11, 'yes', NULL, '2023-09-07 07:06:34'),
('desc_video', 'We are a team based on Cairo. Our expertise on building automation system, industrial automation, Energy management and IOT system. our value not only in our technicality but it appears in after sales service and technical support.', 'وصف لسيكشن الفيديو', 'Description Of video section', 'textarea', 'text', 'Home', 2, 'yes', NULL, '2023-09-07 07:06:34'),
('digital_description', 'With a commitment to excellence and customer\r\nsatisfaction, we are trusted in the industry for delivering\r\nexceptional results. Our comprehensive services cover\r\nconstruction, renovation, and property maintenance,\r\nhandled by skilled professionals dedicated to\r\nunlocking your property\'s true potential. With a\r\nproactive approach and a customer-centric focus, we\r\nensure your property is impeccably maintained and\r\noptimized for comfort and safety. Choose ECONCE for\r\nprofessional services and peace of mind.', 'تفاصيل الصفحه ماذا عن', 'Description of about section', 'textarea', 'text', 'about', 3, 'yes', NULL, '2023-09-07 07:06:34'),
('digital_title', 'Welcome to ECONCE – a renowned company specializing in general contracting, maintenance, and facilities management.', 'عنوان صفحه الابوت', 'Title of about ', 'text', 'text', 'About', 2, 'yes', NULL, '2023-09-07 07:06:34'),
('email', 'info@econce.ae', 'الميل', 'email', 'text', NULL, 'contact', 3, 'yes', NULL, '2023-09-07 07:06:34'),
('facebook', 'https://eg.linkedin.com/company/atech-egypt', 'فيسبوك', 'facebook', 'text', NULL, 'contact', 6, 'yes', NULL, '2023-09-07 07:06:34'),
('footer_logo', 'upload/logo/1775096802154732.png', 'لوجو الفوتر', 'Logo footer', 'image', 'image', 'website', 3, 'yes', NULL, '2023-08-24 08:03:49'),
('footer_text', 'At ECONCE, we take pride in being a leading general contracting and maintenance company,\r\noffering comprehensive services for the repair, renovation, and construction of properties.', 'فوتر تكست', 'footer text', 'textarea', 'text', 'website', 10, 'yes', NULL, '2023-09-07 07:06:34'),
('header_brand', 'We are pleased to have many\r\ntrusted partners.', 'عنوان صفحه العملاء', 'header brand section', 'textarea', NULL, 'Client', 2, 'yes', NULL, '2023-09-07 07:06:34'),
('header_service', 'Discover What\r\nOur Satisfied\r\nClients Have\r\nto Say', 'هيدر الخدمه', 'header text of service', 'textarea', NULL, 'service', 9, 'yes', NULL, '2023-09-07 07:06:34'),
('image_navbar', 'upload/logo/1775556051152054.png', 'صورة الهيدر', 'Image Navbar', 'image', 'image', 'website', 2, 'yes', NULL, '2023-08-29 06:43:23'),
('instagram', 'https://eg.linkedin.com/company/atech-egypt', 'انستجرام', 'instagram', 'text', NULL, 'contact', 9, 'yes', NULL, '2023-09-07 07:06:34'),
('linked', 'https://eg.linkedin.com/company/atech-egypt', 'لينكيد', 'linked-in', 'text', NULL, 'contact', 7, 'yes', NULL, '2023-09-07 07:06:34'),
('login_bg', 'upload/logo/1775496294206142.jpg', 'خلفيه صفحه الدخول', 'Login Background', 'image', 'image', 'admin', 10, 'yes', NULL, '2023-08-28 17:53:34'),
('logo_url', 'upload/logo/1775478036371950.png', 'صورة العنوان', 'Logo URL', 'image', 'image', 'website', 50, 'yes', NULL, '2023-08-28 13:03:22'),
('phone', '+971547777981', 'رقم التليفون', 'phone number', 'text', NULL, 'contact', 4, 'yes', NULL, '2023-09-07 07:06:34'),
('picture_service', 'upload/service/1772884041151370.jpg', 'صورة الخدمه', 'picture of service', 'image', NULL, 'service', 8, 'yes', NULL, '2023-07-30 18:52:56'),
('portfolio_text', 'We pride ourselves on our attention to detail, exceptional craftsmanship, and commitment to delivering on time and within budget.', 'بورتفوليو ', 'portfolio text', 'text', 'text', 'portfolio', 1, 'yes', NULL, '2023-09-07 07:06:34'),
('site_logo', 'upload/logo/1775571533914324.png', 'لوجو الموقع', 'site logo', 'image', NULL, 'website', 1, 'yes', NULL, '2023-08-29 10:49:28'),
('slider_button', 'Explore Here', 'زرار السليدر', 'slider button text', 'text', NULL, 'Home', 50, 'yes', NULL, '2023-09-07 07:06:34'),
('slider_link', 'https://econce.ae/service', 'لينك السليدر', 'slider button link', 'text', NULL, 'Home', 50, 'yes', NULL, '2023-09-07 07:06:34'),
('system_path', '', 'مسار الموقع', 'system path', 'url', NULL, 'admin', 10, 'yes', NULL, '2023-09-07 07:06:34'),
('title', 'About US', 'العنوان', 'tilte', 'text', '', 'about', 1, 'yes', NULL, '2023-09-07 07:06:34'),
('title_brand', 'Trusted Clients', 'عنوان الصفحه العملاء', 'title brand section', 'text', NULL, 'Client', 1, 'yes', NULL, '2023-09-07 07:06:34'),
('title_service', 'Key Services', 'عنوان للخدمه', 'title text of service', 'text', NULL, 'service', 10, 'yes', NULL, '2023-09-07 07:06:34'),
('title_team', 'The A-team of awesomeness & creative people', 'عنوان الفريق ', 'Title of about team', 'text', NULL, 'about', 4, 'yes', NULL, '2023-09-07 07:06:34'),
('title_video', 'Schneider System integrator', 'عنوان لسيكشن الفيديو', 'Title of the Video section', 'text', 'text', 'Home', 1, 'yes', NULL, '2023-09-07 07:06:34'),
('twitter', 'https://eg.linkedin.com/company/atech-egypt', 'تويتر', 'twitter', 'text', NULL, 'contact', 8, 'yes', NULL, '2023-09-07 07:06:34'),
('video_image', 'upload/setting/1776362328194864.jpg', 'صورة الفيديو ', 'Image Of Video', 'image', 'image', 'Home', 3, 'yes', NULL, '2023-09-07 04:18:49'),
('video_link', 'https://www.youtube.com/watch?v=7xZMckq8Lb0&t=3s', 'لينك الفيديو ', 'Link Of Video', 'text', 'text', 'Home', 4, 'yes', NULL, '2023-09-07 07:06:34');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` char(100) NOT NULL,
  `sub_title` char(150) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `slider_type` char(100) NOT NULL,
  `is_publish` enum('active','in-active') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `title`, `sub_title`, `desc`, `slider_type`, `is_publish`, `created_at`, `updated_at`) VALUES
(2, 'upload/home/1776025768544544.jpg', 'Schneider System Integrator', 'Schneider System Integrator Schneider System Integrator', NULL, 'home', 'active', '2023-09-03 11:09:21', '2023-09-03 11:09:21');

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE `sms` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `status` enum('pending','sent','error') NOT NULL DEFAULT 'pending',
  `response` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(191) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `gender` enum('male','female') NOT NULL,
  `birthdate` date DEFAULT NULL,
  `national_id` varchar(50) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `status` enum('active','in-active') NOT NULL DEFAULT 'active',
  `language` enum('ar','en') DEFAULT 'en',
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
(1, 'mostafa', 'mahmoud', 'mostafa@atech.com', '01124253350', NULL, 'male', '2019-05-01', '65432123456789', 'Haram', '$2y$10$eGRopYszMrg9e/mMa1xwvOlZBamNdnpuLViXX5k.l0psPEjUG.xAW', 'aaa', 'Sales', 'active', 'en', 1, NULL, '2019-05-10 10:59:04', '2023-08-31 06:35:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` char(100) NOT NULL,
  `title` char(150) NOT NULL,
  `desc` text NOT NULL,
  `is_publish` enum('active','in-active') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `image`, `name`, `title`, `desc`, `is_publish`, `created_at`, `updated_at`) VALUES
(1, 'upload/about/1775661180365400.png', 'Ahmed Abd Alrahman', 'Space Air, Founder', '<p>I am so happy to work with a team like ATECH, Expert, professional, flexible, on time and supported team.</p>', 'active', '2023-08-29 06:27:54', '2023-08-30 10:34:22'),
(2, 'upload/about/1775661209190320.png', 'Ramy Ziada', 'TAG, Founder', '<p>I have worked with the <strong>ATECH </strong>team for several years. Unflinchingly reliable and proactive from a technology.</p>', 'active', '2023-08-30 10:34:50', '2023-08-30 10:34:50'),
(3, 'upload/about/1775661237488933.png', 'Ahmed Omran', 'Hikma Senior Engineer', '<p>Always available, extremely knowledgeable, and a trusted team, they know what to do.</p>', 'active', '2023-08-30 10:35:16', '2023-08-30 10:35:16'),
(4, 'upload/about/1775661272529778.png', 'Ahmed Ali', 'Tech.Site Engineer', '<p>It&#39;s always a pleasure to work with the <strong>ATECH</strong> team. They are very supportive, helpful, and expert.</p>', 'active', '2023-08-30 10:35:50', '2023-08-30 10:35:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `type` enum('person','company') NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgot_password_code` varchar(255) DEFAULT NULL,
  `rc_copy` varchar(255) DEFAULT NULL,
  `credit` double NOT NULL DEFAULT 0,
  `lat` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `address` int(11) DEFAULT NULL,
  `address_notes` int(11) DEFAULT NULL,
  `contract_image` varchar(255) DEFAULT NULL,
  `bank_account` varchar(255) DEFAULT NULL,
  `contact_name` varchar(255) DEFAULT NULL,
  `plan_id` int(11) DEFAULT NULL,
  `status` enum('active','inactive','new') NOT NULL DEFAULT 'new',
  `verified_at` datetime DEFAULT NULL,
  `firebase_token` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
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
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `auth_api`
--
ALTER TABLE `auth_api`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `auth_session`
--
ALTER TABLE `auth_session`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7843;

--
-- AUTO_INCREMENT for table `permission_groups`
--
ALTER TABLE `permission_groups`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
