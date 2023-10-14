-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Okt 2023 pada 10.55
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'b59c67bf196a4758191e42f76670ceba');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ds_mobil`
--

CREATE TABLE `ds_mobil` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `tglwkt_sewa` datetime DEFAULT NULL,
  `alamat_jemput` varchar(255) DEFAULT NULL,
  `paket` int(11) DEFAULT NULL,
  `jmobil` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ds_mobil`
--

INSERT INTO `ds_mobil` (`id`, `nama`, `alamat`, `telp`, `tglwkt_sewa`, `alamat_jemput`, `paket`, `jmobil`) VALUES
(1, 'kenzo', 'jaten', '089672284196', '2023-10-11 12:30:20', 'jepang', 485000, 'Xenia'),
(2, 'fat', 'Mojogedang', '089672284196', '2023-10-14 15:39:32', 'pokoh', 760000, 'Rush');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ds_motor`
--

CREATE TABLE `ds_motor` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `tglwkt_sewa` datetime NOT NULL DEFAULT current_timestamp(),
  `alamat_jemput` varchar(255) NOT NULL,
  `paket` int(11) DEFAULT NULL,
  `jmotor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ds_motor`
--

INSERT INTO `ds_motor` (`id`, `nama`, `alamat`, `telp`, `tglwkt_sewa`, `alamat_jemput`, `paket`, `jmotor`) VALUES
(1, 'kenzo', 'jaten', '089672284196', '2023-10-09 09:56:16', 'mjgd', 61000, 'PCX'),
(3, 'fat', 'Mojogedang', '089672284196', '2023-10-14 15:38:12', 'pokoh', 61000, 'Aerox');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ds_privatecharter`
--

