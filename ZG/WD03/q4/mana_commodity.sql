-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 15, 2025 lúc 05:11 PM
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
-- Cơ sở dữ liệu: `mana_commodity`
--
CREATE DATABASE IF NOT EXISTS `mana_commodity` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `mana_commodity`;

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
('CS01', 'Computer Science 2019'),
('CS02', 'Computer Science 2020'),
('Ma01', 'Math 2017'),
('Mu01', 'Music 2019');

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
('CS101', 'Linh', 'Tran Thu', 'Can Tho', 'CS01'),
('CS102', 'An', 'Phan Van', 'Vinh Long', 'CS01'),
('CS201', 'Van', 'Truong Thu', 'Tra Vinh', 'CS02'),
('CS202', 'Truong', 'Duong Van', 'Vinh Long', 'CS02');

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
