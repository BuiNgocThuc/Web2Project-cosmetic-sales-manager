<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $target_dir = "../../image/img/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Kiểm tra xem tệp có phải là tệp ảnh không
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File không phải là ảnh.";
        $uploadOk = 0;
    }

    // Kiểm tra xem tệp đã tồn tại chưa
    if (file_exists($target_file)) {
        echo "Tệp đã tồn tại.";
        $uploadOk = 0;
    }

    // Giới hạn kích thước của tệp ảnh
    if ($_FILES["file"]["size"] > 500000) {
        echo "Tệp ảnh quá lớn.";
        $uploadOk = 0;
    }

    // Cho phép tải lên các định dạng ảnh nhất định
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    ) {
        echo "Chỉ được tải lên các tệp ảnh JPG, JPEG, PNG.";
        $uploadOk = 0;
    }

    // Kiểm tra xem $ uploadOk có bằng 0 không trước khi tải lên tệp
    if ($uploadOk == 0) {
        echo "Tệp của bạn không được tải lên.";
        // nếu mọi thứ đều ok, hãy cố gắng tải lên tệp
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            echo "Tệp " . htmlspecialchars(basename($_FILES["file"]["name"])) . " đã được tải lên.";
        } else {
            echo "Có lỗi xảy ra khi tải lên tệp của bạn.";
        }
    }
}
