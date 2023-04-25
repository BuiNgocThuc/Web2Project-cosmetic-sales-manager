<?php
    include 'connect_Database.php';

    if(isset($_GET['category'])) {
        $sqlc = "SELECT CATEGORY_ID, NAME_CAT FROM category";
        mysqli_query($conn, "SET NAMES 'utf8'") ;
        $resultc = mysqli_query($conn,$sqlc);
        $id_category = isset($_GET['id_category']) ? $_GET['id_category'] : 0;               
        if(mysqli_num_rows($resultc) > 0){
            $stt = 1;
            while ($row = mysqli_fetch_assoc($resultc)) {
                echo    '<li class="category-item" categoryid="'. $stt .'">';
                if($id_category != $stt) {
                    echo   '<div cid="'. $row["CATEGORY_ID"] .'" class="category-item__link" categoryid='. $stt .'>'. $row["NAME_CAT"] .'</div>';
                }
                else {
                    echo   '<div cid="'. $row["CATEGORY_ID"] .'" class="category-item__link select-category">'. $row["NAME_CAT"] .'</div>';
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
