$(document).ready(function () {
    $(".fa-regular").click(function () {
        $(".fix-info").slideToggle(500);
        console.log("In here");
    });
});

function changeIconArrow(x) {
    x.classList.toggle("fa-angle-up");
    x.classList.toggle("fa-angle-down");
}

