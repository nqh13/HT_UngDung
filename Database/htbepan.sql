-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2023 at 05:24 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `htbepan`
--

-- --------------------------------------------------------

--
-- Table structure for table `cthoadon`
--

CREATE TABLE `cthoadon` (
  `MaCTHD` int(10) NOT NULL,
  `MaHoaDon` int(10) NOT NULL,
  `MaPhieuDatMon` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ctphieudatmon`
--

CREATE TABLE `ctphieudatmon` (
  `MaCTPhieuDatMon` int(10) NOT NULL,
  `MaPhieuDatMon` int(10) NOT NULL,
  `MaMonAn` int(10) NOT NULL,
  `SoLuong` int(5) NOT NULL,
  `GhiChu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ctthucdon`
--

CREATE TABLE `ctthucdon` (
  `MaCTThucDon` int(10) NOT NULL,
  `MaThucDon` int(10) NOT NULL,
  `MaMonAn` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `danhgia`
--

CREATE TABLE `danhgia` (
  `MaPhieuDanhGia` int(10) NOT NULL,
  `MaPhieuDatMon` int(10) NOT NULL,
  `MaNV` int(8) NOT NULL,
  `DanhGia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dexuatmon`
--

CREATE TABLE `dexuatmon` (
  `MaPhieuDeXuat` int(10) NOT NULL,
  `MaNV` int(8) NOT NULL,
  `NgayDeXuat` date NOT NULL,
  `GhiChu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dinhluong`
--

CREATE TABLE `dinhluong` (
  `MaDinhLuong` int(10) NOT NULL,
  `MaMonAn` int(10) NOT NULL,
  `MaNVL` int(10) NOT NULL,
  `DinhLuong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHoaDon` int(10) NOT NULL,
  `MaNV` int(8) NOT NULL,
  `NgayThanhToan` date NOT NULL,
  `TongTien` float NOT NULL,
  `NoiDung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loaimonan`
--

CREATE TABLE `loaimonan` (
  `MaLoai` int(5) NOT NULL,
  `TenLoai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `monan`
--

CREATE TABLE `monan` (
  `MaMonAn` int(10) NOT NULL,
  `TenMonAn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ThanhPhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MoTa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HinhAnh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GiaTien` float NOT NULL,
  `ChiPhi` float NOT NULL,
  `TrangThai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaLoai` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nguyenvatlieu`
--

CREATE TABLE `nguyenvatlieu` (
  `MaNVL` int(10) NOT NULL,
  `TenNVL` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DonViTinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GiaThanh` float DEFAULT NULL,
  `GhiChu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` int(8) NOT NULL,
  `TenNV` varchar(255) NOT NULL,
  `SoDienThoai` int(11) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `ChucVu` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `MatKhau` varchar(255) NOT NULL,
  `TrangThaiNV` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `phieudatmon`
--

CREATE TABLE `phieudatmon` (
  `MaPhieuDatMon` int(10) NOT NULL,
  `MaNV` int(8) NOT NULL,
  `MaTrangThai` int(5) NOT NULL,
  `NgayDat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `thucdon`
--

CREATE TABLE `thucdon` (
  `MaThucDon` int(5) NOT NULL,
  `Ngay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trangthaiphieu`
--

CREATE TABLE `trangthaiphieu` (
  `MaTrangThai` int(5) NOT NULL,
  `TenTrangThai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`MaCTHD`),
  ADD KEY `MaHoaDon` (`MaHoaDon`),
  ADD KEY `MaPhieuDatMon` (`MaPhieuDatMon`);

--
-- Indexes for table `ctphieudatmon`
--
ALTER TABLE `ctphieudatmon`
  ADD KEY `MaMonAn` (`MaMonAn`),
  ADD KEY `MaPhieuDatMon` (`MaPhieuDatMon`);

--
-- Indexes for table `ctthucdon`
--
ALTER TABLE `ctthucdon`
  ADD PRIMARY KEY (`MaCTThucDon`),
  ADD KEY `MaThucDon` (`MaThucDon`),
  ADD KEY `MaMonAn` (`MaMonAn`);

--
-- Indexes for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`MaPhieuDanhGia`),
  ADD KEY `MaNV` (`MaNV`),
  ADD KEY `MaPhieuDatMon` (`MaPhieuDatMon`);

--
-- Indexes for table `dexuatmon`
--
ALTER TABLE `dexuatmon`
  ADD PRIMARY KEY (`MaPhieuDeXuat`),
  ADD KEY `MaNV` (`MaNV`);

--
-- Indexes for table `dinhluong`
--
ALTER TABLE `dinhluong`
  ADD PRIMARY KEY (`MaDinhLuong`),
  ADD KEY `MaMonAn` (`MaMonAn`),
  ADD KEY `MaNVL` (`MaNVL`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHoaDon`),
  ADD KEY `MaNV` (`MaNV`);

--
-- Indexes for table `loaimonan`
--
ALTER TABLE `loaimonan`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Indexes for table `monan`
--
ALTER TABLE `monan`
  ADD PRIMARY KEY (`MaMonAn`),
  ADD KEY `MaLoai` (`MaLoai`);

--
-- Indexes for table `nguyenvatlieu`
--
ALTER TABLE `nguyenvatlieu`
  ADD PRIMARY KEY (`MaNVL`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`);

--
-- Indexes for table `phieudatmon`
--
ALTER TABLE `phieudatmon`
  ADD PRIMARY KEY (`MaPhieuDatMon`),
  ADD KEY `MaTrangThai` (`MaTrangThai`);

--
-- Indexes for table `thucdon`
--
ALTER TABLE `thucdon`
  ADD PRIMARY KEY (`MaThucDon`);

--
-- Indexes for table `trangthaiphieu`
--
ALTER TABLE `trangthaiphieu`
  ADD PRIMARY KEY (`MaTrangThai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cthoadon`
--
ALTER TABLE `cthoadon`
  MODIFY `MaCTHD` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ctthucdon`
--
ALTER TABLE `ctthucdon`
  MODIFY `MaCTThucDon` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `MaPhieuDanhGia` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dexuatmon`
--
ALTER TABLE `dexuatmon`
  MODIFY `MaPhieuDeXuat` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dinhluong`
--
ALTER TABLE `dinhluong`
  MODIFY `MaDinhLuong` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHoaDon` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loaimonan`
--
ALTER TABLE `loaimonan`
  MODIFY `MaLoai` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `monan`
--
ALTER TABLE `monan`
  MODIFY `MaMonAn` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nguyenvatlieu`
--
ALTER TABLE `nguyenvatlieu`
  MODIFY `MaNVL` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MaNV` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phieudatmon`
--
ALTER TABLE `phieudatmon`
  MODIFY `MaPhieuDatMon` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thucdon`
--
ALTER TABLE `thucdon`
  MODIFY `MaThucDon` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trangthaiphieu`
--
ALTER TABLE `trangthaiphieu`
  MODIFY `MaTrangThai` int(5) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD CONSTRAINT `cthoadon_ibfk_1` FOREIGN KEY (`MaHoaDon`) REFERENCES `hoadon` (`MaHoaDon`),
  ADD CONSTRAINT `cthoadon_ibfk_2` FOREIGN KEY (`MaPhieuDatMon`) REFERENCES `phieudatmon` (`MaPhieuDatMon`);

--
-- Constraints for table `ctphieudatmon`
--
ALTER TABLE `ctphieudatmon`
  ADD CONSTRAINT `ctphieudatmon_ibfk_1` FOREIGN KEY (`MaMonAn`) REFERENCES `monan` (`MaMonAn`),
  ADD CONSTRAINT `ctphieudatmon_ibfk_2` FOREIGN KEY (`MaPhieuDatMon`) REFERENCES `phieudatmon` (`MaPhieuDatMon`);

--
-- Constraints for table `ctthucdon`
--
ALTER TABLE `ctthucdon`
  ADD CONSTRAINT `ctthucdon_ibfk_1` FOREIGN KEY (`MaThucDon`) REFERENCES `thucdon` (`MaThucDon`),
  ADD CONSTRAINT `ctthucdon_ibfk_2` FOREIGN KEY (`MaMonAn`) REFERENCES `monan` (`MaMonAn`);

--
-- Constraints for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_ibfk_1` FOREIGN KEY (`MaPhieuDatMon`) REFERENCES `phieudatmon` (`MaPhieuDatMon`);

--
-- Constraints for table `dexuatmon`
--
ALTER TABLE `dexuatmon`
  ADD CONSTRAINT `dexuatmon_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`);

--
-- Constraints for table `dinhluong`
--
ALTER TABLE `dinhluong`
  ADD CONSTRAINT `dinhluong_ibfk_1` FOREIGN KEY (`MaMonAn`) REFERENCES `monan` (`MaMonAn`),
  ADD CONSTRAINT `dinhluong_ibfk_2` FOREIGN KEY (`MaNVL`) REFERENCES `nguyenvatlieu` (`MaNVL`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`);

--
-- Constraints for table `loaimonan`
--
ALTER TABLE `loaimonan`
  ADD CONSTRAINT `loaimonan_ibfk_1` FOREIGN KEY (`MaLoai`) REFERENCES `monan` (`MaLoai`);

--
-- Constraints for table `monan`
--
ALTER TABLE `monan`
  ADD CONSTRAINT `monan_ibfk_1` FOREIGN KEY (`MaLoai`) REFERENCES `loaimonan` (`MaLoai`);

--
-- Constraints for table `phieudatmon`
--
ALTER TABLE `phieudatmon`
  ADD CONSTRAINT `phieudatmon_ibfk_1` FOREIGN KEY (`MaTrangThai`) REFERENCES `trangthaiphieu` (`MaTrangThai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
