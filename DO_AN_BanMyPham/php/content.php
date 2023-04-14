<?php
if (isset($_POST["page"])) {
    switch ($_POST["page"]) {
        case "Admin_Home":
            include 'admin/Admin_Home.php';
            break;
        case "Admin_Product":
            include 'admin/Admin_Product.php';
            break;
        case "Admin_Brand":
            include 'admin/Admin_Brand.php';
            break;
        case "Admin_Category":
            include 'admin/Admin_Category.php';
            break;
        case "Admin_Provider":
            include 'admin/Admin_Provider.php';
            break;
        case "Admin_Order":
            include 'admin/Admin_Order.php';
            break;
        case "Admin_Coupon":
            include 'admin/Admin_Coupon.php';
            break;
        case "Admin_User":
            include 'admin/Admin_User.php';
            break;
        case "Admin_TypeUser":
            include 'admin/Admin_TypeUser.php';
            break;
        case "Admin_Discount":
            include 'admin/Admin_Discount.php';
            break;
        case "Admin_Statistic":
            include 'admin/Admin_Statistic.php';
            break;
        case "Admin_Display":
            include 'admin/Admin_Display.php';
            break;
        case "Admin_Decentralization":
            include 'admin/Admin_Decentralization.php';
            break;
        case "Admin_Permission":
            include 'admin/Admin_Permission.php';
            break;
        case "Login":
            include 'public/login.php';
            break;
        case "admin":
            include 'admin/admin.php';
            break;
        case "Account_Info":
            include 'public/account_info.php';
            break;
        case "Introduce":
            include 'public/introduce.php';
            break;
        case "Homepage":
            include 'public/home.php';
            break;
        case "Product":
            include 'public/products/indexListProducts.php';
            break;
        default:
            echo `<h1>Page not found 404</h1>`;
    }
} else {
    echo 'error';
}
