<main id="Admin_Category" data-content="Danh mục sản phẩm">
    <div class="overlay">

    </div>
    <div class="new-form">
        <!-- -----Create Form ------ -->
        <div id="create-form" style="display: none;">
            <i onclick="hiddenForm()" style="cursor: pointer;" class="fa-sharp fa-light fa-xmark" id="close"></i>
            <div class="title">Thêm Danh Mục Mới</div>
            <form action="" class="content">
                <div>
                    <label for="" class="name-brand">tên danh mục: </label>
                    <input class="textfield" type="text">
                </div>
                <!-- <div>
                    <label for="" class="img-brand">hình ảnh: </label>
                    <div class="image-upload">
                        <input id="file-input" type="file" accept="image/png,img/jpg,img/jpeg">
                        <label for="file-input" class="icon-upload">
                            <i class="fa-duotone fa-plus fa-2xl"></i>
                            <span>đăng tải</span>
                        </label>
                    </div>
                </div> -->
                <div>
                    <label for="">Trạng Thái: </label>
                    <input type="checkbox" class="switch" data-content="ngừng hoạt động" onclick="changeDataContent(this)">
                </div>
            </form>
            <div class="tool">
                <button class="btnAdd btn">Thêm</button>
                <button class="btnRemove btn">Hủy Bỏ</button>
            </div>
        </div>

        <!-- -----Update Form ------ -->
        <div id="fix-form" style="display: none;">
            <i onclick="hiddenForm()" style="cursor: pointer;" class="fa-sharp fa-light fa-xmark" id="close"></i>
            <div class="title">Cập nhật Danh mục</div>
            <form action="" class="content">
                <div>
                    <label for="" class="name-brand">tên danh mục: </label>
                    <input class="textfield" type="text">
                </div>
                <!-- <div>
                    <label for="" class="img-brand">hình ảnh: </label>
                    <label for="file-input" class="image-upload">
                        <input id="file-input" type="file" accept="image/png,img/jpg,img/jpeg">
                        <label for="file-input" class="icon-upload">
                            <i class="fa-duotone fa-plus fa-2xl"></i>
                            <span>đăng tải</span>
                        </label>
                    </label>
                </div> -->
                <div>
                    <label for="">Trạng Thái: </label>
                    <input type="checkbox" class="switch" data-content="ngừng hoạt động" onclick="changeDataContent(this)">
                </div>
            </form>
            <div class="tool">
                <button class="btnAdd btn">Cập nhật</button>
                <button class="btnRemove btn">Hủy Bỏ</button>
            </div>
        </div>
        <!-- -----Delete Form ------ -->
        <div id="delete-form" style="display: none;">
            <i onclick="hiddenForm()" style="cursor: pointer;" class="fa-sharp fa-light fa-xmark" id="close"></i>
            <div class="title">Xóa danh mục</div>
            <p class="warning"> Bằng cách xác nhận xóa danh mục này, bạn không thể tạo hoặc cập nhật sản phẩm với danh mục này nữa</p>
            <div class="tool">
                <button class="btnAdd btn">Xóa</button>
                <button class="btnRemove btn">Hủy Bỏ</button>
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
                <label for="">Mã danh mục</label>
                <input class="textfield" type="text">
            </div>
            <div>
                <label for="">Tên loại hàng</label>
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
            <h3>danh mục sản phẩm</h3>
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
                        <th>mã danh mục</th>
                        <th>tên danh mục</th>
                        <th>trạng thái</th>
                        <th>hoạt động</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include("ConnectDB.php");
                    $db = new ConnectDB();
                    $sql = "SELECT *  FROM category";
                    $result = $db->connection($sql);
                    $i = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<tr>
                                    <td>' . $i++ . '</td>
                                    <td>' . $row['CATEGORY_ID'] . '</td>
                                    <td>' . $row['NAME_CAT'] . '</td>
                                    <td>' . $row['STATUS_CAT'] . '</td>
                                    <td>
                                        <button class="btnFix">chỉnh sửa</button>
                                        <button class="btnDel">xóa</button>
                                    </td>
                                </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</main>