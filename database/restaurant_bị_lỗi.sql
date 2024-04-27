-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 14, 2022 lúc 08:57 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `restaurant`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ThucDon`
--

CREATE TABLE `ThucDon` (
  `id` int(4) NOT NULL,
  `tentd` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `uutien` int(4) NOT NULL DEFAULT 0,
  `hienthi` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ThucDon`
--

INSERT INTO `ThucDon` (`id`, `tentd`, `uutien`, `hienthi`) VALUES
(2, 'Món khai vị', 0, 1),
(3, 'Món chính', 0, 1),
(4, 'Món tráng miệng', 0, 1),
(5, 'Đồ uống', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `MonAn`
--

CREATE TABLE `MonAn` (
  `id` int(6) NOT NULL,
  `tenma` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gia` double(10,0) NOT NULL DEFAULT 0,
  `idtd` int(4) NOT NULL,
  `view` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `MonAn`
--

INSERT INTO `MonAn` (`id`, `tenma`, `img`, `gia`, `idtd`, `view`) VALUES
(1, 'Bruschetta bánh mì nướng', 'khaivi1.png', 100000, 2, 0),
(2, 'Foie gras Gan ngỗng béo', 'khaivi3.png', 200000, 2, 0),
(3, 'Croque Monsieur Bánh mì nướng', 'khaivi5.png', 150000, 2, 0),
(4, 'Salad cồi sò điệp', 'khaivi2.png', 628000, 2, 0),
(5, 'Huître Hàu sống', 'khaivi4.png', 30000, 2, 0),
(6, 'Coq au vin Gà sốt vang', 'khaivi6.png', 400000, 2, 0),
(7, 'Sò điệp sốt kem chanh', 'monchinh1.png', 300000, 3, 0),
(8, 'Thăn ngoại bò Úc nướng', 'monchinh3.png', 350000, 3, 0),
(9, 'Cơm chiên hải sản', 'monchinh5.png', 200000, 3, 0),
(10, 'Cá hồi sốt tiêu đen', 'monchinh2.png', 250000, 3, 0),
(11, 'Salad', 'monchinh4.png', 100000, 3, 0),
(12, 'Sườn cừu nướng', 'monchinh6.png', 400000, 3, 0),
(13, 'Mont-blanc', 'trangmieng1.png', 100000, 4, 0),
(14, 'Bánh Madeleines', 'trangmieng3.png', 100000, 4, 0),
(15, 'Pain au chocolat', 'trangmieng5.png', 150000, 4, 0),
(16, 'Bánh crepes', 'trangmieng2.png', 100000, 4, 0),
(17, 'Petit Fours', 'trangmieng4.png', 150000, 4, 0),
(18, 'Bánh crepes dâu tây', 'trangmieng6.png', 200000, 4, 0),
(19, 'Bourbon whiskey', 'ruou1.png', 1000000, 5, 0),
(20, 'Rượu Hendrick’s Gin', 'ruou3.png', 800000, 5, 0),
(21, 'Rhum Bacardi Vàng', 'ruou5.png', 350000, 5, 0),
(22, 'Rượu Cognac', 'ruou2.png', 1000000, 5, 0),
(23, 'Rượu Vodka Absolut Raspberri (Dâu)', 'ruou4.png', 400000, 5, 0),
(24, 'Rượu Tequila Jose Cuervo', 'ruou6.png', 400000, 5, 0);


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(4) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `address`, `email`, `user`, `pass`, `role`) VALUES
(1, NULL, NULL, NULL, 'admin', '123', 1),
(2, NULL, NULL, NULL, 'hotb', '456', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ThucDon`
--
ALTER TABLE `ThucDon`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `MonAn`
--
ALTER TABLE `MonAn`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_MonAn_ThucDon` (`idtd`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ThucDon`
--
ALTER TABLE `ThucDon`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `MonAn`
--
ALTER TABLE `MonAn`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `MonAn`
--
ALTER TABLE `MonAn`
  ADD CONSTRAINT `fk_MonAn_ThucDon` FOREIGN KEY (`idtd`) REFERENCES `ThucDon` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
