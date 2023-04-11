<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - check out</title>
    <link rel="stylesheet" href="assets/css/style_Payment.css">
    <link rel="stylesheet" href="assets/icon/themify-icons/themify-icons.css">
    
</head>
<body>
    <div class="container_Payments">
        <div class="infoClient">
            <h2 class="infoClient__text">Thông tin thanh toán</h2>
            <div class="infoClient__inputs">
                <div>
                    <input class="infoClient__input-text" type="text" placeholder="Họ tên khách hàng">
                    <input class="infoClient__input-text" type="text" placeholder="Số điện thoại">
                    <input class="infoClient__input-text" type="text" placeholder="Địa chỉ giao hàng">
                    <input class="infoClient__input-text" type="text" placeholder="Email">
                    <input class="infoClient__input-text" type="text" placeholder="Ghi chú...">
                </div>

                <div>
                    <select name="" id="infoClient__select-pay">
                        <option value="a">Chọn hình thức thanh toán</option>
                        <option value="b">Thanh toán khi nhận hàng</option>
                        <option value="c">Thanh toán qua thẻ ngân hàng</option>
                    </select>
                </div>
            </div>

            <div class="infoClient__btn">
                <a href="" class="btn">
                    <i class="ti-arrow-left"></i>
                    Tiếp tục mua hàng
                </a>
                <button class="btn btn--pay">Thanh toán</button>
            </div>
        </div>

        <div class="listProducts">
            <div class="container__products">
                <h2 class="listProducts__text">Danh sách sản phẩm</h2>
                <ul class="listProducts__product">
                    <li class="listProducts__item">
                        <img class="listProducts__item-img" src="assets/img/imgproduct_3.jpg" alt="">
                        <div class="listProducts__item-info">
                            <h3 class="listProducts__item-info-title">Cocoon</h3>
                            <span class="listProducts__item-info-function">Tẩy da chết Body Cocoon Dak Lak Coffee</span>
                            <span class="listProducts__item-info-capacity">Body Polish Cà phê Đắk Lắk 200ml</span>
                        </div>
                        <span class="listProducts__item-price bold--text">
                            330,000đ
                        </span>
                    </li>

                    <div class="margin--bottom"></div>
    
                    <li class="listProducts__item">
                        <img class="listProducts__item-img" src="assets/img/imgproduct_1.jpg" alt="">
                        <div class="listProducts__item-info">
                            <h3 class="listProducts__item-info-title">Cocoon</h3>
                            <span class="listProducts__item-info-function">Tẩy da chết Body Cocoon Dak Lak Coffee</span>
                            <span class="listProducts__item-info-capacity">Body Polish Cà phê Đắk Lắk 200ml</span>
                        </div>
                        <span class="listProducts__item-price bold--text">
                            330,000đ
                        </span>
                    </li>

                    <div class="margin--bottom"></div>

                    <li class="listProducts__item">
                        <img class="listProducts__item-img" src="assets/img/imgproduct_2.jpg" alt="">
                        <div class="listProducts__item-info">
                            <h3 class="listProducts__item-info-title">Cocoon</h3>
                            <span class="listProducts__item-info-function">Tẩy da chết Body Cocoon Dak Lak Coffee</span>
                            <span class="listProducts__item-info-capacity">Body Polish Cà phê Đắk Lắk 200ml</span>
                        </div>
                        <span class="listProducts__item-price bold--text">
                            330,000đ
                        </span>
                    </li>

                    <div class="margin--bottom"></div>
                </ul>

                <div class="listProducts__provisional-total">
                    <span class="listProducts__provisional-total-text">Tạm tính:</span>
                    <span class="listProducts__provisional-total-price bold--text">990,000đ</span>
                </div>

                <div class="listProducts__discount-code">
                    <input type="text" class="listProducts__discount-code__input" placeholder="Nhập mã giảm giá...">
                    <button class="listProducts__discount-code__application">Áp dụng</button>
                </div>

                <div class="margin--bottom"></div>

                <div class="listProducts__total">
                    <span class="listProducts__total-text">Tổng cộng:</span>
                    <span class="listProducts__total-price bold--text">990,000đ</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>