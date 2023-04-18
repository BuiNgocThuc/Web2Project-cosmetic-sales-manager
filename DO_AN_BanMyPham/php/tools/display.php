<?php
include("../connectDB.php");
$db = new ConnectDB();
$proID = $_POST["id"];
$col = $_POST["col"];
switch ($_POST["res"]) {
    case "true":
        $sql = "UPDATE products SET `" . $col . "` = 1 WHERE PRODUCT_ID = " . $proID;
        $result = $db->connection($sql);
        if ($result) {
            echo "success";
        } else {
            echo "error";
        }
        break;
    case "false":
        $sql = "UPDATE products SET `" . $col . "` = 0 WHERE PRODUCT_ID = " . $proID;
        $result = $db->connection($sql);
        if ($result) {
            echo "success";
        } else {
            echo "error";
        }
        break;
}
