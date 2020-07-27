-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jul 2020 pada 13.44
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen`
--

CREATE TABLE `absen` (
  `id_absen` int(10) NOT NULL,
  `id_kar` varchar(20) NOT NULL,
  `nama_kar` varchar(25) NOT NULL,
  `in` varchar(20) NOT NULL,
  `out` varchar(20) NOT NULL,
  `overtime` varchar(10) NOT NULL,
  `ket` varchar(10) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `absen`
--

INSERT INTO `absen` (`id_absen`, `id_kar`, `nama_kar`, `in`, `out`, `overtime`, `ket`, `date`) VALUES
(230, '2199806251', 'eddy', '7:00:00 AM', '17:00:00 PM', '3.5', 'Tepat Wakt', '2020-07-02'),
(231, '1199503122', 'hilman', '8:30:00 AM', '18:00:00 PM', '1.5', 'Tepat Wakt', '2020-07-02'),
(232, '4199609131', 'hilman', '6:30:00 AM', '18:00:00 PM', '5.5', 'Tepat Wakt', '2020-07-02'),
(233, '2199806251', 'aldi', '7:00:00 AM', '17:00:00 PM', '3.5', 'Tepat Wakt', '2020-07-01'),
(234, '1199503122', 'samsul', '8:30:00 AM', '18:00:00 PM', '1.5', 'Tepat Wakt', '2020-07-01'),
(235, '4199609131', 'gina', '6:30:00 AM', '18:00:00 PM', '5.5', 'Tepat Wakt', '2020-07-01'),
(236, '2199806251', 'aldi', '7:00:00 AM', '17:00:00 PM', '3.5', 'Tepat Wakt', '2020-06-30'),
(237, '1199503122', 'samsul', '8:30:00 AM', '18:00:00 PM', '1.5', 'Tepat Wakt', '2020-06-30'),
(238, '4199609131', 'gina', '6:30:00 AM', '18:00:00 PM', '5.5', 'Tepat Wakt', '2020-06-30'),
(239, '2199806251', 'aldi', '7:00:00 AM', '17:00:00 PM', '3.5', 'Tepat Wakt', '2020-07-03'),
(240, '1199503122', 'samsul', '8:30:00 AM', '18:00:00 PM', '1.5', 'Tepat Wakt', '2020-07-03'),
(241, '4199609131', 'gina', '6:30:00 AM', '0:00:00 AM', '0', 'Tepat Wakt', '2020-07-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_anak`
--

