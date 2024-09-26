-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2024 at 02:15 AM
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
  `date` varchar(12) NOT NULL,
  `location` varchar(100) NOT NULL,
  `incidentType` varchar(100) NOT NULL,
  `information` varchar(1000) NOT NULL,
  `note` varchar(1000) NOT NULL,
  `advisory` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `securitytips`
--

INSERT INTO `securitytips` (`ID`, `date`, `location`, `incidentType`, `information`, `note`, `advisory`) VALUES
(144, '04-09-2024', 'Uyo', 'Security Updates', 'The general area security level classification of the FCT and Akwa Ibom State  is MEDIUM \r\n', '\r\na. Security situations in the FCT and Akwa Ibom State are unpredictable but containable. *\r\n\r\nb. There is an uptick in criminality in the FCT. *\r\n\r\nc. There is a heightened criminality and cult activities in Uyo metropolis. *', '1. Staff should maintain situational awareness always and contact their Supervisors  in case of emergency.  *\r\n\r\n2. Staff should avoid large gatherings/take alternative routes if roadblocks by protesters are encountered. *\r\n\r\n3.  Staff are advised to maintain low profile. *\r\n\r\n4. Staff should adhere to ECEWS Security SOPs including those for trips and travels. *\r\n\r\n5. Teams are to be alert, carry means of identification and reduce non-essential trips/movements. *\r\n\r\n6. Staff are strongly advised to increase their alertness and adhere to security advisories and SOP due to uptick in criminality. *\r\n\r\n'),
(145, '04-09-2024', 'Oshun', 'Security Updates.\r\n', 'The general area security level classification of Osun State is MEDIUM', 'a. Security situation in Osun State is unpredictable but containable.\r\n\r\n', '1. Staff should maintain situational awareness always and contact their Supervisors  in case of emergency. *\r\n\r\n2.  Staff are advised to maintain low profiles.*\r\n\r\n3. Staff should adhere to ECEWS Security SOPs including those for trips and travels.*\r\n\r\n4. Teams/staff are advised to always carry means of identification.*'),
(146, '04-09-2024', 'Ebonyi', ' Security Updates.\r\n', 'The general area security level classification of Ebonyi State is MEDIUM \r\n', 'a. Security situation in Ebonyi State is unpredictable but containable. *\r\n', '1. Staff should maintain situational awareness always and contact their Supervisors  in case of emergency. \r\n\r\n2.  Staff are advised to maintain low profiles.\r\n\r\n3. Staff should adhere to ECEWS Security SOPs including those for trips and travels.\r\n\r\n4. Teams/staff are advised to always carry means of identification.'),
(147, '04-09-2024', 'Ekiti', ' Security Updates.\r\n', 'The general area security level classification of Ekiti State is MEDIUM', 'a. Security situation in Ekiti State is unpredictable but containable. *\r\n\r\nb. There is an uptick in criminality in Ado-Ekiti metropolis. *', '1. Staff should maintain situational awareness always and contact their Supervisors  in case of emergency. *\r\n\r\n2.  Staff are advised to maintain low profiles. *\r\n\r\n3. Staff should adhere to ECEWS Security SOPs including those for trips and travels. *\r\n\r\n4. Teams/staff are advised to always carry means of identification. *'),
(148, '04-09-2024', 'Delta', ' Security Updates.\r\n', 'The general area security level classification of Delta State is HIGH', 'a. The security situation in Delta State is unpredictable, but containable. *\r\n\r\nb. There is an uptick in criminality in Ughell *\r\n\r\nc. There is tension IVO Okpai community in Kwale following protest which turned violent. GSF have been deployed.\r\n\r\n', '1. Staff should maintain situational awareness always and contact their Supervisors  in case of emergency. *\r\n\r\n2. Staff should avoid large gatherings/take alternative routes if roadblocks by protesters are encountered. *\r\n\r\n3.  Staff are advised to maintain low profiles.*\r\n\r\n4. Staff should adhere to ECEWS Security SOPs including those for trips and travels.*\r\n\r\n5. Staff/teams are advised to adhere to Project leadership guidance on Okuama community and riverine trips. *\r\n\r\n6. Staff are advised to avoid non-essential, night trips and always be alert.*\r\n\r\n7. Teams/staff in Agbor and Kwale should be on alert.*'),
(149, '04-09-2024', 'Calabar', ' Security Updates', 'The general area security level classification of Calabar is HIGH ', 'a. The security situation in Calabar is unpredictable, but containable. \r\n', '1. Staff should maintain situational awareness always and contact their Supervisors  in case of emergency.  *\r\n\r\n2. Staff should avoid large gatherings/take alternative routes if roadblocks by protesters are encountered. *\r\n\r\n3.  Staff are advised to maintain low profiles. *\r\n\r\n4. Staff should adhere to ECEWS Security SOPs including those for trips and travels. *\r\n\r\n5. Staff/teams are advised to adhere to Project leadership guidance on Okuama community and riverine trips. *\r\n'),
(150, '04-09-2024', 'Abuja', 'Security Updates.\r\n', 'The general area security level classification of the FCT  is MEDIUM ', 'a. Security situations in the FCT and Akwa Ibom State are unpredictable but containable. *\r\n\r\nb. There is an uptick in criminality in the FCT. *\r\n\r\nc. There is a heightened criminality and cult activities in Uyo metropolis.*\r\n', '1. Staff should maintain situational awareness always and contact their Supervisors  in case of emergency. *\r\n\r\n2. Staff should avoid large gatherings/take alternative routes if roadblocks by protesters are encountered.*\r\n\r\n3.  Staff are advised to maintain low profile. *\r\n\r\n4. Staff should adhere to ECEWS Security SOPs including those for trips and travels.*\r\n\r\n5. Teams are to be alert, carry means of identification and reduce non-essential trips/movements.*\r\n');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
