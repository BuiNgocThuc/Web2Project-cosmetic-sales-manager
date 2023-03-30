<div class="sidebar">
        <div class="brand">
            <!-- <span><img src="../../image/LOGO.jpg" alt=""></span> -->
            <span><img src="../image/LOGO.jpg" alt=""></span>
            <h2>MOON COSMETIC</h2>
        </div>
        <div class="sidemenu">
            <div class="user">
                <div class="user__avatar">
                    <img
                        src="https://yt3.ggpht.com/yti/AHXOFjWnPpZwPaRrVu9jjJjZwxgIEnM5msXmhxZH_j90=s88-c-k-c0x00ffffff-no-rj-mo">
                </div>
                <div class="user__info">

                    <h3>Bùi Ngọc Thức</h3>
                    <small>Admin</small>
                </div>
            </div>
            <div class="list-function">
                <ul>
                    <li>
                        <div class="function-menu" onclick="loadPageByAjax('Admin_Home'), selectMenu(this)">
                            <span><i class="fa-thin fa-house"></i> Trang Chủ</span>
                        </div>
                    </li>
                    <li>
                        <div class="menu-wrapper">
                            <div class="function-menu dropdown-select" onclick="selectMenu(this), hideDropdownMenu(), changeIconArrowSidebar(this)">
                                <span><i class="fa-thin fa-shop""></i> Kho Hàng</span>
                                <i class="fa-regular fa-angle-down"></i>
                            </div>
                            <ul class="dropdown-list">
                                <li class="dropdown-item" onclick="loadPageByAjax('Admin_Product'), selectDropdownMenu(this)">
                                    <span class="dropdown-text">sản phẩm</span>
                                </li>
                                <li class="dropdown-item" onclick="loadPageByAjax('Admin_Brand'), selectDropdownMenu(this)">
                                    <span class="dropdown-text">thương hiệu</span>
                                </li>
                                <li class="dropdown-item" onclick="loadPageByAjax('Admin_Category'), selectDropdownMenu(this)">
                                    <span class="dropdown-text">danh mục</span>
                                </li>
                                <li class="dropdown-item" onclick="loadPageByAjax('Admin_Provider'), selectDropdownMenu(this)">
                                    <span class="dropdown-text">nhà cung cấp</span>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="menu-wrapper">
                            <div class="function-menu dropdown-select" onclick="selectMenu(this), hideDropdownMenu(), changeIconArrowSidebar(this)">
                                <span><i class="fa-thin fa-receipt"></i> Đơn hàng</span>
                                <i class="fa-regular fa-angle-down"></i>
                            </div>
                            <ul class="dropdown-list">
                                <li class="dropdown-item" onclick="loadPageByAjax('Admin_Coupon'), selectDropdownMenu(this)">
                                    <span class="dropdown-text">phiếu nhập</span>
                                </li>
                                <li class="dropdown-item" onclick="loadPageByAjax('Admin_Order'), selectDropdownMenu(this)">
                                    <span class="dropdown-text">phiếu xuất</span>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="function-menu active" onclick="loadPageByAjax('Admin_Customer'), selectMenu(this)">
                            <span><i class="fa-thin fa-users"></i> Người Dùng</span>
                        </div>
                    </li>
                    <li>
                        <div class="function-menu" onclick="loadPageByAjax('Admin_Discount'), selectMenu(this)">
                            <span><i class="fa-thin fa-badge-percent"></i> Khuyến Mại</span>
                        </div>
                    </li>
                    <li>
                        <div class="function-menu" onclick="loadPageByAjax('Admin_Statistic'), selectMenu(this)">
                            <span><i class="fa-thin fa-signal-bars"></i> Thống Kê</span>
                        </div>
                    </li>
                    <li>
                        <div class="function-menu" onclick="loadPageByAjax('Admin_Display'), selectMenu(this)">
                            <span><i class="fa-thin fa-display"></i> Hiện Thị</span>
                        </div>
                    </li>
                    <li>
                        <div class="function-menu" onclick="loadPageByAjax('Admin_Decentration'), selectMenu(this)">
                            <span><i class="fa-thin fa-circle-user"></i> Quản Trị Người Dùng</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main-content">
        <!-- HEADER -->
        <header>
            <div class="title">
                <div class="menu-icon"><i class="fa-light fa-bars-sort"></i></div>
                <span class="current-page">Danh sách phiếu giảm giá</span>
            </div>
            <div class="tool-icon">
                <!-- <i class="fa-thin fa-sun-bright"></i> -->
                <i onclick="changeIconMode(this)" id="changeMode" class="fa-thin fa-sun-bright"></i>
                <i class="fa-thin fa-bell"></i>
                <i class="fa-thin fa-gear">
                    <ul class="setting">
                        <li>thông tin tài khoản</li>
                        <li>đổi mật khẩu</li>
                        <li>đăng xuất</li>
                    </ul>
                </i>
            </div>
        </header>
        <div class="overlay"></div>
        <div id="content">
        </div>
    </div>