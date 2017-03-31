(function(){
  var mobile = false; //used to check if mobile menu has been opened
  var menuLinks = document.querySelectorAll('.ajax');
  console.log("HELLO");
  var mainContainer = document.querySelector("#pageContainer");
  var hamburger = document.querySelector('.hamburger');
  var defaultTitle = "Team Canada 1972";

  function ajaxPage(pageObject){
    var xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function() {
       if (this.readyState == 4 && this.status == 200) {
        var response = this.responseText;
        // console.log(response);
        TweenLite.to(mainContainer,0.5,{opacity:0,onComplete:function(){
          mainContainer.innerHTML = response;
          TweenLite.to(mainContainer,0.5,{opacity:1});
          assignLinks();
          var script = document.createElement('script');
          script.src = "js/" + pageObject.name + ".js";
          document.head.appendChild(script);
        }})
      }
     };
     xhttp.open("GET", pageObject.url , true);
     xhttp.send();
  }

function loadPage(event){
  event.preventDefault();
  var it = event.currentTarget;
  var pageSon = {name:it.getAttribute('href'), url:"pages/"+it.getAttribute('href')};
  window.history.pushState(pageSon.url,null, pageSon.name);
  document.title = defaultTitle + " | " + pageSon.name.substring(0,1).toUpperCase() + pageSon.name.substring(1);
  ajaxPage(pageSon);
}


function assignLinks(){
  menuLinks = null;
  menuLinks = document.querySelectorAll('.ajax');
  for(link of menuLinks){
    // console.log(link);
    link.addEventListener('click',loadPage,false);
    if(link.classList.contains('menuLink')){
      link.addEventListener('click',toggleMenu,false);
    }
  }
  console.log("assigned menuLinks");
}


window.addEventListener('popstate', function(e){
  var state = e.state;
  if (state == null) {
    mainContainer.innerHTML = " ";
    document.title = defaultTitle;
  } else {
    var pageSon = {name:state.replace('pages/',''),url:state};
    ajaxPage(pageSon);
    document.title = defaultTitle + " | " + pageSon.name.substring(0,1).toUpperCase() + pageSon.name.substring(1);
  }
});

var menu = document.querySelector('#mainNav ul');
function toggleMenu(){
  menu.classList.toggle('open');
  if(menu.classList.contains('open')){
    TweenLite.set(menu,{height:"auto"});
    TweenLite.from(menu,1,{height:0,ease:Power4.easeInOut});
  }else{
    TweenLite.to(menu,1,{height:0,ease:Power4.easeInOut});
  }
}
console.log(hamburger);
hamburger.addEventListener('click',function(e){
  e.preventDefault();
  if(!mobile){
    mobile = true;
  }
  toggleMenu();
},false);
assignLinks();
})();
