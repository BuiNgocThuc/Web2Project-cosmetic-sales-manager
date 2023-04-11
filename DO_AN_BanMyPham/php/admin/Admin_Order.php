<main id="Admin_Order" data-content="lịch sử đơn hàng">
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
                <label for="">Mã đơn hàng</label>
                <input class="textfield" type="text">
            </div>
            <div>
                <label for="">người dùng</label>
                <input class="textfield" type="text">
            </div>
            <div>
                <label for="">Ngày đặt hàng</label>
                <input class="textfield" type="date">
            </div>
            <div>
                <label for="">Trạng Thái</label>
                <select name="status" class="textfield">
                    <option value="đang chờ">đang chờ</option>
                    <option value="đã hủy">đã hủy</option>
                    <option value="đang giao">đang giao</option>
                    <option value="hoàn thành">hoàn thành</option>
                    <option value="đã trả hàng">đã trả hàng</option>
                </select>
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
            <h3>lịch sử đơn hàng</h3>
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
                        <th>mã đơn hàng</th>
                        <th>mã khách hàng</th>
                        <th>tên khách hàng</th>
                        <th>mã nhân viên</th>
                        <th>tên nhân viên</th>
                        <th>ngày đặt hàng</th>
                        <th>số tiền</th>
                        <th>mã giảm giá</th>
                        <th>tình trạng</th>
                        <th>hoạt động</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include("ConnectDB.php");
                    $db = new ConnectDB();
                    $sql = "SELECT *  FROM export
                        join discounts on discounts.DISCOUNT_ID  = export.DISCOUNT_ID 
                        join users on USERS.USER_ID = export.EMPLOYEE_ID and users.USER_ID = export.CUSTOMER_ID";
                    $result = $db->connection($sql);
                    $i = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<tr>
                                <td>' . $i++ . '</td>
                                <td>' . $row['EXPORT_ID'] . '</td>
                                <td>' . $row['NAME_PROVIDER'] . '</td>
                                <td>' . $row['NAME'] . '</td>
                                <td>' . $row['DATE_CREATE'] . '</td>
                                <td>' . $row['TOTAL'] . '</td>
                                <td>
                                    <button class="btnFix">chỉnh sửa</button>
                                    <button class="btnView">xem</button>
                                </td>
                            </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</main>