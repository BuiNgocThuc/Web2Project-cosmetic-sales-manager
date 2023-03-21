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
        case "Admin_Customer":
            include 'admin/Admin_Customer.php';
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
        default:
            echo `<h1>Page not found 404</h1>`;
    }
} else {
    echo 'error';
}
