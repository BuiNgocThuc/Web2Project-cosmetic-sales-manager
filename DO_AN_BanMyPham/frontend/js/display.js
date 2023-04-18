
const display = (id, content) => {
    //id product; data-content: ngừng hoạt động or đang hoạt động, column treding or new_arrivals
    let display_action = $(content).closest('.display_action');
    let col = ($(display_action).hasClass('trending')) ? 'SLIDESHOW' : 'NEW_ARRIVALS';
    $.ajax({
        url: "../php/tools/display.php",
        type: "POST",
        data: { id: id, 
            res: checkDataContent(content),
            col: col 
        },
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