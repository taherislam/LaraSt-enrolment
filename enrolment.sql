-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2019 at 10:51 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enrolment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'Taher Islam', 'taherinfobd@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01729819162', NULL, NULL);

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
(1, '2019_02_11_150855_create_admin_tbl_table', 1),
(2, '2019_02_22_041500_create_student_tbl_table', 2),
(3, '2019_04_07_045709_create_teacher_tbl_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `student_id` int(10) UNSIGNED NOT NULL,
  `student_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_roll` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_fathername` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_mothername` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_admissionyear` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`student_id`, `student_name`, `student_roll`, `student_fathername`, `student_mothername`, `student_email`, `student_phone`, `student_address`, `student_image`, `student_password`, `student_department`, `student_admissionyear`) VALUES
(5, 'Nahid Islam', '42', 'Khali mahmud', 'jabada', 'nahid@gmail.com', '017254156582', 'mirpur', 'image/b12XB8tXeNf6fVyoxbtN.jpg', '5295851a864aad7a6d6a7b0da74ae9e4', '2', '2015-03-04'),
(6, 'sumi akter', '120', 'nazmul huda', 'samia', 'a@gmail.com', '123', 'hh', 'image/jTlKQyZFE4v0CCUhxhTO.jpg', '123456789', '3', '2017-02-05'),
(7, 'dipto', '123', 'jamil', 'aysha', 'dipto@gmail.com', '1258152522', 'mirpur, Dhaka', 'image/taGsufv6xTSnmIUqkt2y.jpg', '1234567', '4', '2018-03-19'),
(8, 'tania', '125', 'forid', 'toma', 'tania@gmail.com', '01582654598', 'farmgate', 'image/GMEWCSFkFVKMfRHkiFx2.jpg', 'e10adc3949ba59abbe56e057f20f883e', '5', '2016-03-07'),
(9, 'sufia', '127', 'nadim', 'nadia', 'sufia@gmail.com', '14545821565', 'motijil', 'image/uSA3JlA7XiaHAgTRaqah.jpeg', 'e10adc3949ba59abbe56e057f20f883e', '5', '2015-03-19'),
(10, 'sunil', '165', 'sanil gupto', 'suemilla', 'sunil@gmail.com', '01582658965', 'dhanmondi', 'image/AalqUZWSnIMQzVJkz0CZ.jpg', 'e10adc3949ba59abbe56e057f20f883e', '2', '2018-04-01'),
(11, 'klnsdkfjds', '786547', 'dfgdfsg', 'fdgfdg', 'f@gmail.com', '1243548648', 'fdrgfd', 'image/FNgtnJOQ0gKRaEDWjo2g.jpg', 'd3d959ac26eb7829e7cc6193f43d5107', '4', '2019-04-30'),
(12, 'Jakaria', '587857', 'montu', 'Momena', 'Jakaria@gmail.com', '0179692450', 'Frameget', 'image/kDCeYnFbnZMJqHLEKnPN.jpg', 'aadc03fecca9b5cc2fd64b333cb0875e', '2', '2019-04-09'),
(13, 'Jakaria', '12', 'montu', 'Rokeya Begum', 'jubayer@gmail.com', '1243548648', 'Frameget', 'image/YK23Bsdd7klebMCL5jvE.jpg', '07303f064b0e3b002a7fb8cae8baae9e', '3', '2019-04-24'),
(14, 'meni', '102', 'jilani', 'jilani', 'meni@gmail.com', '0141445522221', 'dhaka', 'image/nXxMwYuJ5hKZ5IpBZ03u.jpg', 'e10adc3949ba59abbe56e057f20f883e', '3', '2019-04-17');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_tbl`
--

CREATE TABLE `teacher_tbl` (
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `teacher_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_tbl`
--

INSERT INTO `teacher_tbl` (`teacher_id`, `teacher_name`, `teacher_phone`, `teacher_address`, `teacher_department`, `teacher_image`, `created_at`, `updated_at`) VALUES
(2, 'Taher', '01776904284', 'Dhaka', '1', 'image/Vh6YF8UjLjGv2NGtLOSX.jpg', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teacher_tbl`
--
ALTER TABLE `teacher_tbl`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `student_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `teacher_tbl`
--
ALTER TABLE `teacher_tbl`
  MODIFY `teacher_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
