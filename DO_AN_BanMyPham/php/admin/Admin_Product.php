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
            <h3>danh sách sản phẩm</h3>
        </div>
        <div class="list-code">
            <table class="content-table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>mã sản phẩm</th>
                        <th>tên sản phẩm</th>
                        <th>tên thương hiệu</th>
                        <th>loại danh mục</th>
                        <th>đơn giá</th>
                        <th>số lượng</th>
                        <th>hình ảnh</th>
                        <th>trạng thái</th>
                        <th>hoạt động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("ConnectDB.php");
                    $db = new ConnectDB();
                    $sql = "SELECT *  FROM products
                        join brands on brands.brand_id = products.brand_id
                        join category on category.category_id = products.category_id";
                    $result = $db->connection($sql);
                    $i = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<tr>
                                <td>' . $i++ . '</td>
                                <td>' . $row['PRODUCT_ID'] . '</td>
                                <td>' . $row['NAME_PRO'] . '</td>
                                <td>' . $row['NAME_BRAND'] . '</td>
                                <td>' . $row['NAME_CAT'] . '</td>
                                <td>' . $row['PRICE_PRO'] . '</td>
                                <td>' . $row['QUANTITY_PRO'] . '</td>
                                <td>' . $row['IMG_PRO'] . '</td>
                                <td>' . $row['STATUS_PRO'] . '</td>
                                <td>
                                    <button class="btnFix">chỉnh sửa</button>
                                    <button class="btnView">xem</button>
                                </td>
                            </tr>';
                    }
                    ?>
                </tbody>

            </table>
        </div>
    </div>
</main>