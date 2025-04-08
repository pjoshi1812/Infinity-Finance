-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2023 at 05:07 PM
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
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `srno` int(3) NOT NULL,
  `id` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `captcha` varchar(15) NOT NULL,
  `subtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`srno`, `id`, `password`, `captcha`, `subtime`) VALUES
(1, 'prajakta', '', 't@XNG', '2023-09-19 03:36:17'),
(2, 'Shreya@180', '', 'oME3R', '2023-09-19 04:14:41'),
(3, 'prajakta', '', 'WLl!D', '2023-09-24 06:02:59'),
(4, 'prajakta', '', '&nOee', '2023-09-24 06:09:03'),
(5, 'prajakta', '', '%ZBDx', '2023-09-24 12:05:15'),
(6, '', '', 'K7KJ#', '2023-09-24 12:16:27'),
(7, 'Shreya', '123', 'AkxWc', '2023-09-24 12:17:33'),
(8, 'Shreya', '123', 'lbnkf', '2023-09-26 09:57:55'),
(9, 'Shreya', '123', 'B@wVo', '2023-09-26 10:03:53'),
(10, 'Shreya', '123', 'Eme5z', '2023-09-26 10:13:04'),
(11, 'Shreya', '123', 'LtQJf', '2023-09-27 15:18:44'),
(12, 'Shreya', '123', 'CqcRt', '2023-09-27 16:18:15'),
(13, 'Shreya', '123', 'jFYnc', '2023-09-28 14:59:54'),
(14, 'Shreya', '123', 'jFYnc', '2023-09-28 15:06:53'),
(15, 'Shreya', '123', 'jFYnc', '2023-09-28 15:07:04'),
(16, 'Shreya', '123', 'EJ0o%', '2023-09-28 15:26:31'),
(17, 'prajakta', '123', '1@#t&', '2023-09-29 07:12:19'),
(18, 'prajakta', '123', '^kjPk', '2023-09-29 07:13:39'),
(19, 'shreya', '123', 'WSo$J', '2023-09-29 07:41:14'),
(20, 'user', '123', 'rREM$', '2023-09-29 09:05:02'),
(21, 'user', '123', '#RjGm', '2023-09-29 09:31:04'),
(22, 'Shreya', '123', 'uIwtu', '2023-09-29 10:09:04'),
(23, 'Shreya', '123', 'M$$kV', '2023-09-29 11:08:27'),
(24, 'Shreya', '123', 'kFxkT', '2023-09-30 04:23:23'),
(25, 'Shreya', '123', 'xld9k', '2023-09-30 04:50:54'),
(26, 'Shreya', '123', 'jywRV', '2023-09-30 07:32:33'),
(27, 'Atharva', '123', 'TOzFl', '2023-09-30 08:53:00'),
(28, 'Shreya', '123', '6!9GP', '2023-10-02 11:07:03'),
(29, 'Prajakta', '123', '72t6W', '2023-10-02 11:18:57'),
(30, 'Prajakta', '123', 'INIJn', '2023-10-03 09:29:26'),
(31, 'Shreya', '123', 'kLo3E', '2023-10-06 06:13:38'),
(32, 'Shreya', '123', 'cEioi', '2023-10-12 13:42:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `srno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