CREATE TABLE `ds_privatecharter` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `tglwkt_sewa` datetime DEFAULT NULL,
  `alamat_jemput` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `rute` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ds_privatecharter`
--

INSERT INTO `ds_privatecharter` (`id`, `nama`, `alamat`, `telp`, `tglwkt_sewa`, `alamat_jemput`, `harga`, `rute`) VALUES
(16, 'nisa', 'mjgd', '083836772581', '2023-10-11 13:06:31', 'Mojogedang', 650000, 'Solo - Muntilan'),
(17, 'fat', 'Mojogedang', '089672284196', '2023-10-14 15:40:46', 'pokoh', 600000, 'Solo - Klaten.Kabupaten');

-- --------------------------------------------------------

--
-- Struktur dari tabel `judul_pariwisata`
--

CREATE TABLE `judul_pariwisata` (
  `id_pariwisata` int(11) NOT NULL,
  `rute` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `privatecharter`
--

CREATE TABLE `privatecharter` (
  `id` int(11) NOT NULL,
  `rute` varchar(100) NOT NULL,
  `sheat` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `privatecharter`
--

INSERT INTO `privatecharter` (`id`, `rute`, `sheat`, `harga`) VALUES
(2, 'Solo - Tawangmangu', '1 - 5 ', 700000),
(3, 'Solo - Wonogiri.Kabupaten', '1 - 5 ', 700000),
(4, 'Solo - Klaten.Kabupaten', '1 - 5', 600000),
(5, 'Solo - Boyolali.Kabupaten', '1 - 5', 600000),
(7, 'Solo -Semarang.Kabupaten (Non Tol)', '1 - 5', 800000),
(8, 'Solo - Purwodadi.Kabupaten', '1 - 5', 700000),
(9, 'Solo - Salatiga.Kabupaten', '1 - 5', 600000),
(10, 'Solo - Kudus.Kabupaten (Non Tol)', '1 - 5', 800000),
(12, 'Solo - Jepara.Kabupaten (Non - Tol)', '1 - 5', 900000),
(13, 'Solo - Pati.Kabupaten (Non Tol)', '1 - 5', 800000),
(14, 'Solo -Blora.Kabupaten (Non Tol)', '1 - 5', 850000),
(15, 'Solo - Cepu.Kabupaten (Non Tol)', '1 - 5 ', 900000),
(16, 'Solo - Ngawi.Kabupaten (Non Tol)', '1 - 5', 500000),
(17, 'Solo - Madiun.Kabupaten (Non Tol)', '1 - 5', 650000),
(18, 'Solo - Ponorogo.Kabupaten (Non Tol)', '1 - 5', 750000),
(19, 'Solo - Pacitan.Kabupaten (Non Tol)', '1 - 5', 700000),
(20, 'Solo - Wonosari.Kabupaten', '1 - 5', 450000),
(21, 'Solo - JOGJA.Kota', '1 - 5', 800000),
(22, 'Solo - Bantul.Kabupaten', '1 - 5', 900000),
(23, 'Solo - Sleman.Kabupaten', '1 - 5', 900000),
(24, 'Solo - Kulonprogo.Kabupaten', '1 - 5', 900000),
(25, 'Solo - Purworejo.Kabupaten', '1 - 5', 950000),
(26, 'Solo - Kutoarjo.Kabupaten', '1 - 5', 950000),
(27, 'Solo - Kebumen.Kabupaten (Non Tol)', '1 - 5', 1100000),
(28, 'Solo - Purwokerto.Kabupaten (Non Tol)', '1 - 5', 1900000),
(29, 'Solo - Cilacap.Kabupaten (Non Tol)', '1 - 5', 1700000),
(30, 'Solo - Purbalingga.Kabupaten (Non Tol)', '1 - 5', 1800000),
(31, 'Solo - Banjarnegara.Kabupaten (Non Tol)', '1 - 5', 1100000),
(32, 'Solo - Wonosobo.Kota', '1 - 5', 850000),
(33, 'Solo - Temanggung', '1 - 5', 700000),
(34, 'Solo - Parakan', '1 - 5', 750000),
(35, 'Solo - Magelang.kota', '1 - 5', 650000),
(36, 'Solo - Muntilan', '1 - 5', 650000),
(37, 'Solo - Ambarawa', '1 - 5', 650000),
(38, 'Solo - Kendal', '1 - 5', 900000),
(39, 'Solo - Wleri.Kabupaten (Non Tol)', '1 - 5', 950000),
(40, 'Solo -Pekalongan.Kabupaten', '1 - 5', 1100000),
(41, 'Solo -Pekalongan.Kabupaten', '1 - 5', 1100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `s_mobil`
--

CREATE TABLE `s_mobil` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `paket1` int(11) NOT NULL,
  `paket2` int(11) NOT NULL,
  `paket3` int(11) NOT NULL,
  `paket4` int(11) NOT NULL,
  `paket5` int(11) DEFAULT NULL,
  `paket6` int(11) DEFAULT NULL,
  `paket7` int(11) DEFAULT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `s_mobil`
--

INSERT INTO `s_mobil` (`id`, `judul`, `paket1`, `paket2`, `paket3`, `paket4`, `paket5`, `paket6`, `paket7`, `foto`) VALUES
(3, 'Pajero Sport', 280000, 335000, 485000, 550000, 655000, 760000, 1190000, '20230921143815.jpg'),
(4, 'Xenia', 280000, 335000, 485000, 550000, 655000, 760000, 1190000, '20230918075005.jpg'),
(5, 'Rush', 280000, 335000, 485000, 550000, 655000, 760000, 1190000, '20230918074935.jpg'),
(6, 'Brio', 280000, 335000, 485000, 550000, 655000, 760000, 1190000, '20230918074249.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `s_motor`
--

CREATE TABLE `s_motor` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `kelengkapan` varchar(255) NOT NULL,
  `paket1` int(11) NOT NULL,
  `paket2` int(11) DEFAULT NULL,
  `paket3` int(11) DEFAULT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `s_motor`
--

INSERT INTO `s_motor` (`id`, `judul`, `kelengkapan`, `paket1`, `paket2`, `paket3`, `foto`) VALUES
(1, 'Aerox', '2 Helm SNI, Jas Hujan, BBM', 61000, 121000, 181000, '20230918140339.jpg'),
(2, 'Vario 150', '2 Helm SNI, Jas Hujan, BBM', 61000, 121000, 181000, '20230918140254.jpg'),
(15, 'N-Max', '2 Helm SNI, Jas Hujan, BBM', 61000, 121000, 181000, '20230918140636.jpg'),
(16, 'PCX', '2 Helm SNI, Jas Hujan, BBM', 61000, 121000, 181000, '20230918075741.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `ds_mobil`
--
ALTER TABLE `ds_mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ds_motor`
--
ALTER TABLE `ds_motor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ds_privatecharter`
--
ALTER TABLE `ds_privatecharter`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `judul_pariwisata`
--
ALTER TABLE `judul_pariwisata`
  ADD PRIMARY KEY (`id_pariwisata`);

--
-- Indeks untuk tabel `privatecharter`
--
ALTER TABLE `privatecharter`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `s_mobil`
--
ALTER TABLE `s_mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `s_motor`
--
ALTER TABLE `s_motor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `ds_mobil`
--
ALTER TABLE `ds_mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ds_motor`
--
ALTER TABLE `ds_motor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `ds_privatecharter`
--
ALTER TABLE `ds_privatecharter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `judul_pariwisata`
--
ALTER TABLE `judul_pariwisata`
  MODIFY `id_pariwisata` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `privatecharter`
--
ALTER TABLE `privatecharter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `s_mobil`
--
ALTER TABLE `s_mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `s_motor`
--
ALTER TABLE `s_motor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
