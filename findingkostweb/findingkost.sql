SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `findingkost` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `findingkost`;

CREATE TABLE `akun` (
  `id` int(3) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` char(32) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tipe` int(1) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `akun` (`id`, `username`, `password`, `nama`, `tipe`, `email`, `telepon`, `alamat`) VALUES
(1, 'ayushaqs', '81dc9bdb52d04dc20036dbd8313ed055', 'Ayusha Qamara Sari', 2, 'ayushaqamarasari@gmail.com', '085627474221', 'Denpasar'),
(2, 'rediangalih', '674f3c2c1a8a6f90461e8a66fb5550ba', 'Redian Galih Irianti', 1, 'rediangalih96@gmail.com', '08562747422', 'Tegal Mulyorejo Baru 114 Mulyorejo'),
(3, 'dewinggapp', 'bb7946e7d85c81a9e69fee1cea4a087c', 'Dewingga Putri ', 2, 'dewingga@gmail.com', '0273827828', 'Semarang'),
(4, 'atiqa', '8c620c2faaafd489b4c45b448acac3a0', 'Atiqah', 2, 'atiqah@gmail.com', '0814888999', 'Bojonegoro'),
(5, 'dewangga', '4d1a65f1c6d24c1f8f714fe7e31d29fc', 'Dewangga Prasetya Praja', 1, 'dewangga@gmail.com', '021759738', 'Mulyosari Utara VII Mulyosari Surabaya'),
(6, 'bagus', 'd93591bdf7860e1e4ee2fca799911215', 'Bagus Adi', 2, 'bagusadi@gmail.com', '0284943734', 'Lamongan'),
(7, 'budisan', '6e3197aae95c2ff8fcab35cb730f6a86', 'budi santosa', 1, 'budisantosa@gmail.com', '083467976755', 'rungkut menanggal harapan s-11'),
(8, 'erigo', 'a4ed074907dc9bc3c86cc52904d763e3', 'erigo herinda', 1, 'erigo@gmail.com', '0298465658', 'jalan kedung klinter 5/4 surabaya'),
(9, 'ananta', 'c49e446a46fa27a6e18ffb6119461c3f', 'ananta ryo', 1, 'ananta@gmail.com', '08462738291', 'ketandan kidul VI, Surabaya'),
(10, 'harisaw', '8a0cd50ecce34cfd150d3d512ccf42cf', 'hari samsul', 1, 'harisaw@gmail.com', '085666222000', 'jalan bubutan V/15-17, Surabaya'),
(11, 'bunjes', '777669af68dbccabc30c3b6bcaa81825', 'bunga jasmin', 1, 'bunje@gmail.com', '08758267382', 'jalan citarum IB, Surabaya'),
(999, 'admin', '202cb962ac59075b964b07152d234b70', 'Administrator', 0, 'findingkost@gmail.com', '0', 'ITS'),
(1000, 'dewzzjr', '202cb962ac59075b964b07152d234b70', 'Dewangga Prasetya Praja', 0, 'dewzzpro@gmail.com', '08562747444', '');

CREATE TABLE `kos` (
  `id` int(3) NOT NULL,
  `alamat` text NOT NULL,
  `daerah` varchar(255) NOT NULL,
  `id_pemilik` int(3) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `fasilitas` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `kos` (`id`, `alamat`, `daerah`, `id_pemilik`, `foto`, `fasilitas`, `harga`) VALUES
(1, 'Jalan Tegal Mulyorejo Baru 114 Mulyosari, Surabaya', 'Mulyosari', 2, 'coba.jpg', 'Kamar Tidur <br>Kamar mandi <br>Dapur <br>Parkir', 500000),
(2, 'Mulyosari Utara VII Mulyosari Surabaya', 'Mulyosari', 5, 'foto.jpg', 'Kamar tidur <br>Kamar mandi <br>Parkir', 500000),
(3, 'rungkut menanggal harapan s-11', 'Rungkut', 7, 'rungkut.jpg', 'Kamar tidur <br>Kamar mandi <br>Dapur <br>Tempat Parkir <br>AC', 600000),
(4, 'jalan kedung klinter 5/4 surabaya', 'Kedung Cowek', 8, 'kedung.jpg', 'Kamar tidur <br>Kamar mandi <br>Dapur <br>Tempat Parkir', 550000),
(5, 'ketandan kidul VI, Surabaya', 'Ketintang', 9, 'ketintang.jpg', 'Kamar tidur <br>Kamar mandi <br>Parkiran <br>Dapur <br>AC', 550000),
(6, 'jalan bubutan V/15-17, Surabaya', 'Bubutan', 10, 'bubutan.jpg', 'Kamar tidur <br>Kamar mandi <br>Parkiran <br>Dapur <br>AC', 500000),
(7, 'jalan rungkut V/15-17, Surabaya', 'Rungkut', 10, 'rungkut.jpg', 'Kamar tidur <br>Kamar mandi <br>Parkiran <br>Dapur <br>AC', 500000);

CREATE TABLE `penghuni` (
  `id` int(3) NOT NULL,
  `id_kos` int(3) NOT NULL,
  `id_pemilik` int(3) NOT NULL,
  `id_penghuni` int(3) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `tagihan` int(20) NOT NULL,
  `lunas` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `penghuni` (`id`, `id_kos`, `id_pemilik`, `id_penghuni`, `status`, `tagihan`, `lunas`) VALUES
(1, 1, 2, 1, 1, 500000, 0);


ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

ALTER TABLE `kos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pemilik` (`id_pemilik`);

ALTER TABLE `penghuni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kos` (`id_kos`),
  ADD KEY `id_pemilik` (`id_pemilik`),
  ADD KEY `id_penghuni` (`id_penghuni`);


ALTER TABLE `akun`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;
ALTER TABLE `kos`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
ALTER TABLE `penghuni`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `kos`
  ADD CONSTRAINT `kos_ibfk_1` FOREIGN KEY (`id_pemilik`) REFERENCES `akun` (`id`);

ALTER TABLE `penghuni`
  ADD CONSTRAINT `penghuni_ibfk_1` FOREIGN KEY (`id_kos`) REFERENCES `kos` (`id`),
  ADD CONSTRAINT `penghuni_ibfk_2` FOREIGN KEY (`id_pemilik`) REFERENCES `akun` (`id`),
  ADD CONSTRAINT `penghuni_ibfk_3` FOREIGN KEY (`id_penghuni`) REFERENCES `akun` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
