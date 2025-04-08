-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2023 at 05:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loan`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `srno` int(3) NOT NULL,
  `id` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `captcha` varchar(10) NOT NULL,
  `subtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`srno`, `id`, `password`, `captcha`, `subtime`) VALUES
(20, 'admin', '', 'k#y^6', '2023-09-24 05:47:29'),
(21, 'admin', '', 'k#y^6', '2023-09-24 05:48:38'),
(22, 'admin', '', 'k#y^6', '2023-09-24 05:48:40'),
(23, 'admin', '', 'k#y^6', '2023-09-24 05:51:05'),
(24, 'admin', '123', 'cNUOC', '2023-09-24 12:16:44'),
(25, 'admin', '', '!otTc', '2023-09-26 09:18:46'),
(26, 'admin', '', '!otTc', '2023-09-26 09:18:56'),
(27, 'admin', '123', 'q#NI^', '2023-09-27 15:47:09'),
(28, 'admin', '123', '%!ij0', '2023-09-28 15:22:24'),
(29, 'admin', '123', 'VU0Gs', '2023-09-29 07:17:05'),
(30, 'admin', '123', '7R$O7', '2023-09-29 14:27:01'),
(31, 'admin', '123', 'n+J%#', '2023-09-30 04:22:23'),
(32, 'admin', '123', 'WWr01', '2023-09-30 04:48:58'),
(33, 'admin', '123', 'hLf&K', '2023-09-30 08:03:17'),
(34, 'admin', '123', '*Ba3@', '2023-09-30 08:42:15'),
(35, 'admin', '123', 'Nako&', '2023-10-02 11:25:49'),
(36, 'admin', '123', 'zlVDX', '2023-10-03 09:33:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `srno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
