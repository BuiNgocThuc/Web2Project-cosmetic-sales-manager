<main id="Admin_Order" data-content="lịch sử đơn hàng">
    <div class="form-container">
        <div class="title-form">
            <h3 for="">tùy chọn tìm kiếm</h3>
            <span><i onclick="changeIconArrow(this), hideForm()" class="fa-regular fa-angle-up"></i></span>
        </div>
        <div class="fix-info">
            <div>
                <label for="">Mã đơn hàng</label>
                <input class="textfield" type="text">
            </div>
            <div>
                <label for="">người dùng</label>
                <input class="textfield" type="text">
            </div>
            <div>
                <label for="">Ngày đặt hàng</label>
                <input class="textfield" type="date">
            </div>
            <div>
                <label for="">Trạng Thái</label>
                <select name="status" class="textfield">
                    <option value="đang chờ">đang chờ</option>
                    <option value="đã hủy">đã hủy</option>
                    <option value="đang giao">đang giao</option>
                    <option value="hoàn thành">hoàn thành</option>
                    <option value="đã trả hàng">đã trả hàng</option>
                </select>
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
            <h3>lịch sử đơn hàng</h3>
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
                        <th>mã đơn hàng</th>
                        <th>mã khách hàng</th>
                        <th>tên khách hàng</th>
                        <th>tên nhân viên</th>
                        <th>ngày đặt hàng</th>
                        <th>số tiền</th>
                        <th>mã giảm giá</th>
                        <th>tình trạng</th>
                        <th>hoạt động</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>APP10K</td>
                        <td>Giảm 10k ngay lần đầu đăng kí app</td>
                        <td>Không giới hạn</td>
                        <td>200.000</td>
                        <td>11/11/2022</td>
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
                        <td>Không giới hạn</td>
                        <td>200.000</td>
                        <td>11/11/2022</td>
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
                        <td>Không giới hạn</td>
                        <td>200.000</td>
                        <td>11/11/2022</td>
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