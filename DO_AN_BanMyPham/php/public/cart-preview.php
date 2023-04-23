
<?php
session_start();
include("../connectDB.php");
$db = new ConnectDB();
$conn = $db->getConnection();
// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['USERNAME'])) {
    header('Location: login.php');
    exit();
}

// Lấy thông tin giỏ hàng từ cơ sở dữ liệu
$userId = $_SESSION['USERNAME'];
$sql = "SELECT p.*, c.QUANTITY_IN_CART
        FROM cart c
        INNER JOIN products p ON c.PRODUCT_ID = p.PRODUCT_ID
        WHERE c.USER_ID = '$userId'";
$result = $conn->query($sql);
// echo $sql;
// Xử lý các thao tác trong giỏ hàng
if (isset($_POST['action'])) {
  switch ($_POST['action']) {
      case 'update':
          foreach ($_POST['quantity'] as $key => $value) {
              $cartId = $_POST['cart_id'][$key];
              $quantity = intval($value);
              if ($quantity == 0) {
                  $sql = "DELETE FROM cart WHERE id = $cartId";
              } else {
                  $sql = "UPDATE cart SET QUANTITY_IN_CART = $quantity WHERE id = $cartId";
              }
              $conn->query($sql);
          }
          break;
      case 'delete':
          $cartId = $_POST['cart_id'];
          $sql = "DELETE FROM cart WHERE id = $cartId";
          $conn->query($sql);
          break;
  }
  header('Location: public/cart-preview.php');
  exit();
}
// Tính tổng tiền và phí vận chuyển
$subtotal = 0;
$shippingFee = 0;
// Tính phí vận chuyển
if ($subtotal < 500000) {
  $shippingFee = 20000;
}
// Áp dụng mã giảm giá (nếu có)
$discountAmount  =0;
if (isset($_POST['discount_code'])) {
  $discountCode = $_POST['discount_code'];
  $sql = "SELECT * FROM discounts WHERE DISCOUNT_ID  = '$discountCode'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $discountPercent = $row['DISCOUNT_PERCENT'];
      $discountAmount = $subtotal * $discountPercent / 100;
      // $subtotal -= $discountAmount;
  }
}

// Hiển thị thông tin giỏ hàng trên trang web
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Giỏ hàng</title>
    <link rel='shortcut icon' href='../image/LOGO.jpg' />
    <link rel='stylesheet' type='text/css' media='screen' href='../../frontend/css/cart.css'>
    <link rel="stylesheet" href="../../frontend/css/homepage.css">
    <link rel="stylesheet" href="../../frontend/css/header.css">
    <link rel="stylesheet" href="../../frontend/css/footer.css">
    <link rel="stylesheet" href="../../frontend/LoginForm.css">
    <link rel="stylesheet" href="../../frontend/Account_Info.css">
    <link rel="stylesheet" href="../../frontend/introduce.css">
    <link rel="stylesheet" href="../../frontend/css/style_ListProducts.css">
    <link rel="stylesheet" href="../../frontend/css/base.css">
    <link rel="stylesheet" href="../../assets/icons/all.css">
</head>
<?php
include("header.php");
?>
<body>
<div class="cart-container">
    <div class="cart-items">
    <!-- <h1>Giỏ hàng của bạn</h1> -->
    <table>
        <thead>
            <tr>
            <th>Hình ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Số lượng</th>
            <th>Tổng cộng</th>
            <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
                    $total = 0;
                    while ($row = $result->fetch_assoc()) {
                        $productId = $row['PRODUCT_ID'];
                        $productimg = $row['IMG_PRO'];
                        $productName = $row['NAME_PRO'];
                        $productPrice = $row['PRICE_PRO'];
                        $quantityInCart = $row['QUANTITY_IN_CART'];
                        $total += $productPrice * $quantityInCart;
                    ?>
            <tr>
            <td><img  src="../../image/img/<?php echo  $productimg; ?>" alt="<?php echo $productName;  ?>"></td>
                        <td><?php echo $productName; ?></td>
                        <td><?php echo $productPrice; ?> đ</td>
                        <td>
                            <form action="update_cart.php" method="post">
                                <input type="hidden" name="productId" value="<?php echo $productId; ?>">
                                <input type="hidden" name="action" value="update">
                                <button type="submit" name="update" class="quantity-button minus" disabled>-</button>
                                <input type="text" name="quantity" value="<?php echo $quantityInCart; ?>" class="quantity-input">
                                <button type="submit" name="update" class="quantity-button plus" disabled>+</button>
                            </form>
                        </td>
                        <td><?php echo $productPrice * $quantityInCart; ?> đ</td>
                        <td>
                            <form action="update_cart.php" method="post">
                                <input type="hidden" name="productId" value="<?php echo $productId; ?>">
                                <input type="hidden" name="action" value="remove">
                                <button type="submit" name="remove" class="remove-button">Xóa</button>
                            </form>
                        </td>
            </tr>
            <?php } ?>
            <tr>
                <td colspan="3" style="text-align: right;">Tổng cộng:</td>
                <td><?php echo $total; ?> đ</td>
            </tr>
        </tbody>
    </table>
        <a href="product_list.php" class="continue-shopping">Tiếp tục xem sản phẩm</a>
  </div>
  <div class="cart-summary">
    <table>
    <thead>
      <tr>
        <th colspan="2">Tóm tắt giỏ hàng</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Tổng tiền:</td>
        <td><?php echo $total; ?> đ</td>                 
      </tr>
      <tr>
        <td>Phí vận chuyển</td>
        <td><?php echo $shippingFee; ?> đ</td>
      </tr>
      <tr>
        <td>Mã giảm giá:</td>
        <td>
          <input type="text" name="discount_code" placeholder="Nhập mã giảm giá">
          <button type="submit" name="apply_discount">Áp dụng</button>
        </td>
      </tr>
      <tr>
        <td>Tổng thanh toán:</td>
        <td><?php echo $total + $shippingFee - $discountAmount; ?> đ</td>
      </tr>
      </tbody>
    </table>
    <button type="submit" name="checkout">Thanh toán</button>
</div>
<!-- </form> -->
</div>            
</body>
<?php
include("footer.php");
?>
</html>
