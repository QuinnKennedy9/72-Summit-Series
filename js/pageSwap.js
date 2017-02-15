(function(){
  var currentLink = null;
  var previousPage = null;
  function insertPage(page, pageTitle){
    document.querySelector('main').innerHTML = page;
    // console.log(link);
    previousPage = window.location.pathname;
    window.history.pushState({"page":pageTitle},"page", pageTitle);
    //add conditonal to append home on index page
    // window.history.pushState("string","page", previousPage);
  }
  // window.onpopstate = function(){
  //     pageSwap(previousPage);
  // }
function pageSwapEvent(event){
  event.preventDefault();
  var it = event.currentTarget;
  var link = it.getAttribute('href');
  pageSwap(link);
  if(currentLink!=null){
    currentLink.classList.remove('current');
  }
  it.classList.add('current');
  currentLink=it;
}
function pageSwap(link){
  try{
  document.querySelector('main').innerHTML = "";
  document.querySelector('#loading').style.display ="block";
  document.querySelector('#mainNav ul').classList.add('hidden');
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
        document.querySelector('#loading').style.display ="none";
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
mainNavLinks[x].addEventListener('click',pageSwapEvent,false);
x++;
}
window.addEventListener('popstate', function(event) {
    if (event.state) {
      var backURL = window.location.pathname.replace("/","");
        // alert(backURL);
        window.location = backURL;
        // pageSwap(backURL);
    }
}, false);
})();
