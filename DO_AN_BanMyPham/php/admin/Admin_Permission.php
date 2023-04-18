<section id="Admin_Permission" data-content="Chức năng">
    <div class="overlay">

    </div>
    <div class="new-form">
        <!-- -----Create Form ------ -->
        <div id="create-form" style="display: none;">
            <i onclick="hiddenForm()" style="cursor: pointer;" class="fa-sharp fa-light fa-xmark" id="close"></i>
            <div class="title">Thêm chức năng Mới</div>
            <form action="" class="content">
                <div>
                    <label for="" class="name-permission">tên chức năng: </label>
                    <input class="textfield new-name" type="text">
                </div>
                <div>
                    <label for="">quyền Tạo: </label>
                    <input type="checkbox" class="switch create-per" value="0">
                </div>
                <div>
                    <label for="">quyền Sửa: </label>
                    <input type="checkbox" class="switch update-per" value="0">
                </div>
                <div>
                    <label for="">quyền Xóa: </label>
                    <input type="checkbox" class="switch delete-per" value="0">
                </div>
                <div>
                    <label for="">quyền Xem chi tiết: </label>
                    <input type="checkbox" class="switch access-per" value="0">
                </div>
                <div>
                    <label for="">quyền Điều Khiển: </label>
                    <input type="checkbox" class="switch control-per" value="0">
                </div>
            </form>
            <div class="tool">
                <button class="btnConfirm btn" onclick="AddInfo('Permission')">Thêm</button>
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
                    <input class="textfield NAME_OBJECT" type="text">
                </div>
                <div>
                    <label for="" class="img-brand">hình ảnh: </label>
                    <label for="file-input" class="image-upload">
                        <input id="file-input" class="new-img" type="file" accept="image/png,img/jpg,img/jpeg">
                        <label for="file-input" class="icon-upload">
                            <i class="fa-duotone fa-plus fa-2xl"></i>
                            <span>đăng tải</span>
                        </label>
                    </label>
                </div>
                <div>
                    <label for="">Trạng Thái: </label>
                    <input type="checkbox" class="switch new-status" data-content="ngừng hoạt động" onclick="changeDataContent(this)">
                </div>
            </form>
            <div class="tool">
                <button class="btnConfirm btn" onclick="UpdateInfo('Brand')" data-content="">Cập nhật</button>
                <button class="btnCancel btn">Hủy Bỏ</button>
            </div>
        </div>
        <!-- -----Delete Form ------ -->
        <div id="delete-form" style="display: none;">
            <i onclick="hiddenForm()" style="cursor: pointer;" class="fa-sharp fa-light fa-xmark" id="close"></i>
            <div class="title">Xóa thương hiệu</div>
            <p class="warning"> Bằng cách xác nhận xóa thương hiệu này, bạn không thể tạo hoặc cập nhật sản phẩm với thương hiệu này nữa</p>
            <div class="tool">
                <button class="btnConfirm btn" onclick="DeleteInfo('Permission')">Xóa</button>
                <button class="btnCancel btn" onclick="hiddenForm()">Hủy Bỏ</button>
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
                <label for="">mã chức năng</label>
                <input class="textfield" type="text">
            </div>
            <div>
                <label for="">tên chức năng</label>
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
            <h3>danh sách chức năng</h3>
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
                        <th>Mã Chức năng</th>
                        <th>Tên chức năng</th>
                        <th>trạng thái</th>
                        <th>hoạt động</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        include("ConnectDB.php");
                        $db = new ConnectDB();
                        $sql = "SELECT *  FROM permission WHERE STATUS_PER NOT IN ('đã xóa')";
                        $result = $db->connection($sql);
                        $i = 1;
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<tr>
                                    <td class="STT">' . $i++ . '</td>
                                    <td class="ID_OBJECT">' . $row['PERMISSION_ID'] . '</td>
                                    <td class="NAME_OBJECT">' . $row['NAME_PER'] . '</td>
                                    <td class="STATUS_OBJECT">' . $row['STATUS_PER'] . '</td>
                                    <td>
                                        <button class="btnFix">chỉnh sửa</button>
                                        <button class="btnDel">xóa</button>
                                    </td>
                                </tr>';
                        }
                        echo '<script>
                    if($(".sidebar .permission_per").hasClass("Create")) {
                        $(".btnCreate").addClass("enable");
                    }
                    if($(".sidebar .permission_per").hasClass("Delete")) {
                        $(".btnDel").addClass("enable");
                    }
                    if($(".sidebar .permission_per").hasClass("Update")) {
                        $(".btnFix").addClass("enable");
                    }
                    if($(".sidebar .permission_per").hasClass("Control")) {
                        $(".btnFix").addClass("enable");
                        $(".btnDel").addClass("enable");
                        $(".btnCreate").addClass("enable");
                    }
                </script>';
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</section>