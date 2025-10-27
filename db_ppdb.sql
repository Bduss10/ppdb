-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 27, 2025 at 12:49 PM
-- Server version: 8.0.43
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbadmin`
--

CREATE TABLE `tbadmin` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbadmin`
--

INSERT INTO `tbadmin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin112233'),
(4, 'coba', 'coba@gmail.com', 'a3040f90cc20fa672fe31efcae41d2db'),
(5, 'tes', 'tes@gmail.com', 'b93939873fd4923043b9dec975811f66'),
(6, 'tesssting', 'testing@gmail.com', '7f2ababa423061c509f4923dd04b6cf1'),
(7, 'Admin', 'admin123@gmail.com', '0192023a7bbd73250516f069df18b500'),
(8, 'daftar dulu lulus kemudia', 'daftar123@gmail.com', 'daftar112233'),
(9, 'musk', 'musk@gmail.con', '2fc5c7ce2ac13cb688dd74f500b1bc00'),
(10, 'steve', 'steve@gmail.com', '7fe354a52a8e2d9a771cd618cf444cf6'),
(11, 'musk', 'musk@gmail.com', 'musk123'),
(12, 'mark', 'mark@gmail.com', 'markzucker');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_nilai` varchar(20) NOT NULL,
  `BINDO` int NOT NULL,
  `MTK` int NOT NULL,
  `IPA` int NOT NULL,
  `BINGG` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_nilai`
--

INSERT INTO `tb_nilai` (`id_nilai`, `BINDO`, `MTK`, `IPA`, `BINGG`) VALUES
('N202200001', 23, 54, 56, 45),
('N202200002', 123, 13, 53, 52),
('N202200003', 89, 89, 89, 89),
('N202200004', 0, 0, 0, 0),
('N202200005', 23, 42, 35, 35),
('N202500006', 99, 99, 99, 99),
('N202500007', 99, 99, 99, 99),
('N202500008', 99, 99, 99, 99),
('N202500009', 79, 77, 77, 79),
('N202500010', 79, 77, 77, 79),
('N202500011', 100, 100, 100, 100),
('N202500012', 100, 100, 100, 100),
('N202500013', 50, 46, 50, 80),
('N202500014', 79, 77, 100, 79),
('N202500015', 79, 77, 100, 79),
('N202500016', 79, 77, 100, 79),
('N202500017', 79, 77, 100, 79),
('N202500018', 79, 77, 100, 79),
('N202500019', 79, 77, 100, 79);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_pendaftaran` char(10) NOT NULL,
  `tgl_daftar` date DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `NISN` int NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `nm_peserta` varchar(50) DEFAULT NULL,
  `tmp_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') DEFAULT NULL,
  `no_hp` varchar(12) NOT NULL,
  `agama` varchar(15) DEFAULT NULL,
  `raport` int NOT NULL,
  `alamat` text,
  `sumber_informasi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_pendaftaran`, `tgl_daftar`, `jurusan`, `NISN`, `asal_sekolah`, `nm_peserta`, `tmp_lahir`, `tgl_lahir`, `jenis_kelamin`, `no_hp`, `agama`, `raport`, `alamat`, `sumber_informasi`) VALUES
('P001', '2025-10-25', 'Teknik', 1234567890, 'SMPN 1 Bengkulu', 'Abid Abdussalam', 'Bengkulu', '2007-05-12', 'laki-laki', '081234567890', 'Islam', 90, 'Jl. Merpati No.10', 'Instagram'),
('P202200001', '2022-07-14', 'Teknik Komputer & Jaringan', 9879, 'jkn ', 'mnl', 'knkl', '2022-08-02', 'perempuan', '908', 'Hindu', 90, 'jon', 'Surat_Kabar'),
('P202200002', '2022-07-14', '', 13, 'lv svd', 'svd', 'svdcx', '2022-06-30', 'laki-laki', '242', 'Islam', 89, 'bdsgg', 'Alumni'),
('P202200003', '2022-07-14', '', 13, 'lv svd', 'svd', 'svdcx', '2022-06-30', 'laki-laki', '242', 'Islam', 89, 'bdsgg', 'Alumni'),
('P202200004', '2022-07-14', 'Teknik Komputer & Jaringan', 234, 'frbs', 'adfb', '', '2000-01-01', '', '0', '', 0, '', ''),
('P202200005', '2022-07-17', 'Teknik Kendaraan Ringan', 942, 'jhfajve f', 'jhfsd', 'jbkfa', '2022-07-17', 'laki-laki', '124132', 'Kristen', 431, 'brgsvnl', 'Alumni'),
('P202500001', '2025-10-25', 'Teknik Industri', 12345678, 'SMP Manak', 'Budiawan', 'manna', '2010-10-10', 'laki-laki', '082828282828', 'Kristen', 100, 'india', 'Siswa Aktiv'),
('P202500006', '2025-10-22', 'Teknik Komputer & Jaringan', 12345678, 'SMP N 11nya', 'Abid Bduss', 'Arga Makmur', '2005-12-10', 'laki-laki', '888888', 'Islam', 99, 'Kosan', 'sosial_media'),
('P202500008', '2025-10-23', '', 12345678, 'SMP N 11nya', 'Abid Bduss', 'Arga Makmur', '2005-12-10', 'perempuan', '888888', '', 99, '', ''),
('P202500009', '2025-10-24', 'Teknik Industri', 12345678, 'SMP Manak', 'Budiawan', 'manna', '2011-11-11', 'laki-laki', '082828282828', 'Kristen', 78, 'mannnananannanan', 'Alumni'),
('P202500010', '2025-10-24', 'Teknik Industri', 219374, 'SMP Mannna', 'Budiono', 'mannno', '2011-12-11', 'laki-laki', '082828282222', 'Kristen', 78, 'mannnananannanan', 'Alumni'),
('P202500011', '2025-10-24', 'Sastra Indonesia', 112345, 'SMP N 2 Bengkulu', 'Lengkap Namanya', 'Kasur', '2008-08-08', 'laki-laki', '288888888888', 'Khonghucu', 100, 'Chindo', 'Sosial Media'),
('P202500012', '2025-10-24', 'Sastra Indonesia', 112345, 'SMP N 2 Bengkulu', 'Lengkap Namanya', 'Kasur', '2008-08-08', 'laki-laki', '288888888888', 'Kristen', 100, 'Chindo\r\n', 'Sosial Media'),
('P202500013', '2025-10-25', 'Teknik Komputer & Jaringan', 2945123, 'smp 12 mukomuko', 'Ahsan Nurfauzi', 'Mukomuko', '2008-08-08', 'laki-laki', '082738228754', 'Katolik', 45, 'Mukomuko mukomuko', 'Sosial Media'),
('P202500014', '2025-10-26', 'Sastra Inggris', 934092, 'SMP Manaya', 'budiii', 'dimanamana hatiku senang', '2010-10-10', 'laki-laki', '082828282828', 'Islam', 100, 'masaksd', 'Spanduk'),
('P202500015', '2025-10-26', 'Sastra Inggris', 934092, 'SMP Manaya', 'budiii', 'dimanamana hatiku senang', '2010-10-10', 'laki-laki', '082828282828', 'Islam', 100, 'masaksd', 'Spanduk'),
('P202500016', '2025-10-26', 'Sastra Inggris', 9728971, 'SMP 2', 'Egy MV', 'dimanamana hatiku senang', '2010-10-10', 'laki-laki', '082828282828', 'Islam', 100, 'masaksd', 'Spanduk'),
('P202500017', '2025-10-26', 'Teknik Komputer & Jaringan', 982093, 'smp bisa', 'bisabisa', 'kaur', '2011-11-11', 'laki-laki', '048323049', 'Islam', 100, 'jkasndanda', 'Surat_Kabar'),
('P202500018', '2025-10-26', 'Farmasi Klinis & Komunitas', 982093, 'smp bisa', 'bisabisa', 'kaur', '2011-11-11', 'perempuan', '0934202353', 'Hindu', 100, 'knaskjfweqdo', 'Guru/Karyawan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
