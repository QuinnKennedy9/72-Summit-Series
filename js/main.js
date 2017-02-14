(function(){
var hamburger = document.querySelector('#mainNav .hamburger');
function toggleMenu(event){
  event.preventDefault();
  var it = event.currentTarget;
  it.parentNode.querySelector('ul').classList.toggle('hidden');
}
hamburger.addEventListener('click',toggleMenu,false);
})();
