-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 05, 2020 at 11:48 PM
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
-- Table structure for table `data_penyebaran`
--

CREATE TABLE `data_penyebaran` (
  `kecamatan` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_penyebaran`
--

INSERT INTO `data_penyebaran` (`kecamatan`, `jumlah`, `id`) VALUES
('Buah Batu', 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `nama` varchar(20) DEFAULT NULL,
  `email` varchar(60) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `status` varchar(25) DEFAULT NULL,
  `jadwal` date DEFAULT NULL,
  `id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`nama`, `email`, `kecamatan`, `status`, `jadwal`, `id`) VALUES
('snow', 'snow@gmail.com', 'Kiaracondong', 'Negatif (-)', '2020-05-25', '16'),
('kara', 'kara@gmail.com', 'Coblong', 'Positif (+)', '2020-05-31', '17');

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
  `jadwal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `nama`, `user_email`, `user_password`, `kecamatan`, `user_level`, `status_user`, `jadwal`) VALUES
(1, '', 'admin@gmail.com', 'admin', '', '1', NULL, NULL),
(13, 'Robin', 'robin@gmail.com', '123', 'Kiaracondong', '2', 'Positif (+)', '2020-05-27'),
(14, 'Jon', 'jon@gmail.com', '123', 'Gedebage', '2', 'Positif (+)', '2020-05-27'),
(15, 'Baron', 'barbar@gmail.com', '123', 'Gedebage', '2', 'Negatif (-)', '2020-06-29'),
(16, 'snow', 'snow@gmail.com', '123', 'Kiaracondong', '2', 'Negatif (-)', '2020-05-25'),
(17, 'kara', 'kara@gmail.com', '123', 'Coblong', '2', 'Positif (+)', '2020-05-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_penyebaran`
--
ALTER TABLE `data_penyebaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_penyebaran`
--
ALTER TABLE `data_penyebaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
