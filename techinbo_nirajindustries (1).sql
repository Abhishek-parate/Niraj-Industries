-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2026 at 04:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techinbo_nirajindustries`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_activity_log`
--

CREATE TABLE `admin_activity_log` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `detail` text DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_activity_log`
--

INSERT INTO `admin_activity_log` (`id`, `user_id`, `action`, `detail`, `ip`, `created_at`) VALUES
(1, 1, 'user_updated', 'Updated user: Admin (admin@gmail.com) role: editor', '::1', '2026-03-30 13:50:42'),
(2, 1, 'user_updated', 'Updated user: Admin (admin@gmail.com) role: editor', '::1', '2026-03-30 13:52:29'),
(3, 1, 'login', 'Login with 2FA captcha', '::1', '2026-03-30 15:52:12'),
(4, 1, 'logout', 'Admin logged out', '::1', '2026-03-30 15:54:25'),
(5, 1, 'login', 'Login with 2FA captcha', '::1', '2026-03-30 15:54:39'),
(6, 1, 'login', 'Login with 2FA captcha', '::1', '2026-03-31 11:28:45'),
(7, 2, 'user_created', 'Created user: Yash Chikahle (yashchikhale711@gmail.com) with role: admin', '::1', '2026-03-31 11:31:01'),
(8, 1, 'logout', 'Admin logged out', '::1', '2026-03-31 11:31:39'),
(9, 2, 'login', 'Login with 2FA captcha', '::1', '2026-03-31 11:32:10'),
(10, 1, 'login', 'Login with 2FA captcha', '223.185.40.166', '2026-04-01 10:28:55'),
(11, 1, 'login', 'Login with 2FA captcha', '223.185.40.166', '2026-04-01 10:38:27'),
(12, 1, 'login', 'Login with 2FA captcha', '223.185.40.166', '2026-04-01 11:44:45'),
(13, 1, 'login', 'Login with 2FA captcha', '223.185.40.166', '2026-04-01 12:51:21'),
(14, 1, 'login', 'Login with 2FA captcha', '223.185.40.166', '2026-04-01 14:29:37'),
(15, 1, 'login', 'Login with 2FA captcha', '223.185.40.166', '2026-04-01 15:05:59'),
(16, 1, 'login', 'Login with 2FA captcha', '223.185.40.166', '2026-04-01 15:08:22'),
(17, 1, 'login', 'Login with 2FA captcha', '223.185.40.166', '2026-04-01 16:08:33'),
(18, 1, 'login', 'Login with 2FA captcha', '223.185.40.166', '2026-04-01 16:24:34'),
(19, 1, 'login', 'Login with 2FA captcha', '223.185.40.166', '2026-04-01 17:26:23'),
(20, 1, 'login', 'Login with 2FA captcha', '103.136.92.206', '2026-04-02 02:21:25'),
(21, 1, 'login', 'Login with 2FA captcha', '223.185.36.56', '2026-04-02 11:19:33'),
(22, 1, 'login', 'Login with 2FA captcha', '223.185.36.56', '2026-04-02 11:19:48'),
(23, 1, 'login', 'Login with 2FA captcha', '223.185.36.56', '2026-04-02 11:31:34'),
(24, 1, 'login', 'Login with 2FA captcha', '223.185.36.56', '2026-04-02 12:29:33'),
(25, 1, 'login', 'Login with 2FA captcha', '223.185.36.56', '2026-04-02 13:24:03'),
(26, 1, 'login', 'Login with 2FA captcha', '223.185.36.56', '2026-04-02 13:29:34'),
(27, 1, 'login', 'Login with 2FA captcha', '223.185.36.56', '2026-04-02 14:01:09'),
(28, 1, 'login', 'Login with 2FA captcha', '223.185.40.209', '2026-04-02 17:04:21'),
(29, 1, 'login', 'Login with 2FA captcha', '223.185.41.92', '2026-04-03 11:23:12'),
(30, 1, 'login', 'Login with 2FA captcha', '::1', '2026-04-03 17:50:14'),
(31, 1, 'login', 'Login with 2FA captcha', '::1', '2026-04-04 12:07:43'),
(32, 1, 'logout', 'Admin logged out', '::1', '2026-04-04 12:43:50'),
(33, 1, 'login', 'Login with 2FA captcha', '::1', '2026-04-04 12:53:52'),
(34, 1, 'logout', 'Admin logged out', '::1', '2026-04-04 13:19:51'),
(35, 1, 'login', 'Login with 2FA captcha', '::1', '2026-04-04 13:20:17'),
(36, 1, 'logout', 'Admin logged out', '::1', '2026-04-04 14:10:06'),
(37, 1, 'login', 'Login with 2FA captcha', '::1', '2026-04-04 14:11:11'),
(38, 1, 'blog_created', 'Blog created: wvfbgfh', '::1', '2026-04-04 19:04:37'),
(39, 1, 'blog_updated', 'Blog updated: wvfbgfh', '::1', '2026-04-04 19:05:02'),
(40, 1, 'blog_deleted', 'Blog deleted: Top 5 High-Strength Steel Grades for Commercial Construction', '::1', '2026-04-04 19:05:07'),
(41, 1, 'logout', 'Admin logged out', '::1', '2026-04-04 19:13:56'),
(42, 1, 'login', 'Login with 2FA captcha', '::1', '2026-04-04 19:14:24'),
(43, 1, 'blog_updated', 'Blog updated: wvfbgfh', '::1', '2026-04-04 19:19:00');

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('superadmin','admin','editor','viewer') NOT NULL DEFAULT 'admin',
  `avatar` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `two_fa_enabled` tinyint(1) NOT NULL DEFAULT 0,
  `last_login` datetime DEFAULT NULL,
  `last_login_ip` varchar(45) DEFAULT NULL,
  `login_count` int(11) NOT NULL DEFAULT 0,
  `notes` text DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `reset_token` varchar(255) DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `name`, `email`, `password`, `role`, `avatar`, `phone`, `status`, `two_fa_enabled`, `last_login`, `last_login_ip`, `login_count`, `notes`, `updated_at`, `reset_token`, `reset_expires`, `created_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$7LOSNnhH61YkPmfaA9J2gOD8Hr8qQ9hMtyvnkLgXZbCxAVij00dry', 'superadmin', NULL, '', 1, 1, '2026-04-04 19:14:24', '::1', 29, '', '2026-03-30 13:52:29', NULL, NULL, '2026-03-26 09:21:34'),
(2, 'Yash Chikahle', 'yashchikhale711@gmail.com', '$2y$10$LSy9tMTjoLHSOIpy5iq7CeV1Zk8EpDCJ9SR0hzo4Q4rf9wNed7xhu', 'admin', NULL, '9860303965', 1, 1, '2026-03-31 11:32:10', '::1', 1, 'Managing Doctors', '2026-03-31 11:31:01', NULL, NULL, '2026-03-31 06:01:01');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(280) NOT NULL,
  `excerpt` text DEFAULT NULL,
  `content` longtext NOT NULL,
  `image` varchar(255) DEFAULT 'assets/img/blog/blog-01.jpg',
  `image_alt` varchar(255) DEFAULT NULL,
  `categories` int(10) UNSIGNED DEFAULT NULL,
  `tags` varchar(500) DEFAULT NULL COMMENT 'comma-separated tags',
  `views` int(10) UNSIGNED DEFAULT 0,
  `comments` int(10) UNSIGNED DEFAULT 0,
  `is_published` tinyint(1) DEFAULT 1,
  `published_at` date NOT NULL,
  `reading_time` tinyint(3) UNSIGNED DEFAULT NULL,
  `meta_title` varchar(70) DEFAULT NULL,
  `meta_description` varchar(180) DEFAULT NULL,
  `focus_keyword` varchar(100) DEFAULT NULL,
  `canonical_url` varchar(500) DEFAULT NULL,
  `og_title` varchar(200) DEFAULT NULL,
  `og_description` text DEFAULT NULL,
  `og_image` varchar(500) DEFAULT NULL,
  `og_type` varchar(50) DEFAULT 'article',
  `twitter_title` varchar(200) DEFAULT NULL,
  `twitter_description` text DEFAULT NULL,
  `twitter_card` varchar(50) DEFAULT 'summary_large_image',
  `robots_meta` varchar(50) DEFAULT 'index,follow',
  `schema_type` varchar(50) DEFAULT 'BlogPosting',
  `schema_json` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `excerpt`, `content`, `image`, `image_alt`, `categories`, `tags`, `views`, `comments`, `is_published`, `published_at`, `reading_time`, `meta_title`, `meta_description`, `focus_keyword`, `canonical_url`, `og_title`, `og_description`, `og_image`, `og_type`, `twitter_title`, `twitter_description`, `twitter_card`, `robots_meta`, `schema_type`, `schema_json`, `created_at`, `updated_at`) VALUES
(1, 'Top Industrial Valves Used in Commercial Projects', 'top-industrial-valves', 'Learn about the most commonly used industrial valves in commercial systems.', '<p>Industrial valves play a crucial role in controlling fluid flow in commercial systems. Ball valves, butterfly valves, and gate valves are widely used.</p>', 'assets/img/blog/blog-01.png', 'Industrial valves image', 3, 'valves,industrial,commercial', 121, 5, 1, '2026-04-04', 5, 'Best Industrial Valves Guide', 'Explore top industrial valves used in commercial applications.', 'industrial valves', '/blog/top-industrial-valves', 'Top Industrial Valves', 'Guide on industrial valves', 'assets/img/blog/blog-01.png', 'website', 'Industrial Valves Guide', 'Learn about valves', 'summary', 'index,follow', 'Article', '{\"@context\":\"https://schema.org\",\"@type\":\"Article\",\"headline\":\"Industrial Valves\"}', '2026-04-04 14:05:09', '2026-04-04 14:09:20'),
(2, 'Understanding Boiler Tubes in Industries', 'boiler-tubes-guide', 'Complete guide about boiler tubes and their applications.', '<p>Boiler tubes are essential components in heat exchange systems. They are designed to withstand high pressure and temperature.</p>', 'assets/img/blog/Ball-Valve.png', 'Boiler tubes image', 3, 'boiler,tubes,industry', 90, 3, 1, '2026-04-04', 6, 'Boiler Tubes Guide', 'Learn about boiler tubes and their uses.', 'boiler tubes', '/blog/boiler-tubes-guide', 'Boiler Tubes', 'All about boiler tubes', 'assets/img/blog/blog-02.png', 'website', 'Boiler Tubes Info', 'Boiler tubes explained', 'summary', 'index,follow', 'Article', '{\"@context\":\"https://schema.org\",\"@type\":\"Article\"}', '2026-04-04 14:05:09', '2026-04-04 14:06:02'),
(3, 'wvfbgfh', 'wvfbgfh', 'w1s2d3efgvrtb', 'q', 'assets/img/blog/Boiler-Tubes.png', 'sdwgfrt', 3, 'aqsdwefr', 2, 0, 1, '2026-04-04', 6, '123w', 'aqsxcdvs gf', '', 'ASXDCVF', 'zaxcsdvf', 'adsvfg', 'assets/img/blog/wvfbgfh-69d116cbf09b6.webp', 'website', 'ZAXCSDF', 'agfrdtgf', 'summary', 'index,follow', 'Article', '{\"@context\":\"https://schema.org\",\"@type\":\"Article\",\"headline\":\"wvfbgfh\",\"description\":\"aqsxcdvs gf\",\"image\":\"http://localhost/nirajindustries/assets/img/blog/wvfbgfh-69d116cbf09b6.webp\",\"author\":{\"@type\":\"Organization\",\"name\":\"Niraj Industries\"},\"publisher\":{\"@type\":\"Organization\",\"name\":\"Niraj Industries\"},\"datePublished\":\"2026-04-04T00:00\",\"dateModified\":\"2026-04-04 15:49:00\",\"url\":\"ASXDCVF\",\"keywords\":\"aqsdwefr\"}', '2026-04-04 13:34:37', '2026-04-04 14:07:11'),
(4, 'Ball Valve vs Butterfly Valve', 'ball-vs-butterfly-valve', 'Comparison between ball valves and butterfly valves.', '<p>Ball valves provide tight sealing, while butterfly valves are lightweight and cost-effective.</p>', 'assets/img/blog/Boiler-Mounting.png', 'Valve comparison', 3, 'ball valve,butterfly valve', 60, 1, 1, '2026-04-04', 5, 'Ball vs Butterfly Valve', 'Compare ball and butterfly valves', 'valve comparison', '/blog/ball-vs-butterfly-valve', 'Valve Comparison', 'Ball vs Butterfly', 'assets/img/blog/blog-04.png', 'website', 'Valve Guide', 'Comparison guide', 'summary', 'index,follow', 'Article', '{\"@context\":\"https://schema.org\",\"@type\":\"Article\"}', '2026-04-04 14:05:09', '2026-04-04 14:06:46'),
(5, 'Boiler Mountings Explained', 'boiler-mountings', 'Important boiler mountings and their functions.', '<p>Boiler mountings ensure safe operation of boilers. These include safety valves, pressure gauges, etc.</p>', 'assets/img/blog/Bras-Pipe-Fittings.png', 'Boiler mountings', 3, 'boiler,mountings', 85, 4, 1, '2026-04-04', 6, 'Boiler Mountings Guide', 'Learn about boiler mountings', 'boiler mountings', '/blog/boiler-mountings', 'Boiler Guide', 'Mountings explained', 'assets/img/blog/blog-05.png', 'website', 'Boiler Info', 'Boiler details', 'summary', 'index,follow', 'Article', '{\"@context\":\"https://schema.org\",\"@type\":\"Article\"}', '2026-04-04 14:05:09', '2026-04-04 14:07:33'),
(6, 'Commercial Piping Systems Overview', 'commercial-piping-systems', 'Overview of piping systems used in industries.', '<p>Commercial piping systems include steel, copper, and PVC pipes used across industries.</p>', 'assets/img/blog/Butterfly-Valve.png', 'Piping systems', 3, 'piping,commercial', 110, 6, 1, '2026-04-04', 7, 'Piping Systems Guide', 'Complete piping systems overview', 'commercial piping', '/blog/commercial-piping-systems', 'Piping Systems', 'Industrial piping guide', 'assets/img/blog/blog-06.png', 'website', 'Piping Info', 'All about piping', 'summary', 'index,follow', 'Article', '{\"@context\":\"https://schema.org\",\"@type\":\"Article\"}', '2026-04-04 14:05:09', '2026-04-04 14:08:00'),
(8, 'Brass Pipe Fittings: Uses & Benefits', 'brass-pipe-fittings', 'Why brass fittings are widely used in commercial pipelines.', '<p>Brass fittings offer excellent corrosion resistance and durability, making them ideal for plumbing systems.</p>', 'assets/img/blog/Butterfly-Valve.png', 'Brass fittings', 3, 'brass,fittings,pipes', 75, 2, 1, '2026-04-04', 4, 'Brass Pipe Fittings', 'Guide on brass fittings', 'brass pipe fittings', '/blog/brass-pipe-fittings', 'Brass Fittings', 'Benefits of brass fittings', 'assets/img/blog/blog-03.png', 'website', 'Brass Fittings Guide', 'Uses of brass fittings', 'summary', 'index,follow', 'Article', '{\"@context\":\"https://schema.org\",\"@type\":\"Article\"}', '2026-04-04 14:05:09', '2026-04-04 14:08:11');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(120) NOT NULL,
  `sort_order` tinyint(3) UNSIGNED DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `slug`, `sort_order`) VALUES
