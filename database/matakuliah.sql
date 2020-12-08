-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2020 at 09:56 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matakuliah`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambil`
--

CREATE TABLE `ambil` (
  `id` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL,
  `kode_matkul` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `sks` int(11) NOT NULL,
  `dosen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ambil`
--

INSERT INTO `ambil` (`id`, `id_mahasiswa`, `id_matkul`, `kode_matkul`, `nama`, `sks`, `dosen`) VALUES
(7, 4, 17, 'NINF6002 ', 'Kalkulus I ', 3, 'Muhammad Iqbal Akbar');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `password`, `prodi`, `foto`) VALUES
(3, '19022848492', 'Deno', '$2y$10$w.oSi9S/ZpO9GK7KHrBVD.aZ6CTF/Pb8cvodjVwWRFVEvF6nA/6BS', 'Teknik Informatika', 'news-201205-989652eef2.jpg'),
(4, '190535646044', 'Rachmadi Rusliansyah', '$2y$10$aWXosXB2iZrkBtiyimzQiOKFVyNSjZJTiJFowmx83Kb.otPhHQqPK', 'Teknik Informatika', 'news-201207-d9beb34eaa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id` int(11) NOT NULL,
  `kode_matkul` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `sks` int(11) NOT NULL,
  `dosen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id`, `kode_matkul`, `nama`, `sks`, `dosen`) VALUES
(17, 'NINF6002 ', 'Kalkulus I ', 3, 'Muhammad Iqbal Akbar'),
(18, 'NNF6007', 'Kalkulus II', 3, 'Agusta Rakhmat Taufani'),
(19, 'NINF6019', 'Kalkulus Lanjut', 3, 'Kartika Candra Kirana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ambil`
--
ALTER TABLE `ambil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ambil`
--
ALTER TABLE `ambil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
