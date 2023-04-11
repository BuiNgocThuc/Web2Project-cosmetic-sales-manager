<?php
    include 'connect_Database.php';

    if(isset($_GET['brand'])) {
        $sqlth = "SELECT * FROM brands";
        $resultth =mysqli_query($conn,$sqlth);

        $brands = array();

        if(mysqli_num_rows($resultth) > 0){
            while ($row = mysqli_fetch_assoc($resultth)) {
                $brands[] = $row;
            }
        }
        foreach($brands as $row) {
            echo    '<li class="category-item">
                        <div bid="'. $row["BRAND_ID"] .'" class="category-item__link select-brand">'. $row["NAME_BRAND"] .'</div>
                    </li>';
        }
    }

    else {
        echo "Không tìm thấy!";
    }


    

    // Đóng kết nối  
    mysqli_close($conn);

?>
