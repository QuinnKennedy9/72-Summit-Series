(function(){
  var bannerSpeed = 70;
  var s = new TrollScroll(document.querySelector("#splash .banner"),{direction:"down",speed:bannerSpeed});
  var t = new TrollScroll(document.querySelector("#splash .subheading"),{direction:"down",speed:bannerSpeed});
  var g = new TrollScroll(document.querySelector("#splash .back-img"),{direction:"down",speed:bannerSpeed*0.90});
  var t = new TrollScroll(document.querySelector("#splash #viewMore"),{direction:"down",speed:bannerSpeed});
  var bphotos = ["ACTION-5.jpg", "ACTION-9.jpg", "action-12.jpg", "linedup.jpg"];
  var rand = bphotos[Math.floor(Math.random() * bphotos.length)];
  var background = document.querySelector(".back-img");
  function randBack(){
    document.querySelector(".back-img").style.backgroundImage="url(../img/"+rand+")";
    console.log(rand)
  }

  window.addEventListener("load",randBack, false);
})();
