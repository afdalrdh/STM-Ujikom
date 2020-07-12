-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2019 at 02:04 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ujikom`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_k_pemesanan`
--

CREATE TABLE `tb_k_pemesanan` (
  `id_pemesanan` int(255) NOT NULL,
  `kode_pemesanan` varchar(255) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `tempat_pemesanan` varchar(255) NOT NULL,
  `id_penumpang` int(255) NOT NULL,
  `kode_kursi` varchar(255) NOT NULL,
  `id_rute` int(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `jam_cekin` time NOT NULL,
  `jam_berangkat` time NOT NULL,
  `total_bayar` int(255) NOT NULL,
  `id_petugas` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_k_pemesanan`
--

INSERT INTO `tb_k_pemesanan` (`id_pemesanan`, `kode_pemesanan`, `tanggal_pemesanan`, `tempat_pemesanan`, `id_penumpang`, `kode_kursi`, `id_rute`, `tujuan`, `tanggal_berangkat`, `jam_cekin`, `jam_berangkat`, `total_bayar`, `id_petugas`) VALUES
(2, 'KA_0002', '2019-03-19', 'Cimahi', 1, '2', 1, 'Jakarta', '2019-03-20', '10:00:00', '18:00:00', 63000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_k_rute`
--

CREATE TABLE `tb_k_rute` (
  `id_rute` int(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `rute_awal` varchar(255) NOT NULL,
  `rute_akhir` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `id_transportasi` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_k_rute`
--

INSERT INTO `tb_k_rute` (`id_rute`, `tujuan`, `rute_awal`, `rute_akhir`, `harga`, `id_transportasi`) VALUES
(1, 'Jakarta', 'Cimahi', 'Gambir', 63000, 1),
(4, 'Cimindi', 'Bojongsoang', 'Cimahi', 10000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_k_transportasi`
--

CREATE TABLE `tb_k_transportasi` (
  `id_transportasi` int(255) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `jumlah_kursi` int(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `id_type_transportasi` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_k_transportasi`
--

INSERT INTO `tb_k_transportasi` (`id_transportasi`, `kode`, `jumlah_kursi`, `keterangan`, `id_type_transportasi`) VALUES
(1, 'KA_19', 50, 'Bandung ke Jakarta', 1),
(2, 'WWE_1', 44, 'smekdonpain2', 1),
(3, '123', 123, '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_k_type_transportasi`
--

CREATE TABLE `tb_k_type_transportasi` (
  `id_type_transportasi` int(255) NOT NULL,
  `nama_type` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_k_type_transportasi`
--

INSERT INTO `tb_k_type_transportasi` (`id_type_transportasi`, `nama_type`, `keterangan`) VALUES
(1, 'Argo Parahyangan', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_level`
--

CREATE TABLE `tb_level` (
  `id_level` int(255) NOT NULL,
  `nama_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_level`
--

INSERT INTO `tb_level` (`id_level`, `nama_level`) VALUES
(1, 'administrator'),
(2, 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penumpang`
--

CREATE TABLE `tb_penumpang` (
  `id_penumpang` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_penumpang` varchar(255) NOT NULL,
  `alamat_penumpang` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('p','l') NOT NULL,
  `telefone` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penumpang`
--

INSERT INTO `tb_penumpang` (`id_penumpang`, `username`, `password`, `nama_penumpang`, `alamat_penumpang`, `tanggal_lahir`, `jenis_kelamin`, `telefone`) VALUES
(1, 'penumpang', '3123', 'Saya Penumpang', 'Jl. Cimahi no 12', '1998-01-02', 'l', '081321321321'),
(5, 'atzgenius', '3123', 'lost saga ea', 'Kebon kopi', '2019-03-13', 'l', '1111'),
(9, 'sweetalert', '123', 'afdal', 'kebon kopi', '1999-12-30', 'l', '082127745526'),
(14, 'afdalrdh', 'afdalrdh', 'asd', 'aassdd3', '0000-00-00', 'l', ''),
(15, 'coba', '123', 'coba coba doang', 'awe awe', '2019-03-31', 'l', '08123123123'),
(20, 'Username', 'password1', 'Username', 'alamat alamat 123', '0001-01-01', 'l', '321');

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_petugas` varchar(255) NOT NULL,
  `id_level` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `id_level`) VALUES
(1, 'afdalrdh', '3123', 'Afdal Ramdan Daman Huri', 1),
(2, 'petugas', '3123', 'Saya Petugas 1', 2),
(4, 'buatdihapus', '3123', 'Hapusaja', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_p_pemesanan`
--

CREATE TABLE `tb_p_pemesanan` (
  `id_pemesanan` int(255) NOT NULL,
  `kode_pemesanan` varchar(255) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `tempat_pemesanan` varchar(255) NOT NULL,
  `id_penumpang` int(255) NOT NULL,
  `kode_kursi` varchar(255) NOT NULL,
  `id_rute` int(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `jam_cekin` time NOT NULL,
  `jam_berangkat` time NOT NULL,
  `total_bayar` int(255) NOT NULL,
  `id_petugas` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_p_pemesanan`
--

INSERT INTO `tb_p_pemesanan` (`id_pemesanan`, `kode_pemesanan`, `tanggal_pemesanan`, `tempat_pemesanan`, `id_penumpang`, `kode_kursi`, `id_rute`, `tujuan`, `tanggal_berangkat`, `jam_cekin`, `jam_berangkat`, `total_bayar`, `id_petugas`) VALUES
(4, 'PS_0001', '2019-03-28', 'Cimahi', 5, '3', 2, 'Surabaya', '2019-03-29', '08:00:00', '13:00:00', 500000, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_p_rute`
--

CREATE TABLE `tb_p_rute` (
  `id_rute` int(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `rute_awal` varchar(255) NOT NULL,
  `rute_akhir` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `id_transportasi` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_p_rute`
--

INSERT INTO `tb_p_rute` (`id_rute`, `tujuan`, `rute_awal`, `rute_akhir`, `harga`, `id_transportasi`) VALUES
(1, 'Bali', 'Jakarta', 'Bali', 1000000, 1),
(2, 'Garut', 'Asgar', 'Garut', 1000000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_p_transportasi`
--

CREATE TABLE `tb_p_transportasi` (
  `id_transportasi` int(255) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `jumlah_kursi` int(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `id_type_transportasi` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_p_transportasi`
--

INSERT INTO `tb_p_transportasi` (`id_transportasi`, `kode`, `jumlah_kursi`, `keterangan`, `id_type_transportasi`) VALUES
(1, 'LA_1', 215, '', 1),
(2, 'LA_02', 100, 'dadeduda', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_p_type_transportasi`
--

CREATE TABLE `tb_p_type_transportasi` (
  `id_type_transportasi` int(255) NOT NULL,
  `nama_type` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_p_type_transportasi`
--

INSERT INTO `tb_p_type_transportasi` (`id_type_transportasi`, `nama_type`, `keterangan`) VALUES
(1, 'Lion JT-34', 'Lion Air');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_k_pemesanan`
--
ALTER TABLE `tb_k_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_penumpang` (`id_penumpang`),
  ADD KEY `id_rute` (`id_rute`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indexes for table `tb_k_rute`
--
ALTER TABLE `tb_k_rute`
  ADD PRIMARY KEY (`id_rute`),
  ADD KEY `id_transportasi` (`id_transportasi`);

--
-- Indexes for table `tb_k_transportasi`
--
ALTER TABLE `tb_k_transportasi`
  ADD PRIMARY KEY (`id_transportasi`),
  ADD KEY `id_type_transportasi` (`id_type_transportasi`);

--
-- Indexes for table `tb_k_type_transportasi`
--
ALTER TABLE `tb_k_type_transportasi`
  ADD PRIMARY KEY (`id_type_transportasi`);

--
-- Indexes for table `tb_level`
--
ALTER TABLE `tb_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tb_penumpang`
--
ALTER TABLE `tb_penumpang`
  ADD PRIMARY KEY (`id_penumpang`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD KEY `id_level` (`id_level`);

--
-- Indexes for table `tb_p_pemesanan`
--
ALTER TABLE `tb_p_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_penumpang` (`id_penumpang`),
  ADD KEY `id_rute` (`id_rute`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indexes for table `tb_p_rute`
--
ALTER TABLE `tb_p_rute`
  ADD PRIMARY KEY (`id_rute`),
  ADD KEY `id_transportasi` (`id_transportasi`);

--
-- Indexes for table `tb_p_transportasi`
--
ALTER TABLE `tb_p_transportasi`
  ADD PRIMARY KEY (`id_transportasi`),
  ADD KEY `id_type_transportasi` (`id_type_transportasi`);

--
-- Indexes for table `tb_p_type_transportasi`
--
ALTER TABLE `tb_p_type_transportasi`
  ADD PRIMARY KEY (`id_type_transportasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_k_pemesanan`
--
ALTER TABLE `tb_k_pemesanan`
  MODIFY `id_pemesanan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_k_rute`
--
ALTER TABLE `tb_k_rute`
  MODIFY `id_rute` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_k_transportasi`
--
ALTER TABLE `tb_k_transportasi`
  MODIFY `id_transportasi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_k_type_transportasi`
--
ALTER TABLE `tb_k_type_transportasi`
  MODIFY `id_type_transportasi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `id_level` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_penumpang`
--
ALTER TABLE `tb_penumpang`
  MODIFY `id_penumpang` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id_petugas` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_p_pemesanan`
--
ALTER TABLE `tb_p_pemesanan`
  MODIFY `id_pemesanan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_p_rute`
--
ALTER TABLE `tb_p_rute`
  MODIFY `id_rute` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_p_transportasi`
--
ALTER TABLE `tb_p_transportasi`
  MODIFY `id_transportasi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_p_type_transportasi`
--
ALTER TABLE `tb_p_type_transportasi`
  MODIFY `id_type_transportasi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_k_pemesanan`
--
ALTER TABLE `tb_k_pemesanan`
  ADD CONSTRAINT `tb_k_pemesanan_ibfk_1` FOREIGN KEY (`id_penumpang`) REFERENCES `tb_penumpang` (`id_penumpang`),
  ADD CONSTRAINT `tb_k_pemesanan_ibfk_2` FOREIGN KEY (`id_rute`) REFERENCES `tb_k_rute` (`id_rute`),
  ADD CONSTRAINT `tb_k_pemesanan_ibfk_3` FOREIGN KEY (`id_petugas`) REFERENCES `tb_petugas` (`id_petugas`);

--
-- Constraints for table `tb_k_rute`
--
ALTER TABLE `tb_k_rute`
  ADD CONSTRAINT `tb_k_rute_ibfk_1` FOREIGN KEY (`id_transportasi`) REFERENCES `tb_k_transportasi` (`id_transportasi`);

--
-- Constraints for table `tb_k_transportasi`
--
ALTER TABLE `tb_k_transportasi`
  ADD CONSTRAINT `tb_k_transportasi_ibfk_1` FOREIGN KEY (`id_type_transportasi`) REFERENCES `tb_k_type_transportasi` (`id_type_transportasi`);

--
-- Constraints for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD CONSTRAINT `tb_petugas_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `tb_level` (`id_level`);

--
-- Constraints for table `tb_p_pemesanan`
--
ALTER TABLE `tb_p_pemesanan`
  ADD CONSTRAINT `tb_p_pemesanan_ibfk_1` FOREIGN KEY (`id_penumpang`) REFERENCES `tb_penumpang` (`id_penumpang`),
  ADD CONSTRAINT `tb_p_pemesanan_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `tb_petugas` (`id_petugas`),
  ADD CONSTRAINT `tb_p_pemesanan_ibfk_3` FOREIGN KEY (`id_rute`) REFERENCES `tb_p_rute` (`id_rute`);

--
-- Constraints for table `tb_p_rute`
--
ALTER TABLE `tb_p_rute`
  ADD CONSTRAINT `tb_p_rute_ibfk_1` FOREIGN KEY (`id_transportasi`) REFERENCES `tb_p_transportasi` (`id_transportasi`);

--
-- Constraints for table `tb_p_transportasi`
--
ALTER TABLE `tb_p_transportasi`
  ADD CONSTRAINT `tb_p_transportasi_ibfk_1` FOREIGN KEY (`id_type_transportasi`) REFERENCES `tb_p_type_transportasi` (`id_type_transportasi`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
