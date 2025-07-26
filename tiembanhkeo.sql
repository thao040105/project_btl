-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2025 at 04:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiembanhkeo`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `id_pro` int(11) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `id_donhang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `user_name`, `id_pro`, `soluong`, `id_donhang`) VALUES
(1, 'thaoxinhgai', 51, 1, 1),
(2, 'thaoxinhgai', 2, 1, 2),
(3, 'thaoxinhgai', 1, 1, 3),
(4, 'thaoxinhgai', 10, 1, 3),
(5, 'thaoxinhgai', 36, 2, 3),
(6, 'thaoxinhgai', 50, 1, 9),
(7, 'thaoxinhgai', 52, 1, 10),
(8, 'thaoxinhgai', 36, 1, 10),
(9, 'thaoxinhgai', 5, 1, 11),
(10, 'thaoxinhgai', 35, 1, 12),
(11, 'thaoxinhgai', 21, 2, 12),
(12, 'thaoxinhgai', 21, 2, 13);

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id_donhang` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `hoten` varchar(100) DEFAULT NULL,
  `sdt` varchar(100) DEFAULT NULL,
  `diachi` varchar(100) DEFAULT NULL,
  `cuahang` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `ngaydat` datetime DEFAULT current_timestamp(),
  `tongtien` int(11) DEFAULT NULL,
  `trangthai` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id_donhang`, `user_name`, `hoten`, `sdt`, `diachi`, `cuahang`, `email`, `ngaydat`, `tongtien`, `trangthai`) VALUES
