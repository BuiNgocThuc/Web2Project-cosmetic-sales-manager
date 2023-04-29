function countdown() {
    const days = $("#days");
    const hours = $("#hours");
    const minutes = $("#minutes");
    const seconds = $("#seconds");

    const EXP = new Date("May 25 2023 00:00:00");
    const currentTime = new Date();
    const diff = EXP - currentTime;

    const d = Math.floor(diff / 1000 / 60 / 60 / 24);
    const h = Math.floor(diff / 1000 / 60 / 60) % 24;
    const m = Math.floor(diff / 1000 / 60) % 60;
    const s = Math.floor(diff / 1000) % 60;

    days.html(d);
    hours.html(h < 10 ? "0" + h : h);
    minutes.html(m < 10 ? "0" + m : m);
    seconds.html(s < 10 ? "0" + s : s);
}
setInterval(countdown, 1000);
