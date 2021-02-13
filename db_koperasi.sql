-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2020 at 04:28 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_koperasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(2) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `nama_anggota` varchar(20) NOT NULL,
  `tempat` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pekerjaan` varchar(6) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `tgl_masuk`, `nama_anggota`, `tempat`, `tgl_lahir`, `pekerjaan`, `alamat`) VALUES
(6, '0000-00-00', 'Nining  St. Nurhasan', 'Bandung', '1983-04-20', 'PNS', 'Baleendah'),
(1, '2012-10-01', 'E Ruslan AG', 'Bandung', '1070-10-01', '', 'Baleendah'),
(7, '0000-00-00', 'Rendi Kurniawan', 'Bandung', '1967-10-11', 'PNS', 'Baleendah'),
(8, '0000-00-00', 'Mila Khomsah R', 'BANDUNG', '1977-02-09', '', 'Baleendah'),
(9, '0000-00-00', 'Septhi Tsalsah R', 'BANDUNG', '1998-09-11', '', 'Baleendah'),
(10, '0000-00-00', 'MT At-Taqwa BE', 'BANDUNG', '1975-10-07', '', 'Baleendah'),
(11, '0000-00-00', 'Siti Jatiningsari', 'BANDUNG', '1956-09-06', '', 'Baleendah'),
(12, '0000-00-00', 'Ny Ihun', 'BANDUNG', '1984-09-21', '', 'Baleendah'),
(13, '0000-00-00', 'Tati', 'BANDUNG', '1987-08-21', '', 'Baleendah'),
(14, '0000-00-00', 'Ai Komariah', 'BANDUNG', '1987-09-07', '', 'Baleendah'),
(15, '0000-00-00', 'Bagus SH', 'BANDUNG', '1967-09-21', '', 'Baleendah'),
(16, '0000-00-00', 'Heni', 'BANDUNG', '1963-06-04', '', 'Baleendah'),
(17, '0000-00-00', 'Hetty', 'Bandung', '1987-06-11', '', 'Baleendah'),
(18, '0000-00-00', 'Hj. Rukmini', 'Cianjur', '1954-06-21', 'Petani', 'Baleendah'),
(19, '0000-00-00', 'Iis Maryani', 'BANDUNG', '1956-09-02', '', 'Baleendah'),
(20, '0000-00-00', 'Ade Tono', 'Sukabumi', '0000-00-00', 'Pengus', 'Baleendah'),
(21, '0000-00-00', 'Iyah Rohiyah', 'Bandung', '1956-09-12', 'pegawa', 'Baleendah'),
(22, '0000-00-00', 'Nani Sukaeni', 'Bandung', '1955-08-06', '', 'Baleendah'),
(23, '0000-00-00', 'Denis', 'Bndung', '1955-06-08', '-', 'Baleendah'),
(24, '0000-00-00', 'Hj. Djualeha', 'Bandung', '1966-07-05', '', 'Baleendah'),
(25, '0000-00-00', 'Yupi', 'Bandung', '1977-08-05', '', 'Baleendah'),
(26, '0000-00-00', 'Reval Ilmi', 'Bandung', '1987-09-07', '', 'Baleendah'),
(27, '0000-00-00', 'Hilmi Alby Y', 'Bogor', '1954-08-18', '', 'Baleendah'),
(28, '0000-00-00', 'Ratih Tahayu', 'Bandung', '1955-07-10', '', 'Baleendah'),
(29, '0000-00-00', 'Ilham', 'Bandung', '1976-08-11', '', 'Baleendah'),
(30, '0000-00-00', 'Tuti H', 'jakarta', '1976-09-27', '', 'Baleendah'),
(31, '0000-00-00', 'Iis Rohaeti', 'BANDUNG', '1984-09-04', '', 'Baleendah'),
(32, '0000-00-00', 'Noti Esa R', 'BANDUNG', '2019-09-16', '', 'Baleendah'),
(33, '0000-00-00', 'Fahruzi', 'BANDUNG', '1977-09-03', '', 'Baleendah'),
(34, '0000-00-00', 'Hj Uni', 'Bandung', '1988-12-09', '', 'Baleendah'),
(35, '0000-00-00', 'Rita Nengsih', 'Bandung', '1963-02-11', 'PNS', 'Baleeendag'),
(689, '2019-09-12', 'Ny Entin  Amin ', 'BANDUNG', '1970-09-01', 'swasta', 'Baleendah'),
(688, '2019-09-12', 'santi susanti ', 'BANDUNG', '1980-05-08', 'swasta', 'Baleendah'),
(687, '2019-09-12', 'reni haerani', 'BANDUNG', '1984-02-15', 'swasta', 'Baleendah'),
(684, '2019-09-12', 'M Fauzan ', 'BANDUNG', '1993-09-05', 'swasta', 'Balenndah'),
(685, '2019-09-12', 'Dewi Ratina ', 'BANDUNG', '1988-09-27', 'swasta', 'Baleendah '),
(686, '2019-09-12', 'mas ani', 'BANDUNG', '1983-06-14', 'swasta', 'Baleendah'),
(683, '2019-09-12', 'Ny  Wanci', 'BANDUNG', '1970-05-15', 'swasta', 'Baleendah'),
(682, '2019-09-12', 'Euis Suryati', 'BANDUNG', '1980-09-02', 'swasta', 'Baleendah'),
(681, '2019-09-12', 'Ayuk Triwahyuni ', 'BANDUNG', '1981-06-07', 'swasta', 'Baleendah'),
(680, '2019-09-12', 'nengsih', 'BANDUNG', '1984-09-25', 'swasta', 'Baleendah'),
(679, '2019-09-12', 'Bu aling', 'BANDUNG', '1979-01-10', 'swasta', 'Baleendah'),
(678, '2019-09-12', 'Annisa Elriani', 'BANDUNG', '1985-10-02', 'swasta', 'Baleendah'),
(677, '2019-09-12', 'Elis Hodijah', 'BANDUNG', '1984-04-17', 'swasta', 'Baleendah'),
(666, '2019-09-12', 'N . Siti Nuhasanah ', 'BANDUNG', '1979-09-11', 'swasta', 'Baleendah\r\n'),
(667, '2019-09-12', 'Tarmana ', 'BANDUNG', '1959-10-05', 'swasta', 'baleendah'),
(668, '2019-09-12', 'Nofi  Esa  R', 'BANDUNG', '1966-10-05', 'swasta', 'Baleendah'),
(669, '2019-09-12', 'fahru ', 'BANDUNG', '1955-03-13', 'swasta', 'Baleendah'),
(670, '2019-09-12', 'Bu Alit ', 'BANDUNG', '1955-02-13', 'swasta', 'Baleendah'),
(671, '2019-09-12', 'Titing Supartini ', 'BANDUNG', '1984-03-12', 'swasta', 'Baleendah'),
(672, '2019-09-12', 'Bu yani', 'BANDUNG', '1968-02-07', 'swasta', 'Baleendah'),
(673, '2019-09-12', 'E. Haryati', 'BANDUNG', '1977-12-10', 'swasta', 'Baleendah'),
(674, '2019-09-12', 'Hj. Sudarsih ', 'BANDUNG', '1969-09-05', 'swasta', 'Baleendah'),
(675, '2019-09-12', 'dhita Anggraeni', 'BANDUNG', '1977-09-15', 'swasta', 'Baleendah'),
(676, '2019-09-12', 'Yanti Nuryanti', 'BANDUNG', '1984-05-30', 'swasta', 'Baleendah'),
(694, '2019-09-12', 'Een Nomaria', 'BANDUNG', '1982-09-26', '', 'Baleendah '),
(693, '2019-09-12', 'Adrian  Azka', 'BANDUNG', '1960-01-17', 'swasta', 'BAleendah'),
(692, '2019-09-12', 'Ayi Ostian Hari', 'BANDUNG', '1981-04-17', 'swasta', 'BAleendah'),
(691, '2019-09-12', 'Agung SW', 'BANDUNG', '1988-10-03', 'swasta', 'BAleendah'),
(690, '2019-09-12', 'Lilis Maeliah ', 'BANDUNG', '1987-10-02', 'swasta', 'baleendah'),
(713, '2020-09-23', 'wadidaw', 'NORWEGIA', '2020-09-23', '', '9');

-- --------------------------------------------------------

--
-- Table structure for table `cicilan`
--

CREATE TABLE `cicilan` (
  `id_cicilan` int(11) NOT NULL,
  `id_pinjaman` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `tgl_nyicil` date NOT NULL,
  `pokok_pinjaman` int(11) NOT NULL,
  `sisa` int(11) NOT NULL,
  `cicilan` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `jasa` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cicilan`
