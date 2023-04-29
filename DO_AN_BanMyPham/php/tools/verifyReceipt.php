<?php
session_start();
require_once("../connectDB.php");
$db = new ConnectDB();
if (isset($_POST['idReceipt'])) {
    $receipt = $_POST['idReceipt'];
    $employee = $_SESSION['USERNAME'];
    $sql = "UPDATE export 
                SET STATUS_EX = 'đang giao'
                WHERE EXPORT_ID = '" . $receipt . "'";
    $result = $db->connection($sql);
    if ($result) {
        $sql1 = "UPDATE export
                SET EMPLOYEE_ID = '" . $employee . "'
                WHERE EXPORT_ID = '" . $receipt . "'";
        $result1 = $db->connection($sql1);
        if ($result1) {
            echo "success";
        } else {
            echo "fail";
        }
    } else {
        echo "fail";
    }
}
