

function changeDataContent() {
    var stt = document.querySelector('.switch');
    if (stt.getAttribute('data-content') === "ngừng hoạt động") {
        stt.setAttribute('data-content', 'đang hoạt động')
    } else {
        stt.setAttribute('data-content', 'ngừng hoạt động')
    }
}



// Fix Width ScrollBar

// $(document).ready(function () {
//     checkScrollBars();
// });

// function checkScrollBars() {
//     if (checkHasScrollBar()) {
//         let a = getScrollBarWidth();
//         $(".main-content").css("width", "calc(82vw - " + a + "px)");
//         $("header").css("width", "calc(82vw - " + a + "px)");
//     }
// }
// function getScrollBarWidth() {
//     let $outer = $("<div>")
//         .css({ visibility: "hidden", width: 100, overflow: "scroll" })
//         .appendTo("body"),
//         widthWithScroll = $("<div>")
//             .css({ width: "100%" })
//             .appendTo($outer)
//             .outerWidth();
//     $outer.remove();
//     return 100 - widthWithScroll;
// }

// function checkHasScrollBar() {
//     if ($(document).height() > $(window).height()) return true;
//     return false;
// }



//hide form search

let hideForm = () => {
    $(".fix-info").slideToggle(500);
};

let hideDropdownMenu = () => {
    // $(".dropdown-list").slideToggle(500);
    // console.log("click menu");
    // $('.dropdown-select').parent(".menu-wrapper").children(".dropdown-list").slideToggle(500);
}
$('.dropdown-select').on('click', function (evt) {
    // $('.dropdown-list').slideUp();
    $(this).parent(".menu-wrapper").children(".dropdown-list").slideToggle(500);
    
    // $(this).parent(".menu-wrapper").find(".dropdown-list").slideDown();
    // var slide_el = $(this).parent(".menu-wrapper").next().find(".dropdown-list");
    // console.log(slide_el);
    // if (slide_el.is(':visible')) {
    //     slide_el.slideUp();
    // }

    // var slide_el = $(this).parent(".menu-wrapper").next().find('.dropdown-list');

    // // don't slide up if clicking on the already visible element
    // if (!slide_el.is(':visible')) {
    //     $('.dropdown-list').slideUp();
    // }
    // slide_el.slideToggle(); // only slide clicked element
});

function changIconArrowSidebar() {
    var icon = document.querySelector('.fa-angle-down');
    icon.classList.toggle("fa-angle-up");
    icon.classList.toggle("fa-angle-down");
}

function changeIconArrow(x) {
    x.classList.toggle("fa-angle-up");
    x.classList.toggle("fa-angle-down");
}



function changeIconMode(x) {
    x.classList.toggle("fa-sun-bright");
    x.classList.toggle("fa-moon-stars");
    var color = $("html").css("--bg")
    color
}


//select function on sidebar 

$(document).ready(function () {
    $("#changeMode").click(function () {
        if (this.classList.contains("fa-moon-stars")) {
            document.documentElement.style.setProperty('--main', '#0D9494');
            document.documentElement.style.setProperty('--bg', '#FFFBF1');
            document.documentElement.style.setProperty('--bg-body', '#e5e5e5');
            document.documentElement.style.setProperty('--font-color', '#0b1218');
        } else {
            document.documentElement.style.setProperty('--main', 'orange');
            document.documentElement.style.setProperty('--bg', '#0B1218');
            document.documentElement.style.setProperty('--bg-body', '#131D28');
            document.documentElement.style.setProperty('--font-color', '#FFFBF1');
        }
    });
});

// Load Page


