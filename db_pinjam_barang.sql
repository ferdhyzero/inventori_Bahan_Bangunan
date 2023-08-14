-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2023 pada 14.40
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pinjam_barang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemberitahuan`
--

CREATE TABLE `pemberitahuan` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `konten` varchar(1000) NOT NULL,
  `status` enum('terima','tolak') NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pemberitahuan`
--

INSERT INTO `pemberitahuan` (`id`, `username`, `konten`, `status`, `timestamp`) VALUES
(17, 'adlubagus94', 'Permintaan Peminjaman Barang Anda Telah di Terima. 1 buah LCD. Username: adlubagus94. Silahkan ke bagian Sarpras untuk mengampil barang', 'terima', '2018-11-11 01:42:05'),
(19, 'adlubagus94', 'Permintaan Peminjaman Barang Anda Telah di Terima. 2 buah Speaker kecil. Username: adlubagus94. Silahkan ke bagian Sarpras untuk mengampil barang', 'terima', '2018-11-11 01:55:54'),
(20, 'adlubagus94', 'Permintaan Pengembalian Barang Anda Telah di Terima.  buah . Username: ', '', '2018-11-11 01:56:40'),
(21, 'usertest123', 'Permintaan Peminjaman Barang Anda Telah di Terima. 1 buah LCD. Username: usertest123. Silahkan ke bagian Sarpras untuk mengampil barang', 'terima', '2018-11-11 05:30:46'),
(22, 'usertest123', 'Permintaan Pengembalian Barang Anda Telah di Terima.  buah . Username: ', '', '2018-11-11 05:31:51'),
(23, 'Emer', 'Permintaan Peminjaman Barang Anda Telah di Terima. 3 buah LCD. Username: Emer. Silahkan ke bagian Sarpras untuk mengampil barang', 'terima', '2023-05-16 05:47:20'),
(24, 'Emer', 'Permintaan Pengembalian Barang Anda Telah di Terima.  buah . Username: ', '', '2023-05-16 05:51:10'),
(25, 'edi', 'Permintaan Peminjaman Barang Anda Telah di Terima. 2 buah genset. Username: edi. Silahkan ke bagian Sarpras untuk mengampil barang', 'terima', '2023-05-20 12:31:46'),
(26, 'edi', 'Permintaan Pengembalian Barang Anda Telah di Terima.  buah . Username: ', '', '2023-05-20 12:36:05'),
(27, 'admin', 'Permintaan Peminjaman Barang Anda Telah di Terima. 4 buah skop. Username: admin. Silahkan ke bagian Sarpras untuk mengampil barang', 'terima', '2023-06-14 12:32:46'),
(28, 'admin', 'Permintaan Pengembalian Barang Anda Telah di Terima.  buah . Username: ', '', '2023-06-14 13:17:43'),
(29, 'admin', 'Permintaan Pengembalian Barang Anda Telah di Terima.  buah . Username: ', '', '2023-06-15 17:31:51'),
(30, 'admin', 'Permintaan Pengembalian Barang Anda Telah di Terima.  buah . Username: ', '', '2023-06-15 17:32:00'),
(31, 'admin', 'Permintaan Pengembalian Barang Anda Telah di Terima.  buah . Username: ', '', '2023-06-15 17:32:15'),
(35, 'admin', 'Permintaan Peminjaman Barang Anda Telah di Terima. 1 buah genset. Username: admin. Silahkan ke bagian Sarpras untuk mengampil barang', 'terima', '2023-06-15 17:38:30'),
(36, 'admin', 'Permintaan Pengembalian Barang Anda Telah di Terima.  buah . Username: ', '', '2023-06-15 17:54:10'),
(39, 'admin', 'Permintaan Pengembalian Barang Anda Telah di Terima.  buah . Username: ', '', '2023-06-15 17:54:14'),
(47, 'admin', 'Permintaan Peminjaman Barang Anda Telah di Terima. 1 buah gurinda. Username: admin. Silahkan ke bagian Sarpras untuk mengampil barang', 'terima', '2023-06-15 18:14:38'),
(48, 'admin', 'Permintaan Peminjaman Barang Anda Telah di Terima. 2 buah gerobak. Username: admin. Silahkan ke bagian Sarpras untuk mengampil barang', 'terima', '2023-06-16 05:31:36'),
(49, 'admin', 'Permintaan Peminjaman Barang Anda Telah di Terima. 1 buah leptop. Username: admin. Silahkan ke bagian Sarpras untuk mengampil barang', 'terima', '2023-06-16 06:09:20'),
(50, 'admin', 'Permintaan Peminjaman Barang Anda Telah di Terima. 1 buah gerobak. Username: admin. Silahkan ke bagian Sarpras untuk mengampil barang', 'terima', '2023-06-16 06:09:23'),
(51, 'admin', 'Permintaan Peminjaman Barang Anda Telah di Terima. 4 buah skop. Username: admin. Silahkan ke bagian Sarpras untuk mengampil barang', 'terima', '2023-06-16 06:17:11'),
(52, 'admin', 'Permintaan Pengembalian Barang Anda Telah di Terima.  buah . Username: ', '', '2023-06-16 06:18:00'),
(53, 'admin', 'Permintaan Pengembalian Barang Anda Telah di Terima.  buah . Username: ', '', '2023-06-16 06:18:10'),
(54, 'admin', 'Permintaan Pengembalian Barang Anda Telah di Terima.  buah . Username: ', '', '2023-06-16 06:19:36'),
(55, 'admin', 'Permintaan Pengembalian Barang Anda Telah di Terima.  buah . Username: ', '', '2023-06-16 06:19:38'),
(56, 'admin', 'Permintaan Pengembalian Barang Anda Telah di Terima.  buah . Username: ', '', '2023-06-16 06:19:40'),
(57, 'admin', 'Permintaan Pengembalian Barang Anda Telah di Terima.  buah . Username: ', '', '2023-06-16 06:19:42'),
(58, 'admin', 'Permintaan Peminjaman Barang Anda Telah di Terima. 10 buah skop. Username: admin. Silahkan ke bagian Sarpras untuk mengampil barang', 'terima', '2023-06-16 07:57:00'),
(59, 'admin', 'Permintaan Pengembalian Barang Anda Telah di Terima.  buah . Username: ', '', '2023-06-16 08:26:02'),
(60, 'admin', 'Permintaan Pengembalian Barang Anda Telah di Terima.  buah . Username: ', '', '2023-06-16 08:26:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `gambar_barang` varchar(100) NOT NULL,
  `stok_barang` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id`, `nama_barang`, `gambar_barang`, `stok_barang`) VALUES
(7, 'genset', 'genset.jpg', 2),
(8, 'gerobak', 'gerobak_dorong.jpg', 5),
(9, 'skop', 'skop.jpg', 36),
(10, 'gurinda', 'gurinda.jpg', 1),
(13, 'meter rol 5m', 'meter_5m.jpg', 1),
(14, 'meter rol 50m', 'meter_50m.png', 2),
(15, 'cetok', 'cetok.jpg', 4),
(16, 'mesin cetam', 'mesin_cetam.jpg', 1),
(17, 'mesin bor', 'Mesin_Bor.jpg', 2),
(18, 'lingis', 'lingis.jpg', 2),
(19, 'cangkul', 'cangkul.jpg', 1),
(20, 'palu-palu', 'palu.jpg', 3),
(21, 'print', 'print.jpg', 2),
(22, 'leptop', 'leptop.jpg', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pinjam`
--

CREATE TABLE `tbl_pinjam` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `peminjam` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  `jml_barang` int(50) NOT NULL,
  `tgl_pinjam` varchar(50) NOT NULL,
  `tgl_kembali` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_request`
--

CREATE TABLE `tbl_request` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `peminjam` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `jml_barang` int(11) NOT NULL,
  `tgl_pinjam` varchar(50) NOT NULL,
  `tgl_kembali` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_req_kembali`
--

CREATE TABLE `tbl_req_kembali` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `peminjam` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `jml_barang` int(11) NOT NULL,
  `tgl_pinjam` varchar(50) NOT NULL,
  `tgl_kembali` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `peminjam` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  `jml_barang` int(11) NOT NULL,
  `tgl_pinjam` varchar(50) NOT NULL,
  `tgl_kembali` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id`, `nama_barang`, `peminjam`, `level`, `jml_barang`, `tgl_pinjam`, `tgl_kembali`) VALUES
(13, 'skop', 'admin', 'mahasiswa', 3, '10 Desember 2023 - 07:30 ', '10 Desember 2023 - 10:30 '),
(14, 'skop', 'admin', 'mahasiswa', 4, '10 Desember 2023 - 07:30 ', '10 Desember 2023 - 10:30 '),
(15, 'skop', 'admin', 'mahasiswa', 4, '10 Desember 2023 - 07:30 ', '10 Desember 2023 - 10:30 '),
(16, 'skop', 'admin', 'karyawan', 4, '10 Desember 2023 - 07:30 ', '10 Desember 2023 - 10:30 '),
(17, 'skop', 'admin', 'karyawan', 4, '10 Desember 2023 - 07:30 ', '10 Desember 2023 - 10:30 '),
(18, 'skop', 'admin', 'karyawan', 4, '10 Desember 2023 - 07:30 ', '10 Desember 2023 - 10:30 '),
(19, 'skop', 'admin', 'karyawan', 4, '10 Desember 2023 - 07:30 ', '10 Desember 2023 - 10:30 '),
(20, 'skop', 'admin', 'karyawan', 4, '10 Desember 2023 - 07:30 ', '10 Desember 2023 - 10:30 '),
(21, 'skop', 'admin', 'karyawan', 4, '10 Desember 2023 - 07:30 ', '10 Desember 2023 - 10:30 '),
(22, 'genset', 'admin', 'karyawan', 1, '07 Juni 2023 - 09:45 ', '07 Juni 2023 - 05:25 '),
(23, 'genset', 'admin', 'karyawan', 1, '07 Juni 2023 - 09:45 ', '07 Juni 2023 - 05:25 '),
(24, 'genset', 'admin', 'mahasiswa', 1, '09 Juni 2023 - 13:45 ', '16 Juni 2023 - 01:40 '),
(25, 'gurinda', 'admin', 'mahasiswa', 1, '07 Juni 2023 - 09:45 ', '16 Juni 2023 - 02:10 '),
(26, 'gerobak', 'admin', 'mahasiswa', 2, '02 Mei 2023 - 04:20 ', '03 Mei 2023 - 05:25 '),
(27, 'gerobak', 'admin', 'mahasiswa', 2, '02 Mei 2023 - 04:20 ', '03 Mei 2023 - 05:25 '),
(28, 'leptop', 'admin', 'mahasiswa', 1, '16 Juni 2023 - 14:07 ', '17 juni 2023 - 02:08'),
(29, 'gerobak', 'admin', 'mahasiswa', 1, '16 Juni 2023 - 14:07 ', '17 Juni 2023 - 14:30 '),
(30, 'skop', 'admin', 'mahasiswa', 2, '16 Juni 2023 - 14:07 ', '17 Juni 2023 - 14:15 '),
(31, 'skop', 'admin', 'mahasiswa', 5, '07 Juni 2023 - 07:45 ', '16 Juni 2023 - 01:40 '),
(32, 'skop', 'admin', 'mahasiswa', 5, '07 Juni 2023 - 07:45 ', '16 Juni 2023 - 01:40 ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(2, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(7, 'AHMAD FERDHY', 'ferdhy', 'dadca4469e0d6a02e147065828703ce9', '4'),
(9, 'AHMAD FERDHY', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pemberitahuan`
--
ALTER TABLE `pemberitahuan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_request`
--
ALTER TABLE `tbl_request`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_req_kembali`
--
ALTER TABLE `tbl_req_kembali`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pemberitahuan`
--
ALTER TABLE `pemberitahuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbl_request`
--
ALTER TABLE `tbl_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `tbl_req_kembali`
--
ALTER TABLE `tbl_req_kembali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
