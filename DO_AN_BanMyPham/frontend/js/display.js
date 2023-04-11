
const display = (id, content) => {
    $.ajax({
        url: "../php/tools/display.php",
        type: "POST",
        data: { id: id, res: checkDataContent(content) },
        success: function (res) {
            if (res != 'success') {
                alert(res);
            }
        }

    });
}

// const action = (id) => {
//     $.ajax({
//         url: "../php/tools/fix-form.php",
//         type: 'POST',
//         data: {}
//     });
// }

function checkDataContent(x) {
    if (x.getAttribute('data-content') === "ngừng hoạt động") return false;
    return true;
}