--

INSERT INTO `cicilan` (`id_cicilan`, `id_pinjaman`, `id_anggota`, `tgl_nyicil`, `pokok_pinjaman`, `sisa`, `cicilan`, `bulan`, `jasa`, `jumlah`) VALUES
(266, 42, 693, '2020-09-25', 100000, 90000, 11500, 1, 1500, 11500),
(265, 32, 713, '2020-09-25', 100000, 0, 11500, 10, 1500, 11500),
(264, 32, 713, '2020-09-25', 100000, 10000, 11500, 9, 1500, 11500),
(263, 32, 713, '2020-09-25', 100000, 20000, 11500, 8, 1500, 11500),
(262, 32, 713, '2020-09-25', 100000, 30000, 11500, 7, 1500, 11500),
(261, 32, 713, '2020-09-25', 100000, 40000, 11500, 6, 1500, 11500),
(260, 32, 713, '2020-09-25', 100000, 50000, 11500, 5, 1500, 11500),
(259, 32, 713, '2020-09-25', 100000, 60000, 11500, 4, 1500, 11500),
(258, 32, 713, '2020-09-25', 100000, 70000, 11500, 3, 1500, 11500),
(257, 32, 713, '2020-09-25', 100000, 80000, 11500, 2, 1500, 11500),
(256, 32, 713, '2020-09-25', 100000, 90000, 11500, 1, 1500, 11500),
(255, 30, 713, '2020-09-25', 10000, -2000, 1150, 10, 150, 1150),
(254, 30, 713, '2020-09-25', 10000, -1000, 1150, 9, 150, 1150),
(253, 30, 713, '2020-09-25', 10000, 0, 1150, 8, 150, 1150),
(252, 30, 713, '2020-09-25', 10000, 1000, 1150, 7, 150, 1150),
(251, 30, 713, '2020-09-25', 10000, 2000, 1150, 6, 150, 1150),
(250, 30, 713, '2020-09-25', 10000, 3000, 1150, 5, 150, 1150),
(249, 30, 713, '2020-09-25', 10000, 4000, 1150, 4, 150, 1150),
(248, 30, 713, '2020-09-23', 10000, 5000, 1150, 3, 150, 1150),
(245, 30, 713, '2020-09-23', 10000, 8000, 1150, 2, 150, 1150),
(244, 30, 713, '2020-09-23', 10000, 9000, 1150, 1, 150, 1150),
(234, 27, 713, '2020-09-23', 100000, 90000, 12000, 1, 2000, 12000),
(235, 27, 713, '2020-09-23', 100000, 80000, 12000, 2, 2000, 12000),
(236, 27, 713, '2020-09-23', 100000, 70000, 12000, 3, 2000, 12000),
(237, 27, 713, '2020-09-23', 100000, 60000, 12000, 4, 2000, 12000),
(238, 27, 713, '2020-09-23', 100000, 50000, 12000, 5, 2000, 12000),
(239, 27, 713, '2020-09-23', 100000, 40000, 12000, 6, 2000, 12000),
(240, 27, 713, '2020-09-23', 100000, 30000, 12000, 7, 2000, 12000),
(241, 27, 713, '2020-09-23', 100000, 20000, 12000, 8, 2000, 12000),
(242, 27, 713, '2020-09-23', 100000, 10000, 12000, 9, 2000, 12000),
(243, 27, 713, '2020-09-23', 100000, 0, 12000, 10, 2000, 12000),
(267, 42, 693, '2020-09-25', 100000, 80000, 11500, 2, 1500, 11500),
(268, 42, 693, '2020-09-25', 100000, 70000, 11500, 3, 1500, 11500),
(269, 42, 693, '2020-09-25', 100000, 60000, 11500, 4, 1500, 11500),
(270, 42, 693, '2020-09-25', 100000, 50000, 11500, 5, 1500, 11500),
(271, 43, 713, '2020-09-25', 10000, 9000, 1150, 1, 150, 1150),
(272, 43, 713, '2020-09-25', 10000, 8000, 1150, 2, 150, 1150),
(273, 43, 713, '2020-09-25', 10000, 7000, 1150, 3, 150, 1150),
(274, 31, 694, '2020-09-26', 10000, 9000, 1150, 1, 150, 1150),
(275, 31, 694, '2020-09-26', 10000, 8000, 1150, 2, 150, 1150),
(276, 31, 694, '2020-09-26', 10000, 7000, 1150, 3, 150, 1150),
(277, 31, 694, '2020-09-26', 10000, 6000, 1150, 4, 150, 1150),
(278, 31, 694, '2020-09-26', 10000, 5000, 1150, 5, 150, 1150),
(279, 31, 694, '2020-09-26', 10000, 4000, 1150, 6, 150, 1150),
(280, 31, 694, '2020-09-26', 10000, 3000, 1150, 7, 150, 1150),
(281, 31, 694, '2020-09-26', 10000, 2000, 1150, 8, 150, 1150),
(282, 31, 694, '2020-09-26', 10000, 1000, 1150, 9, 150, 1150),
(283, 31, 694, '2020-09-26', 10000, 0, 1150, 10, 150, 1150),
(284, 38, 694, '2020-09-26', 1000, 900, 115, 1, 15, 115),
(285, 38, 694, '2020-09-26', 1000, 800, 115, 2, 15, 115),
(286, 38, 694, '2020-09-26', 1000, 700, 115, 3, 15, 115),
(287, 38, 694, '2020-09-26', 1000, 600, 115, 4, 15, 115),
(288, 38, 694, '2020-09-26', 1000, 500, 115, 5, 15, 115),
(289, 38, 694, '2020-09-26', 1000, 400, 115, 6, 15, 115),
(290, 38, 694, '2020-09-26', 1000, 300, 115, 7, 15, 115),
(291, 38, 694, '2020-09-26', 1000, 200, 115, 8, 15, 115),
(292, 38, 694, '2020-09-26', 1000, 100, 115, 9, 15, 115),
(293, 38, 694, '2020-09-26', 1000, 0, 115, 10, 15, 115);

