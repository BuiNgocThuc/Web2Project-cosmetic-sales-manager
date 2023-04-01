<?php
include("ConnectDB.php");
switch ($_POST['action']) {
    case 'checkLogin':
        $username = $_POST['user'];
        $password = $_POST['pass'];
        $sql = "Select * from ACCOUNTS where USERNAME ='" . $username . "'";
        $db = new ConnectDB();
        $result = $db->connection($sql);
        while($user = mysqli_fetch_array($result)) { 
            if ($user['ROLE_ID'] == 1) {
                echo "admin";
            } else {
                echo "customer";
            }
        }
        break;
}
