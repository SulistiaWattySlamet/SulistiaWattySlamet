-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Okt 2023 pada 14.41
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_warung`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga`
--

CREATE TABLE `harga` (
  `id` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `harga`
--

INSERT INTO `harga` (`id`, `id_menu`, `harga`) VALUES
(14, 144, 7000),
(15, 145, 7000),
(171, 156, 8000),
(172, 157, 8000),
(173, 158, 8000),
(174, 159, 5000),
(175, 160, 5000),
(176, 161, 5000),
(177, 162, 5000),
(178, 163, 8000),
(179, 164, 8000),
(180, 165, 8000),
(181, 166, 30000),
(182, 167, 30000),
(183, 168, 30000),
(184, 169, 30000),
(185, 170, 18000),
(186, 171, 18000),
(187, 172, 15000),
(188, 173, 20000),
(189, 174, 20000),
(190, 175, 15000),
(191, 176, 18000),
(192, 177, 3000),
(225, 178, 3000),
(226, 179, 5000),
(227, 180, 15000),
(228, 181, 10000),
(229, 182, 15000),
(230, 183, 15000),
(231, 184, 15000),
(232, 185, 15000),
(233, 193, 2000),
(234, 194, 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nama_menu` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT 'default.svg',
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `nama_menu`, `gambar`, `ket`) VALUES
(144, 'Es Kelapa Muda', '107.jpeg', 'Kelapa Segar, dibuat dengan resep rahasia-turun temurun'),
(145, 'Es Campur', 'escampur.jpg', 'Formula buah-buahan segar yang dipadukan dengan susu encer dingin'),
(156, 'Guraka', 'air-guraka-foto-resep-utama.jpg', 'Guraka sedap manis'),
(157, 'Saraba', 'wedang-sarabba-khas-makasar-foto-resep-utama.jpg', 'Saraba sedap segar'),
(158, 'Kopi Halia', 'kopihalia.png', '-'),
(159, 'Kopi Biasa', 'kopibiasa.png', '-'),
(160, 'ES Teh Manis', '5d31ef90cd6c389e07bc48a08e583122.jpg', '-'),
(161, 'Nutrisari', 'Es-NUtrisari.png', '-'),
(162, 'Kopi Good Day', '5-cappuccino-instan-rp-2-ribuan-mana-yang-rasanya-paling-mantap-2.jpeg', '-'),
(163, 'Dencow', 'd3dbf241-8dab-4bd2-8283-9dafcffbd7b0_menu-item-image_1620722649893.webp', '-'),
(164, 'MIlo', '1946440131.webp', '-'),
(165, 'Ovaltin', '9fe379c1-db3f-4408-9dcf-b4b862e12fdd_Go-Biz_20220511_160550.webp', '-'),
(166, 'Ikan Bakar Batu-batu', 'resep-gurame-bakar-bumbu-kecap-cabe_43.jpeg', '-'),
(167, 'Ayam Goreng', '9f73af3b-0d0e-42e1-8482-0943a0e696e1.jpe', '-'),
(168, 'Ayam Bakar', 'Resep-Ayam-bakar-bumbu-bali.webp', ''),
(169, 'Ayam Geprek', 'resep-ayam-geprek-jogja-1_43.jpeg', ''),
(170, 'Nasi Ayam Semur', '029eaf64-0c2d-4354-816f-5129514dd5ec_Go-Biz_20220611_062414.webp', ''),
(171, 'Nasi Ayam Kare', 'IMAG0046.jpg', ''),
(172, 'Nasi Ikan', 'bbee1bf1-5eee-4bab-8e78-676ab8b61d5f_43.jpeg', ''),
(173, 'Papeda', '0e909e75-e031-4dd9-ae6c-5682fe8411af.jpe', ''),
(174, 'Kasbi, Pisang, Patatas', 'download.jpeg', ''),
(175, 'Ikan Bakar Biasa', 'ikan-bakar-sederhana-foto-resep-utama.jpg', ''),
(176, 'Nasi Ikan Telur', 'Nasi_Lemak_Sambal_Cumi_in_Indonesia_2.jpg', ''),
(177, 'Telur rebus', 'telur-rebus.jpg', ''),
(178, 'Telur Goreng', 'telur-goreng-atau-telur-mata-sapi-_180924100832-884.jpg', ''),
(179, 'Air  mineral', 'botol-benefit.png', ''),
(180, 'Pisang Goreng Sambal', 'psYafT2CrlCCMacCFZ47GjqBXdMrryOg-31363333393432393630d41d8cd98f00b204e9800998ecf8427e.webp', ''),
(181, 'Pisang Keju Meses', '16251286131623847721931652.webp', ''),
(182, 'Pisang Krispy Tiramisu', '3792e2f7-31ee-4b52-8895-a7a53bbfb91e_Go-Biz_20210520_102644.webp', ''),
(183, 'Pisang Crispy Coklat', 'maxresdefault.jpg', ''),
(184, 'Pisang Crispy Keju', 'IMG_20220107_180623.jpg', ''),
(185, 'Pisang Crispy Kacang', 'pisang-goreng-keju-kacang-foto-resep-utama.jpg', ''),
(193, 'Tahu Krispi + Sambal', 'e1224c22-f372-4a63-a593-1fd5c80f94d1.jpe', ''),
(194, 'Bubur Ayam', 'Bubur_ayam_chicken_porridge.JPG', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesbuk`
--

CREATE TABLE `pesbuk` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'default.svg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesbuk`
--

INSERT INTO `pesbuk` (`id`, `username`, `email`, `password`, `name`, `photo`) VALUES
(1, 'tes', 'tes@gmail.com', '$2y$10$hVNE5LHVOiXeV78J28iEkeAcCBOAKYKGjIE9GtLOI2s8iiALgdX/y', 'tes', 'default.svg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok`
--

CREATE TABLE `stok` (
  `id` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `sisa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `stok`
--

INSERT INTO `stok` (`id`, `id_menu`, `stok`, `sisa`) VALUES
(144, 193, 20, 0),
(145, 194, 20, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `pemilik` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `kontak` varchar(15) NOT NULL,
  `link` varchar(255) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id`, `pemilik`, `nama`, `alamat`, `email`, `kontak`, `link`, `ket`) VALUES
(1, 'Sulistia Watty Slamet', 'RM-Puncak', 'jl. Trans Seram Kairatu', 'RumahMakanPuncak@gmail.com', '081234567890', 'belum dibuat', 'Sistem Informasi Pemesanan Makanan & Minumaan Berbasis Web Pada Cafe Puncak Dusun Kelapa Dua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp_transaksi_pemesanan`
--

CREATE TABLE `temp_transaksi_pemesanan` (
  `id` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '1=sudah proses, 0 belum proses'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `temp_transaksi_pemesanan`
--

INSERT INTO `temp_transaksi_pemesanan` (`id`, `tgl`, `id_menu`, `id_transaksi`, `id_user`, `jumlah`, `harga`, `status`) VALUES
(116, '2023-10-08', 156, 41, 16, 10, 80000, 1),
(117, '2023-10-08', 145, 41, 16, 10, 70000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_pemesanan`
--

CREATE TABLE `transaksi_pemesanan` (
  `id` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `nomer_meja` int(11) NOT NULL,
  `total` int(15) NOT NULL,
  `bayar` int(11) NOT NULL,
  `kembali` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 = belum bayar, 1 = sudah bayar'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `transaksi_pemesanan`
--

INSERT INTO `transaksi_pemesanan` (`id`, `id_users`, `tgl`, `nomer_meja`, `total`, `bayar`, `kembali`, `status`) VALUES
(41, 16, '2023-10-08', 12, 150000, 150000, 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `level_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`idusers`, `level_user`, `username`, `password`, `gender`, `nama`, `no_telp`, `alamat`) VALUES
(1, 1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'L', 'iman', '1', 'r'),
(16, 4, 'sulis@gmail.com', '9e39fe12c7c9c968ceabcd0b80d622a7', '', 'sulis', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `harga_ibfk_1` (`id_menu`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesbuk`
--
ALTER TABLE `pesbuk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `[username]` (`username`);

--
-- Indeks untuk tabel `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stok_ibfk_1` (`id_menu`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `temp_transaksi_pemesanan`
--
ALTER TABLE `temp_transaksi_pemesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `temp_transaksi_pemesanan_ibfk_2` (`id_menu`),
  ADD KEY `temp_transaksi_pemesanan_ibfk_3` (`id_user`);

--
-- Indeks untuk tabel `transaksi_pemesanan`
--
ALTER TABLE `transaksi_pemesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_pemesanan_ibfk_1` (`id_users`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`),
  ADD KEY `level_user` (`level_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `harga`
--
ALTER TABLE `harga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT untuk tabel `pesbuk`
--
ALTER TABLE `pesbuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `stok`
--
ALTER TABLE `stok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `temp_transaksi_pemesanan`
--
ALTER TABLE `temp_transaksi_pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT untuk tabel `transaksi_pemesanan`
--
ALTER TABLE `transaksi_pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `harga`
--
ALTER TABLE `harga`
  ADD CONSTRAINT `harga_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `menu` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `stok`
--
ALTER TABLE `stok`
  ADD CONSTRAINT `stok_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `temp_transaksi_pemesanan`
--
ALTER TABLE `temp_transaksi_pemesanan`
  ADD CONSTRAINT `temp_transaksi_pemesanan_ibfk_2` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `temp_transaksi_pemesanan_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `users` (`idusers`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi_pemesanan`
--
ALTER TABLE `transaksi_pemesanan`
  ADD CONSTRAINT `transaksi_pemesanan_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`idusers`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
