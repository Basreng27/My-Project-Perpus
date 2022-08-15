-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 21 Bulan Mei 2022 pada 01.35
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` int(1) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `batas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `kelas`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `batas`) VALUES
(123, 'kaak', 3, 'akka', 'akak', '1999-12-21', 0),
(321, 'kaka', 0, 'manado', 'smd', '2000-03-08', 0),
(1234, 'aku', 3, 'kapan', 'dimana', '2003-03-05', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `kelas` varchar(4) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `stok` int(10) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `isbn`, `judul`, `pengarang`, `penerbit`, `kategori`, `kelas`, `tahun`, `stok`, `jumlah`) VALUES
(16, '111', 'aku', 'dia', 'siapa', 'PKN atau Sejarah', '4', '2020', 13, 43),
(18, '987', 'sejarah indo', 'aku', 'dia', 'Bahasa Indonesia', '4', '2019', 0, 89),
(19, '54321', 'cinta ibu', 'aku', 'mereka', 'Umum', '6', '2019', 225, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `id_peminjam` varchar(50) NOT NULL,
  `nama_peminjam` varchar(50) NOT NULL,
  `isbn_buku` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `date_pinjam` date NOT NULL,
  `date_kembali` date NOT NULL,
  `lama_keterlambatan` int(11) NOT NULL,
  `denda` int(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_peminjam`, `nama_peminjam`, `isbn_buku`, `judul`, `date_pinjam`, `date_kembali`, `lama_keterlambatan`, `denda`, `status`) VALUES
(39, '1234', 'aku', '54321', 'cinta ibu', '2021-03-26', '2021-03-29', 0, 0, 'dipinjam'),
(41, '123', 'kaak', '54321', 'cinta ibu', '2021-03-26', '2023-02-04', 0, 0, ''),
(42, '123', 'kaak', '54321', 'cinta ibu', '2021-03-26', '2021-02-04', 22, 198, 'dikembalikan'),
(43, '123', 'kaak', '54321', 'cinta ibu', '2021-03-26', '2021-03-29', 0, 0, ''),
(44, '1234', 'aku', '54321', 'cinta ibu', '2021-03-26', '2021-03-29', 0, 0, 'dikembalikan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `isbn` (`isbn`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1235;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
