<?php
session_start();
require '../connectDB.php';
$db = new ConnectDB();
if(isset($_POST['dataBrand'])){
    echo 'successfully';
    $_SESSION['data'] = $_POST['dataBrand']; // lưu mảng vào Session
}

if (isset($_POST['idImport'])) {
    echo $_POST['idImport'];
    $_SESSION['IMPORT_ID'] = $_POST['idImport'];
} 

if(isset($_POST['idRole'])){
    $idRole = $_POST['idRole'];
    $sql = "SELECT PERMISSION_ID, ACTION FROM role_permissions WHERE ROLE_ID = '" . $idRole . "'";
    $result = $db->connection($sql);
    $role = array();
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            array_push($role, $row);
        }
    }
    echo json_encode($role);
}