// Load Page Admin
$(document).ready(() => {
  loadPageByAjax("Admin_Home");
});

const loadPageByAjax = (pageTarget) => {
  $.ajax({
    url: "content.php",
    type: "POST",
    data: { page: pageTarget },
    dataType: "html",
    success: function (data) {
      if (pageTarget == "Admin_Brand") console.log("ýse");
      $("#content").html(data);
      $(".current-page").html($(data).attr("data-content"));
    },
  });
};

const loadPageUser = (pageTarget) => {
  $.ajax({
    url: "../php/content.php",
    type: "POST",
    data: { page: pageTarget },
    dataType: "html",
    success: function (data) {
      $(".content").empty();
      $(".content").html(data);
      abc();
    },
  });
};

const Tools = (formTarget, content) => {
  $.ajax({
    url: "../php/content.php",
    type: "POST",
    data: { page: formTarget },
    dataType: "html",
    success: function (data) {
      console.log(content);
      data = data.replace(
        '<div class="title"></div>',
        '<div class="title">' + content + "</div>"
      );
      console.log(data);
    },
  });
};

$(document).on("click", ".btnCreate.enable", function (e) {
  $(".new-form").addClass("active");
  $(".overlay").css("display", "block");
  $(".new-form #create-form").show();
  $("#create_new_role").css("display", "block");
});

$(document).on("click", ".btnFix.enable", function (e) {
  $(".new-form").addClass("active");
  $(".overlay").css("display", "block");
  $(".new-form #fix-form").show();

  //query id object need update
  var tr = $(this).closest("tr");
  var idObject = $(tr).find(".ID_OBJECT");
  let id = $(idObject).html();
  $("#fix-form .btnConfirm").attr("data-content", id);
  var tempVar = $(idObject).next();
  while ($(tempVar).attr("class") != "STATUS_OBJECT") {
    let className = $(tempVar).attr("class");
    let updateOb = $("#fix-form")
      .find(".textfield")
      .filter(function () {
        return $(this).hasClass(className);
      });
    updateOb.val($(tempVar).html());
    tempVar = $(tempVar).next();
  }
});

$(document).on("click", ".btnUpdateRole.enable", function (e) {
  $("#update_role").css("display", "block");
  var tr = $(this).closest("tr");
  var idObject = $(tr).find(".ID_OBJECT");
  let idRole = $(idObject).html();
  $("#update_role .btnConfirm").attr("data-content", idRole);
  var tempVar = $(idObject).next();
  //fill info to input form
  while ($(tempVar).attr("class") != "STATUS_OBJECT") {
    let className = $(tempVar).attr("class");
    let updateRole = $("#update_role")
      .find(".textfield")
      .filter(function () {
        return $(this).hasClass(className);
      });
    updateRole.val($(tempVar).html());
    tempVar = $(tempVar).next();
  }
  console.log(idRole);

  // fill info to table permission
  $.ajax({
    url: "../php/tools/receiveData.php",
    type: "POST",
    data: { idRole: idRole },
    success: function (data) {
      let dataJson = JSON.parse(data);
      $.each($("#update_role .list-permission tr"), function (index, value) {
        let idPermission = $(value).find(".ID_OBJECT").text();
        $.each(dataJson, function (index, valueData) {
          if (valueData.PERMISSION_ID == idPermission) {
            console.log(valueData);
            switch (valueData.ACTION) {
              case "Create":
                $(value)
                  .find(".create-action")
                  .attr("data-content", "đang hoạt động");
                $(value).find(".create-action").attr("checked", "checked");
                break;
              case "Update":
                $(value)
                  .find(".update-action")
                  .attr("data-content", "đang hoạt động");
                $(value).find(".update-action").attr("checked", "checked");
                break;
              case "Delete":
                $(value)
                  .find(".delete-action")
                  .attr("data-content", "đang hoạt động");
                $(value).find(".delete-action").attr("checked", "checked");
                break;
              case "View":
                $(value)
                  .find(".access-action")
                  .attr("data-content", "đang hoạt động");
                $(value).find(".access-action").attr("checked", "checked");
                break;
              case "Control":
                $(value)
                  .find(".control-action")
                  .attr("data-content", "đang hoạt động");
                $(value).find(".control-action").attr("checked", "checked");
                break;
            }
          }
        });
      });
    },
  });
});

$(document).on("click", ".btnFixUser.enable", function (e) {
  $(".new-form").addClass("active");
  $(".overlay").css("display", "block");
  $(".new-form #fix-form").show();
  var tr = $(this).closest("tr");
  var idObject = $(tr).find(".ID_OBJECT");
  let id = $(idObject).html();
  $("#fix-form .btnConfirm").attr("data-content", id);
  //   var tr = $(this).closest("tr");
  //   var typeObject = $(tr).find(".TYPE_OBJECT");
  //   let type = $(typeObject).html();
  let roleID = $(this).attr("data-content");
  $.each($("#fix-form .update-role option"), function (index, value) {
    if ($(value).val() == roleID) {
      $(value).attr("selected", true);
    }
  });
  //   if (type == "Khách Hàng") {
  //     $("#fix-form .update-role").attr("style", "display: none");
  //   } else {
  //     $("#fix-form .update-role").attr("style", "display: flex");
  //     let roleID = $(this).attr("data-content");
  //     $.each($("#fix-form .update-role option"), function (index, value) {
  //         if ($(value).val() == roleID) {
  //             $(value).attr("selected", true);
  //         }
  //     });
  //   }
});

//query id import receipt
$(document).on("click", ".btnFixCoupon", function (e) {
  var tr = $(this).closest("tr");
  var idObject = $(tr).find(".ID_OBJECT");
  let id = $(idObject).html();
  $.ajax({
    url: "../php/tools/receiveData.php",
    type: "POST",
    data: { idImport: id },
    success: function (data) {
      console.log(data);
      loadPageByAjax("Coupon_Products");
    },
  });
});

//các đối tượng đang hoạt động
$(document).on("click", ".content-table .action.enable", function (e) {
  $(".new-form").addClass("active");
  $(".overlay").css("display", "block");
  $(".new-form #fix-form .switch").attr("data-content", "đang hoạt động");
  $(".new-form #fix-form .switch").attr("checked", "true");
  $(".new-form #fix-form").show();
  $(".new-form #update_role .new-status-role .switch").attr(
    "data-content",
    "đang hoạt động"
  );
  $(".new-form #update_role .new-status-role .switch").attr("checked", "true");
  $(".new-form #update_role").show();
});

$(document).on("click", ".btnDel.enable", function (e) {
  $(".new-form").addClass("active");
  $(".overlay").css("display", "block");
  $(".new-form #delete-form").show();
  $(this).addClass("clicked");
});

function hiddenForm() {
  $(".new-form").removeClass("active");
  $(".overlay").hide();
  $(".new-form #fix-form").hide();
  $(".new-form #fix-form .switch").attr("data-content", "ngừng hoạt động");
  $(".new-form #fix-form .switch").removeAttr("checked");
  $(".new-form #update_role .switch").attr("data-content", "ngừng hoạt động");
  $(".new-form #update_role .switch").removeAttr("checked");
  $(".new-form #create-form").hide();
  $(".new-form #delete-form").hide();
  $(".new-form #create_new_role").hide();
  $(".new-form #update_role").hide();
}

const viewDetails = () => {
  $(".Product_Details .textfield").attr("disabled", "disabled");
  $(".btnConfirm").attr("disabled", "disabled");
};
