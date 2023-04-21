<?php
    include 'connect_Database.php';

    if(isset($_GET['brand'])) {
        $sqlth = "SELECT BRAND_ID, NAME_BRAND FROM brands";
        $resultth =mysqli_query($conn,$sqlth);
        $id_brand = isset($_GET['id_brand']) ? $_GET['id_brand']: 0;
        if(mysqli_num_rows($resultth) > 0){
            $stt = 1;
            while ($row = mysqli_fetch_assoc($resultth)) {
                echo    '<li class="category-item" brandid ='. $stt .'>';
                if($id_brand != $stt){
                    echo    '<div bid="'. $row["BRAND_ID"] .'" class="category-item__link"  brandid ='. $stt .'>'. $row["NAME_BRAND"] .'</div>';
                }
                else {
                    echo    '<div bid="'. $row["BRAND_ID"] .'" class="category-item__link select-brand">'. $row["NAME_BRAND"] .'</div>';
                }
                echo    '</li>';
                $stt++;
            }
        }
    }

    else {
        echo "Không tìm thấy!";
    }

    // Đóng kết nối  
    mysqli_close($conn);

?>
