-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Jul 2018 pada 11.12
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agama`
--

CREATE TABLE `agama` (
  `kdagama` varchar(20) NOT NULL,
  `nmagama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agama`
--

INSERT INTO `agama` (`kdagama`, `nmagama`) VALUES
('A001', 'Buddha'),
('A002', 'Hindu'),
('A003', 'Konghucu'),
('A004', 'Protestan'),
('A005', 'Khatolik'),
('A006', 'Islam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `kdpekerjaan` varchar(20) NOT NULL,
  `nmpekerjaan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`kdpekerjaan`, `nmpekerjaan`) VALUES
('P002', 'Petani'),
('P0022', 'Wiraswasta'),
('P0023', 'Pegawai Swasta'),
('P0032', 'Kepala desa'),
('P03002', 'LAinnya'),
('P0302', 'Tidak Bekerja'),
('P03023', 'Parbotot'),
('P0323', 'PNS'),
('P99', 'Aparat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftar`
--

CREATE TABLE `pendaftar` (
  `kdpendaftar` int(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jk` varchar(14) NOT NULL,
  `kdagama` varchar(20) NOT NULL,
  `tpt_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `statusanak` varchar(17) NOT NULL,
  `nmayah` varchar(50) NOT NULL,
  `kdpendidikana` varchar(20) NOT NULL,
  `kdpekerjaana` varchar(20) NOT NULL,
  `penghasilanayah` varchar(20) NOT NULL,
  `nmibu` varchar(50) NOT NULL,
  `kdpendidikani` varchar(20) NOT NULL,
  `kdpekerjaani` varchar(20) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `kdtk` varchar(20) NOT NULL,
  `statusdaftar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftar`
--

INSERT INTO `pendaftar` (`kdpendaftar`, `nama`, `jk`, `kdagama`, `tpt_lahir`, `tgl_lahir`, `alamat`, `statusanak`, `nmayah`, `kdpendidikana`, `kdpekerjaana`, `penghasilanayah`, `nmibu`, `kdpendidikani`, `kdpekerjaani`, `nohp`, `kdtk`, `statusdaftar`) VALUES
(14, 'RUDIAT', 'Laki-laki', 'A002', 'SURABAYA', '1992-07-09', 'Thailand', 'kandung', 'RINTA', 'P005', 'P002', '2000000', 'TINI', 'P002', 'P002', '082111258766', 'T001', 'Ditolak'),
(15, 'RINA', 'Laki-laki', 'A002', 'SURABAYA', '2018-07-10', 'Manila Filipina', 'Tiri', 'RINO', 'P002', 'P0323', '10000000', 'RIOS', 'P005', 'P005', '082111258766', 'T002', 'tahap seleksi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `kdpendidikan` varchar(20) NOT NULL,
  `nmpendidikan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`kdpendidikan`, `nmpendidikan`) VALUES
('P001', 'Tidak Sekolah'),
('P002', 'S3'),
('P003', 'S2'),
('P004', 'SD'),
('P005', 'S1'),
('P006', 'SMP'),
('P007', 'Diploma 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tk`
--

CREATE TABLE `tk` (
  `kdtk` varchar(12) NOT NULL,
  `namatk` varchar(50) NOT NULL,
  `alamat_tk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tk`
--

INSERT INTO `tk` (`kdtk`, `namatk`, `alamat_tk`) VALUES
('T001', 'S1 Sistem Informasi', 'Panombean Panei'),
('T002', 'S1 Teknik Informatika', 'Jln . medan'),
('T003', 'S1 Sistem Komputer', 'Jalan medan dekat medan'),
('T004', 'S1 Akuntansi', 'Jalan Patuan nagari No 12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`kdagama`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`kdpekerjaan`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`kdpendaftar`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`kdpendidikan`);

--
-- Indexes for table `tk`
--
ALTER TABLE `tk`
  ADD PRIMARY KEY (`kdtk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `kdpendaftar` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
