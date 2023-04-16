const AddInfo = async (id) => {
  let userID = document.querySelector('#create-form .new-userId').value;
  console.log(userID);
  let name = document.querySelector("#create-form .new-name").value;
  let type = document.querySelector("#create-form .new-type").value;
  // let img = document.querySelector("#Admin_Product #create-form .new-img").files[0].name;
  let phone = document.querySelector("#create-form .new-phone").value;
  let address = document.querySelector("#create-form .new-address").value;
  let email = document.querySelector("#create-form .new-email").value;
  let roleID = document.querySelector("#create-form .new-role").value;
  $.ajax({
    url: "../php/tools/action.php",
    type: "POST",
    data: {
      id: id,
      userID: userID,
      name: name,
      type: type,
      // img: img,
      phone: phone,
      address: address,
      email: email,
      roleID: roleID,
      action: "create",
    },
    success: function (res) {
      if (res != "success") {
        alert(res);
      }
      else {
        alert("Tạo tài khoản người dùng thành công!!");
      }
    },
  });
};

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
      }
    },
  });
};

const DeleteInfo = (id) => {
  var tr = $(".clicked").closest("tr");
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
              alert("Thêm nhóm quyền thành công!!");
            }
          },
        });
      });
    },
  });
};
