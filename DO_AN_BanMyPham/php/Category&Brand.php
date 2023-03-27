<?php
    include 'KetNoi_Database.php';

    // CATEGOGY
    if(isset($_GET['id'])) {
        switch ($_GET['id']) {
            case 'category_makeup':
                // Truy vấn tất cả sản phẩm từ cơ sở dữ liệu
                $sql = "SELECT * FROM trangdiem";
                $result = $conn->query($sql);

                // Kiểm tra nếu có sản phẩm trong cơ sở dữ liệu
                if ($result->num_rows > 0) {
                    // Vòng lặp để lấy từng sản phẩm và hiển thị trên trang
                    while($row = $result->fetch_assoc()) {
                        echo    '<div class="grid__column-2-4">
                                    <a class="home-product-item" href="./?id='. $row["IDMakeup"] .' ">
                                        <img class="home-product-item__img" src=" '. $row["imgMakeup"] .' ">
                                        
                                        <h4 class="home-product-item__name"> '. $row["nameMakeup"] .' </h4>
                                        
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-current">'. number_format($row["priceMakeup"]) .' đ</span>
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

                                            <span class="home-product-item__sold">'. $row["soldMakeup"] .' đã bán</span>
                                        </div>

                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">'. $row["brandMakeup"] .'</span>
                                            <span class="home-product-item__origin-name">'. $row["originMakeup"] .'</span>
                                        </div>
                                    </a>
                                </div>';
                        
                    }
                } 
                else {
                    echo "Không tìm thấy sản phẩm nào";
                }  
                mysqli_close($conn);
                break;

            case 'category_lipstick':
                // Truy vấn tất cả sản phẩm từ cơ sở dữ liệu
                $sql = "SELECT * FROM sonmoi";
                $result = $conn->query($sql);

                // Kiểm tra nếu có sản phẩm trong cơ sở dữ liệu
                if ($result->num_rows > 0) {
                    // Vòng lặp để lấy từng sản phẩm và hiển thị trên trang
                    while($row = $result->fetch_assoc()) {
                        echo    '<div class="grid__column-2-4">
                                    <a class="home-product-item" href="./?id='. $row["IDSlipstick"] .' ">
                                        <img class="home-product-item__img" src=" '. $row["imgSlipstick"] .' ">
                                        
                                        <h4 class="home-product-item__name"> '. $row["nameSlipstick"] .' </h4>
                                        
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-current">'. number_format($row["priceSlipstick"]) .' đ</span>
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

                                            <span class="home-product-item__sold">'. $row["soldSlipstick"] .' đã bán</span>
                                        </div>

                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">'. $row["brandSlipstick"] .'</span>
                                            <span class="home-product-item__origin-name">'. $row["originSlipstick"] .'</span>
                                        </div>
                                    </a>
                                </div>';
                    }
                }
                else {
                    echo "Không tìm thấy sản phẩm nào";
                }  
                mysqli_close($conn);

                break;
            
            case 'category_SkinCake':
                // Truy vấn tất cả sản phẩm từ cơ sở dữ liệu
                $sql = "SELECT * FROM skincake";
                $result = $conn->query($sql);

                // Kiểm tra nếu có sản phẩm trong cơ sở dữ liệu
                if ($result->num_rows > 0) {
                    // Vòng lặp để lấy từng sản phẩm và hiển thị trên trang
                    while($row = $result->fetch_assoc()) {
                        echo    '<div class="grid__column-2-4">
                                    <a class="home-product-item" href="./?id='. $row["IDSkincake"] .' ">
                                        <img class="home-product-item__img" src=" '. $row["imgSkincake"] .' ">
                                        
                                        <h4 class="home-product-item__name"> '. $row["nameSkincake"] .' </h4>
                                        
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-current">'. number_format($row["priceSkincake"]) .' đ</span>
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

                                            <span class="home-product-item__sold">'. $row["soldSkincake"] .' đã bán</span>
                                        </div>

                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">'. $row["brandSkincake"] .'</span>
                                            <span class="home-product-item__origin-name">'. $row["originSkincake"] .'</span>
                                        </div>
                                    </a>
                                </div>';
                        
                    }
                } 
                else {
                    echo "Không tìm thấy sản phẩm nào";
                }  
                mysqli_close($conn);
            
                break;
            
            case 'category_hairCake':
                // Truy vấn tất cả sản phẩm từ cơ sở dữ liệu
                $sql = "SELECT * FROM haircake";
                $result = $conn->query($sql);

                // Kiểm tra nếu có sản phẩm trong cơ sở dữ liệu
                if ($result->num_rows > 0) {
                    // Vòng lặp để lấy từng sản phẩm và hiển thị trên trang
                    while($row = $result->fetch_assoc()) {
                        echo    '<div class="grid__column-2-4">
                                    <a class="home-product-item" href="./?id='. $row["IDHaircake"] .' ">
                                        <img class="home-product-item__img" src=" '. $row["imgHaircake"] .' ">
                                        
                                        <h4 class="home-product-item__name"> '. $row["nameHaircake"] .' </h4>
                                        
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-current">'. number_format($row["priceHaircake"]) .' đ</span>
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

                                            <span class="home-product-item__sold">'. $row["soldHaircake"] .' đã bán</span>
                                        </div>

                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">'. $row["brandHaircake"] .'</span>
                                            <span class="home-product-item__origin-name">'. $row["originHaircake"] .'</span>
                                        </div>
                                    </a>
                                </div>';
                        
                    }
                } 
                else {
                    echo "Không tìm thấy sản phẩm nào";
                }  
                mysqli_close($conn);

                break;

            case 'category_makeupTools':
                // Truy vấn tất cả sản phẩm từ cơ sở dữ liệu
                $sql = "SELECT * FROM makeuptools";
                $result = $conn->query($sql);

                // Kiểm tra nếu có sản phẩm trong cơ sở dữ liệu
                if ($result->num_rows > 0) {
                    // Vòng lặp để lấy từng sản phẩm và hiển thị trên trang
                    while($row = $result->fetch_assoc()) {
                        echo    '<div class="grid__column-2-4">
                                    <a class="home-product-item" href="./?id='. $row["IDMakeupTools"] .' ">
                                        <img class="home-product-item__img" src=" '. $row["imgMakeupTools"] .' ">
                                        
                                        <h4 class="home-product-item__name"> '. $row["nameMakeupTools"] .' </h4>
                                        
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-current">'. number_format($row["priceMakeupTools"]) .' đ</span>
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

                                            <span class="home-product-item__sold">'. $row["soldMakeupTools"] .' đã bán</span>
                                        </div>

                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">'. $row["brandMakeupTools"] .'</span>
                                            <span class="home-product-item__origin-name">'. $row["originMakeupTools"] .'</span>
                                        </div>
                                    </a>
                                </div>';
                        
                    }
                } 
                else {
                    echo "Không tìm thấy sản phẩm nào";
                }  
                mysqli_close($conn);

                break;

            case 'category_perfume':
                // Truy vấn tất cả sản phẩm từ cơ sở dữ liệu
                $sql = "SELECT * FROM nuochoa";
                $result = $conn->query($sql);

                // Kiểm tra nếu có sản phẩm trong cơ sở dữ liệu
                if ($result->num_rows > 0) {
                    // Vòng lặp để lấy từng sản phẩm và hiển thị trên trang
                    while($row = $result->fetch_assoc()) {
                        echo    '<div class="grid__column-2-4">
                                    <a class="home-product-item" href="./?id='. $row["IDPerfume"] .' ">
                                        <img class="home-product-item__img" src=" '. $row["imgPerfume"] .' ">
                                        
                                        <h4 class="home-product-item__name"> '. $row["namePerfume"] .' </h4>
                                        
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-current">'. number_format($row["pricePerfume"]) .' đ</span>
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

                                            <span class="home-product-item__sold">'. $row["soldPerfume"] .' đã bán</span>
                                        </div>

                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">'. $row["brandPerfume"] .'</span>
                                            <span class="home-product-item__origin-name">'. $row["originPerfume"] .'</span>
                                        </div>
                                    </a>
                                </div>';
                        
                    }
                } 
                else {
                    echo "Không tìm thấy sản phẩm nào";
                }  
                mysqli_close($conn);

                break;

            case 'category_highEnd':
                // Truy vấn tất cả sản phẩm từ cơ sở dữ liệu
                $sql = "SELECT * FROM cosmeticshighend";
                $result = $conn->query($sql);

                // Kiểm tra nếu có sản phẩm trong cơ sở dữ liệu
                if ($result->num_rows > 0) {
                    // Vòng lặp để lấy từng sản phẩm và hiển thị trên trang
                    while($row = $result->fetch_assoc()) {
                        echo    '<div class="grid__column-2-4">
                                    <a class="home-product-item" href="./?id='. $row["IDCosmeticsHighEnd"] .' ">
                                        <img class="home-product-item__img" src=" '. $row["imgCosmeticsHighEnd"] .' ">
                                        
                                        <h4 class="home-product-item__name"> '. $row["nameCosmeticsHighEnd"] .' </h4>
                                        
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-current">'. number_format($row["priceCosmeticsHighEnd"]) .' đ</span>
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

                                            <span class="home-product-item__sold">'. $row["soldCosmeticsHighEnd"] .' đã bán</span>
                                        </div>

                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">'. $row["brandCosmeticsHighEnd"] .'</span>
                                            <span class="home-product-item__origin-name">'. $row["originCosmeticsHighEnd"] .'</span>
                                        </div>
                                    </a>
                                </div>';
                    }
                } 
                else {
                    echo "Không tìm thấy sản phẩm nào";
                }  
                mysqli_close($conn);

                break;

            case 'category_functionFood':
                // Truy vấn tất cả sản phẩm từ cơ sở dữ liệu
                $sql = "SELECT * FROM functionfood";
                $result = $conn->query($sql);

                // Kiểm tra nếu có sản phẩm trong cơ sở dữ liệu
                if ($result->num_rows > 0) {
                    // Vòng lặp để lấy từng sản phẩm và hiển thị trên trang
                    while($row = $result->fetch_assoc()) {
                        echo    '<div class="grid__column-2-4">
                                    <a class="home-product-item" href="./?id='. $row["IDFunctionFood"] .' ">
                                        <img class="home-product-item__img" src=" '. $row["imgFunctionFood"] .' ">
                                        
                                        <h4 class="home-product-item__name"> '. $row["nameFunctionFood"] .' </h4>
                                        
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-current">'. number_format($row["priceFunctionFood"]) .' đ</span>
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

                                            <span class="home-product-item__sold">'. $row["soldFunctionFood"] .' đã bán</span>
                                        </div>

                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">'. $row["brandFunctionFood"] .'</span>
                                            <span class="home-product-item__origin-name">'. $row["originFunctionFood"] .'</span>
                                        </div>
                                    </a>
                                </div>';
                    }
                } 
                else {
                    echo "Không tìm thấy sản phẩm nào";
                }  
                mysqli_close($conn);

                break;
            case 'category_giftSet':
                // Truy vấn tất cả sản phẩm từ cơ sở dữ liệu
                $sql = "SELECT * FROM giftset";
                $result = $conn->query($sql);

                // Kiểm tra nếu có sản phẩm trong cơ sở dữ liệu
                if ($result->num_rows > 0) {
                    // Vòng lặp để lấy từng sản phẩm và hiển thị trên trang
                    while($row = $result->fetch_assoc()) {
                        echo    '<div class="grid__column-2-4">
                                    <a class="home-product-item" href="./?id='. $row["IDGiftSet"] .' ">
                                        <img class="home-product-item__img" src=" '. $row["imgGiftSet"] .' ">
                                        
                                        <h4 class="home-product-item__name"> '. $row["nameGiftSet"] .' </h4>
                                        
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-current">'. number_format($row["priceGiftSet"]) .' đ</span>
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

                                            <span class="home-product-item__sold">'. $row["soldGiftSet"] .' đã bán</span>
                                        </div>

                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">'. $row["brandGiftSet"] .'</span>
                                            <span class="home-product-item__origin-name">'. $row["originGiftSet"] .'</span>
                                        </div>
                                    </a>
                                </div>';
                    }
                } 
                else {
                    echo "Không tìm thấy sản phẩm nào";
                }  
                mysqli_close($conn);

                break;

            case 'category_otherproduct':
                // Truy vấn tất cả sản phẩm từ cơ sở dữ liệu
                $sql = "SELECT * FROM sanphamkhac";
                $result = $conn->query($sql);

                // Kiểm tra nếu có sản phẩm trong cơ sở dữ liệu
                if ($result->num_rows > 0) {
                    // Vòng lặp để lấy từng sản phẩm và hiển thị trên trang
                    while($row = $result->fetch_assoc()) {
                        echo    '<div class="grid__column-2-4">
                                    <a class="home-product-item" href="./?id='. $row["IDOtherCosmetics"] .' ">
                                        <img class="home-product-item__img" src=" '. $row["imgOtherCosmetics"] .' ">
                                        
                                        <h4 class="home-product-item__name"> '. $row["nameOtherCosmetics"] .' </h4>
                                        
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-current">'. number_format($row["priceOtherCosmetics"]) .' đ</span>
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

                                            <span class="home-product-item__sold">'. $row["soldOtherCosmetics"] .' đã bán</span>
                                        </div>

                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">'. $row["brandOtherCosmetics"] .'</span>
                                            <span class="home-product-item__origin-name">'. $row["originOtherCosmetics"] .'</span>
                                        </div>
                                    </a>
                                </div>';
                    }
                } 
                else {
                    echo "Không tìm thấy sản phẩm nào";
                }  
                mysqli_close($conn);

                break;
            
                case 'brand_INNISFREE':
                    // Truy vấn tất cả sản phẩm từ cơ sở dữ liệu
                    $sql = "SELECT * FROM innisfree";
                    $result = $conn->query($sql);
    
                    // Kiểm tra nếu có sản phẩm trong cơ sở dữ liệu
                    if ($result->num_rows > 0) {
                        // Vòng lặp để lấy từng sản phẩm và hiển thị trên trang
                        while($row = $result->fetch_assoc()) {
                            echo    '<div class="grid__column-2-4">
                                        <a class="home-product-item" href="./?id='. $row["IDINNISFREE"] .' ">
                                            <img class="home-product-item__img" src=" '. $row["imgINNISFREE"] .' ">
                                            
                                            <h4 class="home-product-item__name"> '. $row["nameINNISFREE"] .' </h4>
                                            
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-current">'. number_format($row["priceINNISFREE"]) .' đ</span>
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
    
                                                <span class="home-product-item__sold">'. $row["soldINNISFREE"] .' đã bán</span>
                                            </div>
    
                                            <div class="home-product-item__origin">
                                                <span class="home-product-item__brand">'. $row["brandINNISFREE"] .'</span>
                                                <span class="home-product-item__origin-name">'. $row["originINNISFREE"] .'</span>
                                            </div>
                                        </a>
                                    </div>';
                        }
                    } 
                    else {
                        echo "Không tìm thấy sản phẩm nào";
                    }  
                    mysqli_close($conn);
    
                    break;
                case 'brand_BLACK-ROUGE':
                    // Truy vấn tất cả sản phẩm từ cơ sở dữ liệu
                    $sql = "SELECT * FROM blackrouge";
                    $result = $conn->query($sql);
    
                    // Kiểm tra nếu có sản phẩm trong cơ sở dữ liệu
                    if ($result->num_rows > 0) {
                        // Vòng lặp để lấy từng sản phẩm và hiển thị trên trang
                        while($row = $result->fetch_assoc()) {
                            echo    '<div class="grid__column-2-4">
                                        <a class="home-product-item" href="./?id='. $row["IDBLACKROUGE"] .' ">
                                            <img class="home-product-item__img" src=" '. $row["imgBLACKROUGE"] .' ">
                                            
                                            <h4 class="home-product-item__name"> '. $row["nameBLACKROUGE"] .' </h4>
                                            
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-current">'. number_format($row["priceBLACKROUGE"]) .' đ</span>
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
    
                                                <span class="home-product-item__sold">'. $row["soldBLACKROUGE"] .' đã bán</span>
                                            </div>
    
                                            <div class="home-product-item__origin">
                                                <span class="home-product-item__brand">'. $row["brandBLACKROUGE"] .'</span>
                                                <span class="home-product-item__origin-name">'. $row["originBLACKROUGE"] .'</span>
                                            </div>
                                        </a>
                                    </div>';
                        }
                    } 
                    else {
                        echo "Không tìm thấy sản phẩm nào";
                    }  
                    mysqli_close($conn);
    
                    break;
                case 'brand_LAROCHE-POSAY':
                    // Truy vấn tất cả sản phẩm từ cơ sở dữ liệu
                    $sql = "SELECT * FROM larocheposay";
                    $result = $conn->query($sql);
    
                    // Kiểm tra nếu có sản phẩm trong cơ sở dữ liệu
                    if ($result->num_rows > 0) {
                        // Vòng lặp để lấy từng sản phẩm và hiển thị trên trang
                        while($row = $result->fetch_assoc()) {
                            echo    '<div class="grid__column-2-4">
                                        <a class="home-product-item" href="./?id='. $row["IDLAROCHEPOSAY"] .' ">
                                            <img class="home-product-item__img" src=" '. $row["imgLAROCHEPOSAY"] .' ">
                                            
                                            <h4 class="home-product-item__name"> '. $row["nameLAROCHEPOSAY"] .' </h4>
                                            
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-current">'. number_format($row["priceLAROCHEPOSAY"]) .' đ</span>
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
    
                                                <span class="home-product-item__sold">'. $row["soldLAROCHEPOSAY"] .' đã bán</span>
                                            </div>
    
                                            <div class="home-product-item__origin">
                                                <span class="home-product-item__brand">'. $row["brandLAROCHEPOSAY"] .'</span>
                                                <span class="home-product-item__origin-name">'. $row["originLAROCHEPOSAY"] .'</span>
                                            </div>
                                        </a>
                                    </div>';
                        }
                    } 
                    else {
                        echo "Không tìm thấy sản phẩm nào";
                    }  
                    mysqli_close($conn);
    
                    break;
                case "brand_L'ORÉAL":
                    // Truy vấn tất cả sản phẩm từ cơ sở dữ liệu
                    $sql = "SELECT * FROM loreal";
                    $result = $conn->query($sql);
    
                    // Kiểm tra nếu có sản phẩm trong cơ sở dữ liệu
                    if ($result->num_rows > 0) {
                        // Vòng lặp để lấy từng sản phẩm và hiển thị trên trang
                        while($row = $result->fetch_assoc()) {
                            echo    '<div class="grid__column-2-4">
                                        <a class="home-product-item" href="./?id='. $row["IDLOREAL"] .' ">
                                            <img class="home-product-item__img" src=" '. $row["imgLOREAL"] .' ">
                                            
                                            <h4 class="home-product-item__name"> '. $row["nameLOREAL"] .' </h4>
                                            
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-current">'. number_format($row["priceLOREAL"]) .' đ</span>
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
    
                                                <span class="home-product-item__sold">'. $row["soldLOREAL"] .' đã bán</span>
                                            </div>
    
                                            <div class="home-product-item__origin">
                                                <span class="home-product-item__brand">'. $row["brandLOREAL"] .'</span>
                                                <span class="home-product-item__origin-name">'. $row["originLOREAL"] .'</span>
                                            </div>
                                        </a>
                                    </div>';
                        }
                    } 
                    else {
                        echo "Không tìm thấy sản phẩm nào";
                    }  
                    mysqli_close($conn);
    
                    break;
                case 'brand_MAYBELLINE':
                    // Truy vấn tất cả sản phẩm từ cơ sở dữ liệu
                    $sql = "SELECT * FROM maybelline";
                    $result = $conn->query($sql);
    
                    // Kiểm tra nếu có sản phẩm trong cơ sở dữ liệu
                    if ($result->num_rows > 0) {
                        // Vòng lặp để lấy từng sản phẩm và hiển thị trên trang
                        while($row = $result->fetch_assoc()) {
                            echo    '<div class="grid__column-2-4">
                                        <a class="home-product-item" href="./?id='. $row["IDMAYBELLINE"] .' ">
                                            <img class="home-product-item__img" src=" '. $row["imgMAYBELLINE"] .' ">
                                            
                                            <h4 class="home-product-item__name"> '. $row["nameMAYBELLINE"] .' </h4>
                                            
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-current">'. number_format($row["priceMAYBELLINE"]) .' đ</span>
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
    
                                                <span class="home-product-item__sold">'. $row["soldMAYBELLINE"] .' đã bán</span>
                                            </div>
    
                                            <div class="home-product-item__origin">
                                                <span class="home-product-item__brand">'. $row["brandMAYBELLINE"] .'</span>
                                                <span class="home-product-item__origin-name">'. $row["originMAYBELLINE"] .'</span>
                                            </div>
                                        </a>
                                    </div>';
                        }
                    } 
                    else {
                        echo "Không tìm thấy sản phẩm nào";
                    }  
                    mysqli_close($conn);
    
                    break;
                case 'brand_MAC':
                    // Truy vấn tất cả sản phẩm từ cơ sở dữ liệu
                    $sql = "SELECT * FROM MAC";
                    $result = $conn->query($sql);
    
                    // Kiểm tra nếu có sản phẩm trong cơ sở dữ liệu
                    if ($result->num_rows > 0) {
                        // Vòng lặp để lấy từng sản phẩm và hiển thị trên trang
                        while($row = $result->fetch_assoc()) {
                            echo    '<div class="grid__column-2-4">
                                        <a class="home-product-item" href="./?id='. $row["IDMAC"] .' ">
                                            <img class="home-product-item__img" src=" '. $row["imgMAC"] .' ">
                                            
                                            <h4 class="home-product-item__name"> '. $row["nameMAC"] .' </h4>
                                            
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-current">'. number_format($row["priceMAC"]) .' đ</span>
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
    
                                                <span class="home-product-item__sold">'. $row["soldMAC"] .' đã bán</span>
                                            </div>
    
                                            <div class="home-product-item__origin">
                                                <span class="home-product-item__brand">'. $row["brandMAC"] .'</span>
                                                <span class="home-product-item__origin-name">'. $row["originMAC"] .'</span>
                                            </div>
                                        </a>
                                    </div>';
                        }
                    } 
                    else {
                        echo "Không tìm thấy sản phẩm nào";
                    }  
                    mysqli_close($conn);
    
                    break;
                case 'brand_3CE':
                    // Truy vấn tất cả sản phẩm từ cơ sở dữ liệu
                    $sql = "SELECT * FROM 3ce";
                    $result = $conn->query($sql);
    
                    // Kiểm tra nếu có sản phẩm trong cơ sở dữ liệu
                    if ($result->num_rows > 0) {
                        // Vòng lặp để lấy từng sản phẩm và hiển thị trên trang
                        while($row = $result->fetch_assoc()) {
                            echo    '<div class="grid__column-2-4">
                                        <a class="home-product-item" href="./?id='. $row["ID3CE"] .' ">
                                            <img class="home-product-item__img" src=" '. $row["img3CE"] .' ">
                                            
                                            <h4 class="home-product-item__name"> '. $row["name3CE"] .' </h4>
                                            
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-current">'. number_format($row["price3CE"]) .' đ</span>
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
    
                                                <span class="home-product-item__sold">'. $row["sold3CE"] .' đã bán</span>
                                            </div>
    
                                            <div class="home-product-item__origin">
                                                <span class="home-product-item__brand">'. $row["brand3CE"] .'</span>
                                                <span class="home-product-item__origin-name">'. $row["origin3CE"] .'</span>
                                            </div>
                                        </a>
                                    </div>';
                        }
                    } 
                    else {
                        echo "Không tìm thấy sản phẩm nào";
                    }  
                    mysqli_close($conn);
    
                    break;
                case 'brand_OLAY':
                    // Truy vấn tất cả sản phẩm từ cơ sở dữ liệu
                    $sql = "SELECT * FROM olay";
                    $result = $conn->query($sql);
    
                    // Kiểm tra nếu có sản phẩm trong cơ sở dữ liệu
                    if ($result->num_rows > 0) {
                        // Vòng lặp để lấy từng sản phẩm và hiển thị trên trang
                        while($row = $result->fetch_assoc()) {
                            echo    '<div class="grid__column-2-4">
                                        <a class="home-product-item" href="./?id='. $row["IDOLAY"] .' ">
                                            <img class="home-product-item__img" src=" '. $row["imgOLAY"] .' ">
                                            
                                            <h4 class="home-product-item__name"> '. $row["nameOLAY"] .' </h4>
                                            
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-current">'. number_format($row["priceOLAY"]) .' đ</span>
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
    
                                                <span class="home-product-item__sold">'. $row["soldOLAY"] .' đã bán</span>
                                            </div>
    
                                            <div class="home-product-item__origin">
                                                <span class="home-product-item__brand">'. $row["brandOLAY"] .'</span>
                                                <span class="home-product-item__origin-name">'. $row["originOLAY"] .'</span>
                                            </div>
                                        </a>
                                    </div>';
                        }
                    } 
                    else {
                        echo "Không tìm thấy sản phẩm nào";
                    }  
                    mysqli_close($conn);
    
                    break;
                case 'brand_GENTACIN':
                    // Truy vấn tất cả sản phẩm từ cơ sở dữ liệu
                    $sql = "SELECT * FROM gentacin";
                    $result = $conn->query($sql);
    
                    // Kiểm tra nếu có sản phẩm trong cơ sở dữ liệu
                    if ($result->num_rows > 0) {
                        // Vòng lặp để lấy từng sản phẩm và hiển thị trên trang
                        while($row = $result->fetch_assoc()) {
                            echo    '<div class="grid__column-2-4">
                                        <a class="home-product-item" href="./?id='. $row["IDGENTACIN"] .' ">
                                            <img class="home-product-item__img" src=" '. $row["imgGENTACIN"] .' ">
                                            
                                            <h4 class="home-product-item__name"> '. $row["nameGENTACIN"] .' </h4>
                                            
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-current">'. number_format($row["priceGENTACIN"]) .' đ</span>
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
    
                                                <span class="home-product-item__sold">'. $row["soldGENTACIN"] .' đã bán</span>
                                            </div>
    
                                            <div class="home-product-item__origin">
                                                <span class="home-product-item__brand">'. $row["brandGENTACIN"] .'</span>
                                                <span class="home-product-item__origin-name">'. $row["originGENTACIN"] .'</span>
                                            </div>
                                        </a>
                                    </div>';
                        }
                    } 
                    else {
                        echo "Không tìm thấy sản phẩm nào";
                    }  
                    mysqli_close($conn);
    
                    break;
                case 'brand_SILKYGIRL':
                    // Truy vấn tất cả sản phẩm từ cơ sở dữ liệu
                    $sql = "SELECT * FROM silkygirl";
                    $result = $conn->query($sql);
    
                    // Kiểm tra nếu có sản phẩm trong cơ sở dữ liệu
                    if ($result->num_rows > 0) {
                        // Vòng lặp để lấy từng sản phẩm và hiển thị trên trang
                        while($row = $result->fetch_assoc()) {
                            echo    '<div class="grid__column-2-4">
                                        <a class="home-product-item" href="./?id='. $row["IDSILKYGIRL"] .' ">
                                            <img class="home-product-item__img" src=" '. $row["imgSILKYGIRL"] .' ">
                                            
                                            <h4 class="home-product-item__name"> '. $row["nameSILKYGIRL"] .' </h4>
                                            
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-current">'. number_format($row["priceSILKYGIRL"]) .' đ</span>
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
    
                                                <span class="home-product-item__sold">'. $row["soldSILKYGIRL"] .' đã bán</span>
                                            </div>
    
                                            <div class="home-product-item__origin">
                                                <span class="home-product-item__brand">'. $row["brandSILKYGIRL"] .'</span>
                                                <span class="home-product-item__origin-name">'. $row["originSILKYGIRL"] .'</span>
                                            </div>
                                        </a>
                                    </div>';
                        }
                    } 
                    else {
                        echo "Không tìm thấy sản phẩm nào";
                    }  
                    mysqli_close($conn);
    
                    break;
            
            default:
                include("SanPham.php");
                break;
        }  
    }

    else {
        $sql = "SELECT * FROM sanpham";
        $result = $conn->query($sql);

        // Kiểm tra nếu có sản phẩm trong cơ sở dữ liệu
        if ($result->num_rows > 0) {
        
            // Vòng lặp để lấy từng sản phẩm và hiển thị trên trang
            while($row = $result->fetch_assoc()) {

                echo    '<div class="grid__column-2-4 js-hide--homeProduct">
                            <a class="home-product-item" href="./?id='. $row["IDSanPham"] .' ">
                                <img class="home-product-item__img" src=" '. $row["imgUrl"] .' ">
                                
                                <h4 class="home-product-item__name"> '. $row["name"] .' </h4>
                                
                                <div class="home-product-item__price">
                                    <span class="home-product-item__price-current">'. number_format($row["price"]) .' đ</span>
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

                                    <span class="home-product-item__sold">'. $row["sold"] .' đã bán</span>
                                </div>

                                <div class="home-product-item__origin">
                                    <span class="home-product-item__brand">'. $row["brand"] .'</span>
                                    <span class="home-product-item__origin-name">'. $row["origin"] .'</span>
                                </div>
                            </a>
                        </div>';
                }
        } else {
            echo "Không tìm thấy sản phẩm nào";
        }  
        mysqli_close($conn);
    }
        
?>