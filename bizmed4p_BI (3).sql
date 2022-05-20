-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 20, 2022 at 12:25 PM
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
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`id`, `name`, `email`, `language`, `city`, `agency`, `email_verified_at`, `password`, `mobile`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test Agency', 'neeraj@bizmethsolutions.com', 'Bengali', 'India', 'Auto', NULL, 'eyJpdiI6ImxWeTdlZFBSR3YraHZSazZCOGRxdkE9PSIsInZhbHVlIjoiRXExWU5jNGs1OEpKVG9GaHMxWllxZz09IiwibWFjIjoiODYwZTI0YWU3MjlmY2M0NDNhN2FhOWU5OGQ4MDNhNGZjY2QxYjRmMGFjYTY5MGNjY2ViMDAzNzg5ZmM1OTUyNCIsInRhZyI6IiJ9', NULL, NULL, '2022-03-04 08:52:42', '2022-03-04 08:52:42'),
(2, 'Pranjal Mathur', 'pranjalm35@gmail.com', NULL, NULL, NULL, NULL, 'eyJpdiI6ImxQbElDMDJBMFlkZkpQaXVMVncrRlE9PSIsInZhbHVlIjoiWndGc24rdFJxQTZvWjdXbTdFZ29xQT09IiwibWFjIjoiMzBjMjA1ZjM0ZjQwNmM4NGU1YjA3ZmQzYjNlZmYxZGI1OWMyODJjYWQ4YmNjNmQ5NjgxNGYxYmQ3YzNkM2JkNiIsInRhZyI6IiJ9', '', NULL, '2022-03-09 06:29:03', '2022-03-09 06:29:03'),
(3, 'Pranjalm35', 'pranjalm351@gmail.com', 'English', 'India', 'Airline', NULL, 'eyJpdiI6IitPb3ErcWwzdmcxTTFzWkhsUUdoaXc9PSIsInZhbHVlIjoiT3UvdFVWdFE4TzBESkRibVMyZjliQT09IiwibWFjIjoiM2RiNTM3MGM3ZDBmZjkzNmJjMzFkMjI3ZmNlYzM5ZDMxMzUwNzdhYjNhMWRkODJhNDYxOWNlNmQwYTZkYzZjYiIsInRhZyI6IiJ9', '', NULL, '2022-04-08 11:57:13', '2022-04-08 11:57:13'),
(4, 'testagency123', 'Pranjal@bizmethsolutions.com', 'Gujarati', 'Hungary', 'Clothing', NULL, 'eyJpdiI6Inl6SFZxUk5CRXNJL2hXWnovOW85L3c9PSIsInZhbHVlIjoiSjhiUVdpUWozYkNIdEptZGZVTGZIUT09IiwibWFjIjoiMzcyMzRiNGY5YzliZGE5M2M4YTllZTQ2NDM4ZDc2NTljN2VmMWExOThiZWEzMGE2ZGI4ZmQ5NjIzYjMwYmJmMiIsInRhZyI6IiJ9', '', NULL, '2022-04-08 12:00:19', '2022-04-08 12:00:19'),
(5, 'Agencyname', 'agency111@gmail.com', 'English', 'Austria', 'Auto', NULL, 'eyJpdiI6IjEzUVFqbGhUYmR3Nlo2WnBsb3dEK3c9PSIsInZhbHVlIjoiYjhqT3JDcXV1TEJ3dDBlS21vWitEZz09IiwibWFjIjoiMzU5Y2NhYWYzNDBkZjQ1YjRjYTEwNzI3OTBiYzlhNThhMTBhN2Y5OWFhMmFmMjRhM2M3NDhmZTU0ZDRlMDY0ZSIsInRhZyI6IiJ9', '', NULL, '2022-04-08 12:34:57', '2022-04-08 12:34:57'),
(6, 'NeerajAgency', 'neerajagency@gmail.com', 'Hindi', 'India', 'Auto', NULL, 'eyJpdiI6IkxJWFJid0pPc1B4YW1xN3BtcjBOMEE9PSIsInZhbHVlIjoiUHIyTnZ2aTliL0h5YzBCeUNCZU43QT09IiwibWFjIjoiOWEwMThkM2JhZTA3ZGQ4NWQyZGIxNWQ1ZTFjOTMzYWU2ODEyMjMwMTQ1ZThlYTM5MGI0NzIxYzVlNDU4YjVjNyIsInRhZyI6IiJ9', '', NULL, '2022-04-11 19:36:46', '2022-04-11 19:36:46'),
(7, 'Agency022', 'agency022@gmail.com', 'English', 'India', 'Auto', NULL, 'eyJpdiI6Ijg0MEtIZWFEZkFRSnVxSWVGamVCM3c9PSIsInZhbHVlIjoieFpQNzdVeTdxdEV1cjJJZlY3T28rQT09IiwibWFjIjoiMTMyZjk4YWVlYTVmY2Y5YzE2YzQ3OGFmY2JmODI2MWVjYWIyY2Y0MDVmMzQxNDBlM2FmYzcyYmFhNDQ2MmUxNiIsInRhZyI6IiJ9', '', NULL, '2022-04-18 13:17:49', '2022-04-18 13:17:49'),
(8, 'Agency Test', 'agencytest@bizmethsolutions.com', 'Hindi', 'India', 'Airline', NULL, 'eyJpdiI6IjJEL1BYOGFIN2NPc2FQOG9mWVUxZ0E9PSIsInZhbHVlIjoibjZtYTdhZUJSYWxjVkJDU0YxWkVQdz09IiwibWFjIjoiNTBmM2FiOTQwMDVhZDE0ZDBkOGIzNzVmMmVlOWQ0NjI3NGRlMDg5Yzc0NGFjODM3YzQ4OWVjYzFiYzMzMDFiYyIsInRhZyI6IiJ9', '', NULL, '2022-04-19 08:50:26', '2022-04-19 08:50:26'),
(9, 'Neeraj', 'agencytestT@bizmethsolutions.com', 'Abkhaz', 'Afghanistan', 'Airline', NULL, 'eyJpdiI6ImVLNmRXRFZrR3ZGcUhkYVBMTUdzblE9PSIsInZhbHVlIjoiUmR4TU15VEZZSzRNVHNXMmhSYTYzUT09IiwibWFjIjoiNTI4YmJhMTAzNzJmNzRkZmMxMjBiN2I0ZWU5YzFkYjJmYTU3ZmRhY2U5NGJmYzM5MzMyOTZlMzM1YWJiODg0NSIsInRhZyI6IiJ9', '', NULL, '2022-04-19 09:35:20', '2022-04-19 09:35:20'),
(10, 'Neeraj', 'agencytestTT@bizmethsolutions.com', 'Abkhaz', 'Afghanistan', 'Airline', NULL, 'eyJpdiI6ImZudS9kZjVpVW9vQWcrb2t1THlqcnc9PSIsInZhbHVlIjoiL2o4UmFTekpyaU1YQmx2ZWtzNW1sdz09IiwibWFjIjoiYWNhMzYwY2JiYWJiMTMzNjNiZWQ2YjgzZWMwOWE2YjEwOGQxZTM1ZWI0NTdhOTgyNDVjODM2Mzk3MzU4ODk2ZiIsInRhZyI6IiJ9', '', NULL, '2022-04-19 09:39:31', '2022-04-19 09:39:31'),
(11, 'Neeraj', 'agencytest1@bizmethsolutions.com', 'Abkhaz', 'Afghanistan', 'Airline', NULL, 'eyJpdiI6IlpJN1BuR1JDSHQ1NVc5djZ1dCtyMWc9PSIsInZhbHVlIjoiZGxQdldCc2VmaUJ0djNIRXhWTCt0QT09IiwibWFjIjoiZGFiN2Q0NzRkNzIzYmE4M2FlNjhjYzRkYmYzZTM1ZTQ2OGY4MjllOWMzZDE4ZWU4MmRiZGZmOGFiODg2ZTliZiIsInRhZyI6IiJ9', '', NULL, '2022-04-19 09:40:52', '2022-04-19 09:40:52'),
(12, 'Neeraj', 'agencytest11@bizmethsolutions.com', 'Abkhaz', 'Afghanistan', 'Airline', NULL, 'eyJpdiI6IkxsQ09PNW03aUFLTDhwMTNyb0MyU2c9PSIsInZhbHVlIjoibnV0TEgzUk9yTURwK1NUQU1FcEpzUT09IiwibWFjIjoiNjk5MmMyNWM5MjZmMzY3OTcwZmUyY2EzNmY5NzlhODU1NDFiYmQ2ZmY5Y2YwNmE2NDdkZTVhNWJkNjk5NTZkZCIsInRhZyI6IiJ9', '', NULL, '2022-04-19 11:27:39', '2022-04-19 11:27:39'),
(13, 'Neeraj', 'agencyy@bizmethsolutions.com', 'Abkhaz', 'Afghanistan', 'Airline', NULL, 'eyJpdiI6InNUaWlCWk1pS0lESFpOZU11MEwwMEE9PSIsInZhbHVlIjoiSUdtUUxodSthbzdjeXNMcFlkRkQwdz09IiwibWFjIjoiMDM0NDdjZGJjZjYwODFkMjVkNjU5OTQ2ODExNWFhNzU0MjczNTk3ODU4YmJmMWZjZDJhMGE2YTAwZjkyMDQzZiIsInRhZyI6IiJ9', '', NULL, '2022-04-19 11:34:22', '2022-04-19 11:34:22'),
(14, 'Neeraj Agency', 'agencyyy@bizmethsolutions.com', 'Abkhaz', 'Afghanistan', 'Airline', NULL, 'eyJpdiI6IkZENUowcGNQMlNqU0ZrZThEVUt2K3c9PSIsInZhbHVlIjoiSXV0NTduK2U0UmZCQ1BMcjUyeXA4UT09IiwibWFjIjoiOGFjNmNiOWQ3M2QyY2I2MTEyYjhmODg3ZjllM2I3OGVjYTBkZDgxOGExMDg2NjM4MDA3N2U1YThmOTFmYjA2ZSIsInRhZyI6IiJ9', '', NULL, '2022-04-19 11:37:43', '2022-04-19 11:37:43'),
(15, 'Neeraj Agency', 'agencyy1@bizmethsolutions.com', 'Abkhaz', 'Afghanistan', 'Airline', NULL, 'eyJpdiI6IndZWGQvOVdWVzBhb1V6RlBQUVpUWkE9PSIsInZhbHVlIjoiWmgrT0d5bVRGZUp5Q1pZRk01V1VEUT09IiwibWFjIjoiMjA2NTE0Y2I1NjM4MDcxNjNmYjQ4YzdhYzk4NDJhMGJiNTg2MzA0NzhiYTgzYmMwNzg4M2YwNzQ4ZTIyZTkxNyIsInRhZyI6IiJ9', '', NULL, '2022-04-19 11:38:51', '2022-04-19 11:38:51'),
(16, 'Neeraj Agency', 'agencyy11@bizmethsolutions.com', 'Abkhaz', 'Afghanistan', 'Airline', NULL, 'eyJpdiI6IkRpWUluUEd2Smp3ZmRJcGI2OUJoNVE9PSIsInZhbHVlIjoiVmYvOXJLR1FxdFFBU0lOekdYWjdvUT09IiwibWFjIjoiMTEwYjExZjFmYzdmMjc0MzZhY2ZlYzI2ZDNkY2M2NTI0ODRmNWFjOTY4MTlmYTMxY2ZiMDFkOTkzOTE2NTg5ZCIsInRhZyI6IiJ9', '', NULL, '2022-04-19 11:39:44', '2022-04-19 11:39:44'),
(17, 'Neeraj New', 'newagency@gmail.com', 'Abkhaz', 'Afghanistan', 'Auto', NULL, 'eyJpdiI6IjNNcGJoYWVtYjR2bnpGVFdLNy8ra3c9PSIsInZhbHVlIjoidVEzNThYbGUyTVArQUVvTG1nM3ByUT09IiwibWFjIjoiMDI0ZmZmYTFlZGFhMDY3NGRkNGFjZDM2OWI0MWU0ZTY3ZTY5ZWNlM2Q3MzQxNmE2ODJmMGIxZGQxNWM5ZjQ4ZSIsInRhZyI6IiJ9', '', NULL, '2022-04-20 03:19:51', '2022-04-20 03:19:51'),
(18, 'Neeraj', 'neerajAgency@bizmethsolutions.com', 'Abkhaz', 'Afghanistan', 'Airline', NULL, 'eyJpdiI6IkhUbzZVTmxFY2NEQk9Eek9KWmQzN1E9PSIsInZhbHVlIjoiTzR5elZTYkhlM0JqSVp6bTZWbyszQT09IiwibWFjIjoiZjYzNDdkOTg0ZTE3MzYwNjQ3YjI1MjM2NTE0ZmM2ZTUwOWE1ODhjNzM4Y2JkNGE4MTE4MWFhYTc3YzliYzNlYSIsInRhZyI6IiJ9', '', NULL, '2022-04-25 06:51:09', '2022-04-25 06:51:09'),
(19, 'testagency24680', 'test040891@gmail.com', 'English', 'India', 'Auto', NULL, 'eyJpdiI6ImR5bVljL3NpVTc0TnRRdUlKK1ZMZEE9PSIsInZhbHVlIjoiZHVhS1RLOWlRaUVCV1NpR0pRcHRVZz09IiwibWFjIjoiNjI3MzQ4N2I1N2UzM2U0NjNjYmZkNDEyOGJmYmU4OTFiMGRhMWI5NjAxMmZmOWQxZDUxNDI5YzgxZTcxZWM5MCIsInRhZyI6IiJ9', '', NULL, '2022-04-26 05:12:07', '2022-04-26 05:12:07'),
(20, 'aaaa', 'aaa@gmail.com', 'English', 'Iceland', 'Airline', NULL, 'eyJpdiI6IjNyaGtjeWE5d0NiYXZ5VTF3UkZOVVE9PSIsInZhbHVlIjoiL0tpYzRxcGttQURuSElIVE1KMjFzdz09IiwibWFjIjoiNzkxZjY4ZDZiOWMzM2YyYWQ4ODQxOTlmZjliMDI2MjU2YjQyZTk0NTViMjlmNjA4OTQ5M2E2ZTUyYTk2NGM0NSIsInRhZyI6IiJ9', '', NULL, '2022-04-27 13:36:09', '2022-04-27 13:36:09'),
(21, 'Donna Chiquitosen', 'anbo@thepacbook.com', 'Breton', 'Afghanistan', 'Auto', NULL, 'eyJpdiI6IlB6bDRSUHRFOXpFT0l1WHlINkJHUHc9PSIsInZhbHVlIjoiMnVGTCtxcml6OGxQZHQ4Vjl1amgxN3VpOTVLQXJ2WVFwWCtZNis3K1RnWT0iLCJtYWMiOiI0NWFiMTZhODM2NjE3ZGY5MjkxZjVmNDUwZjIzYzMyZjA3ODFmYzQxNjY0MzA0YTVhODg0YTAzNWU5ZjE0ZjVjIiwidGFnIjoiIn0=', '', NULL, '2022-05-05 06:36:26', '2022-05-05 06:36:26'),
(22, 'Neeraj', 'Dands@bizmethsolutions.com', 'Hindi', 'India', 'Airline', NULL, 'eyJpdiI6IldkemtEeFVtVDlLTUkrK2VWRS82cnc9PSIsInZhbHVlIjoiOUtaUjFzaDFoV3ExNmJhbmVXNys5dz09IiwibWFjIjoiMGZjMjkxNzRlYzZlODEzZGFiMGViMmY3MjM2NGMxM2NkM2E2ODk5MDNhZGZiMDI3MDlhM2I2ZTJiZjc1MGNmYSIsInRhZyI6IiJ9', '9754170004', NULL, '2022-05-18 11:40:18', '2022-05-18 11:40:18');

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
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `email`, `brand_type`, `language`, `city`, `agency`, `agency_id`, `email_verified_at`, `password`, `mobile`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Neeraj Dandotiya', 'neeraj@bizmethsolutions.com', 'Please Select', 'Hindi', 'Afghanistan', 'Ecommerce', NULL, NULL, 'eyJpdiI6IitlZGZycXh2N3ZZNHRaOFhpZTdxUEE9PSIsInZhbHVlIjoieUtUdWR4dDZGWWU0bjUrU1RISldmUT09IiwibWFjIjoiNGY4MzhiYTBmY2IzM2Q5NzAwZDMzNTFkZTEwYWU4MzAxNjA0NmQ2NWFmZGJjYmQ2MWMyYWEyNmRlMzFmNjNkMCIsInRhZyI6IiJ9', '9754170004', NULL, '2021-09-13 07:07:21', '2021-09-13 07:07:21'),
(2, 'N', 'neeraj@bizmethsolutions.comm', NULL, NULL, NULL, NULL, NULL, NULL, 'eyJpdiI6ImNoeDZiUUlHV2x4YnNyOEFhMFVCZXc9PSIsInZhbHVlIjoiSmNpTTR5YjdyZjY2Rk9NYWhKZll0QT09IiwibWFjIjoiY2M2NWQwMmNkYmVmNzM5MzdiYThmMDQ1Y2ZhYzk2NGE4ZTkxYmQwMDU4YWE1MTkxZTI3OTQ3Njk5ZjFkODUxOSIsInRhZyI6IiJ9', NULL, NULL, '2021-09-13 13:08:37', '2021-09-13 13:08:37'),
(3, 'D', 'neeraj@bizmethsolutions.commm', NULL, NULL, NULL, NULL, NULL, NULL, 'eyJpdiI6InVVZ0tnOTVpMmZmdWVpYXlMZGcvVUE9PSIsInZhbHVlIjoicVVjNnFaQk9UbkFvNm93NHhWUmNLUT09IiwibWFjIjoiNGU2OWZjYTZhMGM4NDBkNDAwNTkwNDAwZTg2ZTlkNTU1NmJjYWE5YzU0MTFiNTAyZWI5MWYyZTIzMjE2NTM2YyIsInRhZyI6IiJ9', NULL, NULL, '2021-09-28 08:06:02', '2021-09-28 08:06:02'),
(4, 'Test', 'test@myemail.com', 'Test', 'Tesr', 'Test', 'Test', NULL, NULL, 'eyJpdiI6ImRCVEk1c2kxTjRhbzNpd3I1RFNYd3c9PSIsInZhbHVlIjoibkFrNzBvR0ZpVXBZa2U2ZDdpZnRodz09IiwibWFjIjoiYThlMWE5Mzc3YjQxNjJjZDY4ZGYxZDVkY2RmOTcyNTk4Mjg1Mzg5NzM1ODVhNTAyMGMwNGRhYjI2ZDRhM2QxMCIsInRhZyI6IiJ9', NULL, NULL, '2022-01-11 16:02:49', '2022-01-11 16:02:49'),
(5, 'Bizmeth', 'neera123j@bizmethsolutions.com', 'test', 'english', 'bangalore', 'test', NULL, NULL, 'eyJpdiI6Ikxod25LS2JWa3dWbStuWDdURkNLVFE9PSIsInZhbHVlIjoiSVRXODZJNHhXK3ZyZ1RmRU56dlVOZ0QxZE1nVmVXM3hEVlhha0J0Y1pXcz0iLCJtYWMiOiJmOTQ1MDE1YmQwY2RiM2Y5Y2E5M2IzZTFlMTg5NzkyMTJiMTk5OWZhMTliZDkyZDE5NDY5YzE2ZGJmM2MwY2Q2IiwidGFnIjoiIn0=', NULL, NULL, '2022-02-01 09:15:04', '2022-02-01 09:15:04'),
(7, 'Puma', 'puma@gmaill.com', 'Clothing,shoes', 'english', 'bangalore', NULL, 2, NULL, 'eyJpdiI6InJhbGRsTE9HWnF1VXpYNFg3bEZRUWc9PSIsInZhbHVlIjoiTllZZ1RLbWZVY28yNjhRV1BzYmZ4UT09IiwibWFjIjoiN2E1ZGJkN2JhZWUyNjk3YTIzNWNhMTllYTc4YWY2MjcyMGEwOTlkN2I4ZDU3OGM1MGZiNmMzMWRmYTMzNGNkYSIsInRhZyI6IiJ9', NULL, NULL, '2022-03-09 06:30:23', '2022-03-09 06:30:23'),
(8, 'ND', 'pranjalm35@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'eyJpdiI6IkVaQy9hQTRIaUlYMmhCV2p6UzE4ekE9PSIsInZhbHVlIjoiMVZmNXVaWERJS1lINmYycytOdVZ5dz09IiwibWFjIjoiNjAxZGYzYWQ0ZDhiNjIwYWE4YWY0M2QxOTA5MGJlMjI3ODc0Yjg4ZGM5NzZlMDA1MzlkMDUwMmFiZWE2MmY2MyIsInRhZyI6IiJ9', NULL, NULL, '2022-03-16 13:36:51', '2022-03-16 13:36:51'),
(17, 'testbrand1', 'brand1@gmail.com', 'Auto', 'English', 'India', NULL, 4, NULL, 'eyJpdiI6IlBIR2ZyWDJ4SE42cVlVMndVZ3p0aFE9PSIsInZhbHVlIjoiN0QzL1pKQXI2MlJVZjdZLzVYditPZz09IiwibWFjIjoiODYzZTlmYzViYmEzZTE3ZDExMTgzYTczZjg1MDA1NTk2MTc0NzAwZGM0YzkwZTgyOThlOGQwNDUxNGE2NTRkYSIsInRhZyI6IiJ9', NULL, NULL, '2022-04-08 12:14:22', '2022-04-08 12:14:22'),
(18, 'ts', 'tes@gmail.com', 'Airline', 'Abkhaz', 'Andorra', NULL, 1, NULL, 'eyJpdiI6IklFYkFDVVV1cXU2Y0JVb2FUZi9OUWc9PSIsInZhbHVlIjoiQ0VBTDdHRTU0TitSTjlpMmFSTWVmdz09IiwibWFjIjoiOTYxZmI2OWU0OWI2NTY3ZDA0ODdjNGU4N2FhMWUwNDVhYWRjNThhZjA2ZThmODFlZjI3NjU4NWI4NjJlY2ZmNyIsInRhZyI6IiJ9', NULL, NULL, '2022-04-08 12:15:09', '2022-04-08 12:15:09'),
(19, 'testbrand11', 'brand11@gmail.com', 'Auto', 'Afrikaans', 'Åland Islands', NULL, 4, NULL, 'eyJpdiI6ImxTQlpZRG13QWI1R0pnNEFvQjdzU1E9PSIsInZhbHVlIjoiUGFoNWpRV2thM2RMSGRHcXYrOTFuQT09IiwibWFjIjoiZTRmMDVkY2YwYTlmYmJiYzkwM2Y5MmNkMDdjNjE4ZTc4ZjY4ZTMyNTRlMmJhYTkyNGFkMzE4NGI3MWVkYWI0MSIsInRhZyI6IiJ9', NULL, NULL, '2022-04-08 12:16:18', '2022-04-08 12:16:18'),
(20, 'hhh', 'h@gmal.ocm', 'Airline', 'Abkhaz', 'Afghanistan', NULL, 4, NULL, 'eyJpdiI6InA5T1ZjSHJZTlBlSGhIMk5EWndaTVE9PSIsInZhbHVlIjoiaFl0STdIUk10ZUIyUkxWSVhzZ0NqUT09IiwibWFjIjoiYjExOTcyNmJlYTA5Yzg3OGNkNzc1NjM5MjVmY2YxM2VkNmU4ZmUxYjg1Nzg5OTdjMjFkMmY3ODY2NmQzZjE3NiIsInRhZyI6IiJ9', NULL, NULL, '2022-04-08 12:17:16', '2022-04-08 12:17:16'),
(21, 'puma', 'puma@gmail.com', 'Clothing', 'English', 'American Samoa', NULL, 4, NULL, 'eyJpdiI6Ikt1Z0hCbHdLT0RRZEdONFJWNHdVS3c9PSIsInZhbHVlIjoiZ1AzZGFOU0V4bTRnUGplVDI1bGZuZz09IiwibWFjIjoiMTBmZDVhNTk2Y2NhNDBiZjI2Mjk0MzM5ZTMxMTM4NTVjNzRlZGUzOTI3YzJkMjZjNWFhNWQ0NmZlZTcxZWRkYiIsInRhZyI6IiJ9', NULL, NULL, '2022-04-08 12:23:18', '2022-04-08 12:23:18'),
(22, 'B1', 'B1@gmail.com', 'Clothing', 'English', 'Austria', NULL, 5, NULL, 'eyJpdiI6ImppaHVaUUl3R3EzUTc0bmdjWThaRnc9PSIsInZhbHVlIjoiNFRXK3hyTHJBWVl0Rit0dWFLQXc0dz09IiwibWFjIjoiNDBhMmU2OGU5ODZjNWY5MTNmMGY2MWVmYTUwYzU2OWNhMmJkZjIzMDlkMDcyYWM4OWY4NzkxMmQzNzI2YzVlNyIsInRhZyI6IiJ9', NULL, NULL, '2022-04-08 12:37:07', '2022-04-08 12:37:07'),
(23, 'Brand', 'brand022@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'eyJpdiI6IjBNYlZ6TkNRMGJ1NlRTZEJ0K21HZ3c9PSIsInZhbHVlIjoiZzVMbUVac1grb0ZhR0hsSEF3TlNCUT09IiwibWFjIjoiYWY4ODBhODEzYTdiOGExZmViNzk5NGQ5NzIwZDEyMjJhNzk2MDg5ZTM2ZDgwMWRkYzhjMTM5ZjUxYmY4NTM5MCIsInRhZyI6IiJ9', NULL, NULL, '2022-04-18 13:12:27', '2022-04-18 13:12:27'),
(24, 'Brand1', 'brand2022@gmail.com', 'Auto', 'English', 'India', NULL, 7, NULL, 'eyJpdiI6InY4SEFDc21HMVByRS9tQS9Za1pXUUE9PSIsInZhbHVlIjoiVmVJVDlLcWM0QnZRZmlMaFFWbVpCUT09IiwibWFjIjoiYThkZTliMWFmNTZhODA3MDdmNTQyMWMyMDRkNDRhMDg2ZWFiNzUzMzNhODk4MmNkNzkzNjlhYjEyNTY1NGRiZSIsInRhZyI6IiJ9', NULL, NULL, '2022-04-18 13:29:54', '2022-04-18 13:29:54'),
(25, 'testname testlastname', 'demobrand@gmail.com', 'test', 'english', 'Bangalore', 'puma', NULL, NULL, 'eyJpdiI6IndMS0krQm5abVlFOUsxRzQ3QW1xaFE9PSIsInZhbHVlIjoiVkx4bWZoNW9WSXIwRkQ1RUVwY0tIQT09IiwibWFjIjoiNWM4MjIxNzU2MGYxZDdhOWUyNmE3NzBkMWVhYzExOWI2MWMyYjhhZWFkNjc0OWE4M2UxNTkwNjBlNjJhM2U1ZSIsInRhZyI6IiJ9', NULL, NULL, '2022-04-18 14:08:25', '2022-04-18 14:08:25'),
(26, 'NeerajBrand', 'neerajbrand@bizmethsolutions.com', 'Airline', 'Afar', 'Afghanistan', NULL, 18, NULL, 'eyJpdiI6IkN0MXlkMnZjandxMGlpUjB2SjVmZXc9PSIsInZhbHVlIjoiampwaGE0MlE4OFh5UVV4NzhJWkpCdz09IiwibWFjIjoiMDc2ZGMyOTlmODg5ZDczZjZiZjExNzdiZmQ5OWNiMGUxOGE3NDI3MzM1ODNmNjM1NDkzNjIxZTY3YWY4NTRmNCIsInRhZyI6IiJ9', NULL, NULL, '2022-04-25 07:00:48', '2022-04-25 07:00:48'),
(27, 'New', 'newneeraj@bizmethsolutions.com', 'Airline', 'Abkhaz', 'Albania', NULL, 18, NULL, 'eyJpdiI6Ii9saVBCZUhaaUFBdGdZVHhOaXhFNUE9PSIsInZhbHVlIjoiY3AxY2c3Y1RHUGN4bTljYmpCazVyUT09IiwibWFjIjoiYzU3ZDYzNTdmZmU1NGJkMzc2ZWUwMmIwZTFiMDg1NWJhMDNmNjBkMmRjMzUxYWYwM2EwNmY0ZmY2NWVkNmFhNiIsInRhZyI6IiJ9', NULL, NULL, '2022-04-25 07:06:15', '2022-04-25 07:06:15'),
(29, 'Test', 'test123456@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'eyJpdiI6ImhKWHJ6S2dCakJqZ0ErZjVsZGRyaWc9PSIsInZhbHVlIjoiQ0dZRGNsYVAzVE16azVyNVFBNnJGdz09IiwibWFjIjoiMjExMjc3ZGY1MThmODRkYzliZjMzZTM3OWQ4MjBjMTVhNjYxMmU3MTZlNGZiMGEwOWVlZjY2ZmI2NTBjMWM1MyIsInRhZyI6IiJ9', NULL, NULL, '2022-04-26 04:35:50', '2022-04-26 04:35:50'),
(30, 'Test', 'test2468@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'eyJpdiI6IlUvK1lFbXNTT0YvTDQ1Z2ZESFE1NGc9PSIsInZhbHVlIjoiM1QvaGhhVFpqSzZkVXVvSTRuU296Zz09IiwibWFjIjoiMzQyZTViNTZlN2FjODk0YTVmNzI4ZjliYjFiYmRmY2M4NzkyNDUxMWExMDY4MGVkZTg0YThjM2Q4MmI1YmY4MSIsInRhZyI6IiJ9', NULL, NULL, '2022-04-26 04:59:48', '2022-04-26 04:59:48'),
(31, 'b1111', 'b111@gmail.com', 'Clothing', 'English', 'Algeria', 'puma', 19, NULL, 'eyJpdiI6ImdvU3oxdDJ6OTVwZ29DbDlEOWw4d2c9PSIsInZhbHVlIjoiZHBBYUcrZmIzdDRpN3lFY2JWeUFvUT09IiwibWFjIjoiMjlmMGFkNDRhNjdjNDQ4ZTgwMzEwNWU2NTQwOWJjMDlmYzQ2ZDZlNDcwMGJjMzkzMDQzMmZlZjA3MGIzMDIzNiIsInRhZyI6IiJ9', NULL, NULL, '2022-04-26 05:14:17', '2022-04-26 05:14:17'),
(32, 'testname', 'brand2222@gmail.com', 'Auto', 'English', 'Austria', 'puma', NULL, NULL, 'eyJpdiI6IjgzT2ttVHJFTkNaeENCYnpqZkdoOEE9PSIsInZhbHVlIjoibm1FMlkxKzUzdEZVVmhSaUc5NFExdz09IiwibWFjIjoiNjM4MTg3YjQwNjdkN2FlZWJhMjMwODI1NzZkZWYwMGFkNTFkZGY5OGJhYTEyNjZkYzYzODc3MWQ2MjZmYmY2ZCIsInRhZyI6IiJ9', NULL, NULL, '2022-04-26 10:42:06', '2022-04-26 10:42:06'),
(33, 'Puma1234', 'brand789456@gmail.com', 'Auto', 'English', 'Afghanistan', 'test', NULL, NULL, 'eyJpdiI6IkhEcFlWOTh2Vk4wcGh3Wm52Wk52YVE9PSIsInZhbHVlIjoiRTIwdzFjSnk2Q0NGdFJodU5lOE9Udz09IiwibWFjIjoiMjRkNWQ1NWJkZDMwNWE1ODFlMTQyODc4Y2E2NWI5OTI1Yjc0ZmVlOWRhNzM4NzJjMDgyMWNkZTZjODI1OTNiOSIsInRhZyI6IiJ9', NULL, NULL, '2022-04-26 10:49:08', '2022-04-26 10:49:08'),
(34, 'Rebook', 'brand666@gmail.com', 'Clothing', 'English', 'Germany', 'Nike', NULL, NULL, 'eyJpdiI6IjFsR2UzNDE2bjhYUzBzdlRidWFHNHc9PSIsInZhbHVlIjoia1pGRXoyRVBwYUphZzJRd1FpSkhvUT09IiwibWFjIjoiNGIzYmRhZGIwYTZlMjU3ZWU2MjI1MTE1OWQ1YWY3YzQwODZjZjI0NGRmZjc3MjdkZWViZTI0MmEzODk0NzQxMyIsInRhZyI6IiJ9', NULL, NULL, '2022-04-26 10:56:04', '2022-04-26 10:56:04'),
(35, 'brand_itaf', 'brand_itaf@gmail.com', 'Clothing', 'English', 'Australia', NULL, 1, NULL, 'eyJpdiI6IkMveEpZWGt4UlhqUWVsMjZEeWRqSGc9PSIsInZhbHVlIjoiT2pvNExIcmtCT3BMZXNvUEZUR3lLdz09IiwibWFjIjoiMzA2MzMyNjhkNDA2YzAxMjVmMjE3NzZmY2UxMzcwMDI3MTM2OGVkZWJmMmU1Nzk1MzE1MzA4OGJlNDk0N2FmYyIsInRhZyI6IiJ9', NULL, NULL, '2022-05-18 16:26:25', '2022-05-18 16:26:25');

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `due_date` date NOT NULL,
  `submitter_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `list_influencer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brand_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`id`, `name`, `due_date`, `submitter_name`, `description`, `price`, `category`, `phone_number`, `email`, `type`, `avatar`, `list_influencer`, `status`, `language`, `city`, `postid`, `brand_name`, `created_date`) VALUES
(1, 'n', '2022-05-31', 'Agency', 'sda', 1, 'Airline', '1', 'n@g.co', 'Public', '16529008013.png', '', 'Added', '', '', '', '', '2022-05-18 19:06:41'),
(2, 'neeraj', '2022-05-31', 'Agency', 'sda', 100, 'Airline', '1', 'n@g.co', 'Public', '16529009333.png', '', 'Added', 'Hindi', 'Afghanistan', '1', 'ts', '2022-05-18 19:08:53'),
(3, 'n', '2022-05-31', 'Agency', 'sda', 1, 'Airline', '1', 'n@g.co', 'Public', '16529009883.png', '', 'Deleted', '', '', '1', '', '2022-05-18 19:09:48'),
(4, 'd', '2022-05-31', 'Agency', 'dsf', 1, 'Airline', 'sdf', 'dsa@ff.dsf', 'Private', '16529011733.png', 'neeraj_dandotiya143@yahoo.in,my.influence.contact@...', 'Deleted', '', '', '1', '', '2022-05-18 19:12:53'),
(5, 'd', '2022-05-31', 'Agency', 'dsf', 1, 'Airline', 'sdf', 'dsa@ff.dsf', 'Private', '16529012063.png', 'neeraj_dandotiya143@yahoo.in,my.influence.contact@gmail.com,neeraj@bizmethsolutions.comm', 'Added', '', '', '1', '', '2022-05-18 19:13:26'),
(6, 'n', '2022-05-28', 'Agency', 'sd', 1, 'Airline', '1', 'n@gm.s', 'Public', '16529029953.png', '', 'Added', 'Akan', 'Afghanistan', '1', 'brand_itaf', '2022-05-18 19:43:15'),
(7, 'neeraj', '2022-05-28', 'Agency', 'sd', 1, 'Airline', '1', 'n@gm.s', 'Public', '16529030853.png', '', 'Added', 'Akan', 'Afghanistan', '1', 'brand_itaf', '2022-05-18 19:44:45'),
(8, 'N', '2022-05-31', 'Agency', 'test', 12, 'Airline', '9876543210', 'N@gmail.com', 'Private', '16529412053.png', 'neeraj@bizmethsolutions.comm', 'Added', 'Hindi', 'India', '1', 'ts', '2022-05-19 06:20:05'),
(9, 'N', '2022-05-31', 'Agency', 'test', 12, 'Airline', '9876543210', 'N@gmail.com', 'Private', '16529413443.png', 'neeraj@bizmethsolutions.comm', 'Added', 'Hindi', 'India', '1', 'ts', '2022-05-19 06:22:24'),
(10, 'N', '2022-05-31', 'Agency', 'test', 12, 'Airline', '9876543210', 'N@gmail.com', 'Private', '16529413653.png', 'neeraj@bizmethsolutions.comm', 'Added', 'Hindi', 'India', '1', 'ts', '2022-05-19 06:22:45'),
(11, 'Neeraj', '2022-05-31', 'Agency', 'ds', 100, 'Airline', '9876543210', 'neeraj@gmail.com', 'Private', '16529421023.png', 'neeraj@bizmethsolutions.com', 'Added', 'Hindi', 'India', '1', 'ts', '2022-05-19 06:35:02'),
(12, 'Neeraj Brand', '2022-05-31', 'Brand', 'tesyt', 12, 'Drink', '9876543210', 'test@gmail.com', 'Public', '16529432641.png', '', 'Added', 'Hindi', 'India', '1', 'Neeraj Dandotiya', '2022-05-19 06:54:24'),
(13, 'Neeraj', '2022-05-31', 'Brand', 't', 145, 'Clothing', '9876543210', 'ner@gmaol.com', 'Private', '16529440613.png', 'neeraj@bizmethsolutions.com', 'Added', 'Hindi', 'India', '1', 'Neeraj Dandotiya', '2022-05-19 07:07:41'),
(14, 'Neeraj', '2022-05-31', 'Brand', 'Test', 100, 'Clothing', '9876543210', 'neer@gmail.com', 'Public', '16529821672.png', '', 'Deleted', 'Hindi', 'India', '1', 'Neeraj Dandotiya', '2022-05-19 17:42:47');

-- --------------------------------------------------------

--
-- Table structure for table `campaign_invitation`
--

CREATE TABLE `campaign_invitation` (
  `id` int(11) NOT NULL,
  `campaign_id` int(11) NOT NULL,
  `influencer_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `campaign_invitation`
--

INSERT INTO `campaign_invitation` (`id`, `campaign_id`, `influencer_id`, `status`, `post_date`) VALUES
(1, 5, 2, 'Accept', '2022-05-19 04:52:28'),
(2, 8, 2, 'Accept', '2022-05-19 17:47:48');

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
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `location`, `age`, `gender`, `foi`, `facebook_id`, `instagram_access_token`, `instagram_user_id`, `email_verified_at`, `password`, `followers`, `brands`, `language`, `city`, `mobile`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Neeraj Influencer', 'neeraj@bizmethsolutions.com', 'India', NULL, NULL, NULL, '4302374713186932', '', '', NULL, 'eyJpdiI6Imx5clRZRWdBcGZrWFZOakthWTlPd0E9PSIsInZhbHVlIjoiYzBCSTI4RkcyMjEwS0lWc3ZXR1F5cVI5VDBMdFp6OTZBd1JxTVlUTXBjQT0iLCJtYWMiOiI3YTJkM2M0OWM4N2U4MjkwOWE1YzcwMjVhNGI2YzVkYTNmZjBiZDRhZTMwZDAxMGY2ZDQxM2YyNDlmZTY3MmUzIiwidGFnIjoiIn0=', NULL, NULL, '', '', NULL, NULL, '2021-09-16 07:38:12', '2021-09-16 07:38:12'),
(2, 'Neeraj Inf', 'neeraj@bizmethsolutions.comm', 'India', NULL, NULL, NULL, NULL, '', '', NULL, 'eyJpdiI6ImhVeExVNy96ell5SE85eU1CcXBQdmc9PSIsInZhbHVlIjoiM2VFMEU4WUlCOFZHc1ZVUVorS1Y0UT09IiwibWFjIjoiZDEyNjNiNDI5OThiMjk2M2JlOGVmZjg0YzQwZDE3ZDkwOTZmOGZmMWU2YTdlYmU5MThmMGM5YzgyODE0YmU1MCIsInRhZyI6IiJ9', NULL, NULL, '', '', NULL, NULL, '2021-09-27 08:09:43', '2021-09-27 08:09:43'),
(3, 'Pakhi Dandotiya', 'pakhi@bizmethsolutions.comm', 'USA', '22', 'Female', 'Airline,Auto,Clothing,Electronics', NULL, 'IGQVJVMVhsdFBKNjZAZAZAVc3eDF2eWVrM0daeWN1UHN1MDIwMTBWazVNMlRwWXdvTjRMSktDcWxqMGhIUnJlOExMTGxmM2JIOWF4b3hwTGRfOVREUVZA5NzI4NlM0ZAmtGZAEp3dFpYMzc5Mmgtd01qX3BjOHZA2WFh4eWFtam84', '17841402159442028', NULL, 'eyJpdiI6IlZVRG9wUzdIUWpQS2hETTFPc2JWQmc9PSIsInZhbHVlIjoiaVU3WFJnUXNjRzhTdzlBaTR3OFJ1QT09IiwibWFjIjoiYzQ3MDUxYjZkOTMxOGQ3N2IwODI2MjNiZjk4Njc5ZWY3Y2U5MjcyMjIzODAyNjc5MzQ4MTc1MjhjYzZjMjk4MiIsInRhZyI6IiJ9', 10000, 'Shopping', 'English', 'Indore', NULL, NULL, '2021-09-27 13:14:42', '2021-09-27 13:14:42'),
(4, 'Neeraj Dandotiya', 'neeraj_dandotiya143@yahoo.in', 'India', NULL, NULL, NULL, '4496210540470014', NULL, NULL, NULL, 'eyJpdiI6ImlJeVNLdTJVRXZTQTZpOGNMV0QxZ3c9PSIsInZhbHVlIjoiU3IrUGZBYUVCU0dNK2pqK3J1ZkI3WEtCdm4yT2tZS0d2MUZJa0hZNU1ocz0iLCJtYWMiOiIyZmU2ZmIzYzJkNTEzNDA3MzRkN2E2MTZkMjQwZTA5YjRlZmQ5MzlmYjQxMWU3MmU1NGM1NWZlZjdlYTliOGYwIiwidGFnIjoiIn0=', NULL, NULL, '', '', NULL, NULL, '2021-11-15 12:24:11', '2021-11-15 12:24:11'),
(5, 'Itaf Ahmadi', 'my.influence.contact@gmail.com', 'France', NULL, NULL, NULL, '257755842996541', NULL, NULL, NULL, 'eyJpdiI6IjZoOHNiK21saTRQYXIzK3lKTjRKaVE9PSIsInZhbHVlIjoicTl3TGpTWlBYL29NTHBPN2J2T0RVdUllY3crVDdzbDJiSTVPQ0w0MkFyZz0iLCJtYWMiOiJkMjk1MTA0MWQxZTIxMTEzNWQ5ZmU5ODQ3MzVlMzNjM2QxYmM3MTMyNWNjMWQ4M2M1ZWYyMDIwNDMyMmEwZTI4IiwidGFnIjoiIn0=', NULL, NULL, '', '', NULL, NULL, '2021-11-30 15:50:21', '2021-11-30 15:50:21'),
(6, 'inf022', 'inf022@gmail.com', 'India', '29', 'Male', 'Auto', NULL, NULL, NULL, NULL, 'eyJpdiI6ImZvOTVieTUrd2pJL1cyZDNnSlpkdHc9PSIsInZhbHVlIjoiRkROWklvRUV2eTlPMmxxSm9STzFwUT09IiwibWFjIjoiM2VlOTZjMjFkYzRiNDNmMjE0ZjMyZjk2NzRlMGZiNTg0MDI1NmY2ZTE0YzhjMTQzZmNlYjMwMDU0Y2ZiYTcwOSIsInRhZyI6IiJ9', NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-18 13:45:33', '2022-04-18 13:45:33'),
(7, 'demo', 'demo@gmail.com', 'India', '29', 'Male', 'Auto', NULL, NULL, NULL, NULL, 'eyJpdiI6ImhTbzZ0bHFud2Q2NTlaRUFPYXkxQ3c9PSIsInZhbHVlIjoiUW1nNWtzai8yUW1UQjBTNVhqeUNPZz09IiwibWFjIjoiMWRiNTYxNWIzNWNhYTJkN2JmYjc1MWQyMTQxNzkzNTJmODhiOWFjN2M0NWE4NmM2YTAyOTZmZjk1M2I0ZDhkOCIsInRhZyI6IiJ9', NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-18 14:05:34', '2022-04-18 14:05:34'),
(8, 'Test Influencer', 'neerajinflu@bizmethsolutions.com', 'USA', '20', 'Male', 'Airline', NULL, NULL, NULL, NULL, 'eyJpdiI6IldFekFPRVdEelVPUFlvcjJTTXpvOXc9PSIsInZhbHVlIjoiRmZGUzFkdlo0dFRveW4vVVZIUWVhQT09IiwibWFjIjoiZTAwMzIzZTAxMDVjZWJjNjgyMDE2YzBjMjJiODUzYjVkMGEwMjY3ZTRlZGRkZDVlYTZkYTYxYzEyNjIyM2VjOCIsInRhZyI6IiJ9', 100, 'Test', 'Hindi', 'India', NULL, NULL, '2022-04-25 09:00:43', '2022-04-25 09:00:43'),
(9, 'Influence12', 'inf@gmail.com', 'Algeria', '28', 'Male', 'Auto', NULL, NULL, NULL, NULL, 'eyJpdiI6ImlZYU15WEtxMStHUEwyRDdCKzZjeVE9PSIsInZhbHVlIjoiTmhVL2lEWmRhU2FRalZSNnp2REs3UT09IiwibWFjIjoiY2NiMjIyOGUzOGJkMTBhY2Y3OGQ1NzdjMjVjMDgzM2I2YmQyOWJhMDRkYWE5YzI0NGJiZDFlZmE2ZDQ4OThmMSIsInRhZyI6IiJ9', NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-26 05:17:47', '2022-04-26 05:17:47'),
(10, 'inf2', 'inf2@gmail.com', 'Albania', '28', 'Male', 'Auto', NULL, NULL, NULL, NULL, 'eyJpdiI6InRBY1Y2K1psSllyUTdJMDZ4S3BZdVE9PSIsInZhbHVlIjoiQ3VMYjZkbzFVREp1cU91bDRTYkc0dz09IiwibWFjIjoiMThlOGI2YmRlNDI5YzRhN2I1YzdmZTZjNmU1NzNkZDQxOTAzNWViNmY1ZTgzNDc4ZjNlYzU3ZDNlODM1Mjk1MyIsInRhZyI6IiJ9', NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-26 05:24:41', '2022-04-26 05:24:41'),
(11, 'Neeraj In', 'neeraj@influencer.com', NULL, '18', 'Male', 'Airline,Auto', NULL, NULL, NULL, NULL, 'eyJpdiI6IktqbUFiRktBaEFFc3AyTXJiVU9oUkE9PSIsInZhbHVlIjoidXo2cExuSVA3azU1RmNac0xEOG5XQT09IiwibWFjIjoiMzA5NWIwODJlZjczZjIwNmJmNDg0YzQ3NDJhMWFhNTFmYmQxNmEyNWU5MWM0NGQwMjkxOThmODYzMDZlMmUwMSIsInRhZyI6IiJ9', NULL, NULL, 'Hindi', 'Albania', '9754170004', NULL, '2022-04-26 06:27:44', '2022-04-26 06:27:44'),
(12, 'influnce123', 'influence456@gmail.com', 'India', '29', 'Male', 'Auto', NULL, NULL, NULL, NULL, 'eyJpdiI6IlZsaU8wZTM0MkRqWHRsdGlxcDNoSFE9PSIsInZhbHVlIjoibDhwakR3MmEvNUZSVUV3eXA3TXdzZz09IiwibWFjIjoiMmM4YjFmZDM2NGEwZGFiZmVkNjY4MTE1ODE5NDg4Zjk0MDhlM2IxNDg5ZDAxMDFiOWJiZWRhZTBkYTQ4YzZhNSIsInRhZyI6IiJ9', 2000, 'test', 'English', 'Algeria', NULL, NULL, '2022-04-26 10:38:11', '2022-04-26 10:38:11'),
(13, 'Influencer Neeraj', 'neerajji@influencer.com', NULL, '20', 'Male', 'Airline', NULL, NULL, NULL, NULL, 'eyJpdiI6IkMweDFQNVlrSjc1ZXVEZzhDYjJUa0E9PSIsInZhbHVlIjoiREVSR01JdUhYNmU2UUhub0xTNHpCdz09IiwibWFjIjoiMmJhNTY1OGY3MjRiN2NjMjdmNTJhNmQ5ZjUxMmYxYmQ5N2NjYjM5MDg1N2M3NDg0ZmY5M2MzZDFiZmRiNzlkOSIsInRhZyI6IiJ9', NULL, NULL, 'Hindi', 'India', '9754170004', NULL, '2022-05-18 12:44:13', '2022-05-18 12:44:13'),
(14, 'neer', 'neer1@gmail.com', NULL, '18', 'Male', 'Airline', NULL, NULL, NULL, NULL, 'eyJpdiI6ImhUVkMrM05tK1ZBaXJYc0pGelprNkE9PSIsInZhbHVlIjoiNUx4cjY4dnU2S2ZLaUVHTnU4VjRvQT09IiwibWFjIjoiYmQ0OWNhY2UzMDY3YzMxZjgxMzczNjM4YmUwZjY2YjE1ZjQzOTBkNTQzYTI5YTZmNzM2NGZiZGFjMDYzNjRlOCIsInRhZyI6IiJ9', NULL, NULL, 'Hindi', 'India', '9754170004', NULL, '2022-05-18 13:32:20', '2022-05-18 13:32:20'),
(15, 'neer', 'neer@gmail.com', NULL, '18', 'Male', 'Airline', NULL, NULL, NULL, NULL, 'eyJpdiI6IkF1R0hISEpCaVh6VzFWN2lQeW5vOWc9PSIsInZhbHVlIjoiTDFIeWFwMHBUb1pKMWk2clYxQ2c1dz09IiwibWFjIjoiMDFlNzQ4MDY1YTBjOGZmMTRiOThkODM4Zjg3OWNkNDAzMmIzMGU2YTQ4YjA5NDNlNjU4ODg3MWMwNzVjYTExNSIsInRhZyI6IiJ9', NULL, NULL, 'Hindi', 'India', '9754170004', NULL, '2022-05-18 13:33:19', '2022-05-18 13:33:19');

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
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaign_invitation`
--
ALTER TABLE `campaign_invitation`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `campaign_invitation`
--
ALTER TABLE `campaign_invitation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
