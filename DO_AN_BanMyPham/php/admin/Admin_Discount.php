<main id="Admin_Discount" data-content="Danh sách phiếu giảm giá">
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
            <h3>danh sách phiếu giảm giá</h3>
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
                            <button>chỉnh sửa</button>
                            <button>xóa</button>
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
                            <button>chỉnh sửa</button>
                            <button>xóa</button>
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
                            <button>chỉnh sửa</button>
                            <button>xóa</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>