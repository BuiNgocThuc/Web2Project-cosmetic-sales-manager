<?php
include("../connectDB.php");
$db = new ConnectDB();
$proID = $_POST["id"];
switch ($_POST["res"]) {
    case "true":
        $sql = "UPDATE products SET SLIDESHOW = 1 WHERE PRODUCT_ID = " . $proID;
        $result = $db->connection($sql);
        if ($result) {
            echo "success";
        } else {
            echo "error";
        }
        break;
    case "false":
        $sql = "UPDATE products SET SLIDESHOW = 0 WHERE PRODUCT_ID = " . $proID;
        $result = $db->connection($sql);
        if ($result) {
            echo "success";
        } else {
            echo "error";
        }
        break;
}
