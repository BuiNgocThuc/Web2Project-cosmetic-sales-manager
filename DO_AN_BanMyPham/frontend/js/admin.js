

function changeDataContent(x) {
    if (x.getAttribute('data-content') === "ngừng hoạt động") {
        x.setAttribute('data-content', 'đang hoạt động')
    } else {
        x.setAttribute('data-content', 'ngừng hoạt động')
    }
}



//hide form settings
let hideForm = () => {
    $(".fix-info").slideToggle(500);
};

let hideDropdownMenu = () => {
    // $(".dropdown-list").slideToggle(500);
    // console.log("click menu");
    // $('.dropdown-select').parent(".menu-wrapper").children(".dropdown-list").slideToggle(500);
}


$(document).on('click', '.dropdown-select', function (evt) {
    var menu = $('.menu-wrapper > ul');
    var otherMenu = $('.dropdown-select');
    menu.not($(this).next(".dropdown-list")).slideUp(500);
    otherMenu.not($(this)).each(function () {
        if ($(this).hasClass('show')) {
            changeIconArrowSidebar(this);
            $(this).removeClass('show');
        }
    });
    $(this).next(".dropdown-list").slideToggle(500);
    $(this).toggleClass('show');
});

$(document).on('click', '.not-menu', function (evt) {
    var menu = $('.dropdown-select');
    menu.next(".dropdown-list").slideUp(500);
    menu.each(function () {
        if ($(this).hasClass('show')) {
            changeIconArrowSidebar(this);
            $(this).removeClass('show');
        }
    });
});

let selectMenu = (selectedTab) => {
    document.querySelector(".list-function .function-menu.active").classList.remove("active");
    selectedTab.classList.add("active");
};

let selectDropdownMenu = (selected) => {
    let dropDownItemList = document.querySelectorAll(".dropdown-list .dropdown-item");
    for (let item of dropDownItemList) {
        if (item.classList.contains("active")) {
            item.classList.remove("active");
        }
    }
    selected.classList.add("active");
}

function changeIconArrowSidebar(x) {
    if (x.childNodes[3].style.transform == "") {
        x.childNodes[3].style.transform = "rotate(180deg)"
        x.childNodes[3].style.transition = "0.25s linear"
    }
    else {
        const re = /([0-9]*deg)/g;
        let currentDeg = x.childNodes[3].style.transform.match(re)[0];
        x.childNodes[3].style.transform = "rotate(calc(" + currentDeg + " + 180deg))"
    }
}

function changeIconArrow(x) {
    if (x.style.transform == "") {
        x.style.transform = "rotate(1800deg)"
        x.style.transition = "1s linear"
    }
    else {
        const re = /([0-9]*deg)/g;
        let currentDeg = x.style.transform.match(re)[0];
        x.style.transform = "rotate(calc(" + currentDeg + " + 1800deg))"
    }
    // x.classList.toggle("fa-angle-up");
    // x.classList.toggle("fa-angle-down");
}



function changeIconMode(x) {
    x.classList.toggle("fa-sun-bright");
    x.classList.toggle("fa-moon-stars");
    var color = $("html").css("--bg")
    color
}


//select function on sidebar 


$(document).on('click', '#changeMode', function () {
    if (this.classList.contains("fa-moon-stars")) {
        document.documentElement.style.setProperty('--main', '#0D9494');
        document.documentElement.style.setProperty('--bg', '#FFFDFA');
        document.documentElement.style.setProperty('--bg-body', '#e5e5e5');
        document.documentElement.style.setProperty('--font-color', '#0b1218');
    } else {
        document.documentElement.style.setProperty('--main', 'orange');
        document.documentElement.style.setProperty('--bg', '#0B1218');
        document.documentElement.style.setProperty('--bg-body', '#131D28');
        document.documentElement.style.setProperty('--font-color', '#FFFDFA');
    }
});


// hidden sidebar


// add new form
$(document).ready(function () {
    $('.image-upload').click(function (e) {
        // e.preventDefault();
        $('#file-input').trigger("click");
        // e.stopPropagation();
    });
});


$(document).on('click', '.menu-icon', function (evt) {
    $('.sidebar').toggleClass('hide');
    $('.main-content').toggleClass('expand');
});

//show settings menu 
$(document).on('click', '#settingTool', function (evt) {
    $('.setting').toggleClass('clicked');
});


//change password
$(document).on('click', '.btnUpdatePassword', function() {
    let oldPassword = $('.oldPassword').val();
    let newPassword = $('.newPassword').val();
    let confirmPassword = $('.confirmPassword').val();
    if (oldPassword == '' || newPassword == '' || confirmPassword == '') {
        alert('Vui lòng nhập đầy đủ thông tin');
        return;
    }
    if (newPassword != confirmPassword) {
        alert('Mật khẩu mới không trùng khớp');
        return;
    }
    $.ajax({
        url: "tools/action.php",
        method: "POST",
        data: {
            oldPassword: oldPassword,
            password: newPassword,
            action: "update",
            id: "customer-password",
        },
        success: function(data) {
            if(data == 'success') {
                alert('Đổi mật khẩu thành công');
            } else {
                alert(data);
            }
            $('.oldPassword').val('');
            $('.newPassword').val('');
            $('.confirmPassword').val('');
        }
    });
})
