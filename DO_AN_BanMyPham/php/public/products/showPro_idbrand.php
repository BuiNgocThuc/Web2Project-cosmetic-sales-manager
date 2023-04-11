<?php
    include 'connect_Database.php';
    
    if(isset($_GET['id'])){
        $cid = isset($_GET['category_id']);

        $sqlB = "SELECT * FROM products WHERE CATEGORY_ID = '$cid'";
        $result = mysqli_query($conn,$sqlB);
        
        $listBrand = array();
      
        if(mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_assoc($result)) {
                $listBrand[] = $row;
            }
        }
        foreach($products as $row) {
            echo    '<div class="grid__column-2-4">
                        <div class="home-product-item" pid="' . $row["PRODUCT_ID"] .'">
                            <img class="home-product-item__img" src="assets/img/'. $row["IMG_PRO"] .'">
                            
                            <h4 class="home-product-item__name"> ' . $row["NAME_PRO"] .'</h4>
                            
                            <div class="home-product-item__price">
                                <span class="home-product-item__price-current">' . number_format($row["PRICE_PRO"]) .'đ</span>
                            </div>

                            <div class="home-product-item__action">
                                <span class="home-product-item__like home-product-item__like--liked">
                                    <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                    <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                </span>

                                <div class="home-product-item__rating">
                                    <i class="home-product-item__star-gold fas fa-star"></i>
                                    <i class="home-product-item__star-gold fas fa-star"></i>
                                    <i class="home-product-item__star-gold fas fa-star"></i>
                                    <i class="home-product-item__star-gold fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>

                                <span class="home-product-item__sold">' . $row["QUANTITY_PRO"] .' đã bán</span>
                            </div>

                            <div class="home-product-item__origin">
                                <span class="home-product-item__brand">' . $row["BRAND_ID"] .'</span>
                                <span class="home-product-item__origin-name">' . $row["ORIGIN_PRO"] .'</span>
                            </div>
                        </div>
                    </div>';
        }
    }

    else {
        echo 'fail!';
    }
?>
