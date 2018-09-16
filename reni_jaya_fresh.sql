-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Sep 2018 pada 17.19
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reni_jaya_fresh`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_cms_alamat`
--

CREATE TABLE `tb_cms_alamat` (
  `id` int(11) NOT NULL,
  `nama_kantor` text NOT NULL,
  `telepon` text NOT NULL,
  `hp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_cms_alamat`
--

INSERT INTO `tb_cms_alamat` (`id`, `nama_kantor`, `telepon`, `hp`) VALUES
(1, 'Jalan Johar No.14 Surabaya', '(031) 70120731', '082 143463188');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_cms_pembayaran`
--

CREATE TABLE `tb_cms_pembayaran` (
  `id` int(11) NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `no_rekening` text NOT NULL,
  `atas_nama` text NOT NULL,
  `img_bank` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_cms_pembayaran`
--

INSERT INTO `tb_cms_pembayaran` (`id`, `nama_bank`, `no_rekening`, `atas_nama`, `img_bank`) VALUES
(1, 'BRI', '7867565234', 'Reni', 'star.png'),
(2, 'BCA', '78374834', 'reni', 'dejavu.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_cms_pengaturan`
--

CREATE TABLE `tb_cms_pengaturan` (
  `id` int(11) NOT NULL,
  `id_users_pengaturan` int(11) NOT NULL,
  `nama_admin` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_cms_pengaturan`
--

INSERT INTO `tb_cms_pengaturan` (`id`, `id_users_pengaturan`, `nama_admin`) VALUES
(1, 7, 'anang novriadi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kapal`
--

CREATE TABLE `tb_kapal` (
  `id` int(11) NOT NULL,
  `nama_kapal` varchar(40) NOT NULL,
  `kode_kapal` varchar(25) NOT NULL,
  `pelabuhan_asal` varchar(40) NOT NULL,
  `pelabuhan_tujuan` varchar(40) NOT NULL,
  `jam_keberangkatan` time NOT NULL,
  `jam_tiba` time NOT NULL,
  `harga` float NOT NULL,
  `tersedia` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kapal`
--

INSERT INTO `tb_kapal` (`id`, `nama_kapal`, `kode_kapal`, `pelabuhan_asal`, `pelabuhan_tujuan`, `jam_keberangkatan`, `jam_tiba`, `harga`, `tersedia`) VALUES
(2, 'Ferri', 'FR1', 'Makasar', 'Ambon', '14:00:00', '16:00:00', 90000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesawat`
--

CREATE TABLE `tb_pesawat` (
  `id` int(11) NOT NULL,
  `nama_pesawat` varchar(40) NOT NULL,
  `kode_pesawat` varchar(40) NOT NULL,
  `keberangkatan` varchar(40) NOT NULL,
  `tujuan` varchar(40) NOT NULL,
  `jam_keberangkatan` time NOT NULL,
  `jam_tiba` time NOT NULL,
  `kelas_penerbangan` varchar(20) NOT NULL,
  `harga` float NOT NULL,
  `tersedia` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pesawat`
--

INSERT INTO `tb_pesawat` (`id`, `nama_pesawat`, `kode_pesawat`, `keberangkatan`, `tujuan`, `jam_keberangkatan`, `jam_tiba`, `kelas_penerbangan`, `harga`, `tersedia`) VALUES
(16, 'Batik Air', 'BTK02', 'Malang', 'Surabaya', '14:00:00', '00:00:00', 'A', 900000, 1),
(17, 'Garuda', 'GD01', 'Jakarta', 'Malang', '00:00:12', '00:00:00', 'A', 800000, 1),
(18, 'Lion Air', 'LN01', 'Jakarta', 'Bandung', '07:00:00', '00:00:00', 'A', 800000, 1),
(19, 'Lion Air', 'LN02', 'Jakarta', 'Bandung', '16:00:00', '00:00:00', 'A', 200000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tiket_kapal`
--

CREATE TABLE `tb_tiket_kapal` (
  `id` int(11) NOT NULL,
  `id_kapal` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_keberangkatan` date NOT NULL,
  `kode_booking` varchar(25) NOT NULL,
  `jumlah_tiket` int(11) NOT NULL,
  `harga_total` float NOT NULL,
  `no_ktp` varchar(40) NOT NULL,
  `bayar` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tiket_kapal`
--

INSERT INTO `tb_tiket_kapal` (`id`, `id_kapal`, `id_user`, `tgl_keberangkatan`, `kode_booking`, `jumlah_tiket`, `harga_total`, `no_ktp`, `bayar`) VALUES
(0, 2, 8, '2018-09-15', '', 2, 180000, '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tiket_pesawat`
--

CREATE TABLE `tb_tiket_pesawat` (
  `id` int(11) NOT NULL,
  `id_pesawat` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_keberangkatan` date NOT NULL,
  `kode_booking` varchar(25) NOT NULL,
  `jumlah_tiket` int(11) NOT NULL,
  `harga_total` float NOT NULL,
  `bayar` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tiket_pesawat`
--

INSERT INTO `tb_tiket_pesawat` (`id`, `id_pesawat`, `id_user`, `tgl_keberangkatan`, `kode_booking`, `jumlah_tiket`, `harga_total`, `bayar`) VALUES
(0, 16, 8, '0000-00-00', '', 2, 1800000, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `alamat` text,
  `password` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `hak_akses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id`, `email`, `username`, `nama_lengkap`, `no_telp`, `alamat`, `password`, `status`, `hak_akses`) VALUES
(7, 'anangnov99@gmail.com', 'admin', NULL, NULL, NULL, '21232f297a57a5a743894a0e4a801fc3', 1, 'admin'),
(8, 'alex@gmail.com', 'alex', NULL, NULL, NULL, '534b44a19bf18d20b71ecc4eb77c572f', 1, 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_cms_alamat`
--
ALTER TABLE `tb_cms_alamat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_cms_pembayaran`
--
ALTER TABLE `tb_cms_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_cms_pengaturan`
--
ALTER TABLE `tb_cms_pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kapal`
--
ALTER TABLE `tb_kapal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pesawat`
--
ALTER TABLE `tb_pesawat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_tiket_kapal`
--
ALTER TABLE `tb_tiket_kapal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_tiket_pesawat`
--
ALTER TABLE `tb_tiket_pesawat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_cms_alamat`
--
ALTER TABLE `tb_cms_alamat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_cms_pembayaran`
--
ALTER TABLE `tb_cms_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_cms_pengaturan`
--
ALTER TABLE `tb_cms_pengaturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_kapal`
--
ALTER TABLE `tb_kapal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_pesawat`
--
ALTER TABLE `tb_pesawat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_tiket_kapal`
--
ALTER TABLE `tb_tiket_kapal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_tiket_pesawat`
--
ALTER TABLE `tb_tiket_pesawat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
