<?php
session_start();
require 'connectDB.php';
$db = new connectDB();
?>
<div id="Account_Info">
    <div class="sidebar">
        <div class="user__account">
            <div class="thumbnail__avatar">
                <img src="../image/avatar.png" alt="">
            </div>
            <!-- <i class="fa-thin fa-user"></i> -->
            <div class="name__account">
                <span>Xin chào, </span>
                <span>
                    <?php
                    $userID = $_SESSION['USERNAME'];
                    $sql = "SELECT * FROM users WHERE USER_ID = '$userID'";
                    $result = $db->connection($sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo $row['NAME'];
                    ?>
                </span>
            </div>
        </div>
        <div class="function__list">
            <ul>
                <li class="cusInfo clicked">THÔNG TIN TÀI KHOẢN</li>
                <li class="orderHistory">ĐƠN HÀNG CỦA TÔI</li>
                <li>SẢN PHẨM YÊU THÍCH</li>
                <li class="changePass">THAY ĐỔI MẬT KHẨU</li>
            </ul>
        </div>
    </div>
    <div class="main__content">
        <h3>thông tin tài khoản</h3>
        <div class="information">
            <div class="avatar__frame">
                <div class="avatar__img">
                    <img src="../image/avatar.png" alt="">
                </div>
                <button>Chọn ảnh</button>
            </div>
            <div class="fix__info">
                <div class="form-group">
                    <label class="form-label">Họ tên</label>
                    <div class="form-input">
                        <input name="name" type="text" class="form-control name__customer" value="<?php echo $row['NAME'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Số điện thoại</label>
                    <div class="form-input">
                        <input name="phone" type="text" class="form-control phone__customer" placeholder="Nhập số điện thoại" value="<?php echo $row['PHONE'] ?>">
                    </div>

                </div>
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <div class="form-input">
                        <input name="email" type="email" class="form-control email__customer" placeholder="Nhập địa chỉ email" value="<?php echo $row['EMAIL'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Địa chỉ</label>
                    <div class="form-input"><input name="address" type="text" class="form-control address__customer" placeholder="Nhập địa chỉ email" value="<?php echo $row['ADDRESS'] ?>"></div>
                </div>
            <?php } ?>
            <button class="btnUpdateCustomer">Cập nhật</button>
            </div>
        </div>
        <div class="changePassword" style="display: none">
            <input type="password" name="oldPassword" placeholder="mật khẩu cũ" class="oldPassword input_form">
            <input type="password" name="newPassword" placeholder="mật khẩu mới" class="newPassword input_form">
            <input type="password" name="confirmPassword" placeholder="nhập lại mật khẩu mới" class="confirmPassword input_form">
            <button class="btnUpdatePassword">Cập Nhật</button>
        </div>
        <div class="order-history" id="Order__History" style="display: none">
            <?php
            $userID = $_SESSION['USERNAME'];
            $sql = "SELECT * FROM export
                            WHERE export.CUSTOMER_ID = '$userID' AND export.STATUS_EX NOT IN ('đã hủy')
                            ORDER BY export.DATE_CREATE DESC";
            $result = $db->connection($sql);
            if (mysqli_num_rows($result) == 0) {
                echo '<div style="width:100%; height:100%; display:flex; justify-content:center; align-items:center; font-size:1.5rem;">
                <span style="font-style: italic; font-size:2rem; color:brown;">Không có đơn hàng nào</span>
                </div>';
            }
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <ul class="order-history__container">
                    <?php
                    $sql1 = "SELECT * FROM export_detail
                JOIN products ON export_detail.PRODUCT_ID = products.PRODUCT_ID
                                    WHERE export_detail.EXPORT_ID = '$row[EXPORT_ID]' ";
                    $result1 = $db->connection($sql1);
                    while ($row1 = mysqli_fetch_array($result1)) {
                    ?>
                        <li class="order-history__container__item" data-id="<?= $row1['PRODUCT_ID'] ?>">
                            <div class="order-history__product">
                                <div class="order-history__product__listPro" id="">
                                    <div class="order-history__product__items">
                                        <img src="../image/img/<?= $row1['IMG_PRO'] ?>" alt="" class="order-history__product__items__img">
                                        <div class="order-history__product__items__content">
                                            <span class="order-history__product__item--name">
                                                <?= $row1['NAME_PRO'] ?>
                                            </span>
                                            <span class="order-history__product__item--quantity" data-quantity="<?= $row1['QUANTITY_EX'] ?>"></span>x<?= $row1['QUANTITY_EX'] ?></span>
                                        </div>
                                        <div class="order-history__product__item--price">
                                            <span class="order-history__product__item__current--price"><?= number_format($row1['UNIT_PRICE_EX']) ?> VNĐ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                    <div class="order-history__container__item__total">
                        <div class="order-history__container__item__total--container">
                            <div class="order-history__total__item__assessment-notice">
                                <span class="order-history__total__item__assessment-notice__text">Ngày mua:
                                    <div class="order-history__total__item__assessment-notice__date"><?= $row['DATE_CREATE'] ?></div>
                                </span>
                            </div>

                            <div class="order-history__total__item__price-btn">
                                <div class="order-history__total__intoMoney">
                                    <span>Thành tiền:</span>
                                    <span class="order-history__total__intoMoney__price"><?= number_format($row['TOTAL']) ?> VNĐ</span>
                                </div>

                                <div class="order-history__total__buttons">
                                    <?php
                                    if ($row['STATUS_EX'] == "đang chờ") {
                                        echo '<button class="order-history__total__buttons__cancel" id="btnCancelOrder" data-id="' . $row['EXPORT_ID'] . '">Hủy</button>';
                                    } else {
                                        echo '<button class="order-history__total__buttons__cancel disabled" >Hủy</button>';
                                    }
                                    ?>
                                    <!-- <button class="order-history__total__buttons__continue">Mua lại</button> -->
                                </div>
                            </div>
                        </div>
                    </div>

                </ul>
            <?php } ?>
        </div>
    </div>
</div>