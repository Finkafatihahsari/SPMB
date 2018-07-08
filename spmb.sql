-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Jul 2018 pada 16.35
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spmb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `batal_nim`
--

CREATE TABLE `batal_nim` (
  `IDBATALNIM` int(11) NOT NULL,
  `IDPERIODEDAFTAR` int(11) DEFAULT NULL,
  `IDUNIT` varchar(10) DEFAULT NULL,
  `NIMBATAL` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gelombang`
--

CREATE TABLE `gelombang` (
  `IDGELOMBANG` int(11) NOT NULL,
  `NAMAGELOMBANG` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jalurpendaftaran`
--

CREATE TABLE `jalurpendaftaran` (
  `IDJALURPENDAFTARAN` int(11) NOT NULL,
  `NAMAJALURPENDAFTARAN` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftar`
--

CREATE TABLE `pendaftar` (
  `IDPENDAFTAR` varchar(15) NOT NULL,
  `IDPERIODEDAFTAR` int(11) NOT NULL,
  `NAMA` varchar(25) DEFAULT NULL,
  `AGAMA` varchar(10) DEFAULT NULL,
  `TGLLAHIR` date DEFAULT NULL,
  `TMPLAHIR` varchar(20) DEFAULT NULL,
  `JK` tinyint(1) DEFAULT NULL,
  `HP` varchar(15) DEFAULT NULL,
  `TGLDAFTAR` date DEFAULT NULL,
  `ISDAFTARULANG` tinyint(1) DEFAULT NULL,
  `ISLULUSUJIAN` tinyint(1) DEFAULT NULL,
  `TGLDAFTARULANG` date DEFAULT NULL,
  `NIM` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `periode`
--

CREATE TABLE `periode` (
  `IDPERIODE` varchar(5) NOT NULL,
  `TAHUNAJARAN` varchar(4) DEFAULT NULL,
  `NAMAPERIODE` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `periodedaftar`
--

CREATE TABLE `periodedaftar` (
  `IDPERIODEDAFTAR` int(11) NOT NULL,
  `IDJALURPENDAFTARAN` int(11) NOT NULL,
  `IDPERIODE` varchar(5) NOT NULL,
  `IDSISTEMKULIAH` int(11) NOT NULL,
  `IDGELOMBANG` int(11) NOT NULL,
  `KETERANGAN` text,
  `ISBUKA` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pilihanpendaftar`
--

CREATE TABLE `pilihanpendaftar` (
  `IDPILIHAN` int(11) NOT NULL,
  `IDPENDAFTAR` varchar(15) NOT NULL,
  `IDUNIT` varchar(10) NOT NULL,
  `ISDITERIMA` tinyint(1) DEFAULT NULL,
  `PILIHANKE` decimal(1,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sistemkuliah`
--

CREATE TABLE `sistemkuliah` (
  `IDSISTEMKULIAH` int(11) NOT NULL,
  `NAMASISTEMKULIAH` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit`
--

CREATE TABLE `unit` (
  `IDUNIT` varchar(10) NOT NULL,
  `NAMAUNIT` varchar(20) DEFAULT NULL,
  `JENJANGUNIT` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('tes', 'tes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batal_nim`
--
ALTER TABLE `batal_nim`
  ADD PRIMARY KEY (`IDBATALNIM`),
  ADD KEY `FK_BATAL_NI_RELATIONS_PERIODED` (`IDPERIODEDAFTAR`),
  ADD KEY `FK_BATAL_NI_RELATIONS_UNIT` (`IDUNIT`);

--
-- Indexes for table `gelombang`
--
ALTER TABLE `gelombang`
  ADD PRIMARY KEY (`IDGELOMBANG`);

--
-- Indexes for table `jalurpendaftaran`
--
ALTER TABLE `jalurpendaftaran`
  ADD PRIMARY KEY (`IDJALURPENDAFTARAN`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`IDPENDAFTAR`),
  ADD KEY `FK_PENDAFTA_RELATIONS_PERIODED` (`IDPERIODEDAFTAR`);

--
-- Indexes for table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`IDPERIODE`);

--
-- Indexes for table `periodedaftar`
--
ALTER TABLE `periodedaftar`
  ADD PRIMARY KEY (`IDPERIODEDAFTAR`),
  ADD KEY `FK_PERIODED_JALUR_JALURPEN` (`IDJALURPENDAFTARAN`),
  ADD KEY `FK_PERIODED_PERIODEPE_PERIODE` (`IDPERIODE`),
  ADD KEY `FK_PERIODED_RELATIONS_GELOMBAN` (`IDGELOMBANG`),
  ADD KEY `FK_PERIODED_RELATIONS_SISTEMKU` (`IDSISTEMKULIAH`);

--
-- Indexes for table `pilihanpendaftar`
--
ALTER TABLE `pilihanpendaftar`
  ADD PRIMARY KEY (`IDPILIHAN`),
  ADD KEY `FK_PILIHANP_RELATIONS_PENDAFTA` (`IDPENDAFTAR`),
  ADD KEY `FK_PILIHANP_RELATIONS_UNIT` (`IDUNIT`);

--
-- Indexes for table `sistemkuliah`
--
ALTER TABLE `sistemkuliah`
  ADD PRIMARY KEY (`IDSISTEMKULIAH`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`IDUNIT`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batal_nim`
--
ALTER TABLE `batal_nim`
  MODIFY `IDBATALNIM` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gelombang`
--
ALTER TABLE `gelombang`
  MODIFY `IDGELOMBANG` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jalurpendaftaran`
--
ALTER TABLE `jalurpendaftaran`
  MODIFY `IDJALURPENDAFTARAN` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `periodedaftar`
--
ALTER TABLE `periodedaftar`
  MODIFY `IDPERIODEDAFTAR` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pilihanpendaftar`
--
ALTER TABLE `pilihanpendaftar`
  MODIFY `IDPILIHAN` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sistemkuliah`
--
ALTER TABLE `sistemkuliah`
  MODIFY `IDSISTEMKULIAH` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `batal_nim`
--
ALTER TABLE `batal_nim`
  ADD CONSTRAINT `FK_BATAL_NI_RELATIONS_PERIODED` FOREIGN KEY (`IDPERIODEDAFTAR`) REFERENCES `periodedaftar` (`IDPERIODEDAFTAR`),
  ADD CONSTRAINT `FK_BATAL_NI_RELATIONS_UNIT` FOREIGN KEY (`IDUNIT`) REFERENCES `unit` (`IDUNIT`);

--
-- Ketidakleluasaan untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD CONSTRAINT `FK_PENDAFTA_RELATIONS_PERIODED` FOREIGN KEY (`IDPERIODEDAFTAR`) REFERENCES `periodedaftar` (`IDPERIODEDAFTAR`);

--
-- Ketidakleluasaan untuk tabel `periodedaftar`
--
ALTER TABLE `periodedaftar`
  ADD CONSTRAINT `FK_PERIODED_JALUR_JALURPEN` FOREIGN KEY (`IDJALURPENDAFTARAN`) REFERENCES `jalurpendaftaran` (`IDJALURPENDAFTARAN`),
  ADD CONSTRAINT `FK_PERIODED_PERIODEPE_PERIODE` FOREIGN KEY (`IDPERIODE`) REFERENCES `periode` (`IDPERIODE`),
  ADD CONSTRAINT `FK_PERIODED_RELATIONS_GELOMBAN` FOREIGN KEY (`IDGELOMBANG`) REFERENCES `gelombang` (`IDGELOMBANG`),
  ADD CONSTRAINT `FK_PERIODED_RELATIONS_SISTEMKU` FOREIGN KEY (`IDSISTEMKULIAH`) REFERENCES `sistemkuliah` (`IDSISTEMKULIAH`);

--
-- Ketidakleluasaan untuk tabel `pilihanpendaftar`
--
ALTER TABLE `pilihanpendaftar`
  ADD CONSTRAINT `FK_PILIHANP_RELATIONS_PENDAFTA` FOREIGN KEY (`IDPENDAFTAR`) REFERENCES `pendaftar` (`IDPENDAFTAR`),
  ADD CONSTRAINT `FK_PILIHANP_RELATIONS_UNIT` FOREIGN KEY (`IDUNIT`) REFERENCES `unit` (`IDUNIT`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
