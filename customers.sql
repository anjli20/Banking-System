-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 12:55 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`name`, `email`, `mobile`) VALUES
('Anjali ', 'anjali@gmail.com', 12356789),
('Charu', 'charu@gmail.com', 987654321),
('Sai', 'sai@gmail.com', 45555555556),
('Yash', 'yash@gmail.com', 8734654457),
('Rahul', 'rahul@gmail.com', 345234545),
('Mayuri', 'mayuri@gmail.com', 7747364626),
('Sunil', 'sunil@gmail.com', 1234321234),
('Ravi', 'ravi@gmail.com', 2345654678),
('Shweta', 'shweta@gmail.com', 8769056678),
('Akash', 'akash@gmail.com', 3456712098),
('Sonu', 'sonu@gmail.com', 2345678900),
('Sneha', 'sneha@gmail.com', 1098765432);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
