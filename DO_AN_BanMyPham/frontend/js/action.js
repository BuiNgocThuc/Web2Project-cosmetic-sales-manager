const checkInputValid = (form) => {
  const inputArray = $(form).find(".textfield");
  let isValid = false;
  $.each(inputArray, function (index, value) {
    console.log($(value).val());
    if ($(value).val() != "") {
      isValid = true;
    } else {
      return false;
    }
  });
  return isValid;
};

const AddInfo = async (id) => {
  let createForm = $("#create-form");
  console.log(checkInputValid(createForm));
  if (checkInputValid(createForm)) {
    switch (id) {
      case "Product":
        let nameProd = document.querySelector("#create-form .new-name").value;
        let brandProd = document.querySelector("#create-form .new-brand").value;
        let categoryProd = document.querySelector(
          "#create-form .new-category"
        ).value;
        let priceProd = 0;
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
              var formData = new FormData();
              var fileData = $("#create-form .new-img").prop("files")[0];
              formData.append("file", fileData);
              $.ajax({
                url: "tools/upload.php",
                type: "post",
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                  alert(response);
                },
              });
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
        let userID = document.querySelector("#create-form .new-userId").value;
        let type = document.querySelector("#create-form .new-type").value;
        let phone = document.querySelector("#create-form .new-phone").value;
        let address = document.querySelector("#create-form .new-address").value;
        let email = document.querySelector("#create-form .new-email").value;
        let roleID = document.querySelector("#create-form .new-role").value;
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
        let nameTypeUser = document.querySelector(
          "#create-form .new-name"
        ).value;
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
        if (dateEndDis < dateStartDis) {
          alert("Ngày Kết thúc phải lớn hơn ngày bắt đầu");
        } else {
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
        }
        break;
      case "Import_Receipt":
        let idProvider = $(".info_provider .PROVIDER_PRODUCT").val();
        let totalPrice = parseFloat(
          $(".list-product table tfoot .priceTotal").text()
        );
        if (totalPrice == 0) {
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
  } else {
    alert("Vui lòng điền đầy đủ thông tin");
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
  if (checkInputValid("#fix-form")) {
    switch (id) {
      case "Product":
        let nameProduct = $("#fix-form .NAME_OBJECT").val();
        let brandProduct = $("#fix-form .BRAND_OBJECT option")
          .filter(function () {
            return (
              $(this).val().toLowerCase() ==
              $(this).closest(".BRAND_OBJECT").val().toLowerCase()
            );
          })
          .attr("data-content");
        let categoryProduct = $("#fix-form .CATEGORY_OBJECT option")
          .filter(function () {
            return (
              $(this).val().toLowerCase() ==
              $(this).closest(".CATEGORY_OBJECT").val().toLowerCase()
            );
          })
          .attr("data-content");
        let priceProduct = document.querySelector(
          "#fix-form .PRICE_OBJECT"
        ).value;
        let originalProduct = document.querySelector(
          "#fix-form .ORIGINAL_OBJECT"
        ).value;
        let imgProduct = document.querySelector("#fix-form .IMG_OBJECT")
          .files[0].name;
        let statusProduct = $("#fix-form .switch").attr("data-content");
        let locationProduct = $("#fix-form .btnConfirm").attr("data-content");
        console.log(brandProduct + "" + categoryProduct);
        $.ajax({
          url: "../php/tools/action.php",
          type: "POST",
          data: {
            id: id,
            name: nameProduct,
            brand: brandProduct,
            category: categoryProduct,
            price: priceProduct,
            original: originalProduct,
            img: imgProduct,
            status: statusProduct,
            identity: locationProduct,
            action: "update",
          },
          success: function (res) {
            if (res != "success") {
              console.log(res);
            } else {
              var formData = new FormData();
              var fileData = $("#fix-form .IMG_OBJECT").prop("files")[0];
              formData.append("file", fileData);
              $.ajax({
                url: "tools/upload.php",
                type: "post",
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                  alert(response);
                },
              });
              alert("Sửa sản phẩm thành công");
              hiddenForm();
              loadPageByAjax("Admin_Product");
            }
          },
        });
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
        let nameTypeUser = document.querySelector(
          "#fix-form .NAME_OBJECT"
        ).value;
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
        let dateStartDis = document.querySelector(
          "#fix-form .START_DATE"
        ).value;
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
      case "Import_Receipt":
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
              $.each(importDetailArray, function (index, value) {
                let idProduct = $(value).find(".ID_OBJECT").text();
                let quantity = $(value).find(".QUANTITY_OBJECT").text();
                let price = $(value).find(".PRICE_OBJECT").text();
                $.ajax({
                  url: "../php/tools/action.php",
                  type: "POST",
                  data: {
                    id: "Import_Detail",
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
  } else {
    alert("Vui lòng điền đầy đủ thông tin");
  }
};

const DeleteInfo = (id) => {
  var tr = $(".btnDel.clicked").closest("tr");
  var idObject = $(tr).find(".ID_OBJECT").html();
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
        console.log(res);
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
      var success = true;
      $.each(perArray, function (index, value) {
        console.log(value);
        let id = $(value).attr("data-id");
        let action = $(value).attr("data-action");
        $.ajax({
          url: "../php/tools/action.php",
          type: "POST",
          data: {
            idRole: res,
            idPer: id,
            id: "Role_Permission",
            actionPer: action,
            action: "create",
          },
          success: function (data) {
            if (data != "success") {
              success = false;
            } else {
              success = true;
            }
          },
        });
      });
      if (success) {
        alert("Thêm nhóm quyền thành công!!");
        loadPageByAjax("Admin_Decentralization");
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
      let successfully = true;
      $.each(perArrayUpdate, function (index, value) {
        let id = $(value).attr("data-id"); //id của permission
        let action = $(value).attr("data-action"); //action của permission
        console.log(id);
        $.ajax({
          url: "../php/tools/action.php",
          type: "POST",
          data: {
            idRole: res,
            idPer: id,
            actionPer: action,
            id: "Role_Permission",
            action: "update",
          },
          success: function (data) {
            if (data != "success") {
              alert(data);
              successfully = false;
            } else {
              successfully = true;
            }
          },
        });
      });
      if (successfully) {
        alert("Sửa nhóm quyền thành công!!");
        loadPageByAjax("Admin_Decentralization");
      }
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

const SearchInfo = (id) => {
  $("tbody tr")
    .filter(function () {
      return $(this).hasClass("show");
    })
    .removeClass("show");
  $("tbody tr").show();
  switch (id) {
    case "Product":
      let idProduct = $(".ID_PRODUCT_SEARCH").val()?.toLowerCase();
      let nameProduct = $(".NAME_PRODUCT_SEARCH").val()?.toLowerCase();
      let statusProduct = $(".STATUS_PRODUCT_SEARCH")
        .attr("data-content")
        ?.toLowerCase();
      let brandProduct = $(".BRAND_PRODUCT_SEARCH").val()?.toLowerCase();
      let categoryProduct = $(".CATEGORY_PRODUCT_SEARCH").val()?.toLowerCase();

      $("tbody tr")
        .filter(function () {
          let idMatch =
            !idProduct ||
            $(this).find("td:eq(1)").text().toLowerCase() === idProduct;
          let nameMatch =
            !nameProduct ||
            removeDiacritics($(this).find("td:eq(2)").text())
              .toLowerCase()
              .includes(removeDiacritics(nameProduct).toLowerCase());
          let statusMatch =
            !statusProduct ||
            $(this).find("td:eq(9)").text().toLowerCase() === statusProduct;
          let brandMatch =
            !brandProduct ||
            $(this).find("td:eq(3)").text().toLowerCase() === brandProduct;
          let categoryMatch =
            !categoryProduct ||
            $(this).find("td:eq(4)").text().toLowerCase() === categoryProduct;

          return (
            idMatch && nameMatch && statusMatch && brandMatch && categoryMatch
          );
        })
        .addClass("show");
      $("tbody tr")
        .filter(function () {
          return !$(this).hasClass("show");
        })
        .hide();
      break;
    case "Brand":
      let idBrand = $(".ID_BRAND_SEARCH").val()?.toLowerCase();
      let nameBrand = $(".NAME_BRAND_SEARCH").val()?.toLowerCase();
      let statusBrand = $(".STATUS_BRAND_SEARCH")
        .attr("data-content")
        ?.toLowerCase();

      $("tbody tr")
        .filter(function () {
          let idMatch =
            !idBrand ||
            $(this).find("td:eq(1)").text().toLowerCase() === idBrand;
          let nameMatch =
            !nameBrand ||
            removeDiacritics($(this).find("td:eq(2)").text())
              .toLowerCase()
              .includes(removeDiacritics(nameBrand).toLowerCase());
          let statusMatch =
            !statusBrand ||
            $(this).find("td:eq(3)").text().toLowerCase() === statusBrand;
          return idMatch && nameMatch && statusMatch;
        })
        .show()
        .addClass("show");

      $("tbody tr")
        .filter(function () {
          return !$(this).hasClass("show");
        })
        .hide();
      break;

    case "Category":
      let idCategory = $(".ID_CATEGORY_SEARCH").val()?.toLowerCase();
      let nameCategory = $(".NAME_CATEGORY_SEARCH").val()?.toLowerCase();
      let statusCategory = $(".STATUS_CATEGORY_SEARCH")
        .attr("data-content")
        ?.toLowerCase();
      $("tbody tr")
        .filter(function () {
          let idMatch =
            !idCategory ||
            $(this).find("td:eq(1)").text().toLowerCase() === idCategory;
          let nameMatch =
            !nameCategory ||
            removeDiacritics($(this).find("td:eq(2)").text())
              .toLowerCase()
              .includes(removeDiacritics(nameCategory).toLowerCase());
          let statusMatch =
            !statusCategory ||
            $(this).find("td:eq(3)").text().toLowerCase() === statusCategory;

          return idMatch && nameMatch && statusMatch;
        })
        .addClass("show")
        .show();
      $("tbody tr")
        .filter(function () {
          return !$(this).hasClass("show");
        })
        .hide();
      break;

    case "Provider":
      let idProvider = $(".ID_PROVIDER_SEARCH").val()?.toLowerCase();
      let nameProvider = $(".NAME_PROVIDER_SEARCH").val()?.toLowerCase();
      let statusProvider = $(".STATUS_PROVIDER_SEARCH")
        .attr("data-content")
        ?.toLowerCase();
      $("tbody tr")
        .filter(function () {
          let idMatch =
            !idProvider ||
            $(this).find("td:eq(1)").text().toLowerCase() === idProvider;
          let nameMatch =
            !nameProvider ||
            removeDiacritics($(this).find("td:eq(2)").text())
              .toLowerCase()
              .includes(removeDiacritics(nameProvider).toLowerCase());
          let statusMatch =
            !statusProvider ||
            $(this).find("td:eq(6)").text().toLowerCase() === statusProvider;

          return idMatch && nameMatch && statusMatch;
        })
        .addClass("show")
        .show();
      $("tbody tr")
        .filter(function () {
          return !$(this).hasClass("show");
        })
        .hide();
      break;

    case "User":
      let idUser = $(".ID_USER_SEARCH").val()?.toLowerCase();
      let nameUser = $(".NAME_USER_SEARCH").val()?.toLowerCase();
      let statusUser = $(".STATUS_USER_SEARCH")
        .attr("data-content")
        .toLowerCase();
      $("tbody tr")
        .filter(function () {
          let idMatch =
            !idUser || $(this).find("td:eq(1)").text().toLowerCase() === idUser;
          let nameMatch =
            !nameUser ||
            removeDiacritics($(this).find("td:eq(3)").text())
              .toLowerCase()
              .includes(removeDiacritics(nameUser).toLowerCase());
          let statusMatch =
            !statusUser ||
            $(this).find("td:eq(7)").text().toLowerCase() === statusUser;

          return idMatch && nameMatch && statusMatch;
        })
        .addClass("show")
        .show();
      $("tbody tr")
        .filter(function () {
          return !$(this).hasClass("show");
        })
        .hide();
      break;

    case "Type_User":
      let idTypeUser = $(".ID_TYPE_USER_SEARCH").val()?.toLowerCase();
      let nameTypeUser = $(".NAME_TYPE_USER_SEARCH").val()?.toLowerCase();
      let statusTypeUser = $(".STATUS_TYPE_USER_SEARCH")
        .attr("data-content")
        .toLowerCase();
      $("tbody tr")
        .filter(function () {
          let idMatch =
            !idTypeUser ||
            $(this).find("td:eq(1)").text().toLowerCase() === idTypeUser;
          let nameMatch =
            !nameTypeUser ||
            removeDiacritics($(this).find("td:eq(2)").text())
              .toLowerCase()
              .includes(removeDiacritics(nameTypeUser).toLowerCase());
          let statusMatch =
            !statusTypeUser ||
            $(this).find("td:eq(3)").text().toLowerCase() === statusTypeUser;

          return idMatch && nameMatch && statusMatch;
        })
        .addClass("show")
        .show();
      $("tbody tr")
        .filter(function () {
          return !$(this).hasClass("show");
        })
        .hide();
      break;

    case "Role":
      let idRole = $(".ID_ROLE_SEARCH").val()?.toLowerCase();
      let nameRole = $(".NAME_ROLE_SEARCH").val()?.toLowerCase();
      let statusRole = $(".STATUS_ROLE_SEARCH")
        .attr("data-content")
        .toLowerCase();
      $("tbody tr")
        .filter(function () {
          let idMatch =
            !idRole || $(this).find("td:eq(1)").text().toLowerCase() === idRole;
          let nameMatch =
            !nameRole ||
            removeDiacritics($(this).find("td:eq(2)").text())
              .toLowerCase()
              .includes(removeDiacritics(nameRole).toLowerCase());
          let statusMatch =
            !statusRole ||
            $(this).find("td:eq(4)").text().toLowerCase() === statusRole;

          return idMatch && nameMatch && statusMatch;
        })
        .addClass("show")
        .show();
      $("tbody tr")
        .filter(function () {
          return !$(this).hasClass("show");
        })
        .hide();
      break;

    case "Permission":
      let idPermission = $(".ID_PERMISSION_SEARCH").val()?.toLowerCase();
      let namePermission = $(".NAME_PERMISSION_SEARCH").val()?.toLowerCase();
      $("tbody tr")
        .filter(function () {
          let idMatch =
            !idPermission ||
            $(this).find("td:eq(1)").text().toLowerCase() === idPermission;
          let nameMatch =
            !namePermission ||
            removeDiacritics($(this).find("td:eq(2)").text())
              .toLowerCase()
              .includes(removeDiacritics(namePermission).toLowerCase());
          return idMatch && nameMatch;
        })
        .addClass("show")
        .show();
      $("tbody tr")
        .filter(function () {
          return !$(this).hasClass("show");
        })
        .hide();
      break;

    case "Discount":
      let idDiscount = $(".ID_DISCOUNT_SEARCH").val()?.toLowerCase();
      let nameDiscount = $(".NAME_DISCOUNT_SEARCH").val()?.toLowerCase();
      let startDateDiscount = $(".START_DATE_DISCOUNT_SEARCH")
        .val()
        ?.toLowerCase();
      let endDateDiscount = $(".END_DATE_DISCOUNT_SEARCH").val()?.toLowerCase();
      let statusDiscount = $(".STATUS_DISCOUNT_SEARCH")
        .attr("data-content")
        .toLowerCase();
      $("tbody tr")
        .filter(function () {
          let idMatch =
            !idDiscount ||
            $(this).find("td:eq(1)").text().toLowerCase() === idDiscount;
          let nameMatch =
            !nameDiscount ||
            removeDiacritics($(this).find("td:eq(2)").text())
              .toLowerCase()
              .includes(removeDiacritics(nameDiscount).toLowerCase());
          let startDateMatch =
            !startDateDiscount ||
            $(this).find("td:eq(5)").text().toLowerCase() >= startDateDiscount;
          let endDateMatch =
            !endDateDiscount ||
            $(this).find("td:eq(6)").text().toLowerCase() <= endDateDiscount;
          let statusMatch =
            !statusDiscount ||
            $(this).find("td:eq(7)").text().toLowerCase() === statusDiscount;
          return (
            idMatch &&
            nameMatch &&
            startDateMatch &&
            endDateMatch &&
            statusMatch
          );
        })
        .addClass("show")
        .show();
      $("tbody tr")
        .filter(function () {
          return !$(this).hasClass("show");
        })
        .hide();
      break;

      case 'Import_Receipt':
        let idImportReceipt = $('.ID_IMPORT_RECEIPT_SEARCH').val()?.toLowerCase();
        let nameProviderImport = $('.NAME_PROVIDER_IMPORT_SEARCH').val()?.toLowerCase();
        let importDate = $('.IMPORT_DATE_SEARCH').val()?.toLowerCase();
        console.log(idImportReceipt, nameProviderImport, importDate)
        $("tbody tr")
          .filter(function () {
            let idMatch =
              !idImportReceipt ||
              $(this).find("td:eq(1)").text().toLowerCase() === idImportReceipt;
            let nameMatch =
              !nameProviderImport ||
              removeDiacritics($(this).find("td:eq(2)").text())
                .toLowerCase()
                .includes(removeDiacritics(nameProviderImport).toLowerCase());
            let importDateMatch =
              !importDate ||
              $(this).find("td:eq(4)").text().toLowerCase() >= importDate;
            return idMatch && nameMatch && importDateMatch;
          })
          .addClass("show")
          .show();
        $("tbody tr")
          .filter(function () {
            return !$(this).hasClass("show");
          })
          .hide();
      break;  

      case 'Export_Receipt':
        let idExportReceipt = $('.ID_EXPORT_RECEIPT_SEARCH').val()?.toLowerCase();
        let nameCustomerExport = $('.NAME_CUSTOMER_EXPORT_SEARCH').val()?.toLowerCase();
        let exportStartDate = $('.EXPORT_START_DATE_SEARCH').val()?.toLowerCase();
        let exportEndDate = $('.EXPORT_END_DATE_SEARCH').val()?.toLowerCase();
        let statusExport = $('.STATUS_EXPORT_SEARCH').val()?.toLowerCase();
          console.log(idExportReceipt, nameCustomerExport, exportStartDate, exportEndDate, statusExport);
        $("tbody tr")
          .filter(function () {
            let idMatch =
              !idExportReceipt ||
              $(this).find("td:eq(1)").text().toLowerCase() === idExportReceipt;
            let nameMatch =
              !nameCustomerExport ||
              removeDiacritics($(this).find("td:eq(3)").text())
                .toLowerCase()
                .includes(removeDiacritics(nameCustomerExport).toLowerCase());
            let exportStartDateMatch =
              !exportStartDate ||
              $(this).find("td:eq(6)").text().toLowerCase() >= exportStartDate;
            let exportEndDateMatch =
              !exportEndDate ||
              $(this).find("td:eq(6)").text().toLowerCase() <= exportEndDate;
            let statusMatch =
              !statusExport ||
              $(this).find("td:eq(10)").text().toLowerCase() === statusExport;
            return idMatch && nameMatch && exportStartDateMatch && exportEndDateMatch && statusMatch;
          })
          .addClass("show")
          .show();
        $("tbody tr")
          .filter(function () {
            return !$(this).hasClass("show");
          })
          .hide();
      break;
  }
};
$(document).on("click", ".cart-icon", function (e) {
  e.preventDefault();
  $.ajax({
    url: "content.php",
    type: "POST",
    data: {
      page: cart,
    },
    success: function (data) {
      $(".cart-content").html(data);
      $(".cart-overlay").fadeIn();
    },
  });
});

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $(input).siblings("#image-preview").attr("src", e.target.result);
      $(input).siblings("#image-preview").show();
    };
    reader.readAsDataURL(input.files[0]);
  }
}

$(document).on("change", "#fix-form #file-input", function () {
  readURL(this);
  // Thay đổi thuộc tính "accept" của thẻ "input"
  $(this).siblings("label").hide();
});

$(document).on("change", "#create-form #file-input", function () {
  readURL(this);
  // Thay đổi thuộc tính "accept" của thẻ "input"
  $(this).siblings("label").hide();
});

//confirm the orders
$(document).on("click", ".btnConfirmExport", function () {
  let id = $(this).attr("data-id");
  $.ajax({
    url: "tools/verifyReceipt.php",
    type: "POST",
    data: {
      idReceipt: id,
    },
    success: function (data) {
      if (data == "success") {
        loadPageNotify("Admin_Notify");
      } else {
        console.log("error: " + data);
      }
    },
  });
});

//update info customer
$(document).on("click", ".btnUpdateCustomer", function () {
  let nameCus = $(".name__customer").val();
  let phoneCus = $(".phone__customer").val();
  let addressCus = $(".address__customer").val();
  let emailCus = $(".email__customer").val();
  if(!checkInputValid(nameCus, phoneCus, addressCus, emailCus)) return;
  console.log(nameCus, phoneCus, addressCus, emailCus);
  $.ajax({
    url: "tools/action.php",
    type: "POST",
    data: {
      action: "update",
      id: "Customer",
      nameCus: nameCus,
      phoneCus: phoneCus,
      addressCus: addressCus,
      emailCus: emailCus,
    },
    success: function (data) {
      if (data == "success") {
        alert("Cập nhật thông tin thành công");
        loadPageUser("Account_Info");
        loadHeader("Header");
      } else {
        console.log("error: " + data);
      }
    },
  });
});

//update info employee
$(document).on("click", ".btnUpdateEmployee", function () {
  let nameEmp = $(".name__employee").val();
  let phoneEmp = $(".phone__employee").val();
  let addressEmp = $(".address__employee").val();
  let emailEmp = $(".email__employee").val();
  if(!checkInputValid(nameEmp, phoneEmp, addressEmp, emailEmp)) return;
  $.ajax({
    url: "tools/action.php",
    type: "POST",
    data: {
      action: "update",
      id: "Employee",
      nameEmp: nameEmp,
      phoneEmp: phoneEmp,
      addressEmp: addressEmp,
      emailEmp: emailEmp,
    },
    success: function (data) {
      if (data == "success") {
        alert("Cập nhật thông tin thành công");
        loadPageByAjax("Admin_Account");
        loadSideMenu("Admin_Sidebar");
      } else {
        console.log("error: " + data);
      }
    },
  });
});

// bỏ qua dấu tiếng việt
const removeDiacritics = function (str) {
  return str.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
};

//Cancel the Order
$(document).on("click", "#btnCancelOrder", function () {
  let idExport = $(this).attr("data-id");
  let success = true;
  $.ajax({
    url: "tools/action.php",
    type: "POST",
    data: {
      action: "update",
      id: "Export_Cancel",
      idExport: idExport,
    },
    success: function (res) {
      const productsArray = $("ul .order-history__container__item");
      $.each(productsArray, function (index, value) {
        let idProduct = $(".order-history__container__item").attr("data-id");
        let quantity = parseInt($(".order-history__product__item--quantity").attr("data-quantity"));
        console.log(idProduct, quantity);
        $.ajax({
          url: "tools/action.php",
          type: "POST",
          data: {
            action: "update",
            id: "Product_Cancel",
            idProduct: idProduct,
            quantity: quantity,
          },
          success: function (data) {
            if (data == "success") {
              success = true;
            } else {
              success = false;
              console.log("error: " + data)
            }
          },
        });
      });
      if (success == true) {
        alert("Hủy đơn hàng thành công");
        UserAccountTool("Order_History");
      } else {
        console.log("error: " + data);
      }
    },
  });
});


$(document).on("click", ".input-number-increment", function () {
  var inputField = $(".input-number");
  var currentValue = parseInt(inputField.val());

  // kiểm tra giá trị tối đa
  if (currentValue < parseInt(inputField.attr("max"))) {
    inputField.val(currentValue + 1);
  }
});

$(document).on("click", ".input-number-decrement", function () {
  var inputField = $(".input-number");
  var currentValue = parseInt(inputField.val());

  // kiểm tra giá trị tối đa
  if (currentValue > parseInt(inputField.attr("min"))) {
    inputField.val(currentValue - 1);
  }
});
