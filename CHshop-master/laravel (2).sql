-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 04, 2017 at 03:06 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdh`
--

CREATE TABLE `chitietdh` (
  `MaDH` int(20) NOT NULL,
  `MaSP` int(20) NOT NULL,
  `GiaSP` text,
  `Soluong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitietdh`
--

INSERT INTO `chitietdh` (`MaDH`, `MaSP`, `GiaSP`, `Soluong`) VALUES
(17, 298, '6000000', 1),
(18, 296, '4000000', 1);

--
-- Triggers `chitietdh`
--
DELIMITER $$
CREATE TRIGGER `banhang` AFTER INSERT ON `chitietdh` FOR EACH ROW UPDATE sanpham
 SET Sluongcon = Sluongcon- new.Soluong
 where MaSP= new.MaSP
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `huyhang` AFTER UPDATE ON `chitietdh` FOR EACH ROW UPDATE sanpham
 SET Sluongcon = Sluongcon + old.Soluong
 where MaSP = old.MaSP
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trahang` BEFORE DELETE ON `chitietdh` FOR EACH ROW UPDATE sanpham
 SET Sluongcon = Sluongcon + old.Soluong
 where MaSP = old.MaSP
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ctphieunhap`
--

CREATE TABLE `ctphieunhap` (
  `MaSP` int(20) NOT NULL,
  `IdPN` varchar(20) NOT NULL,
  `dongia` decimal(10,0) DEFAULT NULL,
  `Soluong` int(11) DEFAULT NULL,
  `ThanhTien` decimal(50,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ctphieunhap`
--

INSERT INTO `ctphieunhap` (`MaSP`, `IdPN`, `dongia`, `Soluong`, `ThanhTien`) VALUES
(282, '7', '222', 22, '4884'),
(282, '9', '22', 1, '22'),
(285, '7', '10', 1, '10'),
(285, '8', '444', 44, '19536'),
(285, '9', '11', 11, '121'),
(287, '8', '12', 12, '144'),
(289, '8', '12', 12, '144');

--
-- Triggers `ctphieunhap`
--
DELIMITER $$
CREATE TRIGGER `tt1` AFTER INSERT ON `ctphieunhap` FOR EACH ROW UPDATE phieunhap
 SET tongtien = tongtien +new.ThanhTien
 where IdPN= new.IdPN
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tt2` AFTER UPDATE ON `ctphieunhap` FOR EACH ROW UPDATE phieunhap
 SET tongtien = tongtien +new.ThanhTien
 where IdPN= new.IdPN
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `MaDH` int(20) NOT NULL,
  `MaND` int(11) DEFAULT NULL,
  `TenKH` varchar(100) DEFAULT NULL,
  `NhanVienGH` varchar(100) DEFAULT NULL,
  `NhanVienTT` varchar(100) DEFAULT NULL,
  `DiaChiGH` varchar(100) NOT NULL,
  `Tongtien` text,
  `TinhTrang` int(1) NOT NULL,
  `NgGH` text,
  `NgTT` text,
  `NgDat` text,
  `sdt` varchar(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`MaDH`, `MaND`, `TenKH`, `NhanVienGH`, `NhanVienTT`, `DiaChiGH`, `Tongtien`, `TinhTrang`, `NgGH`, `NgTT`, `NgDat`, `sdt`, `email`) VALUES
(17, 12, 'Phạm Đức Pho', NULL, NULL, '93 Núi thành', '7.260.000', 4, NULL, '07/06/2017', '3/6/2017', '22131231231', 'admin@gmail.com'),
(18, 12, 'Phạm Đức Pho', NULL, NULL, '93 Núi thành', '4.840.000', 4, NULL, '07/04/2017', '3/6/2017', '22131231231', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `id_lienhe` int(11) NOT NULL,
  `hoten` text COLLATE utf8_unicode_ci,
  `cty` text COLLATE utf8_unicode_ci,
  `email` text COLLATE utf8_unicode_ci,
  `dienthoai` int(11) DEFAULT NULL,
  `fax` text COLLATE utf8_unicode_ci,
  `diachi` text COLLATE utf8_unicode_ci,
  `noidung` text COLLATE utf8_unicode_ci,
  `ngaylienhe` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`id_lienhe`, `hoten`, `cty`, `email`, `dienthoai`, `fax`, `diachi`, `noidung`, `ngaylienhe`) VALUES
(1, 'Phạm Đức PHo', 'Green Global', 'Phamducpho14t1@gmail.com', 965600364, 'không có', '41 Trần Phú, Hải Châu 1, Đà Nẵng', 'vừa mới được đổi trả máy tại siêu thị tgdd 334 cộng hòa, rất hài lòng về dịch vụ . Quản lý nhiệt tình, hỗ trợ tận tình. Cái lỗi gãy chân sim của máy cũng khó biết được là do người dùng hay nhân viên nhưng đã linh động nhập trả, và mình đã mua luôn 1 con lumia khác. Nói chung là Hài lòng.\nNếu bạn QTV nào đọc comment này thì có thể gửi đến cho bác trưởng kỹ thuật khi nhân viên tư vấn cho khách, nếu khách mang nanosim tới mà cái máy là khe micro hay khe sim thường thì cứ để tự gắn đúng chân, máy sẽ nhận sim, chứ đừng lấy cái khe sim khác rồi nhét sim nano vào, nó gãy chân sim lúc nào ko hay. Tới đó khách lại complain như mình thì khổ. Máy mua chưa được nửa ngày, sim chập chờn xong tới tối là ngúm luôn.', '21/04/2017');

-- --------------------------------------------------------

--
-- Table structure for table `loaihang`
--

CREATE TABLE `loaihang` (
  `MaLoai` int(20) NOT NULL,
  `TenLoai` varchar(100) DEFAULT NULL,
  `mota` varchar(255) DEFAULT NULL,
  `trangthai` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaihang`
--

INSERT INTO `loaihang` (`MaLoai`, `TenLoai`, `mota`, `trangthai`) VALUES
(1, 'DELL', 'Danh mục sản phẩm dell', '1'),
(2, 'ACER', 'Danh mục sản phẩm ACER', '1'),
(3, 'ASUS', 'Danh mục sản phẩm ASUS', '1'),
(4, 'HP', 'Danh mục sản phẩm HP', '1');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `MaND` int(11) NOT NULL,
  `HoTen` varchar(100) NOT NULL,
  `Gioitinh` varchar(20) DEFAULT NULL,
  `SDT` varchar(11) NOT NULL,
  `DiaChi` varchar(255) DEFAULT NULL,
  `CMND` varchar(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `TaiKhoan` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `level` int(11) NOT NULL,
  `trangthai` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`MaND`, `HoTen`, `Gioitinh`, `SDT`, `DiaChi`, `CMND`, `email`, `TaiKhoan`, `password`, `level`, `trangthai`, `remember_token`, `updated_at`, `created_at`) VALUES
(12, 'Phạm Đức Pho', 'Nam', '22131231231', '93 Núi thành', '706117016', 'admin@gmail.com', 'admin', '$2y$10$GCMWPign71BGHcu2ULzZJeyEm5Ub6ZWgkx5e7ZVRisq8b0I/f3kV2', 1, '1', 'vcOGvcL8OcyJ8tXhwdDhwxAl1qNYkuQIRq0DohBUq7Fzi38JWHmunQgsCikU', '2017-04-21 15:17:122017-04-21 15:17:12', '2014-01-01 00:00:01'),
(17, 'Bích Phượng', 'Nam', '0965600364', '92 Lê hoàng', NULL, 'pho@gmail.com', 'nguoidung', '$2y$10$w7Vmf8rO6Uanww9EXkCNbuuquVAPNmzZ846duPPenCPc9fHj1dDwi', 2, '1', NULL, '2017-04-22 18:26:57', '2014-04-01 01:03:12'),
(35, 'Tạ Đức Toàn', 'Nam', '22131231231', '93 Núi thành', '706117016', 'admin1@gmail.com', 'nhanvien', '$2y$10$GCMWPign71BGHcu2ULzZJeyEm5Ub6ZWgkx5e7ZVRisq8b0I/f3kV2', 1, '1', 'dmakXSiZZqC5mLl4eAVBghh3Uq44UXUdCXuTHv1USZiUQiOjw25D7swW1FKv', '2017-04-22 18:26:57', '1'),
(37, 'Dương Vĩnh Thiền', 'Nam', '22131231231', '93 Núi thành', '706117016', 'giaohang@gmail.com', 'nhanviengiaohang', '$2y$10$GCMWPign71BGHcu2ULzZJeyEm5Ub6ZWgkx5e7ZVRisq8b0I/f3kV2', 1, '1', 'R4KDIdno1CFXTtaopRzggQvRxNjcxJ4h1DXW3KpWaHXk2yvgGEIdnm1aGYKD', '2017-04-22 18:26:57', '1'),
(38, 'Phạm Đức Pho', 'Nam', '22131231231', '93 Núi thành', '706117016', 'admin@gmail.com', 'nguoidung1', '$2y$10$GCMWPign71BGHcu2ULzZJeyEm5Ub6ZWgkx5e7ZVRisq8b0I/f3kV2', 2, '1', 'NbsSkowdNlqbfZwnCWAJc5MiBbD7vvDJldydz0ydqZdJH8r0YMSEoHTGNP9l', '2017-05-05 08:04:38', '2014-01-01 00:00:01');

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `ManhaCC` int(11) NOT NULL,
  `TennhaCC` varchar(100) NOT NULL,
  `SDT` varchar(11) NOT NULL,
  `Diachi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhacungcap`
--

