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
                <li>ĐƠN HÀNG CỦA TÔI</li>
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
    </div>
</div>