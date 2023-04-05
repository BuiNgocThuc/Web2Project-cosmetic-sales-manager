-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 05, 2023 lúc 06:21 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cosmetics`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `accounts`
--

CREATE TABLE `accounts` (
  `USERNAME` varchar(10) NOT NULL,
  `PASSWORD` varchar(10) DEFAULT NULL,
  `ROLE_ID` varchar(10) DEFAULT NULL,
  `DATE_CREATE` date DEFAULT NULL,
  `ID` varchar(10) DEFAULT NULL,
  `STATUS` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `BRAND_ID` varchar(10) NOT NULL,
  `BRAND_NAME` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `BRAND_IMG` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `STATUS` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `CATEGORY_ID` varchar(10) NOT NULL,
  `CATEGORY_NAME` varchar(100) DEFAULT NULL,
  `STATUS` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `discounts`
--

CREATE TABLE `discounts` (
  `DISCOUNT_ID` varchar(10) NOT NULL,
  `DISCOUNT_NAME` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `CONDITION` int(11) DEFAULT NULL,
  `START_DATE` date DEFAULT NULL,
  `END_DATE` date DEFAULT NULL,
  `PERCENT` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `discounts`
--

INSERT INTO `discounts` (`DISCOUNT_ID`, `DISCOUNT_NAME`, `CONDITION`, `START_DATE`, `END_DATE`, `PERCENT`) VALUES
('DC1', 'Giảm Giá Test', 1000000, '2023-03-01', '2023-07-07', 10),
('DC2', 'Giảm Giá Valentine', 500000, '2023-04-01', '2023-12-07', 5),
('DC3', 'Giảm Giá 8/3', 800000, '2023-01-01', '2023-09-07', 15),
('DC4', 'Giảm Giá 20/10', 1000000, '2023-02-01', '2024-07-09', 20),
('DC5', 'Giảm Giá BackToSchool', 1200000, '2022-12-01', '2024-01-07', 30);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `export`
--

CREATE TABLE `export` (
  `EXPORT_ID` varchar(10) NOT NULL,
  `DISCOUNT_ID` varchar(10) DEFAULT NULL,
  `EMPLOYEE_ID` varchar(10) DEFAULT NULL,
  `CUSTOMER_ID` varchar(10) DEFAULT NULL,
  `DATE_CREATE` date DEFAULT NULL,
  `TOTAL` float DEFAULT NULL,
  `STATUS` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `export_deatail`
--

CREATE TABLE `export_deatail` (
  `EXPORT_ID` varchar(10) NOT NULL,
  `PRODUCT_ID` varchar(10) NOT NULL,
  `UNIT_PRICE` float DEFAULT NULL,
  `QUANTITY` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `import`
--

CREATE TABLE `import` (
  `IMPORT_ID` varchar(10) NOT NULL,
  `PROVIDER_ID` varchar(10) DEFAULT NULL,
  `USER_ID` varchar(10) DEFAULT NULL,
  `DATE_CREATE` date DEFAULT NULL,
  `TOTAL` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `import_deatail`
--

CREATE TABLE `import_deatail` (
  `PRODUCT_ID` varchar(10) NOT NULL,
  `IMPORT_ID` varchar(10) NOT NULL,
  `UNIT_PRICE` float DEFAULT NULL,
  `QUANTITY` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission`
--

