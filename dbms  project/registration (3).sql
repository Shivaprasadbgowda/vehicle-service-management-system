-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2022 at 09:36 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `addingservice`
--

CREATE TABLE `addingservice` (
  `service_id` varchar(10) NOT NULL,
  `vehicle_no` varchar(100) NOT NULL,
  `vehicle_model` varchar(100) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addingservice`
--

INSERT INTO `addingservice` (`service_id`, `vehicle_no`, `vehicle_model`, `owner_name`, `service_name`, `status`, `Date`) VALUES
('s1001', ' 6666', 'smart', 'human', ' oil', 'pending', '2021-10-31'),
('s101', ' 4321', 'we', 'ravi', ' cleaning', 'active', '2021-12-28');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Name` varchar(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone_no` varchar(100) NOT NULL,
  `Email_id` varchar(100) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Name`, `Address`, `Phone_no`, `Email_id`, `Date`) VALUES
('abcd', 'puttur', '8523697412', 'abcd@gmail.com', '2021-01-03'),
('human', 'banglore', '6754239087', 'human@gmail.com', '2020-09-13'),
('man', 'manglore', '2345768934', 'man@gmail.com', '2022-01-09'),
('ravi', 'mani', '5678940599', 'ravi@gmail.com', '2022-12-31'),
('rocky', 'bangalore', '7865506987', 'rocky@gmail.com', '2019-01-09'),
('shiva', 'puttur', '1234567898', 'shiva@gmail.com', '2022-01-01'),
('tata', '1234', '5678912345', 'shiva@g', '2021-02-03');

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `Insurance_id` varchar(10) NOT NULL,
  `Regno` varchar(100) NOT NULL,
  `Company name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `Due date` date NOT NULL,
  `Cost` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`Insurance_id`, `Regno`, `Company name`, `category`, `Due date`, `Cost`) VALUES
('ins101', '6666', 'policybazar', '4wheel', '2021-06-06', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `newvehicle`
--

CREATE TABLE `newvehicle` (
  `Owner_name` varchar(10) NOT NULL,
  `vehicle_no` varchar(100) NOT NULL,
  `Company_name` text NOT NULL,
  `vehicle_model` text NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newvehicle`
--

INSERT INTO `newvehicle` (`Owner_name`, `vehicle_no`, `Company_name`, `vehicle_model`, `Date`) VALUES
('human', '6666', 'nissan', 'smart', '2020-06-23'),
('man', '6786', 'indica', '5g', '2002-01-09'),
('shiva', '6789', 'nano', 'chotu', '2019-08-09'),
('rocky', 'gl1446', 'suzuki', '800', '2019-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` varchar(10) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `cost`, `time`) VALUES
('s1001', 'oil', '1000', '1hour'),
('s101', 'cleaning', '1000', '1day');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'shankar', 'shankar@gmail.com', 'e36746428c0084e5444890f46c97b6b8'),
(2, 'shiva', 'shiva@gmail', '69f404925df883e0e5579d65b7768e7c'),
(3, 'ravi', 'ravi@gmail.com', '63dd3e154ca6d948fc380fa576343ba6');

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

CREATE TABLE `users1` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users1`
--

INSERT INTO `users1` (`id`, `username`, `email`, `password`) VALUES
(2, 'shiva', 'shiva@gmail', '69f404925df883e0e5579d65b7768e7c'),
(4, 'ravi', 'ravi@gmail.com', '63dd3e154ca6d948fc380fa576343ba6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addingservice`
--
ALTER TABLE `addingservice`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `owner_name` (`owner_name`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Name`,`Email_id`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD KEY `Regno` (`Regno`);

--
-- Indexes for table `newvehicle`
--
ALTER TABLE `newvehicle`
  ADD PRIMARY KEY (`vehicle_no`),
  ADD KEY `Owner_name` (`Owner_name`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`,`service_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users1`
--
ALTER TABLE `users1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addingservice`
--
ALTER TABLE `addingservice`
  ADD CONSTRAINT `addingservice_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `addingservice_ibfk_2` FOREIGN KEY (`owner_name`) REFERENCES `customer` (`Name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `insurance`
--
ALTER TABLE `insurance`
  ADD CONSTRAINT `insurance_ibfk_1` FOREIGN KEY (`Regno`) REFERENCES `newvehicle` (`vehicle_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `newvehicle`
--
ALTER TABLE `newvehicle`
  ADD CONSTRAINT `newvehicle_ibfk_1` FOREIGN KEY (`Owner_name`) REFERENCES `customer` (`Name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users1`
--
ALTER TABLE `users1`
  ADD CONSTRAINT `users1_ibfk_1` FOREIGN KEY (`username`) REFERENCES `customer` (`Name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
