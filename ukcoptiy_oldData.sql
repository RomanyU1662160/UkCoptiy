-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2019 at 04:40 PM
-- Server version: 5.6.37
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukcoptiy`
--

-- --------------------------------------------------------

--
-- Table structure for table `cans`
--

CREATE TABLE IF NOT EXISTS `cans` (
  `id` int(10) unsigned NOT NULL,
  `can` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cans_roles`
--

CREATE TABLE IF NOT EXISTS `cans_roles` (
  `id` int(10) unsigned NOT NULL,
  `can_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `churches`
--

CREATE TABLE IF NOT EXISTS `churches` (
  `id` int(10) unsigned NOT NULL,
  `region_id` int(10) unsigned NOT NULL,
  `parish_id` int(10) unsigned NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=112 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `churches`
--

INSERT INTO `churches` (`id`, `region_id`, `parish_id`, `name`, `city`, `postcode`, `address1`, `address2`, `email`, `phone`, `about`, `created_at`, `updated_at`) VALUES
(11, 2, 1, 'St Mary and St Michael Church', 'Glasgow ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 1, 1, 'St. Steven Church', 'Belfast ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 1, 1, 'St. Mina Church', 'Cahir ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 1, 1, 'Coptic Culture Centre', 'Cahir ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 1, 1, 'St. George Abbey', 'Delvin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 1, 1, 'St. Mary & St. Demiana Church', 'Dublin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 1, 1, 'St. Maximos & St. Domatios Church', 'Dublin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 1, 1, 'Seven Coptic Monks Church', 'Galway', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 1, 1, 'St. Athanasius Monastery', 'Waterford', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 3, 1, ' St. George & St. Athanasius Church.', 'Glasgow ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1, 3, 1, 'St. Mary & St. Abanoub Church', 'Leeds', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 3, 1, 'St. Antonius Church', 'Rotherham ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 3, 1, 'St. Athanasius Monastery.', 'Scarborough', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 6, 2, 'St. Mary & St. Mark''s Coptic Orthodox Centre', 'Birmingham', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 6, 2, 'St. Mary & St. Abu-Sefein''s Church', 'Birmingham', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 6, 2, 'St. Mary & Archangel Michael''s Coptic Orthodox Cathedral', 'Birmingham', NULL, NULL, NULL, NULL, NULL, 'under construction', NULL, NULL),
(17, 6, 2, 'St. Mary and St. Antony''s Coptic Orthodox Church', 'Birmingham', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 7, 2, 'St. Mary & St. Philopater''s Coptic Orthodox Church', 'Bolton', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 8, 2, 'St. Mary & St. Cyril''s Coptic Orthodox Church', 'Liverpool', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 9, 2, 'St. Mary & St. Mina''s Coptic Orthodox Church', 'Manchester', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 10, 2, 'St. Mary & St. George''s Coptic Orthodox Church', 'Nottingham', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 11, 2, 'St. Mary & St. Abaskhyron''s Coptic Orthodox Church', 'North Wales ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 12, 2, 'Church Of Central Birmingham', 'Birmingham', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 12, 2, 'Church Of Derby', 'Derby', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 12, 2, 'Church Of Leicester', 'Leicester', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 12, 2, 'Church Of Northampton', 'Northampton', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 12, 2, 'Church Of Oxford', 'Oxford', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 12, 2, 'Church Of Stoke-on-Trent', 'Stoke-on-Trent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 14, 3, 'St. George''s Coptic Orthodox Cathedral at the Archangel Michael & St. Anthony Centre', 'Stevenage', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 13, 3, 'St Mary’s and St Abu Saifain’s Coptic Orthodox Church, Cardiff, Wales.', 'South Wales', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 12, 2, 'St. Mary and St. Mina, New Malden', 'London', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 15, 4, 'St Mary and St Abraam Coptic Orthodox Church, Hove', 'Sussex', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 15, 4, 'St Demiana and St. Pope Kyrillos VI Coptic Orthodox Church,', 'Sussex', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 16, 5, 'Archangel Michael and St. Mina Coptic Orthodox Church', 'South West Wales', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `start_at` datetime DEFAULT NULL,
  `end_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `families`
--

CREATE TABLE IF NOT EXISTS `families` (
  `id` int(10) unsigned NOT NULL,
  `church_id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `families`
--

INSERT INTO `families` (`id`, `church_id`, `name`, `created_at`, `updated_at`) VALUES
(18, 11, 'Laura + Hany', '2019-03-03 12:51:20', '2019-03-03 12:51:20'),
(17, 11, 'partner 1 + partner2', '2019-03-01 22:11:47', '2019-03-01 22:11:47'),
(16, 1, 'Romany + Mariam', '2019-03-01 21:49:55', '2019-03-01 21:49:55');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint(20) unsigned NOT NULL,
  `queue` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `family_id` int(10) unsigned NOT NULL,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `avatar` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `live` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `user_id`, `family_id`, `title`, `fname`, `lname`, `email`, `gender`, `mobile`, `house`, `address`, `postcode`, `dob`, `avatar`, `live`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Mr', 'Raffi', 'Sefen', 'raffi@coptiy.com', 'male', '0777777777', '7', 'Balmoral', 'HD4', '2010-08-20', NULL, 1, NULL, NULL),
(20, NULL, 1, 'Dr', 'Rina', 'Sefen', NULL, NULL, NULL, NULL, NULL, NULL, '2015-12-23', NULL, 0, '2019-02-26 20:37:29', '2019-02-26 20:37:29'),
(21, NULL, 2, 'Mrs', 'Abanob', 'Girgis', 'Abanob@gmail.com', NULL, NULL, NULL, NULL, NULL, '2010-10-10', NULL, 0, '2019-02-26 20:38:06', '2019-02-28 21:57:01'),
(22, NULL, 3, 'Mrs', 'Mark', 'Goddard', NULL, NULL, NULL, NULL, NULL, NULL, '2015-10-10', NULL, 0, '2019-02-26 20:38:48', '2019-02-26 20:38:48'),
(23, NULL, 1, 'Mrs', 'Romany', 'Sefen', NULL, NULL, '7342978488', '7 Balmoral Avenue', NULL, 'HD4 5LR', '1975-04-27', NULL, 0, '2019-02-28 00:09:13', '2019-02-28 21:31:41'),
(24, NULL, 14, 'Mrs', 'Romany', 'Sefen', NULL, NULL, NULL, NULL, NULL, NULL, '1975-04-27', NULL, 0, '2019-03-01 20:52:04', '2019-03-01 20:52:04'),
(25, NULL, 15, 'Mrs', 'Roma', 'Sefen', NULL, NULL, NULL, NULL, NULL, NULL, '2010-12-26', NULL, 0, '2019-03-01 20:58:45', '2019-03-01 20:59:02'),
(26, NULL, 16, 'Mrs', 'Raffi', 'Sefen', NULL, NULL, NULL, 'Balmoral Avenue', NULL, 'HD4 5LR', '2010-08-20', NULL, 0, '2019-03-01 21:50:23', '2019-03-02 22:48:10'),
(27, NULL, 17, 'Mrs', 'member1', 'last name', NULL, NULL, NULL, NULL, NULL, NULL, '2016-07-20', NULL, 0, '2019-03-01 22:12:11', '2019-03-01 22:12:45'),
(28, NULL, 16, 'Mrs', 'Romany', 'Sefen', 'romany@coptiy.com', NULL, '07243978488', NULL, NULL, NULL, '1975-04-27', NULL, 0, '2019-03-03 12:09:24', '2019-03-03 12:11:15'),
(29, NULL, 16, 'Dr', 'Rhianna', 'Sefen', 'rhian@coptiy.com', NULL, NULL, NULL, NULL, NULL, '2014-12-23', NULL, 0, '2019-03-03 12:09:57', '2019-03-03 12:10:32'),
(30, NULL, 16, 'Mrs', 'Mariam', 'Megaly', NULL, NULL, NULL, NULL, NULL, NULL, '1984-10-10', NULL, 0, '2019-03-03 12:12:16', '2019-03-03 12:12:16'),
(31, NULL, 18, 'Dr', 'Jomana', 'Hany', NULL, NULL, NULL, NULL, NULL, NULL, '2010-12-12', NULL, 0, '2019-03-03 12:52:34', '2019-03-03 12:52:34');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(16, '2014_10_12_000000_create_users_table', 3),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_02_02_213142_create_families_table', 1),
(4, '2019_02_02_213412_create_roles_table', 1),
(5, '2019_02_02_213456_create_users_roles_table', 1),
(6, '2019_02_02_213838_create_cans_table', 1),
(7, '2019_02_02_213921_create_cans_roles_table', 1),
(14, '2019_02_03_164754_create_events_table', 2),
(9, '2019_02_03_161958_create_parishes_table', 1),
(10, '2019_02_03_162050_create_regions_table', 1),
(13, '2019_02_02_214836_create_churches_table', 2),
(18, '2019_02_21_204814_create_members_table', 4),
(19, '2019_03_03_162428_create_jobs_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `parishes`
--

CREATE TABLE IF NOT EXISTS `parishes` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bishop` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parishes`
--

INSERT INTO `parishes` (`id`, `name`, `bishop`, `about`, `created_at`, `updated_at`) VALUES
(1, ' Ireland, Scotland, North East England and its Affiliated Regions', 'Bishop Antony', 'Bishop Antony, Bishop of the Holy Diocese of Ireland, Scotland and North East England. The Diocese was established in 1995.', NULL, NULL),
(2, 'The Midlands', 'Bishop Missael', 'Bishop Missael is the bishop of the Holy Diocese of the Midlands. The Diocese was established in 1991 by Pope Shenouda III, making it the oldest diocese in the United Kingdom for the Coptic Orthodox Patriarchate. The Diocese is currently based at the Coptic Orthodox Centre in Lapworth, Warwickshire, where Bishop Missael resides. Its territories include North Wales and the English regions: West Midlands, East Midlands, North West and parts of the South East, South West and East of England.', NULL, NULL),
(3, 'London', 'Bishop Angaelos', 'Bishop Angaelos OBE, Bishop of the Holy Diocese of London and Patriarchal Exarch. The Diocese was established in 2017 by Pope Tawadros II of Alexandria and is currently based at St. George''s Coptic Orthodox Cathedral in Stevenage, the seat of the bishop.', NULL, NULL),
(4, 'South West Wales', 'Pope Tawadros II of Alexandria ', 'This Church is under patriarchal supervision of Pope Tawadros II of Alexandria since he is currently the head of the Parish''s Council.', NULL, NULL),
(5, 'Sussex', 'Bishop Paula(diocesan bishop of Tanta)', 'These churches are currently under the supervision of Bishop Paula, diocesan bishop of Tanta, since he is currently the head of the Parish''s Council.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE IF NOT EXISTS `regions` (
  `id` int(10) unsigned NOT NULL,
  `parish_id` int(10) unsigned NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `parish_id`, `name`, `created_at`, `updated_at`) VALUES
(13, 3, 'South Wales', NULL, NULL),
(1, 1, 'Ireland', NULL, NULL),
(2, 1, 'Scotland', NULL, NULL),
(3, 1, 'North East England', NULL, NULL),
(4, 1, 'Affiliated Regions', NULL, NULL),
(5, 1, 'Communities', NULL, NULL),
(14, 3, 'Stevenage', NULL, NULL),
(6, 2, 'Birmingham\r\n', NULL, NULL),
(7, 2, 'Bolton', NULL, NULL),
(8, 2, 'Liverpool', NULL, NULL),
(9, 2, 'Manchester', NULL, NULL),
(10, 2, 'Nottingham', NULL, NULL),
(11, 2, 'North Wales', NULL, NULL),
(12, 2, 'Communities', NULL, NULL),
(15, 4, 'Sussex', NULL, NULL),
(16, 5, 'South West Wales', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL,
  `role` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `member_id` int(10) unsigned DEFAULT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `member_id`, `fname`, `lname`, `password`, `email`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Romany', 'Sefen', '$2y$10$5rvlEURLatmmXzrXCYH1zOxkNisw7GB.3dqHPmYgF2agD9DRP5k4u', 'romany@coptiy.com', 'WkuqpbcEPK175ubyWmczZM3dVl7ZgnSay3j8eX2YU3bNe5um5WUsbijtqpW0', '2019-02-21 22:02:36', '2019-02-21 22:02:36'),
(2, NULL, 'Raffi', 'Sefen', '$2y$10$oyj5ziUc6B8gYZgwP9muqOgeqTMR/fIbZ/hm2cnF08UJwdCgrsXxq', 'raffi@coptiy.com', NULL, '2019-02-21 22:08:08', '2019-02-21 22:08:08');

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
--

CREATE TABLE IF NOT EXISTS `users_roles` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cans`
--
ALTER TABLE `cans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cans_roles`
--
ALTER TABLE `cans_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cans_roles_can_id_index` (`can_id`),
  ADD KEY `cans_roles_role_id_index` (`role_id`);

--
-- Indexes for table `churches`
--
ALTER TABLE `churches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `churches_name_unique` (`name`),
  ADD KEY `churches_region_id_index` (`region_id`),
  ADD KEY `parish_id` (`parish_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `families`
--
ALTER TABLE `families`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `members_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parishes`
--
ALTER TABLE `parishes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `regions_parish_id_index` (`parish_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_roles`
--
ALTER TABLE `users_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_roles_user_id_index` (`user_id`),
  ADD KEY `users_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cans`
--
ALTER TABLE `cans`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cans_roles`
--
ALTER TABLE `cans_roles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `churches`
--
ALTER TABLE `churches`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `families`
--
ALTER TABLE `families`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `parishes`
--
ALTER TABLE `parishes`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users_roles`
--
ALTER TABLE `users_roles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
