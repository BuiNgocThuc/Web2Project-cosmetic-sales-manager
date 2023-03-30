

// Load Page Admin
$(document).ready(() => {
    loadPageByAjax("Admin_Customer");
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

const Tools = (formTarget) => {
    $.ajax({
        url: "../php/content.php",
        type: "POST",
        data: { page: formTarget },
        dataType: "html",
        success: function (data) {
            // console.log(data);
            $('.new-form').html(data);
            $('.new-form').addClass('active');
            $('.overlay').css('display', 'block');
        }
    });
}

$(document).on('click', '.btnFix',  function (e) {
    Tools('Fix_Brand');
});

$(document).on('click', '.btnDel',  function (e) {
    Tools('Delete_Brand');
});


function hiddenForm() {
    $('.new-form').removeClass('active');
    $('.overlay').hide();
}

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

