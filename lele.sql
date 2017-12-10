-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 Nov 2017 pada 16.58
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lele`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ahp`
--

CREATE TABLE `ahp` (
  `id_ahp` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_cuaca` int(11) NOT NULL,
  `id_pakan` int(11) NOT NULL,
  `id_ukuran` int(11) NOT NULL,
  `id_waktu` int(11) NOT NULL,
  `modal` double NOT NULL,
  `beratlele` double NOT NULL,
  `totalberat` double NOT NULL,
  `totalpemasukan` double NOT NULL,
  `laba` double NOT NULL,
  `tanggal` date NOT NULL,
  `nilaiahp` double NOT NULL,
  `periode` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ahp`
--

INSERT INTO `ahp` (`id_ahp`, `id_user`, `id_cuaca`, `id_pakan`, `id_ukuran`, `id_waktu`, `modal`, `beratlele`, `totalberat`, `totalpemasukan`, `laba`, `tanggal`, `nilaiahp`, `periode`) VALUES
(1, 2, 5, 3, 2, 5, 960000, 95, 85.64535, 1284680.25, 324680.25, '2017-10-06', 0.3, 1),
(2, 2, 4, 5, 2, 3, 1010000, 100, 97.308, 1459620, 449620, '2017-10-30', 0, 1),
(3, 2, 4, 5, 2, 3, 1010000, 100, 97.308, 1459620, 449620, '2017-10-30', 0.119, 1),
(5, 3, 4, 5, 1, 2, 1000000, 95, 102.95625, 1235475, 235475, '2017-10-31', 0.1067, 1),
(8, 3, 5, 5, 4, 2, 1030000, 95, 123.5475, 1853212.5, 823212.5, '2017-10-31', 0.176, 1),
(9, 3, 4, 5, 4, 2, 1030000, 95, 116.68375, 1166837.5, 136837.5, '2017-11-09', 0.1628, 1),
(11, 2, 4, 4, 3, 5, 1010000, 100, 111.5625, 1227187.5, 217187.5, '2017-11-09', 0.1238, 2),
(12, 3, 3, 5, 2, 3, 1010000, 100, 91.584, 1373760, 363760, '2017-11-10', 0.108, 1),
(13, 2, 1, 1, 1, 1, 900000, 65, 61.425, 614250, -285750, '2017-11-10', 0.034, 1),
(15, 3, 3, 3, 3, 2, 970000, 80, 102, 1020000, 50000, '2017-11-10', 0.0792, 2),
(17, 2, 2, 3, 3, 2, 970000, 80, 95.625, 1434375, 464375, '2017-11-14', 0.0748, 2),
(18, 2, 2, 2, 2, 2, 930000, 75, 68.4196875, 1026295.3125, 96295.3125, '2017-11-14', 0.0544, 1),
(19, 5, 4, 2, 3, 3, 940000, 80, 102, 1020000, 80000, '2017-11-16', 0.0854, 1),
(20, 5, 3, 4, 3, 3, 1010000, 90, 108, 1296000, 286000, '2017-11-16', 0.0996, 1),
(21, 7, 1, 5, 2, 5, 1010000, 110, 77.1309, 771309, -238691, '2017-11-17', 0.1135, 1),
(22, 6, 4, 3, 2, 5, 960000, 95, 80.887275, 808872.75, -151127.25, '2017-11-21', 0.0926, 1),
(23, 3, 3, 2, 4, 4, 950000, 85, 86.7, 1040400, 90400, '2017-11-24', 0.1134, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(20) NOT NULL,
  `nilai_kriteria` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `nilai_kriteria`) VALUES
(1, 'k1,k1', 1),
(2, 'k1,k2', 2),
(3, 'k1,k3', 3),
(4, 'k1,k4', 5),
(5, 'k2,k1', 0.5),
(6, 'k2,k2', 1),
(7, 'k2,k3', 2),
(8, 'k2,k4', 3),
(9, 'k3,k1', 0.33),
(10, 'k3,k2', 0.5),
(11, 'k3,k3', 1),
(12, 'k3,k4', 2),
(13, 'k4,k1', 0.2),
(14, 'k4,k2', 0.33),
(15, 'k4,k3', 0.5),
(16, 'k4,k4', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `k_cuaca`
--

CREATE TABLE `k_cuaca` (
  `id_cuaca` int(11) NOT NULL,
  `nama_cuaca` varchar(30) NOT NULL,
  `perkiraan_mati` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `k_cuaca`
--

INSERT INTO `k_cuaca` (`id_cuaca`, `nama_cuaca`, `perkiraan_mati`) VALUES
(1, 'Kondisi cuaca sangat sering be', 0.3),
(2, 'Kondisi cuaca sering berubah', 0.25),
(3, 'Kondisi cuaca kurang stabil', 0.2),
(4, 'Kondisi cuaca stabil', 0.15),
(5, 'Kondisi cuaca sangat stabil', 0.1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `k_pakan`
--

CREATE TABLE `k_pakan` (
  `id_pakan` int(11) NOT NULL,
  `nama_pakan` varchar(20) NOT NULL,
  `harga_pakan` double NOT NULL,
  `berat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `k_pakan`
--

INSERT INTO `k_pakan` (`id_pakan`, `nama_pakan`, `harga_pakan`, `berat`) VALUES
(1, 'Pelet', 800000, 35),
(2, 'Kuning Telur', 820000, 40),
(3, 'PF-100', 850000, 45),
(4, '781-1', 890000, 50),
(5, '781-2', 900000, 60);

-- --------------------------------------------------------

--
-- Struktur dari tabel `k_ukuran`
--

CREATE TABLE `k_ukuran` (
  `id_ukuran` int(11) NOT NULL,
  `nama_ukuran` varchar(20) NOT NULL,
  `harga_bibit` double NOT NULL,
  `jumlah_bibit` int(11) NOT NULL,
  `perkiraan_mati` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `k_ukuran`
--

INSERT INTO `k_ukuran` (`id_ukuran`, `nama_ukuran`, `harga_bibit`, `jumlah_bibit`, `perkiraan_mati`) VALUES
(1, '>1cm', 100000, 3000, 0.5),
(2, '3-2cm', 110000, 2700, 0.47),
(3, '4-5cm', 120000, 2500, 0.25),
(4, '6-7cm', 130000, 2000, 0.15),
(5, '8-9cm', 150000, 1500, 0.1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `k_waktu`
--

CREATE TABLE `k_waktu` (
  `id_waktu` int(11) NOT NULL,
  `nama_waktu` varchar(20) NOT NULL,
  `perkiraan_berat` int(11) NOT NULL,
  `perkiraan_mati` double NOT NULL,
  `waktu` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `k_waktu`
--

INSERT INTO `k_waktu` (`id_waktu`, `nama_waktu`, `perkiraan_berat`, `perkiraan_mati`, `waktu`) VALUES
(1, '70hari', 30, 0.1, 70),
(2, '80hari', 35, 0.15, 80),
(3, '90hari', 40, 0.2, 90),
(4, '100hari', 45, 0.25, 100),
(5, '110hari', 50, 0.3, 110);

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id_level` tinyint(4) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id_level`, `jabatan`) VALUES
(0, 'admin'),
(1, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `pesan` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id_user`, `pesan`, `status`) VALUES
(1, 2, 'Ukuran	:	3-2 CM\r\nPakan	:	781-2\r\nWaktu	:	110 Hari\r\nCuaca	:	Kondisi cuaca sangat sering berubah-ubahUkuran	:	3-2 CM\r\nPakan	:	781-2\r\nWaktu	:	110 Hari\r\nCuaca	:	Kondisi cuaca sangat sering berubah-ubahUkuran	:	3-2 CM\r\nPakan	:	781-2\r\nWaktu	:	110 Hari\r\nCuaca	:	Kondisi cuaca sangat sering berubah-ubahUkuran	:	3-2 CM\r\nPakan	:	781-2\r\nWaktu	:	110 Hari\r\nCuaca	:	Kondisi cuaca sangat sering berubah-ubahUkuran	:	3-2 CM\r\nPakan	:	781-2\r\nWaktu	:	110 Hari\r\nCuaca	:	Kondisi cuaca sangat sering berubah-ubah', 1),
(2, 2, 'Ukuran	:	3-2 CM\r\nPakan	:	781-2\r\nWaktu	:	110 Hari\r\nCuaca	:	Kondisi cuaca sangat sering berubah-ubahUkuran	:	3-2 CM\r\nPakan	:	781-2\r\nWaktu	:	110 Hari\r\nCuaca	:	Kondisi cuaca sangat sering berubah-ubahUkuran	:	3-2 CM\r\nPakan	:	781-2\r\nWaktu	:	110 Hari\r\nCuaca	:	Kondisi cuaca sangat sering berubah-ubahUkuran	:	3-2 CM\r\nPakan	:	781-2\r\nWaktu	:	110 Hari\r\nCuaca	:	Kondisi cuaca sangat sering berubah-ubah', 1),
(3, 2, '\r\nUkuran	:	3-2 CM\r\nPakan	:	781-2\r\nWaktu	:	110 Hari\r\nCuaca	:	Kondisi cuaca sangat sering berubah-ubah\r\n', 1),
(4, 2, 'Ukuran	:	3-2 CM\r\nPakan	:	781-2\r\nWaktu	:	110 Hari\r\nCuaca	:	Kondisi cuaca sangat sering berubah-ubah', 1),
(5, 2, 'aaaa', 1),
(6, 2, 'aaaa', 0),
(7, 2, 'asdasd', 0),
(8, 2, 'Ukuran	:	3-2 CM\r\nPakan	:	781-2\r\nWaktu	:	110 Hari\r\nCuaca	:	Kondisi cuaca sangat sering berubah-ubah\r\n\r\nUkuran	:	3-2 CM\r\nPakan	:	781-2\r\nWaktu	:	110 Hari\r\nCuaca	:	Kondisi cuaca sangat sering berubah-ubah\r\n\r\nUkuran	:	3-2 CM\r\nPakan	:	781-2\r\nWaktu	:	110 Hari\r\nCuaca	:	Kondisi cuaca sangat sering berubah-ubah\r\n', 0),
(9, 2, 'aaaaaaaaa', 0),
(10, 2, 'Ukuran	:	3-2 CM\r\nPakan	:	781-2\r\nWaktu	:	110 Hari\r\nCuaca	:	Kondisi cuaca sangat sering berubah-ubah\r\n', 0),
(11, 4, 'aaaasaasasasa', 0),
(12, 4, 'assasasasa', 0),
(13, 7, 'Ukuran	:	3-2 CM\r\nPakan	:	781-2\r\nWaktu	:	110 Hari\r\nCuaca	:	Kondisi cuaca sangat sering berubah-ubah\r\n', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkriteria`
--

CREATE TABLE `subkriteria` (
  `id_subkriteria` int(11) NOT NULL,
  `nama_subkriteria` varchar(20) NOT NULL,
  `nilai_subkriteria` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `subkriteria`
--

INSERT INTO `subkriteria` (`id_subkriteria`, `nama_subkriteria`, `nilai_subkriteria`) VALUES
(1, 'k1,k1', 1),
(2, 'k1,k2', 2),
(3, 'k1,k3', 3),
(4, 'k1,k4', 4),
(5, 'k1,k5', 5),
(6, 'k2,k1', 0.5),
(7, 'k2,k2', 1),
(8, 'k2,k3', 2),
(9, 'k2,k4', 3),
(10, 'k2,k5', 4),
(11, 'k3,k1', 0.33),
(12, 'k3,k2', 0.5),
(13, 'k3.k3', 1),
(14, 'k3,k4', 2),
(15, 'k3,k5', 3),
(16, 'k4,k1', 0.25),
(17, 'k4,k2', 0.33),
(18, 'k4,k3', 0.5),
(19, 'k4,k4', 1),
(20, 'k4,k5', 2),
(21, 'k5,k1', 0.2),
(22, 'k5,k2', 0.25),
(23, 'k5,k3', 0.33),
(24, 'k5,k4', 0.5),
(25, 'k5,k5', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `status_transaksi`) VALUES
(2, 3, 1),
(3, 2, 1),
(4, 2, 1),
(5, 4, 1),
(6, 2, 1),
(7, 4, 1),
(8, 4, 1),
(9, 7, 1),
(10, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Alamat` text NOT NULL,
  `hp` varchar(20) NOT NULL,
  `level` tinyint(4) NOT NULL,
  `status_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `Alamat`, `hp`, `level`, `status_pembayaran`) VALUES
(1, 'admin', 'admin', 'Jember', '098754', 0, 3),
(2, 'sekar', 'sekar', 'Jember', '09836251973', 1, 1),
(3, 'hasina', 'hasina', 'jember', '0992798623478389', 1, 1),
(4, 'juven', 'juven', 'jember', '01182283628', 1, 1),
(5, 'sandi', 'sandi', 'Jember', '098262519', 1, 0),
(6, 'kresna', 'kresna', 'jember', '09182736', 1, 1),
(7, 'deta', 'deta', 'jember', '1213213324', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ahp`
--
ALTER TABLE `ahp`
  ADD PRIMARY KEY (`id_ahp`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_cuaca` (`id_cuaca`),
  ADD KEY `id_cuaca_2` (`id_cuaca`),
  ADD KEY `id_pakan` (`id_pakan`),
  ADD KEY `id_ukuran` (`id_ukuran`),
  ADD KEY `id_waktu` (`id_waktu`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `k_cuaca`
--
ALTER TABLE `k_cuaca`
  ADD PRIMARY KEY (`id_cuaca`);

--
-- Indexes for table `k_pakan`
--
ALTER TABLE `k_pakan`
  ADD PRIMARY KEY (`id_pakan`);

--
-- Indexes for table `k_ukuran`
--
ALTER TABLE `k_ukuran`
  ADD PRIMARY KEY (`id_ukuran`);

--
-- Indexes for table `k_waktu`
--
ALTER TABLE `k_waktu`
  ADD PRIMARY KEY (`id_waktu`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`id_subkriteria`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk` (`level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ahp`
--
ALTER TABLE `ahp`
  MODIFY `id_ahp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `k_cuaca`
--
ALTER TABLE `k_cuaca`
  MODIFY `id_cuaca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `k_pakan`
--
ALTER TABLE `k_pakan`
  MODIFY `id_pakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `k_ukuran`
--
ALTER TABLE `k_ukuran`
  MODIFY `id_ukuran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `k_waktu`
--
ALTER TABLE `k_waktu`
  MODIFY `id_waktu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id_subkriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `ahp`
--
ALTER TABLE `ahp`
  ADD CONSTRAINT `ahp_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ahp_ibfk_2` FOREIGN KEY (`id_ukuran`) REFERENCES `k_ukuran` (`id_ukuran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ahp_ibfk_3` FOREIGN KEY (`id_pakan`) REFERENCES `k_pakan` (`id_pakan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ahp_ibfk_4` FOREIGN KEY (`id_waktu`) REFERENCES `k_waktu` (`id_waktu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ahp_ibfk_5` FOREIGN KEY (`id_cuaca`) REFERENCES `k_cuaca` (`id_cuaca`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk` FOREIGN KEY (`level`) REFERENCES `level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
