-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2018 at 01:35 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adp`
--

-- --------------------------------------------------------

--
-- Table structure for table `thunbar`
--

CREATE TABLE `thunbar` (
  `id` int(11) NOT NULL,
  `picture` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` varchar(100) CHARACTER SET utf8 NOT NULL,
  `month_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thunbar`
--

INSERT INTO `thunbar` (`id`, `picture`, `description`, `month_id`) VALUES
(1, 'jan/food1.jpg', '', 1),
(2, 'jan/food2.jpg', '', 1),
(3, 'jan/food3.jpg', '', 1),
(4, 'jan/food4.jpg', '', 1),
(5, 'jan/food5.jpg', '', 1),
(6, 'jan/food6.jpg', '', 1),
(7, 'jan/food7.jpg', '', 1),
(8, 'jan/food8.jpg', '', 1),
(9, 'jan/food9.jpg', '', 1),
(10, 'jan/food10.jpg', '', 1),
(11, 'feb/food1.jpg', '', 2),
(12, 'feb/food2.jpg', '', 2),
(13, 'feb/food3.jpg', '', 2),
(14, 'feb/food4.jpg', '', 2),
(15, 'feb/food5.jpg', '', 2),
(16, 'feb/food6.jpg', '', 2),
(17, 'feb/food7.jpg', '', 2),
(18, 'feb/food8.jpg', '', 2),
(19, 'feb/food9.jpg', '', 2),
(20, 'feb/food10.jpg', '', 2),
(21, 'mar/food1.jpg', '', 3),
(22, 'mar/food2.jpg', '', 3),
(23, 'mar/food3.jpg', '', 3),
(24, 'mar/food4.jpg', '', 3),
(25, 'mar/food5.jpg', '', 3),
(26, 'mar/food6.jpg', '', 3),
(27, 'mar/food7.jpg', '', 3),
(28, 'mar/food8.jpg', '', 3),
(29, 'mar/food9.jpg', '', 3),
(30, 'mar/food10.jpg', '', 3),
(31, 'apr/food1.jpg', '', 4),
(32, 'apr/food2.jpg', '', 4),
(33, 'apr/food3.jpg', '', 4),
(34, 'apr/food4.jpg', '', 4),
(35, 'apr/food5.jpg', '', 4),
(36, 'apr/food6.jpg', '', 4),
(37, 'apr/food7.jpg', '', 4),
(38, 'apr/food8.jpg', '', 4),
(39, 'apr/food9.jpg', '', 4),
(40, 'apr/food10.jpg', '', 4),
(41, 'may/food1.jpg', '', 5),
(42, 'may/food2.jpg', '', 5),
(43, 'may/food3.jpg', '', 5),
(44, 'may/food4.jpg', '', 5),
(45, 'may/food5.jpg', '', 5),
(46, 'may/food6.jpg', '', 5),
(47, 'may/food7.jpg', '', 5),
(48, 'may/food8.jpg', '', 5),
(49, 'may/food9.jpg', '', 5),
(50, 'may/food10.jpg', '', 5),
(51, 'june/food1.jpg', '', 6),
(52, 'june/food2.jpg', '', 6),
(53, 'june/food3.jpg', '', 6),
(54, 'june/food4.jpg', '', 6),
(55, 'june/food5.jpg', '', 6),
(56, 'june/food6.jpg', '', 6),
(57, 'june/food7.jpg', '', 6),
(58, 'june/food8.jpg', '', 6),
(59, 'june/food9.jpg', '', 6),
(60, 'june/food10.jpg', '', 6),
(61, 'july/food1.jpg', '', 7),
(62, 'july/food2.jpg', '', 7),
(63, 'july/food3.jpg', '', 7),
(64, 'july/food4.jpg', '', 7),
(65, 'july/food5.jpg', '', 7),
(66, 'july/food6.jpg', '', 7),
(67, 'july/food7.jpg', '', 7),
(68, 'july/food8.jpg', '', 7),
(69, 'july/food9.jpg', '', 7),
(70, 'july/food10.jpg', '', 7),
(71, 'agus/food1.jpg', '', 8),
(72, 'agus/food2.jpg', '', 8),
(73, 'agus/food3.jpg', '', 8),
(74, 'agus/food4.jpg', '', 8),
(75, 'agus/food5.jpg', '', 8),
(76, 'agus/food6.jpg', '', 8),
(77, 'agus/food7.jpg', '', 8),
(78, 'agus/food8.jpg', '', 8),
(79, 'agus/food9.jpg', '', 8),
(80, 'agus/food10.jpg', '', 8),
(81, 'oct/food1.jpg', '', 10),
(82, 'oct/food2.jpg', '', 10),
(83, 'oct/food3.jpg', '', 10),
(84, 'oct/food4.jpg', '', 10),
(85, 'oct/food5.jpg', '', 10),
(86, 'oct/food6.jpg', '', 10),
(87, 'oct/food7.jpg', '', 10),
(88, 'oct/food8.jpg', '', 10),
(89, 'oct/food9.jpg', '', 10),
(90, 'oct/food10.jpg', '', 10),
(91, 'nov/food1.jpg', '', 11),
(92, 'nov/food2.jpg', '', 11),
(93, 'nov/food3.jpg', '', 11),
(94, 'nov/food4.jpg', '', 11),
(95, 'nov/food5.jpg', '', 11),
(96, 'nov/food6.jpg', '', 11),
(97, 'nov/food7.jpg', '', 11),
(98, 'nov/food8.jpg', '', 11),
(99, 'nov/food9.jpg', '', 11),
(100, 'nov/food10.jpg', '', 11),
(101, 'sep/food1.jpg', '', 9),
(102, 'sep/food2.jpg', '', 9),
(103, 'sep/food3.jpg', '', 9),
(104, 'sep/food4.jpg', '', 9),
(105, 'sep/food5.jpg', '', 9),
(106, 'sep/food6.jpg', '', 9),
(107, 'sep/food7.jpg', '', 9),
(108, 'sep/food8.jpg', '', 9),
(109, 'sep/food9.jpg', '', 9),
(110, 'sep/food10.jpg', '', 9),
(111, 'dec/food1.jpg', '', 12),
(112, 'dec/food2.jpg', '', 12),
(113, 'dec/food3.jpg', '', 12),
(114, 'dec/food4.jpg', '', 12),
(115, 'dec/food5.jpg', '', 12),
(116, 'dec/food6.jpg', '', 12),
(117, 'dec/food7.jpg', '', 12),
(118, 'dec/food8.jpg', '', 12),
(119, 'dec/food9.jpg', '', 12),
(120, 'dec/food10.jpg', '', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `thunbar`
--
ALTER TABLE `thunbar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `thunbar`
--
ALTER TABLE `thunbar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
