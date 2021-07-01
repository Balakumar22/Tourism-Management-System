-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 08:30 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(300) NOT NULL,
  `pwd` varchar(200) NOT NULL,
  `uname` varchar(200) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `ph` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `pwd`, `uname`, `dob`, `ph`) VALUES
('balakumar.arunbala@gmail.com', 'arunbala', 'Balakumar A N', '2001-03-22', '+91-6379171968'),
('akash@gmail.com', 'akash', 'Akash', '2001-03-19', '+91-7904898168');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `mail` varchar(300) NOT NULL,
  `cart1` varchar(30) DEFAULT NULL,
  `cart2` varchar(30) DEFAULT NULL,
  `cart3` varchar(30) DEFAULT NULL,
  `cart4` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`mail`, `cart1`, `cart2`, `cart3`, `cart4`) VALUES
('arunkumar.arunbala@gmail.com', NULL, NULL, NULL, NULL),
('bala@gmail.com', '10000002', NULL, NULL, NULL),
('balakumar.arunbala@gmail.com', '10000002', '12345678', '12312341', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `pkid` int(8) NOT NULL COMMENT '12345678',
  `days` int(2) NOT NULL COMMENT '2',
  `po` varchar(1000) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Offers ',
  `tp` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `pp` decimal(20,0) NOT NULL COMMENT '5500.00',
  `photos` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `pl` int(11) DEFAULT NULL,
  `at` int(11) NOT NULL DEFAULT 0,
  `ldb` date NOT NULL DEFAULT current_timestamp(),
  `doj` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pkid`, `days`, `po`, `tp`, `pp`, `photos`, `pl`, `at`, `ldb`, `doj`) VALUES
(10000002, 4, '-> Food provided\n-> Accommodation provided\n-> Transportation provided\n-> Guide will be there with you', 'Thanjavur, Rameshwaram ,Thuthukoodi , Kanyakumari', '4000', 'img_mountains_wide.jpg,img_nature_wide.jpg,img_snow_wide.jpg', 75, 0, '2021-06-20', '2021-06-23'),
(12121212, 4, 'assdsdcsdcsdvsdffwfwfwfwefqwfsadcscsdcd\nwefqwfqwefqwfewfqwefqwfqsdcrgrgewrgw\nqweeqweweqtregrthtrhutyjyjydwfweqdqdfe\nrqewwqehunjenfjeknfjefef efef2ef2f2rfe2fe', 'Kodaikanal, Palani , Palakad , Kochin', '2500', 'img_nature_wide.jpg,img_mountains_wide.jpg', 60, 0, '2021-06-02', '2021-06-10'),
(12312341, 7, 'sASasdasdasdasdasdasd\nsdsdasdasdasdasdasdasd\nsfsdfwrewertryrtjhgjghkgkk\nasfaefsfdrrthrtjyjtmghkgdhk', 'Himalayas , Kashmir , Agra , North india', '10000', 'img_snow_wide.jpg,img_nature_wide.jpg', 50, 0, '2021-06-23', '2021-06-27'),
(12345678, 4, '-> Food will be provided\n-> Accommodation will be provided\n-> Transport facilities will be organized\n-> Guide will be there will you to guide you', 'Kerala', '4000', 'jatayu1.jpg,Alleppey1.jpg', 60, 0, '2021-06-27', '2021-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `email` varchar(300) NOT NULL,
  `uname` varchar(300) NOT NULL,
  `dob` date NOT NULL,
  `ph` varchar(14) NOT NULL COMMENT '+91-1234567890',
  `pwd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`email`, `uname`, `dob`, `ph`, `pwd`) VALUES
('arunkumar.arunbala@gmail.com', 'Arunkumar A N', '1997-10-27', '+91-9442257914', 'arunbala'),
('bala@gmail.com', 'Bala A N', '2001-03-22', '+91-6379171968', 'a'),
('balakumar.arunbala@gmail.com', 'Balakumar A N', '2001-03-22', '+91-6379171968', 'arunbala');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`mail`),
  ADD UNIQUE KEY `cart1` (`cart1`,`cart2`,`cart3`),
  ADD UNIQUE KEY `cart4` (`cart4`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pkid`);
ALTER TABLE `package` ADD FULLTEXT KEY `po` (`po`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
