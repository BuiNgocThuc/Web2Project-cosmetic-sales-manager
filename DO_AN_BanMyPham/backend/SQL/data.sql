CREATE TABLE `PROVIDERS` (
  `PROVIDER_ID` VARCHAR(50) PRIMARY KEY,
  `NAME` NVARCHAR(50),
  `PHONE` VARCHAR(15),
  `ADDRESS` NVARCHAR(255),
  `EMAIL` VARCHAR(100),
  `STATUS` NVARCHAR(100)
);

CREATE TABLE `ROLES` (
  `ROLE_ID` VARCHAR(10) PRIMARY KEY,
  `NAME` NVARCHAR(50),
  `DESCRIPTION` NVARCHAR(255)
);

CREATE TABLE `PERMISSION` (
  `PERMISSION_ID` VARCHAR(10) PRIMARY KEY,
  `NAME` NVARCHAR(30),
  `STATUS` NVARCHAR(255)
);

CREATE TABLE `ROLE_PERMISSIONS` (
  `ROLE_ID` VARCHAR(10),
  `PERMISSION_ID` VARCHAR(30),
  `URL` VARCHAR(100),
  `ACTION` VARCHAR(100),
  `STATUS` NVARCHAR(100),
  PRIMARY KEY (`ROLE_ID`, `PERMISSION_ID`)
);

CREATE TABLE `IMPORT` (
  `IMPORT_ID` VARCHAR(10) PRIMARY KEY,
  `PROVIDER_ID` VARCHAR(10),
  `USER_ID` VARCHAR(10),
  `DATE_CREATE` DATE,
  `TOTAL` FLOAT
);

CREATE TABLE `BRANDS` (
  `BRAND_ID` VARCHAR(10) PRIMARY KEY,
  `NAME` NVARCHAR(50),
  `IMG` NVARCHAR(255),
  `STATUS` NVARCHAR(100)
);

CREATE TABLE `PRODUCTS` (
  `PRODUCT_ID` VARCHAR(10) PRIMARY KEY,
  `BRAND_ID` VARCHAR(10),
  `CATEGORY_ID` VARCHAR(10),
  `NAME` NVARCHAR(50),
  `IMG` NVARCHAR(255),
  `PRICE` FLOAT,
  `QUANTITY` INT,
  `STATUS` NVARCHAR(100)
);

CREATE TABLE `DISCOUNTS` (
  `DISCOUNT_ID` VARCHAR(10) PRIMARY KEY,
  `NAME` NVARCHAR(50),
  `CONDITION` VARCHAR(50),
  `START_DATE` DATE,
  `END_DATE` DATE,
  `PERCENT` FLOAT
);

CREATE TABLE `IMPORT_DEATAIL` (
  `PRODUCT_ID` VARCHAR(10),
  `IMPORT_ID` VARCHAR(10),
  `UNIT_PRICE` FLOAT,
  `QUANTITY` INT,
  PRIMARY KEY (`IMPORT_ID`, `PRODUCT_ID`)
);

CREATE TABLE `EXPORT` (
  `EXPORT_ID` VARCHAR(10) PRIMARY KEY,
  `DISCOUNT_ID` VARCHAR(10),
  `EMPLOYEE_ID` VARCHAR(10),
  `CUSTOMER_ID` VARCHAR(10),
  `DATE_CREATE` DATE,
  `TOTAL` FLOAT,
  `STATUS` NVARCHAR(100)
);

CREATE TABLE `EXPORT_DEATAIL` (
  `EXPORT_ID` VARCHAR(10),
  `PRODUCT_ID` VARCHAR(10),
  `UNIT_PRICE` FLOAT,
  `QUANTITY` INT,
  PRIMARY KEY (`EXPORT_ID`, `PRODUCT_ID`)
);

CREATE TABLE `ACCOUNTS` (
  `USERNAME` varchar(10) PRIMARY KEY,
  `PASSWORD` varchar(10),
  `ROLE_ID` varchar(10),
  `DATE_CREATE` DATE,
  `ID` varchar(10),
  `STATUS` varchar(50)
);

CREATE TABLE `CATEGORY` (
  `CATEGORY_ID` varchar(10) PRIMARY KEY,
  `NAME` varchar(100),
  `STATUS` VARCHAR(100)
);

CREATE TABLE `USERS` (
  `USER_ID` VARCHAR(20) PRIMARY KEY,
  `TYPE_USER_ID` VARCHAR(20),
  `NAME` NVARCHAR(50),
  `PHONE` VARCHAR(10),
  `ADDRESS` NVARCHAR(255),
  `EMAIL` VARCHAR(100),
  `STATUS` NVARCHAR(100)
);

