-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Apr 2020 pada 16.28
-- Versi server: 10.1.40-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE `alternatif` (
  `id` int(11) NOT NULL,
  `foto` varchar(365) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `Ketahanan` varchar(3) NOT NULL,
  `Pigmentasi` varchar(3) NOT NULL,
  `Value of money` varchar(3) NOT NULL,
  `Kemasan` varchar(3) NOT NULL,
  `Tekstur` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`id`, `foto`, `nama`, `Ketahanan`, `Pigmentasi`, `Value of money`, `Kemasan`, `Tekstur`) VALUES
(22, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/2/5/6/8/0/25680-large_default.jpg', 'Fit Me! Matte Poreless Foundation', '4.3', '4.4', '4.3', '3.9', '4.5'),
(31, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/1/7/7/4/5/17745-large_default.jpg', 'Ultra Cover Liquid Matte Foundation', '4.2', '4.3', '4.2', '4.5', '4.3'),
(32, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/1/3/5/2/9/13529-large_default.jpg', 'Infallible Pro Matte Foundation', '4.6', '4.5', '4.3', '4.5', '4.4'),
(33, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/9/5/8/1/9581-large_default.jpg', 'Fit Me! Dewy Smooth Foundation', '4.3', '4.3', '4.3', '3.8', '4.4'),
(34, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/2/6/4/4/4/26444-large_default.jpg', 'Powerstay Demi-Matte Cover Cushion', '4.5', '4.6', '4.3', '4.7', '4.6'),
(35, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/2/2/1/0/3/22103-large_default.jpg', 'Everyday Luminous Liquid Foundation', '3.7', '3.8', '4.3', '3.8', '3.9'),
(36, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/3/0/0/7/3/30073-large_default.jpg', 'Exclusive Liquid Foundation - 20 ml', '3.9', '4', '4.2', '4.3', '4'),
(37, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/3/1/4/2/7/31427-large_default.jpg', 'Make It Glow Dewy Cushion', '4.4', '4.5', '4.6', '4.7', '4.6'),
(38, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/2/3/7/5/4/23754-large_default.jpg', 'Superstay Foundation', '4.7', '4.6', '4.4', '4.7', '4.6'),
(39, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/1/9/1/6/2/19162-large_default.jpg', 'Powerstay Matte Powder Foundation', '4.5', '4.6', '4.3', '4.5', '4.7'),
(40, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/2/4/2/4/8/24248-large_default.jpg', 'New Infallible 24 Hour Freshwear Foundation', '4.4', '4.4', '4.2', '4.6', '4.4'),
(41, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/3/6/6/0/8/36608-large_default.jpg', 'Glam Rock Aqua Foundation', '4.1', '4.3', '4.3', '4.6', '4.4'),
(42, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/2/2/6/4/0/22640-large_default.jpg', 'Powerstay Weightless Liquid Foundation', '4.4', '4.3', '4.3', '4.6', '4.5'),
(43, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/1/1/9/5/1/11951-large_default.jpg', 'Colorstay Liquid Makeup For Combination/Oily', '4.3', '4.2', '4.2', '4.4', '4.2'),
(44, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/2/0/5/9/2/20592-large_default.jpg', 'Can\'t Stop Won\'t Stop Foundation (Won\'t Stop Found', '4.6', '4.5', '4.2', '4.6', '4.4'),
(45, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/1/1/8/1/7/11817-large_default.jpg', 'Total Control Drop Foundation', '4.3', '4.3', '4', '4.5', '4.3'),
(46, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/2/0/0/9/3/20093-large_default.jpg\r\n', 'Total Control Mesh Cushion Foundation', '4.6', '4.6', '4', '4.6', '4.5'),
(47, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/2/5/4/4/5/25445-large_default.jpg\r\n', 'Unlimited Fluid Foundation', '4.5', '4.4', '3.6', '4.4', '4.6'),
(48, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/1/3/6/1/8/13618-large_default.jpg\r\n', '24h Made To Stay Make Up', '4.3', '4.3', '4.3', '4.5', '4.2'),
(49, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/2/1/2/6/9/21269-large_default.jpg', 'The Realest Lightweight Foundation', '4.2', '4.2', '4.1', '4.8', '4.5'),
(50, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/2/0/1/9/3/20193-large_default.jpg\r\n', 'Instaperfect MATTE FIT Powder Foundation', '4.3', '4.4', '4.3', '4.8', '4.5'),
(51, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/3/2/2/4/3224-large_default.jpg\r\n', 'New Complexion 2 Way Foundation', '4.2', '4.3', '4.1', '4.3', '4.2'),
(52, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/1/1/9/5/4/11954-large_default.jpg\r\n', 'Colorstay Liquid Makeup For Normal/Dry', '4.2', '4.2', '4.1', '4.5', '4.2'),
(53, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/9/8/5/4/9854-large_default.jpg\r\n', 'Wonderwear Makeup 30 ml', '4.5', '4.4', '4', '4.3', '4.2'),
(54, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/2/0/1/3/3/20133-large_default.jpg\r\n', 'True Match Liquid Foundation', '4.3', '4.3', '4.1', '4.5', '4.5'),
(55, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/1/6/3/9/3/16393-large_default.jpg\r\n', 'Stay Matte Not Flat Foundation', '4.1', '4.1', '4', '4.2', '4'),
(56, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/2/0/4/9/5/20495-large_default.jpg\r\n', 'Fluid Foundation', '4.1', '4.3', '4.5', '4.4', '4.3'),
(57, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/3/6/6/1/8/36618-large_default.jpg\r\n', 'Lit From Within Powder Foundation', '4.1', '4.1', '4.4', '4.6', '4.2'),
(58, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/1/3/6/2/6/13626-large_default.jpg\r\n', 'All Matt Plus Shine Control Make Up', '4.1', '4', '4.4', '4.3', '4'),
(59, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/3/0/0/3/3/30033-large_default.jpg\r\n', 'Exclusive Flawless Cover Cushion', '4.6', '4.6', '4.5', '4.7', '4.6'),
(60, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/1/3/7/4/5/13745-large_default.jpg\r\n', 'HD Liquid Coverage Foundation', '4.4', '4.3', '4.4', '4.5', '4.3'),
(61, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/2/2/0/9/2/22092-large_default.jpg\r\n', 'Everyday Luminous Creamy Foundation', '4.1', '4.3', '4.4', '3.9', '3.8'),
(62, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/1/3/5/4/2/13542-large_default.jpg\r\n', 'Infallible Total Cover', '4.2', '4.4', '4.1', '4.4', '3.9'),
(63, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/2/3/7/2/4/23724-large_default.jpg\r\n', 'Petal Skin Foundation', '4.5', '4.6', '4.2', '4.5', '4.7'),
(64, 'https://www.sociolla.com/cdn-cgi/image/w=300,format=auto,quality=75/https://s3-ap-southeast-1.amazonaws.com/img-sociolla/img/p/1/5/4/5/5/15455-large_default.jpg\r\n', 'Powdery Foundation SPF 15 PA ++', '4.1', '4.2', '3.9', '4.2', '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ir`
--

CREATE TABLE `ir` (
  `jumlah` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ir`
--

INSERT INTO `ir` (`jumlah`, `nilai`) VALUES
(1, 0),
(2, 0),
(3, 0.58),
(4, 0.9),
(5, 1.12),
(6, 1.24),
(7, 1.32),
(8, 1.41),
(9, 1.45),
(10, 1.49),
(11, 1.51),
(12, 1.48),
(13, 1.56),
(14, 1.57),
(15, 1.59);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id`, `nama`) VALUES
(30, 'Ketahanan'),
(31, 'Pigmentasi'),
(32, 'Value of money'),
(33, 'Kemasan'),
(34, 'Tekstur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perbandingan_kriteria`
--

CREATE TABLE `perbandingan_kriteria` (
  `id` int(11) NOT NULL,
  `kriteria1` int(11) NOT NULL,
  `kriteria2` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perbandingan_kriteria`
--

INSERT INTO `perbandingan_kriteria` (`id`, `kriteria1`, `kriteria2`, `nilai`) VALUES
(47, 30, 31, 4),
(48, 30, 32, 1),
(49, 30, 33, 7),
(50, 30, 34, 5),
(51, 31, 32, 0.333333),
(52, 31, 33, 5),
(53, 31, 34, 1),
(54, 32, 33, 4),
(55, 32, 34, 1),
(56, 33, 34, 0.333333);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pv_alternatif`
--

CREATE TABLE `pv_alternatif` (
  `id` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pv_alternatif`
--

INSERT INTO `pv_alternatif` (`id`, `id_alternatif`, `id_kriteria`, `nilai`) VALUES
(41, 22, 30, 4.3),
(42, 22, 31, 4.4),
(43, 22, 32, 4.3),
(44, 22, 33, 3.9),
(45, 22, 34, 4.5),
(46, 26, 30, 2.1),
(47, 26, 31, 2.2),
(48, 26, 32, 2.3),
(49, 26, 33, 2.4),
(50, 26, 34, 2.5),
(51, 27, 30, 2.1),
(52, 27, 31, 2.2),
(53, 27, 32, 2.3),
(54, 27, 33, 2.4),
(55, 27, 34, 2.5),
(56, 28, 30, 2.1),
(57, 28, 31, 2.2),
(58, 28, 32, 2.3),
(59, 28, 33, 2.4),
(60, 28, 34, 2.5),
(61, 29, 30, 4.8),
(62, 29, 31, 4),
(63, 29, 32, 4),
(64, 29, 33, 2),
(65, 29, 34, 4.9),
(66, 30, 30, 4.5),
(67, 30, 31, 4.6),
(68, 30, 32, 4.3),
(69, 30, 33, 4.2),
(70, 30, 34, 4.4),
(71, 31, 30, 4.2),
(72, 31, 31, 4.3),
(73, 31, 32, 4.2),
(74, 31, 33, 4.5),
(75, 31, 34, 4.3),
(76, 32, 30, 4.6),
(77, 32, 31, 4.5),
(78, 32, 32, 4.3),
(79, 32, 33, 4.5),
(80, 32, 34, 4.4),
(81, 33, 30, 4.3),
(82, 33, 31, 4.3),
(83, 33, 32, 4.3),
(84, 33, 33, 3.8),
(85, 33, 34, 4.4),
(86, 34, 30, 4.5),
(87, 34, 31, 4.6),
(88, 34, 32, 4.3),
(89, 34, 33, 4.7),
(90, 34, 34, 4.6),
(91, 35, 30, 3.7),
(92, 35, 31, 3.8),
(93, 35, 32, 4.3),
(94, 35, 33, 3.8),
(95, 35, 34, 3.9),
(96, 36, 30, 3.9),
(97, 36, 31, 4),
(98, 36, 32, 4.2),
(99, 36, 33, 4.3),
(100, 36, 34, 4),
(101, 37, 30, 4.4),
(102, 37, 31, 4.5),
(103, 37, 32, 4.6),
(104, 37, 33, 4.7),
(105, 37, 34, 4.6),
(106, 38, 30, 4.7),
(107, 38, 31, 4.6),
(108, 38, 32, 4.4),
(109, 38, 33, 4.7),
(110, 38, 34, 4.6),
(111, 39, 30, 4.5),
(112, 39, 31, 4.6),
(113, 39, 32, 4.3),
(114, 39, 33, 4.5),
(115, 39, 34, 4.7),
(116, 40, 30, 4.4),
(117, 40, 31, 4.4),
(118, 40, 32, 4.2),
(119, 40, 33, 4.6),
(120, 40, 34, 4.4),
(121, 41, 30, 4.1),
(122, 41, 31, 4.3),
(123, 41, 32, 4.3),
(124, 41, 33, 4.6),
(125, 41, 34, 4.4),
(126, 42, 30, 4.4),
(127, 42, 31, 4.3),
(128, 42, 32, 4.3),
(129, 42, 33, 4.6),
(130, 42, 34, 4.5),
(131, 43, 30, 4.3),
(132, 43, 31, 4.2),
(133, 43, 32, 4.2),
(134, 43, 33, 4.4),
(135, 43, 34, 4.2),
(136, 44, 30, 4.6),
(137, 44, 31, 4.5),
(138, 44, 32, 4.2),
(139, 44, 33, 4.6),
(140, 44, 34, 4.4),
(141, 45, 30, 4.3),
(142, 45, 31, 4.3),
(143, 45, 32, 4),
(144, 45, 33, 4.5),
(145, 45, 34, 4.3),
(146, 46, 30, 4.6),
(147, 46, 31, 4.6),
(148, 46, 32, 4),
(149, 46, 33, 4.6),
(150, 46, 34, 4.5),
(151, 47, 30, 4.5),
(152, 47, 31, 4.4),
(153, 47, 32, 3.6),
(154, 47, 33, 4.4),
(155, 47, 34, 4.6),
(156, 48, 30, 4.3),
(157, 48, 31, 4.3),
(158, 48, 32, 4.3),
(159, 48, 33, 4.5),
(160, 48, 34, 4.2),
(161, 49, 30, 4.2),
(162, 49, 31, 4.2),
(163, 49, 32, 4.1),
(164, 49, 33, 4.8),
(165, 49, 34, 4.5),
(166, 50, 30, 4.3),
(167, 50, 31, 4.4),
(168, 50, 32, 4.3),
(169, 50, 33, 4.8),
(170, 50, 34, 4.5),
(171, 51, 30, 4.2),
(172, 51, 31, 4.3),
(173, 51, 32, 4.1),
(174, 51, 33, 4.3),
(175, 51, 34, 4.2),
(176, 52, 30, 4.2),
(177, 52, 31, 4.2),
(178, 52, 32, 4.1),
(179, 52, 33, 4.5),
(180, 52, 34, 4.2),
(181, 53, 30, 4.5),
(182, 53, 31, 4.4),
(183, 53, 32, 4),
(184, 53, 33, 4.3),
(185, 53, 34, 4.2),
(186, 54, 30, 4.3),
(187, 54, 31, 4.3),
(188, 54, 32, 4.1),
(189, 54, 33, 4.5),
(190, 54, 34, 4.5),
(191, 55, 30, 4.1),
(192, 55, 31, 4.1),
(193, 55, 32, 4),
(194, 55, 33, 4.2),
(195, 55, 34, 4),
(196, 56, 30, 4.1),
(197, 56, 31, 4.3),
(198, 56, 32, 4.5),
(199, 56, 33, 4.4),
(200, 56, 34, 4.3),
(201, 57, 30, 4.1),
(202, 57, 31, 4.1),
(203, 57, 32, 4.4),
(204, 57, 33, 4.6),
(205, 57, 34, 4.2),
(206, 58, 30, 4.1),
(207, 58, 31, 4),
(208, 58, 32, 4.4),
(209, 58, 33, 4.3),
(210, 58, 34, 4),
(211, 59, 30, 4.6),
(212, 59, 31, 4.6),
(213, 59, 32, 4.5),
(214, 59, 33, 4.7),
(215, 59, 34, 4.6),
(216, 60, 30, 4.4),
(217, 60, 31, 4.3),
(218, 60, 32, 4.4),
(219, 60, 33, 4.5),
(220, 60, 34, 4.3),
(221, 61, 30, 4.1),
(222, 61, 31, 4.3),
(223, 61, 32, 4.4),
(224, 61, 33, 3.9),
(225, 61, 34, 3.8),
(226, 62, 30, 4.2),
(227, 62, 31, 4.4),
(228, 62, 32, 4.1),
(229, 62, 33, 4.4),
(230, 62, 34, 3.9),
(231, 63, 30, 4.5),
(232, 63, 31, 4.6),
(233, 63, 32, 4.2),
(234, 63, 33, 4.5),
(235, 63, 34, 4.7),
(236, 64, 30, 4.1),
(237, 64, 31, 4.2),
(238, 64, 32, 3.9),
(239, 64, 33, 4.2),
(240, 64, 34, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pv_kriteria`
--

CREATE TABLE `pv_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pv_kriteria`
--

INSERT INTO `pv_kriteria` (`id_kriteria`, `nilai`) VALUES
(30, 0.409905),
(31, 0.133628),
(32, 0.262166),
(33, 0.0473206),
(34, 0.14698);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ranking`
--

CREATE TABLE `ranking` (
  `id_alternatif` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ranking`
--

INSERT INTO `ranking` (`id_alternatif`, `nilai`) VALUES
(22, 4.32383),
(26, 2.23878),
(27, 2.23878),
(28, 2.23878),
(29, 4.36556),
(30, 4.43203),
(31, 4.24226),
(32, 4.47386),
(33, 4.29104),
(34, 4.48509),
(35, 3.90479),
(36, 4.02564),
(37, 4.50939),
(38, 4.59329),
(39, 4.49032),
(40, 4.35703),
(41, 4.24691),
(42, 4.38458),
(43, 4.25045),
(44, 4.45237),
(45, 4.23081),
(46, 4.428),
(47, 4.26065),
(48, 4.29476),
(49, 4.24627),
(50, 4.36642),
(51, 4.19188),
(52, 4.18798),
(53, 4.30199),
(54, 4.28643),
(55, 4.06382),
(56, 4.27518),
(57, 4.21701),
(58, 4.16005),
(59, 4.57851),
(60, 4.37667),
(61, 4.15182),
(62, 4.16588),
(63, 4.46411),
(64, 4.05096);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ir`
--
ALTER TABLE `ir`
  ADD PRIMARY KEY (`jumlah`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `perbandingan_kriteria`
--
ALTER TABLE `perbandingan_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pv_alternatif`
--
ALTER TABLE `pv_alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pv_kriteria`
--
ALTER TABLE `pv_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `perbandingan_kriteria`
--
ALTER TABLE `perbandingan_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `pv_alternatif`
--
ALTER TABLE `pv_alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
