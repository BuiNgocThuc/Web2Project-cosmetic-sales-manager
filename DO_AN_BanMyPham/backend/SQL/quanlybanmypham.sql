-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2023 at 10:20 AM
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
-- Database: `quanlybanmypham`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `USERNAME` varchar(10) NOT NULL,
  `PASSWORD` varchar(10) DEFAULT NULL,
  `ROLE_ID` varchar(10) DEFAULT NULL,
  `DATE_CREATE` date DEFAULT NULL,
  `STATUS` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`USERNAME`, `PASSWORD`, `ROLE_ID`, `DATE_CREATE`, `STATUS`) VALUES
('admin', '1111', '1', '2023-04-04', 'đang hoạt động'),
('KH1', '123', '0', '2023-04-01', 'đang hoạt động'),
('yuiv', 'uyvyu', '0', '2023-04-05', 'đang hoạt động');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `BRAND_ID` varchar(10) NOT NULL,
  `NAME_BRAND` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `IMG_BRAND` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `STATUS_BRAND` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`BRAND_ID`, `NAME_BRAND`, `IMG_BRAND`, `STATUS_BRAND`) VALUES
('brd1', 'Loreal', 'Loreal.png', 'đang hoạt động'),
('brd10', 'Shu Uemura', 'ShuUemura.png', 'đang hoạt động'),
('brd11', 'Vaseline', 'Vaseline.png', 'đang hoạt động'),
('brd12', 'Dove', 'Dove.png', 'đang hoạt động'),
('brd13', 'Clinique', 'Clinique.png', 'đang hoạt động'),
('brd2', 'Olay', 'Olay.png', 'đang hoạt động'),
('brd3', 'Clinique', 'Clinique.png', 'đang hoạt động'),
('brd4', 'Pond’s', 'Ponds.png', 'đang hoạt động'),
('brd5', 'Biore', 'Biore.png', 'đang hoạt động'),
('brd6', 'Laneige', 'Laneige.png', 'đang hoạt động'),
('brd7', 'La Roche-Posay', 'LaRoche-Posay.png', 'đang hoạt động'),
('brd8', 'Maybelline', 'Maybelline.png', 'đang hoạt động'),
('brd9', 'CathyDoll', 'CathyDoll.png', 'đang hoạt động');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `USER_ID` varchar(30) NOT NULL,
  `PRODUCT_ID` varchar(30) NOT NULL,
  `QUANTITY_IN_CART` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CATEGORY_ID` varchar(10) NOT NULL,
  `NAME_CAT` varchar(100) DEFAULT NULL,
  `STATUS_CAT` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CATEGORY_ID`, `NAME_CAT`, `STATUS_CAT`) VALUES
('cat1', 'Sửa rửa mặt', 'đang hoạt động'),
('cat10', 'Son thỏi', 'đang hoạt động'),
('cat11', 'Son bút chì', 'đang hoạt động'),
('cat12', 'Son dưỡng môi', 'đang hoạt động'),
('cat13', 'Dầu gội', 'đang hoạt động'),
('cat14', 'Dầu xã', 'đang hoạt động'),
('cat15', 'Thuốc nhuộm tóc', 'đang hoạt động'),
('cat2', 'Mặt nạ', 'đang hoạt động'),
('cat3', 'Xịt khoáng', 'đang hoạt động'),
('cat4', 'Chống nắng da mặt', 'đang hoạt động'),
('cat5', 'Kem nền', 'đang hoạt động'),
('cat6', 'Kem lót', 'đang hoạt động'),
('cat7', 'Phấn má hồng', 'đang hoạt động'),
('cat8', 'Kẻ chân mày', 'đang hoạt động'),
('cat9', 'Phấn mắt', 'đang hoạt động');

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `DISCOUNT_ID` varchar(10) NOT NULL,
  `NAME_DISCOUNT` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `CONDITION` varchar(50) DEFAULT NULL,
  `START_DATE` date DEFAULT NULL,
  `END_DATE` date DEFAULT NULL,
  `PERCENT` float DEFAULT NULL,
  `STATUS_DISCOUNT` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`DISCOUNT_ID`, `NAME_DISCOUNT`, `CONDITION`, `START_DATE`, `END_DATE`, `PERCENT`, `STATUS_DISCOUNT`) VALUES
