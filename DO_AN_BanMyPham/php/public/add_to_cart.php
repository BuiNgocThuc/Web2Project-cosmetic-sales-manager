<?php
session_start();
$product_id = $_POST["product_id"];
$quantity = $_POST["quantity"];


// Nếu giỏ hàng chưa được khởi tạo thì tạo mới giỏ hàng
if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = array();
}

// Nếu sản phẩm đã có trong giỏ hàng thì tăng số lượng
if (isset($_SESSION["cart"][$product_id])) {
    $_SESSION["cart"][$product_id] += $quantity;
} else { // Nếu sản phẩm chưa có trong giỏ hàng thì thêm mới
    $_SESSION["cart"][$product_id] = intval($quantity)
    ;
}
// Chuyển hướng đến trang giỏ hàng
header("location: cart.php");
exit;
?>
