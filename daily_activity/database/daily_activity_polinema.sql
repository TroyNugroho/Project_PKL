-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jan 2022 pada 02.39
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daily_activity_polinema`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `beli`
--

CREATE TABLE `beli` (
  `id_beli` int(15) NOT NULL,
  `id_keranjang` int(15) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `total_harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(15) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(13, 'Perencanaan Penyelenggaraaan Kegiatan Perpustakaan'),
(14, 'Monitoring dan Evaluasi Penyelenggaraan Kegiatan Perpustakaan'),
(15, 'Pelayanan Teknis '),
(16, 'Pelayanan Pemustaka'),
(17, 'Pengembangan Kepustakawanan'),
(18, 'Kepala UPT Perpustakaan'),
(19, 'Sekretaris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penugasan`
--

CREATE TABLE `penugasan` (
  `id_penugasan` int(15) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_tugas` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penugasan`
--

INSERT INTO `penugasan` (`id_penugasan`, `id_user`, `id_tugas`) VALUES
(46, 33, 56),
(47, 32, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `id_perpus` int(1) NOT NULL,
  `nama_perpus` varchar(255) DEFAULT NULL,
  `lokasi` int(11) DEFAULT NULL,
  `alamat_perpus` text,
  `no_telp_perpus` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`id_perpus`, `nama_perpus`, `lokasi`, `alamat_perpus`, `no_telp_perpus`) VALUES
(1, 'Perpustakaan Poiliteknik Negeri Malang', 256, 'Jl. Ahmad Yani Kec Jombang Kab. Jombang Prov. Jawa Timur Indonesia', '081123532543');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE `tugas` (
  `id_tugas` int(15) NOT NULL,
  `nama_tugas` varchar(255) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `ak` float NOT NULL,
  `satuan_hasil` varchar(100) NOT NULL,
  `waktu` float NOT NULL,
  `kuantitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tugas`
--

INSERT INTO `tugas` (`id_tugas`, `nama_tugas`, `id_kategori`, `ak`, `satuan_hasil`, `waktu`, `kuantitas`) VALUES
(1, 'Mengumpulkan Data', 13, 0.036, 'Laporan', 9, 4),
(2, 'Monitoring dan Evaluasi ', 13, 0.12, 'Laporan', 12, 4),
(3, 'Menyusun Rencana Kerja Operasional', 13, 0.22, 'Naskah', 12, 4),
(4, 'Melakukan Monitoring Penyelenggaraan Perpustakaan', 14, 0.275, 'Laporan', 27.5, 4),
(5, 'Melakukan Evaluasi Penyelenggaraan Perpustakan', 14, 0.55, 'Laporan', 27.5, 4),
(6, 'Menghimpun alat seleksi bahan perpustakaan', 15, 0.003, 'Judul', 0.75, 7),
(7, 'Mengidentifikasi Bahan Perpustakaan untuk Pengadaan', 15, 0.004, 'Judul', 1, 7),
(8, 'Membuat Desiderata', 15, 0.001, 'Judul', 0.25, 200),
(9, 'Menregistrasi Bahan Perpustakaan', 15, 0.001, 'Eksemplar', 0.25, 350),
(10, 'Mengidentifikasi Koleksi Perpustakaan untuk Penyiangan', 15, 0.003, 'Eksemplar', 0.3, 750),
(11, 'Melakukan Survei Sederhana Kebutuhan Informasi Pemustaka', 15, 0.08, 'Laporan', 4, 12),
(12, 'Menyusun Daftar tambahan Bahan Perpustakaan', 15, 0.001, 'Cantuman', 0.25, 350),
(13, 'Memverifikasi data Blibliograf', 15, 0.001, 'Judul', 0.25, 2000),
(14, 'Melakukan Katalogisasi Deskriptif', 15, 0.008, 'Judul', 0.4, 2000),
(15, 'Membuat kata kunci', 15, 0.001, 'Kata kunci', 0.1, 2000),
(16, 'Melakukan validasi katalogisasi', 15, 0.007, 'Judul', 0.35, 2000),
(17, 'Melakukan alih data Bibliografi Secara Manual', 15, 0.001, 'Cantuman', 0.25, 2000),
(18, 'Melakukan alih data Bibliografi Secara Elektronik', 15, 0.002, 'Cantuman', 0.5, 2000),
(19, 'Membuat Kelengkapan Bahan', 15, 0.003, 'Eksemplar', 0.75, 2000),
(20, 'Membuat anotasi koleksi Perpustakaan', 15, 0.008, 'Judul', 0.4, 200),
(21, 'Melakukan Klasifikasi Ringkas dan Menentukan Tajuk Subjek', 15, 0.013, 'Judul', 0.65, 2000),
(22, 'Melakukan Validasi Klasifikasi Ringkas dan Tajuk Subjek', 15, 0.013, 'Judul', 0.65, 200),
(23, 'Membuat Cadangan data(Backup)', 15, 0.001, 'Cantuman', 0.1, 2000),
(24, 'Mengelola Basis Data(Data Maintenace)', 15, 0.003, 'Cantuman', 0.3, 2000),
(25, 'Membuat abstrak indikatif koleksi perpustakaan', 15, 0.015, 'Judul', 1.5, 200),
(26, 'Membuat Panduan Pustaka(Path Finder)', 15, 0.015, 'Entri', 0.5, 10),
(27, 'Mengeluarkan Koleksi Perpustakaan dari Jajaran Koleksi dalam Rangka', 15, 0.001, '-', 0.25, 300),
(28, 'Mengidentifikasi Kerusakan Koleksi Perpustakaan', 15, 0.003, 'Eksemplar', 0.3, 300),
(29, 'Merawat Koleksi Perpustakaan Bersifat Pencegahan', 15, 0.002, 'Eksemplar', 0.5, 10000),
(30, 'Merawat Koleksi Perpustakaan Bersifat Penanganan', 15, 0.007, 'Eksemplar', 0.7, 500),
(31, 'Mereproduksi Koleksi Perpustakaan Bentuk Tercetak', 15, 0.001, 'Lembar', 0.25, 0),
(32, 'Mereproduksi Koleksi Perpustakaan Bentuk Elektronik', 15, 0.001, 'Judul', 0.1, 0),
(33, 'Mengelola Jajaran Koleksi Perpustakaan(Shelving)', 15, 0.003, 'Eksemplar', 0.75, 12500),
(34, 'Melakukan Layanan Peminjaman dan Pengembalian Koleksi', 15, 0.001, 'Judul', 0.25, 1500),
(35, 'Melakukan Layanan Bimbingan Pendidikan Pustaka', 16, 0.11, 'Kali', 5.5, 20),
(36, 'Mengelola Layanan Pinjam Antar Perpustakaan', 16, 0.008, 'Judul', 0.8, 0),
(37, 'Menyediakan Koleksi di Tempat', 16, 0.002, 'Judul', 0.2, 2000),
(38, 'Membuat statistik perpustakaan', 16, 0.07, 'Laporan', 7, 12),
(39, 'Melakukan layanan referensi cepat (quick reference)', 16, 0.004, 'Permintaan', 0.2, 100),
(40, 'Melakukan penelusuran informasi sederhana', 16, 0.009, 'Topik', 0.26, 100),
(41, 'Melakukan layanan orientasi perpustakaan', 16, 0.075, 'Kali', 2.21, 2),
(42, 'Melakukan Layanan penyebaran informasi terbaru/kilat', 16, 0.018, 'Judul', 0.53, 24),
(43, 'Melakukan bimbingan pemustaka dalam bentuk literasi informasi', 16, 0.33, 'kali', 11, 0),
(44, 'Mengelola layanan e-resources', 16, 0.008, 'kali', 0.27, 1000),
(45, 'Melakukan bimbingan penggunaan sumber referensi', 16, 0.105, 'Kali', 3.5, 100),
(46, 'Melaksanakan pemasyarakatan tentang kegunaan dan pemanfaatan perpustakaan kepada pemustaka', 16, 0.063, 'kali', 1.85, 2),
(47, 'Menyusun materi publisitas berbentuk poster. spanduk. pembatas buku. stiker. dan sejenisnya', 17, 0.07, 'Tema', 7, 150),
(48, 'Melakukan publisitas melalui media cetak dalam bentuk Berita', 17, 0.04, 'Naskah', 4, 12),
(49, 'Melakukan publisitas melalui media cetak dalam bentuk brosur/leaflet/spanduk dan sejenisnya', 17, 0.165, 'Naskah', 16.5, 3),
(50, 'Melakukan publisitas melalui media elektronik. dalam bentuk membuat naskah siaran radio', 17, 0.11, 'Naskah', 11, 0),
(51, 'Melakukan publisitas melalui media elektronik. dalam bentuk membuat naskah dan mengunggah melalui web (intranet/internet)', 17, 0.11, 'Naskah', 11, 3),
(52, 'Menyelenggarakan pameran sebagai penata pameran', 17, 0.138, 'kali', 13.8, 0),
(53, 'Menyelenggarakan pameran sebagai pemandu pameran di dalam negeri', 17, 0.125, 'kali', 12.5, 0),
(54, 'Menyusun rencana kerja dan anggaran tahunan Perpustakaan;', 18, 0, 'Naskah', 43, 1),
(55, 'Perumusan   kebijaksanaan   di   bidang   pustaka.   layanan   perpustakaan.   pengembangan perpustakaan', 18, 0, 'Naskah', 129, 1),
(56, 'Pelaksanaan   kebijaksanaan   di   bidang   pustaka.   layanan. perpustakaan.   pengembangan perpustakaan. dan pembinaan', 18, 0, 'Laporan', 43, 12),
(57, 'Pelaksanaan monitoring. evalusasi dan pelaporan di bidang pustaka. layanan perpustakaan dan pengembangan perpustakaan. ', 18, 0, 'Laporan', 55, 4),
(58, 'Menyusun dan menyampaikan laporan pelaksanaan tugas Perpustakaan kepada Direktur', 18, 0, 'Laporan', 55, 4),
(59, 'Pelaksanaan administrasi UPT sesuai dengan lingkup tugasnya', 18, 0, 'Naskah', 20, 12),
(60, 'Pelaksanaan fungsi lain yang diberikan oleh Direktur / Pembantu Direktur  terkait dengan tugas dan fungsinya', 18, 0, 'Laporan', 10, 12),
(61, 'Membantu menyusun rencana dan program kerja perpustakaan.', 19, 0, 'Naskah', 10, 1),
(62, 'Membantu dan mengkoordinir tugas administrasi perpustakaan.', 19, 0, 'Naskah', 10, 1),
(63, 'Mengkoordinir staf dalam kegiatan rutin.', 19, 0, 'Naskah', 10, 4),
(64, 'Membantu Pimpinan Membuat laporan kegiatan perpustakaan.', 19, 0, 'Naskah', 10, 1),
(65, 'Mendata dan Mengarsip Surat Masuk', 19, 0, 'Naskah', 10, 12),
(66, 'Membantu dalam pembuatan surat menyurat', 19, 0, 'Naskah', 10, 12),
(67, 'Membantu Membuat laporan tahunan.', 19, 0, 'Naskah', 10, 1),
(68, 'Membuat usulan kebutuhan Operasional Perpustakaan', 19, 0, 'Naskah', 10, 12),
(69, 'Melayani bebas tanggungan mahasiswa', 19, 0, 'Naskah', 0.25, 2000),
(70, 'Melayani pembuatan kartu anggota Perpustakaan.', 19, 0, 'Eksemplar', 0.25, 100),
(71, 'Membantu. mengumpulkan. mengolah data ketatausahaan.', 19, 0, 'Naskah', 3, 4),
(72, 'Membuat dan mengumpulkan data harian. bulanan dan Tahunan', 19, 0, 'Naskah', 9, 4),
(73, 'Membantu proses administasi perpustakaan', 19, 0, 'Naskah', 0.25, 500),
(74, 'Membuat usulan kebutuhan operasional perpustakaan', 19, 0, 'Naskah', 0.25, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `alamat`, `telepon`, `foto_user`, `posisi`) VALUES
(22, 'ferry', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', '', '', 'hitokiri-nguyen-rengoku-uplox1.jpg', 'admin'),
(30, 'user', 'user@gmail.com', '5203e9858ec796cae6a666e0e1976637', 'Jl.jalan', '08080909', 'icon_Profile.png', 'pustakawan'),
(31, 'user2', 'user2@gmail.com', '6117ae597fc40acd312250840e121a67', 'Jl.jalan', '89998', '', 'administra'),
(32, 'user3', 'user3@gmail.com', '6ad14ba9986e3615423dfca256d04e3f', '', '', 'download_(2).png', 'pembeli'),
(33, 'user4', 'user4@gmail.com', '6ad14ba9986e3615423dfca256d04e3f', '', '', '', 'Pustakawan');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_skp`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_skp` (
`id_penugasan` int(15)
,`nama` varchar(50)
,`posisi` varchar(10)
,`nama_kategori` varchar(100)
,`nama_tugas` varchar(255)
,`AK` float
,`satuan_hasil` varchar(100)
,`waktu` float
,`kuantitas` int(11)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `view_skp`
--
DROP TABLE IF EXISTS `view_skp`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_skp`  AS  select `p`.`id_penugasan` AS `id_penugasan`,`u`.`nama` AS `nama`,`u`.`posisi` AS `posisi`,`k`.`nama_kategori` AS `nama_kategori`,`t`.`nama_tugas` AS `nama_tugas`,`t`.`ak` AS `AK`,`t`.`satuan_hasil` AS `satuan_hasil`,`t`.`waktu` AS `waktu`,`t`.`kuantitas` AS `kuantitas` from (((`penugasan` `p` join `tugas` `t` on((`t`.`id_tugas` = `p`.`id_tugas`))) join `kategori` `k` on((`k`.`id_kategori` = `t`.`id_kategori`))) join `user` `u` on((`u`.`id_user` = `p`.`id_user`))) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `beli`
--
ALTER TABLE `beli`
  ADD PRIMARY KEY (`id_beli`),
  ADD KEY `keranjang` (`id_keranjang`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `penugasan`
--
ALTER TABLE `penugasan`
  ADD PRIMARY KEY (`id_penugasan`),
  ADD KEY `nama_petugas` (`id_user`) USING BTREE,
  ADD KEY `nama_tugas` (`id_tugas`) USING BTREE;

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_perpus`);

--
-- Indeks untuk tabel `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id_tugas`),
  ADD KEY `fk_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `beli`
--
ALTER TABLE `beli`
  MODIFY `id_beli` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `penugasan`
--
ALTER TABLE `penugasan`
  MODIFY `id_penugasan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `setting`
--
ALTER TABLE `setting`
  MODIFY `id_perpus` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id_tugas` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `penugasan`
--
ALTER TABLE `penugasan`
  ADD CONSTRAINT `nama_petugas` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `nama_tugas` FOREIGN KEY (`id_tugas`) REFERENCES `tugas` (`id_tugas`);

--
-- Ketidakleluasaan untuk tabel `tugas`
--
ALTER TABLE `tugas`
  ADD CONSTRAINT `fk_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
