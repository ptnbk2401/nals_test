-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 05:21 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo_list`
--

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `name`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Học Lập Trình PHP', '2021-12-01 00:00:00', '2021-12-01 03:00:00', 1, '2021-12-10 03:58:17', '2021-12-10 03:58:17'),
(2, 'Học Lập Trình PHP', '2021-12-03 00:00:00', '2021-12-03 03:00:00', 1, '2021-12-10 03:58:17', '2021-12-10 03:58:17'),
(3, 'Học Lập Trình PHP', '2021-12-07 00:00:00', '2021-12-07 03:00:00', 1, '2021-12-10 03:58:17', '2021-12-10 03:58:17'),
(4, 'Học Lập Trình PHP', '2021-12-11 00:00:00', '2021-12-11 03:00:00', 1, '2021-12-10 03:58:17', '2021-12-10 03:58:17'),
(5, 'Học Lập Trình PHP', '2021-12-15 00:00:00', '2021-12-15 03:00:00', 1, '2021-12-10 03:58:17', '2021-12-10 03:58:17'),
(6, 'Học Lập Trình PHP', '2021-12-19 00:00:00', '2021-12-19 03:00:00', 1, '2021-12-10 03:58:17', '2021-12-10 03:58:17'),
(7, 'Học Lập Trình PHP', '2021-12-25 00:00:00', '2021-12-25 03:00:00', 1, '2021-12-10 03:58:17', '2021-12-10 03:58:17'),
(8, 'Học ReactJS', '2021-12-08 00:00:00', '2021-12-08 03:00:00', 1, '2021-12-10 03:58:17', '2021-12-10 03:58:17'),
(9, 'Học ReactJS', '2021-12-12 00:00:00', '2021-12-12 03:00:00', 1, '2021-12-10 03:58:17', '2021-12-10 03:58:17'),
(10, 'Học ReactJS', '2021-12-16 00:00:00', '2021-12-16 03:00:00', 1, '2021-12-10 03:58:17', '2021-12-10 03:58:17'),
(11, 'Học ReactJS', '2021-12-20 00:00:00', '2021-12-20 03:00:00', 1, '2021-12-10 03:58:17', '2021-12-10 03:58:17'),
(12, 'Học ReactJS', '2021-12-26 00:00:00', '2021-12-26 03:00:00', 1, '2021-12-10 03:58:17', '2021-12-10 03:58:17'),
(13, 'Học MySQL', '2021-12-01 08:00:00', '2021-12-01 10:00:00', 1, '2021-12-10 04:05:08', '2021-12-10 04:05:08'),
(14, 'Học MySQL', '2021-12-03 08:00:00', '2021-12-03 10:00:00', 1, '2021-12-10 04:05:08', '2021-12-10 04:05:08'),
(15, 'Học MySQL', '2021-12-07 08:00:00', '2021-12-07 10:00:00', 1, '2021-12-10 04:05:08', '2021-12-10 04:05:08'),
(16, 'Học MySQL', '2021-12-11 08:00:00', '2021-12-11 10:00:00', 1, '2021-12-10 04:05:08', '2021-12-10 04:05:08'),
(17, 'Học MySQL', '2021-12-15 08:00:00', '2021-12-15 10:00:00', 1, '2021-12-10 04:05:08', '2021-12-10 04:05:08'),
(18, 'Học MySQL', '2021-12-19 08:00:00', '2021-12-19 10:00:00', 1, '2021-12-10 04:05:08', '2021-12-10 04:05:08'),
(19, 'Học MySQL', '2021-12-25 08:00:00', '2021-12-25 10:00:00', 1, '2021-12-10 04:05:08', '2021-12-10 04:05:08'),
(20, 'Học Tiếng Nhật', '2021-12-08 08:00:00', '2021-12-08 10:00:00', 1, '2021-12-10 04:06:39', '2021-12-10 04:06:39'),
(21, 'Học Tiếng Nhật', '2021-12-12 08:00:00', '2021-12-12 10:00:00', 1, '2021-12-10 04:06:39', '2021-12-10 04:06:39'),
(22, 'Học Tiếng Nhật', '2021-12-16 08:00:00', '2021-12-16 10:00:00', 1, '2021-12-10 04:06:39', '2021-12-10 04:06:39'),
(23, 'Học Tiếng Nhật', '2021-12-20 08:00:00', '2021-12-20 10:00:00', 1, '2021-12-10 04:06:39', '2021-12-10 04:06:39'),
(24, 'Học Tiếng Nhật', '2021-12-26 08:00:00', '2021-12-26 10:00:00', 1, '2021-12-10 04:06:39', '2021-12-10 04:06:39');

-- --------------------------------------------------------

--
-- Table structure for table `work_status`
--

CREATE TABLE `work_status` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `work_status`
--

INSERT INTO `work_status` (`id`, `name`) VALUES
(1, 'Planning'),
(2, 'Doing'),
(3, 'Complete');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_status`
--
ALTER TABLE `work_status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `work_status`
--
ALTER TABLE `work_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