(1, 'Construction', 'construction', 1),
(2, 'Industrial', 'industrial', 2),
(3, 'Electrical', 'electrical', 3),
(4, 'Plumbing', 'plumbing', 4),
(5, 'Safety', 'safety', 5),
(6, 'Product Guide', 'product-guide', 6);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(120) NOT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `icon`, `description`, `created_at`) VALUES
(1, 'Orthopedics', 'orthopedics', 'flaticon-bone', 'Expert care for bones, joints, and musculoskeletal conditions.', '2026-03-26 09:21:34'),
(2, 'Gynecology', 'gynecology', 'flaticon-baby', 'Comprehensive women\'s reproductive health and obstetric services.', '2026-03-26 09:21:34'),
(3, 'Pregnancy Care', 'pregnancy-care', 'flaticon-pregnant', 'Antenatal and postnatal care for mother and baby.', '2026-03-26 09:21:34'),
(4, 'Surgery', 'surgery', 'flaticon-surgery', 'Advanced open and laparoscopic surgical procedures.', '2026-03-26 09:21:34'),
(5, 'Spine Care', 'spine-care', 'flaticon-spine', 'Diagnosis and treatment of spine and disc disorders.', '2026-03-26 09:21:34'),
(6, 'Women\'s Health', 'womens-health', NULL, 'Hormonal health, PCOS/PCOD, and fertility care.', '2026-03-26 09:21:34');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `designation` varchar(200) DEFAULT NULL,
  `specialty` varchar(150) DEFAULT NULL,
  `satisfaction_rate` int(11) DEFAULT 0,
  `feedback_count` int(11) DEFAULT 0,
  `location` varchar(255) DEFAULT NULL,
  `consultation_fee` varchar(100) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `education_json` longtext DEFAULT NULL,
  `experience_json` longtext DEFAULT NULL,
  `awards_json` longtext DEFAULT NULL,
  `specializations` varchar(500) DEFAULT NULL,
  `map_iframe` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT 'assets/img/patients/default.jpg',
  `profile_url` varchar(255) DEFAULT 'doctor-profile.html',
  `excerpt` text DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `views` int(11) DEFAULT 0,
  `is_published` tinyint(1) DEFAULT 1,
  `published_at` datetime DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `focus_keyword` varchar(255) DEFAULT NULL,
  `canonical_url` varchar(255) DEFAULT NULL,
  `og_title` varchar(255) DEFAULT NULL,
  `og_description` text DEFAULT NULL,
  `og_image` varchar(255) DEFAULT NULL,
  `og_type` varchar(50) DEFAULT 'profile',
  `twitter_title` varchar(255) DEFAULT NULL,
  `twitter_description` text DEFAULT NULL,
  `twitter_card` varchar(50) DEFAULT 'summary_large_image',
  `robots_meta` varchar(50) DEFAULT 'index, follow',
  `schema_type` varchar(100) DEFAULT 'Physician',
  `schema_json` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `feature_image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `slug`, `designation`, `specialty`, `satisfaction_rate`, `feedback_count`, `location`, `consultation_fee`, `bio`, `education_json`, `experience_json`, `awards_json`, `specializations`, `map_iframe`, `photo`, `profile_url`, `excerpt`, `content`, `tags`, `views`, `is_published`, `published_at`, `meta_title`, `meta_description`, `focus_keyword`, `canonical_url`, `og_title`, `og_description`, `og_image`, `og_type`, `twitter_title`, `twitter_description`, `twitter_card`, `robots_meta`, `schema_type`, `schema_json`, `created_at`, `updated_at`, `feature_image`) VALUES
(8, 'Dr. Rahul Agrawal', 'dr-rahul-agrawal', 'MBBS, MS (Orthopedics)', 'Orthopedic Surgeon', 98, 0, 'Itwari, Nagpur, Maharashtra 440002', '', 'Dr. Rahul Agrawal is a highly experienced and dedicated Orthopedic Surgeon \r\nat RK Hospital, Nagpur, specializing in the diagnosis and treatment of bone, \r\njoint, and musculoskeletal conditions. Known for his precision, clinical \r\nexpertise, and compassionate approach, Dr. Agrawal has earned the trust of \r\nthousands of patients across Nagpur and the surrounding regions. His \r\nphilosophy is simple — restore mobility, relieve pain, and help every patient \r\nreturn to an active, fulfilling life.\r\n\r\nFracture Treatment\r\nDr. Agrawal provides expert, evidence-based management for all types of bone \r\nfractures — from hairline stress fractures to complex compound and \r\nmulti-fragmented injuries. Using advanced diagnostic imaging and proven \r\northopedic protocols, he designs individualized treatment plans that accelerate \r\nhealing, minimize complications, and reduce recovery time. Both conservative \r\nand surgical fracture management are handled with equal precision and care.\r\n\r\nJoint Pain Diagnosis\r\nChronic or sudden joint pain can severely limit daily life. Dr. Agrawal \r\nspecializes in accurately diagnosing the underlying causes of joint discomfort \r\nacross the knee, hip, shoulder, elbow, wrist, and ankle. Through thorough \r\nclinical evaluation and advanced investigations, he identifies conditions \r\nincluding arthritis, bursitis, ligament injuries, cartilage damage, and \r\ndegenerative joint disease — then builds targeted, effective treatment plans \r\nfor meaningful, lasting relief.\r\n\r\nBone Injury Care & Post-Injury Rehabilitation\r\nFrom sports accidents and workplace injuries to age-related bone degeneration, \r\nDr. Agrawal\'s bone injury care covers the full spectrum of orthopedic trauma. \r\nHe adopts a conservative-first approach — prioritizing physiotherapy, splinting, \r\nand medical management before recommending surgical intervention. Beyond \r\ntreatment, Dr. Agrawal places strong emphasis on Post-Injury Rehabilitation, \r\nworking closely with physiotherapy teams to design personalized recovery \r\nprograms that restore full strength, flexibility, and function safely and \r\nefficiently.\r\n\r\nOutpatient Orthopedic Care\r\nDr. Agrawal leads RK Hospital\'s outpatient orthopedic department, ensuring \r\nthat residents of Nagpur have access to world-class orthopedic consultations \r\nwithout unnecessary hospitalization. His efficient outpatient model is \r\ndesigned to be affordable, accessible, and patient-friendly — making expert \r\nbone and joint care available to everyone who needs it.\r\n\r\nIf you are experiencing bone pain, joint discomfort, or recovering from an \r\ninjury, Dr. Rahul Agrawal at RK Hospital, Itwari, Nagpur, is here to help. \r\nBook your consultation today and take the first step toward a stronger, \r\npain-free life.', '[]', '[]', '[]', 'Fracture Treatment, Joint Pain Diagnosis, Bone Injury Care, Post-Injury Rehabilitation, Outpatient Orthopedic Care, Sports Injury Management, Musculoskeletal Disorders, Trauma Care', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.0756953546743!2d79.11365600244474!3d21.149385686609815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c786c015d623%3A0x5162afcdb26d73f5!2sDr.%20Rahul%20Agrawal!5e0!3m2!1sen!2sin!4v1775025515467!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'assets/img/doctors/dr-rahul-agrawal-69ce13ff9f639.webp', 'doctor-profile.html', 'Dr. Rahul Agrawal is a trusted Orthopedic Surgeon at RK Hospital, Aurangabad, specializing in fracture treatment, joint pain diagnosis, and bone injury care.', NULL, 'orthopedic surgeon nagpur, fracture treatment nagpur, joint pain specialist nagpur, bone injury care, post injury rehabilitation, sports injury doctor nagpur, knee pain treatment nagpur, outpatient orthopedic care, best orthopedic doctor itwari nagpur', 0, 1, '2026-04-02 00:00:00', 'Dr. Rahul Agrawal – Orthopedic Surgeon in Nagpur', 'Consult Dr. Rahul Agrawal, expert Orthopedic Surgeon at RK Hospital, Itwari, Nagpur. Specialist in fracture treatment, joint pain & bone injury care. Book now.', 'orthopedic surgeon in Nagpur', 'https://rkhospital.com/doctors/dr-rahul-agrawal', 'Dr. Rahul Agrawal', 'Dr. Rahul Agrawal is a trusted Orthopedic Surgeon at RK Hospital, Aurangabad, specializing in fracture treatment, joint pain diagnosis, and bone injury care.', 'assets/img/doctors/dr-rahul-agrawal-69ce13ff9f639.webp', 'profile', 'Dr. Rahul Agrawal', 'Dr. Rahul Agrawal is a trusted Orthopedic Surgeon at RK Hospital, Aurangabad, specializing in fracture treatment, joint pain diagnosis, and bone injury care.', 'summary_large_image', 'index,follow', 'Physician', '{\"@context\":\"https://schema.org\",\"@type\":\"Physician\",\"name\":\"Dr. Rahul Agrawal\",\"description\":\"Consult Dr. Rahul Agrawal, expert Orthopedic Surgeon at RK Hospital, Itwari, Nagpur. Specialist in fracture treatment, joint pain & bone injury care. Book now.\",\"image\":\"assets/img/doctors/dr-rahul-agrawal-69ce13ff9f639.webp\",\"url\":\"https://rkhospital.com/doctors/dr-rahul-agrawal\",\"medicalSpecialty\":\"Orthopedic Surgeon\"}', '2026-04-01 07:27:00', '2026-04-02 07:00:15', '/assets/img/doctors/rahulbanner.webp'),
(9, 'Dr. Priyanka Agrawal', 'dr-priyanka-agrawal', 'MBBS, MD (Obstetrics & Gynecology)', 'Gynecologist & Obstetrician', 99, 0, 'Itwari, Nagpur, Maharashtra 440002', '', 'Dr. Priyanka Agrawal is a highly skilled and compassionate Gynecologist and \r\nObstetrician at RK Hospital, Nagpur, committed to delivering comprehensive, \r\nevidence-based women\'s healthcare at every stage of life. From adolescent \r\ngynecology and reproductive health to complex obstetric care and fertility \r\ntreatment, Dr. Agrawal brings together advanced clinical expertise and a \r\ndeeply empathetic, patient-first approach. She is one of Nagpur\'s most \r\ntrusted OB-GYN specialists, known for making every patient feel heard, \r\nrespected, and genuinely cared for.\r\n\r\nObstetrics & Gynecology\r\nAs a board-certified Obstetrician-Gynecologist, Dr. Agrawal manages all \r\naspects of women\'s reproductive health — including routine gynecological \r\nexaminations, cervical screenings, menstrual health management, and complete \r\npregnancy care. Her holistic practice ensures that women receive seamless, \r\ncontinuous care from a provider who truly understands their unique needs.\r\n\r\nCesarean (C-Section) Delivery\r\nDr. Agrawal is proficient in both planned and emergency Cesarean deliveries, \r\nperforming C-sections with precision and an unwavering commitment to the \r\nsafety of mother and newborn. She provides comprehensive pre-operative \r\ncounseling, skilled surgical care, and attentive postpartum monitoring to \r\nensure a smooth, complete recovery for every patient.\r\n\r\nHigh-Risk Pregnancy Management\r\nManaging a high-risk pregnancy demands specialized expertise and vigilant \r\ncare. Dr. Agrawal provides individualized management for pregnancies \r\ncomplicated by gestational diabetes, pregnancy-induced hypertension, \r\npreeclampsia, placenta previa, multiple pregnancies (twins/triplets), and \r\nprevious uterine surgeries. Through close monitoring and timely, targeted \r\ninterventions, she consistently achieves the best possible outcomes for \r\nboth mother and baby.\r\n\r\nHormonal Imbalance Treatment\r\nDr. Agrawal specializes in diagnosing and treating a wide range of hormonal \r\ndisorders in women, including Polycystic Ovary Syndrome (PCOS), irregular \r\nor absent menstrual cycles, endometriosis, thyroid-related reproductive \r\nissues, and menopausal symptoms. Her treatment plans integrate medical \r\ntherapy with practical lifestyle guidance for sustainable, long-term \r\nhormonal balance and overall wellbeing.\r\n\r\nInfertility Evaluation & Treatment\r\nFor couples facing the challenges of infertility, Dr. Agrawal offers \r\nthorough, compassionate, and results-driven fertility care. She conducts \r\ncomprehensive evaluations — including hormonal profiling, ovarian reserve \r\ntesting, tubal assessments, and coordinated semen analysis — to identify \r\nroot causes. Treatment options include targeted medical therapy, ovulation \r\ninduction, and IUI guidance, with timely referrals for advanced reproductive \r\ntechnologies (ART/IVF) when required.\r\n\r\nFamily Planning & Contraception Counseling\r\nDr. Agrawal believes every woman deserves the right to make informed, \r\nconfident decisions about her reproductive future. She provides personalized \r\ncontraception counseling covering oral contraceptive pills, intrauterine \r\ndevices (IUDs), hormonal implants, barrier methods, and emergency \r\ncontraception — ensuring every recommendation aligns with the patient\'s \r\nhealth profile, preferences, and long-term reproductive goals.\r\n\r\nWhether you are planning a pregnancy, managing a gynecological condition, \r\nor seeking trusted reproductive health guidance, Dr. Priyanka Agrawal at \r\nRK Hospital, Itwari, Nagpur, is here for you. Book your appointment today \r\nand experience women\'s healthcare built on expertise, empathy, and excellence.', '[]', '[]', '[]', 'Obstetrics & Gynecology, Cesarean (C-Section) Delivery, High-Risk Pregnancy Management, Hormonal Imbalance Treatment, Infertility Evaluation & Treatment, Family Planning & Contraception Counseling, PCOS Treatment, Women\'s Reproductive Health', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.0751452020872!2d79.11106467430966!3d21.149407583625667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c7627f91e951%3A0xc5092704d82a04af!2sDr.%20Priyanka%20Jain%20Agrawal!5e0!3m2!1sen!2sin!4v1775029603105!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'assets/img/doctors/dr-priyanka-agrawal-69ce13f382d5c.webp', 'doctor-profile.html', 'Dr. Priyanka Agrawal is a compassionate Gynecologist & Obstetrician at RK Hospital, Aurangabad, specializing in high-risk pregnancy, infertility & women\'s health.', NULL, 'gynecologist nagpur, obstetrician nagpur, c-section delivery nagpur, high risk pregnancy management, hormonal imbalance treatment nagpur, infertility treatment nagpur, family planning counseling, PCOS doctor nagpur, women\'s health specialist itwari, best', 0, 1, '2026-04-02 00:00:00', 'Dr. Priyanka Agrawal – Gynecologist in Nagpur', 'Consult Dr. Priyanka Agrawal, trusted Gynecologist at RK Hospital, Itwari, Nagpur. Expert in C-section, high-risk pregnancy, infertility & women\'s health care.', 'gynecologist in Nagpur', 'https://rkhospital.com/doctors/dr-priyanka-agrawal', 'Dr. Priyanka Agrawal – Gynecologist in Nagpur', 'Consult Dr. Priyanka Agrawal, trusted Gynecologist at RK Hospital, Itwari, Nagpur. Expert in C-section, high-risk pregnancy, infertility & women\'s health care.', 'assets/img/doctors/dr-priyanka-agrawal-69ce13f382d5c.webp', 'profile', 'Dr. Priyanka Agrawal – Gynecologist in Nagpur', 'Consult Dr. Priyanka Agrawal, trusted Gynecologist at RK Hospital, Itwari, Nagpur. Expert in C-section, high-risk pregnancy, infertility & women\'s health care.', 'summary_large_image', 'index,follow', 'Physician', '{\"@context\":\"https://schema.org\",\"@type\":\"Physician\",\"name\":\"Dr. Priyanka Agrawal\",\"description\":\"Consult Dr. Priyanka Agrawal, trusted Gynecologist at RK Hospital, Itwari, Nagpur. Expert in C-section, high-risk pregnancy, infertility & women\'s health care.\",\"image\":\"assets/img/doctors/dr-priyanka-agrawal-69ce13f382d5c.webp\",\"url\":\"https://rkhospital.com/doctors/dr-priyanka-agrawal\",\"medicalSpecialty\":\"Gynecologist & Obstetrician\"}', '2026-04-01 07:48:22', '2026-04-02 07:00:03', '/assets/img/doctors/priyankabannar.webp');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_services`
--