CREATE TABLE `data_anak` (
  `id_anak` int(10) NOT NULL,
  `id_kar` varchar(20) NOT NULL,
  `nama_lengkap_anak` varchar(50) NOT NULL,
  `nama_panggilan_anak` varchar(20) NOT NULL,
  `tempat_anak` varchar(20) NOT NULL,
  `ttl_anak` varchar(20) NOT NULL,
  `no_ktp_anak` varchar(25) NOT NULL,
  `alamat_saat_ini_anak` varchar(255) NOT NULL,
  `tingkat_pendidikan_anak` varchar(25) NOT NULL,
  `no_telp_anak` varchar(20) NOT NULL,
  `agama_anak` varchar(10) NOT NULL,
  `warganegara_anak` varchar(10) NOT NULL,
  `suku_anak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_anak`
--

INSERT INTO `data_anak` (`id_anak`, `id_kar`, `nama_lengkap_anak`, `nama_panggilan_anak`, `tempat_anak`, `ttl_anak`, `no_ktp_anak`, `alamat_saat_ini_anak`, `tingkat_pendidikan_anak`, `no_telp_anak`, `agama_anak`, `warganegara_anak`, `suku_anak`) VALUES
(1, '1202005081', 'hilman hamidi', 'hilman', 'banjarbaru', '2020-06-22', '11111111111111', 'tapin', 'S1', '2222222222', 'Islam', 'indonesia', 'banjar'),
(3, '1202005081', 'ijul', '', '', '', '', '', '', '', '', '', ''),
(4, '2199806251', 'Alfa Tihah', 'Alfa', 'Tatakan', '2020-01-10', '1603055807100001', 'Desa Tatakan, Tapin Selatan', '', '', 'Islam', 'Indonesia', 'Banjar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang`
--

CREATE TABLE `data_barang` (
  `id` int(11) NOT NULL,
  `item` varchar(120) NOT NULL,
  `qty` varchar(120) NOT NULL,
  `satuan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_barang`
--

INSERT INTO `data_barang` (`id`, `item`, `qty`, `satuan`) VALUES
(1, 'Amplop Coklat C3', '5', 'Pack'),
(2, 'Amplop Coklat D (folio) Samson', '5', 'Pack'),
(3, 'Amplop jaya 95x152mm', '11', 'Pack'),
(4, 'Amplop Surat Putih (110 x 230 mm)', '1', 'Pack'),
(5, 'Ball Point Snowman V5 Hitam', '50', 'Pcs'),
(6, 'Ballpoint Boxy Uni Ball 105 (Biru)', '31', 'Pcs'),
(7, 'Ballpoint Boxy Uni Ball 105 (Hitam)', '37', 'Pcs'),
(8, 'Ballpoint Pilot G2 - 07 Hitam', '24', 'Pcs'),
(9, 'Ballpoint Pilot G2 - 07 Biru', '6', 'Pcs'),
(10, 'Battery Size AA 1,5V Alkaline (Panasonic)', '66', 'Psg'),
(11, 'Battery Size AAA  Alkaline (Panasonic)', '20', 'Psg'),
(12, 'Battery Tanggung Tipe C', '6', 'Psg'),
(13, 'Buku 1/2 Folio', '5', 'Pcs'),
(14, 'Buku Hard Cover Folio 100 lbr', '4', 'Pcs'),
(15, 'Buku Saku (Note Boke PCA-156-80)', '3', 'Pcs'),
(16, 'Catridge Canon 810', '2', 'Pcs'),
(17, 'Catridge Canon 811', '3', 'Pcs'),
(18, 'Clip Board Plastik / Mika', '4', 'Pcs'),
(19, 'Cutter L-500', '5', 'Pcs'),
(20, 'Double Tape 1\"', '6', 'Pcs'),
(21, 'Double Tape 2\"', '7', 'Pcs'),
(22, 'Double Tape Busa', '8', 'Pcs'),
(23, 'Gunting Besar', '9', 'Pcs'),
(24, 'Isi Cutter L-150', '7', 'Pack'),
(25, 'Isi Staples Besar No.3-1', '6', 'Pack'),
(26, 'Isi Staples Kecil No.10', '5', 'Pack'),
(27, 'Jumbo Box Down Bantex', '4', 'Pcs'),
(28, 'Kertas cover jilid', '3', 'Pack'),
(29, 'Kertas HVS A4', '2', 'Rim'),
(30, 'Kertas HVS F4', '21', 'Rim'),
(31, 'Kertas Karton Putih', '2', 'Pcs'),
(32, 'Kertas Sertifikat Linen Folio', '3', 'Pack'),
(33, 'Kertas 2 Ply', '4', 'Box'),
(34, 'Kertas 3 Ply', '5', 'Box'),
(35, 'Kwitansi Kecil', '4', 'Pcs'),
(36, 'Lakban Bening 2\"', '6', 'Pcs'),
(37, 'Lakban Coklat 2\"', '2', 'Pcs'),
(38, 'Lakban Hitam 2\"', '1', 'Pcs'),
(39, 'Lakban Kertas 2\" (Masking Tape)', '4', 'Pcs'),
(40, 'Lem Stik 22 Gr No.8211 (Glue Stick)', '5', 'Pcs'),
(41, 'Materai 6000', '6', 'Pcs'),
(42, 'Nota Kontan Kecil 1 Ply', '7', 'Pcs'),
(43, 'Otner Bantex Folio -7cm', '8', 'Pcs'),
(44, 'Paper Clip No.3', '6', 'Pack'),
(45, 'Penggaris 30 CM', '7', 'Pcs'),
(46, 'Pensil 2B', '5', 'Pcs'),
(47, 'Pita Printer LQ 2190 Original', '5', 'Pcs'),
(48, 'Pockets Sheets Protector ukuran A4', '2', 'Pcs'),
(49, 'Plastik cover jilid', '3', 'Pack'),
(50, 'Plastik Laminating (folio)', '0', 'Pack'),
(51, 'Plastik laminating KTP 250 micron', '2', 'Pack'),
(52, 'Post It 654', '3', 'Pcs'),
(53, 'Post It 655', '4', 'Pcs'),
(54, 'Post It Mark & Note', '6', 'Pcs'),
(55, 'Post IT Sign Here', '7', 'Pcs'),
(56, 'Push Pin', '8', 'Pack'),
(57, 'Spidol Board Marker Hitam', '9', 'Pcs'),
(58, 'Spidol Paint Marker Putih', '4', 'Pcs'),
(59, 'Spidol Permanent Hitam', '8', 'Pcs'),
(60, 'Spidol Snowman OPM Medium For OHP Marker', '75', 'Pcs'),
(61, 'Stabilo Warna Hijau', '4', 'Pcs'),
(62, 'Stabilo Warna Orange', '3', 'Pcs'),
(63, 'Stapler HD-10 kecil Joyko', '3', 'Pcs'),
(64, 'Stella Daily Fresh', '5', 'Pcs'),
(65, 'Stella Gantung', '17', 'Pcs'),
(66, 'Sterofoam', '1', 'Pcs'),
(67, 'Suspinsion file', '1', 'Pack'),
(68, 'Tas file', '1', 'Pcs'),
(69, 'Tinta E-Print Black 200 ml', '34', 'Btl'),
(70, 'Tissue Paseo Reffil isi 280 Sheet', '5', 'Pack'),
(71, 'Type X (Correction Pen)', '6', 'Pcs'),
(74, 'tes', '2', 'pack'),
(87, 'polpen', '2000', 'buah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_catering`
--

CREATE TABLE `data_catering` (
  `id` int(11) NOT NULL,
  `mitra` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kontrak_awal` varchar(20) NOT NULL,
  `akhir_kontrak` varchar(20) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_catering`
--

INSERT INTO `data_catering` (`id`, `mitra`, `alamat`, `kontrak_awal`, `akhir_kontrak`, `ket`) VALUES
(5, '', '', '2020-05-31', '2020-05-31', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_driver_sarana`
--

CREATE TABLE `data_driver_sarana` (
  `id_drive` int(10) NOT NULL,
  `id_sarana` varchar(50) NOT NULL,
  `id_karyawan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_driver_sarana`
--

INSERT INTO `data_driver_sarana` (`id_drive`, `id_sarana`, `id_karyawan`) VALUES
(1, '184', '1199704172'),
(2, '172', '1199704172'),
(3, '172', '3202005301');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_karyawan`
--

CREATE TABLE `data_karyawan` (
  `id_karyawan` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nama_panggilan` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `ttl` varchar(25) NOT NULL,
  `alamat_saat_ini` text NOT NULL,
  `alamat_permanen` text NOT NULL,
  `no_telp` varchar(25) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `warganegra` varchar(20) NOT NULL,
  `suku` varchar(20) NOT NULL,
  `no_ktp` int(20) NOT NULL,
  `alamat_ktp` text NOT NULL,
  `masa_berlaku_ktp` varchar(10) NOT NULL,
  `no_sim_a` int(20) NOT NULL,
  `alamat_sim_a` text NOT NULL,
  `masa_berlaku_sim_a` varchar(10) NOT NULL,
  `no_sim_c` int(20) NOT NULL,
  `alamat_sim_c` text NOT NULL,
  `masa_berlaku_sim_c` varchar(10) NOT NULL,
  `no_npwp` int(20) NOT NULL,
  `no_bpjs_tenagakerja` int(20) NOT NULL,
  `no_bpjs_kes` int(20) NOT NULL,
  `no_passport` int(20) NOT NULL,
  `alamat_passport` text NOT NULL,
  `masa_berlaku_passport` varchar(10) NOT NULL,
  `tinggi_badan` varchar(10) NOT NULL,
  `berat_badan` varchar(10) NOT NULL,
  `rhesus` varchar(10) NOT NULL,
  `ukuran_baju` varchar(10) NOT NULL,
  `ukuran_celana` varchar(10) NOT NULL,
  `ukuran_sepatu` varchar(10) NOT NULL,
  `hobi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_dep` int(10) NOT NULL,
  `id_jab` int(10) NOT NULL,
  `status_karyawan` varchar(50) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_karyawan`
--

INSERT INTO `data_karyawan` (`id_karyawan`, `nama_lengkap`, `nama_panggilan`, `jk`, `tempat`, `ttl`, `alamat_saat_ini`, `alamat_permanen`, `no_telp`, `agama`, `warganegra`, `suku`, `no_ktp`, `alamat_ktp`, `masa_berlaku_ktp`, `no_sim_a`, `alamat_sim_a`, `masa_berlaku_sim_a`, `no_sim_c`, `alamat_sim_c`, `masa_berlaku_sim_c`, `no_npwp`, `no_bpjs_tenagakerja`, `no_bpjs_kes`, `no_passport`, `alamat_passport`, `masa_berlaku_passport`, `tinggi_badan`, `berat_badan`, `rhesus`, `ukuran_baju`, `ukuran_celana`, `ukuran_sepatu`, `hobi`, `email`, `id_dep`, `id_jab`, `status_karyawan`, `foto`) VALUES
('1199503122', 'Syamsul Suriadi', 'Syam', 'Laki-Laki', 'Kotabaru', '1995-03-12', 'Kupang, Rantau, Kalimantan Selatan', 'Kupang, Rantau, Kalimantan Selatan', '081387651095', 'Islam', 'Indonesia', 'Banjar', 2147483647, 'Kotabaru', '2023-03-12', 0, '', '', 2147483647, 'Kotabaru', '2025-03-12', 2147483647, 2147483647, 128496922, 0, '', '', '170', '65', 'O', 'L', 'L', '43', 'Memancing', 's.syamsul@gmail.com', 1, 14, 'Aktif', '292912e8cbc03dda29214d2c61feb807.png'),
('1202005081', 'eddy adha saputra', 'eddy', 'Laki-Laki', 'tapin', '2020-05-08', 'Tapin\r\n', '', '', '', '', '', 0, '', '', 0, '', '', 0, '', '', 0, 0, 0, 0, '', '', '112', '', '', '', '', '', '', '', 1, 12, '', 'foto.jpg'),
('1202007034', 'mas jordy', 'jordy', 'Laki-Laki', 'tapin', '2020-07-03', '', '', '083159982119', '', '', '', 0, '', '', 0, '', '', 0, '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 1, 2, '', ''),
('2199806251', 'Muhammad Aldi', 'Aldi', 'Laki-Laki', 'Tatakan', '1998-06-25', 'Jl. A. Yani, Tatakan Datu Sanggul', 'Jl. A. Yani, Tatakan Datu Sanggul', '081346814830', 'Islam', 'Indonesia', 'Banjar', 2147483647, 'Jl. A. Yani, Tatakan Datu Sanggul, Tapin Selatan, Tapin, Kalimantan Selatan', '2021-06-25', 0, '', '', 2147483647, 'Jl. A. Yani, Tatakan Datu Sanggul, Tapin Selatan, Tapin, Kalimantan Selatan', '2025-06-25', 2147483647, 2147483647, 127496931, 0, '', '', '165', '60', 'B ', 'L', 'L', '40', 'Menggambar', 'aldi555@gmail.com', 2, 15, '', 'main-list-image2nd-b016a720-04e2-4536-bcac-b82f60ee00a3-7.jpeg'),
('3199607191', 'Berlian Mutiara Senduk', 'Lian', 'Perempuan', 'Balikpapan', '1996-07-19', 'Pulau Pinang', 'Pulau Pinang', '089856701242', 'Kristen', 'Indonesia', 'Toraja', 2147483647, 'Jl. A. Yani, Tapin Utara, Tapin, Kalimantan Selatan', '2023-07-19', 0, '', '', 2147483647, 'Jl. A. Yani, Tapin Utara, Tapin, Kalimantan Selatan', '2024-07-19', 2147483647, 2147483647, 146496942, 0, '', '', '160', '49', 'AB', 'S', 'S', '37', 'Menulis', 'berlian.mutiara@gmail.com', 1, 15, '', 'pas-foto-3x4.jpg'),
('4199609131', 'Gina Sonia', 'Gina', 'Perempuan', 'Tatakan', '1996-09-13', 'Desa Tatakan, Tapin Selatan, Tapin, Kalimantan Sekatan', 'Desa Tatakan, Tapin Selatan, Tapin, Kalimantan Sekatan', '081337426207', 'Islam', 'Indonesia', 'Banjar', 2147483647, 'Jl. A. Yani, Tatakan Datu Sanggul, Tapin Selatan, Tapin, Kalimantan Selatan', '2022-09-13', 0, '', '', 2147483647, 'Jl. A. Yani, Tatakan Datu Sanggul, Tapin Selatan, Tapin, Kalimantan Selatan', '2022-09-13', 2147483647, 2147483647, 121346531, 0, '', '', '159', '40', 'A', 'S', 'S', '37', 'Memasak', 'gisoni@gmail.com', 4, 2, '', 'b33296bb-4994-4284-b69c-9309efdba868_34.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mess_lahan`
--

CREATE TABLE `data_mess_lahan` (
  `id` int(12) NOT NULL,
  `mess_lahan` varchar(50) NOT NULL,
  `nama_perum` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(25) NOT NULL,
  `no_speedy` varchar(25) NOT NULL,
  `no_fax` varchar(25) NOT NULL,
  `no_okvision` varchar(25) NOT NULL,
  `no_listrik` varchar(25) NOT NULL,
  `no_pdam` varchar(25) NOT NULL,
  `awal_kontrak` varchar(25) NOT NULL,
  `akhir_kontrak` varchar(25) NOT NULL,
  `harga_sewa` varchar(25) NOT NULL,
  `kapasitas` varchar(25) NOT NULL,
  `jumlah_kamar` varchar(25) NOT NULL,
  `perjanjian` varchar(25) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_mess_lahan`
--

INSERT INTO `data_mess_lahan` (`id`, `mess_lahan`, `nama_perum`, `alamat`, `no_telp`, `no_speedy`, `no_fax`, `no_okvision`, `no_listrik`, `no_pdam`, `awal_kontrak`, `akhir_kontrak`, `harga_sewa`, `kapasitas`, `jumlah_kamar`, `perjanjian`, `ket`) VALUES
(3, 'SINERGI 3', 'ZULFAN S.SOS', 'JL. JEND SUDIRMAN RT 09 KEL. RANGDA MALINGKUNG KEC. TAPIN UTARA KAB. TAPIN', '05172034073', '0162221900177', '-', '401000922598', '14 0014 4977 7', '015955', '2019-03-23', '2019-11-30', 'Rp55.000.000', '12', '8', '?', ''),
(4, 'SINERGI 4', 'NURIANSYAH', 'JL. JENDRAL SUDIRMAN DESA BUNGUR KEC. BUNGUR KAB. TAPIN', '-', '-', '-', '-', '36002276214', '014875', '2019-06-10', '2020-06-09', 'Rp41.000.000', '13', '6', 'Proses HO', 'Belum di bayar'),
(5, 'SINERGI 5', 'M. YANI S.SOS', 'JL. JEND SUDIRMAN RT 09 KEL. RANGDA MALINGKUNG KEC. TAPIN UTARA KAB. TAPIN', '05172034060', '162221200273', '05172034061', '-', '39 1204 11556', '015401', '2019-05-01', '2020-04-30', 'Rp40.000.000', '14', '5', '?', ''),
(6, 'SINERGI 6', 'BARNIAH', 'JL. JEND SUDIRMAN KOMPLEK ASABRI RT 09 KEL. RANGDA MALINGKUNG KEC. TAPIN UTARA KAB. TAPIN', '', '', '', '', '', '', '2019-08-20', '2020-08-19', 'Rp18.000.000', '5', '3', 'Proses HO', 'Belum di bayar'),
(7, 'SINERGI 7', 'M. YUNAN', 'JL. JEND SUDIRMAN KOMPLEK ASABRI RT 09 KEL. RANGDA MALINGKUNG KEC. TAPIN UTARA KAB. TAPIN', '', '', '', '', '', '', '2018-11-06', '2025-11-05', 'Rp12.000.000', '4', '2', '?', ''),
(8, 'SINERGI 8', 'Hj. RITA HERDALINA, S.Pd, MM', '', '', '', '', '', '', '', '2019-05-07', '2020-05-06', 'Rp38.000.000', '14', '6', '?', ''),
(11, 'LAHAN PARKIR TAMBANG', 'ACHFIDA YULIANTI', 'DESA BITAHAN BARU KECAMATAN LOKPAIKAT BPATEN TAPIN KAL-SEL', '', '', '', '', '', '', '2019-01-02', '2021-01-01', 'Rp7.000.000', '-', '-', '?', ''),
(13, 'MESS BMC', 'Norhan', '', '', '', '', '', '', '', '2019-04-01', '2020-03-31', 'Rp35.000.000', '-', '-', '?', ''),
(14, 'TRAINING CENTER', 'Hj.NOORFATMAWATI', '', '', '', '', '', '', '', '2019-05-01', '2020-04-30', 'Rp40.000.000', '-', '-', '?', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_orang_tua`
--

CREATE TABLE `data_orang_tua` (
  `id_ortu` int(10) NOT NULL,
  `id_kar` varchar(20) NOT NULL,
  `nama_lengkap_ortu_lk` varchar(25) NOT NULL,
  `nama_panggilan_ortu_lk` varchar(20) NOT NULL,
  `tempat_ortu_lk` varchar(20) NOT NULL,
  `ttl_ortu_lk` varchar(20) NOT NULL,
  `no_ktp_ortu_lk` varchar(20) NOT NULL,
  `alamat_saat_ini_ortu_lk` varchar(255) NOT NULL,
  `tingkat_pendidikan_ortu_lk` varchar(20) NOT NULL,
  `no_telp_ortu_lk` varchar(20) NOT NULL,
  `agama_ortu_lk` varchar(20) NOT NULL,
  `warganegara_ortu_lk` varchar(20) NOT NULL,
  `suku_ortu_lk` varchar(20) NOT NULL,
  `nama_lengkap_ortu_pr` varchar(25) NOT NULL,
  `nama_panggilan_ortu_pr` varchar(20) NOT NULL,
  `tempat_ortu_pr` varchar(20) NOT NULL,
  `ttl_ortu_pr` varchar(20) NOT NULL,
  `no_ktp_ortu_pr` varchar(20) NOT NULL,
  `alamat_saat_ini_ortu_pr` varchar(255) NOT NULL,
  `tingkat_pendidikan_ortu_pr` varchar(20) NOT NULL,
  `no_telp_ortu_pr` varchar(20) NOT NULL,
  `agama_ortu_pr` varchar(20) NOT NULL,
  `warganegara_ortu_pr` varchar(20) NOT NULL,
  `suku_ortu_pr` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_orang_tua`
--

INSERT INTO `data_orang_tua` (`id_ortu`, `id_kar`, `nama_lengkap_ortu_lk`, `nama_panggilan_ortu_lk`, `tempat_ortu_lk`, `ttl_ortu_lk`, `no_ktp_ortu_lk`, `alamat_saat_ini_ortu_lk`, `tingkat_pendidikan_ortu_lk`, `no_telp_ortu_lk`, `agama_ortu_lk`, `warganegara_ortu_lk`, `suku_ortu_lk`, `nama_lengkap_ortu_pr`, `nama_panggilan_ortu_pr`, `tempat_ortu_pr`, `ttl_ortu_pr`, `no_ktp_ortu_pr`, `alamat_saat_ini_ortu_pr`, `tingkat_pendidikan_ortu_pr`, `no_telp_ortu_pr`, `agama_ortu_pr`, `warganegara_ortu_pr`, `suku_ortu_pr`) VALUES
(6, '1202005081', 'ayah', '', '', '', '', '', '', '', '', '', '', 'ibu', '', '', '', '', '', '', '', '', '', ''),
(7, '2199806251', 'Damar', 'Amar', 'Rantau', '1987-07-17', '630503350870001', 'Rantau, Tapin, Kalimantan Selatan', 'SMA/SMK/MA', '082254187451', 'Islam', 'Indonesia', 'Banjar', 'Sukinah', 'Kinah', 'Kediri', '1989-04-09', '630502250890002', 'Rantau, Tapin, Kalimantan Selatan', 'SMP/MTs', '085398715534', 'Islam', 'Indonesia', 'Sunda'),
(8, '1199503122', 'Suriadi Ismail', 'Mail', 'Kotabaru', '1969-11-23', '630502250690001', 'Kotabaru', 'SMA/SMK/MA', '082254341298', 'Islam', 'Indonesia', 'Banjar', 'Partiyem', 'Iyem', 'Kidul', '1975-07-21', '630402230750002', 'Kotabaru', 'SMA/SMK/MA', '085334765123', 'Islam', 'Indonesia', 'Jawa'),
(9, '3199607191', 'Klaudius Stevanus Senduk', 'Evan', 'Banjarmasin', '1970-05-23', '630502250700001', 'Sungai Ulin, Banjarmasin', 'S3', '081328756312', 'Kristen', 'Indonesia', 'Toraja', 'Kristiani Mutiara Senduk', 'Ani', 'Banjarbaru', '1975-07-18', '630502250750002', 'Sungai Ulin, Banjarmasin', 'S1', '085234750908', 'Kristen', 'Indonesia', 'Banjar'),
(10, '4199609131', 'Ahmad Amin', 'Amat', 'Tandui', '1971-12-12', '630502250710001', 'Jl. A. Yani, Tapin Tengah, Tapin, Kalimantan Selatan', 'SMA/SMK/MA', '081154101890', 'Islam', 'Indonesia', 'Banjar', 'Aisyah ', 'Isah', 'Kupang', '1976-08-19', '630502250760002', 'Jl. A. Yani, Tapin Tengah, Tapin, Kalimantan Selatan', 'SMA/SMK/MA', '082174123451', 'Islam', 'Indonesia', 'Banjar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_order`
--

CREATE TABLE `data_order` (
  `id_order` int(10) NOT NULL,
  `id_keranjang` varchar(255) NOT NULL,
  `id_barang` varchar(255) NOT NULL,
  `id_dep` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `qty_order` varchar(255) NOT NULL,
  `tanggal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_order`
--

INSERT INTO `data_order` (`id_order`, `id_keranjang`, `id_barang`, `id_dep`, `user_id`, `qty_order`, `tanggal`) VALUES
(80, '1', '1', '3', 'hr', '1', '2020-05-31'),
(81, '1', '4', '3', 'hr', '2', '2020-05-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_overtime`
--

CREATE TABLE `data_overtime` (
  `id_ovr` int(10) NOT NULL,
  `id_kar` int(20) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `excel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pasangan`
--

CREATE TABLE `data_pasangan` (
  `id_pasangan` int(10) NOT NULL,
  `id_kar` varchar(20) NOT NULL,
  `nama_lengkap_pasangan` varchar(50) NOT NULL,
  `nama_panggilan_pasangan` varchar(25) NOT NULL,
  `tempat_pasangan` varchar(25) NOT NULL,
  `ttl_pasangan` varchar(20) NOT NULL,
  `no_ktp_pasangan` varchar(20) NOT NULL,
  `alamat_saat_ini_pasangan` varchar(255) NOT NULL,
  `pendidikan_pasangan` varchar(25) NOT NULL,
  `telpon_pasangan` varchar(25) NOT NULL,
  `agama_pasangan` varchar(25) NOT NULL,
  `warganegra_pasangan` varchar(25) NOT NULL,
  `suku_pasangan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pasangan`
--

INSERT INTO `data_pasangan` (`id_pasangan`, `id_kar`, `nama_lengkap_pasangan`, `nama_panggilan_pasangan`, `tempat_pasangan`, `ttl_pasangan`, `no_ktp_pasangan`, `alamat_saat_ini_pasangan`, `pendidikan_pasangan`, `telpon_pasangan`, `agama_pasangan`, `warganegra_pasangan`, `suku_pasangan`) VALUES
(1, '1202005081', 'aluh ', 'aluh', 'tapin', '2020-06-20', '11111111111111', '', 'SMA/SMK/MA', '1212121212', 'Islam', 'ind', 'banjar'),
(4, '2199806251', 'Mawar', 'Mawar', 'Suato Tatakan', '1997-12-01', '630504450970002', 'Tatakan', 'SMA/SMK/MA', '081377908415', 'Islam', 'Indonesia', 'Dayak'),
(5, '1199503122', 'Laila Indriyani', 'Ila', 'Rantau', '1999-06-12', '630402260990002', 'Kupang, Rantau, Kalimantan Selatan', 'SMA/SMK/MA', '', 'Islam', 'Indonesia', 'Banjar'),
(6, '3199607191', 'Eddy Bernandus', 'Eddy', 'Malang', '1990-04-17', '630502240900001', 'Banjarmasin', 'S2', '085543198720', 'Kristen', 'Indonesia', 'Batak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penghuni_mess`
--

CREATE TABLE `data_penghuni_mess` (
  `id_penghuni` int(10) NOT NULL,
  `id_mess` varchar(50) NOT NULL,
  `id_karyawan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_penghuni_mess`
--

INSERT INTO `data_penghuni_mess` (`id_penghuni`, `id_mess`, `id_karyawan`) VALUES
(4, '3', '1199503122'),
(5, '3', '3199607191');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_riwayat_pelatihan`
--

CREATE TABLE `data_riwayat_pelatihan` (
  `id_pelatihan` int(10) NOT NULL,
  `id_kar` varchar(20) NOT NULL,
  `bidang` varchar(20) NOT NULL,
  `penyelenggara` varchar(25) NOT NULL,
  `periode` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_riwayat_pelatihan`
--

INSERT INTO `data_riwayat_pelatihan` (`id_pelatihan`, `id_kar`, `bidang`, `penyelenggara`, `periode`) VALUES
(2, '1202005081', 'jaringan', 'bnsp', '2019'),
(3, '2199806251', 'Komputer', 'BPNS', '2016'),
(4, '1199503122', 'Mekanik', 'Balai Tenaga Kerja', '2019'),
(5, '3199607191', 'Komputer', 'Kursus Kereta Kencana', '2016'),
(6, '3199607191', 'Public Speaking', 'Seminar Katolik', '2017'),
(7, '4199609131', 'Menjahit', 'Balai Desa Tatakan', '2015'),
(8, '4199609131', 'Komputer', 'Balai Tenaga Kerja', '2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_sarana`
--

CREATE TABLE `data_sarana` (
  `id` int(10) NOT NULL,
  `mitra` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `no_polisi` varchar(50) NOT NULL,
  `warna_tnkb` varchar(50) NOT NULL,
  `kondisi` varchar(225) NOT NULL,
  `no_lambung` varchar(25) NOT NULL,
  `no_pr` varchar(100) NOT NULL,
  `no_po` varchar(100) NOT NULL,
  `awal_kontrak` varchar(50) NOT NULL,
  `akhir_kontrak` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `harga_sewa_unit` varchar(100) NOT NULL,
  `jasa_driver` varchar(100) NOT NULL,
  `shift` varchar(10) NOT NULL,
  `masa_kontrak` varchar(50) NOT NULL,
  `stnk_tahunan` varchar(50) NOT NULL,
  `stnk_lima_tahun` varchar(50) NOT NULL,
  `ket` text NOT NULL,
  `foto_depan` varchar(500) NOT NULL,
  `foto_kiri` varchar(500) NOT NULL,
  `foto_kanan` varchar(500) NOT NULL,
  `foto_belakang` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_sarana`
--

INSERT INTO `data_sarana` (`id`, `mitra`, `type`, `jenis`, `no_polisi`, `warna_tnkb`, `kondisi`, `no_lambung`, `no_pr`, `no_po`, `awal_kontrak`, `akhir_kontrak`, `dept`, `harga_sewa_unit`, `jasa_driver`, `shift`, `masa_kontrak`, `stnk_tahunan`, `stnk_lima_tahun`, `ket`, `foto_depan`, `foto_kiri`, `foto_kanan`, `foto_belakang`) VALUES
(172, 'CV. Rinanda ', 'Mitsubishi Strada Triton HDX SC 2.8 4x4 xx', 'Triton', 'DA 8935 KC', 'Silver', 'Baru', 'ENG 02', '1020000589', '1200000630', '2018-06-03', '2020-06-02', 'Produksi', 'Rp', 'Rp', 'I', '2 thn', '2019-07-30', '2023-07-30', '', '', '', '', ''),
(173, 'CV. Rinanda', 'Mitsubishi Strada Triton HDX SC 2.8 4x5', 'Triton', 'DA 8050 KC', 'Silver', 'Baru', 'PLT 06', '1020000592', '1200000630', '2018-06-03', '2020-06-02', 'PLANT', 'Rp18.000.000', 'Rp9.000.000', 'II', '2 thn', '2019-07-30', '2023-07-30', '', '', '', '', ''),
(174, 'CV. Rinanda', 'Toyota Innova 2.0 Type G (Manual)', 'Innova', 'B 2669 KOJ', '', '', 'HRD 28', '1020002861', '', '2019-08-15', '2021-08-14', 'HRGS', 'Rp11.500.000', 'Rp4.500.000', 'I', '2 thn', '2020-07-20', '2024-07-20', '', '', '', '', ''),
(175, 'CV. Riskia', 'Isuzu/NHR 55 CO E2 - 1', 'Elf', 'DA 7509 KF', 'Silver', 'Second', 'HRD 03', '1020000596', '1200000634', '2019-05-01', '2020-04-30', 'HRGS', 'Rp16.200.000', 'Rp3.500.000', 'I', '1 thn', '', '', 'PR PERPANJANGAN 1020001919 PER 1 MAY 2019', '', '', '', ''),
(176, 'CV. Riskia', 'Isuzu/NHR 55 CO E2 - 1', 'Elf', 'DA 7440 KF', 'Silver', 'Second', 'HRD 04', '1020000597', '1200000634', '2019-05-01', '2020-04-30', 'HRGS', 'Rp16.200.000', 'Rp3.500.000', 'I', '1 thn', '2019-08-16', '2021-08-16', 'PR PERPANJANGAN 1020001920 PER 1 MAY 2019', '', '', '', ''),
(177, 'CV. Riskia', 'Isuzu/NHR 55 CO E2 - 1', 'Elf', 'AG 7674 S', 'Silver', 'Second', 'HRD 05', '1020000598', '1200000634', '2019-05-01', '2020-04-30', 'HRGS', 'Rp16.200.000', 'Rp3.500.000', 'I', '1 thn', '2019-08-29', '2021-08-29', 'PR PERPANJANGAN 1020001921 PER 1 MAY 2019', '', '', '', ''),
(178, 'CV. Riskia', 'Isuzu/NHR 55 CO E2 - 1', 'Elf', 'DA 7494 KF', 'Silver', 'Second', 'HRD 07', '1020000600', '1200000634', '2019-05-01', '2020-04-30', 'HRGS', 'Rp16.200.000', 'Rp3.500.000', 'I', '1 thn', '2017-10-01', '', 'PR PERPANJANGAN 1020001923 PER 1 MAY 2019', '', '', '', ''),
(179, 'CV. Riskia', 'Isuzu/NHR 55 CO E2 - 1', 'Elf', 'DA 7583 KF', 'Silver', 'Baru', 'HRD 20', '1020000602', '1200000634', '2019-08-01', '2020-07-31', 'HRGS', 'Rp16.650.000', 'Rp4.500.000', 'I', '1 thn', '2019-09-20', '2022-09-20', 'Perpanjangan 1 tahun No PR 1020002776', '', '', '', ''),
(180, 'CV. Riskia', 'Mitsubishi  Triton 2.5L DC HDX 4x4', 'Triton', 'DA 8417 KD', 'Putih', 'Baru', 'PRO 06', '1020000626', '1200000634', '2019-09-03', '2020-09-02', 'PRODUKSI', 'Rp14.400.000', 'Rp9.000.000', 'II', '1 thn', '', '', 'Perpanjangan 1 tahun No PR 1020002777', '', '', '', ''),
(184, 'CV. Riskia', 'Mitsubishi  Triton 2.5L DC HDX 4x4', 'Triton', 'DA 8165 KF', 'Putih', 'Second', 'HRD 02', '1020001917', '1200002030', '2019-01-01', '2019-12-31', 'HRGS', 'Rp13.050.000', 'Rp4.000.000', 'I', '1 thn', '2020-03-23', '2022-03-23', 'Perpanjangan 1 Tahun Dari PR 1020000594', '', '', '', ''),
(185, 'CV. Riskia', 'Mitsubishi Strada Triton GLS DC 2.8 4x4', 'Triton', 'DA 9728 KD', 'Silver', 'Second', 'HRD 22', '1020001918', '1200002030', '2019-01-11', '2020-01-10', 'HRGS', 'Rp13.500.000', 'Rp3.500.000', 'I', '1 thn', '', '', 'Perpanjangan 1 Tahun Dari PR 1020000604', '', '', '', ''),
(187, 'CV. Riskia', 'Mitsubishi Strada Triton GLS DC 2.8 4x4', 'Triton', 'DA 8234 KG', 'Putih', 'Baru', 'ENG 01', '1020000593', '1200000634', '2018-04-11', '2020-04-10', 'ENGENEERING', 'Rp19.000.000', 'Rp5.120.000', 'I', '2 thn', '', '', '', '', '', '', ''),
(188, 'CV. Riskia', 'Isuzu/NHR 55 CO E2 - 1', 'Elf', 'DA 7595 KF', 'Putih', 'Baru', 'HRD 25', '1020000605', '1200000634', '2018-05-21', '2020-05-20', 'HRGS', 'Rp18.500.000', 'Rp5.120.000', 'I', '2 thn', '2019-04-05', '2023-02-09', '', '', '', '', ''),
(189, 'CV. Riskia', 'Isuzu DMAX 4x4', 'DMAX', 'DA 8451 PN', 'Putih', 'Baru', 'PRO 07', '1020000627', '1200000634', '2018-06-01', '2020-05-31', 'PRODUKSI', 'Rp18.000.000', 'Rp10.240.000', 'II', '2 thn', '', '', '', '', '', '', ''),
(190, 'CV. Riskia', 'Mitsubishi Strada Triton GLS DC 2.8 4x4', 'Triton', 'DA 8464 KG', 'Putih', 'Baru', 'ENG 14', '1020000874', '1200000879', '2018-06-14', '2020-06-13', 'ENGENEERING', 'Rp19.000.000', 'Rp5.120.000', 'I', '2 thn', '2019-08-02', '2023-08-02', '', '', '', '', ''),
(191, 'CV. Riskia', 'Mitsubishi Strada Triton GLS DC 2.8 4x4', 'Triton', 'DA 8920 CF', 'Putih', 'Baru', 'PRO 10', '1020000957', '1200001563', '2017-08-01', '2020-07-31', 'PRODUKSI', 'Rp19.000.000', 'Rp10.240.000', 'II', '2 thn', '', '', '', '', '', '', ''),
(192, 'CV. Riskia', 'Pajero Sport 4X4 New', 'Pajero', 'DA 1029 KE', 'Putih', 'Baru', 'PRO 01', '1020000623', '1200000634', '2017-08-20', '2020-08-19', 'PRODUKSI', 'Rp26.000.000', 'Rp5.120.000', 'I', '3 thn', '2019-09-20', '2022-09-20', '', '', '', '', ''),
(193, 'CV. Riskia', 'Mitsubishi Strada Triton GLS DC 2.8 4x4', 'Triton', 'DA 8427 GF', 'Putih', 'Baru', 'PRO 02', '1020001129', '1200001849', '2018-09-13', '2020-09-12', 'PRODUKSI', 'Rp19.000.000', 'Rp10.240.000', 'II', '2 thn', '', '', '', '', '', '', ''),
(194, 'CV. Sido Gede', 'Mitsubishi/Colt Diesel FE 74 MT', 'Bus 4x4', 'B 7907 VB', 'Putih Kombinasi', 'Second', 'HRD 11', '1020001950', '1200002063', '2019-02-01', '2020-01-31', 'HRGS', 'Rp34.200.000', ' Rp- ', 'I', '1 thn', '2019-02-03', '2021-02-03', 'Perpanjangan 1 Tahun dari PR 1020000544', '', '', '', ''),
(195, 'CV. Sido Gede', 'Mitsubishi/Colt Diesel FE 74 MT', 'Bus 4x4', 'D 7537 AO', 'Putih Kombinasi', 'Baru', 'HRD 15', '1020000562', '1200000638', '2019-04-01', '2020-03-31', 'HRGS', 'Rp38.000.000', ' Rp- ', 'I', '2 thn', '2019-01-10', '', '', '', '', '', ''),
(196, 'CV. Sido Gede', 'Mitsubishi/Colt Diesel FE 74 MT', 'Bus 4x4', 'B 7379 TGB', 'Putih Biru', 'Baru', 'HRD 18', '1020000563', '1200000638', '2019-09-01', '2020-08-31', 'HRGS', 'Rp36.000.000', ' Rp- ', 'I', '1 thn', '2019-01-29', '2023-01-29', 'Perpanjangan 1 tahun No PR : 1020002966', '', '', '', ''),
(197, 'CV. Sido Gede', 'Mitsubishi/Colt Diesel FE 74 MT', 'Bus 4x4', 'B 7452 TGA', 'Putih Kombinasi', 'Second', 'HRD 13', '1020001743', '1200002062', '2019-01-01', '2019-12-31', 'HRGS', 'Rp30.000.000', ' Rp- ', 'I', '1 thn', '2018-02-20', '2020-02-20', 'Perpanjangan 1 Tahun Dari PR 1020000561', '', '', '', ''),
(198, 'CV. Sido Gede', 'Mitsubishi/Colt Diesel FE 74 MT', 'Bus 4x4', 'B 7276 SDA', 'Putih', 'Baru (Replace HRD 12)', 'HRD 27', '1020001084', '1200001323', '2018-09-28', '2020-09-27', 'HRGS', 'Rp40.000.000', ' Rp- ', 'I', '2 Thn', '2019-05-07', '2023-05-07', '', '', '', '', ''),
(199, 'CV. Sido Gede', 'Mitsubishi/Colt Diesel FE 74 MT', 'Bus 4x4', 'D 7586 AN', 'Putih Kombinasi', 'Second', 'HRD 09', '1020001930', '1200002061', '2019-02-01', '2022-01-31', 'HRGS', 'Rp42.000.000', ' Rp- ', 'I', '3 thn', '2019-03-19', '2023-03-19', 'Replace Unit Dari No PR 1020000542', '', '', '', ''),
(200, 'CV. Sido Gede', 'Mitsubishi/Colt Diesel FE 74 MT', 'Bus 4x4', 'AG 7701 S', 'Putih Kombinasi', 'Second', 'HRD 12', '1020001931', '1200002061', '2019-02-01', '2022-01-31', 'HRGS', 'Rp42.000.000', ' Rp- ', 'I', '3 thn', '2020-01-10', '2024-01-10', 'Replace Unit Dari No PR 1020000543', '', '', '', ''),
(201, 'CV. Zam - Zam Air Mulia', 'Mitsubishi Strada Triton GLS DC 2.8 4x4', 'Triton', 'DA 8480 KF', 'Putih', 'Baru', 'LOG 01', '1020000564', '1200000632', '2019-07-31', '2020-07-30', 'LOGISTIK', 'Rp13.500.000', 'Rp4.500.000', 'I', '1 thn', '2019-09-14', '2022-09-14', 'Perpanjangan 1 tahun No PR 1020002767', '', '', '', ''),
(202, 'CV. Zam - Zam Air Mulia', 'Mitsubishi Strada Triton GLS DC 2.8 4x4', 'Triton', 'DA 8510 KF', 'Putih', 'Baru', 'LOG 02', '1020000568', '1200000632', '2019-08-25', '2020-08-24', 'LOGISTIK', 'Rp15.000.000', 'Rp9.000.000', 'II', '2 thn', '2019-09-20', '2022-09-20', 'Perpanjangan 1 tahun No PR  1020002768 ', '', '', '', ''),
(204, 'CV. Zam - Zam Air Mulia', 'Pajero Sport 4X4 New GLX', 'Pajero', 'DA 1564 KD', 'Putih', 'Baru', 'DPM 01', '1020000583', '1200000632', '2018-05-12', '2020-05-11', 'OPR', 'Rp21.000.000', 'Rp4.000.000', 'I', '2 thn', '2019-06-05', '2023-06-05', '', '', '', '', ''),
(205, 'CV. Zam - Zam Air Mulia', 'Pajero Sport 4X4 New Dakar', 'Pajero', 'DA 1218 KF', 'Silver', 'Baru', 'HRD 23', '1020000583', '1200000632', '2018-05-12', '2020-05-11', 'HRGS', 'Rp21.000.000', 'Rp4.000.000', 'I', '2 thn', '2019-07-03', '2023-07-03', '', '', '', '', ''),
(206, 'CV. Zam - Zam Air Mulia', 'Mitsubishi Strada Triton GLS DC 2.8 4x4', 'Triton', 'DA 8438 KG', 'Putih', 'Baru', 'PLT 02', '1020000587', '1200000632', '2018-05-12', '2020-05-11', 'PLANT', 'Rp17.000.000', 'Rp8.000.000', 'II', '2 thn', '2019-07-25', '2023-07-25', '', '', '', '', ''),
(207, 'CV. Zam - Zam Air Mulia', 'Mitsubishi Strada Triton HDX SC 2.8 4x5', 'Triton', 'DA 8341 KG', 'Putih', 'Baru', 'PRO 04', '1020000586', '1200000632', '2018-06-01', '2020-05-31', 'PRODUKSI', 'Rp17.000.000', 'Rp8.000.000', 'II', '2 thn', '2019-07-03', '2023-07-03', '', '', '', '', ''),
(208, 'CV. Zam - Zam Air Mulia', 'Mitsubishi Strada Triton HDX DC  4x4', 'Triton', 'DA 8387 KG', 'Putih', 'Baru', 'PRO 05', '1020000875', '1200000881', '2018-07-02', '2020-07-01', 'PRODUKSI', 'Rp17.000.000', 'Rp8.000.000', 'II', '2 thn', '2019-08-02', '2023-08-02', '', '', '', '', ''),
(209, 'CV. Zam - Zam Air Mulia', 'Mitsubishi/Colt Diesel FE 74 MT', 'Bus 4x4', 'KT 7113 SB', 'Putih', 'Baru', 'HRD 24', '1020000585', '1200000632', '2018-06-01', '2021-05-31', 'HRGS', 'Rp36.000.000', 'Rp4.000.000', 'I', '3 thn', '2019-09-27', '2023-09-27', '', '', '', '', ''),
(210, 'CV. Zam - Zam Air Mulia', 'Hino D 130 HD', 'Bus 4x4', 'DA 7604 KF', 'Putih', 'Baru', 'HRD 26', '1020001001', '1200001562', '2018-08-12', '2021-08-11', 'HRGS', 'Rp36.000.000', 'Rp4.000.000', 'I', '3 thn', '2019-09-27', '2023-09-27', '', '', '', '', ''),
(211, 'PT. Magma Sigma Utama', 'Mitsubishi Pajero Sport 4X4 New', 'Pajero', 'DA 1819 AU', 'Putih', 'Baru', 'PRO 09', '1020000637', '1200000633', '2017-08-24', '2020-08-23', 'PRODUKSI', 'Rp31.000.000', ' Rp- ', 'I', '3 thn', '2019-09-12', '2022-09-12', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_seragam`
--

CREATE TABLE `data_seragam` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `ukuran` varchar(50) NOT NULL,
  `stok` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_seragam`
--

INSERT INTO `data_seragam` (`id`, `type`, `ukuran`, `stok`) VALUES
(1, 'seragam_kerja', 'XXL', '2'),
(2, 'kaos', 'XXL', '1'),
(3, 'kaos', 'XXL', '1'),
(4, 'celana', 'XXL', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `departemen`
--

CREATE TABLE `departemen` (
  `id` int(11) NOT NULL,
  `nama_dep` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `departemen`
--

INSERT INTO `departemen` (`id`, `nama_dep`) VALUES
(1, 'General Service & Human Resource'),
(2, 'Finance & Accounting'),
(4, 'Logistik'),
(5, 'Plant'),
(6, 'Produksi'),
(7, 'Safety Health and Environment ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `developer`
--

CREATE TABLE `developer` (
  `id_dev` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('super_admin','','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `developer`
--

INSERT INTO `developer` (`id_dev`, `username`, `password`, `level`) VALUES
(1, 'admin', 'd56b699830e77ba53855679cb1d252da', 'super_admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jab` int(10) NOT NULL,
  `nama_jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jab`, `nama_jabatan`) VALUES
(2, 'Officer'),
(3, 'FGDP'),
(4, 'Operator A2B'),
(5, 'Driver Dump Truck'),
(6, 'Helper'),
(7, 'Helper Tyre'),
(8, 'Tyre Man'),
(9, 'Helper Mekanik'),
(10, 'Mekanik'),
(11, 'Deputy Project Manag'),
(12, 'Dep. Head'),
(13, 'Sect. Head'),
(14, 'Group Leader'),
(15, 'Admin'),
(16, 'Project Manager');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi_pos`
--

CREATE TABLE `lokasi_pos` (
  `id_pos` int(10) NOT NULL,
  `nama_lokasi` varchar(25) NOT NULL,
  `username_p` varchar(25) NOT NULL,
  `password_p` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lokasi_pos`
--

INSERT INTO `lokasi_pos` (`id_pos`, `nama_lokasi`, `username_p`, `password_p`) VALUES
(1, 'lokasi 1 22', 'lokasi1', '202cb962ac59075b964b07152d234b70'),
(2, 'tambang', 'tambang', 'd41d8cd98f00b204e9800998ecf8427e'),
(3, 'tambang1', 'pos', 'd41d8cd98f00b204e9800998ecf8427e'),
(4, 'office', 'office', 'e72f4545eb68c96c754f91fc01573517'),
(5, 'baru', 'baru', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_makanan`
--

CREATE TABLE `order_makanan` (
  `id_order_mak` int(10) NOT NULL,
  `id_kar` varchar(50) NOT NULL,
  `tanggal_pesan` varchar(10) NOT NULL,
  `waktu_post` varchar(20) NOT NULL,
  `nama_mess` varchar(50) NOT NULL,
  `waktu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `order_makanan`
--

INSERT INTO `order_makanan` (`id_order_mak`, `id_kar`, `tanggal_pesan`, `waktu_post`, `nama_mess`, `waktu`) VALUES
(7, '2199806251', '', '', '', 'Siang,Sore,'),
(8, '2199806251', '2020-07-05', '', 'SINERGI 3', 'Pagi,Siang,'),
(9, '2199806251', '2020-07-08', '', 'SINERGI 4', 'Pagi,Siang,'),
(10, '1199503122', '2020-07-11', '', 'SINERGI 3', 'Pagi,Siang,'),
(11, '2199806251', '2020-07-26', '2020-07-26 / 08:27:0', 'LAHAN PARKIR TAMBANG', 'Pagi,Siang,');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_status`
--

CREATE TABLE `order_status` (
  `id_ker` int(11) NOT NULL,
  `departemen` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `status` int(12) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `order_status`
--

INSERT INTO `order_status` (`id_ker`, `departemen`, `user`, `status`, `tanggal`, `ket`) VALUES
(1, '3', 'hr', 1, '2020-05-31', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_vendor`
--

CREATE TABLE `order_vendor` (
  `id_order_v` int(10) NOT NULL,
  `nama_v` varchar(20) NOT NULL,
  `shift_v` varchar(16) NOT NULL,
  `lokasi_v` varchar(25) NOT NULL,
  `waktu_pesan_v` varchar(10) NOT NULL,
  `waktu_post_v` varchar(50) NOT NULL,
  `jumlah_v` varchar(100) NOT NULL,
  `keterangan_v` text NOT NULL,
  `keterangan_p` text NOT NULL,
  `status_v` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `order_vendor`
--

INSERT INTO `order_vendor` (`id_order_v`, `nama_v`, `shift_v`, `lokasi_v`, `waktu_pesan_v`, `waktu_post_v`, `jumlah_v`, `keterangan_v`, `keterangan_p`, `status_v`) VALUES
(1, 'ridho catering 1', ' 1', 'lokasi 1 22', '2020-07-23', '2020-23-07', '11', '', '', '1'),
(2, 'ridho catering 1', ' 1', 'lokasi 1 22', '2020-07-25', '2020-24-07', '3', '', '', '1'),
(6, 'ridho catering 1', '2', 'lokasi 1 22', '2020-07-27', '2020-27-07 / 04:12:52 am', '100', 'eng 100', '', '2'),
(7, '', ' 1', '', '', '2020-27-07 / 04:21:45 am', '', '', '', '3'),
(8, 'tes 123', ' 1', 'tambang1', '2020-07-28', '2020-27-07 / 04:59:38 am', '11', 'eng 100 eng 100 eng 100 eng 100 eng 100 ', '', '3'),
(9, 'tes 123', '2', 'office', '2020-07-28', '2020-27-07 / 11:24:39 am', '11', 'eng 100 eng 100 eng 100 eng 100 eng 100 ', '', '3'),
(10, 'baru', '2', 'baru', '2020-07-27', '2020-27-07 / 11:27:18 am', '2', 'eng 100', 'ok semua', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `overtime`
--

CREATE TABLE `overtime` (
  `id_overtime` int(10) NOT NULL,
  `id_kar` varchar(20) NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `excel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `overtime`
--

INSERT INTO `overtime` (`id_overtime`, `id_kar`, `bulan`, `tahun`, `ket`, `excel`) VALUES
(1, '1199503122', '01', 'okoko', '', ''),
(2, '1199503122', '01', '2019', 'okoko', ''),
(3, '1199503122', '01', '2020', 'okoko', ''),
(4, '1199503122', '01', '2019', 'okoko', ''),
(5, '1199503122', '02', '2019', 'okoko', 'Book2.xlsx'),
(6, '1199503122', '', '', '', 'Book2.xlsx'),
(7, '1199503122', '', '', '', 'Book2.xlsx'),
(8, '1199503122', '01', '2019', 'okoko', 'Book2.xlsx'),
(9, '1199503122', '01', '2019', 'okoko', 'Book2.xlsx'),
(10, '1199503122', '01', '2020', 'okoko', 'Book1.xlsx'),
(11, '1199503122', '01', '2019', 'okoko', 'Book2.xlsx'),
(12, '1199503122', '02', '2019', 'okoko', 'Book2.xlsx'),
(13, '1199503122', '', '', '', 'Book2.xlsx'),
(14, '1199503122', '', '', '', 'Book2.xlsx'),
(15, '1199503122', '03', '2019', 'okoko', 'tes5.xlsx'),
(16, '1199503122', '10', '2019', 'baru', 'Book11.xlsx'),
(17, '1199503122', '08', '2020', '', 'Book12.xlsx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pen` int(10) NOT NULL,
  `id_kar` varchar(50) NOT NULL,
  `tingkat_pendidikan` varchar(50) NOT NULL,
  `nama_sekolah` varchar(30) NOT NULL,
  `nama_jurusan` varchar(25) NOT NULL,
  `kota_pendidikan` varchar(50) NOT NULL,
  `tahun_pendidikan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`id_pen`, `id_kar`, `tingkat_pendidikan`, `nama_sekolah`, `nama_jurusan`, `kota_pendidikan`, `tahun_pendidikan`) VALUES
(2, '1202005081', 'TK', 'teka tadika mesra', '', 'tapin', '2018/2019'),
(3, '1202005081', 'SD', 'SD rantau', '', 'rantau', '2018/2019'),
(4, '1202005081', 'SMP/MTs', 'MTsN Tapin Selatan', 'Agama', 'Rantau', '2020/2021'),
(5, '1202005081', 'S1', 'UNISKA', 'TEKNIK INFORMATIKA', 'BANJARBARU', '2022/2022'),
(6, '1202005081', 'SMA/SMK/MA', 'SMKN 1 TAPIN SELATAN', 'TEKNIK KOMPUTER DAN JARIN', 'TAPIN', '2030/2032'),
(8, '2199806251', 'TK', 'TK Kencana', '', 'Rantau', '2004'),
(9, '2199806251', 'SD', 'SDN TATAKAN 1', '', 'Rantau', '2010'),
(10, '2199806251', 'SMP/MTs', 'MTsN 5 Tapin', '', 'Rantau', '2013'),
(11, '2199806251', 'SMA/SMK/MA', 'SMAN 1 Tapin', 'IPA', 'Rantau', '2016'),
(12, '2199806251', 'S1', 'Universitas Lambung Mangkurat', 'Tenik Elektro', 'Banjarbaru', '2019'),
(13, '1199503122', 'TK', 'TK Tunas Bangsa', '', 'Kotabaru', '2001'),
(14, '1199503122', 'SD', 'SD Pelita Harapan', '', 'Kotabaru', '2007'),
(15, '1199503122', 'SMP/MTs', 'SMPN 1 Kotabaru', '', 'Kotabaru', '2010'),
(16, '1199503122', 'SMA/SMK/MA', 'SMAN 3 Kotabaru', 'IPS', 'Kotabaru', '2013'),
(17, '1199503122', 'S1', 'Universitas Ahmad Yani', 'Pertambangan', 'Banjarbaru', '2018'),
(18, '3199607191', 'TK', 'TK Bunda Maria', '', 'Banjarmasin', '2002'),
(19, '3199607191', 'SD', 'SDN BANJARMASIN 2', '', 'Banjarmasin', '2008'),
(20, '3199607191', 'SMP/MTs', 'SMPN 2 Banjarmasin', '', 'Banjarmasin', '2011'),
(21, '3199607191', 'SMA/SMK/MA', 'SMAN 7 Banjarmasin', 'IPA', 'Banjarmasin', '2014'),
(22, '3199607191', 'S1', 'Universitas Indonesia', 'Pertambangan', 'Jakarta', '2018'),
(23, '4199609131', 'TK', 'TK Kencana', '', 'Rantau', '2002'),
(24, '4199609131', 'SD', 'SDN TATAKAN 1', '', 'Rantau', '2008'),
(25, '4199609131', 'SMP/MTs', 'MTsN 5 Tapin', '', 'Rantau', '2011'),
(26, '4199609131', 'SMA/SMK/MA', 'SMKN 1 Tapin Selatan', 'Perkebunan', 'Rantau', '2014'),
(27, '4199609131', 'S1', 'Universitas Lambung Mangkurat', 'Perkebunan', 'Banjarbaru', '2018');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rw_pekerjaan`
--

CREATE TABLE `rw_pekerjaan` (
  `id_rw_pekerjaan` int(12) NOT NULL,
  `id_kar` varchar(50) NOT NULL,
  `periode` varchar(20) NOT NULL,
  `nama_perusahaan` varchar(30) NOT NULL,
  `bidang_usaha` varchar(30) NOT NULL,
  `jab_terakhir` varchar(30) NOT NULL,
  `gaji_terakhir` varchar(30) NOT NULL,
  `alasan_berhenti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rw_pekerjaan`
--

INSERT INTO `rw_pekerjaan` (`id_rw_pekerjaan`, `id_kar`, `periode`, `nama_perusahaan`, `bidang_usaha`, `jab_terakhir`, `gaji_terakhir`, `alasan_berhenti`) VALUES
(3, '1202005081', '2020', 'PT.KPP ok', 'Tambang', 'Admin GS', '10.000.000.000', 'ingin saja\r\n'),
(4, '2199806251', '2017-2018', 'PT. KPP', 'Tambang Batu Bara', 'Helper', '1.800.000', 'Kontrak telah habis.'),
(5, '4199609131', '', 'PT. BMB', 'Tambang Batu Bara', 'Helper', '1.500.000', 'Kontrak tidak lanjut.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_dep` varchar(255) NOT NULL,
  `level` enum('admin','user','super_admin','hr_admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama_user`, `password`, `id_dep`, `level`) VALUES
(16, 'pa eko', '202cb962ac59075b964b07152d234b70', '1', 'admin'),
(18, 'eddy', '202cb962ac59075b964b07152d234b70', '8', 'user'),
(26, 'Pa ansari', 'caf1a3dfb505ffed0d024130f58c5cfa', '1', 'super_admin'),
(27, 'biasa', '202cb962ac59075b964b07152d234b70', '11', 'user'),
(30, 'hr', '202cb962ac59075b964b07152d234b70', '3', 'hr_admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_login`
--

CREATE TABLE `user_login` (
  `id_userlog` int(10) NOT NULL,
  `id_kar` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `level` enum('admin','user','kepala_gs','hr_admin','admin_dep','super_admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_login`
--

INSERT INTO `user_login` (`id_userlog`, `id_kar`, `password`, `level`) VALUES
(21, '1202005081', 'd56b699830e77ba53855679cb1d252da', 'hr_admin'),
(32, '2199806251', 'efbd28a337cba93019252f6c3a500043', 'kepala_gs'),
(33, '1199503122', '87ec84afcf37894d64f22eb521a6234b', 'admin'),
(34, '3199607191', 'b428e697b0dc917249cf322cf7f8350f', 'admin_dep'),
(35, '4199609131', '01fb486c77baa0404a0e312ac41ea8f2', 'admin_dep'),
(44, '1202007034', '2f11f6d90b57887268072cd40f40fc30', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vendor`
--

CREATE TABLE `vendor` (
  `id_vendor` int(10) NOT NULL,
  `nama_vendor` varchar(20) NOT NULL,
  `username_v` varchar(20) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `vendor`
--

INSERT INTO `vendor` (`id_vendor`, `nama_vendor`, `username_v`, `password`) VALUES
(2, 'ridho catering 1', 'ridho', '202cb962ac59075b964b07152d234b70'),
(3, 'tes 123', 'tes', '202cb962ac59075b964b07152d234b70'),
(4, 'baru', 'baru', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indeks untuk tabel `data_anak`
--
ALTER TABLE `data_anak`
  ADD PRIMARY KEY (`id_anak`);

--
-- Indeks untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_catering`
--
ALTER TABLE `data_catering`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_driver_sarana`
--
ALTER TABLE `data_driver_sarana`
  ADD PRIMARY KEY (`id_drive`);

--
-- Indeks untuk tabel `data_karyawan`
--
ALTER TABLE `data_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indeks untuk tabel `data_mess_lahan`
--
ALTER TABLE `data_mess_lahan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_orang_tua`
--
ALTER TABLE `data_orang_tua`
  ADD PRIMARY KEY (`id_ortu`);

--
-- Indeks untuk tabel `data_order`
--
ALTER TABLE `data_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indeks untuk tabel `data_overtime`
--
ALTER TABLE `data_overtime`
  ADD PRIMARY KEY (`id_ovr`);

--
-- Indeks untuk tabel `data_pasangan`
--
ALTER TABLE `data_pasangan`
  ADD PRIMARY KEY (`id_pasangan`);

--
-- Indeks untuk tabel `data_penghuni_mess`
--
ALTER TABLE `data_penghuni_mess`
  ADD PRIMARY KEY (`id_penghuni`);

--
-- Indeks untuk tabel `data_riwayat_pelatihan`
--
ALTER TABLE `data_riwayat_pelatihan`
  ADD PRIMARY KEY (`id_pelatihan`);

--
-- Indeks untuk tabel `data_sarana`
--
ALTER TABLE `data_sarana`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_seragam`
--
ALTER TABLE `data_seragam`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `developer`
--
ALTER TABLE `developer`
  ADD PRIMARY KEY (`id_dev`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jab`);

--
-- Indeks untuk tabel `lokasi_pos`
--
ALTER TABLE `lokasi_pos`
  ADD PRIMARY KEY (`id_pos`);

--
-- Indeks untuk tabel `order_makanan`
--
ALTER TABLE `order_makanan`
  ADD PRIMARY KEY (`id_order_mak`);

--
-- Indeks untuk tabel `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id_ker`);

--
-- Indeks untuk tabel `order_vendor`
--
ALTER TABLE `order_vendor`
  ADD PRIMARY KEY (`id_order_v`);

--
-- Indeks untuk tabel `overtime`
--
ALTER TABLE `overtime`
  ADD PRIMARY KEY (`id_overtime`);

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pen`);

--
-- Indeks untuk tabel `rw_pekerjaan`
--
ALTER TABLE `rw_pekerjaan`
  ADD PRIMARY KEY (`id_rw_pekerjaan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id_userlog`);

--
-- Indeks untuk tabel `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id_vendor`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT untuk tabel `data_anak`
--
ALTER TABLE `data_anak`
  MODIFY `id_anak` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT untuk tabel `data_catering`
--
ALTER TABLE `data_catering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data_driver_sarana`
--
ALTER TABLE `data_driver_sarana`
  MODIFY `id_drive` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `data_mess_lahan`
--
ALTER TABLE `data_mess_lahan`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `data_orang_tua`
--
ALTER TABLE `data_orang_tua`
  MODIFY `id_ortu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `data_order`
--
ALTER TABLE `data_order`
  MODIFY `id_order` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT untuk tabel `data_overtime`
--
ALTER TABLE `data_overtime`
  MODIFY `id_ovr` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_pasangan`
--
ALTER TABLE `data_pasangan`
  MODIFY `id_pasangan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `data_penghuni_mess`
--
ALTER TABLE `data_penghuni_mess`
  MODIFY `id_penghuni` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `data_riwayat_pelatihan`
--
ALTER TABLE `data_riwayat_pelatihan`
  MODIFY `id_pelatihan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `data_sarana`
--
ALTER TABLE `data_sarana`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- AUTO_INCREMENT untuk tabel `data_seragam`
--
ALTER TABLE `data_seragam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `departemen`
--
ALTER TABLE `departemen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `developer`
--
ALTER TABLE `developer`
  MODIFY `id_dev` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jab` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `lokasi_pos`
--
ALTER TABLE `lokasi_pos`
  MODIFY `id_pos` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `order_makanan`
--
ALTER TABLE `order_makanan`
  MODIFY `id_order_mak` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id_ker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `order_vendor`
--
ALTER TABLE `order_vendor`
  MODIFY `id_order_v` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `overtime`
--
ALTER TABLE `overtime`
  MODIFY `id_overtime` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_pen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `rw_pekerjaan`
--
ALTER TABLE `rw_pekerjaan`
  MODIFY `id_rw_pekerjaan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id_userlog` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id_vendor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
