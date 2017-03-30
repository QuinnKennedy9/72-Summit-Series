(function(){
  var bannerSpeed = 70;
  var s = new TrollScroll(document.querySelector("#splash .banner"),{direction:"down",speed:bannerSpeed});
  var t = new TrollScroll(document.querySelector("#splash .subheading"),{direction:"down",speed:bannerSpeed*0.96});
  var t = new TrollScroll(document.querySelector("#splash #viewMore"),{direction:"down",speed:bannerSpeed*0.94});
  var g = new TrollScroll(document.querySelector("#splash .back-img"),{direction:"down",speed:bannerSpeed*1.1});

  var scrollingLinks = document.querySelectorAll('.scroller');
  for(b of scrollingLinks){
    b.addEventListener('click',function(e){
      e.preventDefault();
      goTo(document.querySelector(e.currentTarget.getAttribute('href')));
    },false);
  }
  var para = document.querySelectorAll(".parallax");
  var parallaxes = [];
  var i=0;
  for(p of para){
    i++;
    // parallaxes.push(new TrollScroll(p,{direction:"down",speed:bannerSpeed*i}));
  }
})();
