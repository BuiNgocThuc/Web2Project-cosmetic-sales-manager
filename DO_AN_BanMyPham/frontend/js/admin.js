

function changeDataContent() {
    var stt = document.querySelector('.switch');
    if (stt.getAttribute('data-content') === "ngừng hoạt động") {
        stt.setAttribute('data-content', 'đang hoạt động')
    } else {
        stt.setAttribute('data-content', 'ngừng hoạt động')
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
$('.dropdown-select').on('click', function (evt) {
    // $('.dropdown-list').slideUp();
    // $(this).parent(".menu-wrapper").children(".dropdown-list").slideToggle(500);
    $(this).next(".dropdown-list").slideToggle(500);
    let vis = $(this).parent('.menu-wrapper').next().children(".dropdown-list");
    if (vis.is(":visible")) {
        vis.slideUp(500);
    }
});

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


    // x.childNodes[3].classList.toggle("fa-angle-down");
}

function changeIconArrow(x) {
    if (x.style.transform == "") {
        x.style.transform = "rotate(180deg)"
        x.style.transition = "0.25s linear"
    }
    else {
        const re = /([0-9]*deg)/g;
        let currentDeg = x.style.transform.match(re)[0];
        x.style.transform = "rotate(calc(" + currentDeg + " + 180deg))"
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

// hidden sidebar

function openNav() {
    document.getElementById("sideMenu").style.width = "18vw";
    document.getElementById("main-content").style.marginLeft = "18vw";
}

function closeNav() {
    document.querySelector(".sidebar").style.width = "0";
    document.querySelector(".main-content").style.marginLeft = "0";
}


// add new form
$(document).ready(function () {
    $('.image-upload').click(function (e) {
        // e.preventDefault();
        $('#file-input').trigger("click");
        // e.stopPropagation();
    });
});



