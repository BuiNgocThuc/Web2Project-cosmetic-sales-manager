const slideShow = document.querySelector('.header__slideshow-adea');
let count = 0;

setInterval(() => {
    slideShow.style.transform = `translateX(${-count * 100}%)`;
    count = (count + 1) % 4;
}, 3000);

// AJAX
$(document).ready(function () {
    // List product
    $.ajax({
        url: 'fetch_data.php',
        method: 'GET',
        data: {
            product: 1,
        },
        success: function (data) {
            $("#home__product").html(data);
        }
    });
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
    $(document).on('click', '.select-category', function (e) {
        var cid = $(this).attr('cid');
        $.ajax({
            url: 'select-category.php',
            type: 'GET',
            data: {
                cat_id: cid
            },
            success: function (data) {
                $('#home__product').html(data);
            }
        });
    })
    //Select Brand
    $(document).on('click', '.select-brand', function (e) {
        var bid = $(this).attr('bid');
        $.ajax({
            url: 'select-brand.php',
            type: 'GET',
            data: {
                brand_id: bid
            },
            success: function (data) {
                $('#home__product').html(data);
            }
        });
    })
    // Pagination
    $(document).on('click', '.pagination-item', function (e) {
        var page = $(this).attr('pageid');
        var valueSelected = $('#sortPrices').val();
        console.log(valueSelected);
        $.ajax({
            url: 'fetch_data.php',
            type: 'GET',
            data: {
                page_no: page,
                page_val: valueSelected
            },
            success: function (data) {
                $('#home__product').html(data);
                loadPape(page);
            }
        });
    })

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

    // Price
    $(document).on('change', '#sortPrices', function (e) {
        var valuePrice = $(this).val();
        console.log(valuePrice);
        $.ajax({
            url: 'ArrangeAtPrice.php',
            type: 'GET',
            data: {
                increase: valuePrice
            },
            success: function (data) {
                $('#home__product').html(data);
            }
        });
    })
});


