-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 05, 2019 at 01:41 AM
-- Server version: 10.1.40-MariaDB-cll-lve
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
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT '1',
  `ac` tinyint(1) DEFAULT NULL,
  `power_door` tinyint(1) DEFAULT NULL,
  `abs` tinyint(1) DEFAULT NULL,
  `break_assist` tinyint(1) DEFAULT NULL,
  `power_steering` tinyint(1) DEFAULT NULL,
  `airbag` tinyint(1) DEFAULT NULL,
  `power_window` tinyint(1) DEFAULT NULL,
  `pressure_break` tinyint(1) DEFAULT NULL,
  `cd` tinyint(1) DEFAULT NULL,
  `crash_sensor` tinyint(1) DEFAULT NULL,
  `leather_seats` tinyint(1) DEFAULT NULL,
  `engine_warning` tinyint(1) DEFAULT NULL,
  `central_lock` tinyint(1) DEFAULT NULL,
  `auto_headlamp` tinyint(1) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`id`, `users_id`, `ac`, `power_door`, `abs`, `break_assist`, `power_steering`, `airbag`, `power_window`, `pressure_break`, `cd`, `crash_sensor`, `leather_seats`, `engine_warning`, `central_lock`, `auto_headlamp`, `created_date`, `modified_date`, `status`) VALUES
