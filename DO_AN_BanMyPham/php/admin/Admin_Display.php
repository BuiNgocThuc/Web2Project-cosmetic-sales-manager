<section id="Admin_Display" data-content="Hiện Thị Nổi Bật">
    <div class="form-container">
        <div class="title-form">
            <h3 for="">tùy chọn tìm kiếm</h3>
            <span><i onclick="changeIconArrow(this), hideForm()" class="fa-regular fa-angle-up"></i></span>
        </div>
        <div class="fix-info">
            <div>
                <label for="">mã sản phẩm</label>
                <input class="textfield" type="text">
            </div>
            <div>
                <label for="">tên sản phẩm</label>
                <input class="textfield" type="text">
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
        </div>
        <div class="list-code">
            <table class="content-table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>mã sản phẩm</th>
                        <th>tên sản phẩm</th>
                        <th>hình ảnh</th>
                        <th>nổi bật</th>
                        <th>sản phẩm mới</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("ConnectDB.php");
                    $db = new ConnectDB();
                    $sql = "SELECT * FROM products";
                    $result = $db->connection($sql);
                    $i = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        $trend = ($row['SLIDESHOW'] == 0) ? 'ngừng hoạt động' : 'đang hoạt động';
                        $isCheckTrend = ($row['SLIDESHOW'] == 0) ? '' : 'checked';
                        $new = ($row['NEW_ARRIVALS'] == 0) ? 'ngừng hoạt động' : 'đang hoạt động';
                        $isCheckNew = ($row['NEW_ARRIVALS'] == 0) ? '' : 'checked';

                        echo ' <tr>
                                <td>' . $i++ . '</td>
                                <td>' . $row['PRODUCT_ID'] . '</td>
                                <td>' . $row['NAME_PRO'] . '</td>
                                <td>' . $row['IMG_PRO'] . '</td>
                                <td>
                                <div class="display_action trending">
                                    <input type="checkbox" class="switch" data-content="' . $trend . '" ' . $isCheckTrend . ' onclick="changeDataContent(this), display(' . $row['PRODUCT_ID'] . ', this)">
                                </div>
                                </td>
                                <td>
                                <div class="display_action new_arrivals">
                                <input type="checkbox" class="switch" data-content="' . $new . '" ' . $isCheckNew . ' onclick="changeDataContent(this), display(' . $row['PRODUCT_ID'] . ', this)">
                            </div>
                                </td>
                            </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>