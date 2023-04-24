const addProductToCart = () => {
    let quantityProduct = $("#quantity").val();
    let productID = $("#productID").val();
    console.log(quantityProduct, productID);
    $.ajax({
        url: "public/cart/cart.php",
        type: "POST",
        data: { quantityProduct: quantityProduct,
            productID: productID },
        success: function (data) {
            if(data != 'success') {
                alert(data);
            }
            else {
                alert("Thêm vào giỏ hàng thành công");
            }
        }
    });
}