-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Feb 2023 pada 02.34
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forumdiskusi5`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_akun` varchar(10) NOT NULL,
  `role` varchar(7) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto_profile` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_akun`, `role`, `nama_user`, `jenis_kelamin`, `tgl_lahir`, `pekerjaan`, `email`, `username`, `password`, `foto_profile`, `status`) VALUES
('USR001', 'Admin', 'Faris Abdullah', 'L', '2022-12-04', 'Mahasiswa1', 'Faris@gmail.com', 'faris', '81dc9bdb52d04dc20036dbd8313ed055', 'Screenshot_2022-12-18_190210.png', 1),
('USR003', 'Admin', 'Youmal Gans', 'L', '2023-01-12', 'Mahasiswa', 'youmal@gmail.com', 'youmal', '81dc9bdb52d04dc20036dbd8313ed055', 'IMG-20190722-WA0006.jpg', 1),
('USR004', 'Admin', 'Youmal Dwi Santoso', 'L', '2022-12-01', 'Penjual Sayuran', 'youmal@gmail.com', 'youmal', '81dc9bdb52d04dc20036dbd8313ed055', 'Screenshot_2022-12-18_1944182.png', 1),
('USR005', 'User', 'Sashi Kirana', 'P', '2022-02-02', 'Penjual seragam', 'sashi@gmail.com', 'sashi', '81dc9bdb52d04dc20036dbd8313ed055', 'Screenshot_2022-12-20_133020.png', 0),
('USR006', 'Admin', 'Sharla Adhita Zahrani', 'P', '2003-03-03', 'Penjual Ikan', 'sharlaadhita3@gmail.com', 'sharla', '81dc9bdb52d04dc20036dbd8313ed055', 'Screenshot_2022-12-20_133225.png', 0),
('USR007', 'User', 'Rian Fauzi', 'L', '2003-12-12', 'Mahasiswa', 'Rian@gmail.com', 'rian', '81dc9bdb52d04dc20036dbd8313ed055', 'bem.png', 1),
('USR008', 'User', 'Rian Fauzi', 'L', '2022-12-18', 'Mahasiswa', 'Rian@gmail.com', 'Rian', '81dc9bdb52d04dc20036dbd8313ed055', 'WIN_20221004_09_50_59_Pro.jpg', 1),
('USR009', 'User', 'Fajar Jamillah', 'L', '1999-03-19', 'Mahasiswa', 'Fajar@gmail.com', 'fajar', '81dc9bdb52d04dc20036dbd8313ed055', 'astra_tech3.jpeg', 1),
('USR010', 'User', 'Maychel Ocky', 'L', '2003-05-07', 'Mahasiswa', 'ocky@gmail.com', 'ocky', '81dc9bdb52d04dc20036dbd8313ed055', '', 1),
('USR011', 'User', 'Budi', 'L', '2000-07-05', 'Kepala Toko Grosir', 'budi123@gmail.com', 'budisantoso', '81dc9bdb52d04dc20036dbd8313ed055', '', 0),
('USR012', 'User', 'Budi Santoso', 'L', '1995-02-15', 'Pedagang Daging', 'santoso@gmail.com', 'dwi', '81dc9bdb52d04dc20036dbd8313ed055', 'WIN_20220517_10_03_53_Pro.jpg', 0),
('USR013', 'Admin', 'abdullah', 'L', '1999-06-09', 'Programmer', 'abdullah123@gmail.com', 'abdullah', '202cb962ac59075b964b07152d234b70', '', 0),
('USR014', 'Admin', 'Sdas', 'L', '2022-12-09', 'asdasd', 'adsa@gmail.com', 'asdasd', '81dc9bdb52d04dc20036dbd8313ed055', '', 0),
('USR015', 'Admin', 'asas', 'L', '2022-12-03', 'asfasf', '123@gmail.com', 'asfasfasf', '81dc9bdb52d04dc20036dbd8313ed055', 'WIN_20220517_10_03_53_Pro1.jpg', 0),
('USR016', 'Admin', 'Ainun', 'P', '2000-08-17', 'Data Scientist', 'ainun123@gmail.com', 'ainun567', '81dc9bdb52d04dc20036dbd8313ed055', 'WIN_20220517_10_04_01_Pro.jpg', 0),
('USR017', 'User', 'Marwahidah', 'P', '1998-06-09', 'Penjual Gorengan', 'marwah@gmail.com', 'marwah', '81dc9bdb52d04dc20036dbd8313ed055', 'WIN_20220517_10_03_44_Pro.jpg', 1),
('USR018', 'User', 'Jonathan', 'L', '1996-03-13', 'Penjual Daging', 'jo123@gmail.com', 'jonathan', '202cb962ac59075b964b07152d234b70', 'WIN_20220517_10_03_53_Pro2.jpg', 0),
('USR019', 'User', 'dewi Ningrat', 'P', '1993-06-08', 'penjual gorengan', 'suryani@gmail.com', 'dewi', '81dc9bdb52d04dc20036dbd8313ed055', 'WIN_20220517_10_03_53_Pro3.jpg', 1),
('USR020', 'Admin', 'afssa', 'P', '2023-01-09', 'asf', 'yom@gmail.com', 'asfsa', '81dc9bdb52d04dc20036dbd8313ed055', '', 1),
('USR021', 'User', 'Rafli Ananta Edit', 'L', '2003-02-12', 'Mahasiswa', 'rafli123@gmail.com', 'rafli', '99c5e07b4d5de9d18c350cdf64c5aa3d', 'astra_tech.jpeg', 1),
('USR022', 'User', 'Santoso', 'L', '2000-06-07', 'Mahasiswa', 'santoso@gmail.com', 'santoso', '81dc9bdb52d04dc20036dbd8313ed055', '', 0),
('USR023', 'User', 'Nur Ell Ghazy', 'L', '2004-05-01', 'Penjual Ikan Hias', 'nurell@gmail.com', 'nurell', '81dc9bdb52d04dc20036dbd8313ed055', 'IMG_Background1.jpg', 1),
('USR024', 'Admin', 'Sharla Adhita ', 'P', '2003-06-03', 'Pembuat Aplikasi', 'sharlaadhita3@gmail.com', 'Admin', '81dc9bdb52d04dc20036dbd8313ed055', '', 0),
('USR025', 'User', 'Gunawan Samudra', 'L', '2000-02-09', 'Wiraswasta', 'gunawan19@gmail.com', 'Gunawan Setiadi', '81dc9bdb52d04dc20036dbd8313ed055', 'MI.jpeg', 1),
('USR026', 'User', 'Panggabean', 'L', '2000-02-09', 'Wirausaha', 'joshua@gmail.com', 'panggabean', '81dc9bdb52d04dc20036dbd8313ed055', 'astra_tech2.jpeg', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `balasan`
--

CREATE TABLE `balasan` (
  `id_balasan` int(10) NOT NULL,
  `id_komentar` varchar(10) NOT NULL,
  `id_akun` varchar(10) NOT NULL,
  `isi_balasan` varchar(500) NOT NULL,
  `waktu_balasan` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `balasan`
--

INSERT INTO `balasan` (`id_balasan`, `id_komentar`, `id_akun`, `isi_balasan`, `waktu_balasan`, `status`) VALUES
(5, '16', 'USR010', 'ini balasan edit', '2022-12-28 17:18:16', 0),
(6, '18', 'USR010', 'ini edit balasan', '2022-12-28 17:47:46', 0),
(7, '19', 'USR001', 'edit balasan wkwkwk', '2022-12-28 18:52:54', 1),
(8, '19', 'USR010', 'ini merupakan balasan wkwkkww', '2022-12-28 18:56:37', 1),
(9, '21', 'USR019', 'Info darimana ya mbak ?', '2022-12-28 21:16:00', 1),
(10, '32', 'USR021', 'Test Edit Balasan Rafli', '2023-01-05 16:21:14', 0),
(11, '32', 'USR007', 'Test Balasan Rian', '2023-01-05 16:16:55', 1),
(12, '32', 'USR005', 'Test Balasan Sashi', '2023-01-05 16:17:24', 1),
(13, '33', 'USR003', 'berapa tuh mas kemarin belinya?asass', '2023-01-08 19:37:00', 0),
(14, '33', 'USR007', 'kemarin saya dapat di harga 100 ribu', '2023-01-06 13:30:09', 0),
(15, '19', 'USR007', 'h', '2023-01-08 20:35:06', 1),
(16, '36', 'USR022', 'hsaii', '2023-01-10 14:39:48', 0),
(17, '36', 'USR007', 'youmall', '2023-01-10 14:41:28', 1),
(18, '36', 'USR022', 'iya apa', '2023-01-10 14:42:03', 1),
(19, '38', 'USR022', 'woyy', '2023-01-10 14:43:51', 1),
(20, '40', 'USR007', 'betul kah seperti itu mas ?', '2023-01-12 22:12:24', 1),
(21, '40', 'USR009', 'iya betul mas, saya di kampung seperti itu kok ', '2023-01-12 22:12:49', 1),
(22, '28', 'USR009', 'lho emang ngaruh ya gara gara perang minyak dunia bisa naik ? ttest', '2023-01-12 22:15:31', 0),
(23, '41', 'USR007', 'sama sama naik juga toh, kemungkinan penyebabnya sih dari distributornya naik, itu menurut pandangan saya ya', '2023-01-12 22:35:23', 1),
(24, '43', 'USR009', 'saya  tuh pakenya pupuk organik 1/2 dan pupuk kimia 1/2', '2023-01-12 22:49:05', 1),
(25, '43', 'USR007', 'ohh pantes takaran tersebut terlalu berlebih, seharusnya 3/4 organik dan 1/4 kimia', '2023-01-12 22:48:32', 0),
(26, '28', 'USR007', 'emang berpengaruh banget ya ?', '2023-01-13 09:21:08', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(10) NOT NULL,
  `id_akun` varchar(10) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `id_akun`, `nama_kategori`, `keterangan`, `status`) VALUES
('KTG001', 'USR002', 'Agribisnis', 'Berisi tentang seputar pertanian atau tanaman ', 1),
('KTG002', 'USR003', 'Kuliner', 'Berisi tentang terkait usaha makanan atau junk food', 1),
('KTG003', 'USR004', 'Fashion', 'Berisi tentang hal yang meliputi pakaian, aksesoris dan topi', 1),
('KTG004', 'USR003', 'Kelontong', 'Berisi tentang barang barang di kehidupan rumah tangga', 1),
('KTG005', 'USR003', 'Digital', 'Berisi hal yang melingkupi tentang hal digital seperti jual beli followers design website, pembuatan website, domain website, dan sebagainya.', 1),
('KTG006', 'USR003', 'Agrobisnis', 'Berisi usaha yang bergerak pada sektor pertanian maupun peternakan. ', 1),
('KTG007', 'USR003', 'Skincare', 'Berisi tentang hal yang didalamnya mencakup hal hal kecantikan wanita atupun perawatan pria 1', 1),
('KTG009', 'USR004', 'Jasa Foto dan Video', 'Berisi tentang hal yang berhubungan dengan fotografi ataupun videografi seperti prewedding, wedding, wisuda, anniversary, dan lainnya. ', 1),
('KTG011', 'USR003', 'Otomotif', 'Berisi tentang hal yang mencakup hal hal atau part part yang ada pada kendaraan', 1),
('KTG012', 'USR003', 'grgrgr', 'ini merupakan kategori', 1),
('KTG013', 'USR003', 's', 'zxdddssssssssssdz', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(10) NOT NULL,
  `id_topik` varchar(10) NOT NULL,
  `id_akun` varchar(10) NOT NULL,
  `isi_komentar` varchar(500) NOT NULL,
  `waktu_komentar` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_topik`, `id_akun`, `isi_komentar`, `waktu_komentar`, `status`) VALUES
(16, '32', 'USR010', 'tes komentar', '2022-12-28 17:13:36', 1),
(17, '32', 'USR010', 'wkwkw', '2022-12-28 17:16:15', 1),
(18, '32', 'USR010', 'edit komentar hewla atuh', '2022-12-28 17:48:18', 0),
(19, '35', 'USR001', 'edit komentar wkwkwk', '2022-12-28 18:49:25', 1),
(20, '35', 'USR010', 'komentar wkwkwk', '2022-12-28 18:56:50', 1),
(21, '48', 'USR017', 'kalo gak salah sih ada mafia beras gitu', '2022-12-28 21:10:37', 1),
(22, '48', 'USR017', 'kalo gak salah sih ada mafia beras gitu', '2022-12-28 21:10:37', 0),
(28, '38', 'USR019', 'Pernah sih denger kalo gak salah gara gara perang ukraina vs rusia ', '2022-12-28 21:15:17', 1),
(29, '48', 'USR019', 'Test', '2022-12-28 21:15:35', 0),
(30, '52', 'USR021', 'Test edit komentar', '2023-01-05 16:09:46', 0),
(31, '52', 'USR007', 'Test Komentar Rian', '2023-01-05 16:08:38', 1),
(32, '52', 'USR003', 'Test Komentar Youmal', '2023-01-05 16:09:03', 1),
(33, '55', 'USR023', 'Iya betul, kemarin saya beli roller naik harganya', '2023-01-06 13:28:19', 1),
(34, '56', 'USR003', '1234asdas', '2023-01-08 19:23:17', 0),
(35, '56', 'USR007', 'ppp', '2023-01-08 20:15:46', 1),
(36, '58', 'USR022', 'trs', '2023-01-10 14:39:27', 1),
(37, '58', 'USR022', 'loolo', '2023-01-10 14:42:34', 1),
(38, '59', 'USR022', 'woyy', '2023-01-10 14:43:43', 1),
(39, '60', 'USR007', 'test', '2023-01-12 21:46:37', 1),
(40, '61', 'USR009', 'Coba anda cek hama di kebun anda, itu biasanya menggangu banget', '2023-01-12 22:11:47', 1),
(41, '62', 'USR009', 'iya saya juga beli, malah hampir 60rb di daerah saya ', '2023-01-12 22:32:26', 0),
(42, '62', 'USR003', 'Itu penyebabnya gara gara stok pupuk di gudangnya menipis', '2023-01-12 22:34:31', 1),
(43, '63', 'USR007', 'Emangnya pakai pupuk apa ?', '2023-01-12 22:47:09', 1),
(44, '63', 'USR003', 'ada hamanya kah ?', '2023-01-12 22:50:09', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `topik`
--

CREATE TABLE `topik` (
  `id_topik` int(10) NOT NULL,
  `id_kategori` varchar(10) NOT NULL,
  `id_akun` varchar(10) NOT NULL,
  `judul_topik` varchar(50) NOT NULL,
  `isi_topik` varchar(1000) NOT NULL,
  `waktu_topik` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `topik`
--

INSERT INTO `topik` (`id_topik`, `id_kategori`, `id_akun`, `judul_topik`, `isi_topik`, `waktu_topik`, `status`) VALUES
(27, 'KTG001', 'USR004', 'Harga cabai naik terus', 'Kenapa ya harga cabai naik secara terus menerus?', '2022-12-27 22:04:55', 1),
(28, 'KTG001', 'USR003', 'kkkm', 'nnj', '2022-12-28 06:10:54', 0),
(29, 'KTG001', 'USR003', 'ini topik', 'edit topik', '2022-12-28 01:19:30', 0),
(30, 'KTG001', 'USR003', '', '', '2022-12-28 07:21:41', 0),
(31, 'KTG001', 'USR007', 'tes topik', 'wkwkkw', '2022-12-28 08:24:01', 0),
(32, 'KTG012', 'USR007', 'ini merupakan judul topik', 'eeeeeeew', '2022-12-28 08:59:43', 0),
(33, 'KTG001', 'USR007', 'ini merupakan judul', 'ffee', '2022-12-28 08:55:06', 0),
(34, 'KTG001', 'USR010', 'ini judul topik', 'frfrfr', '2022-12-28 11:33:19', 0),
(35, 'KTG001', 'USR003', 'Kenaikan harga bahan baku pembuatan bakso ', 'Apakah kalian semua tau kenapa harga pembuatan bakso itu naik ?', '2023-01-12 14:41:50', 1),
(36, 'KTG004', 'USR003', 'Kenapa ya harga minyak naik terus ?', 'Apa kalian  tau penyebab minyak di pasar tuh naik terus kenapa ?', '2022-12-28 13:44:47', 0),
(37, 'KTG004', 'USR003', 'Apakah kalian tau penyebab harga minyak naik terus', 'Semakin hari ga kerasa harga minyak di pasar itu sampe 40 rb yaa, mungkin temen temen ada yg tau penyebabnya?', '2022-12-28 14:02:22', 0),
(38, 'KTG004', 'USR003', 'Penyebab Harga Minyak Naik', 'Apakah kalian tau kenapa minyak tuh naik terus ?', '2022-12-28 14:03:46', 1),
(48, 'KTG004', 'USR003', 'Kenapa ya harga beras tuh di pasaran naik terus?', 'Ada yg tau penyebabnya kah temen temen forum disini ?', '2022-12-28 14:08:34', 1),
(49, 'KTG001', 'USR003', 'xc', 'das', '2023-01-04 13:21:29', 0),
(50, 'KTG001', 'USR007', 'dx', 'ddd', '2023-01-04 13:22:42', 0),
(51, 'KTG005', 'USR021', 'Test', 'Test Edit Topik', '2023-01-05 09:04:53', 0),
(52, 'KTG002', 'USR007', 'Test 2 ', 'Test 2', '2023-01-05 09:01:46', 0),
(53, 'KTG003', 'USR007', 'test', 'testf f', '2023-01-08 14:29:50', 0),
(54, 'KTG001', 'USR007', 'ZCX', 'aaaa', '2023-01-08 13:23:24', 0),
(55, 'KTG011', 'USR003', 'Kenaikan Harga Sparepart Motor', 'Ternyata penyebab harga sparepart motor itu naik dikarenakan harga bahan baku yang naik di industri otomotif', '2023-01-12 14:42:57', 1),
(56, 'KTG003', 'USR003', 'aqq', 'sss', '2023-01-07 12:29:39', 0),
(57, 'KTG001', 'USR003', 'test', 'testaaasd', '2023-01-08 12:22:45', 0),
(58, 'KTG005', 'USR007', 's', 'as', '2023-01-10 04:56:29', 0),
(59, 'KTG001', 'USR022', 'Woy', 'awas', '2023-01-10 07:43:35', 0),
(60, 'KTG001', 'USR009', 'Haloo', 'test', '2023-01-12 14:46:22', 0),
(61, 'KTG006', 'USR007', 'Kenapa sih kok panen gagal terus?', 'Apakah kalian pada tau teman teman kenapa panen saya gagal terus  yaa? ', '2023-01-12 15:13:44', 0),
(62, 'KTG006', 'USR007', 'Penyebab Pupuk Naik ', 'Baru kemarin saya beli pupuk 1 karung ternyata naiknya hampir 50rb yaa, ada yg tau alasannya kenapa ?', '2023-01-12 15:31:46', 0),
(63, 'KTG001', 'USR009', 'Panen gagal terus', 'Duh kenapa ya kebun saya kok gagal panen terus udah 2 musim panen berturut turut ', '2023-01-12 15:46:38', 0);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_komentar`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_komentar` (
`id_komentar` int(10)
,`id_topik` varchar(10)
,`id_akun` varchar(10)
,`isi_komentar` varchar(500)
,`waktu_komentar` datetime
,`status` int(11)
,`username` varchar(20)
,`foto_profile` text
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_laporandiskusi`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_laporandiskusi` (
`Judul_Topik` varchar(50)
,`Kategori` varchar(100)
,`Jumlah_Komentar` bigint(21)
,`Jumlah_Balasan` bigint(21)
,`Waktu` timestamp
);

-- --------------------------------------------------------

--
-- Struktur untuk view `view_komentar`
--
DROP TABLE IF EXISTS `view_komentar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_komentar`  AS SELECT `komentar`.`id_komentar` AS `id_komentar`, `komentar`.`id_topik` AS `id_topik`, `komentar`.`id_akun` AS `id_akun`, `komentar`.`isi_komentar` AS `isi_komentar`, `komentar`.`waktu_komentar` AS `waktu_komentar`, `komentar`.`status` AS `status`, `akun`.`username` AS `username`, `akun`.`foto_profile` AS `foto_profile` FROM (`komentar` join `akun` on(`akun`.`id_akun` = `komentar`.`id_akun`)) WHERE `komentar`.`id_topik` = `komentar`.`id_topik` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_laporandiskusi`
--
DROP TABLE IF EXISTS `view_laporandiskusi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_laporandiskusi`  AS SELECT `t`.`judul_topik` AS `Judul_Topik`, `k`.`nama_kategori` AS `Kategori`, count(`c`.`id_komentar`) AS `Jumlah_Komentar`, count(`b`.`id_balasan`) AS `Jumlah_Balasan`, `t`.`waktu_topik` AS `Waktu` FROM (((`topik` `t` join `kategori` `k` on(`t`.`id_kategori` = `k`.`id_kategori`)) left join `komentar` `c` on(`t`.`id_topik` = `c`.`id_topik`)) left join `balasan` `b` on(`c`.`id_komentar` = `b`.`id_komentar`)) WHERE `t`.`status` = '1' GROUP BY `t`.`id_topik` ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `balasan`
--
ALTER TABLE `balasan`
  ADD PRIMARY KEY (`id_balasan`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indeks untuk tabel `topik`
--
ALTER TABLE `topik`
  ADD PRIMARY KEY (`id_topik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `balasan`
--
ALTER TABLE `balasan`
  MODIFY `id_balasan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `topik`
--
ALTER TABLE `topik`
  MODIFY `id_topik` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
