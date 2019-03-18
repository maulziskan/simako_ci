-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 18, 2019 at 07:03 AM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simako`
--

-- --------------------------------------------------------

--
-- Table structure for table `belajarharian_detail`
--

CREATE TABLE `belajarharian_detail` (
  `ketertarikan` char(3) DEFAULT NULL,
  `keaktifan` char(3) DEFAULT NULL,
  `kedisiplinan` char(3) DEFAULT NULL,
  `ketekunan` char(3) DEFAULT NULL,
  `konsentrasi` char(3) DEFAULT NULL,
  `antusiasme` char(3) DEFAULT NULL,
  `kesopanan` char(3) DEFAULT NULL,
  `motivasi` char(3) DEFAULT NULL,
  `kemandirian` char(3) DEFAULT NULL,
  `happiness` char(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `belajarharian_header`
--

CREATE TABLE `belajarharian_header` (
  `kd_belajarharian` varchar(12) NOT NULL,
  `standar_kompetensi` varchar(45) DEFAULT NULL,
  `pencapaian_siswa` varchar(45) DEFAULT NULL,
  `saran_guru` varchar(45) DEFAULT NULL,
  `kd_batch` varchar(12) NOT NULL,
  `tgl_belajar` date DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `config_menu`
--

CREATE TABLE `config_menu` (
  `kd_menu` varchar(4) NOT NULL,
  `menu` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ms_guru`
--

