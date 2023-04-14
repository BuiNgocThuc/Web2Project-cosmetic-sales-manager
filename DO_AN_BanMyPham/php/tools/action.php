<?php
include("../connectDB.php");
$db = new ConnectDB();
switch ($_POST['action']) {
    case 'create':
        switch ($_POST['id']) {
            case 'Brand':
                $sqlCount = "SELECT COUNT(*) FROM brands";
                $num = $db->connection($sqlCount);
                while ($row = mysqli_fetch_array($num)) {
                    $id = 'brd' . ($row['COUNT(*)'] + 1);
                }
                $name = $_POST['name'];
                $img = $_POST['img'];
                $sql = "INSERT INTO brands (`BRAND_ID`, `NAME_BRAND`, `IMG_BRAND`, `STATUS_BRAND`)
                VALUES ('" . $id . "', '" . $name . "', '" . $img . "','đang hoạt động');";
                $result = $db->connection($sql);
                // echo $sql;
                if ($result) {
                    echo 'success';
                } else {
                    echo 'error';
                }
                break;
            case 'Role':
                $sqlCount = "SELECT COUNT(*) FROM roles";
                $num = $db->connection($sqlCount);
                while ($row = mysqli_fetch_array($num)) {
                    $id = ($row['COUNT(*)']);
                }
                $name_role = $_POST['name_role'];
                $des_role = $_POST['des_role'];
                $sql = "INSERT INTO roles (`ROLE_ID`, `NAME_ROLE`, `DESCRIPTION_ROLE`, `STATUS_ROLE`)
                VALUES ('" . $id . "', '" . $name_role . "', '" . $des_role . "','đang hoạt động');";
                $result = $db->connection($sql);
                // echo $sql;
                echo $id;
                break;
            case 'User' :
                
                break;
        }
        break;
    case 'update':
        switch ($_POST['id']) {
            case 'Brand':
                $status = $_POST['status'];
                $name = $_POST['name'];
                $idBrand = $_POST['identity'];
                $sql = "UPDATE brands 
                        SET NAME_BRAND = '" . $name . "',
                            STATUS_BRAND = '" . $status . "'
                        WHERE BRAND_ID = '" . $idBrand . "';";
                $result = $db->connection($sql);
                  
        }
        break;
    case 'delete':
        switch ($_POST['id']) {
            case 'Brand':
                $idObject = $_POST['ob'];
                $sql = "UPDATE brands SET STATUS_BRAND = 'đã xóa' WHERE BRAND_ID = '" . $idObject . "'";
                $result = $db->connection($sql);
                echo $sql;
                if ($result) {
                    echo 'success';
                } else {
                    echo 'error';
                }
                break;
        }
}
