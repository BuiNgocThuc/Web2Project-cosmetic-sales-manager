<main id="Admin_Provider" data-content="Danh sách nhà cung cấp">
        <div class="form-container">
            <div class="title-form">
                <h3 for="">tùy chọn tìm kiếm</h3>
                <span><i onclick="changeIconArrow(this), hideForm()" class="fa-regular fa-angle-up"></i></span>
            </div>
            <div class="fix-info">
                <div>
                    <label for="">mã nhà cung cấp</label>
                    <input class="textfield" type="text">
                </div>
                <div>
                    <label for="">tên nhà cung cấp</label>
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
                <h3>danh sách nhà cung cấp</h3>
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
                            <th>mã nhà cung cấp</th>
                            <th>tên nhà cung cấp</th>
                            <th>số điện thoại</th>
                            <th>địa chỉ</th>
                            <th>email</th>
                            <th>trạng thái</th>
                            <th>hoạt động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>ửvneuofvioe</td>
                            <td>sfvkjbfiubviebwevrvvefkjbnribribitibribitribnrt</td>
                            <td>0123456789</td>
                            <td>11/22/33, quang trung, phường 8, gò vấp, Hồ Chí Minh</td>
                            <td>haha@gmail.com</td>
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
                            <td>0123456789</td>
                            <td>11/22/33, quang trung, phường 8, gò vấp, Hồ Chí Minh</td>
                            <td>haha@gmail.com</td>
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
                            <td>0123456789</td>
                            <td>11/22/33, quang trung, phường 8, gò vấp, Hồ Chí Minh</td>
                            <td>haha@gmail.com</td>
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