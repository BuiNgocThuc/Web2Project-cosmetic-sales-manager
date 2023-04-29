<section id="Admin_Statistic" data-content="Thống Kê Sản Phẩm">
    <div class="form-container">
        <div class="title-form">
            <h3 for="">tùy chọn tìm kiếm</h3>
            <span><i onclick="changeIconArrow(this), hideForm()" class="fa-regular fa-angle-up"></i></span>
        </div>
        <div class="fix-info">
            <div>
                <label for="">Ngày bắt đầu</label>
                <input class="textfield START_DATE" type="date">
            </div>
            <div>
                <label for="">Ngày kết thúc</label>
                <input class="textfield END_DATE" type="date">
                <!-- <?php
                echo '<script>
                        $(document).ready(function() {
                            var currentDate = new Date().toISOString().slice(0,10); // lấy ngày hiện tại theo định dạng yyyy-mm-dd
                            $(".form-container .END_DATE").val(currentDate);
                        });
                    </script>';
                ?> -->
            </div>
            <div>
                <label for="">danh mục</label>
                <select name="" class="textfield CATEGORY_OBJECT">
                    <option value="">Tất cả sản phẩm</option>
                    <?php
                    require("ConnectDB.php");
                    $db = new ConnectDB();
                    $sql = "SELECT * FROM category";
                    $result = $db->connection($sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<option value="' . $row['CATEGORY_ID'] . '">' . $row['NAME_CAT'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div>
                <label for=""></label>
                <button class="btn btn--Search" onclick="statistic()">Tìm Kiếm</button>
                <button class="btn btn--Undo">Hoàn Tác</button>
            </div>
        </div>
    </div>
    <div class="list-container">
        <div class="title-list">
            <h3>danh sách thống kê sản phẩm</h3>
            <div class="sort_by_top">
                <label for="">sản phẩm bán chạy</label>
                <?php
                $sql = "SELECT COUNT(*) AS 'COUNT' FROM products WHERE STATUS_PRO NOT IN ('đã xóa')";
                $result = $db->connection($sql);
                $row = mysqli_fetch_array($result);
                echo '<input class="textfield" id="top__products" type="number" value="0" min="0" max="' . $row['COUNT'] . '">';
                ?>
            </div>
        </div>
        <div class="list-code">
            <table class="content-table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>mã sản phẩm</th>
                        <th>tên sản phẩm</th>
                        <th>đơn giá</th>
                        <th>loại danh mục</th>
                        <th>số lượng bán</th>
                        <th>tổng doanh thu</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</section>