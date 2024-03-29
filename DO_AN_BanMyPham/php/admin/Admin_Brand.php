<main id="Admin_Brand" data-content="Danh sách Thương hiệu">
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
                    <input class="textfield new-name" type="text">
                </div>
                <!-- <div>
                    <label for="" class="img-brand">hình ảnh: </label>
                    <div class="image-upload">
                        <input id="file-input" class="new-img" type="file" accept="image/png,img/jpg,img/jpeg">
                        <label for="file-input" class="icon-upload">
                            <i class="fa-duotone fa-plus fa-2xl"></i>
                            <span>đăng tải</span>
                        </label>
                    </div>
                </div> -->
                <!-- <div>
                    <label for="">Trạng Thái: </label>
                    <input type="checkbox" class="switch" data-content="ngừng hoạt động" onclick="changeDataContent(this)">
                </div> -->
            </form>
            <div class="tool">
                <button class="btnConfirm btn" onclick="AddInfo('Brand')">Thêm</button>
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
                    <input type="checkbox" class="switch" data-content="ngừng hoạt động" onclick="changeDataContent(this)">
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
            <p class="warning"> Bằng cách xác nhận xóa thương hiệu này, bạn không thể tạo hoặc c0p nhật sản phẩm với thương hiệu này nữa</p>
            <div class="tool">
                <button class="btnConfirm btn" onclick="DeleteInfo('Brand')">Xóa</button>
                <button class="btnCancel btn">Hủy Bỏ</button>
            </div>
        </div>
    </div>

    <!-- -----Content ------ -->
    <div class="form-container">
        <div class="title-form" >
            <h3 for="">tùy chọn tìm kiếm</h3>
            <span><i onclick="changeIconArrow(this), hideForm()" class="fa-regular fa-angle-up"></i></span>
        </div>
        <div class="fix-info">
            <div>
                <label for="">Mã nhãn hàng</label>
                <input class="textfield ID_BRAND_SEARCH" type="text">
            </div>
            <div>
                <label for="">Tên nhãn hàng</label>
                <input class="textfield NAME_BRAND_SEARCH" type="text">
            </div>
            <div>
                <label for="">Trạng Thái</label>
                <input type="checkbox" class="switch STATUS_BRAND_SEARCH" data-content="đang hoạt động" onclick="changeDataContent(this)" checked>
            </div>
            <div>
                <label for=""></label>
                <button class="btn btn--Search" onclick="SearchInfo('Brand')">Tìm Kiếm</button>
                <button class="btn btn--Undo" onclick="loadPageByAjax('Admin_Brand')">Hoàn Tác</button>
            </div>
        </div>
    </div>
    <div class="list-container">
        <div class="title-list">
            <h3>danh sách thương hiệu</h3>
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
                        <th>mã nhãn hàng</th>
                        <th>tên nhãn hàng</th>
                        <th>trạng thái</th>
                        <th>hoạt động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("ConnectDB.php");
                    $db = new ConnectDB();
                    // $nameBrand = "";
                    // $statusBrand = "";
                    // $idBrand = "";
                    // if(isset($_SESSION['data'])) {
                    //     echo 'exist';
                    //     $nameBrand = $_SESSION['data']['nameBrand'];
                    //     $statusBrand = $_SESSION['data']['statusBrand'];
                    //     $idBrand = $_SESSION['data']['idBrand'];
                    // }
                    $sql = "SELECT *  FROM brands WHERE STATUS_BRAND NOT IN ('đã xóa')";
                    // $check = false;
                    // if($nameBrand != "" || $statusBrand != "" || $idBrand != "") {
                    //     $sql .= "AND ";
                    //     if($nameBrand != "") {
                    //         $sql .= "NAME_BRAND LIKE '%$nameBrand%' ";
                    //         $check = true;
                    //     }
                    //     if($idBrand != "") {
                    //         if($check) {
                    //             $sql .= "AND ";
                    //         }
                    //         $sql .= "BRAND_ID LIKE '%$idBrand%' ";
                    //         $check = true;
                    //     }
                    //     if($statusBrand != "") {
                    //         if($check) {
                    //             $sql .= "AND ";
                    //         }
                    //         $sql .= "STATUS_BRAND LIKE '%$statusBrand%' ";
                    //         $check = true;
                    //     }
                    // }
                    $result = $db->connection($sql);
                    $i = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        $action = ($row['STATUS_BRAND'] == 'ngừng hoạt động') ? '' : 'action';

                        echo '<tr>
                                    <td class="STT">' . $i++ . '</td>
                                    <td class="ID_OBJECT">' . $row['BRAND_ID'] . '</td>
                                    <td class="NAME_OBJECT">' . $row['NAME_BRAND'] . '</td>
                                    <td class="STATUS_OBJECT">' . $row['STATUS_BRAND'] . '</td>
                                    <td>
                                        <button class="btnFix ' . $action . '">chỉnh sửa</button>
                                        <button class="btnDel" data-ordinal="' . ($i - 1) . '">xóa</button>
                                    </td>
                                </tr>';
                    }


                    echo '<script>
                        if($(".sidebar .brand_per").hasClass("create")) {
                            $(".btnCreate").addClass("enable");
                        }
                        if($(".sidebar .brand_per").hasClass("delete")) {
                            $(".btnDel").addClass("enable");
                        }
                        if($(".sidebar .brand_per").hasClass("update")) {
                            $(".btnFix").addClass("enable");
                        }
                        if($(".sidebar .brand_per").hasClass("control")) {
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
