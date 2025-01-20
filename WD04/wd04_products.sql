-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 20, 2025 lúc 08:30 AM
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
-- Cơ sở dữ liệu: `wd04_products`
--
CREATE DATABASE IF NOT EXISTS `wd04_products` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `wd04_products`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id_account` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `create_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id_account`, `email`, `pass`, `create_date`) VALUES
(1, 'ngan@gmail.com', 'Ngan123.', '2024-01-17'),
(2, 'nga@gmail.com', 'Ngan123.', '2024-01-16'),
(3, 'nam@gmail.com', 'Ngan123.', '2024-01-08'),
(4, 'my@gmail.com', 'Ngan123.', '2024-01-07'),
(5, '', 'Ngan123.', '2024-01-10'),
(6, 'nga1@gmail.com', 'Ngan123.', '2024-01-02'),
(7, 'nga2@gmail.com', 'Ngan123.', '2024-01-05'),
(8, 'nga3@gmail.com', 'Ngan123.', '2024-01-05'),
(9, 'nga4@gmail.com', 'Ngan123.', '2024-01-12'),
(10, 'nga@5gmail.com', 'Ngan123.', '2024-01-02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `id_ product _category` int(11) NOT NULL,
  `id_account` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `id_ product _category`, `id_account`, `name`, `image`, `price`) VALUES
(1, 5, 4, 'củ sạc anker 20w', 'cusacanker.jpg', 500000),
(2, 9, 1, 'pixel 5', 'pixel5.jpg', 4500000),
(3, 2, 7, 'ốp lưng 1', 'pixel5.jpg', 100000),
(4, 2, 8, 'ốp lưng 2', 'pixel5.jpg', 100000),
(5, 1, 4, 'tai nghe 1', 'pixel5.jpg', 250000),
(6, 1, 10, 'tai nghe 2', 'pixel5.jpg', 150000),
(7, 4, 3, 'cáp sạc 1', 'pixel5.jpg', 50000),
(8, 7, 3, 'iphone 13', 'pixel5.jpg', 1500000),
(9, 6, 8, 'đế sạc 1', 'pixel5.jpg', 600000),
(10, 10, 6, 'nokia 6.1 plus', 'pixel5.jpg', 3600000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_category`
--

CREATE TABLE `product_category` (
  `id_product_category` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product_category`
--

INSERT INTO `product_category` (`id_product_category`, `name`, `description`) VALUES
(1, 'tai nghe', 'none'),
(2, 'ốp lưng', 'no'),
(3, 'cường lực', 'no'),
(4, 'cáp sạc', 'no'),
(5, 'củ sạc', 'no'),
(6, 'đế sạc không dây', 'no'),
(7, 'iphone', 'no'),
(8, 'samsung', 'no'),
(9, 'google pixel', 'no'),
(10, 'nokia', 'no');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_account`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `fk_pr_ca` (`id_ product _category`),
  ADD KEY `fk_pr_ac` (`id_account`);

--
-- Chỉ mục cho bảng `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id_product_category`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id_account` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id_product_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_pr_ac` FOREIGN KEY (`id_account`) REFERENCES `account` (`id_account`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pr_ca` FOREIGN KEY (`id_ product _category`) REFERENCES `product_category` (`id_product_category`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
