-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Nov 2022 pada 15.32
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_madurajaya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kdbarang` varchar(10) NOT NULL,
  `nmbarang` varchar(50) DEFAULT NULL,
  `stok_mn` int(11) DEFAULT NULL,
  `jenis_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kdbarang`, `nmbarang`, `stok_mn`, `jenis_id`) VALUES
('CAW0001', '213', 12312, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id` varchar(10) NOT NULL,
  `nm_cust` varchar(30) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id`, `nm_cust`, `telp`, `alamat`) VALUES
('CST0001', 'arik', '082122156968', 'Cisereh'),
('CST0002', 'arik1231', '082122156968', 'Brazil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga`
--

CREATE TABLE `harga` (
  `id` int(11) NOT NULL,
  `kdbarang` varchar(10) DEFAULT NULL,
  `supplier_id` varchar(10) DEFAULT NULL,
  `harga_beli` int(11) DEFAULT NULL,
  `harga_jual` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id` varchar(10) NOT NULL,
  `jenis` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id`, `jenis`) VALUES
('JN0001', 'Minuman'),
('JN0002', 'Makanan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id` varchar(10) NOT NULL,
  `nm_supp` varchar(30) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id`, `nm_supp`, `telp`, `alamat`) VALUES
('SPP0001', 'Erwin', '2424242', 'h');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_d`
--

CREATE TABLE `transaksi_d` (
  `id` int(11) NOT NULL,
  `header_id` varchar(10) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `kdbarang` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi_d`
--

INSERT INTO `transaksi_d` (`id`, `header_id`, `qty`, `harga`, `total`, `kdbarang`) VALUES
(1, 'TR0002', 14, 3000, 42000, 'BR0001'),
(2, 'TR0002', 100, 1500, 150000, 'BR0002'),
(4, 'TR0005', 3, 100000, 300000, 'BR0002'),
(5, 'TR0006', 12, 100000, 1200000, 'BR0002'),
(7, 'TR0004', 10, 14000, 140000, 'BR0002');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_h`
--

CREATE TABLE `transaksi_h` (
  `id_trans` varchar(10) NOT NULL,
  `periode` varchar(6) NOT NULL,
  `jns_trans` char(4) DEFAULT NULL,
  `tgl_trans` date DEFAULT NULL,
  `ref_id` varchar(10) DEFAULT NULL,
  `crtby` varchar(30) DEFAULT NULL,
  `supplier_id` varchar(30) DEFAULT NULL,
  `customer_id` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi_h`
--

INSERT INTO `transaksi_h` (`id_trans`, `periode`, `jns_trans`, `tgl_trans`, `ref_id`, `crtby`, `supplier_id`, `customer_id`) VALUES
('TR0002', '202112', 'in', '2021-12-08', 'D1111', NULL, 'SPP0001', '0'),
('TR0003', '202201', 'out', '2022-01-06', 'D111122', NULL, 'SPP0001', NULL),
('TR0004', '202201', 'out', '2022-01-05', 'C111122', NULL, '0', 'CST0002'),
('TR0005', '202201', 'in', '2022-01-05', 'D111122', NULL, 'SPP0001', '0'),
('TR0006', '202201', 'in', '2022-01-13', 'D1111', NULL, 'SPP0001', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `status`, `level`) VALUES
(1, 'ep', '123', 'Erwin', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kdbarang`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi_d`
--
ALTER TABLE `transaksi_d`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi_h`
--
ALTER TABLE `transaksi_h`
  ADD PRIMARY KEY (`id_trans`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `harga`
--
ALTER TABLE `harga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi_d`
--
ALTER TABLE `transaksi_d`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