(2, 'thaoxinhgai', 'phan thảo', '0966583620', 'giao xuân -giao thủy- nam định', 'Gò Vấp', 'phanthao040105@gmail.com', '2025-06-08 17:22:46', 49000, 'Chờ xác nhận'),
(3, 'thaoxinhgai', 'Bùi Độ', '0966583620', 'thái bình', 'Gò Vấp', 'phanthao040105@gmail.com', '2025-06-09 16:09:51', 2370000, 'Đang vận chuyển'),
(9, 'thaoxinhgai', 'thương', '2424325235', 'Hà Tĩnh', 'Gò Vấp', 'phanthao040105@gmail.com', '2025-06-09 17:09:44', 640000, 'Hoàn thành'),
(10, 'thaoxinhgai', 'thương', '2424325235', 'Hà Tĩnh', 'Gò Vấp', 'phanthao040105@gmail.com', '2025-06-09 17:31:39', 1294000, 'Hoàn thành'),
(11, 'thaoxinhgai', 'phương', '0966583620', 'Quốc Oai', 'Gò Vấp', 'phanthao040105@gmail.com', '2025-06-09 17:46:59', 340000, 'Đang vận chuyển'),
(12, 'thaoxinhgai', 'phương', '0966583620', 'Quốc Oai', 'Hà Đông', 'phanthao040105@gmail.com', '2025-06-11 09:44:59', 1563000, 'Đang vận chuyển'),
(13, 'thaoxinhgai', 'phương', '0966583620', 'Quốc Oai', 'Gò Vấp', 'phanthao040105@gmail.com', '2025-06-11 13:26:06', 1656000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ttsp`
--

CREATE TABLE `ttsp` (
  `id` int(11) NOT NULL,
  `danhmuc` varchar(100) DEFAULT NULL,
  `tensp` varchar(100) DEFAULT NULL,
  `gia` int(11) DEFAULT NULL,
  `hinhanh` varchar(100) DEFAULT NULL,
  `mota` varchar(100) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ttsp`
--

INSERT INTO `ttsp` (`id`, `danhmuc`, `tensp`, `gia`, `hinhanh`, `mota`, `soluong`) VALUES
(1, 'TRÁI CÂY TƯƠI', '[Trái cây nhập khẩu] Cherry Đỏ Mỹ Nhiều', 900000, 'anh37.png', 'Bảo quản quả cherry đúng cách \r\nCherry là loại quả vô cùng đỏng đảnh, chỉ cần chênh lệch nhiệt độ mộ', 11),
(2, 'TRÁI CÂY TƯƠI', '[Trái cây nội địa VN] Mít Ruột Đỏ Tách Múi', 49000, 'anh49.png', 'Mít Ruột Đỏ - được trồng ở Cai Lậy \r\n\r\nTRỌNG LƯỢNG: 500g\r\n\r\nĐẶC ĐIỂM: múi mít to dày - khô ráo vị ng', 13),
(3, 'TRÁI CÂY TƯƠI', '[Trái cây nội địa VN] Sầu Riêng Musang King', 385000, 'anh50.jfif', 'Dòng: Sầu riêng Musang King\r\nĐặc điểm của sầu riêng musang king\r\nKhi đến mùa thu hoạch, trái sầu riê', 23),
(4, 'TRÁI CÂY TƯƠI', '[Trái cây nhập khẩu] Táo Rockit 4P New', 149000, 'anh51.png', 'Đặc điểm của Táo Rockit New Zealand\r\nĐây là dòng táo biến đổi gen và được lai với nhiều loại táo khá', 34),
(5, 'TRÁI CÂY TƯƠI', '[Trái cây nhập khẩu] Nho Xanh Úc(Kg)', 340000, 'anh52.png', 'Đặc điểm nho xanh Úc\r\nNho xanh không hạt Úc có trái to, ăn vào rất giòn và vị ngọt thanh. Nho rất nh', 32),
(6, 'TRÁI CÂY TƯƠI', '[Trái cây nhập khẩu] Hộp Việt Quất Mỹ 125g', 100000, 'anh53.png', 'Tìm hiểu chung về Việt quất Mỹ\r\nQuả Việt Quất hay còn gọi là Blueberry là một loại quả có rất nhiều ', 55),
(7, 'TRÁI CÂY TƯƠI', '[Trái cây nhập khẩu] Sầu Riêng Musang King', 590000, 'anh54.jfif', 'Đặc điểm của sầu riêng  Musang King\r\nSầu riêng Musang King của Malaysia được thu hoạch hoàn toàn từ ', 545),
(8, 'TRÁI CÂY TƯƠI', '[Trái cây nhập khẩu] Kiwi Vàng New Zealand', 249000, 'anh55.png', 'Đặc điểm Kiwi New Zealand\r\nSo sánh với Kiwi màu xanh thường thấy, Kiwi vàng của New Zealand có  đài ', 422),
(9, 'KẸO', 'Kẹo Dẻo Trái Cây Welchs Mỹ (Đủ Size - Đủ Vị)', 8000, 'anh87.png', 'Kẹo dẻo trái cây Welch được làm từ 100% nước ép trái cây tươi tự nhiên (dâu tây, nho, cam, cherry) v', 43),
(10, 'KẸO', 'Kẹo Dẻo Gấu Black Forest Gummy Bear Mỹ', 12000, 'anh88.png', 'Kẹo Gummy Bear Black Forest\r\nLà một loại kẹo dẻo nổi tiếng với hình dáng chú gấu dễ thương và hương ', 34),
(11, 'KẸO', 'Kẹo Dẻo Trolli Pop Eye 18.8g Đức Thú Vị', 17500, 'anh89.jpg', 'Kẹo dẻo Pop Eye Trolli\r\nĐến từ thương hiệu kẹo dẻo Trolli nổi tiếng của Đức, với thiết kế lạ mắt gây', 64),
(12, 'KẸO', 'Kẹo Nhẫn Ring Pop 14g', 20000, 'anh90.png', 'MUA 1 TẶNG 1!\r\n_Viên kẹo nổi tiếng đã từ lâu nhưng gần đây \"dậy sóng\" trở lại .Viên bánh \"kim cương\"', 45),
(13, 'KẸO', 'Singum Extra Mỹ 15 Tép', 38000, 'anh96.jpg', 'Đặc Điểm Chính\r\nHương Vị:\r\nHương Bạc Hà (Peppermint): Mùi hương the mát, sảng khoái, giúp hơi thở th', 46),
(14, 'KẸO', 'Kẹo Mút Trái Cây Chống Sâu Răng Fujiya', 62000, 'anh91.jpg', 'Kẹo mút trái cây Fujiya Pop Candy 21 cái được đóng gói thành từng thanh kẹo cứng nhỏ gọn xinh xắn vớ', 65),
(15, 'KẸO', 'Hộp Kẹo Cà Phê Pamiriter Đài Loan Nhiều Vị', 145000, 'anh95.jfif', 'Hộp kẹo cà phê Pamiriter\r\nLà sự kết hợp tuyệt vời giữa hương vị cà phê đậm đà và sự ngọt ngào của kẹ', 42),
(16, 'KẸO', 'Kẹo Hộp Thiếc C&H Đức 200g (Đủ Vị)', 69000, 'anh97.png', 'GIỚI THIỆU SẢN PHẨM\r\n\r\nC&H là thương hiệu cao cấp về bánh kẹo của nước Đức. Kẹo được làm từ nước ép ', 24),
(17, 'TẾT CỔ TRUYỀN', 'Giỏ Quà Hamper Tết Deluxe 3 - Quà Tết Đặc Biệt', 828000, 'anh99.png', 'GIỎ QUÀ TẾT DELUXE 3 GỒM:\r\n1. Sanchi Đậu Chill - Đậu mộc lan hoa hồng khói\r\n2. Cà Phê Hòa Tan Nguyên', 35),
(18, 'TẾT TRUNG THU', 'Bánh Cuộn Trứng Bản Giới Hạn Nhập Khẩu', 560000, 'anh1.2.png', 'Mô tả:\r\n\r\nChất liệu: Bánh nướng, bánh dẻo, bánh trung thu nhân xá xíu, hạt sen, đậu xanh, trứng muối', 24),
(19, 'TẾT CỔ TRUYỀN', 'Hộp Quà Tết Treasure 1 - Món Quà Tết Sang', 603000, 'anh45.png', 'Xuất thân từ thương hiệu cung cấp bánh kẹo nhập khẩu, từ năm 2016, Vitamin House vẫn không ngừng phá', 24),
(21, 'TẾT CỔ TRUYỀN', 'Hộp Quà Tết Elegance 2 - Quà Tết Cao Cấp', 828000, 'anh104.jpg', 'Vitamin House - Chuỗi cửa hàng cung cấp sỉ lẻ bánh nhập khẩu\r\nXuất thân từ thương hiệu cung cấp bánh', 24),
(22, 'TẾT CỔ TRUYỀN', 'Hộp Quà Tết Savory 2 - Món Quà Tết Đặc Sắc', 1390000, 'anh106.jpg', 'Vitamin House - Chuỗi cửa hàng cung cấp sỉ lẻ bánh nhập khẩu\r\nXuất thân từ thương hiệu cung cấp bánh', 24),
(23, 'TẾT CỔ TRUYỀN', 'Giỏ Quà Tết Elegance 12 - Bánh Kẹo Cao Cấp', 1241000, 'anh102.png', 'Vitamin House - Chuỗi cửa hàng cung cấp sỉ lẻ bánh nhập khẩu\r\nXuất thân từ thương hiệu cung cấp bánh', 43),
(24, 'TẾT CỔ TRUYỀN', 'Hộp Quà Tết Organic 1 - Quà Tết Cao Cấp ', 1223000, 'anh104.jpg', 'Vitamin House - Chuỗi cửa hàng cung cấp sỉ lẻ bánh nhập khẩu\r\nXuất thân từ thương hiệu cung cấp bánh', 35),
(25, 'TẾT CỔ TRUYỀN', 'Hộp Quà Tết Organic 1 - Quà Tết Cao Cấp', 1223000, 'anh105.jpg', 'Vitamin House - Chuỗi cửa hàng cung cấp sỉ lẻ bánh nhập khẩu\r\nXuất thân từ thương hiệu cung cấp bánh', 35),
(26, 'TẾT CỔ TRUYỀN', 'Hộp Quà Tết Elegance 10 - Món Quà Cao', 1122000, 'anh107.jpg', 'Vitamin House - Chuỗi cửa hàng cung cấp sỉ lẻ bánh nhập khẩu\r\nXuất thân từ thương hiệu cung cấp bánh', 53),
(27, 'TẾT TRUNG THU', 'Bánh Trung Thu Nhập Khẩu Meixin', 1230000, 'anh1.3.png', 'Chất liệu: Bánh nướng, bánh dẻo, bánh trung thu nhân xá xíu, hạt sen, đậu xanh, trứng muối.\r\nThiết k', 32),
(28, 'TẾT TRUNG THU', 'Bánh Trung Thu Nhập Khẩu Meixin', 990000, 'anh1.4.png', 'Chất liệu: Bánh nướng, bánh dẻo, bánh trung thu nhân xá xíu, hạt sen, đậu xanh, trứng muối.\r\nThiết k', 53),
(29, 'TẾT TRUNG THU', 'Bánh Trung Thu Nhập Khẩu Meixin', 890000, 'anh1.5.jpg', 'Bánh Trung Thu Nhập Khẩu Meixin HongKong Hạt Sen 2 Trứng Ít Đường                                   ', 43),
(30, 'TẾT TRUNG THU', 'Bánh Trung Thu Nhập Khẩu Meixin', 799000, 'anh1.6.png', 'Bánh Trung Thu Nhập Khẩu Meixin HongKong MINION Hạt Sen Trứng Muối                                  ', 13),
(31, 'TẾT TRUNG THU', 'Bánh Trung Thu Nhập Khẩu Meixin', 900000, 'anh1.7.png', 'Bánh Trung Thu Nhập Khẩu Meixin HongKong Sầu Riêng Thượng Hạng                                      ', 42),
(32, 'TẾT TRUNG THU', 'Bánh Trung Thu Trứng Chảy Pamiriter Đài', 110000, 'anh1.8.png', 'Bánh Trung Thu Trứng Muối Chảy Pamiriter Đài Loan\r\nLà một món ngọt đặc trưng, mang đậm hương vị truy', 24),
(33, 'TẾT TRUNG THU', 'Bánh Trung Thu Nhập Khẩu Meixin HongKong', 2100000, 'anh1.9.png', 'Chất liệu: Bánh nướng, bánh dẻo, bánh trung thu nhân xá xíu, hạt sen, đậu xanh, trứng muối.\r\nThiết k', 54),
(34, 'NGÀY 8/3', 'SET QUÀ THƠM 9', 848000, 'anh108.webp', '', 24),
(35, 'NGÀY 8/3', 'SET QUÀ THƠM 8', 735000, 'anh109.webp', '', 24),
(36, 'NGÀY 8/3', 'SET QUÀ THƠM 7', 729000, 'anh110.webp', '', 23),
(37, 'NGÀY 8/3', 'SET QUÀ THƠM 6', 619000, 'anh111.webp', '', 24),
(38, 'NGÀY 8/3', 'SET QUÀ THƠM 5', 589000, 'anh112.webp', '', 54),
(39, 'NGÀY 8/3', 'SET QUÀ THƠM 4', 584000, 'anh113.webp', '', 12),
(40, 'NGÀY 8/3', 'SET QUÀ THƠM 3', 574000, 'anh114.webp', '', 35),
(41, 'NGÀY 8/3', 'SET QUÀ THƠM 2', 524000, 'anh115.webp', '', 35),
(42, 'NGÀY 1/6', 'Set Lớn Thiếu Nhi 4', 594000, 'anh2.3.png', 'Bánh Bông Lan Gấu Vị ĐàoSakanao Gói 200g\r\nBánh Que Tivoli Vị Dâu Thái Gói 20g\r\nKẹo Dẻo Phũ Đường Pep', 35),
(43, 'NGÀY 1/6', 'Set Lớn Thiếu Nhi 3', 819000, 'anh2.4.png', 'Bánh Bông Lan Gấu Vị ĐàoSakanao Gói 200g\r\nHộp Kẹo Playmore Ice Berry 22g\r\nKẹo The Vị Đào Sakura Play', 34),
(44, 'NGÀY 1/6', 'Túi Thiếu Nhi 2', 267000, 'anh2.5.png', 'Kẹo Mềm Trái Cây Cầu Vồng Nerds Rainbow Mỹ Hộp 141g\r\nkẹo dẻo haribo goldbears hộp 150gr\r\nBánh Que Ch', 46),
(45, 'NGÀY 1/6', 'Hộp Thiếu Nhi 2', 198000, 'anh2.6.png', 'Bánh Quy Gấu Vị Dâu Hello Panda Nhật Hộp 50g (Hồng)\r\nSữa Dâu Binggrae HQ Hộp 200ml\r\nBánh Que Chấm Dâ', 46),
(46, 'NGÀY 1/6', 'Bó Hoa Bánh Kẹo 4', 85000, 'anh2.7.png', 'Bánh Quy Trứng Nhỏ Mix Màu ĐL Hộp Hình Gấu 100g\r\nPhụ Kiện', 46),
(47, 'NGÀY 1/6', 'Bó Hoa Bánh Kẹo 2', 79000, 'anh2.8.png', 'Kẹo Mút Chupa Chups Đức (Mã Chung)\r\nPhụ Kiện', 46),
(48, 'NGÀY 1/6', 'Bó Hoa Bánh Kẹo 1', 70000, 'anh2.9.png', 'Kẹo Trolli Mini Burger 10g (nhỏ)\r\nPhụ Kiên', 63),
(49, 'NGÀY 1/6', 'Bộ Quà Thiếu Nhi 7', 66000, 'anh4.1.png', 'Bánh Que Tivoli Vị Socola Thái Gói 20g\r\nBánh Xốp Magic Thái Vị Choco Gói 15g\r\nBánh Quy Gấu Nhân Dâu ', 24),
(50, 'NGÀY 20/11', 'Quà Tặng 20/10 Hộp Quà Thơm Gói Vải Xinh Xắn', 640000, 'anh16.jpg', 'Quà Tặng 20/10 Hộp Quà Thơm Gói Vải Xinh Xắn gồm:\r\nHộp Kraft Nhật Dài 25x20x7\r\nKem Dưỡng Thể Tesori ', 46),
(51, 'NGÀY 20/11', 'Quà tặng 20/10 Giỏ Quà Sức Khỏe Tặng Đồng', 475000, 'anh17.jpg', 'Quà tặng 20/10 Giỏ Quà Sức Khỏe gồm:\r\nHạt chia hữu cơ - Aztec Organics 100gr\r\nHộp Chocolate Trắng Be', 46),
(52, 'NGÀY 20/11', 'Quà tặng 20/10 Hộp Nến Thơm Và Trà Tặng Mẹ', 565000, 'anh18.jpg', 'Quà tặng 20/10 Hộp Nến Thơm Và Trà gồm:\r\nHộp Carton Chấm Cam gấp xếp (28x28 nắp Supo) 2023\r\nTúi Giấy', 86),
(53, 'NGÀY 20/11', 'Quà Tặng 20/10 Hộp Starbuck Có Ly Tặng Người', 281000, 'anh19.jpg', 'Vitamin House - Chuỗi cửa hàng cung cấp sỉ lẻ bánh nhập khẩu\r\nXuất thân từ thương hiệu cung cấp bánh', 54),
(54, 'NGÀY 20/11', 'Quà tặng 20/10 Túi Trendy với Socola, Trà Và Trái', 699000, 'anh84.jpg', 'Quà tặng 20/10 Túi Trendy với Socola, Trà Và Trái Cây Sấy gồm:\r\nTúi Nhựa Trong Hoa Daisy Quai Da Màu', 56),
(55, 'NGÀY 20/11', 'Quà Tặng 20/10 Túi Trong Xinh Xắn Tặng ', 319000, 'anh77.jpg', 'Quà Tặng 20/10 Túi Trong Xinh Xắn gồm:\r\nTúi Nhựa Trong Quai Ngọc Trai\r\nMiele Mật ong gừng & giấm táo', 46),
(56, 'NGÀY 20/11', 'Quà Tặng 20/10 Hộp Trà Hạt Chia Kèm Ly Thay Lời', 425000, 'anh80.jpg', 'Quà Tặng 20/10 Hộp Trà Hạt Chia Kèm Ly gồm:\r\nBình đựng nước thủy tinh\r\nHạt chia hữu cơ - Aztec Organ', 57),
(57, 'NGÀY 20/11', 'Quà tặng 20/10 Hộp Gỗ Gu Cà Phê & Phin Tặng', 575000, 'anh82.jpg', 'Quà tặng 20/10 Hộp Gỗ Gu Cà Phê & Phin gồm:\r\nHạt Điều Vị Cappucino Hộp 200g\r\nCà phê premium HAPII co', 67),
(58, 'TẾT TRUNG THU', 'Bánh Trung Thu Nhập Khẩu Meixin HongKong Hạt', 1200000, 'anh1.10.png', 'Chất liệu: Bánh nướng, bánh dẻo, bánh trung thu nhân xá xíu, hạt sen, đậu xanh, trứng muối.\r\nThiết k', 24);

-- --------------------------------------------------------

--
-- Table structure for table `user_inf`
--

CREATE TABLE `user_inf` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_inf`
--

INSERT INTO `user_inf` (`id_user`, `username`, `pass`, `email`) VALUES
(1, 'thaoxinhgai', '040105', 'phanthao040105@gmail.com'),
(2, 'Thương', '12', 'phanthao040105@gmail.com'),
(3, 'Phương', '123', 'tranducson2134@gmail.com'),
(4, 'Anh Tuấn', '3003', 'phanthao040105@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_donhang`);

--
-- Indexes for table `ttsp`
--
ALTER TABLE `ttsp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_inf`
--
ALTER TABLE `user_inf`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ttsp`
--
ALTER TABLE `ttsp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `user_inf`
--
ALTER TABLE `user_inf`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