(53, 46, 1, 1, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, '2017-12-26 09:12:10', '2017-12-26 08:12:10', 1),
(54, 46, 1, NULL, NULL, NULL, 1, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2017-12-26 09:14:44', '2017-12-26 08:14:44', 1),
(55, 46, NULL, NULL, NULL, NULL, 1, NULL, NULL, 1, NULL, 1, NULL, 1, NULL, NULL, '2017-12-26 09:18:00', '2017-12-26 08:18:00', 1),
(56, 46, 1, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, '2017-12-26 09:20:04', '2018-01-04 05:22:52', 1),
(57, 46, 1, NULL, 1, NULL, 1, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2017-12-26 09:23:13', '2017-12-26 08:23:13', 1),
(58, 46, NULL, NULL, 1, NULL, 1, NULL, 1, NULL, 1, NULL, 1, NULL, NULL, NULL, '2017-12-26 09:25:59', '2017-12-26 08:25:59', 1),
(59, 46, NULL, NULL, 1, NULL, 1, NULL, 1, NULL, 1, NULL, 1, NULL, NULL, NULL, '2017-12-26 09:26:18', '2017-12-26 08:26:18', 1),
(60, 47, 1, NULL, 1, 1, NULL, 1, NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, '2017-12-27 11:43:12', '2017-12-27 10:43:12', 1),
(61, 47, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, NULL, '2017-12-27 11:44:40', '2017-12-27 10:44:40', 1),
(62, NULL, 1, 1, NULL, 1, NULL, 1, NULL, 1, NULL, 1, NULL, NULL, NULL, 1, '2017-12-27 11:46:12', '2017-12-27 10:46:12', 1),
(63, NULL, 1, 1, NULL, 1, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-27 11:46:42', '2017-12-27 10:46:42', 1),
(64, 48, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, 1, NULL, NULL, NULL, NULL, '2018-01-02 08:08:39', '2018-01-02 04:42:10', 1),
(65, 49, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-02 13:08:47', '2018-02-02 12:08:47', 1),
(66, 47, NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, 1, NULL, 1, 1, NULL, NULL, '2018-03-29 13:11:40', '2018-03-29 11:11:40', 1),
(67, 0, 1, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2019-03-04 22:28:34', '2019-03-04 21:28:34', 1),
(68, 0, 1, NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, NULL, 1, NULL, 1, NULL, '2019-03-04 22:31:15', '2019-03-04 21:31:15', 1),
(69, 0, 1, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 22:33:16', '2019-03-04 21:33:16', 1),
(70, 0, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-07 11:32:00', '2019-03-07 10:32:00', 1),
(71, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-07 11:34:53', '2019-03-07 10:34:53', 1),
(72, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-07 11:35:16', '2019-03-07 10:35:16', 1),
(73, 0, NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2019-03-13 12:06:33', '2019-03-13 16:06:33', 1),
(74, 0, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-15 09:13:11', '2019-03-15 13:13:11', 1),
(75, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2019-03-15 09:15:05', '2019-03-15 13:15:05', 1),
(76, 0, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 1, NULL, '2019-03-15 09:17:43', '2019-03-15 13:17:43', 1),
(77, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2019-03-15 09:21:51', '2019-03-15 13:21:51', 1),
(78, 0, 1, 1, 1, 1, 1, 1, 1, NULL, 1, NULL, 1, NULL, 1, NULL, '2019-03-15 09:24:26', '2019-03-15 13:24:26', 1),
(79, 0, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, 1, NULL, 1, NULL, NULL, NULL, '2019-03-15 09:26:53', '2019-03-15 13:26:53', 1),
(80, 0, 1, NULL, 1, 1, 1, 1, 1, 1, 1, 1, NULL, 1, NULL, 1, '2019-03-18 04:57:49', '2019-03-18 08:57:49', 1),
(81, 0, 1, 1, 1, NULL, 1, 1, 1, NULL, 1, 1, 1, 1, NULL, NULL, '2019-07-24 08:28:10', '2019-07-24 12:28:10', 1),
(82, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-01 01:02:46', '2019-08-01 05:02:46', 1),
(83, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-01 01:04:53', '2019-08-01 05:04:53', 1),
(84, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-01 01:07:46', '2019-08-01 05:07:46', 1),
(85, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-02 00:11:49', '2019-08-02 04:11:49', 1),
(86, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-02 09:27:33', '2019-08-02 13:27:33', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `created`) VALUES
(1, 'admin', 'cde7b37f1372bd2da6b71fb8cb02536d', '2019-03-13 14:39:09');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `long_description` text NOT NULL,
  `pic` varchar(250) NOT NULL,
  `status` int(1) NOT NULL,
  `type` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `long_description`, `pic`, `status`, `type`, `date`, `created`) VALUES
(1, 'wqas khan', 'blog hai bhai', 'jn.gdsk,bgjds, mbjkgsd,m', 'logo1.PNG', 1, 'vip', '0000-00-00', '0000-00-00 00:00:00'),
(2, 'wqas khan', 'blog two', 'blog ki h nhhh', 'logo12.PNG', 1, 'general', '0000-00-00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pic` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `pic`, `email`, `type`, `create_date`, `modified_date`, `status`) VALUES
(1, 'wqas khan', 'e6_(1).jpg', 'as@gasd.cohjkm', 'gender', '0000-00-00', '2018-03-30 18:19:35', 1),
(2, 'huwaei2', '2.jpg', 'afs@adsf.com', 'vendor', '0000-00-00', '2018-03-30 17:41:38', 0),
(3, 'fesdag', '1.jpg', 'ga@gmail.com', 'vendor', '0000-00-00', '2018-03-30 11:57:47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` text NOT NULL,
  `phone` varchar(25) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `created_date`, `modified_date`) VALUES
(1, 'wqas', 'dudud@gmail.com', '212', 'asas', '2019-03-12 14:28:38', '2019-03-12 13:28:38'),
(2, 'idealzeeera', 'nabeel_206@hotmail.com', '56757567', 'asas', '2019-03-12 14:30:55', '2019-03-12 13:30:55'),
(3, 'Nabeel Ahmad', 'nabeelgemini2@gmail.com', '2147483647', 'test online', '2019-03-13 11:11:07', '2019-03-13 15:11:07'),
(4, 'Nabeel Ahmad', 'nabeelgemini2@gmail.com', '2147483647', 're test contact online', '2019-03-13 12:04:08', '2019-03-13 16:04:08'),
(5, 'Nabeel Ahmad', 'nabeelgemini2@gmail.com', '2147483647', 'Hy where you located?', '2019-07-24 09:44:01', '2019-07-24 13:44:01'),
(6, 'Nabeel Ahmad', 'nabeelgemini2@gmail.com', '3064479553', 'Hy where you located?', '2019-07-24 09:45:07', '2019-07-24 13:45:07');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `p_number` int(255) NOT NULL,
  `msg` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `f_name`, `email`, `p_number`, `msg`) VALUES
(1, 'f', 'a5@hotmail.com', 121, 'mesamesamesamesamesa'),
(2, 'f', 'a5@hotmail.com', 1211, 'fbcdfa'),
(3, 'f', 'a5@hotmail.com', 1211, 'fbcdfa'),
(4, 'a', 'a5@hotmail.com', 121, 'ds'),
(5, 'test', 'a5@hotmail.com', 121, 'ds'),
(6, '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `multipleimg`
--

CREATE TABLE `multipleimg` (
  `id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `multipleimages` varchar(350) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `multipleimg`
--

INSERT INTO `multipleimg` (`id`, `vehicle_id`, `multipleimages`, `created_date`, `modified_date`) VALUES
(11, 77, '5c8dc5dbb9f86cdb85df9cb7bf71c259.jpg,4d8f2516f9967e532dce0424bdea6aa1.jpg,32bd8bfc0837cefa71491d10b6b84621.jpg', '2019-03-13 12:12:33', '2019-03-13 16:12:33'),
(12, 84, '17966a1529928353627bbdfd0b15c8b3.jpg,8480eec8cdc853ae9ed590525121daca.jpg,ec2e792f027683c7dc698fecf78bf338.jpg', '2019-03-22 11:59:12', '2019-03-22 15:59:12'),
(13, 84, 'a532c80fcfadf09c74f35e5c83376d08.jpg,5cb3807cc013eb5a8f43d7c0be9c26f3.jpg,96e41ca69f458ab5c028080d3b9d16b8.jpg,3f0653c3b8588065b3cc244e579fb4b3.jpg', '2019-03-22 12:00:43', '2019-03-22 16:00:43'),
(14, 85, 'cc18b7d96a994a3214c80b18b718c89f.jpg', '2019-07-24 08:30:51', '2019-07-24 12:30:51'),
(15, 85, '1a9abac34033a1d03db9f9fc6b16ea06.jpg', '2019-07-24 08:31:23', '2019-07-24 12:31:23'),
(16, 85, '7c5d78262767bb2d9c9c56d0aae0f2e1.jpg', '2019-07-24 08:31:51', '2019-07-24 12:31:51'),
(17, 85, 'bb54591d1845947cb5f8a52af9b4abc5.jpg', '2019-07-24 10:27:50', '2019-07-24 14:27:50'),
(18, 85, 'f7c589d8d17adf3d9ccc60a170162ff3.jpg', '2019-07-24 10:36:19', '2019-07-24 14:36:19'),
(19, 85, 'c4235ff8ac00833c3cf1731887d6bf0b.jpg', '2019-07-24 10:36:38', '2019-07-24 14:36:38'),
(20, 85, '249662854c337624f3508590ea7ab1a5.jpg', '2019-07-24 10:37:34', '2019-07-24 14:37:34'),
(21, 85, 'e42f928538f9353fdbfcdccd97c8ac65.jpg', '2019-07-24 10:39:38', '2019-07-24 14:39:38'),
(22, 85, '6ac42af5478f6b5b45c451179050d7c8.jpg', '2019-07-24 10:39:53', '2019-07-24 14:39:53'),
(25, 87, '3fbf6084eac2ba49e4f218d53894bcd0.jpg', '2019-08-02 03:38:44', '2019-08-02 07:38:44'),
(26, 87, '43ad11c331a075a26e8b0677cf2ab42d.jpg', '2019-08-02 03:39:32', '2019-08-02 07:39:32'),
(27, 86, '799c017e9710c0e764399f41cf01d825.png', '2019-08-02 03:53:23', '2019-08-02 07:53:23'),
(28, 78, '742503acba099624add871ecbb4db85a.jpg,39b7b7aff6a36006a992c351ddc3c86a.jpg,bafddf4b08425cd229ac6e298bd04dd2.jpg', '2019-08-02 09:22:10', '2019-08-02 13:22:10'),
(29, 78, '8fac102baf9d164483a993c91756acd9.jpg,76e0c0a03e4daad034aafca2172d1ded.jpg', '2019-08-02 09:22:40', '2019-08-02 13:22:40'),
(30, 85, 'a2edd80dd5631026627888f3d78f6c27.png,1ecf6d854f24f120693d7bf32102c3e3.png,216683b40d4bb07b15b17f674f4822ff.png', '2019-08-02 09:24:58', '2019-08-02 13:24:58'),
(31, 88, '532662702073c6438bc7852aa3bc2e84.png,c16ffd27d75a479426c99b1cf9fb2967.png,cfad0defaebcbdeefa2f017d10e80f02.png,bb787ba33b45eaf5ed896432f28a3900.png', '2019-08-02 09:28:06', '2019-08-02 13:28:06'),
(32, 88, '15d5d33560c5b9e52c826e7b73770ac8.png,8ccc31de8fe6a82628c4f16228a6fe65.png,47e41fb82f3ab8e860887da8fc0cf086.png,0e97b98df6514644ca5837fa25e42618.png,ebfad2e0602974dc13f75d14e5c56576.png', '2019-08-05 01:00:29', '2019-08-05 05:00:29');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `message` varchar(255) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `message`, `vehicle_id`, `created_date`, `modified_date`) VALUES
(8, 'Nabeel Ahmad', 'nabeelgemini2@gmail.com', '2147483647', 'I want tp purchase this car contact me ASAP!', 85, '2019-07-24 09:37:24', '2019-07-24 13:37:24'),
(11, 'Abdul Rehman', 'abdul@abc.com', '09909', 'Hy', 84, '2019-07-24 09:46:17', '2019-07-24 13:46:17'),
(12, 'huhih', 'car_adviser@world.odn.ne.jp', 'hjklhklhlk', 'uhoj', 85, '2019-07-24 10:49:34', '2019-07-24 14:49:34');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `caption1` varchar(100) NOT NULL,
  `caption2` varchar(100) NOT NULL,
  `background` varchar(100) DEFAULT NULL,
  `image1` varchar(100) DEFAULT NULL,
  `image2` varchar(100) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `caption1`, `caption2`, `background`, `image1`, `image2`, `created`) VALUES
(27, 'Japanese Auction Cars', 'Damage Vehicle Auction ', 'f0b7c908c0787a27613c0b12dc6f43a7.jpg', '115fad0fdf0faa62ce4d12c41db341a1.png', '7647f7e050299b23ed2a588a28d35f76.jpg', '2019-03-15 13:05:14'),
(28, 'Left Hand Drive Cars', 'Find best Cars in Auction with Cheaper Price     ', 'ec15169c9ae7a9254d01e5938933c34b.jpg', '00b4e254d2286593b17b8c31a3a3760a.png', '7c702a1d6bbadee3b2b017844c81ba0f.jpg', '2019-03-15 13:07:37'),
(31, '', '', 'eb682546e6b563a434f51cd38f311362.png', '5091f4b5a54ae930bff51bed44f50353.png', 'd925921e11d7842fa506647b65f7b8d4.jpg', '2019-03-15 13:41:22');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `message` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `designation`, `message`, `image`, `created_date`) VALUES
(6, 'Faisal ', 'Internee ', 'This AutoSandWheels Compny makes my dreams real I realy like their servicesand so happy to find it and ill recommend this company to others .', 'user_hd_059b8d188474fa27f1b57175c6b78e692.png', '2019-03-08 11:48:56'),
(7, 'Pakistan Trips', 'Internee at Nextsol', 'khan', 'e82dae4fc89e8174fcece1d8c2c3c9cf.jpeg', '2019-03-08 11:41:05'),
(8, 'Nabeel Ahmad', 'CEO', 'You Guys are the best!', 'f9c756a6988c92d69745a7f97f12e981.png', '2019-07-24 13:56:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pic` varchar(255) NOT NULL DEFAULT 'default.gif',
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `fb_id` varchar(255) NOT NULL,
  `twitter_id` varchar(255) NOT NULL,
  `linkedin_id` varchar(255) NOT NULL,
  `gplus_id` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_date` datetime NOT NULL,
  `status` int(1) NOT NULL,
  `type` varchar(50) NOT NULL,
  `token` varchar(255) NOT NULL,
  `location` varchar(25) NOT NULL,
  `zipcode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `pic`, `email`, `password`, `phone_no`, `dob`, `address`, `country`, `city`, `fb_id`, `twitter_id`, `linkedin_id`, `gplus_id`, `created_date`, `created_by`, `modified_date`, `status`, `type`, `token`, `location`, `zipcode`) VALUES
(53, 'f', '837b98ebcf470f2a5b2342b807d15b18.png', 'faisal@gmail.com', '202cb962ac59075b964b07152d234b70', '323232323365', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0, '', '', 'lahoew2', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `name`, `status`, `created`) VALUES
(1, 'individual', 1, '2018-01-24 09:14:44'),
(2, 'dealer', 1, '2018-01-24 09:15:58'),
(3, 'repairer', 1, '2018-01-24 09:16:42'),
(4, 'autoparts', 1, '2018-01-29 11:01:51'),
(5, 'towing_service', 1, '2018-01-29 11:04:05'),
(6, 'insurance', 1, '2018-01-29 11:04:05'),
(7, 'auto_finance', 1, '2018-01-29 11:04:05'),
(8, 'transport_service', 1, '2018-01-29 11:04:05');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `version` varchar(50) NOT NULL,
  `discription` longtext NOT NULL,
  `price` int(11) NOT NULL,
  `pic` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `model_year` varchar(20) NOT NULL,
  `wheeler` text NOT NULL,
  `kms` int(11) NOT NULL,
  `fuel_type` varchar(50) NOT NULL,
  `engien_type` varchar(50) NOT NULL,
  `engine_disc` varchar(255) NOT NULL,
  `no_cylinders` smallint(5) NOT NULL,
  `mileage_city` smallint(5) NOT NULL,
  `mileage_highway` smallint(5) NOT NULL,
  `fuel_capacity` smallint(5) NOT NULL,
  `seat_capacity` smallint(5) NOT NULL,
  `transmission` varchar(55) NOT NULL,
  `accessories_id` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `featured` int(1) NOT NULL DEFAULT '0',
  `created_date` datetime NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `users_id`, `title`, `brand`, `model`, `version`, `discription`, `price`, `pic`, `model_year`, `wheeler`, `kms`, `fuel_type`, `engien_type`, `engine_disc`, `no_cylinders`, `mileage_city`, `mileage_highway`, `fuel_capacity`, `seat_capacity`, `transmission`, `accessories_id`, `type`, `views`, `status`, `featured`, `created_date`, `modified_date`) VALUES
(78, 0, 'K1600B', 'BMW', 'Model 2', 'Version 1.1', 'If you’re hungry for asphalt and for new horizons, then the Bagger is the motorcycle for your journey. With its six cylinders, it delivers impressive power and extraordinary running smoothness. Let the journey begin. You and the bike become one with the road in the Bagger silhouette: the chopped windscreen and the striking rear ensure an unmistakable appearance. Behind its good looks is a great deal of innovative technology and a high level of comfort. So get going with the K 1600 B', 20295, 'ec40577a50a90c9e411b2eff2f590a0e.jpg', '2019', '0', 0, 'petrol', 'Internal combustion engine', 'More potent petrol engine shared with the Golf GTI gives Bmw’s second-generation compact SUV welcome added pace', 2, 33, 32, 20, 1, '1', 74, 'motorcycle', 0, 1, 0, '2019-03-15 09:13:11', '2019-03-15 13:13:11'),
(79, 0, 'Nissan Titan', 'Nissan', 'Model 3', 'Version 1.1', 'The upcoming 2019 Nissan Titan pickup truck is entering its second generation as an all-new model for 2019. In order to keep the pace up with the competitors like Ford F-150 and Toyota Tundra, Nissan is planning some new stuff along the way. New Nissan Titan 2019 offers many new configurations and different trims and engines.', 37000, '0b65aa3f7f925e8c025ef8e2f4fbdfaa.jpg', '2019', '0', 0, 'diesel', 'Internal combustion engine', 'The 2019 Titan lack some drivetrain variety, but with new engine beign updated, we could expect some seriour progress.', 2, 15, 12, 50, 4, '1', 75, 'truck', 0, 1, 0, '2019-03-15 09:15:05', '2019-03-15 13:15:05'),
(80, 0, '1970 Buick GSX Stage 1', 'Nissan', 'Model 3', 'Version 1.1', 'Long before Buick was the darling of a skyrocketing Chinese car market (which helped the division survive GM\'s 2009 restructure, while Pontiac died), the luxury brand was making high-end muscle cars with plush interiors and powerful engines. The top Buick muscle car grew out of the existing \"GS\" performance line and was dubbed GSX in 1970.', 200000, '1a2eb4d16a68db6beb1e235970d5d04f.jpg', '1970 ', '1', 33000, 'diesel', 'Internal combustion engine', 'The horsepower figure was inaccurately low to avoid rising insurance rates, but the car\'s street performance was dead-on, pulling quarter-mile times that would rival Hemi-powered cars of the era.', 4, 13, 11, 44, 4, '1', 76, 'classiccar', 0, 1, 0, '2019-03-15 09:17:43', '2019-03-15 13:17:43'),
(81, 0, 'Toyota Mirai ', 'Toyota', 'Model 2', 'Version 1.1', 'The Mirai was unveiled at the November 2014 Los Angeles Auto Show. As of December 2017, global sales totaled 5,300 Mirais. The top selling markets were the U.S. with 2,900 units, Japan with 2,100 and Europe with 200.', 57400, '83d5fd4ccbf72663c6d61977167a2b26.jpg', '2019', '0', 0, 'petrol', 'euro2', 'The Mirai uses the Toyota Fuel Cell System (TFCS), which features both fuel cell technology and hybrid technology, and includes proprietary Toyota-developed components including the fuel cell (FC) stack, FC boost converter, and high-pressure hydrogen tank', 4, 19, 11, 33, 4, '1', 77, 'newcar', 0, 1, 0, '2019-03-15 09:21:51', '2019-03-15 13:21:51'),
(82, 0, 'BMW', 'BMW', 'Model 2', 'Version 1.1', 'More potent petrol engine shared with the Golf GTI gives bmw\'s second-generation compact SUV welcome added pace', 44000, '92d4d7c6462fa4a2b0a7258065ad8f81.jpg', '2015', '1', 33000, 'petrol', 'Internal combustion engine', 'More potent petrol engine shared with the Golf GTI gives Bmw’s second-generation compact SUV welcome added pace', 4, 23, 21, 33, 4, '1', 78, 'usedcar', 0, 1, 0, '2019-03-15 09:24:26', '2019-03-15 13:24:26'),
(83, 0, 'Audi', 'Audi', 'Model 2', 'Version 1.2', 'Real quality engineering, but the electric Audi\'s trump card is a wide range of driving qualities and outstanding practicality', 40000, 'e2081f6af285bcdb64c7b004ae2fda5f.jpg', '2000', '2', 33000, 'petrol', 'Internal combustion engine', 'More potent petrol engine shared with the Golf GTI gives Audi’s second-generation compact SUV welcome added pace', 2, 12, 11, 33, 4, '1', 79, 'rvscar', 0, 1, 0, '2019-03-15 09:26:53', '2019-03-15 13:26:54'),
(84, 0, 'Corolla', 'Toyota', 'VTI', '1.8', 'Good Condition Miraj was unveiled at the November 2014 Los Angeles Auto Show. As of December 2017, global sales totaled 5,300 Mirais. The top selling markets were the U.S. with 2,900 units, Japan with 2,100 and Europe with 200.', 2500, '290d530bb9ed1e24309ca915da957760.jpg', '2018', '1', 1000, 'Petrol', 'Hybrid', 'very good condition', 2, 15, 18, 55, 5, 'auto', 80, 'newcar', 0, 1, 0, '2019-03-18 04:57:49', '2019-03-22 15:58:16'),
(85, 0, 'TOYOTA SUCCEED Latest Model', 'Toyota', 'TOYOTA SUCCEED', 'Toyota Long Milage Car', 'Good Condition toyota was unveiled at the November 2014 Los Angeles Auto Show. As of December 2017, global sales totaled 5,300 Mirais. The top selling markets were the U.S. with 2,900 units, Japan with 2,100 and Europe with 200.', 500, 'f9a2652c94abc9294343e2842cb57904.jpg', '2019', '32767', 50, 'Petrol', 'Hybrid', 'Hybrid  engine is  a latest type of engine which provides a strong running power to the care.', 2, 0, 0, 20, 10, 'auto', 81, 'newcar', 0, 1, 0, '2019-07-24 08:28:10', '2019-07-24 12:28:10'),
(88, 0, 'Audi', 'Audi', '2016', '', 'multipleimg', 40000, '9cbcea7dfe9d656241dfc124c15be827.png', '', '4 wheeler', 33000, 'Petrol', 'Internal combustion engine', '', 0, 0, 0, 0, 3, 'Manual', 86, 'newcar', 0, 1, 0, '2019-08-02 09:27:33', '2019-08-02 13:27:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multipleimg`
--
ALTER TABLE `multipleimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `multipleimg`
--
ALTER TABLE `multipleimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
