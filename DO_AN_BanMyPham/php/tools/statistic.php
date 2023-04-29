<?php
require '../connectDB.php';
$db = new ConnectDB();
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
$category = $_POST['catProduct'];
$topProducts = $_POST['topProduct'];
$sql = getQuery();
echo $sql;
$result = $db->connection($sql);
$i = 1;
while ($row = mysqli_fetch_array($result)) {
    $total = $row['QUANTITY_SOLD'] * $row['PRICE_PRO'];
    echo '<tr>
                <td>' . $i++ . '</td>
                <td class="ID_OBJECT">' . $row[0] . '</td>
                <td>' . $row['NAME_PRO'] . '</td>
                <td>' . $row['PRICE_PRO'] . '</td>
                <td>' . $row['NAME_CAT'] . '</td>;
                <td class="QUANTITY__SOLD">' . $row['QUANTITY_SOLD'] . '</td>
                <td>' . $total . '</td>
            </tr>';
}
function getQuery()
{
    global $startDate, $endDate, $category, $topProducts;
    $sql = "SELECT *, COALESCE(SUM(export_detail.QUANTITY_EX), 0) as QUANTITY_SOLD 
    FROM products 
    LEFT JOIN category ON products.CATEGORY_ID = category.CATEGORY_ID 
    LEFT JOIN export_detail ON products.PRODUCT_ID = export_detail.PRODUCT_ID
    LEFT JOIN export ON export.EXPORT_ID = export_detail.EXPORT_ID
    WHERE STATUS_PRO NOT IN ('đã xóa') ";
    $f = false;
    if (($startDate != "" && $endDate != "" )|| $category != "") {
        $sql .= "AND ";
        if ($startDate != "" && $endDate != "") {
            $sql .= "DATE_CREATE BETWEEN '$startDate' AND '$endDate' ";
            $f = true;
        }
        if ($category != "") {
            if ($f) {
                $sql .= "AND ";
            }
            $sql .= "products.CATEGORY_ID = '$category' ";
            $f = true;
        }
    }
    $sql .= "GROUP BY products.PRODUCT_ID ";
    if ($topProducts != "" && $topProducts != 0) {
        $sql .= "ORDER BY QUANTITY_SOLD DESC
        LIMIT $topProducts ";
        $f = true;
    }
    return $sql;
}
