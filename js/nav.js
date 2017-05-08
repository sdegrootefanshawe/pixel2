var nav = document.querySelector(".nav-bg");

function opaque() {
  var offset = window.scrollY;
  console.log(offset);

  if (offset>900) {
    nav.style.opacity = 1;
  }else {
    nav.style.opacity = 0.8;
  }
}

window.addEventListener('scroll', opaque, false);
