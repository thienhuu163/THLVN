-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 15, 2023 at 11:58 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bansach`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `Username` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chitiet_giohang`
--

DROP TABLE IF EXISTS `chitiet_giohang`;
CREATE TABLE IF NOT EXISTS `chitiet_giohang` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_giohang` int NOT NULL,
  `id_sanpham` int DEFAULT NULL,
  `soluong` int NOT NULL,
  `gia` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_giohang` (`id_giohang`,`id_sanpham`),
  KEY `id_sanpham` (`id_sanpham`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

DROP TABLE IF EXISTS `giohang`;
CREATE TABLE IF NOT EXISTS `giohang` (
  `id_gh` int NOT NULL AUTO_INCREMENT,
  `tennguoidat` text NOT NULL,
  `sodienthoai` text NOT NULL,
  `diachi` text NOT NULL,
  `ghichu` text NOT NULL,
  `tongtien` text NOT NULL,
  PRIMARY KEY (`id_gh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `giohangtemp`
--

DROP TABLE IF EXISTS `giohangtemp`;
CREATE TABLE IF NOT EXISTS `giohangtemp` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `id_sanpham` int NOT NULL,
  `soluong` int NOT NULL,
  `gia` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `giohangtemp_ibfk_1` (`id_sanpham`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khoanh`
--

DROP TABLE IF EXISTS `khoanh`;
CREATE TABLE IF NOT EXISTS `khoanh` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_sanpham` int NOT NULL,
  `path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_sanpham` (`id_sanpham`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `id_sp` int NOT NULL AUTO_INCREMENT,
  `ten_sp` text NOT NULL,
  `soluong` int NOT NULL,
  `hinh_sp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `tentacgia` text NOT NULL,
  `gia` text NOT NULL,
  `chitiet` text NOT NULL,
  `theloai` int NOT NULL,
  PRIMARY KEY (`id_sp`),
  KEY `theloai` (`theloai`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `ten_sp`, `soluong`, `hinh_sp`, `tentacgia`, `gia`, `chitiet`, `theloai`) VALUES
(1, 'Sách giáo khoa', 2, NULL, 'Nguyễn Khoa Điềm', '20000', 'Sách cho cấp 3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

DROP TABLE IF EXISTS `taikhoan`;
CREATE TABLE IF NOT EXISTS `taikhoan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tendangnhap` text NOT NULL,
  `matkhau` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` text NOT NULL,
  `diachi` text NOT NULL,
  `sodt` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `tendangnhap`, `matkhau`, `email`, `diachi`, `sodt`) VALUES
(1, 'test', '1', 'nguyenvana@gmail.com', 'Quy Nhơn', '0123456789'),
(2, 'test1', '1', '123@gmail.com', 'QuyNhon', '0123');

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

DROP TABLE IF EXISTS `theloai`;
CREATE TABLE IF NOT EXISTS `theloai` (
  `id_theloai` int NOT NULL AUTO_INCREMENT,
  `ten` text NOT NULL,
  PRIMARY KEY (`id_theloai`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`id_theloai`, `ten`) VALUES
(1, 'Sách giáo khoa');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiet_giohang`
--
ALTER TABLE `chitiet_giohang`
  ADD CONSTRAINT `chitiet_giohang_ibfk_1` FOREIGN KEY (`id_giohang`) REFERENCES `giohang` (`id_gh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiet_giohang_ibfk_2` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id_sp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `giohangtemp`
--
ALTER TABLE `giohangtemp`
  ADD CONSTRAINT `giohangtemp_ibfk_1` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id_sp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `khoanh`
--
ALTER TABLE `khoanh`
  ADD CONSTRAINT `khoanh_ibfk_1` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id_sp`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`theloai`) REFERENCES `theloai` (`id_theloai`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
