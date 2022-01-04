-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 08:19 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ani_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `ani_info`
--

CREATE TABLE `ani_info` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cat` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `des` varchar(255) NOT NULL,
  `life` varchar(50) NOT NULL,
  `insert_date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ani_info`
--

INSERT INTO `ani_info` (`id`, `name`, `cat`, `image`, `des`, `life`, `insert_date`) VALUES
(8, 'Tiger', 'Herbivores', 'photo-1561731216-c3a4d99437d5.jpeg', 'Tiger', '10+ Years', '2022-01-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ani_info`
--
ALTER TABLE `ani_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ani_info`
--
ALTER TABLE `ani_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
