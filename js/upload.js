(function(){
var bphotos = ["ACTION-5.jpg", "ACTION-9.jpg", "action-12.jpg", "linedup.jpg"];
var rand = bphotos[Math.floor(Math.random() * bphotos.length)];
var background = document.querySelector(".back-img");
function randBack(){
  document.querySelector(".back-img").style.backgroundImage="url(img/"+rand+")";
  console.log(background.src)
}

window.addEventListener("load",randBack, false);
})();
