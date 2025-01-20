-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 20, 2025 lúc 08:32 AM
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
-- Cơ sở dữ liệu: `wd05_books`
--
CREATE DATABASE IF NOT EXISTS `wd05_books` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `wd05_books`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book`
--

CREATE TABLE `book` (
  `id_book` int(11) NOT NULL,
  `id_book_category` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `view` int(11) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `book`
--

INSERT INTO `book` (`id_book`, `id_book_category`, `name`, `image`, `description`, `view`, `create_date`) VALUES
(1, 1, 'book 1', 'book1.jpg', 'The Diary of a Young Girl, often referred to as The Diary of Anne Frank, is a book of the writings from the Dutch-language diary kept by Anne Frank while she was in hiding for two years with her family during the Nazi occupation of the Netherlands. The family was apprehended in 1944, and Anne Frank died of typhus in the Bergen-Belsen concentration camp in 1945. Anne\'s diaries were retrieved by Miep Gies and Bep Voskuijl. Miep gave them to Anne\'s father, Otto Frank, the family\'s only survivor, just after the Second World War was over.', 100, '2024-01-18 15:27:43'),
(2, 9, 'book 2', 'book1.jpg', 'The Diary of a Young Girl, often referred to as The Diary of Anne Frank, is a book of the writings from the Dutch-language diary kept by Anne Frank while she was in hiding for two years with her family during the Nazi occupation of the Netherlands. The family was apprehended in 1944, and Anne Frank died of typhus in the Bergen-Belsen concentration camp in 1945. Anne\'s diaries were retrieved by Miep Gies and Bep Voskuijl. Miep gave them to Anne\'s father, Otto Frank, the family\'s only survivor, just after the Second World War was over.', 100, '2024-01-18 15:27:43'),
(3, 5, 'book 3', 'book1.jpg', 'The Diary of a Young Girl, often referred to as The Diary of Anne Frank, is a book of the writings from the Dutch-language diary kept by Anne Frank while she was in hiding for two years with her family during the Nazi occupation of the Netherlands. The family was apprehended in 1944, and Anne Frank died of typhus in the Bergen-Belsen concentration camp in 1945. Anne\'s diaries were retrieved by Miep Gies and Bep Voskuijl. Miep gave them to Anne\'s father, Otto Frank, the family\'s only survivor, just after the Second World War was over.', 100, '2024-01-18 15:27:43'),
(4, 9, 'book 4', 'book1.jpg', 'The Diary of a Young Girl, often referred to as The Diary of Anne Frank, is a book of the writings from the Dutch-language diary kept by Anne Frank while she was in hiding for two years with her family during the Nazi occupation of the Netherlands. The family was apprehended in 1944, and Anne Frank died of typhus in the Bergen-Belsen concentration camp in 1945. Anne\'s diaries were retrieved by Miep Gies and Bep Voskuijl. Miep gave them to Anne\'s father, Otto Frank, the family\'s only survivor, just after the Second World War was over.', 100, '2024-01-18 15:27:43'),
(5, 4, 'book 5', 'book1.jpg', 'The Diary of a Young Girl, often referred to as The Diary of Anne Frank, is a book of the writings from the Dutch-language diary kept by Anne Frank while she was in hiding for two years with her family during the Nazi occupation of the Netherlands. The family was apprehended in 1944, and Anne Frank died of typhus in the Bergen-Belsen concentration camp in 1945. Anne\'s diaries were retrieved by Miep Gies and Bep Voskuijl. Miep gave them to Anne\'s father, Otto Frank, the family\'s only survivor, just after the Second World War was over.', 100, '2024-01-18 15:27:43'),
(6, 2, 'book 6', 'book1.jpg', 'The Diary of a Young Girl, often referred to as The Diary of Anne Frank, is a book of the writings from the Dutch-language diary kept by Anne Frank while she was in hiding for two years with her family during the Nazi occupation of the Netherlands. The family was apprehended in 1944, and Anne Frank died of typhus in the Bergen-Belsen concentration camp in 1945. Anne\'s diaries were retrieved by Miep Gies and Bep Voskuijl. Miep gave them to Anne\'s father, Otto Frank, the family\'s only survivor, just after the Second World War was over.', 100, '2024-01-18 15:27:43'),
(7, 6, 'book 7', 'book1.jpg', 'The Diary of a Young Girl, often referred to as The Diary of Anne Frank, is a book of the writings from the Dutch-language diary kept by Anne Frank while she was in hiding for two years with her family during the Nazi occupation of the Netherlands. The family was apprehended in 1944, and Anne Frank died of typhus in the Bergen-Belsen concentration camp in 1945. Anne\'s diaries were retrieved by Miep Gies and Bep Voskuijl. Miep gave them to Anne\'s father, Otto Frank, the family\'s only survivor, just after the Second World War was over.', 100, '2024-01-18 15:27:43'),
(8, 5, 'book 8', 'book1.jpg', 'The Diary of a Young Girl, often referred to as The Diary of Anne Frank, is a book of the writings from the Dutch-language diary kept by Anne Frank while she was in hiding for two years with her family during the Nazi occupation of the Netherlands. The family was apprehended in 1944, and Anne Frank died of typhus in the Bergen-Belsen concentration camp in 1945. Anne\'s diaries were retrieved by Miep Gies and Bep Voskuijl. Miep gave them to Anne\'s father, Otto Frank, the family\'s only survivor, just after the Second World War was over.', 100, '2024-01-18 15:27:43'),
(9, 8, 'book 9', 'book1.jpg', 'The Diary of a Young Girl, often referred to as The Diary of Anne Frank, is a book of the writings from the Dutch-language diary kept by Anne Frank while she was in hiding for two years with her family during the Nazi occupation of the Netherlands. The family was apprehended in 1944, and Anne Frank died of typhus in the Bergen-Belsen concentration camp in 1945. Anne\'s diaries were retrieved by Miep Gies and Bep Voskuijl. Miep gave them to Anne\'s father, Otto Frank, the family\'s only survivor, just after the Second World War was over.', 100, '2024-01-18 15:27:43'),
(10, 7, 'book 10', 'book1.jpg', 'The Diary of a Young Girl, often referred to as The Diary of Anne Frank, is a book of the writings from the Dutch-language diary kept by Anne Frank while she was in hiding for two years with her family during the Nazi occupation of the Netherlands. The family was apprehended in 1944, and Anne Frank died of typhus in the Bergen-Belsen concentration camp in 1945. Anne\'s diaries were retrieved by Miep Gies and Bep Voskuijl. Miep gave them to Anne\'s father, Otto Frank, the family\'s only survivor, just after the Second World War was over.', 100, '2024-01-18 15:27:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `books_category`
--

CREATE TABLE `books_category` (
  `id_book_category` int(11) NOT NULL,
  `book_category` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `books_category`
--

INSERT INTO `books_category` (`id_book_category`, `book_category`, `description`, `create_date`) VALUES
(1, 'category 1', 'none', '2024-01-18 15:26:08'),
(2, 'category 2', 'none', '2024-01-18 15:26:08'),
(3, 'category 3', 'none', '2024-01-18 15:26:08'),
(4, 'category 4', 'none', '2024-01-18 15:26:08'),
(5, 'category 5', 'none', '2024-01-18 15:26:08'),
(6, 'category 6', 'none', '2024-01-18 15:26:08'),
(7, 'category 7', 'none', '2024-01-18 15:26:08'),
(8, 'category 8', 'none', '2024-01-18 15:26:08'),
(9, 'category 9', 'none', '2024-01-18 15:26:08'),
(10, 'category 10', 'none', '2024-01-18 15:26:08');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id_book`),
  ADD KEY `fk_b_c` (`id_book_category`);

--
-- Chỉ mục cho bảng `books_category`
--
ALTER TABLE `books_category`
  ADD PRIMARY KEY (`id_book_category`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `book`
--
ALTER TABLE `book`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `books_category`
--
ALTER TABLE `books_category`
  MODIFY `id_book_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `fk_b_c` FOREIGN KEY (`id_book_category`) REFERENCES `books_category` (`id_book_category`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
