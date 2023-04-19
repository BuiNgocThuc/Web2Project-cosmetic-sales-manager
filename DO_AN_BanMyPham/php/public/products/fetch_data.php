<?php
    include 'connect_Database.php';
    $valueselect = isset($_GET['page_val']) ? $_GET['page_val'] : '';
    $limit_per_page = 8;
    
    $page = isset($_GET['page_no']) ? $_GET['page_no'] : 1;
    $offset = ($page - 1) * $limit_per_page;

    $query = "SELECT products.PRODUCT_ID, products.IMG_PRO, products.NAME_PRO, products.PRICE_PRO, products.QUANTITY_PRO, brands.NAME_BRAND, products.ORIGIN_PRO FROM products INNER JOIN brands ON products.BRAND_ID = brands.BRAND_ID LIMIT $offset, $limit_per_page";
    if ($valueselect == 1) {
        $query = "SELECT products.PRODUCT_ID, products.IMG_PRO, products.NAME_PRO, products.PRICE_PRO, products.QUANTITY_PRO, brands.NAME_BRAND, products.ORIGIN_PRO FROM products JOIN brands ON products.BRAND_ID = brands.BRAND_ID ORDER BY products.PRICE_PRO ASC LIMIT $offset, $limit_per_page";
    } 
    else if ($valueselect == 2) {
        $query = "SELECT products.PRODUCT_ID, products.IMG_PRO, products.NAME_PRO, products.PRICE_PRO, products.QUANTITY_PRO, brands.NAME_BRAND, products.ORIGIN_PRO FROM products JOIN brands ON products.BRAND_ID = brands.BRAND_ID ORDER BY products.PRICE_PRO DESC LIMIT $offset, $limit_per_page";
    }

    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo    '<div class="grid__column-2-4">
                        <div class="home-product-item" pid="' . $row["PRODUCT_ID"] .'">
                            <img class="home-product-item__img" src="../assets/img/'. $row["IMG_PRO"] .'">
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
                                <span class="home-product-item__brand">' . $row["NAME_BRAND"] .'</span>
                                <span class="home-product-item__origin-name">' . $row["ORIGIN_PRO"] .'</span>
                            </div>
                        </div>
                    </div>
                    </div>';
        }
        
    }

    // Đóng kết nối  
    mysqli_close($conn);
?>


