

// Load Page Admin
$(document).ready(() => {
    loadPageByAjax("Admin_Home");
});

const loadPageByAjax = (pageTarget) => {
    $.ajax({
        url: "../php/content.php",
        type: "POST",
        data: { page: pageTarget },
        dataType: "html",
        success: function (data) {
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
            $('.content').empty();
            $('.content').html(data);
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
            data = data.replace('<div class="title"></div>', '<div class="title">' + content + '</div>');
            console.log(data);
        }
    });
}



$(document).on('click', '.btnCreate', function (e) {
    $('.new-form').addClass('active');
    $('#Admin-Decentralization .new-form #create_new_role').show();
    $('.overlay').css('display', 'block');
    $('.new-form #create-form').show();
});

$(document).on('click', '.btnFix', function (e) {
    $('.new-form').addClass('active');
    $('.overlay').css('display', 'block');
    $('.new-form #fix-form').show();
    let id = $(this).attr('data-content');
    $('#fix-form .btnConfirm').attr('data-content', id);
});

$(document).on('click', '.content-table .action', function (e) {
    $('.new-form').addClass('active');
    $('.overlay').css('display', 'block');
    $('.new-form #fix-form .switch').attr('data-content', 'đang hoạt động');
    $('.new-form #fix-form .switch').attr('checked', 'true');
    $('.new-form #fix-form').show();
});

$(document).on('click', '.btnDel', function (e) {
    $('.new-form').addClass('active');
    $('.overlay').css('display', 'block');
    $('.new-form #delete-form').show();
    $(this).addClass('clicked');
});


function hiddenForm() {
    $('.new-form').removeClass('active');
    $('.overlay').hide();
    $('.new-form #fix-form').hide();
    $('.new-form #fix-form .switch').attr('data-content', 'ngừng hoạt động');
    $('.new-form #fix-form .switch').removeAttr("checked");
    $('.new-form #create-form').hide();
    $('.new-form #delete-form').hide();
};

