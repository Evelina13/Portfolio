-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2022 at 01:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eva`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `coffee`
--

CREATE TABLE `coffee` (
  `id` int(11) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL,
  `img5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coffee`
--

INSERT INTO `coffee` (`id`, `img1`, `img2`, `img3`, `img4`, `img5`) VALUES
(1, '1661854464.jpg', '1661854468.jpg', '1661854476.jpg', '1661854482.jpg', '1661854485.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `text1` varchar(255) NOT NULL,
  `text2` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `text1`, `text2`, `img`) VALUES
(1, 'asdf', 'asdf', '1.jpg'),
(2, 'asdg', 'adfg', '9.jpg'),
(3, 'fffff', 'sssssssss', '1414 (1).jpg'),
(8, 'Italy', 'Rome', 'shannon-tremaine-NRz7SfpnqUM-unsplash.jpg'),
(9, 'helloo', '435345', 'patrick-tomasso-SVVTZtTGyaU-unsplash.jpg'),
(10, 'helloo', '333333', '1661859288.jpg'),
(11, 'Great Britain', 'London', '1661859398.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mardiq`
--

CREATE TABLE `mardiq` (
  `id` int(11) NOT NULL,
  `loginner` varchar(255) NOT NULL,
  `passwordner` varchar(255) NOT NULL,
  `tariq` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mardiq`
--

INSERT INTO `mardiq` (`id`, `loginner`, `passwordner`, `tariq`) VALUES
(1, 'kku', '123', 55),
(2, 'hello', 'world', 66),
(3, 'armenia', 'erevan', 88),
(4, 'diana', 'matashova', 17);

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` int(11) NOT NULL,
  `anun` varchar(15) NOT NULL,
  `azganun` varchar(20) NOT NULL,
  `profession` varchar(30) NOT NULL,
  `ser` varchar(10) NOT NULL,
  `karq` varchar(5) NOT NULL,
  `cnndtiv` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `anun`, `azganun`, `profession`, `ser`, `karq`, `cnndtiv`) VALUES
(1, 'ксения', 'маташова', 'графический дизайнер', 'женский', 'да', '2012-07-18'),
(2, 'зоя', 'гореян', 'био-химик', 'женский', 'да', '2014-12-12'),
(3, 'валентина', 'капустина', 'менеджер', 'женский', 'нет', '2015-08-12'),
(4, 'мушех', 'чолоян', 'пластический хирург', 'мужской', 'да', '2005-08-16'),
(5, 'тигран', 'балаян', 'стоматолог', 'мужской', 'нет', '2002-08-14'),
(6, 'владимир', 'жуковский', 'врач', 'мужской', 'нет', '2017-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `text1` varchar(255) NOT NULL,
  `text2` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `top` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `text1`, `text2`, `img`, `top`, `type`) VALUES
(6, 'Great Britain', 'London', '1661859398.jpg', 'yes', 'inbound'),
(7, 'France', 'Paris', 'rafael-miranda-HRxkGGBn3eA-unsplash.jpg', 'yes', 'inbound'),
(8, 'German', 'Berlin', 'claudio-schwarz-TScGhJM716g-unsplash.jpg', 'yes', 'outbound'),
(9, 'USA', 'New York', 'patrick-tomasso-SVVTZtTGyaU-unsplash.jpg', 'yes', 'outbound'),
(11, 'Netherlands', 'Amsterdam', 'azhar-j-t2hgHV1R7_g-unsplash.jpg', 'yes', 'inbound'),
(12, 'zzzzzzzzzzz', 'aaaaaaaaaaaaa', '1658913665.jpg', 'yes', 'outbound'),
(14, 'helloo', '333333', '1661859288.jpg', 'yes', 'inbound'),
(17, 'ddddddd', 'vvvvvvvvvv', '1661858575.jpg', 'yes', 'outbound');

-- --------------------------------------------------------

--
-- Table structure for table `rain`
--

CREATE TABLE `rain` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rain`
--

INSERT INTO `rain` (`id`, `img`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.jpg'),
(6, '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vzgo`
--

CREATE TABLE `vzgo` (
  `id` int(11) NOT NULL,
  `text1` varchar(255) NOT NULL,
  `text2` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vzgo`
--

INSERT INTO `vzgo` (`id`, `text1`, `text2`, `img`) VALUES
(1, 'dfghjk', '2345678', '1.jpg'),
(2, 'szkfh', 'gfxjrtfg\r\n', '2.jpg'),
(3, 'mkvyfm', 'dfhtgyu', '3.jpg'),
(4, 'bcfgj', 'dgdhbdfuj', '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wow`
--

CREATE TABLE `wow` (
  `id` int(11) NOT NULL,
  `text1` varchar(255) NOT NULL,
  `text2` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wow`
--

INSERT INTO `wow` (`id`, `text1`, `text2`, `img`) VALUES
(1, 'ooooooooo', 'vvvvvvvvvvvvvv', '1.jpg'),
(2, 'wwwwwwwwww', 'wsssssssssssss', '2.jpg\r\n'),
(3, 'ccccccccccc', 'dddddddddddd', '3.jpg'),
(4, '9', '8', '13.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coffee`
--
ALTER TABLE `coffee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mardiq`
--
ALTER TABLE `mardiq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rain`
--
ALTER TABLE `rain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vzgo`
--
ALTER TABLE `vzgo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wow`
--
ALTER TABLE `wow`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coffee`
--
ALTER TABLE `coffee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mardiq`
--
ALTER TABLE `mardiq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `rain`
--
ALTER TABLE `rain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vzgo`
--
ALTER TABLE `vzgo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wow`
--
ALTER TABLE `wow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
