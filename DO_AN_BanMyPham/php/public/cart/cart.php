<?php
session_start();
include("../../connectDB.php");
$db = new ConnectDB();
// $conn = $db->getConnection();

// Kiểm tra xem người dùng đã đăng nhập chưaq
if (!isset($_SESSION['USERNAME'])) {
  // Nếu chưa đăng nhập, chuyển hướng về trang đăng nhập
  echo 'error';
  exit();
} else {
  $user_id = $_SESSION['USERNAME'];
  $product_id = $_POST['productID'];
  $quantity = $_POST['quantityProduct'];
  $sql = "SELECT QUANTITY_IN_CART FROM cart WHERE user_id = '" . $user_id . "' AND PRODUCT_ID = '" . $product_id . "'";
  echo '$sql: ' . $sql . '<br>';
  $result = $db->connection($sql);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
      $oldQuantity = $row['QUANTITY_IN_CART']; //số lượng cũ
    }
    $newQuantity = $oldQuantity + $quantity; //số lượng mới
    $sql1 = "UPDATE cart
          SET QUANTITY_IN_CART = '" . $newQuantity . "'
          WHERE user_id = '" . $user_id . "' AND PRODUCT_ID = '" . $product_id . "'";
    echo '$sql1: ' . $sql1 . '<br>';
    $result1 = $db->connection($sql1);
    if ($result1) {
      echo 'success';
    } else {
      echo 'error';
    }
  } else {
    $sql2 = "INSERT INTO cart (USER_ID, PRODUCT_ID, QUANTITY_IN_CART)
    VALUES ('" . $user_id . "', '" . $product_id . "', '" . $quantity . "')";
    echo '$sql2: '. $sql2 . '<br>';
    $result2 = $db->connection($sql2);
    if ($result2) {
      echo 'success';
    } else {
      echo 'error';
    }
  }
}

// // Kiểm tra xem người dùng đã đăng nhập chưa
// if (!isset($_SESSION['USERNAME'])) {
//   // Nếu chưa đăng nhập, chuyển hướng về trang đăng nhập
//   header('Location: login.php');
//   exit();
// }
// // Lấy thông tin giỏ hàng từ session
// // var_dump($_SESSION);
// // die();
// $cart = $_SESSION['cart'];

// // Lưu giỏ hàng vào cơ sở dữ liệu
// $user_id = $_SESSION['USERNAME'];
// $stmt = $conn->prepare('INSERT INTO cart (USER_ID, PRODUCT_ID, QUANTITY_IN_CART) VALUES (?, ?, ?)');
// $stmt->bind_param("sss", $p1, $p2, $p3);
// foreach ($cart as $product_id => $quantity) {
//   // $stmt->execute([$user_id, $product_id, $quantity]);
//   $p1 = $user_id;
//   $p2 = $product_id;
//   $p3 = $quantity;
//   $stmt->execute();
// }
// mysqli_close($conn);

// $stmt->close();
// // $conn->close();
// // Xóa giỏ hàng trong session
// unset($_SESSION['cart']);
// echo 'Lưu giỏ hàng thành công.';
// exit();
