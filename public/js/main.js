/***************Start-Video-Slider***************/
let hide_btn = document.getElementById("slider-content");
let heros_audio = document.getElementById("heros-audio");
let heros_video = document.getElementById("heros-video");
let heros_video2 = document.getElementById("heros-video2");
if (heros_audio) {
  heros_video.playbackRate = 0.88;
  heros_video2.playbackRate = 0.88;
  let playing = false;
  function playHerosAudio() {
    if (playing) {
      $(".audio-controls-wrapper .fa").addClass("fa-play");
      $(".audio-controls-wrapper .fa").removeClass("fa-stop");
      heros_audio.pause();
      heros_video.pause();
      heros_video2.pause();
      playing = true;
    } else {
      heros_video.style.opacity = 1;
      $(".audio-controls-wrapper .fa").removeClass("fa-play");
      $(".audio-controls-wrapper .fa").addClass("fa-stop");
      heros_video.play();
      heros_video2.play();
      heros_audio.play();
      playing = true;
      hide_btn.style.opacity="0";
    }
  }
  heros_audio.addEventListener("ended", function () {
    heros_audio.currentTime = 0;
    heros_video.style.opacity = 0;
    setTimeout(() => {
      heros_video2.style.opacity = 0;
    }, 500);
    playing = false;
    $(".audio-controls-wrapper .fa").addClass("fa-play");
    $(".audio-controls-wrapper .fa").removeClass("fa-stop");
    hide_btn.style.opacity="1";

  });

  heros_video.addEventListener("ended", function () {
    heros_video.style.opacity = 0;
    heros_video2.currentTime = 0;
    heros_video2.playbackRate = 0.75;
    heros_video2.play();
    heros_video2.style.opacity = 1;
  });
}
/***************End-Video-Slider***************/

/***************Start-mobile-menu***************/
const menu = document.querySelector("#mobile-menu");
const menuLinks = document.querySelector(".nav-menu");
const body = document.querySelector("body");
const mobileMenu = () => {
  menu.classList.toggle("is-active");
  menuLinks.classList.toggle("active");
  body.classList.toggle("active");
};
menu.addEventListener("click", mobileMenu);
/***************End-mobile-menu***************/


/***************Start-wow-js***************/
new WOW().init();
/***************End-wow-js***************/

/***************Start-Aos-Animate***************/
// AOS.init({
//   offset: 200,
//   duration: 1000,
//   easing: "ease-in-quad",
//   delay: 100,
// });
/***************End-Aos-Animate***************/
var counter = 1;
setInterval(function(){
  document.getElementById('heros-audio' + counter).checked = true;
  counter++;
  if(counter > 4){
    counter = 1;
  }
}, 5000);