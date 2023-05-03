<main id="home-wrapper">
    <i class="fa-light fa-circle-arrow-up fa-2xl" id="toTop"></i>
    <div class="slideshow-container">
        <div class="image-item">
            <img src="../image/img/slide2.png" alt="">
        </div>
        <div class="image-item">
            <img src="../image/img/slide3.jpg" alt="">
        </div>
        <div class="image-item">
            <img src="../image/img/slide4.jpg" alt="">
        </div>
        <div class="image-item">
            <img src="../image/img/slide5.jpg" alt="">
        </div>
        <div class="image-item">
            <img src="../image/img/slide6.jpg" alt="">
        </div>
        <div class="image-item">
            <img src="../image/img/slide7.jpg" alt="">
        </div>
        <div class="image-item">
            <img src="../image/img/slide8.jpg" alt="">
        </div>
        <div class="image-item">
            <img src="../image/img/slide9.jpg" alt="">
        </div>
        <div class="image-item">
            <img src="../image/img/slide10.png" alt="">
        </div>
    </div>
    <div class="featured-products">
        <h2 class="title">Sản phẩm nổi bật</h2>
        <div class="slider">
            <?php
            require_once("connectDB.php");
            $db = new ConnectDB();
            $sql = "SELECT * FROM products WHERE SLIDESHOW = 1";
            $result = $db->connection($sql);
            while ($row = mysqli_fetch_array($result)) {
                echo '<div class="box-item">
                <div class="image-item">
                    <img src="../image/img/' . $row['IMG_PRO'] . '" alt="">
                </div>
                <div class="info-item" data-content="' . $row['PRODUCT_ID'] . '">
                    <p class="name-item">' . $row['NAME_PRO'] . '</p>
                    <div class="price-item">
                        <span class="old-price price">' . ($row['PRICE_PRO'] * 110 / 100) . '<sup>₫</sup></span>
                        <span class="new-price price">' . $row['PRICE_PRO'] . '<sup>₫</sup></span>
                    </div>
                    <button class="btnAdd-cart">Thêm vào giỏ hàng</button>
                </div>
            </div>';
            }
            ?>
        </div>
        <div class="deal-of-day">
            <div class="countdown-flash-sale">
                <h2 class="title-deal">Sự Kiện Sắp ra Mắt</h2>
                <div class="countdown">
                    <div class="time">
                        <h2 id="days"></h2>
                        <small>Days</small>
                    </div>

                    <div class="time">
                        <h2 id="hours"></h2>
                        <small>Hours</small>
                    </div>

                    <div class="time">
                        <h2 id="minutes"></h2>
                        <small>Minutes</small>
                    </div>

                    <div class="time">
                        <h2 id="seconds"></h2>
                        <small>Seconds</small>
                    </div>
                </div>
                <button class="more-info" onclick="loadPageUser('Blogs')">Xem thêm</button>
            </div>
            <div class="banner-sale-off">

            </div>
        </div>
        <div class="new-arrivals">
            <h2 class="title">Sản phẩm mới</h2>
            <div class="new-product-slider">
                <?php
                require_once("connectDB.php");
                $db = new ConnectDB();
                $sql = "SELECT * FROM products WHERE NEW_ARRIVALS = 1";
                $result = $db->connection($sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo '<div class="item">
                <div class="image-item">
                    <img src="../image/img/' . $row['IMG_PRO'] . '" alt="">
                </div>
                <button class="quick-view" onclick="loadProductDetails('.$row['PRODUCT_ID'].')">Xem nhanh</button>
            </div>';
                }
                ?>
            </div>
        </div>
        <div class="introduce-demo">
            <div class="image-celeb">
                <img src="https://stylecaster.com/wp-content/uploads/2021/06/blackpink-lisa-mac.jpg" alt="">
            </div>
            <div class="intro-text">
                <h2 class="title">Giới thiệu</h2>
                <div class="content">
                    <p>nơi cung cấp đa dạng các mặt hàng từ mỹ phẩm Makeup, mỹ phẩm chăm sóc da, thực phẩm chức năng đến
                        thời trang trẻ em tiêu chuẩn Hàn Quốc. </p>
                </div>
                <button class="more-info" onclick="loadPageUser('Introduce')">Xem thêm</button>
            </div>
        </div>
        <div class="parallax">
        </div>
        <div class="why-us">
            <h2 class="title">Tại sao nên chọn MOON cosmetic</h2>
            <div class="advantage">
                <div class="box-item">
                    <span><i class="fa-light fa-shield-check fa-2xl"></i></span>
                    <small>sản phẩm chính hãng</small>
                </div>
                <div class="box-item">
                    <span><i class="fa-light fa-truck-fast fa-2xl"></i></span>
                    <small>giao hàng toàn quốc</small>
                </div>
                <div class="box-item">
                    <span><i class="fa-light fa-headphones fa-2xl"></i></span>
                    <small>tư vấn miễn phí</small>
                </div>
            </div>
            <hr>
        </div>
        <div class="information">
            <div class="address">
                <span><i class="fa-solid fa-location-dot fa-xl"></i> Chi nhánh 1: 73 Mạc Đĩnh Chi, P. Đa Kao, Quận 1, TP. Hồ Chí Minh, Việt Nam</span>
                <span><i class="fa-solid fa-location-dot fa-xl"></i> Chi nhánh 2: 116 Yersin, P. Nguyễn Thái Bình, Quận 1, TP. Hồ Chí Minh, Việt Nam</span>
            </div>
            <div class="connection">
                <span><i class="fa-duotone fa-phone fa-xl"></i> 0123456789</span>
                <span><i class="fa-duotone fa-envelope fa-xl"></i> acb123@gmail.com</span>
            </div>
            <div class="open-store">
                <span>Giờ mở cửa: Các ngày trong tuần từ 9:00 – 21:00</span>
            </div>
        </div>
        <hr style="border:1px solid #2B2626; margin: 3rem 5rem;">
</main>