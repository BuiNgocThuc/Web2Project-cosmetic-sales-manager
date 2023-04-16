<main id="Admin_User" data-content="Danh sách người dùng">
    <div class="overlay">

    </div>
    <div class="new-form">
        <!-- -----Create Form ------ -->
        <div id="create-form" style="display: none;">
            <i onclick="hiddenForm()" style="cursor: pointer;" class="fa-sharp fa-light fa-xmark" id="close"></i>
            <div class="title">Thêm Người Dùng Mới</div>
            <form action="" class="content">
                <div>
                    <label for="" class="id-user">mã nhân viên: </label>
                    <input class="textfield new-userId" type="text">
                </div>
                <div>
                    <label for="" class="name-user">tên người dùng: </label>
                    <input class="textfield new-name" type="text">
                </div>
                <div>
                    <label for="" class="type-user">loại người dùng: </label>
                    <select class="textfield new-type">
                        <?php
                        include("connectDB.php");
                        $db = new ConnectDB();
                        $sql = "SELECT * FROM type_users WHERE TYPE_USER_ID NOT IN ('KH')";
                        $result = $db->connection($sql);
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<option value="' . $row['TYPE_USER_ID'] . '">' . $row['NAME_TYPE_USER'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <label for="" class="phone-user">số điện thoại: </label>
                    <input class="textfield new-phone" type="text">
                </div>
                <div>
                    <label for="" class="address-user">địa chỉ: </label>
                    <input class="textfield new-address" type="text">
                </div>
                <div>
                    <label for="" class="email-user">email: </label>
                    <input class="textfield new-email" type="text">
                </div>
                <div>
                    <label for="" class="role-user">nhóm quyền: </label>
                    <select class="textfield new-role">
                        <?php
                        include_once("connectDB.php");
                        $db = new ConnectDB();
                        $sql = "SELECT * FROM roles WHERE ROLE_ID NOT IN ('0')";
                        $result = $db->connection($sql);
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<option value="' . $row['ROLE_ID'] . '">' . $row['NAME_ROLE'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <!-- <div>
                    <label for="">Trạng Thái: </label>
                    <input type="checkbox" class="switch" data-content="ngừng hoạt động" onclick="changeDataContent(this)">
                </div> -->
            </form>
            <div class="tool">
                <button class="btnConfirm btn" onclick="AddInfo('User')">Thêm</button>
                <button class="btnCancel btn">Hủy Bỏ</button>
            </div>
        </div>

        <!-- -----Update Form ------ -->
        <div id="fix-form" style="display: none;">
            <i onclick="hiddenForm()" style="cursor: pointer;" class="fa-sharp fa-light fa-xmark" id="close"></i>
            <div class="title">Cập nhật thương hiệu</div>
            <form action="" class="content">
                <div>
                    <label for="" class="name-brand">tên thương hiệu: </label>
                    <input class="textfield" type="text">
                </div>
                <div>
                    <label for="" class="img-brand">hình ảnh: </label>
                    <label for="file-input" class="image-upload">
                        <input id="file-input" type="file" accept="image/png,img/jpg,img/jpeg">
                        <label for="file-input" class="icon-upload">
                            <i class="fa-duotone fa-plus fa-2xl"></i>
                            <span>đăng tải</span>
                        </label>
                    </label>
                </div>
                <div>
                    <label for="">Trạng Thái: </label>
                    <input type="checkbox" class="switch" data-content="ngừng hoạt động" onclick="changeDataContent(this)">
                </div>
            </form>
            <div class="tool">
                <button class="btnConfirm btn">Cập nhật</button>
                <button class="btnCancel btn">Hủy Bỏ</button>
            </div>
        </div>
        <!-- -----Delete Form ------ -->
        <div id="delete-form" style="display: none;">
            <i onclick="hiddenForm()" style="cursor: pointer;" class="fa-sharp fa-light fa-xmark" id="close"></i>
            <div class="title">Xóa thương hiệu</div>
            <p class="warning"> Bằng cách xác nhận xóa thương hiệu này, bạn không thể tạo hoặc cập nhật sản phẩm với thương hiệu này nữa</p>
            <div class="tool">
                <button class="btnConfirm btn">Xóa</button>
                <button class="btnCancel btn">Hủy Bỏ</button>
            </div>
        </div>
    </div>
    <div class="form-container">
        <div class="title-form">
            <h3 for="">tùy chọn tìm kiếm</h3>
            <span><i onclick="changeIconArrow(this), hideForm()" class="fa-regular fa-angle-up"></i></span>
        </div>
        <div class="fix-info">
            <div>
                <label for="">mã người dùng</label>
                <input class="textfield" type="text">
            </div>
            <div>
                <label for="">tên khách hàng</label>
                <input class="textfield" type="text">
            </div>
            <div>
                <label for="">Trạng Thái</label>
                <input type="checkbox" class="switch" data-content="ngừng hoạt động" onclick="changeDataContent(this)">
            </div>
            <div>
                <label for=""></label>
                <button class="btn btn--Search">Tìm Kiếm</button>
                <button class="btn btn--Undo">Hoàn Tác</button>
            </div>
        </div>
    </div>
    <div class="list-container">
        <div class="title-list">
            <h3>danh sách người dùng</h3>
            <button class="btnCreate enable">
                <i class="fa-light fa-plus"></i>
                <span>tạo mới</span>
            </button>
        </div>
        <div class="list-code">
            <table class="content-table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>mã người dùng</th>
                        <th>loại người dùng</th>
                        <th>tên người dùng</th>
                        <th>số điện thoại</th>
                        <th>địa chỉ</th>
                        <th>email</th>
                        <th>trạng thái</th>
                        <th>hoạt động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    include_once("ConnectDB.php");
                    $sql = "SELECT *  FROM users
                            join type_users on users.type_user_id = type_users.type_user_id";
                    $db = new ConnectDB();
                    $result = $db->connection($sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<tr>
                        <td>' . $i++ . '</td>
                        <td>' . $row['USER_ID'] . '</td>
                        <td>' . $row[8] . '</td>
                        <td>' . $row[2] . '</td>
                        <td>' . $row['PHONE'] . '</td>
                        <td>' . $row['ADDRESS'] . '</td>
                        <td>' . $row['EMAIL'] . '</td>
                        <td>' . $row['STATUS'] . '</td>
                        <td>
                            <button class="btnFix">chỉnh sửa</button>
                            <button class="btnDel">xóa</button>
                        </td>
                    </tr>';
                    }
                    echo '<script>
                    if($(".sidebar .user_per").hasClass("Create")) {
                        $(".btnCreate").addClass("enable");
                    }
                    if($(".sidebar .user_per").hasClass("Delete")) {
                        $(".btnDel").addClass("enable");
                    }
                    if($(".sidebar .user_per").hasClass("Update")) {
                        $(".btnFix").addClass("enable");
                    }
                    if($(".sidebar .user_per").hasClass("Control")) {
                        $(".btnFix").addClass("enable");
                        $(".btnDel").addClass("enable");
                        $(".btnCreate").addClass("enable");
                    }
                </script>';
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<!-- echo '<tr>
                        <td>' . $i . '</td>
                        <td>' . $row['USER_ID'] . '</td>
                        <td>' . $row['TYPE_USER_ID'] . '</td>
                        <td>' . $row['NAME'] . '</td>
                        <td>' . $row['PHONE'] . '</td>
                        <td>' . $row['ADDRESS'] . '</td>
                        <td>' . $row['EMAIL'] . '</td>
                        <td>' . $row['STATUS'] . '</td>
                        <td>
                            <button class="btnFix">chỉnh sửa</button>
                            <button class="btnDel">xóa</button>
                        </td>
                    </tr>'; -->