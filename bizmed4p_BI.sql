-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 24, 2022 at 10:53 AM
-- Server version: 5.7.23-23
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bizmed4p_BI`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Master Admin', 'neeraj@bizmethsolutions.com', 'eyJpdiI6InRMU1puY0pHMmZSM3BmMzErQTFKclE9PSIsInZhbHVlIjoiMGdkOWw4eSs0aG00Wnh0UTZqZEllZz09IiwibWFjIjoiNmNmYzExYmVkNTcyNjBiNTZjMTlkNDc2YTY5NWFiZjY2NTBkYmRjM2RmZTdlOTRlZDk2OGEyNThlNDI4YWM1ZiIsInRhZyI6IiJ9', '2021-06-18 11:47:33', '2021-06-18 11:47:33');

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE `agency` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`id`, `name`, `email`, `language`, `city`, `agency`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'neeraj@bizmethsolutions.com', NULL, NULL, NULL, NULL, 'eyJpdiI6ImxWeTdlZFBSR3YraHZSazZCOGRxdkE9PSIsInZhbHVlIjoiRXExWU5jNGs1OEpKVG9GaHMxWllxZz09IiwibWFjIjoiODYwZTI0YWU3MjlmY2M0NDNhN2FhOWU5OGQ4MDNhNGZjY2QxYjRmMGFjYTY5MGNjY2ViMDAzNzg5ZmM1OTUyNCIsInRhZyI6IiJ9', NULL, '2022-03-04 08:52:42', '2022-03-04 08:52:42'),
(2, NULL, 'pranjalm35@gmail.com', NULL, NULL, NULL, NULL, 'eyJpdiI6ImxQbElDMDJBMFlkZkpQaXVMVncrRlE9PSIsInZhbHVlIjoiWndGc24rdFJxQTZvWjdXbTdFZ29xQT09IiwibWFjIjoiMzBjMjA1ZjM0ZjQwNmM4NGU1YjA3ZmQzYjNlZmYxZGI1OWMyODJjYWQ4YmNjNmQ5NjgxNGYxYmQ3YzNkM2JkNiIsInRhZyI6IiJ9', NULL, '2022-03-09 06:29:03', '2022-03-09 06:29:03');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_type` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agency_id` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `email`, `brand_type`, `language`, `city`, `agency`, `agency_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Neeraj Dandotiya', 'neeraj@bizmethsolutions.com', 'Ecommerce', 'Hindi', 'Mumbai', 'Ecommerce', NULL, NULL, 'eyJpdiI6IitlZGZycXh2N3ZZNHRaOFhpZTdxUEE9PSIsInZhbHVlIjoieUtUdWR4dDZGWWU0bjUrU1RISldmUT09IiwibWFjIjoiNGY4MzhiYTBmY2IzM2Q5NzAwZDMzNTFkZTEwYWU4MzAxNjA0NmQ2NWFmZGJjYmQ2MWMyYWEyNmRlMzFmNjNkMCIsInRhZyI6IiJ9', NULL, '2021-09-13 07:07:21', '2021-09-13 07:07:21'),
(2, NULL, 'neeraj@bizmethsolutions.comm', NULL, NULL, NULL, NULL, NULL, NULL, 'eyJpdiI6ImNoeDZiUUlHV2x4YnNyOEFhMFVCZXc9PSIsInZhbHVlIjoiSmNpTTR5YjdyZjY2Rk9NYWhKZll0QT09IiwibWFjIjoiY2M2NWQwMmNkYmVmNzM5MzdiYThmMDQ1Y2ZhYzk2NGE4ZTkxYmQwMDU4YWE1MTkxZTI3OTQ3Njk5ZjFkODUxOSIsInRhZyI6IiJ9', NULL, '2021-09-13 13:08:37', '2021-09-13 13:08:37'),
(3, NULL, 'neeraj@bizmethsolutions.commm', NULL, NULL, NULL, NULL, NULL, NULL, 'eyJpdiI6InVVZ0tnOTVpMmZmdWVpYXlMZGcvVUE9PSIsInZhbHVlIjoicVVjNnFaQk9UbkFvNm93NHhWUmNLUT09IiwibWFjIjoiNGU2OWZjYTZhMGM4NDBkNDAwNTkwNDAwZTg2ZTlkNTU1NmJjYWE5YzU0MTFiNTAyZWI5MWYyZTIzMjE2NTM2YyIsInRhZyI6IiJ9', NULL, '2021-09-28 08:06:02', '2021-09-28 08:06:02'),
(4, 'Test', 'test@myemail.com', 'Test', 'Tesr', 'Test', 'Test', NULL, NULL, 'eyJpdiI6ImRCVEk1c2kxTjRhbzNpd3I1RFNYd3c9PSIsInZhbHVlIjoibkFrNzBvR0ZpVXBZa2U2ZDdpZnRodz09IiwibWFjIjoiYThlMWE5Mzc3YjQxNjJjZDY4ZGYxZDVkY2RmOTcyNTk4Mjg1Mzg5NzM1ODVhNTAyMGMwNGRhYjI2ZDRhM2QxMCIsInRhZyI6IiJ9', NULL, '2022-01-11 16:02:49', '2022-01-11 16:02:49'),
(5, 'Bizmeth', 'neera123j@bizmethsolutions.com', 'test', 'english', 'bangalore', 'test', NULL, NULL, 'eyJpdiI6Ikxod25LS2JWa3dWbStuWDdURkNLVFE9PSIsInZhbHVlIjoiSVRXODZJNHhXK3ZyZ1RmRU56dlVOZ0QxZE1nVmVXM3hEVlhha0J0Y1pXcz0iLCJtYWMiOiJmOTQ1MDE1YmQwY2RiM2Y5Y2E5M2IzZTFlMTg5NzkyMTJiMTk5OWZhMTliZDkyZDE5NDY5YzE2ZGJmM2MwY2Q2IiwidGFnIjoiIn0=', NULL, '2022-02-01 09:15:04', '2022-02-01 09:15:04'),
(6, 'Neeraj', 'neeraj@gmail.com', 'test', 'hindi', 'Indore', NULL, 1, NULL, 'eyJpdiI6IkhLMVFDUnhHYnBIYlkvOEIvRHJVV2c9PSIsInZhbHVlIjoiSnp5VnJDZndTMzJEd0xUS0JXZW8yUT09IiwibWFjIjoiYmE2NWJhMGJkNjkyMzhhOWM4ODhiNWM0ZTU4Nzc2NDg5OWY4MjE0ZDc4ZWZiZWVjNDc0MGIxNDE2MWRjYWM4MSIsInRhZyI6IiJ9', NULL, '2022-03-04 14:22:22', '2022-03-04 14:22:22'),
(7, 'Puma', 'puma@gmaill.com', 'Clothing,shoes', 'english', 'bangalore', NULL, 2, NULL, 'eyJpdiI6InJhbGRsTE9HWnF1VXpYNFg3bEZRUWc9PSIsInZhbHVlIjoiTllZZ1RLbWZVY28yNjhRV1BzYmZ4UT09IiwibWFjIjoiN2E1ZGJkN2JhZWUyNjk3YTIzNWNhMTllYTc4YWY2MjcyMGEwOTlkN2I4ZDU3OGM1MGZiNmMzMWRmYTMzNGNkYSIsInRhZyI6IiJ9', NULL, '2022-03-09 06:30:23', '2022-03-09 06:30:23'),
(8, NULL, 'pranjalm35@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'eyJpdiI6IkVaQy9hQTRIaUlYMmhCV2p6UzE4ekE9PSIsInZhbHVlIjoiMVZmNXVaWERJS1lINmYycytOdVZ5dz09IiwibWFjIjoiNjAxZGYzYWQ0ZDhiNjIwYWE4YWY0M2QxOTA5MGJlMjI3ODc0Yjg4ZGM5NzZlMDA1MzlkMDUwMmFiZWE2MmY2MyIsInRhZyI6IiJ9', NULL, '2022-03-16 13:36:51', '2022-03-16 13:36:51');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `field_of_interest`
--

CREATE TABLE `field_of_interest` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `field_of_interest`
--

INSERT INTO `field_of_interest` (`id`, `name`) VALUES
(1, 'Services'),
(2, 'Electronics'),
(3, 'MakeUp'),
(4, 'Drink'),
(5, 'Jewelry'),
(6, 'Auto'),
(7, 'Entertainment'),
(8, 'Food'),
(9, 'Airline'),
(10, 'Shoes'),
(11, 'Clothing');

-- --------------------------------------------------------

--
-- Table structure for table `influencers`
--

CREATE TABLE `influencers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_id` text COLLATE utf8mb4_unicode_ci,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `influencers`
--

INSERT INTO `influencers` (`id`, `name`, `email`, `facebook_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Neeraj', 'neeraj@bizmethsolutions.com', NULL, NULL, 'eyJpdiI6InhCaDkybkR3UXcweWdkbUQ5amVkU2c9PSIsInZhbHVlIjoiNmVoS1FSVm5HWEh5YloxMGtGSVBEQT09IiwibWFjIjoiNTU1MjFlOGI3MmI1OTZkYzBjMjk2M2EzYzYwMGQ4NDY4OTIzYjhhN2I1NjI5NjNkYmJjN2MxZTc3NTQyZjdmNyIsInRhZyI6IiJ9', NULL, '2021-09-13 20:58:31', '2021-09-13 20:58:31'),
(2, 'Neeraj Dandotiya', 'neeraj123@bizmethsolutions.com', NULL, NULL, 'eyJpdiI6Imd5SHp4T0NFN2NaN3c5bVgrbm9QNmc9PSIsInZhbHVlIjoiRnFvVm11YjlZWFBHYmo1dXA1c0dSQT09IiwibWFjIjoiZWMwNTJhZjc2YzQyYjMyNzU1ZTY0NmJkNTE5MDA5MDdjOTE2MGZiNjU3YTdlOTk5ZmYwMGE0ZGYwNWVlYWRhZiIsInRhZyI6IiJ9', NULL, '2021-09-27 08:06:42', '2021-09-27 08:06:42');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_id` text COLLATE utf8mb4_unicode_ci,
  `instagram_access_token` longtext COLLATE utf8mb4_unicode_ci,
  `instagram_user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `followers` int(11) DEFAULT NULL,
  `brands` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `location`, `age`, `gender`, `foi`, `facebook_id`, `instagram_access_token`, `instagram_user_id`, `email_verified_at`, `password`, `followers`, `brands`, `language`, `city`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Neeraj Dandotiya', 'neeraj_dandotiya143@yahoo.ini', NULL, NULL, NULL, NULL, '4302374713186932', '', '', NULL, 'eyJpdiI6Imx5clRZRWdBcGZrWFZOakthWTlPd0E9PSIsInZhbHVlIjoiYzBCSTI4RkcyMjEwS0lWc3ZXR1F5cVI5VDBMdFp6OTZBd1JxTVlUTXBjQT0iLCJtYWMiOiI3YTJkM2M0OWM4N2U4MjkwOWE1YzcwMjVhNGI2YzVkYTNmZjBiZDRhZTMwZDAxMGY2ZDQxM2YyNDlmZTY3MmUzIiwidGFnIjoiIn0=', NULL, NULL, '', '', NULL, '2021-09-16 07:38:12', '2021-09-16 07:38:12'),
(2, 'Neeraj', 'neeraj@bizmethsolutions.comm', NULL, NULL, NULL, NULL, NULL, '', '', NULL, 'eyJpdiI6ImhVeExVNy96ell5SE85eU1CcXBQdmc9PSIsInZhbHVlIjoiM2VFMEU4WUlCOFZHc1ZVUVorS1Y0UT09IiwibWFjIjoiZDEyNjNiNDI5OThiMjk2M2JlOGVmZjg0YzQwZDE3ZDkwOTZmOGZmMWU2YTdlYmU5MThmMGM5YzgyODE0YmU1MCIsInRhZyI6IiJ9', NULL, NULL, '', '', NULL, '2021-09-27 08:09:43', '2021-09-27 08:09:43'),
(3, 'Pakhi Dandotiya', 'pakhi@bizmethsolutions.comm', 'USA', '22', 'Female', 'Airline,Auto,Clothing,Electronics', NULL, 'IGQVJVMVhsdFBKNjZAZAZAVc3eDF2eWVrM0daeWN1UHN1MDIwMTBWazVNMlRwWXdvTjRMSktDcWxqMGhIUnJlOExMTGxmM2JIOWF4b3hwTGRfOVREUVZA5NzI4NlM0ZAmtGZAEp3dFpYMzc5Mmgtd01qX3BjOHZA2WFh4eWFtam84', '17841402159442028', NULL, 'eyJpdiI6IlZVRG9wUzdIUWpQS2hETTFPc2JWQmc9PSIsInZhbHVlIjoiaVU3WFJnUXNjRzhTdzlBaTR3OFJ1QT09IiwibWFjIjoiYzQ3MDUxYjZkOTMxOGQ3N2IwODI2MjNiZjk4Njc5ZWY3Y2U5MjcyMjIzODAyNjc5MzQ4MTc1MjhjYzZjMjk4MiIsInRhZyI6IiJ9', 10000, 'Shopping', 'English', 'Indore', NULL, '2021-09-27 13:14:42', '2021-09-27 13:14:42'),
(4, 'Neeraj Dandotiya', 'neeraj_dandotiya143@yahoo.in', NULL, NULL, NULL, NULL, '4496210540470014', NULL, NULL, NULL, 'eyJpdiI6ImlJeVNLdTJVRXZTQTZpOGNMV0QxZ3c9PSIsInZhbHVlIjoiU3IrUGZBYUVCU0dNK2pqK3J1ZkI3WEtCdm4yT2tZS0d2MUZJa0hZNU1ocz0iLCJtYWMiOiIyZmU2ZmIzYzJkNTEzNDA3MzRkN2E2MTZkMjQwZTA5YjRlZmQ5MzlmYjQxMWU3MmU1NGM1NWZlZjdlYTliOGYwIiwidGFnIjoiIn0=', NULL, NULL, '', '', NULL, '2021-11-15 12:24:11', '2021-11-15 12:24:11'),
(5, 'Itaf Ahmadi', 'my.influence.contact@gmail.com', NULL, NULL, NULL, NULL, '257755842996541', NULL, NULL, NULL, 'eyJpdiI6IjZoOHNiK21saTRQYXIzK3lKTjRKaVE9PSIsInZhbHVlIjoicTl3TGpTWlBYL29NTHBPN2J2T0RVdUllY3crVDdzbDJiSTVPQ0w0MkFyZz0iLCJtYWMiOiJkMjk1MTA0MWQxZTIxMTEzNWQ5ZmU5ODQ3MzVlMzNjM2QxYmM3MTMyNWNjMWQ4M2M1ZWYyMDIwNDMyMmEwZTI4IiwidGFnIjoiIn0=', NULL, NULL, '', '', NULL, '2021-11-30 15:50:21', '2021-11-30 15:50:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `field_of_interest`
--
ALTER TABLE `field_of_interest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `influencers`
--
ALTER TABLE `influencers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agency`
--
ALTER TABLE `agency`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `field_of_interest`
--
ALTER TABLE `field_of_interest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `influencers`
--
ALTER TABLE `influencers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
