<?php
include("../connectDB.php");
$db = new ConnectDB();
$id = $_POST['id'];
// $sqlCount = "SELECT COUNT(*) FROM roles";
// $num = $db->connection($sqlCount);
// while ($row = mysqli_fetch_array($num)) {
//     $idRole = ($row['COUNT(*)'] - 1);
//     echo 'ID nhóm quyền cần cấp chức năng: '. $idRole;
// }
$idRole = $_POST['idRole'];
switch ($_POST['action']) {
    case 'create':
        $sql = "INSERT INTO role_permissions (`ROLE_ID`, `PERMISSION_ID`, `ACTION`, `STATUS`)
                VALUES ('" . $idRole . "','" . $id . "','Create','đang hoạt động')";
        $result = $db->connection($sql);
        break;
    case 'delete':
        $sql = "INSERT INTO role_permissions (`ROLE_ID`, `PERMISSION_ID`, `ACTION`, `STATUS`)
                VALUES ('" . $idRole . "','" . $id . "','Delete','đang hoạt động')";
        $result = $db->connection($sql);
        break;
    case 'update':
        $sql = "INSERT INTO role_permissions (`ROLE_ID`, `PERMISSION_ID`, `ACTION`, `STATUS`)
                VALUES ('" . $idRole . "','" . $id . "','Update','đang hoạt động')";
        $result = $db->connection($sql);
        break;
    case 'access':
        $sql = "INSERT INTO role_permissions (`ROLE_ID`, `PERMISSION_ID`, `ACTION`, `STATUS`)
                VALUES ('" . $idRole . "','" . $id . "','Access','đang hoạt động')";
        $result = $db->connection($sql);
        break;
    case 'control':
        $sql = "INSERT INTO role_permissions (`ROLE_ID`, `PERMISSION_ID`, `ACTION`, `STATUS`)
                VALUES ('" . $idRole . "','" . $id . "','Control','đang hoạt động')";
        $result = $db->connection($sql);
        break;
}
if ($result) {
    echo 'success';
} else {
    echo 'error';
}

