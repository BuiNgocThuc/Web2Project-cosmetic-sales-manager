<?php
require_once("../connectDB.php");
$db = new ConnectDB();
if (isset($_POST['idReceipt'])) {
    $receipt = $_POST['idReceipt'];
    $sql = "UPDATE export 
                SET STATUS_EX = 'đang giao'
                WHERE EXPORT_ID = '" . $receipt . "'";
    $result = $db->connection($sql);
    if ($result) {
        echo "success";
    } else {
        echo "fail";
    }
}
