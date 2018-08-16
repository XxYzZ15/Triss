-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2018 at 02:45 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thesis1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clients`
--

CREATE TABLE `tbl_clients` (
  `client_id` int(11) NOT NULL,
  `client_firstname` varchar(255) NOT NULL,
  `client_lastname` varchar(255) NOT NULL,
  `client_middlename` varchar(255) NOT NULL,
  `client_email` varchar(244) NOT NULL,
  `client_password` varchar(20) NOT NULL,
  `client_address` varchar(255) NOT NULL,
  `client_contactnum` bigint(12) NOT NULL,
  `client_branch` varchar(11) NOT NULL,
  `pet_name` varchar(244) NOT NULL,
  `pet_breed` varchar(255) NOT NULL,
  `pet_species` varchar(255) NOT NULL,
  `pet_gender` varchar(255) NOT NULL,
  `pet_color` varchar(255) NOT NULL,
  `pet_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_clients`
--

INSERT INTO `tbl_clients` (`client_id`, `client_firstname`, `client_lastname`, `client_middlename`, `client_email`, `client_password`, `client_address`, `client_contactnum`, `client_branch`, `pet_name`, `pet_breed`, `pet_species`, `pet_gender`, `pet_color`, `pet_image`) VALUES
(1, 'Tristan James', 'Alegre', 'Cansino', 'trissmoretz@gmail.com', '1234', 'Bkl 3 Lot 8 Ph-2A Santa barbara villas 2 silangan san mateo rizal', 12345678910, 'SSS Lilac', 'Bolt', 'Pure', 'Pug', 'Male', 'Dark Black', '38391384_219173938795997_2260860459513020416_n.png'),
(2, 'sample', 'sample', 'sample', 'email@example.com', 'sample', 'sample', 9983548805, 'SSS Lilac', 'sample', 'sample', 'sample', 'sample', 'sample', 'jpr.jpg'),
(4, 'Adrienne', 'Alegre', 'Cansino', 'adrienne@gmail.com', '1234', 'Bkl 3 Lot 8 Ph-2A Santa barbara villas 2 silangan san mateo rizal', 9983548805, 'SSS Lilac', 'Bolt', 'Pure', 'Pug', 'Female', 'Vanilla White', '30738550_2085390784823520_5887464680284225536_n.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_clients`
--
ALTER TABLE `tbl_clients`
  ADD PRIMARY KEY (`client_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_clients`
--
ALTER TABLE `tbl_clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
