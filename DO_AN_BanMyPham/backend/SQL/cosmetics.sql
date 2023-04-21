-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2023 at 01:14 AM
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
-- Database: `cosmetics`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `ACCOUNT_ID` int(11) NOT NULL,
  `USERNAME` varchar(10) NOT NULL,
  `PASSWORD` varchar(10) DEFAULT NULL,
  `ROLE_ID` varchar(10) DEFAULT NULL,
  `DATE_CREATE` date DEFAULT NULL,
  `STATUS` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`ACCOUNT_ID`, `USERNAME`, `PASSWORD`, `ROLE_ID`, `DATE_CREATE`, `STATUS`) VALUES
(1, 'admin', '1111', '1', '2023-04-04', 'đang hoạt động'),
(2, 'KH1', '123', '0', '2023-04-01', 'đang hoạt động'),
(8, 'NV1', '123', '3', '2023-04-15', 'đang hoạt động'),
(9, 'NVBaoBui', '0123456789', '4', '2023-04-15', 'đang hoạt động'),
(10, 'NV001', '1234567890', '5', '2023-04-16', 'đang hoạt động');

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
('brd1', 'mới', 'Loreal.png', 'đã xóa'),
('brd10', 'moiws', 'ShuUemura.png', 'đang hoạt động'),
('brd11', 'Vaseline', 'Vaseline.png', 'đang hoạt động'),
('brd12', 'Dove', 'Dove.png', 'đang hoạt động'),
('brd13', 'Clinique', 'Clinique.png', 'đang hoạt động'),
('brd14', 'tạm', 'csrgdtsgt.png', 'đang hoạt động'),
('brd15', 'mới', '', 'đã xóa'),
('brd16', 'mới', '', 'đang hoạt động'),
('brd17', 'mới', '', 'đang hoạt động'),
('brd18', 'thương hiệu A', '', 'đang hoạt động'),
('brd19', 'thương hiệu A', 'product.png', 'đang hoạt động'),
('brd2', 'Olay', 'Olay.png', 'đang hoạt động'),
('brd20', 'thương hiệu B', '11.png', 'đang hoạt động'),
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
  `PRODUCT_ID` int(11) NOT NULL,
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
('cat16', '', 'đã xóa'),
('cat17', 'danh mục A', 'đang hoạt động'),
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
('5', '', '1000', '2023-04-19', '2023-04-28', 13, 'đang hoạt động'),
('6', 'khuyến mại A', '2000000', '2023-04-20', '2023-04-27', 20, 'đang hoạt động'),
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

--
-- Dumping data for table `export`
--

INSERT INTO `export` (`EXPORT_ID`, `DISCOUNT_ID`, `EMPLOYEE_ID`, `CUSTOMER_ID`, `DATE_CREATE`, `TOTAL`, `STATUS_EX`) VALUES
('EX1', 'DC1', 'NV1', 'KH1', '2023-04-05', 0, 'hoàn thành'),
('EX2', 'DC2', 'NV3', 'KH3', '2019-04-02', 0, 'hoàn thành'),
('EX3', 'DC2', 'NV4', 'KH6', '2023-02-10', 0, 'hoàn thành'),
('EX4', 'DC3', 'NV5', 'KH4', '2023-03-10', 0, 'hoàn thành'),
('EX5', 'DC5', 'NV7', 'KH2', '2023-03-15', 0, 'hoàn thành'),
('EX6', 'DC1', 'NV6', 'KH5', '2023-03-18', 0, 'hoàn thành'),
('EX7', 'DC2', 'NV4', 'KH7', '2023-02-10', 0, 'hoàn thành');

-- --------------------------------------------------------

--
-- Table structure for table `export_detail`
--

