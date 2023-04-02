<?php
    include 'connect_Database.php';
    
    // Truy vấn tất cả sản phẩm từ cơ sở dữ liệu
    $sql = "SELECT * FROM sanpham";
    // $result = $conn->query($sql);
    $result =mysqli_query($conn,$sql);
    // Lưu trữ dữ liệu vào một mảng
    $products = array();
    if(mysqli_num_rows($result)>0){
        while ($row = mysqli_fetch_assoc($result)) {
            $products[] = $row;
        }
    
        // Kiểm tra nếu có sản phẩm trong cơ sở dữ liệu
        if(isset($_GET['id'])) {
            if (count($products) > 0) {
                foreach($products as $row) {
                    echo    '<div class="grid__column-2-4">
                                <a class="home-product-item" href="./?id=' . $row["MaSP"] .'">
                                    <img class="home-product-item__img" src="' . $row["HinhAnh"] .'">
                                    
                                    <h4 class="home-product-item__name"> ' . $row["TenSP"] .'</h4>
                                    
                                    <div class="home-product-item__price">
                                        <span class="home-product-item__price-current">' . number_format($row["GiaBan"]) .'</span>
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
        
                                        <span class="home-product-item__sold">' . $row["SLBan"] .' đã bán</span>
                                    </div>
        
                                    <div class="home-product-item__origin">
                                        <span class="home-product-item__brand">' . $row["MaTH"] .'</span>
                                        <span class="home-product-item__origin-name">' . $row["NguonGoc"] .'</span>
                                    </div>
                                </a>
                            </div>';
                }
            } 
    }
        else {
          echo "Không tìm thấy sản phẩm nào";
        }
    }
    // Đóng kết nối  
    mysqli_close($conn);

?>

