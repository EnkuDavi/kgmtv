-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Sep 2020 pada 11.55
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kgmtv`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `judul_banner` varchar(48) NOT NULL,
  `deskripsi` varchar(128) DEFAULT NULL,
  `sumber` varchar(64) NOT NULL,
  `kategori` enum('Iklan','Promo','Portfolio') NOT NULL,
  `layout` varchar(128) NOT NULL,
  `status` enum('Aktif','Non-aktif') NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `banner`
--

INSERT INTO `banner` (`banner_id`, `judul_banner`, `deskripsi`, `sumber`, `kategori`, `layout`, `status`, `created`) VALUES
(4, 'Sunda karawang tandang', 'Karawang Golden Memories', 'Karawang Golden Memories', 'Portfolio', 'Layout-e3a5452964.jpg', 'Aktif', '2020-09-05 16:54:58'),
(5, 'Tembang Lawas', 'Karawang Golden Memories', 'KGM', 'Portfolio', 'Layout-fbb2a39844.jpg', 'Aktif', '2020-09-05 16:56:13'),
(6, 'Goyang Karawang Tandang', 'Karawang Golden Memories', 'KGM', 'Portfolio', 'Layout-c55f4201dc.jpg', 'Aktif', '2020-09-05 17:09:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(128) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `level`) VALUES
(1, 'adminkgmtv', '270811eab254250eb03de000a6bdbc104af406b6', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `deskripsi` varchar(128) NOT NULL,
  `kategori` enum('terbaru','populer','live') NOT NULL,
  `url` varchar(128) NOT NULL,
  `status` enum('publish','private') NOT NULL DEFAULT 'publish',
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `video`
--

INSERT INTO `video` (`video_id`, `judul`, `deskripsi`, `kategori`, `url`, `status`, `created`) VALUES
(1, 'Terimakasih kembali kgm tv', 'ucapan terimakasih kepada kgm tv', 'terbaru', 'https://www.youtube.com/embed/g8sOJGSm0VI', 'publish', '2020-08-22 00:00:00'),
(2, 'Kesan dan pesan', 'Kesan dan pesan peserta', 'terbaru', 'https://www.youtube.com/embed/K8wqxxL3ZLE', 'publish', '2020-08-22 00:00:00'),
(3, 'Goyang Karawang Tandang', 'Acara Goyang Karawang Tandang', 'terbaru', 'https://www.youtube.com/embed/B73Le2cjCyc', 'publish', '2020-08-23 00:00:00'),
(4, 'Tembang lagu lawas dan talkshow', 'Karawang Golden Memories', 'populer', 'https://www.youtube.com/embed/AwI7GxCb6Oc', 'publish', '2020-08-30 00:00:00'),
(5, 'Tembang Lawas 2', 'Karawang Golden Memories', 'populer', 'https://www.youtube.com/embed/2fIgsa6N-18', 'publish', '2020-08-29 00:00:00'),
(6, 'Tembang Lawas Eps 1', 'Karawang Golden Memories', 'populer', 'https://www.youtube.com/embed/k_uceOD8eHU', 'publish', '2020-08-29 00:00:00'),
(7, 'Tembang Lawas Eps 3', 'Karawang Golden Memories', 'populer', 'https://www.youtube.com/embed/2fIgsa6N-18', 'publish', '2020-08-29 00:00:00'),
(9, 'Acara Keluarga Karawang Golden Memories', 'Karawang Golden Memories', 'populer', 'https://www.youtube.com/embed/xfQxfpeqZ_U', 'publish', '2020-08-25 00:00:00'),
(10, 'Reza - Sepanjang Lorong Gelap', 'Karawang Golden Memories', 'terbaru', 'https://www.youtube.com/embed/zHv7XHIbhrU', 'publish', '2020-08-31 00:00:00'),
(11, 'Bunda Susi - Hilang Permata Ku', 'Karawang Golden Memories', 'terbaru', 'https://www.youtube.com/embed/nwblYNAeRE0', 'publish', '2020-08-31 00:00:00'),
(12, 'Direktur KGMMI &quot;Ms Riska Apriani&quot;', 'Karawang Golden Memories', 'terbaru', 'https://www.youtube.com/embed/-cRUgqXP5L4', 'publish', '2020-09-03 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
