-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 02, 2019 at 05:54 AM
-- Server version: 10.1.41-MariaDB-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawenidl_car11`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` text NOT NULL,
  `country` varchar(50) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `country`, `phone`, `message`, `created_date`, `modified_date`) VALUES
(1, 'wqas', 'dudud@gmail.com', '', '212', 'asas', '2019-03-12 14:28:38', '2019-03-12 13:28:38'),
(2, 'idealzeeera', 'nabeel_206@hotmail.com', '', '56757567', 'asas', '2019-03-12 14:30:55', '2019-03-12 13:30:55'),
(3, 'Nabeel Ahmad', 'nabeelgemini2@gmail.com', '', '2147483647', 'test online', '2019-03-13 11:11:07', '2019-03-13 15:11:07'),
(4, 'Nabeel Ahmad', 'nabeelgemini2@gmail.com', '', '2147483647', 're test contact online', '2019-03-13 12:04:08', '2019-03-13 16:04:08'),
(5, 'Nabeel Ahmad', 'nabeelgemini2@gmail.com', '', '2147483647', 'Hy where you located?', '2019-07-24 09:44:01', '2019-07-24 13:44:01'),
(6, 'Nabeel Ahmad', 'nabeelgemini2@gmail.com', '', '3064479553', 'Hy where you located?', '2019-07-24 09:45:07', '2019-07-24 13:45:07'),
(7, 'faisal malik', 'fassi932@gmail.com', '', '+923434317221', 'a', '2019-08-29 03:35:14', '2019-08-29 07:35:14'),
(9, 'raazdari', 'fassi932@gmail.com', 'South Georgia and The South Sandwich Islands', '+923434317221', 'swsw', '2019-08-29 04:02:12', '2019-08-29 08:02:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
