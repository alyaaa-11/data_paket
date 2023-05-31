-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 08:51 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datapaket`
--

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `no_paket` int(10) NOT NULL,
  `nama_penerima` varchar(30) NOT NULL,
  `alamat_penerima` text NOT NULL,
  `no_telepon` int(13) NOT NULL,
  `nama_pengirim` varchar(30) NOT NULL,
  `alamat_pengirim` text NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`no_paket`, `nama_penerima`, `alamat_penerima`, `no_telepon`, `nama_pengirim`, `alamat_pengirim`, `harga`) VALUES
(111, 'alya chalisa', ' cigintungggg', 987647, 'ina', 'cigadung', 10000),
(222, 'kiran', 'palembang', 987678, 'arkan', 'kuningan', 30000),
(333, 'karina', '  jakarta selatan', 9743657, 'jaja', 'kadugedeee', 150000),
(555, 'rina', '  bekasiuw', 9845677, 'arkan', 'kuningan', 43000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`no_paket`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
