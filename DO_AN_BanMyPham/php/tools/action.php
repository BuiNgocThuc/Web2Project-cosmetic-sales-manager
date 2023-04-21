<?php
session_start();
include("../connectDB.php");
$db = new ConnectDB();
switch ($_POST['action']) {
    case 'create':
        switch ($_POST['id']) {
            case 'Product':
                $name = $_POST['nameProd'];
                $price = $_POST['priceProd'];
                $brand = $_POST['brandProd'];
                $category = $_POST['categoryProd'];
                $original = $_POST['originalProd'];
                $imgProd = $_POST['imgProd'];
                $sql = "INSERT INTO products (`BRAND_ID`, `CATEGORY_ID`, `NAME_PRO`,`IMG_PRO`, `PRICE_PRO`, `QUANTITY_PRO`, `ORIGIN_PRO`, `STATUS_PRO`)
                VALUES ('$brand', '$category', '$name', '$imgProd', '$price', '0', '$original', 'đang hoạt động');";
                $result = $db->connection($sql);
                if ($result) {
                    echo 'success';
                } else {
                    echo 'error';
                }
                break;
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
                    $id = ($row['COUNT(*)'] + 1);
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
                // case 'Permission':
                //     $idCount = "SELECT COUNT(*) FROM permission";
                //     $num = $db->connection($idCount);
                //     while ($row = mysqli_fetch_array($num)) {
                //         $id = ($row['COUNT(*)'] + 1);
                //     }
                //     $name = $_POST['namePer'];
                //     $create = $_POST['createPer'];
                //     $update = $_POST['updatePer'];
                //     $delete = $_POST['deletePer'];
                //     $access = $_POST['accessPer'];
                //     $control = $_POST['controlPer'];
                //     $sql = "INSERT INTO permission (`PERMISSION_ID`, `NAME_PER`, `CREATE_PER`, `UPDATE_PER`, `DELETE_PER`, `ACCESS_PER`, `CONTROL_PER`, `STATUS_PER`)
                //     VALUES ('" . $id . "', '" . $name . "', '" . $create . "', '" . $update . "', '" . $delete . "', '" . $access . "', '" . $control . "', 'đang hoạt động');";
                //     $result = $db->connection($sql);
                //     if ($result) {
                //         echo 'success';
                //     } else {
                //         echo 'error';
                //     }
                //     break;
            case 'Import_Receipt':
                $idProvider = $_POST['idProvider']; // id nhà cung cấp
                $sqlCount = "SELECT COUNT(*) FROM import";
                $num = $db->connection($sqlCount);
                while ($row = mysqli_fetch_array($num)) {
                    $id = 'IM' . ($row['COUNT(*)'] + 1); // id hóa đơn nhập
                }
                $date = date('Y-m-d'); // ngày nhập
                $userID =  $_SESSION['USERNAME']; // user nhập
                $total = $_POST['totalPrice']; // tổng tiền
                $sql = "INSERT INTO import (`IMPORT_ID`, `PROVIDER_ID`, `USER_ID`, `DATE_CREATE`, `TOTAL`)
                        VALUES ('" . $id . "', '" . $idProvider . "', '" . $userID . "', '" . $date . "', '" . $total . "');";
                $result = $db->connection($sql);
                echo $id;
                break;
            case 'Import_Detail':
                $idImport = $_POST['idImport']; // id hóa đơn nhập
                $idProduct = $_POST['idProduct']; // id sản phẩm
                $quantity = $_POST['quantity']; // số lượng
                $price = $_POST['price']; // đơn giá nhập
                $sql = "INSERT INTO import_detail (`IMPORT_ID`, `PRODUCT_ID`, `QUANTITY_IM`, `UNIT_PRICE_IM`)
                        VALUES ('" . $idImport . "', '" . $idProduct . "', '" . $quantity . "', '" . $price . "');";
                $result = $db->connection($sql);
                if ($result) {
                    $sql1 = "SELECT * FROM products WHERE PRODUCT_ID = '" . $idProduct . "'";
                    $result1 = $db->connection($sql1);
                    while ($row = mysqli_fetch_array($result1)) {
                        $quantityOld = $row['QUANTITY_PRO'];
                    }
                    $quantityNew = $quantityOld + $quantity;
                    $priceNew = $price * 120 / 100;
                    $sql2 = "UPDATE products
                            SET QUANTITY_PRO = '" . $quantityNew . "', 
                                PRICE_PRO = '" . $priceNew . "' 
                            WHERE PRODUCT_ID = '" . $idProduct . "';";
                    $result2 = $db->connection($sql2);
                    if ($result2) {
                        echo 'success';
                    } else {
                        echo 'error';
                    }
                } else {
                    echo 'error';
                }
                break;
        }
        break;
    case 'update':
        switch ($_POST['id']) {
            case 'Product':

                break;
            case 'Brand':
                $status = $_POST['status'];
                $name = $_POST['name'];
                $idBrand = $_POST['identity'];
                $sql = "UPDATE brands 
                        SET NAME_BRAND = '" . $name . "',
                            STATUS_BRAND = '" . $status . "'
                        WHERE BRAND_ID = '" . $idBrand . "';";
                $result = $db->connection($sql);
                if ($result) {
                    echo 'success';
                } else {
                    echo 'error';
                }
                break;
            case 'Category':
                $status = $_POST['status'];
                $name = $_POST['name'];
                $idCat = $_POST['identity'];
                $sql = "UPDATE category 
                        SET NAME_CAT = '" . $name . "',
                            STATUS_CAT = '" . $status . "'
                        WHERE CATEGORY_ID = '" . $idCat . "';";
                $result = $db->connection($sql);
                if ($result) {
                    echo 'success';
                } else {
                    echo 'error';
                }
                break;
            case 'Provider':
                $status = $_POST['status'];
                $name = $_POST['name'];
                $idPro = $_POST['identity'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $sql = "UPDATE providers 
                        SET NAME_PROVIDER = '" . $name . "',
                            PHONE_PROVIDER = '" . $phone . "',
                            ADDRESS_PROVIDER = '" . $address . "',
                            EMAIL_PROVIDER = '" . $email . "',
                            STATUS_PROVIDER = '" . $status . "'
                        WHERE PROVIDER_ID = '" . $idPro . "';";
                $result = $db->connection($sql);
                if ($result) {
                    echo 'success';
                } else {
                    echo 'error';
                }
                break;
            case 'Import_Receipt':
                $provider = $_POST['provider'];
                $total = $_POST['total'];
                $idImport = $_SESSION['IMPORT_ID'];
                $date = date('Y-m-d'); // ngày nhập
                $userID =  $_SESSION['USERNAME']; // user nhập
                $sql = 'UPDATE import
                        SET PROVIDER_ID = "' . $provider . '",
                            USER_ID = "' . $userID . '",
                            DATE_CREATE = "' . $date . '",
                            TOTAL = "' . $total . '"
                        WHERE IMPORT_ID = "' . $idImport . '";';
                $result = $db->connection($sql);
                if ($result) {
                    echo 'success';
                } else {
                    echo 'error';
                }
                break;
            case 'Import_Detail':
                $idImport = $_SESSION['IMPORT_ID'];
                $idProduct = $_POST['idProduct'];
                $quantity = $_POST['quantity'];
                $price = $_POST['price']; //giá nhập
                $priceNew = $price * 120 / 100; // giá bán
                $sqlGetQuantity = "SELECT QUANTITY_IM FROM import_detail WHERE IMPORT_ID = '" . $idImport . "' AND PRODUCT_ID = '" . $idProduct . "';";
                $resultGetQuantity = $db->connection($sqlGetQuantity);
                while ($row = mysqli_fetch_array($resultGetQuantity)) {
                    $quantityImportOld = $row['QUANTITY_IM'];
                };
                $sql = "UPDATE import_detail
                        SET QUANTITY_IM = '" . $quantity . "',
                            UNIT_PRICE_IM = '" . $price . "'
                        WHERE IMPORT_ID = '" . $idImport . "' AND PRODUCT_ID = '" . $idProduct . "';";
                $result = $db->connection($sql);
                if ($result) {
                    $sql1 = "SELECT * FROM products WHERE PRODUCT_ID = '" . $idProduct . "'";
                    $result1 = $db->connection($sql1);
                    while ($row = mysqli_fetch_array($result1)) {
                        $quantityOld = $row['QUANTITY_PRO'];
                    }
                    $quantityProductNew = $quantityOld - $quantityImportOld + $quantity; // số lượng SP mới = số cũ - số nhập cũ + số nhập mới
                    $sql2 = "UPDATE products
                            SET QUANTITY_PRO = '" . $quantityProductNew . "', 
                                PRICE_PRO = '" . $priceNew . "' 
                            WHERE PRODUCT_ID = '" . $idProduct . "';";
                    $result2 = $db->connection($sql2);
                    if ($result2) {
                        echo 'success';
                    } else {
                        echo 'error';
                    }
                    echo 'success';
                } else {
                    echo 'error';
                }
                break;
            case 'User':
                $status = $_POST['status'];
                $role = $_POST['role'];
                $location = $_POST['location'];
                $sql = "UPDATE accounts
                        SET ROLE_ID = '" . $role . "',
                            STATUS = '" . $status . "'
                        WHERE USERNAME = '" . $location . "';";
                $result = $db->connection($sql);
                if ($result) {
                    if ($roleID != '0') {
                        $sql2 = "UPDATE users
                                SET TYPE_USER_ID = 'NB'
                                WHERE USER_ID = '" . $location . "';";
                        $result2 = $db->connection($sql2);
                        if ($result2) {
                            echo 'success';
                        } else {
                            echo 'error';
                        }
                    } else {
                        echo 'success';
                    }
                } else {
                    echo 'error';
                }
                break;
            case 'Type_User':
                $name = $_POST['name'];
                $status = $_POST['status'];
                $idType = $_POST['identity'];
                $sql = "UPDATE type_users
                        SET NAME_TYPE_USER = '" . $name . "',
                            STATUS_TYPE_USER = '" . $status . "'
                        WHERE TYPE_USER_ID = '" . $idType . "';";
                $result = $db->connection($sql);
                if ($result) {
                    echo 'success';
                } else {
                    echo 'error';
                }
                break;
            case 'Discount':
                $status = $_POST['status'];
                $name = $_POST['name'];
                $idDis = $_POST['identity'];
                $condition = $_POST['condition'];
                $percent = $_POST['percent'];
                $start_date = $_POST['dateStart'];
                $end_date = $_POST['dateEnd'];
                $sql = "UPDATE discounts
                        SET NAME_DISCOUNT = '" . $name . "',
                            `CONDITION` = '" . $condition . "',
                            `PERCENT`= '" . $percent . "',
                            START_DATE = '" . $start_date . "',
                            END_DATE = '" . $end_date . "',
                            STATUS_DISCOUNT = '" . $status . "'
                        WHERE DISCOUNT_ID = '" . $idDis . "';";
                $result = $db->connection($sql);
                if ($result) {
                    echo 'success';
                } else {
                    echo $sql;
                }
                break;
            case 'Role':
                $nameRole = $_POST['name_role'];
                $des = $_POST['des_role'];
                $status = $_POST['status_role'];
                $idRole = $_POST['identity'];
                $sql = "UPDATE roles
                        SET NAME_ROLE = '" . $nameRole . "',
                            DESCRIPTION_ROLE = '" . $des . "',
                            STATUS_ROLE = '" . $status . "'
                        WHERE ROLE_ID = '" . $idRole . "';";
                $result = $db->connection($sql);
                if ($result) {
                    echo 'success';
                } else {
                    echo 'error';
                }
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
                $sql = "UPDATE accounts SET STATUS = 'đã xóa' WHERE USERNAME = '" . $idObject . "'";
                $result = $db->connection($sql);
                if ($result) {
                    echo 'success';
                } else {
                    echo 'error';
                }
                break;
                // case 'Permission':
                //     $idObject = $_POST['ob'];
                //     $sql = "UPDATE permission SET STATUS_PER = 'đã xóa' WHERE PERMISSION_ID = '" . $idObject . "'";
                //     $result = $db->connection($sql);
                //     if ($result) {
                //         echo 'success';
                //     } else {
                //         echo 'error';
                //     }
                //     break;
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
