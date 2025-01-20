-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 20, 2025 lúc 08:21 AM
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
-- Cơ sở dữ liệu: `wd03_mana_commodity`
--
CREATE DATABASE IF NOT EXISTS `wd03_mana_commodity` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `wd03_mana_commodity`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `classes`
--

CREATE TABLE `classes` (
  `Class_ID` varchar(4) NOT NULL,
  `Class_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `classes`
--

INSERT INTO `classes` (`Class_ID`, `Class_Name`) VALUES
('CT02', 'Chính trị'),
('KT01', 'Kỹ thuật số');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `students`
--

CREATE TABLE `students` (
  `Student_ID` varchar(5) NOT NULL,
  `S_FirtName` varchar(50) NOT NULL,
  `S_LastName` varchar(50) NOT NULL,
  `S_City` varchar(100) NOT NULL,
  `Class_ID` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `students`
--

INSERT INTO `students` (`Student_ID`, `S_FirtName`, `S_LastName`, `S_City`, `Class_ID`) VALUES
('CS03', 'Vang', 'Nguyễn Tiến', 'Nam Định', 'KT01'),
('CS04', 'Thành', 'Nguyễn Tiến', 'Vĩnh Long', 'KT01'),
('CS101', 'Trường', 'Lương Đông', 'Vĩnh Long', 'KT01'),
('CS102', 'Thọ', 'Nguyễn Hửu', 'Vĩnh Long', 'CT02');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`Class_ID`);

--
-- Chỉ mục cho bảng `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Student_ID`),
  ADD KEY `FK_STUDENTS_CLASSES` (`Class_ID`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `FK_STUDENTS_CLASSES` FOREIGN KEY (`Class_ID`) REFERENCES `classes` (`Class_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
