
<section id="Admin_Permission" data-content="Chức năng">
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