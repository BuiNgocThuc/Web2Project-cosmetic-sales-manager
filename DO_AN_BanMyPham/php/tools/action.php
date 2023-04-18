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
                $name = $_POST['nameBrd'];
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
            case 'Category':
                $sqlCount = "SELECT COUNT(*) FROM category";
                $num = $db->connection($sqlCount);
                while ($row = mysqli_fetch_array($num)) {
                    $id = 'cat' . ($row['COUNT(*)'] + 1);
                }
                $name = $_POST['nameCat'];
                $sql = "INSERT INTO category (`CATEGORY_ID`, `NAME_CAT`, `STATUS_CAT`)
                VALUES ('" . $id . "', '" . $name . "', 'đang hoạt động');";
                $result = $db->connection($sql);
                if ($result) {
                    echo 'success';
                } else {
                    echo 'error';
                }
                break;
            case 'Provider':
                $sqlCount = "SELECT COUNT(*) FROM providers";
                $num = $db->connection($sqlCount);
                while ($row = mysqli_fetch_array($num)) {
                    $id = 'pro' . ($row['COUNT(*)'] + 1);
                }
                $name = $_POST['namePro'];
                $address = $_POST['addressPro'];
                $phone = $_POST['phonePro'];
                $email = $_POST['emailPro'];
                $sql = "INSERT INTO providers (`PROVIDER_ID`, `NAME_PROVIDER`, `ADDRESS_PROVIDER`, `PHONE_PROVIDER`, `EMAIL_PROVIDER`, `STATUS_PROVIDER`)
                VALUES ('" . $id . "', '" . $name . "', '" . $address . "', '" . $phone . "', '" . $email . "', 'đang hoạt động');";
                $result = $db->connection($sql);
                if ($result) {
                    echo 'success';
                } else {
                    echo 'error';
                }
                break;
            case 'Type_User':
                $name = $_POST['nameTypeUser'];
                $id = $_POST['idTypeUser'];
                $sql = "INSERT INTO type_users (`TYPE_USER_ID`, `NAME_TYPE_USER`, `STATUS_TYPE_USER`)
                VALUES ('" . $id . "', '" . $name . "', 'đang hoạt động');";
                $result = $db->connection($sql);
                if ($result) {
                    echo 'success';
                } else {
                    echo 'error';
                }
                break;
            case 'Discount':
                $sqlCount = "SELECT COUNT(*) FROM discounts";
                $num = $db->connection($sqlCount);
                while ($row = mysqli_fetch_array($num)) {
                    $id = 'DC' . ($row['COUNT(*)'] + 1);
                }
                $name = $_POST['nameDis'];
                $condition = $_POST['condition'];
                $percent = $_POST['percent'];
                $dateStart = $_POST['dateStart'];
                $dateEnd = $_POST['dateEnd'];
                $sql = "INSERT INTO discounts (`DISCOUNT_ID`, `NAME_DISCOUNT`, `CONDITION`, `PERCENT`, `START_DATE`, `END_DATE`, `STATUS_DISCOUNT`)
                VALUES ('" . $id . "', '" . $name . "', '" . $condition . "', '" . $percent . "', '" . $dateStart . "', '" . $dateEnd . "', 'đang hoạt động');";
                $result = $db->connection($sql);
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
            case 'User':
                $userID = $_POST['userID'];
                $name = $_POST['name'];
                $type = $_POST['type'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $roleID = $_POST['roleID'];
                $date = date('Y-m-d');
                $sql = "INSERT INTO users (`USER_ID`, `TYPE_USER_ID` , `NAME`, `PHONE`, `ADDRESS`, `EMAIL`, `STATUS`) 
                        VALUES ('" . $userID . "', '" . $type . "', '" . $name . "','" . $phone . "', '" . $address . "', '" . $email . "', 'đang hoạt động')";
                $result = $db->connection($sql);
                if ($result) {
                    // echo 'success';
                    $sql2 = "INSERT INTO accounts (`USERNAME`, `PASSWORD`, `ROLE_ID`, `DATE_CREATE`,  `STATUS`)
                            VALUES ('" . $userID . "', '" . $phone . "', '" . $roleID . "','" . $date . "', 'đang hoạt động')";
                    $result2 = $db->connection($sql2);
                    if ($result2) {
                        echo 'success';
                    } else {
                        echo 'error';
                    }
                } else {
                    echo $sql;
                }
                break;
            case 'Permission':
                $idCount = "SELECT COUNT(*) FROM permission";
                $num = $db->connection($idCount);
                while ($row = mysqli_fetch_array($num)) {
                    $id = ($row['COUNT(*)'] + 1);
                }
                $name = $_POST['namePer'];
                $create = $_POST['createPer'];
                $update = $_POST['updatePer'];
                $delete = $_POST['deletePer'];
                $access = $_POST['accessPer'];
                $control = $_POST['controlPer'];
                $sql = "INSERT INTO permission (`PERMISSION_ID`, `NAME_PER`, `CREATE_PER`, `UPDATE_PER`, `DELETE_PER`, `ACCESS_PER`, `CONTROL_PER`, `STATUS_PER`)
                VALUES ('" . $id . "', '" . $name . "', '" . $create . "', '" . $update . "', '" . $delete . "', '" . $access . "', '" . $control . "', 'đang hoạt động');";
                $result = $db->connection($sql);
                if ($result) {
                    echo 'success';
                } else {
                    echo 'error';
                }
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
                break;
        }
        break;
    case 'delete':
        switch ($_POST['id']) {
            case 'Brand':
                $idObject = $_POST['ob'];
                $sql = "UPDATE brands SET STATUS_BRAND = 'đã xóa' WHERE BRAND_ID = '" . $idObject . "'";
                $result = $db->connection($sql);
                if ($result) {
                    echo 'success';
                } else {
                    echo 'error';
                }
                break;
            case 'Category':
                $idObject = $_POST['ob'];
                $sql = "UPDATE category SET STATUS_CAT = 'đã xóa' WHERE CATEGORY_ID = '" . $idObject . "'";
                $result = $db->connection($sql);
                if ($result) {
                    echo 'success';
                } else {
                    echo 'error';
                }
                break;
            case 'Type_User':
                $idObject = $_POST['ob'];
                $sql = "UPDATE type_users SET STATUS_TYPE_USER = 'đã xóa' WHERE TYPE_USER_ID = '" . $idObject . "'";
                $result = $db->connection($sql);
                if ($result) {
                    echo 'success';
                } else {
                    echo 'error';
                }
                break;
            case 'Discount':
                $idObject = $_POST['ob'];
                $sql = "UPDATE discounts SET STATUS_DISCOUNT = 'đã xóa' WHERE DISCOUNT_ID = '" . $idObject . "'";
                $result = $db->connection($sql);
                if ($result) {
                    echo 'success';
                } else {
                    echo 'error';
                }
                break;
            case 'Provider':
                $idObject = $_POST['ob'];
                $sql = "UPDATE providers SET STATUS_PROVIDER = 'đã xóa' WHERE PROVIDER_ID = '" . $idObject . "'";
                $result = $db->connection($sql);
                if ($result) {
                    echo 'success';
                } else {
                    echo 'error';
                }
                break;
            case 'User':
                $idObject = $_POST['ob'];
                $sql = "UPDATE users SET STATUS = 'đã xóa' WHERE USER_ID = '" . $idObject . "'";
                $result = $db->connection($sql);
                if ($result) {
                    echo 'success';
                } else {
                    echo 'error';
                }
                break;
            case 'Permission':
                $idObject = $_POST['ob'];
                $sql = "UPDATE permission SET STATUS_PER = 'đã xóa' WHERE PERMISSION_ID = '" . $idObject . "'";
                $result = $db->connection($sql);
                if ($result) {
                    echo 'success';
                } else {
                    echo 'error';
                }
                break;
            case 'Role':
                $idObject = $_POST['ob'];
                $sql = "UPDATE roles SET STATUS_ROLE = 'đã xóa' WHERE USERNAME = '" . $idObject . "'";
                $result = $db->connection($sql);
                if ($result) {
                    echo 'success';
                } else {
                    echo 'error';
                }
                break;
            }
            break;
}
