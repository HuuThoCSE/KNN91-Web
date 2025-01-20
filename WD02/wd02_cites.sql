-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 20, 2025 lúc 08:23 AM
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
-- Cơ sở dữ liệu: `wd02_cites`
--
CREATE DATABASE IF NOT EXISTS `wd02_cites` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `wd02_cites`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cities`
--

CREATE TABLE `cities` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `country_code` varchar(100) NOT NULL,
  `district` varchar(20) NOT NULL,
  `population` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cities`
--

INSERT INTO `cities` (`ID`, `Name`, `country_code`, `district`, `population`) VALUES
(1, 'Jining', 'CN', 'Jining', 800000),
(2, 'Kaiyuan', 'CN', 'Kaiyuan', 5000000),
(3, 'New York', 'USA', 'New York', 10000000),
(4, 'Vĩnh Long', 'VN', 'Vĩnh Long', 1000000),
(5, 'Springfield', 'USA', 'Springfield', 4500000),
(6, 'Kansas City', 'USA', 'Kansas City', 9675000),
(7, 'Richmond     ', 'USA', 'Richmond', 4700000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `countries`
--

CREATE TABLE `countries` (
  `code` varchar(3) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Continent` varchar(50) NOT NULL,
  `independence_year` int(11) NOT NULL,
  `population` int(11) NOT NULL,
  `gup` int(11) NOT NULL,
  `head_of_state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `countries`
--

INSERT INTO `countries` (`code`, `Name`, `Continent`, `independence_year`, `population`, `gup`, `head_of_state`) VALUES
('CN', 'China', 'Asia', 1900, 1500000000, 29988, 'Tập Cận Bình'),
('USA', 'United Stated', 'Americas', 1810, 700000000, 48978, 'Donal Trump'),
('VN', 'Việt Nam', 'Asia', 1975, 90000000, 4700, 'Nguyễn Xuân Phúc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `language`
--

CREATE TABLE `language` (
  `country_code` varchar(20) NOT NULL,
  `language` varchar(20) NOT NULL,
  `offical` varchar(5) NOT NULL,
  `percentage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `language`
--

INSERT INTO `language` (`country_code`, `language`, `offical`, `percentage`) VALUES
('CN', 'Phồn thể', 'T', 80.6),
('USA', 'English', 'T', 97.2),
('VN', 'Tiếng việt', 'T', 71.3);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_CITIES_COUNTRY` (`country_code`);

--
-- Chỉ mục cho bảng `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`code`);

--
-- Chỉ mục cho bảng `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`country_code`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `FK_CITIES_COUNTRY` FOREIGN KEY (`country_code`) REFERENCES `countries` (`code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `language`
--
ALTER TABLE `language`
  ADD CONSTRAINT `FK_LANGUAGE_COUNTRY` FOREIGN KEY (`country_code`) REFERENCES `countries` (`code`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
