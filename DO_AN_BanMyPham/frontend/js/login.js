$(document).on('click', '.btnCallLog', function (e) {
    $('#container__login').css('top', '50%');
    $('#container__register').css('top', '200%');
    $('#container__register').css('visibility', 'hidden');
    $('#container__register').css('opacity', '0');
    $('#container__log').css('visibility', 'visible');
    $('#container__log').css('opacity', '1');
});

$(document).on('click', '.btnCallReg', function (e) {
    console.log(123);
    $('#container__login').css('top', '-200%');
    $('#container__register').css('top', '50%');
    $('#container__log').css('visibility', 'hidden');
    $('#container__log').css('opacity', '0');
    $('#container__register').css('visibility', 'visible');
    $('#container__register').css('opacity', '1');
});

const Login = (id) => {
    $.ajax({
        url: "../php/content.php",
        type: "POST",
        data: { page: id },
        dataType: "html",
        success: function (data) {
            $("body").html(data);
            $("body").addClass("login")
        },
    });
}

const loginAccount = () => {
    let username = document.querySelector(".TK").value;
    let password = document.querySelector(".MK").value;
    $.ajax({
        url: "../php/controlLogin.php",
        type: "POST",
        data: { user: username, pass: password, action: "checkLogin" },
        success: function (res) {
            $.ajax({
                url: "../php/content.php",
                type: "POST",
                data: {page: res},
                dataType: "html",
                success: function (data) {
                    $("body").html(data);
                },
            })
        },
    });
};