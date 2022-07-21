-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2022 at 10:30 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perkembangan2`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_guru`
--

CREATE TABLE `data_guru` (
  `Id_guru` int(11) NOT NULL,
  `kode_guru` varchar(255) NOT NULL,
  `kode_jurusan` varchar(255) NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `mapel` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_perkembangan`
--

CREATE TABLE `data_perkembangan` (
  `Id_data` int(11) NOT NULL,
  `id_kelas` int(255) NOT NULL,
  `id_jurusan` int(255) NOT NULL,
  `id_thn` int(255) NOT NULL,
  `id_guru` int(255) NOT NULL,
  `id_piket` int(255) NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `guru_piket` varchar(255) NOT NULL,
  `mapel` varchar(255) NOT NULL,
  `hadir` varchar(255) NOT NULL,
  `absen` varchar(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `uraian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_piket`
--

CREATE TABLE `data_piket` (
  `Id_piket` int(11) NOT NULL,
  `kode_piket` varchar(255) NOT NULL,
  `guru_piket` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `Id_jurusan` int(11) NOT NULL,
  `kode_jurusan` varchar(255) NOT NULL,
  `nama_jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `kode_kelas` varchar(255) NOT NULL,
  `nama_kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `thn_ajaran`
--

CREATE TABLE `thn_ajaran` (
  `Id_thn` int(11) NOT NULL,
  `kode_thn` varchar(255) NOT NULL,
  `thn_ajaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(1, 'waka kurikulum', 'Admin', 'Admin123', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`Id_guru`);

--
-- Indexes for table `data_perkembangan`
--
ALTER TABLE `data_perkembangan`
  ADD PRIMARY KEY (`Id_data`),
  ADD KEY `pekembangan` (`id_guru`),
  ADD KEY `perkembangan2` (`id_jurusan`),
  ADD KEY `perkembangan3` (`id_kelas`),
  ADD KEY `perkembangan4` (`id_piket`),
  ADD KEY `perkembangan5` (`id_thn`);

--
-- Indexes for table `data_piket`
--
ALTER TABLE `data_piket`
  ADD PRIMARY KEY (`Id_piket`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`Id_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `thn_ajaran`
--
ALTER TABLE `thn_ajaran`
  ADD PRIMARY KEY (`Id_thn`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_guru`
--
ALTER TABLE `data_guru`
  MODIFY `Id_guru` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_perkembangan`
--
ALTER TABLE `data_perkembangan`
  MODIFY `Id_data` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_piket`
--
ALTER TABLE `data_piket`
  MODIFY `Id_piket` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `Id_jurusan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thn_ajaran`
--
ALTER TABLE `thn_ajaran`
  MODIFY `Id_thn` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_perkembangan`
--
ALTER TABLE `data_perkembangan`
  ADD CONSTRAINT `pekembangan` FOREIGN KEY (`id_guru`) REFERENCES `data_guru` (`Id_guru`),
  ADD CONSTRAINT `perkembangan2` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`Id_jurusan`),
  ADD CONSTRAINT `perkembangan3` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `perkembangan4` FOREIGN KEY (`id_piket`) REFERENCES `data_piket` (`Id_piket`),
  ADD CONSTRAINT `perkembangan5` FOREIGN KEY (`id_thn`) REFERENCES `thn_ajaran` (`Id_thn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
