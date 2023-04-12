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
        // e.preventDefault();
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
    // Select Brand
    // $(document).on('click', '.select-brand', function (e) {
    //     // e.preventDefault();
    //     var bid = $(this).attr('bid');
    //     $.ajax({
    //         url: 'fetch_data.php',
    //         type: 'GET',
    //         data: {
    //             brand_id: bid
    //         },
    //         success: function (data) {
    //             $('#home__product').html(data);
    //         }
    //     });
    // })
    // Pagination
    $(document).on('click', '.pagination-item', function (e) {
        // e.preventDefault();
        var page = $(this).attr('pageid');
        console.log(page);
        $.ajax({
            url: 'ajax-pagination.php',
            type: 'GET',
            data: {
                page_no: page
            },
            success: function (data) {
                $('#home__product').html(data);
                console.log(data);
            }
        });
    })

    // function loadProduct() {
    //     $ajax({
    //         url: 'ajax-pagination.php',
    //         type: 'GET',
    //         data: {
    //             page_no: page
    //         },
    //         success: function (data) {
    //             $('#home__product').html(data);
    //             console.log(data);
    //         }
    //     })
    // }
    // loadProduct();
});