INSERT INTO `nhacungcap` (`ManhaCC`, `TennhaCC`, `SDT`, `Diachi`) VALUES
(1, 'Cty Ánh Dương', '0965600364', '65 Hài Khánh'),
(2, 'FPT Shop', '09650033', '377 Nguyên Tri Phuongư');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phieunhap`
--

CREATE TABLE `phieunhap` (
  `IdPN` int(20) NOT NULL,
  `NgNhap` text NOT NULL,
  `tongtien` decimal(10,0) DEFAULT NULL,
  `ManhaCC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phieunhap`
--

INSERT INTO `phieunhap` (`IdPN`, `NgNhap`, `tongtien`, `ManhaCC`) VALUES
(8, '5/5/2017(10:45:33)', NULL, 2),
(9, '5/5/2017(10:46:20)', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(20) NOT NULL,
  `TenSP` varchar(100) DEFAULT NULL,
  `DonGia` decimal(10,0) NOT NULL,
  `Sluongcon` int(11) NOT NULL,
  `ManhaCC` int(11) DEFAULT NULL,
  `MaLoai` int(20) DEFAULT NULL,
  `Ram` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `vga` text NOT NULL,
  `hedieuhanh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `giakm` int(255) NOT NULL,
  `cpu` varchar(255) NOT NULL,
  `baohanh` varchar(255) NOT NULL,
  `chuthich` text,
  `mota` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `Sluongban` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `DonGia`, `Sluongcon`, `ManhaCC`, `MaLoai`, `Ram`, `img`, `vga`, `hedieuhanh`, `giakm`, `cpu`, `baohanh`, `chuthich`, `mota`, `Sluongban`) VALUES
