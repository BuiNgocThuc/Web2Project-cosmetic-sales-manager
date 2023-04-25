
const modal = document.getElementById("blog-modal");
const btn = document.getElementById("show-blog");
const span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

const modall = document.getElementById("room-modal");
const btnn = document.getElementById("show-room");
const spann = document.getElementsByClassName("closes")[0];

btnn.onclick = function() {
  modall.style.display = "block";
}

spann.onclick = function() {
  modall.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modall) {
    modall.style.display = "none";
  }
}
