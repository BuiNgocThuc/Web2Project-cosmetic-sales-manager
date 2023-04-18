
<main id="Admin_Coupon" data-content="lịch sử phiếu nhập">
    <div class="overlay">

    </div>
    <div class="new-form">
        <!-- -----Create Form ------ -->
        <div id="create-form" style="display: none;">
            <i onclick="hiddenForm()" style="cursor: pointer;" class="fa-sharp fa-light fa-xmark" id="close"></i>
            <div class="title">Thêm Phiếu Nhập Mới</div>
            <form action="" class="content">
                <div>
                    <label for="" class="name-provider">tên nhà cung cấp: </label>
                    <input class="textfield new-name" type="text">
                </div>
                <div>
                    <label for="" class="name-provider">tên nhân viên nhập: </label>
                    <input class="textfield" type="text">
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
                <label for="">Mã phiếu nhập</label>
                <input class="textfield" type="text">
            </div>
            <div>
                <label for="">tên nhà cung cấp</label>
                <input class="textfield" type="text">
            </div>
            <div>
                <label for="">Ngày nhập hàng</label>
                <input class="textfield" type="date">
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
            <h3>lịch sử nhập  hàng</h3>
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
                        <th>mã phiếu nhập</th>
                        <th>tên nhà cung cấp</th>
                        <th>nhân viên nhập</th>
                        <th>ngày nhập hàng</th>
                        <th>số tiền</th>
                        <th>hoạt động</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include("ConnectDB.php");
                    $db = new ConnectDB();
                    $sql = "SELECT *  FROM import
                        join providers on providers.PROVIDER_ID = import.PROVIDER_ID
                        join users on USERS.USER_ID = import.USER_ID";
                    $result = $db->connection($sql);
                    $i = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<tr>
                                <td>' . $i++ . '</td>
                                <td>' . $row['IMPORT_ID'] . '</td>
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
                    echo '<script>
                    if($(".sidebar .import_receipt_per").hasClass("Create")) {
                        $(".btnCreate").addClass("enable");
                    }
                    if($(".sidebar .import_receipt_per").hasClass("Access")) {
                        $(".btnView").addClass("enable");
                    }
                    if($(".sidebar .import_receipt_per").hasClass("Update")) {
                        $(".btnFix").addClass("enable");
                    }
                    if($(".sidebar .import_receipt_per").hasClass("Control")) {
                        $(".btnView").addClass("enable");
                        $(".btnFix").addClass("enable");
                        $(".btnCreate").addClass("enable");
                    }
                </script>';
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</main>