CREATE TABLE `doctor_services` (
  `doctor_id` int(10) UNSIGNED NOT NULL,
  `service_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `full_description` text DEFAULT NULL,
  `specifications` text DEFAULT NULL,
  `features` text DEFAULT NULL,
  `applications` text DEFAULT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `sku` varchar(100) DEFAULT NULL,
  `weight` varchar(50) DEFAULT NULL,
  `dimensions` varchar(100) DEFAULT NULL,
  `material` varchar(150) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `warranty` varchar(100) DEFAULT NULL,
  `certifications` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `image4` varchar(255) DEFAULT NULL,
  `in_stock` tinyint(1) NOT NULL DEFAULT 1,
  `availability` varchar(100) DEFAULT 'In Stock',
  `delivery_info` varchar(255) DEFAULT 'Pan India Delivery Available',
  `country_of_origin` varchar(100) DEFAULT 'India',
  `tags` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `badge` varchar(50) DEFAULT NULL,
  `badge_type` varchar(50) DEFAULT NULL,
  `moq` varchar(100) DEFAULT NULL,
  `rating` decimal(2,1) DEFAULT 4.5,
  `reviews` int(11) DEFAULT 0,
  `is_active` tinyint(1) DEFAULT 1,
  `sort_order` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `meta_title` varchar(70) DEFAULT NULL,
  `meta_description` varchar(180) DEFAULT NULL,
  `focus_keyword` varchar(150) DEFAULT NULL,
  `canonical_url` varchar(500) DEFAULT NULL,
  `og_title` varchar(255) DEFAULT NULL,
  `og_description` varchar(300) DEFAULT NULL,
  `og_image` varchar(255) DEFAULT NULL,
  `og_type` varchar(30) DEFAULT 'product',
  `twitter_title` varchar(255) DEFAULT NULL,
  `twitter_description` varchar(300) DEFAULT NULL,
  `twitter_card` varchar(30) DEFAULT 'summary_large_image',
  `robots_meta` varchar(30) DEFAULT 'index,follow',
  `schema_type` varchar(50) DEFAULT 'Product',
  `schema_json` longtext DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `category`, `description`, `full_description`, `specifications`, `features`, `applications`, `brand`, `sku`, `weight`, `dimensions`, `material`, `color`, `warranty`, `certifications`, `image2`, `image3`, `image4`, `in_stock`, `availability`, `delivery_info`, `country_of_origin`, `tags`, `image`, `badge`, `badge_type`, `moq`, `rating`, `reviews`, `is_active`, `sort_order`, `created_at`, `meta_title`, `meta_description`, `focus_keyword`, `canonical_url`, `og_title`, `og_description`, `og_image`, `og_type`, `twitter_title`, `twitter_description`, `twitter_card`, `robots_meta`, `schema_type`, `schema_json`, `updated_at`) VALUES
(1, 'Heavy Duty Steel Bars', 'heavy-duty-steel-bars', 'construction', 'High tensile strength TMT steel bars for residential and commercial construction. ISI certified.', 'Niraj Industries Heavy Duty Steel Bars are manufactured using the highest grade raw materials, conforming to IS 1786 standards. These TMT (Thermo-Mechanically Treated) steel bars offer superior tensile strength, excellent bendability, and outstanding corrosion resistance — making them the preferred choice for residential, commercial, and industrial construction projects across India.', 'Grade: Fe 500D|Standard: IS 1786|Tensile Strength: 545 N/mm²|Yield Strength: 500 N/mm²|Elongation: 16% min|Available Sizes: 8mm, 10mm, 12mm, 16mm, 20mm, 25mm, 32mm|Length: 12 meters standard', 'Superior corrosion resistance|Excellent weldability without pre-heating|High ductility and bendability|Earthquake resistant structure|Uniform ribbing for better bonding|Low carbon equivalent|Consistent quality batch to batch', 'Residential buildings|Commercial complexes|Bridges and flyovers|Industrial structures|Underground foundations|Retaining walls|Pre-stressed concrete structures', 'Niraj Industries', 'NI-STL-TMT-001', '7.85 kg/meter (varies by diameter)', '12 meters length | 8mm to 32mm diameter', 'High Grade Steel (Fe 500D)', 'Silver Grey', '5 Years Manufacturer Warranty', 'ISI Certified|IS 1786|BIS Approved', NULL, NULL, NULL, 1, 'In Stock', 'Pan India Delivery | Dispatched within 2-3 business days', 'India', 'steel bars,tmt bars,construction steel,reinforcement bars,building material', 'assets/img/all-images/products/Gate-Valve-1.png', 'Bestseller', 'best', '1 Ton', 5.0, 128, 1, 1, '2026-04-03 11:40:11', 'Heavy Duty Steel Bars | Niraj Industries Nagpur', 'Buy heavy duty steel bars in Nagpur at best price. High quality construction steel with fast delivery.', 'steel bars nagpur', 'https://nirajindustries.com/products/heavy-duty-steel-bars', 'Heavy Duty Steel Bars', 'High quality steel bars for construction.', 'assets/img/products/steel-bars.jpg', 'product', 'Steel Bars Nagpur', 'Best steel bars in Nagpur', 'summary_large_image', 'index,follow', 'Product', '{\"@type\":\"Product\",\"name\":\"Steel Bars\"}', '2026-04-04 13:47:20'),
(2, 'Portland Cement 53 Grade', 'portland-cement-53-grade', 'construction', 'Premium 53 grade OPC cement offering superior compressive strength for all structural applications.', 'Niraj Industries Portland Cement 53 Grade is a premium quality OPC (Ordinary Portland Cement) manufactured under strict quality control. Conforming to IS 269, this cement provides exceptional early and ultimate strength, making it ideal for high-performance concrete applications. Our cement guarantees consistent setting time, superior workability, and long-term durability for all construction needs.', 'Grade: OPC 53|Standard: IS 269|Compressive Strength (3 days): 27 N/mm² min|Compressive Strength (7 days): 37 N/mm² min|Compressive Strength (28 days): 53 N/mm² min|Setting Time (Initial): 30 min min|Setting Time (Final): 600 min max|Fineness: 225 m²/kg min|Packing: 50 kg bags', 'High early strength development|Superior workability and consistency|Low heat of hydration|Excellent sulfate resistance|Uniform fineness for smooth finish|Ideal for RCC and prestressed work|Long shelf life with proper storage', 'RCC construction|Pre-stressed concrete|Bridges and heavy structures|Industrial floors|Precast concrete products|High-rise buildings|Foundation works', 'Niraj Industries', 'NI-CEM-OPC53-002', '50 kg per bag', 'Standard 50kg HDPE bag', 'Ordinary Portland Cement Grade 53', 'Grey', 'Best before 3 months from manufacture date', 'ISI Certified|IS 269|BIS Approved|ISO 9001:2015', NULL, NULL, NULL, 1, 'In Stock', 'Pan India Delivery | Bulk orders dispatched within 1-2 business days', 'India', 'cement,opc 53,portland cement,construction material,binding material', 'assets/img/all-images/products/SEAMLESS-PIPES-11.png', 'New', 'new', '100 Bags', 4.0, 94, 1, 2, '2026-04-03 11:40:11', 'Portland Cement 53 Grade | Niraj Industries', 'Buy OPC 53 grade cement in Nagpur. High strength cement for construction.', 'cement nagpur', 'https://nirajindustries.com/products/portland-cement-53-grade', 'Portland Cement', 'High strength cement for buildings.', 'assets/img/products/cement-53.jpg', 'product', 'Cement Nagpur', 'Best OPC cement available', 'summary_large_image', 'index,follow', 'Product', '{\"@type\":\"Product\",\"name\":\"Cement\"}', '2026-04-04 13:47:20'),
(3, 'Industrial Safety Helmets', 'industrial-safety-helmets', 'industrial', 'IS 2925 certified hard hats with superior impact protection for industrial and construction workers.', 'Niraj Industries Industrial Safety Helmets are designed and manufactured as per IS 2925 standards, providing maximum head protection in demanding industrial environments. Engineered with high-impact ABS shell and a comfortable suspension system, these helmets offer all-day comfort while ensuring superior protection against falling objects, electrical hazards, and impact forces.', 'Standard: IS 2925|Shell Material: High-Density ABS|Suspension: 4-point ratchet|Weight: 380g approx|Temperature Range: -10°C to +50°C|Electrical Rating: Up to 440V AC|Impact Absorption: As per IS 2925|Available Colors: White, Yellow, Red, Blue, Green', 'High-impact resistant ABS shell|4-point adjustable ratchet suspension|Ventilation slots for airflow|UV stabilized material|Sweat-absorbent foam lining|Compatible with ear muffs and face shields|Meets IS 2925 & EN 397 standards', 'Construction sites|Mining operations|Manufacturing plants|Chemical industries|Power plants and utilities|Oil & Gas facilities|Infrastructure projects', 'Niraj Industries', 'NI-SAF-HLM-003', '380 grams', 'One size fits all (adjustable 52-63 cm)', 'High Density ABS Plastic', 'Available in White, Yellow, Red, Blue, Green', '2 Years from date of manufacture', 'IS 2925 Certified|EN 397|ISI Mark|CE Marked', NULL, NULL, NULL, 1, 'In Stock', 'Pan India Delivery | Dispatched within 48 hours', 'India', 'safety helmet,hard hat,industrial helmet,head protection,PPE', 'assets/img/all-images/products/Fire-Fighting-Accsesories.png', 'Hot', 'hot', '50 Pcs', 4.5, 76, 1, 3, '2026-04-03 11:40:11', 'UPVC Plumbing Pipes | Niraj Industries', 'Buy UPVC plumbing pipes in Nagpur. Durable and high pressure pipes.', 'upvc pipes nagpur', 'https://nirajindustries.com/products/upvc-plumbing-pipes-class-c', 'UPVC Pipes', 'Best quality plumbing pipes.', 'assets/img/products/upvc-pipes.jpg', 'product', 'UPVC Pipes', 'Top plumbing pipes in Nagpur', 'summary_large_image', 'index,follow', 'Product', '{\"@type\":\"Product\",\"name\":\"UPVC Pipes\"}', '2026-04-04 13:47:20'),
(4, 'Copper Wiring Cables', 'copper-wiring-cables', 'electrical', 'FRLS grade copper conductor cables with fire-retardant insulation. Available in 1.5 to 10 sq mm sizes.', 'Niraj Industries Copper Wiring Cables are FRLS (Flame Retardant Low Smoke) grade cables designed for safe and reliable electrical installations. Manufactured with 99.97% pure electrolytic copper conductors, these cables offer superior conductivity, minimal power loss, and outstanding fire safety properties — critical for residential, commercial, and industrial electrical systems.', 'Type: FRLS PVC Insulated|Conductor: 99.97% Electrolytic Copper|Voltage Grade: 1100V|Standard: IS 694|Temperature Rating: 70°C continuous|Available Sizes: 1.0 sq mm to 10 sq mm|Insulation: FR-PVC|Color Coding: Red, Yellow, Blue, Black, Green', '99.97% pure electrolytic copper|FRLS insulation - low smoke emission|Flame retardant as per IS 694|Excellent flexibility and easy installation|Anti-rodent properties|Halogen-free options available|Colour-coded for easy identification|Superior current carrying capacity', 'Residential wiring|Commercial buildings|Industrial installations|Power panels and distribution|HVAC systems|Data centers|Government and infrastructure projects', 'Niraj Industries', 'NI-ELE-CAB-004', 'Varies by cable size (per meter)', 'Available in 90m and 200m coil lengths', '99.97% Electrolytic Copper with FRLS PVC Insulation', 'Red, Yellow, Blue, Black, Green (standard color coding)', '3 Years Manufacturer Warranty', 'IS 694 Certified|ISI Mark|BIS Approved|FRLS Certified', NULL, NULL, NULL, 1, 'In Stock', 'Pan India Delivery | Dispatched within 2-3 business days', 'India', 'copper cables,electrical wire,FRLS cable,wiring cable,electrical cable', 'assets/img/all-images/products/ERW-PIPES-11-1.png', NULL, NULL, '500 Mtr', 5.0, 112, 1, 4, '2026-04-03 11:40:11', 'Electrical Conduit Pipes | Niraj Industries', 'Buy electrical conduit pipes in Nagpur. ISI marked PVC pipes.', 'conduit pipes nagpur', 'https://nirajindustries.com/products/electrical-conduit-pipes-isi', 'Conduit Pipes', 'PVC pipes for wiring.', 'assets/img/products/conduit-pipes.jpg', 'product', 'Conduit Pipes', 'Best electrical pipes', 'summary_large_image', 'index,follow', 'Product', '{\"@type\":\"Product\",\"name\":\"Conduit Pipes\"}', '2026-04-04 13:47:20'),
(5, 'UPVC Pressure Pipes', 'upvc-pressure-pipes', 'plumbing', 'Corrosion-resistant UPVC pipes for water supply and irrigation. Available in 20mm to 200mm diameter.', 'Niraj Industries UPVC Pressure Pipes are manufactured from unplasticized PVC compound conforming to IS 4985 standards. These pipes offer exceptional corrosion resistance, smooth inner surface for maximum flow efficiency, and outstanding durability for both above-ground and underground water supply applications. Our pipes are non-toxic, making them safe for potable water distribution.', 'Material: UPVC (Unplasticized PVC)|Standard: IS 4985|Pressure Ratings: Class 2.5, 4, 6, 10 kg/cm²|Available Sizes: 20mm to 315mm OD|Wall Thickness: As per IS 4985|Jointing: Solvent cement / Rubber ring|Color: Grey (standard)|Operating Temperature: up to 45°C', 'Corrosion and chemical resistant|Smooth inner bore for maximum flow|Non-toxic and safe for drinking water|Lightweight yet extremely strong|UV stabilized for outdoor use|Easy installation with solvent welding|Long service life of 50+ years|No scaling or pitting', 'Municipal water supply|Agricultural irrigation|Industrial water distribution|Borewell rising mains|Drainage and sewage systems|Chemical industry piping|Fire fighting systems', 'Niraj Industries', 'NI-PLM-UPV-005', 'Varies by diameter and length', '20mm to 315mm OD | Standard 6 meter lengths', 'Unplasticized Polyvinyl Chloride (UPVC)', 'Grey', '10 Years against manufacturing defects', 'IS 4985 Certified|ISI Mark|BIS Approved|WQA Certified', NULL, NULL, NULL, 1, 'In Stock', 'Pan India Delivery | Dispatched within 3-5 business days', 'India', 'upvc pipes,pressure pipes,water supply pipes,plumbing pipes,pvc pipes', 'assets/img/all-images/products/HDPE-pipes-and-fittings.png', 'Sale', 'sale', '100 Mtr', 4.0, 58, 1, 5, '2026-04-03 11:40:11', 'Industrial Safety Helmets | Niraj Industries', 'Buy safety helmets in Nagpur. ISI certified helmets for construction workers.', 'safety helmets nagpur', 'https://nirajindustries.com/products/industrial-safety-helmets-hdpe', 'Safety Helmets', 'Protective helmets for workers.', 'assets/img/products/safety-helmet.jpg', 'product', 'Safety Helmets', 'Best safety helmets', 'summary_large_image', 'index,follow', 'Product', '{\"@type\":\"Product\",\"name\":\"Safety Helmets\"}', '2026-04-04 13:47:20'),
(6, 'Safety Harness Full Body', 'safety-harness-full-body', 'safety', 'EN 361 compliant full body safety harness with double lanyard for working at heights above 2 metres.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'In Stock', 'Pan India Delivery Available', 'India', NULL, 'assets/img/all-images/products/Safety-Valves.png', 'Top Rated', 'best', '10 Pcs', 5.0, 89, 1, 6, '2026-04-03 11:40:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product', NULL, NULL, 'summary_large_image', 'index,follow', 'Product', NULL, '2026-04-04 13:46:55'),
(7, 'AAC Blocks Lightweight', 'aac-blocks-lightweight', 'construction', 'Autoclaved aerated concrete blocks — lightweight, thermally insulating, and earthquake resistant.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'In Stock', 'Pan India Delivery Available', 'India', NULL, 'assets/img/all-images/products/GI-pipes-Fittings.png', 'New', 'new', '500 Pcs', 4.5, 43, 1, 7, '2026-04-03 11:40:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product', NULL, NULL, 'summary_large_image', 'index,follow', 'Product', NULL, '2026-04-04 13:46:55'),
(8, 'Industrial Gloves Heavy Duty', 'industrial-gloves-heavy-duty', 'industrial', 'Chemical and cut-resistant nitrile gloves for industrial handling. Ergonomic grip, washable, durable.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'In Stock', 'Pan India Delivery Available', 'India', NULL, 'assets/img/all-images/products/Fittings.png', NULL, NULL, '100 Pairs', 4.0, 67, 1, 8, '2026-04-03 11:40:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product', NULL, NULL, 'summary_large_image', 'index,follow', 'Product', NULL, '2026-04-04 13:46:55'),
(10, 'GI Pipe Fittings Set', 'gi-pipe-fittings-set', 'plumbing', 'Galvanised iron pipe fittings including elbows, tees, reducers and couplings. Complete range available.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'In Stock', 'Pan India Delivery Available', 'India', NULL, 'assets/img/all-images/products/MS-pipes-Fittings.png', NULL, NULL, '50 Pcs', 4.0, 55, 1, 10, '2026-04-03 11:40:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product', NULL, NULL, 'summary_large_image', 'index,follow', 'Product', NULL, '2026-04-04 13:46:55'),
(11, 'Fire Extinguisher CO2 Type', 'fire-extinguisher-co2-type', 'safety', 'BIS certified CO2 fire extinguisher for electrical fires. Available in 2kg, 4.5kg and 9kg capacities.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'In Stock', 'Pan India Delivery Available', 'India', NULL, 'assets/img/all-images/products/PRV.png', 'Certified', 'best', '5 Units', 5.0, 81, 1, 11, '2026-04-03 11:40:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product', NULL, NULL, 'summary_large_image', 'index,follow', 'Product', NULL, '2026-04-04 13:46:55'),
(12, 'Waterproofing Compound', 'waterproofing-compound', 'construction', 'Polymer-modified integral waterproofing compound for concrete and mortar mix. Long lasting protection.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'In Stock', 'Pan India Delivery Available', 'India', NULL, 'assets/img/all-images/products/Strainers.png', 'New', 'new', '50 Ltrs', 4.5, 37, 1, 12, '2026-04-03 11:40:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'product', NULL, NULL, 'summary_large_image', 'index,follow', 'Product', NULL, '2026-04-04 13:46:55'),
(13, 'anweydugt3ectfct', 'jdcuygeyeg', 'Electrichewiub d', '2hydgfu2t', 'j2xgycetf', '', 'eeihcydgvr', '', 'cdv fsddbghnv', '', 'azx ds', 'hjws', '2iygdy', 'swhy2g', 'de3cfrv', 'ec3rvf', 'assets/img/products/jdcuygeyeg-2-69d0cc849ac68.webp', '', '', 1, 'ed3frctvgbytnhy', 'zaXCSWADEVFR', 'saCX zvf', 'ed3cfrvt', 'assets/img/products/jdcuygeyeg-69d0cc8488433.webp', 'IBR', '', 'asC V', 2.9, 5, 1, 0, '2026-04-04 08:32:04', 'QADWQEFW', 'QA1SDWEFR', '', 'DWEFGRTHY', 'Q1ASWDXECWERFVG', 'QDWEFT', 'assets/img/products/jdcuygeyeg-69d0cc8488433.webp', 'article', 'SWDEWFV', 'rfzfwrdzrdqrxd', 'summary_large_image', 'index,follow', 'Product', '{\"@context\":\"https://schema.org\",\"@type\":\"Product\",\"name\":\"anweydugt3ectfct\",\"description\":\"QA1SDWEFR\",\"image\":\"http://localhost/nirajindustries/assets/img/products/jdcuygeyeg-69d0cc8488433.webp\",\"brand\":{\"@type\":\"Brand\",\"name\":\"cdv fsddbghnv\"},\"sku\":\"\",\"url\":\"DWEFGRTHY\",\"category\":\"Electrichewiub d\"}', '2026-04-04 14:06:25');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `hero_title` varchar(255) DEFAULT NULL,
  `hero_subtitle` text DEFAULT NULL,
  `hero_content_json` longtext DEFAULT NULL,
  `service_card_json` longtext DEFAULT NULL,
  `why_choose_json` longtext DEFAULT NULL,
  `hero_image` varchar(255) DEFAULT NULL,
  `hero_image_alt` varchar(255) DEFAULT NULL,
  `slug` varchar(280) NOT NULL,
  `short_description` text DEFAULT NULL,
  `h1_title` varchar(255) DEFAULT NULL,
  `breadcrumb_json` text DEFAULT NULL,
  `content` longtext NOT NULL,
  `sections_json` longtext DEFAULT NULL,
  `faqs_json` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT 'assets/img/services/default.jpg',
  `image_alt` varchar(255) DEFAULT NULL,
  `gallery_json` longtext DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `related_services_json` text DEFAULT NULL,
  `doctor_ids` text DEFAULT NULL,
  `is_published` tinyint(1) DEFAULT 1,
  `sort_order` smallint(5) UNSIGNED DEFAULT 0,
  `meta_title` varchar(70) DEFAULT NULL,
  `meta_description` varchar(180) DEFAULT NULL,
  `focus_keyword` varchar(100) DEFAULT NULL,
  `canonical_url` varchar(500) DEFAULT NULL,
  `og_title` varchar(200) DEFAULT NULL,
  `og_description` text DEFAULT NULL,
  `og_image` varchar(500) DEFAULT NULL,
  `og_type` varchar(50) DEFAULT 'website',
  `twitter_title` varchar(200) DEFAULT NULL,
  `twitter_description` text DEFAULT NULL,
  `twitter_card` varchar(50) DEFAULT 'summary_large_image',
  `robots_meta` varchar(50) DEFAULT 'index,follow',
  `schema_type` varchar(50) DEFAULT 'MedicalProcedure',
  `schema_json` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `hero_title`, `hero_subtitle`, `hero_content_json`, `service_card_json`, `why_choose_json`, `hero_image`, `hero_image_alt`, `slug`, `short_description`, `h1_title`, `breadcrumb_json`, `content`, `sections_json`, `faqs_json`, `image`, `image_alt`, `gallery_json`, `icon`, `category_id`, `related_services_json`, `doctor_ids`, `is_published`, `sort_order`, `meta_title`, `meta_description`, `focus_keyword`, `canonical_url`, `og_title`, `og_description`, `og_image`, `og_type`, `twitter_title`, `twitter_description`, `twitter_card`, `robots_meta`, `schema_type`, `schema_json`, `created_at`, `updated_at`) VALUES
(21, 'Pregnancy Care in Nagpur — Dr. Priyanka Jain Agrawal', 'Expert Pregnancy Care in Nagpur', 'Safe, compassionate maternity care by Dr. Priyanka Jain Agrawal at R.K. Hospital, Central Avenue', '{\"tagline\":\"Your Trusted Maternity Specialist in Nagpur\",\"heading\":\"Caring for You Through Every Stage of Pregnancy\",\"description\":\"Dr. Priyanka Jain Agrawal brings years of expertise in obstetrics and gynaecology to every patient. At R.K. Hospital on Central Avenue, Nagpur, she provides personalised pregnancy care — from early antenatal consultations through to postpartum recovery — ensuring you feel supported, informed, and confident at every step.\",\"hero_image\":\"assets/img/services/pregnancy-care-nagpur-hc-69ce19ab3f753.webp\",\"features\":[{\"title\":\"Antenatal Checkups & Monitoring\",\"description\":\"\",\"icon\":\"doctor\"},{\"title\":\"Normal & Cesarean Deliveries\",\"description\":\"\",\"icon\":\"doctor\"},{\"title\":\"High-Risk Pregnancy Management\",\"description\":\"\",\"icon\":\"doctor\"},{\"title\":\"Postpartum Care & Support\",\"description\":\"\",\"icon\":\"doctor\"},{\"title\":\"Nutritional & Lifestyle Guidance\",\"description\":\"\",\"icon\":\"doctor\"}]}', '{\"title\":\"Pregnancy Care\",\"department\":\"Obstetrics & Gynaecology\",\"location\":\"R.K. Hospital, Central Avenue, Nagpur\",\"description\":\"Comprehensive pregnancy care including antenatal checkups, safe deliveries, and postnatal support — by Dr. Priyanka Jain Agrawal at R.K. Hospital, Nagpur.\",\"thumbnail_alt\":\"Pregnancy Care at R.K. Hospital Nagpur\"}', '[{\"title\":\"Experienced Specialist\",\"description\":\"Dr. Priyanka Jain Agrawal is a highly rated Obstetrician-Gynecologist with a 4.9 star Google rating and 128+ reviews from Nagpur patients.\"},{\"title\":\"Complete Maternity Care\",\"description\":\"From your first antenatal visit to delivery and postpartum recovery, all pregnancy services are available under one roof.\"},{\"title\":\"Safe Normal & C-Section Deliveries\",\"description\":\"Expert handling of both normal and cesarean deliveries, with a focus on mother and baby safety throughout.\"},{\"title\":\"High-Risk Pregnancy Support\",\"description\":\"Specialised monitoring and management for high-risk pregnancies, including gestational diabetes and hypertension\"},{\"title\":\"Ethical & Patient-Friendly Approach\",\"description\":\"Known for clear communication, honest guidance, and a warm, reassuring environment for expecting mothers.\"}]', 'assets/img/services/pregnancy-care-nagpur-hero-69ce2a828d9bc.webp', 'Dr. Priyanka Jain Agrawal — Pregnancy Care Specialist at R.K. Hospital Nagpur', 'pregnancy-care-nagpur', 'Expert pregnancy care by Dr. Priyanka Jain Agrawal at R.K. Hospital, Nagpur. Antenatal checkups, safe deliveries, and postpartum support — all under one roof on Central Avenue.', 'Pregnancy Care in Nagpur', '[{\"name\":\"Home\",\"url\":\"/\"},{\"name\":\"Services\",\"url\":\"/services.php\"},{\"name\":\"Pregnancy Care\",\"url\":\"/services.php?category=pregnancy+care\"},{\"name\":\"Pregnancy Care in Nagpur — Dr. Priyanka Jain Agrawal\",\"url\":\"/pregnancy-care-nagpur\"}]', '<p><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Pregnancy is one of the most important journeys in a woman\'s life, and having the right specialist by your side makes all the difference. Dr. Priyanka Jain Agrawal, a trusted Obstetrician-Gynecologist at R.K. Hospital, Nagpur, provides compassionate and comprehensive pregnancy care — from your first prenatal visit to delivery and postpartum recovery.</span></p><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">With over 128 five-star reviews on Google, Dr. Priyanka is known for her patient-friendly approach, clear guidance, and ethical practice. She supports mothers through every trimester, ensuring both mother and baby are monitored, safe, and healthy throughout the pregnancy journey.</span></p><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Our pregnancy care services include regular antenatal checkups, high-risk pregnancy monitoring, nutritional counselling, birthing plan discussions, normal and cesarean deliveries, and postnatal care. Whether it\'s your first pregnancy or subsequent one, our team is equipped to provide personalised care in a warm, supportive environment.</span></p>', NULL, '[{\"q\":\"When should I schedule my first pregnancy checkup?\",\"a\":\"You should ideally book your first antenatal appointment as soon as you confirm your pregnancy — usually between 6 to 8 weeks. Early consultations help establish a care plan and monitor foetal development from the start.\"},{\"q\":\"Does Dr. Priyanka Jain Agrawal handle high-risk pregnancies?\",\"a\":\"Yes. Dr. Priyanka has experience managing high-risk pregnancies including cases involving gestational diabetes, hypertension, multiple pregnancies, and previous pregnancy complications.\"},{\"q\":\"Is normal delivery possible at R.K. Hospital, Nagpur?\",\"a\":\"Yes, R.K. Hospital supports both normal and cesarean deliveries. Dr. Priyanka prioritises safe, natural delivery whenever possible and makes informed decisions based on each patient\'s condition.\"},{\"q\":\"How many antenatal visits are required during pregnancy?\",\"a\":\"A typical low-risk pregnancy requires around 8–12 antenatal visits. Dr. Priyanka will customise your visit schedule based on your health, trimester, and any specific risk factors.\"},{\"q\":\"Does R.K. Hospital provide postpartum care after delivery?\",\"a\":\"Yes. Postnatal care includes mother and newborn health checks, breastfeeding guidance, emotional wellbeing support, and recovery monitoring in the weeks following delivery.\"},{\"q\":\"Where is Dr. Priyanka Jain Agrawal\'s clinic located?\",\"a\":\"Dr. Priyanka practises at Dr. Agrawal\'s R.K. Hospital, 27 Chandrashekhar, Azad Square, Central Avenue, beside Hotel Al Zam Zam, Itwari, Nagpur, Maharashtra 440002.\"}]', 'assets/img/services/pregnancy-care-nagpur-main-69ce19ab3a3f4.webp', NULL, '[{\"src\":\"assets/img/services/gallery/pregnancy-care-nagpur-gallery-69ce19216518b.webp\",\"alt\":\"Pregnancy Care in Nagpur — Dr. Priyanka Jain Agrawal\"},{\"src\":\"assets/img/services/gallery/pregnancy-care-nagpur-gallery-69ce19217946c.webp\",\"alt\":\"Pregnancy Care in Nagpur — Dr. Priyanka Jain Agrawal\"},{\"src\":\"assets/img/services/gallery/pregnancy-care-nagpur-gallery-69ce19217f0d4.webp\",\"alt\":\"Pregnancy Care in Nagpur — Dr. Priyanka Jain Agrawal\"},{\"src\":\"assets/img/services/gallery/pregnancy-care-nagpur-gallery-69ce192190af6.webp\",\"alt\":\"Pregnancy Care in Nagpur — Dr. Priyanka Jain Agrawal\"},{\"src\":\"assets/img/services/gallery/pregnancy-care-nagpur-gallery-69ce1921965a7.webp\",\"alt\":\"Pregnancy Care in Nagpur — Dr. Priyanka Jain Agrawal\"},{\"src\":\"assets/img/services/gallery/pregnancy-care-nagpur-gallery-69ce1921a872e.webp\",\"alt\":\"Pregnancy Care in Nagpur — Dr. Priyanka Jain Agrawal\"}]', NULL, 3, NULL, NULL, 1, 0, 'Pregnancy Care in Nagpur | Dr. Priyanka Jain Agrawal', 'Get expert pregnancy care in Nagpur by Dr. Priyanka Jain Agrawal at R.K. Hospital. Antenatal checkups, safe deliveries & postpartum care on Central Avenue.', 'pregnancy care in Nagpur', 'https://dragrawalsrkhospital.in/service/pregnancy-care-nagpur', 'Pregnancy Care in Nagpur — R.K. Hospital', 'Trusted pregnancy care by Dr. Priyanka Jain Agrawal. Antenatal checkups, deliveries & postpartum support at R.K. Hospital, Nagpur.', NULL, 'website', 'Pregnancy Care in Nagpur | Dr. Priyanka Jain Agrawal', 'Expert pregnancy care at R.K. Hospital, Nagpur. Antenatal checkups, safe deliveries & postnatal care by Dr. Priyanka Jain Agrawal.', 'summary_large_image', 'index,follow', 'MedicalProcedure', '{\"@context\":\"https://schema.org\",\"@type\":\"MedicalProcedure\",\"name\":\"Pregnancy Care in Nagpur | Dr. Priyanka Jain Agrawal\",\"description\":\"Get expert pregnancy care in Nagpur by Dr. Priyanka Jain Agrawal at R.K. Hospital. Antenatal checkups, safe deliveries & postpartum care on Central Avenue.\",\"url\":\"https://dragrawalsrkhospital.in/service/pregnancy-care-nagpur\",\"image\":\"\"}', '2026-04-02 06:47:51', '2026-04-02 08:36:18'),
(22, 'Infertility Treatment in Nagpur — Dr. Priyanka Jain Agrawal', 'Infertility Treatment in Nagpur', 'Personalised, compassionate fertility care by Dr. Priyanka Jain Agrawal at R.K. Hospital, Central Avenue', '{\"tagline\":\"Helping Families Begin in Nagpur\",\"heading\":\"Expert Fertility Care With a Personal Touch\",\"description\":\"Dr. Priyanka Jain Agrawal understands that infertility is not just a medical concern — it is a deeply personal one. At R.K. Hospital, she combines clinical expertise with genuine empathy, offering each couple a clear path forward through careful diagnosis, honest guidance, and the most suitable treatment options available.\",\"hero_image\":\"assets/img/services/infertility-treatment-nagpur-hc-69ce1cf4c4a6a.webp\",\"features\":[{\"title\":\"Fertility Evaluation & Diagnosis\",\"description\":\"\",\"icon\":\"doctor\"},{\"title\":\"Ovulation Induction & Hormonal Therapy\",\"description\":\"\",\"icon\":\"doctor\"},{\"title\":\"Laparoscopy & Hysteroscopy\",\"description\":\"\",\"icon\":\"doctor\"},{\"title\":\"Endometriosis & Fibroid Treatment\",\"description\":\"\",\"icon\":\"doctor\"},{\"title\":\"Unexplained Infertility Management\",\"description\":\"\",\"icon\":\"doctor\"}]}', '{\"title\":\"Infertility Treatment\",\"department\":\"Obstetrics & Gynaecology\",\"location\":\"R.K. Hospital, Central Avenue, Nagpur\",\"description\":\"Personalised infertility treatment including fertility evaluation, ovulation induction, laparoscopy and hysteroscopy — by Dr. Priyanka Jain Agrawal at R.K. Hospital, Nagpur.\",\"thumbnail_alt\":\"Infertility Treatment at R.K. Hospital, Nagpur\"}', NULL, 'assets/img/services/infertility-treatment-nagpur-hero-69ce1d189feb9.webp', 'Infertility Treatment at R.K. Hospital Nagpur — Dr. Priyanka Jain Agrawal', 'infertility-treatment-nagpur', 'Compassionate and expert infertility treatment by Dr. Priyanka Jain Agrawal at R.K. Hospital, Nagpur. Personalised diagnosis and care to help you start the family you\'ve been hoping for.', 'Infertility Treatment in Nagpur', '[{\"name\":\"Home\",\"url\":\"/\"},{\"name\":\"Services\",\"url\":\"/services.php\"},{\"name\":\"Gynecology\",\"url\":\"/services.php?category=gynecology\"},{\"name\":\"Infertility Treatment in Nagpur — Dr. Priyanka Jain Agrawal\",\"url\":\"/infertility-treatment-nagpur\"}]', '<p><span style=\"color: rgb(0, 0, 0); background-color: rgb(255, 255, 255);\">For many couples, the journey to parenthood comes with unexpected challenges. Infertility can be an emotionally difficult experience — and having the right specialist makes all the difference. At R.K. Hospital, Central Avenue, Nagpur, Dr. Priyanka Jain Agrawal offers compassionate, evidence-based infertility treatment tailored to each couple\'s unique situation.</span></p><p><span style=\"color: rgb(0, 0, 0); background-color: rgb(255, 255, 255);\">Dr. Priyanka begins with a thorough evaluation of both partners to identify the underlying cause of infertility. From hormonal imbalances and ovulation disorders to structural issues and unexplained infertility, she takes a systematic, patient approach to diagnosis before recommending any treatment.</span></p><p><span style=\"color: rgb(0, 0, 0); background-color: rgb(255, 255, 255);\">Treatment options include ovulation induction, hormonal therapy, and advanced procedures such as laparoscopy and hysteroscopy — used to detect and correct conditions like endometriosis, fibroids, blocked tubes, or uterine abnormalities that may be affecting fertility.</span></p><p><span style=\"color: rgb(0, 0, 0); background-color: rgb(255, 255, 255);\">Throughout the process, Dr. Priyanka ensures that every couple is fully informed, emotionally supported, and involved in their care decisions. Her approach is never rushed — she takes time to explain options, set realistic expectations, and walk with you at every step of this journey.</span></p><p><span style=\"color: rgb(0, 0, 0); background-color: rgb(255, 255, 255);\">Whether you are just beginning to explore your options or have been trying for some time, R.K. Hospital is here to help you move forward with clarity, hope, and the best possible care.</span></p>', NULL, '[{\"q\":\"When should a couple seek infertility treatment?\",\"a\":\"Couples who have been trying to conceive for 12 months without success (or 6 months if the woman is over 35) should consult a specialist. Dr. Priyanka recommends an early evaluation to identify any underlying causes without delay.\"},{\"q\":\"What does the infertility evaluation involve?\",\"a\":\"The evaluation typically includes hormonal blood tests, ultrasound scans, and semen analysis for the male partner. Based on results, further investigations such as hysteroscopy or laparoscopy may be recommended to examine the uterus and fallopian tubes.\"},{\"q\":\"What treatments are available at R.K. Hospital for infertility?\",\"a\":\"Dr. Priyanka offers ovulation induction, hormonal therapy, and advanced laparoscopic and hysteroscopy procedures to treat conditions such as endometriosis, fibroids, blocked fallopian tubes, and uterine abnormalities that affect fertility.\"},{\"q\":\"Does R.K. Hospital offer IVF treatment?\",\"a\":\"Dr. Priyanka focuses on fertility evaluation, hormonal treatments, and surgical interventions. For cases requiring IVF or assisted reproductive techniques, she provides appropriate referrals while continuing to support your overall care.\"},{\"q\":\"Is laparoscopy painful? What is the recovery time?\",\"a\":\"Laparoscopy is a minimally invasive procedure performed under general anaesthesia. Most patients experience mild discomfort for a day or two and can return to normal activities within a week. Dr. Priyanka will guide you through what to expect before and after the procedure.\"},{\"q\":\"Where can I consult Dr. Priyanka Jain Agrawal for infertility treatment in Nagpur?\",\"a\":\"Dr. Priyanka practises at R.K. Hospital, 27 Chandrashekhar, Azad Square, Central Avenue, beside Hotel Al Zam Zam, Itwari, Nagpur, Maharashtra 440002.\"}]', 'assets/img/services/infertility-treatment-nagpur-main-69ce1cd095683.webp', NULL, '[{\"src\":\"assets/img/services/gallery/infertility-treatment-nagpur-gallery-69ce1c8c79277.webp\",\"alt\":\"Infertility Treatment in Nagpur — Dr. Priyanka Jain Agrawal\"},{\"src\":\"assets/img/services/gallery/infertility-treatment-nagpur-gallery-69ce1c8c925f2.webp\",\"alt\":\"Infertility Treatment in Nagpur — Dr. Priyanka Jain Agrawal\"},{\"src\":\"assets/img/services/gallery/infertility-treatment-nagpur-gallery-69ce1c8cbed9f.webp\",\"alt\":\"Infertility Treatment in Nagpur — Dr. Priyanka Jain Agrawal\"},{\"src\":\"assets/img/services/gallery/infertility-treatment-nagpur-gallery-69ce1c8cdaba3.webp\",\"alt\":\"Infertility Treatment in Nagpur — Dr. Priyanka Jain Agrawal\"},{\"src\":\"assets/img/services/gallery/infertility-treatment-nagpur-gallery-69ce1c8d157db.webp\",\"alt\":\"Infertility Treatment in Nagpur — Dr. Priyanka Jain Agrawal\"},{\"src\":\"assets/img/services/gallery/infertility-treatment-nagpur-gallery-69ce1c8d2f329.webp\",\"alt\":\"Infertility Treatment in Nagpur — Dr. Priyanka Jain Agrawal\"}]', NULL, 2, NULL, NULL, 1, 0, 'Infertility Treatment in Nagpur | Dr. Priyanka Jain Agrawal', 'Expert infertility treatment in Nagpur by Dr. Priyanka Jain Agrawal at R.K. Hospital. Fertility evaluation, ovulation induction & laparoscopy on Central Avenue.', 'infertility treatment in Nagpur', 'https://dragrawalsrkhospital.in/service/infertility-treatment-nagpur', 'Infertility Treatment in Nagpur — R.K. Hospital', 'Compassionate infertility care by Dr. Priyanka Jain Agrawal. Fertility evaluation, hormonal therapy & advanced procedures at R.K. Hospital, Nagpur.', NULL, 'website', 'Infertility Treatment in Nagpur | Dr. Priyanka Jain Agrawal', 'Expert fertility care at R.K. Hospital, Nagpur. Diagnosis, ovulation induction & laparoscopy by Dr. Priyanka Jain Agrawal.', 'summary_large_image', 'index,follow', 'MedicalProcedure', '{\"@context\":\"https://schema.org\",\"@type\":\"MedicalProcedure\",\"name\":\"Infertility Treatment in Nagpur | Dr. Priyanka Jain Agrawal\",\"description\":\"Expert infertility treatment in Nagpur by Dr. Priyanka Jain Agrawal at R.K. Hospital. Fertility evaluation, ovulation induction & laparoscopy on Central Avenue.\",\"url\":\"https://dragrawalsrkhospital.in/service/infertility-treatment-nagpur\",\"image\":\"\"}', '2026-04-02 07:16:34', '2026-04-03 05:56:27'),
(23, 'Lactation Support & Breastfeeding Consultation in Nagpur — Dr. Priyanka Agrawal', 'Lactation Support & Breastfeeding Consultation in Nagpur', 'Expert, compassionate breastfeeding support by Dr. Priyanka Agrawal at R.K. Hospital, Nagpur', '{\"tagline\":\"Confident Breastfeeding Starts Here\",\"heading\":\"Supporting Mothers, Nourishing Babies\",\"description\":\"Dr. Priyanka Agrawal offers expert lactation support and breastfeeding consultation at R.K. Hospital, Nagpur — helping new mothers overcome challenges, build confidence, and ensure optimal nutrition for their babies through safe and effective feeding practices.\",\"hero_image\":\"assets/img/services/lactation-support-breastfeeding-consultation-nagpur-hc-69cf5f3896215.webp\",\"features\":[{\"title\":\"Breastfeeding Position & Latch Guidance\",\"description\":\"\",\"icon\":\"doctor\"},{\"title\":\"Low Milk Supply Management\",\"description\":\"\",\"icon\":\"doctor\"},{\"title\":\"Pain-Free Breastfeeding Support\",\"description\":\"\",\"icon\":\"doctor\"},{\"title\":\"Engorgement & Nipple Care\",\"description\":\"\",\"icon\":\"doctor\"},{\"title\":\"Post-Delivery Lactation Counseling\",\"description\":\"\",\"icon\":\"doctor\"}]}', '{\"title\":\"Lactation Support & Breastfeeding Consultation\",\"department\":\"Gynecology & Maternity Care\",\"location\":\"R.K. Hospital, Central Avenue, Nagpur\",\"description\":\"Expert lactation support including latching guidance, milk supply management, and breastfeeding counseling — by Dr. Priyanka Agrawal at R.K. Hospital, Nagpur.\",\"thumbnail_alt\":\"Lactation Support & Breastfeeding Consultation at R.K. Hospital, Nagpur\"}', '[{\"title\":\"Experienced Gynecologist\",\"description\":\"Dr. Priyanka Agrawal is a trusted gynecologist in Nagpur, offering expert lactation support with a compassionate and patient-focused approach.\"},{\"title\":\"Personalised Breastfeeding Guidance\",\"description\":\"Every mother receives customised advice based on her comfort, baby’s needs, and feeding challenges.\"},{\"title\":\"Non-Medical & Natural Approach First\",\"description\":\"Focus on natural techniques and positioning methods before considering medical interventions.\"},{\"title\":\"Post-Delivery Support\",\"description\":\"Continuous lactation support after childbirth to ensure smooth feeding and baby’s healthy growth.\"},{\"title\":\"Comfort & Confidence Building\",\"description\":\"Helping mothers overcome anxiety and build confidence for a successful breastfeeding journey.\"}]', 'assets/img/services/lactation-support-breastfeeding-consultation-nagpur-hero-69cf5f386ea60.webp', 'Lactation Support & Breastfeeding Consultation — Dr. Priyanka Agrawal at R.K. Hospital, Nagpur', 'lactation-support-breastfeeding-consultation-nagpur', 'Expert lactation support and breastfeeding consultation by Dr. Priyanka Agrawal at R.K. Hospital, Nagpur. Guidance for new mothers, latching issues, low milk supply, and pain-free breastfeeding.', 'Lactation Support & Breastfeeding Consultation in Nagpur', '[{\"name\":\"Home\",\"url\":\"/\"},{\"name\":\"Services\",\"url\":\"/services.php\"},{\"name\":\"Gynecology\",\"url\":\"/services.php?category=gynecology\"},{\"name\":\"Lactation Support & Breastfeeding Consultation in Nagpur — Dr. Priyanka Agrawal\",\"url\":\"/lactation-support-breastfeeding-consultation-nagpur\"}]', '<p>Breastfeeding is one of the most important aspects of newborn care — but for many mothers, it can come with challenges such as latching difficulties, low milk supply, pain, or uncertainty about proper feeding techniques. At R.K. Hospital, Central Avenue, Nagpur, Dr. Priyanka Agrawal provides compassionate and expert lactation support to help mothers confidently nourish their babies.</p><p>Dr. Priyanka understands that every mother and baby is unique. She offers personalised breastfeeding guidance, helping mothers overcome common issues such as improper latch, nipple pain, engorgement, and concerns about milk production. Her approach focuses on education, reassurance, and practical solutions that make breastfeeding comfortable and effective.</p><p>For mothers experiencing difficulties, early intervention is key. Dr. Priyanka provides step-by-step support, including positioning techniques, feeding schedules, and ways to improve milk supply naturally. She also assists mothers who may need to combine breastfeeding with formula feeding or are transitioning back to work.</p><p>Lactation support at R.K. Hospital extends beyond the initial days after delivery. Continuous follow-up ensures that both mother and baby are progressing well, with guidance tailored to the baby\'s growth and the mother’s health.</p><p>Mothers across Nagpur trust Dr. Priyanka Agrawal for her patient-first approach, clear communication, and commitment to ensuring a positive and stress-free breastfeeding journey.</p>', NULL, '[{\"q\":\"What is lactation support and why is it important?\",\"a\":\"Lactation support helps mothers with breastfeeding techniques, ensuring the baby receives proper nutrition while preventing discomfort or complications for the mother.\"},{\"q\":\"What problems can lactation consultation solve?\",\"a\":\"It helps with latching issues, low milk supply, nipple pain, breast engorgement, and feeding difficulties.\"},{\"q\":\"When should I consult a lactation expert?\",\"a\":\"You should consult as soon as you face difficulty in breastfeeding or even immediately after delivery for guidance.\"},{\"q\":\"Can low milk supply be improved?\",\"a\":\"Yes. With proper techniques, nutrition, and feeding patterns, milk supply can often be improved naturally.\"},{\"q\":\"Is breastfeeding painful?\",\"a\":\"Breastfeeding should not be painful. Pain usually indicates improper latch or positioning, which can be corrected with guidance.\"},{\"q\":\"Where can I get lactation support in Nagpur?\",\"a\":\"Dr. Priyanka Agrawal provides lactation consultation at R.K. Hospital, Central Avenue, Nagpur, helping mothers across the city and nearby regions.\"}]', 'assets/img/services/lactation-support-breastfeeding-consultation-nagpur-main-69cf5f3868b47.webp', NULL, '[{\"src\":\"assets/img/services/gallery/lactation-support-breastfeeding-consultation-nagpur-gallery-69cf5f38c429a.webp\",\"alt\":\"Lactation Support & Breastfeeding Consultation in Nagpur — Dr. Priyanka Agrawal\"},{\"src\":\"assets/img/services/gallery/lactation-support-breastfeeding-consultation-nagpur-gallery-69cf5f38ca431.webp\",\"alt\":\"Lactation Support & Breastfeeding Consultation in Nagpur — Dr. Priyanka Agrawal\"},{\"src\":\"assets/img/services/gallery/lactation-support-breastfeeding-consultation-nagpur-gallery-69cf5f38d0052.webp\",\"alt\":\"Lactation Support & Breastfeeding Consultation in Nagpur — Dr. Priyanka Agrawal\"},{\"src\":\"assets/img/services/gallery/lactation-support-breastfeeding-consultation-nagpur-gallery-69cf5f38d6b06.webp\",\"alt\":\"Lactation Support & Breastfeeding Consultation in Nagpur — Dr. Priyanka Agrawal\"},{\"src\":\"assets/img/services/gallery/lactation-support-breastfeeding-consultation-nagpur-gallery-69cf5f38dcfa8.webp\",\"alt\":\"Lactation Support & Breastfeeding Consultation in Nagpur — Dr. Priyanka Agrawal\"},{\"src\":\"assets/img/services/gallery/lactation-support-breastfeeding-consultation-nagpur-gallery-69cf5f38e33e4.webp\",\"alt\":\"Lactation Support & Breastfeeding Consultation in Nagpur — Dr. Priyanka Agrawal\"}]', NULL, 2, NULL, NULL, 1, 0, 'Lactation Support in Nagpur | Breastfeeding Help – R.K. Hospital', 'Expert lactation support in Nagpur by Dr. Priyanka Agrawal at R.K. Hospital. Get help with breastfeeding, latching issues & milk supply management.', 'lactation support Nagpur', 'https://dragrawalsrkhospital.in/service/lactation-support-breastfeeding-consultation-nagpur', 'Lactation Support & Breastfeeding Consultation in Nagpur — R.K. Hospital', 'Get expert breastfeeding support by Dr. Priyanka Agrawal. Lactation consultation, latching help & milk supply guidance at R.K. Hospital, Nagpur.', NULL, 'website', 'Lactation Support in Nagpur | Breastfeeding Consultation', 'Professional lactation support at R.K. Hospital, Nagpur. Solve breastfeeding issues with expert care by Dr. Priyanka Agrawal.', 'summary_large_image', 'index,follow', 'MedicalProcedure', '{\"@context\":\"https://schema.org\",\"@type\":\"MedicalProcedure\",\"name\":\"Lactation Support in Nagpur | Breastfeeding Help – R.K. Hospital\",\"description\":\"Expert lactation support in Nagpur by Dr. Priyanka Agrawal at R.K. Hospital. Get help with breastfeeding, latching issues & milk supply management.\",\"url\":\"https://dragrawalsrkhospital.in/service/lactation-support-breastfeeding-consultation-nagpur\",\"image\":\"\"}', '2026-04-02 07:43:27', '2026-04-03 06:33:28'),
(25, 'Robotic-Assisted Joint Replacement Surgery in Nagpur — Dr. Rahul Agrawal', 'Robotic-Assisted Joint Replacement Surgery in Nagpur', 'Precision knee and hip replacement surgery with robotic assistance — by Dr. Rahul Agrawal at R.K. Hospital, Central Avenue, Nagpur', '{\"tagline\":\"Next-Generation Joint Replacement Care in Nagpur\",\"heading\":\"Precision Surgery. Faster Recovery. Better Outcomes.\",\"description\":\"Dr. Rahul R. Agrawal combines years of orthopedic surgical experience with robotic-assisted technology to deliver joint replacement procedures of the highest precision. At R.K. Hospital, Nagpur, every patient receives a personalised surgical plan, transparent guidance, and a structured recovery programme — designed for lasting relief and restored quality of life.\",\"hero_image\":\"assets/img/services/robotic-assisted-joint-replacement-surgery-nagpur-hc-69ce5c55c4264.webp\",\"features\":[{\"title\":\"Robotic-Assisted Knee Replacement\",\"description\":\"\",\"icon\":\"doctor\"},{\"title\":\"Robotic-Assisted Hip Replacement\",\"description\":\"\",\"icon\":\"doctor\"},{\"title\":\"Total & Partial Joint Replacement\",\"description\":\"\",\"icon\":\"doctor\"},{\"title\":\"Patient-Specific Surgical Planning\",\"description\":\"\",\"icon\":\"doctor\"},{\"title\":\"Post-Operative Rehabilitation\",\"description\":\"\",\"icon\":\"doctor\"}]}', '{\"title\":\"Robotic-Assisted Joint Replacement Surgery\",\"department\":\"Orthopedics & Joint Surgery\",\"location\":\"R.K. Hospital, Central Avenue, Nagpur\",\"description\":\"Advanced robotic-assisted knee and hip replacement surgery with patient-specific planning and structured rehabilitation — by Dr. Rahul Agrawal at R.K. Hospital, Nagpur.\",\"thumbnail_alt\":\"Robotic-Assisted Joint Replacement Surgery at R.K. Hospital, Nagpur\"}', '[{\"title\":\"Experienced Joint Replacement Surgeon\",\"description\":\"Dr. Rahul R. Agrawal is a trusted orthopedic surgeon in Nagpur with specialised expertise in robotic-assisted knee and hip replacement surgery.\"},{\"title\":\"Robotic Precision for Better Results\",\"description\":\"Robotic assistance enables highly accurate implant placement, reduced soft tissue damage, and better long-term joint function compared to conventional techniques.\"},{\"title\":\"Personalised Surgical Planning\",\"description\":\"Every procedure begins with a patient-specific plan based on detailed imaging and individual anatomy — ensuring the right approach for every patient.\"},{\"title\":\"Faster Recovery, Less Pain\",\"description\":\"The minimally traumatic nature of robotic-assisted surgery typically results in less post-operative pain, shorter hospital stays, and a quicker return to daily activities.\"},{\"title\":\"Comprehensive Post-Surgical Rehabilitation\",\"description\":\"A structured rehabilitation programme follows every joint replacement to restore strength, stability, and mobility — supporting patients through every stage of recovery.\"}]', 'assets/img/services/robotic-assisted-joint-replacement-surgery-nagpur-hero-69ce5c556b0cd.webp', 'Robotic-Assisted Joint Replacement Surgery — Dr. Rahul Agrawal at R.K. Hospital, Nagpur', 'robotic-assisted-joint-replacement-surgery-nagpur', 'Advanced robotic-assisted knee and hip replacement surgery by Dr. Rahul Agrawal at R.K. Hospital, Nagpur. Greater precision, faster recovery, and longer-lasting results — for patients who want the best in joint care.', 'Robotic-Assisted Joint Replacement Surgery in Nagpur', '[{\"name\":\"Home\",\"url\":\"/\"},{\"name\":\"Services\",\"url\":\"/services.php\"},{\"name\":\"Orthopedics\",\"url\":\"/services.php?category=orthopedics\"},{\"name\":\"Robotic-Assisted Joint Replacement Surgery in Nagpur — Dr. Rahul Agrawal\",\"url\":\"/robotic-assisted-joint-replacement-surgery-nagpur\"}]', '<p><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Joint pain from arthritis, wear and tear, or injury can make even simple daily activities feel overwhelming. When non-surgical treatments no longer provide adequate relief, joint replacement surgery offers a proven path to restored mobility and a better quality of life. At R.K. Hospital, Central Avenue, Nagpur, Dr. Rahul R. Agrawal performs robotic-assisted knee and hip replacement surgery — bringing the precision of advanced technology together with his surgical expertise.</span></p><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Robotic-assisted joint replacement is a significant advancement over conventional surgery. The robotic system provides Dr. Rahul with a highly detailed, patient-specific surgical plan before the procedure begins — and real-time guidance during surgery to ensure the implant is positioned with exceptional accuracy. This level of precision leads to better implant alignment, reduced soft tissue damage, less post-operative pain, and faster recovery compared to traditional techniques.</span></p><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Dr. Rahul begins every joint replacement consultation with a thorough evaluation of the patient\'s condition, imaging, and lifestyle needs. He takes time to explain the procedure clearly, discuss realistic expectations, and ensure the patient is fully prepared — both medically and mentally — before surgery.</span></p><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Whether it is a total knee replacement, partial knee replacement, or hip replacement, each procedure at R.K. Hospital is performed with meticulous attention to detail and a focus on long-term outcomes. Post-operative rehabilitation is an integral part of the process, with a structured recovery programme designed to restore strength, mobility, and independence as quickly as possible.</span></p><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">For patients across Nagpur and Central India seeking the most advanced joint replacement care available, R.K. Hospital and Dr. Rahul Agrawal offer a trusted, proven choice.</span></p>', NULL, '[{\"q\":\"Who is a candidate for joint replacement surgery?\",\"a\":\"Joint replacement is typically recommended for patients with severe arthritis, advanced joint degeneration, or persistent joint pain that has not responded to non-surgical treatments such as physiotherapy, medication, or injections. Dr. Rahul assesses each patient individually to determine the most appropriate treatment.\"},{\"q\":\"What is the advantage of robotic-assisted joint replacement over conventional surgery?\",\"a\":\"Robotic-assisted surgery allows for a patient-specific pre-operative plan and real-time surgical guidance, resulting in more accurate implant positioning, less damage to surrounding tissues, reduced post-operative pain, and improved long-term joint function compared to traditional methods.\"},{\"q\":\"Does Dr. Rahul Agrawal perform both knee and hip replacements?\",\"a\":\"Yes. Dr. Rahul performs robotic-assisted total knee replacement, partial knee replacement, and total hip replacement — tailoring the surgical approach to each patient\'s specific joint condition and lifestyle requirements.\"},{\"q\":\"How long does recovery take after joint replacement surgery?\",\"a\":\"Most patients are able to walk with assistance within a day or two of surgery. Full recovery and return to normal daily activities typically takes 6 to 12 weeks, depending on the joint replaced and the patient\'s overall health. A structured rehabilitation programme is provided to support recovery at every stage.\"},{\"q\":\"How long does a joint replacement implant last?\",\"a\":\"Modern joint replacement implants are designed to last 15 to 25 years or more with proper care. Robotic-assisted surgery further improves implant longevity by ensuring precise alignment and reduced wear over time.\"},{\"q\":\"Where can I consult Dr. Rahul Agrawal for joint replacement surgery in Nagpur?\",\"a\":\"Dr. Rahul practices at R.K. Hospital, 27 Chandrashekhar, Azad Square, Central Avenue, beside Hotel Al Zam Zam, Itwari, Nagpur, Maharashtra 440002 — serving patients from Nagpur and across Central India.\"}]', 'assets/img/services/robotic-assisted-joint-replacement-surgery-nagpur-main-69ce5c5565a87.webp', NULL, '[{\"src\":\"assets/img/services/gallery/robotic-assisted-joint-replacement-surgery-nagpur-gallery-69ce5c562e5d4.webp\",\"alt\":\"Robotic-Assisted Joint Replacement Surgery in Nagpur — Dr. Rahul Agrawal\"},{\"src\":\"assets/img/services/gallery/robotic-assisted-joint-replacement-surgery-nagpur-gallery-69ce5c563684a.webp\",\"alt\":\"Robotic-Assisted Joint Replacement Surgery in Nagpur — Dr. Rahul Agrawal\"},{\"src\":\"assets/img/services/gallery/robotic-assisted-joint-replacement-surgery-nagpur-gallery-69ce5c5648a4a.webp\",\"alt\":\"Robotic-Assisted Joint Replacement Surgery in Nagpur — Dr. Rahul Agrawal\"},{\"src\":\"assets/img/services/gallery/robotic-assisted-joint-replacement-surgery-nagpur-gallery-69ce5c564f40e.webp\",\"alt\":\"Robotic-Assisted Joint Replacement Surgery in Nagpur — Dr. Rahul Agrawal\"},{\"src\":\"assets/img/services/gallery/robotic-assisted-joint-replacement-surgery-nagpur-gallery-69ce5c5662bef.webp\",\"alt\":\"Robotic-Assisted Joint Replacement Surgery in Nagpur — Dr. Rahul Agrawal\"},{\"src\":\"assets/img/services/gallery/robotic-assisted-joint-replacement-surgery-nagpur-gallery-69ce5c5668f82.webp\",\"alt\":\"Robotic-Assisted Joint Replacement Surgery in Nagpur — Dr. Rahul Agrawal\"}]', NULL, 1, NULL, NULL, 1, 0, 'Robotic Joint Replacement Surgery in Nagpur | Dr. Rahul Agrawal', 'Advanced robotic-assisted knee & hip replacement surgery in Nagpur by Dr. Rahul Agrawal at R.K. Hospital. Precise implant placement, faster recovery & better outcomes.', 'robotic joint replacement surgery Nagpur', 'https://dragrawalsrkhospital.in/service/robotic-joint-replacement-surgery-nagpur', 'Robotic-Assisted Joint Replacement Surgery in Nagpur — R.K. Hospital', 'Precision robotic knee & hip replacement by Dr. Rahul Agrawal. Patient-specific planning, faster recovery & lasting results at R.K. Hospital, Nagpur.', NULL, 'website', 'Robotic Joint Replacement Surgery in Nagpur | Dr. Rahul Agrawal', 'Advanced robotic knee & hip replacement at R.K. Hospital, Nagpur. Precise surgery, faster recovery & better outcomes by Dr. Rahul Agrawal.', 'summary_large_image', 'index,follow', 'MedicalProcedure', '{\"@context\":\"https://schema.org\",\"@type\":\"MedicalProcedure\",\"name\":\"Robotic Joint Replacement Surgery in Nagpur | Dr. Rahul Agrawal\",\"description\":\"Advanced robotic-assisted knee & hip replacement surgery in Nagpur by Dr. Rahul Agrawal at R.K. Hospital. Precise implant placement, faster recovery & better outcomes.\",\"url\":\"https://dragrawalsrkhospital.in/service/robotic-joint-replacement-surgery-nagpur\",\"image\":\"\"}', '2026-04-02 08:05:39', '2026-04-03 05:57:12'),
(26, 'Orthopedic Trauma & Fracture Care in Nagpur | Dr. Rahul Agrawal', 'Orthopedic Trauma & Fracture Care in Nagpur', 'Expert fracture management and trauma care by Dr. Rahul Agrawal at R.K. Hospital, Central Avenue, Nagpur', '{\"tagline\":\"Trusted Fracture & Trauma Care in Nagpur\",\"heading\":\"Fast, Accurate Care When It Matters Most\",\"description\":\"Dr. Rahul R. Agrawal is one of Nagpur\'s most trusted orthopedic surgeons, with extensive experience in managing fractures, trauma injuries, and complex musculoskeletal emergencies. At R.K. Hospital, he combines precise surgical skill with clear communication and a focus on complete recovery — not just initial treatment.\",\"hero_image\":\"assets/img/services/orthopedic-trauma-fracture-care-in-nagpur-dr-rahul-agrawal-hc-69ce5a524aff6.webp\",\"features\":[{\"title\":\"Fracture Diagnosis & Management\",\"description\":\"Accurate assessment of all fracture types with a clear treatment plan — from initial diagnosis to full recovery.\",\"icon\":\"star\"},{\"title\":\"Emergency Trauma Care\",\"description\":\"Prompt, experienced care for traumatic injuries — ensuring the right treatment is delivered quickly when it matters most.\",\"icon\":\"star\"},{\"title\":\"Surgical Fixation (Nailing, Plating)\",\"description\":\"Advanced internal fixation techniques to stabilise complex fractures and support proper bone healing.\",\"icon\":\"star\"},{\"title\":\"Sports Injury Treatment\",\"description\":\"Targeted treatment for fractures, dislocations, and trauma from sports — with a focus on safe return to activity.\",\"icon\":\"star\"},{\"title\":\"Rehabilitation & Recovery Planning\",\"description\":\"Structured post-treatment recovery plans to restore mobility, strength, and independence after injury or surgery.\",\"icon\":\"star\"}]}', '{\"title\":\"Orthopedic Trauma & Fracture Care\",\"department\":\"Orthopedics & Trauma\",\"location\":\"27 Chandrashekhar, Azad Square, Central Ave, Ladpura, Itwari, Nagpur, Maharashtra 440002\",\"description\":\"Comprehensive fracture and trauma care, including emergency treatment, surgical fixation, and rehabilitation, by Dr. Rahul Agrawal at R.K. Hospital, Nagpur.\",\"thumbnail_alt\":\"Orthopedic Trauma & Fracture Care at R.K. Hospital, Nagpur\"}', '[{\"title\":\"Experienced Orthopedic Surgeon\",\"description\":\"Dr. Rahul R. Agrawal is a trusted orthopedic surgeon in Nagpur, known for his patient-first approach, transparent guidance, and expertise across trauma and fracture cases.\"},{\"title\":\"Emergency & Planned Trauma Care\",\"description\":\"R.K. Hospital is equipped to handle both orthopedic emergencies and planned trauma surgeries, ensuring timely care when it matters most.\"},{\"title\":\"Advanced Surgical Techniques\",\"description\":\"From intramedullary nailing and plating to external fixation, Dr. Rahul uses the most appropriate technique for each fracture type and patient condition.\"},{\"title\":\"Care for All Ages\",\"description\":\"Fracture and trauma care for children, adults, and the elderly — including pediatric orthopedics and age-specific recovery protocols.\"},{\"title\":\"Focus on Full Recovery\",\"description\":\"Treatment does not end at surgery. Dr. Rahul ensures every patient has a structured rehabilitation plan to restore mobility and return to daily life safely.\"}]', 'assets/img/services/orthopedic-trauma-fracture-care-in-nagpur-dr-rahul-agrawal-hero-69ce5a51da31c.webp', 'Orthopedic Trauma & Fracture Care — Dr. Rahul Agrawal at R.K. Hospital, Nagpur', 'orthopedic-trauma-fracture-care-in-nagpur-dr-rahul-agrawal', 'Expert orthopedic trauma and fracture care by Dr. Rahul Agrawal at R.K. Hospital, Nagpur. Accurate diagnosis, safe surgical management, and structured rehabilitation for all types of fractures and musculoskeletal injuries.', 'Orthopedic Trauma & Fracture Care in Nagpur', '[{\"name\":\"Home\",\"url\":\"/\"},{\"name\":\"Services\",\"url\":\"/services.php\"},{\"name\":\"Orthopedics\",\"url\":\"/services.php?category=orthopedics\"},{\"name\":\"Orthopedic Trauma & Fracture Care in Nagpur | Dr. Rahul Agrawal\",\"url\":\"/orthopedic-trauma-fracture-care-in-nagpur-dr-rahul-agrawal\"}]', '<p class=\"ql-align-justify\"><span style=\"color: rgb(0, 0, 0); background-color: rgb(255, 255, 255);\">A fracture or traumatic injury can disrupt life in an instant. Prompt, accurate treatment is critical — not just to heal the bone, but to restore full function and prevent long-term complications. At R.K. Hospital, Central Avenue, Nagpur, Dr. Rahul R. Agrawal provides comprehensive orthopedic trauma and fracture care for patients of all ages, from children to the elderly.</span></p><p class=\"ql-align-justify\"><br></p><p class=\"ql-align-justify\"><span style=\"color: rgb(0, 0, 0); background-color: rgb(255, 255, 255);\">Dr. Rahul brings a patient-first approach to every case. Whether it is a simple fracture from a fall, a complex multi-fragment injury from a road accident, or a sports-related trauma, he begins with a thorough assessment and transparent explanation of the treatment plan — so patients and families always understand what to expect.</span></p><p class=\"ql-align-justify\"><br></p><p class=\"ql-align-justify\"><span style=\"color: rgb(0, 0, 0); background-color: rgb(255, 255, 255);\">Treatment options range from conservative management with casting and immobilisation to advanced surgical interventions including internal fixation, external fixation, intramedullary nailing, and plating techniques. Dr. Rahul is experienced in managing open fractures, periarticular fractures, and polytrauma cases that require coordinated emergency care.</span></p><p class=\"ql-align-justify\"><br></p><p class=\"ql-align-justify\"><span style=\"color: rgb(0, 0, 0); background-color: rgb(255, 255, 255);\">Beyond the initial treatment, recovery matters just as much. Dr. Rahul emphasises structured rehabilitation and follow-up to ensure fractures heal correctly, mobility is restored, and patients return to their normal lives as quickly and safely as possible.</span></p><p class=\"ql-align-justify\"><br></p><p class=\"ql-align-justify\"><span style=\"color: rgb(0, 0, 0); background-color: rgb(255, 255, 255);\">R.K. Hospital is equipped to handle orthopedic emergencies and planned trauma surgeries, serving patients from Nagpur and across Central India.</span></p><p class=\"ql-align-justify\"><br></p>', NULL, '[{\"q\":\"When should I see an orthopedic surgeon for a fracture?\",\"a\":\"You should seek orthopedic care immediately after any suspected fracture — especially if there is swelling, deformity, inability to bear weight, or severe pain. Early assessment ensures the fracture is correctly diagnosed and treated before complications arise.\"},{\"q\":\"Do all fractures require surgery?\",\"a\":\"No. Many fractures can be managed conservatively with casting, splinting, or immobilisation. Surgery is recommended when the fracture is displaced, unstable, involves a joint, or cannot be held in place with non-surgical methods. Dr. Rahul assesses each case individually and recommends the safest, most effective approach.\"},{\"q\":\"Does R.K. Hospital treat sports injuries?\",\"a\":\"Yes. Dr. Rahul has experience treating a wide range of sports injuries including ligament tears, dislocations, stress fractures, and muscle injuries — with a focus on safe return to activity through appropriate treatment and rehabilitation.\"},{\"q\":\"What types of fractures does Dr. Rahul Agrawal treat?\",\"a\":\"Dr. Rahul manages all types of fractures including simple and complex fractures, open fractures, periarticular fractures, stress fractures, and polytrauma cases involving multiple injuries from road accidents or falls.\"},{\"q\":\"How long does it take to recover from a fracture?\",\"a\":\"Recovery time depends on the type and location of the fracture, the patient\'s age, and the treatment method used. Simple fractures may heal in 6 to 8 weeks, while complex or surgical cases may require several months of rehabilitation. Dr. Rahul provides a personalised recovery plan for every patient.\"},{\"q\":\"Where is Dr. Rahul Agrawal\'s clinic in Nagpur?\",\"a\":\"Dr. Rahul practices at R.K. Hospital, 27 Chandrashekhar, Azad Square, Central Avenue, beside Hotel Al Zam Zam, Itwari, Nagpur, Maharashtra 440002 — serving patients from Nagpur and across Central India.\"}]', 'assets/img/services/orthopedic-trauma-fracture-care-in-nagpur-dr-rahul-agrawal-main-69ce5a51c30f2.webp', NULL, '[{\"src\":\"assets/img/services/gallery/orthopedic-trauma-fracture-care-in-nagpur-dr-rahul-agrawal-gallery-69ce5a52c5b5c.webp\",\"alt\":\"Orthopedic Trauma & Fracture Care in Nagpur | Dr. Rahul Agrawal\"},{\"src\":\"assets/img/services/gallery/orthopedic-trauma-fracture-care-in-nagpur-dr-rahul-agrawal-gallery-69ce5a52dcfbb.webp\",\"alt\":\"Orthopedic Trauma & Fracture Care in Nagpur | Dr. Rahul Agrawal\"},{\"src\":\"assets/img/services/gallery/orthopedic-trauma-fracture-care-in-nagpur-dr-rahul-agrawal-gallery-69ce5a52f264d.webp\",\"alt\":\"Orthopedic Trauma & Fracture Care in Nagpur | Dr. Rahul Agrawal\"},{\"src\":\"assets/img/services/gallery/orthopedic-trauma-fracture-care-in-nagpur-dr-rahul-agrawal-gallery-69ce5a53142f6.webp\",\"alt\":\"Orthopedic Trauma & Fracture Care in Nagpur | Dr. Rahul Agrawal\"},{\"src\":\"assets/img/services/gallery/orthopedic-trauma-fracture-care-in-nagpur-dr-rahul-agrawal-gallery-69ce5a531a87d.webp\",\"alt\":\"Orthopedic Trauma & Fracture Care in Nagpur | Dr. Rahul Agrawal\"},{\"src\":\"assets/img/services/gallery/orthopedic-trauma-fracture-care-in-nagpur-dr-rahul-agrawal-gallery-69ce5a532e9fa.webp\",\"alt\":\"Orthopedic Trauma & Fracture Care in Nagpur | Dr. Rahul Agrawal\"}]', NULL, 1, NULL, NULL, 1, 0, 'Orthopedic Trauma & Fracture Care Nagpur | Dr. Rahul Agrawal', 'Expert orthopedic trauma & fracture care in Nagpur by Dr. Rahul Agrawal at R.K. Hospital. Emergency treatment, surgical fixation & rehabilitation.', 'orthopedic trauma fracture care Nagpur', 'https://dragrawalsrkhospital.in/services/orthopedic-trauma-fracture-care-nagpur', 'Orthopedic Trauma & Fracture Care in Nagpur | R.K. Hospital', 'Trusted fracture & trauma care by Dr. Rahul Agrawal. Emergency treatment, surgical fixation & rehabilitation at R.K. Hospital, Nagpur.', NULL, 'website', 'Orthopedic Trauma & Fracture Care in Nagpur | Dr. Rahul Agrawal', 'Expert fracture & trauma care at R.K. Hospital, Nagpur. Emergency treatment, surgical fixation & recovery by Dr. Rahul Agrawal.', 'summary_large_image', 'index,follow', 'MedicalProcedure', '{\"@context\":\"https://schema.org\",\"@type\":\"MedicalProcedure\",\"name\":\"Orthopedic Trauma & Fracture Care Nagpur | Dr. Rahul Agrawal\",\"description\":\"Expert orthopedic trauma & fracture care in Nagpur by Dr. Rahul Agrawal at R.K. Hospital. Emergency treatment, surgical fixation & rehabilitation.\",\"url\":\"https://dragrawalsrkhospital.in/services/orthopedic-trauma-fracture-care-nagpur\",\"image\":\"\"}', '2026-04-02 08:14:50', '2026-04-02 12:00:19');
INSERT INTO `services` (`id`, `title`, `hero_title`, `hero_subtitle`, `hero_content_json`, `service_card_json`, `why_choose_json`, `hero_image`, `hero_image_alt`, `slug`, `short_description`, `h1_title`, `breadcrumb_json`, `content`, `sections_json`, `faqs_json`, `image`, `image_alt`, `gallery_json`, `icon`, `category_id`, `related_services_json`, `doctor_ids`, `is_published`, `sort_order`, `meta_title`, `meta_description`, `focus_keyword`, `canonical_url`, `og_title`, `og_description`, `og_image`, `og_type`, `twitter_title`, `twitter_description`, `twitter_card`, `robots_meta`, `schema_type`, `schema_json`, `created_at`, `updated_at`) VALUES
(27, 'Spine Treatment & Advanced Orthopedic Procedures in Nagpur — Dr. Rahul Agrawal', 'Spine Treatment & Advanced Orthopedic Procedures in Nagpur', 'Precise, evidence-based spine and orthopedic care by Dr. Rahul Agrawal at R.K. Hospital, Central Avenue, Nagpur', '{\"tagline\":\"Advanced Spine & Orthopedic Care in Nagpur\",\"heading\":\"Restoring Movement, Relieving Pain\",\"description\":\"Dr. Rahul R. Agrawal brings deep expertise in spine treatment and advanced orthopedic procedures to every patient at R.K. Hospital, Nagpur. Known for his careful diagnostic approach and transparent guidance, he ensures each patient fully understands their condition and treatment options — and receives care that is safe, effective, and tailored to their recovery goals.\",\"hero_image\":\"assets/img/services/spine-treatment-advanced-orthopedic-procedures-nagpur-hc-69ce5b4da5189.webp\",\"features\":[{\"title\":\"Spine Decompression & Discectomy\",\"description\":\"\",\"icon\":\"doctor\"},{\"title\":\"Spinal Fusion & Deformity Correction\",\"description\":\"\",\"icon\":\"doctor\"},{\"title\":\"Arthroscopy for Joint Conditions\",\"description\":\"\",\"icon\":\"doctor\"},{\"title\":\"Pediatric Orthopedic Procedures\",\"description\":\"\",\"icon\":\"doctor\"},{\"title\":\"Non-Surgical Spine Management\",\"description\":\"\",\"icon\":\"doctor\"}]}', '{\"title\":\"Spine Treatment & Advanced Orthopedic Procedures\",\"department\":\"Orthopedics & Spine Surgery\",\"location\":\"R.K. Hospital, Central Avenue, Nagpur\",\"description\":\"Advanced spine treatment and orthopedic procedures including discectomy, spinal fusion, arthroscopy, and deformity correction — by Dr. Rahul Agrawal at R.K. Hospital, Nagpur.\",\"thumbnail_alt\":\"Spine Treatment & Advanced Orthopedic Procedures at R.K. Hospital, Nagpur\"}', '[{\"title\":\"Experienced Orthopedic Surgeon\",\"description\":\"Dr. Rahul R. Agrawal is a trusted orthopedic surgeon in Nagpur, known for his patient-first approach, transparent guidance, and expertise in spine and advanced orthopedic care.\"},{\"title\":\"Conservative Care First\",\"description\":\"Dr. Rahul always explores non-surgical options before recommending procedures — ensuring patients receive the least invasive, most effective treatment for their condition.\"},{\"title\":\"Advanced Surgical Expertise\",\"description\":\"From spinal decompression and fusion to arthroscopy and deformity correction, Dr. Rahul performs complex procedures with precision and a focus on safe outcomes.\"},{\"title\":\"Pediatric Orthopedic Care\",\"description\":\"Specialised treatment for children with congenital and acquired bone and joint conditions — with age-appropriate surgical and non-surgical approaches.\"},{\"title\":\"Structured Rehabilitation & Follow-Up\",\"description\":\"Every patient receives a personalised post-treatment recovery plan to restore strength, mobility, and independence as quickly and safely as possible.\"}]', 'assets/img/services/spine-treatment-advanced-orthopedic-procedures-nagpur-hero-69ce5b4d7e3d6.webp', 'Spine Treatment & Advanced Orthopedic Procedures — Dr. Rahul Agrawal at R.K. Hospital, Nagpur', 'spine-treatment-advanced-orthopedic-procedures-nagpur', 'Expert spine treatment and advanced orthopedic procedures by Dr. Rahul Agrawal at R.K. Hospital, Nagpur. From back pain and disc problems to deformity correction and arthroscopy — precise care for lasting relief.', 'Spine Treatment & Advanced Orthopedic Procedures in Nagpur', '[{\"name\":\"Home\",\"url\":\"/\"},{\"name\":\"Services\",\"url\":\"/services.php\"},{\"name\":\"Spine Care\",\"url\":\"/services.php?category=spine+care\"},{\"name\":\"Spine Treatment & Advanced Orthopedic Procedures in Nagpur — Dr. Rahul Agrawal\",\"url\":\"/spine-treatment-advanced-orthopedic-procedures-nagpur\"}]', '<p><span style=\"color: rgb(0, 0, 0); background-color: rgb(255, 255, 255);\">Spine and musculoskeletal problems can significantly affect quality of life — limiting movement, causing persistent pain, and making everyday tasks difficult. At R.K. Hospital, Central Avenue, Nagpur, Dr. Rahul R. Agrawal offers advanced spine treatment and orthopedic procedures with a focus on accurate diagnosis, minimal intervention where possible, and safe, lasting outcomes.</span></p><p><span style=\"color: rgb(0, 0, 0); background-color: rgb(255, 255, 255);\">Dr. Rahul evaluates each patient thoroughly before recommending any procedure. Many spine conditions — including disc problems, nerve compression, and lower back pain — can be effectively managed with non-surgical approaches such as physiotherapy, medication, and lifestyle modifications. Surgery is considered only when conservative treatment has not provided relief or when the condition requires immediate intervention.</span></p><p><span style=\"color: rgb(0, 0, 0); background-color: rgb(255, 255, 255);\">For patients who require surgical treatment, Dr. Rahul performs advanced procedures including spinal decompression, discectomy, spinal fusion, and deformity correction. His approach combines precision with a clear focus on restoring function and reducing pain — with structured post-operative rehabilitation to support full recovery.</span></p><p><span style=\"color: rgb(0, 0, 0); background-color: rgb(255, 255, 255);\">Beyond spine care, Dr. Rahul specialises in advanced orthopedic procedures including arthroscopy for joint diagnosis and treatment, deformity correction for congenital and acquired bone deformities, and pediatric orthopedics for children with musculoskeletal conditions. Each procedure is tailored to the individual patient\'s condition, age, and recovery goals.</span></p><p><span style=\"color: rgb(0, 0, 0); background-color: rgb(255, 255, 255);\">Patients travel from across Nagpur and Central India to R.K. Hospital for Dr. Rahul\'s expertise — trusting his transparent guidance, careful surgical judgment, and commitment to patient wellbeing at every stage of care.</span></p><p><br></p>', NULL, '[{\"q\":\"What spine conditions does Dr. Rahul Agrawal treat?\",\"a\":\"Dr. Rahul treats a wide range of spine conditions including herniated or slipped discs, spinal stenosis, nerve compression, lower back pain, sciatica, spondylosis, and spinal deformities such as scoliosis and kyphosis.\"},{\"q\":\"Is surgery always required for spine problems?\",\"a\":\"No. Many spine conditions respond well to non-surgical treatment including physiotherapy, pain management, and lifestyle changes. Dr. Rahul recommends surgery only when conservative methods have not provided sufficient relief or when the condition poses a risk to nerve function or mobility.\"},{\"q\":\"What is a discectomy and when is it needed?\",\"a\":\"A discectomy is a surgical procedure to remove the damaged portion of a herniated disc that is pressing on a nerve. It is typically recommended when a patient experiences persistent leg or arm pain, numbness, or weakness that has not improved with non-surgical treatment.\"},{\"q\":\"What is arthroscopy and what conditions can it treat?\",\"a\":\"Arthroscopy is a minimally invasive procedure in which a small camera is inserted into a joint to diagnose and treat conditions such as cartilage damage, ligament tears, meniscus injuries, and joint inflammation. It involves small incisions, less post-operative pain, and a faster recovery compared to open surgery.\"},{\"q\":\"Does Dr. Rahul treat children with bone or joint problems?\",\"a\":\"Yes. Dr. Rahul has expertise in pediatric orthopedics, treating children with conditions such as congenital deformities, growth-related bone problems, fractures, and developmental joint disorders with age-appropriate care plans.\"},{\"q\":\"Where can I consult Dr. Rahul Agrawal for spine treatment in Nagpur?\",\"a\":\"Dr. Rahul practices at R.K. Hospital, 27 Chandrashekhar, Azad Square, Central Avenue, beside Hotel Al Zam Zam, Itwari, Nagpur, Maharashtra 440002 — serving patients from Nagpur and across Central India.\"}]', 'assets/img/services/spine-treatment-advanced-orthopedic-procedures-nagpur-main-69ce5b4d792f0.webp', NULL, '[{\"src\":\"assets/img/services/gallery/spine-treatment-advanced-orthopedic-procedures-nagpur-gallery-69ce5b4dd257c.webp\",\"alt\":\"Spine Treatment & Advanced Orthopedic Procedures in Nagpur — Dr. Rahul Agrawal\"},{\"src\":\"assets/img/services/gallery/spine-treatment-advanced-orthopedic-procedures-nagpur-gallery-69ce5b4dd870c.webp\",\"alt\":\"Spine Treatment & Advanced Orthopedic Procedures in Nagpur — Dr. Rahul Agrawal\"},{\"src\":\"assets/img/services/gallery/spine-treatment-advanced-orthopedic-procedures-nagpur-gallery-69ce5b4dde56d.webp\",\"alt\":\"Spine Treatment & Advanced Orthopedic Procedures in Nagpur — Dr. Rahul Agrawal\"},{\"src\":\"assets/img/services/gallery/spine-treatment-advanced-orthopedic-procedures-nagpur-gallery-69ce5b4de3e35.webp\",\"alt\":\"Spine Treatment & Advanced Orthopedic Procedures in Nagpur — Dr. Rahul Agrawal\"},{\"src\":\"assets/img/services/gallery/spine-treatment-advanced-orthopedic-procedures-nagpur-gallery-69ce5b4de9fc4.webp\",\"alt\":\"Spine Treatment & Advanced Orthopedic Procedures in Nagpur — Dr. Rahul Agrawal\"},{\"src\":\"assets/img/services/gallery/spine-treatment-advanced-orthopedic-procedures-nagpur-gallery-69ce5b4defcf0.webp\",\"alt\":\"Spine Treatment & Advanced Orthopedic Procedures in Nagpur — Dr. Rahul Agrawal\"}]', NULL, 5, NULL, NULL, 1, 0, 'Spine Treatment & Orthopedic Procedures in Nagpur | Dr. Rahul Agrawal', 'Expert spine treatment & advanced orthopedic procedures in Nagpur by Dr. Rahul Agrawal at R.K. Hospital. Discectomy, spinal fusion, arthroscopy & deformity correction.', 'spine treatment Nagpur', 'https://dragrawalsrkhospital.in/service/spine-treatment-advanced-orthopedic-nagpur', 'Spine Treatment & Advanced Orthopedic Procedures in Nagpur — R.K. Hospital', 'Trusted spine & orthopedic care by Dr. Rahul Agrawal. Discectomy, spinal fusion, arthroscopy & deformity correction at R.K. Hospital, Nagpur.', NULL, 'website', 'Spine Treatment & Orthopedic Procedures in Nagpur | Dr. Rahul Agrawal', 'Advanced spine & orthopedic care at R.K. Hospital, Nagpur. Discectomy, fusion, arthroscopy & more by Dr. Rahul Agrawal.', 'summary_large_image', 'index,follow', 'MedicalProcedure', '{\"@context\":\"https://schema.org\",\"@type\":\"MedicalProcedure\",\"name\":\"Spine Treatment & Orthopedic Procedures in Nagpur | Dr. Rahul Agrawal\",\"description\":\"Expert spine treatment & advanced orthopedic procedures in Nagpur by Dr. Rahul Agrawal at R.K. Hospital. Discectomy, spinal fusion, arthroscopy & deformity correction.\",\"url\":\"https://dragrawalsrkhospital.in/service/spine-treatment-advanced-orthopedic-nagpur\",\"image\":\"\"}', '2026-04-02 08:20:12', '2026-04-02 12:04:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_activity_log`
--
ALTER TABLE `admin_activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_user_id` (`user_id`),
  ADD KEY `idx_action` (`action`),
  ADD KEY `idx_created_at` (`created_at`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `fk_blog_cat` (`categories`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_services`
--
ALTER TABLE `doctor_services`
  ADD PRIMARY KEY (`doctor_id`,`service_id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_activity_log`
--
ALTER TABLE `admin_activity_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `fk_blog_cat` FOREIGN KEY (`categories`) REFERENCES `blog_categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `doctor_services`
--
ALTER TABLE `doctor_services`
  ADD CONSTRAINT `doctor_services_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `doctor_services_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_fk_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
