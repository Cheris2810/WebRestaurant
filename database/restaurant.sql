-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2024 at 05:42 PM
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
  `heso` varchar(50) NOT NULL,
  `view` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bophan`
--

INSERT INTO `bophan` (`id`, `tenbophan`, `heso`, `view`) VALUES
(2, 'Khai vị', '0', 1),
(3, 'Chính', '0', 1),
(4, 'Tráng miệng', '0', 1),
(5, 'Rượu', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmucsp`
--

CREATE TABLE `danhmucsp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tendanhmuc` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danhmucsp`
--

INSERT INTO `danhmucsp` (`id`, `tendanhmuc`, `mota`, `tinhtrang`, `created_at`, `updated_at`) VALUES
(1, 'Kem', 'Kem nhiều màu', 1, NULL, NULL),
(2, 'Kem', 'Kem nhiều màu', 1, NULL, NULL),
(3, 'Kem', 'Kem nhiều màu', 1, NULL, NULL),
(4, 'Sò điệp', 'Hải sản tươi sống', 1, NULL, NULL),
(5, 'Thịt vịt', 'Vịt nguyên con', 1, NULL, NULL),
(6, 'Món Tráng Miệng', 'Bao gồm các loại món ngọt dùng sau khi ăn', 0, NULL, NULL);

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
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Bruschetta bánh mì nướng', 'khaivi1.png', 100000, 2, 0),
(2, 'Foie gras Gan ngỗng béo', 'khaivi3.png', 20000, 2, 0),
(3, 'Croque Monsieur Bánh mì nướng', 'khaivi5.png', 150000, 2, 0),
(4, 'Salad cồi sò điệp', 'khaivi2.png', 628000, 2, 0),
(5, 'Huître Hàu sống', 'khaivi4.png', 300000, 2, 0),
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
  `cccd` int(20) NOT NULL,
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
(8, 'Bảo Thy', '23/03/1995', 'Nữ', 5, 2147483647, 0);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phieudattiec`
--

CREATE TABLE `phieudattiec` (
  `stt` int(6) NOT NULL,
  `tenkhach` varchar(50) NOT NULL,
  `sodienthoai` int(4) NOT NULL DEFAULT 0,
  `ngaydienra` int(4) NOT NULL DEFAULT 0,
  `giodienra` int(4) NOT NULL DEFAULT 0,
  `idnv` int(4) NOT NULL,
  `idtd` int(4) NOT NULL,
  `iddc` int(4) NOT NULL,
  `phuongthucthanhtoan` varchar(50) NOT NULL,
  `view` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
('65Pt3nseV1FWMhgcU8ANGfWTJECZuWNuBI5vlO9o', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaDhUWHdBWjd4b0x3M3lHUDc3VEJNaWxKQ0d2aWdFRG9Gbjhnd0l5TCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly9sb2NhbGhvc3QvUmVzdGF1cmFudC9hbGxJbmdyZWRpZW50Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo3OiJtZXNzYWdlIjtOO30=', 1714318887),
('St7t9msS0hPiecVLcIoEdhzSeAEvRHRgbcNoGxNA', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUDlPcU5sbWpLQ1FMQVJZa3hDeUdzczZySkMxR0dWTzFDQVVJM0ZqZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly9sb2NhbGhvc3QvUmVzdGF1cmFudC9BZGRwcm9kdWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo3OiJtZXNzYWdlIjtOO30=', 1714306898),
('TqkdkfWiA8UELl2ZKxGT4q0BewXNqCfotePBTq0K', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36 Edg/124.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY0k1dTFXdkFXZUZyQko5bkZoUFpqMGVoMjJqTE1ORE1hTU1nZTg0ZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9sb2NhbGhvc3QvUmVzdGF1cmFudC9tZW51LTEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1714313442),
('xPKlozWWfHl84huLLQIEIxZezz4xmQrBrxMiuFNU', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZ2tmUDE4WGNDZG9qN2ZWaklNdlVJMml3T2dQTUhmWjNoa1JzMEhLZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly9sb2NhbGhvc3QvUmVzdGF1cmFudC9BZGRwcm9kdWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo3OiJtZXNzYWdlIjtOO30=', 1714313101);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(4) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `address`, `email`, `user`, `pass`, `role`) VALUES
(1, NULL, NULL, NULL, 'admin', '123', 1),
(2, NULL, NULL, NULL, 'hotb', '456', 0);

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
(2, 'Món khai vị', 'Những món ăn nhẹ trước khi vào món chính.', 1),
(3, 'Món chính', 'Các món ăn với nhiều chất dinh dưỡng, màu sắc đa dạng.', 1),
(4, 'Món tráng miệng', 'Các món bánh ngọt, kem ăn tráng miệng.', 1),
(5, 'Đồ uống', 'Các loại rượu Tây đi kèm với mỗi bữa tiệc.', 1),
(6, 'Nước ngọt', 'Các loại nước ngọt không có nồng độ cồn.', 1),
(7, 'Nước khoáng', 'Các loại nước khoáng.', 1),
(8, 'Kẹo', 'Kẹo nhiều màu', 1);

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
(13, 'mệt', 'metmoi@gmail.com', 'met123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `danhmucsp`
--
ALTER TABLE `danhmucsp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datcoc`
--
ALTER TABLE `datcoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `phieudattiec`
--
ALTER TABLE `phieudattiec`
  ADD PRIMARY KEY (`stt`),
  ADD KEY `iddc` (`iddc`),
  ADD KEY `idnv` (`idnv`),
  ADD KEY `idtd` (`idtd`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id_admin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `danhmucsp`
--
ALTER TABLE `danhmucsp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `monan`
--
ALTER TABLE `monan`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `nguyenlieu`
--
ALTER TABLE `nguyenlieu`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `phieudattiec`
--
ALTER TABLE `phieudattiec`
  MODIFY `stt` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `thucdon`
--
ALTER TABLE `thucdon`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `phieudattiec_ibfk_1` FOREIGN KEY (`iddc`) REFERENCES `datcoc` (`id`),
  ADD CONSTRAINT `phieudattiec_ibfk_2` FOREIGN KEY (`idnv`) REFERENCES `nhanvien` (`id`),
  ADD CONSTRAINT `phieudattiec_ibfk_3` FOREIGN KEY (`idtd`) REFERENCES `thucdon` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
