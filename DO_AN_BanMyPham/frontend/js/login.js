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
                window.location.href = 'admin.php';
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

const checkInputRegister = async () => {
    let name = document.querySelector("#container__register .name").value;
    let email = document.querySelector("#container__register  .email").value;
    let username = document.querySelector("#container__register  .username").value;
    let password = document.querySelector("#container__register  .pass").value;
    let confirmPassword = document.querySelector("#container__register .cfpass").value;
    if (name.value == "") {
        alert("Chưa nhập name!");
        name.focus();
        return false;
    }
    if (email.value == "") {
        alert("Chưa nhập email!");
        email.focus();
        return false;
    }
    if (username.value == "") {
        alert("Chưa nhập username!");
        username.focus();
        return false;
    }
    if (await isUsernameExist(username.value)) {
        alert("Username đã tồn tại!");
        username.focus();
        return false;
    }
    if (password.value == "") {
        alert("Chưa nhập password!");
        password.focus();
        return false;
    }
    if (!isPasswordValid(password.value)) {
        alert(
            "Một mật khẩu có chứa ít nhất tám ký tự, trong đó có ít nhất một số và bao gồm cả chữ thường và chữ hoa và ký tự đặc biệt, ví dụ #, ?, !."
        );
        password.focus();
        return false;
    }

    if (confirmPassword.value == "") {
        alert("Chưa nhập confirm password!");
        confirmPassword.focus();
        return false;
    }
    if (confirmPassword.value != password.value) {
        alert("Mật khẩu không khớp!");
        confirmPassword.focus();
        return false;
    }
    return true;
};

function isPasswordValid(password) {
    return /^(?=.*?[A-Z])(?=(.*[a-z]){1,})(?=(.*[\d]){1,})(?=(.*[\W]){1,})(?!.*\s).{8,}$/.test(
        password
    );
}

const isUsernameExist = (username) => {
    return $.ajax({
        url: "../php/controlLogin.php",
        type: "POST",
        data: { user: username, action: "checkUsernameExist" },
    });
};
