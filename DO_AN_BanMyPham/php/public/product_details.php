<?php
// Lấy id sản phẩm từ tham số truyền vào
// $currentDir = dirname(__FILE__);
// $cssDir = $currentDir . '/frontend/css/';
if (isset($_GET['pid'])) {
    $id = $_GET['pid'];
} else {
    // Nếu không có tham số truyền vào, chuyển hướng về trang btbt
    echo 'ko co id chuyen vao';
    // header("Location: index.php");
    exit();
}
// Truy vấn để lấy thông tin sản phẩm
session_start();
// echo  $_SESSION['USERNAME'];
include("../connectDB.php");
$sql = "SELECT p.PRODUCT_ID, p.NAME_PRO, p.PRICE_PRO, p.SLIDESHOW, p.IMG_PRO, c.NAME_CAT, b.NAME_BRAND 
FROM products p JOIN category c ON p.CATEGORY_ID = c.CATEGORY_ID JOIN brands b ON p.BRAND_ID = b.BRAND_ID AND PRODUCT_ID = '$id'";
$db = new ConnectDB();
$result = $db->connection($sql);
// $result = $conn->query($sql);
// Kiểm tra có sản phẩm hay không
if ($result->num_rows == 0) {
    // Nếu không có sản phẩm, chuyển hướng về trang sản phẩm
    echo 'ko co sp';
    header("Location: index.php");
    exit();
}

// Lấy thông tin sản phẩm
$product = $result->fetch_assoc();

// Đóng kết nối cơ sở dữ liệu
// $conn->close();
?>
<div id="product_details" class="product-details">
    <img class="product-images" src="../image/img/<?php echo $product['IMG_PRO']; ?>" alt="<?php echo $product['NAME_PRO']; ?>">
    <div class="product-info">
        <h1 class="product-name"><?php echo $product['NAME_PRO']; ?></h1>
        <p class="product-price">Giá: <?php echo number_format($product['PRICE_PRO']); ?> đ</p>
        <p class="product-brand" style="display: inline-block;"><?php echo $product['NAME_BRAND']; ?></p> <span>, </span>
        <p class="product-brand" style="display: inline-block;"><a href="#"></a><?php echo $product['NAME_CAT']; ?></a></p>
        <div>
            <input type="hidden" id="productID" name="product_id" value="<?php echo $product['PRODUCT_ID']; ?>">
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" value="1" min="1">
            <button class="add-to-cart-button" onclick="addProductToCart()">Add to Cart</button>
        </div>
        <ul class="product-features">
            <li>Contains a highly concentrated amount of niacinamide (vitamin B3) for maximum results</li>
            <li>Antioxidants and skin-replenishing ingredients help visibly improve fine lines, wrinkles, and uneven skin tone</li>
            <li>Lightweight, serum texture absorbs quickly into skin</li>
            <li>Fragrance-free, colorant-free, and formulated without drying alcohols</li>
        </ul>
    </div>
