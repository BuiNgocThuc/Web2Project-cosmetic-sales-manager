<main id="Admin_coupon_detail" data-content="Nhập Hàng">
    <div class="info_provider">
        <label for="" class="name_provider">Tên nhà cung cấp</label>
        <select name="" id="" class="textfield PROVIDER_PRODUCT">
            <?php
            require_once("connectDB.php");
            $db = new ConnectDB();
            $sql = "SELECT * FROM `providers`";
            $result = $db->connection($sql);
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['PROVIDER_ID'] . "'>" . $row['NAME_PROVIDER'] . "</option>";
            }
            ?>
        </select>
    </div>
    <div class="info_products">
        <div>
            <label for="" class="name_product">Tên sản phẩm</label>
            <select name="" id="" class="textfield NAME_OBJECT">
                <?php
                require_once("connectDB.php");
                $db = new ConnectDB();
                $sql = "SELECT * FROM `products`";
                $result = $db->connection($sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<option value='" . $row['PRODUCT_ID'] . "'>" . $row['NAME_PRO'] . "</option>";
                }
                ?>
            </select>
        </div>
        <div>
            <label for="" class="quantity_product">Số lượng</label>
            <input type="number" name="" id="" class="textfield QUANTITY_OBJECT">
        </div>
        <div>
            <label for="" class="price_product">Giá nhập</label>
            <input type="number" name="" id="" class="textfield PRICE_OBJECT">
        </div>
        <div>
            <label for=""></label>
            <button class="btn btn--Save" onclick="saveProduct()">Lưu</button>
            <button class="btn btn--Undo" onclick="undoProduct()">Hoàn Tác</button>
        </div>
    </div>
    <div class="list-product">
        <!-- table list product selected -->
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>đơn Giá nhập</th>
                    <th>thành tiền</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
                <tr class="total">
                    <td colspan="4">Tổng Tiền: </td>
                    <td class="priceTotal">0</td>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="tools">
        <button class="btn btnConfirm" onclick="AddInfo('Import_Receipt')">Nhập Hàng</button>
        <button class="btn btnCancel" onclick="loadPageByAjax('Admin_Coupon')">Hủy</button>
    </div>
</main>