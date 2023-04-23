<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cosmetics";
    // Tạo kết nối
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn, 'UTF8');
    // Kiểm tra kết nối
    if ($conn->connect_errno) {
        echo "Failed to connect to MySQL: " . $conn->connect_error;
        exit();
    }
    
?>