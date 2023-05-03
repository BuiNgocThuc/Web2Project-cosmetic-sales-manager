<?php
if (isset($_GET['pid'])) {
    $id = $_GET['pid'];
    session_start();
    include("../connectDB.php");
    $sql = "SELECT * 
FROM products p JOIN category c ON p.CATEGORY_ID = c.CATEGORY_ID JOIN brands b ON p.BRAND_ID = b.BRAND_ID AND PRODUCT_ID = '$id'";
    $db = new ConnectDB();
    $result = $db->connection($sql);
    $product = $result->fetch_assoc();
}
?>
<div id="product_details" class="product-details">
    <div class="item_details">
        <div class="product-image">
            <img src="../image/img/<?php echo $product['IMG_PRO']; ?>" alt="<?php echo $product['NAME_PRO']; ?>">
        </div>
        <div class="product-info">
            <h2 class="product-name"><?php echo $product['NAME_PRO']; ?></h2>
            <div class="bonus-info">
                <div class="product-brand"><?php echo $product['NAME_BRAND']; ?></div>
                <span>|</span>
                <div class="product-cat"><?php echo $product['NAME_CAT']; ?></div>
            </div>
            <div class="product-price"><?php echo number_format($product['PRICE_PRO']); ?> VNĐ</div>
            <div><span class="input-number-decrement">–</span><input class="input-number" id="quantity" type="text" value="1" min="1" max="100"><span class="input-number-increment">+</span></div>
            <button class="add-to-cart-button" id="productID" data-id="<?php echo $product['PRODUCT_ID']; ?>" onclick="addProductToCart()"> <i class="fa-sharp fa-light fa-cart-plus"></i> Thêm Vào giỏ hàng</button>

            <!-- <ul class="product-features">
                <li>Contains a highly concentrated amount of niacinamide (vitamin B3) for maximum results</li>
                <li>Antioxidants and skin-replenishing ingredients help visibly improve fine lines, wrinkles, and uneven skin tone</li>
                <li>Lightweight, serum texture absorbs quickly into skin</li>
                <li>Fragrance-free, colorant-free, and formulated without drying alcohols</li>
            </ul> -->
        </div>
    </div>
</div>