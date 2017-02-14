(function(){
  var currentLink = null;
  function insertPage(page, pageTitle){
    document.querySelector('main').innerHTML = page;
    // console.log(link);
    window.history.pushState("string","page","/" + pageTitle);
  }
function pageSwap(event){
  event.preventDefault();
  var it = event.currentTarget;
  try{
  var link = it.getAttribute('href');
  var pageTitle = link;
  // console.log("clicked " + link);
  link = "../includes/pages/" + link + ".php";
  var xhttp = new XMLHttpRequest();
  var response = "";
  xhttp.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
        response = this.responseText;
        // console.log(response);
        // return response;
        insertPage(response, pageTitle);
        currentLink.classList.remove('current');
        it.classList.add('current');
        currentLink=it;
      }
    };
    xhttp.open("GET",link,true);
    xhttp.send();
  }
  catch(e){
    console.log("Error occured: " + e);
  }
  }

var mainNavLinks = document.querySelectorAll('#mainNav ul li a');
var x=0;
while(mainNavLinks[x]!=null){
  if(mainNavLinks[x].classList.contains('current')){
    currentLink = mainNavLinks[x];
  }
mainNavLinks[x].addEventListener('click',pageSwap,false);
x++;
}
})();
