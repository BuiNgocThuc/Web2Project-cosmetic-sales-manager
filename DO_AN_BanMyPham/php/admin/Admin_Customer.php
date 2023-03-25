<main id="Admin_Customer" data-content="Danh sách người dùng">
    <div class="form-container">
        <div class="title-form">
            <h3 for="">tùy chọn tìm kiếm</h3>
            <span><i onclick="changeIconArrow(this), hideForm()" class="fa-regular fa-angle-up"></i></span>
        </div>
        <div class="fix-info">
            <div>
                <label for="">mã người dùng</label>
                <input class="textfield" type="text">
            </div>
            <div>
                <label for="">tên khách hàng</label>
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
            <h3>danh sách người dùng</h3>
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
                        <th>mã khách hàng</th>
                        <th>tên khách hàng</th>
                        <th>số điện thoại</th>
                        <th>địa chỉ</th>
                        <th>email</th>
                        <th>trạng thái</th>
                        <th>hoạt động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "quanlybanmypham");
                    // if ($conn) {
                    //     echo 'ket noi thanh cong';
                    // } else {
                    //     echo 'ket noi that bai';
                    // }
                    $sql = "Select * from USERS";
                    
                    mysqli_query($conn, "SET NAMES 'utf8'");
                    
                    $query = mysqli_query($conn, $sql);
                    $i = 0;
                    while ($row = mysqli_fetch_array($query)) {
                        $i++;
                    echo "<tr>
                        <td>$i</td>
                        <td>" . $row['USER_ID'] . "</td>
                        <td>" . $row['NAME'] . "</td>
                        <td>" . $row['PHONE'] . "</td>
                        <td>" . $row['ADDRESS'] . "</td>
                        <td>" . $row['EMAIL'] . "</td>
                        <td><span>" . $row['STATUS'] . "</span></td>
                        <td>
                            <button>chỉnh sửa</button>
                            <button>xóa</button>
                        </td>
                    </tr>";
                }
                mysqli_close($conn);
                    ?>
                
                </tbody>
            </table>
        </div>
    </div>
</main>

