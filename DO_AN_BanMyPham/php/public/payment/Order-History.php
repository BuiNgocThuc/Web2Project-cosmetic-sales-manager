<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order history</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style_Payment.css">
    <link rel="stylesheet" href="../assets/icon/themify-icons/themify-icons.css">

</head>
<body>
    <div class="order-history">
        <ul class="order-history__container">
            <li class="order-history__container__item">
                <div class="order-history__container__header">
                    <div class="order-history__container__header__left">
                        <span class="order-history__container__header__left__like margin--right">Yêu thích</span>
                        <span class="order-history__container__header__left__store margin--right">Herlyshop</span>
                        <button class="order-history__container__header__left__btn-Chat margin--right">
                            <i class="ti-comment-alt icon--message"></i>
                            Chat
                        </button>
                        <button class="order-history__container__header__left__btn-see margin--right">
                            <i class="ti-home"></i>
                            Xem Shop
                        </button>
                    </div>
                    <div class="order-history__container__header__right">
                        <div class="order-history__container__header__right__order-finished">
                            <span class="order-history__container__header__right__title">
                                <i class="ti-truck icon--truck"></i>
                                Đơn hàng đã được giao thành công
                            </span>
                            <i class="ti-help-alt icon--help"></i>
                        </div>
                        <span class="order-history__container__header__right__status">hoàn thành</span>
                    </div>
                </div>

                <div class="order-history__product">
                    <ul class="order-history__product__listPro" id="">
                        <li class="order-history__product__items">
                            <img src="../assets/img/imgproduct_10.jpg" alt=""
                                class="order-history__product__items__img">
                            <div class="order-history__product__items__content">
                                <span class="order-history__product__item--cat">Sữa rửa mặt</span>
                                <span class="order-history__product__item--name">
                                    Sữa Rửa Mặt L'Oreal Làm Sáng Da, GiảmThâm Nám 100
                                </span>
                                <span class="order-history__product__item--quantity">x1</span>
                            </div>

                            <div class="order-history__product__item--price">
                                <span class="order-history__product__item__old--price">200.000d</span>
                                <span class="order-history__product__item__current--price">140.000d</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="order-history__container__item__total">
                    <div class="order-history__container__item__total--container">
                        <div class="order-history__total__item__assessment-notice">
                            <span class="order-history__total__item__assessment-notice__text">Đánh giá sản phẩm trước
                                <div class="order-history__total__item__assessment-notice__date">29-04-2023</div>
                            </span>
                        </div>

                        <div class="order-history__total__item__price-btn">
                            <div class="order-history__total__intoMoney">
                                <i class="ti-money"></i>
                                <span>Thành tiền:</span>
                                <span class="order-history__total__intoMoney__price">60.000d</span>
                            </div>

                            <div class="order-history__total__buttons">
                                <button class="order-history__total__buttons__continue">Mua lại</button>
                                <button class="order-history__total__buttons__cancel">Hủy</button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="../assets/js/indexProduct.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>
</html>
