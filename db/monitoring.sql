-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2019 at 02:42 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `id_monitoring` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `temperature` double NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_pakan`
--

CREATE TABLE `log_pakan` (
  `id_log_pakan` int(11) NOT NULL,
  `log_time` datetime NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_pakan`
--

INSERT INTO `log_pakan` (`id_log_pakan`, `log_time`, `status`) VALUES
(1, '2019-07-07 21:00:00', 1),
(2, '2019-07-07 21:03:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `monitoring_suhu`
--

CREATE TABLE `monitoring_suhu` (
  `id` int(11) NOT NULL,
  `temperature` double NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monitoring_suhu`
--

INSERT INTO `monitoring_suhu` (`id`, `temperature`, `waktu`) VALUES
(1, 29, '2019-07-09 22:10:05'),
(2, 23, '2019-07-09 22:15:58'),
(3, 26, '2019-07-09 22:16:23'),
(4, 35, '2019-07-09 22:18:32'),
(5, 30, '2019-07-09 22:19:30'),
(6, 26, '2019-07-09 22:20:59'),
(7, 22, '2019-07-09 22:22:05'),
(8, 25, '2019-07-09 22:45:38'),
(9, 26, '2019-07-09 22:49:55'),
(10, 26, '2019-07-09 22:50:10'),
(11, 26, '2019-07-09 22:50:23'),
(12, 26, '2019-07-09 22:50:37'),
(13, 27, '2019-07-09 22:50:51'),
(14, 26, '2019-07-09 22:51:04'),
(15, 27, '2019-07-09 22:51:20'),
(16, 27, '2019-07-09 22:51:34'),
(17, 26, '2019-07-09 22:51:52'),
(18, 26, '2019-07-09 22:52:12'),
(19, 26, '2019-07-09 22:52:30'),
(20, 26, '2019-07-09 22:52:48'),
(21, 27, '2019-07-09 22:53:06'),
(22, 27, '2019-07-09 22:53:24'),
(23, 26, '2019-07-09 22:53:42'),
(24, 26, '2019-07-09 22:54:00'),
(25, 26, '2019-07-09 22:54:18'),
(26, 26, '2019-07-09 22:54:36'),
(27, 26, '2019-07-09 22:54:55'),
(28, 26, '2019-07-09 22:55:14'),
(29, 26, '2019-07-09 22:55:33');

-- --------------------------------------------------------

--
-- Table structure for table `pemanas_pendingin`
--

CREATE TABLE `pemanas_pendingin` (
  `id` int(11) NOT NULL,
  `temperature` double NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjadwalan`
--

CREATE TABLE `penjadwalan` (
  `id` int(11) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `waktu` time NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjadwalan`
--

INSERT INTO `penjadwalan` (`id`, `hari`, `waktu`, `status`) VALUES
(1, 'Minggu', '21:03:00', 0),
(2, 'Rabu', '23:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `relay_device`
--

CREATE TABLE `relay_device` (
  `id_relay` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `auto` int(11) NOT NULL DEFAULT '1' COMMENT '0:auto off; 1:auto on',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0:relay on; 1:relay on'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relay_device`
--

INSERT INTO `relay_device` (`id_relay`, `type`, `auto`, `status`) VALUES
(1, 'heater', 0, 0),
(2, 'kipas', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$hJp8c9SE1FLDzs310F4Vp.NV6wm5PJjW6vScQN.pDbmKkCpHEwngy'),
(2, 'gabut', '$2y$10$DQ/28vq7IIrIMwAPm33YOe0G1NXABPVCiihhZSJf.0R8l6VHLGRo.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_pakan`
--
ALTER TABLE `log_pakan`
  ADD PRIMARY KEY (`id_log_pakan`);

--
-- Indexes for table `monitoring_suhu`
--
ALTER TABLE `monitoring_suhu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemanas_pendingin`
--
ALTER TABLE `pemanas_pendingin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjadwalan`
--
ALTER TABLE `penjadwalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relay_device`
--
ALTER TABLE `relay_device`
  ADD PRIMARY KEY (`id_relay`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log_pakan`
--
ALTER TABLE `log_pakan`
  MODIFY `id_log_pakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `monitoring_suhu`
--
ALTER TABLE `monitoring_suhu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `pemanas_pendingin`
--
ALTER TABLE `pemanas_pendingin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penjadwalan`
--
ALTER TABLE `penjadwalan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `relay_device`
--
ALTER TABLE `relay_device`
  MODIFY `id_relay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
