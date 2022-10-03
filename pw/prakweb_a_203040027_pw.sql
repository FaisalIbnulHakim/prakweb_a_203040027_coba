-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Okt 2022 pada 07.59
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakweb_a_203040027_pw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(15) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `penerbit` varchar(20) NOT NULL,
  `jmlhalaman` int(25) NOT NULL,
  `harga` int(25) NOT NULL,
  `tahun` int(25) NOT NULL,
  `gambar` varchar(125) NOT NULL,
  `volume` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `penulis`, `penerbit`, `jmlhalaman`, `harga`, `tahun`, `gambar`, `volume`) VALUES
(1, 'Naruto', 'Masashi Kishimoto', 'Elex Media', 65, 40000, 2012, 'naruto.jpg', 1),
(2, 'Horimiya', 'HERO', 'Elex Media', 50, 22000, 2021, 'horimiya.jpg', 1),
(3, 'Black Clover', 'Yuki Tabata', 'Gramedia', 46, 25000, 2019, 'clover.jpg', 17),
(4, '8 Kaiju', 'Naoya Matsumoto', 'M&C', 70, 45000, 2022, 'kaiju.jpg', 1),
(5, 'Shokugeki No Souma', 'Shun Saeki', 'Elex Media', 75, 25000, 2019, 'souma.jpg', 36),
(6, 'Tensei Shitra Slime ', 'Fuse', 'Gramedia', 50, 30000, 2019, 'tensura.jpg', 8),
(7, 'Bleach', 'Tite Kubo', 'Gramedia', 40, 40000, 2014, 'bleach.jpg', 6),
(8, 'Kumo Desu ga, Nani ka', 'Tsukasa Kiryu', 'Elex Media', 60, 50000, 2021, 'kumoko.jpg', 9),
(9, 'Isekai Smarthphone', 'Patora Fuyuhara', 'M&C', 60, 50000, 2021, 'isesuma.jpg', 1),
(10, 'Shingeki No Kyojin', 'Hajime Isayama', 'Elex Media', 80, 40000, 2022, 'snk.jpg', 32),
(11, 'Spy x Family', 'Tatsuya Endo', 'Elex Media', 220, 35000, 2020, 'spy.jpg', 1),
(14, 'Tensei Kizoku no isekai', 'Yashu ', 'Elex Media', 240, 40000, 2020, '6330005731213.png', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