--
-- Triggers `cicilan`
--
DELIMITER $$
CREATE TRIGGER `sisa_angsuran` AFTER INSERT ON `cicilan` FOR EACH ROW BEGIN
	UPDATE pinjaman SET sisa = new.sisa WHERE id_anggota=new.id_anggota AND id_pinjaman= new.id_pinjaman;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pinjaman`
--

CREATE TABLE `pinjaman` (
  `id_pinjaman` int(11) NOT NULL,
  `tgl_meminjam` date NOT NULL,
  `nama_anggota` varchar(100) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `meminjam` int(11) NOT NULL,
  `sisa` int(11) NOT NULL,
  `keperlluan` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinjaman`
--

INSERT INTO `pinjaman` (`id_pinjaman`, `tgl_meminjam`, `nama_anggota`, `id_anggota`, `bulan`, `meminjam`, `sisa`, `keperlluan`, `status`) VALUES
(27, '2020-09-23', 'wadidaw', 713, 10, 100000, 0, 'dadakan ', '0'),
(30, '2020-09-23', 'wadidaw', 713, 10, 10000, -2000, '1 ', '0'),
(31, '2020-09-23', 'Een Nomaria', 694, 10, 10000, 0, '1 ', '0'),
(32, '2020-09-23', 'wadidaw', 713, 10, 100000, 0, '1 ', '0'),
(36, '2020-09-25', 'mas ani', 686, 10, 10000, 10000, ' ', '1'),
(37, '2020-09-25', 'mas ani', 686, 10, 1000, 1000, '1 ', '1'),
(38, '2020-09-25', 'Een Nomaria', 694, 10, 1000, 0, '1 ', '0'),
(40, '2020-09-25', 'wadidaw', 713, 10, 10000, 10000, '1 ', '1'),
(41, '2020-09-25', 'wadidaw', 713, 10, 10, 10, '1 ', '1'),
(42, '2020-09-25', 'Adrian  Azka', 693, 10, 100000, 50000, ' ', '1'),
(43, '2020-09-25', 'wadidaw', 713, 10, 10000, 7000, '1 ', '1'),
(44, '2020-09-25', 'wadidaw', 713, 9, 9000000, 9000000, ' 1', '1'),
(45, '2020-09-26', 'Een Nomaria', 694, 10, 90000, 90000, '1 ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `simpanan`
--

CREATE TABLE `simpanan` (
  `id_simpanan` int(11) NOT NULL,
  `tgl_menyimpan` date NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `simpanan`
--

INSERT INTO `simpanan` (`id_simpanan`, `tgl_menyimpan`, `id_anggota`, `nama_anggota`, `jumlah`) VALUES
(70, '2019-09-15', 694, 'Een Nomaria', 75000),
(69, '2019-09-15', 694, 'Een Nomaria', 75000),
(68, '2019-09-15', 694, 'Een Nomaria', 75000),
(67, '2019-09-15', 694, 'Een Nomaria', 75000),
(66, '2019-09-13', 694, 'Een Nomaria', 75000),
(65, '2019-09-13', 694, 'Een Nomaria', 225000),
(64, '2019-09-12', 1, 'E Ruslan AG', 850000),
(63, '2019-09-12', 1, 'E Ruslan AG', 100000),
(62, '2019-09-12', 1, 'E Ruslan AG', 5025000),
(71, '2020-09-23', 694, 'Een Nomaria', 10000),
(72, '2020-09-23', 713, 'wadidaw', 100000),
(73, '2020-09-23', 713, 'wadidaw', 100000),
(74, '2020-09-23', 713, 'wadidaw', 10000),
(75, '2020-09-23', 713, 'wadidaw', 10000),
(76, '2020-09-23', 713, 'wadidaw', 10000),
(77, '2020-09-23', 713, 'wadidaw', 1000000),
(78, '2020-09-25', 713, 'wadidaw', 90000),
(79, '2020-09-25', 713, 'wadidaw', 10),
(80, '2020-09-25', 693, 'Adrian  Azka', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `hak_akses`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'admin1', 'admin1', 'admin'),
(3, 'admin2', 'admin2', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `cicilan`
--
ALTER TABLE `cicilan`
  ADD PRIMARY KEY (`id_cicilan`);

--
-- Indexes for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`id_pinjaman`);

--
-- Indexes for table `simpanan`
--
ALTER TABLE `simpanan`
  ADD PRIMARY KEY (`id_simpanan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=714;

--
-- AUTO_INCREMENT for table `cicilan`
--
ALTER TABLE `cicilan`
  MODIFY `id_cicilan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=294;

--
-- AUTO_INCREMENT for table `pinjaman`
--
ALTER TABLE `pinjaman`
  MODIFY `id_pinjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `simpanan`
--
ALTER TABLE `simpanan`
  MODIFY `id_simpanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
