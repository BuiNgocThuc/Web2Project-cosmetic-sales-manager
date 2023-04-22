<section id="Admin_Statistic" data-content="Thống Kê Sản Phẩm">
    <div class="form-container">
        <div class="title-form">
            <h3 for="">tùy chọn tìm kiếm</h3>
            <span><i onclick="changeIconArrow(this), hideForm()" class="fa-regular fa-angle-up"></i></span>
        </div>
        <div class="fix-info">
            <div>
                <label for="">Ngày bắt đầu</label>
                <input class="textfield" type="date">
            </div>
            <div>
                <label for="">Ngày kết thúc</label>
                <input class="textfield START_DATE" type="date">
                <?php
                echo '<script>
                        $(document).ready(function() {
                            var currentDate = new Date().toISOString().slice(0,10); // lấy ngày hiện tại theo định dạng yyyy-mm-dd
                            $(".form-container .START_DATE").val(currentDate);
                        });
                    </script>';
                ?>
            </div>
            <div>
                <label for="">danh mục</label>
                <select name="" class="textfield">
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
                <label for="">sản phẩm bán chạy</label>
                <input class="textfield" type="number">
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
            <h3>danh sách thống kê sản phẩm</h3>
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
                    <?php
                    $sql = "SELECT * FROM products JOIN category on category.CATEGORY_ID = products.CATEGORY_ID;";
                    $result = $db->connection($sql);
                    $i = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        $quantitySold = 0;
                        echo '<tr>
                                    <td>' . $i++ . '</td>
                                    <td class="ID_OBJECT">' . $row['PRODUCT_ID'] . '</td>
                                    <td>' . $row['NAME_PRO'] . '</td>
                                    <td>' . $row['PRICE_PRO'] . '</td>
                                    <td>' . $row['NAME_CAT'] . '</td>';
                        $sql1 = "SELECT QUANTITY_EX FROM export_detail WHERE PRODUCT_ID = '" . $row['PRODUCT_ID'] . "';";
                        $result1 = $db->connection($sql1);
                        while ($row1 = mysqli_fetch_array($result1)) {
                            $quantitySold += $row1['QUANTITY_EX'];
                        }
                        $total = $quantitySold * $row['PRICE_PRO'];
                        echo '     <td>' . $quantitySold . '</td>
                                    <td>' . $total . '</td>
                                </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>