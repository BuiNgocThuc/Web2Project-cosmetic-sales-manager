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
                    <label for="" class="name-brand">tên thương hiệu: </label>
                    <input class="textfield" type="text">
                </div>
                <div>
                    <label for="" class="img-brand">hình ảnh: </label>
                    <div class="image-upload">
                        <input id="file-input" type="file" accept="image/png,img/jpg,img/jpeg">
                        <label for="file-input" class="icon-upload">
                            <i class="fa-duotone fa-plus fa-2xl"></i>
                            <span>đăng tải</span>
                        </label>
                    </div>
                </div>
                <div>
                    <label for="">Trạng Thái: </label>
                    <input type="checkbox" class="switch" data-content="ngừng hoạt động" onclick="changeDataContent(this)">
                </div>
            </form>
            <div class="tool">
                <button class="btnConfirm btn">Thêm</button>
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
                    <input class="textfield" type="text">
                </div>
                <div>
                    <label for="" class="img-brand">hình ảnh: </label>
                    <label for="file-input" class="image-upload">
                        <input id="file-input" type="file" accept="image/png,img/jpg,img/jpeg">
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
                <button class="btnConfirm btn">Cập nhật</button>
                <button class="btnCancel btn">Hủy Bỏ</button>
            </div>
        </div>
        <!-- -----Delete Form ------ -->
        <div id="delete-form" style="display: none;">
            <i onclick="hiddenForm()" style="cursor: pointer;" class="fa-sharp fa-light fa-xmark" id="close"></i>
            <div class="title">Xóa thương hiệu</div>
            <p class="warning"> Bằng cách xác nhận xóa thương hiệu này, bạn không thể tạo hoặc cập nhật sản phẩm với thương hiệu này nữa</p>
            <div class="tool">
                <button class="btnConfirm btn">Xóa</button>
                <button class="btnCancel btn">Hủy Bỏ</button>
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
                <label for="">Mã</label>
                <input class="textfield" type="text">
            </div>
            <div>
                <label for="">Mô Tả</label>
                <input class="textfield" type="text">
            </div>
            <div>
                <label for="">Ngày bắt đầu</label>
                <input class="textfield" type="date">
            </div>
            <div>
                <label for="">Ngày kết thúc</label>
                <input class="textfield" type="date">
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
                    <tr>
                        <td>1</td>
                        <td>APP10K</td>
                        <td>Giảm 10k ngay lần đầu đăng kí app</td>
                        <td>11/11/2022</td>
                        <td>Không giới hạn</td>
                        <td><span>đang Hoạt động</span></td>
                        <td>
                            <button class="btnFix">chỉnh sửa</button>
                            <button class="btnDel">xóa</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>APP10K</td>
                        <td>Giảm 10k ngay lần đầu đăng kí app</td>
                        <td>11/11/2022</td>
                        <td>Không giới hạn</td>
                        <td><span>đang Hoạt động</span></td>
                        <td>
                            <button class="btnFix">chỉnh sửa</button>
                            <button class="btnDel">xóa</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>APP10K</td>
                        <td>Giảm 10k ngay lần đầu đăng kí app</td>
                        <td>11/11/2022</td>
                        <td>Không giới hạn</td>
                        <td><span>đang Hoạt động</span></td>
                        <td>
                            <button class="btnFix">chỉnh sửa</button>
                            <button class="btnDel">xóa</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>