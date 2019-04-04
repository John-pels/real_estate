-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2018 at 03:17 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pels_homes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `date`) VALUES
(1, 'johnpels', 'johnpels', '2018-10-27 08:25:51');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `message`, `date`) VALUES
(1, 'Ajeigbe John Oluwaseyi', 'oluseyiajeigbe@yahoo.com', 'Hello pels-homes, please i need a good mansion anywhere in lagos state. Thank you', '2018-10-25 02:43:54'),
(2, 'hdhjdjdj', 'jsssjsjs@yahoo.com', 'susjujusus', '2018-10-25 02:46:41'),
(3, 'Olajide Tomiwa Joshua', 'olajidejoshua4real@gmail.com', 'Hello Pels-Homes, please i need a good mansion with maximum security in abuja.', '2018-10-25 03:54:40'),
(4, 'Tomiwa Johnson', 'jtomiwa@gmail.com', 'Hello, Pels-Home please i need a good  mansion anywhere in  oyo state. Thank you, i hope to hear from you soon.', '2018-10-26 03:26:28');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `id_gender` int(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id_gender`, `gender`) VALUES
(1, 'male'),
(2, 'female'),
(3, 'neuter');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `c_password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fullname`, `state`, `gender`, `address`, `email`, `password`, `c_password`, `phone`, `description`, `date`) VALUES
(1, 'a', 'Abia', 'male', 'Your Residential address', 'oluseyiajeigbe@yahoo.com', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', '77', 'Description and location of preferred Land or house', '2018-10-23 14:06:54'),
(2, 'Adeleke Iyanu Grace', 'Oyo', 'female', 'Sango Ibadan', 'oluseyiajeigbe@yahoo.com', '52fc4c888aeaeb83f7d0e8a36ab85b53bee0a046', '52fc4c888aeaeb83f7d0e8a36ab85b53bee0a046', '08168813827', 'waidi jeniffer', '2018-10-23 14:37:24'),
(3, 'Adeleke Iyanu Grace', 'Delta', 'male', 'Your Residential address', 'ola@gmail.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc', '20eabe5d64b0e216796e834f52d61fd0b70332fc', '08132815396', 'Description and location of preferred Land or house', '2018-10-23 14:48:59'),
(4, 'Adeleke Iyanu Grace', 'Adamawa', 'neuter', 'Your Residential address', 'ola@gmail.com', 'a51dda7c7ff50b61eaea0444371f4a6a9301e501', 'a51dda7c7ff50b61eaea0444371f4a6a9301e501', '08132815396', 'Description and location of preferred Land or house', '2018-10-23 18:32:16'),
(5, 'john', 'Anambra', 'male', 'Your Residential address', 'slimmjohn4bright@gmail.com', '837117d94cc56e5c73b3fd1a70245c0fb3ac67ea', '837117d94cc56e5c73b3fd1a70245c0fb3ac67ea', '08713672', 'Description and location of preferred Land or house', '2018-10-23 18:49:32'),
(6, 'sjhbwkd', 'Edo', 'male', 'Your Residential address', 'euewfghuq@yahoo.com', 'e83249bd3ba79932e16fb1fb5100dafade9954c2', 'e83249bd3ba79932e16fb1fb5100dafade9954c2', '57678778', 'Description and location of preferred Land or house', '2018-10-23 18:56:42'),
(7, 'Adeleke Iyanu Grace', 'Ebonyi', 'male', 'Your Residential address', 'oluseyiajeigbe@yahoo.com', '1ec558a60b5dda24597816c924776716018caf8b', '1ec558a60b5dda24597816c924776716018caf8b', '08132815396', 'Description and location of preferred Land or house', '2018-10-23 18:59:47'),
(8, 'jhbckbkjb', 'Abia', 'male', 'Your Residential address', 'shjugiuwghwu@gmial.com', '65c10dc3549fe07424148a8a4790a3341ecbc253', '65c10dc3549fe07424148a8a4790a3341ecbc253', '678', 'Description and location of preferred Land or house', '2018-10-23 19:01:07'),
(9, 'peter', 'Bauchi', 'male', 'oyo state', 'peter@yahoo.com', '4b8373d016f277527198385ba72fda0feb5da015', '4b8373d016f277527198385ba72fda0feb5da015', '09087544', 'Description and location of preferred Land or house', '2018-10-23 19:04:28'),
(10, 'Adeleke Iyanu Grace', 'Adamawa', 'neuter', 'Your Residential address', 'ajeigbe@yahoo.com', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', '090888', 'Description and location of preferred Land or house', '2018-10-25 00:25:36'),
(11, 'hgaxhyjv', 'Ebonyi', 'male', 'Your Residential addressaxdwdwdwd', 'ajeigbe45@yahoo.com', '46ab578353b0478abc71fa54796a76c10bbe41a8', '46ab578353b0478abc71fa54796a76c10bbe41a8', '261t87t87', 'Description and location of preferred Land or house', '2018-10-25 02:50:35'),
(12, 'hgaxhyjv', 'Gombe', 'male', 'Your Residential address', 'ajeigbe678@yahoo.com', '65a7da8f45e5a2f3931f4d650cb1ecb17b805231', '65a7da8f45e5a2f3931f4d650cb1ecb17b805231', '261t87t87', 'Description and location of preferred Land or house', '2018-10-25 02:52:32'),
(13, 'efwfwf2w', 'Select..', 'Gender..', '', 'ajeigbe@yahoo.com', '13fbd79c3d390e5d6585a21e11ff5ec1970cff0c', '13fbd79c3d390e5d6585a21e11ff5ec1970cff0c', '5754756', '', '2018-10-25 03:20:51');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id_state` int(255) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id_state`, `state`) VALUES
(1, 'Abia'),
(2, 'Adamawa'),
(3, 'Akwa-ibom'),
(4, 'Anambra'),
(5, 'Bauchi'),
(6, 'Bayelsa'),
(7, 'Benue'),
(8, 'Borno'),
(9, 'Cross-river'),
(10, 'Delta'),
(11, 'Ebonyi'),
(12, 'Edo'),
(13, 'Ekiti'),
(14, 'Enugu'),
(15, 'Gombe'),
(16, 'Imo'),
(17, 'Jigawa'),
(18, 'Kaduna'),
(19, 'Kano'),
(20, 'Katsina'),
(21, 'Kebbi'),
(22, 'Kogi'),
(23, 'Kwara'),
(24, 'lagos'),
(25, 'Nasarawa'),
(26, 'Niger'),
(27, 'Ogun'),
(28, 'Ondo'),
(29, 'Osun'),
(30, 'Oyo'),
(31, 'Plateau'),
(32, 'Rivers'),
(33, 'Sokoto'),
(34, 'Taraba'),
(35, 'Yobe'),
(36, 'Zamfara'),
(37, 'FCT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id_gender`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id_state`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id_gender` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id_state` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
