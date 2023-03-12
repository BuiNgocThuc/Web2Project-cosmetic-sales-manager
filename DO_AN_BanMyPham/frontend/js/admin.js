var stt = document.querySelector('.switch');

stt.addEventListener('click', function() {
    if(stt.getAttribute('data-content') === "ngừng hoạt động") {
        stt.setAttribute('data-content', 'đang hoạt động')
    }else {
        stt.setAttribute('data-content', 'ngừng hoạt động')
    }
})
