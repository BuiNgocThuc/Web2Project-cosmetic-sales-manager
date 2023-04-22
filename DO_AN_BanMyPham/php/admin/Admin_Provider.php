<main id="Admin_Provider" data-content="Danh sách nhà cung cấp">
    <div class="overlay">

    </div>
    <div class="new-form">
        <!-- -----Create Form ------ -->
        <div id="create-form" style="display: none;">
            <i onclick="hiddenForm()" style="cursor: pointer;" class="fa-sharp fa-light fa-xmark" id="close"></i>
            <div class="title">Thêm Nhà Cung Cấp Mới Mới</div>
            <form action="" class="content">
                <div>
                    <label for="" class="name-provider">tên nhà cung cấp: </label>
                    <input class="textfield new-name" type="text">
                </div>
                <div>
                    <label for="" class="phone-provider">số điện thoại: </label>
                    <input class="textfield new-phone" type="text">
                </div>
                <div>
                    <label for="" class="address-provider">địa chỉ: </label>
                    <input class="textfield new-address" type="text">
                </div>
                <div>
                    <label for="" class="email-provider">email: </label>
                    <input class="textfield new-email" type="text">
                </div>
                <div>
                    <label for="">Trạng Thái: </label>
                    <input type="checkbox" class="switch" data-content="ngừng hoạt động" onclick="changeDataContent(this)">
                </div>
            </form>
            <div class="tool">
                <button class="btnConfirm btn" onclick="AddInfo('Provider')">Thêm</button>
                <button class="btnCancel btn">Hủy Bỏ</button>
            </div>
        </div>

        <!-- -----Update Form ------ -->
        <div id="fix-form" style="display: none;">
            <i onclick="hiddenForm()" style="cursor: pointer;" class="fa-sharp fa-light fa-xmark" id="close"></i>
            <div class="title">Cập nhật thương hiệu</div>
            <form action="" class="content">
            <div>
                    <label for="" class="name-provider">tên nhà cung cấp: </label>
                    <input class="textfield NAME_OBJECT" type="text">
                </div>
                <div>
                    <label for="" class="phone-provider">số điện thoại: </label>
                    <input class="textfield PHONE_OBJECT" type="text">
                </div>
                <div>
                    <label for="" class="address-provider">địa chỉ: </label>
                    <input class="textfield ADDRESS_OBJECT" type="text">
                </div>
                <div>
                    <label for="" class="email-provider">email: </label>
                    <input class="textfield EMAIL_OBJECT" type="text">
                </div>
                <div>
                    <label for="">Trạng Thái: </label>
                    <input type="checkbox" class="switch" data-content="ngừng hoạt động" onclick="changeDataContent(this)">
                </div>
            </form>
            <div class="tool">
                <button class="btnConfirm btn" onclick="UpdateInfo('Provider')">Cập nhật</button>
                <button class="btnCancel btn" onclick="hiddenForm()">Hủy Bỏ</button>
            </div>
        </div>
        <!-- -----Delete Form ------ -->
        <div id="delete-form" style="display: none;">
            <i onclick="hiddenForm()" style="cursor: pointer;" class="fa-sharp fa-light fa-xmark" id="close"></i>
            <div class="title">Xóa thương hiệu</div>
            <p class="warning"> Bằng cách xác nhận xóa thương hiệu này, bạn không thể tạo hoặc cập nhật sản phẩm với thương hiệu này nữa</p>
            <div class="tool">
                <button class="btnConfirm btn" onclick="DeleteInfo('Provider')">Xóa</button>
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
                <label for="">mã nhà cung cấp</label>
                <input class="textfield ID_PROVIDER_SEARCH" type="text">
            </div>
            <div>
                <label for="">tên nhà cung cấp</label>
                <input class="textfield NAME_PROVIDER_SEARCH" type="text">
            </div>
            <div>
                <label for="">Trạng Thái</label>
                <input type="checkbox" class="switch STATUS_PROVIDER_SEARCH" data-content="ngừng hoạt động" onclick="changeDataContent(this)">
            </div>
            <div>
                <label for=""></label>
                <button class="btn btn--Search" onclick="SearchInfo('Provider')">Tìm Kiếm</button>
                <button class="btn btn--Undo" onclick="loadPageByAjax('Admin_Provider')">Hoàn Tác</button>
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
                    $sql = "SELECT *  FROM providers WHERE STATUS_PROVIDER NOT IN ('đã xóa')";
                    $result = $db->connection($sql);
                    $i = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        $action = ($row['STATUS_PROVIDER'] == 'ngừng hoạt động') ? '' : 'action';
                        echo '<tr>
                                    <td>' . $i++ . '</td>
                                    <td class="ID_OBJECT">' . $row['PROVIDER_ID'] . '</td>
                                    <td class="NAME_OBJECT">' . $row['NAME_PROVIDER'] . '</td>
                                    <td class="PHONE_OBJECT">' . $row['PHONE_PROVIDER'] . '</td>
                                    <td class="ADDRESS_OBJECT">' . $row['ADDRESS_PROVIDER'] . '</td>
                                    <td class="EMAIL_OBJECT">' . $row['EMAIL_PROVIDER'] . '</td>
                                    <td class="STATUS_OBJECT">' . $row['STATUS_PROVIDER'] . '</td>
                                    <td>
                                        <button class="btnFix ' . $action . '">chỉnh sửa</button>
                                        <button class="btnDel">xóa</button>
                                    </td>
                                </tr>';
                    }
                    echo '<script>
                    if($(".sidebar .provider_per").hasClass("Create")) {
                        $(".btnCreate").addClass("enable");
                    }
                    if($(".sidebar .provider_per").hasClass("Delete")) {
                        $(".btnDel").addClass("enable");
                    }
                    if($(".sidebar .provider_per").hasClass("Update")) {
                        $(".btnFix").addClass("enable");
                    }
                    if($(".sidebar .provider_per").hasClass("Control")) {
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