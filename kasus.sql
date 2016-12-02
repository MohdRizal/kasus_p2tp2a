-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Des 2016 pada 10.38
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `intervensi`
--

CREATE TABLE `intervensi` (
  `id_intervensi` varchar(15) NOT NULL,
  `no_reg` varchar(15) NOT NULL,
  `jenis_layanan` varchar(50) NOT NULL,
  `waktu` date NOT NULL,
  `hasil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kasus`
--

CREATE TABLE `jenis_kasus` (
  `kode_kasus` varchar(5) NOT NULL,
  `jenis_kasus` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasus`
--

CREATE TABLE `kasus` (
  `no_reg` varchar(15) NOT NULL,
  `id_pelapor` varchar(15) NOT NULL,
  `id_korban` varchar(15) NOT NULL,
  `id_pelaku` varchar(15) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `jenis` varchar(5) NOT NULL,
  `kronologi` text NOT NULL,
  `id_surat_pernyataan` varchar(15) NOT NULL,
  `permasalahan` text NOT NULL,
  `upaya` text NOT NULL,
  `harapan` text NOT NULL,
  `dampak` text NOT NULL,
  `dirujuk` varchar(30) NOT NULL,
  `hubungan` varchar(20) NOT NULL,
  `lama_hubungan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `klien`
--

CREATE TABLE `klien` (
  `id_klien` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status_nikah` varchar(10) NOT NULL,
  `pendidikan` varchar(10) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `jml_anak` int(2) NOT NULL,
  `pekerjaan` varchar(15) NOT NULL,
  `telepon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `operator`
--

CREATE TABLE `operator` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `login_terakhir` date NOT NULL,
  `hak_akses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `operator`
--

INSERT INTO `operator` (`username`, `password`, `nama_lengkap`, `login_terakhir`, `hak_akses`) VALUES
('rizal', 'rizal', 'rizal', '2016-11-30', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_peg` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_peg`, `nama`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `telepon`, `status`) VALUES
('11232123456', 'Mohammad Rizal', 'Pekanbaru', 'Bekasi', '1996-12-21', '0822-8441-698', 'Janda'),
('11451101231', '12312', '123123', '123123', '1992-01-01', '124123', '123123'),
('11451101234', 'qwe', 'qwe', 'qwe', '0000-00-00', 'qwe', 'qwe'),
('11451101235', 'qwe', 'qwe', 'qwe', '0000-00-00', 'qwe', 'qwe'),
('11451105638', 'mohmo', 'ah ', 'bekasi ah', '2016-12-08', '081208120812', 'menikah'),
('123123', '12', '123', '123', '1991-01-01', '123', '123'),
('fdfg', 'fsfds', 'gfsgfs', 'fsfgsfds', '0000-00-00', 'gfsdfgs', 'fdsdfs'),
('mmm', 'mmm', 'mmm', 'mmm', '1998-09-09', ',,,', './..'),
('mnmn', 'libpib', 'hh', 'j', '1887-08-08', 'wqe', 'we'),
('mnmnm', 'estste', '321321', '321231', '1776-09-09', '123213', '3213213');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelaku`
--

CREATE TABLE `pelaku` (
  `id_pelaku` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `pendidikan` varchar(15) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `pekerjaan` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  `hubungan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelapor`
--

CREATE TABLE `pelapor` (
  `id_pelapor` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `hubungan` varchar(20) NOT NULL,
  `kontak` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanan`
--

CREATE TABLE `pelayanan` (
  `id_pegawai` varchar(15) NOT NULL,
  `id_tim` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_tugas`
--

CREATE TABLE `surat_tugas` (
  `id_surat` varchar(20) NOT NULL,
  `reg_kasus` varchar(15) NOT NULL,
  `tanggal_surat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tim_kasus`
--

CREATE TABLE `tim_kasus` (
  `id_pegawai` varchar(15) NOT NULL,
  `id_surat` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `intervensi`
--
ALTER TABLE `intervensi`
  ADD KEY `fk_regis` (`no_reg`);

--
-- Indexes for table `jenis_kasus`
--
ALTER TABLE `jenis_kasus`
  ADD PRIMARY KEY (`kode_kasus`);

--
-- Indexes for table `kasus`
--
ALTER TABLE `kasus`
  ADD PRIMARY KEY (`no_reg`),
  ADD KEY `fkjenis_kasus` (`jenis`),
  ADD KEY `fk_lapor` (`id_pelapor`),
  ADD KEY `fk_laku` (`id_pelaku`),
  ADD KEY `fk_korban` (`id_korban`);

--
-- Indexes for table `klien`
--
ALTER TABLE `klien`
  ADD PRIMARY KEY (`id_klien`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_peg`);

--
-- Indexes for table `pelaku`
--
ALTER TABLE `pelaku`
  ADD PRIMARY KEY (`id_pelaku`);

--
-- Indexes for table `pelapor`
--
ALTER TABLE `pelapor`
  ADD PRIMARY KEY (`id_pelapor`);

--
-- Indexes for table `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `surat_tugas`
--
ALTER TABLE `surat_tugas`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `fk_registrasi` (`reg_kasus`);

--
-- Indexes for table `tim_kasus`
--
ALTER TABLE `tim_kasus`
  ADD PRIMARY KEY (`id_pegawai`,`id_surat`),
  ADD KEY `fk_surat` (`id_surat`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `intervensi`
--
ALTER TABLE `intervensi`
  ADD CONSTRAINT `fk_regis` FOREIGN KEY (`no_reg`) REFERENCES `kasus` (`no_reg`);

--
-- Ketidakleluasaan untuk tabel `kasus`
--
ALTER TABLE `kasus`
  ADD CONSTRAINT `fk_korban` FOREIGN KEY (`id_korban`) REFERENCES `klien` (`id_klien`),
  ADD CONSTRAINT `fk_laku` FOREIGN KEY (`id_pelaku`) REFERENCES `pelaku` (`id_pelaku`),
  ADD CONSTRAINT `fk_lapor` FOREIGN KEY (`id_pelapor`) REFERENCES `pelapor` (`id_pelapor`),
  ADD CONSTRAINT `fkjenis_kasus` FOREIGN KEY (`jenis`) REFERENCES `jenis_kasus` (`kode_kasus`);

--
-- Ketidakleluasaan untuk tabel `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD CONSTRAINT `fk_pgw` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_peg`);

--
-- Ketidakleluasaan untuk tabel `surat_tugas`
--
ALTER TABLE `surat_tugas`
  ADD CONSTRAINT `fk_registrasi` FOREIGN KEY (`reg_kasus`) REFERENCES `kasus` (`no_reg`);

--
-- Ketidakleluasaan untuk tabel `tim_kasus`
--
ALTER TABLE `tim_kasus`
  ADD CONSTRAINT `fk_peg` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_peg`),
  ADD CONSTRAINT `fk_surat` FOREIGN KEY (`id_surat`) REFERENCES `surat_tugas` (`id_surat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
