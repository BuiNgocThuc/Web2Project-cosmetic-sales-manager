<?php session_start(); ?>
<div class="sidebar">
    <div class="brand">
        <!-- <span><img src="../../image/LOGO.jpg" alt=""></span> -->
        <span><img src="../image/LOGO.jpg" alt=""></span>
        <h2>MOON COSMETIC</h2>
    </div>
    <div class="sidemenu">
        <div class="user">
            <div class="user__avatar">
                <img src="../image/avatar.png">
            </div>
            <div class="user__info">
                <?php
                include_once("ConnectDB.php");
                $db = new ConnectDB();
                if (isset($_SESSION['USERNAME']) && isset($_SESSION['USERNAME'])) {
                    $name = $_SESSION['NAME'];
                    echo "<h3>" . $name . "</h3>";
                    $userID = $_SESSION['USERNAME'];
                    $sql = "SELECT NAME_TYPE_USER FROM type_users
                    join users on type_users.TYPE_USER_ID = users.TYPE_USER_ID
                    where users.USER_ID = '" . $userID . "'";
                    $result = $db->connection($sql);
                    while ($row = mysqli_fetch_array($result)) {
                        $type = $row['NAME_TYPE_USER'];
                        echo "<small>" . $type . "</small>";
                    }
                }
                ?>
            </div>
        </div>
        <div class="list-function">
            <ul>
                <li>
                    <div class="function-menu not-menu active enable" onclick="loadPageByAjax('Admin_Home'), selectMenu(this)">
                        <span><i class="fa-thin fa-house"></i> Trang Chủ</span>
                    </div>
                </li>
                <?php
                include_once("ConnectDB.php");
                $db = new ConnectDB();
                if (isset($_SESSION['ROLE_ID'])) {
                    $roleID = $_SESSION['ROLE_ID'];
                    $sql = "SELECT * FROM role_permissions WHERE ROLE_ID = '" . $roleID . "'";
                    $result = $db->connection($sql);
                    echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js">
                    </script>';
                    while ($row = mysqli_fetch_array($result)) {
                        $perID = $row['PERMISSION_ID'];
                        $_SESSION['ACTION'] = $row['ACTION'];
                        $action = $row['ACTION'];
                        switch ($perID) {
                            case '1':
                                echo '<script>
                                    $(document).ready(function() {
                                            $(".sidebar .product_per").addClass("enable");
                                            $(".sidebar .product_per").attr("onclick","loadPageByAjax(\'Admin_Product\'); selectDropdownMenu(this)");
                                            $(".sidebar .product_per").addClass("' . $action . '");
                                    });
                                            </script>';
                                break;
                            case '2':
                                echo '<script>
                                    $(document).ready(function() {
                                            $(".sidebar .brand_per").addClass("enable");
                                            $(".sidebar .brand_per").attr("onclick","loadPageByAjax(\'Admin_Brand\'); selectDropdownMenu(this)");
                                            $(".sidebar .brand_per").addClass("' . $action . '");
                                        });
                                            </script>';


                                break;
                            case '3':
                                echo '<script>
                                    $(document).ready(function() {
                                            $(".sidebar .category_per").addClass("enable");
                                            $(".sidebar .category_per").attr("onclick","loadPageByAjax(\'Admin_Category\'); selectDropdownMenu(this)");
                                            $(".sidebar .category_per").addClass("' . $action . '");
                                        });
                                            </script>';

                                break;
                            case '4':
                                echo '<script>
                                    $(document).ready(function() {
                                            $(".sidebar .provider_per").addClass("enable");
                                            $(".sidebar .provider_per").attr("onclick","loadPageByAjax(\'Admin_Provider\'); selectDropdownMenu(this)");
                                            $(".sidebar .provider_per").addClass("' . $action . '");
                                        });
                                            </script>';

                                break;
                            case '5':
                                echo '<script>
                                    $(document).ready(function() {
                                            $(".sidebar .export_receipt_per").addClass("enable");
                                            $(".sidebar .export_receipt_per").attr("onclick","loadPageByAjax(\'Admin_Order\'); selectDropdownMenu(this)");
                                        });
                                            </script>';

                                break;
                            case '6':
                                echo '<script>
                                    $(document).ready(function() {
                                            $(".sidebar .user_per").addClass("enable");
                                            $(".sidebar .user_per").attr("onclick","loadPageByAjax(\'Admin_User\'); selectDropdownMenu(this)");
                                            $(".sidebar .user_per").addClass("' . $action . '");
                                        });
                                            </script>';

                                break;
                            case '7':
                                echo '<script>
                                    $(document).ready(function() {
                                            $(".sidebar .type_user_per").addClass("enable");
                                            $(".sidebar .type_user_per").attr("onclick","loadPageByAjax(\'Admin_TypeUser\'); selectDropdownMenu(this)");
                                            $(".sidebar .type_user_per").addClass("' . $action . '");
                                        });
                                            </script>';

                                break;
                            case '8':
                                echo '<script>
                                    $(document).ready(function() {
                                            $(".sidebar .discount_per").addClass("enable");
                                            $(".sidebar .discount_per").attr("onclick","loadPageByAjax(\'Admin_Discount\'); selectMenu(this)");
                                            $(".sidebar .discount_per").addClass("' . $action . '");
                                        });
                                            </script>';

                                break;
                            case '9':
                                echo '<script>
                                    $(document).ready(function() {
                                            $(".sidebar .statistic_per").addClass("enable");
                                            $(".sidebar .statistic_per").attr("onclick","loadPageByAjax(\'Admin_Statistic\'); selectMenu(this)");
                                            
                                        });
                                            </script>';

                                break;
                            case '10':
                                echo '<script>
                                    $(document).ready(function() {
                                            $(".sidebar .display_per").addClass("enable");
                                            $(".sidebar .display_per").attr("onclick","loadPageByAjax(\'Admin_Display\'); selectMenu(this)");
                                        });
                                            </script>';

                                break;
                            case '11':
                                echo '<script>
                                    $(document).ready(function() {
                                            $(".sidebar .decentralization_per").addClass("enable");
                                            $(".sidebar .decentralization_per").attr("onclick","loadPageByAjax(\'Admin_Decentralization\'); selectDropdownMenu(this)");
                                            $(".sidebar .decentralization_per").addClass("' . $action . '");
                                        });
                                            </script>';

                                break;
                            case '12':
                                echo '<script>
                                    $(document).ready(function() {
                                            $(".sidebar .import_receipt_per").addClass("enable");
                                            $(".sidebar .import_receipt_per").attr("onclick","loadPageByAjax(\'Admin_Coupon\'); selectDropdownMenu(this)");
                                            $(".sidebar .import_receipt_per").addClass("' . $action . '");
                                        });
                                            </script>';

                                break;
                            case '13':
                                echo '<script>
                                    $(document).ready(function() {
                                            $(".sidebar .permission_per").addClass("enable");
                                            $(".sidebar .permission_per").attr("onclick","loadPageByAjax(\'Admin_Permission\'); selectDropdownMenu(this)");
                                            $(".sidebar .permission_per").addClass("' . $action . '");
                                        });
                                            </script>';

                                break;
                            case '14':
                                echo '<script>
                                    $(document).ready(function() {
                                        $(".sidebar .product_per").addClass("enable");
                                        $(".sidebar .product_per").attr("onclick","loadPageByAjax(\'Admin_Product\'); selectDropdownMenu(this)");
                                        $(".sidebar .brand_per").addClass("enable");
                                        $(".sidebar .brand_per").attr("onclick","loadPageByAjax(\'Admin_Brand\'); selectDropdownMenu(this)");
                                        $(".sidebar .category_per").addClass("enable");
                                        $(".sidebar .category_per").attr("onclick","loadPageByAjax(\'Admin_Category\'); selectDropdownMenu(this)");
                                        $(".sidebar .provider_per").addClass("enable");
                                        $(".sidebar .provider_per").attr("onclick","loadPageByAjax(\'Admin_Provider\'); selectDropdownMenu(this)");
                                        $(".sidebar .export_receipt_per").addClass("enable");
                                        $(".sidebar .export_receipt_per").attr("onclick","loadPageByAjax(\'Admin_Order\'); selectDropdownMenu(this)");
                                        $(".sidebar .user_per").addClass("enable");
                                        $(".sidebar .user_per").attr("onclick","loadPageByAjax(\'Admin_User\'); selectDropdownMenu(this)");
                                        $(".sidebar .type_user_per").addClass("enable");
                                        $(".sidebar .type_user_per").attr("onclick","loadPageByAjax(\'Admin_TypeUser\'); selectDropdownMenu(this)");
                                        $(".sidebar .discount_per").addClass("enable");
                                        $(".sidebar .discount_per").attr("onclick","loadPageByAjax(\'Admin_Discount\'); selectMenu(this)");
                                        $(".sidebar .statistic_per").addClass("enable");
                                        $(".sidebar .statistic_per").attr("onclick","loadPageByAjax(\'Admin_Statistic\'); selectMenu(this)");
                                        $(".sidebar .display_per").addClass("enable");
                                        $(".sidebar .display_per").attr("onclick","loadPageByAjax(\'Admin_Display\'); selectMenu(this)");
                                        $(".sidebar .import_receipt_per").addClass("enable");
                                        $(".sidebar .import_receipt_per").attr("onclick","loadPageByAjax(\'Admin_Coupon\'); selectDropdownMenu(this)");
                                        $(".sidebar .permission_per").addClass("enable");
                                        $(".sidebar .permission_per").attr("onclick","loadPageByAjax(\'Admin_Permission\'); selectDropdownMenu(this)");
                                        $(".sidebar .decentralization_per").addClass("enable");
                                        $(".sidebar .decentralization_per").attr("onclick","loadPageByAjax(\'Admin_Decentralization\'); selectDropdownMenu(this)");
                                        $(".sidebar .product_per").addClass("' . $action . '");
                                        $(".sidebar .brand_per").addClass("' . $action . '");
                                        $(".sidebar .category_per").addClass("' . $action . '");
                                        $(".sidebar .provider_per").addClass("' . $action . '");
                                        $(".sidebar .export_receipt_per").addClass("' . $action . '");
                                        $(".sidebar .user_per").addClass("' . $action . '");
                                        $(".sidebar .type_user_per").addClass("' . $action . '");
                                        $(".sidebar .discount_per").addClass("' . $action . '");
                                        $(".sidebar .statistic_per").addClass("' . $action . '");
                                        $(".sidebar .display_per").addClass("' . $action . '");
                                        $(".sidebar .import_receipt_per").addClass("' . $action . '");
                                        $(".sidebar .permission_per").addClass("' . $action . '");
                                        $(".sidebar .decentralization_per").addClass("' . $action . '");
                                        
                                    });
                                            </script>';

                                break;
                        };
                    }
                }
                ?>
                <li>
                    <div class="menu-wrapper">
                        <div class="function-menu dropdown-select enable" onclick="selectMenu(this), changeIconArrowSidebar(this)">
                            <span><i class="fa-thin fa-shop"></i> Kho Hàng</span>
                            <i class=" fa-regular fa-angle-down"></i>
                        </div>
                        <ul class="dropdown-list">
                            <li class="dropdown-item product_per">
                                <span class="dropdown-text">sản phẩm</span>
                            </li>
                            <li class="dropdown-item brand_per">
                                <span class="dropdown-text">thương hiệu</span>
                            </li>
                            <li class="dropdown-item category_per">
                                <span class="dropdown-text">danh mục</span>
                            </li>
                            <li class="dropdown-item provider_per">
                                <span class="dropdown-text">nhà cung cấp</span>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="menu-wrapper">
                        <div class="function-menu dropdown-select enable" onclick="selectMenu(this), changeIconArrowSidebar(this)">
                            <span><i class="fa-thin fa-receipt"></i> Đơn hàng</span>
                            <i class="fa-regular fa-angle-down"></i>
                        </div>
                        <ul class="dropdown-list">
                            <li class="dropdown-item import_receipt_per">
                                <span class="dropdown-text">phiếu nhập</span>
                            </li>
                            <li class="dropdown-item export_receipt_per">
                                <span class="dropdown-text">phiếu xuất</span>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="menu-wrapper">
                        <div class="function-menu dropdown-select enable" onclick="selectMenu(this), changeIconArrowSidebar(this)">
                            <span><i class="fa-thin fa-users"></i> Người Dùng</span>
                            <i class="fa-regular fa-angle-down"></i>
                        </div>
                        <ul class="dropdown-list">
                            <li class="dropdown-item user_per">
                                <span class="dropdown-text">Danh sách người dùng</span>
                            </li>
                            <li class="dropdown-item type_user_per">
                                <span class="dropdown-text">Loại người dùng</span>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="function-menu not-menu discount_per">
                        <span><i class="fa-thin fa-badge-percent"></i> Khuyến Mại</span>
                    </div>
                </li>
                <li>
                    <div class="function-menu not-menu statistic_per">
                        <span><i class="fa-thin fa-signal-bars"></i> Thống Kê</span>
                    </div>
                </li>
                <li>
                    <div class="function-menu not-menu display_per">
                        <span><i class="fa-thin fa-display"></i> Hiện Thị</span>
                    </div>
                </li>
                <li>
                    <div class="menu-wrapper">
                        <div class="function-menu dropdown-select enable" onclick="changeIconArrowSidebar(this), selectMenu(this)">
                            <span><i class="fa-thin fa-circle-user"></i> Quản Trị Người Dùng</span>
                            <i class="fa-regular fa-angle-down"></i>
                        </div>
                        <ul class="dropdown-list">
                            <li class="dropdown-item decentralization_per">
                                <span class="dropdown-text">nhóm quyền</span>
                            </li>
                            <li class="dropdown-item permission_per">
                                <span class="dropdown-text">chức năng</span>
                            </li>
                        </ul>
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
            <span class="current-page">Trang Chủ</span>
        </div>
        <div class="tool-icon">
            <!-- <i class="fa-thin fa-sun-bright"></i> -->
            <i onclick="changeIconMode(this)" id="changeMode" class="fa-thin fa-sun-bright"></i>
            <i class="fa-thin fa-bell" id="notify">
                <span class="count-notify">
                    <?php
                    require_once 'connectDB.php';
                    $db = new ConnectDB();
                    $sql = "SELECT * FROM export WHERE STATUS_EX = 'đang chờ'";
                    $result = $db->connection($sql);
                    $count = mysqli_num_rows($result);
                    echo $count;
                    ?>
                </span>
                <ul class="notification">
                    <?php
                    require_once 'connectDB.php';
                    $db = new ConnectDB();
                    $sql = "SELECT EXPORT_ID FROM export WHERE STATUS_EX = 'đang chờ'";
                    $result = $db->connection($sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<li>
                                    <span>Đơn hàng ' . $row['EXPORT_ID'] . ' đang chờ xác nhận</span>
                                    <button class="btnConfirmExport" data-id="' . $row['EXPORT_ID'] . '">Xác nhận</button>
                                </li>';
                    }
                    ?>
                </ul>
            </i>
            <i class="fa-thin fa-gear">
                <ul class="setting">
                    <li>thông tin tài khoản</li>
                    <li>đổi mật khẩu</li>
                    <li onclick="logout()">đăng xuất</li>
                </ul>
            </i>
        </div>
    </header>
    <div class="overlay"></div>
    <div id="content">
    </div>
</div>