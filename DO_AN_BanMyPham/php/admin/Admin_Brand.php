<main id="Admin_Brand" data-content="Danh sách Thương hiệu">
        <div class="overlay">
            
        </div>
        <div class="new-form">

        </div>
        <div class="form-container">
            <div class="title-form">
                <h3 for="">tùy chọn tìm kiếm</h3>
                <span><i onclick="changeIconArrow(this), hideForm()" class="fa-regular fa-angle-up"></i></span>
            </div>
            <div class="fix-info">
                <div>
                    <label for="">Mã nhãn hàng</label>
                    <input class="textfield" type="text">
                </div>
                <div>
                    <label for="">Tên nhãn hàng</label>
                    <input class="textfield" type="text">
                </div>
                <div>
                    <label for="">Trạng Thái</label>
                    <input type="checkbox" class="switch" data-content="ngừng hoạt động" onclick="changeDataContent()">
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
                <h3>danh sách sản phẩm</h3>
                <button class="btnCreate" onclick="Tools('New_Brand')">
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
                        <tr>
                            <td>1</td>
                            <td>APP10K</td>
                            <td>xyz</td>
                            <td><span>đang Hoạt động</span></td>
                            <td>
                                <button class="btnFix">chỉnh sửa</button>
                                <button class="btnDel">xóa</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>APP10K</td>
                            <td>xyz</td>
                            <td><span>đang Hoạt động</span></td>
                            <td>
                                <button class="btnFix">chỉnh sửa</button>
                                <button class="btnDel">xóa</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>APP10K</td>
                            <td>xyz</td>
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