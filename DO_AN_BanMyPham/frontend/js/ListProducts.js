const slideShow = document.querySelector('.header__slideshow-adea');
let count = 0;

setInterval(() => {
    slideShow.style.transform = `translateX(${-count * 100}%)`;
    count = (count + 1) % 4;
}, 3000);


$(document).ready(function () {
    $.ajax({
        url: 'Models/fetch_data.php',
        method: 'GET',
        data: {
            id: 1,
        },
        success: function (data) {
            $("#home__product").html(data);
        }
    })
})

