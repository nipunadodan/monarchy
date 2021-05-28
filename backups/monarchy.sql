-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 28, 2021 at 05:15 PM
-- Server version: 8.0.25-0ubuntu0.20.04.1
-- PHP Version: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monarchy`
--

-- --------------------------------------------------------

--
-- Table structure for table `mon_members`
--

CREATE TABLE `mon_members` (
  `id` int NOT NULL,
  `member_name` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `official_title` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(512) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `parent` int NOT NULL,
  `dateofbirth` date NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `monarchy` int NOT NULL,
  `status` int NOT NULL DEFAULT '5',
  `remarks` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mon_members`
--

INSERT INTO `mon_members` (`id`, `member_name`, `official_title`, `description`, `parent`, `dateofbirth`, `sex`, `monarchy`, `status`, `remarks`, `updated`) VALUES
(1, 'Elizabeth Alexandra Mary Windsor', 'Queen Elizabeth II', '', 0, '1926-04-21', 0, 1, 5, '', '2021-05-27 16:53:30'),
(2, 'Charles Philip Arthur George', 'Prince of Wales, Duke of Edinburgh', '', 1, '1948-11-14', 1, 1, 5, '', '2021-05-27 07:09:26'),
(3, 'Anne Elizabeth Alice Louise Mountbatten-Windsor', 'Princess Royal', '', 1, '1950-08-15', 0, 1, 5, '', '2021-05-26 17:28:07'),
(4, 'Andrew Albert Christian Edward Mountbatten-Windsor', 'Prince Andrew, Duke of York', '', 1, '1960-02-19', 1, 1, 5, '', '2021-05-26 17:28:11'),
(5, 'Edward Antony Richard Louis Mountbatten-Windsor', 'Prince Edward, Earl of Wessex', '', 1, '1964-03-10', 1, 1, 5, '', '2021-05-26 17:07:47'),
(6, 'Peter Mark Andrew Phillips', 'N/A', '', 3, '1977-11-15', 1, 1, 5, '', '2021-05-26 16:55:41'),
(7, 'Zara Anne Elizabeth Tindall', 'N/A', '', 3, '1981-05-15', 0, 1, 5, '', '2021-05-26 16:57:52'),
(8, 'William Arthur Philip Louis', 'Prince William, Duke of Cambridge', '', 2, '1982-06-21', 1, 1, 5, '', '2021-05-26 16:59:59'),
(9, 'Henry Charles Albert David', 'Prince Harry, Duke of Sussex', '', 2, '1984-09-15', 1, 1, 5, '', '2021-05-26 17:01:33'),
(10, 'Beatrice Elizabeth Mary Mountbatten-Windsor', 'Princess Beatrice of York', '', 4, '1988-08-08', 0, 1, 5, '', '2021-05-26 17:04:35'),
(11, 'Eugenie Victoria Helena', 'Princess Eugenie of York', '', 4, '1990-03-23', 0, 1, 5, '', '2021-05-26 17:05:46'),
(12, 'James Alexander Philip Theo Mountbatten-Windsor', 'Viscount Severn', '', 5, '2007-12-17', 1, 1, 5, '', '2021-05-26 17:09:10'),
(13, 'Louise Alice Elizabeth Mary Mountbatten-Windsor', 'Lady Louise Windsor', '', 5, '2003-11-08', 0, 1, 5, '', '2021-05-26 17:10:50'),
(14, 'George Alexander Louis', 'Prince George of Cambridge', '', 8, '2013-07-22', 1, 1, 5, '', '2021-05-26 17:12:59'),
(15, 'Charlotte Elizabeth Diana', 'Princess Charlotte of Cambridge', '', 8, '2015-05-02', 0, 1, 5, '', '2021-05-26 17:15:36'),
(16, 'Louis Arthur Charles', 'Prince Louis of Cambridge', '', 8, '2018-04-23', 1, 1, 5, '', '2021-05-26 17:18:31'),
(17, 'Archie Harrison Mountbatten-Windsor', 'N/A', '', 9, '2019-05-06', 1, 1, 5, '', '2021-05-26 17:27:05'),
(18, 'August Philip Hawke Brooksbank', 'N/A', '', 11, '2021-02-09', 1, 1, 5, '', '2021-05-27 10:57:42'),
(19, 'Lucas Philip Tindall', 'N/A', '', 7, '2021-03-21', 1, 1, 5, '', '2021-05-27 11:02:06'),
(20, 'Lena Elizabeth Tindall', 'N/A', '', 7, '2018-06-19', 0, 1, 5, '', '2021-05-27 11:04:19'),
(21, 'Mia Grace Tindall', 'N/A', '', 7, '2014-01-17', 0, 1, 5, '', '2021-05-27 11:05:54'),
(22, 'Isla Elizabeth Phillips', 'N/A', '', 6, '2012-03-29', 0, 1, 5, '', '2021-05-27 11:07:24'),
(23, 'Savannah Anne Kathleen Phillips', 'N/A', '', 6, '2010-12-29', 0, 1, 5, '', '2021-05-27 11:08:29');

-- --------------------------------------------------------

--
-- Table structure for table `mon_monarchy`
--

CREATE TABLE `mon_monarchy` (
  `id` int NOT NULL,
  `monarchy_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '5',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mon_monarchy`
--

INSERT INTO `mon_monarchy` (`id`, `monarchy_name`, `description`, `status`, `updated`) VALUES
(1, 'British Monarchy', 'British Monarchy', 5, '2021-05-26 13:08:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mon_members`
--
ALTER TABLE `mon_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mon_monarchy`
--
ALTER TABLE `mon_monarchy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mon_members`
--
ALTER TABLE `mon_members`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `mon_monarchy`
--
ALTER TABLE `mon_monarchy`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
