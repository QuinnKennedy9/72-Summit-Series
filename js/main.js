(function(){
var hamburger = document.querySelector('#mainNav .hamburger');
function toggleMenu(event){
  event.preventDefault();
  var it = event.currentTarget;
  var menu = it.parentNode.parentNode.querySelector('ul');
  if(menu.classList.contains('hidden')){
    // console.log("is hidden");
    menu.classList.remove('hidden');
    TweenLite.fromTo(menu,0.5,{height:"0em",opacity:0.0},{height:"40em",opacity:1.0});
  }else{
    TweenLite.fromTo(menu,0.5,{height:"40em"},{height:"0em",onComplete: function(){
      menu.classList.add('hidden');
    },});
  }
}
hamburger.addEventListener('click',toggleMenu,false);
})();
