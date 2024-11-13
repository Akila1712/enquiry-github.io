-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2024 at 08:39 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `edate` varchar(100) NOT NULL,
  `jdate` varchar(200) NOT NULL,
  `status` varchar(300) NOT NULL,
  `name` varchar(500) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `place` varchar(300) NOT NULL,
  `course` varchar(400) NOT NULL,
  `forwhom` varchar(300) NOT NULL,
  `edu` varchar(500) NOT NULL,
  `edud` varchar(500) NOT NULL,
  `sum` varchar(500) NOT NULL,
  `ref` varchar(400) NOT NULL,
  `role` varchar(100) NOT NULL DEFAULT '0' COMMENT '1=Admin, 0=Student'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `edate`, `jdate`, `status`, `name`, `user`, `pwd`, `phone`, `place`, `course`, `forwhom`, `edu`, `edud`, `sum`, `ref`, `role`) VALUES
(1, '', '', 'Select Status', 'admin', 'admin', '123', '', '', '', '', 'Select Education', '', '', '', '1'),
(2, '2024-11-11', '2024-11-18', 'Select Status', 'Akila', '', '', '9856347892', 'Rajapalayam', 'FullStack', '', 'Select Education', 'B.com', 'joined', '', '0'),
(3, '2024-11-15', '2024-11-18', 'Select Status', 'siva', '', '', '915-09-756', 'Rajapalayam', 'Python', '', 'Bachelor Degree', 'B.com', '', '', '0'),
(4, '', '', 'Select Status', '', '', '', '', '', '', '', 'Select Education', '', '', '', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
