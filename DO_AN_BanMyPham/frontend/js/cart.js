    const addProductToCart = () => {
    let quantityProduct = $("#quantity").val();
    let productID = $("#productID").val();
    console.log(quantityProduct, productID);
    $.ajax({
        url: "public/cart/cart.php",
        type: "POST",
        data: { quantityProduct: quantityProduct, productID: productID },
        success: function (data) {
        if (data != "success") {
            alert("Bạn cần đăng nhập để thêm giỏ hàng");
            Login();
        } else {
            alert("Thêm vào giỏ hàng thành công");
        }
        },
    });
    };

    $(document).on("click", ".btnAdd-cart", function () {
    let quantityProduct = 1;
    let productID = $(this).closest(".box-item .info-item").attr("data-content");
    console.log(quantityProduct, productID);
    $.ajax({
        url: "public/cart/cart.php",
        type: "POST",
        data: { quantityProduct: quantityProduct, productID: productID },
        success: function (data) {
        if (data != "success") {
            alert(data);
            // alert("Bạn cần đăng nhập để thêm giỏ hàng");
            // Login();
        } else {
            alert("Thêm vào giỏ hàng thành công");
        }
        },
    });
});
