-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2017 at 09:25 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(3, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `calon_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `calon_mahasiswa` (
  `no_bp` varchar(10) NOT NULL,
  `nm_mhs` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `tmpt_lhr` varchar(30) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `jk` varchar(15) NOT NULL,
  `wn` varchar(30) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `status_nikah` varchar(30) NOT NULL,
  `ijazah` varchar(30) NOT NULL,
  `thn_tamat` varchar(5) NOT NULL,
  `asl_sklh` varchar(30) NOT NULL,
  `status_mhs` varchar(30) NOT NULL,
  `tahun_terdftr` varchar(5) NOT NULL,
  `tingkt` varchar(30) NOT NULL,
  `semester` varchar(15) NOT NULL,
  `kd_jur` varchar(10) NOT NULL,
  `kd_kls` varchar(10) NOT NULL,
  `nm_ortu` varchar(30) NOT NULL,
  `ijazah_ortu` varchar(30) NOT NULL,
  `pekerjaan_ortu` varchar(30) NOT NULL,
  PRIMARY KEY (`no_bp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `calon_mahasiswa`
--

INSERT INTO `calon_mahasiswa` (`no_bp`, `nm_mhs`, `alamat`, `tmpt_lhr`, `tgl_lhr`, `jk`, `wn`, `agama`, `status_nikah`, `ijazah`, `thn_tamat`, `asl_sklh`, `status_mhs`, `tahun_terdftr`, `tingkt`, `semester`, `kd_jur`, `kd_kls`, `nm_ortu`, `ijazah_ortu`, `pekerjaan_ortu`) VALUES
('123', 'Heru', 'Padang', 'jambi', '1987-01-31', 'Pria', 'WNI', 'Islam', 'Belum Kawin', 'SMA', '2005', 'Adabiah', 'Aktif', '2005', '2005', '1', '1', 'A1', 'Siti', 'Sarjana', 'Guru');

-- --------------------------------------------------------

--
-- Table structure for table `calon_siswa`
--

CREATE TABLE IF NOT EXISTS `calon_siswa` (
  `no_calon` varchar(10) NOT NULL,
  `nm_calon` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `tmpt_lhr` varchar(30) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `jk` varchar(15) NOT NULL,
  `wn` varchar(30) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `ijazah` varchar(30) NOT NULL,
  `thn_tamat` varchar(5) NOT NULL,
  `asl_sklh` varchar(30) NOT NULL,
  `kd_jur` varchar(10) NOT NULL,
  `kd_kls` varchar(10) NOT NULL,
  `nm_ortu` varchar(30) NOT NULL,
  `pekerjaan_ortu` varchar(30) NOT NULL,
  `status_daftar` varchar(20) NOT NULL,
  PRIMARY KEY (`no_calon`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `calon_siswa`
--

INSERT INTO `calon_siswa` (`no_calon`, `nm_calon`, `alamat`, `tmpt_lhr`, `tgl_lhr`, `jk`, `wn`, `agama`, `ijazah`, `thn_tamat`, `asl_sklh`, `kd_jur`, `kd_kls`, `nm_ortu`, `pekerjaan_ortu`, `status_daftar`) VALUES
('C00003', 'Bela Agustin', 'Cisereh', 'Pandeglang', '2013-01-01', 'Perempuan', 'WNI', 'Islam', '088878787774', '2017', 'SMP Negeri 1 Cibarani', '3', '1', 'Santani', 'Buruh Tani', 'Daftar'),
('C00004', 'Hayati Nufus', 'Cisereh', 'Pandeglang', '2013-01-01', 'Perempuan', 'WNI', 'Islam', '4454547778', '2017', 'SMP Negeri 2 Cisata', '1', '1', 'Awaludin', 'Buruh', 'Daftar'),
('C00002', 'kjh', 'kjhjkh', 'kjhkjh', '2013-01-01', 'Laki-laki', 'WNI', 'kjuu', 'jyhkj', '2015', 'kjh', '2', 'kjh', 'kjh', 'kjh', 'Daftar'),
('C00001', 'Goblog', 'Setan', 'Kuburuan', '2013-01-01', 'Laki-laki', 'WNI', 'Islam KTP', 'te Skola', '2001', 'Te sakol', '1', 'klj', 'kjh', 'kjh', 'Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `kd_jur` varchar(10) NOT NULL,
  `nm_jur` varchar(50) NOT NULL,
  PRIMARY KEY (`kd_jur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`kd_jur`, `nm_jur`) VALUES
('1', 'RPL'),
('2', 'TKJ'),
('3', 'Multimedia'),
('4', 'IPA');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `kd_kls` varchar(10) NOT NULL,
  `jml_kapasitas` varchar(10) NOT NULL,
  `jml` varchar(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`kd_kls`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kd_kls`, `jml_kapasitas`, `jml`) VALUES
('A1', '50', '5'),
('A2', '40', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
