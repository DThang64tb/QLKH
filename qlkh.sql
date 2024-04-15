-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 15, 2024 lúc 01:58 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlkh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet`
--

CREATE TABLE `chitiet` (
  `MaCT` varchar(20) NOT NULL,
  `MaHD` varchar(20) DEFAULT NULL,
  `MaPM` varchar(20) DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `TongTien` decimal(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hopdong`
--

CREATE TABLE `hopdong` (
  `MaHD` varchar(20) NOT NULL,
  `MaKH` varchar(20) DEFAULT NULL,
  `NgayKy` date DEFAULT NULL,
  `ThoiHan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` varchar(20) NOT NULL,
  `TenKH` varchar(100) DEFAULT NULL,
  `GT` enum('male','female') DEFAULT NULL,
  `DiaChi` varchar(255) DEFAULT NULL,
  `SoDienThoai` varchar(15) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `GT`, `DiaChi`, `SoDienThoai`, `Email`) VALUES
('KH01', 'Thắng', 'male', 'HP', '03456', 'nt987799@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanmem`
--

CREATE TABLE `phanmem` (
  `MaPM` varchar(20) NOT NULL,
  `TenPM` varchar(100) DEFAULT NULL,
  `Gia` decimal(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phanmem`
--

INSERT INTO `phanmem` (`MaPM`, `TenPM`, `Gia`) VALUES
('PM01', 'Quản lý nhân sự', 50000.00),
('PM02', 'Quản lý sinh viên', 75000.00);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiet`
--
ALTER TABLE `chitiet`
  ADD PRIMARY KEY (`MaCT`),
  ADD KEY `FK_HopDong_ChiTiet` (`MaHD`),
  ADD KEY `FK_PhanMem_ChiTiet` (`MaPM`);

--
-- Chỉ mục cho bảng `hopdong`
--
ALTER TABLE `hopdong`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `FK_KhachHang_HopDong` (`MaKH`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Chỉ mục cho bảng `phanmem`
--
ALTER TABLE `phanmem`
  ADD PRIMARY KEY (`MaPM`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiet`
--
ALTER TABLE `chitiet`
  ADD CONSTRAINT `FK_HopDong_ChiTiet` FOREIGN KEY (`MaHD`) REFERENCES `hopdong` (`MaHD`),
  ADD CONSTRAINT `FK_PhanMem_ChiTiet` FOREIGN KEY (`MaPM`) REFERENCES `phanmem` (`MaPM`);

--
-- Các ràng buộc cho bảng `hopdong`
--
ALTER TABLE `hopdong`
  ADD CONSTRAINT `FK_KhachHang_HopDong` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
