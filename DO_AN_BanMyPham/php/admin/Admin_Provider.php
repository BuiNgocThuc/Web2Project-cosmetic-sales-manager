<main id="Admin_Provider" data-content="Danh sách nhà cung cấp">
    <div class="overlay">

    </div>
    <div class="new-form">
        <!-- -----Create Form ------ -->
        <div id="create-form" style="display: none;">
            <i onclick="hiddenForm()" style="cursor: pointer;" class="fa-sharp fa-light fa-xmark" id="close"></i>
            <div class="title">Thêm Thương Hiệu Mới</div>
            <form action="" class="content">
                <div>
                    <label for="" class="name-brand">tên thương hiệu: </label>
                    <input class="textfield" type="text">
                </div>
                <div>
                    <label for="" class="img-brand">hình ảnh: </label>
                    <div class="image-upload">
                        <input id="file-input" type="file" accept="image/png,img/jpg,img/jpeg">
                        <label for="file-input" class="icon-upload">
                            <i class="fa-duotone fa-plus fa-2xl"></i>
                            <span>đăng tải</span>
                        </label>
                    </div>
                </div>
                <div>
                    <label for="">Trạng Thái: </label>
                    <input type="checkbox" class="switch" data-content="ngừng hoạt động" onclick="changeDataContent(this)">
                </div>
            </form>
            <div class="tool">
                <button class="btnConfirm btn">Thêm</button>
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
                <label for="">mã nhà cung cấp</label>
                <input class="textfield" type="text">
            </div>
            <div>
                <label for="">tên nhà cung cấp</label>
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
            <h3>danh sách nhà cung cấp</h3>
            <button class="btnCreate">
                <i class="fa-light fa-plus"></i>
                <span>tạo mới</span>
            </button>
        </div>
        <div class="list-code">
            <table class="content-table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>mã nhà cung cấp</th>
                        <th>tên nhà cung cấp</th>
                        <th>số điện thoại</th>
                        <th>địa chỉ</th>
                        <th>email</th>
                        <th>trạng thái</th>
                        <th>hoạt động</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include("ConnectDB.php");
                    $db = new ConnectDB();
                    $sql = "SELECT *  FROM providers";
                    $result = $db->connection($sql);
                    $i = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<tr>
                                    <td>' . $i++ . '</td>
                                    <td>' . $row['PROVIDER_ID'] . '</td>
                                    <td>' . $row['NAME_PROVIDER'] . '</td>
                                    <td>' . $row['PHONE_PROVIDER'] . '</td>
                                    <td>' . $row['ADDRESS_PROVIDER'] . '</td>
                                    <td>' . $row['EMAIL_PROVIDER'] . '</td>
                                    <td>' . $row['STATUS_PROVIDER'] . '</td>
                                    <td>
                                        <button class="btnFix">chỉnh sửa</button>
                                        <button class="btnDel">xóa</button>
                                    </td>
                                </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</main>