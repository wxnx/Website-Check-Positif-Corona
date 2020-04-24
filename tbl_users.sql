-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 24, 2020 at 06:40 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corona`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `user_email` varchar(60) DEFAULT NULL,
  `user_password` varchar(40) DEFAULT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `user_level` varchar(3) DEFAULT NULL,
  `status_user` varchar(25) DEFAULT NULL,
  `jadwal` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `nama`, `user_email`, `user_password`, `kecamatan`, `user_level`, `status_user`, `jadwal`) VALUES
(4, 'testes', 'testes@gmail.com', 'tes', 'Pondok Labu', '1', NULL, NULL),
(6, 'farhan', 'farhan.muhammad@rocketmail.com', '123', 'Cilandak', '2', NULL, NULL),
(7, 'jojo', 'jotaro@gmail.com', '123', 'morioh', '2', NULL, NULL),
(8, 'beadobe', 'bdb@gmail.com', '123', 'Cicaheum', '2', NULL, NULL),
(9, 'fur', 'fur@gmail.com', '123', 'London', '2', NULL, NULL),
(10, 'style', 'style@gmail.com', '123', 'NYC', '2', NULL, NULL),
(11, 'beta', 'beta@gmail.com', '123', 'Papua', '2', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
