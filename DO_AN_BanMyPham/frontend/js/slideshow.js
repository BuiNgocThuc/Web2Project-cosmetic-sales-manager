

//slider featured product 
$(document).ready(function () {
    slideshow();
});
function slideshow() {
    $('.slider').slick({
        infinite: true,
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fa-light fa-angles-left fa-fade fa-2xl'></i></button>",
        nextArrow: "<button type='button' class='slick-next pull-right'><i class='fa-light fa-angles-right fa-fade fa-2xl'></i></button>",
        dots: true,
        autoplay: true,
        autoplaySpeed: 1000,
    });
    
    $('.slideshow-container').slick({
        infinite: true,
        speed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fa-light fa-angles-left fa-fade fa-2xl'></i></button>",
        nextArrow: "<button type='button' class='slick-next pull-right'><i class='fa-light fa-angles-right fa-fade fa-2xl'></i></button>",
        dots: true,
        autoplay: true,
        autoplaySpeed: 1000,
    });

    $('.new-product-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true,
        speed: 500,
        dots: true,
        autoplay: true,
        autoplaySpeed: 1000,
        prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fa-light fa-angles-left fa-fade fa-2xl'></i></button>",
        nextArrow: "<button type='button' class='slick-next pull-right'><i class='fa-light fa-angles-right fa-fade fa-2xl'></i></button>",
    });

    $('.relate-products').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true,
        speed: 500,
        dots: true,
        autoplay: true,
        autoplaySpeed: 1000,
        prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fa-light fa-angles-left fa-fade fa-2xl'></i></button>",
        nextArrow: "<button type='button' class='slick-next pull-right'><i class='fa-light fa-angles-right fa-fade fa-2xl'></i></button>",
    });
}


// srcoll hide/show header
// var prevScrollpos = window.pageYOffset;
// window.onscroll = function () {
//     var currentScrollPos = window.pageYOffset;
//     if (prevScrollpos > currentScrollPos) {
//         document.getElementById("header__container").style.top = "0";
//         document.getElementById("home-wrapper").style.paddingTop = "18rem";
//     } else {
//         document.getElementById("header__container").style.top = "-100%";
//         document.getElementById("home-wrapper").style.paddingTop = "0";
//     }
//     prevScrollpos = currentScrollPos;
// }


//back to top
$(document).on('click', '#toTop', function () {
    $("html, body").animate({ scrollTop: 0 }, 1000);
});


