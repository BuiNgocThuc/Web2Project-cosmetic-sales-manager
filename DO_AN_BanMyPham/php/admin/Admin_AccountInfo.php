<section id="admin_account">
    <div class="main__content">
        <div class="information">
            <div class="avatar__frame">
                <div class="avatar__img">
                    <img src="../image/avatar.png" alt="">
                </div>
                <button>Chọn ảnh</button>
            </div>
            <?php
            session_start();
            require 'connectDB.php';
            $db = new ConnectDB();
            $userID = $_SESSION['USERNAME'];
            $sql = "SELECT * FROM users WHERE USER_ID = '$userID'";
            $result = $db->connection($sql);
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="fix__info">
                    <div class="form-group">
                        <label class="form-label">Họ tên</label>
                        <div class="form-input">
                            <input name="name" type="text" class="form-control name__employee" value="<?php echo $row['NAME'] ?>" placeholder="Nhập tên">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Số điện thoại</label>
                        <div class="form-input">
                            <input name="phone" type="text" class="form-control phone__employee" placeholder="Nhập số điện thoại" value="<?php echo $row['PHONE'] ?>">
                        </div>
                        <!-- <div class="message"></div> -->
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <div class="form-input">
                            <input name="email" type="email" class="form-control email__employee" placeholder="Nhập địa chỉ email" value="<?php echo $row['EMAIL'] ?>">
                        </div>
                        <!-- <div class="message"></div> -->
                    </div>
                    <div class="form-group">
                        <label class="form-label">Địa chỉ</label>
                        <div class="form-input"><input name="address" type="text" class="form-control address__employee" placeholder="Nhập địa chỉ" value="<?php echo $row['ADDRESS'] ?>"></div>
                        <!-- <div class="message"></div> -->
                    </div>
                <?php } ?>
                <button class="btnUpdate btnUpdateEmployee">Cập nhật</button>
                </div>
        </div>
    </div>
</section>