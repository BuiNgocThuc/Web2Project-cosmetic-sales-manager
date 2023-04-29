const sortProduct = (currentPage, orderSort) => {
  const sortCategoryInput = $(".category-item__checkbox").filter(function () {
    return $(this).is(":checked");
  });
  let sortCategoryArray = [];
  $.each(sortCategoryInput, function (index, value) {
    sortCategoryArray.push($(value).val());
  });
  const sortBrandInput = $(".brand-item__checkbox").filter(function () {
    return $(this).is(":checked");
  });
  let sortBrandArray = [];
  $.each(sortBrandInput, function (index, value) {
    sortBrandArray.push($(value).val());
  });
  let priceValue = parseInt($(".priceSegment input").val());
  let character = $(".Search_Navbar").val();
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
      orderSort: orderSort,
    },
    success: function (data) {
      $(".home-product").html(data);
    },
  });
};

$(document).on("input", ".category-item__checkbox", function (e) {
  let orderSort = $("#sortPrices").val();
  sortProduct(1, orderSort);
});

$(document).on("input", ".brand-item__checkbox", function (e) {
  let orderSort = $("#sortPrices").val();
  sortProduct(1, orderSort);
});

$(document).on("input", ".priceSegment input", function (e) {
  let orderSort = $("#sortPrices").val();
  sortProduct(1, orderSort);
});
$(document).on("click", ".search__icon", function (e) {
  let orderSort = $("#sortPrices").val();
  sortProduct(1, orderSort);
});

$(document).on("change", "#sortPrices", function (e) {
  let orderSort = $(this).val();
  sortProduct(1, orderSort);
});

//sort product by title
$(document).on("change", ".sort-function", function () {
  let value = $(".order-sort").val();
  let objectSort = $(".object-sort").val();
  let rows = $("tbody tr").get();

  rows.sort(function (a, b) {
    let nameA = $(a)
      .children()
      .filter(function () {
        return $(this).attr("class") == objectSort;
      })
      .eq(0)
      .text()
      .toUpperCase();
    let nameB = $(b)
      .children()
      .filter(function () {
        return $(this).attr("class") == objectSort;
      })
      .eq(0)
      .text()
      .toUpperCase();
    if (value === "increase") {
      if (nameA < nameB) return -1;
      if (nameA > nameB) return 1;
      return 0;
    } else if (value === "decrease") {
      if (nameA < nameB) return 1;
      if (nameA > nameB) return -1;
      return 0;
    } else {
      return 0;
    }
  });
  $.each(rows, function (index, row) {
    $("table tbody").append(row);
  });
});

// sort top products in statistic function
$(document).on("input", "#top__products", function () {
  // let topProducts = parseInt($(this).val());
  // console.log(topProducts);
  // let rows = $("tbody tr").toArray();
  // rows.sort(function (a, b) {
  //   let productA = parseInt($(a).children("td.QUANTITY__SOLD").text());
  //   let productB = parseInt($(b).children("td.QUANTITY__SOLD").text());
  //   return productB - productA;
  // });
  // $("tbody tr").hide(); // Ẩn hết các hàng trong tbody
  // for (let i = 0; i < topProducts; i++) {
  //   $(rows[i]).show(); // Chỉ hiện các hàng trong top
  //   $("table tbody").append(rows[i]);
  // }
  statistic();
});



const sortCategory = () => {
  let catProduct = $(".CATEGORY_OBJECT").val()?.toLowerCase();
  console.log(catProduct);
  if (catProduct) {
    $("table tbody tr")
      .filter(function () {
        return $(this).find("td:eq(4)").text().toLowerCase() !== catProduct;
      })
      .hide();
    $("table tbody tr")
      .filter(function () {
        return $(this).find("td:eq(4)").text().toLowerCase() === catProduct;
      })
      .show();
  } else {
    $("table tbody tr").show();
  }
};



//sort products by date
const statistic = () => {
  let catProduct = $(".CATEGORY_OBJECT").val();
  let startDate = $(".START_DATE").val();
  let endDate = $(".END_DATE").val();
  let topProduct = $("#top__products").val();
  console.log(startDate + " " + endDate + " " + catProduct + " " + topProduct);
  $.ajax({
    url: "tools/statistic.php",
    method: "POST",
    data: {
      startDate: startDate,
      endDate: endDate,
      catProduct: catProduct,
      topProduct: topProduct,
    },
    success: function (data) {
      $("tbody").html(data);
      console.log(data);
    },
  });
};
