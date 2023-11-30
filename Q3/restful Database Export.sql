-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 01:52 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restful`
--

-- --------------------------------------------------------

--
-- Table structure for table `horizonstudents`
--

CREATE TABLE `horizonstudents` (
  `idnum` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `district` varchar(200) NOT NULL,
  `prov` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `tpnum` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `horizonstudents`
--

INSERT INTO `horizonstudents` (`idnum`, `fname`, `lname`, `city`, `district`, `prov`, `email`, `tpnum`) VALUES
(1, 'John', 'David', 'Malabe', 'Colombo', 'Western', 'abcd@gmailcom', '011-4556783'),
(2, 'Simon', 'hudson', 'chilaw', 'puttlam', 'North_Western', 'abcd@gmail.com', '011-1245789'),
(3, 'Alise', 'Cruise', 'Negombo', 'Gampaha', 'Western', 'aasdd@gmail.com', '056-4587963'),
(4, 'Michelle', 'Jackson', 'Kelaniya', 'Gampaha', 'Western', 'aasdd@hotmail.com', '011-4589632'),
(5, 'Johnson_UPDATED', 'Burger_UPDATED', 'kandy_UPDATED', 'kandy_UPDATED', 'Central_UPDATED', 'aqwe@yahoo.com_UPDATED', '045-3232323');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `horizonstudents`
--
ALTER TABLE `horizonstudents`
  ADD PRIMARY KEY (`idnum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `horizonstudents`
--
ALTER TABLE `horizonstudents`
  MODIFY `idnum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
