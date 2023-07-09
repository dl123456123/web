-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th6 18, 2023 lúc 04:35 PM
-- Phiên bản máy phục vụ: 10.3.38-MariaDB-cll-lve
-- Phiên bản PHP: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `coder_lamcode`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `history`
--

CREATE TABLE `history` (
  `id` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `truoc_gd` bigint(20) NOT NULL,
  `sau_gd` bigint(20) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `history`
--

INSERT INTO `history` (`id`, `username`, `text`, `truoc_gd`, `sau_gd`, `time`) VALUES
(1, 'Hello =))', 'Mua Nick Free Fire Thành Công!', 28082000, 27782000, '04/11/2022 - 20:38:51'),
(2, 'Jinsadboy07', 'Mua Nick Random Thành Công!', 4820000, 4770000, '04/11/2022 - 20:54:01'),
(3, 'Bot Coder', 'Mua Nick Random Thành Công!', 77566237229, 77566187229, '04/11/2022 - 20:59:08'),
(4, 'Bot Coder', 'Mua Nick Random Thành Công!', 77566187229, 77566137229, '04/11/2022 - 20:59:16'),
(5, 'Hello =))', 'Mua Nick Random Thành Công!', 25784000, 25734000, '04/11/2022 - 21:44:03'),
(6, 'Hello =))', 'Mua Nick Random Thành Công!', 25734000, 25684000, '04/11/2022 - 21:44:16'),
(7, 'Jinsadboy07', 'Mua Nick Random Thành Công!', 3130000, 3080000, '05/11/2022 - 16:15:20'),
(8, 'Bot Coder', 'Mua Nick Random Thành Công!', 77564887229, 77564837229, '13/11/2022 - 06:52:23'),
(9, 'Bot Coder', 'Mua Nick Random Thành Công!', 77564628229, 77564578229, '13/11/2022 - 06:55:03'),
(10, 'Bot Coder', 'Mua Nick Random Thành Công!', 77563669229, 77563619229, '14/11/2022 - 06:02:56'),
(11, 'anuniteit12', 'Mua Nick Free Fire Thành Công!', 0, 0, '21/11/2022 - 18:53:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `history_ff`
--

CREATE TABLE `history_ff` (
  `id` bigint(20) NOT NULL,
  `taikhoan` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `2fa` varchar(255) NOT NULL,
  `dangky` varchar(255) NOT NULL,
  `nguoimua` varchar(255) NOT NULL,
  `giatien` bigint(20) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `history_ff`
--

INSERT INTO `history_ff` (`id`, `taikhoan`, `matkhau`, `2fa`, `dangky`, `nguoimua`, `giatien`, `time`) VALUES
(1, 'traminhquoc2008@gmail.com', '123456SSS', 'Không Có', 'Facebook', 'Hello =))', 300000, '04/11/2022 - 20:38:51'),
(2, '', '', '', 'Facebook', 'anuniteit12', 0, '21/11/2022 - 18:53:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `napthe`
--

CREATE TABLE `napthe` (
  `id` bigint(20) NOT NULL,
  `loaithe` varchar(255) NOT NULL,
  `menhgia` bigint(20) NOT NULL,
  `mathe` varchar(255) NOT NULL,
  `seri` varchar(255) NOT NULL,
  `tranid` varchar(255) NOT NULL,
  `day` bigint(20) NOT NULL,
  `month` bigint(20) NOT NULL,
  `year` bigint(20) NOT NULL,
  `nguoinap` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `napthe`
--

INSERT INTO `napthe` (`id`, `loaithe`, `menhgia`, `mathe`, `seri`, `tranid`, `day`, `month`, `year`, `nguoinap`, `time`, `trangthai`) VALUES
(1, 'VIETTEL', 1000000, '178264378467846', '20000190220739', '11953689', 5, 11, 2022, 'Jinsadboy07', '05/11/2022 - 18:47:37', 0),
(2, 'VIETTEL', 1000000, '372254378467844', '10001234567894', '55756067', 5, 11, 2022, 'Jinsadboy07', '05/11/2022 - 19:21:53', 0),
(3, 'VIETTEL', 1000000, '372214378467844', '10001234567899', '86198506', 5, 11, 2022, 'Jinsadboy07', '05/11/2022 - 19:22:05', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(256) NOT NULL,
  `pow` bigint(20) NOT NULL,
  `kimcuong` bigint(20) NOT NULL,
  `money` bigint(20) NOT NULL,
  `sum_money` bigint(20) NOT NULL,
  `time` varchar(255) NOT NULL,
  `day` bigint(20) NOT NULL,
  `month` bigint(20) NOT NULL,
  `year` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `username`, `password`, `level`, `pow`, `kimcuong`, `money`, `sum_money`, `time`, `day`, `month`, `year`) VALUES
(8, 'admin123', 'admin123', 'admin', 0, 0, 5000000, 0, '17/06/2023 - 17:13:00', 17, 6, 2023);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nickff`
--

CREATE TABLE `nickff` (
  `id` int(255) NOT NULL,
  `taikhoan` varchar(999) NOT NULL,
  `matkhau` varchar(999) NOT NULL,
  `giatien` varchar(999) NOT NULL,
  `rank` varchar(999) NOT NULL,
  `nhanvat` varchar(999) NOT NULL,
  `dangky` varchar(999) NOT NULL,
  `pet` varchar(999) NOT NULL,
  `noibat` varchar(999) NOT NULL,
  `2fa` varchar(999) NOT NULL,
  `nguoimua` varchar(999) NOT NULL,
  `status` varchar(999) NOT NULL DEFAULT '0',
  `time` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nickff`
--

INSERT INTO `nickff` (`id`, `taikhoan`, `matkhau`, `giatien`, `rank`, `nhanvat`, `dangky`, `pet`, `noibat`, `2fa`, `nguoimua`, `status`, `time`) VALUES
(1, 'traminhquoc2008@gmail.com', '123456SSS', '300000', 'Bạch Kim', 'Nam', 'Facebook', 'Có', 'LÀ BẠN RẤT ĐẸP TRAI', 'Không Có', 'null', '0', 1667569083),
(4, '', '', '0', 'Đồng', 'Nam', 'Facebook', 'Không', '', '', 'null', '0', 1669031594);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nick_random_ff`
--

CREATE TABLE `nick_random_ff` (
  `id` bigint(20) NOT NULL,
  `id_random` bigint(20) NOT NULL,
  `taikhoan` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `2fa` varchar(255) NOT NULL,
  `trangthai` varchar(255) NOT NULL,
  `nguoimua` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `nick_random_ff`
--

INSERT INTO `nick_random_ff` (`id`, `id_random`, `taikhoan`, `matkhau`, `2fa`, `trangthai`, `nguoimua`, `time`) VALUES
(1, 1, 'Banratdeptrai07@gmail.com/123456SSS', 'KHÔNG CÓ MÃ NHÉ', '', 'false', 'Hello =))', '04/11/2022 - 20:50:32'),
(2, 1, 'onichanyamate@gmail.com', '123456SSS', 'KHÔNG CÓ MÃ NHÉ', 'false', 'Bot Coder', '04/11/2022 - 20:51:19'),
(3, 1, 'onichanyamate@gmail.com', '123456SSS', 'KHÔNG CÓ MÃ NHÉ', 'false', 'Hello =))', '04/11/2022 - 20:51:29'),
(4, 1, 'Jinsadboydeptrai@gmail.com', '123456SSS', 'KHÔNG CÓ MÃ NHÉ', 'false', 'Bot Coder', '04/11/2022 - 20:51:44'),
(5, 1, 'Jinsadboydeptrai@gmail.com', '123456SSS', 'KHÔNG CÓ MÃ NHÉ', 'false', 'Jinsadboy07', '04/11/2022 - 20:53:17'),
(6, 1, 'Ngominhthe@gmail.com', '0392829', 'NO MÃ', 'true', 'NULL', '05/11/2022 - 16:14:12'),
(7, 1, 'Ngominhthe@gmail.com', '0392829', 'NO MÃ', 'true', 'NULL', '05/11/2022 - 16:14:16'),
(8, 1, 'Ngominhthe@gmail.com', '0392829', 'NO MÃ', 'true', 'NULL', '05/11/2022 - 16:14:20'),
(9, 1, 'Ngominhthe@gmail.com', '0392829', 'NO MÃ', 'false', 'Bot Coder', '05/11/2022 - 16:14:24'),
(10, 1, 'Ngominhthe@gmail.com', '0392829', 'NO MÃ', 'true', 'NULL', '05/11/2022 - 16:14:28'),
(11, 1, 'Ngominhthe@gmail.com', '0392829', 'NO MÃ', 'true', 'NULL', '05/11/2022 - 16:14:32'),
(12, 1, 'Ngominhthe@gmail.com', '0392829', 'NO MÃ', 'true', 'NULL', '05/11/2022 - 16:14:35'),
(13, 1, 'Ngominhthe@gmail.com', '0392829', 'NO MÃ', 'true', 'NULL', '05/11/2022 - 16:14:39'),
(14, 1, 'Ngominhthe@gmail.com', '0392829', 'NO MÃ', 'true', 'NULL', '05/11/2022 - 16:14:43'),
(15, 1, 'Ngominhthe@gmail.com', '0392829', 'NO MÃ', 'true', 'NULL', '05/11/2022 - 16:14:47'),
(16, 1, 'Ngominhthe@gmail.com', '0392829', 'NO MÃ', 'true', 'NULL', '05/11/2022 - 16:14:50'),
(17, 1, 'Ngominhthe@gmail.com', '0392829', 'NO MÃ', 'true', 'NULL', '05/11/2022 - 16:14:54'),
(18, 1, 'Ngominhthe@gmail.com', '0392829', 'NO MÃ', 'false', 'Jinsadboy07', '05/11/2022 - 16:14:58'),
(19, 1, 'Ngominhthe@gmail.com', '0392829', 'NO MÃ', 'false', 'Bot Coder', '05/11/2022 - 17:59:58'),
(20, 1, 'Nịt', 'ngu', '', 'false', 'Bot Coder', '05/11/2022 - 18:42:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `random_ff`
--

CREATE TABLE `random_ff` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `giatien` bigint(20) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `thumb_random` varchar(255) NOT NULL,
  `trangthai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `random_ff`
--

INSERT INTO `random_ff` (`id`, `name`, `mota`, `giatien`, `thumb`, `thumb_random`, `trangthai`) VALUES
(1, 'Random Free Fire 50K', '<p>Tr&ograve; Chơi Nh&acirc;n Phẩm</p>\r\n', 50000, 'https://uudaigame.com/upload/rd50k.gif', 'https://uudaigame.com/upload/rd50k.gif', 'true');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rutkimcuong`
--

CREATE TABLE `rutkimcuong` (
  `id` bigint(20) NOT NULL,
  `idgame` varchar(255) NOT NULL,
  `goirut` bigint(20) NOT NULL,
  `nguoirut` varchar(255) NOT NULL,
  `trangthai` bigint(20) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `rutkimcuong`
--

INSERT INTO `rutkimcuong` (`id`, `idgame`, `goirut`, `nguoirut`, `trangthai`, `time`) VALUES
(1, '2222222222', 1190, 'Hello =))', 2, '04/11/2022 - 20:35:27'),
(2, '2222222222222222222', 1190, 'Hello =))', 2, '04/11/2022 - 20:35:38'),
(3, '2222222222222222222', 1190, 'Hello =))', 2, '04/11/2022 - 20:36:17'),
(4, '2222222222222222222', 100000, 'Hello =))', 2, '04/11/2022 - 20:36:21'),
(5, '2222222222222222222', 9999, 'Hello =))', 2, '04/11/2022 - 20:36:28'),
(6, 'Địt mẹ mày', 1190, 'Hello =))', 2, '04/11/2022 - 20:38:21'),
(7, 'Nhìn cái lồn mẹ mày', 100000, 'Hello =))', 2, '04/11/2022 - 20:44:04'),
(8, 'Địt mẹ cuộc sống ', 100000, 'Hello =))', 2, '04/11/2022 - 20:44:18'),
(9, 'Địt mẹ cuộc sống ', 100000, 'Hello =))', 2, '04/11/2022 - 20:44:40'),
(10, 'Báo', 100000, 'Hello =))', 2, '04/11/2022 - 20:44:46'),
(11, 'THÌ RA M CHỌN CÁI CHẾT:)', 100000, 'Hello =))', 2, '04/11/2022 - 20:45:00'),
(12, 'Kkk', 100000, 'Hello =))', 2, '04/11/2022 - 20:45:05'),
(13, '1906776225', 1190, 'Bot Coder', 2, '04/11/2022 - 20:53:36'),
(14, '1906776225', 50000, 'Bot Coder', 2, '04/11/2022 - 20:53:43'),
(15, '1906776225', 1190, 'Bot Coder', 2, '04/11/2022 - 20:53:55'),
(16, '2171732204', 1190, 'Jinsadboy07', 2, '04/11/2022 - 20:54:25'),
(17, '2171732204', 1190, 'Jinsadboy07', 2, '04/11/2022 - 20:54:27'),
(18, '1906776225', 100000, 'Bot Coder', 2, '04/11/2022 - 20:58:04'),
(19, '1906776225', 100000, 'Bot Coder', 2, '04/11/2022 - 20:58:06'),
(20, '1906776225', 100000, 'Bot Coder', 2, '04/11/2022 - 20:58:07'),
(21, '1906776225', 100000, 'Bot Coder', 2, '04/11/2022 - 20:58:09'),
(22, '1906776225', 100000, 'Bot Coder', 2, '04/11/2022 - 20:58:10'),
(23, '1906776225', 100000, 'Bot Coder', 2, '04/11/2022 - 20:58:12'),
(24, '1906776225', 1190, 'Bot Coder', 2, '04/11/2022 - 20:58:15'),
(25, '1906776225', 1190, 'Bot Coder', 2, '04/11/2022 - 20:58:17'),
(26, '1906776225', 1190, 'Bot Coder', 2, '04/11/2022 - 20:58:18'),
(27, '1906776225', 1190, 'Bot Coder', 2, '04/11/2022 - 20:58:20'),
(28, '1906776225', 1190, 'Bot Coder', 2, '04/11/2022 - 20:58:21'),
(29, '1906776225', 1190, 'Bot Coder', 2, '04/11/2022 - 20:58:23'),
(30, '1906776225', 9999, 'Bot Coder', 2, '04/11/2022 - 20:58:26'),
(31, '1906776225', 9999, 'Bot Coder', 2, '04/11/2022 - 20:58:28'),
(32, '1906776225', 9999, 'Bot Coder', 2, '04/11/2022 - 20:58:29'),
(33, '1906776225', 9999, 'Bot Coder', 2, '04/11/2022 - 20:58:31'),
(34, '1906776225', 9999, 'Bot Coder', 2, '04/11/2022 - 20:58:32'),
(35, '1906776225', 9999, 'Bot Coder', 2, '04/11/2022 - 20:58:34'),
(36, '1906776225', 9999, 'Bot Coder', 2, '04/11/2022 - 20:58:36'),
(37, '1906776225', 1190, 'Bot Coder', 2, '04/11/2022 - 20:58:41'),
(38, '1906776225', 1190, 'Bot Coder', 2, '04/11/2022 - 20:58:43'),
(39, '1906776225', 1190, 'Bot Coder', 2, '04/11/2022 - 20:58:44'),
(40, '1906776225', 1190, 'Bot Coder', 2, '04/11/2022 - 20:58:45'),
(41, '1906776225', 1190, 'Bot Coder', 2, '04/11/2022 - 20:58:47'),
(42, '5220456578', 9999, 'Bot Coder', 2, '04/11/2022 - 21:07:26'),
(43, '3167917486', 100000, 'Jinsadboy07', 2, '04/11/2022 - 21:47:36'),
(44, '3167917486', 1190, 'Jinsadboy07', 2, '04/11/2022 - 21:48:01'),
(45, '3167917486', 1190, 'Jinsadboy07', 2, '04/11/2022 - 21:48:02'),
(46, '3167917486', 1190, 'Jinsadboy07', 2, '04/11/2022 - 21:48:03'),
(47, '3167917486', 1190, 'Jinsadboy07', 2, '04/11/2022 - 21:48:04'),
(48, '3167917486', 1190, 'Jinsadboy07', 2, '04/11/2022 - 21:48:04'),
(49, '3167917486', 1190, 'Jinsadboy07', 2, '04/11/2022 - 21:48:05'),
(50, '3167917486', 1190, 'Jinsadboy07', 2, '04/11/2022 - 21:48:06'),
(51, 'Lồn', 1190, 'Jinsadboy07', 2, '05/11/2022 - 12:10:05'),
(52, '2291711170', 50000, 'Jinsadboy07', 2, '05/11/2022 - 12:54:03'),
(53, '2291711170', 20000, 'Jinsadboy07', 2, '05/11/2022 - 12:54:10'),
(54, '2291711170', 20000, 'Jinsadboy07', 2, '05/11/2022 - 12:54:11'),
(55, '2291711170', 3050, 'Jinsadboy07', 2, '05/11/2022 - 12:54:14'),
(56, '12345678', 1190, 'Jinsadboy07', 2, '05/11/2022 - 12:54:26'),
(57, '3367917488', 3050, 'Jinsadboy', 2, '05/11/2022 - 15:07:05'),
(58, '2807441354', 3050, 'Jinsadboy', 2, '05/11/2022 - 15:07:19'),
(59, 'Vinamilk ', 100000, 'Hello =))', 2, '05/11/2022 - 18:10:16'),
(60, 'Vinamilk ', 100000, 'Hello =))', 2, '05/11/2022 - 18:10:17'),
(61, '3167917486', 20000, 'Jinsadboy07', 2, '05/11/2022 - 18:42:48'),
(62, '3167917486', 3050, 'Jinsadboy07', 2, '05/11/2022 - 18:42:53'),
(63, '3167917486', 1190, 'Jinsadboy07', 2, '05/11/2022 - 18:42:59'),
(64, '3167917486', 1190, 'Jinsadboy07', 2, '05/11/2022 - 18:43:00'),
(65, '2291711171', 100000, 'Jinsadboy07', 2, '05/11/2022 - 19:26:22'),
(66, '2291711171', 100000, 'Jinsadboy07', 2, '05/11/2022 - 19:26:24'),
(67, '2291711171', 100000, 'Jinsadboy07', 2, '05/11/2022 - 19:26:25'),
(68, 'Kiệt mio', 20000, 'Jinsadboy07', 2, '05/11/2022 - 21:24:20'),
(69, 'Kiệt mio', 3050, 'Jinsadboy07', 2, '05/11/2022 - 21:24:23'),
(70, 'Kiệt mio', 1190, 'Jinsadboy07', 2, '05/11/2022 - 21:24:26'),
(71, 'Oke', 20000, 'Jinsadboy07', 2, '08/11/2022 - 17:25:34'),
(72, 'Oke', 3050, 'Jinsadboy07', 2, '08/11/2022 - 17:25:40'),
(73, 'Oke', 3050, 'Jinsadboy07', 2, '08/11/2022 - 17:25:41'),
(74, 'Oke', 3050, 'Jinsadboy07', 2, '08/11/2022 - 17:25:42'),
(75, 'Oke', 1190, 'Jinsadboy07', 2, '08/11/2022 - 17:25:46'),
(76, '1906776225', 3050, 'Bot Coder', 2, '13/11/2022 - 06:54:02'),
(77, '1906776225', 3050, 'Bot Coder', 2, '13/11/2022 - 06:54:07'),
(78, '1906776225', 3050, 'Bot Coder', 2, '13/11/2022 - 06:54:09'),
(79, '1906776225', 9999, 'Bot Coder', 2, '13/11/2022 - 07:00:09'),
(80, '5220456578', 100000, 'Bot Coder', 2, '14/11/2022 - 06:00:56'),
(81, '5220456578', 100000, 'Bot Coder', 2, '14/11/2022 - 06:00:58'),
(82, '5220456578', 100000, 'Bot Coder', 2, '14/11/2022 - 06:00:59'),
(83, '5220456578', 20000, 'Bot Coder', 2, '14/11/2022 - 06:01:04'),
(84, '5220456578', 20000, 'Bot Coder', 2, '14/11/2022 - 06:01:06'),
(85, '5220456578', 1190, 'Bot Coder', 2, '14/11/2022 - 06:01:10'),
(86, '5220456578', 1190, 'Bot Coder', 2, '14/11/2022 - 06:01:11'),
(87, '5220456578', 1190, 'Bot Coder', 2, '14/11/2022 - 06:01:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `thongbao` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `choingay` varchar(255) NOT NULL,
  `muangay` varchar(255) NOT NULL,
  `quay` varchar(255) NOT NULL,
  `nohu` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `thongbao`, `logo`, `banner`, `choingay`, `muangay`, `quay`, `nohu`) VALUES
(1, '<p><img src=\"https://shopgow.xyz/tep-tin/441633tb t6-2.png\">	  </p>', 'https://i.imgur.com/V61xsbi.png', '/upload/bg.gif', 'http://quanly.xboxtech.vn/upload/setting/78d3d2a913882e9a4608240663f517c8.png', 'http://quanly.xboxtech.vn/upload/setting/3bbc3627980aca73cee2f8af8d195c56.png', 'https://cdn.upanh.info/storage/upload/images/IMG_3478(2).png', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_history_system`
--

CREATE TABLE `user_history_system` (
  `id` int(255) NOT NULL,
  `username` varchar(999) NOT NULL,
  `action` varchar(999) DEFAULT NULL,
  `action_name` varchar(999) DEFAULT NULL,
  `sotien` varchar(999) NOT NULL DEFAULT '0',
  `mota` varchar(999) DEFAULT NULL,
  `time` int(255) NOT NULL,
  `history` int(11) NOT NULL DEFAULT 0,
  `hisnick` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vongquay_kimcuong`
--

CREATE TABLE `vongquay_kimcuong` (
  `id` int(255) NOT NULL,
  `type` varchar(225) NOT NULL,
  `name` varchar(999) DEFAULT NULL,
  `thumb` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `img_quay` varchar(255) NOT NULL,
  `mota` varchar(999) DEFAULT NULL,
  `giatien` varchar(999) NOT NULL DEFAULT '0',
  `sudung` varchar(999) NOT NULL DEFAULT '0',
  `status` varchar(255) NOT NULL DEFAULT 'false',
  `time` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vongquay_kimcuong_gift`
--

CREATE TABLE `vongquay_kimcuong_gift` (
  `id` int(255) NOT NULL,
  `id_vongquay` int(255) NOT NULL,
  `item_1` varchar(999) NOT NULL,
  `item_2` varchar(999) NOT NULL,
  `item_3` varchar(999) NOT NULL,
  `item_4` varchar(999) NOT NULL,
  `item_5` varchar(999) NOT NULL,
  `item_6` varchar(999) NOT NULL,
  `item_7` varchar(999) NOT NULL,
  `item_8` varchar(999) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `history_ff`
--
ALTER TABLE `history_ff`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `napthe`
--
ALTER TABLE `napthe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nickff`
--
ALTER TABLE `nickff`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nick_random_ff`
--
ALTER TABLE `nick_random_ff`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `random_ff`
--
ALTER TABLE `random_ff`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `rutkimcuong`
--
ALTER TABLE `rutkimcuong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user_history_system`
--
ALTER TABLE `user_history_system`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vongquay_kimcuong`
--
ALTER TABLE `vongquay_kimcuong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vongquay_kimcuong_gift`
--
ALTER TABLE `vongquay_kimcuong_gift`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `history`
--
ALTER TABLE `history`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `history_ff`
--
ALTER TABLE `history_ff`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `napthe`
--
ALTER TABLE `napthe`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `nickff`
--
ALTER TABLE `nickff`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `nick_random_ff`
--
ALTER TABLE `nick_random_ff`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `random_ff`
--
ALTER TABLE `random_ff`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `rutkimcuong`
--
ALTER TABLE `rutkimcuong`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `user_history_system`
--
ALTER TABLE `user_history_system`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `vongquay_kimcuong`
--
ALTER TABLE `vongquay_kimcuong`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `vongquay_kimcuong_gift`
--
ALTER TABLE `vongquay_kimcuong_gift`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
