<?php
session_start();
include("../../connectDB.php");
$db = new ConnectDB();
// $conn = $db->getConnection();
switch ($_POST['action']) {
  case 'add':
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
      $result = $db->connection($sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
          $oldQuantity = $row['QUANTITY_IN_CART']; //số lượng cũ
        }
        $newQuantity = $oldQuantity + $quantity; //số lượng mới
        $sql1 = "UPDATE cart
          SET QUANTITY_IN_CART = '" . $newQuantity . "'
          WHERE user_id = '" . $user_id . "' AND PRODUCT_ID = '" . $product_id . "'";
        $result1 = $db->connection($sql1);
        if ($result1) {
          echo 'success';
        } else {
          echo 'error';
        }
      } else {
        $sql2 = "INSERT INTO cart (USER_ID, PRODUCT_ID, QUANTITY_IN_CART)
        VALUES ('" . $user_id . "', '" . $product_id . "', '" . $quantity . "')";
        $result2 = $db->connection($sql2);
        if ($result2) {
          echo 'success';
        } else {
          echo 'error';
        }
      }
    }
    break;
  case 'delete':
    $product_id = $_POST['productID'];
    $user_id = $_SESSION['USERNAME'];
    $sql = "DELETE FROM cart WHERE user_id = '" . $user_id . "' AND PRODUCT_ID = '" . $product_id . "'";
    $result = $db->connection($sql);
    if ($result) {
      echo 'success';
    } else {
      echo 'error';
    }
    break;
  case 'update':
    $product_id = $_POST['productID'];
    $user_id = $_SESSION['USERNAME'];
    $quantity = $_POST['quantityProduct'];
    $sql = "UPDATE cart
          SET QUANTITY_IN_CART = '" . $quantity . "'
          WHERE user_id = '" . $user_id . "' AND PRODUCT_ID = '" . $product_id . "'";
    $result = $db->connection($sql);
    if ($result) {
      echo 'success';
    } else {
      echo 'error';
    }
    break;
}
