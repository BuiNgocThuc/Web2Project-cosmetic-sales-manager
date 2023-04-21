<?php session_start(); ?>
<main id="Admin_coupon_detail" class="Product_Details" data-content="thao tác phiếu nhập">
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
            <label for="" class="id_product">mã sản phẩm</label>
            <select name="" id="" class="textfield ID_OBJECT">
                <?php
                require_once("connectDB.php");
                $db = new ConnectDB();
                if (isset($_SESSION['IMPORT_ID'])) {
                    $idImport = $_SESSION['IMPORT_ID'];
                }
                $sql = "SELECT * FROM import_detail
                JOIN products on products.PRODUCT_ID = import_detail.PRODUCT_ID
                WHERE IMPORT_ID = '" . $idImport . "'";
                $result = $db->connection($sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<option value='" . $row['PRODUCT_ID'] . "'>" . $row['PRODUCT_ID'] . "</option>";
                }
                echo '<script>
                $(document).on("change", ".info_products .ID_OBJECT", function () {
                    let idProForm = $(this).val(); 
                    let idProductInTable = $(".list-product table tbody").find(".ID_OBJECT").filter(function () {
                        return $(this).text() == idProForm;
                    });
                    let quantityProduct = $(idProductInTable).nextAll(".QUANTITY_OBJECT").first().text();
                    let priceProduct = $(idProductInTable).nextAll(".PRICE_OBJECT").first().text()
                    $(".info_products .PRICE_OBJECT").val(priceProduct);
                    $(".info_products .QUANTITY_OBJECT").val(quantityProduct);
                });
                    
                $(document).on("click", ".btn--Save", function() {
                    let idProduct = $(".info_products .ID_OBJECT").val();
                    let quantityNew = $(".info_products .QUANTITY_OBJECT").val();
                    let priceNew = $(".info_products .PRICE_OBJECT").val();
                    let totalNew = 0;
                    $(".list-product table tbody tr").each(function() {
                        console.log(this);
                        if($(this).find(".ID_OBJECT").text() == idProduct) {
                            $(this).find(".QUANTITY_OBJECT").text(quantityNew);
                            $(this).find(".PRICE_OBJECT").text(priceNew);
                            $(this).find("td").last().text(quantityNew * priceNew);
                        }
                        totalNew += parseInt($(this).find("td").last().text());
                    });
                    $(".priceTotal").text(totalNew);
                })
                </script>';
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
            <button class="btn btn--Save">Lưu</button>
            <button class="btn btn--Undo" onclick="loadPageByAjax('Coupon_Products')">Hoàn Tác</button>
        </div>
    </div>
    <div class="list-product">
        <!-- table list product selected -->
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã Sản Phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>đơn Giá nhập</th>
                    <th>thành tiền</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once("connectDB.php");
                $db = new ConnectDB();
                if (isset($_SESSION['IMPORT_ID'])) {
                    $idImport = $_SESSION['IMPORT_ID'];
                }
                $sql = "SELECT * FROM import_detail
                        JOIN products on products.PRODUCT_ID = import_detail.PRODUCT_ID
                        WHERE IMPORT_ID = '" . $idImport . "'";
                $result = $db->connection($sql);
                $i = 1;
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $i++ . "</td>";
                    echo "<td class='ID_OBJECT'>" . $row['PRODUCT_ID'] . "</td>";
                    echo "<td>" . $row['NAME_PRO'] . "</td>";
                    echo "<td class='QUANTITY_OBJECT'>" . $row['QUANTITY_IM']  . "</td>";
                    echo "<td class='PRICE_OBJECT'>" . $row['UNIT_PRICE_IM'] . "</td>";
                    echo "<td>" . $row['UNIT_PRICE_IM'] * $row['QUANTITY_IM'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
            <tfoot>
                <tr class="total">
                    <td colspan="5">Tổng Tiền: </td>
                    <?php
                    $sql = "SELECT TOTAL FROM import WHERE IMPORT_ID = '" . $idImport . "'";
                    $result = $db->connection($sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<td class='priceTotal'>" . $row['TOTAL'] . "</td>";
                    }
                    ?>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="tools">
        <button class="btn btnConfirm" onclick="UpdateInfo('Import_Receipt')">Cập nhật</button>
        <button class="btn btnCancel" onclick="loadPageByAjax('Admin_Coupon')">Hủy</button>
    </div>
</main>