CREATE TABLE `export_detail` (
  `EXPORT_ID` varchar(10) NOT NULL,
  `PRODUCT_ID` int(11) NOT NULL,
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
  `TOTAL` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `import`
--

INSERT INTO `import` (`IMPORT_ID`, `PROVIDER_ID`, `USER_ID`, `DATE_CREATE`, `TOTAL`) VALUES
('IM1', 'PRO1', 'NV3', '2023-03-06', 32500000),
('IM2', 'PRO2', 'NV4', '2023-03-16', 30000000),
('IM3', 'PRO3', 'NV5', '2023-02-16', 40000000),
('IM4', 'PRO4', 'NV6', '2023-03-18', 55000000),
('IM5', 'PRO5', 'NV7', '2023-03-20', 25000000),
('IM6', 'PRO6', 'NV8', '2023-02-20', 27500000),
('IM7', 'PRO1', 'NV1', '2023-01-16', 35000000);

-- --------------------------------------------------------

--
-- Table structure for table `import_detail`
--

CREATE TABLE `import_detail` (
  `PRODUCT_ID` int(11) NOT NULL,
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
  `STATUS_PER` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `CREATE_PER` tinyint(1) NOT NULL,
  `UPDATE_PER` tinyint(1) NOT NULL,
  `DELETE_PER` tinyint(1) NOT NULL,
  `ACCESS_PER` tinyint(1) NOT NULL,
  `CONTROL_PER` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`PERMISSION_ID`, `NAME_PER`, `STATUS_PER`, `CREATE_PER`, `UPDATE_PER`, `DELETE_PER`, `ACCESS_PER`, `CONTROL_PER`) VALUES
('1', 'PRODUCT', 'đang hoạt động', 0, 1, 0, 0, 0),
('10', 'CONTROL SLIDESHOW', 'đang hoạt động', 0, 0, 0, 0, 1),
('11', 'DECENTRALIZATION', 'đang hoạt động', 1, 1, 1, 0, 0),
('12', 'IMPORT RECEIPT', 'đang hoạt động', 1, 1, 0, 1, 0),
('13', 'PERMISSION', 'đang hoạt động', 1, 1, 1, 0, 0),
('14', 'ALL', 'đang hoạt động', 0, 0, 0, 0, 1),
('15', 'ửgergterg', 'đang hoạt động', 1, 1, 0, 0, 0),
('2', 'BRAND', 'đang hoạt động', 1, 1, 1, 0, 0),
('3', 'CATEGORY', 'đang hoạt động', 1, 1, 1, 0, 0),
('4', 'PROVIDER', 'đang hoạt động', 1, 1, 1, 0, 0),
('5', 'EXPORT RECEIPT', 'đang hoạt động', 0, 0, 0, 1, 0),
('6', 'USER', 'đang hoạt động', 1, 1, 1, 0, 0),
('7', 'TYPE USER', 'đang hoạt động', 1, 1, 1, 0, 0),
('8', 'DISCOUNT', 'đang hoạt động', 1, 1, 1, 0, 0),
('9', 'STATISTIC', 'đang hoạt động', 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `PRODUCT_ID` int(11) NOT NULL,
  `BRAND_ID` varchar(10) DEFAULT NULL,
  `CATEGORY_ID` varchar(10) DEFAULT NULL,
  `NAME_PRO` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `IMG_PRO` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `PRICE_PRO` float DEFAULT NULL,
  `QUANTITY_PRO` int(11) DEFAULT NULL,
  `ORIGIN_PRO` varchar(50) NOT NULL,
  `SLIDESHOW` tinyint(1) NOT NULL DEFAULT 0,
  `NEW_ARRIVALS` tinyint(1) NOT NULL,
  `STATUS_PRO` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`PRODUCT_ID`, `BRAND_ID`, `CATEGORY_ID`, `NAME_PRO`, `IMG_PRO`, `PRICE_PRO`, `QUANTITY_PRO`, `ORIGIN_PRO`, `SLIDESHOW`, `NEW_ARRIVALS`, `STATUS_PRO`) VALUES
(1, 'brd1', 'cat1', 'Sữa Rửa Mặt L\'Oreal Làm Sáng Da, Giảm Thâm Nám 100', 'imgproduct_1.jpg', 102000, 100, 'Mỹ', 1, 1, 'đang hoạt động'),
(2, 'brd2', 'cat1', 'Sữa Rửa Mặt Olay Total Effects Tạo Bọt Ngừa Lão Ho', 'imgproduct_2.jpg', 134000, 100, 'Trung Quốc', 1, 0, 'đang hoạt động'),
(3, 'brd3', 'cat1', 'Bọt Rửa Mặt Clinique Ngừa Mụn 125ml Anti Blemish S', 'imgproduct_3.jpg', 250000, 100, 'Mỹ', 1, 1, 'đang hoạt động'),
(4, 'brd4', 'cat2', 'Mặt Nạ Pond\'s Tinh Chất Sữa Dưỡng Sáng, Nâng Tông ', 'imgproduct_4.jpg', 26000, 100, 'Việt Nam', 1, 0, 'đang hoạt động'),
(5, 'brd1', 'cat2', 'Mặt Nạ Giấy Dưỡng Chất Cô Đặc L\'Oreal Dưỡng Sáng D', 'imgproduct_5.jpg', 32000, 100, 'Mỹ', 1, 1, 'đang hoạt động'),
(6, 'brd5', 'cat2', 'Miếng Dán Mũi Lột Mụn Bioré Không Hương (4 Miếng)', 'imgproduct_6.jpg', 23000, 100, 'Việt Nam', 1, 1, 'đang hoạt động'),
(7, 'brd6', 'cat2', 'Mặt Nạ Ngủ Laneige Dưỡng Ẩm & Tăng Khả Năng Tự Vệ ', 'imgproduct_7.jpg', 750000, 100, 'Hàn Quốc', 1, 0, 'đang hoạt động'),
(8, 'brd7', 'cat3', 'Bộ Sản Phẩm La Roche-Posay Phục Hồi Và Làm Dịu Da ', 'imgproduct_8.jpg', 292000, 100, 'Pháp', 1, 1, 'đang hoạt động'),
(9, 'brd7', 'cat3', 'Bộ Đôi La Roche-Posay Chống Nắng Kiểm Soát Dầu & L', 'imgproduct_9.jpg', 469000, 100, 'Pháp', 1, 1, 'đang hoạt động'),
(10, 'brd7', 'cat4', 'Kem Chống Nắng La Roche-Posay Không Màu Kiểm Soát ', 'imgproduct_10.jpg', 174000, 100, 'Pháp', 1, 0, 'đang hoạt động'),
(11, 'brd1', 'cat4', 'Kem Chống Nắng L\'Oreal Mịn Nhẹ Kiềm Dầu Thoáng Mịn', 'imgproduct_11.jpg', 223000, 100, 'Mỹ', 1, 0, 'đang hoạt động'),
(12, 'brd5', 'cat4', 'Gel Chống Nắng Bioré Màng Nước Dưỡng Ẩm SPF50+ PA+', 'imgproduct_12.jpg', 172000, 100, 'Việt Nam', 1, 1, 'đang hoạt động'),
(13, 'brd6', 'cat4', 'Kem Chống Nắng Laneige Radian-C Dưỡng Sáng Da 50ml', 'imgproduct_13.jpg', 525000, 100, 'Hàn Quốc', 1, 1, 'đang hoạt động'),
(14, 'brd8', 'cat5', 'Kem Nền Maybelline Mịn Nhẹ Kiềm Dầu Chống Nắng 30m', 'imgproduct_14.jpg', 209000, 100, 'Trung Quốc', 1, 1, 'đang hoạt động'),
(15, 'brd8', 'cat5', 'Phấn Nền Maybelline Mịn Nhẹ Kiềm Dầu Chống Nắng #1', 'imgproduct_15.jpg', 148000, 100, 'Trung Quốc', 0, 1, 'đang hoạt động'),
(16, 'brd1', 'cat5', 'Kem Nền L\'Oréal Mịn Nhẹ Dưỡng Da Dạng Lỏng G2 30ml', 'imgproduct_16.jpg', 262000, 100, 'Việt Nam', 0, 0, 'đang hoạt động'),
(17, 'brd8', 'cat6', 'Kem Lót Trang Điểm Maybelline Baby Skin 22ml', 'imgproduct_17.jpg', 149000, 100, 'Trung Quốc', 0, 0, 'đang hoạt động'),
(18, 'brd1', 'cat6', 'Kem Lót L\'Oréal Infallible Kiềm Dầu Bền Màu Lâu Tr', 'imgproduct_18.jpg', 157000, 100, 'Việt Nam', 0, 0, 'đang hoạt động'),
(19, 'brd8', 'cat7', 'Phấn Má Hồng Maybelline Màu Đỏ Rượu 50 Wine 4.5g', 'imgproduct_19.jpg', 110000, 100, 'Nhật', 0, 0, 'đang hoạt động'),
(20, 'brd9', 'cat8', 'Kẻ Mày Cathy Doll 3 Trong 1 #04 Gray Brown 0.16g +', 'imgproduct_20.jpg', 135000, 100, 'Thailand', 0, 0, 'đang hoạt động'),
(21, 'brd9', 'cat7', 'Phấn Má Hồng Cathy Doll Mịn Lì 01 Buddy Beige 6g ', 'imgproduct_21.jpg', 149000, 100, 'Thailand', 0, 0, 'đang hoạt động'),
(22, 'brd1', 'cat8', 'Kẻ Chân Mày L\'Oreal 3 Trong 1 Màu Nâu Tối Dark Bro', 'imgproduct_22.jpg', 217000, 100, 'Pháp', 0, 0, 'đang hoạt động'),
(23, 'brd8', 'cat9', 'Bút Kẻ Mắt Nước Maybelline Sắc Mảnh BK1 Đen Sắc Sả', 'imgproduct_23.jpg', 169000, 100, 'Mỹ', 0, 1, 'đang hoạt động'),
(24, 'brd1', 'cat9', 'Kẻ Mắt Nước Mắt Mèo L\'Oreal Màu Đen 9g', 'imgproduct_24.jpg', 213000, 100, 'Pháp', 0, 1, 'đang hoạt động'),
(25, 'brd10', 'cat10', 'Son Lì Shu Uemura Matte OR570 Màu Đỏ Cam 3g', 'imgproduct_25.jpg', 575000, 100, 'Nhật', 0, 0, 'đang hoạt động'),
(26, 'brd8', 'cat10', 'Son Lì Maybelline Mịn Môi Siêu Nhẹ 799 Cam Ngả Đất', 'imgproduct_26.jpg', 179000, 100, 'Mỹ', 0, 0, 'đang hoạt động'),
(27, 'brd9', 'cat10', 'Son Thỏi Cathy Doll Mịn Lì 10 Touch Coral 3.5g', 'imgproduct_27.jpg', 177000, 100, 'Thailand', 0, 0, 'đang hoạt động'),
(28, 'brd10', 'cat10', 'Son Lì Shu Uemura Có Dưỡng Kinu Satin RD169 3.3g', 'imgproduct_28.jpg', 722000, 100, 'Nhật', 0, 0, 'đang hoạt động'),
(29, 'brd8', 'cat11', 'Son Bút Chì Maybelline Màu Đỏ Cherry 50 Own You Im', 'imgproduct_29.jpg', 119000, 100, 'Mỹ', 0, 0, 'đang hoạt động'),
(30, 'brd11', 'cat12', 'Sáp Dưỡng Môi Vaseline Hồng Xinh 7g', 'imgproduct_30.jpg', 64000, 100, 'Hà Lan', 0, 0, 'đang hoạt động\r\n'),
(31, 'brd11', 'cat12', 'Sáp Dưỡng Ẩm Vaseline Pure Petroleum Jelly 49g', 'imgproduct_31.jpg', 41000, 100, 'Hà Lan', 0, 0, 'đang hoạt động'),
(32, 'brd11', 'cat12', 'Son Dưỡng Môi Vaseline Chiết Xuất Lô Hội 4.8g', 'imgproduct_32.jpg', 70000, 100, 'Hà Lan', 0, 0, 'đang hoạt động'),
(33, 'brd8', 'cat12', 'Son Dưỡng Chuyển Màu Maybelline Peach Blossom Màu ', 'imgproduct_33.jpg', 58000, 100, 'Mỹ', 0, 0, 'đang hoạt động'),
(34, 'brd12', 'cat13', 'Dầu Gội Dove Hỗ Trợ Phục Hồi Tóc Hư Tổn 880g', 'imgproduct_34.jpg', 179000, 100, 'Mỹ', 0, 0, 'đang hoạt động'),
(35, 'brd12', 'cat12', 'Dầu Gội Dove Chiết Xuất Hoa Sen Và Dầu Jojoba 500g', 'imgproduct_35.jpg', 136000, 100, 'Mỹ', 0, 0, 'đang hoạt động'),
(36, 'brd1', 'cat13', 'Dầu Gội L\'Oréal Paris Ngăn Gãy Rụng Tóc 620ml', 'imgproduct_36.jpg', 138, 100, 'Pháp', 0, 0, 'đang hoạt động'),
(37, 'brd5', 'cat13', 'Sữa Tắm - Gội - Rửa Mặt Men\'s Bioré Hương Nước Hoa', 'imgproduct_37', 186000, 100, 'Nhật', 0, 0, 'đang hoạt động'),
(38, 'brd12', 'cat14', 'Kem Xả Dove Phục Hồi Hư Tổn Chiết Xuất Bơ', 'imgproduct_38.jpg', 136000, 100, 'Mỹ', 0, 0, 'đang hoạt động'),
(39, 'brd1', 'cat14', 'Dầu Xả L\'Oréal Paris Dưỡng Tóc Giảm Gãy Rụng 280ml', 'imgproduct_39.jpg', 106000, 100, 'Pháp', 0, 0, 'đang hoạt động'),
(40, 'brd1', 'cat15', 'Kem Nhuộm L\'Oreal Dưỡng Tóc Sâu 6.11 Xám Khói 172m', 'imgproduct_40.jpg', 169000, 100, 'Pháp', 0, 0, 'đang hoạt động');

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
('pro11', 'nhà cung cấp A', '1234567890', '11/22/33/44', 'emaulNCC', 'đang hoạt động'),
('PRO2', 'Công ty mỹ phẩm Sun', '0258749613', '1/2/3 Lê Lợi, quận 1, Hồ Chí Minh', 'sungroup@gmail.com', 'Hoạt Động'),
('PRO3', 'Công ty mỹ phẩm Planet', '0478125963', '1/2/3 Bùi Viện, quận 1, Hồ Chí Minh', 'planetgroup@gmail.com', 'Hoạt Động'),
('PRO4', 'Công ty mỹ phẩm Apple', '0897456325', '1/2/3 Bà Hạt, quận 2, Hồ Chí Minh', 'applegroup@gmail.com', 'Hoạt Động'),
('PRO5', 'Công ty mỹ phẩm Messi', '0147852358', '1/2/3 Kinh Dương Vương, quận 2, Hồ Chí Minh', 'messigroup@gmail.com', 'Hoạt Động'),
('PRO6', 'Công ty mỹ phẩm Samsung', '0741852369', '1/2/3 Chu Văn An, quận 3, Hồ Chí Minh', 'samsunggroup@gmail.com', 'đã xóa'),
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
('0', 'Khách Hàng', 'quyền khách hàng', 'đang hoạt động'),
('1', 'admin', 'tạo tài khoản ', 'đang hoạt động'),
('2', 'quản lý', 'quản lý hệ thống', 'đang hoạt động'),
('3', 'nhân viên', 'nhân viên sử dụng hệ thống', 'đang hoạt động'),
('4', 'thanhtraBuiBao', 'tự chọn', 'đang hoạt động'),
('5', 'quyền mới', 'mới tạo', 'đang hoạt động');

-- --------------------------------------------------------

--
-- Table structure for table `role_permissions`
--

CREATE TABLE `role_permissions` (
  `RP_ID` int(11) NOT NULL,
  `ROLE_ID` varchar(10) NOT NULL,
  `PERMISSION_ID` varchar(30) NOT NULL,
  `URL` varchar(100) DEFAULT NULL,
  `ACTION` varchar(100) NOT NULL,
  `STATUS` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role_permissions`
--

INSERT INTO `role_permissions` (`RP_ID`, `ROLE_ID`, `PERMISSION_ID`, `URL`, `ACTION`, `STATUS`) VALUES
(1, '3', '2', NULL, 'Create', 'đang hoạt động'),
(2, '3', '2', NULL, 'Update', 'đang hoạt động'),
(3, '3', '2', NULL, 'Delete', 'đang hoạt động'),
(4, '3', '3', NULL, 'Create', 'đang hoạt động'),
(5, '3', '3', NULL, 'Update', 'đang hoạt động'),
(6, '3', '3', NULL, 'Delete', 'đang hoạt động'),
(7, '3', '4', NULL, 'Create', 'đang hoạt động'),
(8, '3', '4', NULL, 'Update', 'đang hoạt động'),
(9, '3', '4', NULL, 'Delete', 'đang hoạt động'),
(10, '3', '8', NULL, 'Create', 'đang hoạt động'),
(11, '3', '8', NULL, 'Update', 'đang hoạt động'),
(12, '3', '8', NULL, 'Delete', 'đang hoạt động'),
(41, '1', '14', NULL, 'Control', 'đang hoạt động'),
(42, '4', '1', NULL, 'Update', 'đang hoạt động'),
(43, '4', '3', NULL, 'Delete', 'đang hoạt động'),
(44, '4', '5', NULL, 'Access', 'đang hoạt động'),
(45, '4', '12', NULL, 'Create', 'đang hoạt động'),
(46, '4', '2', NULL, 'Create', 'đang hoạt động'),
(47, '5', '11', NULL, 'Delete', 'đang hoạt động'),
(48, '5', '12', NULL, 'Update', 'đang hoạt động'),
(49, '5', '2', NULL, 'Delete', 'đang hoạt động'),
(50, '5', '5', NULL, 'Access', 'đang hoạt động'),
(51, '5', '8', NULL, 'Delete', 'đang hoạt động');

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
('loại mới', 'người mới', 'đang hoạt động'),
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
('NV001', 'NB', 'thuc ngoc bui', '1234567890', '11/2/3', 'thcngb@gmail.com', 'đang hoạt động'),
('NV1', 'NB', 'Bùi Ngọc Thức', '0254781025', '11/74/78 Phạm Văn Chiêu, Gò Vấp, Hồ Chí Minh', 'thucadmin@gmail.com', 'Hoạt Động'),
('NV2', 'NB', 'Bùi Ngọc Thức', '0147410258', '11/74/78 Phạm Văn Chiêu, Gò Vấp, Hồ Chí Minh', 'thucadmin@gmail.com', 'Hoạt Động'),
('NV3', 'NB', 'Nguyễn Ánh Hoa', '0989741408', '11/74/78 Phạm Văn Chiêu, Gò Vấp, Hồ Chí Minh', 'thucadmin@gmail.com', 'Hoạt Động'),
('NV4', 'NB', 'Nguyễn Anh Thảo', '0252014786', '11/74/78 Phạm Văn Chiêu, Gò Vấp, Hồ Chí Minh', 'thucadmin@gmail.com', 'Hoạt Động'),
('NV5', 'NB', 'Nguyễn Cẩm Yến', '0345123067', '11/74/78 Phạm Văn Chiêu, Gò Vấp, Hồ Chí Minh', 'thucadmin@gmail.com', 'Hoạt Động'),
('NV6', 'NB', 'Nguyễn Diễm Chi', '0254781025', '11/74/78 Phạm Văn Chiêu, Gò Vấp, Hồ Chí Minh', 'thucadmin@gmail.com', 'Hoạt Động'),
('NV7', 'NB', 'Huỳnh Hữu Bảo', '0254781025', '11/74/78 Phạm Văn Chiêu, Gò Vấp, Hồ Chí Minh', 'thucadmin@gmail.com', 'Hoạt Động'),
('NV8', 'NB', 'Huỳnh Huy Lâm', '0254781025', '11/74/78 Phạm Văn Chiêu, Gò Vấp, Hồ Chí Minh', 'thucadmin@gmail.com', 'Hoạt Động'),
('NVBaoBui', 'NB', 'Bảo Bùi', '0123456789', '14/7 đường A', 'bao@gmail.com', 'đang hoạt động');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`ACCOUNT_ID`),
  ADD UNIQUE KEY `USERNAME` (`USERNAME`),
  ADD UNIQUE KEY `USERNAME_2` (`USERNAME`),
  ADD UNIQUE KEY `USERNAME_3` (`USERNAME`),
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
  ADD KEY `DISCOUNT_ID` (`DISCOUNT_ID`),
  ADD KEY `CUSTOMER_ID` (`CUSTOMER_ID`),
  ADD KEY `export_ibfk_5` (`EMPLOYEE_ID`);

--
-- Indexes for table `export_detail`
--
ALTER TABLE `export_detail`
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
-- Indexes for table `import_detail`
--
ALTER TABLE `import_detail`
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
  ADD PRIMARY KEY (`RP_ID`),
  ADD KEY `PERMISSION_ID` (`PERMISSION_ID`),
  ADD KEY `ROLE_ID` (`ROLE_ID`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `ACCOUNT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `role_permissions`
--
ALTER TABLE `role_permissions`
  MODIFY `RP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_ibfk_2` FOREIGN KEY (`ROLE_ID`) REFERENCES `roles` (`ROLE_ID`),
  ADD CONSTRAINT `accounts_ibfk_3` FOREIGN KEY (`USERNAME`) REFERENCES `users` (`USER_ID`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`PRODUCT_ID`) REFERENCES `products` (`PRODUCT_ID`);

--
-- Constraints for table `export`
--
ALTER TABLE `export`
  ADD CONSTRAINT `export_ibfk_3` FOREIGN KEY (`DISCOUNT_ID`) REFERENCES `discounts` (`DISCOUNT_ID`),
  ADD CONSTRAINT `export_ibfk_4` FOREIGN KEY (`CUSTOMER_ID`) REFERENCES `users` (`USER_ID`),
  ADD CONSTRAINT `export_ibfk_5` FOREIGN KEY (`EMPLOYEE_ID`) REFERENCES `users` (`USER_ID`);

--
-- Constraints for table `export_detail`
--
ALTER TABLE `export_detail`
  ADD CONSTRAINT `export_detail_ibfk_2` FOREIGN KEY (`EXPORT_ID`) REFERENCES `export` (`EXPORT_ID`),
  ADD CONSTRAINT `export_detail_ibfk_3` FOREIGN KEY (`PRODUCT_ID`) REFERENCES `products` (`PRODUCT_ID`);

--
-- Constraints for table `import`
--
ALTER TABLE `import`
  ADD CONSTRAINT `import_ibfk_1` FOREIGN KEY (`PROVIDER_ID`) REFERENCES `providers` (`PROVIDER_ID`),
  ADD CONSTRAINT `import_ibfk_2` FOREIGN KEY (`USER_ID`) REFERENCES `users` (`USER_ID`);

--
-- Constraints for table `import_detail`
--
ALTER TABLE `import_detail`
  ADD CONSTRAINT `import_detail_ibfk_2` FOREIGN KEY (`IMPORT_ID`) REFERENCES `import` (`IMPORT_ID`),
  ADD CONSTRAINT `import_detail_ibfk_3` FOREIGN KEY (`PRODUCT_ID`) REFERENCES `products` (`PRODUCT_ID`);

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
  ADD CONSTRAINT `role_permissions_ibfk_2` FOREIGN KEY (`PERMISSION_ID`) REFERENCES `permission` (`PERMISSION_ID`),
  ADD CONSTRAINT `role_permissions_ibfk_3` FOREIGN KEY (`ROLE_ID`) REFERENCES `roles` (`ROLE_ID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`TYPE_USER_ID`) REFERENCES `type_users` (`TYPE_USER_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
