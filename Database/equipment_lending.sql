-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 03:06 AM
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
-- Database: `equipment_lending`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `equip_id` int(15) NOT NULL,
  `equip_name` varchar(100) NOT NULL,
  `total` int(15) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`equip_id`, `equip_name`, `total`, `reg_date`, `user`) VALUES
(3, 'LCD Projector', 11, '2022-06-27 21:00:00', 1),
(6, 'Keyboard', 12, '2022-06-27 21:00:00', 1),
(7, 'mouse', 20, '2022-07-02 21:00:00', 1),
(8, 'HDMI', 1, '2022-07-05 21:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lender`
--

CREATE TABLE `lender` (
  `lender_id` int(15) NOT NULL,
  `registration_number` varchar(50) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `sex` char(1) NOT NULL,
  `equipment` int(15) NOT NULL,
  `status` enum('take','returned') NOT NULL DEFAULT 'take',
  `date` date NOT NULL,
  `user` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(15) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `sex` char(1) NOT NULL,
  `role` varchar(24) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `firstname`, `lastname`, `phone`, `sex`, `role`, `username`, `password`) VALUES
(1, 'Bernadether', 'Salvatory', '0768726834', 'F', 'admin', 'bena', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`equip_id`),
  ADD KEY `equip_user` (`user`);

--
-- Indexes for table `lender`
--
ALTER TABLE `lender`
  ADD PRIMARY KEY (`lender_id`),
  ADD KEY `user` (`user`),
  ADD KEY `equ_lender_fk` (`equipment`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `equip_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lender`
--
ALTER TABLE `lender`
  MODIFY `lender_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `equipment`
--
ALTER TABLE `equipment`
  ADD CONSTRAINT `equip_user` FOREIGN KEY (`user`) REFERENCES `tbl_user` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `lender`
--
ALTER TABLE `lender`
  ADD CONSTRAINT `equ_lender_fk` FOREIGN KEY (`equipment`) REFERENCES `equipment` (`equip_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `lender_ibfk_1` FOREIGN KEY (`user`) REFERENCES `tbl_user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
