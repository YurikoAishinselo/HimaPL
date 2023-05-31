-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 12:40 PM
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
-- Database: `himapl`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblanggota`
--

CREATE TABLE `tblanggota` (
  `namaAnggota` varchar(20) NOT NULL,
  `NIM` varchar(10) NOT NULL,
  `divisi` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `birth` date NOT NULL,
  `email` text NOT NULL,
  `phoneNumber` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblanggota`
--

INSERT INTO `tblanggota` (`namaAnggota`, `NIM`, `divisi`, `password`, `gender`, `birth`, `email`, `phoneNumber`) VALUES
('yuriko', '2021', 'Minat & Bakat', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Male', '2022-12-14', 'yuriko@gmail.com', 123456),
('tommy', '2023', 'Minat & Bakat', '8cb2237d0679ca88db6464eac60da96345513964', 'Male', '2022-12-01', 'ttt', 123),
('Tommy', '2024', 'Minat & Bakat', '7c222fb2927d828af22f592134e8932480637c0d', 'Male', '0000-00-00', 'tm@gmail.com', 12351);

-- --------------------------------------------------------

--
-- Table structure for table `tblasset`
--

CREATE TABLE `tblasset` (
  `namaFile` varchar(50) NOT NULL,
  `jenisFile` varchar(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbllaporankeuangan`
--

CREATE TABLE `tbllaporankeuangan` (
  `NamaKegiatan` varchar(20) NOT NULL,
  `Periode` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblprojek`
--

CREATE TABLE `tblprojek` (
  `kodeProjek` varchar(15) NOT NULL,
  `namaProjek` varchar(50) NOT NULL,
  `projekManager` varchar(30) NOT NULL,
  `deadline` date NOT NULL,
  `nameFile` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblprojek`
--

INSERT INTO `tblprojek` (`kodeProjek`, `namaProjek`, `projekManager`, `deadline`, `nameFile`, `deskripsi`) VALUES
('001', 'Aplikasi web simak', 'Yuriko', '2022-12-09', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblanggota`
--
ALTER TABLE `tblanggota`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `tblprojek`
--
ALTER TABLE `tblprojek`
  ADD PRIMARY KEY (`kodeProjek`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
