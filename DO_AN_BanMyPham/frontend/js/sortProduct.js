const sortProduct = (currentPage, orderSort) => {
    console.log(currentPage);
    const sortCategoryInput = $('.category-item__checkbox').filter(function () {
        return $(this).is(':checked');
    });
    let sortCategoryArray = [];
    $.each(sortCategoryInput, function (index, value) {
        sortCategoryArray.push($(value).val());
    });
    const sortBrandInput = $('.brand-item__checkbox').filter(function () {
        return $(this).is(':checked');
    });
    let sortBrandArray = [];
    $.each(sortBrandInput, function (index, value) {
        sortBrandArray.push($(value).val());
    });
    let priceValue = parseInt($('.priceSegment input').val());
    let character = $('.Search_Navbar').val();
    // sortBrandArray = JSON.stringify(sortBrandArray);
    // sortCategoryArray = JSON.stringify(sortCategoryArray);
    $.ajax({
        url: "public/products/loadProduct_pagination.php",
        method: "POST",
        data: {
            priceValue: priceValue,
            sortCategoryArray: sortCategoryArray,
            sortBrandArray: sortBrandArray,
            character: character,
            currentPage: currentPage,
            orderSort: orderSort
        },
        success: function (data) {
            $(".home-product").html(data);
        }
    });
}

$(document).on('input', '.category-item__checkbox', function (e) {
    let orderSort = $("#sortPrices").val();
    sortProduct(1, orderSort);
});

$(document).on('input', '.brand-item__checkbox', function (e) {
    let orderSort = $("#sortPrices").val();
    sortProduct(1, orderSort);
});

$(document).on('input', '.priceSegment input', function (e) {
    let orderSort = $("#sortPrices").val();
    sortProduct(1, orderSort);
});
$(document).on('click', '.search__icon', function (e) {
    let orderSort = $("#sortPrices").val();
    sortProduct(1, orderSort);
});

$(document).on("change", "#sortPrices", function (e) {
    let orderSort = $(this).val();
    sortProduct(1, orderSort);
});