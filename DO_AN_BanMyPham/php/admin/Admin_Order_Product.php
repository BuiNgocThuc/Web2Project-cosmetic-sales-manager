<?php session_start(); ?>
<main id="Admin_coupon_detail" class="Product_Details" data-content="Chi tiết hóa đơn">
    <div class="list-product">
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
                if (isset($_SESSION['EXPORT_ID'])) {
                    $idExport = $_SESSION['EXPORT_ID'];
                }
                $sql = "SELECT * FROM export_detail
                        JOIN products on products.PRODUCT_ID = export_detail.PRODUCT_ID
                        WHERE EXPORT_ID = '" . $idExport . "'";
                $result = $db->connection($sql);
                $i = 1;
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $i++ . "</td>";
                    echo "<td class='ID_OBJECT'>" . $row['PRODUCT_ID'] . "</td>";
                    echo "<td>" . $row['NAME_PRO'] . "</td>";
                    echo "<td class='QUANTITY_OBJECT'>" . $row['QUANTITY_EX']  . "</td>";
                    echo "<td class='PRICE_OBJECT'>" . $row['UNIT_PRICE_EX'] . "</td>";
                    echo "<td>" . $row['UNIT_PRICE_EX'] * $row['QUANTITY_EX'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
            <tfoot>
                <tr class="total">
                    <td colspan="5">Tổng Tiền: </td>
                    <?php
                    $sql = "SELECT TOTAL FROM export WHERE EXPORT_ID = '" . $idExport . "'";
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
        <button class="btn btnCancel" onclick="loadPageByAjax('Admin_Order')">Thoát</button>
    </div>
</main>