</div>
<!-- <div class="featured-products">
        <h2 class="title">Sản phẩm nổi bật</h2>
        <div class="slider">
            <div class="box-item">
                <div class="image-item">
                    <img src="https://klairsvietnam.vn/wp-content/uploads/2020/07/mat-na-diu-da-klairs-300x300.jpg" alt="">
                </div>
                <div class="info-item">
                    <p class="name-item">Resist Youth-Extending Daily Hydrating Fluid SPF 50</p>
                    <div class="price-item">
                        <span class="old-price price">395.000<sup>₫</sup></span>
                        <span class="new-price price">310.000<sup>₫</sup></span>
                    </div>
                    <button class="btnAdd-cart">Thêm vào giỏ hàng</button>
                </div>
            </div>
            <div class="box-item">
                <div class="image-item">
                    <img src="https://klairsvietnam.vn/wp-content/uploads/2020/07/kem-nen-klairs-300x300.jpg" alt="">
                </div>
                <div class="info-item">
                    <p class="name-item">Resist Youth-Extending Daily Hydrating Fluid SPF 50</p>
                    <div class="price-item">
                        <span class="old-price price">395.000<sup>₫</sup></span>
                        <span class="new-price price">310.000<sup>₫</sup></span>
                    </div>
                    <button class="btnAdd-cart">Thêm vào giỏ hàng</button>
                </div>
            </div>
            <div class="box-item">
                <div class="image-item">
                    <img src="https://klairsvietnam.vn/wp-content/uploads/2021/07/Dear-Klairs-Fundamental-Ampule-Mist-300x300.jpg" alt="">
                </div>
                <div class="info-item">
                    <p class="name-item">Resist Youth-Extending Daily Hydrating Fluid SPF 50</p>
                    <div class="price-item">
                        <span class="old-price price">395.000<sup>₫</sup></span>
                        <span class="new-price price">310.000<sup>₫</sup></span>
                    </div>
                    <button class="btnAdd-cart">Thêm vào giỏ hàng</button>
                </div>
            </div>
            <div class="box-item">
                <div class="image-item">
                    <img src="https://klairsvietnam.vn/wp-content/uploads/2020/07/nuoc-hoa-hong-khong-mui-klairs-300x300.jpg" alt="">
                </div>
                <div class="info-item">
                    <p class="name-item">Resist Youth-Extending Daily Hydrating Fluid SPF 50</p>
                    <div class="price-item">
                        <span class="old-price price">395.000<sup>₫</sup></span>
                        <span class="new-price price">310.000<sup>₫</sup></span>
                    </div>
                    <button class="btnAdd-cart">Thêm vào giỏ hàng</button>
                </div>
            </div>
            <div class="box-item">
                <div class="image-item">
                    <img src="https://klairsvietnam.vn/wp-content/uploads/2020/07/mat-na-ngu-klairs-300x300.jpg" alt="">
                </div>
                <div class="info-item">
                    <p class="name-item">Resist Youth-Extending Daily Hydrating Fluid SPF 50</p>
                    <div class="price-item">
                        <span class="old-price price">395.000<sup>₫</sup></span>
                        <span class="new-price price">310.000<sup>₫</sup></span>
                    </div>
                    <button class="btnAdd-cart">Thêm vào giỏ hàng</button>
                </div>
            </div>
            <div class="box-item">
                <div class="image-item">
                    <img src="https://klairsvietnam.vn/wp-content/uploads/2020/07/tay-te-bao-chet-klairs-300x300.jpg" alt="">
                </div>
                <div class="info-item">
                    <p class="name-item">Resist Youth-Extending Daily Hydrating Fluid SPF 50</p>
                    <div class="price-item">
                        <span class="old-price price">395.000<sup>₫</sup></span>
                        <span class="new-price price">310.000<sup>₫</sup></span>
                    </div>
                    <button class="btnAdd-cart">Thêm vào giỏ hàng</button>
                </div>
            </div>
            <div class="box-item">
                <div class="image-item">
                    <img src="https://klairsvietnam.vn/wp-content/uploads/2020/07/mat-na-diu-da-klairs-300x300.jpg" alt="">
                </div>
                <div class="info-item">
                    <p class="name-item">Resist Youth-Extending Daily Hydrating Fluid SPF 50</p>
                    <div class="price-item">
                        <span class="old-price price">395.000<sup>₫</sup></span>
                        <span class="new-price price">310.000<sup>₫</sup></span>
                    </div>
                    <button class="btnAdd-cart">Thêm vào giỏ hàng</button>
                </div>
            </div>
            <div class="box-item">
                <div class="image-item">
                    <img src="https://product.hstatic.net/200000135107/product/cocoon_ttbc_bd37634103904969816d319e6c59baa1_medium.jpg" alt="">
                </div>
                <div class="info-item">
                    <p class="name-item">Resist Youth-Extending Daily Hydrating Fluid SPF 50</p>
                    <div class="price-item">
                        <span class="old-price price">395.000<sup>₫</sup></span>
                        <span class="new-price price">310.000<sup>₫</sup></span>
                    </div>
                    <button class="btnAdd-cart">Thêm vào giỏ hàng</button>
                </div>
            </div>
        </div>
    </div> -->