
// AJAX
$(document).on("click", function () {
    // List product
    function loadProduct(valuePrice, page_active, brandid, category_id) {
        $.ajax({
            url: 'loadProduct_pagination.php',
            method: 'GET',
            data: {
                valuePrice: valuePrice,
                page_active: page_active,
                category_id: category_id,
                brandid: brandid,
            },
            success: function (data) {
                $("#home__product").html(data);
            }
        })
    }
    loadProduct(0, 1);
    // Category
    $.ajax({
        url: 'category.php?category=1',
        method: 'GET',
        dataC: {
            category: 1,
        },
        success: function (dataC) {
            $("#list__category").html(dataC);
        }
    });
    // Brand
    $.ajax({
        url: 'brand.php?brand=1',
        method: 'GET',
        dataB: {
            brand: 1,
        },
        success: function (dataB) {
            $("#list__brand").html(dataB);
        }
    });
    // Select Category
    $(document).on('click', '#list__category .category-item__link', function (e) {
        var id_category = $(this).attr("categoryid");
        var cid = $(this).attr('cid');
        var page_active = $(".pagination-item__link--active").attr("pageid");
        var valuePrice = $("#sortPrices").val();

        loadCategoryActive(id_category);
        loadProduct(valuePrice, page_active, cid);
    })
    // Load Category Active
    function loadCategoryActive(id_category) {
        $.ajax({
            url: 'category.php',
            method: 'GET',
            data: {
                category: 1,
                id_category: id_category,
            },
            success: function (data) {
                $("#list__category").html(data);
            }
        })
    }
    //Select Brand
    $(document).on('click', '#list__brand .category-item__link', function (e) {
        var id_brand = $(this).attr("brandid");
        var bid = $(this).attr("bid");
        var page_active = $(".pagination-item__link--active").attr("pageid");
        var valuePrice = $("#sortPrices").val();

        loadBrandActive(id_brand);
        loadProduct(valuePrice, page_active, bid);
    })
    // Load Brand Active
    function loadBrandActive(id_brand) {
        $.ajax({
            url: 'brand.php',
            method: 'GET',
            data: {
                brand: 1,
                id_brand: id_brand,
            },
            success: function (data) {
                $("#list__brand").html(data);
            }
        })
    }
    // Pagination
    function loadPape(page_num) {
        if (page_num) {
            var page_no = page_num;
        }
        else {
            page_no = 1;
        }
        $.ajax({
            url: 'ajax-pagination.php',
            type: 'GET',
            data: {
                page_no: page_no
            },
            success: function (data) {
                $('#number-page').html(data);
            }
        });
    }
    loadPape();
    // Click vao nut pagination
    $(document).on('click', '.pagination-item', function () {
        var page = $(this).attr("pageid");
        var valuePrice = $("#sortPrices").val();
        loadPape(page);
        loadProduct(valuePrice, page);
    })
    // Price
    $(document).on('change', '#sortPrices', function (e) {
        var valuePrice = $(this).val();
        var page_active = $(".pagination-item__link--active").attr("pageid");
        loadProduct(valuePrice, page_active);
    })

    // Payment
    $.ajax({
        url: 'Pay_fetch_data.php',
        method: 'GET',
        data: {
            producted: 1
        },
        success: function (data) {
            $('#product__pay').html(data);
        }
    })

    // Button continue buy
    $(document).on('click', '#infoClient__btn--buy', function (e) {
        var btn_continue = $(this).val();
        $.ajax({
            url: 'indexListProducts.php',
            method: 'GET',
            data: {
                btn_continue: btn_continue
            },
            success: function (data) {
                window.location = 'indexListProducts.php';
            }
        })
    })

    // Order history
    $(document).on('click', '.btn--pay', function (e) {
        var order_no = $(this).val();
        showTablePayment(order_no);
        $.ajax({
            url: 'Order-History.php',
            method: 'GET',
            success: function () {
                window.location = 'Order-History.php';
            }
        })
    })

    // show table payment
    function showTablePayment(order_no) {
        $.ajax({
            url: 'Order-History.php',
            method: 'GET',
            data: {
                order_no: order_no
            },
            success: function (data) {
                $('.show--order').html(data);
            }
        })
    }

    // 
    $(document).on('click', '.btn-danger', function (e) {
        var btnDanger = $(this).val();
        $.ajax({
            url: 'Order-History.php',
            method: 'GET',
            data: {
                btn_danger: btnDanger
            },
            success: function (data) {
                alert(123);
            }
        })
    })
    
});

