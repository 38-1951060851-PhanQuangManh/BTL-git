-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 04, 2022 lúc 04:17 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btl_meetup`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_nguoidung`
--

CREATE TABLE `db_nguoidung` (
  `email` varchar(255) NOT NULL,
  `tenngdung` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `db_nguoidung`
--

INSERT INTO `db_nguoidung` (`email`, `tenngdung`, `pass`) VALUES
('ligligxx03@gmail.com', 'Phan Quang Mạnh', '13102001'),
('ligligxx04@gmail.com', 'Phan Quang Thang', ' $2y$10$m5L71qBLdrfWFtpuJdfDAOxkyhtgadNNSmtyJ3EDBMLokMMbCJUQG'),
('ligligxx08@gmail.com', 'Phan Quang dung', ' $2y$10$PPDAJhe4RC8A5jNozyLhF.yoWv785KwH5x5atlNCCyVesKwi87moe'),
('ligligxx@gmail.com', 'Phan Quang Truc', ' $2y$10$ZYAmOp8EbPMlzYtEJ/RXaecy6HII.7SIucSDqMktbpXFxEG9yREou');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
