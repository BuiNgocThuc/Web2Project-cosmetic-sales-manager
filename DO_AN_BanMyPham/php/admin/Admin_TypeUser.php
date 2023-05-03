<main id="Admin_TypeUser" data-content="Danh sách Loại người dùng">
    <div class="overlay">

    </div>
    <div class="new-form">
        <!-- -----Create Form ------ -->
        <div id="create-form" style="display: none;">
            <i onclick="hiddenForm()" style="cursor: pointer;" class="fa-sharp fa-light fa-xmark" id="close"></i>
            <div class="title">Thêm Thương Hiệu Mới</div>
            <form action="" class="content">
                <div>
                    <label for="" class="id-type-user">mã loại người dùng mới: </label>
                    <input class="textfield new-id" type="text">
                </div>
                <div>
                    <label for="" class="name-type-user">tên loại người dùng mới: </label>
                    <input class="textfield new-name" type="text">
                </div>
                <div>
                    <label for="">Trạng Thái: </label>
                    <input type="checkbox" class="switch" data-content="ngừng hoạt động" onclick="changeDataContent(this)">
                </div>
            </form>
            <div class="tool">
                <button class="btnConfirm btn" onclick="AddInfo('Type_User')">Thêm</button>
                <button class="btnCancel btn">Hủy Bỏ</button>
            </div>
        </div>

        <!-- -----Update Form ------ -->
        <div id="fix-form" style="display: none;">
            <i onclick="hiddenForm()" style="cursor: pointer;" class="fa-sharp fa-light fa-xmark" id="close"></i>
            <div class="title">Cập nhật thương hiệu</div>
            <form action="" class="content">
                <div>
                    <label for="" class="name-type-user">tên loại người dùng: </label>
                    <input class="textfield NAME_OBJECT" type="text">
                </div>
                <div>
                    <label for="">Trạng Thái: </label>
                    <input type="checkbox" class="switch" data-content="ngừng hoạt động" onclick="changeDataContent(this)">
                </div>
            </form>
            <div class="tool">
                <button class="btnConfirm btn"  onclick="UpdateInfo('Type_User')">Cập nhật</button>
                <button class="btnCancel btn" onclick="hiddenForm()">Hủy Bỏ</button>
            </div>
        </div>
        <!-- -----Delete Form ------ -->
        <div id="delete-form" style="display: none;">
            <i onclick="hiddenForm()" style="cursor: pointer;" class="fa-sharp fa-light fa-xmark" id="close"></i>
            <div class="title">Xóa thương hiệu</div>
            <p class="warning"> Bằng cách xác nhận xóa thương hiệu này, bạn không thể tạo hoặc cập nhật sản phẩm với thương hiệu này nữa</p>
            <div class="tool">
                <button class="btnConfirm btn" onclick="DeleteInfo('Type_User')">Xóa</button>
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
                <label for="">Mã loại người dùng</label>
                <input class="textfield ID_TYPE_USER_SEARCH" type="text">
            </div>
            <div>
                <label for="">Tên loại người dùng</label>
                <input class="textfield NAME_TYPE_USER_SEARCH" type="text">
            </div>
            <div>
                <label for="">Trạng Thái</label>
                <input type="checkbox" class="switch STATUS_TYPE_USER_SEARCH" data-content="đang hoạt động" checked onclick="changeDataContent(this)">
            </div>
            <div>
                <label for=""></label>
                <button class="btn btn--Search" onclick="SearchInfo('Type_User')">Tìm Kiếm</button>
                <button class="btn btn--Undo" onclick="loadPageByAjax('Admin_TypeUser')">Hoàn Tác</button>
            </div>
        </div>
    </div>
    <div class="list-container">
        <div class="title-list">
            <h3>danh sách loại người dùng</h3>
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
                        <th>mã loại người dùng</th>
                        <th>tên người dùng</th>
                        <th>trạng thái</th>
                        <th>hoạt động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("ConnectDB.php");
                    $db = new ConnectDB();
                    $sql = "SELECT *  FROM type_users WHERE STATUS_TYPE_USER NOT IN ('đã xóa')";
                    $result = $db->connection($sql);
                    $i = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        $action = ($row['STATUS_TYPE_USER'] == 'ngừng hoạt động') ? '' : 'action';
                        echo '<tr>
                                    <td>' . $i++ . '</td>
                                    <td class="ID_OBJECT">' . $row['TYPE_USER_ID'] . '</td>
                                    <td class="NAME_OBJECT">' . $row['NAME_TYPE_USER'] . '</td>
                                    <td class="STATUS_OBJECT">' . $row['STATUS_TYPE_USER'] . '</td>
                                    <td>
                                        <button class="btnFix ' . $action . '">chỉnh sửa</button>
                                        <button class="btnDel">xóa</button>
                                    </td>
                                </tr>';
                    }
                    echo '<script>
                    if($(".sidebar .type_user_per").hasClass("create")) {
                        $(".btnCreate").addClass("enable");
                    }
                    if($(".sidebar .type_user_per").hasClass("delete")) {
                        $(".btnDel").addClass("enable");
                    }
                    if($(".sidebar .type_user_per").hasClass("update")) {
                        $(".btnFix").addClass("enable");
                    }
                    if($(".sidebar .type_user_per").hasClass("control")) {
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