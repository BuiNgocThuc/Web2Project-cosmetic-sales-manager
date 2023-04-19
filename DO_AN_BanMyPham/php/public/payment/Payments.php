<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - check out</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style_Payment.css">
    <link rel="stylesheet" href="../assets/icon/themify-icons/themify-icons.css">

</head>
<body>
    <div class="container_Payments">
        <div class="infoClient">
            <h2 class="infoClient__text">Thông tin thanh toán</h2>
            <div class="infoClient__inputs">
                <div>
                    <input class="infoClient__input-text" type="text" required placeholder="Họ tên khách hàng" id="nameInput">
                    <input class="infoClient__input-text" type="text" required placeholder="Số điện thoại" id="phoneInput">
                    <input class="infoClient__input-text" type="text" required placeholder="Địa chỉ giao hàng" id="addressInput">
                    <input class="infoClient__input-text" type="text" required placeholder="Email" id="emailInput">
                    <input class="infoClient__input-text" type="text" required placeholder="Ghi chú..." id="noteInput">
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
                <button type="button" class="infoClient__btnBuy" id="infoClient__btn--buy">
                    <i class="ti-arrow-left"></i>
                    Tiếp tục mua hàng
                </button>
                <button type="button" class="infoClient__btnBuy btn--pay">Thanh toán</button>
            </div>
        </div>

        <div class="listProducts">
            <div class="container__products">
                <h2 class="listProducts__text">Danh sách sản phẩm</h2>
                <!-- Products pay -->
                <ul class="listProducts__product" id="product__pay">
                    
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

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="../assets/js/indexProduct.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
