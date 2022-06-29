-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 04:53 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_records`
--

CREATE TABLE `table_records` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `AGE` varchar(100) NOT NULL,
  `CONTACT_NUMBER` bigint(20) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `CREATION_DATE` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_records`
--

INSERT INTO `table_records` (`ID`, `NAME`, `AGE`, `CONTACT_NUMBER`, `ADDRESS`, `EMAIL`, `CREATION_DATE`) VALUES
(5, 'bryxx', '16', 5243534, 'sitio', 'sitio@gmai.com', '2022-06-28 20:20:10'),
(6, 'Bryxx Andre M.Desalit', '18', 23423, 'brixdesalit7@gmail.com', '095623@gmail.com', '2022-06-28 20:50:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_records`
--
ALTER TABLE `table_records`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_records`
--
ALTER TABLE `table_records`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
