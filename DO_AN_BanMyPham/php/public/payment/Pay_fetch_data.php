<?php
    include 'connect_Database.php';

    if(isset($_GET['producted'])) {
        $sql = "SELECT products.IMG_PRO, products.NAME_PRO, brands.NAME_BRAND, products.PRICE_PRO FROM products INNER JOIN brands ON products.BRAND_ID = brands.BRAND_ID";
        $result = mysqli_query($conn, $sql);
    
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo    '<li class="listProducts__item">
                            <img class="listProducts__item-img" src="../assets/img/'. $row["IMG_PRO"] .'" alt="">
                            <div class="listProducts__item-info">
                                <h3 class="listProducts__item-info-title">'. $row["NAME_BRAND"] .'</h3>
                                <span class="listProducts__item-info-function">'. $row["NAME_PRO"] .'</span>
                            </div>
                            <span class="listProducts__item-price bold--text">'. number_format($row["PRICE_PRO"]) .'đ</span>
                        </li>
                        <div class="margin--bottom"></div>';
            }
        }
    }
?>