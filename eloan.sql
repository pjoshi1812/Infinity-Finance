-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2023 at 05:22 PM
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
-- Table structure for table `eloan`
--

CREATE TABLE `eloan` (
  `srno` int(11) NOT NULL,
  `prefix` varchar(11) NOT NULL,
  `fullname` text NOT NULL,
  `mothername` text NOT NULL,
  `fathername` text NOT NULL,
  `flatno` int(25) NOT NULL,
  `buildingname` text NOT NULL,
  `streetname` text NOT NULL,
  `city` text NOT NULL,
  `districtname` text NOT NULL,
  `pincode` int(10) NOT NULL,
  `phoneno` int(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `pancardno` varchar(20) NOT NULL,
  `aadhar` int(15) NOT NULL,
  `passportno` varchar(20) NOT NULL,
  `exampasseda` varchar(15) NOT NULL,
  `universitynamea` varchar(15) NOT NULL,
  `mediuma` varchar(15) NOT NULL,
  `yearofpassinga` int(15) NOT NULL,
  `attempta` varchar(15) NOT NULL,
  `aggregatea` int(15) NOT NULL,
  `percentagea` int(15) NOT NULL,
  `exampassedb` varchar(20) NOT NULL,
  `universitynameb` varchar(25) NOT NULL,
  `mediumb` varchar(25) NOT NULL,
  `yearofpassingb` int(15) NOT NULL,
  `attemptb` varchar(15) NOT NULL,
  `aggregateb` int(15) NOT NULL,
  `percentageb` int(15) NOT NULL,
  `exampassedc` varchar(20) NOT NULL,
  `universitynamec` varchar(25) NOT NULL,
  `mediumc` varchar(25) NOT NULL,
  `yearofpassingc` int(10) NOT NULL,
  `attemptc` varchar(20) NOT NULL,
  `aggregatec` int(15) NOT NULL,
  `percentagec` int(15) NOT NULL,
  `collegenameaddr` varchar(15) NOT NULL,
  `uniname` text NOT NULL,
  `accholder` text NOT NULL,
  `branch` text NOT NULL,
  `accountnumber` int(25) NOT NULL,
  `ifsccode` varchar(25) NOT NULL,
  `micrcode` int(25) NOT NULL,
  `accountopeningdate` date NOT NULL,
  `photo` varchar(30) NOT NULL,
  `aadharphoto` varchar(30) NOT NULL,
  `addmissionletter` varchar(30) NOT NULL,
  `ssc` varchar(30) NOT NULL,
  `hsc` varchar(30) NOT NULL,
  `graduation` varchar(30) NOT NULL,
  `ageproof` varchar(30) NOT NULL,
  `signproof` varchar(30) NOT NULL,
  `residenceproof` varchar(25) NOT NULL,
  `identityproof` varchar(25) NOT NULL,
  `coursefee` int(10) NOT NULL,
  `feepersemester` int(10) NOT NULL,
  `noofsemester` int(10) NOT NULL,
  `accomodationfee` int(10) NOT NULL,
  `expense` int(10) NOT NULL,
  `travelexpense` int(10) NOT NULL,
  `cautiondeposit` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `dd` int(20) NOT NULL,
  `neft` varchar(30) NOT NULL,
  `universityaccountnumber` int(20) NOT NULL,
  `fdate` varchar(30) NOT NULL,
  `place` varchar(30) NOT NULL,
  `fsignature` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eloan`
--

INSERT INTO `eloan` (`srno`, `prefix`, `fullname`, `mothername`, `fathername`, `flatno`, `buildingname`, `streetname`, `city`, `districtname`, `pincode`, `phoneno`, `email`, `pancardno`, `aadhar`, `passportno`, `exampasseda`, `universitynamea`, `mediuma`, `yearofpassinga`, `attempta`, `aggregatea`, `percentagea`, `exampassedb`, `universitynameb`, `mediumb`, `yearofpassingb`, `attemptb`, `aggregateb`, `percentageb`, `exampassedc`, `universitynamec`, `mediumc`, `yearofpassingc`, `attemptc`, `aggregatec`, `percentagec`, `collegenameaddr`, `uniname`, `accholder`, `branch`, `accountnumber`, `ifsccode`, `micrcode`, `accountopeningdate`, `photo`, `aadharphoto`, `addmissionletter`, `ssc`, `hsc`, `graduation`, `ageproof`, `signproof`, `residenceproof`, `identityproof`, `coursefee`, `feepersemester`, `noofsemester`, `accomodationfee`, `expense`, `travelexpense`, `cautiondeposit`, `total`, `dd`, `neft`, `universityaccountnumber`, `fdate`, `place`, `fsignature`) VALUES
(11, 'Mr', '', '', '', 0, '', '', '', '', 0, 0, '', '', 0, '', '', '', '', 0, '', 0, 0, '', '', '', 0, '', 0, 0, '', '', '', 0, '', 0, 0, '', '', '', '', 0, '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', '', ''),
(12, 'Mr', '', '', '', 0, '', '', '', '', 0, 0, '', '', 0, '', '', '', '', 0, '', 0, 0, '', '', '', 0, '', 0, 0, '', '', '', 0, '', 0, 0, '', '', '', '', 0, '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', '', ''),
(13, 'Mr', 'Prajakta Joshi', 'sumedha', 'rajaram', 0, 'Ramshyam Apts', 'Pune', 'Pune', 'maharastra', 4110303, 2147483647, 'prajaktajoshi20', 'hgfhdjfsjk', 2147483647, 'j1234567', '', '', '', 0, '', 0, 0, '', '', '', 0, '', 0, 0, '', '', '', 0, '', 0, 0, 'h', 'Prajakta Joshi', 'Prajakta Joshi', 'tilak road', 88455212, '525252', 4444545, '2023-10-12', 'agriculture.pdf', 'agriculture.pdf', 'agriculture.pdf', 'driving licence.jpeg', 'agriculture.pdf', 'agriculture.pdf', 'agriculture.pdf', 'voterid.jpg', 'agriculture.pdf', 'recidenceproof.pdf', 5452121, 5515454, 852369, 78965412, 44789650, 54545454, 2147483647, 12236589, 789654123, '444', 4789, '2023-10-12', 'pune', 'driving licence.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eloan`
--
ALTER TABLE `eloan`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eloan`
--
ALTER TABLE `eloan`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
