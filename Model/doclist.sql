-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2020 at 12:14 AM
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
-- Table structure for table `doclist`
--

CREATE TABLE `doclist` (
  `id` int(20) NOT NULL,
  `category` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `qualification` varchar(5000) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doclist`
--

INSERT INTO `doclist` (`id`, `category`, `name`, `password`, `qualification`, `image`) VALUES
(101, 'Cardiologist', 'Dr. Antilia Lamagna', 'kj@dv5', 'MBBS, FCPS, FACP(Medicine)<br>\r\nSenior health consultant...', 'img/Doctor_image/file-20191203-66986-im7o5.jpg'),
(103, 'Eye Specialist', 'Dr. Margot Robbie', 'jg$45#', 'FCPS, FACP(Medicine) <br>\r\nSenior eye consultant.. ', 'img/Doctor_image/2ndim.webp'),
(104, 'Gastroenterologist', 'Dr. Margot wilson', 'jhf%64', 'FACP(Medicine) <br>\r\nSenior  consultant.. ', 'img/Doctor_image/3d.jfif'),
(107, 'Nephrologist', 'Dr. Harison Creamson', 'fdsf$&4', 'Senior health consultant.. ', 'img/Doctor_image/4f.JPG'),
(121, 'Gastroenterologist', 'Dr. Anisul Hasan', 'fsd&656#', 'MBBS, FACP(Medicine), MD(Neuro)<br>\r\nAssistant health pfofessor..<br>\r\nBangabandhu Medical hospital, Bangladesh', 'img/Doctor_image/images.jfif'),
(123, 'Eye Specialist', 'Dr.Robertson', 'sfa&468', ' Phd, Mphil', 'img/Doctor_image/download.jfif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doclist`
--
ALTER TABLE `doclist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doclist`
--
ALTER TABLE `doclist`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
