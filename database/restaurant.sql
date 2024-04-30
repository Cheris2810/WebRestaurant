-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 10:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id_admin` int(10) UNSIGNED NOT NULL,
  `name_admin` varchar(255) NOT NULL,
  `email_admin` varchar(255) NOT NULL,
  `password_admin` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id_admin`, `name_admin`, `email_admin`, `password_admin`, `created_at`, `updated_at`) VALUES
(1, 'AdminCheris', 'admincheris@gmail.com', 'a93b609250e8fa0267101f870ae7df7a', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bophan`
--

CREATE TABLE `bophan` (
  `id` int(6) NOT NULL,
  `tenbophan` varchar(50) NOT NULL,
  `heso` float DEFAULT NULL,
  `view` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bophan`
--

INSERT INTO `bophan` (`id`, `tenbophan`, `heso`, `view`) VALUES
(2, 'Khai vị', 1.8, 0),
(3, 'Chính', 1.8, 0),
(4, 'Tráng miệng', 1.8, 0),
(5, 'Rượu', 1.8, 0),
(6, 'Kem ly', 1.5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `datcoc`
--

CREATE TABLE `datcoc` (
  `id` int(6) NOT NULL,
  `phichuyencoc` double(10,0) NOT NULL DEFAULT 0,
  `view` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dathang`
--

CREATE TABLE `dathang` (
  `id` int(6) NOT NULL,
  `tenmonan` varchar(50) NOT NULL,
  `gia` varchar(50) NOT NULL,
  `soluong` varchar(50) NOT NULL,
  `tongtien` varchar(255) NOT NULL,
  `view` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dathang`
--

INSERT INTO `dathang` (`id`, `tenmonan`, `gia`, `soluong`, `tongtien`, `view`) VALUES
(1, 'Coq au vin Gà sốt vang', '400000', '1', '400000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_04_25_092657_create_userlogin_table', 1),
(5, '2024_04_25_100202_create_adminlogin_table', 1),
(6, '2024_04_27_142433_create_table_danhmucsp', 2);

-- --------------------------------------------------------

--
-- Table structure for table `monan`
--

CREATE TABLE `monan` (
  `id` int(6) NOT NULL,
  `tenma` varchar(50) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  `gia` double(10,0) NOT NULL DEFAULT 0,
  `idtd` int(4) NOT NULL,
  `view` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `monan`
--

INSERT INTO `monan` (`id`, `tenma`, `img`, `gia`, `idtd`, `view`) VALUES
(1, 'Bruschetta Bánh Mì Nướng', NULL, 400000, 2, 0),
(2, 'Foie gras Gan Ngỗng Béo', NULL, 400000, 2, 0),
(3, 'Croque Monsieur Bánh mì nướng', NULL, 400000, 2, 0),
(4, 'Salad cồi sò điệp', NULL, 400000, 2, 0),
(5, 'Huître Hàu sống', NULL, 400000, 2, 0),
(6, 'Coq au vin Gà sốt vang', NULL, 400000, 2, 0),
(7, 'Sò điệp sốt kem chanh', NULL, 400000, 2, 1),
(8, 'Thăn ngoại bò Úc nướng', NULL, 400000, 2, 1),
(9, 'Cơm chiên hải sản', NULL, 400000, 2, 1),
(10, 'Cá hồi sốt tiêu đen', NULL, 400000, 2, 1),
(11, 'Salad', NULL, 400000, 2, 1),
(12, 'Sườn cừu nướng', 'monchinh6.png', 400000, 3, 1),
(13, 'Mont-blanc', NULL, 400000, 2, 1),
(14, 'Bánh Madeleines', NULL, 400000, 2, 1),
(15, 'Pain au chocolat', NULL, 400000, 2, 1),
(16, 'Bánh crepes', 'trangmieng2.png', 100000, 4, 1),
(17, 'Petit Fours', 'trangmieng4.png', 150000, 4, 1),
(18, 'Bánh crepes dâu tây', 'trangmieng6.png', 200000, 4, 1),
(19, 'Bourbon whiskey', 'ruou1.png', 1000000, 5, 1),
(20, 'Rượu Hendrick’s Gin', 'ruou3.png', 800000, 5, 1),
(21, 'Rhum Bacardi Vàng', 'ruou5.png', 350000, 5, 1),
(22, 'Rượu Cognac', 'ruou2.png', 1000000, 5, 1),
(23, 'Rượu Vodka Absolut Raspberri (Dâu)', 'ruou4.png', 400000, 5, 1),
(24, 'Rượu Tequila Jose Cuervo', 'ruou6.png', 400000, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nguyenlieu`
--

CREATE TABLE `nguyenlieu` (
  `id` int(6) NOT NULL,
  `tennguyenlieu` varchar(100) NOT NULL,
  `soluong` int(5) NOT NULL,
  `idma` int(4) NOT NULL,
  `view` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguyenlieu`
--

INSERT INTO `nguyenlieu` (`id`, `tennguyenlieu`, `soluong`, `idma`, `view`) VALUES
(1, 'Dâu tây, bột', 500, 18, 0),
(2, 'Hàu chanh', 500, 5, 0),
(3, 'Xalad, cà chua, sốt chua ngọt', 500, 11, 0),
(4, 'Sò điệp, chanh, kem', 500, 7, 0),
(5, 'Bánh mì, cà chua', 500, 1, 0),
(6, 'Bánh mì, bơ', 500, 3, 0),
(7, 'Bột, bơ, sữa, kem', 500, 13, 0),
(8, 'Bột, trứng, sữa, kem', 500, 14, 0),
(9, 'Bột, bơ, trứng, sữa', 500, 15, 0),
(10, 'Bột, socola', 500, 16, 0),
(11, 'Thịt gà, sốt vang', 500, 6, 0),
(12, 'Thăn bò', 500, 8, 0),
(13, 'Gan ngỗng', 500, 2, 0),
(14, 'Tôm, mực, cơm', 500, 9, 0),
(15, 'Sò điệp, xalad', 500, 4, 0),
(16, 'Cá hồi, sốt tiêu đen', 500, 10, 0),
(17, 'Sườn cừu', 500, 12, 0),
(18, 'Bột, bơ, trứng, sữa, kem', 500, 17, 0),
(19, 'Lúa mì, lúa mạch, ngũ cốc', 500, 19, 0),
(20, 'Lúa mạch hoặc khoai tây lên men', 500, 20, 0),
(21, 'Mía, mật mía, rỉ đường từ mía', 500, 21, 0),
(22, 'Nho trắng', 500, 22, 0),
(23, 'Lúa mì, khoai tây, lúa non hoặc củ cải', 500, 23, 0),
(24, 'Lá cây thùa gai', 500, 24, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id` int(6) NOT NULL,
  `tennhanvien` varchar(50) NOT NULL,
  `ngaysinh` varchar(50) NOT NULL,
  `gioitinh` varchar(50) NOT NULL,
  `idbp` int(6) NOT NULL,
  `cccd` bigint(100) NOT NULL,
  `view` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `tennhanvien`, `ngaysinh`, `gioitinh`, `idbp`, `cccd`, `view`) VALUES
(1, 'Ngọc Linh', '23/09/1998', 'Nữ', 2, 2147483647, 0),
(2, 'Ngọc Thảo', '14/11/1999', 'Nữ', 2, 2147483647, 0),
(3, 'Nguyễn Huỳnh', '06/08/1988', 'Nam', 3, 2147483647, 0),
(4, 'Minh Triết', '18/09/1998', 'Nam', 3, 2147483647, 0),
(5, 'Bảo Khanh', '01/12/2000', 'Nữ', 4, 2147483647, 0),
(6, 'Bảo Nhi', '09/10/2002', 'Nam', 4, 2147483647, 0),
(7, 'Trần Trung', '15/09/1998', 'Nam', 5, 2147483647, 0),
(8, 'Bảo Thy', '23/03/1995', 'Nữ', 5, 2147483647, 0),
(9, 'Lâm Như', '19/10/2002', 'Nữ', 3, 3567829012, 1),
(12, 'Mén', '19/09/1999', 'Nữ', 3, 2356281654, 1);

-- --------------------------------------------------------

--
-- Table structure for table `phieudattiec`
--

CREATE TABLE `phieudattiec` (
  `stt` int(6) NOT NULL,
  `tenkhach` varchar(50) NOT NULL,
  `sodienthoai` int(4) NOT NULL DEFAULT 0,
  `ngaydienra` varchar(50) NOT NULL DEFAULT '0',
  `giodienra` varchar(50) NOT NULL DEFAULT '0',
  `idnv` int(4) NOT NULL,
  `idtd` int(4) NOT NULL,
  `iddc` int(4) NOT NULL,
  `phuongthucthanhtoan` varchar(50) NOT NULL,
  `view` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phieudattiec`
--

INSERT INTO `phieudattiec` (`stt`, `tenkhach`, `sodienthoai`, `ngaydienra`, `giodienra`, `idnv`, `idtd`, `iddc`, `phuongthucthanhtoan`, `view`) VALUES
(3, 'Hồng Cẩm', 912365748, '30/04/2024', '13 giờ', 2, 2, 0, 'Tiền mặt', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('BpzHrPBYrkHxgCc9niEybOCsRbaa7IgDFG99pR18', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicVRjN2NVM3JBWlh6TmFwbmtHMDFrMVhrNWJ0S0NjU0lKRmtsQmxrcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9sb2NhbGhvc3QvUmVzdGF1cmFudC9yZWdpc3RlclVzZXIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjc6Im1lc3NhZ2UiO047fQ==', 1714462206),
('eejeGE0kUuyIMceID0LvDagY4uTSFQIRqvQl3haC', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicGFTSHNoVkpwZmYzdnpzSkh4blhQbFczc1p6QjJibnlDZHN1aUI5TiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9sb2NhbGhvc3QvUmVzdGF1cmFudC9hbGxjcmVhdGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1714463554),
('zMDFMW0JxoOwffKKOkc2rwKX5ACPRDJKg219Pt6e', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36 Edg/124.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieVdqbHJOaXg4UzNENlU0cEx2SVhnNWNrdGlsU29ab01ZN2Vua2JQdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3QvUmVzdGF1cmFudCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1714457582);

-- --------------------------------------------------------

--
-- Table structure for table `thucdon`
--

CREATE TABLE `thucdon` (
  `id` int(4) NOT NULL,
  `tentd` varchar(50) NOT NULL,
  `mota` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hienthi` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thucdon`
--

INSERT INTO `thucdon` (`id`, `tentd`, `mota`, `hienthi`) VALUES
(2, 'Món Khai Vị', 'Những món ăn nhẹ trước khi vào món chính.', 0),
(3, 'Món Chính', 'Các món ăn với nhiều chất dinh dưỡng, màu sắc đa dạng.', 0),
(4, 'Món Tráng Miệng', 'Các món bánh ngọt, kem ăn tráng miệng.', 0),
(5, 'Đồ Uống', 'Các loại rượu Tây đi kèm với mỗi bữa tiệc.', 0),
(6, 'Nước Ngọt', 'Các loại nước ngọt không có nồng độ cồn.', 1),
(7, 'Nước khoáng', 'Các loại nước khoáng.', 1),
(8, 'Kẹo', 'Kẹo nhiều màu', 1),
(9, 'Sò Huyết', 'Sò huyết tươi sống.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `name_user` varchar(255) DEFAULT NULL,
  `email_user` varchar(255) DEFAULT NULL,
  `password_user` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id_user`, `name_user`, `email_user`, `password_user`) VALUES
(1, 'mén', 'mencute@gmail.com', 'men123'),
(2, 'như', 'nhu@gmail.com', 'nhu123'),
(3, 'như', 'nhu@gmail.com', 'nhu123'),
(4, 'như', 'nhu@gmail.com', 'nhu123'),
(5, 'Nhi', 'nhi@gmail.com', 'nhi123'),
(6, 'Lâm Như', 'lamnhu@gmail.com', '123'),
(7, 'Cẩm', 'cam@gmail.com', 'cam123'),
(8, 'Cẩm', 'cam@gmail.com', 'cam123'),
(9, 'Vũ', 'vu@gmail.com', 'vu123'),
(10, 'lucas', 'lucas@gmail.com', 'lucas123'),
(11, 'mit', 'mit@gmail.com', 'mit123'),
(12, 'Bon', 'bon@gmail.com', 'bon123'),
(13, 'mệt', 'metmoi@gmail.com', 'met123'),
(14, 'Hồng Cẩm', 'cam@gmail.com', 'cam123'),
(23, 'Nháp', 'nhap@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bophan`
--
ALTER TABLE `bophan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datcoc`
--
ALTER TABLE `datcoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dathang`
--
ALTER TABLE `dathang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monan`
--
ALTER TABLE `monan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idtd` (`idtd`);

--
-- Indexes for table `nguyenlieu`
--
ALTER TABLE `nguyenlieu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idma` (`idma`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idbp` (`idbp`);

--
-- Indexes for table `phieudattiec`
--
ALTER TABLE `phieudattiec`
  ADD PRIMARY KEY (`stt`),
  ADD KEY `iddc` (`iddc`),
  ADD KEY `idtd` (`idtd`),
  ADD KEY `idnv` (`idnv`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `thucdon`
--
ALTER TABLE `thucdon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id_admin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bophan`
--
ALTER TABLE `bophan`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dathang`
--
ALTER TABLE `dathang`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `monan`
--
ALTER TABLE `monan`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `nguyenlieu`
--
ALTER TABLE `nguyenlieu`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `phieudattiec`
--
ALTER TABLE `phieudattiec`
  MODIFY `stt` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `thucdon`
--
ALTER TABLE `thucdon`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `monan`
--
ALTER TABLE `monan`
  ADD CONSTRAINT `monan_ibfk_1` FOREIGN KEY (`idtd`) REFERENCES `thucdon` (`id`);

--
-- Constraints for table `nguyenlieu`
--
ALTER TABLE `nguyenlieu`
  ADD CONSTRAINT `nguyenlieu_ibfk_1` FOREIGN KEY (`idma`) REFERENCES `monan` (`id`);

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`idbp`) REFERENCES `bophan` (`id`);

--
-- Constraints for table `phieudattiec`
--
ALTER TABLE `phieudattiec`
  ADD CONSTRAINT `phieudattiec_ibfk_3` FOREIGN KEY (`idtd`) REFERENCES `thucdon` (`id`),
  ADD CONSTRAINT `phieudattiec_ibfk_4` FOREIGN KEY (`idnv`) REFERENCES `nhanvien` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
