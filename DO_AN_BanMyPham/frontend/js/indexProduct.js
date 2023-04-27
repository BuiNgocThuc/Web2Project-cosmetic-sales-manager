// AJAX

// List product
// function loadProduct(valuePrice, currentPage, brandid, category_id) {
//   $.ajax({
//     url: "public/products/loadProduct_pagination.php",
//     method: "GET",
//     data: {
//       valuePrice: valuePrice,
//       page_active: currentPage,
//       category_id: category_id,
//       brandid: brandid,
//     },
//     success: function (data) {
//       $("#home__product").html(data);
//     },
//   });
// }

// Select Category
// $(document).on("click", "#list__category .category-item__link", function (e) {
//   var id_category = $(this).attr("categoryid");
//   var cid = $(this).attr("cid");
//   var page_active = $(".pagination-item__link--active").attr("pageid");
//   var valuePrice = $("#sortPrices").val();
//   console.log(cid);
//   //loadCategoryActive(id_category);
//   loadProduct(valuePrice, page_active, cid);
// });
// Load Category Active
// function loadCategoryActive(id_category, page) {
//   $.ajax({
//     url: "public/products/category.php",
//     method: "GET",
//     data: {
//       category: 1,
//       id_category: id_category,
//       page: page,
//     },
//     success: function (data) {
//       $("#list__category").html(data);
//     },
//   });
// }

//Select Brand
// $(document).on("click", "#list__brand #category-item__checkbox", function (e) {
//   var id_brand = $(this).find("category-item__link").attr("brandid");
//   var bid = $(this).val();
//   var page_active = $(".pagination-item__link--active").attr("pageid");
//   var valuePrice = $("#sortPrices").val();

//   //loadBrandActive(id_brand);
//   loadProduct(valuePrice, page_active, bid);
// });
// Load Brand Active
// function loadBrandActive(id_brand) {
//   $.ajax({
//     url: "public/products/brand.php",
//     method: "GET",
//     data: {
//       brand: 1,
//       id_brand: id_brand,
//     },
//     success: function (data) {
//       $("#list__brand").html(data);
//     },
//   });
// }

// // Pagination
// function loadPage(page_num) {
//   if (page_num) {
//     var page_no = page_num;
//   } else {
//     page_no = 1;
//   }
//   $.ajax({
//     url: "public/products/ajax-pagination.php",
//     type: "GET",
//     data: {
//       page_no: page_no,
//     },
//     success: function (data) {
//       $("#number-page").html(data);
//     },
//   });
// }
// loadPage();
// // Click vao nut pagination
// $(document).on("click", ".pagination-item", function () {
//   var page = $(this).attr("pageid");
//   var valuePrice = $("#sortPrices").val();
//   loadPage(page);
//   loadProduct(valuePrice, page);
// });
// // Price
// $(document).on("change", "#sortPrices", function (e) {
//   var valuePrice = $(this).val();
//   var page_active = $(".pagination-item__link--active").attr("pageid");
//   loadProduct(valuePrice, page_active);
// });

// Payment
// $(document).on("click", "#btnPayment", function () {

//     $.ajax({
//         url: 'public/payment/Pay_fetch_data.php',
//         method: 'GET',
//         data: {
//             producted: 1
//         },
//         success: function (data) {
//             $('#product__pay').html(data);
//         }
//     })
//

// Button continue buy
// $(document).on('click', '#infoClient__btn--buy', function (e) {
//     var btn_continue = $(this).val();
//     $.ajax({
//         url: 'public/products/indexListProducts.php',
//         method: 'GET',
//         data: {
//             btn_continue: btn_continue
//         },
//         success: function (data) {
//             window.location = 'public/products/indexListProducts.php';
//         }
//     })
// })

// Order history
// $(document).on("click", ".btn--pay", function (e) {
//   var order_no = $(this).val();
//   showTablePayment(order_no);
//   $.ajax({
//     url: "public/payment/Order-History.php",
//     method: "GET",
//     success: function () {
//       window.location = "public/payment/Order-History.php";
//     },
//   });
// });

// show table payment
// function showTablePayment(order_no) {
//   $.ajax({
//     url: "public/payment/Order-History.php",
//     method: "GET",
//     data: {
//       order_no: order_no,
//     },
//     success: function (data) {
//       $(".show--order").html(data);
//     },
//   });
// }

//
// $(document).on("click", ".btn-danger", function (e) {
//   var btnDanger = $(this).val();
//   $.ajax({
//     url: "public/payment/Order-History.php",
//     method: "GET",
//     data: {
//       btn_danger: btnDanger,
//     },
//     success: function (data) {
//       alert(123);
//     },
//   });
// });

$(document).on("input", ".tooltips input", function (e) {
  let val = $(this).val();
  let temp = "";
  switch (val) {
    case "0":
      temp += "ALL";
      break;
    case "1":
      temp += "0VNĐ - 400.000VNĐ";
      break;
    case "2":
      temp += "400.000VNĐ - 700.000VNĐ";
      break;
    case "3":
      temp += "700.000VNĐ - 1.000.000VNĐ";
      break;
  }
  $(".tooltiptext").html(temp);
});

// $(document).on("click", ".pagination-item", function (e) {
//   $(".pagination-item__number").filter(function() {
//     return $(this).hasClass("clicked");
//   }).removeClass("clicked");
//   $(this).find(".pagination-item__number").addClass("clicked");
// });


