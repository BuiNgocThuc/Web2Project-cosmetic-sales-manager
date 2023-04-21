const AddInfo = async (id) => {
  switch (id) {
    case "Product":
      let nameProd = document.querySelector("#create-form .new-name").value;
      let brandProd = document.querySelector("#create-form .new-brand").value;
      let categoryProd = document.querySelector(
        "#create-form .new-category"
      ).value;
      let priceProd = document.querySelector("#create-form .new-price").value;
      let originalProd = document.querySelector(
        "#create-form .new-original"
      ).value;
      let imgProd = document.querySelector("#create-form .new-img").files[0]
        .name;
      $.ajax({
        url: "../php/tools/action.php",
        type: "POST",
        data: {
          id: "Product",
          nameProd: nameProd,
          brandProd: brandProd,
          categoryProd: categoryProd,
          priceProd: priceProd,
          imgProd: imgProd,
          originalProd: originalProd,
          action: "create",
        },
        success: function (res) {
          if (res != "success") {
            alert(res);
          } else {
            alert("Tạo sản phẩm mới thành công!!");
            hiddenForm();
          }
        },
      });
      break;
    case "Brand":
      let nameBrd = document.querySelector("#create-form .new-name").value;
      let img = document.querySelector("#create-form .new-img").files[0].name;
      $.ajax({
        url: "../php/tools/action.php",
        type: "POST",
        data: {
          id: "Brand",
          name: nameBrd,
          img: img,
          action: "create",
        },
        success: function (res) {
          if (res != "success") {
            alert(res);
          } else {
            alert("Tạo thương hiệu mới thành công!!");
            hiddenForm();
          }
        },
      });
      break;
    case "Category":
      let nameCat = document.querySelector("#create-form .new-name").value;
      $.ajax({
        url: "../php/tools/action.php",
        type: "POST",
        data: {
          id: "Category",
          nameCat: nameCat,
          action: "create",
        },
        success: function (res) {
          if (res != "success") {
            alert(res);
          } else {
            alert("Tạo danh mục mới thành công!!");
            hiddenForm();
          }
        },
      });
      break;
    case "Provider":
      let namePro = document.querySelector("#create-form .new-name").value;
      let phonePro = document.querySelector("#create-form .new-phone").value;
      let addressPro = document.querySelector(
        "#create-form .new-address"
      ).value;
      let emailPro = document.querySelector("#create-form .new-email").value;
      $.ajax({
        url: "../php/tools/action.php",
        type: "POST",
        data: {
          id: "Provider",
          namePro: namePro,
          phonePro: phonePro,
          addressPro: addressPro,
          emailPro: emailPro,
          action: "create",
        },
        success: function (res) {
          if (res != "success") {
            alert(res);
          } else {
            alert("Tạo nhà cung cấp mới thành công!!");
            hiddenForm();
          }
        },
      });
      break;
    case "User":
      let nameUser = document.querySelector("#create-form .new-name").value;
      let userID = document.querySelector("#create-form .id-user").value;
      let type = document.querySelector("#create-form .type-user").value;
      let phone = document.querySelector("#create-form .phone-user").value;
      let address = document.querySelector("#create-form .address-user").value;
      let email = document.querySelector("#create-form .email-user").value;
      let roleID = document.querySelector("#create-form .role-user").value;
      $.ajax({
        url: "../php/tools/action.php",
        type: "POST",
        data: {
          id: "User",
          userID: userID,
          name: nameUser,
          type: type,
          phone: phone,
          address: address,
          email: email,
          roleID: roleID,
          action: "create",
        },
        success: function (res) {
          if (res != "success") {
            alert(res);
          } else {
            alert("Tạo tài khoản người dùng thành công!!");
          }
        },
      });
      break;
    // case "Permission":
    //   let namePer = document.querySelector("#create-form .new-name").value;
    //   let createPer = document.querySelector("#create-form .create-per").value;
    //   let updatePer = document.querySelector("#create-form .update-per").value;
    //   let deletePer = document.querySelector("#create-form .delete-per").value;
    //   let accessPer = document.querySelector("#create-form .access-per").value;
    //   let controlPer = document.querySelector(
    //     "#create-form .control-per"
    //   ).value;
    //   $.ajax({
    //     url: "../php/tools/action.php",
    //     type: "POST",
    //     data: {
    //       id: "Permission",
    //       namePer: namePer,
    //       createPer: createPer,
    //       updatePer: updatePer,
    //       deletePer: deletePer,
    //       accessPer: accessPer,
    //       controlPer: controlPer,
    //       action: "create",
    //     },
    //     success: function (res) {
    //       if (res != "success") {
    //         alert(res);
    //       } else {
    //         alert("Tạo chức năng mới thành công!!");
    //         hiddenForm();
    //       }
    //     },
    //   });
    //   break;
    case "Type_User":
      let idTypeUser = document.querySelector("#create-form .new-id").value;
      let nameTypeUser = document.querySelector("#create-form .new-name").value;
      $.ajax({
        url: "../php/tools/action.php",
        type: "POST",
        data: {
          id: "Type_User",
          nameTypeUser: nameTypeUser,
          idTypeUser: idTypeUser,
          action: "create",
        },
        success: function (res) {
          if (res != "success") {
            alert(res);
          } else {
            alert("Tạo loại người dùng mới thành công!!");
            hiddenForm();
          }
        },
      });
      break;
    case "Discount":
      // create discount
      let nameDis = document.querySelector("#create-form .new-name").value;
      let conditionDis = document.querySelector(
        "#create-form .new-condition"
      ).value;
      let percentDis = document.querySelector(
        "#create-form .new-percent"
      ).value;
      let dateStartDis = document.querySelector(
        "#create-form .new-date-start"
      ).value;
      let dateEndDis = document.querySelector(
        "#create-form .new-date-end"
      ).value;
      $.ajax({
        url: "../php/tools/action.php",
        type: "POST",
        data: {
          id: "Discount",
          nameDis: nameDis,
          condition: conditionDis,
          percent: percentDis,
          dateStart: dateStartDis,
          dateEnd: dateEndDis,
          action: "create",
        },
        success: function (res) {
          if (res != "success") {
            alert(res);
          } else {
            alert("Tạo mã giảm giá mới thành công!!");
            hiddenForm();
          }
        },
      });
      break;
    case "Import_Receipt":
      let idProvider = $(".info_provider .PROVIDER_PRODUCT").val();
      let totalPrice = parseFloat($(".list-product table tfoot .priceTotal").text());
      if(totalPrice == 0) {
        alert("Hóa đơn nhập không có sản phẩm nào");
        return;
      }
      let success = true;
      $.ajax({
        url: "../php/tools/action.php",
        type: "POST",
        data: {
          id: "Import_Receipt",
          idProvider: idProvider,
          totalPrice: totalPrice,
          action: "create",
        },
        success: function (res) {
          const imArray = $(".list-product table tbody tr ");
          $.each(imArray, function (index, value) {
            let idProduct = $(value)
              .find($(".NAME_PRODUCT"))
              .attr("data-content");
            let quantity = $(value).find($(".QUANTITY_PRODUCT")).text();
            let price = $(value).find($(".UNIT_PRICE_PRODUCT")).text();
            $.ajax({
              url: "../php/tools/action.php",
              type: "POST",
              data: {
                id: "Import_Detail",
                idImport: res,
                idProduct: idProduct,
                quantity: quantity,
                price: price,
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
        },
      });
      if (success) {
        alert("Nhập hàng thành công!!");
        loadPageByAjax("Admin_Coupon");
      } else {
        alert("Nhập hàng thất bại!!");
      }
      break;
  }
};

//get value checkbox
$(document).on("change", "#Admin_Permission .switch", function () {
  // Lấy giá trị hiện tại của checkbox
  var isChecked = $(this).is(":checked");

  // Kiểm tra giá trị và thực hiện xử lý tương ứng
  if (isChecked) {
    $(this).val("1");
  }
});

const UpdateInfo = (id) => {
  switch (id) {
    case "Project":
      break;
    case "Brand":
      let nameBrd = document.querySelector("#fix-form .NAME_OBJECT").value;
      let locationBrd = $("#fix-form .btnConfirm").attr("data-content");
      let statusBrd = $("#fix-form .switch").attr("data-content");
      $.ajax({
        url: "../php/tools/action.php",
        type: "POST",
        data: {
          id: id,
          name: nameBrd,
          status: statusBrd,
          identity: locationBrd,
          action: "update",
        },
        success: function (res) {
          if (res != "success") {
            console.log(res);
          } else {
            alert("Sửa thương hiệu thành công");
            hiddenForm();
          }
        },
      });
      break;
    case "Category":
      let nameCate = document.querySelector("#fix-form .NAME_OBJECT").value;
      let locationCate = $("#fix-form .btnConfirm").attr("data-content");
      let statusCate = $("#fix-form .switch").attr("data-content");
      $.ajax({
        url: "../php/tools/action.php",
        type: "POST",
        data: {
          id: id,
          name: nameCate,
          status: statusCate,
          identity: locationCate,
          action: "update",
        },
        success: function (res) {
          if (res != "success") {
            console.log(res);
          } else {
            alert("Sửa danh mục thành công");
            hiddenForm();
          }
        },
      });
      break;
    case "Provider":
      let namePro = document.querySelector("#fix-form .NAME_OBJECT").value;
      let phonePro = document.querySelector("#fix-form .PHONE_OBJECT").value;
      let emailPro = document.querySelector("#fix-form .EMAIL_OBJECT").value;
      let addressPro = document.querySelector(
        "#fix-form .ADDRESS_OBJECT"
      ).value;
      let locationPro = $("#fix-form .btnConfirm").attr("data-content");
      let statusPro = $("#fix-form .switch").attr("data-content");
      $.ajax({
        url: "../php/tools/action.php",
        type: "POST",
        data: {
          id: id,
          name: namePro,
          phone: phonePro,
          email: emailPro,
          address: addressPro,
          status: statusPro,
          identity: locationPro,
          action: "update",
        },
        success: function (res) {
          if (res != "success") {
            console.log(res);
          } else {
            alert("Sửa nhà cung cấp thành công");
            hiddenForm();
          }
        },
      });
      break;
    case "User":
      let roleUser = $(".update-role .new-role").val();
      let statusUser = $("#fix-form .switch").attr("data-content");
      let locationUser = $("#fix-form .btnConfirm").attr("data-content");
      $.ajax({
        url: "../php/tools/action.php",
        type: "POST",
        data: {
          id: id,
          role: roleUser,
          status: statusUser,
          location: locationUser,
          action: "update",
        },
        success: function (res) {
          if (res != "success") {
            console.log(res);
          } else {
            alert("Sửa người dùng thành công");
            hiddenForm();
          }
        },
      });
      break;
    case "Type_User":
      let nameTypeUser = document.querySelector("#fix-form .NAME_OBJECT").value;
      let locationTypeUser = $("#fix-form .btnConfirm").attr("data-content");
      let statusTypeUser = $("#fix-form .switch").attr("data-content");
      $.ajax({
        url: "../php/tools/action.php",
        type: "POST",
        data: { 
          id: id,
          name: nameTypeUser,
          status: statusTypeUser,
          identity: locationTypeUser,
          action: "update",
        },
        success: function (res) {
          if (res != "success") {
            console.log(res);
          } else {
            alert("Sửa loại người dùng thành công");
            hiddenForm();
          }
        },
      });
      break;
    case "Discount":
      let nameDis = document.querySelector("#fix-form .NAME_OBJECT").value;
      let conditionDis = document.querySelector("#fix-form .CONDITION").value;
      let percentDis = document.querySelector("#fix-form .PERCENT").value;
      let dateStartDis = document.querySelector("#fix-form .START_DATE").value;
      let dateEndDis = document.querySelector("#fix-form .END_DATE").value;
      let locationDis = $("#fix-form .btnConfirm").attr("data-content");
      let statusDis = $("#fix-form .switch").attr("data-content");
      $.ajax({
        url: "../php/tools/action.php",
        type: "POST",
        data: {
          id: id,
          name: nameDis,
          condition: conditionDis,
          percent: percentDis,
          dateStart: dateStartDis,
          dateEnd: dateEndDis,
          action: "update",
          identity: locationDis,
          status: statusDis,
        },
        success: function (res) {
          if (res != "success") {
            console.log(res);
          } else {
            alert("Sửa khuyến mãi thành công");
            hiddenForm();
          }
        },
      });
      break;
      case 'Import_Receipt':
        let newProvider = $(".info_provider select").val();
        let totalNew = $(".list-product .priceTotal").text();
        $.ajax({
          url: "../php/tools/action.php",
          type: "POST",
          data: {
            id: id,
            provider: newProvider,
            total: totalNew,
            action: "update",
          },
          success: function (res) {
            if (res != "success") {
              console.log(res);
            } else {
              const importDetailArray = $(".list-product table tbody tr");
              $.each(importDetailArray, function (index, value){
                let idProduct = $(value).find(".ID_OBJECT").text();
                let quantity = $(value).find(".QUANTITY_OBJECT").text();
                let price = $(value).find(".PRICE_OBJECT").text();
                $.ajax({
                  url: "../php/tools/action.php",
                  type: "POST",
                  data: {
                    id: 'Import_Detail',
                    idProduct: idProduct,
                    quantity: quantity,
                    price: price,
                    action: "update",
                  },
                  success: function (res) {
                    if (res != "success") {
                      console.log(res);
                    } else {
                    }
                  },
                });
              });
              alert("Sửa phiếu nhập thành công");
              loadPageByAjax("Admin_Coupon");
            }
          },
        });
      break;
  }
};

const DeleteInfo = (id) => {
  var tr = $(".btnDel.clicked").closest("tr");
  var idObject = $(tr).find(".ID_OBJECT").html();
  console.log(idObject);
  $.ajax({
    url: "../php/tools/action.php",
    type: "POST",
    data: {
      id: id,
      ob: idObject,
      action: "delete",
    },
    success: function (res) {
      if (res != "success") {
        alert(res);
      } else {
        alert("Xóa thành công");
        hiddenForm();
      }
    },
  });
};

const createR_P = () => {
  let name = $(".new-name-role .textfield").val();
  let descript = $(".new-description-role .textfield").val();
  $.ajax({
    url: "../php/tools/action.php",
    type: "POST",
    data: {
      id: "Role",
      action: "create",
      name_role: name,
      des_role: descript,
    },
    success: function (res) {
      const perArray = $(
        "#create_new_role .list-permission .switch[data-content='đang hoạt động']"
      );
      var success = false;
      $.each(perArray, function (index, value) {
        console.log(value);
        let id = $(value).attr("data-id");
        let action = $(value).attr("data-action");
        $.ajax({
          url: "../php/tools/decentralization.php",
          type: "POST",
          data: {
            idRole: res,
            id: id,
            action: action,
            actionRole: "createRole",
          },
          success: function (data) {
            if (data != "success") {
              success = false;
              alert(data);
            } else {
              success = true;
            }
          },
        });
      });
      if (success) {
        alert("Thêm nhóm quyền thành công!!");
        hiddenForm();
      }
    },
  });
};

const updateR_P = () => {
  let name = $(".new-name-role .NAME_OBJECT").val();
  let description = $(".new-description-role .DESCRIPTION_OBJECT").val();
  let status = $(".new-status-role .switch").attr("data-content");
  let location = $("#update_role .tool .btnConfirm").attr("data-content");
  $.ajax({
    url: "../php/tools/action.php",
    type: "POST",
    data: {
      id: "Role",
      action: "update",
      name_role: name,
      des_role: description,
      status_role: status,
      identity: location,
    },
    success: function (res) {
      const perArrayUpdate = $(
        "#update_role .list-permission .switch[data-content='đang hoạt động']"
      );

      $.each(perArrayUpdate, function (index, value) {
        // console.log(perArrayUpdate[index]);
        let id = $(value).attr("data-id"); //id của permission
        let action = $(value).attr("data-action"); //action của permission
        console.log(id);
        $.ajax({
          url: "../php/tools/decentralization.php",
          type: "POST",
          data: {
            idRole: res,
            id: id,
            action: action,
            actionRole: "createRole",
          },
          success: function (data) {
            if (data != "success") {
              alert(data);
            } else {
            }
          },
        });
      });

      // const perArray2 = $(
      //   "#update_role .list-permission .switch[data-content='ngừng hoạt động']"
      // );
      // $.each(perArray2, function (index, value) {
      //   let id = $(value).attr("data-id"); //id của permission
      //   let action = $(value).attr("data-action"); //action của permission
      //   $.ajax({
      //     url: "../php/tools/decentralization.php",
      //     type: "POST",
      //     data: {
      //       idRole: res,
      //       id: id,
      //       action: action,
      //       actionRole: "updateRole",
      //     },
      //     success: function (data) {
      //       if (data != "success") {
      //         alert(data);
      //       } else {
      //         // console.log("success update");
      //       }
      //     },
      //   });
      // });
      // alert("Sửa nhóm quyền thành công!!");
      // hiddenForm();
    },
  });
};

const saveProduct = () => {
  var nameProduct = $(".info_products .NAME_OBJECT option:selected").text();
  var idProduct = $(".info_products .NAME_OBJECT option:selected").val();
  let priceProduct = parseFloat($(".info_products .PRICE_OBJECT").val()); // đơn giá
  let quantityProduct = parseInt($(".info_products .QUANTITY_OBJECT").val()); // số lượng
  let sumPrice = priceProduct * quantityProduct; // thành tiền
  var newRowNumber = $("table tbody tr").length + 1;
  var newProduct = true;
  const newProductArray = $(".list-product table tbody tr");
  $.each(newProductArray, function (index, value) {
    let name = $(value).find(".NAME_PRODUCT").text();
    if (name === nameProduct) {
      let quantity = parseInt($(value).find(".QUANTITY_PRODUCT").text());
      quantity += quantityProduct;
      let sum = parseInt($(value).find(".SUM_PRICE").text());
      sum += sumPrice;
      $(value).find(".QUANTITY_PRODUCT").text(quantity);
      $(value).find(".SUM_PRICE").text(sum);
      newProduct = false;
    }
  });
  if (newProduct) {
    $("table tbody").append(
      "<tr><td>" +
        newRowNumber +
        "</td><td class='NAME_PRODUCT' data-content=" +
        idProduct +
        " >" +
        nameProduct +
        "</td><td class='QUANTITY_PRODUCT'>" +
        quantityProduct +
        "</td><td class='UNIT_PRICE_PRODUCT'>" +
        priceProduct +
        "</td><td class='SUM_PRICE'>" +
        sumPrice +
        "</td></tr>"
    );
  }
  $(".info_products .NAME_OBJECT").val("");
  $(".info_products .PRICE_OBJECT").val("");
  $(".info_products .QUANTITY_OBJECT").val("");
  let oldPriceTotal = parseFloat($("table tfoot .total .priceTotal").text());
  let newPriceTotal = (oldPriceTotal + sumPrice).toFixed(0); // tổng tiền
  $("table tfoot .total .priceTotal").text(newPriceTotal);
};

const undoProduct = () => {
  $("table tbody tr:last-child").remove();
  $(".info_products .NAME_OBJECT").val("");
  $(".info_products .PRICE_OBJECT").val("");
  $(".info_products .QUANTITY_OBJECT").val("");
};
