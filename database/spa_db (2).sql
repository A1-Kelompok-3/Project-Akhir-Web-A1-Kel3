-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 01:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

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
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` int(11) NOT NULL,
  `treatment` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `estimasi` int(5) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `treatment`, `description`, `estimasi`, `harga`, `gambar`) VALUES
(3, 'Potong Rambut', 'potong biasa ajah', 27, 50000, '790-Group 23.png'),
(4, 'sembarang', 'potong biasa ajah', 90, 100000, '510-eva-design-color-shades (2).jpg'),
(6, 'Stone Theraphy', 'Stone Theraphy merupakan terapi untuk menyerap energi positif dan mengeluarkan energi negatif dalam tubuh menggunakan batu kristal untuk menjaga keseimbangan jiwa raga dan ketenangan.', 30, 350000, '555-service-2.jpg'),
(7, 'Facial Theraphy', 'Perpaduan facial dan terapi herbal untuk kulit sensitif guna menyegarkan dan melembabkan kulit wajah. Sehingga menjadikan kulit wajah lebih cerah dan berseri.', 30, 500000, '972-service-3.jpg'),
(8, 'Skincare', 'AYL Beauty and Spa Mempunyai Produk skincare yang akan membuat kulit anda semakin cantik, sehat dan bersinar.', 25, 400000, '222-service-4.jpg'),
(9, 'Stream Bath', 'Steam bath diyakini dapat menyehatkan tubuh dengan membuka poripori kulit sehingga dapat menyehatkan dan mempercantik tampilan kulit.', 15, 150000, '365-service-5.jpg'),
(10, 'Face Masking', 'Perawatan masker wajah untuk membantu meningkatkan pembetukkan collagen dan menghaluskan permukaan kulit.', 15, 100000, '45-service-6.jpg'),
(11, 'Body Massage', 'Perawatan tubuh dengan menggunakan bahan-bahan alami untuk menjadikan kulit tubuh menjadi lebih bersih, sehat dan bersinar.', 45, 200000, '332-55-service-1.jpg'),
(12, 'Facial Treatment', 'erawatan wajah dengan menggabungkan 3 fungsi yaitu Mikrodermabrasi, Ultrasound dan Tripolar RF untuk membuat kulit lebih kencang dan segar.', 20, 175000, '881-carousel-2.jpg'),
(13, 'Cellulite Treatment', 'Treatment cellulite diformulasikan membantu menghilangkan bekas selulit di tubuh dan diperkaya dengan bahan aktif sehingga dapat membantu menyamarkan kulit yang berselulit.', 15, 350000, '190-carousel-3.jpg'),
(14, 'Massage Treatment', 'Teknik pijat relaksasi yang membantu tubuh terasa lebih nyaman dan menjaga peredaran darah di dalam tubuh menjadi lebih lancar.', 30, 200000, '599-carousel-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `kode_reservasi` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `nama` varchar(35) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `treatment` varchar(40) NOT NULL,
  `kode_layanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `kode_transaksi` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_reservasi` int(11) NOT NULL,
  `kode_layanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `nama`, `role`) VALUES
(201, 'fitriani@gmail.com', 'fitriani', 'admin'),
(202, 'jasminesafira@gmail.com', 'jasmine safira', 'beautician'),
(203, 'tasyakarina@gmail.com', 'tasya karina', 'beautician'),
(204, 'cahyakusuma@gmail.com', 'cahya kusuma', 'beautician');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`kode_reservasi`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`kode_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `kode_reservasi` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `kode_transaksi` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
