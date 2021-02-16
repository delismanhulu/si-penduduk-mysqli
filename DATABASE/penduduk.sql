-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2018 at 02:53 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `penduduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agama`
--

CREATE TABLE IF NOT EXISTS `tbl_agama` (
`kode` int(11) NOT NULL,
  `uraian` varchar(40) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_agama`
--

INSERT INTO `tbl_agama` (`kode`, `uraian`) VALUES
(3, 'Kristen'),
(4, 'Islam'),
(5, 'Hindu'),
(7, 'Bundha'),
(8, 'eeee'),
(9, '22222222222222222'),
(10, '222');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kematian`
--

CREATE TABLE IF NOT EXISTS `tbl_kematian` (
`kode` int(11) NOT NULL,
  `kd_warga` int(11) DEFAULT NULL,
  `tgl_kematian` date DEFAULT NULL,
  `tempat` varchar(200) DEFAULT NULL,
  `penyebab_kematian` varchar(100) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_kematian`
--

INSERT INTO `tbl_kematian` (`kode`, `kd_warga`, `tgl_kematian`, `tempat`, `penyebab_kematian`) VALUES
(1, 8, '2018-10-12', '222222', '222');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lahir`
--

CREATE TABLE IF NOT EXISTS `tbl_lahir` (
`kode` int(11) NOT NULL,
  `kd_warga` int(11) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `berat_lahir` varchar(50) DEFAULT NULL,
  `panjang_lahir` varchar(50) DEFAULT NULL,
  `nama_ibu` varchar(40) DEFAULT NULL,
  `nama_ayah` varchar(40) DEFAULT NULL,
  `saksi` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lurah`
--

CREATE TABLE IF NOT EXISTS `tbl_lurah` (
`kode` int(11) NOT NULL,
  `uraian` varchar(40) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_lurah`
--

INSERT INTO `tbl_lurah` (`kode`, `uraian`) VALUES
(2, 'Damai Sejati'),
(3, 'Desa Damai');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pekerjaan`
--

CREATE TABLE IF NOT EXISTS `tbl_pekerjaan` (
`kode` int(11) NOT NULL,
  `uraian` varchar(40) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_pekerjaan`
--

INSERT INTO `tbl_pekerjaan` (`kode`, `uraian`) VALUES
(3, 'Tidak Bekerja'),
(4, 'Petani2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendatang`
--

CREATE TABLE IF NOT EXISTS `tbl_pendatang` (
`kode` int(11) NOT NULL,
  `kd_warga` int(11) DEFAULT NULL,
  `desa_asal` varchar(100) DEFAULT NULL,
  `kecamatan_asal` varchar(100) DEFAULT NULL,
  `alamat_asal` varchar(100) DEFAULT NULL,
  `tgl_datang` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendidikan`
--

CREATE TABLE IF NOT EXISTS `tbl_pendidikan` (
`kode` int(11) NOT NULL,
  `uraian` varchar(40) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_pendidikan`
--

INSERT INTO `tbl_pendidikan` (`kode`, `uraian`) VALUES
(3, 'SD'),
(4, 'SMP'),
(5, 'SMA'),
(6, 'D1'),
(7, 'D2'),
(8, 'D3'),
(9, 'S1'),
(10, 'S2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penduduk_tetap`
--

CREATE TABLE IF NOT EXISTS `tbl_penduduk_tetap` (
`kode` int(11) NOT NULL,
  `kd_warga` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_penduduk_tetap`
--

INSERT INTO `tbl_penduduk_tetap` (`kode`, `kd_warga`) VALUES
(1, 0),
(2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pindah`
--

CREATE TABLE IF NOT EXISTS `tbl_pindah` (
`kode` int(11) NOT NULL,
  `kd_warga` int(11) DEFAULT NULL,
  `alasan_pindah` varchar(100) DEFAULT NULL,
  `alamat_pindah` varchar(100) DEFAULT NULL,
  `kecamatan` varchar(100) DEFAULT NULL,
  `lurah` varchar(100) DEFAULT NULL,
  `tgl_pindah` date DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_pindah`
--

INSERT INTO `tbl_pindah` (`kode`, `kd_warga`, `alasan_pindah`, `alamat_pindah`, `kecamatan`, `lurah`, `tgl_pindah`) VALUES
(1, 9, 'wwwww  ', 'eeee', 'rrrrr', 'rrrr  ', '2018-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
`kode` int(11) NOT NULL,
  `user_name` varchar(40) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`kode`, `user_name`, `password`) VALUES
(2, 'ADMIN', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_warga`
--

CREATE TABLE IF NOT EXISTS `tbl_warga` (
`kode` int(11) NOT NULL,
  `kd_lurah` int(11) NOT NULL,
  `kd_pekerjaan` int(11) NOT NULL,
  `kd_pendidikan` int(11) NOT NULL,
  `kd_agama` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kabupaten` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `negara` varchar(30) NOT NULL,
  `status_kawin` varchar(20) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_warga`
--

INSERT INTO `tbl_warga` (`kode`, `kd_lurah`, `kd_pekerjaan`, `kd_pendidikan`, `kd_agama`, `nik`, `nama`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `kecamatan`, `kabupaten`, `provinsi`, `negara`, `status_kawin`, `tempat_lahir`, `jenis`) VALUES
(6, 2, 3, 6, 3, '92929292929', 'DELISMAN HULU', '2018-10-18', 'Laki-Laki', '22', '22', '22', 'Sumatera Utara', 'WNI', 'Belum Menikah', 'MEDAN', 'Pendatang'),
(7, 2, 3, 7, 7, '222222222222', 'Afriadi', '2018-10-18', 'Laki-Laki', 'Bilal', '2', '22', 'Sumatera Utara', 'WNI222', 'Sudah Menikah', 'MEDAN', 'Tetap'),
(8, 2, 3, 3, 3, '3333333333', 'H.Ishaq Naharuddin MA', '2018-10-15', 'Perempuan', '2', '2', '2', 'Sumatera Utara2', 'WNI', 'Sudah Menikah', 'mEDNASFADSFADSFADS', 'Meninggal'),
(9, 2, 3, 3, 3, '2222222', '2222', '2018-10-12', 'Perempuan', '2', '33', '33', 'Sumatera Utara2', 'WNI', 'Sudah Menikah', '222', 'Pindah'),
(10, 2, 3, 3, 3, '333333', '333333333', '2018-10-20', 'Perempuan', '', '3', '3', 'Sumatera Utara', 'WNI', 'Sudah Menikah', '333', 'Lahir');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_datang`
--
CREATE TABLE IF NOT EXISTS `v_datang` (
`kode` int(11)
,`kd_warga` int(11)
,`desa_asal` varchar(100)
,`kecamatan_asal` varchar(100)
,`alamat_asal` varchar(100)
,`tgl_datang` date
,`kd_lurah` int(11)
,`kd_pekerjaan` int(11)
,`kd_pendidikan` int(11)
,`kd_agama` int(11)
,`nik` varchar(16)
,`nama` varchar(45)
,`tgl_lahir` date
,`jenis_kelamin` varchar(20)
,`alamat` text
,`kecamatan` varchar(30)
,`kabupaten` varchar(30)
,`provinsi` varchar(30)
,`negara` varchar(30)
,`status_kawin` varchar(20)
,`tempat_lahir` varchar(100)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_kematian`
--
CREATE TABLE IF NOT EXISTS `v_kematian` (
`kode` int(11)
,`kd_warga` int(11)
,`tgl_kematian` date
,`tempat` varchar(200)
,`penyebab_kematian` varchar(100)
,`kd_lurah` int(11)
,`kd_pekerjaan` int(11)
,`kd_pendidikan` int(11)
,`kd_agama` int(11)
,`nik` varchar(16)
,`nama` varchar(45)
,`tgl_lahir` date
,`jenis_kelamin` varchar(20)
,`alamat` text
,`kecamatan` varchar(30)
,`kabupaten` varchar(30)
,`provinsi` varchar(30)
,`negara` varchar(30)
,`status_kawin` varchar(20)
,`tempat_lahir` varchar(100)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_lahir`
--
CREATE TABLE IF NOT EXISTS `v_lahir` (
`kode` int(11)
,`kd_warga` int(11)
,`tgl_lahir` date
,`berat_lahir` varchar(50)
,`panjang_lahir` varchar(50)
,`nama_ibu` varchar(40)
,`nama_ayah` varchar(40)
,`saksi` varchar(40)
,`kd_lurah` int(11)
,`kd_pekerjaan` int(11)
,`kd_pendidikan` int(11)
,`kd_agama` int(11)
,`nik` varchar(16)
,`nama` varchar(45)
,`jenis_kelamin` varchar(20)
,`alamat` text
,`kecamatan` varchar(30)
,`kabupaten` varchar(30)
,`provinsi` varchar(30)
,`negara` varchar(30)
,`status_kawin` varchar(20)
,`tempat_lahir` varchar(100)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_penduduk`
--
CREATE TABLE IF NOT EXISTS `v_penduduk` (
`kode` int(11)
,`kd_lurah` int(11)
,`kd_pekerjaan` int(11)
,`kd_pendidikan` int(11)
,`kd_agama` int(11)
,`nik` varchar(16)
,`nama` varchar(45)
,`tgl_lahir` date
,`jenis_kelamin` varchar(20)
,`alamat` text
,`kecamatan` varchar(30)
,`kabupaten` varchar(30)
,`provinsi` varchar(30)
,`negara` varchar(30)
,`status_kawin` varchar(20)
,`tempat_lahir` varchar(100)
,`jenis` varchar(20)
,`agama` varchar(40)
,`pekerjaan` varchar(40)
,`lurah` varchar(40)
,`pendidikan` varchar(40)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_pindah`
--
CREATE TABLE IF NOT EXISTS `v_pindah` (
`kd_lurah` int(11)
,`kd_pekerjaan` int(11)
,`kd_pendidikan` int(11)
,`kd_agama` int(11)
,`nik` varchar(16)
,`nama` varchar(45)
,`tgl_lahir` date
,`jenis_kelamin` varchar(20)
,`alamat` text
,`kabupaten` varchar(30)
,`provinsi` varchar(30)
,`negara` varchar(30)
,`status_kawin` varchar(20)
,`tempat_lahir` varchar(100)
,`kode` int(11)
,`kd_warga` int(11)
,`alasan_pindah` varchar(100)
,`alamat_pindah` varchar(100)
,`kecamatan` varchar(100)
,`lurah` varchar(100)
,`tgl_pindah` date
,`kec_awal` varchar(30)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_tetap`
--
CREATE TABLE IF NOT EXISTS `v_tetap` (
`kd_lurah` int(11)
,`kd_pekerjaan` int(11)
,`kd_pendidikan` int(11)
,`kd_agama` int(11)
,`nik` varchar(16)
,`nama` varchar(45)
,`tgl_lahir` date
,`jenis_kelamin` varchar(20)
,`alamat` text
,`kecamatan` varchar(30)
,`kabupaten` varchar(30)
,`provinsi` varchar(30)
,`negara` varchar(30)
,`status_kawin` varchar(20)
,`tempat_lahir` varchar(100)
,`kd_warga` int(11)
,`kode` int(11)
);
-- --------------------------------------------------------

--
-- Structure for view `v_datang`
--
DROP TABLE IF EXISTS `v_datang`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_datang` AS select `tbl_pendatang`.`kode` AS `kode`,`tbl_pendatang`.`kd_warga` AS `kd_warga`,`tbl_pendatang`.`desa_asal` AS `desa_asal`,`tbl_pendatang`.`kecamatan_asal` AS `kecamatan_asal`,`tbl_pendatang`.`alamat_asal` AS `alamat_asal`,`tbl_pendatang`.`tgl_datang` AS `tgl_datang`,`tbl_warga`.`kd_lurah` AS `kd_lurah`,`tbl_warga`.`kd_pekerjaan` AS `kd_pekerjaan`,`tbl_warga`.`kd_pendidikan` AS `kd_pendidikan`,`tbl_warga`.`kd_agama` AS `kd_agama`,`tbl_warga`.`nik` AS `nik`,`tbl_warga`.`nama` AS `nama`,`tbl_warga`.`tgl_lahir` AS `tgl_lahir`,`tbl_warga`.`jenis_kelamin` AS `jenis_kelamin`,`tbl_warga`.`alamat` AS `alamat`,`tbl_warga`.`kecamatan` AS `kecamatan`,`tbl_warga`.`kabupaten` AS `kabupaten`,`tbl_warga`.`provinsi` AS `provinsi`,`tbl_warga`.`negara` AS `negara`,`tbl_warga`.`status_kawin` AS `status_kawin`,`tbl_warga`.`tempat_lahir` AS `tempat_lahir` from (`tbl_pendatang` join `tbl_warga` on((`tbl_warga`.`kode` = `tbl_pendatang`.`kd_warga`)));

-- --------------------------------------------------------

--
-- Structure for view `v_kematian`
--
DROP TABLE IF EXISTS `v_kematian`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kematian` AS select `tbl_kematian`.`kode` AS `kode`,`tbl_kematian`.`kd_warga` AS `kd_warga`,`tbl_kematian`.`tgl_kematian` AS `tgl_kematian`,`tbl_kematian`.`tempat` AS `tempat`,`tbl_kematian`.`penyebab_kematian` AS `penyebab_kematian`,`tbl_warga`.`kd_lurah` AS `kd_lurah`,`tbl_warga`.`kd_pekerjaan` AS `kd_pekerjaan`,`tbl_warga`.`kd_pendidikan` AS `kd_pendidikan`,`tbl_warga`.`kd_agama` AS `kd_agama`,`tbl_warga`.`nik` AS `nik`,`tbl_warga`.`nama` AS `nama`,`tbl_warga`.`tgl_lahir` AS `tgl_lahir`,`tbl_warga`.`jenis_kelamin` AS `jenis_kelamin`,`tbl_warga`.`alamat` AS `alamat`,`tbl_warga`.`kecamatan` AS `kecamatan`,`tbl_warga`.`kabupaten` AS `kabupaten`,`tbl_warga`.`provinsi` AS `provinsi`,`tbl_warga`.`negara` AS `negara`,`tbl_warga`.`status_kawin` AS `status_kawin`,`tbl_warga`.`tempat_lahir` AS `tempat_lahir` from (`tbl_kematian` join `tbl_warga` on((`tbl_warga`.`kode` = `tbl_kematian`.`kd_warga`)));

-- --------------------------------------------------------

--
-- Structure for view `v_lahir`
--
DROP TABLE IF EXISTS `v_lahir`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_lahir` AS select `tbl_lahir`.`kode` AS `kode`,`tbl_lahir`.`kd_warga` AS `kd_warga`,`tbl_lahir`.`tgl_lahir` AS `tgl_lahir`,`tbl_lahir`.`berat_lahir` AS `berat_lahir`,`tbl_lahir`.`panjang_lahir` AS `panjang_lahir`,`tbl_lahir`.`nama_ibu` AS `nama_ibu`,`tbl_lahir`.`nama_ayah` AS `nama_ayah`,`tbl_lahir`.`saksi` AS `saksi`,`tbl_warga`.`kd_lurah` AS `kd_lurah`,`tbl_warga`.`kd_pekerjaan` AS `kd_pekerjaan`,`tbl_warga`.`kd_pendidikan` AS `kd_pendidikan`,`tbl_warga`.`kd_agama` AS `kd_agama`,`tbl_warga`.`nik` AS `nik`,`tbl_warga`.`nama` AS `nama`,`tbl_warga`.`jenis_kelamin` AS `jenis_kelamin`,`tbl_warga`.`alamat` AS `alamat`,`tbl_warga`.`kecamatan` AS `kecamatan`,`tbl_warga`.`kabupaten` AS `kabupaten`,`tbl_warga`.`provinsi` AS `provinsi`,`tbl_warga`.`negara` AS `negara`,`tbl_warga`.`status_kawin` AS `status_kawin`,`tbl_warga`.`tempat_lahir` AS `tempat_lahir` from (`tbl_lahir` join `tbl_warga` on((`tbl_warga`.`kode` = `tbl_lahir`.`kd_warga`)));

-- --------------------------------------------------------

--
-- Structure for view `v_penduduk`
--
DROP TABLE IF EXISTS `v_penduduk`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_penduduk` AS select `tbl_warga`.`kode` AS `kode`,`tbl_warga`.`kd_lurah` AS `kd_lurah`,`tbl_warga`.`kd_pekerjaan` AS `kd_pekerjaan`,`tbl_warga`.`kd_pendidikan` AS `kd_pendidikan`,`tbl_warga`.`kd_agama` AS `kd_agama`,`tbl_warga`.`nik` AS `nik`,`tbl_warga`.`nama` AS `nama`,`tbl_warga`.`tgl_lahir` AS `tgl_lahir`,`tbl_warga`.`jenis_kelamin` AS `jenis_kelamin`,`tbl_warga`.`alamat` AS `alamat`,`tbl_warga`.`kecamatan` AS `kecamatan`,`tbl_warga`.`kabupaten` AS `kabupaten`,`tbl_warga`.`provinsi` AS `provinsi`,`tbl_warga`.`negara` AS `negara`,`tbl_warga`.`status_kawin` AS `status_kawin`,`tbl_warga`.`tempat_lahir` AS `tempat_lahir`,`tbl_warga`.`jenis` AS `jenis`,`tbl_agama`.`uraian` AS `agama`,`tbl_pekerjaan`.`uraian` AS `pekerjaan`,`tbl_lurah`.`uraian` AS `lurah`,`tbl_pendidikan`.`uraian` AS `pendidikan` from ((((`tbl_warga` join `tbl_pekerjaan` on((`tbl_pekerjaan`.`kode` = `tbl_warga`.`kd_pekerjaan`))) join `tbl_agama` on((`tbl_agama`.`kode` = `tbl_warga`.`kd_agama`))) join `tbl_lurah` on((`tbl_lurah`.`kode` = `tbl_warga`.`kd_lurah`))) join `tbl_pendidikan` on((`tbl_pendidikan`.`kode` = `tbl_warga`.`kd_pendidikan`)));

-- --------------------------------------------------------

--
-- Structure for view `v_pindah`
--
DROP TABLE IF EXISTS `v_pindah`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pindah` AS select `tbl_warga`.`kd_lurah` AS `kd_lurah`,`tbl_warga`.`kd_pekerjaan` AS `kd_pekerjaan`,`tbl_warga`.`kd_pendidikan` AS `kd_pendidikan`,`tbl_warga`.`kd_agama` AS `kd_agama`,`tbl_warga`.`nik` AS `nik`,`tbl_warga`.`nama` AS `nama`,`tbl_warga`.`tgl_lahir` AS `tgl_lahir`,`tbl_warga`.`jenis_kelamin` AS `jenis_kelamin`,`tbl_warga`.`alamat` AS `alamat`,`tbl_warga`.`kabupaten` AS `kabupaten`,`tbl_warga`.`provinsi` AS `provinsi`,`tbl_warga`.`negara` AS `negara`,`tbl_warga`.`status_kawin` AS `status_kawin`,`tbl_warga`.`tempat_lahir` AS `tempat_lahir`,`tbl_pindah`.`kode` AS `kode`,`tbl_pindah`.`kd_warga` AS `kd_warga`,`tbl_pindah`.`alasan_pindah` AS `alasan_pindah`,`tbl_pindah`.`alamat_pindah` AS `alamat_pindah`,`tbl_pindah`.`kecamatan` AS `kecamatan`,`tbl_pindah`.`lurah` AS `lurah`,`tbl_pindah`.`tgl_pindah` AS `tgl_pindah`,`tbl_warga`.`kecamatan` AS `kec_awal` from (`tbl_warga` join `tbl_pindah` on((`tbl_warga`.`kode` = `tbl_pindah`.`kd_warga`)));

-- --------------------------------------------------------

--
-- Structure for view `v_tetap`
--
DROP TABLE IF EXISTS `v_tetap`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_tetap` AS select `tbl_warga`.`kd_lurah` AS `kd_lurah`,`tbl_warga`.`kd_pekerjaan` AS `kd_pekerjaan`,`tbl_warga`.`kd_pendidikan` AS `kd_pendidikan`,`tbl_warga`.`kd_agama` AS `kd_agama`,`tbl_warga`.`nik` AS `nik`,`tbl_warga`.`nama` AS `nama`,`tbl_warga`.`tgl_lahir` AS `tgl_lahir`,`tbl_warga`.`jenis_kelamin` AS `jenis_kelamin`,`tbl_warga`.`alamat` AS `alamat`,`tbl_warga`.`kecamatan` AS `kecamatan`,`tbl_warga`.`kabupaten` AS `kabupaten`,`tbl_warga`.`provinsi` AS `provinsi`,`tbl_warga`.`negara` AS `negara`,`tbl_warga`.`status_kawin` AS `status_kawin`,`tbl_warga`.`tempat_lahir` AS `tempat_lahir`,`tbl_penduduk_tetap`.`kd_warga` AS `kd_warga`,`tbl_penduduk_tetap`.`kode` AS `kode` from (`tbl_warga` join `tbl_penduduk_tetap` on((`tbl_warga`.`kode` = `tbl_penduduk_tetap`.`kd_warga`)));

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_agama`
--
ALTER TABLE `tbl_agama`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_kematian`
--
ALTER TABLE `tbl_kematian`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_lahir`
--
ALTER TABLE `tbl_lahir`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_lurah`
--
ALTER TABLE `tbl_lurah`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_pekerjaan`
--
ALTER TABLE `tbl_pekerjaan`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_pendatang`
--
ALTER TABLE `tbl_pendatang`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_pendidikan`
--
ALTER TABLE `tbl_pendidikan`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_penduduk_tetap`
--
ALTER TABLE `tbl_penduduk_tetap`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_pindah`
--
ALTER TABLE `tbl_pindah`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_warga`
--
ALTER TABLE `tbl_warga`
 ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_agama`
--
ALTER TABLE `tbl_agama`
MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_kematian`
--
ALTER TABLE `tbl_kematian`
MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_lahir`
--
ALTER TABLE `tbl_lahir`
MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_lurah`
--
ALTER TABLE `tbl_lurah`
MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_pekerjaan`
--
ALTER TABLE `tbl_pekerjaan`
MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_pendatang`
--
ALTER TABLE `tbl_pendatang`
MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_pendidikan`
--
ALTER TABLE `tbl_pendidikan`
MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_penduduk_tetap`
--
ALTER TABLE `tbl_penduduk_tetap`
MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_pindah`
--
ALTER TABLE `tbl_pindah`
MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_warga`
--
ALTER TABLE `tbl_warga`
MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
