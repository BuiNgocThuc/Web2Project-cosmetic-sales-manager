<?php
include("../connectDB.php");
$db = new ConnectDB();
$id = $_POST['id']; // id của permission
$idRole = $_POST['idRole']; // id của role
$action = $_POST['action']; // action của permission
switch ($_POST['actionRole']) {
    case 'createRole':
        $sql = "SELECT * FROM role_permissions WHERE ROLE_ID = '" . $idRole . "' AND PERMISSION_ID = '" . $id . "' AND ACTION = '" . $action . "'";
        $result = $db->connection($sql);
        if (mysqli_num_rows($result) == 0) {
            echo $id . '<br>';
            echo $sql . '<br>';
            switch ($action) {
                case 'create':
                    $sql = "INSERT INTO role_permissions (`ROLE_ID`, `PERMISSION_ID`, `ACTION`, `STATUS`)
                    VALUES ('" . $idRole . "','" . $id . "','Create','đang hoạt động')";
                    $result = $db->connection($sql);
                    if ($result) {
                        echo 'success 111';
                    } else {
                        echo 'error';
                    }
                    break;
                case 'delete':
                    $sql = "INSERT INTO role_permissions (`ROLE_ID`, `PERMISSION_ID`, `ACTION`, `STATUS`)
                    VALUES ('" . $idRole . "','" . $id . "','Delete','đang hoạt động')";
                    $result = $db->connection($sql);
                    if ($result) {
                        echo 'success';
                    } else {
                        echo 'error';
                    }
                    break;
                case 'update':
                    $sql = "INSERT INTO role_permissions (`ROLE_ID`, `PERMISSION_ID`, `ACTION`, `STATUS`)
                    VALUES ('" . $idRole . "','" . $id . "','Update','đang hoạt động')";
                    $result = $db->connection($sql);
                    if ($result) {
                        echo 'success';
                    } else {
                        echo 'error';
                    }
                    break;
                case 'access':
                    $sql = "INSERT INTO role_permissions (`ROLE_ID`, `PERMISSION_ID`, `ACTION`, `STATUS`)
                    VALUES ('" . $idRole . "','" . $id . "','Access','đang hoạt động')";
                    $result = $db->connection($sql);
                    if ($result) {
                        echo 'success';
                    } else {
                        echo 'error';
                    }
                    break;
                case 'control':
                    $sql = "INSERT INTO role_permissions (`ROLE_ID`, `PERMISSION_ID`, `ACTION`, `STATUS`)
                    VALUES ('" . $idRole . "','" . $id . "','Control','đang hoạt động')";
                    $result = $db->connection($sql);
                    if ($result) {
                        echo 'success';
                    } else {
                        echo 'error';
                    }
                    break;
            }
        }
    case 'updateRole':
        $sql = "UPDATE role_permissions 
                    SET STATUS = 'ngừng hoạt động' 
                    WHERE ROLE_ID = '" . $idRole . "' AND PERMISSION_ID = '" . $id . "' AND ACTION = '" . $action . "'";
        $result = $db->connection($sql);
        if ($result) {
            echo 'success';
        } else {
            echo 'error';
        }
        break;
}
