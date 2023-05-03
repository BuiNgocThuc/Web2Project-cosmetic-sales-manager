<section id="header__container">
    <div class="top__header">
        <div class="phone_number">
            <i class="fa-regular fa-phone-volume"></i>
            <label for="">0123456789</label>
        </div>
        <span>Cửa hàng kinh doanh mỹ phẩm chính hãng từ năm 2000 </span>
        <div class="social_media">
            <i class="fa-brands fa-facebook"></i>
            <i class='bx bxl-instagram-alt' style="font-size: 2rem;"></i>
            <i class="fa-brands fa-google"></i>
        </div>
    </div>
    <div class="middle__header">
        <div class="logo">
            <img src="../image/LOGO.jpg" alt="">
        </div>
        <div class="center__header">
            <div class="search__bar">
                <input class="Search_Navbar" type="text" placeholder="tìm sản phẩm bạn mong muốn.... " value="">
                <button class="search__icon">
                    <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
            <div class="bonus__info">
                <div class="shop_system">
                    <i class="fa-duotone fa-store"></i>
                    <span id="show-room">Hệ thống cửa hàng </span>
                </div>
                <div class="beauty_magazine">
                    <i class="fa-duotone fa-newspaper"></i>
                    <span id="show-blog">Tạp chí làm đẹp </span>
                </div>
            </div>
        </div>
        <div class="icon__commerce">
            <div id="cart-icon" onclick="loadPageUser('Cart')">
                <div class="cart__icon">
                    <i class="fa-duotone fa-cart-shopping"></i>
                </div>
                <span class="cart-icon">Giỏ Hàng</span>
            </div>
            <div class="user">
                <!-- <div class="user__icon" onclick="Login('Login')">
                    <i class="fa-duotone fa-user"></i>
                </div>
                <span>Đăng Nhập / Đăng Ký</span> -->
                <?php
                if (isset($_SESSION['USERNAME'])) {
                    echo '<div class="user__icon user__setting">
                        <i class="fa-duotone fa-user">
                            <ul class="setting">
                                <li onclick="loadPageUser(`\Account_Info`)">thông tin tài khoản</li>
                                <li onclick="logout()">đăng xuất</li>
                            </ul>
                        </i>
                    </div>
                    <span>Xin Chào,' . $_SESSION['NAME'] . '</span>';
                } else {
                    echo '<div class="user__icon" onclick="Login()">
                    <i class="fa-duotone fa-user"></i>
                </div>
                <span>Đăng Nhập / Đăng Ký</span>';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="bottom__header">
        <div class="navbar">
            <div class="home">
                <span onclick="loadPageUser('Homepage')">TRANG CHỦ</span>
            </div>
            <div class="product">
                <span onclick="loadPageUser('Product')">SẢN PHẨM</span>
            </div>
            <div class="introduce">
                <span onclick="loadPageUser('Introduce')">GIỚI THIỆU</span>
            </div>
            <div class="blogs">
                <span onclick="loadPageUser('Blogs')">BLOGS</span>
            </div>
        </div>
        <?php
        if (isset($_SESSION['USERNAME'])) {
            echo ' <div class="order_lookup" onclick="UserAccountTool(\'Order_History\')">
                    <span>TRA CỨU ĐƠN HÀNG</span>
                </div>';
        }
        ?>

    </div>
</section>

<div class="modal" id="blog-modal">

    <div class="modal-content">
        <span class="close">&times;</span>
        <main id="Blogs">
            <div class="post">
                <div class="post-image">
                    <img src="https://paulaschoice.vn/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2023/03/da-nhay-cam-co-peel-duoc-khong-0.jpg.webp" alt="Post Image">
                </div>
                <div class="post-content">
                    <h2 class="post-title">Chuyên gia giải đáp: Da nhạy cảm có peel được không?
                    </h2>
                    <div class="post-meta">
                        <span class="post-author">Desiree Stordahl</span>
                        <span class="post-date">25/04/2023</span>
                    </div>
                    <p class="post-summary">Peel da hiện đang là phương pháp chăm sóc da được các tín đồ làm đẹp quan tâm...</p>
                    <a href="#" class="post-read-more">Đọc tiếp</a>
                </div>
            </div>

            <div class="post">
                <div class="post-image">
                    <img src="https://paulaschoice.vn/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2023/02/da-bi-bong-troc-sau-khi-rua-mat-1.png.webp" alt="Post Image">
                </div>
                <div class="post-content">
                    <h2 class="post-title">Nguyên nhân và cách khắc phục da bị bóng tróc sau khi rửa mặt</h2>
                    <div class="post-meta">
                        <span class="post-author">Desiree Stordahl</span>
                        <span class="post-date">25/04/2023</span>
                    </div>
                    <p class="post-summary">Loại bỏ tế bào chết là bước chăm sóc da bạn không nên bỏ qua kể cả với làn da nhạy cảmt...</p>
                    <a href="#" class="post-read-more">Đọc tiếp</a>
                </div>
            </div>
            <div class="post">
                <div class="post-image">
                    <img src="https://paulaschoice.vn/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2023/02/da-nhay-cam-co-nen-dung-vitamin-c-1.png.webp" alt="Post Image">
                </div>
                <div class="post-content">
                    <h2 class="post-title">Giải đáp: Da nhạy cảm có nên dùng Vitamin C không?</h2>
                    <div class="post-meta">
                        <span class="post-author">Desiree Stordahl</span>
                        <span class="post-date">25/04/2023</span>
                    </div>
                    <p class="post-summary">Do là một thành phần acid nên nhiều người vẫn phân vân rằng “Da nhạy cảm có dùng được BHA không?...</p>
                    <a href="#" class="post-read-more">Đọc tiếp</a>
                </div>
            </div>
            <div class="post">
                <div class="post-image">
                    <img src="https://paulaschoice.vn/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2023/02/da-nhay-cam-nen-dung-aha-hay-bha-1.png.webp" alt="Post Image">
                </div>
                <div class="post-content">
                    <h2 class="post-title">Giải đáp: Da nhạy cảm nên dùng AHA hay BHA là phù hợp nhất?</h2>
                    <div class="post-meta">
                        <span class="post-author">Desiree Stordahl</span>
                        <span class="post-date">25/04/2023</span>
                    </div>
                    <p class="post-summary">Với những thông tin như đã đề cập ở trên, AHA và BHA đều là những thành phần...</p>
                    <a href="#" class="post-read-more">Đọc tiếp</a>
                </div>
            </div>
            <!-- Thêm nhiều section bài viết khác ở đây -->
        </main>
    </div>
</div>
<!-- Hiển thị show room-->
<div class="modal" id="room-modal">

    <div class="modal-content">
        <span class="closes">&times;</span>
        <main id="Blogs">
            <div class="post">
                <div class="post-image">
                    <img src="https://i.pinimg.com/736x/68/94/77/6894776d615b04baebe60fdadffc6ef7.jpg" alt="Post Image">
                </div>
                <div class="post-content">
                    <h2 class="post-title">Hồ Chí Minh
                    </h2>
                    <div class="post-meta">
                        <span class="post-author">CN1: </span>
                        <!-- <span class="post-date">Ngày đăng</span> -->
                    </div>
                    <p class="post-summary">81 Hồ Tùng Mậu, P.Bến Nghé, Q.1, TP.HCM</p>
                    <a href="#" class="post-read-more">Xem bản đồ</a>
                </div>
            </div>

            <div class="post">
                <div class="post-image">
                    <img src="https://i.pinimg.com/474x/20/59/dc/2059dcf6a831a671f9ea5d7f79212733.jpg" alt="Post Image">
                </div>
                <div class="post-content">
                    <h2 class="post-title">Hà Nội</h2>
                    <div class="post-meta">
                        <span class="post-author">CN2: </span>
                        <!-- <span class="post-date">Ngày đăng</span> -->
                    </div>
                    <p class="post-summary">182 Cầu Giấy, P.Quan Hoa, Q.Cầu Giấy, Hà Nội </p>
                    <a href="#" class="post-read-more">Xem bản đồ</a>
                </div>
            </div>
            <div class="post">
                <div class="post-image">
                    <img src="https://i.pinimg.com/474x/16/5d/f4/165df4555238616a22e350af65ddd6f2.jpg" alt="Post Image">
                </div>
                <div class="post-content">
                    <h2 class="post-title">Đà Nẵng</h2>
                    <div class="post-meta">
                        <span class="post-author">CN3: </span>
                        <!-- <span class="post-date">Ngày đăng</span> -->
                    </div>
                    <p class="post-summary">393 Lê Duẩn, P.Tân Chính, Q.Thanh Khê, Đà Nẵng </p>
                    <a href="#" class="post-read-more">Xem bản đồ</a>
                </div>
            </div>
            <div class="post">
                <div class="post-image">
                    <img src="https://i.pinimg.com/474x/9b/a6/cd/9ba6cda2c1dbb590433992cd05c9c6f1.jpg" alt="Post Image">
                </div>
                <div class="post-content">
                    <h2 class="post-title">Cần Thơ</h2>
                    <div class="post-meta">
                        <span class="post-author">CN4: </span>
                        <!-- <span class="post-date">25/04/2023</span> -->
                    </div>
                    <p class="post-summary">189-197 đường 30 Tháng 4, P.Xuân Khánh, Q.Ninh Kiều, Cần Thơ</p>
                    <a href="#" class="post-read-more">Xem bản đồ</a>
                </div>
            </div>
            <!-- Thêm nhiều section bài viết khác ở đây -->
        </main>
    </div>
</div>


<style>
    /* Modal */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-content {

        background-color: #fefefe;
        margin: 10% auto;
        padding: 20px;
        border: 1px solid #888;
        border-radius: 20px;
        width: 80%;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    .closes {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .closes:hover,
    .closes:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>