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

const Login = () => {
    $.ajax({
        url: "../php/content.php",
        type: "POST",
        data: { page: "Login" },
        dataType: "html",
        success: function (data) {
            $("body").html(data);
            $("body").addClass("login");
        },
    });
}

const logout = () => {
    $.ajax({
        url: "../php/controlLogin.php",
        type: "POST",
        data: { action: "checkLogout" },
        success: function () {
            window.location.href = "index.php";
        },
    });
};

const loginAccount = () => {
    let username = document.querySelector(".TK").value;
    let password = document.querySelector(".MK").value;
    $.ajax({
        url: "../php/controlLogin.php",
        type: "POST",
        data: { user: username, pass: password, action: "checkLogin" },
        success: function (response) {
            if (response == 'admin') {
                header("Location: admin.php");
                alert("Vào trang quản trị");
            }
            else if (response == 'customer') {
                alert("Vào trang chủ");
                window.location.reload();
            } else {
                alert(response);
            }
        },
    });
};

const regisAccount = () => {
    let name = document.querySelector("#container__register .name").value;
    let email = document.querySelector("#container__register  .email").value;
    let username = document.querySelector("#container__register  .username").value;
    let password = document.querySelector("#container__register  .pass").value;
    $.ajax({
        url: "../php/controlLogin.php",
        type: "POST",
        data: {
            name: name,
            email: email,
            user: username,
            pass: password,
            action: "checkRegister",
        },
        success: function (res) {
            if (res == "Success") {
                alert("Tạo tài khoản thành công!");
                login();
                document.querySelector("#username-field").value = username;
                document.querySelector("#password-field").value = password;
            } else alert("Tạo tài khoản thất bại!");
        },
    });
}
