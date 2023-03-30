<main id="Admin_Product" data-content="Danh sách Sản Phẩm">
    <div class="form-container">
        <div class="title-form">
            <h3 for="">tùy chọn tìm kiếm</h3>
            <span><i onclick="changeIconArrow(this), hideForm()" class="fa-regular fa-angle-up"></i></span>
        </div>
        <div class="fix-info">
            <div>
                <label for="">Mã Sản Phẩm</label>
                <input class="textfield" type="text">
            </div>
            <div>
                <label for="">Tên Sản Phẩm</label>
                <input class="textfield" type="text">
            </div>
            <div>
                <label for="">danh mục</label>
                <select name="status" class="textfield">
                    <option value="">danh mục a</option>
                    <option value="">danh mục a</option>
                    <option value="">danh mục a</option>
                    <option value="">danh mục a</option>
                    <option value="">danh mục a</option>
                </select>
            </div>
            <div>
                <label for="">thương hiệu</label>
                <select name="status" class="textfield">
                    <option value="">thương hiệu a</option>
                    <option value="">thương hiệu a</option>
                    <option value="">thương hiệu a</option>
                    <option value="">thương hiệu a</option>
                    <option value="">thương hiệu a</option>
                </select>
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
            <button>
                <i class="fa-light fa-plus"></i>
                <a href="">tạo mới</a>
            </button>
        </div>
        <div class="list-code">
            <table class="content-table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>mã sản phẩm</th>
                        <th>tên sản phẩm</th>
                        <th>tên thương hiệu</th>
                        <th>đơn giá</th>
                        <th>số lượng</th>
                        <th>trạng thái</th>
                        <th>hoạt động</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>APP10K</td>
                        <td>xyz</td>
                        <td>abcd</td>
                        <td>20000</td>
                        <td>200</td>
                        <td><span>đang Hoạt động</span></td>
                        <td>
                            <button>chỉnh sửa</button>
                            <button>xóa</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>APP10K</td>
                        <td>xyz</td>
                        <td>abcd</td>
                        <td>20000</td>
                        <td>200</td>
                        <td><span>đang Hoạt động</span></td>
                        <td>
                            <button>chỉnh sửa</button>
                            <button>xóa</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>APP10K</td>
                        <td>xyz</td>
                        <td>abcd</td>
                        <td>20000</td>
                        <td>200</td>
                        <td><span>đang Hoạt động</span></td>
                        <td>
                            <button>chỉnh sửa</button>
                            <button>xóa</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>