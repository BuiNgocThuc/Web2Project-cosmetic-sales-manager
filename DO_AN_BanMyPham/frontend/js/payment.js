const discount = () => {
  let totalPrice = parseInt($("#totalPrice").text().replace(/,/g, ""));
  $.ajax({
    url: "setDiscount.php",
    type: "POST",
    data: { totalPrice: totalPrice },
    success: function (data) {
      if (data != "null") {
        $("#currentDiscount").html(data);
        let discountPercent = $(".listProducts__total-discount").attr(
          "data-percent"
        );
        let price = totalPrice * (1 - discountPercent / 100);
        $(".listProducts__total-price").html(price.toLocaleString("en-US"));
      } else {
        $(".listProducts__total-price").html(
          totalPrice.toLocaleString("en-US")
        );
      }
    },
  });
};

const Payment = async () => {
  let name = $("#nameInput").val();
  let phoneNumber = $("#phoneInput").val();
  let address = $("#addressInput").val();
  let email = $("#emailInput").val();
  if (!checkValidInput(name, phoneNumber, address, email)) return;
  let discountID = $(".listProducts__total-discount").attr("data-id");
  let totalPrice = parseInt(
    $(".listProducts__total-price").text().replace(/,/g, "")
  );
  let success = true;
  $.ajax({
    url: "tools/action.php",
    type: "POST",
    data: {
      id: "Export_Receipt",
      totalPrice: totalPrice,
      discountID: discountID,
      action: "create",
    },
    success: function (data) {
      // console.log(data);
      const exArray = $("#product__pay li");
      $.each(exArray, function (index, value) {
        let productID = $(value)
          .find(".listProducts__item-info")
          .attr("data-id");
        let productPrice = $(value)
          .find(".listProducts__item-price")
          .attr("data-price");
        let productQuantity = $(value)
          .find(".listProducts__item-quantity")
          .text();
        $.ajax({
          url: "tools/action.php",
          type: "POST",
          data: {
            id: "Export_Detail",
            productID: productID,
            productPrice: productPrice,
            productQuantity: productQuantity,
            orderID: data,
            action: "create",
          },
          success: function (data) {
            if (data != "success") {
              success = false;
              console.log(data);
            } else {
              success = true;
            }
          },
        });
      });
      UserAccountTool('Order_History');
    },
  });
  if (success) {
    alert("Đặt hàng thành công!!");
  } else {
    console.log("Đặt hàng thất bại!!");
  }
};

const checkValidInput = (name, phoneNumber, address, email) => {
  if(name == ""){
    alert("Chưa nhập tên!");
    return false;
  }
  else if(email == ""){
    alert("Chưa nhập email!");
    return false;
  }
  else if (!regexGmail(email)){
    alert("Email không hợp lệ!");
    return false;
  }
  else if(phoneNumber == ""){
    alert("Chưa nhập số điện thoại!");
    return false;
  }
  else if (!regexPhone(phoneNumber)){
    alert("Số điện thoại không hợp lệ!");
    return false;
  }
  else if(address == ""){
    alert("Chưa nhập địa chỉ!");
    return false;
  }
  return true;
}

