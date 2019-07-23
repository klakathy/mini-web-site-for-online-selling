-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 14, 2019 at 12:32 PM
-- Server version: 8.0.15
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
-- Database: `sss222`
--

-- --------------------------------------------------------

--
-- Table structure for table `itemlist`
--

CREATE TABLE `itemlist` (
  `id` varchar(12) NOT NULL,
  `owner` int(10) NOT NULL,
  `price` int(10) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `class` int(1) NOT NULL,
  `url` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '#'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `itemlist`
--

INSERT INTO `itemlist` (`id`, `owner`, `price`, `date`, `name`, `class`, `url`) VALUES
('1190301001', 1, 120, '2019-03-01', 'intro to business analytics', 1, 'list_books_book.php'),
('1190301002', 2, 150, '2019-03-01', 'statistical analysis', 1, 'list_books_book.php'),
('1190301003', 2, 20, '2019-03-01', 'designing internet', 1, 'list_books_book.php'),
('1190301004', 2, 50, '2019-03-01', 'decision model', 1, 'list_books_book.php'),
('2190301001', 2, 60000, '2019-03-01', 'bmw m3', 2, 'list_automotive_car.php'),
('2190301002', 3, 30000, '2019-03-01', 'toyota camry', 2, 'list_automotive_car.php'),
('3190301002', 3, 1500, '2019-03-01', '2 bed 2 bath near dupont circle', 3, 'list_want_rentpost.php'),
('3190303001', 3, 2000, '2019-03-03', 'studio in arlington', 3, 'list_want_rentpost.php'),
('4190301001', 3, 200, '2019-03-01', 'dyson vacumm', 4, 'list_want_appliancepost.php'),
('5190301001', 3, 500, '2019-03-01', 'macbook pro', 5, 'list_want_appliancepost.php');

-- --------------------------------------------------------

--
-- Table structure for table `likelist`
--

CREATE TABLE `likelist` (
  `user` int(10) NOT NULL,
  `item` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `likelist`
--

INSERT INTO `likelist` (`user`, `item`) VALUES
(2, '1190301001'),
(1, '1190301003'),
(1, '1190301004'),
(1, '2190301001'),
(1, '3190301002');

-- --------------------------------------------------------

--
-- Table structure for table `tmplist`
--

CREATE TABLE `tmplist` (
  `item` varchar(12) NOT NULL,
  `user` int(10) NOT NULL,
  `showname` int(1) NOT NULL DEFAULT '1',
  `day` date NOT NULL,
  `class` int(1) NOT NULL,
  `title` varchar(40) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `ccontact` varchar(200) DEFAULT NULL,
  `price` int(10) NOT NULL,
  `cprice` varchar(200) DEFAULT NULL,
  `place` varchar(20) NOT NULL,
  `cplace` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `message` text,
  `pic` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tmplist`
--

INSERT INTO `tmplist` (`item`, `user`, `showname`, `day`, `class`, `title`, `email`, `phone`, `ccontact`, `price`, `cprice`, `place`, `cplace`, `message`, `pic`) VALUES
('8190314001', 1, 0, '2019-03-14', 8, 'title111', '123@jhu.edu', '', '', 321, '', 'DC', '', '', 'jpg,jpg,jpg,jpg,'),
('8190314002', 1, 1, '2019-03-14', 8, 'title1112', '123@jhu.edu', '', '', 321, '', 'DC', '', '', 'jpg,jpg,jpg,jpg,'),
('8190314003', 1, 1, '2019-03-14', 8, 'title1112', '123@jhu.edu', '', '', 321, '', 'DC', '', '', 'jpg,jpg,jpg,jpg,'),
('8190314004', 1, 1, '2019-03-14', 8, 'title111', '123@jhu.edu', '', '', 12, '', 'DC', '', '', 'jpg,'),
('8190314005', 1, 1, '2019-03-14', 8, 'title111', '123@jhu.edu', '', '', 321, '', 'DC', '', '', 'jpg,');

-- --------------------------------------------------------

--
-- Table structure for table `userlist`
--

CREATE TABLE `userlist` (
  `id` int(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `userlist`
--

INSERT INTO `userlist` (`id`, `name`, `email`, `password`) VALUES
(1, '1', '1@jhu.edu', '1'),
(2, '2', '2@jhu.edu', '2'),
(3, '123', '123@jhu.edu', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `itemlist`
--
ALTER TABLE `itemlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pk1` (`owner`);

--
-- Indexes for table `likelist`
--
ALTER TABLE `likelist`
  ADD UNIQUE KEY `unique1` (`user`,`item`) USING BTREE,
  ADD KEY `likelist_ibfk_2` (`item`);

--
-- Indexes for table `tmplist`
--
ALTER TABLE `tmplist`
  ADD PRIMARY KEY (`item`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `userlist`
--
ALTER TABLE `userlist`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `likelist`
--
ALTER TABLE `likelist`
  ADD CONSTRAINT `likelist_ibfk_1` FOREIGN KEY (`user`) REFERENCES `userlist` (`id`),
  ADD CONSTRAINT `likelist_ibfk_2` FOREIGN KEY (`item`) REFERENCES `itemlist` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `likelist_ibfk_3` FOREIGN KEY (`user`) REFERENCES `userlist` (`id`);

--
-- Constraints for table `tmplist`
--
ALTER TABLE `tmplist`
  ADD CONSTRAINT `tmplist_ibfk_1` FOREIGN KEY (`user`) REFERENCES `userlist` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
