<?php
    include 'connect_Database.php';

    // Kiểm tra nếu có CATEGORY trong cơ sở dữ liệu & Hiển thị dữ liệu
    if(isset($_GET['category'])) {
        $sqlc = "SELECT * FROM category";
        $resultc = mysqli_query($conn,$sqlc);
        
        $categories = array();
        
        if(mysqli_num_rows($resultc) > 0){
            while ($row = mysqli_fetch_assoc($resultc)) {
                $categories[] = $row;
            }
        }
        foreach($categories as $row) {
            echo    '<li class="category-item">
                        <div cid="'. $row["CATEGORY_ID"] .'" class="category-item__link select-category">'. $row["NAME_CAT"] .'</div>
                    </li>';
        }
    }
    
    else {
        echo "Không tìm thấy!";
    }
    
    // Đóng kết nối  
    mysqli_close($conn);
    
?>
