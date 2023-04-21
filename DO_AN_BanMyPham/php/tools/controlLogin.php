<?php
require("../connectDB.php");
$db = new ConnectDB();
session_start();
switch ($_POST['action']) {
    case "checkLogin":
        $username = $_POST['user'];
        $password = $_POST['pass'];
        $sql2 = "SELECT *  FROM users
                    join accounts on users.USER_ID = accounts.USERNAME";
        $result2 = $db->connection($sql2);
        while ($row = mysqli_fetch_array($result2)) {
            if ($row['USER_ID'] == $username) {
                $name = $row['NAME'];
                break;
            }
        }
        $sql = "SELECT * FROM accounts WHERE username = '" . $username . "' AND STATUS NOT IN ('ngừng hoạt động', 'đã xóa')";
        $result = $db->connection($sql);
        // $i = 1;
        // while ($row = mysqli_fetch_array($result) ){
        //     echo $row['PASSWORD'] . "<br>";
        // }

        $_SESSION['USERNAME'] = $username;
        $_SESSION['NAME'] = $name;     
        if (mysqli_num_rows($result) == 0) {
            echo "Tài khoản không tồn tại";
        } else {
            while ($row = mysqli_fetch_array($result)) {
                $_SESSION['ROLE_ID'] = $row['ROLE_ID'];
                if ($row['PASSWORD'] != $password) {
                    echo 'Sai mật khẩu';
                } else {
                    if ($row['ROLE_ID'] == 0) {
                        echo "customer";
                    } else {
                        echo "employee";
                    }
                }
            }
        }
        break;
    case "checkLogout":
        if (session_destroy())
            header("../index.php");
        break;
    case "checkRegister":
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['user'];
        $password = $_POST['pass'];
        $sql1 = "INSERT INTO users (`USER_ID`, `TYPE_USER_ID`, `NAME`, `PHONE`, `ADDRESS`, `EMAIL`, `STATUS`)
        VALUES ('" . $username . "', 'KH','" . $name . "', 'null', 'null','" . $email . "', 'đang hoạt động')";
        $sql2 = "INSERT INTO accounts (`USERNAME`, `PASSWORD`, `ROLE_ID`, `DATE_CREATE`, `STATUS`)
        VALUES ('" . $username . "','" . $password . "', 0,' " . (new Datetime())->format('Y-m-d') . "', 'đang hoạt động' )";
        $result1 = $db->connection($sql1);
        $result2 = $db->connection($sql2);
        if ($result1 && $result2) {
            echo "Success";
        } else {
            echo "Error: <br>" . $sql1 . "<br>" . $sql2;
        }
        break;
    case "checkUsernameExist":
        $username = $_POST['user'];
        $sql = "select * from accounts where username='" . $username . "'";
        $result = $db->connection($sql);
        if (mysqli_num_rows($result) != 0) {
            echo true;
        } else {
            echo false;
        }
        break;
}
