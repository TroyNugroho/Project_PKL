-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 07:11 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ternakku`
--

-- --------------------------------------------------------

--
-- Table structure for table `beli`
--

CREATE TABLE `beli` (
  `id_beli` int(15) NOT NULL,
  `id_keranjang` int(15) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `total_harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hewan`
--

CREATE TABLE `hewan` (
  `id_hewan` int(15) NOT NULL,
  `id_kategori_produk` int(15) NOT NULL,
  `nama_hewan` varchar(50) NOT NULL,
  `harga_hewan` varchar(50) NOT NULL,
  `detail_hewan` text NOT NULL,
  `berat` int(15) NOT NULL,
  `foto_hewan` text NOT NULL,
  `stok` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hewan`
--

INSERT INTO `hewan` (`id_hewan`, `id_kategori_produk`, `nama_hewan`, `harga_hewan`, `detail_hewan`, `berat`, `foto_hewan`, `stok`) VALUES
(4, 4, 'Kambing Jawa', '2500000', 'Kambing siap kurban', 50, 'gambar34.jpg', 0),
(5, 2, 'Sapi Perah', '25000000', 'Sapi perah dari indukan yang sehat terakreditasi, usia 3 bulan', 12000, 'gambar13.jpg', 0),
(6, 3, 'Kuda Local', '50000000', 'Kuda usia 2 tahun bapaknya sering menang', 55000, '440px-AngloKabardiner2.jpg', 0),
(7, 5, 'Domba Garut', '5000000', 'Domba garut untuk lomba, ', 5000, 'download.jpg', 0),
(8, 6, 'Merpati Balap', '2500000', 'Merpati balap kualitas juara', 700, 'gambar21.JPG', 0),
(10, 4, 'Kambing Qurban', '2500000', 'Kambing Qurban sepesial edition', 55000, 'download_(1)1.jpg', 0),
(11, 6, 'Merpati King', '1500000', 'Merpati King dengan bobot istimewa', 1500, '241120122659.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori_produk` int(15) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori_produk`, `nama_kategori`) VALUES
(2, 'Sapi'),
(3, 'Kuda'),
(4, 'Kambing'),
(5, 'Domba'),
(6, 'Merpati');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(15) NOT NULL,
  `id_user` int(15) NOT NULL,
  `id_hewan` int(15) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_user`, `id_hewan`, `qty`) VALUES
(124, 26, 6, 1),
(125, 29, 5, 1),
(126, 29, 8, 1),
(129, 29, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id_toko` int(1) NOT NULL,
  `nama_toko` varchar(255) DEFAULT NULL,
  `lokasi` int(11) DEFAULT NULL,
  `alamat_toko` text DEFAULT NULL,
  `no_telp_toko` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id_toko`, `nama_toko`, `lokasi`, `alamat_toko`, `no_telp_toko`) VALUES
(1, 'Hewan Ternakku', 164, 'Jl. Ahmad Yani Kec Jombang Kab. Jombang Prov. Jawa Timur Indonesia', '081123532543');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `foto_user` text NOT NULL,
  `posisi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `alamat`, `telepon`, `foto_user`, `posisi`) VALUES
(22, 'wahyu', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', '', '', 'hitokiri-nguyen-rengoku-uplox1.jpg', 'admin'),
(23, 'Ferry Maulana', 'member@gmail.com', 'a510166163833c79aa703646f59c04bb', 'Lamongan', '', '02393914bf92fa88b2a3e4eb6f24366dd64e68e5r1-736-736v2_hq2.jpg', 'pembeli'),
(24, 'Ika Lailatuzzahro', 'ika123@gmail.com', 'c29a4d029ab36593d3f3dd5b5b56da7d', '', '', '', 'penjual'),
(25, 'Aris', 'Arisnur@gmail.com', '08dd2b5f22783d1c88eb0ca0c9e65356', '', '', '', 'penjual'),
(26, 'adipati', 'adipati@gmail.com', 'e635c6d9b5132e346a8d97207701f3e1', 'Jombang', '', '02393914bf92fa88b2a3e4eb6f24366dd64e68e5r1-736-736v2_hq3.jpg', 'pembeli'),
(29, 'wahyu', 'wahyu@gmail.com', '8cbbdc3fff847eee79abadc7b693b60e', 'malang', '', 'Screenshot_2021-08-30_1915472.png', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beli`
--
ALTER TABLE `beli`
  ADD PRIMARY KEY (`id_beli`),
  ADD KEY `keranjang` (`id_keranjang`);

--
-- Indexes for table `hewan`
--
ALTER TABLE `hewan`
  ADD PRIMARY KEY (`id_hewan`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori_produk`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `hewan_ibfk_2` (`id_hewan`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beli`
--
ALTER TABLE `beli`
  MODIFY `id_beli` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hewan`
--
ALTER TABLE `hewan`
  MODIFY `id_hewan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori_produk` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id_toko` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hewan`
--
ALTER TABLE `hewan`
  ADD CONSTRAINT `kategori_produk` FOREIGN KEY (`id_kategori_produk`) REFERENCES `kategori` (`id_kategori_produk`);

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `hewan_ibfk_2` FOREIGN KEY (`id_hewan`) REFERENCES `hewan` (`id_hewan`),
  ADD CONSTRAINT `keranjang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
