<section id="Admin_Decentralization" data-content="nhóm quyền">
    <div class="overlay">

    </div>
    <div class="new-form">
        <section id="create_new_role">
            <i onclick="hiddenForm()" style="cursor: pointer;" class="fa-sharp fa-light fa-xmark" id="close"></i>
            <div class="new-name-role">
                <label for="" class="name-role">tên nhóm quyền: </label>
                <input class="textfield" type="text">
            </div>
            <div class="new-description-role">
                <label for="" class="description-role">mô tả quyền: </label>
                <input class="textfield" type="text">
            </div>
            <table class="list-permission">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>mã chức năng</th>
                        <th>tên sản phẩm</th>
                        <th>Thêm</th>
                        <th>Xóa</th>
                        <th>Sửa</th>
                        <th>Tra Cứu</th>
                        <th>Điều Khiển</th>
                    </tr>
                </thead>
                <tbody>
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
                                    <td class="NAME_OBJECT">' . $row['NAME_PER'] . '</td>';
                        if ($row['CREATE_PER'] == 1) {
                            echo '<td>
                            <input type="checkbox" class="switch" data-action="create" data-id="' . $row['PERMISSION_ID'] . '" data-content="ngừng hoạt động" onclick="changeDataContent(this)">
                        </td>';
                        }
                        if ($row['CREATE_PER'] == 0) {
                            echo '<td>
                            
                        </td>';
                        }
                        if ($row['DELETE_PER'] == 1) {
                            echo '<td>
                            <input type="checkbox" class="switch" data-action="delete" data-id="' . $row['PERMISSION_ID'] . '" data-content="ngừng hoạt động" onclick="changeDataContent(this)">
                        </td>';
                        }
                        if ($row['DELETE_PER'] == 0) {
                            echo '<td>
                            
                        </td>';
                        }
                        if ($row['UPDATE_PER'] == 1) {
                            echo '<td>
                            <input type="checkbox" class="switch" data-action="update" data-id="' . $row['PERMISSION_ID'] . '" data-content="ngừng hoạt động" onclick="changeDataContent(this)">
                        </td>';
                        }
                        if ($row['UPDATE_PER'] == 0) {
                            echo '<td>
                        
                        </td>';
                        }
                        if ($row['ACCESS_PER'] == 1) {
                            echo '<td>
                            <input type="checkbox" class="switch" data-action="access" data-id="' . $row['PERMISSION_ID'] . '" data-content="ngừng hoạt động" onclick="changeDataContent(this)">
                        </td>';
                        }
                        if ($row['ACCESS_PER'] == 0) {
                            echo '<td>
                            
                        </td>';
                        }
                        if ($row['CONTROL_PER'] == 1) {
                            echo '<td>
                            <input type="checkbox" class="switch " data-action="control" data-id=' . $row['PERMISSION_ID'] . '"" data-content="ngừng hoạt động" onclick="changeDataContent(this)">
                        </td>';
                        }
                        if ($row['CONTROL_PER'] == 0) {
                            echo '<td>
                            
                        </td>';
                        }
                        echo   '</tr>';
                    }
                    ?>
                </tbody>
            </table>
            <div class="tool">
                <button class="btnConfirm btn" onclick="createR_P()">Thêm</button>
                <button class="btnCancel btn" onclick="hiddenForm()">Hủy Bỏ</button>
            </div>
        </section>
    </div>

    <div class="form-container">
        <div class="title-form">
            <h3 for="">tùy chọn tìm kiếm</h3>
            <span><i onclick="changeIconArrow(this), hideForm()" class="fa-regular fa-angle-up"></i></span>
        </div>
        <div class="fix-info">
            <div>
                <label for="">mã Quyền</label>
                <input class="textfield" type="text">
            </div>
            <div>
                <label for="">tên Quyền</label>
                <input class="textfield" type="text">
            </div>
            <div>
                <label for="">Mô Tả Quyền</label>
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
            <h3>danh sách nhóm quyền</h3>
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
                        <th>Mã Qyền</th>
                        <th>Tên Quyền</th>
                        <th>Mô Tả</th>
                        <th>trạng thái</th>
                        <th>hoạt động</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        include_once("ConnectDB.php");
                        $db = new ConnectDB();
                        $sql = "SELECT *  FROM roles WHERE STATUS_ROLE NOT IN ('đã xóa') AND ROLE_ID NOT IN ('0')";
                        $result = $db->connection($sql);
                        $i = 1;
                        while ($row = mysqli_fetch_array($result)) {

                            echo '<tr>
                                    <td class="STT">' . $i++ . '</td>
                                    <td class="ID_OBJECT">' . $row['ROLE_ID'] . '</td>
                                    <td class="NAME_OBJECT">' . $row['NAME_ROLE'] . '</td>
                                    <td class="DESCRIPTION_OBJECT">' . $row['DESCRIPTION_ROLE'] . '</td>
                                    <td class="STATUS_OBJECT">' . $row['STATUS_ROLE'] . '</td>
                                    <td>
                                        <button class="btnFix">chỉnh sửa</button>
                                        <button class="btnDel">xóa</button>
                                    </td>
                                </tr>';
                        }
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</section>