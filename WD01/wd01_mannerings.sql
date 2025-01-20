-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 20, 2025 lúc 08:24 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `wd01_mannerings`
--
CREATE DATABASE IF NOT EXISTS `wd01_mannerings` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `wd01_mannerings`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `house`
--

CREATE TABLE `house` (
  `REFNO` int(11) NOT NULL,
  `TOWN` text NOT NULL,
  `TYPE` text NOT NULL,
  `BEDROOMS` int(10) NOT NULL,
  `PRICE` float NOT NULL,
  `HEATING` varchar(5) NOT NULL,
  `GARAGE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `house`
--

INSERT INTO `house` (`REFNO`, `TOWN`, `TYPE`, `BEDROOMS`, `PRICE`, `HEATING`, `GARAGE`) VALUES
(13678, 'Croydon', 'Detached', 4, 250000, 'Yes', 'Double'),
(13679, 'Croydon', 'Semi-Detached', 3, 165000, 'No', 'Single'),
(13700, 'Redhill', 'Flat', 2, 110000, 'Yes', 'None');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`REFNO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
