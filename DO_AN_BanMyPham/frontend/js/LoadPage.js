

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



$(document).on('click', '.btnCreate.enable', function (e) {
    $('.new-form').addClass('active');
    $('#Admin-Decentralization .new-form #create_new_role').show();
    $('.overlay').css('display', 'block');
    $('.new-form #create-form').show();
});

$(document).on('click', '.btnFix.enable', function (e) {
    $('.new-form').addClass('active');
    $('.overlay').css('display', 'block');
    $('.new-form #fix-form').show();
    //query id object need update
    var tr = $(this).closest("tr");
    var idObject = $(tr).find(".ID_OBJECT");
    let id = $(idObject).html();
    $('#fix-form .btnConfirm').attr('data-content', id);
    var tempVar = $(idObject).next();
    while($(tempVar).attr('class') != 'STATUS_OBJECT') {
        let className = $(tempVar).attr('class');
        let updateOb = $('#fix-form').find('.textfield').filter(function() {
            return $(this).hasClass(className);
        });
        updateOb.val($(tempVar).html());
        tempVar = $(tempVar).next();
    }
});

$(document).on('click', '.btnFixUser.enable', function (e) {
    $('.new-form').addClass('active');
    $('.overlay').css('display', 'block');
    $('.new-form #fix-form').show();
    var tr = $(this).closest("tr");
    var typeObject = $(tr).find(".TYPE_OBJECT");
    let type = $(typeObject).html();
    if(type == 'Khách Hàng') {
        $("#fix-form .update-role").attr('style', 'display: none');
    }else {
        $("#fix-form .update-role").attr('style', 'display: flex');
    }
});

//các đối tượng đang hoạt động
$(document).on('click', '.content-table .action.enable', function (e) {
    $('.new-form').addClass('active');
    $('.overlay').css('display', 'block');
    $('.new-form #fix-form .switch').attr('data-content', 'đang hoạt động');
    $('.new-form #fix-form .switch').attr('checked', 'true');
    $('.new-form #fix-form').show();
});

$(document).on('click', '.btnDel.enable', function (e) {
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

