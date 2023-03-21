

// Load Page Admin
$(document).ready(() => {
    loadPageByAjax("Admin_Customer");
});

const loadPageByAjax = (pageTarget) => {
    console.log(pageTarget);
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

