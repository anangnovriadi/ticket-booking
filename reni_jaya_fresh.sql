-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2019 at 08:13 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

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
-- Table structure for table `tb_cms_alamat`
--

CREATE TABLE `tb_cms_alamat` (
  `id` int(11) NOT NULL,
  `nama_kantor` text NOT NULL,
  `telepon` text NOT NULL,
  `hp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cms_alamat`
--

INSERT INTO `tb_cms_alamat` (`id`, `nama_kantor`, `telepon`, `hp`) VALUES
(1, 'Jalan Johar No.14 Surabaya', '(031) 70120731', '082 143463188');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cms_pembayaran`
--

CREATE TABLE `tb_cms_pembayaran` (
  `id` int(11) NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `no_rekening` text NOT NULL,
  `atas_nama` text NOT NULL,
  `img_bank` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cms_pembayaran`
--

INSERT INTO `tb_cms_pembayaran` (`id`, `nama_bank`, `no_rekening`, `atas_nama`, `img_bank`) VALUES
(3, 'BCA', '3810155271', 'Reni', 'bca.png'),
(4, 'BRI', '140005069563', 'Reni', 'bri.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cms_pengaturan`
--

CREATE TABLE `tb_cms_pengaturan` (
  `id` int(11) NOT NULL,
  `id_users_pengaturan` int(11) NOT NULL,
  `nama_admin` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cms_pengaturan`
--

INSERT INTO `tb_cms_pengaturan` (`id`, `id_users_pengaturan`, `nama_admin`) VALUES
(1, 7, 'admin reni');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kapal`
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
  `tersedia` tinyint(1) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kapal`
--

INSERT INTO `tb_kapal` (`id`, `nama_kapal`, `kode_kapal`, `pelabuhan_asal`, `pelabuhan_tujuan`, `jam_keberangkatan`, `jam_tiba`, `harga`, `tersedia`, `stok`) VALUES
(1, 'Sinabung', 'SB01', 'Semarang', 'Surabaya', '08:00:00', '11:00:00', 400000, 1, 96),
(3, 'Dobonsolo', 'D01', 'Surabaya', 'Sorong', '19:00:00', '04:00:00', 600000, 1, 69),
(4, 'KM Ngapulu', 'KMN01', 'Jayapura', 'Makasar', '15:00:00', '02:00:00', 700000, 1, 80),
(5, 'KM Ciremai', 'KMC01', 'Jayapura', 'Sorong', '08:00:00', '02:00:00', 550000, 1, 100),
(6, 'KM Ngapulu', 'KMN01', 'Biak', 'Makasar', '05:00:00', '12:00:00', 680000, 1, 120),
(7, 'KM Ngapulu', 'KMN01', 'Jayapura', 'Surabaya', '14:00:00', '22:00:00', 1000000, 1, 120),
(8, 'Dobonsolo', 'D01', 'Jayapura', 'Surabaya', '17:00:00', '01:00:00', 1200000, 1, 100),
(9, 'KM Ciremai', 'KMC02', 'Jayapura', 'Surabaya', '11:00:00', '03:30:00', 1150000, 1, 80),
(10, 'KM Ngapulu', 'KMN01', 'Biak', 'Makasar', '15:00:00', '00:00:13', 670000, 1, 100),
(11, 'Dobonsolo', 'D01', 'Biak', 'Makasar', '12:30:00', '02:00:00', 700000, 1, 80),
(12, 'KM Ciremai', 'KMC03', 'Biak', 'Makasar', '08:00:00', '17:00:00', 800000, 1, 200),
(14, 'Ngapulu', 'NG01', 'Surabaya', 'Semarang', '07:00:00', '09:00:00', 200000, 1, 100),
(15, 'Dobonsolo', 'D02', 'Makasar', 'Surabaya', '09:00:00', '13:00:00', 400000, 1, 120),
(16, 'Binaiya ', 'B01', 'Surabaya', 'Sorong', '08:00:00', '02:00:00', 620000, 1, 95),
(17, 'Gunung Dempo', 'GD01', 'Surabaya', 'Sorong', '00:00:12', '17:00:00', 900000, 1, 120),
(18, 'Dobonsolo', 'D03', 'Semarang', 'Surabaya', '09:00:00', '11:00:00', 200000, 1, 96),
(19, 'KM Ciremai', 'KMC04', 'Semarang', 'Surabaya', '07:00:00', '09:00:00', 200000, 1, 200),
(20, 'Dobonsolo', 'DB08', 'Surabaya', 'Makasar', '09:00:00', '05:00:00', 1000000, 1, 80);

-- --------------------------------------------------------

--
-- Table structure for table `tb_komplain_masukan`
--

CREATE TABLE `tb_komplain_masukan` (
  `id` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telpon` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_komplain_masukan`
--

INSERT INTO `tb_komplain_masukan` (`id`, `jenis`, `nama_lengkap`, `email`, `no_telpon`, `pesan`) VALUES
(13, 'Masukan', 'aji pangestu', 'bangkit@twiscode.com', '085236694759', 'saya salah'),
(14, 'Komplain', 'aji pangestu', 'bangkit@twiscode.com', '085236694759', 'masukan'),
(15, 'Masukan', 'alex alex', 'novriadi@twiscode.com', '085236694759', 'masukan kom'),
(16, 'Komplain', 'aji pangestu', 'ajisasongko@twiscode.com', '085236694759', 'kurang puas'),
(17, 'Komplain', 'ledrick ', 'ledrickhenry212bny@gmail.com', '085236694759', 'Aku gak seneng'),
(18, 'Masukan', 'anang novriadi', 'anangnov99@gmail.com', '085236694759', 'Saya kurang puas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesawat`
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
-- Dumping data for table `tb_pesawat`
--

INSERT INTO `tb_pesawat` (`id`, `nama_pesawat`, `kode_pesawat`, `keberangkatan`, `tujuan`, `jam_keberangkatan`, `jam_tiba`, `kelas_penerbangan`, `harga`, `tersedia`) VALUES
(18, 'Lion Air', 'LN01', 'Jakarta', 'Bandung', '07:00:00', '07:30:00', 'Ekonomi', 800000, 1),
(20, 'Sriwijaya Air', 'SWJ01', 'Surabaya', 'Jakarta', '07:00:00', '08:00:00', 'Ekonomi', 600000, 1),
(21, 'Garuda', 'GD01', 'Jakarta', 'Bali', '16:00:00', '17:30:00', 'Ekonomi', 600000, 1),
(22, 'Garuda', 'GD02', 'Bali', 'Jakarta', '12:30:00', '14:00:00', 'Ekonomi', 700000, 1),
(23, 'Citilink', 'CT01', 'Jakarta', 'Surabaya', '09:00:00', '08:00:00', 'Ekonomi', 600000, 1),
(24, 'Citilink', 'CT02', 'Surabaya', 'Lampung', '00:00:12', '13:45:00', 'Ekonomi', 800000, 1),
(25, 'Lion Air', 'LN03', 'Surabaya', 'Jakarta', '08:00:00', '09:30:00', 'Ekonomi', 900000, 1),
(26, 'Nam Air', 'NMA21', 'JogjaJakarta', 'Lombok', '15:00:00', '17:10:00', 'Bisnis', 864000, 1),
(27, 'Lion Air', 'LN02', 'Jakarta', 'Bandung', '19:15:00', '19:50:00', 'Bisnis', 400000, 1),
(28, 'Lion Air', 'LN03', 'Surabaya', 'Jakarta', '12:30:00', '13:45:00', 'Bisnis', 450000, 1),
(29, 'Citilink', 'CT03', 'Surabaya', 'Makasar', '21:25:00', '23:10:00', 'Ekonomi', 680000, 1),
(30, 'Citilink', 'CT04', 'Surabaya', 'Makasar', '17:30:00', '19:00:00', 'Bisnis', 900000, 1),
(31, 'Citilink', 'CT05', 'Surabaya', 'Makasar', '19:25:00', '20:10:00', 'Bisnis', 870000, 1),
(32, 'Lion Air', 'LN01', 'Surabaya', 'Makasar', '14:10:00', '16:00:00', 'Ekonomi', 600000, 1),
(33, 'Garuda', 'GD03', 'Surabaya', 'Makasar', '05:00:00', '07:00:00', 'Bisnis', 900000, 1),
(34, 'Citilink', 'CT01', 'Jakarta', 'Bandung', '08:00:00', '09:00:00', 'Ekonomi', 500000, 1),
(35, 'Citilink', 'CT02', 'Jakarta', 'Bandung', '06:00:00', '07:00:00', 'Ekonomi', 400000, 1),
(36, 'Garuda', 'GD01', 'Jakarta', 'Bandung', '10:00:00', '11:00:00', 'Ekonomi', 500000, 1),
(37, 'Garuda', 'GD02', 'Jakarta', 'Bali', '09:00:00', '10:00:00', 'Bisnis', 800000, 1),
(38, 'Citilink', 'CT03', 'Jakarta', 'Bali', '19:00:00', '21:00:00', 'Bisnis', 1500000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tiket_kapal`
--

CREATE TABLE `tb_tiket_kapal` (
  `id` int(11) NOT NULL,
  `id_kapal` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_keberangkatan` date NOT NULL,
  `kode_booking` varchar(25) NOT NULL,
  `jumlah_tiket` int(11) NOT NULL,
  `harga_total` float NOT NULL,
  `bayar` tinyint(1) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `kode_transaksi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tiket_kapal`
--

INSERT INTO `tb_tiket_kapal` (`id`, `id_kapal`, `id_user`, `tgl_keberangkatan`, `kode_booking`, `jumlah_tiket`, `harga_total`, `bayar`, `tgl_pemesanan`, `kode_transaksi`) VALUES
(1, 19, 15, '2018-10-27', '', 1, 200000, 1, '2018-10-26', 'PS02691'),
(4, 1, 14, '2018-10-31', '', 1, 400000, 1, '2018-10-30', 'PS03096'),
(7, 18, 14, '2018-10-31', '', 1, 200000, 1, '2018-10-30', 'PS03085'),
(8, 18, 17, '2018-10-31', '', 1, 200000, 1, '2018-10-30', 'PS03093'),
(9, 1, 18, '2018-10-31', '', 2, 800000, 1, '2018-10-30', 'PS03084'),
(12, 3, 21, '2018-11-30', '', 2, 1200000, 1, '2018-11-29', 'PS02990'),
(14, 3, 21, '2018-11-30', '', 3, 1800000, 1, '2018-11-29', 'PS02989'),
(15, 16, 21, '2018-11-30', '', 5, 3100000, 1, '2018-11-29', 'PS02972'),
(16, 18, 23, '2018-11-30', '', 2, 400000, 1, '2018-11-28', 'PS02845');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tiket_pesawat`
--

CREATE TABLE `tb_tiket_pesawat` (
  `id` int(11) NOT NULL,
  `id_pesawat` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_keberangkatan` date NOT NULL,
  `kode_booking` varchar(25) NOT NULL,
  `jumlah_tiket` int(11) NOT NULL,
  `harga_total` float NOT NULL,
  `bayar` tinyint(1) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `kode_transaksi` varchar(50) NOT NULL,
  `penerbangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tiket_pesawat`
--

INSERT INTO `tb_tiket_pesawat` (`id`, `id_pesawat`, `id_user`, `tgl_keberangkatan`, `kode_booking`, `jumlah_tiket`, `harga_total`, `bayar`, `tgl_pemesanan`, `kode_transaksi`, `penerbangan`) VALUES
(8, 27, 11, '2018-10-31', '', 1, 800000, 1, '2018-10-30', 'PS03082', 2),
(9, 27, 11, '2018-10-31', '', 1, 800000, 1, '2018-10-30', 'PS03075', 2),
(10, 18, 14, '2018-10-31', '', 1, 1600000, 1, '2018-10-30', 'PS03087', 2),
(11, 18, 14, '2018-10-31', '', 1, 1600000, 1, '2018-10-30', 'PS03038', 2),
(12, 18, 15, '2018-11-01', '', 1, 800000, 1, '2018-10-30', 'PS03075', 1),
(13, 21, 17, '2018-10-31', '', 1, 600000, 1, '2018-10-30', 'PS03013', 1),
(15, 34, 23, '2018-11-29', '', 1, 500000, 1, '2018-11-28', 'PS02826', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `alamat` text,
  `password` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `hak_akses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `email`, `username`, `nama_lengkap`, `no_telp`, `no_ktp`, `alamat`, `password`, `status`, `hak_akses`) VALUES
(7, 'adminreni@gmail.com', 'admin', NULL, NULL, '', NULL, '21232f297a57a5a743894a0e4a801fc3', 1, 'admin'),
(14, 'anangnov99@gmail.com', 'anang', 'anang novriadi', '08572367', '', 'mojokerto', 'e9e3dfd549e73163b4c4e2b3f1f9f897', 1, 'user'),
(18, 'abdullah.smeer15@gmail.com', 'abdullah15', 'hardwell01', '08113322877', '', 'gresik', '827ccb0eea8a706c4c34a16891f84e7b', 1, 'user'),
(21, 'ledrickhenry212bny@gmail.com', 'ledrick', 'ledrick ', '081235666240', '', 'jl.pesapen ', 'e10adc3949ba59abbe56e057f20f883e', 1, 'user'),
(23, 'anangnov99@gmail.com', 'anang', 'Anang Novriadi', '085236694759', '', 'Mojokerto\r\nSurabaya', 'e10adc3949ba59abbe56e057f20f883e', 1, 'user'),
(24, 'rofiq@gmail.com', 'rofiq', 'roqip abdullah', '08788787', '7876172636', 'Surabaya', 'e10adc3949ba59abbe56e057f20f883e', 1, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_cms_alamat`
--
ALTER TABLE `tb_cms_alamat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_cms_pembayaran`
--
ALTER TABLE `tb_cms_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_cms_pengaturan`
--
ALTER TABLE `tb_cms_pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kapal`
--
ALTER TABLE `tb_kapal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_komplain_masukan`
--
ALTER TABLE `tb_komplain_masukan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesawat`
--
ALTER TABLE `tb_pesawat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tiket_kapal`
--
ALTER TABLE `tb_tiket_kapal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tiket_pesawat`
--
ALTER TABLE `tb_tiket_pesawat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_cms_alamat`
--
ALTER TABLE `tb_cms_alamat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_cms_pembayaran`
--
ALTER TABLE `tb_cms_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_cms_pengaturan`
--
ALTER TABLE `tb_cms_pengaturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kapal`
--
ALTER TABLE `tb_kapal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_komplain_masukan`
--
ALTER TABLE `tb_komplain_masukan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_pesawat`
--
ALTER TABLE `tb_pesawat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tb_tiket_kapal`
--
ALTER TABLE `tb_tiket_kapal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_tiket_pesawat`
--
ALTER TABLE `tb_tiket_pesawat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
