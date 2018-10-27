-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Agu 2018 pada 15.38
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pengaduan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempat`
--

CREATE TABLE IF NOT EXISTS `tempat` (
`id` int(11) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `laporan` varchar(255) NOT NULL,
  `tanggapan` varchar(1000) NOT NULL DEFAULT 'Belum Ada Tanggapan',
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tempat`
--

INSERT INTO `tempat` (`id`, `judul`, `kategori`, `tanggal`, `laporan`, `tanggapan`, `foto`) VALUES
(16, 'Sampah di Gazebo', 'saran', '2017-07-13', 'Mohon Tong Sampah di Sekitar Gazebo Utama depan Mushola An Nur di perbanyak. Minimal di tiap Gazebo. Jadi Mahasiswa tidak membuang sampah sembarangan. dan juga tong sampah yang besar dan tinggi jadi tumpukan sampah tidak mudah tertiup angin. Terima Kasih', 'Belum Ada Tanggapan', 'sampah_thumb.JPG'),
(17, 'Toilet Tak Layak', 'keluhan', '2017-07-13', 'Banyak Toilet di Kampus Polinema tidak layak. Kadang Toilet mampet sehingga menimbulkan bau yang tidak sedap. kadang juga sapiteng membludak sehingga menyebabkan banyak kotoran keluar. tolong segera dibenahi.', 'Belum Ada Tanggapan', 'toilet_thumb.jpg'),
(20, 'Jalan Berlubang', 'keluhan', '2017-07-13', 'Tolong jalan kampus di polinema harap diperbaiki. banyak yang berlubang terutama jalan didepan aula pertamina.', 'Belum Ada Tanggapan', 'jalan-berlubang1_thumb.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tujuan`
--

CREATE TABLE IF NOT EXISTS `tujuan` (
`id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tujuan`
--

INSERT INTO `tujuan` (`id`, `nama`, `jabatan`) VALUES
(4, 'Rudi Ariyanto S.ST, M.Sc', 'Ketua Jurusan TIK'),
(6, 'Supriono', 'Ketua Cleaning Service'),
(7, 'Hoedha', 'ganteng');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Siapa Aja Boleh', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(9, 'Miftahul Huda', '1641723010', '75e497cea6f2ed54a3c435074dcc5b34', 'user'),
(10, 'Agus Santoso', '1641723008', 'f3cc61f87a31aa7db741d143bbf3b26b', 'user'),
(11, 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user'),
(12, 'Satria Setya', '1641723011', 'd7cd1a37d0f7513978c6abb4161560ed', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tempat`
--
ALTER TABLE `tempat`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tujuan`
--
ALTER TABLE `tujuan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tempat`
--
ALTER TABLE `tempat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tujuan`
--
ALTER TABLE `tujuan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
