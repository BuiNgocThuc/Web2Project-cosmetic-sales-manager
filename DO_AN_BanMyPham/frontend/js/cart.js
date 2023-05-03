const addProductToCart = () => {
  let quantityProduct = $("#quantity").val();
  let productID = $("#productID").attr("data-id");
  $.ajax({
    url: "public/cart/cart.php",
    type: "POST",
    data: {
      quantityProduct: quantityProduct,
      action: "add",
      productID: productID,
    },
    success: function (data) {
      if (data != "success") {
        alert("Bạn cần đăng nhập để thêm giỏ hàng" + data);
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
  $.ajax({
    url: "public/cart/cart.php",
    type: "POST",
    data: {
      quantityProduct: quantityProduct,
      productID: productID,
      action: "add",
    },
    success: function (data) {
      if (data != "success") {
        alert("Bạn cần đăng nhập để thêm giỏ hàng");
        Login();
      } else {
        alert("Thêm vào giỏ hàng thành công");
      }
    },
  });
});

$(document).on("click", ".remove-button", function () {
  let productID = $(this).attr("data-content");
  console.log(productID);
  $.ajax({
    url: "public/cart/cart.php",
    type: "POST",
    data: { productID: productID, action: "delete" },
    success: function (data) {
      if (data != "success") {
        alert(data);
      } else {
        loadPageUser("Cart");
        alert("Xóa sản phẩm thành công");
      }
    },
  });
});

$(document).on("input", ".quantity-input", function () {
  let newQuantity = $(this).val();
  let productID = $(this).attr("data-content");
  $.ajax({
    url: "public/cart/cart.php",
    type: "POST",
    data: { productID: productID, action: "update", quantityProduct: newQuantity },
    success: function (data) {
      if (data != "success") {
        alert(data);
      } else {
        loadPageUser("Cart");
      }
    },
  });
});