(282, 'Dell 3543 core i5 black 20151', '1000000', 43, 1, 1, '4G', 'delllllllllllll.jpg', 'VGA 920M', 'Win 7', 75000, '4 nhân', '6 tháng', 'Graphics mang đến tốc độ xử lý ổn định, mượt mà để giúp bạn có thể chạy đa nhiệm các ứng dụng cơ bản ở văn phòng', '<p>Laptop Asus UX410UQ-GV066 sử dụng chip Intel Core i5 7200U c&oacute; xung nhịp tối đa l&ecirc;n đến 3.1GHz, card đồ họa NVIDIA GeForce 940MX c&oacute; dung lượng l&ecirc;n đến 2GB sẽ mang đến hiệu năng mạnh mẽ, gi&uacute;p bạn xử l&yacute; nhanh những y&ecirc;u cầu truyền tải, truy cập dữ liệu của bạn khi l&agrave;m việc v&agrave; giải tr&iacute;.</p>\n\n<p>&nbsp;</p>\n\n<p><img alt="Laptop Asus UX410UQ-GV066" src="https://tikicdn.com/media/catalog/product/5/3/5307299822746-1.u3060.d20170208.t140015.678811.jpg" style="display:block; height:500px; margin-left:auto; margin-right:auto; width:750px" title="Laptop Asus UX410UQ-GV066" /></p>\n\n<h3>RAM DDR4 4GB, ổ cứng HDD 500GB</h3>\n\n<p><a href="http://tiki.vn/laptop/c8095/asus">Laptop Asus</a> UX410UQ-GV066 được trang bị với bộ nhớ RAM chuẩn DDR4 c&oacute; dung lượng 4GB, ổ cứng l&ecirc;n đến HDD 500GB c&oacute; tốc độ v&ograve;ng quay 5400rpm, gi&uacute;p bạn lưu trữ được nhiều dữ liệu, đ&aacute;p ứng cho nhu cầu của c&ocirc;ng việc v&agrave; giải tr&iacute;. Ngo&agrave;i ra bộ nhớ dễ d&agrave;ng n&acirc;ng cấp sẽ gi&uacute;p bạn thuận tiện với việc tạo được lưu lượng bộ cho thiết bị của m&igrave;nh.</p>\n\n<p><img alt="Laptop Asus UX410UQ-GV066" src="https://tikicdn.com/media/catalog/product/5/3/5307299822746-2.u3060.d20170208.t140015.722400.jpg" style="display:block; height:500px; margin-left:auto; margin-right:auto; width:750px" title="Laptop Asus UX410UQ-GV066" /></p>\n\n<h3>Nhiều kết nối tiện dụng</h3>\n\n<p>M&aacute;y hỗ trợ Wifi v&agrave; kết nối kh&ocirc;ng d&acirc;y Bluetooth 4.1 v&agrave; nhiều cổng kết nối như USB 2.0, <a href="http://tiki.vn/usb-luu-tru/c1828">USB 3.0</a>, HDMI... c&ugrave;ng t&iacute;nh năng mở rộng như USB 3.1 Type C thuận tiện cho việc kết nối c&aacute;c thiết bị điện tử.</p>\n\n<p><img alt="Laptop Asus UX410UQ-GV066" src="https://tikicdn.com/media/catalog/product/5/3/5307299822746-3.u3060.d20170208.t140015.759950.jpg" style="display:block; height:500px; margin-left:auto; margin-right:auto; width:750px" title="Laptop Asus UX410UQ-GV066" /></p>\n\n<h3><a href="http://tiki.vn/ban-phim-may-tinh/c1830">B&agrave;n ph&iacute;m</a> rộng, <a href="https://tiki.vn/ban-di-chuot/c1831">b&agrave;n di chuột</a> nhạy</h3>\n\n<p><a href="https://tiki.vn/laptop/c8095">Laptop</a> Asus UX410UQ-GV066 với b&agrave;n ph&iacute;m chắc chắn, hỗ trợ <a href="http://tiki.vn/den-ban/c2016">đ&egrave;n b&agrave;n</a> ph&iacute;m thuận tiện khi sử dụng thiết bị ở v&ugrave;ng thiếu &aacute;nh s&aacute;ng... Ph&iacute;m bấm c&oacute; độ nảy cao, khoảng c&aacute;ch ph&iacute;m vừa vặn tạo được cảm gi&aacute;c thoải m&aacute;i khi sử dụng.</p>\n\n<p><img alt="Laptop Asus UX410UQ-GV066" src="https://tikicdn.com/media/catalog/product/5/3/5307299822746-4.u3060.d20170208.t140015.798963.jpg" style="display:block; height:500px; margin-left:auto; margin-right:auto; width:750px" title="Laptop Asus UX410UQ-GV066" /></p>\n\n<p>B&agrave;n di chuột cảm ứng đa điểm, gi&uacute;p c&aacute;c thao t&aacute;c được nhanh ch&oacute;ng v&agrave; ch&iacute;nh x&aacute;c hơn.</p>\n\n<h3>M&agrave;n h&igrave;nh 14.0&#39;&#39; thoải m&aacute;i sử dụng</h3>\n\n<p>Laptop được thiết kế với m&agrave;n h&igrave;nh 14.0&quot; c&ugrave;ng với độ ph&acirc;n giải Full HD, mang đến cho bạn kh&ocirc;ng gian rộng lớn c&ugrave;ng những h&igrave;nh ảnh hiển thị sắc n&eacute;t sẽ mang đến những trải nghiệm th&uacute; vị cho người d&ugrave;ng khi l&agrave;m việc, giải tr&iacute;,...</p>\n\n<p><img alt="Laptop Asus UX410UQ-GV066" src="https://tikicdn.com/media/catalog/product/5/3/5307299822746-5.u3060.d20170208.t140015.836898.jpg" style="display:block; height:500px; margin-left:auto; margin-right:auto; width:750px" title="Laptop Asus UX410UQ-GV066" /></p>\n\n<h3>Pin 3 Cell</h3>\n\n<p>Laptop sử dụng d&ograve;ng pin c&oacute; dung lượng 3 Cell sẽ đ&aacute;p ứng nhu cầu sử dụng của bạn trong thời gian d&agrave;i.</p>\n\n<p><img alt="Laptop Asus UX410UQ-GV066" src="https://tikicdn.com/media/catalog/product/5/3/5307299822746-6.u3060.d20170208.t140015.882484.jpg" style="display:block; height:500px; margin-left:auto; margin-right:auto; width:750px" title="Laptop Asus UX410UQ-GV066" /></p>\n\n<p>&quot; &gt;</p>\n\n<p><a href="https://tiki.vn/laptop-asus-ux410uq-gv066-p308702.html">Laptop Asus UX410UQ-GV066</a> sử dụng chip Intel Core i5 7200U c&oacute; xung nhịp tối đa l&ecirc;n đến 3.1GHz, card đồ họa NVIDIA GeForce 940MX c&oacute; dung lượng l&ecirc;n đến 2GB sẽ mang đến hiệu năng mạnh mẽ, gi&uacute;p bạn xử l&yacute; nhanh những y&ecirc;u cầu truyền tải, truy cập dữ liệu của bạn khi l&agrave;m việc v&agrave; giải tr&iacute;.</p>\n\n<p><img alt="Laptop Asus UX410UQ-GV066" src="https://tikicdn.com/media/catalog/product/5/3/5307299822746-1.u3060.d20170208.t140015.678811.jpg" style="display:block; height:500px; margin-left:auto; margin-right:auto; width:750px" title="Laptop Asus UX410UQ-GV066" /></p>\n\n<h3>RAM DDR4 4GB, ổ cứng HDD 500GB</h3>\n\n<p><a href="http://tiki.vn/laptop/c8095/asus">Laptop Asus</a> UX410UQ-GV066 được trang bị với bộ nhớ RAM chuẩn DDR4 c&oacute; dung lượng 4GB, ổ cứng l&ecirc;n đến HDD 500GB c&oacute; tốc độ v&ograve;ng quay 5400rpm, gi&uacute;p bạn lưu trữ được nhiều dữ liệu, đ&aacute;p ứng cho nhu cầu của c&ocirc;ng việc v&agrave; giải tr&iacute;. Ngo&agrave;i ra bộ nhớ dễ d&agrave;ng n&acirc;ng cấp sẽ gi&uacute;p bạn thuận tiện với việc tạo được lưu lượng bộ cho thiết bị của m&igrave;nh.</p>\n\n<p><img alt="Laptop Asus UX410UQ-GV066" src="https://tikicdn.com/media/catalog/product/5/3/5307299822746-2.u3060.d20170208.t140015.722400.jpg" style="display:block; height:500px; margin-left:auto; margin-right:auto; width:750px" title="Laptop Asus UX410UQ-GV066" /></p>\n\n<h3>Nhiều kết nối tiện dụng</h3>\n\n<p>M&aacute;y hỗ trợ Wifi v&agrave; kết nối kh&ocirc;ng d&acirc;y Bluetooth 4.1 v&agrave; nhiều cổng kết nối như USB 2.0, <a href="http://tiki.vn/usb-luu-tru/c1828">USB 3.0</a>, HDMI... c&ugrave;ng t&iacute;nh năng mở rộng như USB 3.1 Type C thuận tiện cho việc kết nối c&aacute;c thiết bị điện tử.</p>\n\n<p><img alt="Laptop Asus UX410UQ-GV066" src="https://tikicdn.com/media/catalog/product/5/3/5307299822746-3.u3060.d20170208.t140015.759950.jpg" style="display:block; height:500px; margin-left:auto; margin-right:auto; width:750px" title="Laptop Asus UX410UQ-GV066" /></p>\n\n<h3><a href="http://tiki.vn/ban-phim-may-tinh/c1830">B&agrave;n ph&iacute;m</a> rộng, <a href="https://tiki.vn/ban-di-chuot/c1831">b&agrave;n di chuột</a> nhạy</h3>\n\n<p><a href="https://tiki.vn/laptop/c8095">Laptop</a> Asus UX410UQ-GV066 với b&agrave;n ph&iacute;m chắc chắn, hỗ trợ <a href="http://tiki.vn/den-ban/c2016">đ&egrave;n b&agrave;n</a> ph&iacute;m thuận tiện khi sử dụng thiết bị ở v&ugrave;ng thiếu &aacute;nh s&aacute;ng... Ph&iacute;m bấm c&oacute; độ nảy cao, khoảng c&aacute;ch ph&iacute;m vừa vặn tạo được cảm gi&aacute;c thoải m&aacute;i khi sử dụng.</p>\n\n<p><img alt="Laptop Asus UX410UQ-GV066" src="https://tikicdn.com/media/catalog/product/5/3/5307299822746-4.u3060.d20170208.t140015.798963.jpg" style="display:block; height:500px; margin-left:auto; margin-right:auto; width:750px" title="Laptop Asus UX410UQ-GV066" /></p>\n\n<p>B&agrave;n di chuột cảm ứng đa điểm, gi&uacute;p c&aacute;c thao t&aacute;c được nhanh ch&oacute;ng v&agrave; ch&iacute;nh x&aacute;c hơn.</p>\n\n<h3>M&agrave;n h&igrave;nh 14.0&#39;&#39; thoải m&aacute;i sử dụng</h3>\n\n<p>Laptop được thiết kế với m&agrave;n h&igrave;nh 14.0&quot; c&ugrave;ng với độ ph&acirc;n giải Full HD, mang đến cho bạn kh&ocirc;ng gian rộng lớn c&ugrave;ng những h&igrave;nh ảnh hiển thị sắc n&eacute;t sẽ mang đến những trải nghiệm th&uacute; vị cho người d&ugrave;ng khi l&agrave;m việc, giải tr&iacute;,...</p>\n\n<p><img alt="Laptop Asus UX410UQ-GV066" src="https://tikicdn.com/media/catalog/product/5/3/5307299822746-5.u3060.d20170208.t140015.836898.jpg" style="display:block; height:500px; margin-left:auto; margin-right:auto; width:750px" title="Laptop Asus UX410UQ-GV066" /></p>\n\n<h3>Pin 3 Cell</h3>\n\n<p>Laptop sử dụng d&ograve;ng pin c&oacute; dung lượng 3 Cell sẽ đ&aacute;p ứng nhu cầu sử dụng của bạn trong thời gian d&agrave;i.</p>\n\n<p><img alt="Laptop Asus UX410UQ-GV066" src="https://tikicdn.com/media/catalog/product/5/3/5307299822746-6.u3060.d20170208.t140015.882484.jpg" style="display:block; height:500px; margin-left:auto; margin-right:auto; width:750px" title="Laptop Asus UX410UQ-GV066" /></p>', NULL),
(285, 'Asus 3543 core i5 black 2015', '1100000', 53, 2, 3, '4G', 'assus.jpg', 'VGA 920M', 'Win 7', 60000, '4 nhân', '6 tháng', 'Được hỗ trợ với bộ nhớ RAM chuẩn DDR3L có dung lượng 4GB, ổ cứng HDD 500GB, laptop giúp bạn lưu trữ dữ liệu với khối lượng vừa phải', ' <h2 style="text-align: justify;"><strong>HP 14 am065TU N3060 là một lựa chọn giá rẻ cho công việc nhẹ nhàng và giải trí mỗi ngày.</strong></h2><h3 style="text-align: justify;"><strong>Cấu hình phù hợp cho công việc văn phòng và soạn thảo</strong></h3><p style="text-align: justify;">Máy sử dụng dòng chip <a href="https://www.thegioididong.com/tin-tuc/tim-hieu-vi-xu-ly-may-tinh-cpu-intel-596066#intelceleron" target="_blank" title="Tìm hiểu chip xử lý Celeron">Celeron</a> giúp máy có thể đảm đương tốt các phần mềm như office, dùng để soạn thảo văn bản hay cho trẻ em học tập tiếng anh...</p><p style="text-align: justify;">Tốc độ CPU 1.6 GHz và có thể tăng tốc lên 2.48 GHz để thực hiện công việc nhanh hơn. </p><p style="text-align: justify;">RAM 4 GB và có thể nâng lên tối đa 8 GB là điểm sáng của máy, ổ cứng lưu trữ <a href="https://www.thegioididong.com/tin-tuc/o-cung-la-gi-co-may-loai--590183#hdd" target="_blank" title="Tìm hiểu ổ cứng HDD">HDD</a> 500 GB.</p><p style="text-align: center;"><a class="preventdefault" href="https://www.thegioididong.com/images/44/86410/hp-14-am065tu-x3b72pa-2.jpg" onclick="return false;"><img alt="HP 14 am065TU N3060 - Cấu hình phù hợp cho công việc văn phòng và soạn thảo" data-original="https://cdn2.tgdd.vn/Products/Images/44/86410/hp-14-am065tu-x3b72pa-2.jpg" class=\'lazy\' data-original="https://cdn2.tgdd.vn/Products/Images/44/86410/hp-14-am065tu-x3b72pa-2.jpg" title="HP 14 am065TU N3060 - Cấu hình phù hợp cho công việc văn phòng và soạn thảo" /></a></p><h3 style="text-align: justify;"><strong>Màn hình 14 inch độ phân giải HD rõ nét</strong></h3><p style="text-align: center;"><a class="preventdefault" href="https://www.thegioididong.com/images/44/86410/hp-14-am065tu-x3b72pa-3.jpg" onclick="return false;"><img alt="HP 14 am065TU N3060 - Màn hình 14 inch độ phân giải HD rõ nét" data-original="https://cdn4.tgdd.vn/Products/Images/44/86410/hp-14-am065tu-x3b72pa-3.jpg" class=\'lazy\' data-original="https://cdn4.tgdd.vn/Products/Images/44/86410/hp-14-am065tu-x3b72pa-3.jpg" title="HP 14 am065TU N3060 - Màn hình 14 inch độ phân giải HD rõ nét" /></a></p><h3 style="text-align: justify;"><strong>Các cổng kết nối</strong></h3><p style="text-align: justify;">Máy vẫn giữ lại cổng <a href="https://www.thegioididong.com/hoi-dap/vga-la-gi-920575" target="_blank" title="VGA">VGA</a> truyền thống để truyền hình ảnh ra màn hình lớn.</p><p style="text-align: center;"><a class="preventdefault" href="https://www.thegioididong.com/images/44/86410/hp-14-am065tu-x3b72pa-8.jpg" onclick="return false;"><img alt="HP 14 am065TU N3060 - Các cổng kết nối" data-original="https://cdn1.tgdd.vn/Products/Images/44/86410/hp-14-am065tu-x3b72pa-8.jpg" class=\'lazy\' data-original="https://cdn1.tgdd.vn/Products/Images/44/86410/hp-14-am065tu-x3b72pa-8.jpg" style="height: 490px; width: 640px;" title="HP 14 am065TU N3060 - Các cổng kết nối" /></a></p><h3><strong>Thiết kế máy HP 14 am065TU N3060</strong></h3><p style="text-align: center;"><a class="preventdefault" href="https://www.thegioididong.com/images/44/86410/hp-14-am065tu-x3b72pa-1.jpg" onclick="return false;"><img alt="Thiết kế máy HP 14 am065TU N3060" data-original="https://cdn3.tgdd.vn/Products/Images/44/86410/hp-14-am065tu-x3b72pa-1.jpg" class=\'lazy\' data-original="https://cdn3.tgdd.vn/Products/Images/44/86410/hp-14-am065tu-x3b72pa-1.jpg" title="Thiết kế máy HP 14 am065TU N3060" /></a></p><p style="text-align: center;"><i>Kiểu dáng đặc trưng quen thuộc của dòng laptop HP</i></p><p style="text-align: center;"><a class="preventdefault" href="https://www.thegioididong.com/images/44/86410/hp-14-am065tu-x3b72pa-4.jpg" onclick="return false;"><img alt="HP 14 am065TU N3060 - ​2 cạnh bên" data-original="https://cdn.tgdd.vn/Products/Images/44/86410/hp-14-am065tu-x3b72pa-4.jpg" class=\'lazy\' data-original="https://cdn.tgdd.vn/Products/Images/44/86410/hp-14-am065tu-x3b72pa-4.jpg" title="HP 14 am065TU N3060 - ​2 cạnh bên" /></a></p><p style="text-align: center;"><a class="preventdefault" href="https://www.thegioididong.com/images/44/86410/hp-14-am065tu-x3b72pa-5.jpg" onclick="return false;"><img alt="HP 14 am065TU N3060 - ​2 cạnh bên" data-original="https://cdn2.tgdd.vn/Products/Images/44/86410/hp-14-am065tu-x3b72pa-5.jpg" class=\'lazy\' data-original="https://cdn2.tgdd.vn/Products/Images/44/86410/hp-14-am065tu-x3b72pa-5.jpg" title="HP 14 am065TU N3060 - ​2 cạnh bên" /></a></p><p style="text-align: center;"><i>2 cạnh bên</i></p><h3 style="text-align: justify;"><strong>Chế độ bảo hành tốt</strong></h3><p>Hỗ trợ dịch vụ bảo hành Giao/Nhận tận nhà miễn phí và Dịch vụ tổng đài 24/7 <a href="https://www.thegioididong.com/laptop-hp-compaq" target="_blank" title="Laptop hãng HP">hãng HP</a>.</p><p style="text-align: center;"><a class="preventdefault" href="https://www.thegioididong.com/images/44/86410/hp-14-am065tu-x3b72pa-7.jpg" onclick="return false;"><img alt="HP 14 am065TU N3060 - ​Chế độ bảo hành tốt" data-original="https://cdn4.tgdd.vn/Products/Images/44/86410/hp-14-am065tu-x3b72pa-7.jpg" class=\'lazy\' data-original="https://cdn4.tgdd.vn/Products/Images/44/86410/hp-14-am065tu-x3b72pa-7.jpg" title="HP 14 am065TU N3060 - ​Chế độ bảo hành tốt" /></a></p>\n', NULL),
(287, 'Laptop Asus UX410UQ-GV066', '3000000', 80, 2, 3, '2G', 'asusss.jpg', 'VGA 920M', 'Win 7', 120000, '4 nhân', '6 tháng', 'Màn hình 14 inches, độ phân giải HD cho hình ảnh sắc nét hơn và trung thực hơn bao giờ hết.', '<p>&lt;p&gt;&lt;a href=&quot;https://tiki.vn/laptop-asus-ux410uq-gv066-p308702.html&quot;&gt;Laptop Asus UX410UQ-GV066&lt;/a&gt; sử dụng chip &lt;span&gt;Intel Core i5 &lt;span&gt;7200U&lt;/span&gt; &lt;/span&gt;c&oacute; xung nhịp tối đa l&ecirc;n đến &lt;span&gt;3.1GHz&lt;/span&gt;, card đồ họa &lt;span&gt;NVIDIA GeForce 940MX &lt;/span&gt;c&oacute; dung lượng l&ecirc;n đến 2GB sẽ mang đến hiệu năng mạnh mẽ, gi&uacute;p bạn xử l&yacute; nhanh những y&ecirc;u cầu truyền tải, truy cập dữ liệu của bạn khi l&agrave;m việc v&agrave; giải tr&iacute;.&lt;/p&gt;<br />\r\n&lt;p&gt;&lt;img style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; title=&quot;Laptop Asus UX410UQ-GV066&quot; src=&quot;https://tikicdn.com/media/catalog/product/5/3/5307299822746-1.u3060.d20170208.t140015.678811.jpg&quot; alt=&quot;Laptop Asus UX410UQ-GV066&quot; width=&quot;750&quot; height=&quot;500&quot; /&gt;&lt;/p&gt;<br />\r\n&lt;h3&gt;RAM DDR4 &lt;span&gt;4GB&lt;/span&gt;, ổ cứng HDD 500GB&lt;/h3&gt;<br />\r\n&lt;p&gt;&lt;a href=&quot;http://tiki.vn/laptop/c8095/asus&quot;&gt;Laptop Asus&lt;/a&gt; UX410UQ-GV066 được trang bị với bộ nhớ RAM chuẩn DDR4 c&oacute; dung lượng 4GB, ổ cứng l&ecirc;n đến HDD 500GB c&oacute; tốc độ v&ograve;ng quay &lt;span&gt;5400rpm&lt;/span&gt;, gi&uacute;p bạn lưu trữ được nhiều dữ liệu, đ&aacute;p ứng cho nhu cầu của c&ocirc;ng việc v&agrave; giải tr&iacute;. Ngo&agrave;i ra bộ nhớ dễ d&agrave;ng n&acirc;ng cấp sẽ gi&uacute;p bạn thuận tiện với việc tạo được lưu lượng bộ cho thiết bị của m&igrave;nh.&lt;/p&gt;<br />\r\n&lt;p&gt;&lt;img style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; title=&quot;Laptop Asus UX410UQ-GV066&quot; src=&quot;https://tikicdn.com/media/catalog/product/5/3/5307299822746-2.u3060.d20170208.t140015.722400.jpg&quot; alt=&quot;Laptop Asus UX410UQ-GV066&quot; width=&quot;750&quot; height=&quot;500&quot; /&gt;&lt;/p&gt;<br />\r\n&lt;h3&gt;Nhiều kết nối tiện dụng&lt;/h3&gt;<br />\r\n&lt;p&gt;M&aacute;y hỗ trợ Wifi v&agrave; kết nối kh&ocirc;ng d&acirc;y Bluetooth 4.1 v&agrave; nhiều cổng kết nối như USB 2.0, &lt;a href=&quot;http://tiki.vn/usb-luu-tru/c1828&quot;&gt;USB 3.0&lt;/a&gt;, HDMI... c&ugrave;ng t&iacute;nh năng mở rộng như USB 3.1 Type C thuận tiện cho việc kết nối c&aacute;c thiết bị điện tử.&lt;/p&gt;<br />\r\n&lt;p&gt;&lt;img style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; title=&quot;Laptop Asus UX410UQ-GV066&quot; src=&quot;https://tikicdn.com/media/catalog/product/5/3/5307299822746-3.u3060.d20170208.t140015.759950.jpg&quot; alt=&quot;Laptop Asus UX410UQ-GV066&quot; width=&quot;750&quot; height=&quot;500&quot; /&gt;&lt;/p&gt;<br />\r\n&lt;h3&gt;&lt;a href=&quot;http://tiki.vn/ban-phim-may-tinh/c1830&quot;&gt;B&agrave;n ph&iacute;m&lt;/a&gt; rộng, &lt;a href=&quot;https://tiki.vn/ban-di-chuot/c1831&quot;&gt;b&agrave;n di chuột&lt;/a&gt; nhạy&lt;/h3&gt;<br />\r\n&lt;p&gt;&lt;a href=&quot;https://tiki.vn/laptop/c8095&quot;&gt;Laptop&lt;/a&gt; Asus UX410UQ-GV066 với b&agrave;n ph&iacute;m chắc chắn, hỗ trợ &lt;a href=&quot;http://tiki.vn/den-ban/c2016&quot;&gt;đ&egrave;n b&agrave;n&lt;/a&gt; ph&iacute;m thuận tiện khi sử dụng thiết bị ở v&ugrave;ng thiếu &aacute;nh s&aacute;ng... Ph&iacute;m bấm c&oacute; độ nảy cao, khoảng c&aacute;ch ph&iacute;m vừa vặn tạo được cảm gi&aacute;c thoải m&aacute;i khi sử dụng.&lt;/p&gt;<br />\r\n&lt;p&gt;&lt;img style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; title=&quot;Laptop Asus UX410UQ-GV066&quot; src=&quot;https://tikicdn.com/media/catalog/product/5/3/5307299822746-4.u3060.d20170208.t140015.798963.jpg&quot; alt=&quot;Laptop Asus UX410UQ-GV066&quot; width=&quot;750&quot; height=&quot;500&quot; /&gt;&lt;/p&gt;<br />\r\n&lt;p&gt;B&agrave;n di chuột cảm ứng đa điểm, gi&uacute;p c&aacute;c thao t&aacute;c được nhanh ch&oacute;ng v&agrave; ch&iacute;nh x&aacute;c hơn.&lt;/p&gt;<br />\r\n&lt;h3&gt;M&agrave;n h&igrave;nh 14.0&#39;&#39; thoải m&aacute;i sử dụng&lt;/h3&gt;<br />\r\n&lt;p&gt;Laptop được thiết kế với m&agrave;n h&igrave;nh 14.0&quot; c&ugrave;ng với độ ph&acirc;n giải Full HD, mang đến cho bạn kh&ocirc;ng gian rộng lớn c&ugrave;ng những h&igrave;nh ảnh hiển thị sắc n&eacute;t sẽ mang đến những trải nghiệm th&uacute; vị cho người d&ugrave;ng khi l&agrave;m việc, giải tr&iacute;,...&lt;/p&gt;<br />\r\n&lt;p&gt;&lt;img style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; title=&quot;Laptop Asus UX410UQ-GV066&quot; src=&quot;https://tikicdn.com/media/catalog/product/5/3/5307299822746-5.u3060.d20170208.t140015.836898.jpg&quot; alt=&quot;Laptop Asus UX410UQ-GV066&quot; width=&quot;750&quot; height=&quot;500&quot; /&gt;&lt;/p&gt;<br />\r\n&lt;h3&gt;Pin 3 Cell&lt;/h3&gt;<br />\r\n&lt;p&gt;Laptop sử dụng d&ograve;ng pin c&oacute; dung lượng 3 Cell sẽ đ&aacute;p ứng nhu cầu sử dụng của bạn trong thời gian d&agrave;i.&lt;/p&gt;<br />\r\n&lt;p&gt;&lt;img style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; title=&quot;Laptop Asus UX410UQ-GV066&quot; src=&quot;https://tikicdn.com/media/catalog/product/5/3/5307299822746-6.u3060.d20170208.t140015.882484.jpg&quot; alt=&quot;Laptop Asus UX410UQ-GV066&quot; width=&quot;750&quot; height=&quot;500&quot; /&gt;&lt;/p&gt;&nbsp;</p>', NULL),
(289, 'Laptop HP ProBook 450', '2500000', 93, 1, 4, '2G', '81phlnumpnl.u4939.d20170428.t090948.607599.jpg', 'VGA 920M', 'Win 10', 2122222, '2 nhân', '6 tháng', 'Chất liệu nhôm mang đến khả năng tản nhiệt cho máy tính tốt hơn', '<h3 style="text-align: justify;">Thiết kế thân thiện, dễ sử dụng</h3>\n<p style="text-align: justify;"><a href="http://tiki.vn/laptop/c8095/hp">Laptop HP</a> Probook 450 G4 Z6T24PA có thiết kế đơn giản, thân thiện với người dùng. Với thiết kế màn hình lớn cùng <a href="http://tiki.vn/ban-phim-may-tinh/c1830">bàn phím</a> số được tích hợp, máy sẽ hỗ trợ bạn có thể thao tác các ứng dụng văn phòng một cách nhanh chóng.</p>\n<p style="text-align: center;"><img title="Laptop HP ProBook 450 G4 Z6T24PA" src="https://tikicdn.com/media/catalog/product/t/h/thiet-ke-than-thien.u4485.d20170306.t095528.485636.jpg" alt="Laptop HP ProBook 450 G4 Z6T24PA" width="750" height="500" /></p>\n<h3 style="text-align: justify;">Tốc độ xử lý mạnh mẽ</h3>\n<p style="text-align: justify;"><a href="https://tiki.vn/laptop/c8095">Laptop</a> HP ProBook 450 G4 Z6T24PA sử dụng bộ vi xử lý Intel Core i7-7500U, là thế hệ chip mới nhất của Intel vừa được ra mắt cuối năm 2016.</p>\n<p style="text-align: justify;">Card đồ họa rời Nvidia GeForce 930MX có dung lượng 2GB sẽ hỗ trợ bạn tối đa trong việc thiết kế đồ họa, xem phim HD và chơi các trò chơi có đồ họa 3D thật sống động.</p>\n<p><img style="display: block; margin-left: auto; margin-right: auto;" title="Laptop HP ProBook 450 G4 Z6T24PA" src="https://tikicdn.com/media/catalog/product/t/o/toc-do-xu-ly.u4485.d20170306.t095528.541090.jpg" alt="Laptop HP ProBook 450 G4 Z6T24PA" width="750" height="500" /></p>\n<h3 style="text-align: justify;">Màn hình 15.6 inches, độ phân giải Full HD (1920 x 1080 pixels)</h3>\n<p style="text-align: justify;">ProBook 450 G4 Z6T24PA có kích thước 15.6 inches, thích hợp cho những ai muốn sử dụng một chiếc laptop có màn hình lớn. Với độ phân giải Full HD (1920 x 1080 pixels), máy cho khả năng hiển thị hình ảnh vô cùng sắc nét, màu sắc sống động cùng độ tương phản cao.</p>\n<p style="text-align: justify;">Ngoài ra, laptop còn có khả năng chống chói tốt, cho bạn góc nhìn rộng cùng công nghệ Led Backlit giúp tiêu thụ điện năng ít hơn và góp phần tạo nên sự hoàn hảo cho hình ảnh khi hiển thị.</p>\n<p><img style="display: block; margin-left: auto; margin-right: auto;" title="Laptop HP ProBook 450 G4 Z6T24PA" src="https://tikicdn.com/media/catalog/product/m/a/man-hinh.u4485.d20170306.t095528.434536.jpg" alt="Laptop HP ProBook 450 G4 Z6T24PA" width="750" height="500" /></p>\n<h3 style="text-align: justify;">Bộ nhớ RAM DDR4 8GB, ổ cứng HDD 500 GB</h3>\n<p style="text-align: justify;">Laptop HP ProBook 450 G4 Z6T24PA có bộ nhớ RAM DDR4 8GB, ổ cứng HDD 500 GB cho bạn thoải mái lưu trữ nhiều dữ liệu công việc, học tập, giải trí mà không làm giảm hiệu suất hoạt động của laptop.</p>\n<p style="text-align: center;"><img title="Laptop HP ProBook 450 G4 Z6T24PA" src="https://tikicdn.com/media/catalog/product/b/o/bo-nho.u4485.d20170306.t095528.350214.jpg" alt="Laptop HP ProBook 450 G4 Z6T24PA" width="750" height="500" /></p>\n<h3 style="text-align: justify;">Đa kết nối tiện ích</h3>\n<p style="text-align: justify;">Khi sử dụng laptop, bạn có thể kết nối nhiều thiết bị điện tử cùng một lúc thông qua các cổng đã được thiết kế sẵn như VGA, HDMI, <a href="http://tiki.vn/usb-luu-tru/c1828">USB</a>, giắc 3.5 mm, cổng LAN, khe cắm <a href="http://tiki.vn/the-nho-sd/c2681">thẻ nhớ SD</a>... một cách dễ dàng và tiện dụng hơn bao giờ hết.</p>\n<p><img style="display: block; margin-left: auto; margin-right: auto;" title="Laptop HP ProBook 450 G4 Z6T24PA" src="https://tikicdn.com/media/catalog/product/d/a/da-ket-noi-tien-ich.u4485.d20170306.t095528.397766.jpg" alt="Laptop HP ProBook 450 G4 Z6T24PA" width="750" height="500" /></p>\n<h3 style="text-align: justify;">Pin 4 cell, thời gian sử dụng lên đến 4 giờ</h3>\n<p style="text-align: justify;">HP Probook 450 G4 Z6T24PA được trang bị viên pin 4 cell, kết hợp với công nghệ tiết kiệm điện năng của chip Intel Core i7-7500U, máy cho thời gian sử dụng lên đến 4 giờ với những tác vụ cơ bản.</p>\n<p style="text-align: center;"><img title="Laptop HP ProBook 450 G4 Z6T24PA" src="https://tikicdn.com/media/catalog/product/4/c/4cell.u4485.d20170306.t095528.301761.jpg" alt="Laptop HP ProBook 450 G4 Z6T24PA" width="750" height="500" /></p>', 1),
(290, 'Laptop Acer 3 SF314 Core i7 ', '3500000', 35, 2, 2, '2G', '1.u2769.d20170504.t200451.911798.jpg', 'VGA 920M', 'Win 8.1', 3100000, '4 nhân', '6 tháng', 'Được trang bị với nhiều cổng như USB 3.0, 2.0; HDMI; LAN,... để bạ có thể kết nối với các thiết bị ngoại vi khác', ' <h2><strong>Acer Aspire ES1 432 C5J2 N3350 mang lại hiệu năng sử dụng đơn giản để học tập hay giải trí cho bạn.</strong></h2><h3><strong>Cấu hình phù hợp với các chương trình nhẹ nhàng</strong></h3><p>Máy chỉ sử dụng chip xử lý <a href="https://www.thegioididong.com/tin-tuc/tim-hieu-vi-xu-ly-may-tinh-cpu-intel-596066#intelceleron" target="_blank" title="Celeron">Celeron</a> và RAM<strong> 2 GB</strong> <a href="https://www.thegioididong.com/hoi-dap/ram-ddr3l-on-board-la-nhu-the-nao-951049" target="_blank" title="DDR3L(On board)">DDR3L(On board)</a> để đảm bảo giá thành tốt nhất cho sản phẩm. </p><p>Ổ cứng<a href="https://www.thegioididong.com/hoi-dap/hdd-la-gi-922791" target="_blank" title=" HDD"> HDD</a> <strong>500 GB</strong> cũng giúp bạn thoải mái lưu trữ dữ liệu hơn.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/44/101830/acer-aspire-es1-432-c5j2-n3350-game.jpg" onclick="return false;"><img alt="Cấu hình phù hợp với các chương trình nhẹ nhàng" data-original="https://cdn1.tgdd.vn/Products/Images/44/101830/acer-aspire-es1-432-c5j2-n3350-game.jpg" class=\'lazy\' data-original="https://cdn1.tgdd.vn/Products/Images/44/101830/acer-aspire-es1-432-c5j2-n3350-game.jpg" title="Cấu hình phù hợp với các chương trình nhẹ nhàng" /></a></p><h3><strong>Màn hình 14 inch</strong></h3><p>Cùng với đó là công nghệ <a href="https://www.thegioididong.com/tin-tuc/cac-cong-nghe-hien-thi-tren-man-hinh-laptop-597377#acercinecrystal" target="_blank" title="ACER CineCrystal LED Backlit">ACER CineCrystal LED Backlit</a> và độ phân giải HD (1366 x 768) cho độ sáng và màu sắc đẹp hơn.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/44/101830/acer-aspire-es1-432-c5j2-n3350-man-hinh.jpg" onclick="return false;"><img alt="Màn hình 14 inch" data-original="https://cdn3.tgdd.vn/Products/Images/44/101830/acer-aspire-es1-432-c5j2-n3350-man-hinh.jpg" class=\'lazy\' data-original="https://cdn3.tgdd.vn/Products/Images/44/101830/acer-aspire-es1-432-c5j2-n3350-man-hinh.jpg" title="Màn hình 14 inch" /></a></p><h3><strong>Bàn phím bấm chất lượng tốt</strong></h3><p>Phím bấm chữ số to, rõ ràng và có độ nảy khi gõ tốt, êm tay.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/44/101830/acer-aspire-es1-432-c5j2-n3350-ban-phim.jpg" onclick="return false;"><img alt="Bàn phím bấm chất lượng tốt" data-original="https://cdn.tgdd.vn/Products/Images/44/101830/acer-aspire-es1-432-c5j2-n3350-ban-phim.jpg" class=\'lazy\' data-original="https://cdn.tgdd.vn/Products/Images/44/101830/acer-aspire-es1-432-c5j2-n3350-ban-phim.jpg" title="Bàn phím bấm chất lượng tốt" /></a></p><h3><strong>Touchpad đa cách điều khiển thông minh</strong></h3><p>Hỗ trợ <a href="https://www.thegioididong.com/hoi-dap/multi-touchpad-la-gi-920569" target="_blank" title="Multi TouchPad">Multi TouchPad</a> thông minh giúp sử dụng các thao tác cơ bản và có thể không cần dùng chuột rời.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/44/101830/acer-aspire-es1-432-c5j2-n3350-chuot-1.jpg" onclick="return false;"><img alt="Touchpad đa cách điều khiển thông minh" data-original="https://cdn2.tgdd.vn/Products/Images/44/101830/acer-aspire-es1-432-c5j2-n3350-chuot-1.jpg" class=\'lazy\' data-original="https://cdn2.tgdd.vn/Products/Images/44/101830/acer-aspire-es1-432-c5j2-n3350-chuot-1.jpg" title="Touchpad đa cách điều khiển thông minh" /></a></p><h3><strong>Các cổng kết nối</strong></h3><p>Máy trang bị cổng <a href="https://www.thegioididong.com/hoi-dap/hdmi-la-gi-930605" target="_blank" title="HDMI">HDMI</a> để trình chiếu lên màn hình lớn như tivi.</p><p>Ngoài ra, còn kết nối dễ dàng với máy in có dây và kể cả đa số các máy in không dây, máy scan... Nổi bật nhất của sản phẩm này là có cổng <a href="https://www.thegioididong.com/hoi-dap/usb-30-la-gi-926737" target="_blank" title="USB 3.0">USB 3.0</a> cho kết nối nhanh hơn USB 2.0.</p><p> </p>\n', 1),
(291, 'Laptop Dell Vostro 5468', '4200000', 44, 1, 1, '2G', '1231234676_1_.jpg', 'VGA 920M', 'Win 7', 4500000, '4 nhân', '6 tháng', 'Máy được trang bị màn hình 14 inches cùng độ phân giải FULLHD 1920 x 1080 pixels', '<h3>Cấu hình mạnh mẽ</h3>\n<p><a href="https://tiki.vn/laptop/c8095/dell">Laptop Dell</a> Vostro 5468 VTI5019W được trang bị với bộ chip Intel Core i5-7200U, có xung nhịp tối đa lên đến 3.1GHz, kết hợp với card đồ họa Intel HD Graphics mang đến hiệu năng mạnh mẽ, giúp bạn có thể chạy đa nhiệm nhiều ứng dụng cùng một lúc mà không làm giảm hiệu suất hoạt động của thiết bị. Ngoài ra, với cấu hình này, bạn sẽ dễ dàng hơn, tiết kiệm được nhiều thời gian hơn trong công việc, xử lý đồ họa, chỉnh sửa hình ảnh, thoải mái hơn khi xem phim HD, chơi game ....</p>\n<h3><img style="display: block; margin-left: auto; margin-right: auto;" title="Laptop Dell Vostro 5468 VTI5019W" src="https://tikicdn.com/media/catalog/product/v/t/vti5019w_2.u579.d20161114.t083555.204427.jpg" alt="Laptop Dell Vostro 5468 VTI5019W" width="750" height="408" />Bộ nhớ đáp ứng nhu cầu lưu trữ</h3>\n<p>Với bộ nhớ RAM 4GB cùng ổ cứng HDD 500GB, bạn có thể thoải mái lưu trữ nhiều dữ liệu cho công việc, học tập, hay hình ảnh, phim nhạc trong cuộc sống hàng ngày.</p>\n<h3>Màn hình 14 Inches, độ phân giải HD</h3>\n<p><a href="https://tiki.vn/laptop/c8095">Laptop</a> Dell Vostro 5468 VTI5019W có màn hình 14 inches, độ phân giải HD cho hình ảnh sắc nét hơn và trung thực hơn bao giờ hết.</p>\n<p><img style="display: block; margin-left: auto; margin-right: auto;" title="Laptop Dell Vostro 5468 VTI5019W" src="https://tikicdn.com/media/catalog/product/v/t/vti5019w_3.u579.d20161114.t083555.243465.jpg" alt="Laptop Dell Vostro 5468 VTI5019W" width="750" height="396" /></p>\n<h3>Hệ điều hành Windows 10</h3>\n<p>Được trang bị hệ điều hành Windows 10, Dell Vostro 5468 VTI5019W sẽ dễ dàng được cá nhân hóa, tạo nên không gian làm việc khoa học, dữ liệu được bảo mật tối đa. Đồng thời, hệ điều hành còn tăng tốc độ truy cập, thời gian tìm kiếm và truy xuất dữ liệu.</p>\n<h3><a href="http://tiki.vn/ban-phim-may-tinh/c1830">Bàn phím</a> full size, chắc chắn</h3>\n<p>Bàn phím laptop được thiết kế full size nhỏ gọn, phím bấm có độ nảy cao, khoảng cách phím hợp lý kết hợp với touchpad cảm ứng đa điểm giúp bạn khi thao tác được thoải mái và chính xác hơn.</p>\n', NULL),
(292, 'Laptop Asus X441SA', '1500000', 22, 2, 3, '4G', 'asus-f555-2_4.jpg', 'VGA 920M', 'Win 8.1', 1800000, '4 nhân', '6 tháng', 'Bàn phím laptop được thiết kế full size nhỏ gọn, phím bấm có độ nảy cao', 'h3>Tốc độ xử lý ổn định, mượt mà</h3>\n<p><a href="http://tiki.vn/laptop/c8095/asus">Laptop Asus</a> X441SA-WX020D với bộ vi xử lý Intel Celeron N3060, kết hợp card đồ họa Intel HD Graphics mang đến tốc độ xử lý ổn định, mượt mà để giúp bạn có thể chạy đa nhiệm các ứng dụng cơ bản ở văn phòng, trường lớp, giải trí với xem phim, nghe nhạc, thiết kế đồ họa...</p>\n<p><img style="display: block; margin-left: auto; margin-right: auto;" title="Laptop Asus X441SA-WX020D" src="https://tikicdn.com/media/catalog/product/x/4/x441sa-wx020d_2.u579.d20161201.t183804.402150.jpg" alt="Laptop Asus X441SA-WX020D" width="750" height="476" /></p>\n<h3>Bộ nhớ RAM 4GB, ổ cứng 500GB</h3>\n<p>Được hỗ trợ với bộ nhớ RAM chuẩn DDR3L có dung lượng 4GB, ổ cứng HDD 500GB, <a href="https://tiki.vn/laptop/c8095">laptop</a> giúp bạn lưu trữ dữ liệu với khối lượng vừa phải, đáp ứng được nhu cầu của các bạn học sinh, sinh viên, nhân viên văn phòng.</p>\n<h3>Cổng kết nối tiện ích</h3>\n<p>Với các cổng như HDMI, <a href="http://tiki.vn/usb-luu-tru/c1828">USB</a>, Jăck 3.5mm, ... hỗ trợ bạn dễ dàng kết nối nhiều thiết bị ngoại vi cùng một lúc.</p>\n<p><img style="display: block; margin-left: auto; margin-right: auto;" title="Laptop Asus X441SA-WX020D" src="https://tikicdn.com/media/catalog/product/x/4/x441sa-wx020d_4.u579.d20161201.t183758.605682.jpg" alt="Laptop Asus X441SA-WX020D" width="750" height="686" /></p>\n<h3><a href="http://tiki.vn/ban-phim-may-tinh/c1830">Bàn phím</a> full size, touchpad cảm ứng đa điểm</h3>\n<p>Bàn phím Laptop Asus X441SA-WX020D được thiết kế full size, phím bấm êm, khoảng cách phím hợp lý kết hợp với touchpad cảm ứng đa điểm mang đến sự nhanh chóng và chính xác trong từng thao tác của bạn.</p>\n<h3>Công nghệ màn hình Glare HD</h3>\n<p>Laptop với màn hình sử dụng công nghệ Glare HD, kích thước 14 inches, cho phép hiển thị hình ảnh sắc nét, chi tiết, màu sắc trung thực và sống động hơn bao giờ hết.</p> ', NULL),
(293, 'Laptop Dell Inspiron N3552', '3190000', 55, 1, 1, '2G', 'n3567.u2470.d20170217.t154141.537017.jpg', 'VGA 920M', 'Win 7', 3200000, '4 nhân', '6 tháng', 'Với bộ nhớ RAM 4GB cùng ổ cứng HDD 500GB, bạn có thể thoải mái lưu trữ nhiều dữ liệu cho công việc hằng ngày', ' <h3>Bộ vi xử lý mạnh mẽ</h3>\n<p><a href="https://tiki.vn/laptop/c8095/dell">Laptop Dell</a> Inspiron N3552 V5C008W được trang bị với chip Intel Celeron N3060, bộ nhớ RAM 4GB, cùng ổ cứng HDD 500GB cho hiệu suất hoạt động mượt mà, nhanh chóng và hiệu quả hơn.</p>\n<p>Ngoài ra, <a href="https://tiki.vn/laptop/c8095">laptop</a> còn có card đồ họa Intel HD Graphics hỗ trợ bạn chơi game, xem phim hay thiết kế đồ họa đều tiện dụng.</p>\n<p><img style="display: block; margin-left: auto; margin-right: auto;" title="Laptop Dell Inspiron N3552 V5C008W" src="https://tikicdn.com/media/catalog/product/v/5/v5c008w1.u579.d20161113.t215309.846249.jpg" alt="Laptop Dell Inspiron N3552 V5C008W" width="750" height="395" /></p>\n<h3>Màn hình 15.6 inches, công nghệ HD WLED</h3>\n<p>Màn hình laptop được thiết kế với kích thước 15.6 inches, kết hợp công nghệ HD WLED mang lại không gian hiển thị hình ảnh rộng lớn, chất lượng hình ảnh sống động, chân thật nhất. Ngoài ra, công nghệ màn hình còn bảo vệ mắt bạn tránh tình trạng mỏi mắt, đau mắt khi sử dụng thiết bị trong thời gian dài.</p>\n<h3>Hệ điều hành Windows 10</h3>\n<p>Sử dụng hệ điều hành Windows 10, Dell Inspiron N3552 V5C008W sẽ cho bạn trải nghiệm được không gian làm việc khoa học, dữ liệu được bảo mật tối đa. Đồng thời, hệ điều hành còn có thể cá nhân hóa laptop của bạn, giúp bạn dễ dàng quản lý và sử dụng các thông tin, tài liệu của bạn.</p>\n<h3>Nhiều cổng kết nối tiện ích</h3>\n<p>Với laptop Dell Inspiron N3552 V5C008W, bạn có thể kết nối với nhiều thiết bị ngoại vi khác nhau thông qua các cổng như HDMI, <a href="http://tiki.vn/usb-luu-tru/c1828">USB 3.0</a>, 2.0, khe cắm thẻ nhớ...</p>', NULL),
(294, 'Laptop Acer  SF514-51', '2100000', 11, 1, 2, '2G', 'nx-gd4sv-002_1.u2470.d20170209.t153348.642934.jpg', 'VGA 920M', 'Win 7', 2300000, '4 nhân', '6 tháng', 'Máy chỉ sử dụng chip xử lý Celeron và RAM 2 GB,    giá thành tốt nhất cho sản phẩm.', '<p style="text-align: justify;"><strong>Thiết kế sang trọng, hiện đại</strong></p>\n<p style="text-align: justify;"><strong><a href="http://tiki.vn/laptop/c8095/acer">Laptop Acer</a> Swift 5 SF514-51-72F8</strong> có thiết kế với kiểu dáng vuông vức cùng màu đen sang trọng và những đường kẻ sọc độc đáo. Với cân nặng chỉ 1.3kg, đây sẽ là một chiếc máy lý tưởng cho những ai cần di chuyển nhiều.</p>\n<p style="text-align: justify;"> </p>\n<p style="text-align: justify;"><strong>Tốc độ xử lý mạnh mẽ</strong></p>\n<p style="text-align: justify;">Acer Swift 5 SF514-51-72F8 sử dụng bộ vi xử lý Intel Core i7 7500U, thuộc dòng chip thế hệ mới nhất của Intel, cho khả năng hỗ trợ bạn thực hiện các thao tác nhanh và mượt mà, giúp bạn hoàn thành công việc trong thời gian nhanh hơn.</p>\n<p style="text-align: justify;"> </p>\n<p style="text-align: justify;"><strong>Màn hình 14 inches, độ phân giải Full HD (1920 x 1080 pixels)</strong></p>\n<p style="text-align: justify;"><a href="https://tiki.vn/laptop/c8095">Laptop</a> Acer Swift 5 SF514-51-72F8 có kích thước 14 inches, thích hợp cho những ai muốn sử dụng một chiếc laptop có màn hình lớn nhưng lại có cân năng siêu nhẹ. Với độ phân giải Full HD, máy cho khả năng hiển thị vượt trội, màu sắc được tái tạo chính xác, góc nhìn rộng cùng độ sáng cao giúp người dùng dễ dàng sử dụng ngoài trời.</p>\n<p style="text-align: justify;"> </p>\n<p style="text-align: justify;"><strong>Bộ nhớ RAM 8GB DDR3, <a href="http://tiki.vn/o-cung-ssd/c2146">ổ cứng SSD</a> 256 GB</strong></p>\n<p style="text-align: justify;">Laptop Acer Swift 5 SF514-51-72F8 có bộ nhớ RAM DDR3L 8 GB, <a href="http://tiki.vn/o-cung-ssd-256gb/c3694">ổ cứng SSD 256GB</a> cho bạn thoải mái lưu trữ dữ liệu công việc, học tập, giải trí mà không làm giảm hiệu suất hoạt động của laptop.</p>\n<p style="text-align: justify;"> </p>\n<p style="text-align: justify;"><strong>Bảo mật cao cấp với cảm biến vân tay</strong></p>\n<p style="text-align: justify;">Loại cảm biến vân tay được sử dụng trên Acer Swift 5 là cảm biến vân tay một chạm, được đặt ngay trên phần touchpad. Người dùng chỉ cần chạm ngón tay đã được cài đặt từ trước lên phần cảm biến ngay lập tức sẽ đăng nhập vào Windows. Ưu điểm của loại cảm biến vây tay mới này là người dùng không cần phải quét vân tay từ trên xuống làm mất nhiều thời gian hơn.</p> ', 0),
(295, 'Laptop Acer Aspire R51', '1800000', 12, 2, 2, '2G', '1.u2769.d20170504.t191959.397356.jpg', 'VGA 920M', 'Win 7', 1900000, '4 nhân', '6 tháng', 'Máy trang bị cổng HDMI để trình chiếu lên màn hình lớn như tivi.', '<h3>Thiết kế tinh tế</h3>\n<p>Sản phẩm Acer Aspire R5-471T-54W0 NX.G7WSV.002 là một trong những chiếc <a href="https://tiki.vn/laptop/c8095">laptop</a> gập xoay 360 độ mới nhất của dòng laptop Acer. Bên cạnh đó, chất liệu nhôm mang đến khả năng tản nhiệt cho máy tính tốt hơn so với các chất liệu khác. Máy cũng rất thích hợp cho các đối tượng thường xuyên di chuyển với trọng ượng nhẹ chỉ 1,9 kg và độ dày 17,78 mm.</p>\n<p><img style="display: block; margin-left: auto; margin-right: auto;" title="Laptop Acer Aspire R5-471T-54W0 NX.G7WSV.002" src="https://tikicdn.com/media/catalog/product/r/5/r5-471t-54w0-7.u579.d20161125.t140720.312111.jpg" alt="Laptop Acer Aspire R5-471T-54W0 NX.G7WSV.002" width="750" height="625" /></p>\n<h3>Bộ vi xử lý thế hệ mới nhất</h3>\n<p><a href="http://tiki.vn/laptop/c8095/acer">Laptop Acer</a> Aspire R5-471T-54W0 NX.G7WSV.002 sử dụng chip Intel Core i5-6200 giúp bạn đạt được hiệu quả cao với hầu hết các công việc tại văn phòng, trường lớp.</p>\n<h3>Bộ nhớ đáp ứng nhu cầu lưu trữ</h3>\n<p>Bộ nhớ RAM 4GB chuẩn DDR4 có chức năng tăng khả năng xử lý, truyền tải dữ liệu, chạy đa nhiệm nhiều ứng dụng nhưng vẫn đảm bảo được hiệu suất hoạt động của thiết bị. <a href="http://tiki.vn/o-cung-ssd-128gb/c3693">Ổ cứng SSD 128GB</a> giúp máy khởi đọng và xử lý các tác vụ nhanh chóng mà không cần phải chờ đợi quá lâu. Bạn có thể mở rộng bộ nhớ của sản phẩm thông qua các thiết bị lữu trữ như <a href="http://tiki.vn/o-cung-di-dong-1tb/c2448">ổ cứng di động</a>, USB,..</p>\n<p><img style="display: block; margin-left: auto; margin-right: auto;" title="Laptop Acer Aspire R5-471T-54W0 NX.G7WSV.002" src="https://tikicdn.com/media/catalog/product/r/5/r5-471t-54w0-22.u579.d20161125.t095659.473498.jpg" alt="Laptop Acer Aspire R5-471T-54W0 NX.G7WSV.002" width="750" height="422" /></p>\n<h3>Khả năng tương thích hiệu quả</h3>\n<p>Laptop Acer Aspire R5-471T-54W0 NX.G7WSV.002 được trang bị với nhiều  cổng như <a href="http://tiki.vn/usb-luu-tru/c1828">USB 3.0</a>, 2.0; HDMI; LAN,... để bạ có thể kết nối với các thiết bị ngoại vi khác. Ngoài ra, máy cũng được trang bị 1 cổng USB Type 3.1 cho tốc độ truyền tải cao.</p>\n<p><img style="display: block; margin-left: auto; margin-right: auto;" title="Laptop Acer Aspire R5-471T-54W0 NX.G7WSV.002" src="https://tikicdn.com/media/catalog/product/r/5/r5-471t-54w0-18.u579.d20161125.t095659.366879.jpg" alt="Laptop Acer Aspire R5-471T-54W0 NX.G7WSV.002" width="750" height="500" /></p>\n<h3>Màn hình 14 inches, độ phân giải full HD</h3>\n<p>Máy được trang bị màn hình 14 inches cùng độ phân giải FULLHD 1920 x 1080 pixels. Nhờ đó, bạn sẽ được trải nghiệm những hình ảnh chất lượng cao. Kèm theo đó, màn hình cảm ứng giúp bạn có thể thao tác trực tiếp và nhanh chóng trên màn hình laptop mà không phải tốn quá nhiều thời gian sử dụng.</p>\n<p><img style="display: block; margin-left: auto; margin-right: auto;" title="Laptop Acer Aspire R5-471T-54W0 NX.G7WSV.002" src="https://tikicdn.com/media/catalog/product/r/5/r5-471t-54w0-13.u579.d20161125.t095659.224774.jpg" alt="Laptop Acer Aspire R5-471T-54W0 NX.G7WSV.002" width="750" height="500" /></p> ', NULL),
(296, 'Laptop Dell Core i5 black', '4000000', 221, 2, 1, '2G', 'loa.jpg', 'VGA 920M', 'Mac OS', 4100000, '4 nhân', '6 tháng', 'Card đồ họa rời Nvidia GeForce 930MX có dung lượng 2GB ', '<h3>Cấu hình mạnh mẽ</h3>\n<p><a href="https://tiki.vn/laptop/c8095/dell">Laptop Dell</a> Vostro 5468 VTI5019W được trang bị với bộ chip Intel Core i5-7200U, có xung nhịp tối đa lên đến 3.1GHz, kết hợp với card đồ họa Intel HD Graphics mang đến hiệu năng mạnh mẽ, giúp bạn có thể chạy đa nhiệm nhiều ứng dụng cùng một lúc mà không làm giảm hiệu suất hoạt động của thiết bị. Ngoài ra, với cấu hình này, bạn sẽ dễ dàng hơn, tiết kiệm được nhiều thời gian hơn trong công việc, xử lý đồ họa, chỉnh sửa hình ảnh, thoải mái hơn khi xem phim HD, chơi game ....</p>\n<h3><img style="display: block; margin-left: auto; margin-right: auto;" title="Laptop Dell Vostro 5468 VTI5019W" src="https://tikicdn.com/media/catalog/product/v/t/vti5019w_2.u579.d20161114.t083555.204427.jpg" alt="Laptop Dell Vostro 5468 VTI5019W" width="750" height="408" />Bộ nhớ đáp ứng nhu cầu lưu trữ</h3>\n<p>Với bộ nhớ RAM 4GB cùng ổ cứng HDD 500GB, bạn có thể thoải mái lưu trữ nhiều dữ liệu cho công việc, học tập, hay hình ảnh, phim nhạc trong cuộc sống hàng ngày.</p>\n<h3>Màn hình 14 Inches, độ phân giải HD</h3>\n<p><a href="https://tiki.vn/laptop/c8095">Laptop</a> Dell Vostro 5468 VTI5019W có màn hình 14 inches, độ phân giải HD cho hình ảnh sắc nét hơn và trung thực hơn bao giờ hết.</p>\n<p><img style="display: block; margin-left: auto; margin-right: auto;" title="Laptop Dell Vostro 5468 VTI5019W" src="https://tikicdn.com/media/catalog/product/v/t/vti5019w_3.u579.d20161114.t083555.243465.jpg" alt="Laptop Dell Vostro 5468 VTI5019W" width="750" height="396" /></p>\n<h3>Hệ điều hành Windows 10</h3>\n<p>Được trang bị hệ điều hành Windows 10, Dell Vostro 5468 VTI5019W sẽ dễ dàng được cá nhân hóa, tạo nên không gian làm việc khoa học, dữ liệu được bảo mật tối đa. Đồng thời, hệ điều hành còn tăng tốc độ truy cập, thời gian tìm kiếm và truy xuất dữ liệu.</p>\n<h3><a href="http://tiki.vn/ban-phim-may-tinh/c1830">Bàn phím</a> full size, chắc chắn</h3>\n<p>Bàn phím laptop được thiết kế full size nhỏ gọn, phím bấm có độ nảy cao, khoảng cách phím hợp lý kết hợp với touchpad cảm ứng đa điểm giúp bạn khi thao tác được thoải mái và chính xác hơn.</p>\n', 1),
(297, 'Laptop HP 15-Bạc', '1500000', 99, 2, 4, '2G', 'hp.jpg', 'VGA 920M', 'Win 10', 1540000, '4 nhân', '6 tháng', 'Thiết kế sang trọng, gọn nhe,chất lượng hàng đầu', 'Thiết kế truyền thống\n\nLaptop HP 15-AY538TU 1AC62PA - Core i3-6006U sở hữu thiết kế mang đậm nét truyền thống của HP với các đường cong mềm mại đặc trưng, các chi tiết được thiết kế một cách tỉ mỉ, cùng họa tiết hiện đại mang đến một vẻ ngoài bắt mắt.\n\n \n\nCấu hình mạnh mẽ\n\nChiếc laptop được trang bị bộ vi xử lý Intel thế hệ thứ 6 Core i3-6006U tốc độ đạt 2.0 GHz, kết hợp với bộ nhớ RAM DDR3L dung lượng 4 GB và chipset đồ họa tích hợp Intel HD Graphics đem lại cho máy một hiệu năng ổn định, có thể đáp ứng tốt các yêu cầu thông dụng của người dùng. HP 15-AY538TU còn được trang bị ổ đĩa cứng HDD dung lượng 500 GB, cung cấp cho người dùng một không gian đủ rộng để lưu trữ những dữ liệu cần thiết.\n\n \n\nMàn hình 15.6 inch sắc nét\n\nLaptop HP 15-AY538TU 1AC62PA sở hữu màn hình 15.6 inch, độ phân giải HD (1366x768).Sử dụng công nghệ WLED-backlit sẽ mang đến cho bạn những hình ảnh chất lượng cao, màu sắc trung thực. Góc nhìn rộng, rất thích hợp để thưởng thức những bộ phim hay, giải trí với những dòng game nhẹ.\n\n \n\nBàn phím và TouchPad tiện lợi\n\nBàn phím được thiết kế theo kiểu chicklet, giúp bạn làm việc được nhanh, nhạy, dễ dàng với độ chính xác cao. Ngoài ra, máy còn được tích hợp bàn phím số bên tay phải, giúp cho bạn thao tác nhanh với các con số, rất thuận lợi cho các bạn làm chuyên ngành kế toán, hay phải tiếp xúc với các con số. Các phím bấm được bố trí hợp lý, có độ đàn hồi cao, giúp bạn soạn thảo văn bản một các thoải mái mà không bị mỏi cổ tay trong quá trình làm việc. Touchpad cũng được thiết kế rộng rãi, độ ma sát tốt, dễ dàng phóng to, thu nhỏ hình ảnh, tiện lợi như một chú chuột rời.\n\n \n\nKết nối đa dạng\n\nNhư hầu hết các laptop thông thường khác, chiếc laptop này có đầy đủ các kết nối như USB 2.0, USB 3.0, kết nối HDMI, cổng mạng Lan… hỗ trợ tối đa cho công việc hàng ngày của bạn. Đồng thời, máy có thể kết nối internet một cách nhanh chóng với kết nối Wifi với chuẩn IEEE 802.11 b/g/n cho phép người dùng kết nối internet nhanh chóng, mọi lúc, mọi nơi.', 12),
(298, 'Laptop Asus FX553VD', '6000000', 59, 1, 3, '2G', 'aa1a.jpg', 'VGA 920M', 'Win 7', 6120000, '4 nhân', '6 tháng', 'Thích hợp cho những ai muốn sử dụng một chiếc laptop có màn hình lớn. ', '<h3>Tốc độ xử lý ổn định, mượt mà</h3>\n<p><a href="http://tiki.vn/laptop/c8095/asus">Laptop Asus</a> X441SA-WX020D với bộ vi xử lý Intel Celeron N3060, kết hợp card đồ họa Intel HD Graphics mang đến tốc độ xử lý ổn định, mượt mà để giúp bạn có thể chạy đa nhiệm các ứng dụng cơ bản ở văn phòng, trường lớp, giải trí với xem phim, nghe nhạc, thiết kế đồ họa...</p>\n<p><img style="display: block; margin-left: auto; margin-right: auto;" title="Laptop Asus X441SA-WX020D" src="https://tikicdn.com/media/catalog/product/x/4/x441sa-wx020d_2.u579.d20161201.t183804.402150.jpg" alt="Laptop Asus X441SA-WX020D" width="750" height="476" /></p>\n<h3>Bộ nhớ RAM 4GB, ổ cứng 500GB</h3>\n<p>Được hỗ trợ với bộ nhớ RAM chuẩn DDR3L có dung lượng 4GB, ổ cứng HDD 500GB, <a href="https://tiki.vn/laptop/c8095">laptop</a> giúp bạn lưu trữ dữ liệu với khối lượng vừa phải, đáp ứng được nhu cầu của các bạn học sinh, sinh viên, nhân viên văn phòng.</p>\n<h3>Cổng kết nối tiện ích</h3>\n<p>Với các cổng như HDMI, <a href="http://tiki.vn/usb-luu-tru/c1828">USB</a>, Jăck 3.5mm, ... hỗ trợ bạn dễ dàng kết nối nhiều thiết bị ngoại vi cùng một lúc.</p>\n<p><img style="display: block; margin-left: auto; margin-right: auto;" title="Laptop Asus X441SA-WX020D" src="https://tikicdn.com/media/catalog/product/x/4/x441sa-wx020d_4.u579.d20161201.t183758.605682.jpg" alt="Laptop Asus X441SA-WX020D" width="750" height="686" /></p>\n<h3><a href="http://tiki.vn/ban-phim-may-tinh/c1830">Bàn phím</a> full size, touchpad cảm ứng đa điểm</h3>\n<p>Bàn phím Laptop Asus X441SA-WX020D được thiết kế full size, phím bấm êm, khoảng cách phím hợp lý kết hợp với touchpad cảm ứng đa điểm mang đến sự nhanh chóng và chính xác trong từng thao tác của bạn.</p>\n<h3>Công nghệ màn hình Glare HD</h3>\n<p>Laptop với màn hình sử dụng công nghệ Glare HD, kích thước 14 inches, cho phép hiển thị hình ảnh sắc nét, chi tiết, màu sắc trung thực và sống động hơn bao giờ hết.</p> ', 6);

