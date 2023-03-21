const slideshow = document.querySelector('.header__slideshow-adea');
let counter = 0;

setInterval(() => {
    slideshow.style.transform = `translateX(${-counter * 100}%)`;
    counter = (counter + 1) % 4;
}, 3000);