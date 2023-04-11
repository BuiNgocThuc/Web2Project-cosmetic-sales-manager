const AddInfo = async (id) => {
    let name = document.querySelector('#create-form .new-name').value;
    let img = document.querySelector('#create-form .new-img').files[0].name;
    $.ajax({
        url: '../php/tools/action.php',
        type: 'POST',
        data: {
            id: id,
            name: name,
            img: img,
            action: 'create',
        },
        success: function (res) {
            if (res != 'success') {
                alert(res);
            }
        }
    })
}

const UpdateInfo = (id) => {
    let name = document.querySelector('#fix-form .new-name').value;
    let location = $("#fix-form .btnConfirm").attr('data-content');
    let status = $('#fix-form .new-status').attr('data-content');
    console.log(location);
    $.ajax({
        url: '../php/tools/action.php',
        type: 'POST',
        data: {
            id: id,
            name: name,
            status: status,
            identity: location,
            action: 'update'
        },
        success: function (res) {
            if (res != 'success') {
                console.log(res);
            }
            else {
                alert('Sửa thành công');
            }
        }
    })
}

const DeleteInfo = (id) => {
    var tr = $('.clicked').closest('tr');
    var idObject = $(tr).find('.ID_OBJECT').html();
    console.log(idObject);
    $.ajax({
        url: '../php/tools/action.php',
        type: 'POST',
        data: {
            id: id,
            ob: idObject,
            action: 'delete'
        },
        success: function (res) {
            if (res != 'success') {
                alert(res);
            }
            else {
                alert('Xóa thành công');
            }
        }
    })
}
