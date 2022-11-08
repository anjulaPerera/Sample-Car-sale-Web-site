-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 08:50 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `19it513`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `postad`
--

CREATE TABLE `postad` (
  `postid` int(11) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `condition_of_car` varchar(30) NOT NULL,
  `description` varchar(500) NOT NULL,
  `file` varchar(255) NOT NULL,
  `f_nic` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postad`
--

INSERT INTO `postad` (`postid`, `brand`, `model`, `type`, `price`, `condition_of_car`, `description`, `file`, `f_nic`) VALUES
(1, 'Toyota', 'Supra', 'Sedan', 30000000, 'Unregistered', 'Best Condition', 'supra.jpg', '982420156V'),
(2, 'Toyota', 'Starlet Glanza-V', 'hatchback', 2500000, 'Unregistered', 'Best Condition', 'starlet.jpg', '982420156V'),
(3, 'ford', 'Raptor', 'minivan', 40000000, 'Unregistered', 'Mild Condition', 'raptor.jpg', '852420156V'),
(5, 'landrover', 'Discovery-4', 'suv', 40000000, 'Registered', 'Brand new', 'discovery4.jpg', '722420156V');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `city` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`firstname`, `lastname`, `nic`, `city`, `email`, `password`) VALUES
('Slim', 'Shady', '722420156V', 'Missouri', 'mathers@gmail.com', '123'),
('Dilan', 'Chandana', '722420165V', 'Gampaha', 'chandana@gmail.com', '123'),
('Cristiano', 'Ronaldo', '852420156V', 'Madeira', 'cr7@gmail.com', '123'),
('Anjula', 'Perera', '982420156V', 'Kadawatha', 'anjulaperera98@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `postad`
--
ALTER TABLE `postad`
  ADD PRIMARY KEY (`postid`),
  ADD KEY `f_nic` (`f_nic`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`nic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `postad`
--
ALTER TABLE `postad`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `postad`
--
ALTER TABLE `postad`
  ADD CONSTRAINT `postad_ibfk_1` FOREIGN KEY (`f_nic`) REFERENCES `registration` (`nic`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
