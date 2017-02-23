var vid = document.getElementById("videoFondo");
var pauseButton = document.querySelector("#portada button");

function vidFade() {
  vid.classList.add("stopfade");
}

vid.addEventListener('ended', function()
{
// solo funciona si el loop se elimina
vid.pause();
// para IE10
vidFade();
}); 


pauseButton.addEventListener("click", function() {
  vid.classList.toggle("stopfade");
  if (vid.paused) {
    vid.play();
    pauseButton.innerHTML = "Pausa";
  } else {
    vid.pause();
    pauseButton.innerHTML = "Pausado";
  }
})