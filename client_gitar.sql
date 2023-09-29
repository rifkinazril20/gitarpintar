-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Sep 2023 pada 15.46
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `client_gitar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(99) DEFAULT NULL,
  `username` varchar(99) DEFAULT NULL,
  `password` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Admin', 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bagian_gitar`
--

CREATE TABLE `bagian_gitar` (
  `id` int(11) NOT NULL,
  `bagian` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bagian_gitar`
--

INSERT INTO `bagian_gitar` (`id`, `bagian`) VALUES
(2, '\"Headstock\" (kepala) (1)'),
(3, '\"Nut\" (2)'),
(4, 'Alat Pemutar (3)'),
(5, 'Frets (4)'),
(6, '\"Neck\" (Leher) (7)'),
(7, 'Heel (Penghubung) (8)'),
(8, 'Badan Gitar (9)'),
(9, '\"Bridge\" (12)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `chord`
--

CREATE TABLE `chord` (
  `desc` text DEFAULT NULL,
  `gambar` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `chord`
--

INSERT INTO `chord` (`desc`, `gambar`) VALUES
('Adipisicing tempor laboris sunt tempor labore magna ex enim irure exercitation. Aliqua excepteur aute minim ad laborum. Officia ea id mollit dolore ea mollit sunt nulla.\r\n\r\nOccaecat excepteur non magna eiusmod do eu aliquip id. Anim ut in aute sint cillum labore nostrud eu et ullamco in occaecat. Cillum ut aute ullamco tempor adipisicing esse nulla dolor. Laboris aliquip tempor id veniam labore incididunt elit non veniam tempor deserunt incididunt eu culpa. Amet et tempor aliquip fugiat consectetur ut officia amet dolor labore laborum veniam. Adipisicing non nostrud incididunt ullamco voluptate minim Lorem veniam officia sint cupidatat ad minim proident.\r\n\r\nIrure aliquip irure tempor est tempor labore occaecat deserunt labore laboris excepteur ut culpa. Minim id ea enim minim ea mollit voluptate anim eu minim. Sunt exercitation sint aute velit in aliquip eu cillum sint et laboris. Lorem eiusmod nostrud esse adipisicing laborum amet. Duis pariatur deserunt fugiat deserunt mollit aliqua esse ea eiusmod. Sint irure dolor cupidatat eiusmod est reprehenderit velit officia. Velit cillum aute ullamco aliquip elit sunt et nulla excepteur dolore duis Lorem consequat.', 'adbf925149533cd3d54fd06ec31e5eae.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjarian`
--

CREATE TABLE `penjarian` (
  `desc` text DEFAULT NULL,
  `gambar` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjarian`
--

INSERT INTO `penjarian` (`desc`, `gambar`) VALUES
('Adipisicing tempor laboris sunt tempor labore magna ex enim irure exercitation. Aliqua excepteur aute minim ad laborum. Officia ea id mollit dolore ea mollit sunt nulla.\r\n\r\nOccaecat excepteur non magna eiusmod do eu aliquip id. Anim ut in aute sint cillum labore nostrud eu et ullamco in occaecat. Cillum ut aute ullamco tempor adipisicing esse nulla dolor. Laboris aliquip tempor id veniam labore incididunt elit non veniam tempor deserunt incididunt eu culpa. Amet et tempor aliquip fugiat consectetur ut officia amet dolor labore laborum veniam. Adipisicing non nostrud incididunt ullamco voluptate minim Lorem veniam officia sint cupidatat ad minim proident.\r\n\r\nIrure aliquip irure tempor est tempor labore occaecat deserunt labore laboris excepteur ut culpa. Minim id ea enim minim ea mollit voluptate anim eu minim. Sunt exercitation sint aute velit in aliquip eu cillum sint et laboris. Lorem eiusmod nostrud esse adipisicing laborum amet. Duis pariatur deserunt fugiat deserunt mollit aliqua esse ea eiusmod. Sint irure dolor cupidatat eiusmod est reprehenderit velit officia. Velit cillum aute ullamco aliquip elit sunt et nulla excepteur dolore duis Lorem consequat.', 'f6d5778ee2dba1f1f0b319fd243412b4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sejarah`
--

CREATE TABLE `sejarah` (
  `sejarah` text DEFAULT NULL,
  `gambar` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sejarah`
--

INSERT INTO `sejarah` (`sejarah`, `gambar`) VALUES
('Adipisicing tempor laboris sunt tempor labore magna ex enim irure exercitation. Aliqua excepteur aute minim ad laborum. Officia ea id mollit dolore ea mollit sunt nulla.\r\n\r\nOccaecat excepteur non magna eiusmod do eu aliquip id. Anim ut in aute sint cillum labore nostrud eu et ullamco in occaecat. Cillum ut aute ullamco tempor adipisicing esse nulla dolor. Laboris aliquip tempor id veniam labore incididunt elit non veniam tempor deserunt incididunt eu culpa. Amet et tempor aliquip fugiat consectetur ut officia amet dolor labore laborum veniam. Adipisicing non nostrud incididunt ullamco voluptate minim Lorem veniam officia sint cupidatat ad minim proident.\r\n\r\nIrure aliquip irure tempor est tempor labore occaecat deserunt labore laboris excepteur ut culpa. Minim id ea enim minim ea mollit voluptate anim eu minim. Sunt exercitation sint aute velit in aliquip eu cillum sint et laboris. Lorem eiusmod nostrud esse adipisicing laborum amet. Duis pariatur deserunt fugiat deserunt mollit aliqua esse ea eiusmod. Sint irure dolor cupidatat eiusmod est reprehenderit velit officia. Velit cillum aute ullamco aliquip elit sunt et nulla excepteur dolore duis Lorem consequat.', '5d826a5a3ec6674a80b5331b9c52c5fb.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tangga_nada`
--

CREATE TABLE `tangga_nada` (
  `desc` text DEFAULT NULL,
  `gambar` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tangga_nada`
--

INSERT INTO `tangga_nada` (`desc`, `gambar`) VALUES
('Adipisicing tempor laboris sunt tempor labore magna ex enim irure exercitation. Aliqua excepteur aute minim ad laborum. Officia ea id mollit dolore ea mollit sunt nulla.\r\n\r\nOccaecat excepteur non magna eiusmod do eu aliquip id. Anim ut in aute sint cillum labore nostrud eu et ullamco in occaecat. Cillum ut aute ullamco tempor adipisicing esse nulla dolor. Laboris aliquip tempor id veniam labore incididunt elit non veniam tempor deserunt incididunt eu culpa. Amet et tempor aliquip fugiat consectetur ut officia amet dolor labore laborum veniam. Adipisicing non nostrud incididunt ullamco voluptate minim Lorem veniam officia sint cupidatat ad minim proident.\r\n\r\nIrure aliquip irure tempor est tempor labore occaecat deserunt labore laboris excepteur ut culpa. Minim id ea enim minim ea mollit voluptate anim eu minim. Sunt exercitation sint aute velit in aliquip eu cillum sint et laboris. Lorem eiusmod nostrud esse adipisicing laborum amet. Duis pariatur deserunt fugiat deserunt mollit aliqua esse ea eiusmod. Sint irure dolor cupidatat eiusmod est reprehenderit velit officia. Velit cillum aute ullamco aliquip elit sunt et nulla excepteur dolore duis Lorem consequat.', '60a124732ad1ca5dca856088c8e9c7a1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tuning`
--

CREATE TABLE `tuning` (
  `tuning` text DEFAULT NULL,
  `gambar` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tuning`
--

INSERT INTO `tuning` (`tuning`, `gambar`) VALUES
('Minim ut culpa sunt commodo nostrud ipsum est elit sit magna cupidatat pariatur magna. Cupidatat voluptate labore occaecat est cupidatat Lorem qui labore quis mollit quis cillum duis consectetur. Proident id sint duis exercitation incididunt qui aute mollit. Ullamco voluptate ipsum occaecat non irure nulla sunt officia commodo ipsum culpa ut voluptate. Quis dolore exercitation esse est nostrud in consequat ullamco elit.\r\n\r\nAmet ad excepteur sint dolor deserunt incididunt exercitation et esse amet pariatur enim ipsum. Incididunt veniam tempor minim laboris eu. Dolore sit pariatur voluptate veniam tempor consectetur nisi ea sint. Fugiat excepteur dolor nisi tempor nulla irure. Ad et magna mollit nostrud exercitation ipsum ea. Amet ipsum consectetur aliqua nostrud aute consequat eiusmod sint Lorem ut et do.\r\n\r\nEsse et labore non fugiat non sunt cillum exercitation laboris. Dolor ipsum nisi proident esse. Fugiat officia irure culpa amet ad est quis minim deserunt officia duis laborum sint aute. Ea pariatur nisi labore aliqua duis occaecat eu laboris incididunt aute nisi magna et sint. Non culpa ea commodo elit. Irure est ad ullamco elit. Dolor labore culpa sunt voluptate proident tempor.', '301a4963f1e8d02384df57aaee6c33fb.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bagian_gitar`
--
ALTER TABLE `bagian_gitar`
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
-- AUTO_INCREMENT untuk tabel `bagian_gitar`
--
ALTER TABLE `bagian_gitar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
