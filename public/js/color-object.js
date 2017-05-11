  var width = window.innerWidth;
  var val = 0;
  var blogo = document.querySelector(".banner-logo");
  var navBg = document.querySelector(".nav-bg");
  var btn = document.querySelector("#button");
  var favi = document.querySelector("#favi");
  var team = document.querySelectorAll(".team-photo");
  var footer = document.querySelector("footer");
  var divider = document.querySelector(".divider");
  var random = Math.floor((Math.random() * 4) + 1);

  var colors = ["1", "#39bfc9","#bc2437","#00589b","#dd7f26"];
  var favicon = ["1", "img/favicon_stephen.png", "img/favicon_garett.png", "img/favicon_jeremy.png", "img/favicon_travis.png"];
  var logos = ["1", "img/px_banner_stephen.svg", "img/px_banner_garett.svg", "img/px_banner_jeremy.svg", "img/px_banner_travis.svg"];

  if (width>1024) {
    val = 115;
  }else{
    val = 35;
  }

particlesJS('particles-js',

  {
    "particles": {
      "number": {
        "value": val,
        "density": {
          "enable": true,
          "value_area": 800
        }
      },
      "color": {
        "value": colors[random]
      },
      "shape": {
        "type": "edge",
        "stroke": {
          "width": 0,
          "color": "#000000"
        },
        "polygon": {
          "nb_sides": 5
        },
        "image": {
          "src": "img/github.svg",
          "width": 100,
          "height": 100
        }
      },
      "opacity": {
        "value": 0.5,
        "random": false,
        "anim": {
          "enable": false,
          "speed": 2,
          "opacity_min": 0.1,
          "sync": false
        }
      },
      "size": {
        "value": 35,
        "random": true,
        "anim": {
          "enable": false,
          "speed": 40,
          "size_min": 0.1,
          "sync": false
        }
      },
      "line_linked": {
        "enable": false,
        "distance": 150,
        "color": "#ffffff",
        "opacity": 0.4,
        "width": 1
      },
      "move": {
        "enable": true,
        "speed": 6,
        "direction": "top",
        "random": true,
        "straight": true,
        "out_mode": "out",
        "attract": {
          "enable": false,
          "rotateX": 600,
          "rotateY": 1200
        }
      }
    },
    "interactivity": {
      "detect_on": "canvas",
      "events": {
        "onhover": {
          "enable": false,
          "mode": "repulse"
        },
        "onclick": {
          "enable": false,
          "mode": "push"
        },
        "resize": true
      },
      "modes": {
        "grab": {
          "distance": 400,
          "line_linked": {
            "opacity": 1
          }
        },
        "bubble": {
          "distance": 400,
          "size": 40,
          "duration": 2,
          "opacity": 8,
          "speed": 3
        },
        "repulse": {
          "distance": 200
        },
        "push": {
          "particles_nb": 4
        },
        "remove": {
          "particles_nb": 2
        }
      }
    },
    "retina_detect": true,
    "config_demo": {
      "hide_card": false,
      "background_color": "#b61924",
      "background_image": "",
      "background_position": "50% 50%",
      "background_repeat": "no-repeat",
      "background_size": "cover"
    }
  }

);
blogo.src = logos[random];
navBg.style.backgroundColor = colors[random];
favi.href = favicon[random];
btn.style.backgroundColor = colors[random];
footer.style.backgroundColor = colors[random];
divider.style.backgroundColor = colors[random];
for (var i = 0; i < team.length; i++) {
  team[i].style.backgroundColor = colors[random];
}
