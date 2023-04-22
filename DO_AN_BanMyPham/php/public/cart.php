<?php
session_start();
include("../connectDB.php");
$db = new ConnectDB();
$conn = $db->getConnection();
// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['USERNAME'])) {
    // Nếu chưa đăng nhập, chuyển hướng về trang đăng nhập
    header('Location: ./login.php');
    exit();
}
// Lấy thông tin giỏ hàng từ session
// var_dump($_SESSION);
// die();
$cart = $_SESSION['cart'];

// Lưu giỏ hàng vào cơ sở dữ liệu
$user_id = $_SESSION['USERNAME'];
$stmt = $conn->prepare('INSERT INTO cart (USER_ID, PRODUCT_ID, QUANTITY_IN_CART) VALUES (?, ?, ?)');
$stmt->bind_param("sss", $p1, $p2, $p3);
foreach ($cart as $product_id => $quantity) {
    // $stmt->execute([$user_id, $product_id, $quantity]);
        $p1 = $user_id;
        $p2 = $product_id;
        $p3 = $quantity;
        $stmt->execute();
}
mysqli_close($conn);

$stmt->close();
// $conn->close();
// Xóa giỏ hàng trong session
unset($_SESSION['cart']);
echo 'Lưu giỏ hàng thành công.';
header('Location: ../index.php');
exit();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Giỏ hàng</title>
  <link rel="stylesheet" type="text/css" href="../frontend/css/cart.css">
</head>
<body>
  <div class="cart">
    <h1>Giỏ hàng của bạn</h1>
    <?php if (mysqli_num_rows($result) > 0): ?>
      <table>
        <tr>
          <th>Sản phẩm</th>
          <th>Giá</th>
          <th>Số lượng</th>
          <th>Tổng cộng</th>
        </tr>
        <?php
        $total_price = 0;
        while ($row = mysqli_fetch_assoc($result)):
          $product_name = $row['PRODUCT_NAME'];
          $price = $row['PRICE'];
          $quantity = $row['QUANTITY_IN_CART'];
          $total = $price * $quantity;
          $total_price += $total;
          $image_url = $row['IMAGE_URL'];
        ?>
          <tr>
            <td class="product-info">
              <img src="<?php echo $image_url; ?>">
              <span><?php echo $product_name; ?></span>
            </td>
            <td class="price"><?php echo number_format($price) . 'đ'; ?></td>
            <td class="quantity"><?php echo $quantity; ?></td>
            <td class="total"><?php echo number_format($total) . 'đ'; ?></td>
          </tr>
        <?php endwhile; ?>
        <tr>
          <td colspan="3">Tổng cộng:</td>
          <td class="total-price"><?php echo number_format($total_price) . 'đ'; ?></td>
        </tr>
          </table>
          <a href="checkout.php" class="checkout-button">Thanh toán</a>
        <?php else: ?>
          <p>Giỏ hàng của bạn đang trống.</p>
        <?php endif; ?>
      </div>
    </body>
    </html>
