(function(){
var hamburger = document.querySelector('#mainNav .hamburger');
function toggleMenu(event){
  event.preventDefault();
  var it = event.currentTarget;
  var menu = it.parentNode.parentNode.querySelector('ul');
  if(menu.classList.contains('hidden')){
    // console.log("is hidden");
    menu.classList.remove('hidden');
    TweenLite.fromTo(menu,0.5,{height:"0em",opacity:0.0},{height:"50em",opacity:1.0});
  }else{
    TweenLite.fromTo(menu,0.5,{height:"50em"},{height:"0em",onComplete: function(){
      menu.classList.add('hidden');
    },});
  }
}
hamburger.addEventListener('click',toggleMenu,false);
var scrollingLinks = document.querySelectorAll('.scroller');
if(scrollingLinks[0]!=null){  
  for(b of scrollingLinks){
    b.addEventListener('click',function(e){
      e.preventDefault();
      goTo(document.querySelector(e.currentTarget.getAttribute('href')));
    },false);
  }
}
})();
