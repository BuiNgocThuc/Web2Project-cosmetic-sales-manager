<section id="Admin_Decentralization" data-content="nhóm quyền">
    <div class="overlay">

    </div>
    <div class="new-form">
        <section id="create_new_role" style="display: none">
            <i onclick="hiddenForm()" style="cursor: pointer;" class="fa-sharp fa-light fa-xmark" id="close"></i>
            <div class="new-name-role">
                <label for="" class="name-role">tên nhóm quyền: </label>
                <input class="textfield new-name" type="text">
            </div>
            <div class="new-description-role">
                <label for="" class="description-role">mô tả quyền: </label>
                <input class="textfield new-description" type="text">
            </div>
            <table class="list-permission">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>mã chức năng</th>
                        <th>tên chức năng</th>
                        <th>Thêm</th>
                        <th>Xóa</th>
                        <th>Sửa</th>
                        <th>Tra Cứu</th>
                        <th>Điều Khiển</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once("ConnectDB.php");
                    $db = new ConnectDB();
                    $sql = "SELECT *  FROM permission ";
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

        <!-- -----Update Form ------ -->
        <section id="update_role" style="display: none">
            <i onclick="hiddenForm()" style="cursor: pointer;" class="fa-sharp fa-light fa-xmark" id="close"></i>
            <div class="new-name-role">
                <label for="" class="name-role">tên nhóm quyền: </label>
                <input class="textfield NAME_OBJECT" type="text">
            </div>
            <div class="new-description-role">
                <label for="" class="description-role">mô tả quyền: </label>
                <input class="textfield DESCRIPTION_OBJECT" type="text">
            </div>
            <div class="new-status-role">
                <label for="" class="status-role">Trạng Thái: </label>
                <input type="checkbox" class="switch STATUS_ROLE" data-content="ngừng hoạt động" onclick="changeDataContent(this)">
            </div>
            <table class="list-permission">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>mã chức năng</th>
                        <th>tên chức năng</th>
                        <th>Thêm</th>
                        <th>Xóa</th>
                        <th>Sửa</th>
                        <th>Tra Cứu</th>
                        <th>Điều Khiển</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once("ConnectDB.php");
                    $db = new ConnectDB();
                    // $idRole = $_GET['idRole'];
                    $sql = "SELECT *  FROM permission";
                    $result = $db->connection($sql);
                    $i = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<tr>
                                    <td class="STT">' . $i++ . '</td>
                                    <td class="ID_OBJECT">' . $row['PERMISSION_ID'] . '</td>
                                    <td class="NAME_OBJECT">' . $row['NAME_PER'] . '</td>';
                        if ($row['CREATE_PER'] == 1) {
                            echo '<td>
                            <input type="checkbox" class="switch create-action" data-action="create" data-id="' . $row['PERMISSION_ID'] . '" data-content="ngừng hoạt động" onclick="changeDataContent(this)" >
                        </td>';
                        }
                        if ($row['CREATE_PER'] == 0) {
                            echo '<td>
                            
                        </td>';
                        }
                        if ($row['DELETE_PER'] == 1) {
                            echo '<td>
                            <input type="checkbox" class="switch delete-action" data-action="delete" data-id="' . $row['PERMISSION_ID'] . '" data-content="ngừng hoạt động" onclick="changeDataContent(this)">
                        </td>';
                        }
                        if ($row['DELETE_PER'] == 0) {
                            echo '<td>
                            
                        </td>';
                        }
                        if ($row['UPDATE_PER'] == 1) {
                            echo '<td>
                            <input type="checkbox" class="switch update-action" data-action="update" data-id="' . $row['PERMISSION_ID'] . '" data-content="ngừng hoạt động" onclick="changeDataContent(this)" >
                        </td>';
                        }
                        if ($row['UPDATE_PER'] == 0) {
                            echo '<td>
                        
                        </td>';
                        }
                        if ($row['ACCESS_PER'] == 1) {
                            echo '<td>
                            <input type="checkbox" class="switch access-action" data-action="access" data-id="' . $row['PERMISSION_ID'] . '" data-content="ngừng hoạt động" onclick="changeDataContent(this)" >
                        </td>';
                        }
                        if ($row['ACCESS_PER'] == 0) {
                            echo '<td>
                            
                        </td>';
                        }
                        if ($row['CONTROL_PER'] == 1) {
                            echo '<td>
                            <input type="checkbox" class="switch control-action" data-action="control" data-id="' . $row['PERMISSION_ID'] . '" data-content="ngừng hoạt động" onclick="changeDataContent(this)">
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
                <button class="btnConfirm btn" onclick="updateR_P()">Thêm</button>
                <button class="btnCancel btn" onclick="hiddenForm()">Hủy Bỏ</button>
            </div>
        </section>

        <!-- -----Delete Form ------ -->
        <div id="delete-form" style="display: none;">
            <i onclick="hiddenForm()" style="cursor: pointer;" class="fa-sharp fa-light fa-xmark" id="close"></i>
            <div class="title">Xóa thương hiệu</div>
            <p class="warning"> Bằng cách xác nhận xóa thương hiệu này, bạn không thể tạo hoặc cập nhật sản phẩm với thương hiệu này nữa</p>
            <div class="tool">
                <button class="btnConfirm btn" onclick="DeleteInfo('Role')">Xóa</button>
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
                <label for="">mã Quyền</label>
                <input class="textfield ID_ROLE_SEARCH" type="text">
            </div>
            <div>
                <label for="">tên Quyền</label>
                <input class="textfield NAME_ROLE_SEARCH" type="text">
            </div>
            <!-- <div>
                <label for="">Mô Tả Quyền</label>
                <input class="textfield" type="text">
            </div> -->
            <div>
                <label for="">Trạng Thái</label>
                <input type="checkbox" class="switch STATUS_ROLE_SEARCH" data-content="ngừng hoạt động" onclick="changeDataContent(this)">
            </div>
            <div>
                <label for=""></label>
                <button class="btn btn--Search" onclick="SearchInfo('Role')">Tìm Kiếm</button>
                <button class="btn btn--Undo" onclick="loadPageByAjax('Admin_Decentralization')">Hoàn Tác</button>
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
                        require_once("ConnectDB.php");
                        $db = new ConnectDB();
                        $sql = "SELECT *  FROM roles WHERE STATUS_ROLE NOT IN ('đã xóa') AND ROLE_ID NOT IN ('0')";
                        $result = $db->connection($sql);
                        $i = 1;
                        while ($row = mysqli_fetch_array($result)) {
                            $action = ($row['STATUS_ROLE'] == 'ngừng hoạt động') ? '' : 'action';
                            echo '<tr>
                                    <td class="STT">' . $i++ . '</td>
                                    <td class="ID_OBJECT">' . $row['ROLE_ID'] . '</td>
                                    <td class="NAME_OBJECT">' . $row['NAME_ROLE'] . '</td>
                                    <td class="DESCRIPTION_OBJECT">' . $row['DESCRIPTION_ROLE'] . '</td>
                                    <td class="STATUS_OBJECT">' . $row['STATUS_ROLE'] . '</td>
                                    <td>
                                        <button class="' . $action . ' btnUpdateRole">chỉnh sửa</button>
                                        <button class="btnDel">xóa</button>
                                    </td>
                                </tr>';
                        }
                        echo '<script>
                    if($(".sidebar .decentralization_per").hasClass("Create")) {
                        $(".btnCreate").addClass("enable");
                    }
                    if($(".sidebar .decentralization_per").hasClass("Delete")) {
                        $(".btnDel").addClass("enable");
                    }
                    if($(".sidebar .decentralization_per").hasClass("Update")) {
                        $(".btnUpdateRole").addClass("enable");
                    }
                    if($(".sidebar .decentralization_per").hasClass("Control")) {
                        $(".btnUpdateRole").addClass("enable");
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