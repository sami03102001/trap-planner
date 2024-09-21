-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 12:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mankind`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `A_ID` int(11) NOT NULL,
  `Name` varchar(51) DEFAULT NULL,
  `Email` varchar(51) DEFAULT NULL,
  `Date` varchar(51) DEFAULT NULL,
  `Time` varchar(51) DEFAULT NULL,
  `Phone` varchar(51) DEFAULT NULL,
  `Location` varchar(51) DEFAULT NULL,
  `Description` varchar(111) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`A_ID`, `Name`, `Email`, `Date`, `Time`, `Phone`, `Location`, `Description`) VALUES
(1, 'admin', ' Ali@ahmed5265', '2022-08-01', '14:30', ' 132', 'alilia', ' des');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(11) NOT NULL,
  `name` varchar(51) DEFAULT NULL,
  `address` varchar(51) DEFAULT NULL,
  `phone` varchar(51) DEFAULT NULL,
  `email` varchar(51) DEFAULT NULL,
  `message` varchar(51) DEFAULT NULL,
  `argent` varchar(51) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `name`, `address`, `phone`, `email`, `message`, `argent`) VALUES
(1, 'asdasd', 'asd', 'asd', 'asd', 'asd', 'Yes'),
(2, 'asdasd', 'asd', 'asdasd', 'asdasd', 'asdasd', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `FirstName` varchar(51) DEFAULT NULL,
  `LastName` varchar(51) DEFAULT NULL,
  `Email` varchar(51) DEFAULT NULL,
  `Pasword` varchar(51) DEFAULT NULL,
  `Contact` varchar(51) DEFAULT NULL,
  `Gender` varchar(51) DEFAULT NULL,
  `Age` varchar(51) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `FirstName`, `LastName`, `Email`, `Pasword`, `Contact`, `Gender`, `Age`) VALUES
(15, 'admin', 'one', 'login@one.com', 'login', '031563', 'male', '45');

-- --------------------------------------------------------

--
-- Table structure for table `vitals`
--

CREATE TABLE `vitals` (
  `v_id` int(11) NOT NULL,
  `userrid` varchar(51) DEFAULT NULL,
  `wieght` varchar(51) DEFAULT NULL,
  `gluecose` varchar(51) DEFAULT NULL,
  `bp` varchar(51) DEFAULT NULL,
  `height` varchar(51) DEFAULT NULL,
  `pules` varchar(51) DEFAULT NULL,
  `temp` varchar(51) DEFAULT NULL,
  `age` varchar(51) DEFAULT NULL,
  `daibetes` varchar(51) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vitals`
--

INSERT INTO `vitals` (`v_id`, `userrid`, `wieght`, `gluecose`, `bp`, `height`, `pules`, `temp`, `age`, `daibetes`) VALUES
(1, '15', 'KG', 'MG/DL', 'mmHg', 'FT', 'bpm', '°F', 'Yrs', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`A_ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `vitals`
--
ALTER TABLE `vitals`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `A_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `vitals`
--
ALTER TABLE `vitals`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
