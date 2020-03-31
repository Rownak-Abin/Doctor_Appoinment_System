-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2020 at 12:13 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medipro`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(20) NOT NULL,
  `category` varchar(500) NOT NULL,
  `header` varchar(1000) NOT NULL,
  `text` mediumtext NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `category`, `header`, `text`, `image`) VALUES
(1, '', 'Notice for clousure University', 'Although Commerce Minister Tipu Munshi yesterday urged the public to avoid panic buying amid the looming coronavirus threat, a buying spree among consumers for rice, potatoes, lentils, onions, garlic and ginger has been further triggered after the news of the first Covid-19 death in the country.   \r\n\r\n', 'img/pr.jpg'),
(2, 'Academic', 'Internship exchange program...!!!', 'university has arranged a program. university has arranged a program. university has arranged a program. university has arranged a program. university has arranged a program. university has arranged a program. university has arranged a program. university has arranged a program. university has arranged a program. university has arranged a program. university has arranged a program. university has arranged a program. university has arranged a program. university has arranged a program. ', 'img/hel.jpg'),
(3, 'Sports', 'Pool event is going on!!!', 'Universty is arranging a 8 ball pool event.. entry fee is 200tk...Universty is arranging a 8 ball pool event.. entry fee is 200tk...Universty is arranging a 8 ball pool event.. entry fee is 200tk...Universty is arranging a 8 ball pool event.. entry fee is 200tk...Universty is arranging a 8 ball pool event.. entry fee is 200tk...Universty is arranging a 8 ball pool event.. entry fee is 200tk...Universty is arranging a 8 ball pool event.. entry fee is 200tk...Universty is arranging a 8 ball pool event.. entry fee is 200tk...', 'img/ddd.jfif'),
(4, '', 'Scholarship for financial Aid ...', 'Center for Nanotechnology, Department of Natural Sciences Coppin State University) on behalf of Coppin State University, USA in presence n recognizing the importance of mutual collaboration and the contributions to society on 12th March 2020, A memorandum of understanding was signed between Center for Nanotechnology, Coppin State University (CSU) located in Baltimore, Maryland, United States of America, and American International University-Bangladesh (AIUB), Bangladesh. Prof. Dr. ABM Siddique Hossain (Dean, Faculty of Engineering, AIUB) signed on behalf of AIUB and Dr. Jamal Uddin (Professor and Founding Director, Center for Nanotechnology, Department of Natural Sciences Coppin State University) on behalf of Coppin State University, USA in presence ', 'img/mhc.jpg'),
(5, 'Research', 'New hand sanitizer made by Chemisry dept.', 'Chemistry department made new hand sanitizer..Chemistry department made new hand sanitizer..Chemistry department made new hand sanitizer..Chemistry department made new hand sanitizer..Chemistry department made new hand sanitizer..Chemistry department made new hand sanitizer..Chemistry department made new hand sanitizer..Chemistry department made new hand sanitizer..Chemistry department made new hand sanitizer..Chemistry department made new hand sanitizer..', 'img/hs.jfif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
