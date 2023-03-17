CREATE TABLE
    [PROVIDER] (
        [ID] VARCHAR(50) PRIMARY KEY,
        [NAME] NVARCHAR(50),
        [PHONE] VARCHAR(15),
        [ADDRESS] NVARCHAR(255),
        [STATUS] NVARCHAR(10)
    ) GO
CREATE TABLE
    [ROLES] (
        [ID] VARCHAR(10) PRIMARY KEY,
        [NAME] NVARCHAR(50),
        [DESCRIPTION] NVARCHAR(255)
    ) GO
CREATE TABLE
    [PERMISSION] (
        [ID] VARCHAR(10) PRIMARY KEY,
        [NAME] NVARCHAR(30),
        [DESCRIPTION] NVARCHAR(255)
    ) GO
CREATE TABLE
    [ROLE_PERMISSIONS] (
        [ROLE_ID] VARCHAR(10),
        [PERMISSION_ID] VARCHAR(30),
        PRIMARY KEY ([ROLE_ID], [PERMISSION_ID])
    ) GO
CREATE TABLE
    [EMPLOYEES] (
        [ID] VARCHAR(10) PRIMARY KEY,
        [ACCOUNT_ID] VARCHAR(10),
        [NAME] NVARCHAR(50),
        [PHONE] VARCHAR(10),
        [ADDRESS] NVARCHAR(255)
    ) GO
CREATE TABLE
    [IMPORTS] (
        [ID] VARCHAR(10) PRIMARY KEY,
        [PROVIDER_ID] VARCHAR(10),
        [EMPLOYEE_ID] VARCHAR(10),
        [CREATE_AT] DATE,
        [TOTAL] FLOAT
    ) GO
CREATE TABLE
    [BRAND] (
        [ID] VARCHAR(10) PRIMARY KEY,
        [NAME] NVARCHAR(50),
        [DESCRIPTION] NVARCHAR(255)
    ) GO
CREATE TABLE
    [PRODUCT] (
        [ID] VARCHAR(10) PRIMARY KEY,
        [BRAND_ID] VARCHAR(10),
        [NAME] NVARCHAR(50),
        [PRICE] FLOAT,
        [QUANTITY] INT,
        [STATUS] NVARCHAR(10)
    ) GO
CREATE TABLE
    [DISCOUNT] (
        [ID] VARCHAR(10) PRIMARY KEY,
        [NAME] NVARCHAR(50),
        [CONDITION] VARCHAR(50),
        [START_DATE] DATE,
        [END_DATE] DATE,
        [PERCENT] FLOAT
    ) GO
CREATE TABLE
    [IMPORT_DEATAIL] (
        [PRODUCT_ID] VARCHAR(10),
        [IMPORT_ID] VARCHAR(10),
        [UNIT_PRICE] FLOAT,
        [QUANTITY] INT
    ) GO
CREATE TABLE
    [CUSTOMERS] (
        [ID] VARCHAR(10) PRIMARY KEY,
        [NAME] NVARCHAR(50),
        [PHONE] VARCHAR(10),
        [ADDRESS] NVARCHAR(255),
        [STATUS] NVARCHAR(10)
    ) GO
CREATE TABLE
    [EXPORT] (
        [ID] VARCHAR(10) PRIMARY KEY,
        [CUSTOMER_ID] VARCHAR(10),
        [EMPLOYEE_ID] VARCHAR(10),
        [CREATE_AT] DATE,
        [TOTAL] FLOAT
    ) GO
CREATE TABLE
    [EXPORT_DEATAIL] (
        [EXPORT_ID] VARCHAR(10),
        [PRODUCT_ID] VARCHAR(10),
        [DONGIA] FLOAT,
        [CTHD_SOLUONG] INT
    ) GO
CREATE TABLE
    [TAIKHOAN] (
        [USERNAME] varchar(10) PRIMARY KEY,
        [PASSWORD] varchar(10),
        [ROLE_ID] varchar(10)
    ) GO
ALTER TABLE [NHANVIEN]
ADD
    CONSTRAINT [NV_MAQUYEN_FK] FOREIGN KEY ([NV_MAQUYEN]) REFERENCES [NHOMQUYEN] ([MAQUYEN]) GO
ALTER TABLE [PHIEUNHAP]
ADD
    CONSTRAINT [PN_MANCC_FK] FOREIGN KEY ([PN_MANCC]) REFERENCES [NHACUNGCAP] ([MANCC]) GO
ALTER TABLE [PHIEUNHAP]
ADD
    CONSTRAINT [PN_MANV_FK] FOREIGN KEY ([PN_MANV]) REFERENCES [NHANVIEN] ([MANV]) GO
ALTER TABLE [SANPHAM]
ADD
    CONSTRAINT [MATH_FK] FOREIGN KEY ([SP_MATH]) REFERENCES [THUONGHIEU] ([MATH]) GO
ALTER TABLE [CHITIETSANPHAM]
ADD
    CONSTRAINT [MASP_FK] FOREIGN KEY ([MASP]) REFERENCES [SANPHAM] ([MASP]) GO
ALTER TABLE [CHITIETSANPHAM]
ADD
    CONSTRAINT [MASIZE_FK] FOREIGN KEY ([MASIZE]) REFERENCES [KICHCO] ([MASIZE]) GO
ALTER TABLE [CHITIETSANPHAM]
ADD
    CONSTRAINT [MAMAU_FK] FOREIGN KEY ([MAMAU]) REFERENCES [MAUSAC] ([MAMAU]) GO
ALTER TABLE
    [CHITIETPHIEUNHAP]
ADD
    CONSTRAINT [CTPN_MAPN_FK] FOREIGN KEY ([CTPN_MAPN]) REFERENCES [PHIEUNHAP] ([MAPN]) GO
ALTER TABLE
    [CHITIETPHIEUNHAP]
ADD
    CONSTRAINT [CTPN_MASP_FK] FOREIGN KEY ([CTPN_MASP]) REFERENCES [SANPHAM] ([MASP]) GO
ALTER TABLE [HOADON]
ADD
    CONSTRAINT [HD_MAKH_FK] FOREIGN KEY ([HD_MAKH]) REFERENCES [KHACHHANG] ([MAKH]) GO
ALTER TABLE [HOADON]
ADD
    CONSTRAINT [HD_MANV_FK] FOREIGN KEY ([HD_MANV]) REFERENCES [NHANVIEN] ([MANV]) GO
ALTER TABLE [CHITIETHOADON]
ADD
    CONSTRAINT [CTHD_MAHD_FK] FOREIGN KEY ([CTHD_MAHD]) REFERENCES [HOADON] ([MAHD]) GO
ALTER TABLE [CHITIETHOADON]
ADD
    CONSTRAINT [CTHD_MASP_FK] FOREIGN KEY ([CTHD_MASP]) REFERENCES [SANPHAM] ([MASP]) GO
ALTER TABLE
    [CHITIETPHANQUYEN]
ADD
    CONSTRAINT [CTPQ_MAQUYEN_FK] FOREIGN KEY ([CTPQ_MAQUYEN]) REFERENCES [NHOMQUYEN] ([MAQUYEN]) GO
ALTER TABLE
    [CHITIETPHANQUYEN]
ADD
    CONSTRAINT [CTPQ_TENCN_FK] FOREIGN KEY ([CTPQ_TENCN]) REFERENCES [CHUCNANG] ([TENCN]) GO
ALTER TABLE [TAIKHOAN]
ADD
    CONSTRAINT [Username_FK] FOREIGN KEY ([Username]) REFERENCES [NHANVIEN] ([MANV]) GO