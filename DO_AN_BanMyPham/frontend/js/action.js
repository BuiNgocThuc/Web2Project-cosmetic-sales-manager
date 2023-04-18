const AddInfo = async (id) => {
  switch (id) {
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
      let addressPro = document.querySelector("#create-form .new-address").value;
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
    case "Permission":
      let namePer = document.querySelector("#create-form .new-name").value;
      let createPer = document.querySelector("#create-form .create-per").value;
      let updatePer = document.querySelector("#create-form .update-per").value;
      let deletePer = document.querySelector("#create-form .delete-per").value;
      let accessPer = document.querySelector("#create-form .access-per").value;
      let controlPer = document.querySelector("#create-form .control-per").value;
      $.ajax({
        url: "../php/tools/action.php",
        type: "POST",
        data: {
          id: "Permission",
          namePer: namePer,
          createPer: createPer,
          updatePer: updatePer,
          deletePer: deletePer,
          accessPer: accessPer,
          controlPer: controlPer,
          action: "create",
        },
        success: function (res) {
          if (res != "success") {
            alert(res);
          } else {
            alert("Tạo chức năng mới thành công!!");
            hiddenForm();
          }
        },
      });
      break;
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
      break;
  }
};

//get value checkbox 
$(document).on("change", "#Admin_Permission .switch", function () {
  // Lấy giá trị hiện tại của checkbox
  var isChecked = $(this).is(":checked");
    
  // Kiểm tra giá trị và thực hiện xử lý tương ứng
  if (isChecked) {
    $(this).val('1');
  } 
});

const UpdateInfo = (id) => {
  let name = document.querySelector("#fix-form .new-name").value;
  let location = $("#fix-form .btnConfirm").attr("data-content");
  let status = $("#fix-form .new-status").attr("data-content");
  $.ajax({
    url: "../php/tools/action.php",
    type: "POST",
    data: {
      id: id,
      name: name,
      status: status,
      identity: location,
      action: "update",
    },
    success: function (res) {
      if (res != "success") {
        console.log(res);
      } else {
        alert("Sửa thành công");
        hiddenForm();
      }
    },
  });
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
        ".list-permission .switch[data-content='đang hoạt động']"
      );
      $.each(perArray, function (index, value) {
        let id = $(value).attr("data-id");
        let action = $(value).attr("data-action");
        $.ajax({
          url: "../php/tools/decentralization.php",
          type: "POST",
          data: {
            idRole: res,
            id: id,
            action: action,
          },
          success: function (data) {
            if (data != "success") {
              alert(data);
            } else {
            }
          },
        });
      });
      alert("Thêm nhóm quyền thành công!!");
    },
  });
};
