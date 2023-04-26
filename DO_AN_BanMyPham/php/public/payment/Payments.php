<?php
session_start();
?>
<script>
    discount()
</script>
<div class="container_Payments">
    <div class="infoClient">
        <h2 class="infoClient__text">Thông tin thanh toán</h2>
        <div class="infoClient__inputs">
            <div>
                <?php
                require_once 'connectDB.php';
                $db = new ConnectDB();
                $userID = $_SESSION['USERNAME'];
                $sql = "SELECT * FROM users WHERE USER_ID = '$userID'";
                $result = $db->connection($sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo '
                        <input class="infoClient__input-text" type="text" required placeholder="Họ tên khách hàng" id="nameInput" value="' . $row['NAME'] . '">
                        <input class="infoClient__input-text" type="text" required placeholder="Số điện thoại" id="phoneInput" value="' . $row['PHONE'] . '">
                        <input class="infoClient__input-text" type="text" required placeholder="Địa chỉ giao hàng" id="addressInput" value="' . $row['ADDRESS'] . '">
                        <input class="infoClient__input-text" type="text" required placeholder="Email" id="emailInput" value="' . $row['EMAIL'] . '">
                        <input class="infoClient__input-text" type="text" placeholder="Ghi chú..." id="noteInput">
                        ';
                }
                ?>
            </div>

            <div>
                <select name="" id="infoClient__select-pay">
                    <option value="a">Chọn hình thức thanh toán</option>
                    <option value="b">Thanh toán khi nhận hàng</option>
                    <option value="c">Thanh toán qua thẻ ngân hàng</option>
                </select>
            </div>
        </div>

        <div class="infoClient__btn">
            <button type="button" class="infoClient__btnBuy btn--pay" onclick="Payment()">Thanh toán</button>
        </div>
    </div>

    <div class="listProducts">
        <div class="container__products">
            <h2 class="listProducts__text">Danh sách sản phẩm</h2>
            <!-- Products pay -->
            <ul class="listProducts__product" id="product__pay">
                <?php
                require_once 'connectDB.php';
                $db = new ConnectDB();
                $userID = $_SESSION['USERNAME'];
                $sql = "SELECT * FROM cart
                        JOIN products ON cart.PRODUCT_ID = products.PRODUCT_ID
                        WHERE USER_ID = '$userID'";
                $result = $db->connection($sql);
                $total = 0;
                while ($row = mysqli_fetch_array($result)) {
                    echo    '<li class="listProducts__item">
                    <div class="listProducts__item-quantity">' . $row["QUANTITY_IN_CART"] . '</div>
                    <img class="listProducts__item-img" src="../image/img/' . $row["IMG_PRO"] . '" alt="">
                    <div class="listProducts__item-info" data-id="' . $row['PRODUCT_ID'] . '">
                        <span class="listProducts__item-info-function">' . $row["NAME_PRO"] . '</span>
                    </div>
                    <span class="listProducts__item-price bold--text" data-price="' . $row['PRICE_PRO'] . '">' . number_format($row["PRICE_PRO"] * $row["QUANTITY_IN_CART"]) . 'đ</span>
                </li>
                <div class="margin--bottom"></div>';
                    $total += $row["PRICE_PRO"] * $row["QUANTITY_IN_CART"];
                }
                ?>
            </ul>

            <div class="listProducts__provisional-total">
                <span class="listProducts__provisional-total-text">thành tiền: </span>
                <span class="listProducts__provisional-total-price bold--text" id="totalPrice"><?php echo '' . number_format($total) . ''; ?></span><span class="bold--text">VNĐ</span>
            </div>

            <div class="listProducts__discount-code">
                <input type="text" class="listProducts__discount-code__input" placeholder="Nhập mã giảm giá...">
                <button class="listProducts__discount-code__application">Áp dụng</button>
            </div>

            <div class="margin--bottom"></div>

            <div class="listProducts__total">
                <div id="currentDiscount">
                </div>
                <span class="listProducts__total-text">Tổng cộng:</span>
                <span class="listProducts__total-price bold--text">0</span><span class="bold--text">VNĐ</span>
            </div>
        </div>
    </div>
</div>