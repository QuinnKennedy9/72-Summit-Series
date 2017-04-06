(function(){
  var bannerSpeed = 70;
  var s = new TrollScroll(document.querySelector("#splash .banner"),{direction:"down",speed:bannerSpeed});
  var t = new TrollScroll(document.querySelector("#splash .tagline"),{direction:"down",speed:bannerSpeed});
  var g = new TrollScroll(document.querySelector("#splash .back-img"),{direction:"down",speed:bannerSpeed*0.90});
  var t = new TrollScroll(document.querySelector("#splash #formButton"),{direction:"down",speed:bannerSpeed});
})();