CREATE TABLE `permission` (
  `PERMISSION_ID` varchar(10) NOT NULL,
  `PERMISSION_NAME` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `STATUS` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `PRODUCT_ID` varchar(10) NOT NULL,
  `BRAND_ID` varchar(10) DEFAULT NULL,
  `CATEGORY_ID` varchar(10) DEFAULT NULL,
  `PRODUCT_NAME` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `PRODUCT_IMG` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `PRICE` float DEFAULT NULL,
  `QUANTITY` int(11) DEFAULT NULL,
  `ORIGIN` varchar(50) NOT NULL,
  `STATUS` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `DISPLAY` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `providers`
--

CREATE TABLE `providers` (
  `PROVIDER_ID` varchar(50) NOT NULL,
  `PROVIDER_NAME` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `PHONE` varchar(15) DEFAULT NULL,
  `ADDRESS` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `STATUS` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `providers`
--

INSERT INTO `providers` (`PROVIDER_ID`, `PROVIDER_NAME`, `PHONE`, `ADDRESS`, `EMAIL`, `STATUS`) VALUES
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
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `ROLE_ID` varchar(10) NOT NULL,
  `ROLES_NAME` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `DESCRIPTION` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_permissions`
--

CREATE TABLE `role_permissions` (
  `ROLE_ID` varchar(10) NOT NULL,
  `PERMISSION_ID` varchar(30) NOT NULL,
  `URL` varchar(100) DEFAULT NULL,
  `ACTION` varchar(100) DEFAULT NULL,
  `STATUS` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_users`
--

CREATE TABLE `type_users` (
  `TYPE_USER_ID` varchar(10) NOT NULL,
  `TYPE_USER_NAME` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `STATUS` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_users`
--

INSERT INTO `type_users` (`TYPE_USER_ID`, `TYPE_USER_NAME`, `STATUS`) VALUES
('KH', 'Khách Hàng', 'Hoạt Động'),
('NB', 'Nội Bộ', 'Hoạt Động');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `USER_ID` varchar(20) NOT NULL,
  `TYPE_USER_ID` varchar(20) DEFAULT NULL,
  `USER_NAME` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `PHONE` varchar(10) DEFAULT NULL,
  `ADDRESS` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `STATUS` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`USER_ID`, `TYPE_USER_ID`, `USER_NAME`, `PHONE`, `ADDRESS`, `EMAIL`, `STATUS`) VALUES
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
('NB8', 'NB', 'Huỳnh Huy Lâm', '0254781025', '11/74/78 Phạm Văn Chiêu, Gò Vấp, Hồ Chí Minh', 'thucadmin@gmail.com', 'Hoạt Động');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`USERNAME`);

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`BRAND_ID`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CATEGORY_ID`);

--
-- Chỉ mục cho bảng `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`DISCOUNT_ID`);

--
-- Chỉ mục cho bảng `export`
--
ALTER TABLE `export`
  ADD PRIMARY KEY (`EXPORT_ID`);

--
-- Chỉ mục cho bảng `export_deatail`
--
ALTER TABLE `export_deatail`
  ADD PRIMARY KEY (`EXPORT_ID`,`PRODUCT_ID`);

--
-- Chỉ mục cho bảng `import`
--
ALTER TABLE `import`
  ADD PRIMARY KEY (`IMPORT_ID`),
  ADD KEY `PROVIDER_ID_FK` (`PROVIDER_ID`),
  ADD KEY `USER_ID_FK` (`USER_ID`);

--
-- Chỉ mục cho bảng `import_deatail`
--
ALTER TABLE `import_deatail`
  ADD PRIMARY KEY (`IMPORT_ID`,`PRODUCT_ID`),
  ADD KEY `PRODUCT_ID_FK` (`PRODUCT_ID`);

--
-- Chỉ mục cho bảng `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`PERMISSION_ID`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`PRODUCT_ID`),
  ADD KEY `CATEGORY_ID_FK` (`CATEGORY_ID`),
  ADD KEY `BRAND_ID_FK` (`BRAND_ID`);

--
-- Chỉ mục cho bảng `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`PROVIDER_ID`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ROLE_ID`);

--
-- Chỉ mục cho bảng `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD PRIMARY KEY (`ROLE_ID`,`PERMISSION_ID`),
  ADD KEY `PERMISSION_ID_FK` (`PERMISSION_ID`);

--
-- Chỉ mục cho bảng `type_users`
--
ALTER TABLE `type_users`
  ADD PRIMARY KEY (`TYPE_USER_ID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`USER_ID`),
  ADD KEY `TYPE_USER_ID_FK` (`TYPE_USER_ID`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `import`
--
ALTER TABLE `import`
  ADD CONSTRAINT `PROVIDER_ID_FK` FOREIGN KEY (`PROVIDER_ID`) REFERENCES `providers` (`PROVIDER_ID`),
  ADD CONSTRAINT `USER_ID_FK` FOREIGN KEY (`USER_ID`) REFERENCES `users` (`USER_ID`);

--
-- Các ràng buộc cho bảng `import_deatail`
--
ALTER TABLE `import_deatail`
  ADD CONSTRAINT `IMPORT_ID_FK` FOREIGN KEY (`IMPORT_ID`) REFERENCES `import` (`IMPORT_ID`),
  ADD CONSTRAINT `PRODUCT_ID_FK` FOREIGN KEY (`PRODUCT_ID`) REFERENCES `products` (`PRODUCT_ID`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `BRAND_ID_FK` FOREIGN KEY (`BRAND_ID`) REFERENCES `brands` (`BRAND_ID`),
  ADD CONSTRAINT `CATEGORY_ID_FK` FOREIGN KEY (`CATEGORY_ID`) REFERENCES `category` (`CATEGORY_ID`);

--
-- Các ràng buộc cho bảng `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD CONSTRAINT `PERMISSION_ID_FK` FOREIGN KEY (`PERMISSION_ID`) REFERENCES `permission` (`PERMISSION_ID`),
  ADD CONSTRAINT `ROLE_FK` FOREIGN KEY (`ROLE_ID`) REFERENCES `roles` (`ROLE_ID`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `TYPE_USER_ID_FK` FOREIGN KEY (`TYPE_USER_ID`) REFERENCES `type_users` (`TYPE_USER_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
