<?php
require("connectDB.php");
$db = new ConnectDB();
if(isset($_POST['totalPrice'])) {
    $totalPrice = $_POST['totalPrice'];
$sql = "SELECT * FROM discounts WHERE `CONDITION` <= $totalPrice ORDER BY `CONDITION` DESC LIMIT 1";
$result = $db->connection($sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        echo '<span class="listProducts__total-discount" data-percent="' . $row['PERCENT'] . '" data-id="'.$row['DISCOUNT_ID'].'">Đã áp dụng chương trình ' . $row['NAME_DISCOUNT'] . '</span>';
    };
} else {
    echo 'null';
}
}
else {
    echo 'error';
}

