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
-- Cấu trúc bảng cho bảng `NguyenLieu`
--

CREATE TABLE `NguyenLieu` (
  `id` int(6) NOT NULL,
  `tennguyenlieu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(5) NOT NULL,
  `idma` int(4) NOT NULL,
  `view` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `NguyenLieu`
--

INSERT INTO `NguyenLieu` (`id`, `tennguyenlieu`, `soluong`, `idma`, `view`) VALUES

(01,'Dâu tây, bột',500,18,0),
(02,'Hàu chanh',500,5,0),
(03,'Xalad, cà chua, sốt chua ngọt',500,11,0),
(04,'Sò điệp, chanh, kem',500,7,0),
(05,'Bánh mì, cà chua',500,1,0),
(06,'Bánh mì, bơ',500,3,0),
(07,'Bột, bơ, sữa, kem',500,13,0),
(08,'Bột, trứng, sữa, kem',500,14,0),
(09,'Bột, bơ, trứng, sữa',500,15,0),
(010,'Bột, socola',500,16,0),
(011,'Thịt gà, sốt vang',500,6,0),
(012,'Thăn bò',500,8,0),
(013,'Gan ngỗng',500,2,0),
(014,'Tôm, mực, cơm',500,9,0),
(015,'Sò điệp, xalad',500,4,0),
(016,'Cá hồi, sốt tiêu đen',500,10,0),
(017,'Sườn cừu',500,12,0),
(018,'Bột, bơ, trứng, sữa, kem',500,17,0),
(019,'Lúa mì, lúa mạch, ngũ cốc',500,19,0),
(020,'Lúa mạch hoặc khoai tây lên men',500,20,0),
(021,'Mía, mật mía, rỉ đường từ mía',500,21,0),
(022,'Nho trắng',500,22,0),
(023,'Lúa mì, khoai tây, lúa non hoặc củ cải',500,23,0),
(024,'Lá cây thùa gai',500,24,0);

-- --------------------------------------------------------
--
-- Cấu trúc bảng cho bảng `DatCoc`
--

CREATE TABLE `DatCoc` (
  `id` int(6) NOT NULL,
  `phichuyencoc` double(10,0) NOT NULL DEFAULT 0,
  `view` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `PhieuDatTiec`
--

CREATE TABLE `PhieuDatTiec` (
  `stt` int(6) NOT NULL,
  `tenkhach` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` int(4) NOT NULL DEFAULT 0,
  `ngaydienra` int(4) NOT NULL DEFAULT 0,
  `giodienra` int(4) NOT NULL DEFAULT 0,
  `idnv` int(4) NOT NULL,
  `idtd` int(4) NOT NULL,
  `iddc` int(4) NOT NULL,
  `phuongthucthanhtoan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `view` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Cấu trúc bảng cho bảng `NhanVien`
--

CREATE TABLE `NhanVien` (
  `id` int(6) NOT NULL,
  `tennhanvien` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `idbp` int(6) NOT NULL,
  `cccd` int(20) NOT NULL,
  `view` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `NhanVien`
--

INSERT INTO `NhanVien` (`id`, `tennhanvien`, `ngaysinh`, `gioitinh`, `idbp` , `cccd`, `view`) VALUES
(1, 'Ngọc Linh', '23/09/1998', 'Nữ',2, 9034871923, 0), 
(2, 'Ngọc Thảo', '14/11/1999', 'Nữ',2, 9034871223, 0), 
(3, 'Nguyễn Huỳnh', '06/08/1988', 'Nam',3, 9034871923, 0), 
(4, 'Minh Triết', '18/09/1998', 'Nam',3, 9033471923, 0),
(5, 'Bảo Khanh', '01/12/2000', 'Nữ',4, 9123871923, 0), 
(6, 'Bảo Nhi', '09/10/2002', 'Nam',4, 9034871923, 0),
(7, 'Trần Trung', '15/09/1998', 'Nam',5, 8764871923, 0), 
(8, 'Bảo Thy', '23/03/1995', 'Nữ',5, 9023871923, 0);


-- --------------------------------------------------------


--
-- Cấu trúc bảng cho bảng `BoPhan`
--

CREATE TABLE `BoPhan` (
  `id` int(6) NOT NULL,
  `tenbophan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `heso` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `view` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `BoPhan`
--

INSERT INTO `BoPhan` (`id`, `tenbophan`, `heso`, `view`) VALUES
(2, 'Khai vị', 0, 1),
(3, 'Chính', 0, 1),
(4, 'Tráng miệng', 0, 1),
(5, 'Rượu', 0, 1);

-- --------------------------------------------------------

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
-- Chỉ mục cho bảng `NguyenLieu`
--
ALTER TABLE `NguyenLieu`
  ADD PRIMARY KEY (`id`),
   ADD KEY `fk_NguyenLieu_MonAn` (`idma`);

--
-- Chỉ mục cho bảng `ThucDon`
--
ALTER TABLE `DatCoc`
   ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `PhieuDatTiec`
--
ALTER TABLE `PhieuDatTiec`
  ADD PRIMARY KEY (`stt`);
     ADD KEY `fk_PhieuDatTiec_NhanVien` (`idnv`);
 

--
-- Chỉ mục cho bảng `NhanVien`
--
ALTER TABLE `NhanVien`
  ADD PRIMARY KEY (`id`),
     ADD KEY `fk_NhanVien_BoPhan` (`idbp`);


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
-- AUTO_INCREMENT cho bảng `NguyenLieu`
--
ALTER TABLE `NguyenLieu`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `DatCoc`
--
ALTER TABLE `DatCoc`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `PhieuDatTiec`
--
ALTER TABLE `PhieuDatTiec`
  MODIFY `stt` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `BoPhan`
--
ALTER TABLE `BoPhan`
  MODIFY `stt` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `NhanVien`
--
ALTER TABLE `NhanVien`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `MonAn`
--
ALTER TABLE `MonAn`
  ADD CONSTRAINT `fk_MonAn_ThucDon` FOREIGN KEY (`idtd`) REFERENCES `ThucDon` (`id`);

--
-- Các ràng buộc cho bảng `NguyenLieu`
--
ALTER TABLE `NguyenLieu`
  ADD CONSTRAINT `fk_NguyenLieu_MonAn` FOREIGN KEY (`idma`) REFERENCES `MonAn` (`id`);

--
-- Các ràng buộc cho bảng `PhieuDatTiec`
--
ALTER TABLE `PhieuDatTiec`
   ADD CONSTRAINT `fk_PhieuDatTiec_NhanVien` FOREIGN KEY (`idnv`) REFERENCES `PhieuDatTiec` (`stt`);
   
--
-- Các ràng buộc cho bảng `NhanVien`
--
ALTER TABLE `NhanVien`
  ADD CONSTRAINT `fk_NhanVien_BoPhan` FOREIGN KEY (`idbp`) REFERENCES `BoPhan` (`id`);


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;