CREATE TABLE `ms_guru` (
  `id_guru` varchar(12) NOT NULL,
  `nama_guru` varchar(45) DEFAULT NULL,
  `alamat_guru` varchar(45) DEFAULT NULL,
  `no_telp` varchar(45) DEFAULT NULL,
  `no_hp` varchar(45) DEFAULT NULL,
  `email_guru` varchar(45) DEFAULT NULL,
  `id_karyawan` varchar(12) NOT NULL,
  `jenjang_pendidikan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ms_karyawan`
--

CREATE TABLE `ms_karyawan` (
  `id_karyawan` varchar(12) NOT NULL,
  `nama_karyawan` varchar(45) DEFAULT NULL,
  `alamat_karyawan` varchar(45) DEFAULT NULL,
  `no_telp` varchar(45) DEFAULT NULL,
  `no_hp` varchar(45) DEFAULT NULL,
  `email_karyawan` varchar(45) DEFAULT NULL,
  `status_kerja` varchar(45) DEFAULT NULL,
  `jabatan` varchar(45) DEFAULT NULL,
  `foto_karyawan` varchar(45) DEFAULT NULL,
  `agama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_karyawan`
--

INSERT INTO `ms_karyawan` (`id_karyawan`, `nama_karyawan`, `alamat_karyawan`, `no_telp`, `no_hp`, `email_karyawan`, `status_kerja`, `jabatan`, `foto_karyawan`, `agama`) VALUES
('a', 'b ', 'c ', 'd', 'e', 'f@f.com', 'Karyawan Tetap     ', 'g ', 'pii_jadul.jpg', 'Islam     '),
('K001', 'Maulziskan    ', 'Jl. Pahlawan Kebon Jeruk       ', '021123', '08123456789', 'abc@abc.com', 'Karyawan Tetap       ', 'Guru       ', '2.jpg', 'Islam       ');

-- --------------------------------------------------------

--
-- Table structure for table `ms_kelas`
--

CREATE TABLE `ms_kelas` (
  `id_kelas` varchar(20) NOT NULL,
  `nama_kelas` varchar(45) DEFAULT NULL,
  `jenjang` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_kelas`
--

INSERT INTO `ms_kelas` (`id_kelas`, `nama_kelas`, `jenjang`) VALUES
('I', 'Kelas I (satu)', 'SD'),
('II', 'Kelas II (Dua)', 'SD');

-- --------------------------------------------------------

--
-- Table structure for table `ms_mapel`
--

CREATE TABLE `ms_mapel` (
  `id_mapel` varchar(12) NOT NULL,
  `nama_mapel` varchar(45) DEFAULT NULL,
  `jenjang` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_mapel`
--

INSERT INTO `ms_mapel` (`id_mapel`, `nama_mapel`, `jenjang`) VALUES
('S001', 'Matematika', 'Kelas 1 SD'),
('S002', 'Bahasa Indonesia', 'Kelas 1 SD'),
('S003', 'Pendidikan Agama Islam', 'Kelas 1 SD');

-- --------------------------------------------------------

--
-- Table structure for table `ms_sekolah`
--

CREATE TABLE `ms_sekolah` (
  `id_sekolah` varchar(12) NOT NULL,
  `nama_sekolah` varchar(45) DEFAULT NULL,
  `alamat_sekolah` varchar(45) DEFAULT NULL,
  `nama_yayasan` varchar(45) DEFAULT NULL,
  `no_registrasi` varchar(45) DEFAULT NULL,
  `no_telp` varchar(25) DEFAULT NULL,
  `no_hp` varchar(45) DEFAULT NULL,
  `email_sekolah` varchar(45) DEFAULT NULL,
  `npwp` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ms_siswa`
--

CREATE TABLE `ms_siswa` (
  `id_siswa` varchar(12) NOT NULL,
  `nama_siswa` varchar(50) DEFAULT NULL,
  `id_walimurid` varchar(12) NOT NULL,
  `id_sekolah` varchar(12) NOT NULL,
  `id_kelas` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `nisn` varchar(45) DEFAULT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `asal_sekolah` varchar(45) DEFAULT NULL,
  `tgl_daftar` date DEFAULT NULL,
  `kelas_daftar` varchar(10) DEFAULT NULL,
  `foto_siswa` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_siswa`
--

INSERT INTO `ms_siswa` (`id_siswa`, `nama_siswa`, `id_walimurid`, `id_sekolah`, `id_kelas`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `nisn`, `nik`, `agama`, `asal_sekolah`, `tgl_daftar`, `kelas_daftar`, `foto_siswa`) VALUES
('1', 'jon', 'a', 'a', 'a', 'a', 'a', '2019-03-11', 'a', 'a', 'a', 'a', '2019-03-05', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `ms_userdetail`
--

CREATE TABLE `ms_userdetail` (
  `kd_user` varchar(4) NOT NULL,
  `kd_menu` varchar(4) NOT NULL,
  `status` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ms_userheader`
--

CREATE TABLE `ms_userheader` (
  `kd_user` varchar(4) NOT NULL,
  `nama_user` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `posisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_userheader`
--

INSERT INTO `ms_userheader` (`kd_user`, `nama_user`, `password`, `posisi`) VALUES
('U001', 'a', '0cc175b9c0f1b6a831c399e269772661', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ms_walimurid`
--

CREATE TABLE `ms_walimurid` (
  `id_walimurid` varchar(12) NOT NULL,
  `nama_walimurid` varchar(45) DEFAULT NULL,
  `alamat_walimurid` varchar(45) DEFAULT NULL,
  `hubungan_kerabat` varchar(45) DEFAULT NULL,
  `no_telp` varchar(45) DEFAULT NULL,
  `no_hp` varchar(45) DEFAULT NULL,
  `email_walimurid` varchar(45) DEFAULT NULL,
  `pekerjaan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_walimurid`
--

INSERT INTO `ms_walimurid` (`id_walimurid`, `nama_walimurid`, `alamat_walimurid`, `hubungan_kerabat`, `no_telp`, `no_hp`, `email_walimurid`, `pekerjaan`) VALUES
('W001', 'Budi Mulyono Nugroho', 'Jl. Sudirman No. 1 Jakarta Pusat      ', 'Ayah Kandung      ', '021123456', '08123456789', 'budi@mulyono.com', 'Pengusaha      ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `belajarharian_header`
--
ALTER TABLE `belajarharian_header`
  ADD PRIMARY KEY (`kd_belajarharian`,`kd_batch`);

--
-- Indexes for table `config_menu`
--
ALTER TABLE `config_menu`
  ADD PRIMARY KEY (`kd_menu`);

--
-- Indexes for table `ms_guru`
--
ALTER TABLE `ms_guru`
  ADD PRIMARY KEY (`id_guru`,`id_karyawan`);

--
-- Indexes for table `ms_karyawan`
--
ALTER TABLE `ms_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `ms_kelas`
--
ALTER TABLE `ms_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `ms_mapel`
--
ALTER TABLE `ms_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `ms_sekolah`
--
ALTER TABLE `ms_sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `ms_siswa`
--
ALTER TABLE `ms_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `ms_userdetail`
--
ALTER TABLE `ms_userdetail`
  ADD PRIMARY KEY (`kd_user`,`kd_menu`);

--
-- Indexes for table `ms_userheader`
--
ALTER TABLE `ms_userheader`
  ADD PRIMARY KEY (`kd_user`);

--
-- Indexes for table `ms_walimurid`
--
ALTER TABLE `ms_walimurid`
  ADD PRIMARY KEY (`id_walimurid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
