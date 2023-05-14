-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Bulan Mei 2023 pada 06.30
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spa_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan`
--

CREATE TABLE `layanan` (
  `id` int(11) NOT NULL,
  `treatment` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `estimasi` int(5) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `layanan`
--

INSERT INTO `layanan` (`id`, `treatment`, `description`, `estimasi`, `harga`, `gambar`) VALUES
(7, 'Facial Treatment', 'Perawatan wajah dengan menggabungkan 3 fungsi yaitu Mikrodermabrasi, Ultrasound dan Tripolar RF untuk membuat kulit lebih kencang dan segar.', 60, 200000, '315-service-1.jpg'),
(8, 'Skin Care', 'AYL Beauty and Spa Mempunyai Produk skincare yang akan membuat kulit anda semakin cantik, sehat dan bersinar.', 30, 100000, '965-service-2.jpg'),
(9, 'Stream Bath', 'Steam bath diyakini dapat menyehatkan tubuh dengan membuka poripori kulit sehingga dapat menyehatkan dan mempercantik tampilan kulit.', 90, 120000, '163-service-5.jpg'),
(10, 'Facial Therapy', 'Perpaduan facial dan terapi herbal untuk kulit sensitif guna menyegarkan dan melembabkan kulit wajah. Sehingga menjadikan kulit wajah lebih cerah dan berseri.', 30, 80000, '226-service-3.jpg'),
(11, 'Stone Therapy', 'Stone Theraphy merupakan terapi untuk menyerap energi positif dan mengeluarkan energi negatif dalam tubuh menggunakan batu kristal untuk menjaga keseimbangan jiwa raga dan ketenangan.', 120, 110000, '804-service-4.jpg'),
(12, 'Face Masking', 'Perawatan masker wajah untuk membantu meningkatkan pembetukkan collagen dan menghaluskan permukaan kulit.', 45, 80000, '557-service-6.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE `reservasi` (
  `kode_reservasi` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `treatment` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `reservasi`
--

INSERT INTO `reservasi` (`kode_reservasi`, `nama`, `no_hp`, `tanggal`, `waktu`, `treatment`) VALUES
(7, 'Riska Putri', '082219176668', '2023-05-15', '10:00:00', 'Facial Treatment'),
(10, 'sasa', '081355448812', '2023-05-17', '15:00:00', 'Skin Care'),
(13, 'Aulia Adelia P', '081255498997', '2023-05-31', '12:20:00', 'Skin Care'),
(14, 'Anggita', '082265646694', '2023-05-18', '12:20:00', 'Facial Treatment'),
(15, 'Anggita', '082266494944', '2023-05-19', '12:22:00', 'Stream Bath');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat`
--

CREATE TABLE `riwayat` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `kode_layanan` int(11) NOT NULL,
  `treatment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat`
--

INSERT INTO `riwayat` (`id`, `nama`, `no_hp`, `tanggal`, `waktu`, `kode_layanan`, `treatment`) VALUES
(1, 'sasa', '082219176668', '2023-05-14', '11:26:00', 0, 'Face Masking'),
(3, 'sasa', '082219176668', '2023-05-14', '10:25:00', 0, 'Stream Bath'),
(5, 'sasa', '082219176668', '2023-05-20', '14:25:00', 0, 'Stone Therapy'),
(7, 'Riska Putri', '082219176668', '2023-05-18', '10:00:00', 0, 'Face Masking'),
(8, 'sasa', '082219176668', '2023-05-15', '12:15:00', 0, 'Face Masking'),
(9, 'Riska Putri', '082219176668', '2023-05-20', '14:00:00', 0, 'Facial Treatment');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `email`, `nama`, `password`, `role`) VALUES
(201, 'admin@gmail.com', 'admin', 'admin', 'admin'),
(202, 'jasminesafira@gmail.com', 'jasmine safira', 'safira', 'beautician'),
(203, 'tasyakarina@gmail.com', 'tasya karina', 'tasya', 'beautician'),
(204, 'cahyakusuma@gmail.com', 'cahya kusuma', 'cahya', 'beautician'),
(214, 'sasa@gmail.com', 'sasa', 'sasa123', 'customer'),
(215, 'riska@mail.com', 'Riska Putri', 'riska123', 'customer'),
(216, 'aulia@gmail.com', 'Aulia Adelia P', 'aulia123', 'customer'),
(217, 'anggi@gmail.com', 'Anggita', 'anggi', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`kode_reservasi`);

--
-- Indeks untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `kode_reservasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
