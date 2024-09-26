-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2024 at 12:16 PM
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
-- Database: `secueiry_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `securitytips`
--

CREATE TABLE `securitytips` (
  `ID` int(11) NOT NULL,
  `date` date NOT NULL,
  `location` varchar(100) NOT NULL,
  `incidentType` varchar(50) NOT NULL,
  `note` varchar(500) NOT NULL,
  `advisory` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `securitytips`
--

INSERT INTO `securitytips` (`ID`, `date`, `location`, `incidentType`, `note`, `advisory`) VALUES
(1, '0000-00-00', 'Oshun', 'Security Tips', 'Crises at Federal Road', 'Suspend movement into the route for 2 hours'),
(2, '0000-00-00', 'Abuja', 'SECURITY REPORT', 'MARBUCHI on Fire Raid', 'ABuja may not be safe for 7 days'),
(3, '0000-00-00', 'Delta', 'NEW', 'MORE NEW', 'ELSE'),
(4, '0000-00-00', 'Delta', 'NEW', 'MORE NEW', 'ELSE'),
(5, '0000-00-00', 'Delta', 'NEW', 'MORE NEW', 'ELSE'),
(6, '0000-00-00', 'Delta', 'NEW', 'MORE NEW', 'ELSE'),
(7, '0000-00-00', 'Delta', 'NEW', 'MORE NEW', 'ELSE'),
(8, '0000-00-00', 'Delta', 'NEW', 'MORE NEW', 'ELSE'),
(9, '0000-00-00', 'Delta', 'NEW', 'MORE NEW', 'ELSE'),
(10, '0000-00-00', 'Delta', 'NEW', 'MORE NEW', 'ELSE'),
(11, '0000-00-00', 'Delta', 'NEW', 'MORE NEW', 'ELSE'),
(12, '0000-00-00', 'Delta', 'NEW', 'MORE NEW', 'ELSE'),
(13, '0000-00-00', 'Uyo', 'SECURITY FEED', 'NONE', 'MORE');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffID` varchar(20) NOT NULL,
  `staffFirstName` varchar(30) NOT NULL,
  `staffMiddleName` varchar(30) NOT NULL,
  `staffSurName` varchar(30) NOT NULL,
  `staffDepartment` varchar(30) NOT NULL,
  `staffState` varchar(30) NOT NULL,
  `staffPhoneNumber` varchar(11) NOT NULL,
  `staffUsername` varchar(30) NOT NULL,
  `staffPassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffID`, `staffFirstName`, `staffMiddleName`, `staffSurName`, `staffDepartment`, `staffState`, `staffPhoneNumber`, `staffUsername`, `staffPassword`) VALUES
('ECEWS001', 'Mercy', 'Ehimhen', 'Maximum', 'IT', 'Akwa Ibom, Uyo', '09049374487', 'Mercy Maximum', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `securitytips`
--
ALTER TABLE `securitytips`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `securitytips`
--
ALTER TABLE `securitytips`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