-- --------------------------------------------------------

--
-- Table structure for table `truycap`
--

CREATE TABLE `truycap` (
  `id` int(11) NOT NULL,
  `truycap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `truycap`
--

INSERT INTO `truycap` (`id`, `truycap`) VALUES
(1, 49);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdh`
--
ALTER TABLE `chitietdh`
  ADD PRIMARY KEY (`MaDH`,`MaSP`),
  ADD KEY `nbh` (`MaSP`);

--
-- Indexes for table `ctphieunhap`
--
ALTER TABLE `ctphieunhap`
  ADD PRIMARY KEY (`MaSP`,`IdPN`),
  ADD KEY `vbn` (`IdPN`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDH`),
  ADD KEY `mndgg` (`MaND`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id_lienhe`);

--
-- Indexes for table `loaihang`
--
ALTER TABLE `loaihang`
  ADD PRIMARY KEY (`MaLoai`),
  ADD UNIQUE KEY `TenLoai` (`TenLoai`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaND`);

--
-- Indexes for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`ManhaCC`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD PRIMARY KEY (`IdPN`),
  ADD KEY `mnddd` (`ManhaCC`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `mncc` (`ManhaCC`),
  ADD KEY `fvb` (`MaLoai`);

--
-- Indexes for table `truycap`
--
ALTER TABLE `truycap`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietdh`
--
ALTER TABLE `chitietdh`
  MODIFY `MaSP` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=299;
--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `MaDH` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id_lienhe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `loaihang`
--
ALTER TABLE `loaihang`
  MODIFY `MaLoai` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `MaND` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `ManhaCC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `phieunhap`
--
ALTER TABLE `phieunhap`
  MODIFY `IdPN` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=299;
--
-- AUTO_INCREMENT for table `truycap`
--
ALTER TABLE `truycap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdh`
--
ALTER TABLE `chitietdh`
  ADD CONSTRAINT `ccca` FOREIGN KEY (`MaDH`) REFERENCES `donhang` (`MaDH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nbh` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON UPDATE CASCADE;

--
-- Constraints for table `ctphieunhap`
--
ALTER TABLE `ctphieunhap`
  ADD CONSTRAINT `ght` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `mndgg` FOREIGN KEY (`MaND`) REFERENCES `nguoidung` (`MaND`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD CONSTRAINT `phieunhap_ibfk_1` FOREIGN KEY (`ManhaCC`) REFERENCES `nhacungcap` (`ManhaCC`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`ManhaCC`) REFERENCES `nhacungcap` (`ManhaCC`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`MaLoai`) REFERENCES `loaihang` (`MaLoai`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
