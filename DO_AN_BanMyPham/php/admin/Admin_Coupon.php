<main id="Admin_Coupon" data-content="lịch sử phiếu nhập">
    <div class="form-container">
        <div class="title-form">
            <h3 for="">tùy chọn tìm kiếm</h3>
            <span><i onclick="changeIconArrow(this), hideForm()" class="fa-regular fa-angle-up"></i></span>
        </div>
        <div class="fix-info">
            <div>
                <label for="">Mã phiếu nhập</label>
                <input class="textfield ID_IMPORT_RECEIPT_SEARCH" type="text">
            </div>
            <div>
                <label for="">tên nhà cung cấp</label>
                <input class="textfield NAME_PROVIDER_IMPORT_SEARCH" type="text">
            </div>
            <div>
                <label for="">Ngày nhập hàng</label>
                <input class="textfield IMPORT_DATE_SEARCH" type="date">
            </div>
            <div>
                <label for=""></label>
                <button class="btn btn--Search" onclick="SearchInfo('Import_Receipt')">Tìm Kiếm</button>
                <button class="btn btn--Undo">Hoàn Tác</button>
            </div>
        </div>
    </div>
    <div class="list-container">
        <div class="title-list">
            <h3>lịch sử nhập hàng</h3>
            <button class="btnCreate" onclick="loadPageByAjax('Coupon_Detail')">
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
                    include_once("ConnectDB.php");
                    $db = new ConnectDB();
                    $sql = "SELECT *  FROM import
                        join providers on providers.PROVIDER_ID = import.PROVIDER_ID
                        join users on USERS.USER_ID = import.USER_ID";
                    $result = $db->connection($sql);
                    $i = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<tr>
                                <td>' . $i++ . '</td>
                                <td class="ID_OBJECT">' . $row['IMPORT_ID'] . '</td>
                                <td>' . $row['NAME_PROVIDER'] . '</td>
                                <td>' . $row['NAME'] . '</td>
                                <td>' . $row['DATE_CREATE'] . '</td>
                                <td>' . $row['TOTAL'] . '</td>
                                <td>
                                    <button class="btnFixCoupon">chỉnh sửa</button>
                                </td>
                            </tr>';
                    }
                    echo '<script>
                    if($(".sidebar .import_receipt_per").hasClass("create")) {
                        $(".btnCreate").addClass("enable");
                    }
                    if($(".sidebar .import_receipt_per").hasClass("update")) {
                        $(".btnFixCoupon").addClass("enable");
                    }
                    if($(".sidebar .import_receipt_per").hasClass("control")) {
                        $(".btnFixCoupon").addClass("enable");
                        $(".btnCreate").addClass("enable");
                    }
                </script>';
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</main>