('DC1', 'Giảm Giá Test', '1000000', '2023-03-01', '2023-07-07', 10, 'đang hoạt động'),
('DC2', 'Giảm Giá Valentine', '500000', '2023-04-01', '2023-12-07', 5, 'đang hoạt động'),
('DC3', 'Giảm Giá 8/3', '800000', '2023-01-01', '2023-09-07', 15, 'đang hoạt động'),
('DC4', 'Giảm Giá 20/10', '1000000', '2023-02-01', '2024-07-09', 20, 'đang hoạt động'),
('DC5', 'Giảm Giá BackToSchool', '1200000', '2022-12-01', '2024-01-07', 30, 'đang hoạt động');

-- --------------------------------------------------------

--
-- Table structure for table `export`
--

CREATE TABLE `export` (
  `EXPORT_ID` varchar(10) NOT NULL,
  `DISCOUNT_ID` varchar(10) DEFAULT NULL,
  `EMPLOYEE_ID` varchar(10) DEFAULT NULL,
  `CUSTOMER_ID` varchar(10) DEFAULT NULL,
  `DATE_CREATE` date DEFAULT NULL,
  `TOTAL` float DEFAULT NULL,
  `STATUS_EX` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `export_deatail`
--

CREATE TABLE `export_deatail` (
  `EXPORT_ID` varchar(10) NOT NULL,
  `PRODUCT_ID` varchar(10) NOT NULL,
  `UNIT_PRICE_EX` float DEFAULT NULL,
  `QUANTITY_EX` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `import`
--

CREATE TABLE `import` (
  `IMPORT_ID` varchar(10) NOT NULL,
  `PROVIDER_ID` varchar(10) DEFAULT NULL,
  `USER_ID` varchar(10) DEFAULT NULL,
  `DATE_CREATE` date DEFAULT NULL,
  `TOTAL` float DEFAULT NULL,
  `STATUS_IM` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `import_deatail`
--

CREATE TABLE `import_deatail` (
  `PRODUCT_ID` varchar(10) NOT NULL,
  `IMPORT_ID` varchar(10) NOT NULL,
  `UNIT_PRICE_IM` float DEFAULT NULL,
  `QUANTITY_IM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `PERMISSION_ID` varchar(10) NOT NULL,
  `NAME_PER` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `STATUS_PER` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `PRODUCT_ID` varchar(10) NOT NULL,
  `BRAND_ID` varchar(10) DEFAULT NULL,
  `CATEGORY_ID` varchar(10) DEFAULT NULL,
  `NAME_PRO` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `IMG_PRO` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `PRICE_PRO` float DEFAULT NULL,
  `QUANTITY_PRO` int(11) DEFAULT NULL,
  `STATUS_PRO` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`PRODUCT_ID`, `BRAND_ID`, `CATEGORY_ID`, `NAME_PRO`, `IMG_PRO`, `PRICE_PRO`, `QUANTITY_PRO`, `STATUS_PRO`) VALUES
('prd1', 'brd1', 'cat1', 'Sữa Rửa Mặt L\'Oreal Làm Sáng Da, Giảm Thâm Nám 100', 'Aura Perfect Milky Foam.jpg', 102000, 100, 'đang hoạt động'),
('prd10', 'brd7', 'cat4', 'Kem Chống Nắng La Roche-Posay Không Màu Kiểm Soát ', NULL, 174000, 100, 'đang hoạt động'),
('prd11', 'brd1', 'cat4', 'Kem Chống Nắng L\'Oreal Mịn Nhẹ Kiềm Dầu Thoáng Mịn', NULL, 223000, 100, 'đang hoạt động'),
('prd12', 'brd5', 'cat4', 'Gel Chống Nắng Bioré Màng Nước Dưỡng Ẩm SPF50+ PA+', NULL, 172000, 100, 'đang hoạt động'),
('prd13', 'brd6', 'cat4', 'Kem Chống Nắng Laneige Radian-C Dưỡng Sáng Da 50ml', NULL, 525000, 100, 'đang hoạt động'),
('prd14', 'brd8', 'cat5', 'Kem Nền Maybelline Mịn Nhẹ Kiềm Dầu Chống Nắng 30m', NULL, 209000, 100, 'đang hoạt động'),
('prd15', 'brd8', 'cat5', 'Phấn Nền Maybelline Mịn Nhẹ Kiềm Dầu Chống Nắng #1', NULL, 148000, 100, 'đang hoạt động'),
('prd16', 'brd1', 'cat5', 'Kem Nền L\'Oréal Mịn Nhẹ Dưỡng Da Dạng Lỏng G2 30ml', NULL, 262000, 100, 'đang hoạt động'),
('prd17', 'brd8', 'cat6', 'Kem Lót Trang Điểm Maybelline Baby Skin 22ml', NULL, 149000, 100, 'đang hoạt động'),
('prd18', 'brd1', 'cat6', 'Kem Lót L\'Oréal Infallible Kiềm Dầu Bền Màu Lâu Tr', NULL, 157000, 100, 'đang hoạt động'),
('prd19', 'brd8', 'cat7', 'Phấn Má Hồng Maybelline Màu Đỏ Rượu 50 Wine 4.5g', NULL, 110000, 100, 'đang hoạt động'),
('prd2', 'brd2', 'cat1', 'Sữa Rửa Mặt Olay Total Effects Tạo Bọt Ngừa Lão Ho', NULL, 134, 100, 'đang hoạt động'),
('prd20', 'brd9', 'cat8', 'Kẻ Mày Cathy Doll 3 Trong 1 #04 Gray Brown 0.16g +', NULL, 135000, 100, 'đang hoạt động'),
('prd21', 'brd9', 'cat7', 'Phấn Má Hồng Cathy Doll Mịn Lì 01 Buddy Beige 6g ', NULL, 149000, 100, 'đang hoạt động'),
('prd22', 'brd1', 'cat8', 'Kẻ Chân Mày L\'Oreal 3 Trong 1 Màu Nâu Tối Dark Bro', NULL, 217, 100, 'đang hoạt động'),
('prd23', 'brd8', 'cat9', 'Bút Kẻ Mắt Nước Maybelline Sắc Mảnh BK1 Đen Sắc Sả', NULL, 169000, 100, 'đang hoạt động'),
('prd24', 'brd1', 'cat9', 'Kẻ Mắt Nước Mắt Mèo L\'Oreal Màu Đen 9g', NULL, 213000, 100, 'đang hoạt động'),
('prd25', 'brd10', 'cat10', 'Son Lì Shu Uemura Matte OR570 Màu Đỏ Cam 3g', NULL, 575000, 100, 'đang hoạt động'),
('prd26', 'brd8', 'cat10', 'Son Lì Maybelline Mịn Môi Siêu Nhẹ 799 Cam Ngả Đất', NULL, 179000, 100, 'đang hoạt động'),
('prd27', 'brd9', 'cat10', 'Son Thỏi Cathy Doll Mịn Lì 10 Touch Coral 3.5g', NULL, 177000, 100, 'đang hoạt động'),
('prd28', 'brd10', 'cat10', 'Son Lì Shu Uemura Có Dưỡng Kinu Satin RD169 3.3g', NULL, 722000, 100, 'đang hoạt động'),
('prd29', 'brd8', 'cat11', 'Son Bút Chì Maybelline Màu Đỏ Cherry 50 Own You Im', NULL, 119000, 100, 'đang hoạt động'),
('prd3', 'brd3', 'cat1', 'Bọt Rửa Mặt Clinique Ngừa Mụn 125ml Anti Blemish S', NULL, 850, 100, 'đang hoạt động'),
('prd30', 'brd11', 'cat12', 'Sáp Dưỡng Môi Vaseline Hồng Xinh 7g', NULL, 64000, 100, 'đang hoạt động'),
('prd31', 'brd11', 'cat12', 'Sáp Dưỡng Ẩm Vaseline Pure Petroleum Jelly 49g', NULL, 41000, 100, 'đang hoạt động'),
('prd32', 'brd11', 'cat12', 'Son Dưỡng Môi Vaseline Chiết Xuất Lô Hội 4.8g', NULL, 70000, 100, 'đang hoạt động'),
('prd33', 'brd8', 'cat12', 'Son Dưỡng Chuyển Màu Maybelline Peach Blossom Màu ', NULL, 58000, 100, 'đang hoạt động'),
('prd34', 'brd12', 'cat13', 'Dầu Gội Dove Hỗ Trợ Phục Hồi Tóc Hư Tổn 880g', NULL, 179000, 100, 'đang hoạt động'),
('prd35', 'brd12', 'cat13', 'Dầu Gội Dove Chiết Xuất Hoa Sen Và Dầu Jojoba 500g', NULL, 136000, 100, 'đang hoạt động'),
('prd36', 'brd1', 'cat13', 'Dầu Gội L\'Oréal Paris Ngăn Gãy Rụng Tóc 620ml', NULL, 138000, 100, 'đang hoạt động'),
('prd37', 'brd5', 'cat13', 'Sữa Tắm - Gội - Rửa Mặt Men\'s Bioré Hương Nước Hoa', NULL, 186000, 100, 'đang hoạt động'),
('prd38', 'brd12', 'cat14', 'Kem Xả Dove Phục Hồi Hư Tổn Chiết Xuất Bơ & Dầu Ar', NULL, 136000, 100, 'đang hoạt động'),
('prd39', 'brd1', 'cat14', 'Dầu Xả L\'Oréal Paris Dưỡng Tóc Giảm Gãy Rụng 280ml', NULL, 106000, 100, 'đang hoạt động'),
('prd4', 'brd4', 'cat2', 'Mặt Nạ Pond\'s Tinh Chất Sữa Dưỡng Sáng, Nâng Tông ', NULL, 26, 100, 'đang hoạt động'),
('prd40', 'brd1', 'cat15', 'Kem Nhuộm L\'Oreal Dưỡng Tóc Sâu 6.11 Xám Khói 172m', NULL, 169000, 100, 'đang hoạt động'),
('prd5', 'brd1', 'cat2', 'Mặt Nạ Giấy Dưỡng Chất Cô Đặc L\'Oreal Dưỡng Sáng D', NULL, 32000, 100, 'đang hoạt động'),
('prd6', 'brd5', 'cat2', 'Miếng Dán Mũi Lột Mụn Bioré Không Hương (4 Miếng)', NULL, 23000, 100, 'đang hoạt động'),
('prd7', 'brd6', 'cat2', 'Mặt Nạ Ngủ Laneige Dưỡng Ẩm & Tăng Khả Năng Tự Vệ ', NULL, 599000, 100, 'đang hoạt động'),
('prd8', 'brd7', 'cat3', 'Bộ Sản Phẩm La Roche-Posay Phục Hồi Và Làm Dịu Da ', NULL, 292000, 100, 'đang hoạt động'),
('prd9', 'brd7', 'cat3', 'Bộ Đôi La Roche-Posay Chống Nắng Kiểm Soát Dầu & L', NULL, 469000, 100, 'đang hoạt động');

-- --------------------------------------------------------

--
-- Table structure for table `providers`
--

CREATE TABLE `providers` (
  `PROVIDER_ID` varchar(50) NOT NULL,
  `NAME_PROVIDER` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `PHONE_PROVIDER` varchar(15) DEFAULT NULL,
  `ADDRESS_PROVIDER` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `EMAIL_PROVIDER` varchar(100) DEFAULT NULL,
  `STATUS_PROVIDER` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `providers`
--

INSERT INTO `providers` (`PROVIDER_ID`, `NAME_PROVIDER`, `PHONE_PROVIDER`, `ADDRESS_PROVIDER`, `EMAIL_PROVIDER`, `STATUS_PROVIDER`) VALUES
('PRO1', 'Công ty mỹ phẩm Star', '0147852369', '1/2/3 An Dương Vương, quận 5, Hồ Chí Minh', 'stargroup@gmail.com', 'Hoạt Động'),
('PRO10', 'Công ty mỹ phẩm Tesla', '0987654321', '1/2/3 Nguyễn Trãi, quận Bình Thạnh, Hồ Chí Minh', 'teslagroup@gmail.com', 'Hoạt Động'),
('PRO2', 'Công ty mỹ phẩm Sun', '0258749613', '1/2/3 Lê Lợi, quận 1, Hồ Chí Minh', 'sungroup@gmail.com', 'Hoạt Động'),
('PRO3', 'Công ty mỹ phẩm Planet', '0478125963', '1/2/3 Bùi Viện, quận 1, Hồ Chí Minh', 'planetgroup@gmail.com', 'Hoạt Động'),
('PRO4', 'Công ty mỹ phẩm Apple', '0897456325', '1/2/3 Bà Hạt, quận 2, Hồ Chí Minh', 'applegroup@gmail.com', 'Hoạt Động'),
('PRO5', 'Công ty mỹ phẩm Messi', '0147852358', '1/2/3 Kinh Dương Vương, quận 2, Hồ Chí Minh', 'messigroup@gmail.com', 'Hoạt Động'),
('PRO6', 'Công ty mỹ phẩm Samsung', '0741852369', '1/2/3 Chu Văn An, quận 3, Hồ Chí Minh', 'samsunggroup@gmail.com', 'Hoạt Động'),
('PRO7', 'Công ty mỹ phẩm Microsoft', '0401780369', '1/2/3 Cao Thắng, quận 4, Hồ Chí Minh', 'microsoftgroup@gmail.com', 'Hoạt Động'),
('PRO8', 'Công ty mỹ phẩm Google', '0784512963', '1/2/3 Quang Trung, quận 5, Hồ Chí Minh', 'goolgegroup@gmail.com', 'Hoạt Động'),
('PRO9', 'Công ty mỹ phẩm Vingroup', '0808047528', '1/2/3 Nguyễn Kiệm, quận Gò Vấp, Hồ Chí Minh', 'vingroup@gmail.com', 'Hoạt Động');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `ROLE_ID` varchar(10) NOT NULL,
  `NAME_ROLE` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `DESCRIPTION_ROLE` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `STATUS_ROLE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`ROLE_ID`, `NAME_ROLE`, `DESCRIPTION_ROLE`, `STATUS_ROLE`) VALUES
('0', 'Khách Hàng', 'quyền khách hàng', ''),
('1', 'admin', 'toàn quyền', ''),
('2', 'quản lý', 'quản lý hệ thống', '');

-- --------------------------------------------------------

--
-- Table structure for table `role_permissions`
--

CREATE TABLE `role_permissions` (
  `ROLE_ID` varchar(10) NOT NULL,
  `PERMISSION_ID` varchar(30) NOT NULL,
  `URL` varchar(100) DEFAULT NULL,
  `ACTION` varchar(100) DEFAULT NULL,
  `STATUS` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `type_users`
--

CREATE TABLE `type_users` (
  `TYPE_USER_ID` varchar(10) NOT NULL,
  `NAME_TYPE_USER` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `STATUS_TYPE_USER` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type_users`
--

INSERT INTO `type_users` (`TYPE_USER_ID`, `NAME_TYPE_USER`, `STATUS_TYPE_USER`) VALUES
('admin', 'quản trị', 'hoạt động'),
('KH', 'Khách Hàng', 'Hoạt Động'),
('NB', 'Nội Bộ', 'Hoạt Động');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `USER_ID` varchar(20) NOT NULL,
  `TYPE_USER_ID` varchar(20) DEFAULT NULL,
  `NAME` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `PHONE` varchar(10) DEFAULT NULL,
  `ADDRESS` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `STATUS` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`USER_ID`, `TYPE_USER_ID`, `NAME`, `PHONE`, `ADDRESS`, `EMAIL`, `STATUS`) VALUES
('admin', 'admin', 'Bùi Ngọc Thức', '0874512369', '11/2/3 quang trung, gò vấp, Hồ Chí Minh', 'thuc111@gmail.com', 'hoạt động'),
('KH1', 'KH', 'Liễu Quốc Bảo', '0147852369', '1/7/4 Nguyễn Oanh, Gò Vấp, Hồ Chí Minh', 'Bao@gmail.com', 'Hoạt Động'),
('KH2', 'KH', 'Vương Phi Cường', '0125874963', '1/8/4 An Dương Vương, Quận 5, Hồ Chí Minh', 'Cuong@gmail.com', 'Hoạt Động'),
('KH3', 'KH', 'Bùi Ngọc Thức', '0178452369', '7/8/9 Quang Trung, Gò Vấp, Hồ Chí Minh', 'thuc@gmail.com', 'Hoạt Động\r\n'),
('KH4', 'KH', 'Mạc Dương Anh', '0457812369', '7/8/9 Phan Huy Ích, Gò Vấp, Hồ Chí Minh', 'anh@gmail.com', 'Hoạt Động\r\n'),
('KH5', 'KH', 'Hồ Thái Bình', '0897474012', '8/9/10 Tân Sơn, Gò Vấp, Hồ Chí Minh', 'binh@gmail.com', 'Hoạt Động\r\n'),
('KH6', 'KH', 'Ứng Hữu Chiến', '0874147852', '7/8/9 Cao Thắng, quận 5, Hồ Chí Minh', 'Chien@gmail.com', 'Hoạt Động\r\n'),
('KH7', 'KH', 'Tạ Trí Hữu', '0102413501', '7/8/9 Lý Chính Thắng, Phú Nhuận, Hồ Chí Minh', 'huu@gmail.com', 'Hoạt Động\r\n'),
('KH8', 'KH', 'Lâm Khôi Nguyên', '0365417820', '7/8/9 Hai Bà Trưng, Tân Bình, Hồ Chí Minh', 'nguyen@gmail.com', 'Hoạt Động\r\n'),
('NB1', 'NB', 'Bùi Ngọc Thức', '0254781025', '11/74/78 Phạm Văn Chiêu, Gò Vấp, Hồ Chí Minh', 'thucadmin@gmail.com', 'Hoạt Động'),
('NB2', 'NB', 'Bùi Ngọc Thức', '0147410258', '11/74/78 Phạm Văn Chiêu, Gò Vấp, Hồ Chí Minh', 'thucadmin@gmail.com', 'Hoạt Động'),
('NB3', 'NB', 'Nguyễn Ánh Hoa', '0989741408', '11/74/78 Phạm Văn Chiêu, Gò Vấp, Hồ Chí Minh', 'thucadmin@gmail.com', 'Hoạt Động'),
('NB4', 'NB', 'Nguyễn Anh Thảo', '0252014786', '11/74/78 Phạm Văn Chiêu, Gò Vấp, Hồ Chí Minh', 'thucadmin@gmail.com', 'Hoạt Động'),
('NB5', 'NB', 'Nguyễn Cẩm Yến', '0345123067', '11/74/78 Phạm Văn Chiêu, Gò Vấp, Hồ Chí Minh', 'thucadmin@gmail.com', 'Hoạt Động'),
('NB6', 'NB', 'Nguyễn Diễm Chi', '0254781025', '11/74/78 Phạm Văn Chiêu, Gò Vấp, Hồ Chí Minh', 'thucadmin@gmail.com', 'Hoạt Động'),
('NB7', 'NB', 'Huỳnh Hữu Bảo', '0254781025', '11/74/78 Phạm Văn Chiêu, Gò Vấp, Hồ Chí Minh', 'thucadmin@gmail.com', 'Hoạt Động'),
('NB8', 'NB', 'Huỳnh Huy Lâm', '0254781025', '11/74/78 Phạm Văn Chiêu, Gò Vấp, Hồ Chí Minh', 'thucadmin@gmail.com', 'Hoạt Động'),
('yuiv', 'KH', 'vbyv', 'null', 'null', 'yuiv', 'đang hoạt động');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`USERNAME`),
  ADD KEY `ROLE_ID` (`ROLE_ID`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`BRAND_ID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`USER_ID`,`PRODUCT_ID`),
  ADD KEY `PRODUCT_ID` (`PRODUCT_ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CATEGORY_ID`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`DISCOUNT_ID`);

--
-- Indexes for table `export`
--
ALTER TABLE `export`
  ADD PRIMARY KEY (`EXPORT_ID`),
  ADD KEY `EMPLOYEE_ID` (`EMPLOYEE_ID`),
  ADD KEY `CUSTOMER_ID` (`CUSTOMER_ID`),
  ADD KEY `DISCOUNT_ID` (`DISCOUNT_ID`);

--
-- Indexes for table `export_deatail`
--
ALTER TABLE `export_deatail`
  ADD PRIMARY KEY (`EXPORT_ID`,`PRODUCT_ID`),
  ADD KEY `PRODUCT_ID` (`PRODUCT_ID`);

--
-- Indexes for table `import`
--
ALTER TABLE `import`
  ADD PRIMARY KEY (`IMPORT_ID`),
  ADD KEY `PROVIDER_ID` (`PROVIDER_ID`),
  ADD KEY `USER_ID` (`USER_ID`);

--
-- Indexes for table `import_deatail`
--
ALTER TABLE `import_deatail`
  ADD PRIMARY KEY (`IMPORT_ID`,`PRODUCT_ID`),
  ADD KEY `PRODUCT_ID` (`PRODUCT_ID`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`PERMISSION_ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`PRODUCT_ID`),
  ADD KEY `CATEGORY_ID` (`CATEGORY_ID`),
  ADD KEY `BRAND_ID` (`BRAND_ID`);

--
-- Indexes for table `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`PROVIDER_ID`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ROLE_ID`);

--
-- Indexes for table `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD PRIMARY KEY (`ROLE_ID`,`PERMISSION_ID`),
  ADD KEY `PERMISSION_ID` (`PERMISSION_ID`);

--
-- Indexes for table `type_users`
--
ALTER TABLE `type_users`
  ADD PRIMARY KEY (`TYPE_USER_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`USER_ID`),
  ADD KEY `TYPE_USER_ID` (`TYPE_USER_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_ibfk_1` FOREIGN KEY (`USERNAME`) REFERENCES `users` (`USER_ID`),
  ADD CONSTRAINT `accounts_ibfk_2` FOREIGN KEY (`ROLE_ID`) REFERENCES `roles` (`ROLE_ID`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `users` (`USER_ID`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`PRODUCT_ID`) REFERENCES `products` (`PRODUCT_ID`);

--
-- Constraints for table `export`
--
ALTER TABLE `export`
  ADD CONSTRAINT `export_ibfk_1` FOREIGN KEY (`EMPLOYEE_ID`) REFERENCES `users` (`USER_ID`),
  ADD CONSTRAINT `export_ibfk_2` FOREIGN KEY (`CUSTOMER_ID`) REFERENCES `users` (`USER_ID`),
  ADD CONSTRAINT `export_ibfk_3` FOREIGN KEY (`DISCOUNT_ID`) REFERENCES `discounts` (`DISCOUNT_ID`);

--
-- Constraints for table `export_deatail`
--
ALTER TABLE `export_deatail`
  ADD CONSTRAINT `export_deatail_ibfk_1` FOREIGN KEY (`PRODUCT_ID`) REFERENCES `products` (`PRODUCT_ID`),
  ADD CONSTRAINT `export_deatail_ibfk_2` FOREIGN KEY (`EXPORT_ID`) REFERENCES `export` (`EXPORT_ID`);

--
-- Constraints for table `import`
--
ALTER TABLE `import`
  ADD CONSTRAINT `import_ibfk_1` FOREIGN KEY (`PROVIDER_ID`) REFERENCES `providers` (`PROVIDER_ID`),
  ADD CONSTRAINT `import_ibfk_2` FOREIGN KEY (`USER_ID`) REFERENCES `users` (`USER_ID`);

--
-- Constraints for table `import_deatail`
--
ALTER TABLE `import_deatail`
  ADD CONSTRAINT `import_deatail_ibfk_1` FOREIGN KEY (`PRODUCT_ID`) REFERENCES `products` (`PRODUCT_ID`),
  ADD CONSTRAINT `import_deatail_ibfk_2` FOREIGN KEY (`IMPORT_ID`) REFERENCES `import` (`IMPORT_ID`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`CATEGORY_ID`) REFERENCES `category` (`CATEGORY_ID`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`BRAND_ID`) REFERENCES `brands` (`BRAND_ID`);

--
-- Constraints for table `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD CONSTRAINT `role_permissions_ibfk_1` FOREIGN KEY (`ROLE_ID`) REFERENCES `roles` (`ROLE_ID`),
  ADD CONSTRAINT `role_permissions_ibfk_2` FOREIGN KEY (`PERMISSION_ID`) REFERENCES `permission` (`PERMISSION_ID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`TYPE_USER_ID`) REFERENCES `type_users` (`TYPE_USER_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
