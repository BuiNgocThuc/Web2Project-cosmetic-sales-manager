<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web_cosmetics";
    
    // Tạo kết nối
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    // Kiểm tra kết nối
    if (!$conn) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }
    echo "";
    $GLOBALS['conn'] = $conn;
?>