CREATE TABLE `TYPE_USERS` (
  `TYPE_USER_ID` VARCHAR(10) PRIMARY KEY,
  `NAME` NVARCHAR(50),
  `STATUS` NVARCHAR(100)
);

CREATE TABLE `CART` (
  `USER_ID` VARCHAR(30),
  `PRODUCT_ID` VARCHAR(30),
  `QUANTITY` INT
);

ALTER TABLE `USERS` ADD FOREIGN KEY (`TYPE_USER_ID`) REFERENCES `TYPE_USERS` (`TYPE_USER_ID`);

ALTER TABLE `PRODUCTS` ADD FOREIGN KEY (`CATEGORY_ID`) REFERENCES `CATEGORY` (`CATEGORY_ID`);

ALTER TABLE `ROLE_PERMISSIONS` ADD FOREIGN KEY (`ROLE_ID`) REFERENCES `ROLES` (`ROLE_ID`);

ALTER TABLE `ROLE_PERMISSIONS` ADD FOREIGN KEY (`PERMISSION_ID`) REFERENCES `PERMISSION` (`PERMISSION_ID`);

ALTER TABLE `IMPORT` ADD FOREIGN KEY (`PROVIDER_ID`) REFERENCES `PROVIDERS` (`PROVIDER_ID`);

ALTER TABLE `IMPORT` ADD FOREIGN KEY (`USER_ID`) REFERENCES `USERS` (`USER_ID`);

ALTER TABLE `PRODUCTS` ADD FOREIGN KEY (`BRAND_ID`) REFERENCES `BRANDS` (`BRAND_ID`);

ALTER TABLE `IMPORT_DEATAIL` ADD FOREIGN KEY (`PRODUCT_ID`) REFERENCES `PRODUCTS` (`PRODUCT_ID`);

ALTER TABLE `IMPORT_DEATAIL` ADD FOREIGN KEY (`IMPORT_ID`) REFERENCES `IMPORT` (`IMPORT_ID`);

ALTER TABLE `EXPORT` ADD FOREIGN KEY (`EMPLOYEE_ID`) REFERENCES `USERS` (`USER_ID`);

ALTER TABLE `EXPORT` ADD FOREIGN KEY (`CUSTOMER_ID`) REFERENCES `USERS` (`USER_ID`);

ALTER TABLE `EXPORT` ADD FOREIGN KEY (`DISCOUNT_ID`) REFERENCES `DISCOUNTS` (`DISCOUNT_ID`);

ALTER TABLE `EXPORT_DEATAIL` ADD FOREIGN KEY (`PRODUCT_ID`) REFERENCES `PRODUCTS` (`PRODUCT_ID`);

ALTER TABLE `EXPORT_DEATAIL` ADD FOREIGN KEY (`EXPORT_ID`) REFERENCES `EXPORT` (`EXPORT_ID`);

ALTER TABLE `ACCOUNTS` ADD FOREIGN KEY (`USERNAME`) REFERENCES `USERS` (`USER_ID`);

ALTER TABLE `ACCOUNTS` ADD FOREIGN KEY (`ROLE_ID`) REFERENCES `ROLES` (`ROLE_ID`);

ALTER TABLE `CART` ADD FOREIGN KEY (`USER_ID`) REFERENCES `USERS` (`USER_ID`);

ALTER TABLE `CART` ADD FOREIGN KEY (`PRODUCT_ID`) REFERENCES `PRODUCTS` (`PRODUCT_ID`);

INSERT INTO `discounts` (`DISCOUNT_ID`, `NAME`, `CONDITION`, `START_DATE`, `END_DATE`, `PERCENT`) VALUES
('DC1', 'Giảm Giá Test', 1000000, '2023-03-01', '2023-07-07', 10),
('DC2', 'Giảm Giá Valentine', 500000, '2023-04-01', '2023-12-07', 5),
('DC3', 'Giảm Giá 8/3', 800000, '2023-01-01', '2023-09-07', 15),
('DC4', 'Giảm Giá 20/10', 1000000, '2023-02-01', '2024-07-09', 20),
('DC5', 'Giảm Giá BackToSchool', 1200000, '2022-12-01', '2024-01-07', 30);

INSERT INTO `providers` (`PROVIDER_ID`, `NAME`, `PHONE`, `ADDRESS`, `EMAIL`, `STATUS`) VALUES
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

INSERT INTO `type_users` (`TYPE_USER_ID`, `NAME`, `STATUS`) VALUES
('KH', 'Khách Hàng', 'Hoạt Động'),
('NB', 'Nội Bộ', 'Hoạt Động');

INSERT INTO `users` (`USER_ID`, `TYPE_USER_ID`, `NAME`, `PHONE`, `ADDRESS`, `EMAIL`, `STATUS`) VALUES
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
