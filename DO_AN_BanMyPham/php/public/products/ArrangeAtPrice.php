<?php
    include 'connect_Database.php';

    $value = isset($_GET['increase']) ? $_GET['increase'] : '';

    $limit_per_page = 8;
    $page = isset($_GET['page_no']) ? $_GET['page_no'] : 1;
    $offset = ($page - 1) * $limit_per_page;

    $products = array();
    $low_to_high = array();
    $high_to_low = array();

    $query = "SELECT PRODUCT_ID, IMG_PRO, NAME_PRO, PRICE_PRO, QUANTITY_PRO, BRAND_ID, ORIGIN_PRO FROM products LIMIT $offset, $limit_per_page";
    if ($value == 1) {
        $query = "SELECT PRODUCT_ID, IMG_PRO, NAME_PRO, PRICE_PRO, QUANTITY_PRO, BRAND_ID, ORIGIN_PRO FROM products ORDER BY PRICE_PRO ASC LIMIT $offset, $limit_per_page";
    } 
    else if ($value == 2) {
        $query = "SELECT PRODUCT_ID, IMG_PRO, NAME_PRO, PRICE_PRO, QUANTITY_PRO, BRAND_ID, ORIGIN_PRO FROM products ORDER BY PRICE_PRO DESC LIMIT $offset, $limit_per_page";
    }

    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
        if ($value == 1) {
            $low_to_high[] = $row;
        } 
        else if ($value == 2) {
            $high_to_low[] = $row;
        }
    }

    if ($value == 1) {
        foreach ($low_to_high as $row) {
            echo '<div class="grid__column-2-4">
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
                            <span class="home-product-item__brand">' . $row["BRAND_ID"] .'</span>
                            <span class="home-product-item__origin-name">' . $row["ORIGIN_PRO"] .'</span>
                        </div>
                    </div>
                </div>';
        }
    } 
    else if ($value == 2) {
        foreach ($high_to_low as $row) {
            echo '<div class="grid__column-2-4">
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
                            <span class="home-product-item__brand">' . $row["BRAND_ID"] .'</span>
                            <span class="home-product-item__origin-name">' . $row["ORIGIN_PRO"] .'</span>
                        </div>
                    </div>
                </div>';
        }
    } 
?>