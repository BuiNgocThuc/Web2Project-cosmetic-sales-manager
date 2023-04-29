<?php
session_start();
include("connectDB.php");
$db = new ConnectDB();
$conn = $db->getConnection();
// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['USERNAME'])) {
  echo '<script>
  alert("Bạn chưa đăng nhập")
  Login();
  </script>';	
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

// Hiển thị thông tin giỏ hàng trên trang web
?>
<div class="cart-container" id="cart_preview">
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
            <td><img src="../image/img/<?php echo  $productimg; ?>" alt="<?php echo $productName;  ?>"></td>
            <td><?php echo $productName; ?></td>
            <td><?php echo $productPrice; ?> đ</td>
            <td>
              <div>
                <input type="hidden" name="productId" value="<?php echo $productId; ?>">
                <input type="hidden" name="action" value="update">
                <input type="number" name="quantity" value="<?php echo $quantityInCart; ?>" class="quantity-input" min="1" data-content="<?php echo $productId; ?>">
              </div>
            </td>
            <td><?php echo $productPrice * $quantityInCart; ?> đ</td>
            <td>
              <div>
                <input type="hidden" name="productId" value="<?php echo $productId; ?>">
                <button name="remove" class="remove-button" data-content="<?php echo $productId; ?>">Xóa</button>
              </div>
            </td>
          </tr>
        <?php } ?>
      <tfoot>
        <tr>
          <td colspan="4" style="text-align: right;">Tổng cộng:</td>
          <td><?php echo $total; ?> đ</td>
          <td></td>
        </tr>
      </tfoot>
      </tbody>
    </table>
  </div>
  <div class="cart-summary">
    <span class="continue-shopping"> <i class="fa-light fa-arrow-left"></i> Tiếp tục xem sản phẩm</span>
    <button name="checkout" id="btnPayment" onclick="loadPageUser('Payment')">Thanh toán</button>
  </div>
  <!-- </form> -->
</div>