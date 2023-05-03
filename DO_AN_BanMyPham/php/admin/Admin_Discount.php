<main id="Admin_Discount" data-content="Danh sách phiếu giảm giá">
    <div class="overlay">

    </div>
    <div class="new-form">
        <!-- -----Create Form ------ -->
        <div id="create-form" style="display: none;">
            <i onclick="hiddenForm()" style="cursor: pointer;" class="fa-sharp fa-light fa-xmark" id="close"></i>
            <div class="title">Thêm Thương Hiệu Mới</div>
            <form action="" class="content">
                <div>
                    <label for="" class="name-discount">mô tả khuyến mãi: </label>
                    <input class="textfield new-name" type="text">
                </div>
                <div>
                    <label for="" class="condition-discount">điều kiện khuyến mãi: </label>
                    <input class="textfield new-condition" type="number">
                </div>
                <div>
                    <label for="" class="percent-discount">Phần trăm giảm giá: </label>
                    <input class="textfield new-percent" type="text">
                </div>
                <div>
                    <label for="" class="date-start-discount">ngày bắt đầu: </label>
                    <input class="textfield new-date-start" type="date">
                </div>
                <div>
                    <label for="" class="date-end-discount">ngày kết thúc: </label>
                    <input class="textfield new-date-end" type="date">
                </div>
                <!-- <div>
                    <label for="">Trạng Thái: </label>
                    <input type="checkbox" class="switch" data-content="ngừng hoạt động" onclick="changeDataContent(this)">
                </div> -->
            </form>
            <div class="tool">
                <button class="btnConfirm btn" onclick="AddInfo('Discount')">Thêm</button>
                <button class="btnCancel btn">Hủy Bỏ</button>
            </div>
        </div>

        <!-- -----Update Form ------ -->
        <div id="fix-form" style="display: none;">
            <i onclick="hiddenForm()" style="cursor: pointer;" class="fa-sharp fa-light fa-xmark" id="close"></i>
            <div class="title">Cập nhật thương hiệu</div>
            <form action="" class="content">
                <div>
                    <label for="" class="name-discount">tên thương hiệu: </label>
                    <input class="textfield NAME_OBJECT" type="text">
                </div>
                <div>
                    <label for="" class="condition-discount">điều kiện khuyến mãi: </label>
                    <input class="textfield CONDITION" type="number">
                </div>
                <div>
                    <label for="" class="percent-discount">Phần trăm giảm giá: </label>
                    <input class="textfield PERCENT" type="text">
                </div>
                <div>
                    <label for="" class="date-start-discount">ngày bắt đầu: </label>
                    <input class="textfield START_DATE" type="date">
                </div>
                <div>
                    <label for="" class="date-end-discount">ngày kết thúc: </label>
                    <input class="textfield END_DATE" type="date">
                </div>
                <!-- <div>
                    <label for="">Trạng Thái: </label>
                    <input type="checkbox" class="switch" data-content="ngừng hoạt động" onclick="changeDataContent(this)">
                </div> -->
            </form>
            <div class="tool">
                <button class="btnConfirm btn"  onclick="UpdateInfo('Discount')">Cập nhật</button>
                <button class="btnCancel btn" onclick="hiddenForm()">Hủy Bỏ</button>
            </div>
        </div>
        <!-- -----Delete Form ------ -->
        <div id="delete-form" style="display: none;">
            <i onclick="hiddenForm()" style="cursor: pointer;" class="fa-sharp fa-light fa-xmark" id="close"></i>
            <div class="title">Xóa thương hiệu</div>
            <p class="warning"> Bằng cách xác nhận xóa thương hiệu này, bạn không thể tạo hoặc cập nhật sản phẩm với thương hiệu này nữa</p>
            <div class="tool">
                <button class="btnConfirm btn" onclick="DeleteInfo('Discount')">Xóa</button>
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
                <label for="">Mã Giảm Giá</label>
                <input class="textfield ID_DISCOUNT_SEARCH" type="text">
            </div>
            <div>
                <label for="">Mô Tả</label>
                <input class="textfield NAME_DISCOUNT_SEARCH" type="text">
            </div>
            <div>
                <label for="">Ngày bắt đầu</label>
                <input class="textfield START_DATE_DISCOUNT_SEARCH" type="date">
            </div>
            <div>
                <label for="">Ngày kết thúc</label>
                <input class="textfield END_DATE_DISCOUNT_SEARCH" type="date">
            </div>
            <div>
                <label for="">Trạng Thái</label>
                <input type="checkbox" class="switch STATUS_DISCOUNT_SEARCH" data-content="đang hoạt động" checked onclick="changeDataContent(this)">
            </div>
            <div>
                <label for=""></label>
                <button class="btn btn--Search" onclick="SearchInfo('Discount')">Tìm Kiếm</button>
                <button class="btn btn--Undo">Hoàn Tác</button>
            </div>
        </div>
    </div>
    <div class="list-container">
        <div class="title-list">
            <h3>danh sách phiếu giảm giá</h3>
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
                        <th>mã giảm giá</th>
                        <th>mô tả</th>
                        <th>điều kiện</th>
                        <th>phần trăm giảm giá</th>
                        <th>kích hoạt từ</th>
                        <th>kích hoạt đến</th>
                        <th>trạng thái</th>
                        <th>hoạt động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("ConnectDB.php");
                    $db = new ConnectDB();
                    $sql = "SELECT *  FROM discounts WHERE STATUS_DISCOUNT NOT IN ('đã xóa')";
                    $result = $db->connection($sql);
                    $i = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        $action = ($row['STATUS_DISCOUNT'] == 'ngừng hoạt động') ? '' : 'action';
                        echo '<tr>
                                    <td>' . $i++ . '</td>
                                    <td class="ID_OBJECT">' . $row['DISCOUNT_ID'] . '</td>
                                    <td class="NAME_OBJECT">' . $row['NAME_DISCOUNT'] . '</td>
                                    <td class="CONDITION">' . $row['CONDITION'] . '</td>
                                    <td class="PERCENT">' . $row['PERCENT'] . '</td>
                                    <td class="START_DATE">' . $row['START_DATE'] . '</td>
                                    <td class="END_DATE">' . $row['END_DATE'] . '</td>
                                    <td class="STATUS_OBJECT">' . $row['STATUS_DISCOUNT'] . '</td>
                                    <td>
                                        <button class="btnFix ' . $action . '">chỉnh sửa</button>
                                        <button class="btnDel">xóa</button>
                                    </td>
                                </tr>';
                    }
                    echo '<script>
                    if($(".sidebar .discount_per").hasClass("create")) {
                        $(".btnCreate").addClass("enable");
                    }
                    if($(".sidebar .discount_per").hasClass("delete")) {
                        $(".btnDel").addClass("enable");
                    }
                    if($(".sidebar .discount_per").hasClass("update")) {
                        $(".btnFix").addClass("enable");
                    }
                    if($(".sidebar .discount_per").hasClass("control")) {
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