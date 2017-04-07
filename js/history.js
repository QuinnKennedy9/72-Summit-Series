(function(){
var g = new TrollScroll(document.querySelector('.banner'),{speed:70});
var timeline = document.querySelector('#timeline');
var topLevelEvents = timeline.querySelectorAll('#events a.tl');
var innerLevelEvents = timeline.querySelectorAll('#events .dropdown a');
var currentTopLevelEvent = null;
var currentEvent = null;
//
var filler = {
  "beforeTheSeries" : {
      "img":"imgsrc.jpg",
      "text":"text! text, text text."
    },
  "duringTheSeries" : {
      "img":"imgsrc.jpg",
      "text":"text! text, text text."
    },
  "gameOne" : {
      "img":"imgsrc.jpg",
      "text":"text! text, text text."
    },
  "gameTwo" : {
      "img":"imgsrc.jpg",
      "text":"text! text, text text."
    },
  "gameThree" : {
      "img":"imgsrc.jpg",
      "text":"text! text, text text."
    },
  "gameFour" : {
      "img":"imgsrc.jpg",
      "text":"text! text, text text."
    },
  "gameFive" : {
      "img":"imgsrc.jpg",
      "text":"text! text, text text."
    },
  "gameSix" : {
      "img":"imgsrc.jpg",
      "text":"text! text, text text."
    },
  "gameSeven" : {
      "img":"imgsrc.jpg",
      "text":"text! text, text text."
    },
  "gameEight" : {
      "img":"imgsrc.jpg",
      "text":"text! text, text text."
    },
  "afterTheSeries" : {
      "img":"imgsrc.jpg",
      "text":"text! text, text text."
    }
}
var bphotos = ["ACTION-5.jpg", "ACTION-9.jpg", "action-12.jpg", "linedup.jpg"];
var rand = bphotos[Math.floor(Math.random() * bphotos.length)];
var background = document.querySelector(".back-img");

function randBack(){
  document.querySelector(".back-img").style.backgroundImage="url(img/"+rand+")";
  console.log(background.src)
}

function expandEvent(it){
  var offsetEl = it.parentNode.offsetTop;
  var offsetParent = it.parentNode.parentNode.parentNode.offsetTop;
var o = offsetEl - offsetParent;
console.log(o);
TweenLite.to(timeline.querySelector('.modal-arrow'),0.5,{top:o-14});
if(currentTopLevelEvent != it && currentTopLevelEvent!=null && currentTopLevelEvent.classList.contains('drop')){
  var list = currentTopLevelEvent.parentNode.querySelector('ul');
  var listLinks = list.parentNode.querySelectorAll('.dropdown a');
  var t = listLinks.length;
  for(l of listLinks){
    TweenLite.set(l,{opacity:1});
    TweenLite.to(l,0.5,{opacity:0,delay:t*0.1});
    t--;
  }
  TweenLite.to(list,0.5,{height:0,delay:0.5});
  list.classList.remove('open');
  currentTopLevelEvent = it;
}

if(it.classList.contains('drop')){
  var list = it.parentNode.querySelector('ul');
  var listLinks = list.parentNode.querySelectorAll('.dropdown a');
  if(list.classList.contains('open')){
    var t = listLinks.length;
    for(l of listLinks){
      TweenLite.set(l,{opacity:1});
      TweenLite.to(l,0.5,{opacity:0,delay:t*0.1});
      t--;
    }
    TweenLite.to(list,0.5,{height:0,delay:0.5});
    }else{
      TweenLite.set(list,{height:"auto"});
      TweenLite.from(list,0.5,{height:0});
      var t = 0;
      for(l of listLinks){
        TweenLite.set(l,{opacity:0});
        TweenLite.to(l,0.5,{opacity:1,delay:t*0.1});
        t++;
      }
    }
    list.classList.toggle('open');
    currentTopLevelEvent = it;
  }
}

function loadContent(it){
  var text = filler[it.id].text;
  var imgsrc = filler[it.id].img;
  var modal = document.querySelector('#timeline .modal');
  var desc = modal.querySelector('.desc');
  var img = modal.querySelector('img');
  TweenLite.to(img,0.5,{opacity:0});
  TweenLite.to(desc,0.5,{opacity:0,onComplete:function(){
    desc.innerHTML = text;
    img.src = imgsrc;
    TweenLite.to(desc,0.5,{opacity:1,delay:0.1});
    TweenLite.to(img,0.5,{opacity:1,delay:0.1});
  }});
  if(currentEvent != it){
    if(currentEvent!=null){
      currentEvent.classList.remove('current');
    }
    it.classList.add('current');
    currentEvent = it;
  }
}

for(link of topLevelEvents){
  link.addEventListener('click',function(e){
    e.preventDefault();
    var it = e.currentTarget;
    expandEvent(it);
    loadContent(it);
  },false);
}
for(link of innerLevelEvents){
  link.addEventListener('click',function(e){
    e.preventDefault();
    var it = e.currentTarget;
    loadContent(it);
  },false);
}
window.addEventListener("load",randBack, false);

})();
