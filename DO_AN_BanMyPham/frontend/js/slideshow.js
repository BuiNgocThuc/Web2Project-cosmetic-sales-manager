

//slider featured product 
$(document).ready(function () {
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
});


