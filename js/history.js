(function(){
var timeline = document.querySelector('#timeline');
var topLevelEvents = timeline.querySelectorAll('#events a');

function expandEvent(e){
  e.preventDefault();
var it = e.currentTarget;
var offsetEl = it.parentNode.offsetTop;
var offsetParent = it.parentNode.parentNode.parentNode.offsetTop;
var o = offsetEl - offsetParent;
TweenLite.to(timeline.querySelector('.modal-arrow'),0.5,{top:o-28});
if(it.classList.contains('tl')){
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
  }
}
for(link of topLevelEvents){
  link.addEventListener('click',expandEvent,false);
}
})();
